<!DOCTYPE html>
<html lang="en">

<head>

    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    
    <title>Employee Registration</title>

    <!-- Icons font CSS-->
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    

    <!-- Vendor CSS-->
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    
    <!-- Main CSS-->
    <link href="../css/empreg.css" rel="stylesheet" media="all">

</head>

<body>


    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
    <div class='backs'>
<a  class='btn btn--radius-2 btn--green' href="{{ route('emprec') }}">Back</a>
</div>
        <div class="wrapper wrapper--w790">
            
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Employee Registration</h2>
                </div>
                <div class="card-body">
                    <form class="register-form" id="register-form" method="POST" action="{{ route('emp.register') }}">
                    {{ csrf_field() }}
                            <br/><br/><br/>

                            <div class="card card-5 cardsub">
                                    <h2 class="title">Genaral Information</h2>
                            </div>
                            
                                    <br/><br/><br/>
                <!--SSN Inputs-->

            
            
                <div class="form-row">
                <div class="name">SSN</div>
                <div class="value">
                    <div class="input-group">
                        <input class='input--style-5 form-control{{($errors->first("ssn") ? " form-error" : "")}}' type="text" value="{{ old('ssn') }}" name="ssn" id="ssn">
                    
                        @if ($errors->first('ssn'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('ssn') }}</strong>
                        </span>
                        @endif

                    </div>
                </div>
            </div>


                            <!--Username Inputs-->

            
            
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
                               

                        <!--Name Inputs-->

    <div class="form-row m-b-55">
        <div class="name">Full Name</div>
            <div class="value">
                <div class="row row-space">
                    <div class="col-2">
                                    
                    <div class="input-group-desc form-input" >
                    <label class="label--desc">first name</label>
                    <br/><br/>
                        <input class='input--style-5 form-control{{($errors->first("first_name") ? " form-error" : "")}}' type="text" value="{{ old('first_name') }}" name="first_name" id="first_name">
                        @if ($errors->first('first_name'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                                    
                    <div class="col-2">
                                    
                    <div class="input-group-desc form-input">
                    <label class="label--desc">last name</label>
                    <br/><br/>                        
                        <input class='input--style-5 form-control{{($errors->first("last_name") ? " form-error" : "")}}' type="text" value="{{ old('last_name') }}" name="last_name" id="last_name">
                        @if ($errors->first('last_name'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{$errors->first('last_name') }}</strong>
                            </span>
                            @endif  
                            </div>
                        </div>
                    </div>
                </div>
            </div>



                        
                        <!--DOB Inputs-->

            <div class="form-row">
                <div class="name">Date Of Birth</div>
                <div class="value">
                    
                    <div class="input-group">

                        <input class='input--style-5 form-control{{($errors->first("dob") ? " form-error" : "")}}' type="date" value="{{ old('dob') }}" name="dob" id="dob">
                        
                        @if ($errors->first('dob'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('dob') }}</strong>
                            </span>
                            @endif 

                    </div>
                </div>
            </div>

                        <!--Gender Inputs-->

            <div class="form-row p-t-20">
                    <label class="label label--block">Select the Gender</label>
                    <div class="p-t-15">
                        <label class="radio-container m-r-55">Male
                            <input type="radio" checked="checked"  name="gender" value="Male">
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-container">Female
                            <input type="radio" name="gender" value="Female">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div>

                <br/><br/><br/>

                            <!--Address Inputs-->

            <div class="form-row">
                <div class="name">Address</div>
                    <div class="value">
                        <div class="col-2">
                            <div class="input-group">
                            <label class="label--desc">Street</label><br/><br/>
                                <input class='input--style-5 form-control{{($errors->first("addl1") ? " form-error" : "")}}' type="text" value="{{ old('addl1') }}" name="addl1" id="addl1">
                                
                                @if ($errors->first('addl1'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('addl1') }}</strong>
                                </span>
                                @endif

                            </div>
                        </div>
                    </div>
            </div>

                <div class="form-row">
                    <div class="name"></div>
                        <div class="value">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label--desc">City</label><br/><br/>
                                    <input class='input--style-5 form-control{{($errors->first("addl2") ? " form-error" : "")}}' type="text" value="{{ old('addl2') }}" name="addl2" id="addl2">
                                    
                                    @if ($errors->first('addl2'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('addl2') }}</strong>
                                    </span>
                                    @endif

                                </div>
                            </div>
                        </div>
                </div>

                <div class="form-row">
                    <div class="name"></div>
                        <div class="value">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label--desc">Distric</label><br/><br/>
                                    <input class='input--style-5 form-control{{($errors->first("addl3") ? " form-error" : "")}}' type="text" value="{{ old('addl3') }}" name="addl3">
                                    
                                    @if ($errors->first('addl3'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('addl3') }}</strong>
                                    </span>
                                    @endif

                                </div>
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



  <!--Phone Inputs-->

        <div class="form-row m-b-55">
            <div class="name">Phone</div>
            <div class="value">
                <div class="row row-space">
                    <div class="col-2">
                        <div class="input-group-desc">
                            <label class="label--desc">Phone number 1</label><br/><br/>
                            <input class='input--style-5 form-control{{($errors->first("phone1") ? " form-error" : "")}}' type="text" value="{{ old('phone1') }}" name="phone1" id="phone1">
                            
                            @if ($errors->first('phone1'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('phone1') }}</strong>
                            </span>
                            @endif

                        </div>
                    </div>
                    <div class="col-2">
                        <div class="input-group-desc">

                            <label class="label--desc">Phone number 2(optional)</label><br/><br/>
                            <input class='input--style-5' type="text" value="{{ old('phone2') }}" name="phone2">
                            
                           

                        </div>
                    </div>
                </div>
            </div>
        </div>   


        <br/><br/><br/>
<div class="card card-5 cardsub">
        <h2 class="title">Official Information</h2>
</div>




<!--Official Information-->

            <br/><br/><br/>
            

<div class="form-row">
        <div class="name">Branch</div>
        <div class="value">
            <div class="input-group">
                <div class='rs-select2 js-select-simple select--no-search form-control{{($errors->first("obranch") ? " form-error" : "")}}'>
                    <select name="obranch" >
                        <option disabled="disabled" selected="selected">Select Company Branch</option>
                        <option >Matara</option>
                        <option>Colombo</option>
                        <option>Galle</option>
                    </select>
                    <div class="select-dropdown"></div>
                        
                </div>
                        @if ($errors->first('obranch'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('obranch') }}</strong>
                        </span>
                        @endif
            </div>
        </div>
    </div>       


                        
    <div class="form-row">
        <div class="name">Department</div>
        <div class="value">
            <div class="input-group">
                <div class='rs-select2 js-select-simple select--no-search form-control{{($errors->first("dept") ? " form-error" : "")}}'>
                    <select name="dept">
                        <option disabled="disabled" selected="selected">Select the Department</option>
                        <option>Design</option>
                        <option>Develop</option>
                        <option>Testing</option>
                    </select>
                    <div class="select-dropdown"></div>
                </div>
                        @if ($errors->first('dept'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('dept') }}</strong>
                        </span>
                        @endif
            </div>
        </div>
    </div>


                                
    <div class="form-row">
            <div class="name">Designation</div>
            <div class="value">
                <div class="input-group">
                    <div class='rs-select2 js-select-simple select--no-search select--no-search form-control{{($errors->first("des") ? " form-error" : "")}}'>
                        <select name="des">
                            <option disabled="disabled" selected="selected">Select the Designation</option>
                            <option>QA</option>
                            <option>SE</option>
                            <option>Other</option>
                        </select>
                        <div class="select-dropdown"></div>
                    </div>
                        @if ($errors->first('des'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('des') }}</strong>
                        </span>
                        @endif
                </div>
            </div>
        </div>

        <br/><br/><br/>>

                                    <div class="card card-5 cardsub">
                                            <h2 class="title">Financial Information</h2>
                                    </div>
            
            
                                    <!--Financial Information-->
            
                                    <br/><br/><br/>

                                            <!--Fixed Allowance Inputs-->

            
            
                                            <div class="form-row">
                <div class="name">Fixed Allowances</div>
                <div class="value">
                    <div class="input-group">
                        <input class='input--style-5 form-control{{($errors->first("fixed_allowance") ? " form-error" : "")}}' type="text" value="{{ old('fixed_allowance') }}" name="fixed_allowance" id="fixed_allowance">
                    
                        @if ($errors->first('fixed_allowance'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('fixed_allowance') }}</strong>
                        </span>
                        @endif

                    </div>
                </div>
            </div>

            <!--Fixed deduction Inputs-->

            
            
            <div class="form-row">
                <div class="name">Fixed Deductions</div>
                <div class="value">
                    <div class="input-group">
                        <input class='input--style-5 form-control{{($errors->first("fixed_deduction") ? " form-error" : "")}}' type="text" value="{{ old('fixed_deduction') }}" name="fixed_deduction" id="fixed_deduction">
                    
                        @if ($errors->first('fixed_deduction'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('fixed_deduction') }}</strong>
                        </span>
                        @endif

                    </div>
                </div>
            </div>


                                    <div class="form-row p-t-20">
                    <label class="label label--block">Is OT Allowed</label>
                    <div class="p-t-15">
                        <label class="radio-container m-r-55">Yes
                            <input type="radio" checked="checked"  name="is_OT_allowed" value=1>
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-container">No
                            <input type="radio" name="is_OT_allowed" value=0>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div>

                <br/><br/><br/>

            
    <div class="form-row">
            <div class="name">Bank</div>
            <div class="value">
                <div class="input-group">
                    <div class='rs-select2 js-select-simple select--no-search select--no-search form-control{{($errors->first("bank") ? " form-error" : "")}}'>
                        <select name="bank">
                            <option disabled="disabled" selected="selected">Select the Bank</option>
                            <option>BOC</option>
                            <option>NSB</option>
                            <option>HND</option>
                        </select>
                        <div class="select-dropdown"></div>
                    </div>
                        @if ($errors->first('bank'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('bank') }}</strong>
                        </span>
                        @endif
                </div>
            </div>
        </div>
            
            
        <div class="form-row">
                <div class="name">Branch</div>
                <div class="value">
                    <div class="input-group">
                        <div class='rs-select2 js-select-simple select--no-search select--no-search form-control{{($errors->first("bbranch") ? " form-error" : "")}}'>
                            <select name="bbranch">
                                <option disabled="disabled" selected="selected">Select the Branch</option>
                                <option>Matara</option>
                                <option>Colombo</option>
                                <option>Galle</option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                        @if ($errors->first('bbranch'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('bbranch') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>



 <div class="form-row">
                <div class="name">Account Number</div>
                <div class="value">
                    <div class="input-group">
                        <input class='input--style-5 form-control{{($errors->first("acc") ? " form-error" : "")}}' type="text" value="{{ old('acc') }}" name="acc" id="acc">
                        @if ($errors->first('acc'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('acc') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>


            <br/><br/><br/>>

<div class="card card-5 cardsub">
        <h2 class="title">Security Information</h2>
</div>


<!--Security Information-->

<br/><br/><br/>

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
