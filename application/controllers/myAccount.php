<?php

	class myAccount extends CI_Controller
	{
	    public function index()
	    {
	        $data["content"] = "userConfig/MyInfo";
	        $this->load->view('userView', $data);
	    }
	    public function History(){
	    	$data["content"] = "userConfig/userHistory";
	        $this->load->view('userView', $data);
	    }
	    public function myCart(){
	    	$data["content"] = "userConfig/cartView";
	        $this->load->view('userView', $data);
	    }
	   	public function changePassword(){
	   		$data["content"] = "userConfig/changePassword";
	        $this->load->view('userView', $data);

	   	}
	}
