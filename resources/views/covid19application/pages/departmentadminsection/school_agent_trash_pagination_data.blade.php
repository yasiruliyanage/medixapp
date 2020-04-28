        <?php $division =Auth::user()->division ?>
    <tr>
                                            <td colspan="8"> <center><strong>{{$record_count}} records</strong> found</center></td>
                                        </tr>
   @foreach($agents as $member)
        
                                @if(($member->role_id==7)&&($member->inRecycle==1)&&($member->division==$division))       
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
                                            <td>{{$member->ps_number}}</td>
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
                                                 <a href="{{route('divisionschoolagent.restore',$member->id)}}" onclick="return confirm('Are you sure you want to Restore?')" type="button"><i class="material-icons btn-danger">restore</i></a>
                                                    <button type="submit" formaction="{{action('Divisionagent\SchoolAgentAdminController@destroy',$member->id)}}" onclick="return confirm('Are you sure you want to Delete?')" ><i class="material-icons  btn btn-danger ">delete</i> </button>
                                               
                                          

                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach

                                        <tr>
                                            <td colspan="8" align="center">
                                               {{$agents->links()}}
                                            </td>
                                        </tr>