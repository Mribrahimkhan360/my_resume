<?php
require_once '../vendor/autoload.php';
use App\classes\Resume;
use App\classes\Auth;

if (isset($_POST['register']))
{
    $register = new Resume($_POST);
    $register->register();
}
else if (isset($_POST['add_contact'])) {
    $add_contact = new Resume($_POST);
    $add_contact->addContact();
}
else if (isset($_POST['add_education'])) {
    $add_education = new Resume($_POST);
    $add_education->addEducation();
}
else if (isset($_POST['experience'])) {
    $add_experience = new Resume($_POST);
    $add_experience->addExperience();
}
else if (isset($_POST['add_skill'])) {
    $add_skill = new Resume($_POST);
    $add_skill->addSkill();
}
else if (isset($_GET['status']))
{
    if ($_GET['status'] == 'manage')
    {
        $student = new Resume();
        $students = $student->getAllStudentInfo();
        $userCount = $student->getUserCount();
        include 'manage.php';
    }
    else if($_GET['status']=='delete'){
        $id = $_GET['id'];
        $student = new Resume();
        $student->delete($id);
        $students = $student->getAllStudentInfo();
        include 'manage.php';
    }
    else if($_GET['status']=='logout')
    {
        $auth = new Auth();
        $auth->logout();

    }
    else if ($_GET['status'] == 'index')
    {
        $student = new Resume();
        $students = $student->getAllStudentInfo();
        include 'index.php';
    }
    else if ($_GET['status'] == 'details')
    {
        $id         = $_GET['10'];
        $student     = new Resume();
        $students = $student->getProductInfoById($id);
        include 'index.php';
    }

}
else if(isset($_POST['login']))
{
    $loginResume = new Resume($_POST );
    $login = $loginResume->login();
}