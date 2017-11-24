 
 
<!DOCTYPE html>
<html lang="en">

 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Yönetim Panel &raquo; {{$dict->login}}</title>
        @Import::view('sections/head'):

        <!-- Common Plugins -->
        <link href="{{THEMES_URL}}panel/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Css-->
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
                        <div class="col-4">
                            <div class="misc-header text-center">
                               Yönetim Paneli Girişi
                            </div>
                            <div class="misc-box">   
                                <form role="form" method="post">
                                    <div class="form-group">   
                                    <label for="signin-email" class="control-label sr-only">{{$dict->email}}</label>
                                        <div class="group-icon">
				<input type="email" name="email" class="form-control" id="signin-email" value="{{$config['default']['email']}}" placeholder="Email">                                   
                                         
                                         
                                        <span class="icon-user text-muted icon-input"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="signin-password" class="control-label sr-only">{{$dict->password}}</label>
                                        <div class="group-icon">
		<input type="password" name="password" class="form-control" id="signin-password" value="{{$config['default']['password']}}" placeholder="Şifreniz">
                                         
                                        <span class="icon-lock text-muted icon-input"></span>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                           <div class="checkbox checkbox-primary margin-r-5">
												<input id="checkbox2" type="checkbox" name="remember"  checked="">
												<label for="checkbox2">{{$dict->rememberMe}}</label>
												 
										<span></span>
											</div>
                                        </div>
                                        <div class="pull-right">
                          
                                            <input type="submit" name="login" class="btn btn-block btn-primary" value="{{$dict->loginButton}}">
                                        </div>
                                    </div>
                                    <hr>
                                     
                                   <a href="{{SITE_URL . 'lockscreen'}}" class="btn btn-block btn-success">{{$dict->forgotPassword}}?</a>
                                	 
                                </form>
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
        <script src="{{THEMES_URL}}panel/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{THEMES_URL}}panel/lib/pace/pace.min.js"></script>
        <script src="{{THEMES_URL}}panel/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="{{THEMES_URL}}panel/lib/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="{{THEMES_URL}}panel/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="{{THEMES_URL}}panel/lib/metisMenu/metisMenu.min.js"></script>
        <script src="{{THEMES_URL}}panel/js/custom.js"></script>
		
    </body>

 </html>
