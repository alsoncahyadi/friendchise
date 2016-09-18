<!-- Buat parent template yang nantinya akan diturunkan ke view yang lain misal homepage sama about-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> FriendChise </title>
        <link rel="shortcut icon" type="ico" href="<?php public_path()?>/images/favicon.ico"/>

        <!--<link href="{{ asset('bootstrap_3_3_6/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">-->
	<!-- CSS -->
        <link href="<?php public_path()?>/css/bootstrap.min.css" rel="stylesheet" type = "text/css" />
        <link href="<?php public_path()?>/css/flexslider.css" rel="stylesheet" type = "text/css" />
        <link href="<?php public_path()?>/css/prettyPhoto.css" rel="stylesheet" type = "text/css" />
        <link href="<?php public_path()?>/css/animate.css" rel="stylesheet" type = "text/css" media="all" />
        <link href="<?php public_path()?>/css/owl.carousel.css" rel="stylesheet" />
        <link href="<?php public_path()?>/css/style.css" rel="stylesheet" type = "text/css" />
        <link href="<?php public_path()?>/bootstrap_3_3_6/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php public_path()?>/css/style.css" rel="stylesheet" />
        
    <!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	
    
        <!--[if lt IE 9]-->
          <!--<script src="{{ asset('http://laravelapp.dev/js/html5shiv_3_7_2.min.js') }}"></script>
          <script src="{{ asset('http://laravelapp.dev/js/respond_1_4_2.min.js') }}"></script>-->

          <script src="<?php echo asset('http://laravelapp.dev/js/html5shiv_3_7_2.min.js') ?>"></script>
          <script src="<?php echo asset('http://laravelapp.dev/js/respond_1_4_2.min.js') ?>"></script>
        <!--[endif]-->
    </head>    
    <body>
    	<!-- Tandai bagian di bawah yield untuk main section-->
         
          <!-- Tandai bagian di bawah yield untuk main section-->
          @yield('main')
        

        <!-- Tandai bagian di bawah yield untuk footer section-->

        @yield('footer')

        <!--
        <script src="{{ asset('js/jquery_2_2_1.min.js') }}"></script>
        <script src="{{ asset('bootstrap_3_3_6/js/bootstrap.min.js') }}"></script>
        -->

        <script src="<?php echo asset('js/jquery_2_2_1.min.js')?>"></script>
        <script src="<?php echo asset('bootstrap_3_3_6/js/bootstrap.min.js')?>"></script>
        <script src="<?php echo asset('js/jquery.prettyPhoto.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset('js/jquery.nicescroll.min.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset('js/superfish.min.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset('js/jquery.flexslider-min.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset('js/owl.carousel.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset('js/animate.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset('js/jquery.BlackAndWhite.js') ?>"></script>
		<script src="<?php echo asset('js/myscript.js') ?>" type="text/javascript"></script>
        <!--<script src="{{ asset('js/laravelapp.js') }}"></script>-->
    </body>
</html>
