@extends('layouts.app')

@section('content')
<main class="h-full w-120 ml-14 md:ml-64 bg-chevre-img bg-fixed from-black">
    <div class="px-10 flex flex-wrap-reverse justify-end">
        <button x-data="{}" x-on:click="window.livewire.emitTo('categorie.add', 'show')" class="bg-indigo-500 text-white mt-5 px-2 py-3 rounded-md">Ajouter Catégorie</button>
    </div>
        <div class="text-lg text-bold text-white text-center">Liste des categories de produits de chaque categories et des playslists</div>
    <div class="maw-w-screen grid grid-cols-2 gap-4 flex-column px-4 mt-5">
        @foreach ($categories as $category)
            <a href="{{ route('admin.categories.show', ['category' => $category->id]) }}">
                <div class="bg-gray-300 w-full md:h-50 rounded shadow-sm hover:shadow-xl py-4 px-2">
                    <div class="text-center pb-5 text-green-700 text-4xl w-full md:w-1/2">
                        {{$category->name}}
                    </div>
                    <?php  $property_images = json_decode($category->playlist->images);?>
                    <img src="{{ asset('storage/'. $property_images[0]) }}" alt="Thumbnail" id="image">    
                </div>
            </a>
        
        @endforeach
    </div>

    <livewire:categorie.add />
        
</main>

@section('extra-js')
<script>
    var image = document.querySelector('#img');
    var pre = document.querySelector('#pre');

    pre.addEventListener("click", function()
    { 
        console.log(image.src); 
    });

</script>
@endsection
@endsection
