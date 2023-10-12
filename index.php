<?php
	include("sess_check.php");
	include("dist/function/format_rupiah.php");

	$tgl = date('Y-m-d');
	$ttl=0;
	$sql = "SELECT * FROM trx WHERE tgl_trx='$tgl'";
	$ress = mysqli_query($conn, $sql);
	$jmltrx = mysqli_num_rows($ress);
	// query database mencari data admin
	while($data=mysqli_fetch_array($ress)){
		$tot=$data['total'];
		$ttl+=$tot;
	}
	// deskripsi halaman
	$pagedesc = "Beranda";
	include("layout_top.php");
?>
<!-- top of file -->
		<!-- Page Content -->
		<div id="page-wrapper" style="background-image: url(bg/bg-1.jpg); background-size: cover;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="color: #ffffff; font-weight: bold; text-shadow: 1px 1px 0 #000">Beranda</h1>
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
				
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="panel panel-grey">
							<div class="panel-heading" style="background-color: #605B5B; font-weight: bold;">
								<div class="row" style="color: #ffffff">
									<div class="col-xs-3">
										<i class="fa fa-check-circle fa-3x"></i>
									</div>
									<div class="col-xs-9 text-right"> 
										<div class="huge"><?php echo $jmltrx; ?></div>
										<div><h4 style="font-weight: bold">Transaksi Hari Ini</h4></div>
									</div>
								</div>
							</div>
							<a href="trx.php">
								<div class="panel-footer">
									<span class="pull-left" style="font-weight: bold">Lihat Rincian</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
					</div><!-- /.panel-grey -->
					
					<div class="col-lg-6 col-md-6">
						<div class="panel panel-brown">
							<div class="panel-heading" style="background-color: #906F48; font-weight: bold;">
								<div class="row" style="color: #ffffff">
									<div class="col-xs-3">
										<i class="fa fa-plus-circle fa-3x"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div class="huge"><?php echo format_rupiah($ttl); ?></div>
										<div><h4 style="font-weight: bold">Pendapatan Hari Ini</h4></div>
									</div>
								</div>
							</div>
							<a href="trx.php">
								<div class="panel-footer" style="color: #906F48">
									<span class="pull-left" style="font-weight: bold;">Lihat Rincian</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
					</div><!-- /.panel-grey -->
				</div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div><!-- /#page-wrapper -->
<!-- bottom of file -->
<?php
	include("layout_bottom.php");
?>