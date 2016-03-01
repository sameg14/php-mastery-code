<html>

<head>

</head>


<body>

<form action="form.php" method="post" enctype="multipart/form-data">

    <input type="hidden" name="userId" value="123"/>

    <label for="location">Location: </label>
    <input type="text" name="location" size="50"/>

    <br/>

    <input type="radio" name="yesOrNo" value="Yes"/> Yes
    <input type="radio" name="yesOrNo" value="No"/> No

    <br/>

    <input type="checkbox" name="coursesTaken[]" value="PHP"/> PHP
    <input type="checkbox" name="coursesTaken[]" value="MySQL"/> MySQL
    <input type="checkbox" name="coursesTaken[]" value="Python"/> Python

    <br/>

    <select name="animals">
        <option value="Human">Human</option>
        <option value="Monkey">Monkey</option>
        <option value="Goat">Goat</option>
        <option value="Whale">Whale</option>
    </select>

    <br/>

    <input type="file" name="myFile"/>

    <br/>

    <input type="submit"/>

</form>
<?php

echo '<pre>';
echo 'Request<br/>';
print_r($_REQUEST);

echo '<hr/>';

echo 'Files<br/>';
print_r($_FILES);

// Attempt to save the file somewhere
if (isset($_FILES['myFile'])) {

    $fileData = $_FILES['myFile'];

    $fileName = $fileData['name'];
    echo '$fileName=' . $fileName . '<br/>';

    $tmpLocation = $fileData['tmp_name'];
    echo '$tmpLocation=' . $tmpLocation . '<br/>';

    echo 'dir=' . __DIR__;

    if (move_uploaded_file($tmpLocation, __DIR__ . '/' . $fileName)) {
        echo 'Your file was uploaded';
    } else {
        echo 'I cannot upload your file';
    }
}

//$location = $_REQUEST['location'];
//echo 'Your location is: ' . $location;
//
//$userId = $_REQUEST['userId'];
//echo '$userId=' . $userId . '<br/>';

?>

</body>

</html>