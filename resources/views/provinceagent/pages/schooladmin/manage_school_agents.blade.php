@extends('provinceagent.layouts.main')
@section('title')
  Home-Manage School Agents CTSU
@endsection
@section('content')
<?php $nav = 'school_admin'; ?>
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
                            <h4 class="card-title">School Agents</h4>
                              <form action="/recycleAllschoolagents"  method="post">
                                @csrf
                                @method('DELETE')
                                <button formaction="/recycleAllschoolagents" class="btn btn-danger" type="submit" >Delete All Selected </button>
                                <div class="row">
                                   
                                         <div class="col-md-2">
                                        <select class="form-control filtercheck" name="d_id" value="{{ old('d_id') }}" id="did">
                                        <option value="" disable="true" selected="true"  >Select District</option>
                                    @foreach($districts as $district)

                                        <option value="{{$district->id}}"  data-district_name="{{$district->id}}">{{$district->placename}}</option>
                                     @endforeach
                                    </select>
                                    </div>
                                    <div class="col-md-2">
                                          <select class="form-control filtercheck" name="z_id" value="{{ old('z_id') }}" id="zid">
                                        <option value="" disable="true" selected="true" >Select Zone</option>
                                    @foreach($zones as $zone)
                                        <option value="{{$zone->id}}"  data-zone_name="{{$zone->id}}">{{$zone->placename}}</option>
                                     @endforeach
                                    </select>
                                    </div>
                                    <div class="col-md-2">
                                         <select class="form-control filtercheck" name="div_id" value="{{ old('div_id') }}" id="divid">
                                        <option value="" disable="true" selected="true" >Select Division</option>
                                    @foreach($divisions as $division)
                                        <option value="{{$division->id}}" class="filtering" data-division_name="{{$division->id}}">{{$division->placename}}</option>
                                     @endforeach
                                    </select>
                                    </div>
                                    <div class="col-md-2">
                                      <select class="form-control filtercheck" name="s_id" value="{{ old('s_id') }}" id="sid">
                                        <option value="" disable="true"  selected="true"  >Select School</option>
                                    @foreach($schools as $school)
                                        <option value="{{$school->id}}"   data-school_name="{{$school->id}}">{{$school->placename}}</option>
                                     @endforeach
                                    </select>

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
                                            <th scope="col">No</th>
                                                <th scope="col">Photo</th>
                                                <th scope="col" class="sorting" data-sorting_type="asc"
                                                data-column_name="reg_id" 
                                                >Reg ID<span id="reg_id_icon"></span></th>
                                                <th scope="col">Paysheet Number</th>
                                                <th scope="col"
                                                class="sorting" data-sorting_type="asc"
                                                data-column_name="name"
                                                >First Name <span id="name_icon"></span> </th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Actions</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                     @include('provinceagent.pages.schooladmin.school_agent_pagination_data')
                                    
                                    </tbody>
                                    <input type="hidden" name="hidden_page" id="hidden_page" value="1"/>

                                    <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id"/>
                                     
                                    <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc"/>
                                     <input type="hidden" name="hidden_province_id" id="hidden_province_id" value=""/>
                                     <input type="hidden" name="hidden_district_id" id="hidden_district_id" value=""/>
                                      <input type="hidden" name="hidden_zone_id" id="hidden_zone_id" value=""/>
                                       <input type="hidden" name="hidden_division_id" id="hidden_division_id" value=""/>
                                        <input type="hidden" name="hidden_school_id" id="hidden_school_id" value=""/>
                                  


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
            function  fetch_data(page,sort_type,sort_by,district,zone,division,school,query)
            {
                $.ajax({

                    url:"schoolagents/fetch_data?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&district="+district+"&zone="+zone+"&division="+division+"&school="+school+"&query="+query,
                    success:function(data)
                    {
                        $('tbody').html('');
                        $('tbody').html(data);
                       

                    }

                })
            }


          //filtering function

          $('.filtercheck').change(function(){
              
             
              var district_id= $('#did').val();
               var zone_id= $('#zid').val();
               var division_id= $('#divid').val();
                var school_id=$('#sid').val();

              

               var page = $('#hidden_page').val();
                
               
                 $('#hidden_district_id').val(district_id);
                 $('#hidden_zone_id').val(zone_id);
                 $('#hidden_division_id').val(division_id);
                 $('#hidden_school_id').val(school_id);

     

                var column_name = $('#hidden_column_name').val();
                var sort_type =$('#hidden_sort_type').val();
                 var query =$('#search').val();
                fetch_data(page,sort_type,column_name,district_id,zone_id,division_id,school_id,query);

          });


          //search function

          $(document).on('keyup','#search',function(){
              var query = $('#search').val();
              var column_name = $('#hidden_column_name').val();
               var sort_type =$('#hidden_sort_type').val();
                var page = $('#hidden_page').val();
                
                  
              var district_id= $('#did').val();
               var zone_id= $('#zid').val();
               var division_id= $('#divid').val();
                var school_id=$('#sid').val();
                
                fetch_data(page,sort_type,column_name,district_id,zone_id,division_id,school_id,query);

          })



           //sorting function
            $(document).on('click','.sorting',function(){
                
                 
              var district_id= $('#did').val();
               var zone_id= $('#zid').val();
               var division_id= $('#divid').val();
                var school_id=$('#sid').val();
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

                fetch_data(page,reverse_order,column_name,district_id,zone_id,division_id,school_id,query);





            });


            //pagination function

            $(document).on('click','.pagination a',function(event){
                 
               
              var district_id= $('#did').val();
               var zone_id= $('#zid').val();
               var division_id= $('#divid').val();
                var school_id=$('#sid').val();
                var column_name = $(this).data('column_name');
                event.preventDefault();

                var page = $(this).attr('href').split("page=")[1];

                $('#hidden_page').val(page);

                var column_name = $('#hidden_column_name').val();
                var sort_type =$('#hidden_sort_type').val();

                var query = $('#search').val();


                fetch_data(page,sort_type,column_name,district_id,zone_id,division_id,school_id,query);




            });
        })
    </script>

            @endsection
        
