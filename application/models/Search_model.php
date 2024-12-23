<?php
class Search_model extends CI_Model {

    public function search($query) {
        $this->db->like('judul', $query);
        $query = $this->db->get('harga');
        return $query->result();
    }
}
?>