<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <?php echo  $this->session->flashdata('alert_msg'); ?>
  <h1 class="page-header"><?php echo $judul; ?></h1>



 <form class="form-horizontal" action="<?php echo site_url('kelas/act_edit') ?>" method="POST">
  <div class="form-group">
  <input type="hidden" value="<?= $data_kelas->id_kelas ?>" name="id_kelas" readonly="readonly">
    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Nama" name="nama_kelas" value="<?= $data_kelas->nama_kelas ?>">
    </div>
    </div>


  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <a href="<?= site_url('kelas') ?>" class="btn btn-default">Kembali</a>
      <button type="submit" class="btn btn-success">Simpan</button>
    </div>
  </div>
</form>

</div>