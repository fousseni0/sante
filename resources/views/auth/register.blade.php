@extends('layouts.app')

@section('content')
<div class="pt-20 bg-poule-img bg-fixed">
    <main class="sm:container sm:mx-auto sm:max-w-lg pb-20">
    <div class="flex">
        <div class="w-full">
            <section class="shadow flex flex-col break-words bg-white sm:border-1 sm:rounded-md">

                <header class="px-6 py-5 text-3xl text-blue-500 mb-6 text-center bg-gray-200 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Enregistrement') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8 shadow rounded-lg" method="POST"
                    action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-wrap mb-4">
                        <label for="name" class="block font-semibold text-gray-700 mb-2">
                            {{ __('Nom d\'Utilisateur') }}
                        </label>
                        <input id="name" type="text" name="name" class="shadow border rounded w-full p-2" value="{{ old('name') }}" autocomplete="name" placeholder="Nom d'utilisateur" autofocus>
                       @error('name')
                            <span class="mt-4 text-xs italic text-red-500">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <!-- Email Address -->
                    <div class="flex flex-wrap mb-4">
                        <label for="email" class="block font-semibold text-gray-700 mb-2">
                            {{ __('Email') }}
                        </label>
                        <input id="email" type="email" name="email" class="shadow border rounded w-full p-2" value="{{ old('email') }}" autocomplete="email" placeholder="Votre email" autofocus>
                        @error('email')
                            <span class="mt-4 text-xs italic text-red-500">
                                <span>{{ $message }}</span>
                            </span>
                        @enderror
                    </div>

                    <div class="flex flex-wrap mb-4">
                        <label for="level" class="block font-semibold text-gray-700 mb-2">
                            {{ __('Niveau') }}
                        </label>
                        <input id="niveau" type="number" name="level" class="shadow border rounded w-full p-2" value="{{ old('patient') }}" autocomplete="level" placeholder="Votre niveau" autofocus>
                        @error('level')
                            <span class="mt-4 text-xs italic text-red-500">
                                <span>{{ $message }}</span>
                            </span>
                        @enderror
                    </div>
                    <!-- Password -->
                    <div class="flex flex-wrap mb-4">
                        <label for="password" class="block font-semibold text-gray-700 mb-2">{{ __('Mot de passe') }}</label>
                        <input id="password" type="password" name="password" class="shadow border rounded w-full p-2" value="{{ old('password') }}" autocomplete="password" placeholder="Votre mot de passe" autofocus>
                       @error('password')
                            <span class="mt-4 text-xs italic text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="flex flex-wrap">
                        <label for="password-confirm" class="block font-semibold text-gray-700 mb-2">
                            {{ __('Confirmer Le Mot De Passe') }}
                        </label>

                        <input id="password-confirm" type="password" class="shadow border rounded w-full p-2"
                            name="password_confirmation" required autocomplete="new-password" placeholder="Confirmer Votre mot de passe" autofocus>

                            @error('password-confirm')
                            <span class="mt-4 text-xs italic text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full p-3 text-base font-bold leading-normal text-gray-100 no-underline whitespace-no-wrap bg-blue-500 rounded-lg select-none hover:bg-blue-700 hover:underline transition ease-in-out duration-500  sm:py-4">
                            {{ __('S\'enregistrer') }}
                        </button>

                        <p class="w-full my-6 text-xs text-center text-gray-700 sm:text-sm sm:my-8">
                            {{ __('Vous possédez déjà un comppte?') }}
                            <a class="text-blue-500 no-underline hover:text-purple-700 hover:underline" href="{{ route('login') }}">
                                {{ __('Se Connecter') }}
                            </a>
                        </p>
                    </div>
                </form>
            </section>
        </div>
    </div>
</main>
</div>
@endsection
