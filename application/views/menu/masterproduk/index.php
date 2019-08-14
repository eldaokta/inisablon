 <!-- Breadcrumbs-->
      <ol class="breadcrumb">
          <li class="breadcrumb-item">Features</li>
          <li class="breadcrumb-item active">All Order</li>
      </ol>
          <div class="mb-0 mt-4">
            </div>
          <div class="card-columns">            
    </div>
</body>

<form action="<?php echo base_url()?>menu/masterproduk/cari" method="post">
    <div class="row">
        <div class="col-lg-8">
            <div class="input-group">
                <a class="btn btn-primary btn-rounded m-b-10 m-l-5" href="<?php echo site_url('menu/masterproduk/create'); ?>" role="button" >Tambah Order</button></a>
            </div>
            <div class="input-group">
                <a class="btn btn-primary btn-warning btn-sm" href="<?php echo site_url('menu/laporanpdf'); ?>" role="button" >Laporan</button></a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="input-group input-group-rounded" >
                <input type="text" class="form-control" id="cari" name="cari" placeholder="Pencarian">
                <span class="input-group-btn">
                    <button class="btn btn-primary btn-group-right" type="submit" value="cari">Cari</button>
                </span>
            </div>
        </div>
    </div>
    </form>
    <div style="overflow-x:auto;">
        <table id="myTable" class="table table-bordered table-striped table-xm">
            <thead class="thead-inverse">
            <tr>
                <th rowspan="2" class="text-center">Nomor</th>
                <th rowspan="2" class="text-center">Tanggal</th>
                <th rowspan="2" class="text-center">Pelanggan</th>
                <th rowspan="2" class="text-center">Artikel</th>
                <th rowspan="2" class="text-center">Telepon</th>
                <th rowspan="2" class="text-center">Email</th>
                <th colspan="3" class="text-center">Jenis Sablon</th>
                <th rowspan="2" class="text-center">Marketing</th>
                <th rowspan="2" class="text-center">Status</th>
                <th rowspan="2" class="text-center">Aksi</th>
            </tr>
            <tr>
                <th class="text-center">Manual</th>
                <th class="text-center">DTG</th>
                <th class="text-center">Sablon</th>
            </tr>
            </thead>
            <tbody>
            <?php
                    $no = 0;
                    foreach ($list_product as $product) {
                      // var_dump($product);
            ?>
 
                <tr>
                    <td class="text-center"><?=++$no?></td>
                    <td class="text-center"><?=$product->date?></td>
                    <td class="text-center"><?=$product->customer?></td>
                    <td class="text-center"><?=$product->article?></td>
                    <td class="text-center"><?=$product->phone?></td>
                    <td class="text-center"><?=$product->email?></td>
                    <td class="text-center"><?=$product->manual?></td>
                    <td class="text-center"><?=$product->dtg?></td>
                    <td class="text-center"><?=$product->onlysablon?></td>
                    <td class="text-center"><?=$product->name?></td>
                    <td class="text-center"><?=$product->statusname?></td>
                    <td class="text-center">
                        <a class="btn btn-primary btn-success btn-sm" href="<?php echo site_url('menu/masterproduk/edit/') . $product->idorder; ?>" role="button">Edit</a>
                        <a class="btn btn-primary btn-danger btn-sm" href="<?php echo site_url('menu/masterproduk/delete/') . $product->idorder; ?>" role="button">Hapus</a>
                    </td>
                </tr>
 
            <?php
                    }
            ?>
                </tbody>
        </table>
</div>