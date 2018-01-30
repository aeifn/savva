<?php

class Model
{
    public function __construct($file)
    {
        $this->db = new SQLite3($file);
    }

    public function get_all()
    {
        return $this->db->query('SELECT _rowid_,url,title FROM urls');
    }

    public function get_section($section)
    {
        return $this->db->query("SELECT _rowid_,url,title FROM urls WHERE section=\"$section\"");
    }

    public function insert($url, $title)
    {
      return $this->db->exec("INSERT INTO urls (url, title) VALUES (\"$url\", \"$title\")");
    }

    public function __destruct()
    {
      $this->db->close();
    }
}
