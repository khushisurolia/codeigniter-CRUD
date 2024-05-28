<?php
class angular_model extends	CI_model{
	function sendData($name,$email,$password,$cPassword,$address,$number){
		 $sql="INSERT INTO `codeigniter` (`name`,`email`,`password`,`cPassword`,`address`,`number`) VALUES ('$name','$email','$password','$cPassword','$address','$number')";
		 $this->db->query($sql);
	}


	function fetchData(){
		$sql="SELECT * FROM `codeigniter`";
		$result=$this->db->query($sql);
		return $result->result();
	}


  function fetchDataById($id){
  $sql="select * from codeigniter where id='$id'";
   $data=$this->db->query($sql);
    return $data->result();
}

function deleteDataById($id){	
	$sql="delete from codeigniter where id='$id'";
   	print_r($sql);
	$this->db->query($sql);
	echo "record deleted successfully";
}


function editDataById($id,$name,$email,$password,$cPassword,$address,$number){
	 $sql="update codeigniter set name='$name',email='$email',password='$password',cPassword='$cPassword',address='$address',number='$number' where id='$id'";
	$this->db->query($sql);


}
}



?>
