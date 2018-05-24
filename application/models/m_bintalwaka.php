<?php
/**
 * Model CRUD User Management
 */
class M_bintalwaka extends CI_Model{
  //read data dari tabel mahasiswa, jurusan, bintalwaka. 
  function read()
  {
      $this->db->select('tb.*');
      $this->db->from('t_bintalwaka tb');
      return $this->db->order_by('tahun','ASC')->get();
  }

  // read berdasarkan id
  function readBy($tahun)
  {
    return $this->db->get_where('t_bintalwaka', array('tahun' => $tahun));
  }

  //hapus data bintalwaka
  function delete($id)
  {
    $where = array('tahun' => $id);
    $this->db->where($where);
    $this->db->delete('t_bintalwaka');
    return $this->db->affected_rows();
  }

  //insert data bintalwaka
  function create($data)
  {
    $this->db->insert('t_bintalwaka',$data);
  }

  //update berdasarkan id bintalwaka
  function update($tahun,$data)
  {
    $where = array('tahun' => $tahun);
    $this->db->where($where);
    $this->db->update('t_bintalwaka',$data);
  }

}

?>
