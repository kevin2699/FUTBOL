<?php
/**
 * Estudiante, ULTIMO PROCEDMIENTO
 */
class Barca extends CI_Model
{
  function __construct()
  {
    // code...
  		parent::__construct();
  }
  public function insertar($datos){
    //ponemos el nombre de la tabla de la BDD CREADO
    return $this->db->insert("barcelona",$datos);
  }
  public function obtenerTodos(){
    $barca=$this->db->get("barcelona");
    if ($barca->num_rows()>0) {
      return $barca;
    } else{
      return false;
    }

  }
  //funcion para eliminar un estudianteTemporal
  public function eliminarPorId($id){
    $this->db->where("id_bar",$id);
    return $this->db->delete("barcelona");

  }
}//cierre de la clase
