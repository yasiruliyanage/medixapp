    <tr>
                                            <td colspan="8"> <center><strong>{{$record_count}} records</strong> found</center></td>
                                        </tr>
   @foreach( $covid_assessd_patients as $patient)

                                        <tr>
                                             <td> <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="ids[]"   class="selectbox" value="{{$patient->id}}" >
                                                        </label>
                                                    </div> </td>
                                            <td>{{$patient->id}}</td>
                                             <td>{{$patient->patient_no}}</td>
                                             <td>{{$patient->name}}</td>
                                            <td>
                                                <img class="memphoto" style="width:30px;height:30px;"  src="{{URL::to('/')}}covid19assesdpatients/profileimg/{{$patient->profile_img}}" alt="" border=3></img>
                                            </td>
                                            <td>{{$patient->patient_result_decission}}
                                            </td>
                                            <td class="td-actions text-left">
                                               
                                                <a href="{{route('hospitaladminpatientinfo',$patient->id)}}" type="button"><i class="material-icons btn-success">person</i></a>
<a href="{{URL::to('/')}}/covid19assesdpatients/reports/{{$patient->patientreport}}" type="button" traget="_blank"><i class="material-icons btn-success">description</i></a>                                               <a href="{{action('Divisionagent\CovidMeterController@editpatientinfo',$patient->id)}}" type="button"><i class="material-icons btn-primary">create</i></a>
                                                 
                                               
                                          

                                            </td>
                                        </tr>
                                        @endforeach

                                        <tr>
                                            <td colspan="8" align="center">
                                               {{$covid_assessd_patients->links()}}
                                            </td>
                                        </tr>