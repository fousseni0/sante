@extends('layouts.app')

@section('content')
<main class="h-full ml-14 mb-10 md:ml-64">
    <div class="px-10 pt-5 flex flex-wrap-reverse justify-end">
        <button x-data="{}" x-on:click="window.livewire.emitTo('product.add', 'show')" class="inline-flex items-center h-10 px-5 text-white transition-colors duration-150 bg-green-500 rounded-lg focus:shadow-outline hover:bg-green-500">
            <svg class="w-4 h-4 mr-3 fill-current text-white" viewBox="0 0 20 20">
                <path d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" fill-rule="evenodd">
                </path>
            </svg>
            <span>Ajouter Animal</span>
        </button>
    </div>

    <div class="text-gray-900 text-xl pt-3 text-center"> Images des différentes diversitées de la catégorie</div>
    
    @foreach (json_decode($category->playlist->images) as $images)
    <div class="p-10 inline-block justify-between">
        <img class="h-48 object-cover md:w-48" src="{{ asset('storage') . '/' . $images }}" alt="image"d="img">
    </div>
    @endforeach
    
    <div class="text-xl uppercase text-bold text-indigo-500 text-center">Liste des Animaux de : {{ $category->name }} </div>
        <div class="maw-w-screen grid gap-5 flex-column px-10 mt-3">
        <livewire:product.list-products :category="$category"/>
    </div>
    <div>
        <livewire:product.add :category="$category"/>
    </div>
</main>
@endsection
