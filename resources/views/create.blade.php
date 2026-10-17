@extends('layouts.app')

@section('title', 'Create Task')

@section('styles')
    <style>
        .error-message {
            color: red;
        }
    </style>
@endsection

@section('content')
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <div class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">
            <label for="title">Title:</label>
            <br />
            <input class="w-full border dark:border-[#3E3E3A]" text="text" name="title" id="title" />
            @error('title')
                <p class="mt-1 error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">
            <label for="description">Description:</label>
            <br />
            <textarea class="w-full border dark:border-[#3E3E3A]" text="text" name="description" id="description" rows="5"></textarea>
            @error('description')
                <p class="mt-1 error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">
            <label for="long_description">Long description:</label>
            <br />
            <textarea class="w-full border dark:border-[#3E3E3A]" text="text" name="long_description" id="long_description" rows="10"></textarea>
            @error('long_description')
                <p class="mt-1 error-message">{{ $message }}</p>
            @enderror
        </div>

        {{-- Create button --}}
        <ul class="mt-4 flex gap-3 text-sm leading-normal">
            <li>
                <button type="submit" class="inline-block dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white hover:bg-black hover:border-black px-5 py-1.5 bg-[#1b1b18] rounded-sm border border-black text-white text-sm leading-normal">
                    <span>Create</span>
                </button>
            </li>
        </ul>
    </form>

    {{-- Panel footer --}}
    <p class="mt-6 lg:mt-10 text-[#706f6c] dark:text-[#A1A09A]">
        Back to
        <a href="{{ route('tasks.index') }}" class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-[#f53003] dark:text-[#FF4433] ml-1">
            <span>task list</span>
        </a>
    </p>
@endsection
