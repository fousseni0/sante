@extends('layouts.app')

@section('content')
<div class="h-full ml-14 md:ml-64 bg-gray-100"> 
  <div class="text-3xl mb-5 text-center">Région {{ $regionCible->nom }}</div>
  <div class="container mx-auto px-4 md:px-12">
      <div x-data="{open: false}" class="mb-10 mt-3 my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
        <button @click="open = !open" class="h-10 px-5 m-2 text-green-100 transition-colors duration-150 bg-green-700 rounded-lg focus:shadow-outline hover:bg-green-800">Ajouter Une Ville pour la Region</button>
        <form x-show="open" x-cloak method="POST" action="{{ route('admin.localite.ville.add', $regionCible->id) }}" class="space-y-4 text-gray-700">
        @csrf
            <div class="flex flex-wrap">
              <div class="w-full">
                <label for="nom" class="block mb-1" for="formGridCode_card">Nom de la ville</label>
                <input name="nom" id="nom"
                class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" id="formGridCode_card"/>
              </div>
              @error('nom')
                <span class="mt-4 text-xs italic text-red-500">
                    {{ $message }}
                </span>
              @enderror
            </div>
              <button type="submit"
              class="h-10 px-5 m-2 text-green-100 transition-colors duration-150 bg-green-700 rounded-lg focus:shadow-outline hover:bg-green-800">Ajouter la ville pour {{ $regionCible->nom }}</button>
          </form>
      </div>



        <div class="text-2xl text-center">liste des villes de la région {{ $regionCible->nom }}</div>
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
    
        @foreach ($villes as $ville)
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                <div x-data="{open: false}"  class="shadow-lg widget w-full p-8 rounded-lg bg-white border-l-4 border-green-400">
                    <div class="flex items-center">
                      <a href="{{ route('admin.localite.quartier', $ville->id ) }}">
                        <div class="icon w-14 p-3.5 bg-green-400 text-white rounded-full mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                              </svg>
                        </div>
                      </a>
                        
                        <div class="flex flex-col justify-center pt-3">
                            <a class="hover:underline font-extrabold" href="{{ route('admin.localite.quartier', $ville->id ) }}"><div class="text-lg hover:text-green-700 ">{{ $ville->nom }}</div></a>
                        </div>
                    </div>

                    <button @click="open = !open" class="flex items-center justify-center w-full bg-white hover:bg-green-500 p-2 text-md font-semibold text-gray-800 uppercase mt-8 transition ease-in-out duration-500 rounded-lg">
                        <span>Modifier Informations</span>
                      </button>
                    
                    <form x-show="open" x-cloak method="POST" action="{{ route('admin.localite.ville.edit', ['id'=>$regionCible->id,'ville' => $ville]) }}"
                    class="space-y-4 text-gray-700">
                    @csrf
                        <div class="flex flex-wrap">
                          <div class="w-full">
                            <label for="nom" class="block mb-1" for="formGridCode_card">Nom Ville</label>
                            <input value="{{ $ville->nom }}" name="nom" id="nom"
                            class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" id="formGridCode_card"/>
                          </div>
                          @error('nom')
                            <span class="mt-4 text-xs italic text-red-500">
                                {{ $message }}
                            </span>
                          @enderror
                        </div>
                          <button type="submit"
                          class="h-10 px-5 m-2 text-green-100 transition-colors duration-150 bg-green-700 rounded-lg focus:shadow-outline hover:bg-green-800">Valider</button>
                      </form>
                </div>
            </div>   
        @endforeach 
        </div>
    </div>
    <div class="pt-5">{{ $villes->links('vendor.pagination.tailwind') }}</div>
    </div>
</div>
@endsection