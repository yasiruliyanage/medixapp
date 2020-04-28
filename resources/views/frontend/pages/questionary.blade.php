@extends('frontend.layouts.main')
@section('title')
Questionarie Step 02 - Medix
@endsection
@section('content')


<!-- breadcrumb start-->
     <section class="breadcrumb_part breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Questionarie</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
<!--::regervation_part start::-->
    <section class="regervation_part section_padding" style="margin-top:-5%">
        <div class="container">
            <div class="row align-items-center regervation_content">
                <div class="col-lg-12">
                    <div class="regervation_part_iner">
                        <div class="container">
                            <h2>Answer these questions</h2> 
							<form method="POST" action="{{route('covid19meterfrontquestionariesave')}}" class="form-horizontal" enctype="multipart/form-data" >
                         {{csrf_field()}}
								 
	  <center><p style="font-size:40px; color:#fe346e; font-family: 'Poppins', sans-serif; font-weight:700;padding-top:20px;margin-right:50px; display:none;"> <span id="scoreoutof"  ></span>  <span style="font-size:30px; color:#eb4559; font-family: 'Poppins', sans-serif;font-weight:600;display:none;"   > / {{$allquestionmarkstotal}}</span></p></center>
								
								  <input type="hidden"     value="0" class="myValues"/>		
                        <input type="hidden" value="{{$patient_no}}" name="patient_no">
								 <input type="hidden"  id="totalmarks"  value="{{$allquestionmarkstotal}}" class="totalmarks"/>
	                    <input type="hidden"  id="pid"  value="{{$patientnewid}}" name="pid" class="pid"/>
						 <input type="hidden"  id="scoredmarks" name="scoredmarks"  value="0" class="scoredmarks"/>
						  <input type="hidden"  id="percentage" name="percentage"  value="0" class="percentage"/>
	                       <input type="hidden"  id="state" name="state"  value="normal" class="state"/>
	  
						 
						   <input type="hidden"  id="decfactor1" name="decfactor1"  value="{{$percentage1}}" class="decfactor1"/>
						   <input type="hidden"  id="decfactor2" name="decfactor2"  value="{{$percentage2}}" class="decfactor2"/>
						  <input type="hidden"  id="decfactor3" name="decfactor3"  value="{{$percentage3}}" class="decfactor3"/>
						 <input type="hidden"  id="decfactor4" name="decfactor4"  value="{{$percentage2}}" class="decfactor4"/>
								
								
								
							<div class="row">
							 @foreach($covid_questions as $question)
                            <div class="card detail-card col-md-3"> 
                                <div class="form-check-inline card-check">
                                    <div class="form-group">
										<!-- <input type="checkbox" id="check-card" style="display: none;"> -->
                                       <input type="checkbox" style="display: none;" id="check-card-{{$question->id}}" name="ids[]"  class="group_ctrl card-check"  value="{{$question->marks}}"  data-group="group_{{$question->id}}" >
									<input type="hidden" name="newids[]"    class="group_{{$question->id}}"  value="{{$question->id}}">
                                        <label for="check-card" ></label>
                                      </div>
                                  </div> 
								
                              <div class="card-body">
                           
                                <ul class="ques-details">
                                    <li> <i class="ti-user"></i>Question {{ $loop->iteration }}  </li>
                                    <li> <i class="ti-user"></i>{{$question->question_si}}  </li>
									<li> <i class="ti-user"></i>{{$question->question_en}} </li>
                                    <li> <i class="ti-user"></i>{{$question->question_ta}} </li>
                                </ul>
                                
                                <br>
                              
                              </div>
								
                            </div>
								@endforeach
								<p>&nbsp;</p>
								
								</div>
								
								
				            <input class="btn_2 float-right" type="submit" value="Finish">
								
							</form>
                            
                          </div>
                          
                    </div>
                </div>               
            </div>
        </div>
    </section>
    <!--::regervation_part end::-->

@endsection