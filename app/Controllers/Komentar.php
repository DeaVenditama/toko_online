<?php
namespace App\Controllers;

class Komentar extends BaseController
{
	public function __construct()
	{
		helper('form');
		$this->validation = \Config\Services::validation();
		$this->session = session();
    }

    public function create(){
        $id_barang = $this->request->uri->getSegment(3);
        $model = new \App\Models\KomentarModel();

        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $this->validation->run($data, 'komentar');
            $errors = $this->validation->getErrors();

            if(!$errors)
            {
                $komentarEntity = new \App\Entities\Komentar();

                $komentarEntity->fill($data);
                $komentarEntity->created_by = $this->session->get('id');
                $komentarEntity->created_date = date("Y-m-d H:i:s");

                $model->save($komentarEntity);

                $segments = ['etalase','beli', $id_barang];

                return redirect()->to(site_url($segments));
            }
        }

        return view('komentar/create',[
            'id_barang' => $id_barang,
            'model' => $model,
        ]);
    }

}