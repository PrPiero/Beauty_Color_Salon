<div>
    <div class="bg-white rounded-lg shadow-lg mb-4">
        <div class="px-6 py-2 flex justify-between items-center">
            <h1 class="font-semibold text-CoolGray-700 uppercase ">{{$category->name}}</h1>
                <div class="grid grid-cols-2 border-CoolGray-900 rounded-lg divide-x divide-border-CoolGray-900 shadow text-CoolGray-500 ">
                    <i class="fas fa-border-all p-3 cursor-pointer {{$view == 'grid' ? 'text-yellow-500' : ''}}" wire:click="$set('view', 'grid')"></i>
                    <i class="fas fa-th-list p-3 cursor-pointer {{$view == 'list' ? 'text-yellow-500' : ''}}" wire:click="$set('view', 'list')"></i>
                </div>
            </div>
            
        
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">

        <aside>
            <h2 class="font-semibold bg-yellow-500 rounded-lg text-center text-white block px-4 py-1 mb-2">Subcategorias</h2>
            <ul>
                @foreach ($category->subcategories as $subcategory)
                    <li class="my-2 text-sm  ">
                        <a class="cursor-pointer hover:text-yellow-600  border-gray-600 capitalize block px-4 py-1 rounded-lg shadow {{$subcategoria == $subcategory->name ? 'text-yellow-600 font-semibold' : ''}}"
                         wire:click="$set('subcategoria','{{$subcategory->name}}')"
                         >{{$subcategory->name}}</a>
                    </li>
                @endforeach
            </ul>
            <h2 class="font-semibold bg-yellow-500 rounded-lg text-center text-white block px-4 py-1 mb-2 mt-4">Marcas</h2>
            <ul>
                @foreach ($category->brands as $brand)
                    <li class="my-2 text-sm  ">
                        <a class="cursor-pointer hover:text-yellow-600  border-gray-600 capitalize block px-4 py-1 rounded-lg shadow {{$marca == $brand->name ? 'text-yellow-600 font-semibold' : ''}}" 
                        wire:click="$set('marca','{{$brand->name}}')"
                        >{{$brand->name}}</a>
                    </li>
                @endforeach
            </ul>

            <x-jet-button class="mt-4 bg-yellow-500 rounded-lg hover:bg-yellow-600" wire:click="limpiar">
                Eliminar Filtros
            </x-jet-button>
        </aside>
        <div class="md:col-span-2 lg:col-span-4">
            @if ($view == 'grid')

                <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6  ">
                    @foreach ($products as $product)
                        <li class="bg-white rounded-lg shadow">
                            <article>
                                <figure>
                                    <img class="h-48 w-full object-cover object-center rounded-tl-lg rounded-tr-lg" src="{{ Storage::url($product->images->first()->url)}}">
                                </figure>
                                <div class="py-4 px-6">
                                    <h1 class="text-lg font-semibold">
                                        <a href="{{route('products.show', $product)}}">
                                            {{Str::limit($product->name, 20)}}
                                        </a>
                                    </h1>

                                    <p class="font-bold text-CoolGray-700">S/ {{$product->price}}</p>
                                </div>
                            </article>
                                
                        </li>
                    @endforeach
                </ul>
                
            @else 
                <ul >
                    @foreach ($products as $product)
                        <x-product-list :product="$product" />
                    @endforeach
                </ul>
            @endif
            
            <div class="mt-4">
                {{$products->links()}}
            </div>
        </div>
    </div>
</div>
