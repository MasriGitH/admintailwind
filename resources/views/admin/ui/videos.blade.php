@extends('layouts.admin')

@section('title', 'Videos')
@section('page', 'videos')
@section('pageName', 'Videos')

@section('content')
<div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">

  <div class="mb-6">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white/90">Videos</h2>
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Responsive video embed components.</p>
  </div>

  <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

    {{-- YouTube Embed --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h3 class="mb-4 text-lg font-semibold text-gray-800 dark:text-white/90">YouTube Embed</h3>
      <div class="aspect-video overflow-hidden rounded-xl">
        <iframe
          class="h-full w-full"
          src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1&mute=1"
          title="YouTube video"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>
      </div>
    </div>

    {{-- Vimeo Embed --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <h3 class="mb-4 text-lg font-semibold text-gray-800 dark:text-white/90">Vimeo Embed</h3>
      <div class="aspect-video overflow-hidden rounded-xl">
        <iframe
          class="h-full w-full"
          src="https://player.vimeo.com/video/76979871?autoplay=1&muted=1"
          title="Vimeo video"
          frameborder="0"
          allow="autoplay; fullscreen; picture-in-picture"
          allowfullscreen
        ></iframe>
      </div>
    </div>

    {{-- Custom Play Button --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03] md:col-span-2">
      <h3 class="mb-4 text-lg font-semibold text-gray-800 dark:text-white/90">Custom Play Button</h3>
      <div
        x-data="{ playing: true }"
        class="relative aspect-video overflow-hidden rounded-xl bg-gray-900"
      >
        <template x-if="!playing">
          <div class="absolute inset-0 flex flex-col items-center justify-center gap-4">
            <div class="h-48 w-full bg-gradient-to-br from-gray-700 to-gray-900 opacity-80"></div>
            <button
              @click="playing = true"
              class="absolute flex h-16 w-16 items-center justify-center rounded-full bg-white/20 text-white backdrop-blur-sm hover:bg-white/30"
            >
              <svg class="ml-1 fill-white" width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.5 5.5v13l11-6.5-11-6.5Z" fill=""/></svg>
            </button>
            <p class="absolute bottom-4 text-sm text-white/70">Click to play video</p>
          </div>
        </template>
        <template x-if="playing">
          <iframe
            class="h-full w-full"
            src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1"
            title="Video"
            frameborder="0"
            allow="autoplay; encrypted-media"
            allowfullscreen
          ></iframe>
        </template>
      </div>
    </div>

  </div>
</div>
@endsection
