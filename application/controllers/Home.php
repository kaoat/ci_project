<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->model('Category_model');
    }
    
    public function index($user_data = "")
    {
        $data["Pre"] = $this->Product_model->getProducts();

        $category=$this->Category_model->getCategories();
        $category=array(
            'category'=>$category
        );
        $this->session->set_userdata($category);
        $data["user"] = $user_data;
        
        $data['Product'] = $this->Product_model->getProducts();

        $data['SeeAll'] = "Yes";
        $data['content'] = 'Shop/ShopMain';

        $this->load->view('indexView', $data);
    }
}
