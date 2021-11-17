<html lang="en">
<head>
  <title>Laravel 8</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body style="background-color: rgb(190, 190, 190)">
  <div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>School Data</h1>
  </div>
  <div class="container mt-5">
      <div class="container d-flex justify-content-center">
          @foreach ($departments as $department )
          <div class="m-5 border-0">
            <h3>Department: {{$department->name}}</h3>
            <h6>Principal: {{$department->principal}}</h6>
            <h6>Location: {{$department->location}}</h6>         
            <br>
            <div class="border">
                @foreach ($department->student as $student)
                  <div>
                      Name: {{$student->name}} <br> Born: {{$student->dob}}
                  </div>
                  <br>
                @endforeach
                  Details: <br>
                  Rank: {{$student->details->rank}} <br>
                  Score: {{$student->details->score}}
            </div>
        </div>
          @endforeach
      </div>
  </div>
  <div class="container p-1 mt-5 bg-primary text-white text-center fixed-bottom">
    <small>&copy School{{ date("Y") }}</small>
  </div>
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>