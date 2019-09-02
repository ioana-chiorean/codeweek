@extends('layout.base')

@section('content')

    <section id="codeweek-show-event-page" class="codeweek-page">

        @can('approve', $event)
            @if($event->certificate_url)
                <reported-event :event="{{$event}}"></reported-event>
            @else
                <moderate-event :event="{{$event}}"></moderate-event>
            @endif
        @endcan

        @can('report', $event)
            <report-event :event="{{$event}}"></report-event>
        @endcan

        @if (Auth::check())
            @if($event->creator_id === auth()->user()->id && is_null($event->reported_at))
                <a href="{{route('edit_event',$event->id)}}" class="btn pull-right edit-event-btn">
                    <i class="fa fa-pencil-square-o"></i>@lang('eventdetails.edit')</a>

                @if($event->status === 'PENDING')
                    <div class="alert alert-warning">
                        <strong>@lang('eventdetails.note')</strong>@lang('eventdetails.pending_warning')
                        <a
                                href="{{route('ambassadors')}}">@lang('eventdetails.pending_link')</a>.
                    </div>
                @endif

            @endif
        @endif

        <section class="codeweek-banner show-event">
            <div class="text">
                <h1>{{ $event->title }}</h1>
            </div>
            <div class="image">
                <img src="{{$event->picture_path()}}"/>
            </div>
        </section>

        <section class="codeweek-content-wrapper">

            <div class="codeweek-form-inner-two-columns">

                <div class="codeweek-form-inner-container">

                    <div class="codeweek-display-field">
                        <h3>@lang('eventdetails.organised_by')</h3>
                        <p>
                            {{ $event->organizer }}
                            @can('approve', $event)
                            <a href="mailto:{{$event->user_email}}">{{$event->user_email}}</a>
                            @endcan
                        </p>
                    </div>

                    @if($event->contact_person)
                        <div class="codeweek-display-field">
                            <h3>@lang('eventdetails.contact_email')</h3>
                            <p><a href="mailto:{{ $event->contact_person }}">{{ $event->contact_person }}</a></p>
                        </div>
                    @endif

                    <div class="codeweek-display-field">
                        <h3>@lang('eventdetails.happening_at')</h3>
                        <p>{{ $event->location }}</p>
                    </div>

                    <div class="codeweek-display-field">
                        <div>
                            <strong>@lang('eventdetails.from')</strong> {{Carbon\Carbon::parse($event->start_date)->format('l jS \o\f F Y \a\t H:i')}}
                            <strong>@lang('eventdetails.to')</strong> {{Carbon\Carbon::parse($event->end_date)->format('l jS \o\f F Y \a\t H:i')}}
                        </div>
                    </div>

                    <div class="codeweek-display-field">
                        <h3>@lang('eventdetails.description')</h3>
                        <p>{{ $event->description }}</p>
                    </div>

                    @if($event->event_url)
                        <div class="codeweek-display-field">
                            <h3>@lang('eventdetails.more_info')</h3>
                            <p><a href="{{ $event->event_url }}" target="_blank">{{ $event->event_url }}</a></p>
                        </div>
                    @endif


                    @if($event->audiences->count())
                        <div class="codeweek-display-field" style="margin-bottom: 0;">
                            <h3>@lang('eventdetails.audience')</h3>
                            <div class="itens">
                                <ul class="event-list">
                                    @foreach($event->audiences as $audience)
                                        <li><div class="label label-info">@lang('event.audience.'.$audience->name)</div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    @if($event->themes->count())
                        <div class="codeweek-display-field" style="margin-bottom: 0;">
                            <h3>@lang('eventdetails.themes')</h3>
                            <div class="itens">
                                <ul class="event-list">
                                    @foreach($event->themes as $theme)
                                        <li><div class="label label-info">@lang('event.theme.'.$theme->name)</div></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    @if($event->tags->count())
                        <div class="codeweek-display-field" style="margin-bottom: 0;">
                            <h3>@lang('eventdetails.tags')</h3>
                            <div class="itens">
                                <ul class="event-list">
                                    @foreach($event->tags as $tag)
                                        <li><div class="label label-info">{{ $tag->name }}</div></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    @can('edit', $event)
                        @if($event->codeweek_for_all_participation_code)
                            <div class="codeweek-display-field">
                                <h3>@lang('event.codeweek_for_all_participation_code.title')</h3>
                                <p>{{ $event->codeweek_for_all_participation_code }}</p>
                            </div>
                        @endif
                    @endcan


                    <div class="codeweek-display-field">
                        <h3>@lang('eventdetails.share')</h3>
                        <div class="share-event-wrapper">
                            <div class="fb-like"
                                 data-href="{{$event->path()}}" data-layout="button_count" data-action="recommend"
                                 data-show-faces="false" data-share="true"></div>

                            <a href="https://twitter.com/share" class="twitter-share-button"
                               data-url="http://events.codeweek.eu{{$event->path()}}"
                               data-text="Check out {{ $event->title }} at" data-via="CodeWeekEU"
                               data-hashtags="codeEU">Tweet</a>

                            <div class="g-plusone" data-size="medium" data-href="http://events.codeweek.eu"></div>
                            <a class="fa fa-envelope" title='@lang('eventdetails.email.tooltip')'
                               href="mailto:?subject=@lang('eventdetails.email.subject')&amp;body=@lang('eventdetails.email.body_1'){{ $event->title }}@lang('eventdetails.email.body_2'){{env('APP_URL')}}{{$event->path()}}"></a>
                        </div>
                    </div>

                </div>

                <div class="codeweek-form-inner-container" style="align-items: flex-end;">
                    @component('components.calendar',['event'=>$event])
                    @endcomponent
                </div>

            </div>

            <div id="events-show-map" style="margin-bottom: 20px;"></div>

            <h2 style="margin-top: 40px; margin-bottom: 30px;">@lang('eventdetails.nearby_upcoming_events')</h2>
            <div class="codeweek-grid-layout">
                @foreach($event->getClosest() as $evt)
                    @component('event.event_tile', ['event'=>$evt])
                    @endcomponent
                @endforeach
            </div>

        </section>

    </section>

@endsection

@push('scripts')

    <script>
        window.event_details = {!! json_encode($event->getJavascriptData()) !!};
        window.event_coordinates = event_details.geoposition.split(",");
    </script>

    <script defer src="//europa.eu/webtools/load.js" type="text/javascript"></script>
    <link href="{{asset('css/MarkerCluster.css')}}" media="screen" rel="stylesheet"/>
    <link href="{{asset('css/MarkerCluster.Default.css')}}" media="screen" rel="stylesheet"/>
    <script type="application/json">
        {
            "service" : "map",
            "version" : "2.0",
            "renderTo" : "events-show-map",
            "custom": ["/js/hideMenuMap.js","/js/leaflet.markercluster.js"]
        }

    </script>
@endpush


<script>
    import ReportedEvent from "../../assets/js/components/ReportedEvent";

    export default {
        components: {ReportedEvent}
    }
</script>