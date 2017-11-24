
@Import::view('sections/header'):

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <style>
          input[type="file"] {
  display: block;
}
.imageThumb {
  width: 200px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
      </style>

 <section class="main-content container">
      
            <div class="page-header">
 
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-heading card-default">
      @status($success ?? Redirect::select('success') ?: NULL,'success'):
        @status($error   ?? Redirect::select('error')   ?: NULL, 'danger'):
                        </div>
                        <div class="card-block">    @$view:  </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
       </div>
                    

            

@Import::view('sections/footer'):

@Import::view(CURRENT_CONTROLLER . '/script.php'):