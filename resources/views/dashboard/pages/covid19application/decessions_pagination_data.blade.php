       
    <tr>
                                           
                                        </tr>
   @foreach($covid_decessions as $decession)
        
                                @if(($decession->inRecycle==0))       
                                 <tr>
                                             <td> <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="ids[]"   class="selectbox" value="{{$decession->id}}" >
                                                        </label>
                                                    </div> </td>
                                            <td>{{$decession->id}}</td>
                                            <td>{{$decession->decission_factor}}</td>
                                            <td>{{$decession->percentage}}</td>
                                          
                                            <td class="td-actions text-left">
                                               
                                              
                                                  <a href="{{action('QuestionController@decessionedit',$decession->id)}}" type="button"><i class="material-icons btn-primary">create</i></a>
                                                
                                               
                                          

                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach

                                        <tr>
                                            <td colspan="8" align="center">
                                               {{$covid_decessions->links()}}
                                            </td>
                                        </tr>