@extends('layouts.master')
@section('breadcrumb')
<div class="section-warp ask-me">
		<div class="container clearfix">
			<div class="box_icon box_warp box_no_border box_no_background" box_border="transparent" box_background="transparent" box_color="#FFF">
				<div class="row">
					<div class="col-md-3">
						<h2>Welcome to Ask me</h2>
						<p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque.</p>
						<div class="clearfix"></div>
						<a class="color button dark_button medium" href="/contact_us">About Us</a>
						<a class="color button dark_button medium" href="/login">Join Now</a>
					</div>
					<div class="col-md-9">
						<form class="form-style form-style-2">
							<p>
								<textarea rows="4" id="question_title" onfocus="if(this.value=='Ask any question and you be sure find your answer ?')this.value='';" onblur="if(this.value=='')this.value='Ask any question and you be sure find your answer ?';">Ask any question and you be sure find your answer ?</textarea>
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
		                <li class="tab"><a href="#" class="current">Recent Questions</a></li>
		                <li class="tab"><a href="#">Most Responses</a></li>
		                <li class="tab"><a href="#">No answers</a></li>
		            </ul>
		            <div class="tab-inner-warp" id="satu">
						<div class="tab-inner">
						@foreach($pertanyaan as $row)
							<article class="question question-type-normal">
								<h2>
									<a href="/pertanyaan/{{$row->id}}">{{$row->judul}}</a>
								</h2>
								<a class="question-type-main"><i class="icon-question-sign"></i>Question</a>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/avatar.png"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">{{substr($row->isi, 0,300)}}...
									</p>

									<div class="row">
										<div class="col-md-6">
											<div class="question-details">
										<span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span>
									</div>
									<span class="question-date"><i class="icon-time"></i>{{$row->created_at}}</span>
									<span class="question-comment"><a href="/pertanyaan/{{$row->id}}"><i class="icon-comment"></i>5 Answer</a></span>
										</div>
										<div class="col-md-6" align="right">
											<div class="widget_tag_cloud">
												@foreach($row->tags as $tag)
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
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">This is my first Question most response</a>
								</h2>
								<a class="question-report" href="#">Report</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/avatar.png"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
									<div class="question-details">
										<span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
									<span class="question-date"><i class="icon-time"></i>4 mins ago</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
									<span class="question-view"><i class="icon-user"></i>70 views</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-poll">
								<h2>
									<a href="single_question_poll.html">This Is My Second Poll Question most response</a>
								</h2>
								<a class="question-report" href="#">Report</a>
								<div class="question-type-main"><i class="icon-signal"></i>Poll</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/admin.jpg"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
									<div class="question-details">
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
									<span class="question-date"><i class="icon-time"></i>4 mins ago</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
									<span class="question-view"><i class="icon-user"></i>70 views</span>
									<div class="clearfix"></div>
								</div>
							</article>

							<a href="#" class="load-questions"><i class="icon-refresh"></i>Load More Questions</a>
					    </div>
					</div>

					<div class="tab-inner-warp">
						<div class="tab-inner">
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">This is my first Question No answer</a>
								</h2>
								<a class="question-report" href="#">Report</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/avatar.png"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
									<div class="question-details">
										<span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
									<span class="question-date"><i class="icon-time"></i>4 mins ago</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
									<span class="question-view"><i class="icon-user"></i>70 views</span>
									<div class="clearfix"></div>
								</div>
							</article>
							<article class="question question-type-normal">
								<h2>
									<a href="single_question.html">This Is My Third Question no answer</a>
								</h2>
								<a class="question-report" href="#">Report</a>
								<div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
								<div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/avatar.png"></a>
								</div>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
									<div class="question-details">
										<span class="question-answered"><i class="icon-ok"></i>in progress</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
									<span class="question-date"><i class="icon-time"></i>4 mins ago</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
									<span class="question-view"><i class="icon-user"></i>70 views</span>
									<div class="clearfix"></div>
								</div>
							</article>



							<a href="#" class="load-questions"><i class="icon-refresh"></i>Load More Questions</a>
					    </div>
					</div>
		        </div><!-- End page-content -->
			</div><!-- End main -->
@include('layouts.aside')
		</div><!-- End row -->
@endsection