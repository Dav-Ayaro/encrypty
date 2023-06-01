<?php
// Assuming you have retrieved the entered username and password from the login form
$entered_username = $_POST['entered_username'];
$entered_password = $_POST['entered_password'];

// Retrieve the stored credentials
$stored_username = '...'; 
$stored_encrypted_password = '...'; 

// Decrypt the stored encrypted password and extract the key
$stored_enc_password_parts = explode('-', $stored_encrypted_password);
$stored_password = $stored_enc_password_parts[0];
$stored_key = $stored_enc_password_parts[1];

// Encrypt the entered password using the stored key
$entered_enc_password = md5($entered_password) . '-' . $stored_key;

// Verify the entered password by comparing it with the stored password
if (sha1($entered_enc_password) === $stored_password && $entered_username === $stored_username) {
    // Password and username match, user is authenticated
    echo "Login successful";
} else {
    // Password or username is incorrect
    echo "Login failed";
}
?>
