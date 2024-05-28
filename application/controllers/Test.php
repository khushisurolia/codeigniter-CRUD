<?php
class Test extends CI_Controller{
	 public function __construct()
	 {
      parent::__construct();
	  //modal load
		$this->load->model('user');
		$this->load->database();
		$this->load->helper('url');
	    $this->load->helper('form');
	$this->load->library('form_validation');

	}
	// fetch data from database
	public function about(){
		   $result=$this->user->fetchData();
           $this->load->view('abc',array('result'=>$result));
	}
	//insert data
	public function registerform(){
		$this->load->view('abcd');
	}
     public function save()
	 {
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required|max_length[6]');
		if($this->form_validation->run()==FALSE){	
			$this->load->view('abcd');
		}
	 else{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$query=$this->db->query("select * from codeigniter where email='$email'");
		$row=$query->num_rows();
		if($row){
		echo "email already exist";
		exit;
		}

				// $config['upload_path']= './uploads/';
				// $config['allowed_types'] = '*';
				// $config['max_width']=2000;
				// $config['max_height']=1000;
				// $this->load->library('upload',$config);	

				// if($this->upload->do_upload('image')){
				// $data = array('image_metadata' => $this->upload->data());
				// $image = $data['image_metadata']['client_name'];
			
				// }
				// else {
				// echo "Error: ". $this->upload->display_errors();
				// }
		$this->user->saveData($name,$email,$password);
		echo "<script>alert('record saved successfully');</script>";
		redirect('/test/about','refresh');

		}
        
		}
		//delete
	     public function delete(){
			$id=$_GET['id'];
			$this->user->deleteData($id);
			echo "<script>alert('record deleted successfully');</script>";
			     redirect('/test/about', 'refresh');

		 }
            //  diplay data for edit
		     public function display(){
			$id=$this->input->get('id');
			$result=$this->user->displayData($id);
			$this->load->view('update',array('result'=> $result));
		 }
        //    edit 
		 public function edit(){
			$id=$this->input->post('id');
			if($this->input->post('edit')=='update'){
				$name=$this->input->post('name');
				$email=$this->input->post('email');
				$password=$this->input->post('password');
			}
			$this->user->updateData($id,$name,$email,$password);
			echo "<script>alert('record updated successfully');</script>";
			     redirect('/test/about','refresh');
		 }

		 }
	
			
		
 




?>
