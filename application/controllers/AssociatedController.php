<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AssociatedController extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('AssociatedModel');
  }

  public function index() {
    $data['associated'] = $this->AssociatedModel->getAll();
    $this->template->load('template', 'associated/listAssociated', $data);
  }

  public function newAssociate() {
    $data['action'] = 'associated/create';
    $data['title'] = 'Novo Associado';
    $this->template->load('template', 'associated/dialogAssociated', $data);
  }

  public function createAssociate() {
    $this->form_validation->set_rules('name_associate', 'Nome', 'required');
    $this->form_validation->set_rules('rg', 'RG', 'required');
    $this->form_validation->set_rules('cpf', 'CPF', 'required');
    $this->form_validation->set_rules('birth_date', 'Data de Nascimento', 'required');


    if ($this->form_validation->run()) {
      $associate = array(
        'name_associate' => $this->input->post('name_associate'),
        'rg' => $this->input->post('rg'),
        'cpf' => $this->input->post('cpf'),
        'birth_date' => $this->input->post('birth_date'),
        'street' => $this->input->post('street'),
        'number' => $this->input->post('number'),
        'neighborhood' => $this->input->post('neighborhood')
      );
      if ($this->AssociatedModel->create($associate))
        redirect('associated', 'refresh');
    }
    else {
      $data['action'] = 'associated/create';
      $data['title'] = 'Novo Associado';
      $this->template->load('template', 'associated/dialogAssociated', $data);
    }
  }

  public function detailedAssociate() {
    $id = $this->uri->segment(2);
    $data['associate'] = $this->AssociatedModel->getById($id)[0];
    $this->template->load('template', 'associated/detailedAssociated', $data);
  }

  public function editAssociate() {
    $id = $this->uri->segment(3);
    $data['title'] = "Alterar Associado";
    $data['action'] = "associated/update";
    $data['associate'] = $this->AssociatedModel->getById($id)[0];
    $this->template->load('template', 'associated/dialogAssociated', $data);
  }

  public function updateAssociate() {
    $this->form_validation->set_rules('name_associate', 'Nome', 'required');
    $this->form_validation->set_rules('rg', 'RG', 'required');
    $this->form_validation->set_rules('cpf', 'CPF', 'required');
    $this->form_validation->set_rules('birth_date', 'Data de Nascimento', 'required');

    if ($this->form_validation->run()) {
      $associate = array(
        'id_associate' => $this->input->post('id_associate'),
        'name_associate' => $this->input->post('name_associate'),
        'rg' => $this->input->post('rg'),
        'cpf' => $this->input->post('cpf'),
        'birth_date' => $this->input->post('birth_date'),
        'street' => $this->input->post('street'),
        'number' => $this->input->post('number'),
        'neighborhood' => $this->input->post('neighborhood')
      );
      if ($this->AssociatedModel->update($associate)) {
        redirect('associated', 'refresh');
      }
    }
    else {
      $data['title'] = "Alterar Associado";
      $data['action'] = "associated/update";
      $this->template->load('template', 'associated/dialogAssociated', $data);
    }
  }

  public function deleteAssociate() {
    $id = $this->uri->segment(3);
    $this->AssociatedModel->delete($id);
  }

  public function inactiveAssociate() {
    $id = $this->uri->segment(3);
    $this->AssociatedModel->inactive($id);
  }

}
