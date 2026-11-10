<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel Task List') }}</title>

        @fonts

        <!-- Styles / Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>

        {{-- blade-formatter-disable --}}
        <style type="text/tailwindcss">
            .text-paragraph {
                @apply text-[#706f6c] dark:text-[#A1A09A]
            }
            .list-item {
                @apply flex items-center gap-4 py-2 relative before:top-1/2 before:bottom-0 before:left-[0.4rem] before:absolute
            }
            .button-appearance {
                @apply inline-block dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white hover:bg-black hover:border-black px-5 py-1.5 bg-[#1b1b18] rounded-sm border border-black text-white text-sm leading-normal
            }
            .link-appearance {
                @apply inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-[#f53003] dark:text-[#FF4433]
            }
            .bullet-wrapper {
                @apply relative py-1 bg-white dark:bg-[#161615]
            }
            .bullet-body {
                @apply flex items-center justify-center rounded-full bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-[#3E3E3A] border-[#e3e3e0]
            }
            .bullet-inner {
                @apply rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] w-1.5 h-1.5
            }
            .form-field {
                @apply w-full border dark:border-[#3E3E3A]
            }
            .list-wrapper {
                @apply flex flex-col mb-4 lg:mb-6
            }
            .button-list-wrapper {
                @apply flex gap-3 text-sm leading-normal
            }
            .footer-paragraph {
                @apply mt-6 lg:mt-10 text-[#706f6c] dark:text-[#A1A09A]
            }
            .error-message {
                @apply text-red-500 text-xs
            }
        </style>
        {{-- blade-formatter-enable --}}

        @if(session()->has('success'))
            <style>
                .success-message {
                    color: green;
                }
            </style>
        @endif

        @yield('styles')
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <div class="flex items-start justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
                <div
                    x-data="{ flash: true}"
                    class="text-[13px] leading-[20px] flex-1 p-6 pb-6 lg:p-20 lg:pb-10 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none"
                >
                    <h1 class="mb-4 font-medium text-xl">@yield('title')</h1>

                    @if(session()->has('success'))
                        <div
                            x-show="flash"
                            class="relative my-8 rounded border border-green-400 bg-green-100 px-4 py-3 text-green-700"
                            role="alert"
                        >
                            <span>{{ session('success') }} &#10004;</span>
                            <span class="absolute top-0 bottom-0 right-0 px-1 py-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" @click="flash = false"
                                    stroke="currentColor" class="h-6 w-6 cursor-pointer"
                                >
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </span>
                        </div>
                    @endif

                    @yield('content')
                </div>
            </main>
        </div>
    </body>
</html>
