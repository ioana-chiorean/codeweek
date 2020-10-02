<?php

namespace App\Http\Controllers;

use App\Country;
use App\Event;
use App\Filters\EventFilters;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Http\Transformers\EventTransformer;
use Illuminate\Support\Facades\Log;
use stdClass;

class SearchController extends Controller
{

    protected $eventTransformer;

    /**
     * EventController constructor.
     * @param $eventTransformer
     */
    public function __construct(EventTransformer $eventTransformer)
    {
        $this->eventTransformer = $eventTransformer;
    }

    public function search(Request $request)
    {


        $query = $request->input('q', "");
        $selected_year = $request->input('year', Carbon::now()->year);

        $country_iso = $request->input('country_iso', null);
        $selected_country = array();

        if (!is_null($country_iso)) {
            $selected_country[] = Country::where('iso', $country_iso)->first();
        }

        $current_year = Carbon::now()->year;
        $years = array();
        for ($year = $current_year; $year >= 2014; $year--) {
            $years[] = $year;
        }


        return view('event.search', compact(['query', 'years', 'selected_country', 'selected_year']));
    }

    public function searchPOST(EventFilters $filters, Request $request)
    {
        $events = $this->getEvents($filters);

        //Log::info($request->input('page'));
        if ($request->input('page')) {
            $result = [$events];
        } else {
            Log::info('no page');
            $eventsMap = $this->getAllEventsToMap($filters);
            $result = [$events, $eventsMap];
        }

        return $result;
    }

    protected function getEvents(EventFilters $filters)
    {

        $events = Event::where('status', 'like', 'APPROVED')
            ->filter($filters)
            ->orderBy('start_date')
            ->get()
            ->groupBy(function ($event) {
                if ($event->start_date <= Carbon::today()) {
                    return 'past';
                }
                return 'future';
            });

        if (is_null($events->get('future')) || is_null($events->get('past'))) return $events->flatten()->paginate(12);

        return $events->get('future')->merge($events->get('past'))->paginate(12);


    }

    protected function getAllEventsToMap(EventFilters $filters)
    {


        $flattened = Arr::flatten($filters->getFilters());

        $composed_key = '';

        foreach ($flattened as $value) {
            $composed_key .= $value . ',';
        };


        $value = Cache::get($composed_key, function () use ($composed_key, $filters) {
            Log::info("Building cache [{$composed_key}]");
            $events = Event::where('status', 'like', 'APPROVED')
                ->filter($filters)
                ->get();

            $events = $this->eventTransformer->transformCollection($events);

            $events = $events->groupBy('country');

            Cache::put($composed_key, $events, 5 * 60);

            return $events;
        });

        Log::info("Serving from cache [{$composed_key}]");

        return $value;


    }
}
