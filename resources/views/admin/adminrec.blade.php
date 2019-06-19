<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin List</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/customemprec.css">
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
        </head>
        <body class='whole'>
        
        <div class="placing">
        <a href="{{route('shome')}}" class="btn btn-danger">Back</a>
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
        <center><h4 class='mains'>Admin Management Panel</h4></center>
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
                <th>Action</th>
                
                
            </tr>
                    </thead>
                    <tbody>
					@foreach($admins as $admin)

					<tr>

					<td >{{$admin->id}}</td>
					<td>{{$admin->name}}</td>
					<td>{{$admin->email}}</td>
 
					
                    <td>
                    <form id='conf' action="/deleteadmin/{{ $admin->id }}" method='post' >
                    
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    

                    <input type='submit' value='Delete' class="btn btn-danger">
                    </form>
                    </td>
                    </tr>
					@endforeach
					</tbody>

                    </table>

                </div>
                </div>
				<br/><br/>
                        <a href="{{route('admin.register')}}" class="btn btn-success">Add New Admin</a>
                        
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
