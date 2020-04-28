 @extends('divisionagent.layouts.main')
@section('title')
  Questionarie - Answer These Questions
@endsection
@section('content')
<?php $nav = 'covid19meter'; ?>

        
        <div class="content">
                <div class="container-fluid">
                    <input type="hidden"  id="myValues"  value="0" class="myValues"/>
                         <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="rose">
                <i class="material-icons">business</i>
            </div>
    
            <div class="card-content">
                <h4 class="card-title">Answer this Questions </h4>
                
                      <!--a href="{{route('workplace.add')}}" type="button" class="btn btn-primary pull-right">Create New Work Place</a-->
                     <form method="POST" action="{{route('covid19meterquestionariesave')}}" class="form-horizontal" enctype="multipart/form-data" >
                         {{csrf_field()}}
<div class="progress">
 <span class="progress-bar progress-bar-striped bg-success" id="CheckProgress" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></span>
</div>
                        <input type="hidden" value="{{$patient_no}}" name="patient_no">
                        
                             @foreach($covid_questions as $question)
                            
                            <?php $a=1;?>     
                            <?php $a=$a+1; ?>                           
                            <div class="card card-nav-tabs">
 
  <div class="card-body">
    <h4 class="card-title">Question {{$a}}</h4>
    <p class="card-text">{{$question->question_si}}</p>
     <p class="card-text">{{$question->question_en}}</p>
      <p class="card-text">{{$question->question_ta}}</p>
       <div class="checkbox" style="float:right;margin-top: -100px;" >
                                     <label>                              
                    <input type="checkbox" name="ids[]"   class="selectbox  checkbox " value="{{$question->id}}" >

                     </label>
                                                    </div>
   
  </div>
</div>

                            @endforeach
                       
                      
  <input class="btn btn-success pull-right btn-lg" type="submit" value="Next">
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
