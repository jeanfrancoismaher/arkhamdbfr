<x-layout>
    @include('components/_titles-header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($titles->count())
            <div class="lg:grid lg:grid-cols-6">
                @foreach ($titles as $title)
                    <x-title-card :title="$title" />
                @endforeach
            </div>
        @else
            <h2 class="grid justify-items-center"> Aucun titre pour l'instant. </h2>
        @endif
    </main>
</x-layout>