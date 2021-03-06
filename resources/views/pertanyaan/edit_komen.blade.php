@extends('layouts.master')
@section('breadcrumb')
	<div class="breadcrumbs">
		<section class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Edit Comment</h1>
				</div>
				<div class="col-md-12">
					<div class="crumbs">
						<a href="#">Home</a>
						<span class="crumbs-span">/</span>
						<a href="#">Pertanyaan</a>
						<span class="crumbs-span">/</span>
						<a href="#">Comment</a>
						<span class="crumbs-span">/</span>
						<span class="current">Edit</span>
					</div>
				</div>
			</div><!-- End row -->
		</section><!-- End container -->
	</div><!-- End breadcrumbs -->
@endsection
@section('content')
<div class="row">
	<div class="col-md-9">

				<div id="respond" class="comment-respond about-author page-content clearfix">
				    <div class="boxedtitle page-title"><h2>Edit your comment</h2></div>
				    <form action="/komentar-pertanyaan/{{$ask_komen->id}}" role="form" method="POST">
		                @csrf
		                @method('PUT')
				        <div id="respond-textarea">
				            <p>
				                <label class="required" for="comment">Comment<span>*</span></label>
				                <textarea id="comment" name="komentar_pertanyaan" aria-required="true" cols="58" rows="1" required>{{$ask_komen->isi}}</textarea>
				            </p>
				        </div>
				        <p class="form-submit">
				        	<input name="submit" type="submit" id="submit" value="Update comment" class="button small color">
				        </p>
				    </form>
				</div>



			</div><!-- End main -->
	
{{-- sidebar --}}
@include('layouts.aside')

</div><!-- End row -->
@endsection