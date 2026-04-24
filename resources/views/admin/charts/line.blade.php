@extends('layouts.admin')

@section('title', 'Line Chart')
@section('page', 'lineChart')
@section('pageName', 'Line Chart')

@section('content')
<div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">

  <div class="mb-6">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white/90">Line Chart</h2>
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Interactive line chart built with Chart.js.</p>
  </div>

  <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">

    {{-- Single Line Chart --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <div class="mb-4 flex items-center justify-between">
        <h4 class="text-base font-semibold text-gray-800 dark:text-white/90">Monthly Revenue</h4>
        <span class="text-xs text-gray-400">2026</span>
      </div>
      <div class="relative h-64">
        <canvas id="lineChartSingle"></canvas>
      </div>
    </div>

    {{-- Multi-line Chart --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
      <div class="mb-4 flex items-center justify-between">
        <h4 class="text-base font-semibold text-gray-800 dark:text-white/90">Sales vs Expenses</h4>
        <div class="flex items-center gap-4 text-xs">
          <span class="flex items-center gap-1.5 text-gray-500"><span class="inline-block h-2 w-4 rounded-full bg-brand-500"></span>Sales</span>
          <span class="flex items-center gap-1.5 text-gray-500"><span class="inline-block h-2 w-4 rounded-full bg-error-400"></span>Expenses</span>
        </div>
      </div>
      <div class="relative h-64">
        <canvas id="lineChartMulti"></canvas>
      </div>
    </div>

    {{-- Area Chart --}}
    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03] lg:col-span-2">
      <div class="mb-4 flex items-center justify-between">
        <h4 class="text-base font-semibold text-gray-800 dark:text-white/90">Visitor Traffic (Area)</h4>
        <span class="text-xs text-gray-400">Last 12 months</span>
      </div>
      <div class="relative h-64">
        <canvas id="lineChartArea"></canvas>
      </div>
    </div>

  </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
  const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

  // Single line
  new Chart(document.getElementById('lineChartSingle'), {
    type: 'line',
    data: {
      labels: months,
      datasets: [{
        label: 'Revenue',
        data: [4200, 5800, 5100, 6700, 7400, 6900, 8200, 8900, 7600, 9100, 9800, 11200],
        borderColor: '#465fff',
        backgroundColor: 'rgba(70,95,255,0.08)',
        borderWidth: 2,
        pointRadius: 3,
        tension: 0.4,
        fill: true,
      }]
    },
    options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } }, scales: { y: { beginAtZero: false, grid: { color: 'rgba(0,0,0,0.05)' } }, x: { grid: { display: false } } } }
  });

  // Multi line
  new Chart(document.getElementById('lineChartMulti'), {
    type: 'line',
    data: {
      labels: months,
      datasets: [
        { label: 'Sales', data: [9200, 8700, 10100, 11400, 10800, 13200, 12700, 14100, 13500, 15200, 14800, 16900], borderColor: '#465fff', borderWidth: 2, pointRadius: 3, tension: 0.4 },
        { label: 'Expenses', data: [6100, 5900, 7200, 6800, 7500, 8100, 7800, 8500, 8200, 9100, 8700, 9800], borderColor: '#f05252', borderWidth: 2, pointRadius: 3, tension: 0.4 },
      ]
    },
    options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } }, scales: { y: { beginAtZero: false, grid: { color: 'rgba(0,0,0,0.05)' } }, x: { grid: { display: false } } } }
  });

  // Area chart
  new Chart(document.getElementById('lineChartArea'), {
    type: 'line',
    data: {
      labels: months,
      datasets: [{
        label: 'Visitors',
        data: [12000, 19000, 15000, 21000, 25000, 23000, 28000, 31000, 27000, 33000, 36000, 41000],
        borderColor: '#0ea5e9',
        backgroundColor: 'rgba(14,165,233,0.12)',
        borderWidth: 2,
        pointRadius: 3,
        tension: 0.4,
        fill: true,
      }]
    },
    options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } }, scales: { y: { beginAtZero: false, grid: { color: 'rgba(0,0,0,0.05)' } }, x: { grid: { display: false } } } }
  });
</script>
@endpush
