<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-12 py-2.5 focus:outline-none text-gray-900 bg-slate-400 hover:bg-slate-400 focus:ring-4 focus:ring-green-300 font-semibold rounded-lg text-sm dark:bg-slate-400 dark:hover:bg-slate-400 dark:focus:ring-green-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
