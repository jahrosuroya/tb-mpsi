<?php
	include("sess_check.php");
	
	if(isset($_GET['js'])) {
		$sql = "SELECT * FROM barangjasa WHERE id_brg='". $_GET['js'] ."'";
		$ress = mysqli_query($conn, $sql);
		$data = mysqli_fetch_array($ress);
	}
	// deskripsi halaman
	$pagedesc = "Data Jasa";
	$menuparent = "barang";
	include("layout_top.php");
?>
<!-- top of file -->
		<!-- Page Content -->
		<div id="page-wrapper" style="background-image: url(bg/bg-1.jpg); background-size: cover;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="color: #ffffff; font-weight: bold; text-shadow: 1px 1px 0 #000">Data Jasa</h1>
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->

				<div class="row">
					<div class="col-lg-12"><?php include("layout_alert.php"); ?></div>
				</div>
				
				<div class="row">
					<div class="col-lg-12">
						<form class="form-horizontal" action="jasa_update.php" method="POST" enctype="multipart/form-data">
							<div class="panel panel-default" style="background-color: #605B5B; color: #ffffff;">
								<div class="panel-heading" style="background-color: #605B5B; color: #ffffff; font-weight: bold"><h3>Edit Data</h3></div>
								<div class="panel-body">
									<div class="form-group">
										<label class="control-label col-sm-3" style="font-weight: normal">Nama</label>
										<div class="col-sm-4">
											<input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $data['nama'] ?>" required required style="background-color: #605B5B; color: #ffffff">
											<input type="hidden" name="id" class="form-control" placeholder="Nama" value="<?php echo $data['id_brg'] ?>" required required style="background-color: #605B5B; color: #ffffff">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" style="font-weight: normal">Harga</label>
										<div class="col-sm-4">
											<input type="number" name="harga" min="0" class="form-control" placeholder="Harga" value="<?php echo $data['harga'] ?>"required required style="background-color: #605B5B; color: #ffffff">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" style="font-weight: normal">Keterangan</label>
										<div class="col-sm-4">
											<textarea name="keterangan" class="form-control" placeholder="Keterangan" rows="3" required required style="background-color: #605B5B; color: #ffffff"><?php echo $data['keterangan'];?></textarea>
										</div>
									</div>
								</div>
								<div class="panel-footer" style="background-color: #605B5B; color: #ffffff; font-weight: semi-bold">
									<button type="submit" name="perbarui" class="btn btn-success" style="background-color: #CC7E23; border: 0.5px solid #CC7E23; border-radius: 10px">Update</button>
								</div>
							</div><!-- /.panel -->
						</form>
					</div><!-- /.col-lg-12 -->
				</div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div><!-- /#page-wrapper -->
<!-- bottom of file -->
<?php
	include("layout_bottom.php");
?>