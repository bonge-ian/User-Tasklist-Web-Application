@extends('layouts.app')

@section('title', 'Register')

@section('content')
    {{-- markup --}}
    <section class="grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="small-12 medium-10 cell">
                <div class="card">
                    <div class="card-divider align-center">
                       <h3>Register</h3>
                    </div>
                    <div class="card-section">
                        <div class="grid-x align-center">
                            <div class="small-10 cell">
                                <form class="register-form" method="POST" action="{{ route('register') }}">

                                    {{ csrf_field() }}

                                    <div class="name">
                                        <label for="email">{{ __('Name') }}</label>

                                        <input id="name" class="radius" type="text" class="form-control" name="name" value="{{ old('name') }}" aria-errormessage="nameHelpText" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="form-error" id="nameHelpText">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="email">
                                        <label for="email">{{ __('E-Mail Address') }}</label>

                                        <input id="email" class="radius" type="email" name="email" value="{{ old('email') }}" aria-errormessage="emailHelpText" required>

                                        @if ($errors->has('email'))
                                            <span class="form-error" id="emailHelpText">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="password">
                                        <label for="password">{{ __('Password') }}</label>

                                        <input id="password" class="radius" type="password" name="password" aria-errormessage="passwordHelpText" required>

                                        @if ($errors->has('password'))
                                            <span class="form-error" id="passwordHelpText">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="password-confirm">
                                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" class="radius" type="password" name="password_confirmation" data-equalto="password" required>
                                    </div>

                                    <div class="register_button">
                                        <button type="submit" class="button radius">
                                            {{ __('Register') }}
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
