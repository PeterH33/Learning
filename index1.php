<html>
<h1>First PHP page</h1>


<?php
echo"This is an echo line<br>";
echo"Second line";
?>

<h1>This is a <?php print"Conditionals";?></h1><br>

<?php
$aNumber = 100;

if ($aNumber >= 1000){
    print"This is true";
    print" $aNumber is greater than 1000";
} else {
    print"This is false";
    print" $aNumber is less than 1000";
}
?>
</html>