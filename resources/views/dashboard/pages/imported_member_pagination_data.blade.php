    <tr>
                                            <td colspan="8"> <center><strong>{{$record_count}} records</strong> found</center></td>
                                        </tr>

  @foreach($pendingmembers as $member)
       @if(($member->isregistered==0))
                                        <tr>
                                             <td> <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="ids[]"   class="selectbox" value="{{$member->nic}}" >
                                                        </label>
                                                    </div> </td>
                                           
                                            <td>{{$member->nic}}</td>
                                            <td><span style="display: none;"> {{ $status = $member->isregistered }}</span>
                                                @if($status == 1)
                                                    Registered
                                                @else
                                                    Not Registered
                                                @endif
                                            </td>
                                            <td class="td-actions text-left">
                                               
                                              
                                                 <a href="{{route('member.deleteimported',$member->nic)}}" onclick="return confirm('Are you sure you want to Delete?')" type="button"><i class="material-icons btn-danger">delete</i></a>
                                               
                                          

                                            </td>
                                        </tr>
        @endif
        @endforeach
  

                                        <tr>
                                            <td colspan="8" align="center">
                                               {{$pendingmembers->links()}}
                                            </td>
                                        </tr>