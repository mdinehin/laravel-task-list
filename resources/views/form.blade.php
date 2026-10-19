@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Create Task')

@section('styles')
    <style>
        .error-message {
            color: red;
        }
    </style>
@endsection

@section('content')
    <form method="POST" action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div class="text-paragraph">
            <label for="title">Title:</label>
            <br />
            <input class="form-field" text="text" name="title" id="title"
                value="{{ $task->title ?? old('title') }}" />
            @error('title')
                <p class="mt-1 error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="text-paragraph">
            <label for="description">Description:</label>
            <br />
            <textarea class="form-field" text="text" name="description" id="description" rows="5"
                >{{ $task->description ?? old('description') }}</textarea>
            @error('description')
                <p class="mt-1 error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="text-paragraph">
            <label for="long_description">Long description (optional):</label>
            <br />
            <textarea class="form-field" text="text" name="long_description" id="long_description" rows="10"
                >{{ $task->long_description ?? old('long_description') }}</textarea>
            @error('long_description')
                <p class="mt-1 error-message">{{ $message }}</p>
            @enderror
        </div>

        {{-- Go backwards link, Save/Delete button --}}
        <ul class="mt-4 button-list-wrapper">
            <li>
                @isset($task)
                    <a href="{{ route('tasks.show', ['task' => $task]) }}" class="button-appearance">
                        <span>Back</span>
                    </a>
                @endisset
                <button type="submit" class="button-appearance">
                    @isset($task)
                        <span>Save</span>
                    @else
                        <span>Create</span>
                    @endisset
                </button>
            </li>
        </ul>
    </form>

    {{-- Panel footer --}}
    <p class="footer-paragraph">
        Back to
        <a href="{{ route('tasks.index') }}" class="link-appearance">
            <span>task list</span>
        </a>
    </p>
@endsection
