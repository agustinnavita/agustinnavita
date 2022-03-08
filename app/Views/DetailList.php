<?= $this->extend('layouts/admin')?>
<?= $this->section('content')?>
<div class="container">
    <h3><strong>Data Detail Pesanan</strong></h3>
    <table class="table table-striped">
        <thead>
            <th>id</th>
            <th>Menu Id</th>
            <th>Pesanan Id</th>
            <th>Jumlah</th>
            <th>Option</th>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach ($data as $row):
            ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$row['menu_id']?></td>
                <td><?=$row['pesanan_id']?></td>
                <td><?=$row['jumlah']?></td>
                <td>
                <a href="" class= "btn btn-info btn-sm btn-edit">Edit</a>
                <a href="" class="btn btn-danger btn-sm btn-delete">Hapus</a></td>
                </td>
            </tr>
            <?php
            $no++;
            endforeach?>
        </tbody>
    </table>
</div> 
<!--Add product-->
<form action="/Detail_PesananController/save"method="post">
<div class="modal fade" id="addUser" tabimdex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Add Detail Pesanan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label>Pesanan Id</label>
                    <input type="text" class="form-control" name="pesanan_id" placeholder="pesanan_id"></input>
                </div>
                <div class="modal-body">

                <div class="form-group">
                    <label>Menu Id</label>
                    <input type="text" class="form-control" name="menu_id" placeholder="menu_id"></input>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="text" class="form-control" name="jumlah" placeholder="jumlah"></input>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<!-- End Modal Add Detail Pesanan-->

<?= $this->endSection()?>