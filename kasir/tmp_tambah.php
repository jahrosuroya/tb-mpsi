<?php
	include("sess_check.php");
	
	// deskripsi halaman
	$pagedesc = "Transaksi Baru";
	$menuparent = "transaksi";
	include("layout_top.php");
if(isset($_POST['simpan'])){
$brg=$_POST['brg'];
$jumlah=$_POST['jumlah'];
$stt ="On Process";
$id = $sess_kasirid;
$null="";
$sql = "SELECT * FROM barangjasa WHERE id_brg='$brg'";
$query = mysqli_query($conn,$sql);
$res = mysqli_fetch_array($query);
$stok = $res['stok'];
	if($stok<$jumlah){
		echo "<script>alert('Stok kurang dari jumlah yang diinginkan!');</script>";	
		echo "<script type='text/javascript'> document.location = 'tmp_tambah.php'; </script>";
	}else{
		$sqli="INSERT INTO tmp_trx(id_trx,id_brg,jml,id_kasir,status)VALUES('$null','$brg','$jumlah','$id','$stt')";
		$ressi = mysqli_query($conn, $sqli);
		echo "<script type='text/javascript'> document.location = 'trx_baru.php'; </script>";
	}
}

?>
<!-- top of file -->
		<!-- Page Content -->
		<div id="page-wrapper" style="background-image: url(bg-k/bgk.jpg); background-size: cover;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="color: #ffffff; font-weight: bold; text-shadow: 1px 1px 0 #000">Transaksi Baru</h1>
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->

				<div class="row">
					<div class="col-lg-12"><?php include("layout_alert.php"); ?></div>
				</div>
				
				<div class="row">
					<div class="col-lg-12">
						<form class="form-horizontal" method="POST" enctype="multipart/form-data">
							<div class="panel panel-default" style="background-color: #605B5B; color: #ffffff;">
								<div class="panel-heading" style="background-color: #605B5B; color: #ffffff; font-weight: bold"><h3>Tambah Barang/Jasa</h3></div>
								<br/>
								<div class="form-group">
									<label class="control-label col-sm-3" style="font-weight: normal">Barang</label>
									<div class="col-sm-4">
										<select name="brg" id="brg" class="form-control" required style="background-color: #605B5B; color: #ffffff">
											<option value="">==== Pilih Barang/Jasa ====</option>
											<?php
											$sql_brg = "SELECT * FROM barangjasa WHERE stok!=0 AND id_brg NOT IN (SELECT id_brg FROM tmp_trx WHERE status='On Process') ORDER BY nama ASC";
											$ress_brg = mysqli_query($conn, $sql_brg);
											while($li = mysqli_fetch_array($ress_brg)) {
												echo '<option value="'. $li['id_brg'] .'">'. $li['nama'].'</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3" style="font-weight: normal">Jumlah</label>
									<div class="col-sm-4">
										<input type="number" name="jumlah" min="0" class="form-control" placeholder="Jumlah" required style="background-color: #605B5B; color: #ffffff">
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