<ul class="flex flex-wrap text-sm font-medium text-center justify-center">
    <li class="me-2">
        <a href="#" class="inline-block px-4 py-2 text-white bg-blue-600 rounded-md active" aria-current="page">
            All
        </a>
    </li>
    
    @foreach ($categories as $category)
    <li class="me-2">
        <a href="#" class="inline-block px-4 py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-md transition-colors duration-150">
            {{ $category->name }}
        </a>
    </li>       
    @endforeach
</ul>