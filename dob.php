<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date of Birth</title>
</head>
<body>
    <form action="dob.php" method="post" >
        <p >Date of Birth input format: DD/MM/YYYY</p>
        Enter your date of birth: <input type="text" name="dob"> <br>
        <br>
        <input  type="Submit">
        <br>
    </form>
    <?php
        $dob=$_POST['dob'];
        if($dob == "06/06/2022" || $dob == "6th March 2022"){
            echo "Independence Day";
        }

        elseif ($dob == "25/12/2022" || $dob ==  "25th December 2022"){
            echo "Christmas Day";
        }

        elseif ($dob == "04/08/2022" || $dob ==  "4th August 2022"){
            echo "Founders Day";
        }

       else{
        echo "You don't have an special day!";
       }
    ?>
</body>
</html>