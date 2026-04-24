@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
  <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
    <div class="grid grid-cols-12 gap-4 md:gap-6">
      {{-- Video + Monthly Target (same height) --}}
      <div class="col-span-12 xl:col-span-7">
        <div class="overflow-hidden rounded-2xl shadow-lg dark:shadow-gray-900/50 h-full">
          <div class="aspect-video w-full">
            <iframe
              class="h-full w-full"
              src="https://player.vimeo.com/video/76979871?autoplay=1&muted=1"
              title="Vimeo video"
              frameborder="0"
              allow="autoplay; fullscreen; picture-in-picture"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>

      <div class="col-span-12 xl:col-span-5">
        @include('admin.partials.chart.chart-02')
      </div>

      {{-- Metrics + Chart-01 --}}
      <div class="col-span-12 space-y-6 xl:col-span-7">
        @include('admin.partials.metric-group.metric-group-01')
        @include('admin.partials.chart.chart-01')
      </div>

      <div class="col-span-12">
        @include('admin.partials.chart.chart-03')
      </div>

      <div class="col-span-12 xl:col-span-5">
        @include('admin.partials.map-01')
      </div>

      <div class="col-span-12 xl:col-span-7">
        @include('admin.partials.table.table-01')
      </div>
    </div>
  </div>
@endsection
