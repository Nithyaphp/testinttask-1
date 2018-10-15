<?php
	Class Carmodel extends CI_Model{

		private $car_company='carcompany';


	 
		function __construct()
		{
			parent ::__construct();
		}
                function getcarcompanyrecords()
                {
                    //$this->db->where("isdeleted", 0);
                    $query = $this->db->get($this->car_company); 
                    $data = $query->result();
                    
                    if($data){
                        $result['records'] = $data;
                        $result['status'] = "Success";
                        $result['code'] = 200;
                    }else{
                        $result['records'] = "";
                        $result['status'] = "No Records Found";
                        $result['code'] = 404;
                    }
                    
                    return json_encode($result);
                }
                function getcarcompanyrow($id)
                {
                    $this->db->where("id", $id);
                    $query = $this->db->get($this->car_company); 
                    $data = $query->row();
                    if($data){
                        $result['row'] = $data;
                        $result['status'] = "Success";
                        $result['code'] = 200;
                    }else{
                        $result['status'] = "No Records Found";
                        $result['code'] = 404;
                    }
                    return json_encode($result);
                }
                function save($data)
                {
                    $this->db->set($data);
                    //$insert = $this->db->insert($this->car_company,$data);
                    $insert = $this->db->insert($this->car_company,$data);
                    if($insert){
                        $result['status'] = "Success";
                        $result['code'] = 200;
                    }else{
                        $result['status'] = "Inserting Data Failed";
                        $result['code'] = 404;
                    }
                    return json_encode($result);
		}
                function getcarrow($id)
                {
                    $this->db->where("id", $id);
                    $query = $this->db->get($this->car_company); 
                    $data = $query->row();
                    return $data;
                }
                function update($data,$id)
                {
                    //$this->db->set();
                    //$this->db->where("id", $id);
                    $insert = $this->db->update($this->car_company, $data, "id = $id");
                    if($insert){
                        $result['status'] = "Success";
                        $result['code'] = 200;
                    }else{
                        $result['status'] = "Inserting Data Failed";
                        $result['code'] = 404;
                    }
                    return json_encode($result);
		}
                
                
                
                
                

		/*function save($data)
                {
                    $this->db->set($data);
                    $this->db->insert($this->student_profile,$data);
		}
                function saveaddress($data)
                {
                    $this->db->set($data);
                    $this->db->insert($this->staffstud_contact_detail,$data);
		}
                function addrupdate($data,$id)
                {
                    //$this->db->set();
                    //$this->db->where("id", $id);
                    $this->db->update($this->staffstud_contact_detail, $data, "id = $id");
		}
                function schoolupdate($data,$id)
                {
                    //$this->db->set();
                    //$this->db->where("id", $id);
                    $this->db->update($this->previous_schoolorg, $data, "id = $id");
		}
                function saveschool($data)
                {
                    $this->db->set($data);
                    $this->db->insert($this->previous_schoolorg,$data);
		}
                function getstudentrecords()
                {
                    $query = $this->db->get($this->student_profile); 
                    $data = $query->result();
                    return $data;
                }
                function getstudentrow($id)
                {
                    $this->db->where("id", $id);
                    $query = $this->db->get($this->student_profile); 
                    $data = $query->row();
                    return $data;
                }
                function getstudcontactrow($id)
                {
                    $this->db->where("studstaff_id", $id);
                    $this->db->where("status", 1);
                    $query = $this->db->get($this->staffstud_contact_detail); 
                    $data = $query->result();
                    return $data;
                }
                function getstudschoolrow($id)
                {
                    $this->db->where("staff/stud_id", $id);
                    $this->db->where("status", 1);
                    $query = $this->db->get($this->previous_schoolorg); 
                    $data = $query->result();
                    return $data;
                }
                function getcontactrow($id)
                {
                    $this->db->where("id", $id);
                    $query = $this->db->get($this->staffstud_contact_detail); 
                    $data = $query->row();
                    return $data;
                }
                function getschoolrow($id)
                {
                    $this->db->where("id", $id);
                    $query = $this->db->get($this->previous_schoolorg); 
                    $data = $query->row();
                    return $data;
                }
                function update($data,$id)
                {
                    //$this->db->set();
                    //$this->db->where("id", $id);
                    $this->db->update($this->student_profile, $data, "id = $id");
		}
                function delete($data,$id)
                {
                    //$this->db->set();
                    //$this->db->where("id", $id);
                    $this->db->update($this->student_profile, $data, "id = $id");
		}
                function deletecontact($data,$contactid)
                {
                    //$this->db->set();
                    //$this->db->where("id", $id);
                    $this->db->update($this->staffstud_contact_detail, $data, "id = $contactid");
		}
                function deleteschool($data,$schoolid)
                {
                    //$this->db->set();
                    //$this->db->where("id", $id);
                    $this->db->update($this->previous_schoolorg, $data, "id = $schoolid");
		}*/
	}
?>