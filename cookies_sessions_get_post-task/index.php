<?php
$allowedColor = ["Red", "Blue", "Green"];
$backgroundColor = "White";

if (isset($_COOKIE["preferred_color"]) && in_array($_COOKIE["preferred_color"],$allowedColor,true))
    {
        $backgroundColor = $_COOKIE["preferred_color"];
    }

if ($_SERVER["REQUEST_METHOD"] === "POST")
    {
        $selectedColor = $_POST["backgroundColor"];
        if (in_array($selectedColor,$allowedColor,true))
            {
                setcookie("preferred_color",$selectedColor,time() + 3600,"/");
                $backgroundColor = $selectedColor;
            }
            else
                {
                    $backgroundColor = "White";
                }
        
    }


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Preferences</title>
</head>
<body style="background-color:<?= $backgroundColor ?>;">
    <h1>User Preferences</h1>
    <form method="post">
        <select name="backgroundColor" id="backgroundColor">
            <option value="Red">Red</option>
            <option value="Blue">Blue</option>
            <option value="Green">Green</option>
            <option value="oringi">orange</option>
        </select>
        <button type="submit">Save Preference</button>
    </form>
</body>
</html>