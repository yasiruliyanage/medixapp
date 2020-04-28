


<div class="row">
     <!--######################## Select members by group form #######################-->
        
                                <div class="col-md-12">
           <div class="card">
                <div class="card-content">
                            <h4 align="center" style="font-weight:500;font-size:20px;" class="card-title">Members of Groups</h4>
                            
                            
                               <form method="post" action="{{route('message.groupsend') }}" class="form-horizontal">
                             
                           <div class="card-content">
                     {{csrf_field()}}
                       @if(count($errors) > 0 )
                                        @foreach($errors->all() as $error)
                                            <p class="alert alert-danger">{{$error}}</p>
                                        @endforeach
                                    @endif
                        <div class="row">
                            <label style="color: black;" class="col-sm-2 label-on-left">Message</label>

                            <div class="col-sm-10">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="textarea" name="message" class="form-control" value>
                                    <span class="help-block">Message.</span>
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-2 label-on-left">
                                <label class=" control-label form-group" ><p style="color:red" >Note: { } [ ] | \ ^ ~ are counted as two characters each (encoding standard). Please avoid using these unless it is unavoidable.</p></label>
                            </div>
                              <a href="/admin/home" class="btn btn-danger pull-right" >Cancel</a>
                        <input class="btn btn-success pull-right" type="submit" value="Send">
                        </div>
                        
                       </div>

                              

                            
                            <div class="table-responsive">
                             
                             
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"  cellspacing="0" width="100%" style="width:100%" style="border: 1px solid black; ">
                                    <thead>
                                        <tr >
											<th scope="col">No</th>
                                            <th scope="col">  <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="optionsCheckboxes"   class="selectall2" >
                                                        </label>
                                                    </div>
                                               </th>
                                          
                                             	
												<th scope="col">Union ID</th>
												<th scope="col">Emp ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Mobile</th>
                                             
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($groupmembers as $groupmember)
                                        <tr>
											<td></td>
                                             <td> <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="ids[]"   class="selectbox2" value="{{$groupmember->member_id}}" >
                                                        </label>
                                                    </div>
                                                     <input type="checkbox" name="groupids[]"   value="{{$groupmember->group_id}}" style="display: none;" checked>
                                                     </td>
                                            <td>{{$groupmember->member_id}}</td>
											<td></td>
										
                                            <td>{{$groupmember->member_name}}</td>
                                            <td>{{$groupmember->member_mobile}}</td>
                                        
                                        </tr>
                                        @endforeach
                                     
                                      
                                    
                                    
                                    </tbody>
                                </table>
                            </form>
                            </div>
                        </div>

           </div>
       </div>
   </div>
     <!--group messge formm-->
                <script type="text/javascript">
                    $('.selectall2').click(function(){
                        $('.selectbox2').prop('checked',$(this).prop('checked'));
                       // $('.selectall2').prop('checked',$(this).prop('checked'));

                    })

                    $('.selectbox2').change(function(){
                        var total = $('.selectbox2').length;
                        var number = $('.selectbox2:checked').length;
                        if(total == number ){
                            $('.selectall2').prop('checked',true);
                        }else{
                             $('.selectall2').prop('checked',false);
                        }
                    })



                </script>
                <script type="text/javascript">
    $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [[5, 25, 50, -1], [5, 25, 50, "All"]],
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