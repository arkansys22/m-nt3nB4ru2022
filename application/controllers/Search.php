<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

    public function index() {
        $this->data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
        $query = $this->input->get('query');
        $this->load->model('Search_model');
        $this->data['results'] = $this->Search_model->search($query);
        $this->load->view('fronts/search_results', $this->data);
    }
}
?>