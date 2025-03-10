    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Signup</title>
    </head>
    <body>
        <?php
        include 'connection.php'
        ?>
        <style>
<?php include 'signup.css' ?>
</style>
    
   <div class="container">
   <form class="form" method = "POST">
    <p class="title">Register </p>
    <p class="message">Signup now and get full access to our app. </p>
        <div class="flex">
        <label>
            <input class="input" name="fname" type="text" placeholder="" required="" id="f">
            <span>Firstname</span>
        </label>

        <label>
            <input class="input" name="lname" type="text" placeholder="" required="">
            <span>Lastname</span>
        </label>
    </div>  
            
    <label>
        <input class="input" name="email" type="email" placeholder="" required="">
        <span>Email</span>
    </label> 
        
    <label>
        <input class="input" name="pass" type="password" placeholder="" required="">
        <span>Password</span>
    </label>
    <label>
        <input class="input" name="conpass" type="password" placeholder="" required="">
        <span>Confirm password</span>
            
    </label>
    <button class="submit" name="submit">Submit</button>
    <p class="signin">Already have an acount ? <a href="#">Signin</a> </p>
</form>
   </div>
    </body>
    </html>
    <?php
    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $conpass = $_POST['conpass'];

        $insertquery = " insert into ap (fname , lname , email , password , confirmpassword) value('$fname' , '$lname' , '$email' , '$pass' , '$conpass')";


        $res = mysqli_query($con, $insertquery);
    }
    if($res)
    {
        ?>
        <script>
            alert("Stored");
            </script>
            <?php
    }





    ?>




