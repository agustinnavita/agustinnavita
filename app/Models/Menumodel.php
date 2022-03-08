<?php 
namespace App\Models;

use CodeIgniter\Model;

class Menumodel extends Model{
    protected $table      = 'tb_menu';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    protected $primarykey='id';
    protected $allowedFields=['nama', 'jenis', 'harga', 'stok'];
}