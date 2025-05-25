<x-app-layout>
    <div class="max-w-4xl mx-auto p-6 bg-white dark:bg-gray-800 rounded-xl shadow-md">
        <x-form-section submit="saveCropPlan">

            <x-slot name="title">Create Crop Plan</x-slot>
            <x-slot name="description">Fill out the details below to create a new crop plan.</x-slot>

            <x-slot name="form">
                <div class="col-span-6 sm:col-span-3">
                    <x-label for="field_id" :value="'Field'" />
                    <x-select name="field_id" id="field_id" :options="$fields->pluck('name', 'id')" required />
                    <x-input-error for="field_id" />
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <x-label for="crop_type_id" :value="'Crop Type'" />
                    <x-select name="crop_type_id" id="crop_type_id" :options="$crops->pluck('name', 'id')" required />
                    <x-input-error for="crop_type_id" />
                </div>

                <x-date name="planting_date" label="Planting Date" required />
                <x-date name="harvest_date" label="Expected Harvest Date" required />

                <div class="col-span-6 sm:col-span-3">
                    <x-label for="estimated_yield" :value="'Estimated Yield (tons)'" />
                    <x-input name="estimated_yield" id="estimated_yield" type="number" step="0.01" required />
                    <x-input-error for="estimated_yield" />
                </div>
            </x-slot>

            <x-slot name="actions">
                <x-button type="submit">Create Plan</x-button>
            </x-slot>

        </x-form-section>
    </div>
</x-app-layout>
