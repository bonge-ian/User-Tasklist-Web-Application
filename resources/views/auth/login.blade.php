@extends('layouts.app')

@section('title', 'Login')

@section('content')
    {{-- markup --}}
    <section class="grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="small-12 medium-10 cell">
                <div class="card">
                    <div class="card-divider align-center">
                        <h3>Login</h3>
                    </div>
                    <div class="card-section">
                        <div class="grid-x align-center">
                            <div class="small-10 cell">
                                <form class="login-form" method="POST" action="{{ route('login') }}">

                                    {{ csrf_field() }}

                                    <div class="email">
                                        <label for="email">{{ __('E-Mail Address') }}</label>

                                        <input id="email" class="radius" type="email" name="email" value="{{ old('email') }}" aria-errormessage="emailErrorText" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="form-error" id="emailErrorText">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="password">
                                        <label for="password">{{ __('Password') }}</label>

                                        <input id="password" class="radius" type="password" name="password" aria-errormessage="passwordHelpText" required>

                                        @if ($errors->has('password'))
                                            <span class="help-text" id="passwordHelpText">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="radius" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                        </label>
                                    </div>

                                    <div class="button-plus-link">
                                        <button type="submit" class="button radius">
                                            {{ __('Login') }}
                                        </button>

                                        <a href="{{ route('password.request') }}">
                                            &nbsp;
                                            {{ __('Forgot Your Password?') }}
                                        </a>
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
