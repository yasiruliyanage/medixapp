
                  <div class="row">
                     <!--Team Box Start-->
					  @foreach($homemembers as $member)
                     <div class="col-md-4 col-sm-6">
                        <div class="h3-team-box">
                           <div class="team-info">
                              <h5>{{$member->name}}&nbsp;{{$member->lname}}</h5>
							   
                            
                              <p>Employee ID:{{$member->employee_id}}<br>
                                  </p>
                              
                           </div>
                           <?php if(empty($member->profile_img)){ ?>
                            <img style="height:410px;width:340px;" src="{{URL::to('/')}}/members/profileimg/male-avatar.png" alt="">
                           <?php }else{?>
                           <img style="height:410px;width:340px;" src="{{URL::to('/')}}/members/profileimg/{{$member->profile_img}}" alt=""> 
                          <?php }?>
                        </div>
                     </div>
					  @endforeach
                     <!--Team Box End--> 
                     <!--Team Box Start-->
                 
                     <!--Team Box End--> 
                     <!--Team Box Start-->
                  
                     <!--Team Box End--> 
                    
                     <div class="site-pagination">
                        {{ $homemembers->links('vendor.pagination.custom') }}
                     </div>
                  </div>
            