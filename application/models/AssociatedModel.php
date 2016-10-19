<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AssociatedModel extends CI_Model {

  var $table = "associated";

  public function getAll() {
    return $this->db->get($this->table)->result_array();
  }

  public function create($associate) {
    if ($this->db->insert($this->table, $associate) > 0) {
      return $this->db->insert_id();
    }
    return 0;
  }

  public function getById($id) {
    return $this->db->get_where($this->table, array('id_associate' => $id))->result();
  }

  public function update($associate) {
    $this->db->where('id_associate', $associate['id_associate']);
    return $this->db->update($this->table, $associate);
  }

  public function delete($id) {
    return $this->db->delete($this->table, array('id_associate' => $id));
  }

  public function inactive($id) {
    $this->db->where('id_associate', $id);
    return $this->db->update($this->table, array('active' => 0));
  }

  public function active($id) {
    $this->db->where('id_associate', $id);
    return $this->db->update($this->table, array('active' => 1));
  }

  public function getAllContactTypes() {
    return $this->db->get('contact_type')->result_array();
  }

}
