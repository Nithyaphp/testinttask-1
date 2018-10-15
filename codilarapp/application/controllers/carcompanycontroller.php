<?php
/*header("Access-Control-Allow-Origin: http://localhost/rest-api-authentication-example/");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");*/

 
defined('BASEPATH') OR exit('No direct script access allowed');

class Carcompanycontroller extends CI_Controller {
    
            
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Carmodel','',TRUE);  
        $this->load->helper('url');		
    }
    
    public function index()
    {	
        $result = $this->Carmodel->getcarcompanyrecords();
        $json = json_decode($result);
        $data['records'] = $json->records;
        $this->load->view('carlists',$data);
    }
    
    public function carcompanyview($id)
    {	
        $result = $this->Carmodel->getcarcompanyrow($id);
        $json = json_decode($result);
        $data['row'] = $json->row;
        $this->load->view('carview',$data);
    }
    public function addcarcompany()
    {        
        $this->load->view('caradd');
    }
    public function savecar(){
        $data = $this->input->post();
        $result = $this->Carmodel->save($data);
        redirect('');
    }
    public function editcar($id)
    {
        $data['row'] = $this->Carmodel->getcarrow($id);
        $this->load->view('caredit',$data);
    }
     public function updatecar()
    {
        $data = $this->input->post();
        $id = $this->input->post('id');
        $this->Carmodel->update($data,$id);
        redirect('/');
    }
    public function deletecar($id)
    {
        $data = $this->Carmodel->getcarcompanyrow($id);
        $jsondata = json_decode($data);
        $jsondata->row->status = 0;
        $jsondata->row->updated_date = date("Y-m-d H:i:s");
        $jsondata->row->isdeleted = 1;
        //echo"<pre>".$id;print_r($jsondata);
        $this->Carmodel->update($jsondata->row,$id);
        redirect('/');
    }
}