<?php

class User {

  //properties
  public $username;
  protected $email;
  public $role = 'Member';

  public function __construct($username, $email) {
    $this->username = $username;
    $this->email = $email;
  }
  //removes reference to User class (runs destruct method)
  public function __destruct() {
    echo "the user $this->username was removed <br />";
  }
  //this fires whenever a class instance is cloned
  public function __clone() {

    echo "the user $this->username was cloned <br />";
    echo "$this->username (cloned) <br />";
  }

  public function sayMyName() {
    return "Your name is $this->username and your email is $this->email";
  }

  public function addFriend() {
    return "$this->username added a new friend";
  }

  public function message() {
    return "$this->email sent a message";
  }

  //GETTERs
  public function getEmail() {
    return $this->email;
  }

  //setters
  public function setEmail($email) {
    //strpos checks if a char exists for a var
    if (strpos($email, '@') > -1) {
      $this->email = $email;
    }
  }

}

class AdminUser extends User {

  public $level;
  public $role = 'Admin';

  public function __construct($username, $email, $level) {
    $this->level = $level;
    //sets the properties using the parent construct
    parent::__construct($username, $email);
  }

  public function message() {
    return "$this->email sent an admin message";
  }

}

$user1 = new User('tom', 'tom@gmail.com');
$user2 = new User('shaun', 'shaun@gmail.com');
$user3 = new AdminUser('yoshi', 'yoshi@gmail.com', 5);

$user4 = clone $user3;

echo $user2->role . '<br />';
echo $user3->role . '<br />';

echo $user1->message() . '<br />';
echo $user3->message() . '<br />';

// echo $user3->username . '<br />';
// echo $user3->getEmail() . '<br />';
// echo $user3->level . '<br />';

// $user2->setEmail('heycom');

// echo $user2->getEmail() . '<br />';

// echo $user1->sayMyName() . '<br />';
// echo $user2->sayMyName() . '<br />';
// echo $user1->addFriend();

//can get the class name
// echo 'the class is '. get_class($user1);

//get all the properties from a particular class
// print_r(get_class_vars('User'));
// //get all methods from a class
// print_r(get_class_methods('User'));


?>

<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <meta http-equiv='X-UA-Compatible' content='ie=edge'>
  <title>PHP OOP Tuts</title>
</head>
<body>

</body>
</html>