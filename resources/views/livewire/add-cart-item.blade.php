<div x-data>

    <p class="text-gray-700 mb-4">
        <span class="font-semibold text-lg">Stock disponible= {{$quantity}}</span>
    </p>

    <div class="flex">
        <div class="mr-4">
            <x-jet-secondary-button 
            disabled
            x-bind:disabled="$wire.qty <= 1"
            wire:loading.attr="disabled"
            wire:target="decrement"
            wire:click="decrement">
                -
            </x-jet-secondary-button>

            <span class="mx-2 text-gray-700">{{$qty}}</span>
            
            <x-jet-secondary-button 
<<<<<<< HEAD
            x-bind:disabled="$wire.qty >= $wire.quantity"
=======
            x-bind:disabled="$wire.qty >= $wire.Ñquantity"
>>>>>>> ae4c9765a5239edb4a9964ede06a4b988b77b14b
            wire:loading.attr="disabled"
            wire:target="increment"
            wire:click="increment">
                +
            </x-jet-secondary-button>
        </div>

        <div class="flex-1">
            <x-button color='orange' class="w-full">
               AGREGAR AL CARRITO DE COMPRAS
            </x-button>
        </div>
    </div>
</div>
