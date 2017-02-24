 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
//	public function index()
//	{
//		$this->load->view('welcome_message');
//	}
//	public function login()
//	{
//		$this->load->view('login');
//	}
//	public function save()
//	{
//		$flag=TRUE;
//		$usename = $this->input->post('uname');
//		$password = $this->input->post('pass');
//		$data=array();
//		if($usename==''){
//			$data['err_name']='请输入用户名';
//			$flag=FALSE;
//		}
//		if($password==''){
//			$data['err_pwd']='请输入密码';
//			$flag=FALSE;
//		}
//		if($flag==FALSE){
//		//	redirect('welcome/login');//重定向    回到login  但不支持传参  不能显示输入字样
//			$this->load->view('login',$data);
//		}else{
//			$this->load->model('user_modol');
//			$rows=$this->user_modol->save($usename,$password);
//			if(rows>0){
//				echo "ok";
//			}else{
//				echo "fail";
//			}
//		}
//	}

 	public function login(){
		$this->load->view('login');
	}


}
