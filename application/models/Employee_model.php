<?php
class Employee_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function get_all_employees() {
        $this->db->select('employee.*, department.department_name');
        $this->db->from('employee');
        $this->db->join('department', 'employee.department_id = department.department_id');
        return $this->db->get()->result();
    }

    public function insert_employee($data) {
        return $this->db->insert('employee', $data);
    }

    public function get_employee($id) {
        return $this->db->get_where('employee', array('id' => $id))->row();
    }

    public function update_employee($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('employee', $data);
    }

    public function delete_employee($id) {
        $this->db->where('id', $id);
        return $this->db->delete('employee');
    }
}