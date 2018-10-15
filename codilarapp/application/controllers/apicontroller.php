<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Apicontroller extends CI_Controller {
    
            
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Carmodel','',TRUE);  
        $this->load->helper('url');	
        $this->load->library('Curl');
    }
    
    public function getallrecords()
    {	header('Content-Type: application/json');
        header("Access-Control-Allow-Methods: GET");
        $result = $this->Carmodel->getcarcompanyrecords();
        echo $result;
    }
    public function getrow($id)
    {	
        header('Content-Type: application/json');
        header("Access-Control-Allow-Methods: GET");
        $result = $this->Carmodel->getcarcompanyrow($id);
        //$json = json_decode($result);
        echo $result;
    }
    public function postcar()
    {
        //echo $this->getRequest()->getParams();
        header('Content-Type: application/json');
        header("Access-Control-Allow-Methods: POST");
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
         header("Access-Control-Allow-Methods: POST");
        //print_r($this->input->post());
        $data = $this->input->post();
        $id = $this->input->post('id');
        //$datajson = json_encode($data);
        $result = $this->Carmodel->update($data,$id);
        echo $result;
        //redirect('/');
    }
    public function deletecar($id)
    {
        echo"test";
        header('Content-Type: application/json');
        header("Access-Control-Allow-Methods: POST");
        $data = $this->Carmodel->getcarcompanyrow($id);
        $jsondata = json_decode($data);
        $jsondata->row->status = 0;
        $jsondata->row->updated_date = date("Y-m-d H:i:s");
        $jsondata->row->isdeleted = 1;
        //echo"<pre>".$id;print_r($jsondata);
        $result = $this->Carmodel->update($jsondata->row,$id);
        echo $result;
        //redirect('/');
    }
    
    
}