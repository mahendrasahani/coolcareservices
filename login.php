<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <div class="form-container" id="form-container">
        <div class="image-part">
             <img src="./images/logo/coolcarelogo.jpg" alt="">
        </div>
        <div class="form-part" >
            <form action="" class="form" id="login-form">
                <p style="text-align: center;font-size:17px;font-weight: 600;">LOGIN TO COOLCARE</p>
                <div class="email-field">
                    <label for="text">Email <span>*</span></label>
                    <input type="text" placeholder="Enter your email....." required>
                </div>
                
               
                <div class="psd-field"> 
                    <label for="password">Password <span>*</span></label>
                     <input type="password" placeholder="Enter your password....." required>
                </div>

                <p>Forget Password?</p>

                <button class="form-btn">Login</button>
                <p>Don't have an account? <a onclick="toggleForm()">Signup here</a></p>
            </form>

            <form action="" class="form" id="signup-form">
                <p style="text-align: center;font-size:17px;font-weight: 600;">SIGNUP TO COOLCARE</p>
                <div class="email-field">
                    <label for="">Email <span>*</span></label>
                    <input type="text" placeholder="Enter your email....." required>
                </div>
                <div class="psd-field"> 
                    <label for="">Password <span>*</span></label>
                    <input type="password" placeholder="Create your password....." required>
                </div>
                <div class="psd-field"> 
                    <label for="">Confirm Password <span>*</span></label>
                    <input type="password" placeholder="Confirm your password....." required>
                </div>
                <button class="form-btn" style="margin-top: 10px;">SignUp</button>
                <p>Already have an account? <a onclick="toggleForm()">Login here</a></p>
            </form>
        </div>
    </div>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>

        document.addEventListener("DOMContentLoaded",()=>{
            const signup = document.getElementById("signup-form");
            signup.style.display="none"
        })

        function toggleForm(){
            const signup = document.getElementById("signup-form");
            const login = document.getElementById("login-form");
    
            if (signup.style.display === "none") {
                signup.style.display = "flex";
                login.style.display = "none";
            } else {
                signup.style.display = "none";
                login.style.display = "flex";
            }
        }
    </script>
</body>
</html>