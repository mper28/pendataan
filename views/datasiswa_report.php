<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Laporan Data</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th width="17%">No Incident</th>
                                <th>Nama Costumer</th>
                                <th>Induk Gamas</th>
                                <th>TTR</th>
                                <th width="14%">SID</center></th>
                                <th width="14%">Date</center></th>
                                <th width="15%">Penyebab</th>
                                <th>Foto</th><th>AKSI</th>
                                <th>Solusi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM datasiswa";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									<td><?= $data['nis'] ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['kelas'] ?></td>
                                    <td><?= $data['Jurusan'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['thn_masuk'] ?></td>
									<td><?= $data['asal_sekolah'] ?></td>
									<td><?= $data['agama'] ?></td>
                                    <td><?php echo "<img src='foto/".$data['foto']."' width='100px' height='100px'/>"?></td>
                                                   
                                    <td>
                                        <a href="report/datasiswa_satu.php?nis=<?= $data['nis'] ?>" target="_blank" class="btn btn-info btn-xs">
                                            <span class="fa fa-print"></span>
                                        </a>

                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="9">
                                    <a href="report/datasiswa_semua.php" target="_blank" class="btn btn-info btn-sm">
                                        <span class="fa fa_print"></span> Cetak Semua Data 

                                    </a>
                                  
                                    <a href="#cetak_pertahun" class="btn btn-info btn-sm">
                                        <span class="fa fa_print"></span> Cetak Pertahun

                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>



<div id="cetak_pertahun" class="modalDialog">
    <div>
        <a href="#" title="Close" class="close">X</a>

        <form  target="_blank" action="report/datasiswa_pertahun.php" method="post">
        <h4>Pilih tahun</h4>
        <select name="thn_masuk" class="form-control">
          <?php
            for ($i=substr(date("d-m-Y"),6,4); $i > substr(date("d-m-Y"),6,4)-7; $i--) { ?>
              <option value="<?=$i?>"> <?=$i?> </option>
          <?php  }
          ?>
        </select>

        <button type="submit">OK</button>
        </form>
    </div>
</div>
