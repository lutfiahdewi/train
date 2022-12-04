<?php
// Data in JSON format

$data = array(
    'email' =>  strval($_POST["email"]),
    'password' =>  strval($_POST["password"])
);

$payload = json_encode($data);
echo $payload . '<br><br>';


// Prepare new cURL resource
$url = 'http://localhost:8080/login';
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// Set HTTP Header for POST request
curl_setopt(
    $curl,
    CURLOPT_HTTPHEADER,
    array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($payload)
    )
);
curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);

$response = curl_exec($curl);
$result = json_decode($response, true);
echo gettype($response) . '<br>';


echo $result;

// Close cURL session handle
curl_close($curl);

if (strlen($response) > 200) {
    $token = substr($response, 10, 177);
    $role = substr($response, 197, 6);
    setcookie('token', $token, time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie('role', $role, time() + (86400 * 30), "/"); // 86400 = 1 day
    echo "
     <script>
         alert('Berhasil Login.');
         document.location.href='index.php';
     </script>";
} else {
    echo "
     <script>
     alert('Tidak berhasil Login.\n
     Error message: " . $result .
        "');
        document.location.href='signin.php';
     </script>";
}

echo $_COOKIE['token'];