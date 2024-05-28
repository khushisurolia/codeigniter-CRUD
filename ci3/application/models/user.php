<?php
class User extends CI_model{
	function saveData($name,$email,$password,$image){
		 $sql="INSERT INTO `codeigniter` (`name`,`email`,`password`,`image`) VALUES ('$name','$email','$password','$image')";
		 $this->db->query($sql);
		
	}
	function fetchData(){
		$sql="SELECT * FROM `codeigniter`";
		$result=$this->db->query($sql);
		return $result->result();
	}
	function deleteData($id){
		$sql="DELETE FROM `codeigniter` WHERE id='$id'";
		$this->db->query($sql);
	}
	function displayData($id){
        $sql="select * from codeigniter where id='$id'";
		$result=$this->db->query($sql);
		// print_r($query);
		return $result->result();

	}

	function updateData($id,$name,$email,$password){
		$sql="UPDATE `codeigniter` SET name='$name', `email`='$email',`password`='$password' WHERE `id` = '$id'";
	// die('hi');	
	 $this->db->query($sql);
	}

}
?>
