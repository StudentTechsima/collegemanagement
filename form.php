<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <section>
        <div class="container">
            <div class="box">
                <!-- ---------------SignUp Start------------------ -->
                <form action="crud/createpost.php" method="post" class="form1">
                    <h1>SignUp </h1>
                    <div class="full-name">
                        <div class="fname">
                            <input type="text"name="fname"placeholder="Enter Your First Name*">
                        </div>
                        <div class="lname">
                            <input type="text"name="lname"placeholder="Enter Your Last Name*">
                        </div>
                       
                    </div>
                    <div class="email-box">
                        <input type="email"name="email"placeholder="Enter Your Email Id*">
                    </div>
                    <div class="n-password">
                        <input type="password"name="npassword"placeholder="Enter Your Password*">
                    </div>
                    <div class="con-password">
                        <input type="password"name="cpassword"placeholder="Enter Your Password*">
                    </div>
                    <div class="check-box">
                        <input type="checkbox"required > <span>I accept the Terms of use & privacy policy</span>
                    </div>
                    <div class="signup-btn">
                        <button type="submit" name="submit">submit</button>
                    </div>
                    <div class="agri">
                        <span>Already have an Account? </span> <b onclick="signinToForm2()">SignIn</b>
                    </div>
                </form>

<!------------------------------SignUp End---------------------------------------- -->

<!-- -------------------------SignIn Start---------------------- -->

                <form action="" method="post" class="form2">
                    <h1>SignIn</h1>
                    <div class="email-box">
                        <input type="email"name="email"placeholder="Enter Your Email Id*">
                    </div>
                    <div class="n-password">
                        <input type="password"name="password"placeholder="Enter Your Password*">
                    </div>
                    <div class="forget-password-box">
                        <a href="#">Forget Password ?</a>
                    </div>
                    <div class="signup-btn">
                        <button type="submit" name="submit">submit</button>
                    </div>
                    <div class="agri">
                        <span>Don't have an Account? </span> <b onclick="signupToForm1()">SignUp</b>
                    </div>
                </form>
                <!-- ------------------------------SignIn End------------------------------------ -->
            </div>
        </div>
    </section>
<script type="text/javascript">
    const forms=document.querySelectorAll('form');
    const signinToForm2=()=>{
        forms[0].style.left='-100%';
        forms[1].style.left='0';
    }
    const signupToForm1=()=>{
        forms[1].style.left='100%';
        forms[0].style.left='0';
    }
</script>
</body>
</html>