<?php /**
* 
*/
class Display extends CI_Controller
{
	
	function __construct()
	{
		# code..
		parent ::__construct();
		
	}
	public function display_wadir()
	{
		$this->load->view('Display/V_display_wadir');# code...
	}

	public function display_direktur()
	{
		$this->load->view('Display/V_display_direktur');# code...
	}
	public function display_ti()
	{
		$this->load->view('Display/V_display_ti');# code...
	}
	public function display_tip()
	{
		$this->load->view('Display/V_display_tip');# code...
	}
	public function display_mo()
	{
		$this->load->view('Display/V_display_mo');# code...
	}
	public function display_ak()
	{
		$this->load->view('Display/V_display_ak');# code...
	}
	public function display_lobi()
	{
		$this->load->view('Display/V_display_lobi');# code...
	}
} ?>