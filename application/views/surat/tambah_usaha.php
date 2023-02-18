<div class="content-wrapper">
  <section class="content">
    <div class="box box-info">
      <div class="box-header">

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <h4 style="text-align:center"><b>TAMBAH SURAT KETERANGAN USAHA</b></h4><hr>
              </div>

              <div class="box-body">

                <?php
if ($this->session->flashdata('sukses')) {
	?>
                 <div class="callout callout-success">
                  <p style="font-size:14px">
                    <i class="fa fa-check"></i> <?php echo $this->session->flashdata('sukses'); ?>
                  </p>
                </div>
                <?php
}
?>

              <form action="<?php echo base_url('surat/usaha/tambah'); ?>" method="post">

                <div class="card-body">
                  <div class="form-group">
                    <label>NIK</label><a href="<?php echo base_url(); ?>penduduk/tambah/" class="btn btn-sm btn-primary pull-right">Tambah Penduduk</a><br /><br />
                      <select name="nik" class="form-control" id="nama" required>
						<?php
foreach ($penduduk as $penduduk):
?>
						<option value="<?php echo $penduduk->nik; ?>"><?php echo $penduduk->nik; ?> - <?php echo $penduduk->nama; ?></option>
						<?php
endforeach;
?>
					  </select>
                  </div>
				  <div class="form-group">
                    <label>Nama Usaha</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Usaha" required />
                  </div>
				  <div class="form-group">
                    <label>Sejak</label>
                    <input type="text" name="sejak" class="form-control" placeholder="Sejak" required />
                  </div>
                  <div class="form-group">
                    <label>Tanda Tangan</label>
                      <select name="pejabat" class="form-control" required>
						<?php
foreach ($pejabat as $data_pejabat):
?>
						<option value="<?php echo $data_pejabat->id_pejabat; ?>"><?php echo $data_pejabat->nama_pejabat; ?></option>
						<?php
endforeach;
?>
					  </select>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="tambah_usaha" class="btn btn-success" value="Simpan">
                    <a href="<?php echo base_url('surat/usaha/'); ?>" class="btn btn-danger">Batal</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</div>