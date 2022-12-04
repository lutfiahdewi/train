<?php 
//var_dump($_POST);

// Data in JSON format
 
$data = array(
    'username' => $_POST["username"],
    'name' =>  $_POST["name"],
    'email' =>  $_POST["email"],
    'password' =>  $_POST["password"]
);
 
$payload = json_encode($data);
var_dump($payload);
// Prepare new cURL resource
$ch = curl_init('http://localhost:8080/register');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
 
// Set HTTP Header for POST request
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($payload))
);
 
// Submit the POST request
$result = curl_exec($ch);
var_dump($result);
 if($result!=''){
    echo "
     <script>
         alert('Tidak berhasil registrasi.\n
         Error message: "; echo $result; "');
         document.location.href='signup.php';
     </script>";
 }else{
    echo "
     <script>
         alert('Berhasil registrasi, silahkan sign in');
         document.location.href='signin.php';
     </script>";
 }
// Check any error 
if (curl_errno($ch)) {
    $error_msg = curl_error($ch);
}

// Close cURL session handle
curl_close($ch);
 
if (isset($error_msg)) {
    echo $error_msg;
}