
                  <div class="row">
                     <!--Team Box Start-->
					  @foreach($homestaff as $staff)
                     <div class="col-md-4 col-sm-6">
                        <div class="h3-team-box">
                           <div class="team-info">
                              <h5>{{$staff->name}}</h5>
							    <span style="display: none;">{{ $olddesig =$staff->position }} </span>
                                         @foreach($designations as $designation)
                                         <span style="display: none;">{{ $desig =$designation->id }} </span>
				                         <strong class="dep"><?php if($olddesig== $desig){ echo $designation->designation ; } else{} ?></strong>
                                      
                                        @endforeach
                            
                              <p>Telephone:{{$staff->phone}}<br>
                                  Email:{{$staff->email}}
                                  </p>
                              <ul>
                                 <li><strong>Connect:</strong></li>
                              <li><a href="{{$staff->twlink}}"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="{{$staff->fblink}}"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="{{$staff->linkedinlink}}"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="{{$staff->instalink}}"><i class="fab fa-instagram"></i></a></li>
                              </ul>
                           </div>
                           <img style="height:410px;width:340px;" src="{{URL::to('/')}}/staff/{{$staff->photo}}" alt=""> 
                        </div>
                     </div>
					  @endforeach
                     <!--Team Box End--> 
                     <!--Team Box Start-->
                 
                     <!--Team Box End--> 
                     <!--Team Box Start-->
                  
                     <!--Team Box End--> 
                    
                     <div class="site-pagination">
                        {{ $homestaff->links('vendor.pagination.custom') }}
                     </div>
                  </div>
            