<?=$this->extend('layouts/admin')?>
<?=$this->section('content')?>
<?php
    if(session()->getFlashdata('success')){
?>
    <div class="alert-success alert-dismissible fade-show" role="alert">
        <?= session()->getFlashdata('success')?>
        <button type="button" class="succes" data-dismiss="alert" aria-label="close">Succes</button>
    </div>
    <?php
    }
    ?>
    <div class="container">
        <h3>Data Menu</h3>
            <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addMenu">Tambah Data </button>
            <table class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Option</th>
                </thead>
                <tbody>
                <?php
                    $no=1;
                    foreach($dmenu as $row):
                ?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$row['nama']?></td>
                    <td><?=$row['jenis']?></td>
                    <td><?=$row['stok']?></td>
                    <td><?=$row['harga']?></td>
                    <td><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editMenu-<?=$row['id']?>" btn-sm btn-edit>Edit</a>
                    <a href="<?=base_url('menuController/delete/'.$row['id'])?>" onlick="return confirm('Yakin Mau Dihapus?')" class="btn btn-danger btn-sm btn-delete">Hapus</a>
                </td>
            </tr>
            <form action="<?=base_url('menu/edit/'.$row['id'])?>" method="post">
                <div class="modal fade" id="editMenu-<?=$row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Menu</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                            <div class="form-group">
                                <label>Nama </label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?=$row['nama']?>"></input>
                            </div>
                            <div class="form-group">
                                <label>Stok</label>
                                <input type="text" class="form-control" name="stok" placeholder="Stok" value="<?=$row['stok']?>"></input>
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" class="form-control" name="harga" placeholder="harga" value="<?=$row['harga']?>"></input>
                            </div>
                            <div class="form-group">
                                <label>Jenis</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault1" value="makanan"></input>
                                <label class="form-check-label" for="flexRadioDefault1">Makanan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault2" value="minuman"></input>
                                <label class="form-check-label" for="flexRadioDefault2">Minuman</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault3" value="camilan"></input>
                                <label class="form-check-label" for="flexRadioDefault3">Camilan</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-secondry" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
        <?php
        $no++;
        endforeach?>
    </tbody>
</table>
</div>

<!-- Modal Add User-->
<!-- <form action="users" method="post">-->
<form action="/MenuController/simpan" method="post"> 
    <div class="modal fade" id="addMenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama"></input>
                </div>
                <div class="modal-body">
                
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" class="form-control" name="harga" placeholder="harga"></input>
                </div>
                <div class="modal-body">

                <div class="form-group">
                    <label>Jenis</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault1" value="makanan">
                    <label class="form-check-label" for="flexRadioDefault1">Makanan</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault1" value="minuman">
                  <label class="form-check-label" for="flexRadioDefault1">Minuman</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault1" value="camilan">
                    <label class="form-check-label" for="flexRadioDefault1">Camilan</label>
                </div>
                <div class="form-group">
                    <label>Stok</label>
                    <input type="text" class="form-control" name="stok" placeholder="Stok Menu">
                </div>

            <div class="modal-footer">
                 <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-secondry" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</form>

<?= $this->endSection()?>



