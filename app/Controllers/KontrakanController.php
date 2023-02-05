<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class KontrakanController extends ResourceController
{
    protected $modelName = 'App\Models\Kontrakan';
    protected $format    = 'json';
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data = [
            'message' => 'success',
            'data_kontrakan' => $this->model->orderBy('id', 'DESC')->findAll()
        ];

        return $this->respond($data, 200);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $data = [
            'message' => 'success',
            'kontrakan_byid' => $this->model->find($id)
        ];

        if ($data['kontrakan_byid'] == null) {
            return $this->failNotFound('Data kontrakan tidak ditemukan');
        }

        return $this->respond($data, 200);
    }



    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $rules = $this->validate([
            'no_rumah'      => 'required',
            'penghuni'      => 'required',
            'pekerjaan'     => 'required',
            'no_kk'         => 'required',
            'telepon'       => 'required',
            'tanggal_masuk' => 'required',
            'lama_sewa'     => 'required',
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }



        $this->model->insert([
            'no_rumah'      => esc($this->request->getVar('no_rumah')),
            'penghuni'      => esc($this->request->getVar('penghuni')),
            'pekerjaan'     => esc($this->request->getVar('pekerjaan')),
            'no_kk'         => esc($this->request->getVar('no_kk')),
            'telepon'       => esc($this->request->getVar('telepon')),
            'tanggal_masuk' => esc($this->request->getVar('tanggal_masuk')),
            'lama_sewa'     => esc($this->request->getVar('lama_sewa')),
        ]);

        $response = [
            'message'   => 'Data kontrakan berhasil ditambahkan'
        ];

        return $this->respondCreated($response);
    }


    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $rules = $this->validate([
            'no_rumah'      => 'required',
            'penghuni'      => 'required',
            'pekerjaan'     => 'required',
            'no_kk'         => 'required',
            'telepon'       => 'required',
            'tanggal_masuk' => 'required',
            'lama_sewa' => 'required'
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->update($id, [
            'no_rumah'      => esc($this->request->getVar('no_rumah')),
            'penghuni'      => esc($this->request->getVar('penghuni')),
            'pekerjaan'     => esc($this->request->getVar('pekerjaan')),
            'no_kk'         => esc($this->request->getVar('no_kk')),
            'telepon'       => esc($this->request->getVar('telepon')),
            'tanggal_masuk' => esc($this->request->getVar('tanggal_masuk')),
            'lama_sewa'     => esc($this->request->getVar('lama_sewa'))
        ]);

        $response = [
            'message'   => 'Data kontrakan berhasil diubah'
        ];

        return $this->respondCreated($response, 200);
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->model->delete($id);

        $response = [
            'message' => 'Data kontrakan berhasil dihapus'
        ];

        return $this->respondDeleted($response);
    }
}
