<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <?php echo  $this->session->flashdata('alert_msg'); ?>
  <h1 class="page-header"><?php echo $judul; ?></h1>



 <form class="form-horizontal" action="<?php echo site_url('nilai/act_tambah') ?>" method="POST">
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
     <select name="id_siswa" id="id_siswa" class="form-control">
     <option value="">------Nama Siswa------</option>
       <?php foreach ($siswa as $key => $value) { ?>
         <option value="<?= $value->id ?>"><?= $value->nama ?></option>
       <?php } ?>
     </select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Mapel</label>
    <div class="col-sm-10">
     <select name="id_mapel" id="id_mapel" class="form-control">
     <option value="">------Mata Pelajaran------</option>
       <?php foreach ($mapel as $key => $value) { ?>
         <option value="<?= $value->id_mapel ?>"><?= $value->nama_mapel ?></option>
       <?php } ?>
     </select>
    </div>
  </div>



  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Nilai</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Nilai" name="total_nilai">
    </div>
  </div>

  

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <a href="<?= site_url('nilai') ?>" class="btn btn-default">Kembali</a>
      <button type="submit" class="btn btn-success">Simpan</button>
    </div>
  </div>
</form>

</div>