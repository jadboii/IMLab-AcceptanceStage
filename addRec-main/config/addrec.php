<?php

if(isset($_POST['create'])){
    include "db_conn.php";

// Function to validate and sanitize input
function validateInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

// Validate and sanitize form data
$firstName = validateInput($_POST['FirstName']);
$middleName = validateInput($_POST['MiddleName']);
$lastName = validateInput($_POST['LastName']);
$age = validateInput($_POST['Age']);
$gender = validateInput($_POST['Gender']);
$birthdate = validateInput($_POST['BirthDate']);
$idType = validateInput($_POST['IdType']);
$idnum = validateInput($_POST['IdNum']);
$issuedname = validateInput($_POST['IssuedName']);
$issuedstate = validateInput($_POST['IssuedState']);
$issuedate = isset($_POST['IssuedDate']) ? validateInput($_POST['IssuedDate']) : '';
$expirydate = validateInput($_POST['ExpiryDate']);
$addresstype = validateInput($_POST['AddressType']);
$nationality = validateInput($_POST['Nationality']);
$province = validateInput($_POST['Province']);
$city = validateInput($_POST['City']);
$street = validateInput($_POST['Street']);
$housenumber = validateInput($_POST['HouseNum']);
$fathername = validateInput($_POST['FatherName']);
$mothername = validateInput($_POST['MotherName']);
$emergencycontact = validateInput($_POST['EmergencyContNum']);
$nameofcontact = validateInput($_POST['ContactName']);
$relationship = validateInput($_POST['Relationship']);
$bloodtype = isset($_POST['BloodType']) ? validateInput($_POST['BloodType']) : '';

// ... add more variables for other form fields

// Validate input
$errors = [];
if (empty($firstName)) {
    $errors[] = "First name is required.";
}

if (empty($middleName)) {
    $errors[] = "Last name is required.";
}

if (empty($lastName)) {
    $errors[] = "Last name is required.";
}

if (empty($age)) {
    $errors[] = "Last name is required.";
}

if (empty($gender)) {
    $errors[] = "Last name is required.";
}

if (empty($birthdate)) {
    $errors[] = "Last name is required.";
}

if (empty($idType)) {
    $errors[] = "Last name is required.";
}

if (empty($idnum)) {
    $errors[] = "Last name is required.";
}

if (empty($issuedname)) {
    $errors[] = "Last name is required.";
}

if (empty($issuedstate)) {
    $errors[] = "Last name is required.";
}

if (empty($issuedate)) {
    $errors[] = "Last name is required.";
}

if (empty($expirydate)) {
    $errors[] = "Last name is required.";
}

if (empty($addresstype)) {
    $errors[] = "Last name is required.";
}

if (empty($nationality)) {
    $errors[] = "Last name is required.";
}

if (empty($province)) {
    $errors[] = "Last name is required.";
}

if (empty($city)) {
    $errors[] = "Last name is required.";
}

if (empty($street)) {
    $errors[] = "Last name is required.";
}

if (empty($housenumber)) {
    $errors[] = "Last name is required.";
}

if (empty($fathername)) {
    $errors[] = "Last name is required.";
}

if (empty($mothername)) {
    $errors[] = "Last name is required.";
}

if (empty($emergencycontact)) {
    $errors[] = "Last name is required.";
}

if (empty($nameofcontact)) {
    $errors[] = "Last name is required.";
}

if (empty($relationship)) {
    $errors[] = "Last name is required.";
}

if (empty($bloodtype)) {
    $errors[] = "Last name is required.";
}
// ... add validation rules for other fields

// Check for errors
if (!empty($errors)) {
    // Display errors and stop execution
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
    $conn->close();
    exit();
}

// Prepare and execute the SQL statement
$sql = "INSERT INTO tblscreg (FirstName, MiddleName, LastName, Age, Gender, BirthDate,
IdType, IdNum, IssuedName, IssuedState, IssuedDate, ExpiryDate, AddressType, Nationality, Province, 
City, Street, HouseNum, FatherName, MotherName, EmergencyContNum, ContactName, Relationship, BloodType) 
VALUES ('$firstName', '$middleName', '$lastName', '$age', '$gender', '$birthdate', '$idType', '$idnum',
'$issuedname', '$issuedstate', '$issuedate' , '$expirydate', '$addresstype', '$nationality', '$province', '$city', '$street', 
'$housenumber', '$fathername', '$mothername', '$emergencycontact', '$nameofcontact', '$relationship', '$bloodtype')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}