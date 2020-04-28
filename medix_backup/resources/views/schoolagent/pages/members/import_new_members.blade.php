 @extends('schoolagent.layouts.main')
@section('title')
  Home-Import New  Members 
@endsection
@section('content')
<?php $nav = 'member'; ?>
            <div class="container-fluid" style="padding-bottom:0px;">
                                     <div class="row">
<div class="col-md-12">
			<div class="card">

				<h4 align="center" style="font-weight:500;font-size:20px;">Import New members for Self Online registration</h4>
				@if($message = Session::get('danger'))
				  <div class="alert alert-danger">
				  	<strong>{{$message}}</strong>
				  </div>


				@endif
				@if($message = Session::get('success'))
				  <div class="alert alert-success">
				  	<strong>{{$message}}</strong>
				  </div>
				 @endif

				 <div class="row">


				<form id="myfrm" method="post" action="{{ route('schoolagentmember.import') }}" class="form-horizontal" enctype="multipart/form-data">
					{{csrf_field()}}
					<!--div class="card-header card-header-text" data-background-color="rose">
						<h4 class="card-title"></h4>
					</div-->
                     @if(count($errors) > 0 )
                                        @foreach($errors->all() as $error)
                                            <p class="alert alert-danger">{{$error}}</p>
                                        @endforeach
                    @endif
					<div class="card-content">
                       <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Upload List(*.xls,*.xlsx)</label>
                            <label class="btn btn-file ">

                                Browse<input type="file" name="excelfile" value="{{ old('excelfile') }}">

                            </label>
                        </div>
                        <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">View Sample</label>
                            <a href="{{url('/excelsample/samplemeberslistformat.xlsx')}}" class="btn btn-info " >Download Sample file</a>

                        </div>
						
					
						
                        <!--##########################################################-->
						
                        <a href="/departmentadmin/members" class="btn btn-danger pull-right" >Back</a>
						<a href="" onclick="" class="btn btn-primary pull-right" >Reset</a>
                        <input class="btn btn-success pull-right" type="submit" value="Import List">
                        <input class="btn btn-warning pull-right" type="submit" value="Import and New">
					</div>
				</form>
			</div>

           
			<div class="row">
				<div class="col-md-12">

					<div class="container-fluid">
                         <div class="row">
                                  
                                    <div class="col-md-2">
                                         <input type="text" name="search" id="search" class="form-control" placeholder="search" />
                                    </div>

                                </div>
				 <form action="/recycleAll"  method="post">
                                @csrf
                                @method('DELETE')
                                <button formaction="/members/deleteallimported" class="btn btn-danger" type="submit" >Delete All Selected </button>
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"  cellspacing="0" width="100%" style="width:100%" style="border: 1px solid black; ">
                                    <thead>
                                        <tr >
                                            <th scope="col">  <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="optionsCheckboxes"   class="selectall" >
                                                        </label>
                                                    </div>
                                               </th>
                                           
                                                <th scope="col" class="sorting" data-sorting_type="asc"
                                                data-column_name="nic">NIC <span id="nic_icon"></span></th>
                                                <th scope="col" class="sorting" data-sorting_type="asc"
                                                data-column_name="emp_id" >Union ID<span id="emp_icon"></span></th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @include('schoolagent.pages.members.imported_member_pagination_data')
                                     
                                      
                                    
                                    
                                    </tbody>

                                      <input type="hidden" name="hidden_page" id="hidden_page" value="1"/>

                                    <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="nic"/>
                                    <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc"/>
                                </table>
                            </form>
				
			</div>
			</div>
			</div>


			</div>
		</div>
	</div>
</div>
<script>
function myFunction() {
  document.getElementById("myfrm").reset();
}
</script>

 <script>
        $(document).ready(function(){
            function  fetch_data(page,sort_type,sort_by,query)
            {
                $.ajax({

                    url:"fetch_import_data?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&query="+query,
                    success:function(data)
                    {
                        $('tbody').html('');
                        $('tbody').html(data);
                       

                    }

                })
            }


          //filtering function

          $('.filtercheck').change(function(){
              
            
              

               var page = $('#hidden_page').val();
                
               

       s

                var column_name = $('#hidden_column_name').val();
                var sort_type =$('#hidden_sort_type').val();
                 var query =$('#search').val();
                fetch_data(page,sort_type,column_name,query);

          });


          //search function

          $(document).on('keyup','#search',function(){
              var query = $('#search').val();
              var column_name = $('#hidden_column_name').val();
               var sort_type =$('#hidden_sort_type').val();
                var page = $('#hidden_page').val();
                
                 
                fetch_data(page,sort_type,column_name,query);

          })



           //sorting function
            $(document).on('click','.sorting',function(){
                
                
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

                fetch_data(page,reverse_order,column_name,query);





            });


            //pagination function

            $(document).on('click','.pagination a',function(event){
                 
                  
                var column_name = $(this).data('column_name');
                event.preventDefault();

                var page = $(this).attr('href').split("page=")[1];

                $('#hidden_page').val(page);

                var column_name = $('#hidden_column_name').val();
                var sort_type =$('#hidden_sort_type').val();

                var query = $('#search').val();


                fetch_data(page,sort_type,column_name,query);




            });
        })
    </script>
		  @endsection