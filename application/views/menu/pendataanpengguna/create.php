<!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Features</li>
          <li class="breadcrumb-item">
            <a href="<?php echo base_url(); ?>menu/pendataanpengguna">User Management</a>
          </li>
          <li class="breadcrumb-item active">Tambah Pengguna</li>
      </ol>
          <div class="mb-0 mt-4">
            </div>
          <div class="card-columns">            
    </div>
</body>

<h1>Masukan Data Pengguna Baru</h1>
        <hr />
        <?php echo form_open('menu/pendataanpengguna/store'); ?>
            <table>
                    <font color="red"><?php
                    if($this->session->flashdata('sukses')) {
                    echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';}
                    echo validation_errors('<p class="warning" style="margin: 10px 20px;">','</p>');
                    ?></font>
        <div class="form-group row">
            <label class="col-2 col-form-label">Nama Lengkap</label>
                <div class="col-4">
                    <input class="form-control" type="text" name="name" placeholder="Nama Lengkap" required>
                </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Username</label>
                <div class="col-4">
                    <input class="form-control" type="text" name="username" placeholder="Masukan Username" required>
                </div>
        </div>
        <div class="form-group row">
            <label  class="col-2 col-form-label">Password</label>
                <div class="col-4">
                    <input class="form-control" type="password" name="password" placeholder="Masukan Password" required>
                </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-2 col-form-label">Jabatan</label>
                <div class="col-4">
                    <select name="role" class="col-12 col-form-label" required>
                <?php
                foreach ($role as $role) {
                    echo '<option value="'.$role->idrole.'">'.$role->rolename.'</option>';
                }
                ?>
                </select>                    
                </div>
        </div>
            <div>
                <td colspan="2"><button type="submit" class="btn btn-primary">Tambah</button></td>
            </div>
            </table>
        </form>