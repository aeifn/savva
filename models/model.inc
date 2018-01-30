<?php

class Model
{
    public function __construct($file)
    {
        $this->db = new SQLite3($file);
    }

    /* Obsolete function */
    public function get_all()
    {
        return $this->db->query('SELECT _rowid_,url,title FROM urls');
    }

    public function get_section($section)
    {
      $stmt = $this->db->prepare("SELECT _rowid_,url,title FROM urls WHERE section=:section ");
      $stmt->bindParam(':section',$section,SQLITE3_INTEGER);
      return $stmt->execute();
    }

    public function insert($url, $title)
    {
      $stmt = $this->db->prepare ("INSERT INTO urls (url, title) VALUES (:url, :title)");
      $stmt->bindValue(':url',$url,SQLITE3_TEXT);
      $stmt->bindValue(':title',$title,SQLITE3_TEXT);
      return $stmt->execute();
    }

    public function __destruct()
    {
      $this->db->close();
    }
}
