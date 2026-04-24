@extends('layouts.admin')

@section('title', 'Images')
@section('page', 'images')
@section('pageName', 'Images')

@section('content')
<div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">

  <div class="mb-6">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white/90">Images</h2>
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Image display components with various shapes and styles.</p>
  </div>

  <div class="grid grid-cols-1 gap-6">

    {{-- Shapes --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h3 class="mb-4 text-lg font-semibold text-gray-800 dark:text-white/90">Shapes</h3>
      <div class="flex flex-wrap gap-6">
        <div>
          <img src="{{ asset('tailadmin/images/user/user-01.jpg') }}" alt="Square" class="h-24 w-24 rounded-none object-cover">
          <p class="mt-2 text-xs text-gray-500 text-center">Square</p>
        </div>
        <div>
          <img src="{{ asset('tailadmin/images/user/user-01.jpg') }}" alt="Rounded" class="h-24 w-24 rounded-xl object-cover">
          <p class="mt-2 text-xs text-gray-500 text-center">Rounded</p>
        </div>
        <div>
          <img src="{{ asset('tailadmin/images/user/user-01.jpg') }}" alt="Circle" class="h-24 w-24 rounded-full object-cover">
          <p class="mt-2 text-xs text-gray-500 text-center">Circle</p>
        </div>
      </div>
    </div>

    {{-- Aspect Ratios --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h3 class="mb-4 text-lg font-semibold text-gray-800 dark:text-white/90">Aspect Ratios</h3>
      <div class="grid grid-cols-2 gap-4 md:grid-cols-3">
        <div>
          <div class="aspect-square overflow-hidden rounded-xl bg-gray-100 dark:bg-gray-800">
            <img src="{{ asset('tailadmin/images/user/user-01.jpg') }}" alt="1:1" class="h-full w-full object-cover">
          </div>
          <p class="mt-2 text-xs text-gray-500 text-center">1:1</p>
        </div>
        <div>
          <div class="aspect-video overflow-hidden rounded-xl bg-gray-100 dark:bg-gray-800">
            <img src="{{ asset('tailadmin/images/user/user-01.jpg') }}" alt="16:9" class="h-full w-full object-cover">
          </div>
          <p class="mt-2 text-xs text-gray-500 text-center">16:9</p>
        </div>
        <div>
          <div class="aspect-[4/3] overflow-hidden rounded-xl bg-gray-100 dark:bg-gray-800">
            <img src="{{ asset('tailadmin/images/user/user-01.jpg') }}" alt="4:3" class="h-full w-full object-cover">
          </div>
          <p class="mt-2 text-xs text-gray-500 text-center">4:3</p>
        </div>
      </div>
    </div>

    {{-- Image Gallery --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h3 class="mb-4 text-lg font-semibold text-gray-800 dark:text-white/90">Image Gallery</h3>
      <div class="grid grid-cols-2 gap-3 md:grid-cols-4">
        @foreach(range(1, 4) as $i)
        <div class="group relative overflow-hidden rounded-xl">
          <img src="{{ asset('tailadmin/images/user/user-0'.$i.'.jpg') }}" alt="Gallery {{ $i }}" class="h-40 w-full object-cover transition-transform duration-300 group-hover:scale-105">
          <div class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
            <svg class="fill-white" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.5 7a4.5 4.5 0 1 0 0 9 4.5 4.5 0 0 0 0-9Zm-6 4.5a6 6 0 1 1 10.789 3.682l3.264 3.265a.75.75 0 0 1-1.06 1.06l-3.265-3.264A6 6 0 0 1 5.5 11.5Z" fill=""/></svg>
          </div>
        </div>
        @endforeach
      </div>
    </div>

  </div>
</div>
@endsection
