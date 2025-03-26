<?php
 
class SpeakersModel
{
    private $db;
 
    public function __construct()
    {
        $this->db = new Database();
    }
 
    /**
     * Deze methode haalt alle smartphone records op uit de database
     */
    public function getAllSpeakers()
    {
        $sql = 'SELECT  SPKR.Naam
                       ,SPKR.Batterijduur
                       ,SPKR.Waterbestendigheid
                       ,SPKR.Connectiviteit
 
                FROM Speakers as SPKR
               
                ORDER BY SPKR.Naam DESC';
 
        $this->db->query($sql);
 
        return $this->db->resultSet();
    }
}