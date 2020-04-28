@extends('staff.district_agents.layouts.main')
  @section('title')
  Manage Division Agent CTSU
  @endsection
  @section('content')
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header card-header-icon" data-background-color="rose">
                      <i class="material-icons">assignment</i>
                  </div>
                  <div class="card-content">
                      <h4 class="card-title">Division Agents</h4>

                      <form action="" method="post">
                          <button formaction="" class="btn btn-danger" type="submit">Delete All Selected </button>
                          <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%" style="border: 1px solid black; ">
                              <thead>
                                  <tr>
                                      <th scope="col">No</th>
                                      <th scope="col">
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" name="optionsCheckboxes" class="selectall">
                                              </label>
                                          </div>
                                      </th>

                                      <th scope="col">Photo</th>
                                      <th scope="col">Registration ID</th>
                                      <th scope="col">First Name</th>
                                      <th scope="col">Division</th>
                                      <th scope="col">Status</th>
                                      <th scope="col">Actions</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td></td>
                                      <td>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" name="" class="selectbox" value="">
                                              </label>
                                          </div>
                                      </td>

                                      <td>
                                          <img class="memphoto" style="width:30px;height:30px;" src="" alt="" border=3></img>
                                      </td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td class="td-actions text-left">
                                          <a href="view_div_a_disa" type="button"><i class="material-icons btn-success">person</i></a>
                                          <a href="edit_div_a_disa" type="button"><i class="material-icons btn-primary">create</i></a>
                                          <a href="" onclick="return confirm('Are you sure you want to Delete?')" type="button"><i class="material-icons btn-danger">delete</i></a>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </form>

                  </div>

              </div>
          </div>
      </div>
  </div>




  @endsection
