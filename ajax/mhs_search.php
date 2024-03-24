<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

if (isset($_GET['q'])) {
  $keyword = $_GET['q'];
} else {
  $keyword = '';
}

require '../function.php';


// Pagination Config
$jumlahDataPerHalaman = 10;
$halamanAktif = (isset($_GET['p'])) ? $_GET['p'] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR nrp LIKE '%$keyword%' OR email LIKE '%$keyword%' OR jurusan LIKE '%$keyword%' LIMIT $awalData, $jumlahDataPerHalaman";

$jumlahData = count(query("SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR nrp LIKE '%$keyword%' OR email LIKE '%$keyword%' OR jurusan LIKE '%$keyword%'"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);

// Query Config
// $mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");
$mahasiswa = query($query);


?>

<script>
  $(document).ready(function() {
    // Navigation Button
    $('#navigation ul li button').each(function(i, el) {
      $(el).click(function(e) {
        e.preventDefault();
        $("#main").load(`ajax/mhs_search.php?p=${this.dataset.page}&q=${$("#searchMhs").val()}`)
      });
    })

    // Delete Button
    $('table tbody #deleteBtn').each(function(i, el) {
      $(el).click(function(e) {
        e.preventDefault();
        const id = this.dataset.id
        $_AWN.confirm('Are You Sure?', function() {
          // Press OK
          const promise = fetch(`ajax/mhs_delete.php?id=${id}`).then(e => e.json())
          $_AWN.asyncBlock(promise,
            resp => {
              if (resp.hasOwnProperty('error')) {
                $_AWN.alert("Terjadi Kesalahan Pada Sistem, Data Gagal Dihapus")
              } else if (resp.status == 0) {
                $_AWN.alert(resp.msg)
              } else {
                $_AWN.success(resp.msg)
                $("#main").load("ajax/mhs_search.php?")
              }
            }
          )
        })
      });
    })

    // Edit Button
  });
</script>

<div class="table-responsive">
  <table class="table table-striped align-middle">
    <thead class="">
      <tr>
        <th>#</th>
        <th>Action</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
      </tr>
    </thead>
    <tbody class="">
      <?php $i = 1 ?>
      <?php foreach ($mahasiswa as $m) : ?>
        <tr>
          <td><?= $i ?></td>
          <td>
            <div class="d-flex">
              <button id="editBtn" class="btn btn-sm btn-primary me-1" data-id="<?= $m['id'] ?>">
                <i class="ri-file-edit-line"></i></button>
              <button id="deleteBtn" class="btn btn-sm btn-danger" data-id="<?= $m['id'] ?>">
                <i class="ri-delete-bin-2-line"></i></button>
            </div>
          </td>
          <td><img width="40" src="<?= $m['gambar'] ?>"></td>
          <td><?= $m['nrp'] ?></td>
          <td><?= $m['nama'] ?></td>
          <td><?= $m['email'] ?></td>
          <td><?= $m['jurusan'] ?></td>
        </tr>
        <?php $i++ ?>
      <?php endforeach ?>
    </tbody>
  </table>


  <nav id="navigation">
    <ul class="pagination justify-content-center">
      <?php if ($halamanAktif > 1) : ?>
        <li class="page-item"><button class="page-link" data-page="<?= ($halamanAktif - 1) ?>" aria-label="Previous"><span aria-hidden="true">&laquo;</span></button></li>
      <?php else : ?>
        <li class="page-item"><button class="page-link opacity-50 disabled" data-page="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></button></li>
      <?php endif; ?>

      <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if ($i == $halamanAktif) : ?>
          <li class="page-item"><button class="page-link active" data-page="<?= $i ?>" disabled><?= $i; ?></button></li>
        <?php else : ?>
          <li class="page-item"><button class="page-link" data-page="<?= $i ?>"><?= $i; ?></button></li>
        <?php endif; ?>
      <?php endfor; ?>

      <?php if ($halamanAktif < $jumlahHalaman) : ?>
        <li class="page-item"><button class="page-link" data-page="<?= ($halamanAktif + 1) ?>" aria-label="Next"><span aria-hidden="true">&raquo;</span></button></li>
      <?php else : ?>
        <li class="page-item"><button class="page-link opacity-50 disabled" data-page="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></button></li>
      <?php endif; ?>
    </ul>
  </nav>
</div>

<div class="modal fade" id="editMhsModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ubah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"></div>
    </div>
  </div>
</div>

<script>
  $('table tbody #editBtn').each(function(i, el) {
    $(el).click(function(e) {
      e.preventDefault();
      const id = this.dataset.id;
      $('#editMhsModal .modal-body').load(`ajax/mhs_edit.php?id=${id}`, function() {
        new bootstrap.Modal(document.querySelector('#editMhsModal')).show()
      });
    });
  })
</script>