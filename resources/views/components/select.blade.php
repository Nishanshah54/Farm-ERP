@props([
    'options' => [],        // ['value' => 'Label']
    'selected' => null,
    'placeholder' => null,
    'required' => false,
])

<select {{ $required ? 'required' : '' }} {!! $attributes->merge(['class' => 'mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500']) !!}>
    @if($placeholder)
        <option value="">{{ $placeholder }}</option>
    @endif

    @foreach($options as $value => $label)
        <option value="{{ $value }}" {{ (string) $selected === (string) $value ? 'selected' : '' }}>
            {{ $label }}
        </option>
    @endforeach
</select>
