<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body>
    <header
        class="fixed top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-48 lg:z-61 w-full bg-zinc-100 text-sm py-2.5">
        <nav class="px-4 sm:px-5.5 flex basis-full items-center w-full mx-auto">
            <div class="w-full flex items-center gap-x-1.5">
                <ul class="flex items-center gap-1.5">

                    <!-- Sidebar Toggle -->
                    <button type="button"
                        class="size-8 items-center bg-white shadow inline-flex justify-center gap-x-1 text-xs rounded-md border border-transparent text-gray-500 hover:text-gray-800 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:text-gray-800"
                        aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-pro-sidebar"
                        data-hs-overlay="#hs-pro-sidebar">

                        <svg viewBox="0 0 256 256" class="size-6 p-1">
                            <path
                                d="M224 128a8 8 0 0 1-8 8H40a8 8 0 0 1 0-16h176a8 8 0 0 1 8 8ZM40 72h176a8 8 0 0 0 0-16H40a8 8 0 0 0 0 16Zm176 112H40a8 8 0 0 0 0 16h176a8 8 0 0 0 0-16Z" />
                        </svg>


                        <span class="sr-only">Sidebar Toggle</span>
                    </button>
                    <!-- End Sidebar Toggle -->

                    <li
                        class="inline-flex items-center relative text-gray-600 pe-1.5 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:end-0 after:inline-block after:w-px after:h-3.5 after:bg-gray-300 after:rounded-full after:-translate-y-1/2 after:rotate-12">
                        <a class="shrink-0 inline-flex justify-center items-center rounded-md text-xl font-semibold focus:outline-hidden focus:opacity-80"
                            href="{{ route('dashboard') }}" aria-label="Gastro">
                            <svg data-logo="logo" viewBox="0 0 106 27" class="h-6 ml-2">
                                <path fill="currentColor"
                                    d="M13.65 26.45q-2.73 0-5.06-.97-2.32-.98-4.06-2.73-1.73-1.76-2.69-4.05t-.96-4.92q0-2.62.96-4.93.96-2.31 2.69-4.06 1.74-1.75 4.06-2.75 2.33-1 5.06-1 3.12 0 5.3 1 2.19 1 3.7 2.85l-3.5 3.01q-.98-1.08-2.38-1.69-1.4-.62-3.12-.62-2.34 0-4.08 1.12Q7.84 7.83 6.9 9.69q-.95 1.85-.95 4.09 0 2.24.95 4.1.94 1.85 2.67 2.98 1.74 1.12 4.08 1.12 2.91 0 4.69-1.39 1.79-1.38 2.21-4.25l-8.05.07V12h12.77q.07.56.12 1.35.06.78.06 1.38 0 3.4-1.42 6.04t-4.06 4.16q-2.64 1.52-6.32 1.52Zm22.02 0q-2.49 0-4.54-1.27-2.04-1.28-3.25-3.43-1.21-2.16-1.21-4.78 0-1.96.7-3.69.7-1.74 1.93-3.05 1.22-1.31 2.85-2.06 1.63-.76 3.52-.76 2.38 0 3.71.9 1.33.89 2.06 2.36V7.8h4.69V26h-4.58v-2.98q-.74 1.55-2.09 2.49-1.34.94-3.79.94Zm.77-4.27q1.57 0 2.71-.71 1.14-.72 1.77-1.91.63-1.19.63-2.59 0-1.44-.63-2.63t-1.77-1.92q-1.14-.74-2.71-.74-1.51 0-2.65.72-1.13.72-1.76 1.91-.63 1.19-.63 2.62 0 1.37.63 2.58.63 1.2 1.76 1.94 1.14.73 2.65.73Zm18.72 4.27q-4.58 0-7.56-3.18l3.19-2.91q1.99 2.25 4.26 2.25 1.23 0 1.88-.55.65-.54.65-1.35 0-.48-.23-.83-.23-.36-.95-.67-.71-.32-2.15-.63-2.45-.6-3.64-1.47-1.19-.88-1.57-1.96-.39-1.09-.39-2.24 0-2.38 1.8-3.97 1.81-1.6 4.99-1.6 2.21 0 3.78.67 1.58.66 2.98 2.48l-3.43 2.63q-.67-1.05-1.49-1.51-.83-.45-1.73-.45-.98 0-1.63.38-.65.39-.65 1.23 0 .45.42.89t2.03.86q2.66.66 4.06 1.56 1.4.89 1.92 2.01.53 1.12.53 2.48 0 1.68-.93 3.02-.92 1.32-2.52 2.09-1.59.77-3.62.77Zm18.1-.45h-2.59q-2.7 0-4.13-1.33-1.44-1.33-1.44-4.31v-8.54h-2.55V7.8h2.55V4.12l4.73-.49V7.8h3.85v4.02h-3.85v8.3q0 1.68 1.47 1.68h1.96V26Zm6.72 0h-4.73V7.8h4.59v3.46q.45-1.96 1.85-2.99 1.4-1.03 3.78-.89v4.44h-.66q-2.03 0-3.43 1.3-1.4 1.29-1.4 3.57V26Zm15.19.45q-2.8 0-5.01-1.29-2.2-1.3-3.45-3.45-1.24-2.15-1.24-4.78 0-2.62 1.24-4.79 1.25-2.17 3.45-3.47 2.21-1.29 5.01-1.29 2.83 0 5.02 1.29 2.19 1.3 3.43 3.47 1.24 2.17 1.24 4.79 0 2.63-1.24 4.78-1.24 2.15-3.43 3.45-2.19 1.29-5.02 1.29Zm0-4.3q1.5 0 2.62-.72t1.73-1.91q.62-1.18.62-2.59 0-1.43-.62-2.62-.61-1.19-1.73-1.91t-2.62-.72q-1.51 0-2.63.72-1.12.72-1.73 1.91-.61 1.19-.61 2.62 0 1.41.61 2.59.61 1.19 1.73 1.91t2.63.72Z" />
                            </svg>
                        </a>

                        <div class="hidden sm:block ms-1">

                        </div>


                    </li>

                </ul>

                <ul class="flex flex-row items-center gap-x-3 ms-auto">
                    <li
                        class="hidden lg:inline-flex items-center gap-1.5 relative text-gray-500 pe-3 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:end-0 after:inline-block after:w-px after:h-3.5 after:bg-gray-300 after:rounded-full after:-translate-y-1/2 after:rotate-12">

                        {{-- 
                        <a class="flex items-center gap-x-1.5 py-1.5 px-2 text-sm text-gray-800 rounded-lg hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200"
                            href="#">
                            Docs
                        </a>

                        <a class="flex items-center gap-x-1.5 py-1.5 px-2 text-sm text-gray-800 rounded-lg hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200"
                            href="#">
                            API
                        </a> 
                        --}}
                    </li>

                    <li
                        class="inline-flex items-center gap-1.5 relative text-gray-500 pe-3 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:end-0 after:inline-block after:w-px after:h-3.5 after:bg-gray-300 after:rounded-full after:-translate-y-1/2 after:rotate-12">


                        <div class="h-8">
                            <!-- Account Dropdown -->
                            <div
                                class="hs-dropdown inline-flex [--strategy:absolute] [--auto-close:inside] [--placement:bottom-right] relative text-start">
                                <button id="hs-dnad" type="button"
                                    class="p-0.5 inline-flex shrink-0 items-center gap-x-3 text-start rounded-full hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200 pl-4"
                                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                    {{ Auth::user()->name }}
                                    <img class="shrink-0 size-7 rounded-full"
                                        src="https://images.unsplash.com/photo-1659482633369-9fe69af50bfb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=3&w=320&h=320&q=80"
                                        alt="Avatar">

                                </button>

                                <!-- Account Dropdown -->
                                <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-60 transition-[opacity,margin] duration opacity-0 hidden z-20 bg-white border border-gray-200 rounded-xl shadow-xl"
                                    role="menu" aria-orientation="vertical" aria-labelledby="hs-dnad">
                                    <div class="py-2 px-3.5">
                                        <span class="font-medium text-gray-800">
                                            {{ Auth::user()->name }}
                                        </span>
                                        <p class="text-sm text-gray-500">
                                            {{ Auth::user()->email }}
                                        </p>
                                        {{-- <div class="mt-1.5">
                                            <a class="flex justify-center items-center gap-x-1.5 py-2 px-2.5 font-medium text-[13px] bg-black text-white rounded-lg focus:outline-hidden disabled:opacity-50 disabled:pointer-events-none"
                                                href="#">
                                                Upgrade to Pro
                                            </a>
                                        </div> --}}
                                    </div>
                                    {{-- <div class="px-4 py-2 border-t border-gray-200">
                                        <!-- Switch/Toggle -->
                                        <div class="flex flex-wrap justify-between items-center gap-2">
                                            <span class="flex-1 cursor-pointer text-sm text-gray-600">Theme</span>
                                            <div class="p-0.5 inline-flex cursor-pointer bg-gray-100 rounded-full">
                                                <button type="button"
                                                    class="size-7 flex justify-center items-center bg-white shadow-sm text-gray-800 rounded-full hs-auto-mode-active:bg-transparent hs-auto-mode-active:shadow-none hs-dark-mode-active:bg-transparent hs-dark-mode-active:shadow-none"
                                                    data-hs-theme-click-value="default">
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <circle cx="12" cy="12" r="4" />
                                                        <path d="M12 3v1" />
                                                        <path d="M12 20v1" />
                                                        <path d="M3 12h1" />
                                                        <path d="M20 12h1" />
                                                        <path d="m18.364 5.636-.707.707" />
                                                        <path d="m6.343 17.657-.707.707" />
                                                        <path d="m5.636 5.636.707.707" />
                                                        <path d="m17.657 17.657.707.707" />
                                                    </svg>
                                                    <span class="sr-only">Default (Light)</span>
                                                </button>
                                                <button type="button"
                                                    class="size-7 flex justify-center items-center text-gray-800 rounded-full hs-dark-mode-active:bg-white hs-dark-mode-active:shadow-sm hs-dark-mode-active:text-neutral-800"
                                                    data-hs-theme-click-value="dark">
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" />
                                                    </svg>
                                                    <span class="sr-only">Dark</span>
                                                </button>
                                                <button type="button"
                                                    class="size-7 flex justify-center items-center text-gray-800 rounded-full hs-auto-light-mode-active:bg-white hs-auto-dark-mode-active:bg-red-800 hs-auto-mode-active:shadow-sm"
                                                    data-hs-theme-click-value="auto">
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <rect width="20" height="14" x="2" y="3"
                                                            rx="2" />
                                                        <line x1="8" x2="16" y1="21"
                                                            y2="21" />
                                                        <line x1="12" x2="12" y1="17"
                                                            y2="21" />
                                                    </svg>
                                                    <span class="sr-only">Auto (System)</span>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Switch/Toggle -->
                                    </div> --}}
                                    <div class="p-1 border-t border-gray-200">
                                        <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-600 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100"
                                            href="#">
                                            <svg class="shrink-0 mt-0.5 size-4" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                                                <circle cx="12" cy="7" r="4" />
                                            </svg>
                                            Profile
                                        </a>
                                        <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-600 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100"
                                            href="#">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path
                                                    d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
                                                <circle cx="12" cy="12" r="3" />
                                            </svg>
                                            Settings
                                        </a>


                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit"
                                                class="flex items-center w-full gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-600 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100">
                                                <svg class="shrink-0 mt-0.5 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="m16 17 5-5-5-5" />
                                                    <path d="M21 12H9" />
                                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                                </svg>
                                                Log out
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Account Dropdown -->
                            </div>
                            <!-- End Account Dropdown -->
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    @yield('content')
</body>

</html>
