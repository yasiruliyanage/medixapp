
                  <div class="row">
                     @foreach($news as $new)
                     <!--News Box Start-->
                     <div class="col-md-4 col-sm-6">
                        <div class="news-box">
                           <div class="new-thumb" style="height:250px;text-align: center;">
                              <span class="cat c1">{{$new->newstag}}</span>
							   
							   		<img style="width:auto; height:50vh;" src="{{URL::to('/')}}/news/mainimg/{{$new->main_image}}" alt=""> 
							<!---->   
                           </div>
                           <div class="new-txt">
                              <ul class="news-meta">
                                 <li>{{$new->created_at}}</li>
                                 
                              </ul>
							   <div style="height: 80px;">
                              <h6 style="font-size:16px;"><a href="{{route('newsfront.show',$new->id)}}">{{$new->header_title}}</a></h6>
							   </div>
                              <textarea style="background-color:white;" rows="8" class="form-control" disabled>
                    {{$new->long_desc}}
                </textarea>
                           </div>
                           <div class="news-box-f"><a href="{{route('newsfront.show',$new->id)}}"><i class="fas fa-arrow-right"></i></a> </div>
                        </div>
                     </div>
                     <!--News Box End--> 
                 @endforeach
					     <div class="site-pagination">
                        {{ $news->links('vendor.pagination.custom') }}
                     </div>
                  </div>
                
            