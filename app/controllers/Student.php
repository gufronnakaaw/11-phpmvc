<?php 

class Student extends Controller {
    public function index()
    {
        $data['title'] = 'Student 2020';
        $data['stn'] = $this->model('StudentModel')->getAllStudent();
        
        $this->view('home/templates/header', $data);
        $this->view('student/index', $data);
        $this->view('home/templates/footer');
    }
    
    public function detail($id)
    {
        $data['title'] = 'Detail Student';
        $data['stn'] = $this->model('StudentModel')->getStudentById($id);
        
        $this->view('home/templates/header', $data);
        $this->view('student/detail', $data);
        $this->view('home/templates/footer');
    }

    public function add()
    {
        if( $this->model('StudentModel')->insertData($_POST) > 0 ){

            // set flash
            // need 2 param, msg and type of alert
            Flasher::setFlash('Create successfully', 'success');
            header('Location: ' . BASEURL . '/student');
            exit;

        } else {
            
            Flasher::setFlash('Create failed', 'danger');
            header('Location: ' . BASEURL . '/student');
            exit;

        }
    }

    public function delete($id)
    {
        if( $this->model('StudentModel')->deleteData($id) > 0 ){

            // set flash
            // need 2 param, msg and type of alert
            Flasher::setFlash('Delete successfully', 'success');
            header('Location: ' . BASEURL . '/student');
            exit;

        } else {
            
            Flasher::setFlash('Delete failed', 'danger');
            header('Location: ' . BASEURL . '/student');
            exit;

        }
    }

    public function update()
    {
        if( $this->model('StudentModel')->updateData($_POST) > 0 ){

            Flasher::setFlash('Update successfully', 'success');
            header('Location: ' . BASEURL . '/student');
            exit;

        } else {

            Flasher::setFlash('Update failed', 'danger');
            header('Location: ' . BASEURL . '/student');
            exit;

        }
    }

    public function getDataById()
    {
        $id = $_POST['id'];
        $result = $this->model('StudentModel')->getStudentById($id);
        
        echo json_encode($result);
    }

    public function search()
    {
        $data['title'] = 'Student 2020';
        $data['stn'] = $this->model('StudentModel')->searchData($_POST);
        
        $this->view('home/templates/header', $data);
        $this->view('student/index', $data);
        $this->view('home/templates/footer');
    }
    
}