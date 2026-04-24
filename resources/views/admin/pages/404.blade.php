@extends('layouts.admin')

@section('title', '404 Error')
@section('page', 'page404')
@section('pageName', '404 Error')

@section('content')
<div class="flex min-h-[calc(100vh-80px)] flex-col items-center justify-center p-6 text-center">

  <h1 class="text-[120px] font-extrabold leading-none text-brand-500 dark:text-brand-400 select-none">
    404
  </h1>

  <h2 class="mt-4 text-2xl font-bold text-gray-800 dark:text-white/90">
    Page Not Found
  </h2>

  <p class="mt-3 max-w-sm text-sm text-gray-500 dark:text-gray-400">
    The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
  </p>

  <div class="mt-8 flex items-center gap-3">
    <a
      href="{{ route('admin.dashboard') }}"
      class="inline-flex items-center gap-2 rounded-lg bg-brand-500 px-5 py-2.5 text-sm font-medium text-white hover:bg-brand-600 transition-colors"
    >
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM12.75 16.75C12.75 17.1642 12.4142 17.5 12 17.5C11.5858 17.5 11.25 17.1642 11.25 16.75V11.25C11.25 10.8358 11.5858 10.5 12 10.5C12.4142 10.5 12.75 10.8358 12.75 11.25V16.75ZM12 9.5C12.5523 9.5 13 9.05228 13 8.5C13 7.94772 12.5523 7.5 12 7.5C11.4477 7.5 11 7.94772 11 8.5C11 9.05228 11.4477 9.5 12 9.5Z" fill="currentColor"/>
      </svg>
      Back to Dashboard
    </a>
    <a
      href="javascript:history.back()"
      class="inline-flex items-center gap-2 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50 transition-colors dark:border-gray-700 dark:bg-white/[0.03] dark:text-gray-300 dark:hover:bg-white/[0.06]"
    >
      Go Back
    </a>
  </div>

</div>
@endsection
