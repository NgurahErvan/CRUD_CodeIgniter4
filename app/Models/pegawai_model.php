<?php

namespace App\Models;

use CodeIgniter\Model;

class pegawai_model extends Model
{
  protected $table = 'pegawai';
  protected $primaryKey = 'id';
  protected $allowedFields = ['nama', 'no_telp', 'Umur'];

  public function getpegawai($id = false)
  {
    if ($id == false) {
      return $this->findAll();
    }
    return $this->getWhere(['id' => $id]);
  }

  public function savepegawai($data)
  {
    $query = $this->db->table($this->table)->insert($data);
    return $query;
  }

  public function editpegawai($data, $id)
  {
    $query = $this->db->table($this->table)->update($data, array('id' => $id));
    return $query;
  }

  public function deletepegawai($id)
  {
    $query = $this->db->table($this->table)->delete(array('id' => $id));
    return $query;
  }
}