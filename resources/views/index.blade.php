@extends('layouts.app')

@section('title', 'Task List')

@section('content')
    {{-- Create task link --}}
    <ul class="mt-2 mb-2 flex gap-3 text-sm leading-normal">
        <li>
            <a href="{{ route('tasks.create') }}" class="button-appearance">
                <span>Create task</span>
            </a>
        </li>
    </ul>

    @if($tasks->isNotEmpty())
        <p class="text-paragraph">With so many options available to you,<br /> we suggest you start with the following:</p>
    @endif

    {{-- Pagination links --}}
    @if($tasks->isNotEmpty())
        <div class="my-6">
            {{ $tasks->links() }}
        </div>
    @endif

    {{-- Task list --}}
    <ul class="list-wrapper">
        @forelse($tasks as $task)
            <li class="list-item">
                <span class="bullet-wrapper">
                    <span class="bullet-body">
                        <span class="bullet-inner"></span>
                    </span>
                </span>
                <span>
                    <a href="{{ route('tasks.show', ['task' => $task]) }}" class="link-appearance">
                        <span
                            @class(['line-through' => $task->completed])
                        >{{ $task->title }}</span>
                    </a>
                    <br />
                    Created: {{ $task->created_at->diffForHumans() }}
                    <br />
                    Completed: {{ $task->completed ? 'Yes' : 'No' }}
                </span>
            </li>
        @empty
            <li class="list-item">
                <span>No tasks to display.</span>
            </li>
        @endforelse
    </ul>

    {{-- Pagination links --}}
    @if($tasks->isNotEmpty())
        <div class="mt-6">
            {{ $tasks->links() }}
        </div>
    @endif
@endsection
