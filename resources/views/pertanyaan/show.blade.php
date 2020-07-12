@extends('layouts.master')
@section('breadcrumb')
	<div class="breadcrumbs">
		<section class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>{{$pertanyaan->judul}}</h1>
				</div>
				<div class="col-md-12">
					<div class="crumbs">
						<a href="#">Home</a>
						<span class="crumbs-span">/</span>
						<a href="#">Pertanyaan</a>
						<span class="crumbs-span">/</span>
						<span class="current">Detail</span>
					</div>
				</div>
			</div><!-- End row -->
		</section><!-- End container -->
	</div><!-- End breadcrumbs -->
@endsection
@section('content')
<div class="row">
	<div class="col-md-9">
				<article class="question single-question question-type-normal">
					<h2>
						<a href="single_question.html">{{$pertanyaan->judul}}</a>
					</h2>
					<div class="question-inner">
						<div class="clearfix"></div>
						<div class="question-desc">
							<p>{{$pertanyaan->isi}}</p>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="question-details">
								<span class="question-answered"><i class="icon-ok"></i>in progress</span>
						</div>
						<span class="question-date"><i class="icon-time"></i>{{$pertanyaan->created_at->format('d-M-Y H:i')}}</span>
						<span class="question-comment"><a href="#"><i class="icon-comment"></i>{{count($pertanyaan->jawaban)}} Answer</a></span>
							</div>
							<div class="col-md-4" align="right">
								<div class="widget_tag_cloud">
									@foreach($pertanyaan->tags as $tag)
									<a href="#">{{$tag->tag_name}}</a>
									@endforeach
								</div>
							</div>
							<div class="col-md-2">
								<span class="single-question-vote-result">+22</span>
								<ul class="single-question-vote">
									<li><a href="#" class="single-question-vote-down" title="Dislike"><i class="icon-thumbs-down"></i></a></li>
									<li><a href="#" class="single-question-vote-up" title="Like"><i class="icon-thumbs-up"></i></a></li>
								</ul>
							</div>
						</div>
						
						
						<div class="clearfix"></div>
					</div>
				</article>

				<div class="about-author clearfix">
				    <div class="author-image">
				    	<a href="#" original-title="admin" class="tooltip-n"><img alt="" src="../ask-me/images/demo/admin.jpg"></a>
				    </div>
				    <div class="author-bio">
				        <h4>{{$pertanyaan->user->name}}</h4>
				        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra auctor neque. Nullam lobortis, sapien vitae lobortis tristique.
				    </div>
				</div><!-- End about-author -->
				
				<div id="respond" class="comment-respond about-author page-content clearfix">
				    <div class="boxedtitle page-title"><h2>Leave a comment</h2></div>
				    <form action="/komentar/{{$pertanyaan->id}}" method="post" id="commentform" class="comment-form">
				    	@csrf
				        <div id="respond-textarea">
				            <p>
				                <label class="required" for="comment">Comment<span>*</span></label>
				                <textarea id="comment" name="komentar_pertanyaan" aria-required="true" cols="58" rows="1" required></textarea>
				            </p>
				        </div>
				        <p class="form-submit">
				        	<input name="submit" type="submit" id="submit" value="Post comment" class="button small color">
				        </p>
				    </form>
				</div>

				<div id="respond" class="comment-respond about-author page-content clearfix">
				    <div class="boxedtitle page-title"><h2>Leave a answer</h2></div>
				    <form action="/jawaban/{{$pertanyaan->id}}" method="post" id="commentform" class="comment-form">
				    	@csrf
				        <div id="respond-textarea">
				            <p>
				                <label class="required" for="comment">Answer<span>*</span></label>
				                <textarea id="comment" name="jawaban" aria-required="true" cols="58" rows="8" required></textarea>
				            </p>
				        </div>
				        <p class="form-submit">
				        	<input name="submit" type="submit" id="submit" value="Post answer" class="button small color">
				        </p>
				    </form>
				</div>


				
				<div id="commentlist" class="page-content">

					<div class="boxedtitle page-title"><h2>List Answers ( <span class="color">{{count($pertanyaan->jawaban)}}</span> )</h2></div>
					<ol class="commentlist clearfix">

					@foreach($pertanyaan->jawaban as $jawaban)
					    <li class="comment">
					        <div class="comment-body comment-body-answered clearfix"> 
					            <div class="avatar"><img alt="" src="../ask-me/images/demo/admin.jpg"></div>
					            <div class="comment-text">
					                <div class="author clearfix">
					                	<div class="comment-author"><a href="#">{{$jawaban->user->name}}</a></div>
					                	<div class="comment-vote">
						                	<ul class="question-vote">
						                		<li><a href="#" class="question-vote-up" title="Like"></a></li>
						                		<li><a href="#" class="question-vote-down" title="Dislike"></a></li>
						                	</ul>
					                	</div>
					                	<span class="question-vote-result">+1</span>
					                	<div class="comment-meta">
					                        <div class="date"><i class="icon-time"></i>{{$jawaban->created_at->format('d, M Y H:i')}} | 
					                        	@if($jawaban->user->id == Auth::user()->id)
					                        	<a href="/jawaban/{{$jawaban->id}}/edit"><i class="icon-edit"></i>Edit</a> | 
					                        	<form action="/jawaban/{{$jawaban->id}}" method="post" style="display: inline;">
							                     @csrf
							                     @method('DELETE') 
							                     <button type="submit">Delete</button>
							                 	</form>
							                 	@else
							                 	@endif
							                 </div> 
					                    </div>
					                </div>
					                <div class="text"><p>{{$jawaban->isi}}</p>
					                </div>
					                @if($jawaban->is_selected == 0)
					                @else
									<div class="question-answered question-answered-done"><i class="icon-ok"></i>Best Answer</div>
									@endif
									<br>
									<div class="clearfix"></div>
									<form action="/komentar-jawaban/{{$jawaban->id}}" method="post" id="commentform" class="comment-form">
				    				@csrf
									<div class="row">
										<div class="col-md-10">
											<p>
											<textarea name="komentar_jawaban" class="komentar" id="comment" cols="58" rows="10" required></textarea>
												
											</p>
										</div>
										<div class="col-md-2">
											<button type="submit">Comment</button>
										</div>
									</div>
									</form>

					            </div>

					        </div>
							
					    @foreach($jawaban->komentar as $komen)
					        <ul class="children">
					            <li class="comment">
					                <div class="comment-body clearfix"> 
					                	<div class="avatar"><img alt="" src="../ask-me/images/demo/avatar.png"></div>
					                    <div class="comment-text">
					                        <div class="author clearfix">
					                        	<div class="comment-author"><a href="#">{{$komen->user->name}}</a></div>
					                        	<div class="comment-vote">
					                            	<ul class="question-vote">
					                            		<li><a href="#" class="question-vote-up" title="Like"></a></li>
					                            		<li><a href="#" class="question-vote-down" title="Dislike"></a></li>
					                            	</ul>
					                        	</div>
					                        	<span class="question-vote-result">+1</span>
					                        	<div class="comment-meta">
					                                <div class="date"><i class="icon-time"></i>{{$komen->created_at->format('d-M-Y H:i')}} | 
					                                	@if($komen->user->id == Auth::user()->id)
								                        	<form action="/komentar-jawaban/{{$komen->id}}" method="post" style="display: inline;">
										                     @csrf
										                     @method('DELETE') 
										                     <button type="submit">Delete</button>
										                 	</form>
										                 	@else
										                 	@endif
					                                </div> 
					                            </div>
					                        </div>
					                        <div class="text"><p>{{$komen->isi}}</p>
					                        </div>
					                    </div>
					                </div>

					            </li>

					        </ul><!-- End children -->
						@endforeach

					    </li>
					@endforeach
					    
					</ol><!-- End commentlist -->
				</div><!-- End page-content -->

