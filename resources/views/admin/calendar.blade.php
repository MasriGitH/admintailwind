@extends('layouts.admin')

@section('title', 'Calendar')
@section('page', 'calendar')
@section('pageName', 'Calendar')

@section('content')
<div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">

  <div x-data="calendarApp()" class="h-full">

    {{-- Page Header --}}
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
      <h2 class="text-2xl font-bold text-gray-800 dark:text-white/90">Calendar</h2>
      <button
        @click="openAddModal()"
        class="inline-flex items-center gap-2 rounded-lg bg-brand-500 px-4 py-2.5 text-sm font-medium text-white shadow-sm hover:bg-brand-600 focus:outline-none"
      >
        <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M8 1.5A.75.75 0 0 1 8.75 2.25V7.25H13.75A.75.75 0 0 1 13.75 8.75H8.75V13.75A.75.75 0 0 1 7.25 13.75V8.75H2.25A.75.75 0 0 1 2.25 7.25H7.25V2.25A.75.75 0 0 1 8 1.5Z" fill=""/>
        </svg>
        Add Event
      </button>
    </div>

    {{-- Calendar Card --}}
    <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">

      {{-- Calendar Navigation --}}
      <div class="flex items-center justify-between border-b border-gray-200 px-5 py-4 dark:border-gray-800 sm:px-6">
        <button
          @click="prevMonth()"
          class="flex h-9 w-9 items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 dark:border-gray-800 dark:text-gray-400 dark:hover:bg-white/5"
        >
          <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7071 4.29289C13.0976 4.68342 13.0976 5.31658 12.7071 5.70711L8.41421 10L12.7071 14.2929C13.0976 14.6834 13.0976 15.3166 12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L6.29289 10.7071C5.90237 10.3166 5.90237 9.68342 6.29289 9.29289L11.2929 4.29289C11.6834 3.90237 12.3166 3.90237 12.7071 4.29289Z" fill=""/>
          </svg>
        </button>

        <h3 class="text-base font-semibold text-gray-800 dark:text-white/90"
            x-text="monthName + ' ' + year"></h3>

        <button
          @click="nextMonth()"
          class="flex h-9 w-9 items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 dark:border-gray-800 dark:text-gray-400 dark:hover:bg-white/5"
        >
          <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.29289 4.29289C7.68342 3.90237 8.31658 3.90237 8.70711 4.29289L13.7071 9.29289C14.0976 9.68342 14.0976 10.3166 13.7071 10.7071L8.70711 15.7071C8.31658 16.0976 7.68342 16.0976 7.29289 15.7071C6.90237 15.3166 6.90237 14.6834 7.29289 14.2929L11.5858 10L7.29289 5.70711C6.90237 5.31658 6.90237 4.68342 7.29289 4.29289Z" fill=""/>
          </svg>
        </button>
      </div>

      {{-- Day Names --}}
      <div class="grid grid-cols-7 border-b border-gray-200 dark:border-gray-800">
        <template x-for="day in ['Sun','Mon','Tue','Wed','Thu','Fri','Sat']" :key="day">
          <div class="py-3 text-center text-xs font-medium uppercase text-gray-400 dark:text-gray-500" x-text="day"></div>
        </template>
      </div>

      {{-- Calendar Grid --}}
      <div class="grid grid-cols-7">
        <template x-for="(cell, index) in calendarCells" :key="index">
          <div
            @click="cell.day && selectDate(cell)"
            class="group min-h-[80px] border-b border-r border-gray-200 p-2 dark:border-gray-800 last:border-r-0 sm:min-h-[100px] sm:p-3"
            :class="{
              'cursor-pointer hover:bg-gray-50 dark:hover:bg-white/[0.02]': cell.day,
              'bg-gray-50/50 dark:bg-white/[0.01]': !cell.day,
              'col-start-1': index % 7 === 0,
              'border-b-0': index >= calendarCells.length - 7
            }"
          >
            <template x-if="cell.day">
              <div>
                <span
                  class="flex h-7 w-7 items-center justify-center rounded-full text-sm"
                  :class="{
                    'bg-brand-500 font-semibold text-white': cell.isToday,
                    'font-medium text-gray-700 dark:text-gray-300 group-hover:text-brand-500': !cell.isToday
                  }"
                  x-text="cell.day"
                ></span>

                <div class="mt-1 space-y-0.5">
                  <template x-for="event in cell.events" :key="event.id">
                    <div
                      class="cursor-pointer truncate rounded px-1.5 py-0.5 text-xs font-medium"
                      :class="{
                        'bg-brand-50 text-brand-600 dark:bg-brand-500/10 dark:text-brand-400': event.type === 'primary',
                        'bg-success-50 text-success-600 dark:bg-success-500/10 dark:text-success-400': event.type === 'success',
                        'bg-error-50 text-error-600 dark:bg-error-500/10 dark:text-error-400': event.type === 'danger',
                        'bg-warning-50 text-warning-600 dark:bg-warning-500/10 dark:text-warning-400': event.type === 'warning',
                      }"
                      @click.stop="openEventModal(event)"
                      x-text="event.title"
                    ></div>
                  </template>
                </div>
              </div>
            </template>
          </div>
        </template>
      </div>
    </div>

    {{-- Add Event Modal --}}
    <div
      x-show="showAddModal"
      x-transition:enter="transition ease-out duration-150"
      x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in duration-100"
      x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
      class="fixed inset-0 z-99999 flex items-center justify-center bg-black/50 p-4"
      @click.self="showAddModal = false"
      style="display: none;"
    >
      <div class="w-full max-w-md rounded-2xl bg-white p-6 shadow-xl dark:bg-gray-900">
        <div class="mb-5 flex items-center justify-between">
          <h4 class="text-lg font-semibold text-gray-800 dark:text-white/90">Add Event</h4>
          <button @click="showAddModal = false" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
            <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20"><path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"/></svg>
          </button>
        </div>

        <div class="space-y-4">
          <div>
            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">Event Title</label>
            <input
              x-model="newEvent.title"
              type="text"
              placeholder="Enter event title"
              class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 focus:border-brand-500 focus:outline-none dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:focus:border-brand-500"
            />
          </div>

          <div>
            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">Date</label>
            <input
              x-model="newEvent.date"
              type="date"
              class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 focus:border-brand-500 focus:outline-none dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:focus:border-brand-500"
            />
          </div>

          <div>
            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-300">Type</label>
            <select
              x-model="newEvent.type"
              class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-800 focus:border-brand-500 focus:outline-none dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:focus:border-brand-500"
            >
              <option value="primary">Primary (Blue)</option>
              <option value="success">Success (Green)</option>
              <option value="danger">Danger (Red)</option>
              <option value="warning">Warning (Yellow)</option>
            </select>
          </div>
        </div>

        <div class="mt-6 flex justify-end gap-3">
          <button
            @click="showAddModal = false"
            class="rounded-lg border border-gray-300 px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50 dark:border-gray-700 dark:text-gray-300 dark:hover:bg-white/5"
          >
            Cancel
          </button>
          <button
            @click="addEvent()"
            class="rounded-lg bg-brand-500 px-4 py-2.5 text-sm font-medium text-white hover:bg-brand-600 disabled:opacity-50"
            :disabled="!newEvent.title.trim()"
          >
            Add Event
          </button>
        </div>
      </div>
    </div>

    {{-- View/Delete Event Modal --}}
    <div
      x-show="showEventModal"
      x-transition:enter="transition ease-out duration-150"
      x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in duration-100"
      x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
      class="fixed inset-0 z-99999 flex items-center justify-center bg-black/50 p-4"
      @click.self="showEventModal = false"
      style="display: none;"
    >
      <div class="w-full max-w-sm rounded-2xl bg-white p-6 shadow-xl dark:bg-gray-900">
        <div class="mb-4 flex items-center justify-between">
          <h4 class="text-lg font-semibold text-gray-800 dark:text-white/90">Event Details</h4>
          <button @click="showEventModal = false" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
            <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20"><path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"/></svg>
          </button>
        </div>

        <template x-if="activeEvent">
          <div>
            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Title</p>
            <p class="mt-0.5 text-base font-semibold text-gray-800 dark:text-white" x-text="activeEvent.title"></p>

            <p class="mt-3 text-sm font-medium text-gray-500 dark:text-gray-400">Date</p>
            <p class="mt-0.5 text-sm text-gray-700 dark:text-gray-300" x-text="formatDate(activeEvent.date)"></p>
          </div>
        </template>

        <div class="mt-6 flex justify-end gap-3">
          <button
            @click="deleteEvent()"
            class="rounded-lg border border-error-300 px-4 py-2.5 text-sm font-medium text-error-600 hover:bg-error-50 dark:border-error-700 dark:text-error-400 dark:hover:bg-error-500/10"
          >
            Delete
          </button>
          <button
            @click="showEventModal = false"
            class="rounded-lg bg-brand-500 px-4 py-2.5 text-sm font-medium text-white hover:bg-brand-600"
          >
            Close
          </button>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection

