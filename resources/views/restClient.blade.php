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
    <div class="container mb-3 shadow-sm" style="background-color: white; padding: 20px; margin-top: 100px; max-width: 400px;">
        <h4>Welcome</h4>
        <hr>
        <form action="{{url('login')}}" method="post" style="font-size: 14px;">
            @csrf
            <div class="form-group">
                <label>E-mail</label>
                <input type="text" name="email" class="form-control" required placeholder="E.g. Example@gmail.com" value="{{old('email')}}">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            @if ($message = Session::get('fail'))
            <div class="alert alert-danger alert-sm" id="alert">
                <p>{{ $message }}</p>
            </div>
            @endif
            <button class="btn btn-primary btn-sm" type="submit">Login</button>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#alert').delay(2000).fadeOut();
        })
    </script>
</body>
</html>
