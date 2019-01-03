<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2018-12-25
     * Time: 오후 3:17
     */

    include_once __DIR__.'/../php/DBconnect.php';  //상위폴더 인클루드
    include_once 'specialSTR.php';

    $id=$_POST['id'];
    $password=$_POST['password'];
    $email1=$_POST['email1'];
    $name=$_POST['name'];
    //$email2=$_POST['email2'];
    //$phone=$_POST['phone'];

    if($id==null || $password==null || $email1==null || $name==null)
    {
        $msg = "빈칸을 입력해주세요.";
        echo "<script>alert('$msg'); history.back(); </script>";
    }

    else if (return_special($id) || return_special($email1) || return_special($name))
    {
        $msg = "특수문자는 사용할 수 없습니다.";
        echo "<script>alert('$msg'); history.back();</script>";
        /*var_dump($id);
        var_dump($password);
        var_dump($email1);
        var_dump($name);*/
    }

    else
    {
        $real_id = mysqli_real_escape_string($con,$id);
        $real_pw = mysqli_real_escape_string($con,$password);
        $real_email1 = mysqli_real_escape_string($con,$email1);
        $real_name = mysqli_real_escape_string($con,$name);
        //$real_email2 = mysqli_real_escape_string($con,$email2);
        //$real_email = $real_email1.$real_email2;
        //$real_phone = mysqli_real_escape_string($con,$phone);


        $check_query = "select id from imf where id='$real_id'";
        $check_result = mysqli_query($con,$check_query);
        $check = mysqli_fetch_array($check_result);
        $check_id = $check['id'];

        if ($check_id == $real_id)
        {
            $msg = "아이디가 중복됩니다.";
            echo "<script>alert('$msg'); history.back(); </script>";
        }

        else
        {
            $insert_query = "INSERT INTO imf(id,pw,email,name) values('$real_id','$real_pw','$real_email1','$real_name')";
            //var_dump($name);
            //var_dump($real_name);
            mysqli_query($con,$insert_query);
        }
    }
    ?>