<?php 

class About extends Controller
{
    public function index()
    {

        $data['title'] = 'About';
        $data['header'] = 'About Me';
        $this->view('home/templates/header', $data);
        $this->view('home/about', $data);
        $this->view('home/templates/footer');
    }
}