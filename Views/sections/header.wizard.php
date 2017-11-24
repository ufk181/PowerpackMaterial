<div class="hide" id="loading"></div>
 

            <!-- ============================================================== -->
            <!--                        Topbar Start                            -->
            <!-- ============================================================== -->
            <div class="top-bar primary-top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                     
                        <div class="left-nav-toggle" >
                            <a  href="#" class="nav-collapse"><i class="fa fa-bars"></i></a>
                        </div>
                        <div class="left-nav-collapsed" >
                            <a  href="#" class="nav-collapsed"><i class="fa fa-bars"></i></a>
                        </div>
                        <div class="search-form hidden-xs">
                             
                                 <input type="text" onkeydown="ajaxSearch(this, event)" class="form-control" placeholder="{{$dict->search}} ..."><button class="btn-search" type="button"><i class="fa fa-search"></i></button>
                          
                        </div>
                    </div>
                    <div class="col">
                        <ul class="list-inline top-right-nav">
                            <li class="dropdown icon-dropdown d-none-m">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-envelope"></i> <span class="badge badge-warning">1</span></a>
                                <ul class="dropdown-menu top-dropdown lg-dropdown notification-dropdown">
                                    <li>
                                        <div class="dropdown-header">
                                            <a class="pull-right text-muted" href="#"><small>Tümünü Göster</small></a> Mesajlar
                                        </div>
                                        
                                        <div class="scrollDiv">
                                            <div class="notification-list">
                                                <a class="clearfix" href="javascript:%20void(0);">
                                                    <span class="notification-icon">
                                                        <img alt="" class="rounded-circle" src="assets/img/avtar-2.jpg" width="50">
                                                    </span> 
                                                    <span class="notification-title">
                                                    Sahibinden İlan Başvuru
                                                    <label class="label label-warning pull-right">Sahibinden</label>
                                                    </span> 
                                                    <span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span> 
                                                    <span class="notification-time">15 Dk önce</span>
                                                </a>
                                                
                                                 
                                                
                                         
                                                
                                         
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown icon-dropdown d-none-m">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-bell"></i> <span class="badge badge-danger">1</span></a>
                                <ul class="dropdown-menu top-dropdown lg-dropdown notification-dropdown">
                                    <li>
                                        <div class="dropdown-header">
                                            <a class="pull-right text-muted" href="#"><small>Tümünü Göster</small></a> Bildirim
                                        </div>
                                        <div class="scrollDiv">
                                            <div class="notification-list">
                                             <a class="clearfix" href="javascript:%20void(0);">
                                                    <span class="notification-icon">
                                                        <i class=" icon-graph text-danger"></i>
                                                    </span>
                                                    <span class="notification-title">Bildirim</span>
                                                    <span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>
                                                    <span class="notification-time">15 Dk önce</span>
                                                </a>
                                                
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
            
                              <li class="dropdown icon-dropdown d-none-m">
                               
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{flag($l = Lang::get())}}" alt="{{$l}}"> <span>{{Lang::get()}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>

                                <ul class="dropdown-menu top-dropdown lg-dropdown notification-dropdown">
                                       
                            @foreach( $languages as $lang ):

                                @if( $lang !== $l ):
                                    <li>
                                        <a href="{{$site . 'home/setlang/' . $lang}}">
                                            <img src="{{flag($lang)}}" alt="{{$l}}"> <span>{{$lang}}</span>
                                        </a>
                                    </li>
                                @endif:

                            @endforeach:
                        </ul>
                               
                            </li>

                                <li class="dropdown d-none-m">
                                <a class="right-sidebar-toggle" href="javascript:%20void(0);"><i class="fa fa-align-right"></i></a>
                            </li>

                                    <li class="dropdown avtar-dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <img alt="" class="rounded-circle" src="{{photo($user->photo)}}" width="30"><span>{{$user->name}}</span> 
                                </a>
                                <ul class="dropdown-menu top-dropdown">
                                     
                                   
                                    <li><a href="{{$site . 'profile'}}" class="dropdown-item"><i class="icon-user"></i> <span>{{$dict->myProfile}}</span></a></li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-settings"></i> Ayarlar</a>
                                    </li>
                                   
                                       <li><a href="{{$site . 'logout'}}" class="dropdown-item"><i class="icon-logout"></i> <span>{{$dict->logout}}</span></a></li>
                                </ul>
                            </li>

                            
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!--                        Topbar End                              -->
        <!-- ============================================================== -->
        
       
    <!-- END NAVBAR -->
    <!-- LEFT SIDEBAR -->
     
            @View::get('sections/chat'): 
            @View::get('sections/menus'):
    
    <!-- END LEFT SIDEBAR -->