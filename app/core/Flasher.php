<?php 

class Flasher {

    // set flash
    // need 2 param
    // message and type of alert
    public static function setFlash($msg, $type)
    {
        $_SESSION['flash'] = [
            'message' => $msg,
            'type' => $type
        ];
    }

    // flash data from $_SESSION['flash']
    public static function flash()
    {
        if( isset($_SESSION['flash']) ){
            
            echo '<div class="alert alert-'. $_SESSION['flash']['type'] .' alert-dismissible fade show" role="alert">
                    <strong>'. $_SESSION['flash']['message'] .'</strong>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            
            unset($_SESSION['flash']);
        }
    }
}