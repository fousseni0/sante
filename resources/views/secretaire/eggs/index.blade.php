@extends('layouts.app')

@section('content')

<main class="h-full ml-14 mb-10 md:ml-64 bg-gray-100">
    <div class="px-10 pt-5 flex flex-wrap-reverse justify-end">
        <button x-data="{}" x-on:click="window.livewire.emitTo('egg.add', 'show')" class="inline-flex items-center h-10 px-5 text-white transition-colors duration-150 bg-green-500 rounded-lg focus:shadow-outline hover:bg-green-500">
            <svg class="w-4 h-4 mr-3 fill-current text-white" viewBox="0 0 20 20">
                <path d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" fill-rule="evenodd">
                </path>
            </svg>
            <span>Ajouter un autre type d'oeuf</span>
        </button>
    </div>

    <div class="text-xl uppercase text-bold text-indigo-500 text-center">Liste des Oeufs </div>
    <div class="maw-w-screen grid gap-5 flex-column px-10 mt-3">
        <livewire:egg.liste-oeuf />
    </div>
    <div>
        <livewire:egg.add />
    </div>
</main>
@endsection