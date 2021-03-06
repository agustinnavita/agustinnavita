<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MenuModel;

class MenuController extends Controller{
    /**
     * Instance of the main Request object.
     * 
     * @var HTTP\IncomingRequest
     */
    protected $request;

    function __construct()
    {
        $this->menu = new MenuModel();
    }
    public function tampil()
    {
        # code... 
        // $menu = new MenuModel();
        // $data ['pesan'] = "data menu";
        $data ['dmenu'] = $this->menu->findAll();
        return view ('MenuList', $data);
    }
    public function simpan()
    {
        #code...
        $data = array (
            'nama'=>$this->request->getPost('nama'),
            'harga'=>$this->request->getPost('harga'),
            'jenis'=>$this->request->getPost('jenis'),
            'stok'=>$this->request->getPost('stok'),
        );
    $this->menu->insert($data);
    return redirect('menu')->with('success','data berhasil disimpan');
    }
    public function delete($id)
    {
        #code...
        $this->menu->delete($id);
        return redirect('menu')->with('success','data berhasil dihapus');
    }
    public function edit($id)
    {
        #code...
        
            $data = array(
                'nama' => $this->request->getPost('nama'),
                'harga'=> $this->request->getPost('harga'),
                'jenis'=> $this->request->getPost('jenis'),
                'stok'=> $this->request->getPost('stok'),
        );
        
        $this->menu->update($id,$data);
        return redirect('menu')->with('success','Data Berhasil Diedit');
    }
}