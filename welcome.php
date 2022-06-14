<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>
<body>
    <h1>Form</h1>
    <p>* required field</p>
    <form action="" method="post">
        <label for="fname">Name:</label>
        <span class="error">*</span><br>
        <input type="text" id="name" name="fname" required><br>
        <br>
        <label for="email">E-mail:</label>
        <span class="error">*</span><br>
        <input type="text" id="mail" name="email" required><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>


<body>
<?php
if (isset($_POST['fname'])) {
echo '<span style="font-size: 30px;"> '. "Je ingevulde gegevens zijn: <br>";
echo '<span style="font-size: 30px;"> '. "Naam: ".$_POST['fname'];
echo "<br>";
echo '<span style="font-size: 30px;"> '. "Email: ".$_POST['email'];
};
?>
</body>
