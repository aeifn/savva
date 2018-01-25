<?php

class Model {

  function __construct($file){

    $this->db = new SQLite3($file);

  }

  function get_all(){

    return $this->db->query('SELECT _rowid_,url,title FROM urls');

  }

  function get_section($section){

    return $this->db->query("SELECT _rowid_,url,title FROM urls WHERE section=\"$section\"");

  }

}

 ?>
