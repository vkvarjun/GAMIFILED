<?php

    $connection=mysqli_connect("localhost","root","chanti");
    if($connection)
    {
        if(mysqli_select_db($connection,"gamifield"))
        {
              
        }   
        else
        {
            echo 'Connection to Database Failed';
        } 
    }
    else
    {
        echo 'Server Connection Failed';    
    } 

?>