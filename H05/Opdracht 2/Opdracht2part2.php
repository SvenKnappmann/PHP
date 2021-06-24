<?php
if ($_POST['firstName'] == "" && $_POST['address'] == "" && $_POST['email'] == "" && $_POST['password'] == "") {
    echo "You have not given any information yet!<br>";
    echo "<a href='Opdracht2.html'>Go back!</a>";
} elseif ($_POST['firstName'] == "" || $_POST['address'] == "" || $_POST['email'] == "" || $_POST['password'] == "") {
    if ($_POST['firstName'] == "") {
        echo "Your first name is invalid!<br>";
    }
    if ($_POST['address'] == "") {
        echo "Your address is invalid!<br>";
    }
    if ($_POST['email'] == "") {
        echo "Your e-mail is invalid!<br>";
    }
    if ($_POST['password'] == "") {
        echo "Your password is invalid!<br>";
    }
    echo "<a href='Opdracht2.html'>Go back!</a>";
} else {
echo "first name - ";
print_r($_POST['firstName']);
echo "<br>";
echo "address - ";
print_r($_POST['address']);
echo "<br>";
echo "e-mail - ";
print_r($_POST['email']);
echo "<br>";
echo "password - ";
print_r($_POST['password']);
echo "<br>";
}