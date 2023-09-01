<div class="card">
   <div class="card-title card-flex">
      <div class="card-col">
         <h2>Daftar Transaksi - Sudah Dibayar</h2>	
      </div>
   </div>
   
   <div class="card-body">
      <div class="tabel-kontainer">
         <table class="tabel-transaksi">
            <thead>
               <tr>
                  <th class="sticky">No</th>
                  <th class="sticky">No. Order</th>
                  <th class="sticky" width="10%">Nama</th>
                  <th class="sticky">Jenis Paket</th>
                  <th class="sticky">Jumlah</th>
                  <th class="sticky">Total</th>
                  <th class="sticky">Uang Bayar</th>
                  <th class="sticky">Kembalian</th>
                  <th class="sticky">Status</th>
                  <th class="sticky" style="text-align: center">Action</th>
               </tr>
            </thead>

            <tbody>

            <?php if (!empty($query_ck)) : ?>               
                  <?php $i = 1; ?>
                  <?php foreach($query_ck as $data_ck) : ?>
                     <tr>
                        <td><?=$i?></td>
                        <td><?=$data_ck['or_number']?></td>
                        <td style="max-width: 150px; overflow:hidden;"><?=$data_ck['pelanggan']?></td>
                        <td><?=$data_ck['j_paket']?></td>
                        <td><?=$data_ck['berat'] . " Kg"?></td>
                        <td><?="Rp. " . $data_ck['total']?></td>
                        <td><?="Rp. " . $data_ck['nominal_byr']?></td>
                        <td><?="Rp. " . $data_ck['kembalian']?></td>
                        <td><span class="success"><?=$data_ck['status']?></span></td>
                        <td align="center">
                           <a href="<?=url('riwayat_transaksi/riwayat_ck/detail_ck.php')?>?id_ck=<?=$data_ck['id_ck']?>" class="btn btn-edit">Detail</a><br/>
                           <?php
                              if (isset($_SESSION['level']) && $_SESSION['level'] == 'Admin') {
                                    echo '<a href="' . url('riwayat_transaksi/riwayat_ck/cetak_info.php') . '?id_ck=' . $data_ck['id_ck'] . '" class="btn btn-hapus">Cetak Bukti</a>';
                              }
                           ?>
                        </td>
                     </tr>
                     <?php $i++?>
                  <?php endforeach ?>
                  
               <?php endif?>

               <?php if (!empty($query_dc)) : ?>
                  <?php $i = 1; 
                     foreach($query_dc as $data_dc) : ?>
                     <tr>
                        <td><?=$i?></td>
                        <td><?=$data_dc['or_number']?></td>
                        <td style="max-width: 150px; overflow:hidden;"><?=$data_dc['pelanggan']?></td>
                        <td><?=$data_dc['j_paket']?></td>
                        <td><?=$data_dc['berat'] . " Kg"?></td>
                        <td><?="Rp. " . $data_dc['total']?></td>
                        <td><?="Rp. " . $data_dc['nominal_byr']?></td>
                        <td><?="Rp. " . $data_dc['kembalian']?></td>
                        <td><span class="success"><?=$data_dc['status']?></span></td>
                        <td align="center">
                           <a href="<?=url('riwayat_transaksi/riwayat_dc/detail_dc.php')?>?id_dc=<?=$data_dc['id_dc']?>" class="btn btn-edit">Detail</a><br/>
                           <?php
                              if (isset($_SESSION['level']) && $_SESSION['level'] == 'Admin') {
                                    echo '<a href="' . url('riwayat_transaksi/riwayat_ck/cetak_info.php') . '?id_ck=' . $data_ck['id_ck'] . '" class="btn btn-hapus">Cetak Bukti</a>';
                              }
                           ?>
                        </td>
                     </tr>
                     <?php $i++?>
                  <?php endforeach ?>

               <?php endif ?>

               <?php if (!empty($query_cs)) : ?>  
                  <?php $i = 1; ?>
                  <?php foreach($query_cs as $data_cs) : ?>
                     <tr>
                        <td><?=$i?></td>
                        <td><?=$data_cs['or_number']?></td>
                        <td style="max-width: 150px; overflow:hidden;"><?=$data_cs['pelanggan']?></td>
                        <td><?=$data_cs['j_paket']?></td>
                        <td><?=$data_cs['jml_pcs'] . " (Pcs)"?></td>
                        <td><?="Rp. " . $data_cs['total']?></td>
                        <td><?="Rp. " . $data_cs['nominal_byr']?></td>
                        <td><?="Rp. " . $data_cs['kembalian']?></td>
                        <td><span class="success"><?=$data_cs['status']?></span></td>
                        <td align="center">
                           <a href="<?=url('riwayat_transaksi/riwayat_cs/detail_cs.php')?>?id_cs=<?=$data_cs['id_cs']?>" class="btn btn-edit">Detail</a><br/>
                           <?php
                              if (isset($_SESSION['level']) && $_SESSION['level'] == 'Admin') {
                                    echo '<a href="' . url('riwayat_transaksi/riwayat_ck/cetak_info.php') . '?id_ck=' . $data_ck['id_ck'] . '" class="btn btn-hapus">Cetak Bukti</a>';
                              }
                           ?>
                        </td>
                     </tr>
                     <?php $i++?>
                  <?php endforeach ?>
                  
                  <?php else : ?>

               <?php endif ?>

            </tbody>
         </table>
      </div>
   </div>
</div>