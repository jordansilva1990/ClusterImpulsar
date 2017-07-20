<?php

class Model_Empresa extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function insertar($data){
        $arrayDatos = array (
            'Nombre' => $data['NombreEmpresa']            
        );
        try {
            $result = $this->db->insert('Empresas', $data);
        }catch(Exception $e){
            throw new Exception('error in query');
        }
    }

    function eliminar($data){
        $this->db->delete('Empresas', $data);
    }

    function get($data){
        $query->$this->db->get('Empresas', $data);
        return $query->result();
    }

    public function obtenerTodos(){
        $query = $this->db->query("SELECT * FROM Empresas;");
        return $query->result();
    }

    
}