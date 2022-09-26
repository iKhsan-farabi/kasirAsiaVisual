<?php
class Login extends Controller
{
    public function index()
    {

        $this->view('login/index');
    }
    public function prosesLogin()
    {

        if (isset($_POST['LoginSubmit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $data['login'] = $this->model('Login_model')->getUser($username, $password);
            if ($this->model('Login_model')->getUser($username, $password)) {
                
                //User Found
                $loggedInUser = $this->model('Login_model')->getUser($username, $password);
                if ($loggedInUser['level'] == 1) {
                    session_start();
                    $_SESSION['username'] =  $_POST['username'];
                    $_SESSION['password'] =  $_POST['password'];
                    $_SESSION['level'] = $loggedInUser['level'];
                    header("location:" . BASE_URL . "/home");
                    exit();
                } else if($loggedInUser['level']== 2){
                    session_start();
                    $_SESSION['username'] =  $_POST['username'];
                    $_SESSION['password'] =  $_POST['password'];
                    $_SESSION['level'] = $loggedInUser['level'];
                    header("location:" . BASE_URL . "/home");
                    exit();
                }else if($loggedInUser['level']== 3){
                    session_start();
                    $_SESSION['username'] =  $_POST['username'];
                    $_SESSION['password'] =  $_POST['password'];
                    $_SESSION['level'] = $loggedInUser['level'];
                    header("location:" . BASE_URL . "/home");
                    exit();
                }else{
                  header('Location:'.BASE_URL.'/login');
                    
                }
            }   
    
        }else{
            header('Location:'.BASE_URL.'/login');
        }
    }
    public function logout()
    {
       session_start();
       session_destroy();
       unset($_SESSION['username']);
       unset($_SESSION['password']);
       header('Location: ' . BASE_URL . '/login');
    }
}
