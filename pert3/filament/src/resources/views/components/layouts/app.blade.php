<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('components.link.header')
  @livewireStyles
</head>

<body>

<!-- navigation -->
<header class="navigation bg-tertiary">
	<nav class="navbar navbar-expand-xl navbar-light text-center py-3">
		<div class="container">
			<a class="navbar-brand" href="{{ route ('home') }}">
				<img loading="prelaod" decoding="async" class="img-fluid" width="160" src="front/images/logo.png" alt="Wallet">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav m-auto mb-2 mb-lg-0">
					<li class="nav-item"> <a wire:navigate class="nav-link" href="{{ route ('home') }}">Home</a></li>
					<li class="nav-item "> <a wire:navigate class="nav-link" href="{{ route ('about') }}">About Us</a></li>
					<li class="nav-item "> <a wire:navigate class="nav-link" href="services.html">Services</a></li>
					<li class="nav-item "> <a wire:navigate class="nav-link" href="team.html">Our Team</a></li>
					<li class="nav-item "><a wire:navigate class="nav-link " href="blog.html">Blog</a></li>
					<li class="nav-item "><a wire:navigate class="nav-link " href="faq.html">FAQ</a></li>
				</ul>
				<a href="#!" class="btn btn-outline-primary">Contact Us</a>				
			</div>
		</div>
	</nav>
</header>
<!-- /navigation -->



{{ $slot }}


<footer class="section-sm bg-tertiary">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Service</h5>
					<ul class="list-unstyled">
						<li class="mb-2"><a href="service-details.html">Digital Marketing</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Web Design</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Logo Design</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Graphic Design</a>
						</li>
						<li class="mb-2"><a href="service-details.html">SEO</a>
						</li>
            
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Quick Links</h5>
					<ul class="list-unstyled">
						<li class="mb-2"><a href="#!">About Us</a>
						</li>
						<li class="mb-2"><a href="#!">Contact Us</a>
						</li>
						<li class="mb-2"><a href="#!">Blog</a>
						</li>
						<li class="mb-2"><a href="#!">Team</a>
              {{-- <a wire:navigate href="{{ route ('home') }}"> Copyright 2025</a> --}}
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Other Links</h5>
					<ul class="list-unstyled">
						<li class="list-inline-item me-4"><a class="text-black" href="privacy-policy.html">Privacy Policy</a></li>
						<li class="list-inline-item me-4"><a class="text-black" href="terms.html">Terms &amp; Conditions</a></li>
                    
					</ul>
				</div>
			</div>			
		</div>
		
	</div>
</footer>


@include('components.link.script')
@livewireScripts
</body>
</html>