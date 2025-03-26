<?php
 
class Zangeres extends BaseController
{
    private $ZangeresModel;
 
    public function __construct()
    {
        $this->ZangeresModel = $this->model('ZangeresModel');
    }
 
 
    public function index()
    {
        $result = $this->ZangeresModel->getAllZangeres();
       
        $data = [
            'title' => 'Top 5 rijkste zangeressen ter wereld',
            'Zangeres' => $result
        ];
 
        $this->view('Zangeres/index', $data);
    }
}