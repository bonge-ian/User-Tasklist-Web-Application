@extends('layouts.app')

@section('title', 'View')

@section('content')

    {{-- markup --}}
    <section class="grid-container" id="view">
        <div class="grid-x grid-padding-x  align-center-middle" style="height:100%;">
            <div class="small-12 medium-10 cell">
                {{-- Alerts script --}}
                @include('includes.alerts')

                @if ($tasks->count())

                    {{-- Create task script --}}
                    @include('app.create')

                    <ul class="accordion" data-accordion data-accordion data-allow-all-closed="true">

                        @foreach ($tasks as $task)
                        <li class="accordion-item {{ ($loop->first) ? 'is-active' : ''  }} " data-accordion-item>
                            <!-- Accordion tab title -->
                            <a href="#" class="accordion-title text-center text-capitalize">{{$task->title}}</a>
                            <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
                            <div class="accordion-content" data-tab-content>
                                <div class="grid-container">
                                    <div class="grid-x align-center">
                                        <div class="small-12 cell">
                                            <p class="text-center">{{$task->description}}</p>
                                           <div class="margin bottom-2"></div>
                                            <div class="grid-x grid-padding-x align-center-middle" >
                                                <div class="small-12 medium-9 cell">

                                                    {{-- Subtask Script  --}}
                                                    @include('includes.subtask')
                                                    
                                                    <div class="margin-bottom-1"></div>
                                                </div>
                                            </div>
                                            <form action="{{ route('tasks.destroy', $task->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="float-center alert radius button">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </li>
                    @endforeach

                </ul>
                    <button data-toggle="task-modal" class="success button radius">Add Another Task</button>
                @else
                    <div class="grid-container">
                    
                        {{-- Create task script --}}
                        @include('app.create')

                        <div class="warning callout radius">
                            <div class="grid-x grid-padding-x align-center">
                                <div class="small-10 cell">
                                    <p class="text-center">Sorry, you don&rsquo;t have any tasks at the moment</p>
                                    <p class="text-center">Try adding a task <a data-toggle="task-modal" class="font-bold" href="#">HERE</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

@endsection
