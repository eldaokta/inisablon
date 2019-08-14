 <!-- Breadcrumbs-->
      <ol class="breadcrumb">
          <li class="breadcrumb-item">Filter Order</li>
          <li class="breadcrumb-item">
              <a href="<?php echo base_url(); ?>menu/produkproses">Processed Order</a>
          </li>
          <li class="breadcrumb-item active">Hapus Order</li>
      </ol>
          <div class="mb-0 mt-4">
            </div>
          <div class="card-columns">            
    </div>
</body>

 <h2>Hapus Data Order</h2>
        <hr />
        <form method="post" action="<?php echo site_url('menu/produkproses/destroy'); ?>">
            <input type="hidden" name="idorder" value="<?=$user->idorder?>" />
            <table class="table table-hover">
                <tr>
                    <td>Pelanggan </td>
                    <td><?=$user->customer?></td>
                </tr>
                <tr>
                    <td>Tanggal </td>
                    <td><?=$user->date?></td>
                </tr>
                <tr>
                    <td>Artikel </td>
                    <td><?=$user->article?></td>
                </tr>
            </table>
        <hr />
                <p>
                    <td colspan="2"><strong>Apakah Anda Yakin Akan Menghapus Data?</strong></td>
                </p>
                <p>
                <button class="btn btn-primary btn-danger btn-sm" type="submit">Hapus</button>
                <a class="btn btn-primary btn-sm" href="<?php echo site_url('menu/produkproses')?>" role="submit">Cancel</a>
                </p>
        </form>