<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
 
@foreach( $styles ?? [] as $style ):
    <link rel="stylesheet" href="{{$style}}">
@endforeach:
 
<link rel="apple-touch-icon" sizes="76x76" href="{{THEMES_URL}}img/apple-icon.png">
<link rel="icon" type="image/png" sizes="96x96" href="{{THEMES_URL}}img/favicon.png">

 

        <!-- Common Plugins -->
        <link href="{{THEMES_URL}}panel/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
        <!-- DataTables -->
        <link href="{{THEMES_URL}}panel/lib/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        <link href="{{THEMES_URL}}panel/lib/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
		 <link href="{{THEMES_URL}}panel/lib/datatables/buttons.dataTables.css" rel="stylesheet" type="text/css">
		   <link href="{{THEMES_URL}}panel/lib/summernote/summernote.css" rel="stylesheet">
        <!-- Custom Css-->
        <link href="{{THEMES_URL}}panel/css/style.css" rel="stylesheet">
        <link href="{{THEMES_URL}}panel/css/invoice.css" rel="stylesheet">
		
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
  