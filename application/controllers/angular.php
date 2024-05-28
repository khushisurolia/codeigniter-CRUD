<?php 

header("Access-Control-Allow-Origin: *");
    header('Access-Control-Allow-Credentials: true');    
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
class Angular extends CI_Controller{
	 public function __construct()
	 {
      parent::__construct();
	  $this->load->model('angular_model');
	  $this->load->database();
	  $this->load->helper('url');
		$this->load->helper('form');
	 }
 
 

// inserData 
	 function insertData(){
		$name =$this->input->post('name');
		$email=$this->input->post('email');
		$password= $this->input->post('password');
		$cPassword=$this->input->post('cPassword');
		$address=$this->input->post('address');
         $number=$this->input->post('number');
      
     $this->angular_model->sendData($name,$email,$password,$cPassword,$address,$number); 
		echo 'record saved successfully';
	 }



	 //fetch data 
	 function displayData(){
		$data = $this->angular_model->fetchData();
         echo json_encode($data);
	 }

//edit 
function editData(){
	$id=$this->input->post('id');
	$data = $this->angular_model->fetchDataById($id);
	echo json_encode($data);
}

function editGetData(){
	$id=$this->input->post('id');
	$name=$this->input->post('name');
	$email=$this->input->post('email');
   $password=$this->input->post('password');
   $cPassword=$this->input->post('cPassword');
	$address=$this->input->post('address');
    $number=$this->input->post('number');
	$data=$this->angular_model->editDataById($id,$name,$email,$password,$cPassword,$address,$number);
	echo json_encode($data);
}

 public function deleteData(){
 	$id = $this->input->post('id'); 
   $this->angular_model->deleteDataById($id);

}


}

?>
