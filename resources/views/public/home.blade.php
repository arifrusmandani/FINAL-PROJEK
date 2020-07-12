@extends('layouts.master')
@section('breadcrumb')
<div class="section-warp ask-me">
		<div class="container clearfix">
			<div class="box_icon box_warp box_no_border box_no_background" box_border="transparent" box_background="transparent" box_color="#FFF">
				<div class="row">
					<div class="col-md-3">
						<h2>Welcome to Ask me</h2>
						<p>Ask me. Kowe takon. Aku jawab. Sebuah platform takon pitakon mengenai dunia perkodingan yang sikiranya bisa membantu para programmer yang masih noob dalam permasalahan error.</p>
						<div class="clearfix"></div>
						<a class="color button dark_button medium" href="/contact_us">About Us</a>
						<a class="color button dark_button medium" href="/login">Join Now</a>
					</div>
					<div class="col-md-9">
						<form class="form-style form-style-2">
							<p>
								<textarea rows="4" id="question_title" onfocus="if(this.value=='Ask any question and you be sure find your answer ?')this.value='';" onblur="if(this.value=='')this.value='Ask any question and you be sure find your answer ?';">Tanyakan sesuatu sek mbo ora reti, opo wae permasalahan mu ?</textarea>
								<i class="icon-pencil"></i>
								<span class="color button small publish-question"><a href="/pertanyaan/create">Ask Now</a></span>
							</p>
						</form>
					</div>
				</div><!-- End row -->
			</div><!-- End box_icon -->
		</div><!-- End container -->
	</div><!-- End section-warp -->
@endsection
@section('content')
<div class="row">
			<div class="col-md-9">
				
				<div class="tabs-warp question-tab">
		            <ul class="tabs">
		                <li class="tab"><a href="#dua" class="current">Recent Questions</a></li>
		                <li class="tab"><a href="#satu">No answers</a></li>
		            </ul>
		            <div class="tab-inner-warp" id="satu">
						<div class="tab-inner">
						@foreach($pertanyaan as $ask)
						
							<article class="question question-type-normal">
								<h2>
									<a href="/pertanyaan/{{$ask->id}}">{{$ask->judul}}</a>
								</h2>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/avatar.png"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">{{substr($ask->isi, 0,300)}}...
									</p>

									<div class="row">
										<div class="col-md-8">
											<div class="question-details">
											{{-- <span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span> --}}
											<span class="question-answered"><i class="icon-ok"></i>in progress</span>
											</div>
											<span class="question-date"><i class="icon-time"></i>{{$ask->created_at->format('d-M-Y H:i')}}</span>
											<span class="question-comment"><a href="/pertanyaan/{{$ask->id}}"><i class="icon-comment"></i>{{count($ask->jawaban)}} Answer</a></span>
										</div>
										<div class="col-md-4" align="right">
											<div class="widget_tag_cloud">
												@foreach($ask->tags as $tag)
												<a href="#">{{$tag->tag_name}}</a>
												@endforeach
											</div>
										</div>
									</div>
									
									<div class="clearfix"></div>
									
								</div>
							</article>
						@endforeach

							<a href="#" class="load-questions"><i class="icon-refresh"></i>Load More Questions</a>
					    </div>
					</div>

					<div class="tab-inner-warp" id="dua">
						<div class="tab-inner">
						@foreach($pertanyaan as $ask)
						@if(count($ask->jawaban) == 0)
							<article class="question question-type-normal">
								<h2>
									<a href="/pertanyaan/{{$ask->id}}">{{$ask->judul}}</a>
								</h2>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/avatar.png"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">{{substr($ask->isi, 0,300)}}...</p>
									<div class="row">
									<div class="col-md-8">
										<div class="question-details">
										<span class="question-answered"><i class="icon-ok"></i>in progress</span>
										</div>
										<span class="question-date"><i class="icon-time"></i>{{$ask->created_at->format('d-M-Y H:i')}}</span>
										<span class="question-comment"><a href="/pertanyaan/{{$ask->id}}"><i class="icon-comment"></i>{{count($ask->jawaban)}} Answer</a></span>
									</div>
									<div class="col-md-4" align="right">
										<div class="widget_tag_cloud">
											@foreach($ask->tags as $tag)
											<a href="#">{{$tag->tag_name}}</a>
											@endforeach
										</div>
									</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</article>
						@else
						@endif
						@endforeach
							<a href="#" class="load-questions"><i class="icon-refresh"></i>Load More Questions</a>
					    </div>
					</div>
		        </div><!-- End page-content -->
			</div><!-- End main -->
@include('layouts.aside')
		</div><!-- End row -->
@endsection