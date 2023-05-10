<?php
class MyModel extends CI_Model {
    public $table='tabelsiswa';
    public function tampil_data(){
        return $this->db->get($this->table);
        // $query = $this->db->get();
        // return $query->result_array();
    }
    public function input_data($data,$table){
        $this->db->insert($table,$data);
    }
}