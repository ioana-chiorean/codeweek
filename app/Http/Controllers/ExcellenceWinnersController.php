<?php

namespace App\Http\Controllers;

use App\CertificateExcellence;
use App\Excellence;
use App\Helpers\ExcellenceWinnersHelper;
use App\Queries\ExcellenceQuery;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;


class ExcellenceWinnersController extends Controller
{

    public function list($edition = 2019, Request $request)
    {

        $ttl = 1;
        //$ttl = 60 * 60 * 24;

//        dd($request->all());
        if ($request->input('clear_cache')) {
            Log::info ("cache cleaned");
            Cache::forget('details');
        }

        $details = Cache::remember('details', $ttl, function () use ($edition) {
            Log::info('query without cache');
            $codes = ExcellenceWinnersHelper::getWinnerCodes($edition);
            $details =  ExcellenceWinnersHelper::getDetailsByCodeweek4All($codes->toArray());
            $full = ExcellenceWinnersHelper::tagSuperWinners($details);
            return $full;
            //return $details;
        });

        if ($request->input('participants')) {
            if ($request->input('participants') == -1) {
                $details = $details->sortByDesc('total_participants');
            } else {
                $details = $details->sortBy('total_participants');
            }
        }

        if ($request->input('teachers')) {
            if ($request->input('teachers') == -1) {
                $details = $details->sortByDesc('total_creators');
            } else {
                $details = $details->sortBy('total_creators');
            }
        }

        if ($request->input('countries')) {
            if ($request->input('countries') == -1) {
                $details = $details->sortByDesc('total_countries');
            } else {
                $details = $details->sortBy('total_countries');
            }
        }

        if ($request->input('activities')) {
            if ($request->input('activities') == -1) {
                $details = $details->sortByDesc('total_activities');
            } else {
                $details = $details->sortBy('total_activities');
            }
        }



        return view('excellence.winners', compact(['edition', 'details']));
        //return view('excellence.winners',compact(['edition']));

    }


}
