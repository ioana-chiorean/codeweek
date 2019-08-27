@extends('layout.base')

@section('content')

    <section id="codeweek-profile-page" class="codeweek-page">

        <section class="codeweek-content-wrapper" style="margin-top:0;">

            <avatar-form :user="{{ $profileUser }}"></avatar-form>

                <form method="POST" action="{{ route('user.update') }}" class="codeweek-form">

                    <div class="codeweek-form-inner-container">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}

                        <div class="codeweek-form-field-wrapper">
                            <div class="codeweek-form-field">
                                <label for="id_title">Email</label>
                                <input id="email" placeholder="Email" type="email"
                                       value="{{auth()->user()->email}}" readonly>
                            </div>
                            <div class="errors">
                                @component('components.validation-errors', ['field'=>'title'])@endcomponent
                            </div>
                        </div>

                        <div class="codeweek-form-field-wrapper">
                            <div class="codeweek-form-field">
                                <label for="id_title">Display Email</label>
                                <input id="email_display" placeholder="Display Email" name="email_display" type="email"
                                       value="{{auth()->user()->email_display}}">
                            </div>
                            <div class="errors">
                                @component('components.validation-errors', ['field'=>'title'])@endcomponent
                            </div>
                        </div>

                        <div class="codeweek-form-field-wrapper">
                            <div class="codeweek-form-field">
                                <label for="id_title">First Name</label>
                                <input id="firstname" placeholder="First Name" name="firstname" type="text"
                                       value="{{auth()->user()->firstname}}">
                            </div>
                            <div class="errors">
                                @component('components.validation-errors', ['field'=>'title'])@endcomponent
                            </div>
                        </div>

                        <div class="codeweek-form-field-wrapper">
                            <div class="codeweek-form-field">
                                <label for="id_title">Last Name</label>
                                <input id="lastname" placeholder="Last Name" name="lastname" type="text"
                                       value="{{auth()->user()->lastname}}">
                            </div>
                            <div class="errors">
                                @component('components.validation-errors', ['field'=>'title'])@endcomponent
                            </div>
                        </div>

                        <div class="codeweek-form-field-wrapper">
                            <div class="codeweek-form-field">
                                <label for="id_title">Twitter</label>
                                <input id="twitter" placeholder="Twitter" name="twitter" type="text"
                                       value="{{auth()->user()->twitter}}">
                            </div>
                            <div class="errors">
                                @component('components.validation-errors', ['field'=>'twitter'])@endcomponent
                            </div>
                        </div>

                        <div class="codeweek-form-field-wrapper">
                            <div class="codeweek-form-field">
                                <label for="id_title">Your Website</label>
                                <input id="website" placeholder="Your Website" name="website" type="text"
                                       value="{{auth()->user()->website}}">
                            </div>
                            <div class="errors">
                                @component('components.validation-errors', ['field'=>'website'])@endcomponent
                            </div>
                        </div>

                        <div class="codeweek-form-field-wrapper">
                            <div class="codeweek-form-field align-flex-start">
                                <label for="id_description">Biography</label>
                                <textarea cols="40" id="bio" name="bio"
                                          placeholder="Biography" rows="10">{{auth()->user()->bio}}</textarea>
                            </div>
                            <div class="errors">
                                @component('components.validation-errors', ['field'=>'bio'])@endcomponent
                            </div>
                        </div>

                        <div class="codeweek-form-field-wrapper">
                            <div class="codeweek-form-field">
                                <label for="id_country">* @lang('event.country')</label>
                                <select id="id_country" name="country_iso" class="codeweek-input-select">
                                    <option value=""></option>
                                    @foreach ($active_countries as $country)
                                        <option value="{{$country->name}}" {{optional(auth()->user()->country)->iso == $country->iso ? 'selected' : ''}}>@lang('countries.'. $country->name)</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="errors">
                                @component('components.validation-errors', ['field'=>'country'])@endcomponent
                            </div>
                        </div>

                        <div class="codeweek-form-field-privacy">
                            <label>
                                <input id="checkPrivacy" name="privacy" type="checkbox" {{ auth()->user()->privacy === 1 ? 'checked="checked"' : '' }}>
                                @lang('event.privacy')
                                <a href="/privacy" target="_blank"><i class="fa fa-external-link" style="color: blue;"></i></a>
                            </label>
                            @component('components.validation-errors', ['field'=>'privacy'])
                            @endcomponent
                        </div>

                        <div class="codeweek-form-button-container">
                            <div class="codeweek-button">
                                <input type="submit" value="Update">
                            </div>
                        </div>

                    </div>

                </form>

        </section>

    </section>

@endsection