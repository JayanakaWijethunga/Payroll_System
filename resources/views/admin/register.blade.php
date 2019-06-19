<!DOCTYPE html>
<html lang="en">

<head>

    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    
    <title>Admin Registration</title>
    

    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
 

    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    


    <link href="../css/empreg.css" rel="stylesheet" media="all">


</head>

<body>







    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
   
    <div class="placing">
        <a href="{{route('shome')}}" class="btn btn--radius-2 btn--red">Back</a>
        <a class="btn btn--radius-2 btn--green" href="{{ route('logout') }}"
                                
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                   <span><i class="fa fa-sign-out"></i></span>        
                                   <span>Logout</span>
                   </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   {{ csrf_field() }}
        </form>
        </div>

        <br/><br/>
        <div class="wrapper wrapper--w790">
            
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Admin Registration</h2>
                </div>
                <div class="card-body">
                    <form class="register-form" id="register-form" method="POST" action="{{ route('admin.register') }}">
                    {{ csrf_field() }}
                            <br/><br/><br/>



                  <div class="form-row">
                <div class="name">Admin ID</div>
                <div class="value">
                    <div class="input-group">
                        <input class='input--style-5 form-control{{($errors->first("emp_id") ? " form-error" : "")}}' type="text" value="{{ old('emp_id') }}" name="emp_id" id="emp_id">
                    
                        @if ($errors->first('emp_id'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('emp_id') }}</strong>
                        </span>
                        @endif

                    </div>
                </div>
            </div>
                  

            <div class="form-row">
                <div class="name">Username</div>
                <div class="value">
                    <div class="input-group">
                        <input class='input--style-5 form-control{{($errors->first("name") ? " form-error" : "")}}' type="text" value="{{ old('name') }}" name="name" id="name">
                    
                        @if ($errors->first('name'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif

                    </div>
                </div>
            </div>

                        
                        





            <!--Email Inputs-->

            
            
            <div class="form-row">
                <div class="name">Email</div>
                <div class="value">
                    <div class="input-group">
                        <input class='input--style-5 form-control{{($errors->first("email") ? " form-error" : "")}}' type="email" value="{{ old('email') }}" name="email" id="email">
                    
                        @if ($errors->first('email'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif

                    </div>
                </div>
            </div>



  

        <div class="form-row">
                <div class="name">Password</div>
                    <div class="value">
                    <div class="input-group">
                        <input class='input--style-5 form-control{{($errors->first("password") ? " form-error" : "")}}' type="password" name="password">
                        @if ($errors->first('password'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                        </div>
                            </div>
                        </div>


                        <div class="form-row">
                <div class="name"> Confirm Password</div>
                    <div class="value">
                    <div class="input-group">
                        <input class="input--style-5" type="password" name="password_confirmation">
                        @if ($errors->first('password_confirmation'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                        @endif
                        </div>
                            </div>
                        </div>


                                    <br/><br/><br/><br/><br/><br/>
                                                    
                            <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <!-- Jquery JS-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <!-- Vendor JS-->
        <script src="../vendor/select2/select2.min.js"></script>
        <script src="../vendor/datepicker/moment.min.js"></script>
        <script src="../vendor/datepicker/daterangepicker.js"></script>
    
        <!-- Main JS-->
        <script src="../js/empreg.js"></script>

  

</body>

</html>
