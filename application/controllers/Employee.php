<?php
class Employee extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Employee_model');
        $this->load->model('Department_model');
    }

    public function index() {
        $data['employees'] = $this->Employee_model->get_all_employees();
        $this->load->view('employee_view', $data);
    }

    public function create() {
        $data['departments'] = $this->Department_model->get_all_departments();
        $this->load->view('employee_form', $data);
    }

    public function store() {
        $data = [
            'name' => $this->input->post('name'),
            'gender' => $this->input->post('gender'),
            'birth' => $this->input->post('birth'),
            'location' => $this->input->post('location'),
            'phone_number' => $this->input->post('phone_number'),
            'email' => $this->input->post('email'),
            'position' => $this->input->post('position'),
            'salary' => $this->input->post('salary'),
            'department_id' => $this->input->post('department_id')
        ];
        $this->Employee_model->insert_employee($data);
        redirect('employee');
    }

    public function edit($id) {
        $data['employee'] = $this->Employee_model->get_employee($id);
        $data['departments'] = $this->Department_model->get_all_departments();
        $this->load->view('employee_edit_form', $data);
    }

    public function update($id) {
        $data = [
            'name' => $this->input->post('name'),
            'gender' => $this->input->post('gender'),
            'birth' => $this->input->post('birth'),
            'location' => $this->input->post('location'),
            'phone_number' => $this->input->post('phone_number'),
            'email' => $this->input->post('email'),
            'position' => $this->input->post('position'),
            'salary' => $this->input->post('salary'),
            'department_id' => $this->input->post('department_id')
        ];
        $this->Employee_model->update_employee($data, $id);
        redirect('employee');
    }

    public function delete($id) {
        $this->Employee_model->delete_employee($id);
        redirect('employee');
    }
}