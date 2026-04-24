@extends('layouts.admin')

@section('title', 'Badges')
@section('page', 'badge')
@section('pageName', 'Badges')

@section('content')
<div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">

  <div class="mb-6">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white/90">Badges</h2>
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Badge components for labels, statuses, and counts.</p>
  </div>

  <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

    {{-- Solid Badges --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h3 class="mb-4 text-lg font-semibold text-gray-800 dark:text-white/90">Solid Badges</h3>
      <div class="flex flex-wrap gap-3">
        <span class="inline-flex items-center rounded-full bg-blue-500 px-3 py-1 text-xs font-medium text-white">Primary</span>
        <span class="inline-flex items-center rounded-full bg-success-500 px-3 py-1 text-xs font-medium text-white">Success</span>
        <span class="inline-flex items-center rounded-full bg-warning-500 px-3 py-1 text-xs font-medium text-white">Warning</span>
        <span class="inline-flex items-center rounded-full bg-error-500 px-3 py-1 text-xs font-medium text-white">Danger</span>
        <span class="inline-flex items-center rounded-full bg-gray-500 px-3 py-1 text-xs font-medium text-white">Dark</span>
      </div>
    </div>

    {{-- Light Badges --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h3 class="mb-4 text-lg font-semibold text-gray-800 dark:text-white/90">Light Badges</h3>
      <div class="flex flex-wrap gap-3">
        <span class="inline-flex items-center rounded-full bg-blue-50 px-3 py-1 text-xs font-medium text-blue-700 dark:bg-blue-500/15 dark:text-blue-400">Primary</span>
        <span class="inline-flex items-center rounded-full bg-success-50 px-3 py-1 text-xs font-medium text-success-700 dark:bg-success-500/15 dark:text-success-400">Success</span>
        <span class="inline-flex items-center rounded-full bg-warning-50 px-3 py-1 text-xs font-medium text-warning-700 dark:bg-warning-500/15 dark:text-warning-400">Warning</span>
        <span class="inline-flex items-center rounded-full bg-error-50 px-3 py-1 text-xs font-medium text-error-700 dark:bg-error-500/15 dark:text-error-400">Danger</span>
        <span class="inline-flex items-center rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700 dark:bg-white/10 dark:text-gray-400">Dark</span>
      </div>
    </div>

    {{-- Outlined Badges --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h3 class="mb-4 text-lg font-semibold text-gray-800 dark:text-white/90">Outlined Badges</h3>
      <div class="flex flex-wrap gap-3">
        <span class="inline-flex items-center rounded-full border border-blue-500 px-3 py-1 text-xs font-medium text-blue-500">Primary</span>
        <span class="inline-flex items-center rounded-full border border-success-500 px-3 py-1 text-xs font-medium text-success-500">Success</span>
        <span class="inline-flex items-center rounded-full border border-warning-500 px-3 py-1 text-xs font-medium text-warning-500">Warning</span>
        <span class="inline-flex items-center rounded-full border border-error-500 px-3 py-1 text-xs font-medium text-error-500">Danger</span>
        <span class="inline-flex items-center rounded-full border border-gray-500 px-3 py-1 text-xs font-medium text-gray-500">Dark</span>
      </div>
    </div>

    {{-- Dot Badges --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h3 class="mb-4 text-lg font-semibold text-gray-800 dark:text-white/90">Dot Badges</h3>
      <div class="flex flex-wrap gap-3">
        <span class="inline-flex items-center gap-1.5 rounded-full bg-blue-50 px-3 py-1 text-xs font-medium text-blue-700 dark:bg-blue-500/15 dark:text-blue-400"><span class="h-1.5 w-1.5 rounded-full bg-blue-500"></span>Active</span>
        <span class="inline-flex items-center gap-1.5 rounded-full bg-success-50 px-3 py-1 text-xs font-medium text-success-700 dark:bg-success-500/15 dark:text-success-400"><span class="h-1.5 w-1.5 rounded-full bg-success-500"></span>Completed</span>
        <span class="inline-flex items-center gap-1.5 rounded-full bg-warning-50 px-3 py-1 text-xs font-medium text-warning-700 dark:bg-warning-500/15 dark:text-warning-400"><span class="h-1.5 w-1.5 rounded-full bg-warning-500"></span>Pending</span>
        <span class="inline-flex items-center gap-1.5 rounded-full bg-error-50 px-3 py-1 text-xs font-medium text-error-700 dark:bg-error-500/15 dark:text-error-400"><span class="h-1.5 w-1.5 rounded-full bg-error-500"></span>Cancelled</span>
      </div>
    </div>

  </div>
</div>
@endsection
