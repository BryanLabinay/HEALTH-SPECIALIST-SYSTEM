@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => ' p-4 mb-4 text-base text-white border border-blue-300 rounded-lg bg-blue-500 dark:bg-gray-800 dark:border-blue-800" role="alert"']) }}>
        {{ $status }}
    </div>
    
@endif