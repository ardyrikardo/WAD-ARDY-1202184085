<?php

    if (!isset($_SESSION)) {
        session_start();
    }

    $conn = mysqli_connect("localhost","root","","wad_modul4");

    function query($query){

        global $conn;
        $result = mysqli_query($conn,$query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows [] = $row;
        }
        return $rows;

    }

    function regis($data){
    
        global $conn;
        // nampung ke database
        $nama = $data["nama"];
        $email = $data["email"];
        $no_hp = $data["no_hp"];
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $repassword = mysqli_real_escape_string($conn, $data["repassword"]);

        // nampung session data
        $_SESSION["nama"] = "$nama";
        $_SESSION["email"] = "$email";
        $_SESSION["no_hp"] = "$no_hp";
        $_SESSION["password"] = "$password";

        mysqli_query($conn, "INSERT INTO user VALUES('','$nama','$email','$no_hp','$password')");


        return mysqli_affected_rows($conn);

        

    }

    function login($data)
    {
    global $conn;

    $email = $data['email'];
    $password = $data['password'];

    // cek email
    $emailCek = "SELECT * FROM user WHERE email = '$email'";
    $select = mysqli_query($conn, $emailCek);

    if (mysqli_num_rows($select) == 1) {
        $result = mysqli_fetch_assoc($select);

        // cek password
        if ($password == ($result['password'])) {
            $_SESSION['id'] = $result['id'];
            $_SESSION['nama'] = $result['nama'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['no_hp'] = $result['no_hp'];

            // set cookie
            if (is_null($data['remember'])) {
                setcookie('email', '', time() - 1);
                setcookie('password', '', time() - 1);
                setcookie('remember', '', time() - 1);
            } else {
                setcookie("email", $email);
                setcookie("password", $password);
                setcookie("remember", "checked");
            }

            $_SESSION['message'] = 'Berhasil Login';
            header("Location: index.php");
        }
    }
}

if (!empty($_GET['namaBrg'])) {
    $user_id = $_SESSION['id'];
    $price = $_GET['price'];
    $namaBrg = $_GET['namaBrg'];

    $insert = "INSERT INTO cart VALUES ('','$user_id','$namaBrg','$price')";
    mysqli_query($conn, $insert);

    $_SESSION['message'] = 'Berhasil ditambah';

    header("Location: index.php");

    return mysqli_affected_rows($conn);
}

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $delete = "DELETE FROM cart WHERE id='$id'";
    mysqli_query($conn, $delete);

    $_SESSION['message'] = "Berhasil dihapus!";

    header("Location: cart.php");

    return mysqli_affected_rows($conn);
}

function show()
{
    global $conn;

    $user_id = $_SESSION['id'];

    $select = "SELECT * FROM cart WHERE user_id='$user_id'";
    $result = mysqli_query($conn, $select);
    $carts = null;

    while ($cart = mysqli_fetch_assoc($result)) {
        $carts[] = $cart;
    }

    $totalHarga = 0;

    if (!is_null($carts)) {
        foreach ($carts as $harga) {
            $totalHarga += $harga['harga'];
        }

        return array($carts, $totalHarga);
    }
}



function show_profile()
{
    global $conn;
    $id = $_SESSION['id'];

    $select = "SELECT * FROM user WHERE id='$id'";
    $result = mysqli_query($conn, $select);

    $profile = mysqli_fetch_assoc($result);

    return $profile;
}

function update($data)
{
    global $conn;
    $id = $_SESSION['id'];
    $nama = $data['nama'];
    $no_hp = $data['no_hp'];

   
    if (empty($data['password'])) {
        $query = "UPDATE user SET nama = '$nama', no_hp = '$no_hp' WHERE id='$id'";
    } else {
        $password = mysqli_real_escape_string($conn, $data['password']);
        $password_confirm = mysqli_real_escape_string($conn, $data['passwordConfirm']);

      
        if ($password == $password_confirm) {
   
            $password = password_hash($password, PASSWORD_DEFAULT);

            $query = "UPDATE user SET nama = '$nama', no_hp = '$no_hp', password = '$password' WHERE id='$id'";
        }
    }

    $_SESSION['nama'] = $nama;
    $_SESSION['no_hp'] = $no_hp;

    mysqli_query($conn, $query);

    $_SESSION['message'] = 'Berhasil diupdate';

    header("Location: profile.php");

    return mysqli_affected_rows($conn);
}
