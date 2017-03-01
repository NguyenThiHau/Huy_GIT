<?php

/**
 * Created by PhpStorm.
 * User: Moe-tan
 * Date: 1/10/2017
 * Time: 11:01 AM
 */
class  Post_m extends database
{
    protected $table = "post";

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $query = "SELECT * FROM " . $this->table;
        $rs = mysqli_query($this->conn, $query);
        $result = array();
        while ($row = mysqli_fetch_array($rs)) {
            $result[] = array(
                'Id' => $row['Id'],
                'Content' => $row['Content'],
            );
        }
        return $result;
    }

    public function insert($content)
    {
        $query = "INSERT INTO " . $this->table . "(content) VALUE('" . $content . "');";
        $rs = mysqli_query($this->conn, $query);
        return $rs;
    }

    public function del($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE ID = " . $id . ";";
        $rs = mysqli_query($this->conn, $query);
        return $rs;
    }

    public function edit($id, $content_new)
    {
        $query = "UPDATE " . $this->table . " SET Content = '" . $content_new . "' WHERE ID = " . $id . ";";
        $rs = mysqli_query($this->conn, $query);
        return $rs;
    }

    public function search($search_id)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE ID = " . $search_id . ";";
        $rs = mysqli_query($this->conn, $query);
        $result = array();
        while ($row = mysqli_fetch_array($rs)) {
            $result[] = array(
                'Id' => $row['Id'],
                'Content' => $row['Content'],
            );
        }
        return $result;
    }

    public function getbyId($id)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE ID = " . $id;
        $rs = mysqli_query($this->conn, $query);
        $result = array();
        while ($row = mysqli_fetch_array($rs)) {
            $result = array(
                'Id' => $row['Id'],
                'Content' => $row['Content'],
            );
        }
        return $result;
    }
}
