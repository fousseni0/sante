@extends('layouts.app')

@section('content')
<div class="h-full ml-14 mb-10 md:ml-64">

    <livewire:commande.show :commandes="$commande"/>

</div>
@endsection    