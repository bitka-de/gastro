<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body>
    <header class="relative flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-white text-sm py-3">
        <nav class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between">
            <div class="flex items-center justify-between">
                <a href="{{ route('welcome') }}"
                    class="flex-none text-xl font-semibold focus:outline-hidden focus:opacity-80" aria-label="Brand">
                            <svg data-logo="logo" viewBox="0 0 106 27" class="h-6 ml-2">
                                <path fill="currentColor"
                                    d="M13.65 26.45q-2.73 0-5.06-.97-2.32-.98-4.06-2.73-1.73-1.76-2.69-4.05t-.96-4.92q0-2.62.96-4.93.96-2.31 2.69-4.06 1.74-1.75 4.06-2.75 2.33-1 5.06-1 3.12 0 5.3 1 2.19 1 3.7 2.85l-3.5 3.01q-.98-1.08-2.38-1.69-1.4-.62-3.12-.62-2.34 0-4.08 1.12Q7.84 7.83 6.9 9.69q-.95 1.85-.95 4.09 0 2.24.95 4.1.94 1.85 2.67 2.98 1.74 1.12 4.08 1.12 2.91 0 4.69-1.39 1.79-1.38 2.21-4.25l-8.05.07V12h12.77q.07.56.12 1.35.06.78.06 1.38 0 3.4-1.42 6.04t-4.06 4.16q-2.64 1.52-6.32 1.52Zm22.02 0q-2.49 0-4.54-1.27-2.04-1.28-3.25-3.43-1.21-2.16-1.21-4.78 0-1.96.7-3.69.7-1.74 1.93-3.05 1.22-1.31 2.85-2.06 1.63-.76 3.52-.76 2.38 0 3.71.9 1.33.89 2.06 2.36V7.8h4.69V26h-4.58v-2.98q-.74 1.55-2.09 2.49-1.34.94-3.79.94Zm.77-4.27q1.57 0 2.71-.71 1.14-.72 1.77-1.91.63-1.19.63-2.59 0-1.44-.63-2.63t-1.77-1.92q-1.14-.74-2.71-.74-1.51 0-2.65.72-1.13.72-1.76 1.91-.63 1.19-.63 2.62 0 1.37.63 2.58.63 1.2 1.76 1.94 1.14.73 2.65.73Zm18.72 4.27q-4.58 0-7.56-3.18l3.19-2.91q1.99 2.25 4.26 2.25 1.23 0 1.88-.55.65-.54.65-1.35 0-.48-.23-.83-.23-.36-.95-.67-.71-.32-2.15-.63-2.45-.6-3.64-1.47-1.19-.88-1.57-1.96-.39-1.09-.39-2.24 0-2.38 1.8-3.97 1.81-1.6 4.99-1.6 2.21 0 3.78.67 1.58.66 2.98 2.48l-3.43 2.63q-.67-1.05-1.49-1.51-.83-.45-1.73-.45-.98 0-1.63.38-.65.39-.65 1.23 0 .45.42.89t2.03.86q2.66.66 4.06 1.56 1.4.89 1.92 2.01.53 1.12.53 2.48 0 1.68-.93 3.02-.92 1.32-2.52 2.09-1.59.77-3.62.77Zm18.1-.45h-2.59q-2.7 0-4.13-1.33-1.44-1.33-1.44-4.31v-8.54h-2.55V7.8h2.55V4.12l4.73-.49V7.8h3.85v4.02h-3.85v8.3q0 1.68 1.47 1.68h1.96V26Zm6.72 0h-4.73V7.8h4.59v3.46q.45-1.96 1.85-2.99 1.4-1.03 3.78-.89v4.44h-.66q-2.03 0-3.43 1.3-1.4 1.29-1.4 3.57V26Zm15.19.45q-2.8 0-5.01-1.29-2.2-1.3-3.45-3.45-1.24-2.15-1.24-4.78 0-2.62 1.24-4.79 1.25-2.17 3.45-3.47 2.21-1.29 5.01-1.29 2.83 0 5.02 1.29 2.19 1.3 3.43 3.47 1.24 2.17 1.24 4.79 0 2.63-1.24 4.78-1.24 2.15-3.43 3.45-2.19 1.29-5.02 1.29Zm0-4.3q1.5 0 2.62-.72t1.73-1.91q.62-1.18.62-2.59 0-1.43-.62-2.62-.61-1.19-1.73-1.91t-2.62-.72q-1.51 0-2.63.72-1.12.72-1.73 1.91-.61 1.19-.61 2.62 0 1.41.61 2.59.61 1.19 1.73 1.91t2.63.72Z" />
                            </svg>
                </a>
                <div class="sm:hidden">
                    <button type="button"
                        class="hs-collapse-toggle relative size-9 flex justify-center items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                        id="hs-navbar-example-collapse" aria-expanded="false" aria-controls="hs-navbar-example"
                        aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-example">
                        <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" x2="21" y1="6" y2="6" />
                            <line x1="3" x2="21" y1="12" y2="12" />
                            <line x1="3" x2="21" y1="18" y2="18" />
                        </svg>
                        <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                </div>
            </div>
            <div id="hs-navbar-example"
                class="hidden hs-collapse overflow-hidden transition-all duration-300 basis-full grow sm:block"
                aria-labelledby="hs-navbar-example-collapse">
                <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
                    <a class="font-medium text-blue-500 focus:outline-hidden" href="#"
                        aria-current="page">Landing</a>
                    <a class="font-medium text-gray-600 hover:text-gray-400 focus:outline-hidden focus:text-gray-400"
                        href="#">Account</a>
                    <a class="font-medium text-gray-600 hover:text-gray-400 focus:outline-hidden focus:text-gray-400"
                        href="#">Work</a>
                    <a class="font-medium text-gray-600 hover:text-gray-400 focus:outline-hidden focus:text-gray-400"
                        href="#">Blog</a>
                </div>
            </div>
        </nav>
    </header>

    @yield('content');
</body>

</html>
