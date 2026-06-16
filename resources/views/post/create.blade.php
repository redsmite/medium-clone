<x-app-layout>
    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8 p-8">
                <form action="{{ route('post.store') }}" method="post">
                    <!-- Title -->
                    <div>
                        <x-input-label for="title" :value="__('title')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus/>
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>
                    <!-- Content -->
                    <div>
                        <x-input-label for="content" :value="__('content')" />
                        <x-input-textarea id="content" class="block mt-1 w-full" name="content" required>{{ old('content') }}</x-input-textarea>
                        <x-input-error :messages="$errors->get('content')" class="mt-2" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
