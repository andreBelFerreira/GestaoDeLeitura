<?php

class M_book extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_current_book()
    {
        // Aqui você deve implementar a lógica para obter o livro atual
        $query = $this->db->get_where('books', array('status' => 'reading'));
        return $query->row();
    }

    public function save_annotation($book_id, $annotation)
    {
        // Aqui você deve implementar a lógica para salvar anotações
        $data = array(
            'book_id' => $book_id,
            'annotation' => $annotation,
            'created_at' => date('Y-m-d H:i:s')
        );
        return $this->db->insert('annotations', $data);
    }
}
