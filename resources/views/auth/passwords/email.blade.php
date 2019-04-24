@extends('layouts.app')

@section('title', 'Reset Password')

@section('content')
    {{-- markup --}}
    <section class="grid-x grid-padding-x align-center">
        <div class="small-12 medium-10 cell">
            <div class="status_message">
                @if (session('status'))
                    <div class="callout radius shadow">
                        {{ session('status') }}
                    </div>
                 @endif
            </div>
            <div class="card align-center">
                <div class="card-divider align-center">
                     <h3>{{ __('Reset Password') }}</h3>
                </div>
                <div class="card-section">
                    <div class="grid-x align-center">
                        <div class="small-10 medium-10 cell">
                            

                            <form class="forgot-password-form" method="POST" action="{{ route('password.email') }}">

                                {{ csrf_field() }}

                                <div class="email">
                                    <label for="email">{{ __('E-Mail Address') }}</label>

                                    <input id="email" type="email" name="email" value="{{ old('email') }}" aria-describedby="emailHelpText" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-text" id="emailHelpText">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="send-button">
                                    <button type="submit" class="button">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
