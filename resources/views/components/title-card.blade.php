@props(['title'])

@php
    $classes = "transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl col-span-6";
@endphp

<article {{ $attributes->merge(['class' => $classes])}}>
    <div class="py-6 px-5 max-w-xl">
        <div class="flex-1 lg:mr-8">
            <img src="/images/{{ $title->img_mini }}" alt="Title illustration" class="rounded-xl w-1/4">
        </div>

        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <div class="space-x-2">
                    <x-tag :category="$title->category"/>
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="/title/{{ $title->slug }}">{{ $title->name }}</a>
                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                        Published <time>{{ $title->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                </div>

                <div class="hidden lg:block">
                    <a href="/title/{{ $title->slug }}"
                        class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                    >Read More</a>
                </div>
            </footer>
        </div>
    </div>
</article>