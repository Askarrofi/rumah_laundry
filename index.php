<?php 
	require_once('_header.php'); 
	if (isset($_SESSION['login']) == '') {
		header("Location: login.php");
		exit();
	}
	// $jml_karyawan = count(query('SELECT * FROM master LIMIT 20 OFFSET 1'));
?>

	<div id="main" class="main-content">
		<div class="container">
			<div class="baris">
				<div class="selamat-datang">
					<div class="col-header">
						<p class="judul-sm">Selamat Datang Di</p>
						<h2 class="judul-md">Cokro Laundry</h2>
					</div>

					<div class="col-header txt-right">
						<?php
							if ($_SESSION['level'] == 'Karyawan') {
								echo '<a href="' . url('order/order.php') . '" class="btn-lg bg-primary">+ Order Baru</a>';
							}
						?> 
					</div>	
				</div>
			</div>

			<div id="about" class="main-content">
      <div class="container">
         <div class="baris">
            <div class="col mt-2">
               <div class="card">
                  <div class="card-body">
                     <div class="card-flex-column">
                        <div class="about_header">
                           <img src="<?=url('_assets/img/logo/logo2.png')?>" alt="Logo rumah laundry" width="220">
                           <p>Jasa laundry tercepat dan termurah di Bandar Lampung.</p>
                        </div>
                        <div class="about_us">

                           <p>Kami dengan hangat menyambut Anda di Cokro Laundry, tempat di mana laundry menjadi lebih mudah dan lebih praktis. Kami berkomitmen untuk merawat pakaian Anda dengan cermat sehingga Anda bisa fokus pada hal-hal lain dalam hidup Anda.
							Anda dapat dengan mudah merencanakan dan mengatur layanan laundry dari kenyamanan rumah Anda. Kami menyediakan layanan laundry cepat, andal, dan berkualitas tinggi untuk membantu Anda menjaga pakaian Anda tetap bersih dan segar. Dengan antarmuka yang sederhana dan mudah digunakan, Anda dapat dengan cepat memilih layanan yang Anda butuhkan, jadwal pengambilan dan pengantaran yang nyaman, serta melacak status pemesanan Anda secara real-time.
							Pilih layanan, tentukan jadwal, dan biarkan kami merawat pakaian Anda. Terima kasih telah memilih Cokro Laundry sebagai solusi laundry Anda. Selamat menikmati kenyamanan layanan kami!</p>
                        </div>
                     </div>


                     <div class="card-flex-column">
                        <div class="about_header">
                           <h2>Kami Melayani</h2>
						</div>
					 </div>
					 <div class="card-body mt-2">
                  <div class="col">
							<div class="container-paket">
								<div class="col-paket">
									<a  class="paket">
										<img src="<?=url('_assets/img/cuci_komplit.png')?>" alt="cuci komplit" width="160">
										<h4>Paket Cuci Komplit</h4>
									</a>
								</div>

								<div class="col-paket">
									<a class="paket">
										<img src="<?=url('_assets/img/dry_clean.png')?>" alt="dry clean" width="160">
										<h4>Paket Cuci Kering</h4>
									</a>
								</div>

								<div class="col-paket">
									<a class="paket">
										<img src="<?=url('_assets/img/kemeja_2.png')?>" alt="cuci satuan" width="160">
										<h4>Paket Cuci Satuan</h4>
									</a>
								</div>
							</div>
						</div>
               		</div>
                  </div>
               </div>
            </div>
         </div>

			<!-- <div class="baris">
				<div class="col col-4">
					<div class="card">
						<div class="card-body">
							<div class="card-panel">
								<div class="panel-header">
									<p>Jumlah Karyawan</p>
									<h2><?= $jml_karyawan ?></h2>
								</div>
								<div class="panel-icon">
									<img src="<?=url('_assets/img/team.png')?>" alt="karyawan" height="48">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col col-4">
					<div class="card">
						<div class="card-body">
							<div class="card-panel">
								<div class="panel-header">
									<p>Total Order</p>
									<h2><?= jmlOrder(); ?></h2>
								</div>
								
								<div class="panel-icon">
									<img src="<?=url('_assets/img/total_order.png')?>" alt="order" height="48">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col col-4">
					<div class="card">
						<div class="card-body">
							<div class="card-panel">
								<div class="panel-header">
									<p>Jumlah Paket Tersedia</p>
									<h2><?= jmlPaket(); ?></h2>
								</div>

								<div class="panel-icon">
									<img src="<?=url('_assets/img/jumlah_paket.png')?>" alt="paket" height="48">
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div> -->

			<!-- Daftar Order Cuci Komplit -->
			<!-- <div class="baris">
				<?php require_once('daftar_order/daf_or_ck.php');?>
			</div> -->

			<!-- Daftar Order Cuci Kering/Dry Clean -->
			<!-- <div class="baris">
				<?php require_once('daftar_order/daf_or_dc.php');?>
			</div> -->

			<!-- Daftar Order Cuci Satuan -->
			<!-- <div class="baris">
				<?php require_once('daftar_order/daf_or_cs.php');?>
			</div> -->

		</div>
	</div>

<?php require_once('_footer.php'); ?>