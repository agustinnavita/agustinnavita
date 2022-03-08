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
        <h3>Data User</h3>
            <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addUser">Tambah Data </button>
            <table class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Option</th>
                </thead>
                <tbody>
                <?php
                    $no=1;
                    foreach($data as $row):
                ?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$row['nama']?></td>
                    <td><?=$row['username']?></td>
                    <td><?=$row['role']?></td>
                    <td><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editUser-<?=$row['id']?>" btn-sm btn-edit>Edit</a>
                    <a href="<?=base_url('userController/delete/'.$row['id'])?>" onlick="return confirm('Yakin Mau Dihapus?')" class="btn btn-danger btn-sm btn-delete">Hapus</a>
                </td>
            </tr>
            <form action="<?=base_url('user/edit/'.$row['id'])?>" method="post">
                <div class="modal fade" id="editUser-<?=$row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                            <div class="form-group">
                                <label>Nama </label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama User" value="<?=$row['nama']?>"></input>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" placeholder="username" value="<?=$row['username']?>"></input>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" class="form-control" name="password" placeholder="password" value="<?=$row['password']?>"></input>
                            </div>
                            <div class="form-group">
                                <label>Role</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1" value="manager"></input>
                                <label class="form-check-label" for="flexRadioDefault1">Manager</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="role" id="flexRadioDefault2" value="admin"></input>
                                <label class="form-check-label" for="flexRadioDefault2">Admin</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="role" id="flexRadioDefault3" value="kasir"></input>
                                <label class="form-check-label" for="flexRadioDefault3">Kasir</label>
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
<form action="/UserController/simpan" method="post">
    <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <label>Nama User</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama User"></input>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username"></input>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" name="password" placeholder="Password"></input>
                </div>
                <div class="form-group">
                    <label>Role</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1" value="manager"></input>
                    <label class="form-check-label" for="flexRadioDefault1">Manager</label>
                </div>
                 <div class="form-check">
                    <input class="form-check-input" type="radio" name="role" id="flexRadioDefault2" value="admin"></input>
                    <label class="form-check-label" for="flexRadioDefault2">Admin</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="role" id="flexRadioDefault3" value="kasir"></input>
                    <label class="form-check-label" for="flexRadioDefault3">Kasir</label>
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

<?= $this->endSection()?>



