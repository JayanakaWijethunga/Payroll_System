<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>User Control Pannel</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/customemprec.css">
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
        </head>
        <body class='whole'>
        
        <div class="placing">
        <a href="{{route('home')}}" class="btn btn-danger">Back</a>
        <a class="btn btn-primary" href="{{ route('logout') }}"
                                
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                   <span><i class="fa fa-sign-out"></i></span>        
                                   <span>Logout</span>
                   </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   {{ csrf_field() }}
        </form>
        </div>
        <div class="pos-1">
        <center><h4 class='mains'>Add User</h4></center>
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                

                <div class="card-body">
                    <table  class='mytable' id='myTable'>
                    <thead>
                    <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Designation</th>
                <th>Department</th>
                <th>Action</th>
                
                
            </tr>
                    </thead>
                    <tbody>
					@foreach($emps as $emp)

					<tr>

					<td >{{$emp->id}}</td>
					<td>{{$emp->first_name}}</td>
					<td>{{$emp->email}}</td>
                    <td>{{$emp->gender}}</td>
                    <td>{{$emp->designation}}</td>
                    <td>{{$emp->department}}</td>
					
                    <td>
                    <a href="{{route('emp.register')}}" class="btn btn-success">Add</a>
                    </td>
                    </tr>
					@endforeach
					</tbody>

                    </table>

                </div>
                </div>
				<br/><br/>
                        
                        
				</div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );



</script>
</html>
