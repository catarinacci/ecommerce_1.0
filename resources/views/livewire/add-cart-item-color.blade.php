<div x-data>
    <p class="text-xl text-gray-700">Color: </p>
    <select wire:model='color_id' class="form-control w-full">
        <option value="" selected disabled>Seleccionar un color</option>
        @foreach ($colors as $color)
<<<<<<< HEAD
            <option value="{{ $color->id }}">{{ __($color->name) }}</option>
=======
            <option value="{{ $color->id }}">{{ $color->name }}</option>
>>>>>>> ae4c9765a5239edb4a9964ede06a4b988b77b14b
        @endforeach
    </select>

    <div class="flex mt-4">
        <div class="mr-4">
            <x-jet-secondary-button 
                disabled x-bind:disabled="$wire.qty <= 1" 
                wire:loading.attr="disabled"
                wire:target="decrement" 
                wire:click="decrement">
                -
            </x-jet-secondary-button>

            <span class="mx-2 text-gray-700">{{ $qty }}</span>

            <x-jet-secondary-button 
                x-bind:disabled="$wire.qty >= $wire.quantity" 
                wire:loading.attr="disabled"
                wire:target="increment" wire:click="increment">
                +
            </x-jet-secondary-button>
        </div>

        <div class="flex-1">
            <x-button color='orange' class="w-full"
                x-bind:disabled="!$wire.quantity">
                AGREGAR AL CARRITO DE COMPRAS
            </x-button>
        </div>
    </div>

</div>