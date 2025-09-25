@extends('layouts.admin')

@section('title', 'Sign in')

@section('content')

<!-- ========== MAIN SIDEBAR ========== -->
<!-- Sidebar -->
<div id="hs-pro-sidebar" class="hs-overlay [--body-scroll:true] lg:[--overlay-backdrop:false] [--is-layout-affect:true] [--opened:lg] [--auto-close:lg]
hs-overlay-open:translate-x-0 lg:hs-overlay-layout-open:translate-x-0
-translate-x-full transition-all duration-300 transform
w-60
hidden
fixed inset-y-0 z-60 start-0
bg-zinc-100
lg:block lg:-translate-x-full lg:end-auto lg:bottom-0" role="dialog" tabindex="-1" aria-label="Sidebar">
  <div class="lg:pt-13 relative flex flex-col h-full max-h-full">
    <!-- Body -->
    <nav class="p-3 size-full flex flex-col overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-200 [&::-webkit-scrollbar-thumb]:bg-gray-300">
      <div class="lg:hidden mb-2 flex items-center justify-between">


        <!-- Sidebar Toggle -->
        <button type="button" class="p-1 size-8 absolute top-2 right-0 inline-flex items-center gap-x-1 text-xs rounded-md text-gray-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-pro-sidebar" data-hs-overlay="#hs-pro-sidebar">
          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
          <span class="sr-only">Sidebar Toggle</span>
        </button>
        <!-- End Sidebar Toggle -->
      </div>



      <div class="flex flex-col first:border-t-0 first:pt-0 first:mt-0">
        <span class="block ps-2.5 mb-2 font-medium text-xs uppercase text-gray-500">
          Home
        </span>

        <!-- List -->
        <ul class="flex flex-col gap-y-1">
          <li>
            <a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200 " href="index.html">
              Dashboard
            </a>
          </li>
        </ul>
        <!-- End List -->
      </div>

      <div class="pt-3 mt-3 flex flex-col border-t border-gray-200 first:border-t-0 first:pt-0 first:mt-0">
        <span class="block ps-2.5 mb-2 font-medium text-xs uppercase text-gray-500">
          Pages
        </span>

        <!-- List -->
        <ul class="flex flex-col gap-y-1">
          <li>
            <a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200 " href="posts.html">
              Posts
            </a>
          </li>
          <li>
            <a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200 " href="members.html">
              Members
            </a>
          </li>
        </ul>
        <!-- End List -->
      </div>

      <div class="pt-3 mt-3 flex flex-col border-t border-gray-200 first:border-t-0 first:pt-0 first:mt-0">
        <span class="block ps-2.5 mb-2 font-medium text-xs uppercase text-gray-500">
          Posts
        </span>

        <!-- List -->
        <ul class="flex flex-col gap-y-1">
          <li>
            <a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200 " href="create-post.html">
              Create Post
            </a>
          </li>
          <li>
            <a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200 " href="draft.html">
              Draft
            </a>
          </li>
          <li>
            <a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200 " href="published.html">
              Published
            </a>
          </li>
        </ul>
        <!-- End List -->
      </div>

      <div class="pt-3 mt-3 lg:hidden flex flex-col border-t border-gray-200 first:border-t-0 first:pt-0 first:mt-0">
        <span class="block ps-2.5 mb-2 font-medium text-xs uppercase text-gray-500">
          Others
        </span>

        <!-- List -->
        <ul class="flex flex-col gap-y-1">
          <li>
            <a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200" href="#">
              Docs
            </a>
          </li>
          <li>
            <a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200" href="#">
              API
            </a>
          </li>
        </ul>
        <!-- End List -->
      </div>
    </nav>
    <!-- End Body -->

    <!-- Footer -->
    <footer class="mt-auto p-3 flex flex-col">
      <!-- List -->
      <ul class="flex flex-col gap-y-1">
        <li>
          <a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200" href="#">
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"/></svg>
            What's new?
          </a>
        </li>
        <li>
          <a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200" href="#">
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/></svg>
            Help & support
          </a>
        </li>
        <li class="lg:hidden">
          <a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200" href="#">
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 7v14"/><path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"/></svg>
            Knowledge Base
          </a>
        </li>
      </ul>
      <!-- End List -->
    </footer>
    <!-- End Footer -->
  </div>
</div>
<!-- End Sidebar -->
<!-- ========== END MAIN SIDEBAR ========== -->

<!-- ========== MAIN CONTENT ========== -->
<main class="lg:hs-overlay-layout-open:ps-60 bg-gray-100 transition-all duration-300 lg:fixed lg:inset-0 pt-13 px-3 pb-3">
  <div class="h-[calc(100dvh-62px)] lg:h-full overflow-hidden flex flex-col bg-white border border-gray-200 shadow-xs rounded-lg">
    <!-- Body -->
    <div class="flex-1 flex flex-col overflow-y-auto [&::-webkit-scrollbar]:w-0">
      <div class="flex-1 flex flex-col lg:flex-row">
        <div class="flex-1 min-w-0 flex flex-col border-e border-gray-200">
        </div>
        <!-- End Col -->

        <div class="shrink-0">
          <div class="lg:w-80">
          </div>
        </div>
        <!-- End Col -->
      </div>
    </div>
    <!-- End Body -->
  </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->

@endsection