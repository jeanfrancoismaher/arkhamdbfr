<header class="max-w-xl mx-auto mt-20 text-center">

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <!--  Titles -->
        <div class="relative lg:inline-flex bg-gray-100 rounded-xl">
            <x-dropdown>
                <x-slot name="trigger">
                    <button class="py-2 pl-3 pr-2 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
                        {{ isset($title) ? ucwords($title->name) : 'Titre' }}

                        <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;"/>
                    </button>
                </x-slot>

                <x-dropdown-item href="/" :active='request()->routeIs("home")'>Tout</x-dropdown-item>
                @foreach($titles as $title) 
                    <x-dropdown-item 
                        href='/title/{{ $title->slug }}' 
                        :active='request()->is("title/{$title->slug}")'
                    >{{ ucwords($title->name) }}</x-dropdown-item>
                @endforeach
            </x-dropdown>
        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="#">
                <input type="text" name="search" placeholder="Enquêter..."
                        class="bg-transparent placeholder-black font-semibold text-sm">
            </form>
        </div>
    </div>
</header>