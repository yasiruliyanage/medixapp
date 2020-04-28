 @extends('user.layouts.main')
@section('title')
  Questionarie - Answer These Questions
@endsection

@section('content')
<style>
	.affix-top {
    /* Initial items */
}

.affix {
    top:5px;
    left:50%;
	right:0;
	width:40%;
	z-index:1;
    position:fixed;
}
</style>

        
        <div class="content">
                <div class="container-fluid">
                   
                         <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="rose">
                <i class="material-icons">business</i>
            </div>
    
            <div class="card-content">
                <h4 class="card-title">Answer this Questions </h4>
				<form method="POST" action="{{route('covid19meterquestionariesave')}}" class="form-horizontal" enctype="multipart/form-data" >
                         {{csrf_field()}}
			    <div class="row">
					<div class="col-md-12">
						
						<div class="card  sticky-top " data-spy="affix" data-offset-top="200"   style ="padding-top: 20px;
  padding-right: 30px;
  padding-bottom: 20px;
  padding-left: 20px;">
                         
  <div class="card-body">
	  <div class="row">
		  <div class="col-md-5">
			   <input type="hidden"  id="myValues"   value="0" class="myValues"/>
		  </div>
		  <div class="col-md-7">
			   <center><p style="font-size:30px; color:#9399ff; font-family: 'Poppins', sans-serif; font-weight:700;padding-top:15px;margin-right:50px">Score</p></center>
	  <center><p style="font-size:40px; color:#fe346e; font-family: 'Poppins', sans-serif; font-weight:700;padding-top:20px;margin-right:50px;"> <span id="scoreoutof"  ></span>  <span style="font-size:30px; color:#eb4559; font-family: 'Poppins', sans-serif;font-weight:600;"  > / {{$allquestionmarkstotal}}</span></p></center>
	  <div id="decession"   style="font-size:20px; color:#9399ff; font-family: 'Poppins', sans-serif; font-weight:700;padding-top:20px;margin-right:50px;line-height: 1.0;"  >
		  Complete Questionary to get decession
	  </div>
	  <div id="decessionanimation"  style="font-size:50px; color:#9399ff; font-family: 'Poppins', sans-serif; font-weight:700;padding-top:20px;margin-right:50px">
		  <img src="{{URL::asset('covidmeter/images/quiz-01.gif')}}" style="width:100px;height:100px" />
	  </div>
		  </div>
		
	  </div>
	 
	 
	  
						 <input type="hidden"  id="totalmarks"  value="{{$allquestionmarkstotal}}" class="totalmarks"/>
	                    <input type="hidden"  id="pid"  value="{{$patientnewid}}" name="pid" class="pid"/>
						 <input type="hidden"  id="scoredmarks" name="scoredmarks"  value="0" class="scoredmarks"/>
						  <input type="hidden"  id="percentage" name="percentage"  value="0" class="percentage"/>
	                       <input type="hidden"  id="state" name="state"  value="normal" class="state"/>
	  
						 
						   <input type="hidden"  id="decfactor1" name="decfactor1"  value="{{$percentage1}}" class="decfactor1"/>
						   <input type="hidden"  id="decfactor2" name="decfactor2"  value="{{$percentage2}}" class="decfactor2"/>
						  <input type="hidden"  id="decfactor3" name="decfactor3"  value="{{$percentage3}}" class="decfactor3"/>
						 <input type="hidden"  id="decfactor4" name="decfactor4"  value="{{$percentage2}}" class="decfactor4"/>
							  </div>
						 </div>
					</div>
					</div>
                <div class="row">
					<div class="col-md-12">
						   @foreach($covid_questions as $question)
                            
                           
                                                  
                            <div class="card card-nav-tabs">
 
  <div class="card-body">
    <h4 class="card-title">Question {{ $loop->iteration }} </h4>
    <p class="card-text">{{$question->question_si}}</p>
     <p class="card-text">{{$question->question_en}}</p>
      <p class="card-text">{{$question->question_ta}}</p>
       <div class="checkbox" style="float:right;margin-top: -100px;" >
                                     <label>                              
                    <input type="checkbox" name="ids[]"   class="selectbox  checkbox group_ctrl" value="{{$question->marks}}"  data-group="group_{{$question->id}}">
                   <input type="hidden" name="newids[]"   class="group_{{$question->id}}"  value="{{$question->id}}">
                     </label>
                                                    </div>
   
  </div>
</div>
 
                            @endforeach
					</div>
					
				</div>
                      <!--a href="{{route('workplace.add')}}" type="button" class="btn btn-primary pull-right">Create New Work Place</a-->
                     
						  
                       
						 
						 
                        <input type="hidden" value="{{$patient_no}}" name="patient_no">
                        
                          
                       
                      
  <input class="btn btn-success pull-right btn-lg" type="submit" value="Finish">
                </form>
                
            </div>
        </div>
        
    </div>
    
    
    
    
    </div>
    
                </div>
            </div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            responsive: true,
            language: {
            search: "_INPUT_",
            searchPlaceholder: "Search records",
            }

        });


        var table = $('#datatables').DataTable();

        // Edit record
        table.on( 'click', '.edit', function () {
            $tr = $(this).closest('tr');

            var data = table.row($tr).data();
            alert( 'You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.' );
        } );

        // Delete a record
        table.on( 'click', '.remove', function (e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        } );

        //Like record
        table.on( 'click', '.like', function () {
            alert('You clicked on Like button');
        });

        $('.card .material-datatables label').addClass('form-group');
    });

    </script>
<script type="text/javascript">
            
          var table = document.getElementsByTagName('table')[0],
        rows = table.getElementsByTagName('tr'),
        text = 'textContent' in document ? 'textContent' : 'innerText';
      console.log(text);
        for (var i = 1, len = rows.length; i < len; i++){
            rows[i].children[0][text] = i + rows[i].children[0][text];
        }
        </script>
@endsection
