<?php
class HomeController extends CI_Controller
{
    public function home(){
        $data['nav'] = $this->load->view('blog/inc/nav', '', true);

        $this->load->view('blog/master', $data);
    }
}

