<div class="col-lg-8">
	<div class="well bs-component">

		<form class="form-horizontal" action="<?php echo $GLOBALS['alamat'] ?>kategori/tambah" method="POST">

			<div class="form-group">
				<label for="kategori" class="col-lg-2 control-label" >Kategori</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" id="" name="kategori" placeholder="masukan nama siswa" >
				</div>
			</div>
			<div class="col-md-8 control-label"></div>
			<button type="submit" class="btn btn-primary">Tambah</button>
			<button type="reset" class="btn btn-default">reset</button>
		</form>
	</div>


	<table class="table table-striped table-hover ">
		<thead>
			<tr class='info'>
				<th>No</th>
				<th>Nama Kategori</th>
				
				<th>Aksi</th>

			</tr>
		</thead>
		<tbody>

			<tr>
				
				<td></td>
				<td></td>
				<td>
				<a href="edit.php?id=<?php echo $data['id']; ?>&aksi=edit" style="text-decoration:none;"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp &nbsp &nbsp &nbsp </a>
				<a href="siswa_manager.php?id=<?php echo $data['id']; ?>&aksi=hapus" style="text-decoration:none;"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
			</tr>
		</tbody>
	</table>