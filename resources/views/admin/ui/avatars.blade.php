@extends('layouts.admin')

@section('title', 'Avatars')
@section('page', 'avatars')
@section('pageName', 'Avatars')

@section('content')
<div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">

  <div class="mb-6">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white/90">Avatars</h2>
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Avatar components for displaying user profile images.</p>
  </div>

  <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

    {{-- Sizes --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h3 class="mb-4 text-lg font-semibold text-gray-800 dark:text-white/90">Sizes</h3>
      <div class="flex flex-wrap items-end gap-4">
        <img src="{{ asset('tailadmin/images/user/user-01.jpg') }}" alt="Avatar" class="h-6 w-6 rounded-full object-cover">
        <img src="{{ asset('tailadmin/images/user/user-01.jpg') }}" alt="Avatar" class="h-8 w-8 rounded-full object-cover">
        <img src="{{ asset('tailadmin/images/user/user-01.jpg') }}" alt="Avatar" class="h-10 w-10 rounded-full object-cover">
        <img src="{{ asset('tailadmin/images/user/user-01.jpg') }}" alt="Avatar" class="h-12 w-12 rounded-full object-cover">
        <img src="{{ asset('tailadmin/images/user/user-01.jpg') }}" alt="Avatar" class="h-14 w-14 rounded-full object-cover">
        <img src="{{ asset('tailadmin/images/user/user-01.jpg') }}" alt="Avatar" class="h-16 w-16 rounded-full object-cover">
      </div>
    </div>

    {{-- Shapes --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h3 class="mb-4 text-lg font-semibold text-gray-800 dark:text-white/90">Shapes</h3>
      <div class="flex flex-wrap items-end gap-4">
        <img src="{{ asset('tailadmin/images/user/user-01.jpg') }}" alt="Avatar" class="h-12 w-12 rounded-full object-cover">
        <img src="{{ asset('tailadmin/images/user/user-01.jpg') }}" alt="Avatar" class="h-12 w-12 rounded-xl object-cover">
        <img src="{{ asset('tailadmin/images/user/user-01.jpg') }}" alt="Avatar" class="h-12 w-12 rounded-none object-cover">
      </div>
    </div>

    {{-- With Status --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h3 class="mb-4 text-lg font-semibold text-gray-800 dark:text-white/90">With Status</h3>
      <div class="flex flex-wrap items-end gap-6">
        <div class="relative">
          <img src="{{ asset('tailadmin/images/user/user-01.jpg') }}" alt="Avatar" class="h-12 w-12 rounded-full object-cover">
          <span class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-success-400 dark:border-gray-900"></span>
        </div>
        <div class="relative">
          <img src="{{ asset('tailadmin/images/user/user-01.jpg') }}" alt="Avatar" class="h-12 w-12 rounded-full object-cover">
          <span class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-warning-400 dark:border-gray-900"></span>
        </div>
        <div class="relative">
          <img src="{{ asset('tailadmin/images/user/user-01.jpg') }}" alt="Avatar" class="h-12 w-12 rounded-full object-cover">
          <span class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-gray-400 dark:border-gray-900"></span>
        </div>
      </div>
    </div>

    {{-- Avatar Group --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h3 class="mb-4 text-lg font-semibold text-gray-800 dark:text-white/90">Avatar Group</h3>
      <div class="flex -space-x-3">
        <img src="{{ asset('tailadmin/images/user/user-01.jpg') }}" alt="Avatar" class="h-10 w-10 rounded-full border-2 border-white object-cover dark:border-gray-900">
        <img src="{{ asset('tailadmin/images/user/user-02.jpg') }}" alt="Avatar" class="h-10 w-10 rounded-full border-2 border-white object-cover dark:border-gray-900">
        <img src="{{ asset('tailadmin/images/user/user-03.jpg') }}" alt="Avatar" class="h-10 w-10 rounded-full border-2 border-white object-cover dark:border-gray-900">
        <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-white bg-gray-100 text-xs font-medium text-gray-600 dark:border-gray-900 dark:bg-gray-800 dark:text-gray-400">+3</div>
      </div>
    </div>

  </div>
</div>
@endsection
