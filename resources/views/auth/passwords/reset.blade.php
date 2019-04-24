@extends('layouts.app')

@section('title', 'Reset Password')

@section('content')
    {{-- markup --}}
    <section class="grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="small-12 medium-10 cell">
                <div class="status_message">
                    @if (session('status'))
                        <div class="callout radius shadow">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="card">
                    <div class="card-divider align-center">
                        <h3>{{ __('Reset Password') }}</h3>
                    </div>
                    <div class="card-section">
                        <div class="grid-x align-center">
                            <div class="small-10 cell">
                                <form class="password-reset-form" method="POST" action="{{ route('password.request') }}">

                                    {{ csrf_field() }}

                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="email">
                                        <label for="email">{{ __('E-Mail Address') }}</label>

                                        <input id="email" type="email" name="email" value="{{ old('email') }}" aria-describedby="emailHelpText" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-text" id="emailHelpText">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="password">
                                        <label for="password">Password</label>

                                        <input id="password" type="password" name="password" aria-describedby="passwordHelpText" required>

                                        @if ($errors->has('password'))
                                            <span class="help-text" id="passwordHelpText">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="password">
                                        <label for="password-confirm">{{ __('Confirm Password') }}</label>

                                        <input id="password-confirm" type="password" name="password_confirmation" aria-describedby="passwordConfirmHelpText" required>

                                        @if ($errors->has('password'))
                                            <span class="help-text" id="passwordConfirmHelpText">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="reset-button">
                                        <button type="submit" class="button">
                                            {{ __('Reset Password') }}
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
