<?php

if ($_SERVER['REQUEST_METHOD'] === "POST")
    {
        if (isset($_POST['email']) && isset($_POST['password']))
            {
                echo "Form data received successfully";
            }
        else
            {
                echo "No form data received";
            }
    }
    elseif ($_SERVER['REQUEST_METHOD'] === "GET")
    {
        if (isset($_GET['email']) && isset($_GET['password'])) 
        {
            echo "Form data received successfully";
        }
        else    
        {
            echo "No form data received";
        }
    
    }
    else {
        echo "<br>" . "Unsupported request method";
    }

echo  "<br>" . $_SERVER['REQUEST_METHOD'] ;

?>