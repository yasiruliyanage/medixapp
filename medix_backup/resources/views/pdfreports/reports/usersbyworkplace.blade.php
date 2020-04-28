 @extends('pdfreports.layouts.reportmain')
@section('title')
  Report- Users BY Workplace CEB Union
@endsection
@section('content')

<div class="row contacts">
                    <div class="col invoice-to">
                        <h1 class="invoice-id"> Members at {{$placename}} </h1>
                        <div class="date">Date of Report:<?php echo date('Y-m-d-h-i-s'); ?></div>
                    </div>
                  
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>UnionId</th>
                            <th>EmpId</th>
                            <th class="text-left">First Name</th>
                            <th class="text-right">Last Name</th>
                            <th class="text-right">Email</th>
                            <th class="text-right">Mobile</th>
                            <th class="text-right">Address</th>

                        </tr>
                    </thead>
                    <tbody>
                          @foreach($userlist as $user)
                        <tr>
                            <td class="no">{{$user->union_id}}</td>
                            <td class="unit">{{$user->employee_id}}</td>
                            <td class="unit">{{$user->name}}</td>
                            <td class="unit">{{$user->lname}}</td>
                            <td class="qty">{{$user->email}}</td>
                            <td class="unit">{{$user->mobile}}</td>
                            <td class="unit"><{{$user->address}}</td>
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

