
              <div class="tm-sc tm-sc-blog tm-sc-blog-grid blog-style6-current-theme">
            <!-- Isotope Gallery Grid -->
            <div class="isotope-layout grid-3 clearfix">
                      @foreach($events as $event)


                       <div class="isotope-item medicine">
                <article class="post type-post status-publish format-standard category-medicine tag-education tag-helpless">
                  <div class="entry-header">
                    <div class="post-thumb thumb lightgallery-lightbox">
                      <div class="box-hover-effect">
                        <div class="effect-wrapper">
                          <div class="thumb" style="height:250px;width:300px;">
                            <img style="height:250px;width:auto;" src="{{URL::to('/')}}/event/mainimg/{{$event->main_image}}" alt=""/>
                          </div>
                          <div class="overlay-shade"></div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="entry-content">
                    <!-- title tag must be dynamic like conall -->
                    <h4 class="entry-title" style="height: 60px;overflow-y: scroll;"><a href="{{route('eventfront.show',$event->id)}}" rel="bookmark">{{$event->header_title}}</a></h4>
                    <div class="post-excerpt" style="height: 90px;overflow-y: scroll;">
                      <div class="mascot-post-excerpt"> {{$event->short_desc}}</div>
                    </div>
                    <div class="float-left">
                      <ul class="entry-meta list-inline">
                        <li class="list-inline-item posted-date"><i class="fa fa-calendar-o"></i> <a  rel="bookmark"><time class="entry-date" datetime="2018-02-21T04:36:59+00:00"><?php $date = strtotime($event->e_date);
                              $newdate = date('d-F-Y',$date); 
                              echo $newdate;?></time></a></li>
                      </ul>
                    </div>
                    <div class="float-right">
                      <div class="post-btn-readmore">
                        <a href="full_event" class="btn btn-plain-text btn-sm">View Details</a>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
                   
                   @endforeach
                </div>
             </div>

					 <div class="row">
                    <div class="container">
                      <div class="col-md-12">
                        <p>&nbsp;</p>
						
                        {{$events->links('vendor.pagination.custom') }}
                        <p>&nbsp;</p>
                     </div>
                  </div>
               </div>
                     
                 
                 