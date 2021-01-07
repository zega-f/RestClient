<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>My Class</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <style>
        #program_card{
            padding:20px;
            border-radius:5px;
            max-width:300px;
        }
        #thumb{
            width:80%;
            margin:0 auto;
            display:block;
            border-radius:50%;
        }
    </style>
</head>
<body style="font-family: sans-serif; background-color: #E7EAED;">
    @include('navbar')
    @foreach($allClass as $class)
    
    <div class="container" >
        <div class="row">
            <div class="col-xl-3">
                <div class="container mt-3 mb-3 shadow-sm" style="background-color: white; padding: 20px;">
                    <strong>Class ID</strong>
                    <hr>
                    {{$class['classID']}}
                </div>
            </div>
            <div class="col-xl-9">
                <div class="container  mt-3 mb-3 shadow-sm" style="background-color: white; padding: 20px;">
                    <strong>{{$class['className']}}</strong>
                    <a href="{{url('admin')}}" class="btn btn-info btn-sm" style="float: right;">Back</a>
                    <hr>
                    Description : <br>
                    {{$class['description']}}
                    <hr>
                    <strong>Participants</strong>
                    <hr>
                    <div id="participants">
                        <table class="table" id="myTable">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Username</th>
                                    <th>E-mail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $u)
                                    <tr>
                                        <td>{{$u['userName']}}</td>
                                        <td>{{$u['userEmail']}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
</body>
</html>