@push('scripts')
<script>
function calendarApp() {
  const today = new Date();

  return {
    currentYear: today.getFullYear(),
    currentMonth: today.getMonth(),
    todayStr: today.toISOString().slice(0, 10),
    showAddModal: false,
    showEventModal: false,
    activeEvent: null,
    newEvent: { title: '', date: '', type: 'primary' },
    events: [
      { id: 1, date: '{{ now()->format('Y') }}-{{ now()->format('m') }}-10', title: 'Design Review', type: 'primary' },
      { id: 2, date: '{{ now()->format('Y') }}-{{ now()->format('m') }}-15', title: 'Team Meeting', type: 'success' },
      { id: 3, date: '{{ now()->format('Y') }}-{{ now()->format('m') }}-20', title: 'Project Deadline', type: 'danger' },
      { id: 4, date: '{{ now()->format('Y') }}-{{ now()->format('m') }}-25', title: 'Conference', type: 'warning' },
    ],
    nextId: 5,

    get monthName() {
      return new Date(this.currentYear, this.currentMonth, 1)
        .toLocaleString('default', { month: 'long' });
    },

    get year() {
      return this.currentYear;
    },

    get calendarCells() {
      const firstDay = new Date(this.currentYear, this.currentMonth, 1).getDay();
      const daysInMonth = new Date(this.currentYear, this.currentMonth + 1, 0).getDate();
      const cells = [];

      // Empty cells before first day
      for (let i = 0; i < firstDay; i++) {
        cells.push({ day: null, dateStr: null, isToday: false, events: [] });
      }

      // Day cells
      for (let d = 1; d <= daysInMonth; d++) {
        const month = String(this.currentMonth + 1).padStart(2, '0');
        const day = String(d).padStart(2, '0');
        const dateStr = `${this.currentYear}-${month}-${day}`;
        cells.push({
          day: d,
          dateStr,
          isToday: dateStr === this.todayStr,
          events: this.events.filter(e => e.date === dateStr),
        });
      }

      // Pad to complete the last row
      while (cells.length % 7 !== 0) {
        cells.push({ day: null, dateStr: null, isToday: false, events: [] });
      }

      return cells;
    },

    prevMonth() {
      if (this.currentMonth === 0) {
        this.currentMonth = 11;
        this.currentYear--;
      } else {
        this.currentMonth--;
      }
    },

    nextMonth() {
      if (this.currentMonth === 11) {
        this.currentMonth = 0;
        this.currentYear++;
      } else {
        this.currentMonth++;
      }
    },

    selectDate(cell) {
      this.newEvent.date = cell.dateStr;
      this.openAddModal();
    },

    openAddModal() {
      if (!this.newEvent.date) {
        this.newEvent.date = this.todayStr;
      }
      this.showAddModal = true;
    },

    addEvent() {
      if (!this.newEvent.title.trim() || !this.newEvent.date) return;
      this.events.push({
        id: this.nextId++,
        date: this.newEvent.date,
        title: this.newEvent.title.trim(),
        type: this.newEvent.type,
      });
      this.newEvent = { title: '', date: '', type: 'primary' };
      this.showAddModal = false;
    },

    openEventModal(event) {
      this.activeEvent = event;
      this.showEventModal = true;
    },

    deleteEvent() {
      this.events = this.events.filter(e => e.id !== this.activeEvent.id);
      this.showEventModal = false;
      this.activeEvent = null;
    },

    formatDate(dateStr) {
      if (!dateStr) return '';
      const [y, m, d] = dateStr.split('-');
      return new Date(y, m - 1, d).toLocaleDateString('default', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
    },
  };
}
</script>
@endpush
