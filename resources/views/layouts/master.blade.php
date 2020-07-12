<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Ask me – You Ask. We Answer</title>
	<meta name="description" content="Ask me Responsive Questions and Answers Template">
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Main Style -->
	<link rel="stylesheet" href="{{asset('askme/style.css')}}">
	<link rel="stylesheet" href="{{asset('askme/css/custom.css')}}">
	
	<!-- Skins -->
	<link rel="stylesheet" href="{{asset('askme/css/skins/skins.css')}}">
	
	<!-- Responsive Style -->
	<link rel="stylesheet" href="{{asset('askme/css/responsive.css')}}">
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="{{asset('askme/images/favicon.png')}}">
  
</head>
<body>

@include('layouts._header')

@yield('breadcrumb')
	
	
	<section class="container main-content">
		@yield('content')
	</section><!-- End container -->
	
	@include('layouts._footer')
</div><!-- End wrap -->

<div class="go-up"><i class="icon-chevron-up"></i></div>

<!-- js -->
@include('layouts._script')
<!-- End js -->

</body>


</html>