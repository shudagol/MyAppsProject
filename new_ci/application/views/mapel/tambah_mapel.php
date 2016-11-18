<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <?php echo  $this->session->flashdata('alert_msg'); ?>
  <h1 class="page-header"><?php echo $judul; ?></h1>



 <form class="form-horizontal" action="<?php echo site_url('mapel/act_tambah') ?>" method="POST">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nama Mapel</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Matapelajaran" name="nama_mapel">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">guru</label>
    <div class="col-sm-10">
     <select name="id_guru" id="guru" class="form-control">
     <option value="">------Pilih guru------</option>
       <?php foreach ($guru as $key => $value) { ?>
         <option value="<?= $value->id_guru ?>"><?= $value->nama_guru ?></option>
       <?php } ?>
     </select>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <a href="<?= site_url('mapel') ?>" class="btn btn-default">Kembali</a>
      <button type="submit" class="btn btn-success">Simpan</button>
    </div>
  </div>
</form>

</div>