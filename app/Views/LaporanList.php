<?= $this->extend('layouts/admin')?>
<?= $this->section('content')?>
<div class="container">
    <h3><strong>Laporan</strong></h3>
    <table class="table table-striped">
        <thead>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama Pemesan</th>
            <th>No Meja</th>
            <th>Total Harga</th>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach($data as $row):
            ?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$row['tanggal']?></td>
                    <td><?=$row['nama_pemesan']?></td>
                    <td><?=$row['no_meja']?></td>
                    <td><?=$row['total_harga']?></td>
                </tr>
                <?php
                $no++;
                endforeach?>
        </tbody>
    </table>
</div>
<?=$this->endSection()?>