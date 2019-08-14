 <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Features</li>
        <li class="breadcrumb-item">
            <a href="<?php echo base_url(); ?>menu/pendataanpengguna">User Management</a>
          </li>
          <li class="breadcrumb-item active">Hapus Pengguna</li>
      </ol>
          <div class="mb-0 mt-4">
            </div>
          <div class="card-columns">            
    </div>
</body>

 <h2>Hapus Data Pengguna</h2>
        <hr />
        <form method="post" action="<?php echo site_url('menu/pendataanpengguna/destroy'); ?>">
            <input type="hidden" name="iduser" value="<?=$user->iduser?>" />
            <table class="table table-hover">
                <tr>
                    <td>Nama Lengkap</td>
                    <td><?=$user->name?></td>
                    <td> </td>
                </tr>
                <tr>
                    <td>Jabatan </td>
                    <td><?=$user->rolename?></td>
                    <td> </td>
                </tr>
            </table>
        <hr />
                <p>
                    <td colspan="2"><strong>Apakah Anda Yakin Akan Menghapus Data?</strong></td>
                </p>
                <p>
                <button class="btn btn-primary btn-danger btn-sm" type="submit">Hapus</button>
        </form>
                <a class="btn btn-primary btn-sm" href="<?php echo site_url('menu/pendataanpengguna/')?>" role="submit">Cancel</a>
                </p>