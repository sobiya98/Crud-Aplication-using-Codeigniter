<?php
class Model extends CI_Model
{
	public function registration_data($array){
	//all the data comming through array because we had pass all the fields in config file of form validation..
	  return $this->db->insert('registration',$array);
		
	}
	
	//ajax used .. now no use..
	/*public function is_email_availability($emailid){

		$this->db->where('emailid',$emailid);
		$query =$this->db->get('registration');
		if($query->num_rows() > 0){
			return true;

		}
		else{
			return false;
		}
	}*/
	public function login_data($username,$password){
         $q = $this->db->where(['username' => $username, 'password' => $password])
                     ->get('registration');
                     
                if($q->num_rows()){
                	//return id of record..
                	return $q->row()->id;
                }
                else{
                	return False;
                }

  	}

  	public function show_quotes_data(){
  		//to get the particular user data of quotes..
  		$id =$this->session->userdata('id');
        $q = $this->db->select()
                      ->where(['rid' => $id])
                      ->get('quote');
          return $q->result();

  	}
  	public function add_quote_data($alldata){
  		return $this->db->insert('quote',$alldata);
  	}

  	public function delete_quote_data($id){
  		 if(is_array($id)){
            $this->db->where_in('qid', $id);
        }else{
            $this->db->where('qid', $id);
        }
        $delete = $this->db->delete('quote');
        return $delete?true:false;
  	} 
    public function find_quote($q_id){
  /*  $q=$this->db->select()
            ->where('qid',$q_id)
            ->get('quote');
            return $q->row();*/
          }


          
} 
?>
