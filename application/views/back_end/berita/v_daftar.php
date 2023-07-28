<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $subtitle; ?></h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><?= $subtitle; ?></div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title"><?= $subtitle; ?></h2>
      <p class="section-lead">
        <?= $subtitle; ?>
      </p>

      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h4><?= $subtitle; ?></h4>
              <div class="float-right">
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="dataTable">
                  <thead>
                    <tr>
                      <th>
                        No
                      </th>
                      <th>Judul</th>
                      <th>Kategori</th>
                      <th>Jenis</th>
                      <th>Pembuat</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($berita as $key => $value) : ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value->judul_berita; ?></td>
                        <td><?= $value->nama_kategori; ?></td>
                        <td><?= $value->jenis_berita; ?></td>
                        <td><?= $value->nama; ?></td>
                        <?php if ($value->status_berita == "Publish") : ?>
                          <td><span class="badge badge-primary"><?= $value->status_berita; ?></span></td>
                        <?php elseif ($value->status_berita == "Pending") : ?>
                          <td><span class="badge badge-waring"><?= $value->status_berita; ?></span></td>
                        <?php else : ?>
                          <td><span class="badge badge-danger"><?= $value->status_berita; ?></span></td>
                        <?php endif; ?>
                        <td>
                          <a type="button" class="btn btn-warning" href="<?= base_url('berita/edit/' . $value->id_berita); ?>">
                            <i class="fas fa-fw fa-edit"></i>
                          </a>
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?= $value->id_berita; ?>"><i class="fas fa-trash"></i></button>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- hapus Modal -->
<?php
foreach ($berita as $key => $value) : ?>
  <div class="modal fade" id="hapus<?= $value->id_berita; ?>">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h6 class="modal-title mr-1">Menghapus Berita <h6 class="text-center badge badge-danger"><?= $value->judul_berita; ?></h6>
          </h6>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <form method="POST" action="<?= base_url('berita/hapus/' . $value->id_berita); ?>">
            <h5>Apakah Anda Yakin?</h5>
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-danger">Hapus</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>