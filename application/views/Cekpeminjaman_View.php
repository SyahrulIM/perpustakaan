<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cek Peminjaman</h1>
        <div class="card-tools">
                <?php echo form_open('cekpeminjaman/search')?>
                <input type="text" name="keyword" class="form-control" placeholder="Search" autofocus autocomplete="off">
                <?php echo form_close()?>
                </div>
      </div>

<!-- Content -->
<table class="table table-hover">
<tr>
    <th hidden>ID</th>
    <th>Nama</th>
    <th>Buku</th>
    <th>Alamat</th>
    <th>No.telp</th>
    <th>Tanggal Peminjaman</th>
    <th>Due</th>
    <th>Status Peminjaman</th>
</tr>
<?php
foreach($data as $row){?>
    <tr>
    <td hidden><?php echo $row->id_peminjaman; ?></td>
    <td><?php echo $row->nama; ?></td>
    <td><?php echo $row->buku;?></td>
    <td><?php echo $row->alamat;?></td>
    <td><?php echo $row->no_telp;?></td>
    <td><?php echo $row->tgl_pinjam;?></td>
    <td><?php echo $row->due;?></td>
    <td><?php echo $row->status_pengembalian;?></td>
    </tr>
    <?php
    }?>
</tr>
</table>

</main>
</div>
</div>