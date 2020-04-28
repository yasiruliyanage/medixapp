 @extends('pdfreports.layouts.reportmain')
@section('title')
  Report- Users BY Workplace CEB Union
@endsection
@section('content')

<div class="row contacts">
                    <div class="col invoice-to">
                        <h1 class="invoice-id">{{$groupname}} Group Members </h1>
                        <div class="date">Date of Report:<?php echo date('Y-m-d-h-i-s'); ?></div>
                    </div>
                  
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                          
                            <th class="text-right">Mobile</th>
                        

                        </tr>
                    </thead>
                    <tbody>
                          @foreach($userlist as $user)
                        <tr>
                            <td class="no">{{$user->member_name}}</td>
                            <td class="unit">{{$user->member_mobile}}</td>
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

