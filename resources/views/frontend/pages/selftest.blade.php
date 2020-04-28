@extends('frontend.layouts.main')
@section('title')
Selftest- Medix
@endsection
@section('content')
     <!-- breadcrumb start-->
     <section class="breadcrumb_part breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>covid19selftest</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
<!--::regervation_part start::-->
    <section class="regervation_part section_padding">
        <div class="container">
            <div class="row align-items-center regervation_content">
                <div class="col-lg-7">
                    <div class="regervation_part_iner">
                        <form  method="POST" action="{{route('covid19meterfrontinterviewsave')}}" class="form-horizontal" enctype="multipart/form-data" >
							  {{csrf_field()}}
							 @if(count($errors) > 0 )
                                        @foreach($errors->all() as $error)
                                            <p class="alert alert-danger">{{$error}}</p>
                                        @endforeach
                                    @endif
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
                            <h2>COVID-19 SELF TEST</h2>
							<input type="hidden" class="form-control" name="patient_no" id="inputName"  value="MEDIX/CAP/{{$patientid}}" placeholder="Name">
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="name" id="inputName" value=""  placeholder="Name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control"  name="phone" id="inputTelephone" value="" placeholder="Phone">
                                </div>
                            </div>
							<div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="nic" id="inputTelephone"  value="" placeholder="NIC">
                                </div>
                            </div>
							
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <select class="form-control" name="hospital" id="Select">
                                        <option value="" disable="true" selected="true">Select Hospitals</option>
                                    @foreach($hospitals as $hospital)
                                        <option value="{{$hospital->id}}">{{$hospital->placename}}</option>
                                     @endforeach
                                    </select>
                                </div>
                            </div>
                           
                            <div class="regerv_btn col-lg-6">
                              
								<input class="btn btn_2 float-right" type="submit" value="Next">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="reservation_img">
                        <img src="img/reservation.png " alt="" class="reservation_img_iner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::regervation_part end::-->
                       


@endsection