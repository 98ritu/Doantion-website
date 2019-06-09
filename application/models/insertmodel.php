<?php
class Insertmodel extends CI_Model
{
	public function insertdata($array)
	{
		$user=$array['name'];
		$phone=$array['phoneno'];
		$em=$array['email'];
		$amt=$array['amount'];
			return $this->db->insert('person',['name'=>$user,'phoneno'=>$phone,'email'=>$em,'amount'=>$amt]);
		}
           
      }  
	