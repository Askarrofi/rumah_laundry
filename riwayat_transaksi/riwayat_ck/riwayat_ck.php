<div class="card">
   <div class="card-title card-flex">
      <div class="card-col">
         <h2>Daftar Transaksi - Belum Dibayar</h2>	
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
                  <th class="sticky">Waktu Kerja</th>
                  <!-- <th class="sticky"></th>
                  <th class="sticky"></th>
                  <th class="sticky"></th>
                  <th class="sticky"></th> -->
                  <th class="sticky" style="text-align: center">Action</th>
               </tr>
            </thead>

            <tbody>
            <?php $cuci_komplit = query('SELECT * FROM tb_order_ck ORDER BY id_order_ck DESC'); $dry_clean = query('SELECT * FROM tb_order_dc ORDER BY id_order_dc DESC'); $cuci_satuan = query('SELECT * FROM tb_order_cs ORDER BY id_order_cs DESC');
                     if (!empty($cuci_komplit)) : ?>
                     <?php 
                        $no_ck = 1;
                        foreach($cuci_komplit as $ck) : ?>
                        <tr>
                           <td><?= $no_ck; ?></td>
                           <td><?= $ck['or_ck_number'] ?></td>
                           <!-- <td><?= $ck['tgl_masuk_ck'] ?></td> -->
                           <td><?= $ck['nama_pel_ck'] ?></td>
                           <td><?= $ck['jenis_paket_ck'] ?></td>
                           <td><?= $ck['wkt_krj_ck'] ?></td>
                           <!-- <td><?= $ck['berat_qty_ck'] . ' Kg' ?></td> -->
                           <td>
                              <a href="<?=url('detail_order/detail_ck/detail_order_ck.php?or_ck_number=')?><?=$ck['or_ck_number']?>" class="btn btn-detail">Detail</a>

                              <a href="<?=url('daftar_order/hapus_ck.php?or_ck_number=')?><?=$ck['or_ck_number']?>" onclick="return confirm('Yakin akan menghapus?');" class="btn btn-hapus">Hapus</a>

                              

                           </td>
                        </tr>
                        <?php $no_ck++ ?>
                     <?php endforeach; ?>

                        
                  <?php endif?>

                  <?php $dry_clean = query('SELECT * FROM tb_order_dc ORDER BY id_order_dc DESC');
                     if (!empty($dry_clean)) : ?>
                     <?php
                        $no_dc = 1;
                        foreach($dry_clean as $dc) : ?>
                           <tr>
                              <td><?= $no_dc ?></td>
                              <td><?= $dc['or_dc_number'] ?></td>
                              <!-- <td><?= $dc['tgl_masuk_dc'] ?></td> -->
                              <td><?= $dc['nama_pel_dc'] ?></td>
                              <td><?= $dc['jenis_paket_dc'] ?></td>
                              <td><?= $dc['wkt_krj_dc'] ?></td>
                              <!-- <td><?= $dc['berat_qty_dc'] . ' Kg' ?></td> -->
                              <td>
                                 <a href="<?=url('detail_order/detail_dc/detail_order_dc.php?or_dc_number=')?><?= $dc['or_dc_number'] ?>" class="btn btn-detail">Detail</a>

                                 <a href="<?=url('daftar_order/hapus_dc.php?or_dc_number=')?><?=$dc['or_dc_number']?>" onclick="return confirm('Yakin akan menghapus?');" class="btn btn-hapus">Hapus</a>
                              </td>
                           </tr>
                        <?php $no_dc++ ?>
                     <?php endforeach ?>

                     
                        
                  <?php endif ?>

                  <?php $cuci_satuan = query('SELECT * FROM tb_order_cs ORDER BY id_order_cs DESC');
                     if (!empty($cuci_satuan)) : ?>
                        <?php
                           $no_cs = 1;
                           foreach($cuci_satuan as $cs) : ?>
                              <tr>
                                 <td><?= $no_cs ?></td>
                                 <td><?= $cs['or_cs_number'] ?></td>
                                 <!-- <td><?= $cs['tgl_masuk_cs'] ?></td> -->
                                 <td><?= $cs['nama_pel_cs'] ?></td>
                                 <td><?= $cs['jenis_paket_cs'] ?></td>
                                 <td><?= $cs['wkt_krj_cs'] ?></td>
                                 <!-- <td><?= $cs['jml_pcs'] ?></td> -->
                                 <td>
                                    <a href="<?=url('detail_order/detail_cs/detail_order_cs.php?or_cs_number=')?><?=$cs['or_cs_number']?>" class="btn btn-detail">Detail</a>

                                    <a href="<?=url('daftar_order/hapus_cs.php?or_cs_number=')?><?=$cs['or_cs_number']?>" onclick="return confirm('Yakin akan menghapus?');" class="btn btn-hapus">Hapus</a>
                                 </td>
                              </tr>
                           <?php $no_cs++ ?>
                        <?php endforeach; ?>
                        
                        
                     <?php endif; ?>  
                         

            </tbody>
         </table>
      </div>
   </div>
</div>