@extends('layouts.admin')

@section('title', 'Form Elements')
@section('page', 'formElements')
@section('pageName', 'Form Elements')

@section('content')
<div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">

  <div class="mb-6">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white/90">Form Elements</h2>
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Common form input components and controls.</p>
  </div>

  <div class="grid grid-cols-1 gap-6 xl:grid-cols-2">

    {{-- Text Inputs --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h4 class="mb-5 text-base font-semibold text-gray-800 dark:text-white/90">Input Fields</h4>
      <div class="space-y-4">

        <div>
          <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">Default Input</label>
          <input type="text" placeholder="Default input"
            class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 focus:border-brand-500 focus:outline-none dark:border-gray-700 dark:bg-gray-800 dark:text-white" />
        </div>

        <div>
          <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">Input with placeholder</label>
          <input type="text" placeholder="Enter your name"
            class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 focus:border-brand-500 focus:outline-none dark:border-gray-700 dark:bg-gray-800 dark:text-white" />
        </div>

        <div>
          <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">Disabled Input</label>
          <input type="text" placeholder="Disabled input" disabled
            class="w-full cursor-not-allowed rounded-lg border border-gray-200 bg-gray-50 px-4 py-2.5 text-sm text-gray-400 dark:border-gray-700 dark:bg-gray-800/50 dark:text-gray-500" />
        </div>

        <div>
          <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">Input with Icon</label>
          <div class="relative">
            <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
              <svg class="fill-current" width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 4C9.79086 4 8 5.79086 8 8C8 10.2091 9.79086 12 12 12C14.2091 12 16 10.2091 16 8C16 5.79086 14.2091 4 12 4ZM6 8C6 4.68629 8.68629 2 12 2C15.3137 2 18 4.68629 18 8C18 11.3137 15.3137 14 12 14C8.68629 14 6 11.3137 6 8ZM6 20C6 17.7909 7.79086 16 10 16H14C16.2091 16 18 17.7909 18 20V21C18 21.5523 18.4477 22 19 22C19.5523 22 20 21.5523 20 21V20C20 16.6863 17.3137 14 14 14H10C6.68629 14 4 16.6863 4 20V21C4 21.5523 4.44772 22 5 22C5.55228 22 6 21.5523 6 21V20Z" fill=""/>
              </svg>
            </span>
            <input type="text" placeholder="Username"
              class="w-full rounded-lg border border-gray-300 py-2.5 pl-10 pr-4 text-sm text-gray-800 focus:border-brand-500 focus:outline-none dark:border-gray-700 dark:bg-gray-800 dark:text-white" />
          </div>
        </div>

        <div>
          <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">Error State</label>
          <input type="email" value="invalid-email"
            class="w-full rounded-lg border border-error-400 px-4 py-2.5 text-sm text-gray-800 focus:border-error-500 focus:outline-none dark:border-error-500 dark:bg-gray-800 dark:text-white" />
          <p class="mt-1 text-xs text-error-500">Please enter a valid email address.</p>
        </div>

        <div>
          <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">Success State</label>
          <input type="text" value="Valid input"
            class="w-full rounded-lg border border-success-400 px-4 py-2.5 text-sm text-gray-800 focus:border-success-500 focus:outline-none dark:border-success-500 dark:bg-gray-800 dark:text-white" />
          <p class="mt-1 text-xs text-success-500">Looks good!</p>
        </div>

      </div>
    </div>

    {{-- Textarea --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h4 class="mb-5 text-base font-semibold text-gray-800 dark:text-white/90">Textarea</h4>
      <div class="space-y-4">

        <div>
          <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">Default Textarea</label>
          <textarea rows="4" placeholder="Type your message..."
            class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 focus:border-brand-500 focus:outline-none dark:border-gray-700 dark:bg-gray-800 dark:text-white"></textarea>
        </div>

        <div>
          <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">Disabled Textarea</label>
          <textarea rows="3" disabled placeholder="Disabled textarea"
            class="w-full cursor-not-allowed rounded-lg border border-gray-200 bg-gray-50 px-4 py-2.5 text-sm text-gray-400 dark:border-gray-700 dark:bg-gray-800/50 dark:text-gray-500"></textarea>
        </div>

      </div>
    </div>

    {{-- Select --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h4 class="mb-5 text-base font-semibold text-gray-800 dark:text-white/90">Select</h4>
      <div class="space-y-4">

        <div>
          <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">Default Select</label>
          <select class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 focus:border-brand-500 focus:outline-none dark:border-gray-700 dark:bg-gray-800 dark:text-white">
            <option value="">Select an option</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
        </div>

        <div>
          <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">Disabled Select</label>
          <select disabled class="w-full cursor-not-allowed rounded-lg border border-gray-200 bg-gray-50 px-4 py-2.5 text-sm text-gray-400 dark:border-gray-700 dark:bg-gray-800/50 dark:text-gray-500">
            <option>Disabled select</option>
          </select>
        </div>

      </div>
    </div>

    {{-- Checkboxes & Radios --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h4 class="mb-5 text-base font-semibold text-gray-800 dark:text-white/90">Checkboxes &amp; Radios</h4>

      <div class="space-y-5">
        <div>
          <p class="mb-3 text-sm font-medium text-gray-700 dark:text-gray-300">Checkboxes</p>
          <div class="space-y-2.5">
            <label class="flex cursor-pointer items-center gap-3 text-sm text-gray-700 dark:text-gray-300">
              <input type="checkbox" checked class="h-4 w-4 cursor-pointer rounded border-gray-300 text-brand-500 focus:ring-brand-500 dark:border-gray-600 dark:bg-gray-800" />
              Checked
            </label>
            <label class="flex cursor-pointer items-center gap-3 text-sm text-gray-700 dark:text-gray-300">
              <input type="checkbox" class="h-4 w-4 cursor-pointer rounded border-gray-300 text-brand-500 focus:ring-brand-500 dark:border-gray-600 dark:bg-gray-800" />
              Unchecked
            </label>
            <label class="flex cursor-not-allowed items-center gap-3 text-sm text-gray-400">
              <input type="checkbox" disabled class="h-4 w-4 cursor-not-allowed rounded border-gray-200 text-brand-300 dark:border-gray-700" />
              Disabled
            </label>
          </div>
        </div>

        <div>
          <p class="mb-3 text-sm font-medium text-gray-700 dark:text-gray-300">Radio Buttons</p>
          <div class="space-y-2.5">
            <label class="flex cursor-pointer items-center gap-3 text-sm text-gray-700 dark:text-gray-300">
              <input type="radio" name="radio-demo" checked class="h-4 w-4 cursor-pointer border-gray-300 text-brand-500 focus:ring-brand-500 dark:border-gray-600 dark:bg-gray-800" />
              Option 1
            </label>
            <label class="flex cursor-pointer items-center gap-3 text-sm text-gray-700 dark:text-gray-300">
              <input type="radio" name="radio-demo" class="h-4 w-4 cursor-pointer border-gray-300 text-brand-500 focus:ring-brand-500 dark:border-gray-600 dark:bg-gray-800" />
              Option 2
            </label>
            <label class="flex cursor-not-allowed items-center gap-3 text-sm text-gray-400">
              <input type="radio" name="radio-demo" disabled class="h-4 w-4 cursor-not-allowed border-gray-200 text-brand-300 dark:border-gray-700" />
              Disabled
            </label>
          </div>
        </div>
      </div>
    </div>

    {{-- Toggle Switch --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h4 class="mb-5 text-base font-semibold text-gray-800 dark:text-white/90">Toggle Switch</h4>
      <div class="space-y-4">

        <label x-data="{ on: true }" class="flex cursor-pointer items-center gap-3">
          <div class="relative">
            <input type="checkbox" class="sr-only" x-model="on" />
            <div class="h-6 w-11 rounded-full transition-colors duration-200"
              :class="on ? 'bg-brand-500' : 'bg-gray-300 dark:bg-gray-700'"></div>
            <div class="absolute top-0.5 left-0.5 h-5 w-5 rounded-full bg-white shadow transition-transform duration-200"
              :class="on ? 'translate-x-5' : 'translate-x-0'"></div>
          </div>
          <span class="text-sm font-medium text-gray-700 dark:text-gray-300" x-text="on ? 'Enabled' : 'Disabled'"></span>
        </label>

        <label x-data="{ on: false }" class="flex cursor-pointer items-center gap-3">
          <div class="relative">
            <input type="checkbox" class="sr-only" x-model="on" />
            <div class="h-6 w-11 rounded-full transition-colors duration-200"
              :class="on ? 'bg-brand-500' : 'bg-gray-300 dark:bg-gray-700'"></div>
            <div class="absolute top-0.5 left-0.5 h-5 w-5 rounded-full bg-white shadow transition-transform duration-200"
              :class="on ? 'translate-x-5' : 'translate-x-0'"></div>
          </div>
          <span class="text-sm font-medium text-gray-700 dark:text-gray-300" x-text="on ? 'Enabled' : 'Disabled'"></span>
        </label>

        <label class="flex cursor-not-allowed items-center gap-3 opacity-50">
          <div class="relative">
            <input type="checkbox" class="sr-only" disabled />
            <div class="h-6 w-11 rounded-full bg-gray-300 dark:bg-gray-700"></div>
            <div class="absolute top-0.5 left-0.5 h-5 w-5 rounded-full bg-white shadow"></div>
          </div>
          <span class="text-sm font-medium text-gray-400">Disabled</span>
        </label>

      </div>
    </div>

    {{-- File Upload --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h4 class="mb-5 text-base font-semibold text-gray-800 dark:text-white/90">File Upload</h4>
      <div class="space-y-4">

        <div>
          <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">Default File Input</label>
          <input type="file"
            class="w-full rounded-lg border border-gray-300 px-4 py-2 text-sm text-gray-700 file:mr-3 file:rounded file:border-0 file:bg-brand-50 file:px-3 file:py-1 file:text-xs file:font-medium file:text-brand-600 hover:file:bg-brand-100 focus:outline-none dark:border-gray-700 dark:bg-gray-800 dark:text-gray-300 dark:file:bg-brand-500/10 dark:file:text-brand-400" />
        </div>

        <div>
          <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">Drag & Drop Zone</label>
          <div x-data="{ dragging: false }"
            @dragover.prevent="dragging = true"
            @dragleave.prevent="dragging = false"
            @drop.prevent="dragging = false"
            class="flex flex-col items-center justify-center rounded-lg border-2 border-dashed py-8 transition-colors"
            :class="dragging ? 'border-brand-400 bg-brand-50 dark:bg-brand-500/10' : 'border-gray-300 dark:border-gray-700'"
          >
            <svg class="mb-2 h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.19l1.72-1.72a.75.75 0 1 1 1.06 1.06l-3 3a.75.75 0 0 1-1.06 0l-3-3a.75.75 0 0 1 1.06-1.06l1.72 1.72V4.5a.75.75 0 0 1 .75-.75Zm-7.5 15a.75.75 0 0 1 .75-.75h13.5a.75.75 0 0 1 0 1.5H5.25a.75.75 0 0 1-.75-.75Z" fill="currentColor"/>
            </svg>
            <p class="text-sm text-gray-500 dark:text-gray-400">Drag & drop files here, or <span class="font-medium text-brand-500">browse</span></p>
            <p class="mt-1 text-xs text-gray-400">PNG, JPG, PDF up to 10 MB</p>
          </div>
        </div>

      </div>
    </div>

  </div>
</div>
@endsection
