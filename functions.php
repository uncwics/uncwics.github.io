<?php

function emptyInputSignup ($firstname, $lastname, $email, $password) {
    if (empty($firstname || $lastname || $email || $password)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

// Add pregmatch to sanitize data 

function invalidEmail ($email) {
    if (!filter_var($email, FILTER_SANITIZE_EMAIL)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function emailExists ($email, $conn) {
    $stmt = $conn->prepare("SELECT email, password, firstname FROM account WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    if(empty($data)) {
        return false;
    } else {
        $result = $data;
        return $result;
    }
}

function CreateUser($firstname, $lastname, $email, $password, $conn) {
    $stmt = $conn->prepare("INSERT INTO account(firstname, lastname, email, password) VALUES(?,?,?,?)");
    if(!$stmt){
        header('location: index.php?error=stmtfailed');
        exit();
    }
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $stmt->bind_param("ssss", $firstname, $lastname, $email, $password_hash);
    $stmt->execute();
    header('location: index.php?error=none');    
}

function LogInUser($email, $password, $conn) {
    $account = emailExists($email, $conn);
    if ($account === false){
     header('location: loginpage.php?error=emaildoesnotexists');
     exit();
   } else {
    $hashedpassword = $account['password'];
    $checkpwd = password_verify($password, $hashedpassword);
    if($checkpwd === false){
        header('location: loginpage.php?error=wronglogin');
    } else if ($checkpwd === true) {
        session_start();
        //Create Session Variables
        $_SESSION['firstname'] = $account['firstname'];
        header('location: index.php?login=valid');
        exit();
    }
   }
}
