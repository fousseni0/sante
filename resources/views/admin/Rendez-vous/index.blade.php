@extends('layouts.app')

@section('content')
<div class="h-full ml-14 mb-10 md:ml-64">

    <div class="text-xl text-bold text-bold text-indigo-500 text-center mt-4 mb-5">Liste des Commandes effectuées par les clients</div>

    @foreach ($commandes as $commande)
    <div class="shadow-sm mx-10  px-2 hover:shadow-xl bg-gray-100 border-b-2 border-gray-900">
        <a href="{{ route('admin.commande.show', ['id' => $commande->id]) }}" class="mx-5 mt-5 rounded-lg">
            <div class="p-4 flex justify-between items-center border-b">
                <div class="text-2xl text-center ">
                    Commande {{ $commande->id }}
                </div>
                <div class="text-md text-center text-blue-500">
                    Commande Passée à {{ $commande->commande_passed_at }}
                </div>
                <div>
                    @if ($commande->statut)
                    <button class="h-8 px-5 text-indigo-700 text-sm text-bold transition-colors duration-150 border border-indigo-500 rounded-lg focus:shadow-outline hover:bg-indigo-500 hover:text-indigo-100 cursor-not-allowed">Valider</button>
                    @else
                    <button class="h-8 px-5 text-blue-100 text-sm transition-colors duration-150 border border-blue-500 rounded-lg focus:shadow-outline bg-blue-500 hover:bg-white hover:text-black  cursor-not-allowed">En attente</button>
                    @endif
                </div>
            </div>

            <div>

                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                    <p class="text-red-500 font-bold text-xl">
                        Total à payer
                    </p>
                    <p class="font-extrabold text-red-600 text-xl">
                        {{ $commande->getPrice($commande->total) }}
                    </p>
                </div>


                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b mb-2">
                    <p class="text-gray-600 text-md">
                        Nom du destinataire
                    </p>
                    <p class="text-green-800 font-semibold">
                        {{ $commande->user_name }}
                    </p>
                </div>
            </div>
        </a>
    </div>

    @endforeach
</div>
@endsection