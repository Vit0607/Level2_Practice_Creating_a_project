<?php
require_once 'init.php';

var_dump(Session::get(Config::get('session.user_session')));

$user = new User();
$anotherUser = new User(6);

if($user->isLoggedIn()) {
    echo "Hi, <a href='#'>{$user->data()->username}</a>";
    echo '<p><a href="logout.php">Logout</a></p>';
    echo '<p><a href="update.php">Update profile</a></p>';
    echo '<p><a href="changepassword.php">Change password</a></p>';

    if($user->hasPermissions('admin')) {
        echo 'You are admin!';
    }

} else {
    echo '<a href="login.php">Login</a> or <a href="register.php">Register</a>';
}