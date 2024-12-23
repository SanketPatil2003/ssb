<?php
// backend.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $address = htmlspecialchars($_POST['address']);

    $response = [
        'status' => 'success',
        'data' => [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'dob' => $dob,
            'address' => $address,
        ],
    ];

    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
} else {
    header('HTTP/1.1 405 Method Not Allowed');
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
    exit;
}
?>
