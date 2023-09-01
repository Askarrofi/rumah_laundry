<?php 
   require_once('../../_header.php'); 
   $no_ck = $_GET['or_ck_number'];
   $data = query("SELECT * FROM tb_order_ck WHERE or_ck_number = '$no_ck'")[0];
?>

<?php if (isset($_POST['bayar_ck'])) : ?>

   $beratBaru = $_POST['or_ck_number'];

   <script>
      window.location="http://localhost/rumah_laundry/detail_order/detail_ck/bayar.php?or_ck_number=<?=$no_ck?>"
   </script>
<?php endif ?>

<?php
if (isset($_POST['simpan_edit_berat'])) {
    $berat_baru = $_POST['berat_qty_ck'];
    $no_ck = $_POST['or_ck_number'];

    // Lakukan proses update pada database menggunakan query UPDATE
    $query_update_berat = "UPDATE tb_order_ck SET berat_qty_ck = '$berat_baru' WHERE or_ck_number = '$no_ck'";
    // ...

    // Setelah proses update selesai, redirect kembali ke halaman detail order
    header("Location: detail_order_ck.php?or_ck_number=$no_ck");
    exit(); // Pastikan diakhiri dengan exit untuk menghentikan eksekusi kode
}
?>


   <div id="order_ck" class="main-content">
      <div class="container">
         <div class="baris">
            <div class="col mt-2">
               <div class="card">
                  <div class="card-title card-flex">
                     <div class="card-col">
                     <h3 class="no-order"><small>No Order : </small><?= $data['or_ck_number']?></h3>
                     </div>

                     <div class="card-col txt-right">
                        <a href="<?=url('riwayat_transaksi/riwayat.php')?>" class="btn-xs bg-primary">Kembali</a>
                     </div>
                  </div>

                  <div class="card-body">
                     <form action="" method="post">
                        <div class="row-input">
                           <div class="col-form m-1">
                              <div class="form-grup">
                                 <label for="nama">Nama Pelanggan</label>
                                 <input type="text" name="nama_pel_ck" disabled value="<?=$data['nama_pel_ck']?>"></td>
                              </div>

                              <div class="form-grup">
                                 <label for="no-telp">Nomor Telepon</label>
                                 <input type="text" name="no_telp_ck" disabled value="<?=$data['no_telp_ck']?>"></td>
                              </div>

                              <div class="form-grup">
                                 <label for="alamat">Alamat</label>
                                 <textarea name="alamat_ck" disabled class="txt-area">
                                    <?=$data['alamat_ck']?>
                                 </textarea>
                              </div>
                           </div>

                           <div class="col-form m-1">
                              <div class="form-grup">
                                 <label for="pilih_paket">Pilih Paket</label>
                                 <input type="text" name="jenis_paket_ck" disabled value="<?=$data['jenis_paket_ck']?>">
                              </div>

                              <div class="form-grup">
                              <form action="proses_edit_berat.php" method="post">
                                 <input type="hidden" name="or_ck_number" value="<?=$data['or_ck_number']?>">
                                 <label for="berat_qty_ck_edit">Berat (Kg):</label>
                                 <input type="number" name="berat_qty_ck_edit" value="<?=$data['berat_qty_ck']?>">
                                 <button type="submit" name="simpan_edit_berat" class="btn-sm bg-primary">Simpan</button>
                              </form>
                              </div>

                              



                              <div class="form-grup">
                                 <label for="tgl_order_msk">Tanggal Order Masuk</label>
                                 <input type="text" name="tgl_masuk_ck" disabled value="<?=$data['tgl_masuk_ck']?>">
                              </div>

                              <div class="form-grup">
                                 <label for="tgl_order_klr">Tanggal Order Keluar</label>
                                 <input type="text" name="tgl_keluar_ck" disabled value="<?=$data['tgl_keluar_ck']?>">
                              </div>

                              <div class="form-grup">
                                 <label for="ket">Keterangan</label>
                                 <textarea name="keterangan_ck" rows="4" id="ket"></textarea>
                              </div>
                           </div>
                        </div>
                        
                        <div class="form-footer">
                           <div class="buttons">
                           <button type="submit" name="order_ck" class="btn-sm bg-primary">Pesan</button>
                              <button type="reset" class="btn-sm bg-transparent">Batal</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <script>
   <?php
   // Mengambil data jenis paket dari database
   $query_jenis_paket = query("SELECT nama_paket_ck FROM tb_cuci_komplit");
   $jenis_paket_options = array();

   foreach ($query_jenis_paket as $row) {
       $jenis_paket_options[] = $row['nama_paket_ck'];
   }
   ?>

   var jenisPaketOptions = <?php echo json_encode($jenis_paket_options); ?>;

   document.addEventListener("DOMContentLoaded", function() {
       const tglMasukInput = document.querySelector("#tgl_order_msk");
       const tglKeluarInput = document.querySelector("#tgl_order_klr");
       const jenisPaketSelect = document.querySelector("#pilih_paket");

       tglMasukInput.addEventListener("change", function() {
           const tglMasuk = new Date(this.value);
           const tambahanHari = getTambahanHari(jenisPaketSelect.value);

           tglMasuk.setDate(tglMasuk.getDate() + tambahanHari);

           const tahun = tglMasuk.getFullYear();
           const bulan = String(tglMasuk.getMonth() + 1).padStart(2, "0");
           const tanggal = String(tglMasuk.getDate()).padStart(2, "0");

           const tglKeluar = `${tahun}-${bulan}-${tanggal}`;
           tglKeluarInput.value = tglKeluar;
       });

       function getTambahanHari(jenisPaket) {
           if (jenisPaket === jenisPaketOptions[0]) {
               return 2;
           } else if (jenisPaket === jenisPaketOptions[1]) {
               return 1;
           } else {
               return 0;
           }
       }
   });
</script>


<?php require_once('../../_footer.php') ?>