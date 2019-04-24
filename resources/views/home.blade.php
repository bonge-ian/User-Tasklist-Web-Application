@extends('layouts.app')

@section('content')
    {{-- markup --}}
    <section class="grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="small-12 medium-10 cell">
                <div class="card">
                    <div class="card-divider align-center">
                        {{ __('Dashboard') }}
                    </div>
                    <div class="card-section">
                        <div class="grid-x grid-padding-x align-center">
                            <div class="small-10 cell">
                                <p class="text-center">Welcome {{ Auth::user()->name }}. You are now logged in</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
