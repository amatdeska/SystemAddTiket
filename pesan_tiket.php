
<!DOCTYPE html>
<html>
  <head>
    <title>Selamat Datang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="css/forms.css" rel="stylesheet">
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="V_user.php">Selamat Datang</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  
	                </div>
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
          <div class="row">
					<div class="col-md-6">
						<div class="content-box-large">
			  				<div class="panel-heading">
							
							</div>
			  				<div class="panel-body">
			  					<form method="POST" action="transaksi_user.php" class="form-horizontal">
							
									<fieldset>
										<legend>Silahkan Mengisi Data</legend>
										<div class="form-group">
											<label class="col-md-2 control-label" for="text-field">NIK (KTP) 1</label>
											<div class="col-md-10">
												<input class="form-control"  name="nik" placeholder="NIK (KTP)" type="text">
											</div>
										</div>
                                        <div class="form-group">
											<label class="col-md-2 control-label" for="text-field">NIK (KTP) 2</label>
											<div class="col-md-10">
												<input class="form-control"  name="nik1" placeholder="NIK (KTP)" type="text">
											</div>
										</div>
                                        
										<div class="form-group">
											<label class="col-md-2 control-label">Nama Pelanggan 1</label>
											<div class="col-md-10">
												<input class="form-control"  name="nama" placeholder="Nama Pelanggan 1" type="text">
											</div>
										</div>
                                        <div class="form-group">
											<label class="col-md-2 control-label">Nama Pelanggan 2</label>
											<div class="col-md-10">
												<input class="form-control"  name="nama1" placeholder="Nama Pelanggan 2" type="text">
											</div>
										</div>
                                        
                                        <div class="form-group">
											<label class="col-md-2 control-label">Umur 1</label>
											<div class="col-md-10">
												<input class="form-control" name="umur" placeholder="Umur 1" type="text">
											</div>
										</div>
                                        <div class="form-group">
											<label class="col-md-2 control-label">Umur 2</label>
											<div class="col-md-10">
												<input class="form-control" name="umur1" placeholder="Umur 2" type="text">
											</div>
										</div>
                                        
										
										<div class="form-group">
											<label class="col-md-2 control-label" for="text-field">Nama Kereta</label>
											<div class="col-md-10">
												<input class="form-control" name="nama_ka" placeholder="Nama Kereta" type="text" list="list1">
												<datalist id="list1">
													<option value="Argo Cheribon"></option>
													<option value="Argo Parahyangan"></option>
													<option value="Purwojaya"></option>
													<option value="Mutiara Selatan"></option>
													<option value="Malabar"></option>	
												</datalist> 
												<p>
			  							<div class="bfh-datepicker" data-format="y-m-d" data-date="today"></div>
									  </p>
									  <p>
			  							<div class="bfh-timepicker" data-mode="12h"></div>	  
			  						</p>	
											</div>
										</div>
                                        
										<div class="form-group">
											<label class="col-md-2 control-label">File input</label>
											<div class="col-md-10">
												<input type="file" class="btn btn-default" id="exampleInputFile1">
												<p class="help-block">
													Upload Bukti Traksaksi
												</p>
												<input class="btn btn-default" type="submit" value="SIMPAN"></input>
											</div>
										</div>
								</fieldset>	
							</form>					
		                </tbody>
	                </table>
	            </div>
             </div>
		  </div>
		</div>
    </div>

    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

    <script src="vendors/select/bootstrap-select.min.js"></script>

    <script src="vendors/tags/js/bootstrap-tags.min.js"></script>

    <script src="vendors/mask/jquery.maskedinput.min.js"></script>

    <script src="vendors/moment/moment.min.js"></script>

    <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

     <!-- bootstrap-datetimepicker -->
     <link href="vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
     <script src="vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 


    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>


  </body>
</html>