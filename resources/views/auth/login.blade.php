@extends('layouts.app')

@section('content')
<div class="pt-20 bg-oeuf-img bg-fixed">
    <main class="sm:container sm:mx-auto items-center sm:max-w-lg pb-20">
    <div class="flex">
        <div class="w-full">
            <section class="shadow flex flex-col break-words bg-white sm:border-1 sm:rounded-md">

                <header class="px-6 py-5 text-3xl text-blue-500 mb-6 text-center bg-gray-200 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Connexion') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8 rounded-lg border shadow-md" method="POST" action="{{ route('login') }}">
                    @csrf
                    @if(Session::has('error'))
                        <div class="alert alert-danger">
                            <span class="mt-4 mb-2 text-md italic text-red-500">
                                <span>{{ Session::get('error')}}</span>
                            </span>
                        </div>
                    @endif
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

                    <!-- Password -->
                    <div class="flex flex-wrap mb-4">
                        <label for="password" class="block font-semibold text-gray-700 mb-2">{{ __('Mot de passe') }}</label>
                        <input id="password" type="password" name="password" class="shadow border rounded w-full p-2" value="{{ old('password') }}" autocomplete="password" placeholder="Votre mot de passe" autofocus>
                       @error('password')
                            <span class="mt-4 text-xs italic text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex items-center">
                        <label class="inline-flex items-center text-sm text-gray-700" for="remember">
                            <input type="checkbox" name="remember" id="remember" class="shadow form-checkbox"
                                {{ old('remember') ? 'checked' : '' }}>
                            <span class="ml-2">{{ __('Se Souvenir De Moi') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                        <a class="ml-auto text-sm text-blue-500 no-underline whitespace-no-wrap hover:text-purple-700 hover:underline"
                            href="{{ route('password.request') }}">
                            {{ __('Mot De passe Oublié?') }}
                        </a>
                        @endif
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                        class="w-full p-3 text-base font-bold leading-normal text-gray-100 no-underline whitespace-no-wrap bg-blue-500 rounded-lg select-none hover:bg-blue-700 hover:underline transition ease-in-out duration-500 sm:py-4">
                        {{ __('Se Connecter') }}
                        </button>

                        @if (Route::has('register'))
                        <p class="w-full my-6 text-xs text-center text-gray-700 sm:text-sm sm:my-8">
                            {{ __('Vous n\'avez pas de compte?') }}
                            <a class="text-blue-500 no-underline hover:text-blue-700" href="{{ route('register') }}">
                               {{ __('S\'enregistrer') }}
                            </a>
                        </p>
                        @endif
                    </div>
                </form>
            </section>
        </div>
    </div>
</main>
</div>
@endsection
