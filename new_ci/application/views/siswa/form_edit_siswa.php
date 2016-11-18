<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <?php echo  $this->session->flashdata('alert_msg'); ?>
  <h1 class="page-header"><?php echo $judul; ?></h1>



 <form class="form-horizontal" action="<?php echo site_url('siswa/act_edit') ?>" method="POST">
  <div class="form-group">
  <input type="hidden" value="<?= $data_siswa->id ?>" name="id" readonly="readonly">
    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Nama" name="nama" value="<?= $data_siswa->nama ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Alamat" name="alamat" value="<?= $data_siswa->alamat ?>">
    </div>
  </div>

   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Kelas</label>
    <div class="col-sm-10">
     <select name="id_kelas" class="form-control">
     <option value="">-----Tambah Kelas-------</option>
       <?php foreach ($kelas as $key => $value) { ?>
      <?php 
        if ($value->id_kelas == $data_siswa->id_kelas) {
          $selected = 'selected';
        }else{
          $selected = '';
        }
       ?>
         <option value="<?= $value->id_kelas ?>" <?= $selected ?> ><?= $value->nama_kelas ?></option>
       <?php } ?>
     </select>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <a href="<?= site_url('siswa') ?>" class="btn btn-default">Kembali</a>
      <button type="submit" class="btn btn-success">Simpan</button>
    </div>
  </div>
</form>

</div>