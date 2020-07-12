@extends('layouts.master')
@section('breadcrumb')
	<div class="breadcrumbs">
		<section class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>User Profile : {{Auth::user()->name}}</h1>
				</div>
				<div class="col-md-12">
					<div class="crumbs">
						<a href="#">Home</a>
						<span class="crumbs-span">/</span>
						<a href="#">User</a>
						<span class="crumbs-span">/</span>
						<span class="current">Profile</span>
					</div>
				</div>
			</div><!-- End row -->
		</section><!-- End container -->
	</div><!-- End breadcrumbs -->
@endsection
@section('content')
<div class="row">
	<div class="col-md-9">
				<div class="row">
					<div class="user-profile">
						<div class="col-md-12">
							<div class="page-content">
								<h2>About Me</h2>
								<div class="user-profile-img"><img width="60" height="60" src="../ask-me/images/demo/admin.jpg" alt="admin"></div>
								<div class="ul_list ul_list-icon-ok about-user">
									<ul>
										<li><i class="icon-user"></i>Name : <span>{{$user->name}}</span></li>
										<li><i class="icon-envelope"></i>Email : <span>{{$user->email}}</span></li>
										<li><i class="icon-plus"></i>Registerd : <span>{{$user->created_at->format('d-M-Y H:i')}}</span></li>
									</ul>
								</div>
{{-- 								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat. Donec congue commodo mi, sed commodo velit fringilla ac. Fusce placerat venenatis mi. Pellentesque habitant morbi tristique senectus et netus et malesuada .</p> --}}
								<div class="clearfix"></div>
								<span class="user-follow-me">Follow Me</span>
								<a href="#" original-title="Facebook" class="tooltip-n">
									<span class="icon_i">
										<span class="icon_square" icon_size="30" span_bg="#3b5997" span_hover="#2f3239">
											<i class="social_icon-facebook"></i>
										</span>
									</span>
								</a>
								<a href="#" original-title="Twitter" class="tooltip-n">
									<span class="icon_i">
										<span class="icon_square" icon_size="30" span_bg="#00baf0" span_hover="#2f3239">
											<i class="social_icon-twitter"></i>
										</span>
									</span>
								</a>
								<a href="#" original-title="Linkedin" class="tooltip-n">
									<span class="icon_i">
										<span class="icon_square" icon_size="30" span_bg="#006599" span_hover="#2f3239">
											<i class="social_icon-linkedin"></i>
										</span>
									</span>
								</a>
								<a href="#" original-title="Google plus" class="tooltip-n">
									<span class="icon_i">
										<span class="icon_square" icon_size="30" span_bg="#c43c2c" span_hover="#2f3239">
											<i class="social_icon-gplus"></i>
										</span>
									</span>
								</a>
								<a href="#" original-title="Email" class="tooltip-n">
									<span class="icon_i">
										<span class="icon_square" icon_size="30" span_bg="#000" span_hover="#2f3239">
											<i class="social_icon-email"></i>
										</span>
									</span>
								</a>
							</div><!-- End page-content -->
						</div><!-- End col-md-12 -->
						<div class="col-md-12">
							<div class="page-content page-content-user-profile">
								<div class="user-profile-widget">
									<h2>User Stats</h2>
									<div class="ul_list ul_list-icon-ok">
										<ul>
											<li><i class="icon-question-sign"></i><a href="#">Questions<span> ( <span>{{count($user->pertanyaan)}}</span> ) </span></a></li>
											<li><i class="icon-comment"></i><a href="#">Answers<span> ( <span>{{count($user->jawaban)}}</span> ) </span></a></li>
											<li><i class="icon-heart"></i><a href="#">Points<span> ( <span>20</span> ) </span></a></li>
											<li><i class="icon-asterisk"></i>Best Answers<span> ( <span>2</span> ) </span></li>
										</ul>
									</div>
								</div><!-- End user-profile-widget -->
							</div><!-- End page-content -->
						</div><!-- End col-md-12 -->
					</div><!-- End user-profile -->
				</div><!-- End row -->
				<div class="clearfix"></div>
				<div class="page-content page-content-user">
					<div class="user-questions">
						@foreach($user->pertanyaan as $ask)
						<article class="question user-question">
							<div class="row">
								<div class="col-md-10">
									<h3>
										<a href="/pertanyaan/{{$ask->id}}">{{$ask->judul}}</a>
									</h3>
								</div>
								<div class="col-md-2 widget_tag_cloud" align="right">
									<a href="/pertanyaan/{{$ask->id}}/edit" class="yellow-button"><i class="icon-edit"></i></a>
									<form action="/pertanyaan/{{$ask->id}}" method="post" style="display: inline;">
					                     @csrf
					                     @method('DELETE')
										 <button type="submit"><i class="icon-trash"></i></button>
					                 </form>
								</div>
							</div>
							
							
							
							<div class="question-content">
								<div class="question-bottom">
									<div class="question-answered"><i class="icon-ok"></i>in progress</div>
									<span class="question-date"><i class="icon-time"></i>{{$ask->created_at->format('d-M-Y H:i')}}</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>{{count($ask->jawaban)}} Answers</a></span>
								</div>
							</div>
						</article>
						@endforeach
					</div>
				</div>
				
				<div class="height_20"></div>
				<!-- if no questions
				<p>No questions yet</p>
				-->
			</div><!-- End main -->
	
{{-- sidebar --}}
@include('layouts.aside')

</div><!-- End row -->
@endsection