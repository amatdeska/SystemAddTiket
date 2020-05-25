
<!DOCTYPE html>
<html>
  <head>
    <title>Selamat Datang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Selamat Datang</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          
	                          <li><a href="index.php">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="V_user.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>

					<li><a href="transaksi_user.php"><i class="glyphicon glyphicon-barcode"></i> Transaksi</a></li>
                    
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-globe"></i> Harga Tiket
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="ekonomi_user.php">Ekonomi</a></li>
                            <li><a href="eksekutif_user.php">Eksekutif</a></li>
							<li><a href="bisnis_user.php">Bisnis</a></li>
							
                        </ul>
                    </li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">


<div class="content-box-large">
	<div class="panel-heading">
	  <div class="panel-title">Data Kereta Api Eksekutif</div>
      <a href="pesan_tiket.php">
	  <button class="btn btn-default">Pesan Tiket</button><br>
	  </a>
  </div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table">
			<thead>
            <tr>
				<th>No</th>
				<th>Nama Kereta </th>
				<th>Harga</th>
				<th>Kota Berangkat</th>
				<th>Kota Tujuan</th>
				<th>Jam</th>
				 
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>1</td>
				<td>Argo Cheribon</td>
				<td>Rp. 250.000</td>
				<td>Gambir (GMR)</td>
				<td>Tegal (TG)</td>
				<td>11.45</td>
				
			  </tr>
			  <tr>
				<td>2</td>
				<td>Argo Parahyangan</td>
				<td>Rp. 280.000</td>
				<td>Bandung (BD)</td>
				<td>Gambir (GMR)</td>
				<td>07:30</td>
				
			  </tr>
			  <tr>
				<td>3</td>
				<td>Purwojaya</td>
				<td>Rp. 275.000</td>
				<td>Cilacap (CP)</td>
				<td>Gambir (GMR)</td>
				<td>16:00</td>
				
			  </tr>
			  <tr>
				<td>4</td>
				<td>Mutiara Selatan</td>
				<td>Rp. 290.000</td>
				<td>Malang (ML)</td>
				<td>Gambir (GMR)</td>
				<td>13:40</td>
				
			  </tr>
			  <tr>
				<td>5</td>
				<td>Malabar</td>
				<td>Rp. 285.000</td>
				<td>Malang (ML)</td>
				<td>Pasar Senin (PSE)</td>
				<td>11:53</td>
				
			  </tr>
			  
			</tbody>
			
		  </table>
		</div>
	</div>
</div>

		  </tbody>
	  </table>
	</div>
</div>

		  </div>
		</div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>