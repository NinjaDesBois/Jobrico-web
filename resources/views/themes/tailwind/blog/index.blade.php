@extends('theme::layouts.app')

@section('content')


    <!DOCTYPE html>
    <html lang="en">

    <!-- Mirrored from truelysell-html.dreamguystech.com/template/search.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Oct 2021 15:38:10 GMT -->

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Truelysell | Template</title>

        <link rel="shortcut icon" href="assets/img/favicon.png">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap"
            rel="stylesheet">

        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
        <div class="main-wrapper">



            <div class="breadcrumb-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="breadcrumb-title">
                                <h1>Trouvez un 
                                    Jobber</h1>
                            </div>
                        </div>
                        <div class="col-auto float-right ml-auto breadcrumb-menu">
                            <nav aria-label="breadcrumb" class="page-breadcrumb">
                                <ol class="breadcrumb">

                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 theiaStickySidebar">
                            <div class="card filter-card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Affiner votre recherche</h4>
                                    <form id="search_form">
                                        <div class="filter-widget">
                                            <div class="filter-list">
                                                <h4 class="filter-title">Mot clefs</h4>
                                                <input type="text" class="form-control"
                                                    placeholder="De quel type de Job avez-vous besoin?">
                                            </div>
                                            <div class="filter-list">
                                                <h4 class="filter-title">Trier By</h4>
                                                <select class="form-control selectbox select">
                                                    <option>Filtrer par</option>
                                                    <option>Du plus bas au plus haut</option>
                                                    <option>Du plus cher au moins cher</option>
                                                    <option>Les plus récents</option>
                                                </select>
                                            </div>
                                            <div class="filter-list">
                                                <h4 class="filter-title">Categories</h4>
                                                <select class="form-control form-control selectbox select">
                                                    <option>All Categories</option>
                                                    @foreach ($categories as $category)
                                                    <option>{{$category->slug}}</option>
                                                    @endforeach
                                                    
                                                    
                                                </select>
                                            </div>
                                            <div class="filter-list">
                                                <h4 class="filter-title">Location</h4>
                                                <input class="form-control" type="text" placeholder="Search Location">
                                            </div>
                                        </div>
                                        <button class="btn btn-primary pl-5 pr-5 btn-block get_services"
                                            type="button">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row align-items-center mb-4">
                                <div class="col-md-6 col">
                                    <h4><span>118</span> Services</h4>
                                </div>
                                <div class="col-md-6 col-auto">
                                    <div class="view-icons">
                                        <a href="javascript:void(0);" class="grid-view active"><i
                                                class="fas fa-th-large"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="service-widget">
                                            <div class="service-img">
                                                <a href="service-details.html">
                                                    <img class="img-fluid serv-img" alt="Service Image"
                                                        src="assets/img/services/service-01.jpg">
                                                </a>
                                                <div class="fav-btn">
                                                    <a href="javascript:void(0)" class="fav-icon">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="service-user">
                                                        <a href="#">
                                                            <img src="assets/img/customer/user-01.jpg" alt="">
                                                        </a>
                                                        <span class="service-price">$25</span>
                                                    </div>
                                                    <div class="cate-list">
                                                        <a class="bg-yellow" href="service-details.html">Cleaning</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="service-content">
                                                <h3 class="title">
                                                    <a href="service-details.html">Toughened Glass Fitting Services</a>
                                                </h3>
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span class="d-inline-block average-rating">(4.3)</span>
                                                </div>
                                                <div class="user-info">
                                                    <div class="row">
                                                        <span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i>
                                                            <span>xxxxxxxx49</span>
                                                        </span>
                                                        <span class="col ser-location">
                                                            <span>Wayne, New Jersey</span> <i
                                                                class="fas fa-map-marker-alt ml-1"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="service-widget">
                                            <div class="service-img">
                                                <a href="service-details.html">
                                                    <img class="img-fluid serv-img" alt="Service Image"
                                                        src="assets/img/services/service-02.jpg">
                                                </a>
                                                <div class="fav-btn">
                                                    <a href="javascript:void(0)" class="fav-icon">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="service-user">
                                                        <a href="#">
                                                            <img src="assets/img/customer/user-02.jpg" alt="">
                                                        </a>
                                                        <span class="service-price">$50</span>
                                                    </div>
                                                    <div class="cate-list">
                                                        <a class="bg-yellow" href="service-details.html">Automobile</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="service-content">
                                                <h3 class="title">
                                                    <a href="service-details.html">Car Repair Services</a>
                                                </h3>
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <span class="d-inline-block average-rating">(5)</span>
                                                </div>
                                                <div class="user-info">
                                                    <div class="row">
                                                        <span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i>
                                                            <span>xxxxxxxx85</span></span>
                                                        <span class="col ser-location"><span>Hanover, Maryland</span> <i
                                                                class="fas fa-map-marker-alt ml-1"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="service-widget">
                                            <div class="service-img">
                                                <a href="service-details.html">
                                                    <img class="img-fluid serv-img" alt="Service Image"
                                                        src="assets/img/services/service-03.jpg">
                                                </a>
                                                <div class="fav-btn">
                                                    <a href="javascript:void(0)" class="fav-icon">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="service-user">
                                                        <a href="#">
                                                            <img src="assets/img/customer/user-03.jpg" alt="">
                                                        </a>
                                                        <span class="service-price">$45</span>
                                                    </div>
                                                    <div class="cate-list">
                                                        <a class="bg-yellow"
                                                            href="service-details.html">Electrical</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="service-content">
                                                <h3 class="title">
                                                    <a href="service-details.html">Electric Panel Repairing Service</a>
                                                </h3>
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span class="d-inline-block average-rating">(4.5)</span>
                                                </div>
                                                <div class="user-info">
                                                    <div class="row">
                                                        <span class="col-auto ser-contact"><i
                                                                class="fas fa-phone mr-1"></i>
                                                            <span>xxxxxxxx30</span></span>
                                                        <span class="col ser-location"><span>Kalispell, Montana</span> <i
                                                                class="fas fa-map-marker-alt ml-1"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>﻿



            <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>___scripts_1___

            <script src="assets/js/popper.min.js"></script>
            <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

            <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
            <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

            <script src="assets/js/moment.min.js"></script>
            <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

            <script src="assets/js/script.js"></script>
    </body>







    {{-- <div class="relative px-8 pt-8 pb-20 mx-auto xl:px-5 max-w-7xl sm:px-6 lg:pt-10 lg:pb-28">
    <div class="absolute inset-0">
        <div class="bg-white h-1/3 sm:h-2/3"></div>
    </div>
    <div class="relative mx-auto max-w-7xl">
		<div class="flex flex-col justify-start">
			<h1 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
				Our Awesome Blog
			</h1>
			<p class="mt-3 text-xl leading-7 text-gray-500 sm:mt-4">
				Check out some of our latest blog posts below.
			</p>
			<ul class="flex self-start inline w-auto px-3 py-1 mt-3 text-xs font-medium text-gray-600 bg-blue-100 rounded-md">
				<li class="mr-4 font-bold text-blue-600 uppercase">Categories:</li>
				@foreach ($categories as $cat)
					<li class="@if (isset($category) && isset($category->slug) && $category->slug == $cat->slug){{ 'text-blue-700' }}@endif"><a href="{{ route('wave.blog.category', $cat->slug) }}">{{ $cat->name }}</a></li>
					@if (!$loop->last)
						<li class="mx-2">&middot;</li>
					@endif
				@endforeach
			</ul>
		</div>
        <div class="grid gap-5 mx-auto mt-12 sm:grid-cols-2 lg:grid-cols-3">

			<!-- Loop Through Posts Here -->
			@foreach ($posts as $post)
			<article id="post-{{ $post->id }}" class="flex flex-col overflow-hidden rounded-lg shadow-lg" typeof="Article">

				<meta property="name" content="{{ $post->title }}">
				<meta property="author" typeof="Person" content="admin">
				<meta property="dateModified" content="{{ Carbon\Carbon::parse($post->updated_at)->toIso8601String() }}">
				<meta class="uk-margin-remove-adjacent" property="datePublished" content="{{ Carbon\Carbon::parse($post->created_at)->toIso8601String() }}">

                <div class="flex-shrink-0">
					<a href="{{ $post->link() }}">
                    	<img class="object-cover w-full h-48" src="{{ $post->image() }}" alt="">
					</a>
                </div>
                <div class="relative flex flex-col justify-between flex-1 p-6 bg-white">
                    <div class="flex-1">
                        <a href="{{ $post->link() }}" class="block">
                            <h3 class="mt-2 text-xl font-semibold leading-7 text-gray-900">
                                {{ $post->title }}
                            </h3>
                        </a>
                        <a href="{{ $post->link() }}" class="block">
                            <p class="mt-3 text-base leading-6 text-gray-500">
								{{ substr(strip_tags($post->body), 0, 200) }}@if (strlen(strip_tags($post->body)) > 200){{ '...' }}@endif
                            </p>
                        </a>
                    </div>
                    <p class="relative self-start inline-block px-2 py-1 mt-4 text-xs font-medium leading-5 text-gray-400 uppercase bg-gray-100 rounded">
                            <a href="{{ route('wave.blog.category', $post->category->slug) }}" class="text-gray-700 hover:underline" rel="category">
								{{ $post->category->name }}
                            </a>
                        </p>
                </div>

                <div class="flex items-center p-6 bg-gray-50">
                        <div class="flex-shrink-0">
                            <a href="#">
                                <img class="w-10 h-10 rounded-full" src="{{ $post->user->avatar() }}" alt="">
                            </a>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium leading-5 text-gray-900">
                                Written by <a href="#" class="hover:underline">{{ $post->user->name }}</a>
                            </p>
                            <div class="flex text-sm leading-5 text-gray-500">
								on <time datetime="{{ Carbon\Carbon::parse($post->created_at)->toIso8601String() }}" class="ml-1">{{ Carbon\Carbon::parse($post->created_at)->toFormattedDateString() }}</time>
                            </div>
                        </div>
                    </div>

            </article>
			@endforeach
			<!-- End Post Loop Here -->

        </div>
    </div>

	<div class="flex justify-center my-10">
		{{ $posts->links('theme::partials.pagination') }}
		<!--li class="uk-active"><span aria-current="page" class="page-numbers current">1</span></li>
		<li><a class="page-numbers" href="https://demo.yootheme.com/themes/wordpress/2017/copper-hill/?paged=2&amp;page_id=92">2</a></li>
		<li><a class="next page-numbers" href="https://demo.yootheme.com/themes/wordpress/2017/copper-hill/?paged=2&amp;page_id=92"><span uk-pagination-next="" class="uk-pagination-next uk-icon"><svg width="7" height="12" viewBox="0 0 7 12" xmlns="http://www.w3.org/2000/svg" ratio="1"><polyline fill="none" stroke="#000" stroke-width="1.2" points="1 1 6 6 1 11"></polyline></svg></span></a></li-->
	</ul>

</div> --}}

@endsection
