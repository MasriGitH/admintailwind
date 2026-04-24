@extends('layouts.admin')

@section('title', 'Basic Tables')
@section('page', 'basicTables')
@section('pageName', 'Basic Tables')

@section('content')
<div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">

  <div class="mb-6">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white/90">Basic Tables</h2>
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Standard HTML table styles and variants.</p>
  </div>

  <div class="space-y-6">

    {{-- Default Table --}}
    <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
      <div class="border-b border-gray-200 px-6 py-4 dark:border-gray-800">
        <h4 class="text-base font-semibold text-gray-800 dark:text-white/90">Default Table</h4>
      </div>
      <div class="overflow-x-auto">
        <table class="w-full text-left text-sm">
          <thead class="border-b border-gray-200 dark:border-gray-800">
            <tr>
              <th class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-300">Name</th>
              <th class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-300">Position</th>
              <th class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-300">Department</th>
              <th class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-300">Status</th>
              <th class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-300">Joined</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
            @foreach([
              ['Lindsay Walton',  'Front-end Developer', 'Engineering',  'Active',   'Jan 7, 2024'],
              ['Courtney Henry',  'Designer',            'Design',       'Active',   'Mar 14, 2024'],
              ['Tom Cook',        'Director of Product', 'Product',      'Inactive', 'Sep 2, 2023'],
              ['Whitney Francis', 'Copywriter',          'Marketing',    'Active',   'Jul 11, 2024'],
              ['Leonard Krasner', 'Senior Designer',     'Design',       'Active',   'Feb 28, 2024'],
              ['Floyd Miles',     'Principal Designer',  'Design',       'Inactive', 'May 5, 2023'],
            ] as [$name, $position, $department, $status, $joined])
            <tr class="hover:bg-gray-50 dark:hover:bg-white/[0.02]">
              <td class="px-6 py-3 font-medium text-gray-800 dark:text-white/80">{{ $name }}</td>
              <td class="px-6 py-3 text-gray-600 dark:text-gray-400">{{ $position }}</td>
              <td class="px-6 py-3 text-gray-600 dark:text-gray-400">{{ $department }}</td>
              <td class="px-6 py-3">
                <span class="inline-flex items-center gap-1.5 rounded-full px-2.5 py-0.5 text-xs font-medium
                  {{ $status === 'Active'
                    ? 'bg-success-50 text-success-700 dark:bg-success-500/10 dark:text-success-400'
                    : 'bg-error-50 text-error-700 dark:bg-error-500/10 dark:text-error-400' }}">
                  <span class="h-1.5 w-1.5 rounded-full
                    {{ $status === 'Active' ? 'bg-success-500' : 'bg-error-500' }}"></span>
                  {{ $status }}
                </span>
              </td>
              <td class="px-6 py-3 text-gray-600 dark:text-gray-400">{{ $joined }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

    {{-- Striped Table --}}
    <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
      <div class="border-b border-gray-200 px-6 py-4 dark:border-gray-800">
        <h4 class="text-base font-semibold text-gray-800 dark:text-white/90">Striped Rows</h4>
      </div>
      <div class="overflow-x-auto">
        <table class="w-full text-left text-sm">
          <thead class="border-b border-gray-200 dark:border-gray-800">
            <tr>
              <th class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-300">#</th>
              <th class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-300">Product</th>
              <th class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-300">Category</th>
              <th class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-300">Price</th>
              <th class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-300">Stock</th>
            </tr>
          </thead>
          <tbody>
            @foreach([
              [1, 'Apple MacBook Pro 17"',  'Laptops',     '$2,999', 'In Stock'],
              [2, 'Microsoft Surface Pro',  'Tablets',     '$1,499', 'In Stock'],
              [3, 'Magic Mouse 2',          'Accessories', '$99',    'Out of Stock'],
              [4, 'Google Pixel Phone',     'Phones',      '$799',   'In Stock'],
              [5, 'Apple Watch Series 8',   'Wearables',   '$399',   'In Stock'],
              [6, 'Sony WH-1000XM5',        'Audio',       '$349',   'Low Stock'],
            ] as [$i, $product, $category, $price, $stock])
            <tr class="{{ $i % 2 === 0 ? 'bg-gray-50 dark:bg-white/[0.02]' : '' }}">
              <td class="px-6 py-3 text-gray-500 dark:text-gray-500">{{ $i }}</td>
              <td class="px-6 py-3 font-medium text-gray-800 dark:text-white/80">{{ $product }}</td>
              <td class="px-6 py-3 text-gray-600 dark:text-gray-400">{{ $category }}</td>
              <td class="px-6 py-3 font-medium text-gray-800 dark:text-white/80">{{ $price }}</td>
              <td class="px-6 py-3">
                @php
                  $color = match($stock) {
                    'In Stock'    => 'bg-success-50 text-success-700 dark:bg-success-500/10 dark:text-success-400',
                    'Low Stock'   => 'bg-warning-50 text-warning-700 dark:bg-warning-500/10 dark:text-warning-400',
                    default       => 'bg-error-50 text-error-700 dark:bg-error-500/10 dark:text-error-400',
                  };
                @endphp
                <span class="inline-flex rounded-full px-2.5 py-0.5 text-xs font-medium {{ $color }}">
                  {{ $stock }}
                </span>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

    {{-- Table with Actions --}}
    <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
      <div class="flex items-center justify-between border-b border-gray-200 px-6 py-4 dark:border-gray-800">
        <h4 class="text-base font-semibold text-gray-800 dark:text-white/90">Table with Actions</h4>
        <button class="rounded-lg bg-brand-500 px-4 py-2 text-xs font-medium text-white hover:bg-brand-600">
          + Add New
        </button>
      </div>
      <div class="overflow-x-auto">
        <table class="w-full text-left text-sm">
          <thead class="border-b border-gray-200 bg-gray-50 dark:border-gray-800 dark:bg-white/[0.02]">
            <tr>
              <th class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-300">Customer</th>
              <th class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-300">Order ID</th>
              <th class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-300">Amount</th>
              <th class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-300">Date</th>
              <th class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-300">Status</th>
              <th class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-300">Actions</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
            @foreach([
              ['Jane Cooper',    '#ORD-001', '$125.00', 'Apr 18, 2026', 'Delivered'],
              ['Cody Fisher',    '#ORD-002', '$89.99',  'Apr 19, 2026', 'Processing'],
              ['Esther Howard',  '#ORD-003', '$340.50', 'Apr 20, 2026', 'Pending'],
              ['Cameron Willi',  '#ORD-004', '$59.00',  'Apr 21, 2026', 'Delivered'],
              ['Brooklyn Simm',  '#ORD-005', '$210.00', 'Apr 22, 2026', 'Cancelled'],
            ] as [$customer, $order, $amount, $date, $status])
            <tr class="hover:bg-gray-50 dark:hover:bg-white/[0.02]">
              <td class="px-6 py-3 font-medium text-gray-800 dark:text-white/80">{{ $customer }}</td>
              <td class="px-6 py-3 font-mono text-xs text-gray-500 dark:text-gray-400">{{ $order }}</td>
              <td class="px-6 py-3 font-medium text-gray-800 dark:text-white/80">{{ $amount }}</td>
              <td class="px-6 py-3 text-gray-600 dark:text-gray-400">{{ $date }}</td>
              <td class="px-6 py-3">
                @php
                  $badge = match($status) {
                    'Delivered'  => 'bg-success-50 text-success-700 dark:bg-success-500/10 dark:text-success-400',
                    'Processing' => 'bg-brand-50 text-brand-700 dark:bg-brand-500/10 dark:text-brand-400',
                    'Pending'    => 'bg-warning-50 text-warning-700 dark:bg-warning-500/10 dark:text-warning-400',
                    default      => 'bg-error-50 text-error-700 dark:bg-error-500/10 dark:text-error-400',
                  };
                @endphp
                <span class="inline-flex rounded-full px-2.5 py-0.5 text-xs font-medium {{ $badge }}">
                  {{ $status }}
                </span>
              </td>
              <td class="px-6 py-3">
                <div class="flex items-center gap-2">
                  <button class="rounded p-1 text-gray-400 hover:bg-gray-100 hover:text-brand-500 dark:hover:bg-white/10 dark:hover:text-brand-400" title="View">
                    <svg class="fill-current" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12 5C7.45 5 3.57 7.96 2.04 12C3.57 16.04 7.45 19 12 19C16.55 19 20.43 16.04 21.96 12C20.43 7.96 16.55 5 12 5ZM12 16.5C9.52 16.5 7.5 14.48 7.5 12C7.5 9.52 9.52 7.5 12 7.5C14.48 7.5 16.5 9.52 16.5 12C16.5 14.48 14.48 16.5 12 16.5ZM12 9.5C10.62 9.5 9.5 10.62 9.5 12C9.5 13.38 10.62 14.5 12 14.5C13.38 14.5 14.5 13.38 14.5 12C14.5 10.62 13.38 9.5 12 9.5Z" fill=""/>
                    </svg>
                  </button>
                  <button class="rounded p-1 text-gray-400 hover:bg-gray-100 hover:text-warning-500 dark:hover:bg-white/10 dark:hover:text-warning-400" title="Edit">
                    <svg class="fill-current" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.0214 3.6215C15.7024 2.9405 16.8031 2.9405 17.4841 3.6215L20.3785 6.5159C21.0595 7.1969 21.0595 8.2976 20.3785 8.9786L9.8806 19.4765C9.5526 19.8045 9.1094 19.99 8.6468 19.99H5.0104C4.0457 19.99 3.26 19.2043 3.26 18.2396V14.6032C3.26 14.1406 3.4455 13.6974 3.7735 13.3694L15.0214 3.6215ZM16.4235 5.0836L18.9164 7.5765L17.3306 9.1623L14.8377 6.6694L16.4235 5.0836ZM13.4771 8.0299L5.0104 16.4966V18.49H7.0038L15.4705 10.0233L13.4771 8.0299Z" fill=""/>
                    </svg>
                  </button>
                  <button class="rounded p-1 text-gray-400 hover:bg-gray-100 hover:text-error-500 dark:hover:bg-white/10 dark:hover:text-error-400" title="Delete">
                    <svg class="fill-current" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9 3.5C9 2.67157 9.67157 2 10.5 2H13.5C14.3284 2 15 2.67157 15 3.5V4H18.5C18.7761 4 19 4.22386 19 4.5C19 4.77614 18.7761 5 18.5 5H17.9311L17.1301 19.5581C17.0703 20.6661 16.1536 21.5 15.0439 21.5H8.95614C7.84639 21.5 6.92972 20.6661 6.86994 19.5581L6.06888 5H5.5C5.22386 5 5 4.77614 5 4.5C5 4.22386 5.22386 4 5.5 4H9V3.5ZM10.5 4H13.5V3.5C13.5 3.22386 13.2761 3 13 3H11C10.7239 3 10.5 3.22386 10.5 3.5V4ZM7.57002 5L8.36488 19.4814C8.38982 19.9378 8.76741 20.25 9.22403 20.25H14.776C15.2326 20.25 15.6102 19.9378 15.6351 19.4814L16.43 5H7.57002Z" fill=""/>
                    </svg>
                  </button>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      {{-- Pagination --}}
      <div class="flex items-center justify-between border-t border-gray-200 px-6 py-4 dark:border-gray-800">
        <p class="text-sm text-gray-500 dark:text-gray-400">Showing <span class="font-medium text-gray-700 dark:text-gray-300">1–5</span> of <span class="font-medium text-gray-700 dark:text-gray-300">24</span> results</p>
        <div class="flex items-center gap-1">
          <button class="flex h-8 w-8 items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 disabled:opacity-40 dark:border-gray-800 dark:text-gray-400 dark:hover:bg-white/5" disabled>
            <svg class="fill-current" width="16" height="16" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M12.7071 4.29289C13.0976 4.68342 13.0976 5.31658 12.7071 5.70711L8.41421 10L12.7071 14.2929C13.0976 14.6834 13.0976 15.3166 12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L6.29289 10.7071C5.90237 10.3166 5.90237 9.68342 6.29289 9.29289L11.2929 4.29289C11.6834 3.90237 12.3166 3.90237 12.7071 4.29289Z" fill=""/></svg>
          </button>
          <button class="flex h-8 w-8 items-center justify-center rounded-lg bg-brand-500 text-xs font-medium text-white">1</button>
          <button class="flex h-8 w-8 items-center justify-center rounded-lg border border-gray-200 text-xs font-medium text-gray-600 hover:bg-gray-100 dark:border-gray-800 dark:text-gray-400 dark:hover:bg-white/5">2</button>
          <button class="flex h-8 w-8 items-center justify-center rounded-lg border border-gray-200 text-xs font-medium text-gray-600 hover:bg-gray-100 dark:border-gray-800 dark:text-gray-400 dark:hover:bg-white/5">3</button>
          <button class="flex h-8 w-8 items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 dark:border-gray-800 dark:text-gray-400 dark:hover:bg-white/5">
            <svg class="fill-current" width="16" height="16" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.29289 4.29289C7.68342 3.90237 8.31658 3.90237 8.70711 4.29289L13.7071 9.29289C14.0976 9.68342 14.0976 10.3166 13.7071 10.7071L8.70711 15.7071C8.31658 16.0976 7.68342 16.0976 7.29289 15.7071C6.90237 15.3166 6.90237 14.6834 7.29289 14.2929L11.5858 10L7.29289 5.70711C6.90237 5.31658 6.90237 4.68342 7.29289 4.29289Z" fill=""/></svg>
          </button>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
