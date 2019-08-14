 <!-- Breadcrumbs-->
      <ol class="breadcrumb">
          <li class="breadcrumb-item">Filter Order</li>
          <li class="breadcrumb-item">
              <a href="<?php echo base_url(); ?>menu/produkselesai">Finish Order</a>
          </li>
          <li class="breadcrumb-item active">Edit Order</li>
      </ol>
          <div class="mb-0 mt-4">
            </div>
          <div class="card-columns">            
    </div>
</body>

<h2>Ubah Data Order</h2>
<form method="post" action="<?php echo site_url('menu/produkselesai/update'); ?>">
    <form method="post" action="<?php echo site_url('menu/produkselesai/update'); ?>">
            <input type="hidden" name="idorder" value="<?=$user->idorder?>" >
            <table>
            <table>
        <div class="form-group row">
            <label class="col-2 col-form-label">Tanggal</label>
                <div class="col-4">
                    <input class="form-control" type="date" name="date" value="<?=$user->date?>" required >
                </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Pelanggan</label>
                <div class="col-4">
                    <input class="form-control" type="text" name="customer" value="<?=$user->customer?>" required>
                </div>
        </div>
        <div class="form-group row">
            <label  class="col-2 col-form-label">Artikel</label>
                <div class="col-4">
                    <input class="form-control" type="text" name="article" value="<?=$user->article?>" required >
                </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Telepon</label>
                <div class="col-4">
                    <input class="form-control" type="text" name="phone" value="<?=$user->phone?>" required >
                </div>
        </div>
        <div class="form-group row">
            <label  class="col-2 col-form-label">Email</label>
                <div class="col-4">
                    <input class="form-control" type="email" name="email" value="<?=$user->email?>" required>
                </div>
        </div>
        <div class="form-group row">
            <label  class="col-2 col-form-label">Manual</label>
                <div class="col-4">
                    <input class="form-control" type="text" name="manual" value="<?=$user->manual?>" required >
                </div>
        </div>
        <div class="form-group row">
            <label  class="col-2 col-form-label">DTG</label>
                <div class="col-4">
                    <input class="form-control" type="text" name="dtg" value="<?=$user->dtg?>" required >
                </div>
        </div>
        <div class="form-group row">
            <label  class="col-2 col-form-label">Hanya Sablon</label>
                <div class="col-4">
                    <input class="form-control" type="text" name="onlysablon" value="<?=$user->onlysablon?>" required >
                </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-2 col-form-label">Marketing</label>
                <div class="col-4">
                    <select name="marketing" class="col-12 col-form-label" required>
                    <option value="<?=$user->iduser?>"><?=$user->name?></option>
                    <option value="0">--------------</option>
                <?php
                foreach ($list_user as $list_user) {
                    echo '<option value="'.$list_user->iduser.'">'.$list_user->name.'</option>';
                }
                ?>
                </select>                    
                </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-2 col-form-label">Status</label>
                <div class="col-4">
                    <select name="status" class="col-12 col-form-label" required>
                    <option value="<?=$user->idstatus?>"><?=$user->statusname?></option>
                    <option value="0">--------------</option>
                <?php
                foreach ($list_status as $status) {
                    echo '<option value="'.$status->idstatus.'">'.$status->statusname.'</option>';
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