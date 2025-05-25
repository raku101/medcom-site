@if(count($results))
    <ul class="bg-white dark:bg-slate-800 border border-gray-200 dark:border-slate-700 rounded-md shadow mt-2 max-h-60 overflow-y-auto text-right">
        @foreach($results as $result)
            <li>
                <a href="{{ url('/الخدمات/' . $result->slug) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-700 text-[#1a5a72] dark:text-white">
                    {{ $result->title }}
                </a>
            </li>
        @endforeach
    </ul>
@else
    <div class="text-gray-500 dark:text-gray-300 px-4 py-2 mt-2">
        لا توجد نتائج مطابقة
    </div>
@endif
