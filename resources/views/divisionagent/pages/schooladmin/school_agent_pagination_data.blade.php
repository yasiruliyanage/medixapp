        <?php $division =Auth::user()->division ?>
    <tr>
                                            <td colspan="8"> <center><strong>{{$record_count}} records</strong> found</center></td>
                                        </tr>
   @foreach($agents as $member)
        
                                @if(($member->role_id==7)&&($member->inRecycle==0)&&($member->division==$division))       
                                 <tr>
                                             <td> <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="ids[]"   class="selectbox" value="{{$member->id}}" >
                                                        </label>
                                                    </div> </td>
                                            <td>{{$member->id}}</td>
                                            <td>
                                                <img class="memphoto" style="width:30px;height:30px;"  src="{{URL::to('/')}}/schoolagents/profileimg/{{$member->profile_img}}" alt="" border=3></img>
                                            </td>
                                            <td>{{$member->reg_id}}</td>
                                          
                                            <td>{{$member->name}}</td>

                                            <td><span style="display: none;"> {{ $status = $member->status }}</span>
                                                @if($status = 1)
                                                    Active
                                                @else
                                                    Inactive
                                                @endif
                                            </td>
                                            <td class="td-actions text-left">
                                               
                                                <a href="{{route('divisionschoolagent.show',$member->id)}}" type="button"><i class="material-icons btn-success">person</i></a>
                                                  <a href="{{action('Divisionagent\SchoolAgentAdminController@edit',$member->id)}}" type="button"><i class="material-icons btn-primary">create</i></a>
                                                 <a href="{{route('divisionschoolagent.recycle',$member->id)}}" onclick="return confirm('Are you sure you want to Delete?')" type="button"><i class="material-icons btn-danger">delete</i></a>
                                               
                                          

                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach

                                        <tr>
                                            <td colspan="8" align="center">
                                               {{$agents->links()}}
                                            </td>
                                        </tr>