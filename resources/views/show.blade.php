@extends('layouts.app')

@section('title', 'Task View')

@section('content')
    <dl class="space-y-2">
        <div>
            <dt class="font-semibold inline">Title:</dt>
            <dd class="inline">{{ $task->title }}</dd>
        </div>
        <div>
            <dt class="font-semibold inline">Description:</dt>
            <dd class="inline">{{ $task->description }}</dd>
        </div>
        <div>
            <dt class="font-semibold inline">Created:</dt>
            <dd class="inline">{{ $task->created_at->diffForHumans() }}</dd>
        </div>
        <div>
            <dt class="font-semibold inline">Updated:</dt>
            <dd class="inline">{{ $task->updated_at->diffForHumans() }}</dd>
        </div>
        <div>
            <dt class="font-semibold inline">Completed:</dt>
            <dd class="inline">{{ $task->completed ? 'Yes' : 'No' }}</dd>
        </div>
        @if($task->long_description)
            <div>
                <dt class="font-semibold">Long description:</dt>
                <dd>
                    <ul class="list-wrapper">
                        <li class="list-item">
                            <span class="bullet-wrapper">
                                <span class="bullet-body">
                                    <span class="bullet-inner"></span>
                                </span>
                            </span>
                            <span>{{ $task->long_description }}</span>
                        </li>
                    </ul>
                </dd>
            </div>
        @endif
    </dl>

    {{-- Toggle button --}}
    <div class="mt-6 mb-4">
        <form method="POST" action="{{ route('tasks.toggle-complete', ['task' => $task]) }}" class="inline-block">
            @csrf
            @method('PUT')
            <button type="submit" class="button-appearance">
                <span>Mark as {{ $task->completed ? 'not completed' : 'completed' }}</span>
            </button>
        </form>
    </div>

    {{-- Edit link, Delete button --}}
    <ul class="button-list-wrapper">
        <li>
            <a href="{{ route('tasks.edit', ['task' => $task]) }}" class="button-appearance">
                <span>Edit</span>
            </a>
        </li>
        <li>
            <form method="POST" action="{{ route('tasks.destroy', ['task' => $task]) }}" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="button-appearance">
                    <span>Delete</span>
                </button>
            </form>
        </li>
    </ul>

    {{-- Panel footer --}}
    <p class="footer-paragraph">
        Back to
        <a href="{{ route('tasks.index') }}" class="link-appearance">
            <span>task list</span>
        </a>
    </p>
@endsection
