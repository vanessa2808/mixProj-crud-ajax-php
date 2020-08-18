<?php
include 'model/userModel.php';
include 'libs/function.php';

class userController {

    public function handleRequest() {
        $model = new userModel();
        $functionCommon = new FunctionCommon();
        $action = isset($_GET['action'])?$_GET['action']:'login';
        switch ($action) {
            case 'login':
                if (isset($_POST['login'])) {
                    $email = $_POST['email'];
                    $password =$_POST['password'];
                    $checklogin = $model->login($email, $password);
                    if ($checklogin->num_rows > 0) {
                        $_SESSION['login'] = $email;
                        $functionCommon->redirectPage( 'index.php?action=list_users');

                    }
                }
                include 'login.php';
                break;
            case 'logout':
                unset($_SESSION['login']);
                $functionCommon->redirectPage('index.php?action=login');

                break;
            case 'fetch.php':
                include 'view/users/fetch.php';
                break;
            case 'list_users':
                $this->checkLoginSession();

                $userList = $model->getUserPage();

                include 'view/users/list_users.php';
                break;

            case 'delete_users':
                $id = $_GET['id'];
                if ($model->deleteUsers($id) === TRUE) {
                    $functionCommon->redirectPage('index.php') ;
                    $_SESSION['msg'] = 'Deleted successfully!';
                } elseif ($model->deleteUsers($id) === false) {
                    $_SESSION['msg'] = 'Something went wrong!';
                } else {
                    $_SESSION['msg'] = $model->deleteUsers($id);
                }
                break;
            case 'add_users':
                if (isset($_POST['add_user_form'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $address = $_POST['address'];
                    $birthday = date('Y-m-d');
                    $avatar = 'default.jpg';
                    $pathUpload = 'webroot/uploads/users/';

                    if ($_FILES['avatar']['error'] == TRUE) {
                        move_uploaded_file($_FILES['avatar']['tmp_name'], $pathUpload.$_FILES['avatar']['name']);
                        $avatar = $_FILES['avatar']['name'];

                    }

                    $role_id = 1;
                    $created = date('Y-m-d h:i:s');
                    $updated = date('Y-m-d h:i:s');
                    if ($model->addUsers($name, $email, $password, $address, $birthday,$avatar,$role_id,  $created, $updated) === TRUE) {
                        $functionCommon->redirectPage('index.php');
                        $_SESSION['msg'] = 'Create successful!';

                    } elseif ($model->addUsers($name, $email, $password, $address, $birthday,$avatar,$role_id,  $created, $updated) === false) {
                        $_SESSION['msg'] = 'Create failed!';
                    } else {
                        $_SESSION['msg'] = $model->addUsers($name, $email, $password, $address, $birthday,$avatar,$role_id,  $created, $updated);
                    }
                }

                include 'view/users/add_users.php';
                break;
            case 'edit_users':
                $id = $_GET['id'];
                $model = new userModel();
                $editUsers = $model->getUsers($id);
                if (isset($_POST['edit_users_form'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $address = $_POST['address'];
                    $birthday = date('Y-m-d');
                    $avatar = 'default.jpg';
                    $pathUpload = 'webroot/uploads/users/';

                    if ($_FILES['avatar']['error'] == TRUE) {
                        move_uploaded_file($_FILES['avatar']['tmp_name'], $pathUpload.$_FILES['avatar']['name']);
                        $avatar = $_FILES['avatar']['name'];

                    }

                    $role_id = 1;
                    $created = date('Y-m-d h:i:s');
                    $updated = date('Y-m-d h:i:s');

                    if ($model->editUsers($id,$name,$email,$password,$address,$birthday, $avatar, $role_id, $created, $updated) === TRUE) {
                        $functionCommon->redirectPage('index.php');
                    }
                }
                include 'view/users/edit_users.php';
                include "index.php";
                break;




            default:
                # code...
                break;
        }
    }
    function checkLoginSession() {
        $model = new userModel();
        $functionCommon = new FunctionCommon();
        if (!isset($_SESSION['login'])) {
            $functionCommon->redirectPage(); ("admin.php?&action=login");
        }
    }

}
?>