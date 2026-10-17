@extends('layouts.app')

@section('title', 'Task View')

@section('content')
    <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">
        Title: {{ $task->title }}<br />
        Description: {{ $task->description }}<br />
        Created: {{ $task->created_at }}<br />
        Updated: {{ $task->updated_at }}
    </p>

    @if ($task->long_description)
        <ul class="flex flex-col mb-4 lg:mb-6">
            <li class="flex items-center gap-4 py-2 relative before:top-1/2 before:bottom-0 before:left-[0.4rem] before:absolute">
                <span class="relative py-1 bg-white dark:bg-[#161615]">
                    <span class="flex items-center justify-center rounded-full bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-[#3E3E3A] border-[#e3e3e0]">
                        <span class="rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] w-1.5 h-1.5"></span>
                    </span>
                </span>
                <span>
                    {{ $task->long_description }}
                </span>
            </li>
        </ul>
    @endif

    {{-- Edit / Delete task link --}}
    <ul class="flex gap-3 text-sm leading-normal">
        <li>
            <a href="{{ route('tasks.edit', ['id' => $task->id]) }}" class="inline-block dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white hover:bg-black hover:border-black px-5 py-1.5 bg-[#1b1b18] rounded-sm border border-black text-white text-sm leading-normal">
                <span>Edit</span>
            </a>
            <a href="#" class="inline-block dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white hover:bg-black hover:border-black px-5 py-1.5 bg-[#1b1b18] rounded-sm border border-black text-white text-sm leading-normal">
                <span>Delete</span>
            </a>
        </li>
    </ul>

    {{-- Panel footer --}}
    <p class="mt-6 lg:mt-10 text-[#706f6c] dark:text-[#A1A09A]">
        Back to
        <a href="{{ route('tasks.index') }}" class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-[#f53003] dark:text-[#FF4433]">
            <span>task list</span>
        </a>
    </p>
@endsection
