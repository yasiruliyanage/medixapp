 @extends('pdfreports.layouts.reportusermain')
@section('title')
  Member Report
@endsection
@section('content')

<div class="row contacts">
                    <div class="col invoice-to">
                        <h1 class="invoice-id"> Member Information Report </h1>
                        <div class="date">Date of Report:<?php echo date('Y-m-d-h-i-s'); ?></div>
                    </div>
                  
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                   
                    <tbody>
                          @foreach($memberdata as $member)
                       
                        <tr>
                            <td class="no">Full Name</td>
                            <td class="unit">{{$member->name}}{{$member->lname}}</td>
                        </tr>

                         <tr>
                            <td class="no">Address</td>
                            <td class="unit">{{$member->address}}</td>
                        </tr>

                         <tr>
                            <td class="no">Email</td>
                            <td class="unit">{{$member->email}}</td>
                            
                        </tr>

                         <tr>
                            <td class="no">Mobile</td>
                            <td class="unit">{{$member->mobile}}</td>
                            
                        </tr>

                        <tr>
                            <td class="no">Designation</td>
                            <td class="unit">{{$designationname}}</td>
                            
                        </tr>
                         <tr>
                            <td class="no">Workplace</td>
                            <td class="unit">{{$workplacename}}</td>
                            
                        </tr>
                        @endforeach
                    
                    </tbody>
                    
                </table>
               <!-- <div class="thanks">Thank you!</div>-->
               <!-- <div class="notices">
                    <div>NOTICE:</div>
                    <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>-->
                </div>

@endsection

