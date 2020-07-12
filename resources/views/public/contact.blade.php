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
			<div class="contact-us">
				<div class="col-md-7">
					<div class="page-content">
						<h2>Say hello !</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat.</p>
						<form class="form-style form-style-3 form-style-5 form-js" action="https://2code.info/demo/html/ask-me-html/contact_us.php" method="post">
							<div class="form-inputs clearfix">
								<p>
									<label for="name" class="required">Name<span>*</span></label>
									<input type="text" class="required-item" value="" name="name" id="name" aria-required="true">
								</p>
								<p>
									<label for="mail" class="required">E-Mail<span>*</span></label>
									<input type="email" class="required-item" id="mail" name="mail" value="" aria-required="true">
								</p>
								<p>
									<label for="url" class="required">Website</label>
									<input type="text" id="url" name="url" value="">
								</p>
							</div>
							<div class="form-textarea">
								<p>
									<label for="message" class="required">Message<span>*</span></label>
									<textarea id="message" class="required-item" name="message" aria-required="true" cols="58" rows="7"></textarea>
								</p>
							</div>
							<p class="form-submit">
								<input name="submit" type="submit" value="Send" class="submit button small color">
							</p>
						</form>
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
				<div class="col-md-5">
					<div class="page-content">
						<h2>About Us</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat. Donec congue commodo mi, sed commodo velit fringilla ac. Fusce placerat venenatis mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ornare, dolor a aliquet rutrum, dolor turpis condimentum leo, a semper lacus purus in felis.</p>
						<div class="widget widget_contact">
							<ul>
								<li><i class="icon-map-marker"></i>Address :<p>Dibawah langit, Diatas bumi bulat yang sedang berputar.</p></li>
								<li><i class="icon-phone"></i>Phone number :<p>000000000000000</p></li>
								<li><i class="icon-envelope-alt"></i>E-mail :<p>tanya@google.com</p></li>
								<li>
									<i class="icon-share"></i>Social links :
									<p>
										<a href="#" original-title="Facebook" class="tooltip-n">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#3b5997" span_hover="#2f3239">
													<i i_color="#FFF" class="social_icon-facebook"></i>
												</span>
											</span>
										</a>
										<a href="#" original-title="Twitter" class="tooltip-n">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#00baf0" span_hover="#2f3239">
													<i i_color="#FFF" class="social_icon-twitter"></i>
												</span>
											</span>
										</a>
										<a original-title="Youtube" class="tooltip-n" href="#">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#cc291f" span_hover="#2f3239">
													<i i_color="#FFF" class="social_icon-youtube"></i>
												</span>
											</span>
										</a>
										<a href="#" original-title="Linkedin" class="tooltip-n">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#006599" span_hover="#2f3239">
													<i i_color="#FFF" class="social_icon-linkedin"></i>
												</span>
											</span>
										</a>
										<a href="#" original-title="Google plus" class="tooltip-n">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#ca2c24" span_hover="#2f3239">
													<i i_color="#FFF" class="social_icon-gplus"></i>
												</span>
											</span>
										</a>
										<a original-title="RSS" class="tooltip-n" href="#">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#F18425" span_hover="#2f3239">
													<i i_color="#FFF" class="icon-rss"></i>
												</span>
											</span>
										</a>
										<a original-title="Instagram" class="tooltip-n" href="#">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#306096" span_hover="#2f3239">
													<i i_color="#FFF" class="social_icon-instagram"></i>
												</span>
											</span>
										</a>
										<a original-title="Dribbble" class="tooltip-n" href="#">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#e64281" span_hover="#2f3239">
													<i i_color="#FFF" class="social_icon-dribbble"></i>
												</span>
											</span>
										</a>
										<a original-title="Pinterest" class="tooltip-n" href="#">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#c7151a" span_hover="#2f3239">
													<i i_color="#FFF" class="icon-pinterest"></i>
												</span>
											</span>
										</a>
									</p>
								</li>
							</ul>
						</div>
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
			</div><!-- End contact-us -->
</div><!-- End row -->
@endsection