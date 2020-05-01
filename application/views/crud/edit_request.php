     <!-- head -->
     <div class="card shadow mb-4">
     <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Ganti Status Request</h6>
    <br>
    </div>
            </div>

            <!-- body -->
            <div class="card-body">
            <?php foreach($request as $baris){ ?>
              <form action="<?php echo base_url('request/update');?>" method="post" class="needs-validation" novalidate>
              <input type="hidden" name="id_request" value="<?php echo $baris->id_request; ?>">
                <div class="form-row">
                  <div class="col">
                    <label for="nama_lengkap">Nama_Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" placeholder="Masukkan Nama"  name="nama_lengkap"value="<?php echo $baris->nama_lengkap; ?>" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Nama Lengkap terlebih dahulu
                    </div>
                  </div>
                  <div class="col">
                    <label for="email">Email</label>
                    <input type="text" class="form-control"  id="email" placeholder="Masukkan Email" name="email" value="<?php echo $baris->email; ?>" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Email terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="kota_tujuan">Kota Tujuan</label>
                    <input type="text" class="form-control" id="kota_tujuan"  placeholder="Masukkan Kota Tujuan" name="kota_tujuan" value="<?php echo $baris->kota_tujuan; ?>"required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Kota Tujuan terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="jumlah_orang">Jumlah Orang</label>
                    <input type="text" class="form-control"  id="jumlah_orang" placeholder="Jumlah orang" name="jumlah_orang" value="<?php echo $baris->jumlah_orang; ?>"required>

                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Jumlah Orang terlebih dahulu
                    </div>
                  </div>
                  <div class="col">
                    <label for="lama_hari">Lama Hari</label>
                    <input type="text" class="form-control"  id="lama_hari"  name="lama_hari" value="<?php echo $baris->lama_hari; ?>"required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Lama Hari terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="tgl_berangkat">Tgl. Berangkat</label>
                    <input type="text" class="form-control"  id="tgl_berangkat"  name="tgl_berangkat" value="<?php echo $baris->tgl_berangkat; ?>"required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Tgl. Berangkat terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="tujuan_wisata">Tujuan Wisata</label>
                    <input name="tujuan_wisata" type="text" class="form-control form-control-user" id="exampleTujuanWisata" placeholder="Tempat mana saja yang ingin anda kunjungi"  value="<?php echo $baris->tujuan_wisata; ?>" require>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Tujuan Wisata terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="tiket">Sudah memiliki tiket pesawat/kereta ?</label>
                    <input type="text" class="form-control"  id="tiket"  name="tiket" value="<?php echo $baris->tiket; ?>"required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Tiket terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="penginapan">Jenis penginapan yang diinginkan</label>
                    <input type="text" class="form-control"  id="penginapan"  name="penginapan" value="<?php echo $baris->penginapan; ?>"required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Penginapan terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="fasilitas">Jenis Fasilitas</label>
                    <input type="text" class="form-control"  id="fasilitas"  name="fasilitas" value="<?php echo $baris->fasilitas; ?>"required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Pilih Kelas Anda Terlebih Dahulu
                    </div>
                  </div>
                  <div class="col">
                    <label for="status" >Status</label>
                    <select name="status" class="custom-select" id="status"value="<?php echo $baris->status; ?>" required >
                      <option value="">Pilih Status</option>
                      <option value="Menunggu">Menunggu</option>
                      <option value="Deal_Paket">Deal Paket</option>
                      <option value="Lunas">Lunas</option>
                      <option value="Telah_tour">Telah Tour</option>
                    </select>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Pilih Kelas Anda Terlebih Dahulu
                    </div>
                  </div>
                </div>
                <!-- footer -->
                <div class="modal-footer">
                  <button name="update" type="submit" value="update" class="btn btn-success"
                    onclick="return confirm('Anda yakin ingin mengupdate data?');">Update</button>
                </div>

              </form><?php } ?>
            </div>


          </div>
        </div>
      </div>
      <!-- modal akhir -->