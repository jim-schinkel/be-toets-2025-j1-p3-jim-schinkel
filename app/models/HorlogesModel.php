<?php

class HorlogesModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Deze methode haalt alle smartphone records op uit de database
     */
    public function getAllHorloges()
    {
        $sql = 'SELECT  HRLS.Merk
                       ,HRLs.Model
                       ,HRLS.Prijs

                FROM Horloges as HRLS
                
                ORDER BY HRLs.Prijs DESC';
                      


        $this->db->query($sql);

        return $this->db->resultSet();
    }
}