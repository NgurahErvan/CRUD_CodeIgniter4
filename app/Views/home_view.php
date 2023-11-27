<div class="container mt-5 pt-5">
  <a href="<?= base_url('tambah'); ?>" class="btn btn-success mb-3">
    <i class="fas fa-user-plus me-2"></i>Tambah pegawai
  </a>
  <div class="card">
    <div class="card-header">
      <h5 class="card-title">Data pegawai</h5>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
          <thead>
            <tr class="text-center">
            <th>No</th>
              <th>id.</th>
              <th>Nama pegawai</th>
              <th>No. Telepon</th>
              <th>Umur</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($pegawai as $row) : ?>
              <tr>
                <td class="text-center"><?= $no++; ?></td>
                <td><?= $row['id']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['no_telp']; ?></td>
                <td><?= $row['Umur']; ?></td>
                <td class="text-center">
                  <a href="<?= base_url('edit/' . $row['id']); ?>" class="btn btn-primary btn-sm">
                    <i class="fas fa-user-edit me-2"></i>Edit
                  </a>
                  <button class="btn btn-danger btn-sm" onclick="confirmDelete('<?= $row['id']; ?>')">
                    <i class="fas fa-user-times me-2"></i>Hapus
                  </button>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>