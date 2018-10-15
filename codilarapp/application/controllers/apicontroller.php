<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Apicontroller extends CI_Controller {
    
            
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Carmodel','',TRUE);  
        $this->load->helper('url');		
    }
    
    public function getallrecords()
    {	header('Content-Type: application/json');
        $result = $this->Carmodel->getcarcompanyrecords();
        echo $result;
    }
    public function getrow($id)
    {	
        header('Content-Type: application/json');
        $result = $this->Carmodel->getcarcompanyrow($id);
        //$json = json_decode($result);
        echo $result;
    }
    public function postcar()
    {
        header('Content-Type: application/json');
        $data = $this->input->post();
        //$datajson = json_encode($data);
        $result = $this->Carmodel->save($data);
        //$json = json_decode($result);
        echo $result;
        //redirect('');
    }
     public function postupdatecar()
    {
         header('Content-Type: application/json');
        //print_r($this->input->post());
        $data = $this->input->post();
        $id = $this->input->post('id');
        $datajson = json_encode($data);
        $result = $this->Carmodel->update($datajson,$id);
        echo $result;
        redirect('/');
    }
}