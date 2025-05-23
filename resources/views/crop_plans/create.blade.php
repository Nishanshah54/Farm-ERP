<x-app-layout>
    <div class="max-w-4xl mx-auto p-6 bg-white dark:bg-gray-800 rounded-xl shadow-md">
        <h1 class="text-2xl font-semibold mb-6 text-gray-800 dark:text-gray-100">Create Crop Plan</h1>

        <form action="{{ route('crop-plans.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="field_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Field</label>
                <select name="field_id" id="field_id" required
                    class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    @foreach($fields as $field)
                        <option value="{{ $field->id }}">{{ $field->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="crop_type_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Crop Type</label>
                <select name="crop_type_id" id="crop_type_id" required
                    class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    @foreach($crops as $crop)
                        <option value="{{ $crop->id }}">{{ $crop->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="planting_date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Planting Date</label>
                <input type="date" name="planting_date" id="planting_date" required
                    class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <label for="harvest_date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Expected Harvest Date</label>
                <input type="date" name="harvest_date" id="harvest_date" required
                    class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <label for="estimated_yield" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Estimated Yield (tons)</label>
                <input type="number" step="0.01" name="estimated_yield" id="estimated_yield" required
                    class="mt-1 block w-full border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-md shadow-sm transition duration-200">
                    Create Plan
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
