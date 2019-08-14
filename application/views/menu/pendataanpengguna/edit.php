 <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Features</li>
        <li class="breadcrumb-item">
            <a href="<?php echo base_url(); ?>menu/pendataanpengguna">User Management</a>
          </li>
          <li class="breadcrumb-item active">Edit Pengguna</li>
      </ol>
          <div class="mb-0 mt-4">
            </div>
          <div class="card-columns">            
    </div>
</body>

<h2>Edit Data Pengguna</h2>
        <hr />
        <form method="post" action="<?php echo site_url('menu/pendataanpengguna/update'); ?>">
            <input type="hidden" name="iduser" value="<?=$user->iduser?>" />
            <table>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Nama</label>
                <div class="col-4">
                    <input class="form-control" type="text" name="name" value="<?=$user->name?>" required  >
                </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Username</label>
                <div class="col-4">
                    <input class="form-control" type="text" name="username" value="<?=$user->username?>" required >
                </div>
        </div>
        <div class="form-group row">
            <label  class="col-2 col-form-label">Password</label>
                <div class="col-4">
                    <input class="form-control" type="text" name="password" value="<?=$user->passwordreal?>" >
                </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-2 col-form-label">Jabatan</label>
                <div class="col-4">
                    <select name="role" class="col-12 col-form-label" required>
                    <option value="<?=$user->role?>"><?=$user->rolename?></option>
                    <option value="0">--------------</option>
                <?php
                foreach ($role as $role) {
                    echo '<option value="'.$role->idrole.'">'.$role->rolename.'</option>';
                }
                ?>
                </select>                    
                </div>
        </div>
            <tr>
                <td colspan="2"><button type="submit" class="btn btn-primary">Update</button></td>
            </tr>
            </table>
        </form>

