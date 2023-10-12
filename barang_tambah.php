<?php
	include("sess_check.php");
	
	// deskripsi halaman
	$pagedesc = "Data Barang";
	$menuparent = "barang";
	include("layout_top.php");
?>
<!-- top of file -->
		<!-- Page Content -->
		<div id="page-wrapper" style="background-image: url(bg/bg-1.jpg); background-size: cover;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="color: #ffffff; font-weight: bold; text-shadow: 1px 1px 0 #000">Data Barang</h1>
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->

				<div class="row">
					<div class="col-lg-12"><?php include("layout_alert.php"); ?></div>
				</div>
				
				<div class="row">
					<div class="col-lg-12">
						<form class="form-horizontal" action="barang_insert.php" method="POST" enctype="multipart/form-data">
							<div class="panel panel-default" style="background-color: #605B5B; color: #ffffff;">
								<div class="panel-heading" style="background-color: #605B5B; color: #ffffff; font-weight: bold"><h3>Tambah Data</h3></div>
								<div class="panel-body">
									<div class="form-group">
										<label class="control-label col-sm-3" style="font-weight: normal">Nama Barang</label>
										<div class="col-sm-4">
											<input type="text" name="nama" class="form-control" placeholder="Nama" required style="background-color: #605B5B; color: #ffffff">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" style="font-weight: normal">Harga</label>
										<div class="col-sm-4">
											<input type="number" name="harga" min="0" class="form-control" placeholder="Harga" required style="background-color: #605B5B; color: #ffffff">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" style="font-weight: normal">Keterangan</label>
										<div class="col-sm-4">
											<textarea name="keterangan" class="form-control" placeholder="Keterangan" rows="3" required style="background-color: #605B5B; color: #ffffff"></textarea>
										</div>
									</div>
								</div>
								<div class="panel-footer" style="background-color: #605B5B; color: #ffffff; font-weight: semi-bold">
									<button type="submit" name="simpan" class="btn btn-success" style="background-color: #CC7E23; border: 0.5px solid #CC7E23; border-radius: 10px">Simpan</button>
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