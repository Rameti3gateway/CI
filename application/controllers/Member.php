<?php 
	class Member extends CI_Controller
	{		
		public function __construct()
		{
			parent::__construct();
		}
		public function index()
		{
			$sql = "Select * from tb_member order by id asc";
			$rs =$this->db->query($sql);
			$data['rs'] = $rs->result_array();
			$this->load->view('member/index',$data);
		}
		public function add()
		{
			if ($this->input->post("btsave")!=null) {
				$ar = array(
					'member_name' => $this->input->post('member_name'),
					'member_tel'  => $this->input->post('member_tel'),
					'member_address'  => $this->input->post('member_addr'),

				);
				$this->db->insert('tb_member',$ar);
				redirect('member','refresh');
				exti();
			} 
			$this->load->view('member/Add');
		}
		public function del($id)
		{
			$this->db->delete('tb_member', array('id' => $id)); 
			redirect('member','refresh');
			exit();
		}
		public function edit($id)
		{
			if ($this->input->post("btsave")!=null) {
				$ar = array(
					'member_name' => $this->input->post('member_name'),
					'member_tel'  => $this->input->post('member_tel'),
					'member_address'  => $this->input->post('member_addr'),
				);
				$this->db->where('id',$id);
				$this->db->update('tb_member',$ar);
				redirect('member','refresh');
				exti();
			} 
			$sql = "Select * from tb_member where id='$id'";
				$rs= $this->db->query($sql);
				if ($rs->num_rows()==0) 
				{
					$data['rs']=array();
				} else {
					$data['rs']=$rs->row_array();
				}
			
			$this->load->view('member/Edit',$data);

		}
	}
?>