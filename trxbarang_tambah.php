<?php
	include("sess_check.php");
	
	// deskripsi halaman
	$pagedesc = "Barang Masuk";
	$menuparent = "barang";
	include("layout_top.php");
	$tgl = date('Y-m-d');
?>
<!-- top of file -->
		<!-- Page Content -->
		<div id="page-wrapper" style="background-image: url(bg/bg-1.jpg); background-size: cover;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="color: #ffffff; font-weight: bold; text-shadow: 1px 1px 0 #000">Transaksi Barang Masuk</h1>
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->

				<div class="row">
					<div class="col-lg-12"><?php include("layout_alert.php"); ?></div>
				</div>
				
				<div class="row">
					<div class="col-lg-12">
						<form class="form-horizontal" action="trxbarang_insert.php" method="POST" enctype="multipart/form-data">
							<div class="panel panel-default" style="background-color: #605B5B; color: #ffffff;">
								<div class="panel-heading" style="background-color: #605B5B; color: #ffffff; font-weight: bold"><h3>Tambah Data Barang Masuk</h3></div>
								<div class="panel-body">
									<div class="form-group">
										<label class="control-label col-sm-3" style="font-weight: normal">Barang</label>
										<div class="col-sm-4">
											<select name="brg" id="brg" class="form-control" required style="background-color: #605B5B; color: #ffffff">
												<option value="">==== Pilih Barang ====</option>
												<?php
													$sql_brg = "SELECT * FROM barangjasa WHERE jenis='barang' ORDER BY nama ASC";
													$ress_brg = mysqli_query($conn, $sql_brg);
													while($li = mysqli_fetch_array($ress_brg)) {
														echo '<option value="'. $li['id_brg'] .'">'. $li['nama'].'</option>';
													}
												?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" style="font-weight: normal">Supplier</label>
										<div class="col-sm-4">
											<select name="spl" id="spl" class="form-control" required style="background-color: #605B5B; color: #ffffff">
												<option value="">==== Pilih Supplier ====</option>
												<?php
													$sql_don = "SELECT * FROM supplier ORDER BY nama_spl ASC";
													$ress_don = mysqli_query($conn, $sql_don);
													while($li = mysqli_fetch_array($ress_don)) {
														echo '<option value="'. $li['id_spl'] .'">'. $li['nama_spl'].'</option>';
													}
												?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" style="font-weight: normal">Tanggal</label>
										<div class="col-sm-4">
											<input type="date" name="tgl" class="form-control" placeholder="Tanggal" value="<?php echo $tgl;?>" required style="background-color: #605B5B; color: #ffffff">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3" style="font-weight: normal">Jumlah</label>
										<div class="col-sm-4">
											<input type="number" name="jml" min="0" class="form-control" placeholder="Jumlah" required style="background-color: #605B5B; color: #ffffff">
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