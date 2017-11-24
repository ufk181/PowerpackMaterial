  <div class="row">
                <div class="col-md-3">
                    <div class="widget padding-0 white-bg">
                        <div class="bg-primary" style="height: 120px"></div>
                        <div class="thumb-over">
             
                @@Form::enctype('multipart')->id('upload')->open('upload'):
                @@Form::hidden('editPhoto', 1):
                <div style="position:absolute;"><input type="file" id="img1" name="img" style="border-radius:50%; margin-left:10px; cursor:pointer; width:120px; height:120px; opacity:0; display:block;" onchange="previewImageprofile(1);"></div>
                    <img id="uploadPreviewprofile1" src="{{photo($user->photo)}}" width="100" class="rounded-circle">
                  
                   
                  
             
                        </div>
                        <div class="padding-20 text-center">
                            <p class="lead font-500 margin-b-0">{{$user->name}}</p>
                            <p class="text-muted">Sistem Yöneticisi</p>
                             @@Form::close():

                <div class="text-center"><a href="#" data-toggle="modal" data-target="#modalID" class="btn btn-primary">Hesap Ayarları</a></div>
                            <p class="text-sm margin-b-0">{{$user->about}}</p>
                            <hr>

                               <div class="profile-info">
                    <h4 class="heading">Diğer Bilgiler</h4>
                    <ul class="list-unstyled list-justify">
                        <li>Doğum Tarihi <span>{{$user->birthdate}}</span></li>
                        <li>Telefon <span>{{$user->mobile}}</span></li>
                        <li>Email <span>{{$user->email}}</span></li>
                        <li>Website <span><a target="_blank" href="{{$user->website}}">{{$user->website}}</a></span></li>
                    </ul>
                </div>
                            
                        </div>
                    </div>
                    
                </div>
                <div class="col-9">
                     <div class="card">
                        <div class="card-heading card-default">
                            Sisteme Duyuru & Bildirim Yap
                        </div>
                        <div class="card-block">
    
                           <form method="post" class="well well-default">
                            <div class="input-icon margin-b-10">
                                <textarea rows="2" class="form-control" placeholder="Ne söylemek istersiniz?"></textarea>
                            </div>
                            <div class=" pull-right">
                                <a href="#" class="btn btn-primary">Gönder</a>
                            </div>
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-user"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-location-arrow"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class=" fa fa-camera"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-smile-o"></i></a>
                                </li>
                            </ul>
                        </form>
                        </div>
                    </div>
        
                    
                    <div class="tabs">

                        <ul class="nav nav-tabs">
                            <li class="nav-item" role="presentation"><a class="nav-link  active" href="#home" aria-controls="home" role="tab" data-toggle="tab">Giriş</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Hesap Aktiviteleri</a></li>
                       </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="widget white-bg">
                                    <ul class="comments-list list-unstyled clearfix">
                                        <li class="clearfix">
                                            <img src="assets/img/avtar-2.jpg" alt="" width="50" class="rounded-circle">
                                            <div class="content">
                                                <div class="comments-header">
                                                    <strong>{{$user->name}}</strong>
                                                    <small class="text-muted">30 Dakika Önce</small>
                                                </div>
                                                <p>Lorem ipsum industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
                                                <ul class="list-inline row">
                                                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-comments"></i> 94</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-thumbs-up"></i> 145</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-reply"></i> Öne çıkar</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                         
                                        
                                    </ul>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <div class="widget white-bg">
                                    <h5>Hesap aktiviteleriniz - En son yaptığınız işlemler</h5>
                                          @foreach( $activities as $activity ):
                        <li>
                            <i class="fa fa-comment activity-icon"></i>
                            <p>{{$activity->activity}} <span class="timestamp">{{$activity->date}}</span></p>
                        </li>
                        @endforeach:
                    </ul>
                    {{$pagination}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div> 