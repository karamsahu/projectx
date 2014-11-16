<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DbHandler
 *
 * @author Toshiba
 */
include_once ('modal/Achiver.php');
class DbHandler {
    private $db_host='localhost';
    private $db_user='magicdietitian';
    private $db_pass='Drgitika@2013';
    private $db_name='magicdietitian';
    private $conn=null;
    private $dbSelect;
    public $achiverObject = array();
    
    //connet to db
    public function connect() {
        if(!$this->conn){
            $this->conn = mysql_connect($this->db_host, $this->db_user, $this->db_pass);
            $this->dbSelect= mysql_select_db($this->db_name);
			return true;
        
		}else{
            die('error connecting db'.mysql_error());
        return false;
		}
    }
    
    //select from db
    public function select($q) {
        $result = mysql_query($q);
        // saving values from database to array as object
        if($result){
            while ($row = mysql_fetch_array($result)) {
                $achiver = new Achivers();
                $achiver->setAchiverId($row['achiver_id']);
                $achiver->setFirstName($row['first_name']);
                $achiver->setLastName($row['last_name']);
                $achiver->setLocation($row['location']);
                $achiver->setAge($row['age']);
                $achiver->setProblem($row['problem']);
                $achiver->setSolution($row['solution']);
                $achiver->setMessage($row['message']);
                $achiver->setAchievement($row['achievement']);
                $achiver->setPicture($row['picture']);
                $this->achiverObject[]=$achiver;
            }
            
        }
        
    }

    // insert form data
    public function insert($iq){
       $result = mysql_query($iq);
       if(!$result){
           echo 'An Error has occured, Data Not saved in database '.$iq;
           return false;
       }else{
           return true;
       }
        
    }
	
	//This method takse sql query as parameter and return json object
	
	public function getContent($query){
			$result = mysql_query($query);			
			while($row = mysql_fetch_assoc($result)){
				$json_output[] = $row;
			}
			return json_encode($json_output);
		}
		
		
	/************** function to delte tetimonial **************/
	public function deleteTesti($testi_id){
			echo $testi_id;
			$query = "DELETE FROM achivers WHERE achiver_id=".$testi_id;
			if(!mysql_query($query)){
					return "Error : Unable to Delete";
				}else{
					return "Done";
					}
		}
		
	/*************** edit testimonial **********************/		
			
	
	
}
