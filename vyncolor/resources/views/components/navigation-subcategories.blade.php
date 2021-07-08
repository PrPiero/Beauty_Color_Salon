@props(['category'])
<div class="grid grid-cols-4 p-4">

    <div>
        <p class="text-lg font-bold text-center text-CoolGray-500 mb-3">Subcategorías</p>
        
        <ul>
            @foreach ($category->subcategories as $subcategory)
                <li>

                    <a href="" class="text-CoolGray-500 font-semibold inline-block py-1 px-4 hover:bg-yellow-400 hover:text-white"">
                        {{$subcategory->name}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="col-span-3">
        
        <img class="h-64 w-full object-cover object-center" src="{{Storage::url($category->image)}}">
    </div>
</div>