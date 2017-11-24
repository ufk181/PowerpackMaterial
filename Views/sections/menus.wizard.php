 


<div class="main-sidebar-nav default-navigation">

            <div class="nano">
                <div class="nano-content sidebar-nav">
   
                              
                    <ul class="metisMenu nav flex-column" id="menu">
						<div class="card-block border-bottom text-center nav-profile">
                            <img alt="profile" class="rounded-circle margin-b-10 circle-border " src="{{photo($user->photo)}}" width="80">
                            <p class="lead margin-b-0 toggle-none">Hoşgeldiniz <br>{{$user->name}}</p>
                          
							<ul class="nav nav-pills toggle-none">
								<li class="nav-item">
									<a class="nav-link" href="#"><i class="icon-bell"></i></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{$site . 'profile'}}"> <i class="icon-user"></i></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#"> <i class="icon-settings"></i></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{$site . 'logout'}}"><i class="icon-logout"></i></a>
								</li>
							</ul>
                        </div>
						
                        <li class="nav-heading"><span>Menuler</span></li>
                         {[$menus = Menus::where('active', '1', 'and')->where('submenu_id', '0')->orderBy('order_id')->result();]}
						 @foreach( $menus as $menu ):
            {[$submenu = Menus::where('active', '1', 'and')->where('submenu_id', $menu->id)->orderBy('order_id')->result();]}
           	<li class="nav-item">
                @if( empty($submenu) ):
				 

							 <a href="{{$site . $menu->url}}" class="nav-link"><i class="fa {{$menu->icon}}"></i> <span class="toggle-none">{{$dict->{$menu->name} ?? $menu->name }}</span></a>

						</li>						
                        				
                        @else:
				 				
						<li class="nav-item">
							 <a  href="javascript: void(0);" class="nav-link "><i class="fa {{$menu->icon}}"></i> <span>{{$dict->{$menu->name} ?? $menu->name }} <span class="fa arrow"></span></span></a> 
                           	 @foreach( $submenu as $sub ):
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="true">
                            
                           <li class="nav-item"><a  href="{{$site . $sub->url}}" class="nav-link">{{$dict->{$sub->name} ?? $sub->name }}</a></li>    

           
      
								 
                            </ul>
                              
  @endforeach:
                        </li>

                         @endif:
                          @endforeach:
				 				  <li class="nav-item"><a href="{{$site . 'menus'}}" class="nav-link {{active('menus/main')}}"><i class="fa fa-list"></i> <span>{{$dict->menus}}</span></a></li>
                                
						 
				 
                     
                </div>
            </div>
        </div>
        </div>


                   
    