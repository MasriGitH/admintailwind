import 'jsvectormap/dist/jsvectormap.min.css';
import 'flatpickr/dist/flatpickr.min.css';

import Alpine from 'alpinejs';
import persist from '@alpinejs/persist';
import flatpickr from 'flatpickr';

import chart01 from './admin/components/charts/chart-01';
import chart02 from './admin/components/charts/chart-02';
import chart03 from './admin/components/charts/chart-03';
import map01 from './admin/components/map-01';

window.Alpine = Alpine;
Alpine.plugin(persist);
Alpine.start();

flatpickr('.datepicker', {
  mode: 'range',
  static: true,
  monthSelectorType: 'static',
  dateFormat: 'M j',
  defaultDate: [new Date().setDate(new Date().getDate() - 6), new Date()],
  prevArrow:
    '<svg class="stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.25 6L9 12.25L15.25 18.5" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
  nextArrow:
    '<svg class="stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.75 19L15 12.75L8.75 6.5" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
  onReady: (selectedDates, dateStr, instance) => {
    instance.element.value = dateStr.replace('to', '-');
    const customClass = instance.element.getAttribute('data-class');
    if (customClass) {
      instance.calendarContainer.classList.add(customClass);
    }
  },
  onChange: (selectedDates, dateStr, instance) => {
    instance.element.value = dateStr.replace('to', '-');
  },
});

document.addEventListener('DOMContentLoaded', () => {
  chart01();
  chart02();
  chart03();
  map01();

  const year = document.getElementById('year');
  if (year) {
    year.textContent = new Date().getFullYear();
  }

  const searchInput = document.getElementById('search-input');
  const searchButton = document.getElementById('search-button');

  if (!searchInput || !searchButton) {
    return;
  }

  const focusSearchInput = () => {
    searchInput.focus();
  };

  searchButton.addEventListener('click', focusSearchInput);

  document.addEventListener('keydown', (event) => {
    if ((event.metaKey || event.ctrlKey) && event.key === 'k') {
      event.preventDefault();
      focusSearchInput();
    }
  });

  document.addEventListener('keydown', (event) => {
    if (event.key === '/' && document.activeElement !== searchInput) {
      event.preventDefault();
      focusSearchInput();
    }
  });
});