<?php
    //cara 1
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','pplg_1_notes');
    $dbconnect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("failed to connect to MySQL:" . mysqli_error($dbconnect));
    
    function kuery($kueri)
    {
        global $dbconnect;
        $result=mysqli_query($dbconnect,$kueri);
        $rows=[];
        while($row = mysqli_fetch_assoc($result))
        {
            $rows[] = $row;
        }
        return $rows;
    }

    // Memasukan Data yang baru
    function inputdata($inputdata)
    {
        global $dbconnect;
        $sql=mysqli_query($dbconnect, $inputdata);
        return $sql;
    }

    //menampilkan data lama yang akan di edit
    function Editdata($tablename,$id)
    {
        global $dbconnect;
        $hasil=mysqli_query($dbconnect,"SELECT * FROM $tablename WHERE id='$id'");
        return $hasil;
    }

    // Memperbarui data lama
    function update($table,$data,$id)
    {
        global $dbconnect;
        $sql= "UPDATE $table SET note = '$data' WHERE id = '$id'";
        $hasil=mysqli_query($dbconnect,$sql);
        return $hasil;
    }

    // Menghapus data lama
    function Delete($tablename,$id)
    {
        global $dbconnect;
        $hasil=mysqli_query($dbconnect, "DELETE FROM $tablename WHERE id='$id'");
        return $hasil;
    }

    // Login
    function cek_login($username,$password){
        global $dbconnect;
        $uname = $username;
        $upass = $password;

        $hasil = mysqli_query($dbconnect,"select * from user where username='$uname' and password=md5('$upass')");
        $cek = mysqli_num_rows($hasil);

        if($cek > 0 ) {
            return true;
        }
        else{
            return false;
        }
    }

    //cara 2
//     $host="localhost";
//     $user="root";
//     $pass="";
//     $db="pplg_1_notes";
//     $dbconnectmysqli_connect("localhost", "root", "", "pplg_1_notes") or die("failed to connect to MySQL:" . mysqli_error($dbconnect));

?>