 <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Features</li>
          <li class="breadcrumb-item active">User Management</li>
      </ol>
          <div class="mb-0 mt-4">
            </div>
          <div class="card-columns">            
    </div>
</body>

<form action="<?php echo base_url()?>menu/pendataanpengguna/cari" method="post">
    <div class="row">
        <div class="col-lg-8">
            <div class="input-group">
                <a class="btn btn-primary btn-rounded m-b-10 m-l-5" href="<?php echo site_url('menu/pendataanpengguna/create'); ?>" role="button" >Tambah Pengguna</button></a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="input-group input-group-rounded" >
                <input type="text" class="form-control" id="cari" name="cari" placeholder="Ketik nama / username">
                <span class="input-group-btn">
                    <button class="btn btn-primary btn-group-right" type="submit" value="cari">Cari</button>
                </span>
            </div>
        </div>
    </div>
    </form>
        <table id="myTable" class="table table-bordered table-striped">
            <thead class="thead-inverse">
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama Lengkap</th>
                <th class="text-center">Username</th>
                <th class="text-center">Password</th>
                <th class="text-center">Jabatan</th>
                <th class="text-center">Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php
                if (!empty($list_user)) {
                    $no = 0;
                    foreach ($list_user as $user) {
            ?>
 
                <tr>
                    <td class="text-center"><?=++$no?></td>
                    <td class="text-center"><?=$user->name?></td>
                    <td class="text-center"><?=$user->username?></td>
                    <td class="text-center"><?=$user->passwordreal?></td>
                    <td class="text-center"><?=$user->rolename?></td>
                    <td class="text-center">
                        <a class="btn btn-primary btn-success btn-sm" href="<?php echo site_url('menu/pendataanpengguna/edit/') . $user->iduser; ?>" role="button">Edit</a>
                        <a class="btn btn-primary btn-danger btn-sm" href="<?php echo site_url('menu/pendataanpengguna/delete/') . $user->iduser; ?>" role="button">Hapus</a>
                    </td>
                </tr>
 
            <?php
                    }
                }
            ?>
        </tbody>
        </table>
