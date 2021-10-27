@extends('theme::layouts.app')
@section('content')
  {{-- Search Section --}}
 <section class="mx-auto px-8 my-6 lg:flex-row max-w-7xl xl:px-5">
	<div >
		<div class="container">
			<div class="search-box" style="border: 2px solid black">
				<form
					action="https://truelysell-html.dreamguystech.com/template/search.html">
					<div class="search-input line ">
						<i class="fas fa-tv bficon"></i>
						<div class="form-group mb-0">
							<input type="text" class="form-control"
								placeholder="De quoi avez-vous besoin?">
						</div>
					</div>
					<div class="search-input">
						<i class="fas fa-location-arrow bficon"></i>
						<div class="form-group mb-0">
							<input type="text" class="form-control"
								placeholder="Votre ville">
							<a class="current-loc-icon current_location"
								href="javascript:void(0);"><i
									class="fas fa-crosshairs"></i></a>
						</div>
					</div>
					<div class="search-btn">
						<button class="btn search_service"
							type="submit">Chercher</button>
					</div>
				</form>
			</div> 
		</div> 
	</div> 
                        </section> 
    {{-- end Search Section --}}

    <div class="flex flex-col mx-auto px-8 my-6 lg:flex-row max-w-7xl xl:px-5 bg-white">
        <div class="main-wrapper">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-md-4">
                            <div class="mb-4">
                                <div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
                                    <img alt="profile image" style="border-radius: 50%"
                                        src="/storage/users/default.png?1635283915" class="avatar-lg rounded-circle">
                                    <div class="ml-sm-3 ml-md-0 ml-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
                                        <h6 class="mb-0">Le nom de lutilisteur</h6>
                                        <p class="text-muted mb-0">Membre depuis</p>
                                    </div>
                                </div>
                            </div>
                            <div class="widget settings-menu">
                                <ul role="tablist" class="nav nav-tabs">
                                    <li class="nav-item current">
                                        <a href="#" class="nav-link active">
                                            <i class="fas fa-chart-line"></i> <span>Tableau de Bord</span>
                                        </a>
                                    </li>
                                    <li class="nav-item current">
                                        <a href="favourites.html" class="nav-link">
                                            <i class="fas fa-heart"></i> <span>Mes Favoris</span>
                                        </a>
                                    </li>
                                    <li class="nav-item current">
                                        <a href="user-bookings.html" class="nav-link">
                                            <i class="far fa-calendar-check"></i> <span>Mes Demandes de Jobs</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="user-settings.html" class="nav-link">
                                            <i class="far fa-user"></i> <span>Parametres de compte</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="user-wallet.html" class="nav-link">
                                            <i class="far fa-money-bill-alt"></i> <span>Mon portefeuille</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="user-reviews.html" class="nav-link">
                                            <i class="far fa-star"></i> <span>Mes evaluations</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="user-payment.html" class="nav-link">
                                            <i class="fas fa-hashtag"></i> <span>Mes paiements</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="width: 60%">
            <div class="col-xl-9 col-md-8">
                <div style="display:flex; justify-content:space-around" class="mt-4">
                    <div class="col-lg-4 px-2">
                        <a href="user-bookings.html" class="dash-widget dash-bg-1">
                            <span class="dash-widget-icon">223</span>
                            <div class="dash-widget-info">
                                <span>Bookings</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 px-2">
                        <a href="user-reviews.html" class="dash-widget dash-bg-2">
                            <span class="dash-widget-icon">16</span>
                            <div class="dash-widget-info">
                                <span>Reviews</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 px-2">
                        <a href="notifications.html" class="dash-widget dash-bg-3">
                            <span class="dash-widget-icon">1</span>
                            <div class="dash-widget-info">
                                <span>Notification</span>
                            </div>
                        </a>
                    </div>
					<div class="col-lg-4 px-2">
                        <a href="messages.html" class="dash-widget dash-bg-3">
                            <span class="dash-widget-icon">1</span>
                            <div class="dash-widget-info">
                                <span>Messages</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>



	@endsection



    {{-- <div class="flex flex-col mx-auto px-8 my-6 lg:flex-row max-w-7xl xl:px-5">
            <div
                class="flex flex-col justify-start flex-1 mb-5 overflow-hidden bg-white border rounded-lg lg:mr-3 lg:mb-0 border-gray-150">
                <div
                    class="flex flex-wrap items-center justify-between p-5 bg-white border-b border-gray-150 sm:flex-no-wrap">
                    <div class="flex items-center justify-center w-12 h-12 mr-5 rounded-lg bg-wave-100">
                        <svg class="w-6 h-6 text-wave-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <div class="relative flex-1">
                        <h3 class="text-lg font-medium leading-6 text-gray-700">
                            Bienvenue sur votre Tableau de Bord </h3>
                        <p class="text-sm leading-5 text-gray-500 mt">
                            Comment ça marche ?
                        </p>
                    </div>

                </div>
                <div class="relative p-5">
                    <p class="text-base leading-loose text-gray-500">Bienvenue sur votre <a
                            href="{{ route('wave.dashboard') }}" class="underline text-wave-500">Tableau de bord</a>,,
                        d'ici vous pouvez rechercher un jobber ou poster une annonce pour trouver de l'aide.</p>

                    <div class="container">
                        {{-- Search Section --}}
    {{-- <section class="hero-section">
                            <div class="layer">

                                <div class="home-banner"></div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="section-search">
                                                <div class="search-box" style="border: 2px solid black">
                                                    <form
                                                        action="https://truelysell-html.dreamguystech.com/template/search.html">
                                                        <div class="search-input line ">
                                                            <i class="fas fa-tv bficon"></i>
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control"
                                                                    placeholder="De quoi avez-vous besoin?">
                                                            </div>
                                                        </div>
                                                        <div class="search-input">
                                                            <i class="fas fa-location-arrow bficon"></i>
                                                            <div class="form-group mb-0">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Votre ville">
                                                                <a class="current-loc-icon current_location"
                                                                    href="javascript:void(0);"><i
                                                                        class="fas fa-crosshairs"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="search-btn">
                                                            <button class="btn search_service"
                                                                type="submit">Chercher</button>
                                                        </div>
                                                    </form>
                                                </div> --}}
    {{-- <div class="search-cat">
									<i class="fas fa-circle"></i>
									<span>Les plus recherchés</span>
									<a href="#">Electricite</a>
									<a href="#">Plomberie</a>
								   
								</div> --}}
    {{-- </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section> --}}
    {{-- end Search Section --}}

  

                                    
