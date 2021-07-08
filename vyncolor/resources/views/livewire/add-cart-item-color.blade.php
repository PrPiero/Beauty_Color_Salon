<div x-data>
    <p class="text-gray-700 mb-4">
        <span class="font-semibold text-lg">Stock Disponible: </span>
        @if ($quantity)
            {{$quantity}}
        @else
            {{$product->Stock}}  
        @endif
    </p>
    <p class="text-xl text-CoolGray-700">Color</p>

    <select wire:model="color_id" class="form-control w-full" >
        <option value="" selected disabled>Seleccione un color</option>
        @foreach ($colors as $color)
            <option value="{{$color->id}}">{{$color->name}}</option>
        @endforeach
    </select>
    <div class="flex mt-4">
        <div class="mr-4">
            <x-jet-secondary-button
                disabled
                x-bind:disabled="$wire.qty <= 1"
                wire:loading.attr="disabled"
                wire:target="decrement"
                wire:click="decrement">
                -
            </x-jet-secondary-button>

            <span class="mx-2 text-CoolGray-700">{{$qty}}</span>

            <x-jet-secondary-button 
                x-bind:disabled="$wire.qty >= $wire.quantity"
                wire:loading.attr="disabled"
                wire:target="increment"
                wire:click="increment">
                +
            </x-jet-secondary-button>
        </div>
        <div class="flex-1">
            <x-button 
                x-bind:disabled="!$wire.quantity"
                x-bind:disabled="$wire.qty > $wire.quantity"
                color="yellow" 
                class="w-full "
                wire:click="addItem"
                wire:loading.attr="disabled"
                wire:target="addItem">
                Agregar al Carrito de Compras
            </x-button>
        </div>
    </div>
</div>
