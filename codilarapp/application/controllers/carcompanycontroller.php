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
        $this->load->library('Curl');
    }
    
    public function index()
    {	
        $result = $this->curl->simple_get('http://localhost/codilar/codilarapp/index.php/apicontroller/getallrecords');
        //print_r(json_decode($getallrecords));
        //$result = $this->Carmodel->getcarcompanyrecords();
        $json = json_decode($result);
        $data['records'] = $json->records;
        $this->load->view('carlists',$data);
    }
    
    public function carcompanyview($id)
    {	
        $result = $this->curl->simple_get('http://localhost/codilar/codilarapp/index.php/apicontroller/getrow/'.$id);
        //$result = $this->Carmodel->getcarcompanyrow($id);
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
        $output_dir = "D:/xampp/htdocs/codilar/codilarapp/static/images/";
        
        if(isset($_FILES["image"])){
            if ($_FILES["image"]["error"] > 0){
            }else{
                move_uploaded_file($_FILES["image"]["tmp_name"],$output_dir. $_FILES["image"]["name"]);
            }
        }
        $data['image']=base_url().'static/images/'.$_FILES["image"]["name"];
        $result = $this->curl->simple_post('http://localhost/codilar/codilarapp/index.php/apicontroller/postcar/', $data);
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
        $output_dir = "D:/xampp/htdocs/codilar/codilarapp/static/images/";
        
        if(isset($_FILES["image"])){
            if ($_FILES["image"]["error"] > 0){
            }else{
                move_uploaded_file($_FILES["image"]["tmp_name"],$output_dir. $_FILES["image"]["name"]);
            }
        }
        $data['image']=base_url().'static/images/'.$_FILES["image"]["name"];
        //echo"<pre>";print_r($data);
        $id = $this->input->post('id');
        //$this->Carmodel->update($data,$id);
        $result = $this->curl->simple_post('http://localhost/codilar/codilarapp/index.php/apicontroller/postupdatecar/', $data);
        redirect('/');
    }
    public function deletecar($id)
    {
        //$data = $this->input->post();
        //print_r($id);
        //echo json_decode($this->input->post());
        $data = $this->Carmodel->getcarcompanyrow($id);
        $jsondata = json_decode($data);
        $jsondata->row->status = 0;
        $jsondata->row->updated_date = date("Y-m-d H:i:s");
        $jsondata->row->isdeleted = 1;
        //echo"<pre>".$id;print_r($jsondata);
        //$this->Carmodel->update($jsondata->row,$id);
        //$data = $jsondata->row;
        //print_r($jsondata->row);
        $result = $this->curl->simple_post('http://localhost/codilar/codilarapp/index.php/apicontroller/deletecar/'.$id);
        redirect('/');
    }
}