<form id="edit">
     <div class="form-group">
        Ad Soyad
        @@Form::class('form-control')->placeholder('Adsosyad')->required()->text('name', $user->name):
    </div>

    <div class="form-group">
        Telefon No
        @@Form::class('form-control')->placeholder('Telefon No')->text('mobile', $user->mobile):
    </div>
    
    <div class="form-group">
        Website
        @@Form::class('form-control')->placeholder('Website')->text('website', $user->website):
    </div>

    <div class="form-group">
        Hakkında
        @@Form::class('form-control')->placeholder('Hakkında')->textarea('about', $user->about):
    </div>
    
    @if( CURRENT_CFURI !== 'users/edit' ):
        @@Form::hidden('ajaxEdit', 1):
    @else:
        @@Form::hidden('id', URI::get('edit')):
        @@Form::onclick('ajaxEdit()')->class('btn btn-success btn-icon')->button('edit', 'Kaydet'):
    @endif:
</form>