@extends('layouts.admin')

@section('title', 'Sign in')

@section('content')



<!-- ========== MAIN CONTENT ========== -->
<main class="lg:hs-overlay-layout-open:ps-60 bg-gray-100 transition-all duration-300 lg:fixed lg:inset-0 pt-13 px-3 pb-3">
  <div class="h-[calc(100dvh-62px)] lg:h-full overflow-hidden flex flex-col bg-white border border-gray-200 shadow-xs rounded-lg">

   
    <!-- Body -->
    <div class="flex-1 flex flex-col overflow-y-auto [&::-webkit-scrollbar]:w-0">
      <div class="flex-1 flex flex-col lg:flex-row">
        <div class="flex-1 min-w-0 flex flex-col border-e border-gray-200">
           Content
        </div>
        <!-- End Col -->

        <div class="shrink-0">
          <div class="lg:w-80">

          SIDE

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