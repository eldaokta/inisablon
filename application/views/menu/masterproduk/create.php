 <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Features</li>
          <li class="breadcrumb-item">
            <a href="<?php echo base_url(); ?>menu/masterproduk">All Order</a>
          </li>
          <li class="breadcrumb-item active">Tambah Order</li>
      </ol>
          <div class="mb-0 mt-4">
            </div>
          <div class="card-columns">            
    </div>
</body>

<h1>Masukan Data Order Baru</h1>
        <hr />
        <form method="post" action="<?php echo site_url('menu/masterproduk/store'); ?>">
            <table>
        <div class="form-group row">
            <label class="col-2 col-form-label">Tanggal</label>
                <div class="col-4">
                    <input class="form-control" type="date" name="date" required>
                </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label">Pelanggan</label>
                <div class="col-4">
                    <input class="form-control" type="text" name="customer" placeholder="Masukan Nama Pelanggan" required>
                </div>
        </div>
        <div class="form-group row">
            <label  class="col-2 col-form-label">Artikel</label>
                <div class="col-4">
                    <input class="form-control" type="text" name="article" placeholder="Masukan Artikel" required>
                </div>
        </div>
        <div class="form-group row">
            <label  class="col-2 col-form-label">Telepon</label>
                <div class="col-4">
                    <input class="form-control" type="text" name="phone" placeholder="Masukan Nomor Telepon" required>
                </div>
        </div>
        <div class="form-group row">
            <label  class="col-2 col-form-label">Email</label>
                <div class="col-4">
                    <input class="form-control" type="email" name="email" placeholder="Masukan Email" required>
                </div>
        </div>
        <div class="form-group row">
            <label  class="col-2 col-form-label">Manual</label>
                <div class="col-4">
                    <input class="form-control" type="text" name="manual" placeholder="Masukan Jumlah Manual" required>
                </div>
        </div>
        <div class="form-group row">
            <label  class="col-2 col-form-label">DTG</label>
                <div class="col-4">
                    <input class="form-control" type="text" name="dtg" placeholder="Masukan Jumlah DTG" required>
                </div>
        </div>
        <div class="form-group row">
            <label  class="col-2 col-form-label">Hanya Sablon</label>
                <div class="col-4">
                    <input class="form-control" type="text" name="onlysablon" placeholder="Masukan Jumlah Hanya Sablon" required>
                </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-2 col-form-label">Marketing</label>
                <div class="col-4">
                    <select name="marketing" class="col-12 col-form-label" required>
                <?php
                foreach ($list_user as $user) {
                    echo '<option value="'.$user->iduser.'">'.$user->name.'</option>';
                }
                ?>
                </select>                    
                </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-2 col-form-label">Status</label>
                <div class="col-4">
                    <select name="status" class="col-12 col-form-label" required>
                <?php
                foreach ($list_status as $status) {
                    echo '<option value="'.$status->idstatus.'">'.$status->statusname.'</option>';
                }
                ?>
                </select>                    
                </div>
        </div>
            </table>
            <div>
                <td colspan="2"><button type="submit" class="btn btn-primary">Tambah</button></td>
            </div>
        </form>