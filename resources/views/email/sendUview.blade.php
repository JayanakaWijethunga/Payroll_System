<html>
    <head>


<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel='stylesheet'>


</head>
<body>
<h1>User Account Verification</h1>
<br/><br/>
<a class="btn btn-success" href=" {{route('sendEmailDone',['email' => $user->email,'verifyToken' =>$user->verifyToken])}} "> Click here </a>
<p>You are advanced to User access level.your account already created by Admins.Please verify it and check for login.</p>
<p>If any problem contact a admin</p>
<h3>Good Luck!</h3>
</body>

</html>