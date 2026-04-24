@extends('layouts.admin')

@section('title', 'User Profile')
@section('page', 'profile')
@section('pageName', 'User Profile')

@section('content')
<div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">

  {{-- Page Header --}}
  <div class="mb-6">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white/90">User Profile</h2>
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Manage your personal information and account settings.</p>
  </div>

  <div class="grid grid-cols-12 gap-6">

    {{-- Profile Card --}}
    <div class="col-span-12 xl:col-span-4">
      <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">

        {{-- Avatar --}}
        <div class="flex flex-col items-center text-center">
          <div class="relative mb-4">
            <div class="flex h-24 w-24 items-center justify-center rounded-full bg-brand-100 dark:bg-brand-500/20">
              <span class="text-4xl font-bold text-brand-600 dark:text-brand-400">
                {{ strtoupper(substr(auth()->user()?->name ?? 'U', 0, 1)) }}
              </span>
            </div>
          </div>

          <h3 class="text-xl font-semibold text-gray-800 dark:text-white/90">
            {{ auth()->user()?->name ?? 'Guest User' }}
          </h3>
          <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
            {{ auth()->user()?->email ?? '' }}
          </p>

          <span class="mt-3 inline-flex items-center gap-1.5 rounded-full bg-success-50 px-3 py-1 text-xs font-medium text-success-700 dark:bg-success-500/10 dark:text-success-400">
            <span class="h-1.5 w-1.5 rounded-full bg-success-500"></span>
            Active
          </span>
        </div>

        <div class="mt-6 border-t border-gray-200 pt-6 dark:border-gray-800">
          <dl class="space-y-3">
            <div class="flex items-center gap-3">
              <svg class="h-5 w-5 flex-shrink-0 text-gray-400" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.75 5.25a.75.75 0 0 1 .75-.75h15a.75.75 0 0 1 .75.75v1.5a.75.75 0 0 1-.75.75H4.5a.75.75 0 0 1-.75-.75v-1.5Zm0 6a.75.75 0 0 1 .75-.75h15a.75.75 0 0 1 .75.75v1.5a.75.75 0 0 1-.75.75H4.5a.75.75 0 0 1-.75-.75v-1.5Zm0 6a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5a.75.75 0 0 1-.75-.75Z" fill="currentColor"/>
              </svg>
              <div>
                <p class="text-xs text-gray-400 dark:text-gray-500">Role</p>
                <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Administrator</p>
              </div>
            </div>

            <div class="flex items-center gap-3">
              <svg class="h-5 w-5 flex-shrink-0 text-gray-400" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" fill="currentColor"/>
              </svg>
              <div>
                <p class="text-xs text-gray-400 dark:text-gray-500">Member Since</p>
                <p class="text-sm font-medium text-gray-700 dark:text-gray-300">
                  {{ auth()->user()?->created_at?->format('M d, Y') ?? now()->format('M d, Y') }}
                </p>
              </div>
            </div>
          </dl>
        </div>
      </div>
    </div>

    {{-- Edit Profile Form --}}
    <div class="col-span-12 xl:col-span-8">

      {{-- Personal Information --}}
      <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
        <h4 class="mb-5 text-lg font-semibold text-gray-800 dark:text-white/90">Personal Information</h4>

        @if(session('success'))
          <div class="mb-5 rounded-lg bg-success-50 px-4 py-3 text-sm text-success-700 dark:bg-success-500/10 dark:text-success-400">
            {{ session('success') }}
          </div>
        @endif

        @if($errors->any())
          <div class="mb-5 rounded-lg bg-error-50 px-4 py-3 text-sm text-error-700 dark:bg-error-500/10 dark:text-error-400">
            <ul class="list-inside list-disc space-y-1">
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form action="{{ route('admin.profile.update') }}" method="POST">
          @csrf
          @method('PATCH')

          <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
            <div>
              <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">Full Name</label>
              <input
                type="text"
                name="name"
                value="{{ old('name', auth()->user()?->name) }}"
                class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 focus:border-brand-500 focus:outline-none dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:focus:border-brand-500"
                required
              />
            </div>

            <div>
              <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">Email Address</label>
              <input
                type="email"
                name="email"
                value="{{ old('email', auth()->user()?->email) }}"
                class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 focus:border-brand-500 focus:outline-none dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:focus:border-brand-500"
                required
              />
            </div>
          </div>

          <div class="mt-5 flex justify-end">
            <button
              type="submit"
              class="rounded-lg bg-brand-500 px-5 py-2.5 text-sm font-medium text-white hover:bg-brand-600 focus:outline-none"
            >
              Save Changes
            </button>
          </div>
        </form>
      </div>

      {{-- Change Password --}}
      <div class="mt-6 rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
        <h4 class="mb-5 text-lg font-semibold text-gray-800 dark:text-white/90">Change Password</h4>

        @if(session('password_success'))
          <div class="mb-5 rounded-lg bg-success-50 px-4 py-3 text-sm text-success-700 dark:bg-success-500/10 dark:text-success-400">
            {{ session('password_success') }}
          </div>
        @endif

        <form action="{{ route('admin.profile.password') }}" method="POST">
          @csrf
          @method('PATCH')

          <div class="space-y-5">
            <div>
              <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">Current Password</label>
              <input
                type="password"
                name="current_password"
                class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 focus:border-brand-500 focus:outline-none dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:focus:border-brand-500"
                required
              />
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
              <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">New Password</label>
                <input
                  type="password"
                  name="password"
                  class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 focus:border-brand-500 focus:outline-none dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:focus:border-brand-500"
                  required
                />
              </div>

              <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">Confirm New Password</label>
                <input
                  type="password"
                  name="password_confirmation"
                  class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 focus:border-brand-500 focus:outline-none dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:focus:border-brand-500"
                  required
                />
              </div>
            </div>
          </div>

          <div class="mt-5 flex justify-end">
            <button
              type="submit"
              class="rounded-lg bg-brand-500 px-5 py-2.5 text-sm font-medium text-white hover:bg-brand-600 focus:outline-none"
            >
              Update Password
            </button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
@endsection
