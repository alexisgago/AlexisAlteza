<?php
    if(isset($_POST['submit'])) { 
        $lastname = $_POST['lastname']; 
        $firstname = $_POST['firstname']; 
        $middlename = $_POST['middlename']; 
        $gender = $_POST['gender']; 
        $studentNumber = $_POST['studentNumber']; 
        $section = $_POST['section']; 
    }    
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registers</title>
    <style>
        table {
            margin: auto;
            width: 30vw;
        }
        
        td {
            width: 30%;
        }

        input[type=submit] { 
            width: 50%;
            height: 40px;
        }
        
        input[type=text] {
            width: 100%;
        }

        .table2 {
            width: 40%;
            margin: auto;
            line-height: 50px;
        }

        .table2 td {
            font-size: 30px;
            font-weight: bold;
        }

        @media(max-width: 1200px) {
            .table2 {
                width: 60%;
            }
        }

        @media(max-width: 1110px) {
            .table1 {
                width: 40%;
            }
        }

        @media(max-width: 870px) {
            .table1 {
                width: 50%;
            }

            .table2 {
                width: 80%;
            }
        }

    </style>
</head>
<body>
        <center><h1 style="margin-top: 1%;">FILL OUT FORM</h1></center>
    <form action="" method="post">
        <table class="table1">
            <tr>
                <td>Last Name: </td><td><input type="text" name="lastname" placeholder="Last Name" /><br /></td>
            </tr>
            <tr>
                <td>First Name: </td><td><input type="text" name="firstname" placeholder="First Name" /><br /></td>
            </tr>
            <tr>
                <td>Middle Name: </td><td><input type="text" name="middlename" placeholder="Middle Name" /><br /></td>
            </tr>
            <tr>
                <td>Gender: </td><td><input type="radio" name="gender" value="Male" checked/>Male <input type="radio" name="gender" value="Female" />Female<br /></td>
            </tr>
            <tr>
                <td>Student Number: </td><td><input type="text" name="studentNumber" placeholder="Student Number" /><br /></td>
            </tr>
            <tr>
                <td>Section: </td><td><input type="text" name="section" placeholder="Section" /></td>
            </tr>
            <tr>
                <td colspan="2"><center><br /><input type="submit" name="submit" /></center></td>
            </tr>
        </table>
    </form>

        <center>
            <h1>PAMANTASAN NG LUNGSOD NG MUNTINLUPA</h1>
            <p style="font-size: 24px;">Certificate of Matriculation</p>
        </center>

    <table class="table2">
    <?php if(!empty($lastname) || !empty($firstname) || !empty($middlename) || !empty($gender) || !empty($studentNumber) || !empty($section)) { ?>

            <tr>
                <td>Last Name: </td><td><?php echo $lastname; ?><br /></td>
            </tr>
            <tr>
                <td>First Name: </td><td><?php echo $firstname; ?><br /></td>
            </tr>
            <tr>
                <td>Middle Name: </td><td><?php echo $middlename; ?><br /></td>
            </tr>
            <tr>
                <td>Gender: </td><td><?php echo $gender; ?><br /></td>
            </tr>
            <tr>
                <td>Student Number: </td><td><?php echo $studentNumber; ?><br /></td>
            </tr>
            <tr>
                <td>Section: </td><td><?php echo $section; ?></td>
            </tr>
    <?php } ?>

        </table>
</body>
</html>