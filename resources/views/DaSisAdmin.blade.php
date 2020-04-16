<!doctype html>
<html lang="en">
  <head>
  	<title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-color:#026ac0 ;">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(../images/user.png);"></div>
	  				<h3>Admin</h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li>
            <a href="homeAdmin.blade.php"> Histori Pembayaran</a>
          </li>
          <li class="active">
              <a href="#"> Data Siswa</a>
          </li>
          <li>
            <a href="DaPetAdmin.blade.php"> Data Petugas</a>
          </li>
          <li>
            <a href="DaKelAdmin.blade.php"> Data Kelas</a>
          </li>
          <li>
            <a href="DaSAdmin.blade.php"> Data SPP</a>
          </li>
          <li>
            <a href="EnTranAdmin.blade.php"> Entri Transaksi</a>
          </li>
          <li>
            <a href="login.blade.php"><span class="fa fa-sign-out mr-3"></span> Log Out</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">DATA SISWA</h2>
        <p></p>
      </div>
		</div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>