<?php

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model', 'repo');
    }

    public function index()
    {
       $chapter['allchapter']=$this->repo->getchapters();
  
        $this->load->view('login', $chapter);
    }

    public function test()
    {
       $chapters=$this->repo->getchapters();
 print_r($chapters);

    }


    public function auth()
    {

        // die('if tinawag to');
        $this->output->enable_profiler(false);
        $this->form_validation->set_rules('user', 'Username', 'required|max_length[35]');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[35]');

        $success = $this->form_validation->run($this);

        if ($success) {
            $pdata = array(
                'postusername' => strip_tags(trim($this->input->post('user'))),
                'postpassword' => strip_tags(trim($this->input->post('password')))
            );
            $chkUser = $this->repo->checkuser($pdata);

            if ($chkUser) {
                if ($chkUser->password == md5($pdata['postpassword'])) {

                    $sesdata = array(

                        'Name' => $chkUser->username,
                        'Level' => $chkUser->level,
                        'Active' => true
                    );

                    $this->session->set_userdata($sesdata);
                    $data['response'] = "true";
                    $data['errors'] = "success";
                } else {

                    $data['response'] = "false";
                    $data['errors'] = "invalid password";
                }
            } else {
                $data['response'] = "false";
                $data['errors'] = "Please enter a valid user name ";
            }
        } else {
            $data['response'] = "false";
            $data['errors'] = validation_errors();
        }

        echo json_encode($data);
    }

    function logout()
    {
        $this->session->sess_destroy();
        // $this->Login_model->isoffline();
        redirect(base_url("login"));
    }
}