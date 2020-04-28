<html lang="en">

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <main role="main" class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Patient Report</h1>
            </div>
           
        </div>
		<div class="row">
			 <div class="col-12 border border-dark">
				 @foreach ($patient_info as $patient)
                 <img src="{{URL::to('/')}}/covid19assesdpatients/profileimg/{{$patient->profile_img}}" alt="" style="width:200px;height: 200px;" >
                <h4>Patient Information</h4>
                <p class="lead">Patient Number: {{$patient->patient_no}} </p>
                <p>Name: {{ $patient->name}} </p>
                <p>NIC : {{ $patient->nic }}</p>
				 <p>Gender :{{ $patient->gender}} </p>
                <p>Date of Birth :{{ $patient->dob}} </p>
                <p>Address : {{$patient->address}}</p>
				<p>Interviewed Date :{{ $patient->interviewed_at }}  </p> 
                <h4>Results Info</h4>
                <p>Possiility Percentage: {{ $patient->patient_results }} </p>
                <p>Patient State :{{ $patient->patient_result_decission }}</p>
               
				
				@endforeach
				
				
            </div>
		</div>
        <hr/>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Question</th>
                    <th scope="col">Answer</th>
                </tr>
            </thead>
            <tbody>
				 @foreach ($answeredquestion as $questionans)
                <tr>
                    <td scope="row">{{$questionans->question_en}}</td>
                    <td>Yes</td>
                </tr>
               @endforeach
				 @foreach ($notansweredquestion as $questionnotans)
                <tr>
                    <td scope="row">{{$questionnotans->question_en}}</td>
                    <td>No</td>
                </tr>
               @endforeach
				
            </tbody>
        </table>
        <div class="row">
            <div class="col-12">
                <div class="card bg-faded">
                    <div class="card-header">
                        Report Info
                    </div>
                    <div class="card-body">
						<p>&nbsp;</p>
                          <p>this report genereated based on patient answerd not on patient physical diagnoise and this is not a certificate for your covid 19 status<br>this report genereated from Medix.lk Covid19 examiner application Powered By CIS WORLD</p>
						  
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>