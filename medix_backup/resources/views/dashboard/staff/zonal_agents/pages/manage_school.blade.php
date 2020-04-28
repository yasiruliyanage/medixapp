 @extends('staff.zonal_agents.layouts.main')
 @section('title')
 Manage School CTSU
 @endsection
 @section('content')



 <div class="content">
     <div class="container-fluid">
         <div class="row">
             <div class="col-md-12">
                 <div class="card">
                     <div class="card-header card-header-icon" data-background-color="rose">
                         <i class="material-icons">assignment</i>
                     </div>

                     <div class="card-content">
                         <h4 class="card-title">School </h4>

                         <form action="" method="post">
                             <a href="add_school_za" type="button" class="btn btn-primary center-block">Add New School</a>
                             <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%" style="border: 1px solid black; ">
                                 <thead>
                                     <tr>
                                         <th>No</th>
                                         <th scope="col">
                                             <div class="checkbox">
                                                 <label>
                                                     <input type="checkbox" name="optionsCheckboxes" class="selectall">
                                                 </label>
                                             </div>
                                         </th>
                                         <th scope="col">ID</th>
                                         <th scope="col">Name</th>
                                         <th scope="col">Action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <td></td>
                                         <td>
                                             <div class="checkbox">
                                                 <label>
                                                     <input type="checkbox" name="ids[]" class="selectbox" value="">
                                                 </label>
                                             </div>
                                         </td>
                                         <td></td>
                                         <td></td>
                                         <td class="td-actions text-left">

                                             <a href="edit_school_za" type="button"><i class="material-icons btn-primary">create</i></a>

                                             <button type="submit" formaction="" onclick="return confirm('Are you sure you want to Delete?')"><i class="material-icons  btn btn-danger ">delete</i> </button>
                                         </td>
                                     </tr>

                                 </tbody>
                             </table>
                             <button formaction="" class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to Delete?')">Delete All Selected </button>
                         </form>

                     </div>
                 </div>

             </div>




         </div>

     </div>
 </div>


 @endsection
