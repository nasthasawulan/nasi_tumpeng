<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url(); ?>/menu">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url(); ?>/meja">Meja</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url(); ?>/pesanan">Pesanan  <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pembayaran</a>
          </li>
        </ul>
        <?php echo $this->session->userdata('nama_pegawai') ?>
        -
        <?php echo $this->session->userdata('jabatan') ?>
        <?php echo form_open("login/logout") ?>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
        <?php echo form_close() ?>
      </div>
    </nav>
    <table>

    </table>
    List Menu
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">nama menu</td>
          <th scope="col">harga</td>
          <th scope="col">stok</td>
          <th scope="col">aksi</td>
        </tr>
      </thead>
      <?php foreach ($data as $value): ?>
        <tr>
          <td scope="row"><?php echo $value->nama_menu ?></td>
          <td><?php echo $value->harga_menu ?></td>
          <td><?php echo $value->stok_menu ?></td>
          <?php
          if (isset($id)) {?>
            <td><a class="btn btn-primary" href="<?php echo base_url() ?>index.php/pesanan/view_pilih_menu?kd=<?php echo $value->kd_menu?>&id=<?php echo $id ?>" role="button">Pilih</a></td>
          <?php } else {?>
            <td><a class="btn btn-primary" href="<?php echo base_url() ?>index.php/pesanan/view_pilih_menu?kd=<?php echo $value->kd_menu?>" role="button">Pilih</a></td>
          <?php }
          ?>
        </tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>
