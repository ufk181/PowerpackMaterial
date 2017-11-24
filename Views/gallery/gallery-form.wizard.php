@@Form::enctype('multipart')->open('uploadForm'):
    <div class="form-group">
        @@Form::class('form-control')->table('gallery_categories')->select('categoryId', ['id' => 'name', 0 => 'Kategori Seç']):
    </div>

             
<div class="row">
                  <div class="col-sm"><div class="form-group">
                      <label>Çoklu Resim Seç</label>
                       <div class="field" align="left">
    @@Form::class('fileinput-new')->id('files')->file('upload', true):
 </div>
 </div>

    @@Form::class('btn btn-info')->submit('uploadSubmit', $dict->uploadButton):
@@Form::close():
     
      
                 
                </div></div>

            </div>
 