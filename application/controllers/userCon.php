<?php

defined('BASEPATH') or exit('No direct script access allowed');

class userCon extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('userModel');
    }

    public function index()
    {
        $this->load->view('loginRegisterView');
    }
    public function register()
    {
    }
    private function check_password($password)
    {
    }
    private function check_register()
    {
    }
    public function login()
    {
        if ($_POST["auth"] != "" && $_POST["pwloginfield"] != "") {
            if ($user_id = $this->check_login($_POST["auth"], $_POST["pwloginfield"])) {
                $data["user"] = $this->userModel->get_specific_user($user_id);
                redirect("indexCon/index", $data);
            }
        }
    }
    private function check_email($email)
    {
        // * email must be contained "@" only one
        // * email must be not contained one of as follows: "!", "#","$", "%"
        $email_condition = preg_match_all("/@/", $email) == 1 && !preg_match("/[!#$%]/", $email);
        if ($email_condition) {
            return true;
        }
        return false;
    }
    private function check_mobile($mobile)
    {
        // * mobile must be contained with 10 characters of number
        // * length of mobile must be 10
        // * mobile must be started with "0" and follow by "6", "8", "9"
        $mobile_condition = strlen($mobile) == 10 && preg_match_all("/[0-9]/", $mobile) == 10;
        $mobile_condition = $mobile_condition && preg_match("/0/", $mobile[0]) && preg_match("/[689]/", $mobile[1]);
        if ($mobile_condition) {
            return true;
        }
        return false;
    }
    private function check_login($auth, $p)
    {
        // * preventing for sql injection
        $injection = preg_match("/ or | and /i", $auth);
        if ($injection) {
            return false;
        }
        if ($this->check_mobile($auth)) {
            $type = "mobile";
        } else if ($this->check_email($auth)) {
            $type = "email";
        } else {
            return false;
        }
        $query = $this->userModel->get_user_login($type);
        foreach ($query as $row) {
            if ($auth == ($type == "email" ? $row->email : $row->mobile) && $p == $row->password) {
                return $row->user_id;
            }
        }
        return false;
    }
}
