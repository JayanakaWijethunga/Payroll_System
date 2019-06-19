<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Welocome to Payroll System</title>
  <link href="css/welcome.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/all.min.css">
  

</head>
  <body >

  <section class="features-icons bg-light text-center back01">
    <div class="container " >
        
      <br/><br/>
      <div class="row">
          <div class="col-xl-9 mx-auto ">
          <h1 class="makeit mb-5">Web Payroll System</h1>
        </div>
        <div class="col-lg-4" >
            <a class="page-access " href="{{ url('sadmin') }}">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex icon-colors">
              <i class="fas fa-user-tie m-auto text-secondary"></i>
            </div>
            <h3>Super Admins</h3>
            <p class="lead mb-0">Acess the super admin control panel</p>
          </a>
          </div>
        </div>
        <div class="col-lg-4">
                <a class="page-access " href="{{ url('admin') }}">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="fas fa-users-cog m-auto text-secondary"></i>
            </div>
            <h3>Admins</h3>
            <p class="lead mb-0">Acess the super admin control panel</p>
        </a>

          </div>
        </div>
        <div class="col-lg-4">
                <a class="page-access" href="{{ url('/login') }}">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            
                    <div class="features-icons-icon d-flex ">
                
                    <i class="fas fa-users m-auto text-secondary"></i>
            </div>
            <h3>Users</h3>
            <p class="lead mb-0">Acess the super admin control panel</p>
                </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
