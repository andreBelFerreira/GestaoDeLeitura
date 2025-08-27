<?php
class Books extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_book');
    }

    public function index() {
        $data['current_book'] = $this->M_book->get_current_book();
        $this->load->view('books/index', $data);
    }

    public function add_annotation() {
        $book_id = $this->input->post('book_id');
        $annotation = $this->input->post('annotation');
        $this->M_book->save_annotation($book_id, $annotation);
        redirect('books');
    }
}
