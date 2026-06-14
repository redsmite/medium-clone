<x-app-layout>
    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-4 text-gray-900">
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
                </div>
            </div>
            
            <div class="space-y-6">
                @foreach ($posts as $post)
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden flex items-center justify-between transition-shadow duration-200 hover:shadow-md h-48">
                        
                        <div class="flex-1 p-6 pr-6">
                            <span class="inline-flex items-center bg-orange-50 border border-orange-200 text-orange-700 text-xs font-medium px-2 py-0.5 rounded-md mb-2">
                                <svg class="w-3 h-3 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.122 17.645a7.185 7.185 0 0 1-2.656 2.495 7.06 7.06 0 0 1-3.52.853 6.617 6.617 0 0 1-3.306-.718 6.73 6.73 0 0 1-2.54-2.266c-2.672-4.57.287-8.846.887-9.668A4.448 4.448 0 0 0 8.07 6.31 4.49 4.49 0 0 0 7.997 4c1.284.965 6.43 3.258 5.525 10.631 1.496-1.136 2.7-3.046 2.846-6.216 1.43 1.061 3.985 5.462 1.754 9.23Z"/></svg>
                                Trending
                            </span>
                            
                            <a href="#" class="block group">
                                <h5 class="text-xl font-bold tracking-tight text-gray-900 group-hover:text-blue-600 transition-colors">
                                    {{ $post->title }}
                                </h5>
                            </a>
                            
                            <div class="mt-2 mb-4 font-normal text-gray-600 line-clamp-2">
                                {{ Str::words($post->content, 20) }}
                            </div>
                            
                            <a href="#" class="inline-flex items-center text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 shadow-sm font-medium rounded-md text-xs px-3.5 py-2 transition-colors">
                                Read more
                                <svg class="w-3.5 h-3.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/></svg>
                            </a>
                        </div>
                        
                        <div class="flex-shrink-0">
                            <a href="#">
                                <img class="rounded-r-lg w-48 h-48 object-cover" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Thumbnail graphic" />
                            </a>
                        </div>
                        
                    </div>
                @endforeach
            </div>

            {{ $posts->onEachSide(1)->links() }}
        </div>
    </div>
</x-app-layout>