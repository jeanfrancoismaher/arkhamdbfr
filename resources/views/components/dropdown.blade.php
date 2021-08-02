@props(['trigger'])

<div x-data="{ show: false }" @click.away="show = false">
    <div @click="show = ! show">
        {{ $trigger }}
    </div>

    <div x-show="show" class="py-2 absolute bg-gray-100 w-full rounded-xl z-50 max-h-52 overflow-auto" style="display:none">
        {{ $slot }}
    </div>
</div>