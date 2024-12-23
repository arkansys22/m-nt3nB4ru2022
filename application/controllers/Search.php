<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

    public function index() {
        $query = $this->input->get('query');
        $this->load->model('Search_model');
        $data['results'] = $this->Search_model->search($query);
        $this->load->view('fronts/search_results', $data);
    }
}
?>