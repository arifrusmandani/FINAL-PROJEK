@extends('layouts.master')
@section('breadcrumb')
	<div class="breadcrumbs">
		<section class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Ask Question</h1>
				</div>
				<div class="col-md-12">
					<div class="crumbs">
						<a href="#">Home</a>
						<span class="crumbs-span">/</span>
						<a href="#">Pertanyaan</a>
						<span class="crumbs-span">/</span>
						<span class="current">Ask Question</span>
					</div>
				</div>
			</div><!-- End row -->
		</section><!-- End container -->
	</div><!-- End breadcrumbs -->
@endsection
@section('content')
<div class="row">
		<div class="col-md-9">
				
				<div class="page-content ask-question">
					<div class="boxedtitle page-title"><h2>Ask Question</h2></div>
					
					<p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque.</p>
					
					<div class="form-style form-style-3" id="question-submit">
						<form action="/pertanyaan" method="post">
							@csrf
							<div class="form-inputs clearfix">
								<p>
									<label class="required">Question Title<span>*</span></label>
									<input type="text" name="judul" id="question-title">
									<span class="form-description">Please choose an appropriate title for the question to answer it even easier .</span>
								</p>
								<p>
									<label>Tags</label>
									<input type="text" class="input" name="tags" id="question_tags" data-seperator=",">
									<span class="form-description">Please choose  suitable Keywords Ex : <span class="color">question , poll</span> .</span>
								</p>
	
								<div class="clearfix"></div>
								
							</div>
							<div id="form-textarea">
								<p>
									<label class="required">Isi<span>*</span></label>
									<textarea id="question-details" name="isi" aria-required="true" cols="58" rows="8"></textarea>
									<span class="form-description">Type the description thoroughly and in detail .</span>
								</p>
							</div>
							<p class="form-submit">
								<input type="submit" id="publish-question" value="Publish Your Question" class="button color small submit">
							</p>
						</form>
					</div>
				</div><!-- End page-content -->
			</div>
@include('layouts.aside')
		</div><!-- End row -->
@endsection