<?php


namespace App\classes;


class Resume
{
    private $fname;
    private $ssc;
    private $position;
    private $title;
    private $company;
    private $description;
    private $skill;
    private $hsc;
    private $bsc;
    private $lname;
    private $email;
    private $password;
    private $website;
    private $link;
    private $sql;
    private $queryResult;
    private $data = [];
    private $row;
    private $i;
    private $student_id;

    public function __construct($data = null)
    {
        if ($data)
        {
            $this->position      = $data['position'];
            $this->title         = $data['title'];
            $this->skill         = $data['skill'];
            $this->company       = $data['company'];
            $this->description   = $data['description'];
            $this->fname         = $data['fname'];
            $this->lname         = $data['lname'];
            $this->email         = $data['email'];
            $this->mobile        = $data['mobile'];
            $this->bsc           = $data['bsc'];
            $this->hsc           = $data['hsc'];
            $this->ssc           = $data['ssc'];
            $this->website       = $data['website'];
            $this->password      = md5($data['password']);
            if (isset($data['student_id']))
            {
                $this->student_id     = $data['student_id'];
            }
        }
    }
    public function register()
    {
        $this->link = mysqli_connect('localhost','root','','php-15-database');
        if ($this->link)
        {
            $this->sql = "INSERT INTO users (fname,lname,email,mobile,password)VALUES('$this->fname','$this->lname','$this->email','$this->mobile','$this->password')";
            if (mysqli_query($this->link,$this->sql))
            {
                header('Location:login.php?message=success');
            }
            else {
                die('Database establishment error!'.mysqli_error($this->link));
            }
        }
    }
    public function getUserCount()
    {
        $this->link = mysqli_connect('localhost', 'root', '', 'php-15-database');
        $this->sql = "SELECT COUNT(*) as user_count FROM users";  // SQL query to count the number of users
        $result = mysqli_query($this->link, $this->sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            return $row['user_count'];  // Return the count
        } else {
            die('Query Problem: ' . mysqli_error($this->link));
        }
    }

    public function getAllStudentInfo()
    {
        $this->link = mysqli_connect('localhost','root','','php-15-database');
        $this->sql = "SELECT * FROM users";
        if (mysqli_query($this->link, $this->sql)) {
            $this->queryResult = mysqli_query($this->link, $this->sql);
            $this->i = 0;
            while ($this->row = mysqli_fetch_assoc($this->queryResult))
            {
                $this->data[$this->i]['id']          = $this->row['id'];
                $this->data[$this->i]['fname']       = $this->row['fname'];
                $this->data[$this->i]['lname']       = $this->row['lname'];
                $this->data[$this->i]['email']       = $this->row['email'];
                $this->data[$this->i]['mobile']      = $this->row['mobile'];
                $this->i++;
            }
            return $this->data;
        }
        else{
            die('Qurey Problem'.mysqli_error($this->link));
        }
    }


    public function delete($id)
    {
        $this->link = mysqli_connect('localhost','root','','php-15-database');
        $this->sql = "DELETE FROM users WHERE id='$id'";
        mysqli_query($this->link,$this->sql);
        if (mysqli_query($this->link,$this->sql))
        {
            session_start();
            $_SESSION['message'] = 'User info delete successfully!';
            header('location:action.php?status=manage');
        }
        else{
            die('Qurey problem ..'.mysqli_error($this->link));
        }
    }
    public function login()
    {
        header('Location:action.php?status=manage');
    }
    public function getProductInfoById($id)
    {
        $this->link = mysqli_connect('localhost', 'root', '', 'php-16-crud');
        if ($this->link) {
            $this->sql = "SELECT * FROM users WHERE id = '$id'";
            if (mysqli_query($this->link, $this->sql)) {
                $this->queryResult = mysqli_query($this->link, $this->sql);
                return mysqli_fetch_assoc($this->queryResult);
            }
            else{
                die('Query problem..'.mysqli_error($this->link));
            }
        }
    }
    public function addContact()
    {
        $this->link = mysqli_connect('localhost','root','','php-15-database');
        if ($this->link)
        {
            $this->sql = "INSERT INTO contact (mobile,email,website)VALUES('$this->mobile','$this->email','$this->website')";
            if (mysqli_query($this->link,$this->sql))
            {
                header('Location:add_contact.php?message=success');
            }
            else {
                die('Database establishment error!'.mysqli_error($this->link));
            }
        }
    }
    public function addEducation()
    {
        $this->link = mysqli_connect('localhost','root','','php-15-database');
        if ($this->link)
        {
            $this->sql = "INSERT INTO education (bsc,hsc,ssc)VALUES('$this->bsc','$this->hsc','$this->ssc')";
            if (mysqli_query($this->link,$this->sql))
            {
                header('Location:add_education.php?message=success');
            }
            else {
                die('Database establishment error!'.mysqli_error($this->link));
            }
        }
    }
    public function addSkill()
    {
        $this->link = mysqli_connect('localhost','root','','php-15-database');
        if ($this->link)
        {
            $this->sql = "INSERT INTO skils (skill)VALUES('$this->skill')";
            if (mysqli_query($this->link,$this->sql))
            {
                header('Location:add_skill.php?message=success');
            }
            else {
                die('Database establishment error!'.mysqli_error($this->link));
            }
        }
    }
    public function addExperience()
    {
        $this->link = mysqli_connect('localhost','root','','php-15-database');
        if ($this->link)
        {
            $this->sql = "INSERT INTO experience (position,title,company,description)VALUES('$this->position','$this->title','$this->company','$this->description')";
            if (mysqli_query($this->link,$this->sql))
            {
                header('Location:add_experience.php?message=success');
            }
            else {
                die('Database establishment error!'.mysqli_error($this->link));
            }
        }
    }
    public function getContactInfo()
    {
        $this->link = mysqli_connect('localhost','root','','php-15-database');
        $this->sql = "SELECT * FROM contact";
        if (mysqli_query($this->link, $this->sql)) {
            $this->queryResult = mysqli_query($this->link, $this->sql);
            $this->i = 0;
            while ($this->row = mysqli_fetch_assoc($this->queryResult))
            {
                $this->data[$this->i]['id']                  = $this->row['id'];
                $this->data[$this->i]['mobile']              = $this->row['mobile'];
                $this->data[$this->i]['email']               = $this->row['email'];
                $this->data[$this->i]['website']             = $this->row['website'];
                $this->i++;
            }
            return $this->data;
        }
        else{
            die('Qurey Problem'.mysqli_error($this->link));
        }
    }

}