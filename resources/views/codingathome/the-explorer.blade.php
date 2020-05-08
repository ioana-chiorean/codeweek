@extends('layout.base')

@section('content')

    <section id="codeweek-training-page" class="codeweek-page">

        @include('codingathome.banner')

        <section class="codeweek-content-wrapper">

            <section class="codeweek-content-wrapper-inside">

                <h1>@lang('coding-at-home.explorer.title')</h1>

                <div style="margin-top:10px;margin-bottom:10px">
                    @lang('coding-at-home.explorer.text')<br/><br/>
                    @lang('coding-at-home.explorer.material')
                </div>


            </section>

            @include('static.youtube', ['video_id' => 'AJFjKHmhYkk'])

            <section class="codeweek-content-wrapper-inside">

                <h2>@lang('coding-at-home.explorer.questions.title')</h2>


                <p>
                    Q1. @lang('coding-at-home.explorer.questions.content.1')<br/><br/>
                    Q2. @lang('coding-at-home.explorer.questions.content.2')
                </p>


                <p>
                    @lang('coding-at-home.texts.3')
                </p>


            </section>

        </section>

    </section>

@endsection