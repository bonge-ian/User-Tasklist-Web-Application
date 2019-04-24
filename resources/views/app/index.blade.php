@extends('layouts.app')

@section('title', 'Home')

@section('content')
    {{-- markup --}}
    <section class="grid-container">
        <div class="grid-x grid-padding-x grid-y grid-margin-y  align-center-middle" style="height: 100vh;">
            <div class="small-12 medium-10 cell">
                <div class="grid-x grid-padding-x align-center">
                    <div class="small-10 medium-10  cell">

                        {{-- include alerts file  --}}
                        @include('includes.alerts')

                        <h2 class="text-center font-bold">Welcome <small>{{ Auth::user()->name }}</small></h2>
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus sint necessitatibus maiores, in magni consequuntur eveniet recusandae officiis magnam, modi earum eos laboriosam nemo enim tenetur porro illum ipsum, minus incidunt quas dolorem quia iure iste fugiat. Possimus saepe optio officia eveniet itaque nulla, pariatur quam sint minus aperiam. Voluptates quod iusto aliquid quae, nobis sapiente hic officia accusantium fuga soluta ipsam pariatur perferendis distinctio mollitia natus perspiciatis incidunt quaerat tempora corporis vero. Eligendi expedita aliquid facere dolore culpa delectus.</p>
                        <div class="button-group align-center">
                            <button data-toggle="task-modal" class="add-btn button radius">Add Task</button>
                            <a href="{{ route('tasks.view') }}" class="view-btn button radius">View Tasks</a>
                        </div>

                       {{--  reveal --}}
                        <div class="reveal" id="task-modal" data-reveal data-close-on-click="true" data-animation-in="hinge-in-from-top" data-animation-out="hinge-out-from-bottom">
                            <div class="grid-container">
                                <div class="grid-x grid-padding-x align-center-middle" style="height: 50vh;">
                                   <div class="small-12 cell">
                                        <form action="{{route('tasks.store') }}" method="post">
                                            @csrf
                                            <label for="title" class="lead font-bold h6">Task Title</label>
                                            <input type="text" name="title" id="title" placeholder="My Task." class="radius">
                                            <label for="description " class="lead font-bold h6">Description</label>
                                            <textarea name="description" id="description" rows="5" placeholder="Type the task description here" class="radius"></textarea>
                                            <button type="submit" class="button float-center  radius">Submit</button>
                                        </form>
                                        <button class="close-button" data-close aria-label="Close reveal" type="button">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                   </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
