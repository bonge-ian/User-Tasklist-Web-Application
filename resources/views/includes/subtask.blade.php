{{-- Subtask module --}}
<ul class="accordion" data-responsive-accordion-tabs="accordion  large-accordion" data-accordion data-allow-all-closed="true">
    <li class="accordion-item " data-accordion-item>
        <a href="#" class="accordion-title">Add a subtask</a>
        <div class="accordion-content" data-tab-content>
            <div class="grid-x grid-padding-x align-center">
                <div class="small-12 cell medium-11">
                    @if ($task->subTasks->count())
                        @foreach ($task->subTasks as $subtask)
                             {{-- Mark subtask as complete/incomplete form  --}}
                            <form action="{{ route('subtasks.update', $subtask->id) }}" method="post">
                            @csrf
                            @method('PATCH')
                                <div class="grid-x align-center">
                                   
                                    <div class="small-1 cell">
                                        {{-- Submit form if checkbox is checked --}}
                                        <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $subtask->completed ? 'checked' : ''}}>
                                    </div>
                                    <div class="small-10 cell {{ $subtask->completed ? 'text-line-through' : ''  }}">
                                        {{ $subtask->sub_task}}
                                    </div>
                              
                                    .
                                </div>
                            </form>
                        @endforeach
                        
                    @endif
                    
                </div>
            </div>
            <div class="grid-x grid-padding-x align-center">
                <div class="medium-10 small-12 cell">
                    {{-- Add subtask form --}}
                    <form action="{{ route('subtasks.add', $task->id) }}" method="post">
                        @csrf
                        <input type="text" name="sub_task" id="sub_task" class="radius">
                        <button type="submit" class="button secondary radius">Add Sub Task</button>
                    </form>
                </div>
            </div>
        </div>
    </li>
</ul>
