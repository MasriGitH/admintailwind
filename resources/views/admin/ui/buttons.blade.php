@extends('layouts.admin')

@section('title', 'Buttons')
@section('page', 'buttons')
@section('pageName', 'Buttons')

@section('content')
<div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">

  <div class="mb-6">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white/90">Buttons</h2>
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Button components in various styles, sizes, and states.</p>
  </div>

  <div class="grid grid-cols-1 gap-6">

    {{-- Solid Buttons --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h3 class="mb-4 text-lg font-semibold text-gray-800 dark:text-white/90">Solid Buttons</h3>
      <div class="flex flex-wrap gap-3">
        <button class="rounded-lg bg-brand-500 px-4 py-2 text-sm font-medium text-white hover:bg-brand-600">Primary</button>
        <button class="rounded-lg bg-success-500 px-4 py-2 text-sm font-medium text-white hover:bg-success-600">Success</button>
        <button class="rounded-lg bg-warning-500 px-4 py-2 text-sm font-medium text-white hover:bg-warning-600">Warning</button>
        <button class="rounded-lg bg-error-500 px-4 py-2 text-sm font-medium text-white hover:bg-error-600">Danger</button>
        <button class="rounded-lg bg-gray-700 px-4 py-2 text-sm font-medium text-white hover:bg-gray-800 dark:bg-gray-600 dark:hover:bg-gray-500">Dark</button>
      </div>
    </div>

    {{-- Outlined Buttons --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h3 class="mb-4 text-lg font-semibold text-gray-800 dark:text-white/90">Outlined Buttons</h3>
      <div class="flex flex-wrap gap-3">
        <button class="rounded-lg border border-brand-500 px-4 py-2 text-sm font-medium text-brand-500 hover:bg-brand-50 dark:hover:bg-brand-500/10">Primary</button>
        <button class="rounded-lg border border-success-500 px-4 py-2 text-sm font-medium text-success-500 hover:bg-success-50 dark:hover:bg-success-500/10">Success</button>
        <button class="rounded-lg border border-warning-500 px-4 py-2 text-sm font-medium text-warning-500 hover:bg-warning-50 dark:hover:bg-warning-500/10">Warning</button>
        <button class="rounded-lg border border-error-500 px-4 py-2 text-sm font-medium text-error-500 hover:bg-error-50 dark:hover:bg-error-500/10">Danger</button>
        <button class="rounded-lg border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 dark:border-gray-600 dark:text-gray-400 dark:hover:bg-white/5">Dark</button>
      </div>
    </div>

    {{-- Button Sizes --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h3 class="mb-4 text-lg font-semibold text-gray-800 dark:text-white/90">Button Sizes</h3>
      <div class="flex flex-wrap items-center gap-3">
        <button class="rounded-lg bg-brand-500 px-2.5 py-1.5 text-xs font-medium text-white hover:bg-brand-600">Extra Small</button>
        <button class="rounded-lg bg-brand-500 px-3.5 py-2 text-sm font-medium text-white hover:bg-brand-600">Small</button>
        <button class="rounded-lg bg-brand-500 px-4 py-2.5 text-sm font-medium text-white hover:bg-brand-600">Medium</button>
        <button class="rounded-lg bg-brand-500 px-5 py-3 text-base font-medium text-white hover:bg-brand-600">Large</button>
        <button class="rounded-lg bg-brand-500 px-6 py-3.5 text-lg font-medium text-white hover:bg-brand-600">Extra Large</button>
      </div>
    </div>

    {{-- Icon Buttons --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h3 class="mb-4 text-lg font-semibold text-gray-800 dark:text-white/90">Icon Buttons</h3>
      <div class="flex flex-wrap gap-3">
        <button class="inline-flex items-center gap-2 rounded-lg bg-brand-500 px-4 py-2 text-sm font-medium text-white hover:bg-brand-600">
          <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 1.5A.75.75 0 0 1 8.75 2.25V7.25H13.75A.75.75 0 0 1 13.75 8.75H8.75V13.75A.75.75 0 0 1 7.25 13.75V8.75H2.25A.75.75 0 0 1 2.25 7.25H7.25V2.25A.75.75 0 0 1 8 1.5Z" fill=""/></svg>
          Add New
        </button>
        <button class="inline-flex items-center gap-2 rounded-lg border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 dark:border-gray-600 dark:text-gray-400 dark:hover:bg-white/5">
          <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.078 4.232a.75.75 0 0 1 0 1.06l-5.5 5.5a.75.75 0 0 1-1.06-1.06l5.5-5.5a.75.75 0 0 1 1.06 0Z" fill=""/><path fill-rule="evenodd" clip-rule="evenodd" d="M4.518 4.232a.75.75 0 0 0 0 1.06l5.5 5.5a.75.75 0 0 0 1.06-1.06l-5.5-5.5a.75.75 0 0 0-1.06 0Z" fill=""/></svg>
          Cancel
        </button>
        <button class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-brand-500 text-white hover:bg-brand-600">
          <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 1.5A.75.75 0 0 1 8.75 2.25V7.25H13.75A.75.75 0 0 1 13.75 8.75H8.75V13.75A.75.75 0 0 1 7.25 13.75V8.75H2.25A.75.75 0 0 1 2.25 7.25H7.25V2.25A.75.75 0 0 1 8 1.5Z" fill=""/></svg>
        </button>
      </div>
    </div>

    {{-- Loading / Disabled --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h3 class="mb-4 text-lg font-semibold text-gray-800 dark:text-white/90">Loading / Disabled</h3>
      <div class="flex flex-wrap gap-3">
        <button disabled class="inline-flex cursor-not-allowed items-center gap-2 rounded-lg bg-brand-500 px-4 py-2 text-sm font-medium text-white opacity-60">
          <svg class="h-4 w-4 animate-spin fill-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm0 18a8 8 0 1 1 8-8 8.009 8.009 0 0 1-8 8Z" opacity=".4" fill=""/><path d="M20 12h2A10.011 10.011 0 0 0 12 2v2a8.009 8.009 0 0 1 8 8Z" fill=""/></svg>
          Loading...
        </button>
        <button disabled class="cursor-not-allowed rounded-lg bg-brand-500 px-4 py-2 text-sm font-medium text-white opacity-60">Disabled</button>
      </div>
    </div>

  </div>
</div>
@endsection
