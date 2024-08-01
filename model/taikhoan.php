<?php
function loadall_taikhoan()
{
    $sql = "SELECT * FROM taikhoan ORDER BY id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function loadone_taikhoan($id)
{
    $sql = 'SELECT * FROM taikhoan WHERE id=' . $id;
    $tk = pdo_query_one($sql);
    return $tk;
}
function insert_taikhoan($email, $user, $pass)
{
    $sql = "INSERT INTO taikhoan(email,user,pass) VALUE('$email','$user','$pass')";
    pdo_execute($sql);
}
function checkuser($user, $pass)
{
    $sql = "SELECT * FROM taikhoan WHERE user='" . $user . "' AND pass='" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkemail($email)
{
    $sql = "SELECT * FROM taikhoan WHERE email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
// function update_taikhoan($id,$pass, $email, $address, $tel)
// {
//     $sql = "UPDATE taikhoan SET pass='" . $pass . "', email='" . $email . "', address='" . $address . "', name='" . $pass . "', where id=" . $id;
//     pdo_execute($sql);
// }
// controller
function update_taikhoan($id, $user, $pass, $email, $address, $tel)
{
    $sql = "UPDATE taikhoan SET user='" . $user . "',pass='" . $pass . "',email='" . $email . "',address='" . $address . "',tel='" . $tel . "' where id=" . $id;
    pdo_execute($sql);
}
