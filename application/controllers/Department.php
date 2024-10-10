<?php
class Department extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Department_model');
    }

    public function index() {
        $data['departments'] = $this->Department_model->get_all_departments();
        $this->load->view('department_view', $data);
    }

    public function create() {
        $this->load->view('department_form');
    }

    public function store() {
        $data = [
            'department_name' => $this->input->post('department_name')
        ];
        $this->Department_model->insert_department($data);
        redirect('department');
    }

    public function edit($id) {
        $data['department'] = $this->Department_model->get_department($id);
        $this->load->view('department_edit_form', $data);
    }

    public function update($id) {
        $data = [
            'department_name' => $this->input->post('department_name')
        ];
        $this->Department_model->update_department($id, $data);
        redirect('department');
    }

    public function delete($id) {
        $this->Department_model->delete_department($id);
        redirect('department');
    }
}