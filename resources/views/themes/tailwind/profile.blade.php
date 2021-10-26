@extends('theme::layouts.app')


@section('content')
<nav class="container"><div class="">
	<div class="bg-white flex items-center rounded-full shadow-xl">
	  <input class="rounded-l-full w-full py-4 px-6 text-gray-700 leading-tight focus:outline-none" id="search" type="text" placeholder="Cherchez un jobber">
	  
	  <div class="p-4">
		<button class="bg-blue-500 text-white rounded-full p-2 hover:bg-blue-400 focus:outline-none w-12 h-12 flex items-center justify-center">
		  icon
		</button>
		</div>
	  </div>
	</div>
  </div></nav>

	<div class="flex flex-col px-8 mx-auto my-6 xl:px-5 lg:flex-row max-w-7xl">

		<div class="flex flex-col items-center justify-center w-full px-10 py-16 mb-8 mr-6 bg-white border rounded-lg lg:mb-0 lg:flex-1 lg:w-1/3 border-gray-150">
			<img src="{{ Voyager::image($user->avatar) }}" class="w-24 h-24 border-4 border-gray-200 rounded-full">
			<h2 class="mt-8 text-2xl font-bold">{{ $user->name }}</h2>
			<p class="my-1 font-medium text-wave-blue">{{ '@' . $user->username }}</p>
			<div class="px-3 py-1 my-2 text-xs font-medium text-white text-gray-600 bg-gray-200 rounded">{{ $user->role->display_name }}</div>
			<p class="max-w-lg mx-auto mt-3 text-base text-center text-gray-500">{{ $user->profile('about') }}</p>
		</div>

		<div class="flex flex-col w-full p-10 overflow-hidden bg-white border rounded-lg lg:w-2/3 border-gray-150 lg:flex-2">
			<p class="text-lg text-gray-600">Bonjour {{ $user->name }} , Bienvenue dans votre Tableau de bord </p>
		    <p class="mt-5 text-lg text-gray-600">Ici , vous pourrez rechercher un jobber , poster une demande d'aide directement ou simplement verifier votre hitorique de commande</p>
		</div>
        
	</div>

@endsection
