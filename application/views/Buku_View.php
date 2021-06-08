<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Buku</h1>
        <div class="card-tools">
                <?php echo form_open('buku/search')?>
                <input type="text" name="keyword" class="form-control" placeholder="Search" autofocus autocomplete="off">
                <?php echo form_close()?>
                </div>
      </div>

<!-- Content -->
<table class="table table-hover">
<tr>
			<th>NO</th>
            <th hidden>ID</th>
            <th>KATEGORI</th>
            <th>NAMA BUKU</th>
            <th>ISBN</th>
            <th>PUBLISHER</th>
            <th>TGL TERBIT</th>
        </tr>
		<?php $i = 1; ?>
        <?php foreach ($data as $bukus) {?>
            <tr>
			 <td><?= $i; ?></td>
             <td hidden><?php echo $bukus->id_buku;?></td>
             <td><?php echo $bukus->kategori_buku; ?></td>
             <td><?php echo $bukus->buku; ?></td>
             <td><?php echo $bukus->isbn; ?></td>
             <td><?php echo $bukus->penerbit; ?></td>
             <td><?php echo $bukus->tahun; ?></td>
             </tr>
		<?php $i++; ?>
        <?php
    }?>
</table>

</main>
</div>
</div>