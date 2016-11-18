 <link rel="stylesheet" href="<?php echo base_url('assets') ?>/datatables/css/dataTables.bootstrap.css">

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <?php echo  $this->session->flashdata('alert_msg'); ?>
  <h1 class="page-header"><?php echo $judul; ?></h1>

  <a href="<?php echo site_url('kelas/add_kelas') ?>" class="btn btn-primary">Tambah kelas</a>
  <div>&nbsp </div>
  
  <div class="table-responsive">
    <table class="table table-striped" id="tableSaya">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Aksi</th>
          
         
        </tr>
      </thead>
      <tbody>
      <?php foreach ($data_kelas as $key => $value) { ?>     
        <tr>
          <td><?= $value->id_kelas ?></td>
          <td><?= $value->nama_kelas ?></td>
         

          <td>
            <a href="<?= site_url('kelas/edit/'.$value->id_kelas) ?>" class="btn btn-info">Edit</a>
            <a href="<?= site_url('kelas/hapus/'.$value->id_kelas) ?>" class="btn btn-danger"   onclick="return confirm('Are you sure you want to delete this item?');" >Hapus</a>

          </td>          
        </tr>
         <?php } ?>
      </tbody>
    </table>
  </div>
</div>


    <script src="<?php echo base_url('assets') ?>/datatables/js/jquery.dataTables.js"></script>

    <script>
      $(document).ready(function() {
        $('#tableSaya').dataTable();
      });
    </script>