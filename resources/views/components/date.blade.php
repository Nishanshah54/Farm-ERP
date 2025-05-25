@props(['name', 'label', 'required' => false])

<div class="col-span-6 sm:col-span-3">
    <x-label :for="$name" :value="$label" />
    <input
        type="date"
        name="{{ $name }}"
        id="{{ $name }}"
        {{ $required ? 'required' : '' }}
        class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
    />
    <x-input-error :for="$name" />
</div>
