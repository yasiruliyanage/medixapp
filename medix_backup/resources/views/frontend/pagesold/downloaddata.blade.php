
                  <div class="row">
                      @foreach($downloads as $download)

                      <div class="isotope-item medicine">
                <article class="post type-post status-publish format-standard category-medicine tag-education tag-helpless">
                  <div class="entry-header">
                    <div class="post-thumb thumb lightgallery-lightbox">
                      <div class="box-hover-effect">
                        <div class="effect-wrapper">
                          <div class="thumb">
                            <iframe src="{{URL::to('/')}}/downloaditems/{{$download->fileattachment}}" style="width: 100%;height: 350px;border: none;overflow-x: hidden;"></iframe>
                          </div>
                          <div class="overlay-shade"></div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="entry-content">
                    <!-- title tag must be dynamic like conall -->
                    <h4 class="entry-title" style="height: 60px;overflow-y: scroll;"><a href="#" rel="bookmark">{{$download->name}}</a></h4>
                    <div class="post-excerpt" style="height: 90px;overflow-y: scroll;">
                      <div class="mascot-post-excerpt">{{$download->description}}</div>
                    </div>
                    <div class="float-left">
                      <ul class="entry-meta list-inline">
                        <li class="list-inline-item posted-date"><i class="fa fa-calendar-o"></i> <a  rel="bookmark"><time class="entry-date" datetime="2018-02-21T04:36:59+00:00"><?php $date = strtotime($download->created_at);
                    $newdate = date('d-F-Y',$date); 
                    echo $newdate;?></time></a></li>
                      </ul>
                    </div>
                  </div>
                </article>
                <div class="text-center">
                  <a href="{{URL::to('/')}}/downloaditems/{{$download->fileattachment}}" class="btn btn-success">Download</a>
                </div>
              </div>
                     
                   @endforeach
					  <div class="site-pagination">
						
                        {{$downloads->links('vendor.pagination.custom') }}
                     </div>
                  </div>
                 