{{-- KOMETARR PERTANYAAN--}}
				<div id="commentlist" class="page-content">

					<div class="boxedtitle page-title"><h2>List Comment Question ( <span class="color">{{count($pertanyaan->komentar)}}</span> )</h2></div>
					<ol class="commentlist clearfix">

					@foreach($pertanyaan->komentar as $komentar)
					    <li class="comment">
					        <div class="comment-body comment-body-answered clearfix"> 
					            <div class="avatar"><img alt="" src="../ask-me/images/demo/admin.jpg"></div>
					            <div class="comment-text">
					                <div class="author clearfix">
					                	<div class="comment-author"><a href="#">{{$komentar->user->name}}</a></div>
					                	
					                	<div class="comment-meta">
					                        <div class="date"><i class="icon-time"></i>{{$komentar->created_at->format('d, M Y H:i')}} | <a href="/komentar-pertanyaan/{{$komentar->id}}/edit"><i class="icon-edit"></i>Edit</a> |
					                        	@if($komentar->user->id == Auth::user()->id)
								                <form action="/komentar-pertanyaan/{{$komentar->id}}" method="post" style="display: inline;">
										            @csrf
										            @method('DELETE') 
										            <button type="submit">Delete</button>
										         </form>
										         @else
										         @endif
					                        </div> 
					                    </div>
					                </div>
					                <div class="text"><p>{{$komentar->isi}}</p>
					                </div>

					            </div>

					        </div>

					        
					    </li>
					@endforeach
					    
					</ol><!-- End commentlist -->
				</div><!-- End page-content -->
				
				
	
			</div><!-- End main -->
	
{{-- sidebar --}}
@include('layouts.aside')

</div><!-- End row -->
@endsection