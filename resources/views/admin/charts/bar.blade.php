@extends('layouts.admin')

@section('title', 'Bar Chart')
@section('page', 'barChart')
@section('pageName', 'Bar Chart')

@section('content')
<div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">

  <div class="mb-6">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white/90">Bar Chart</h2>
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Interactive bar chart built with Chart.js.</p>
  </div>

  <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">

    {{-- Vertical Bar --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <div class="mb-4 flex items-center justify-between">
        <h4 class="text-base font-semibold text-gray-800 dark:text-white/90">Monthly Orders</h4>
        <span class="text-xs text-gray-400">2026</span>
      </div>
      <div class="relative h-64">
        <canvas id="barChartVertical"></canvas>
      </div>
    </div>

    {{-- Horizontal Bar --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <div class="mb-4 flex items-center justify-between">
        <h4 class="text-base font-semibold text-gray-800 dark:text-white/90">Top Categories</h4>
        <span class="text-xs text-gray-400">by Revenue</span>
      </div>
      <div class="relative h-64">
        <canvas id="barChartHorizontal"></canvas>
      </div>
    </div>

    {{-- Grouped Bar --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03] lg:col-span-2">
      <div class="mb-4 flex items-center justify-between">
        <h4 class="text-base font-semibold text-gray-800 dark:text-white/90">Quarterly Sales vs Target</h4>
        <div class="flex items-center gap-4 text-xs">
          <span class="flex items-center gap-1.5 text-gray-500"><span class="inline-block h-2 w-4 rounded-full bg-brand-500"></span>Actual</span>
          <span class="flex items-center gap-1.5 text-gray-500"><span class="inline-block h-2 w-4 rounded-full bg-gray-300 dark:bg-gray-600"></span>Target</span>
        </div>
      </div>
      <div class="relative h-64">
        <canvas id="barChartGrouped"></canvas>
      </div>
    </div>

  </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
  const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

  // Vertical bar
  new Chart(document.getElementById('barChartVertical'), {
    type: 'bar',
    data: {
      labels: months,
      datasets: [{
        label: 'Orders',
        data: [320, 480, 410, 560, 620, 580, 710, 790, 650, 820, 880, 960],
        backgroundColor: 'rgba(70,95,255,0.75)',
        borderRadius: 4,
      }]
    },
    options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } }, scales: { y: { beginAtZero: true, grid: { color: 'rgba(0,0,0,0.05)' } }, x: { grid: { display: false } } } }
  });

  // Horizontal bar
  new Chart(document.getElementById('barChartHorizontal'), {
    type: 'bar',
    data: {
      labels: ['Electronics', 'Clothing', 'Home & Garden', 'Sports', 'Books', 'Toys'],
      datasets: [{
        label: 'Revenue ($k)',
        data: [142, 98, 76, 64, 48, 35],
        backgroundColor: ['rgba(70,95,255,0.8)', 'rgba(14,165,233,0.8)', 'rgba(16,185,129,0.8)', 'rgba(245,158,11,0.8)', 'rgba(239,68,68,0.8)', 'rgba(139,92,246,0.8)'],
        borderRadius: 4,
      }]
    },
    options: { indexAxis: 'y', responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } }, scales: { x: { beginAtZero: true, grid: { color: 'rgba(0,0,0,0.05)' } }, y: { grid: { display: false } } } }
  });

  // Grouped bar
  new Chart(document.getElementById('barChartGrouped'), {
    type: 'bar',
    data: {
      labels: ['Q1', 'Q2', 'Q3', 'Q4'],
      datasets: [
        { label: 'Actual', data: [28500, 34200, 31800, 42100], backgroundColor: 'rgba(70,95,255,0.75)', borderRadius: 4 },
        { label: 'Target', data: [30000, 32000, 35000, 40000], backgroundColor: 'rgba(209,213,219,0.75)', borderRadius: 4 },
      ]
    },
    options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } }, scales: { y: { beginAtZero: false, grid: { color: 'rgba(0,0,0,0.05)' } }, x: { grid: { display: false } } } }
  });
</script>
@endpush
