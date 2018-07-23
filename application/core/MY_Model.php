<?php

class MY_Model extends CI_Model {
 protected $table;

 public function __construct() {
  parent::__construct();
  //$this->db->initialize();
 }

 public function getBy( array $conditions, $order = null, $table = null ) {

  if( empty( $table ) )
   $table = $this->table;
  
  if( !empty( $order ) )
   $this->db->order_by( $order );

  $query = $this->db->get_where( $table, $conditions );

  return $query->result();
 }

 public function save( array $data, array $conditions = array(), $table = null ) {
  
  if( empty( $table ) )
   $table = $this->table;
  
  $conditionsFirstValue = array_values( $conditions );
  
  if( empty( $conditionsFirstValue[0] ) ) {
   $this->db->insert( $table, $data );
  } else {
   $this->db->update( $table, $data, $conditions );
  }
  return $this->db->insert_id();
 }

 public function delete( array $conditions, $table = null ) {
  if( empty( $table ) )
   $table = $this->table;

  return $this->db->delete( $table, $conditions );
 }

 public function __destruct() {
  $this->db->close();
 }
 
}