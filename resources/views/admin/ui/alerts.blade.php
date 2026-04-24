@extends('layouts.admin')

@section('title', 'Alerts')
@section('page', 'alerts')
@section('pageName', 'Alerts')

@section('content')
<div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">

  <div class="mb-6">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white/90">Alerts</h2>
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Alert components for displaying important messages.</p>
  </div>

  <div class="grid grid-cols-1 gap-6">

    {{-- Solid Alerts --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h3 class="mb-4 text-lg font-semibold text-gray-800 dark:text-white/90">Solid Alerts</h3>
      <div class="flex flex-col gap-3">
        <div class="flex items-start gap-3 rounded-xl bg-blue-500 px-4 py-3 text-white">
          <svg class="mt-0.5 shrink-0 fill-white" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10 1.875a8.125 8.125 0 1 0 0 16.25 8.125 8.125 0 0 0 0-16.25ZM9.25 6.5a.75.75 0 0 1 1.5 0v4a.75.75 0 0 1-1.5 0v-4Zm.75 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" fill=""/></svg>
          <p class="text-sm font-medium">This is a primary info alert — check it out!</p>
        </div>
        <div class="flex items-start gap-3 rounded-xl bg-success-500 px-4 py-3 text-white">
          <svg class="mt-0.5 shrink-0 fill-white" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10 1.875a8.125 8.125 0 1 0 0 16.25 8.125 8.125 0 0 0 0-16.25ZM13.78 8.28a.75.75 0 0 0-1.06-1.06L9 10.94 7.28 9.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.06 0l4.25-4.25Z" fill=""/></svg>
          <p class="text-sm font-medium">This is a success alert — check it out!</p>
        </div>
        <div class="flex items-start gap-3 rounded-xl bg-warning-500 px-4 py-3 text-white">
          <svg class="mt-0.5 shrink-0 fill-white" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10 1.875a8.125 8.125 0 1 0 0 16.25 8.125 8.125 0 0 0 0-16.25ZM9.25 6.5a.75.75 0 0 1 1.5 0v4a.75.75 0 0 1-1.5 0v-4Zm.75 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" fill=""/></svg>
          <p class="text-sm font-medium">This is a warning alert — check it out!</p>
        </div>
        <div class="flex items-start gap-3 rounded-xl bg-error-500 px-4 py-3 text-white">
          <svg class="mt-0.5 shrink-0 fill-white" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10 1.875a8.125 8.125 0 1 0 0 16.25 8.125 8.125 0 0 0 0-16.25ZM9.25 6.5a.75.75 0 0 1 1.5 0v4a.75.75 0 0 1-1.5 0v-4Zm.75 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" fill=""/></svg>
          <p class="text-sm font-medium">This is a danger alert — check it out!</p>
        </div>
      </div>
    </div>

    {{-- Light Alerts --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h3 class="mb-4 text-lg font-semibold text-gray-800 dark:text-white/90">Light Alerts</h3>
      <div class="flex flex-col gap-3">
        <div class="flex items-start gap-3 rounded-xl bg-blue-50 px-4 py-3 dark:bg-blue-500/10">
          <svg class="mt-0.5 shrink-0 fill-blue-500" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10 1.875a8.125 8.125 0 1 0 0 16.25 8.125 8.125 0 0 0 0-16.25ZM9.25 6.5a.75.75 0 0 1 1.5 0v4a.75.75 0 0 1-1.5 0v-4Zm.75 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" fill=""/></svg>
          <p class="text-sm font-medium text-blue-700 dark:text-blue-400">This is a primary info alert — check it out!</p>
        </div>
        <div class="flex items-start gap-3 rounded-xl bg-success-50 px-4 py-3 dark:bg-success-500/10">
          <svg class="mt-0.5 shrink-0 fill-success-500" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10 1.875a8.125 8.125 0 1 0 0 16.25 8.125 8.125 0 0 0 0-16.25ZM13.78 8.28a.75.75 0 0 0-1.06-1.06L9 10.94 7.28 9.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.06 0l4.25-4.25Z" fill=""/></svg>
          <p class="text-sm font-medium text-success-700 dark:text-success-400">This is a success alert — check it out!</p>
        </div>
        <div class="flex items-start gap-3 rounded-xl bg-warning-50 px-4 py-3 dark:bg-warning-500/10">
          <svg class="mt-0.5 shrink-0 fill-warning-500" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10 1.875a8.125 8.125 0 1 0 0 16.25 8.125 8.125 0 0 0 0-16.25ZM9.25 6.5a.75.75 0 0 1 1.5 0v4a.75.75 0 0 1-1.5 0v-4Zm.75 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" fill=""/></svg>
          <p class="text-sm font-medium text-warning-700 dark:text-warning-400">This is a warning alert — check it out!</p>
        </div>
        <div class="flex items-start gap-3 rounded-xl bg-error-50 px-4 py-3 dark:bg-error-500/10">
          <svg class="mt-0.5 shrink-0 fill-error-500" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10 1.875a8.125 8.125 0 1 0 0 16.25 8.125 8.125 0 0 0 0-16.25ZM9.25 6.5a.75.75 0 0 1 1.5 0v4a.75.75 0 0 1-1.5 0v-4Zm.75 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" fill=""/></svg>
          <p class="text-sm font-medium text-error-700 dark:text-error-400">This is a danger alert — check it out!</p>
        </div>
      </div>
    </div>

    {{-- Dismissible Alerts --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h3 class="mb-4 text-lg font-semibold text-gray-800 dark:text-white/90">Dismissible Alerts</h3>
      <div class="flex flex-col gap-3">
        <div x-data="{ show: true }" x-show="show" class="flex items-start justify-between gap-3 rounded-xl bg-blue-50 px-4 py-3 dark:bg-blue-500/10">
          <p class="text-sm font-medium text-blue-700 dark:text-blue-400">This is a dismissible alert — click the X to close.</p>
          <button @click="show = false" class="shrink-0 text-blue-400 hover:text-blue-600"><svg class="fill-current" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.47 3.47a.75.75 0 0 1 1.06 0L8 6.94l3.47-3.47a.75.75 0 1 1 1.06 1.06L9.06 8l3.47 3.47a.75.75 0 1 1-1.06 1.06L8 9.06l-3.47 3.47a.75.75 0 0 1-1.06-1.06L6.94 8 3.47 4.53a.75.75 0 0 1 0-1.06Z" fill=""/></svg></button>
        </div>
        <div x-data="{ show: true }" x-show="show" class="flex items-start justify-between gap-3 rounded-xl bg-success-50 px-4 py-3 dark:bg-success-500/10">
          <p class="text-sm font-medium text-success-700 dark:text-success-400">This is a dismissible success alert.</p>
          <button @click="show = false" class="shrink-0 text-success-400 hover:text-success-600"><svg class="fill-current" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.47 3.47a.75.75 0 0 1 1.06 0L8 6.94l3.47-3.47a.75.75 0 1 1 1.06 1.06L9.06 8l3.47 3.47a.75.75 0 1 1-1.06 1.06L8 9.06l-3.47 3.47a.75.75 0 0 1-1.06-1.06L6.94 8 3.47 4.53a.75.75 0 0 1 0-1.06Z" fill=""/></svg></button>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
