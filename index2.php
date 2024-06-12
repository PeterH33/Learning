<!DOCTYPE html>
<html>

<head>
    <title>First HTML Page</title>
</head>
<h1>
    Pete Page 1
</h1>
<p>
    <!-- relative link -->
    <a href="page2.html">Page 2</a>
</p>

<hr>
<h2>
    itec315 handler Form
</h2>
<form action="Processor.php" method="post">
    <fieldset>
        <p>Gender</p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
    </fieldset>
    <br>
    <fieldset>
        First Name
        <input type="text" name="fName">
        <br>
        Last Name
        <input type="text" name="lName">
    </fieldset>
    <fieldset>
        <b>Please enter a number</b>
        <input type="text" name="num1">
        <br>
        <b>Please enter a number</b>
        <input type="text" name="num2">
        <br>
        <input type="radio" name="op" id="op" value="+">
        <label for="op1">+</label>
        <input type="radio" name="op" id="op" value="-">
        <label for="op2">-</label>
        <input type="radio" name="op" id="op" value="*">
        <label for="op3">*</label>
        <input type="radio" name="op" id="op" value="/">
        <label for="op4">/</label>
    </fieldset>
    <input type="submit" name="submit" value="submit">
</form>
<hr>
<!-- Line to submit to blackgoosebistro-->
<h2>
    Black Goose Bistro | Pizza-on-Demand
</h2>
<br>
Our 12" wood-fired pizzas are available for delivery. Build your custom pizza and we'll deliver it within an hour.
<br>
<form action="http://blackgoosebistro.com/pizza.php" method="post">
    Your information
    <br>
    <ul>
        <li>
            Name:
            <input type="text" name="customername">
        </li>
        <li>
            Address:
            <input type="text" name="address">
        </li>
        <li>
            Telephone Number:
            <input type="text" name="telephone">
        </li>
        <li>
            Email:
            <input type="text" name="email">
        </li>
        <li>
            Delivery instructions:
            <br>
            <textarea name="instructions" cols="60" rows="4" maxlength="400" placeholder="No more than 400 characters long."></textarea>
        </li>
        <br>
        <p>
            <b>Design your Dream Pizza:</b>
            <br>
            Pizza specs
        </p>
        
        <br>
        <li>
            Crust (Choose one):
        </li>
        <li>
            <input type="radio" name="crust" value="white">
            Classic white
        </li>
    </ul>


    <p>
        <input type="submit" value="Bring me a pizza!">
        <input type="reset">
    </p>
</form>


</html>