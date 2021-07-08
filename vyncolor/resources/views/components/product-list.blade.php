@props(['product'])
<li class="bg-white rounded-lg shadow mb-4">
    <article class="flex">
        <figure>
            <img class="h-48 w-56 rounded-tl-lg rounded-bl-lg object-cover object-center" src="{{ Storage::url($product->images->first()->url)}}" alt="">
        </figure>
        <div class="flex-1 py-4 px-6 flex flex-col">
            <div class="flex justify-between">
                <div>
                    <h1 class="text-lg font-semibold text-CoolGray-700">{{$product->name}}</h1>
                    <p class="font-bold text-CoolGray-700">S/ {{$product->price}}</p>
                </div>
                <div class=" hidden lg:flex items-center">
                    <ul class="flex text-sm ">
                        <li>
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                        </li>
                        <li>
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                        </li>
                        <li>
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                        </li>
                        <li>
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                        </li>
                        <li>
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                        </li>
                    </ul>
                    <span class="text-CoolGray-700 text-sm">(24)</span>
                </div>
            </div>
            <div class="mt-auto ">
                <x-button-enlace href="{{route('products.show', $product)}}" class="bg-yellow-500 hover:bg-yellow-600">
                    Más Información
                </x-button-enlace>
            </div>
        </div>
    </article>
</li>