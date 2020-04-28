       
    <tr>
                                            <td colspan="8"> <center><strong>{{$record_count}} records</strong> found</center></td>
                                        </tr>
   @foreach($covid_questions as $question)
        
                                @if(($question->inRecycle==0))       
                                 <tr>
                                             <td> <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="ids[]"   class="selectbox" value="{{$question->id}}" >
                                                        </label>
                                                    </div> </td>
                                            <td>{{$question->id}}</td>
                                            <td>{{$question->question_si}}</td>
                                            <td>{{$question->question_en}}</td>
                                            <td>{{$question->question_ta}}</td>
                                            <td class="td-actions text-left">
                                               
                                                <a href="{{route('covid19questions.show',$question->id)}}" type="button"><i class="material-icons btn-success">person</i></a>
                                                  <a href="{{action('QuestionController@edit',$question->id)}}" type="button"><i class="material-icons btn-primary">create</i></a>
                                                 <a href="{{route('covid19questions.recycle',$question->id)}}" onclick="return confirm('Are you sure you want to Delete?')" type="button"><i class="material-icons btn-danger">delete</i></a>
                                               
                                          

                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach

                                        <tr>
                                            <td colspan="8" align="center">
                                               {{$covid_questions->links()}}
                                            </td>
                                        </tr>