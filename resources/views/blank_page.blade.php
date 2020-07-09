@extends('layouts.master')
@section('breadcrumb')
	<div class="breadcrumbs">
		<section class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Contact Us</h1>
				</div>
				<div class="col-md-12">
					<div class="crumbs">
						<a href="#">Home</a>
						<span class="crumbs-span">/</span>
						<a href="#">Pages</a>
						<span class="crumbs-span">/</span>
						<span class="current">Contact Us</span>
					</div>
				</div>
			</div><!-- End row -->
		</section><!-- End container -->
	</div><!-- End breadcrumbs -->
@endsection
@section('content')
<div class="row">
	<div class="col-md-9">
		ISI
	</div>
	
{{-- sidebar --}}
@include('layouts.aside')

</div><!-- End row -->
@endsection