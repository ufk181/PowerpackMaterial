

            <footer class="footer text-center">
             <p>Copyright &copy; 2017 FerhatNas - Cizre Web Tasarım & Otomasyon Sistemleri.</p>
            </footer>


        </section>
        <!-- ============================================================== -->
        <!--                        Content End                             -->
        <!-- ============================================================== -->


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
 
        

       <script type="text/javascript">
 $(function() {
   if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb remove\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Kaldır</span>" +
            "</span>").insertAfter("#files");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          }); 
         
        
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Tarayıcı Sürümünuz Eski")
  }
  
});
</script>

        <!-- Fotmatter Form Mask -->
        <script src="{{THEMES_URL}}panel/lib/formatter/jquery.formatter.min.js"></script>
        <script>
            $('#date-input').formatter({
                'pattern': '{{9999}}-{{99}}-{{99}}'
            });
            $('#date-input1').formatter({
                'pattern': '{{99}}/{{99}}/{{9999}}'
            });
            $('#time-demo1').formatter({
                'pattern': '{{99}}:{{99}}'
            });
            $('#date-time').formatter({
                'pattern': '{{9999}}/{{99}}/{{99}} {{99}}:{{99}}:{{99}}'
            });
            $('#time-demo2').formatter({
                'pattern': '{{99}}:{{99}}:{{99}}'
            });
            $('#characters-demo').formatter({
                'pattern': '{{aaaaaaaaaa}}'
            });
            $('#phone-demo').formatter({
                'pattern': '({{999}}) {{999}}-{{9999}}',
                'persistent': true
            });
            $('#phone-code').formatter({
                'pattern': '+90 {{999}}-{{999}}-{{9999}}',
                'persistent': true
            });
                $('#phone-code2').formatter({
            'pattern': '+90 {{999}}-{{999}}-{{9999}}',
                'persistent': true
            });
                    $('#phone-code3').formatter({
                'pattern': '+90 {{999}}-{{999}}-{{9999}}',
                'persistent': true
            });
                        $('#phone-code4').formatter({
                'pattern': '+90 {{999}}-{{999}}-{{9999}}',
                'persistent': true
            });
                 
            $('#currency-demo').formatter({
                'pattern': '$ {{999}}-{{999}}-{{999}}.{{99}}',
                'persistent': true
            });
            $('#credit-demo').formatter({
                'pattern': '{{9999}}-{{9999}}-{{9999}}-{{9999}}',
                'persistent': true
            });
            
            $('#purchase-code').formatter({
                'pattern': 'ISBN{{9999}}-{{9999}}-{{9999}}-{{9999}}',
                'persistent': true
            });
        </script>
        
            
        <!-- Datatables-->
        <script src="{{THEMES_URL}}panel/lib/datatables/jquery.dataTables.min.js"></script>
        <script src="{{THEMES_URL}}panel/lib/datatables/dataTables.responsive.min.js"></script>

        <script src="{{THEMES_URL}}panel/lib/datatables/dataTables.buttons.min.js"></script>
        <script src="{{THEMES_URL}}panel/lib/datatables/jszip.min.js"></script>
        <script src="{{THEMES_URL}}panel/lib/datatables/pdfmake.min.js"></script>
        <script src="{{THEMES_URL}}panel/lib/datatables/vfs_fonts.js"></script>
        <script src="{{THEMES_URL}}panel/lib/datatables/buttons.html5.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#datatable').dataTable();
                
                $('#datatable2').DataTable({
                     dom: 'Bfrtip',
                    buttons: [
                        'copyHtml5',
                        'excelHtml5',
                        'csvHtml5',
                        'pdfHtml5'
                    ]
                });
                
                 $('#datatable3').DataTable( {
                    "scrollY":        "400px",
                    "scrollCollapse": true,
                    "paging":         false
                } );
            });
            
        </script>
        
        <!-- Wysihtml5 and Summernote -->
        
        <script src="{{THEMES_URL}}panel/lib/wysihtml5/bootstrap-wysihtml5.js"></script>
        
        <script src="{{THEMES_URL}}panel/lib/summernote/summernote.js"></script>
        
        <script>
            $(document).ready(function () {
                //wysihtml5
                $('#textarea').wysihtml5({
                    height:'500px',
                });

                //summernote
                $(function () {

                    $('.summernote').summernote({
                        height:'400px',
                    });
                    
                    $('.summernote1').summernote({
                        height:'400px',
                        toolbar: [
                            ['headline', ['style']],
                            ['style', ['bold', 'italic', 'underline', 'superscript', 'subscript', 'strikethrough', 'clear']],
                            ['textsize', ['fontsize']],
                            ['alignment', ['ul', 'ol', 'paragraph', 'lineheight']]
                        ]
                    });

                    $('.summernote2').summernote({
                        airMode: true,
                    });

                });

            });
        </script>
   

@foreach( $scripts ?? [] as $script ):
    <script src="{{$script}}"></script>
@endforeach:

{{$modalbox ?? NULL}}

<script>
$(document).ajaxSend(function(e, jqXHR)
{
  $('#loading').removeClass('hide');
});

$(document).ajaxComplete(function(e, jqXHR)
{
  $('#loading').addClass('hide');
});

function ajaxSearch(object, event)
{
    if( event.which === 13 )
    {
        $.ajax
        ({
            type   : 'post',
            data   : {'searchData' : $(object).val()},
            success: function(data)
            {
                document.documentElement.innerHTML = data;
            }
        });
    }
}
</script>