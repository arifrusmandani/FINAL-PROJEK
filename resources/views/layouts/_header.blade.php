<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">
	
	<div class="login-panel">
		<section class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="page-content">
						<h2>Login</h2>
						<div class="form-style form-style-3">
							<form method="POST" action="{{ route('login') }}">
								@csrf
								<div class="form-inputs clearfix">
									<p class="login-text">
										<input type="email" value="Email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus onfocus="if (this.value == 'Username') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Username';}">
										@error('email')
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $message }}</strong>
		                                    </span>
		                                @enderror
										<i class="icon-user"></i>
									</p>
									<p class="login-password">
										<input type="password" value="Password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" onfocus="if (this.value == 'Password') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Password';}">
										@error('password')
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $message }}</strong>
		                                    </span>
		                                @enderror
										<i class="icon-lock"></i>
										<a href="#">Forget</a>
									</p>
								</div>
								<p class="form-submit login-submit">
									<input type="submit" value="Log in" class="button color small login-submit submit">
								</p>
								<div class="rememberme">
									<label><input type="checkbox" checked="checked"> Remember Me</label>
								</div>
							</form>
						</div>
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
				<div class="col-md-6">
					<div class="page-content Register">
						<h2>Register Now</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravdio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequa. Vivamus vulputate posuere nisl quis consequat.</p>
						<a class="button color small signup">Create an account</a>
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
			</div>
		</section>
	</div><!-- End login-panel -->
	
	<div class="panel-pop" id="signup">
		<h2>Register Now<i class="icon-remove"></i></h2>
		<div class="form-style form-style-3">
			<form method="POST" action="{{ route('register') }}">
              @csrf
				<div class="form-inputs clearfix">
					<p>
						<label class="required">Username<span>*</span></label>
						<input type="text" name="name" id="name">
						@error('name')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                         @enderror
					</p>
					<p>
						<label class="required">E-Mail<span>*</span></label>
						<input type="email" name="email" id="email">
						@error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</p>
					<p>
						<label class="required">Password<span>*</span></label>
                        <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
						@error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</p>
					<p>
						<label class="required">Confirm Password<span>*</span></label>
						<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
					</p>
				</div>
				<p class="form-submit">
					<input type="submit" value="Signup" class="button color small submit">
				</p>
			</form>
		</div>
	</div><!-- End signup -->
	
	<div class="panel-pop" id="lost-password">
		<h2>Lost Password<i class="icon-remove"></i></h2>
		<div class="form-style form-style-3">
			<p>Lost your password? Please enter your username and email address. You will receive a link to create a new password via email.</p>
			<form>
				<div class="form-inputs clearfix">
					<p>
						<label class="required">Username<span>*</span></label>
						<input type="text">
					</p>
					<p>
						<label class="required">E-Mail<span>*</span></label>
						<input type="email">
					</p>
				</div>
				<p class="form-submit">
					<input type="submit" value="Reset" class="button color small submit">
				</p>
			</form>
			<div class="clearfix"></div>
		</div>
	</div><!-- End lost-password -->
	
	<div id="header-top">
		<section class="container clearfix">
			<nav class="header-top-nav">
				<ul>
					<li><a href="/contact_us"><i class="icon-envelope"></i>Contact</a></li>
					<li><a href="#"><i class="icon-headphones"></i>Support</a></li>
					@if(isset(Auth::user()->name))
					<li><a href="/profile"><i class="icon-user"></i>{{Auth::user()->name}}</a></li>
					<li><a href="/logout"><i class="icon-signout"></i>Logout</a></li>
					@else
					<li><a href="login.html" id="login-panel"><i class="icon-user"></i>Login Area</a></li>
					@endif
				</ul>
			</nav>
			<div class="header-search">
				<form>
				    <input type="text" value="Search here ..." onfocus="if(this.value=='Search here ...')this.value='';" onblur="if(this.value=='')this.value='Search here ...';">
				    <button type="submit" class="search-submit"></button>
				</form>
			</div>
		</section><!-- End container -->
	</div><!-- End header-top -->
	<header id="header">
		<section class="container clearfix">
			<div class="logo"><a href="index-2.html"><img alt="" src="images/logo.png"></a></div>
			<nav class="navigation">
				<ul>
					<li class="home"><a href="/">Home</a></li>
					<li class="ask_question"><a href="/pertanyaan/create">Ask Question</a></li>
					<!-- <li><a href="cat_question.html">Questions</a>
						<ul>
							<li><a href="cat_question.html">Questions Category</a></li>
							<li><a href="single_question.html">Question Single</a></li>
							<li><a href="single_question_poll.html">Poll Question Single</a></li>
						</ul>
					</li> -->
					<!-- <li><a href="user_profile.html">User</a>
						<ul>
							<li><a href="user_profile.html">User Profile</a></li>
							<li><a href="user_questions.html">User Questions</a></li>
							<li><a href="user_answers.html">User Answers</a></li>
							<li><a href="user_favorite_questions.html">User Favorite Questions</a></li>
							<li><a href="user_points.html">User Points</a></li>
							<li><a href="edit_profile.html">Edit Profile</a></li>
						</ul>
					</li> -->
					<!-- <li><a href="blog_1.html">Blog</a>
						<ul>
							<li><a href="blog_1.html">Blog 1</a>
								<ul>
									<li><a href="blog_1.html">Right sidebar</a></li>
									<li><a href="blog_1_l_sidebar.html">Left sidebar</a></li>
									<li><a href="blog_1_full_width.html">Full Width</a></li>
								</ul>
							</li>
							<li><a href="blog_2.html">Blog 2</a>
								<ul>
									<li><a href="blog_2.html">Right sidebar</a></li>
									<li><a href="blog_2_l_sidebar.html">Left sidebar</a></li>
									<li><a href="blog_2_full_width.html">Full Width</a></li>
								</ul>
							</li>
							<li><a href="single_post.html">Post Single</a>
								<ul>
									<li><a href="single_post.html">Right sidebar</a></li>
									<li><a href="single_post_l_sidebar.html">Left sidebar</a></li>
									<li><a href="single_post_full_width.html">Full Width</a></li>
								</ul>
							</li>
						</ul>
					</li -->>
					<!-- <li><a href="right_sidebar.html">Pages</a>
						<ul>
							<li><a href="login.html">Login</a></li>
							<li><a href="contact_us.html">Contact Us</a></li>
							<li><a href="ask_question.html">Ask Question</a></li>
							<li><a href="right_sidebar.html">Right Sidebar</a></li>
							<li><a href="left_sidebar.html">Left Sidebar</a></li>
							<li><a href="full_width.html">Full Width</a></li>
							<li><a href="404.html">404</a></li>
						</ul>
					</li> -->
					@if(isset(Auth::user()->name))
					<li><a href="/profile">Profile</a></li>
					@else
					<li><a href="/login">Login</a></li>
					@endif
					<li><a href="/contact_us">Contact Us</a></li>
				</ul>
			</nav>
		</section><!-- End container -->
	</header><!-- End header -->
	