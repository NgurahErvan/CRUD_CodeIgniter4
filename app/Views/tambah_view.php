<div class="container mt-5 pt-5">
  <a href="<?= base_url(); ?>" class="btn btn-secondary mb-3">
    <i class="fas fa-arrow-left me-2"></i>Kembali
  </a>
  <div class="card">
    <div class="card-header">
      <h5 class="card-title">Tambah pegawai</h5>
    </div>
    <div class="card-body">
      <form method="post" action="<?php echo base_url('tambah_proses'); ?>">
      <div class="mb-3">
          <label for="id" class="form-label">id</label>
          <input type="int" class="form-control" id="id" name="id" required>
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama pegawai</label>
          <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
          <label for="no_telp" class="form-label">Nomor Telepon</label>
          <input type="text" class="form-control" id="no_telp" name="no_telp" required>
        </div>
        <div class="mb-3">
          <label for="Umur" class="form-label">Umur</label>
          <input type="int" class="form-control" id="Umur" name="Umur" required>
        </div>
        <button type="submit" class="btn btn-primary">
          <i class="fas fa-save me-2"></i>Simpan
        </button>
      </form>
    </div>
  </div>
</div>