{{-- Create Task Form --}}
<div class="reveal" id="task-modal" data-reveal data-close-on-click="true" data-animation-in="hinge-in-from-top" data-animation-out="hinge-out-from-bottom">
    <div class="margin-top-2"></div>
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
    <div class="margin-top-2"></div>
</div>
