<?php
class Department_model extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function get_all_departments(){
        return $this->db->get('department')->result();
    }

    public function insert_department($data){
        return $this->db->insert('department', $data);
    }

    public function get_department($id){
        return $this->db->get_where('department', array('department_id' => $id))->row();
    }

    public function update_department($id, $data){
        $this->db->where('department_id', $id);
        return $this->db->update('department', $data);
    }

    public function delete_department($id){
        $this->db->where('department_id', $id);
        return $this->db->delete('department');
    }
}