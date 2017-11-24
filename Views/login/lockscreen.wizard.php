 
<!DOCTYPE html>
<html lang="en">

 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Yönetim Paneli &raquo; {{$dict->lockScreen}}</title>
	@Import::view('sections/head'):

        <!-- Common Plugins -->
        <link href="{{THEMES_URL}}panel/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
        <!-- Custom Css -->
        <link href="{{THEMES_URL}}panel/css/style.css" rel="stylesheet">
		
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
            html,body{
                height: 100%;
            }
        </style>
    </head>
    <body class="bg-light">

        <div class="misc-wrapper">
            <div class="misc-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="misc-box">
                            	<img src="{{photo(Cookie::photo())}}" class="rounded-circle center-block margin-b-20" width="80" alt="">
							<h2 class="name" align="center">{{Cookie::name() ?: $dict->user}}</h2>
                                 
                                <h3 class="text-center"><small>Lütfen Email Adresinizi Giriniz.</small></h3>
                                
                                    <div class="form-group group-icon">
                                        <form method="post">
							<div class="input-group">
								<input type="email" name="email" class="form-control" placeholder="{{$dict->yourEmail}} ...">
								<span class="input-group-btn"><button name="lockscreen" type="submit" value="1" class="btn btn-primary"><i class="fa fa-arrow-right"></i></button></span>
							</div>
						</form>
						@status($status ?? NULL,  $info ?? 'danger'):
                                        <span class="icon-lock text-muted icon-input"></span>
                                    </div>
                                
                            </div>
                            <div class="text-center misc-footer">
                               <p>Copyright &copy; 2017 FerhatNAS-Cizre Web Tasarım</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Common Plugins -->
        <script src="{{THEMES_URL}}panel/lib/jquery/dist/jquery.min.js"></script>
		<script src="{{THEMES_URL}}panel/lib/bootstrap/js/popper.min.js"></script>
        <script src="{{THEMES_URL}}panel/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{THEMES_URL}}panel/lib/pace/pace.min.js"></script>
        <script src="{{THEMES_URL}}panel/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="{{THEMES_URL}}panel/lib/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="{{THEMES_URL}}panel/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="{{THEMES_URL}}panel/lib/metisMenu/metisMenu.min.js"></script>
        <script src="{{THEMES_URL}}panel/js/custom.js"></script>
		
    </body>

 </html>
