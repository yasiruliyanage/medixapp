    <tr>
                                            <td colspan="8"> <center><strong>{{$record_count}} records</strong> found</center></td>
                                        </tr>
    <?php $usersid=Auth::user()->school; ?>
   @foreach($members as $member)
     @if(($member->school==$usersid))

                                        <tr>
                                             <td> <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="ids[]"   class="selectbox" value="{{$member->id}}" >
                                                        </label>
                                                    </div> </td>
                                            <td>{{$member->id}}</td>
                                            <td>
                                                <img class="memphoto" style="width:30px;height:30px;"  src="{{URL::to('/')}}/members/profileimg/{{$member->profile_img}}" alt="" border=3></img>
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
                                               
                                                <a href="{{route('schoolagentmember.restore',$member->id)}}" onclick="return confirm('Are you sure you want to restore?')" type="button"><i class="material-icons btn-primary">restore_page</i></a>
                                              

                                                 <button type="submit" formaction="{{action('Schoolagent\MembershipController@destroy',$member->id)}}" onclick="return confirm('Are you sure you want to Delete?')" ><i class="material-icons  btn btn-danger ">delete</i> </button>
                                               
                                          

                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach

                                        <tr>
                                            <td colspan="8" align="center">
                                               {{$members->links()}}
                                            </td>
                                        </tr>