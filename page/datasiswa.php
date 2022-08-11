<table class="table">
  <h4 class="mb-3">#Data Siswa</h4>
  <a href="#" class="btn btn-primary btn-sm col-sm-3" data-bs-toggle="modal" data-bs-target="#datasekolah">Tambah Data</a>
  <thead>
    <tr class="text-center">
      <th scope="col">#</th>
      <th scope="col">nisn</th>
      <th scope="col">Nama Siswa</th>
      <th scope="col">Jk</th>
      <th scope="colf">Alamat</th>
      <th scope="col">Agama</th>
      <th scope="col">No HP</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td class="text-center"><a href="#">Edit</a> | <a href="#">Hapus</a></td>
      <td>0077447</td>
      <td>Asikoh</td>
      <td>Perempuan</td>
      <td>Islam</td>
      <td>0812345678</td>
    </tr>

  </tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="datasekolah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Data Sekolah</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


      <!--from tambah data  -->
      <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NISN</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama siswa</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <form>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NO Hp</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Agama</label>
          <select class="form-select" aria-label="Default select example">
            <option value="1">Islam</option>
            <option value="2">Kristen</option>
            <option value="3">Budha</option>
          </select>
  </div>
  <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
          <select class="form-select" aria-label="Default select example">
            <option value="1">Perempuan</option>
            <option value="2">laki-laki</option>
          </select>
  </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>