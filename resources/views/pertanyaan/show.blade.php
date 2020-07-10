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
					<a class="question-report" href="#">Report</a>
					<div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
					<div class="question-inner">
						<div class="clearfix"></div>
						<div class="question-desc">
							<p>{{$pertanyaan->isi}}</p>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="question-details">
							<span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span>
						</div>
						<span class="question-date"><i class="icon-time"></i>{{$pertanyaan->created_at}}</span>
						<span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
							</div>
							<div class="col-md-4">
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
				    <div class="boxedtitle page-title"><h2>Leave a reply</h2></div>
				    <form action="#" method="post" id="commentform" class="comment-form">
				        <div id="respond-textarea">
				            <p>
				                <label class="required" for="comment">Comment<span>*</span></label>
				                <textarea id="comment" name="comment" aria-required="true" cols="58" rows="8"></textarea>
				            </p>
				        </div>
				        <p class="form-submit">
				        	<input name="submit" type="submit" id="submit" value="Post your answer" class="button small color">
				        </p>
				    </form>
				</div>
				
				<div id="commentlist" class="page-content">
					<div class="boxedtitle page-title"><h2>Answers ( <span class="color">5</span> )</h2></div>
					<ol class="commentlist clearfix">
					    <li class="comment">
					        <div class="comment-body comment-body-answered clearfix"> 
					            <div class="avatar"><img alt="" src="../ask-me/images/demo/admin.jpg"></div>
					            <div class="comment-text">
					                <div class="author clearfix">
					                	<div class="comment-author"><a href="#">admin</a></div>
					                	<div class="comment-vote">
						                	<ul class="question-vote">
						                		<li><a href="#" class="question-vote-up" title="Like"></a></li>
						                		<li><a href="#" class="question-vote-down" title="Dislike"></a></li>
						                	</ul>
					                	</div>
					                	<span class="question-vote-result">+1</span>
					                	<div class="comment-meta">
					                        <div class="date"><i class="icon-time"></i>January 15 , 2014 at 10:00 pm</div> 
					                    </div>
					                    <a class="comment-reply" href="#"><i class="icon-reply"></i>Reply</a> 
					                </div>
					                <div class="text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat.</p>
					                </div>
									<div class="question-answered question-answered-done"><i class="icon-ok"></i>Best Answer</div>
					            </div>
					        </div>
					        <ul class="children">
					            <li class="comment">
					                <div class="comment-body clearfix"> 
					                	<div class="avatar"><img alt="" src="../ask-me/images/demo/avatar.png"></div>
					                    <div class="comment-text">
					                        <div class="author clearfix">
					                        	<div class="comment-author"><a href="#">vbegy</a></div>
					                        	<div class="comment-vote">
					                            	<ul class="question-vote">
					                            		<li><a href="#" class="question-vote-up" title="Like"></a></li>
					                            		<li><a href="#" class="question-vote-down" title="Dislike"></a></li>
					                            	</ul>
					                        	</div>
					                        	<span class="question-vote-result">+1</span>
					                        	<div class="comment-meta">
					                                <div class="date"><i class="icon-time"></i>January 15 , 2014 at 10:00 pm</div> 
					                            </div>
					                            <a class="comment-reply" href="#"><i class="icon-reply"></i>Reply</a> 
					                        </div>
					                        <div class="text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat.</p>
					                        </div>
					                    </div>
					                </div>
					                <ul class="children">
					                    <li class="comment">
					                        <div class="comment-body clearfix"> 
					                            <div class="avatar"><img alt="" src="../ask-me/images/demo/admin.jpg"></div>
					                            <div class="comment-text">
					                                <div class="author clearfix">
					                                	<div class="comment-author"><a href="#">admin</a></div>
					                                	<div class="comment-vote">
					                                    	<ul class="question-vote">
					                                    		<li><a href="#" class="question-vote-up" title="Like"></a></li>
					                                    		<li><a href="#" class="question-vote-down" title="Dislike"></a></li>
					                                    	</ul>
					                                	</div>
					                                	<span class="question-vote-result">+9</span>
					                                	<div class="comment-meta">
					                                        <div class="date"><i class="icon-time"></i>January 15 , 2014 at 10:00 pm</div> 
					                                    </div>
					                                    <a class="comment-reply" href="#"><i class="icon-reply"></i>Reply</a> 
					                                </div>
					                                <div class="text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat.</p>
					                                </div>
					                            </div>
					                        </div>
					                    </li>
					                 </ul><!-- End children -->
					            </li>
					            <li class="comment">
					            	<div class="comment-body clearfix"> 
				                        <div class="avatar"><img alt="" src="../ask-me/images/demo/avatar.png"></div>
				                        <div class="comment-text">
				                            <div class="author clearfix">
				                            	<div class="comment-author"><a href="#">ahmed</a></div>
				                            	<div class="comment-vote">
				                                	<ul class="question-vote">
				                                		<li><a href="#" class="question-vote-up" title="Like"></a></li>
				                                		<li><a href="#" class="question-vote-down" title="Dislike"></a></li>
				                                	</ul>
				                            	</div>
				                            	<span class="question-vote-result">-3</span>
				                            	<div class="comment-meta">
				                                    <div class="date"><i class="icon-time"></i>January 15 , 2014 at 10:00 pm</div> 
				                                </div>
				                                <a class="comment-reply" href="#"><i class="icon-reply"></i>Reply</a> 
				                            </div>
				                            <div class="text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat.</p>
				                            </div>
				                        </div>
				                    </div>
					            </li>
					        </ul><!-- End children -->
					    </li>
					    <li class="comment">
					        <div class="comment-body clearfix"> 
					            <div class="avatar"><img alt="" src="../ask-me/images/demo/avatar.png"></div>
					            <div class="comment-text">
					                <div class="author clearfix">
					                	<div class="comment-author"><a href="#">2code</a></div>
					                	<div class="comment-vote">
					                    	<ul class="question-vote">
					                    		<li><a href="#" class="question-vote-up" title="Like"></a></li>
					                    		<li><a href="#" class="question-vote-down" title="Dislike"></a></li>
					                    	</ul>
					                	</div>
					                	<span class="question-vote-result">+1</span>
					                	<div class="comment-meta">
					                        <div class="date"><i class="icon-time"></i>January 15 , 2014 at 10:00 pm</div> 
					                    </div>
					                    <a class="comment-reply" href="#"><i class="icon-reply"></i>Reply</a> 
					                </div>
					                <div class="text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat.</p>
					                </div>
					            </div>
					        </div>
					    </li>
					</ol><!-- End commentlist -->
				</div><!-- End page-content -->
				
				
	
			</div><!-- End main -->
	
{{-- sidebar --}}
@include('layouts.aside')

</div><!-- End row -->
@endsection