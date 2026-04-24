@extends('layouts.auth')

@section('title', 'Forgot Password')

@section('content')
<div class="min-h-screen flex">

  {{-- Left Side: Branding --}}
  <div class="hidden xl:flex xl:w-1/2 flex-col justify-between bg-brand-950 p-10 dark:bg-white/5 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
      <img src="{{ asset('tailadmin/images/grid-image/image-01.png') }}" alt="" class="w-full h-full object-cover" />
    </div>

    <div class="relative z-10">
      <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2">
        <img src="{{ asset('tailadmin/images/logo/logo.svg') }}" alt="Logo" class="h-8" />
      </a>
    </div>

    <div class="relative z-10">
      <h2 class="text-4xl font-bold text-white mb-4 leading-tight">
        Forgot your<br />password?
      </h2>
      <p class="text-gray-400 text-lg">
        No worries. Enter your email and we'll send you a link to reset your password.
      </p>
    </div>

    <div class="relative z-10 text-gray-500 text-sm">
      &copy; {{ date('Y') }} MyAdmin. All rights reserved.
    </div>
  </div>

  {{-- Right Side: Form --}}
  <div class="flex flex-1 flex-col items-center justify-center px-6 py-12 bg-white dark:bg-gray-900">
    <div class="w-full max-w-md">

      {{-- Mobile logo --}}
      <div class="xl:hidden flex justify-center mb-8">
        <a href="{{ route('admin.dashboard') }}">
          <img src="{{ asset('tailadmin/images/logo/logo-dark.svg') }}" alt="Logo" class="h-8 dark:hidden" />
          <img src="{{ asset('tailadmin/images/logo/logo.svg') }}" alt="Logo" class="h-8 hidden dark:block" />
        </a>
      </div>

      {{-- Back to login --}}
      <a href="{{ route('login') }}" class="inline-flex items-center gap-1.5 text-sm text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 mb-8 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        Back to Sign In
      </a>

      <div class="mb-8">
        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-brand-50 dark:bg-brand-500/10 mb-5">
          <svg class="h-7 w-7 text-brand-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
          </svg>
        </div>
        <h1 class="text-2xl font-bold text-gray-800 dark:text-white/90 mb-2">Reset Password</h1>
        <p class="text-gray-500 dark:text-gray-400 text-sm">Enter your email address and we'll send you a password reset link.</p>
      </div>

      {{-- Success message --}}
      @if (session('status'))
        <div class="mb-5 rounded-xl border border-success-200 bg-success-50 px-4 py-3 text-sm text-success-700 dark:border-success-500/30 dark:bg-success-500/10 dark:text-success-400">
          {{ session('status') }}
        </div>
      @endif

      {{-- Error --}}
      @if ($errors->any())
        <div class="mb-5 rounded-xl border border-error-200 bg-error-50 px-4 py-3 text-sm text-error-700 dark:border-error-500/30 dark:bg-error-500/10 dark:text-error-400">
          {{ $errors->first() }}
        </div>
      @endif

      <form action="{{ route('password.email') }}" method="POST" class="space-y-5">
        @csrf

        {{-- Email --}}
        <div>
          <label for="email" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">
            Email Address
          </label>
          <input
            id="email"
            name="email"
            type="email"
            value="{{ old('email') }}"
            autocomplete="email"
            required
            placeholder="admin@example.com"
            class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-gray-800 placeholder-gray-400 outline-none transition focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 dark:border-gray-700 dark:bg-gray-800 dark:text-white/90 dark:placeholder-gray-500 dark:focus:border-brand-400"
          />
        </div>

        {{-- Submit --}}
        <button
          type="submit"
          class="w-full rounded-xl bg-brand-500 px-4 py-3 text-sm font-semibold text-white transition hover:bg-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900"
        >
          Send Reset Link
        </button>
      </form>
    </div>
  </div>

</div>
@endsection
