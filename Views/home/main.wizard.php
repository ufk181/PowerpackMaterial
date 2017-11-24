<!-- OVERVIEW -->
<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">{{$dict->dashboard}}</h3>
        <p class="panel-subtitle">{{$dict->date}}: {{$current}}</p>
    </div>
    
 
            
            <div class="row">
                    <div class="col">
                    <div class="widget bg-light padding-0">
                        <div class="row row-table">
                            <div class="col-xs-4 text-center padding-15 bg-success">
                                <em class="icon-people fa-3x"></em>
                            </div>
                            <div class="col-xs-8 padding-15 text-right">
                                <h2 class="mv-0">{{$userCount}}</h2>
                                <div class="margin-b-0 text-muted">{{$dict->users}}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="widget bg-light padding-0">
                        <div class="row row-table">
                            <div class="col-xs-4 text-center padding-15 bg-primary">
                                <em class="icon-bag fa-3x"></em>
                            </div>
                            <div class="col-xs-8 padding-15 text-right">
                                <h2 class="mv-0">4758</h2>
                                <div class="margin-b-0 text-muted">Sales</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="widget bg-light padding-0">
                        <div class="row row-table">
                            <div class="col-xs-4 text-center padding-15 bg-teal">
                                <em class="icon-basket fa-3x"></em>
                            </div>
                            <div class="col-xs-8 padding-15 text-right">
                                <h2 class="mv-0">785</h2>
                                <div class="margin-b-0 text-muted">Orders</div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col">
                    <div class="widget bg-light padding-0">
                        <div class="row row-table">
                            <div class="col-xs-4 text-center padding-15 bg-indigo">
                                <em class="icon-pie-chart fa-3x"></em>
                            </div>
                            <div class="col-xs-8 padding-15 text-right">
                                <h2 class="mv-0">2558 $</h2>
                                <div class="margin-b-0 text-muted">Profit</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
              
            
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-heading card-default">
                            Son Kullanıcı Aktivitesi
                            <p class="text-muted">Bu bölümde kullanıcıların en son yaptığı işlem gösterilmektedir.</p>
                        </div>
                        
            
          
                        <div class="card-block">
                            <div class="scrollDiv">
                                   @foreach( $activities as $activity ):
                                <ul class="chat-list list-unstyled">
                                  
                                    <li class="clearfix chat-element media">
                                        <a href='javascript: void(0);' class="pull-left">
                                            <img src="{{photo($activity->photo)}}" alt="" class="rounded-circle">
                                        </a>
                                        <div class="media-body ">
                                            <div class="speech-box">
                                               <!--  <small class="pull-right text-primary"></small> -->
                                                <strong>{{$activity->name}}</strong>
                                                <p class="margin-b-0">
                                                   {{$activity->activity}} 
                                                </p>
                                                <small class="text-info">{{$activity->date}}</small>
                                            </div>
                                        </div>
                                    </li>

                                      @endforeach:
                                       {{$pagination}}
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer">
                          
                        </div>
                    </div>
                </div>
                    <div class="col-md-6">
                    <div class="card">
                        <div class="card-heading card-default">
                                <div class="col-xs-6">
                                    İş Takibi - Yapılacak İşlemler
                                </div>
                                <div class="col-xs-6">
                                    <div class="card-search">
                                        <form action="#">                                      
                                            <input type="text" class="form-control" placeholder="Search something..." name="s">                                          
                                            <span class="fa fa-search"></span>                                                                               
                                        </form>
                                    </div>
                                </div>
                                <p class="text-muted">Bu listede yapılacak olan işlemleri not edebilirsiniz</p>
                        </div>
                        <div class="card-block">
                            <div class="scrollDiv">
                                <ul class="todo-list">
                                  <li>
                                       <div class="checkbox checkbox-primary margin-r-5">
                                            <input id="checkbox1" type="checkbox">
                                            <label for="checkbox1"> Lorem Ipsum is simply dummy text of the</label>
                                            <small class="label label-danger"><i class="fa fa-clock-o"></i> 3 gün sonra</small>
                                        </div>
                                    </li>
                                    <li>
                                       <div class="checkbox checkbox-primary margin-r-5">
                                            <input id="checkbox2" type="checkbox" checked="">
                                            <label for="checkbox2"> Lorem Ipsum is simply dummy text of the</label>
                                            <small class="label label-info"><i class="fa fa-clock-o"></i> 3 dikika önce</small>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Yapılacak işlem...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary">
                                        Görev Ekle</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
           </div >      

       <!-- Flot -->
        <script src="{[ echo baseUrl(); ]}/assets/lib/flot/jquery.flot.js"></script>
        <script src="{[ echo baseUrl(); ]}/assets/lib/flot/jquery.flot.tooltip.min.js"></script>
        <script src="{[ echo baseUrl(); ]}/assets/lib/flot/jquery.flot.resize.js"></script>
        
        <!-- Sparkline-->
        <script src="{[ echo baseUrl(); ]}/assets/lib/sparkline/jquery.sparkline.min.js"></script>
        <script>
                    
            $('#sparkline1').sparkline([4, 5, 0, 10, 9, 12, 4, 9, 4, 5, 3, 10, 9, 12, 10, 9, 12, 4, 9, 4, 5, 0, 10, 9, 12, 4, 9, 4, 5, 3, 10, 9, 12, 10, 9, 12, 4, 9, 12, 10, 9, 12, 4, 9 ], 
            {
                type: 'bar',
                width: '100%',
                height: '80',
                barWidth: '2',
                resize: true,
                barSpacing: '6',
                barColor: 'rgba(255, 255, 255, 0.3)'
            });
            
            $("#sparkline2").sparkline([34, 43, 43, 35, 44, 32, 15, 22, 46, 33, 86, 54, 73, 53, 12, 53, 23, 65, 23, 63, 53, 42, 34, 56, 76, 15, 54, 23, 44], {
                type: 'line',
                width: '100%',
                height: '80',
                lineColor: '#4150c4',
                fillColor: '#4150c4',
                minSpotColor:'#4150c4',
                maxSpotColor: '#4150c4',
                highlightLineColor: 'rgba(0, 0, 0, 0.2)',
                highlightSpotColor: '#4150c4'
            });
            
            $("#sparkline3").sparkline([34, 43, 43, 35, 44, 32, 15, 22, 46, 33, 86, 54, 73, 53, 12, 53, 23, 65, 23, 63, 53, 42, 34, 56, 76, 15, 54, 23, 44], {
                type: 'line',
                width: '100%',
                height: '80',
                lineColor: '#fff',
                fillColor: '#f4516c',
                maxSpotColor: '#f4516c',
                highlightLineColor: 'rgba(0, 0, 0, 0.2)',
                highlightSpotColor: '#26c6da'
            });
            
            $('#sparkline4').sparkline([ 4, 5, 2, 10, 9, 12, 4, 9], {
                type: 'bar',
                width: '100%',
                height: '70',
                barWidth: '8',
                resize: true,
                barSpacing: '5',
                barColor: '#5867dd'
            });
            
            $('#sparkline5').sparkline([ 4, 5, 2, 10, 9, 12, 4, 9], {
                type: 'bar',
                width: '100%',
                height: '70',
                barWidth: '8',
                resize: true,
                barSpacing: '5',
                barColor: '#66BB6A'
            });
            
            $('#sparkline6').sparkline([ 4, 5, 2, 10, 9, 12, 4, 9], {
                type: 'bar',
                width: '100%',
                height: '70',
                barWidth: '8',
                resize: true,
                barSpacing: '5',
                barColor: '#f8c200'
            });
            
            $('#sparkline7').sparkline([ 4, 5, 2, 10, 9, 12, 4, 9], {
                type: 'bar',
                width: '100%',
                height: '70',
                barWidth: '8',
                resize: true,
                barSpacing: '5',
                barColor: '#EF5350'
            });
        
        </script>