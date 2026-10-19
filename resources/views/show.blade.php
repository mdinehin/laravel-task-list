@extends('layouts.app')

@section('title', 'Task View')

@section('content')
    <p class="text-paragraph">
        Title: {{ $task->title }}
    </p>
    <p class="text-paragraph">
        Description: {{ $task->description }}
    </p>
    <p class="text-paragraph">
        Created: {{ $task->created_at->diffForHumans() }}
    </p>
    <p class="text-paragraph">
        Updated: {{ $task->updated_at->diffForHumans() }}
    </p>
    <p class="text-paragraph">
        Completed: {{ $task->completed ? 'Yes' : 'No' }}
    </p>

    @if($task->long_description)
        <p class="text-paragraph">
            Long description:
        </p>
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
    @endif

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
