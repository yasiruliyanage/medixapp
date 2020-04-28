@extends('schoolagent.layouts.main')
@section('title')
Manage Covid Assessed Patients Medix.lk
@endsection
@section('content')
<?php $nav = 'covid19meter'; ?>
            <div class="container-fluid">
                                     <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="rose">
                            <i class="material-icons">assignment</i>
                        </div>
                       @if($message = Session::get('success'))
                          <div class="alert alert-success">
                            {{$message}}

                        </div>
                        @endif
                        @if($message = Session::get('danger'))
                          <div class="alert alert-danger">
                            {{$message}}
                        </div>
                        @endif
                        
                         <div class="card-content">
                            <h4 class="card-title">Covid Assessd Patients</h4>
                           
                              <form action="/recycleAll"  method="post">
                                @csrf
                                @method('DELETE')
                                <button formaction="/recycleAll" class="btn btn-danger" type="submit" >Delete All Selected </button>
                                <div class="row">
									
									<input type="hidden" name="p_id" value="{{Auth::user()->province}}" id="pid" />
									<input type="hidden" name="d_id" value="{{Auth::user()->district}}" id="did" />
									<input type="hidden" name="z_id" value="{{Auth::user()->zone}}" id="zid" />
									<input type="hidden" name="div_id" value="{{Auth::user()->division}}" id="divid" />
									<input type="hidden" name="s_id" value="{{Auth::user()->school}}" id="sid" />
                                     <div class="col-md-1">
                                      <input  type="date" class="form-control filtercheck" name="interviewedtime" value="{{ old('interviewedtime') }}" id="interviewedtime" >
                                      
                                    </div>
                                    <div class="col-md-2">
                                         <input type="text" name="search" id="search" class="form-control" placeholder="search" />
                                    </div>

                                </div>
                                <div class="table-responsive">
                                <table id="member_table" class="table table-striped table-no-bordered table-hover"  cellspacing="0" width="100%" style="width:100%" style="border: 1px solid black; ">
                                    <thead>
                                       
                                        <tr >
                                            <th scope="col">  <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="optionsCheckboxes"   class="selectall" >
                                                        </label>
                                                    </div>
                                               </th>
                                            <th scope="col" >No</th>
                                                <th scope="col" scope="col" class="sorting" data-sorting_type="asc"
                                                data-column_name="patient_no">Patient No<span id="reg_id_icon"></span></th>
                                                <th scope="col"
                                                class="sorting" data-sorting_type="asc"
                                                data-column_name="name"
                                                >Name<span id="name_icon"></span></th>
                                                <th scope="col">Photo</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Actions</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                     @include('schoolagent.covid19meter.patient_pagination_data')
                                    
                                    </tbody>
                                    <input type="hidden" name="hidden_page" id="hidden_page" value="1"/>

                                    <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id"/>
                                    <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc"/>
                                     <input type="hidden" name="hidden_province_id" id="hidden_province_id" value=""/>
                                     <input type="hidden" name="hidden_district_id" id="hidden_district_id" value=""/>
                                      <input type="hidden" name="hidden_zone_id" id="hidden_zone_id" value=""/>
                                      <input type="hidden" name="hidden_division_id" id="hidden_division_id" value=""/>
                                      <input type="hidden" name="hidden_school_id" id="hidden_school_id" value=""/>
                                      <input type="hidden" name="hidden_interviewed_at" id="hidden_interviewed_at" value=""/>


                                </table>
                            </div>
                            </form>
                            
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

    <script>
        $(document).ready(function(){
            function  fetch_data(page,sort_type,sort_by,province,district,zone,division,school,sub_id,query)
            {
                $.ajax({

                    url:"fetch_data?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&province="+province+"&district="+district+"&zone="+zone+"&division="+division+"&school="+school+"&sub_id="+sub_id+"&query="+query,
                    success:function(data)
                    {
                        $('tbody').html('');
                        $('tbody').html(data);
                       

                    }

                })
            }


          //filtering function

          $('.filtercheck').change(function(){
              
              var province_id= $('#pid').val();
              var district_id= $('#did').val();
               var zone_id= $('#zid').val();
               var division_id= $('#divid').val();
                var school_id=$('#sid').val();
                 var sub_id=$('#interviewedtime').val();

                 console.log(sub_id);


              

               var page = $('#hidden_page').val();
                
                 $('#hidden_province_id').val(province_id);
                 $('#hidden_district_id').val(district_id);
                 $('#hidden_zone_id').val(zone_id);
                 $('#hidden_division_id').val(division_id);
                 $('#hidden_school_id').val(school_id);
                   $('#hidden_interviewed_at').val(sub_id);

         

                var column_name = $('#hidden_column_name').val();
                var sort_type =$('#hidden_sort_type').val();
                 var query =$('#search').val();
                fetch_data(page,sort_type,column_name,province_id,district_id,zone_id,division_id,school_id,sub_id,query);

          });


          //search function

          $(document).on('keyup','#search',function(){
              var query = $('#search').val();
              var column_name = $('#hidden_column_name').val();
               var sort_type =$('#hidden_sort_type').val();
                var page = $('#hidden_page').val();
                
                  var province_id= $('#pid').val();
              var district_id= $('#did').val();
               var zone_id= $('#zid').val();
               var division_id= $('#divid').val();
                var school_id=$('#sid').val();
                   var sub_id=$('#interviewedtime').val();

                   console.log(sub_id);
                
                fetch_data(page,sort_type,column_name,province_id,district_id,zone_id,division_id,school_id,sub_id,query);

          })



           //sorting function
            $(document).on('click','.sorting',function(){
                
                 var province_id= $('#pid').val();
              var district_id= $('#did').val();
               var zone_id= $('#zid').val();
               var division_id= $('#divid').val();
                var school_id=$('#sid').val();
                 var sub_id=$('#interviewedtime').val();
                var column_name = $(this).data('column_name');

                var order_type = $(this).data('sorting_type');

                var reverse_order = '';

                if(order_type=='asc')

                {
                  
                  $(this).data('sorting_type','desc');
                  
                  reverse_order ='desc';
                  //clear_icon();

                  $('#'+column_name+'_icon').html('&nbsp;<i class="fas fa-sort-down"></i>');


                }

                if(order_type == 'desc')

                {
                    $(this).data('sorting_type','asc');

                    reverse_order = 'asc';
                     //clear_icon();

                    $('#'+column_name+'_icon').html('&nbsp;<i class="fas fa-sort-up"></i>');
                }

                $('#hidden_column_name').val(column_name);
                $('#hidden_sort_type').val(reverse_order);

                var page = $('#hidden_page').val();
                var query =$('#search').val();

                fetch_data(page,reverse_order,column_name,province_id,district_id,zone_id,division_id,school_id,sub_id,query);





            });


            //pagination function

            $(document).on('click','.pagination a',function(event){
                 
              var province_id= $('#pid').val();
              var district_id= $('#did').val();
               var zone_id= $('#zid').val();
               var division_id= $('#divid').val();
                var school_id=$('#sid').val();
                var sub_id=$('#interviewedtime').val();
                var column_name = $(this).data('column_name');
                event.preventDefault();

                var page = $(this).attr('href').split("page=")[1];

                $('#hidden_page').val(page);

                var column_name = $('#hidden_column_name').val();
                var sort_type =$('#hidden_sort_type').val();

                var query = $('#search').val();


                fetch_data(page,sort_type,column_name,province_id,district_id,zone_id,division_id,school_id,sub_id,query);




            });
        })
    </script>

            @endsection
        
