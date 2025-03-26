<?php

class BucketlistModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Deze methode haalt alle smartphone records op uit de database
     */
    public function getAllbucketlist()
    {
        $sql = 'SELECT  HRLS.Merk
                       ,HRLs.Model
                       ,HRLS.Prijs

                FROM Horloges as BKLS
                
                ORDER BY BKLS.Prijs DESC';
                      


        $this->db->query($sql);

        return $this->db->resultSet();
    }
}