 @extends('pdfreports.layouts.reportcyclemain')
@section('title')
  Report- Transfer Cycle Information - CEBTU
@endsection
@section('content')

<div class="row contacts">
                    <div class="col invoice-to">
                        <h1 class="invoice-id">Transfer Cycle {{$cid}} </h1>
                        <div class="date">Date of Report:<?php echo date('Y-m-d-h-i-s'); ?></div>
                    </div>
                  
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>Order</th>
                            <th>Emp No</th>
                            <th>Tref ID</th>
                            <th class="text-left">Employee Name</th>
                            <th class="text-right">Transfered From</th>
                            <th class="text-right">Transfered To</th>
                            <th class="text-right">Reason for Transfer</th>
                            <th class="text-right">Special Reason for Transfer</th>
                             <th class="text-right">Trasfered At</th>

                        </tr>
                    </thead>
                    <tbody>
                          @foreach($cycleinfodata as $cycleinfo)
                        <tr>
                            <td class="no">{{$cycleinfo->t_order}}</td>
                            <td class="unit">{{$cycleinfo->emp_no}}</td>
                            <td class="unit">{{$cycleinfo->t_ref_id}}</td>
                            <td class="unit">{{$cycleinfo->name}}</td>
                            <td class="qty">{{$cycleinfo->t_from}}</td>
                            <td class="unit">{{$cycleinfo->t_to}}</td>
                            <td class="unit">{{$cycleinfo->t_reason}}</td>
                             <td class="unit">{{$cycleinfo->s_reason}}</td>
                              <td class="unit">{{$cycleinfo->t_date}}</td>
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

