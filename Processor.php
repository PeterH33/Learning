<html>
    <head>
    </head>
    
    <h1>Form Handler</h1>
<p>
    <?php
   /* This line is just what is used in class to show that the submit works properly and you are getting input sent over properly
   */
    print_r($_POST);
    //input

    $gender = $_POST['gender'];
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['op'];

    //Processing
    if($op == '+')
        $result = $num1 + $num2;
    if($op == '-')
        $result = $num1 - $num2;
    if($op == '*')
        $result = $num1 * $num2;
    if($op == '/')
        $result = $num1 / $num2;



    //output
    // print"<br>Hello $fName $lName, $gender, $num1, $num2, $op<br>";
    print"<br>Hello $fName $lName<br>";
    print"<br>$num1 $op $num2 = $result";
?>

</p>
</html>