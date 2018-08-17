@extends('layouts.app')

@section('title','欢迎访问')

@push('scripts')
	<script type="text/javascript" src="/assets/js/main/baguetteBox.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			baguetteBox.run('.tz-gallery');
		});

	</script>
@endpush

@push('stylesheets')
		<link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/bootstrap-3.3.4.css">
		<link rel="stylesheet" href="/assets/css/baguetteBox/baguetteBox.min.css">
		<link rel="stylesheet" href="/assets/css/baguetteBox/thumbnail-gallery.css">
		<style>
			.jq22-demo{ text-align: center; margin-top: 30px; }
			.jq22-demo a{ padding-left: 20px; padding-right: 20px; }
		</style>
@endpush

@section('content')

	<div class="htmleaf-container">
		<div class="container gallery-container">

		    
		    <div class="tz-gallery">

		        <div class="row">

		            <div class="col-sm-6 col-md-4">
		                <div class="thumbnail">
		                    <a class="lightbox" href="/asstes/images/park.jpg">
		                        <img src="/assets/images/park.jpg" alt="Park">
		                    </a>
		                    <div class="caption">
		                        <h3>Thumbnail label</h3>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		                    </div>
		                </div>
		            </div>
		            <div class="col-sm-6 col-md-4">
		                <div class="thumbnail">
		                    <a class="lightbox" href="/assets/images/bridge.jpg">
		                        <img src="/assets/images/bridge.jpg" alt="Bridge">
		                    </a>
		                    <div class="caption">
		                        <h3>Thumbnail label</h3>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		                    </div>
		                </div>
		            </div>
		            <div class="col-sm-6 col-md-4">
		                <div class="thumbnail">
		                    <a class="lightbox" href="/assets/images/tunnel.jpg">
		                        <img src="/assets/images/tunnel.jpg" alt="Tunnel">
		                    </a>
		                    <div class="caption">
		                        <h3>Thumbnail label</h3>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		                    </div>
		                </div>
		            </div>
		            <div class="col-sm-6 col-md-4">
		                <div class="thumbnail">
		                    <a class="lightbox" href="/assets/images/coast.jpg">
		                        <img src="/assets/images/coast.jpg" alt="Coast">
		                    </a>
		                    <div class="caption">
		                        <h3>Thumbnail label</h3>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		                    </div>
		                </div>
		            </div>
		            <div class="col-sm-6 col-md-4">
		                <div class="thumbnail">
		                    <a class="lightbox" href="/assets/images/rails.jpg">
		                        <img src="/assets/images/rails.jpg" alt="Rails">
		                    </a>
		                    <div class="caption">
		                        <h3>Thumbnail label</h3>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		                    </div>
		                </div>
		            </div>
		            <div class="col-sm-6 col-md-4">
		                <div class="thumbnail">
		                    <a class="lightbox" href="/assets/images/traffic.jpg">
		                        <img src="/assets/images/traffic.jpg" alt="Traffic">
		                    </a>
		                    <div class="caption">
		                        <h3>Thumbnail label</h3>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		                    </div>
		                </div>
		            </div>
		            <div class="col-sm-6 col-md-4">
		                <div class="thumbnail">
		                    <a class="lightbox" href="/assets/images/coast.jpg">
		                        <img src="/assets/images/coast.jpg" alt="Coast">
		                    </a>
		                    <div class="caption">
		                        <h3>Thumbnail label</h3>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		                    </div>
		                </div>
		            </div>
		        </div>

		    </div>

		</div>
		
	</div>

@endsection



