<?php 

function verifyForms() {
    if(isset($_GET['submit'])) {

        // phone 7
        if(preg_match("/^\d{3}([-]?|[ ]*)\d{4}$/", $_GET['7digitphone']) ) {
            echo "phone7 = verified <br>";
        } else {
            echo "phone7 = Sorry input failed, Please try again. <br>";
        }

        // phone 10

        if(preg_match("/^(\d{3}|(\d{3}))([-]?|[\s])\d{3}([-]?|[\s])\d{4}$/", $_GET['10digitphone']) ) {
            echo "phone10 = verified <br>";
        } else {
            echo "phone10 = Sorry input failed, Please try again. <br>";
        }

        //license plate
        if(preg_match("/^([A-Z]{3}[\s]?[0-9]{3})|([0-9]{3}[\s]?[A-Z]{3})$/", $_GET['licenseplate']) ) {
            echo "licenseplate = verified <br>";
        } else {
            echo "licenseplate = Sorry input failed, Please try again. <br>";
        }

        //street address
        if(preg_match("/^[0-9]{3,5}[\s]{1}[A-Z]{1}[a-z]{0,14}[\s]{1}Street$/", $_GET['streetaddress']) ) {
            echo "streetaddress = verified <br>";
        } else {
            echo "streetaddress = Sorry input failed, Please try again. <br>";
        }
        
        //birthday
        if(preg_match("/^[A-z]{3}|[-]?\d{2}$/", $_GET['birthday']) ) {
            echo "birthday = verified <br>";
        } else {
            echo "birthday = Sorry input failed, Please try again. <br>";
        }

          //sin number
          if(preg_match("/^[0-9]{3} *[0-9]{3} *[0-9]{3}$/", $_GET['sin']) ) {
            echo "sin number = verified <br>";
        } else {
            echo "sin number = Sorry input failed, Please try again. <br>";
        }


    }
}

