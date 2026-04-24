@extends('layouts.auth')

@section('title', 'Create Account')

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
        Create your<br />account today
      </h2>
      <p class="text-gray-400 text-lg">
        Join us and start managing your dashboard, track orders, and monitor your business.
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

      <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-white/90 mb-2">Create Account</h1>
        <p class="text-gray-500 dark:text-gray-400 text-sm">Fill in your details to create a new account.</p>
      </div>

      {{-- Error messages --}}
      @if ($errors->any())
        <div class="mb-5 rounded-xl border border-error-200 bg-error-50 px-4 py-3 text-sm text-error-700 dark:border-error-500/30 dark:bg-error-500/10 dark:text-error-400">
          <ul class="list-disc list-inside space-y-1">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form action="{{ route('register') }}" method="POST" class="space-y-5">
        @csrf

        {{-- Name --}}
        <div>
          <label for="name" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">
            Full Name
          </label>
          <input
            id="name"
            name="name"
            type="text"
            value="{{ old('name') }}"
            autocomplete="name"
            required
            placeholder="John Doe"
            class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-gray-800 placeholder-gray-400 outline-none transition focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 dark:border-gray-700 dark:bg-gray-800 dark:text-white/90 dark:placeholder-gray-500 dark:focus:border-brand-400"
          />
        </div>

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

        {{-- Password --}}
        <div x-data="{ showPassword: false }">
          <label for="password" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">
            Password
          </label>
          <div class="relative">
            <input
              id="password"
              name="password"
              :type="showPassword ? 'text' : 'password'"
              autocomplete="new-password"
              required
              placeholder="••••••••"
              class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 pr-12 text-sm text-gray-800 placeholder-gray-400 outline-none transition focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 dark:border-gray-700 dark:bg-gray-800 dark:text-white/90 dark:placeholder-gray-500 dark:focus:border-brand-400"
            />
            <button
              type="button"
              @click="showPassword = !showPassword"
              class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300"
            >
              <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
              </svg>
              <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
              </svg>
            </button>
          </div>
        </div>

        {{-- Confirm Password --}}
        <div x-data="{ showConfirm: false }">
          <label for="password_confirmation" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">
            Confirm Password
          </label>
          <div class="relative">
            <input
              id="password_confirmation"
              name="password_confirmation"
              :type="showConfirm ? 'text' : 'password'"
              autocomplete="new-password"
              required
              placeholder="••••••••"
              class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 pr-12 text-sm text-gray-800 placeholder-gray-400 outline-none transition focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 dark:border-gray-700 dark:bg-gray-800 dark:text-white/90 dark:placeholder-gray-500 dark:focus:border-brand-400"
            />
            <button
              type="button"
              @click="showConfirm = !showConfirm"
              class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300"
            >
              <svg x-show="!showConfirm" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
              </svg>
              <svg x-show="showConfirm" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
              </svg>
            </button>
          </div>
        </div>

        {{-- Submit --}}
        <button
          type="submit"
          class="w-full rounded-xl bg-brand-500 px-4 py-3 text-sm font-semibold text-white transition hover:bg-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900"
        >
          Create Account
        </button>

        {{-- Already have account --}}
        <p class="text-center text-sm text-gray-500 dark:text-gray-400">
          Already have an account?
          <a href="{{ route('login') }}" class="font-medium text-brand-500 hover:text-brand-600 dark:text-brand-400">
            Sign In
          </a>
        </p>
      </form>
    </div>
  </div>

</div>
@endsection
