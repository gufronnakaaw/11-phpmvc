<?php 

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Home';
        $data['header'] = 'Welcome to page PHP MVC';
        $data['name'] = "Gufronnaka A.W";

        $this->view('home/templates/header', $data);
        $this->view('home/index', $data);
        $this->view('home/templates/footer');
    }
}

