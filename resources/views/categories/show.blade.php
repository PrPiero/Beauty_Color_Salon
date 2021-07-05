<x-app-layout>
    <div class="container py-8">
        <figure class="mb-4">
            <img class="w-full h-80 object-cover object-center rounded-2xl" src="{{'/storage/'.($category->image)}}" alt="">
        </figure>
        @livewire('category-filter', ['category' => $category])
    </div>
</x-app-layout>
