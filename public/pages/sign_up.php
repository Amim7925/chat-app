<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Chat App</title>
</head>
<body>
    <div class="main">
        <div class="login-form">
            <form class="needs-validation" novalidate action="../ajax-test/sign_up.php">
                <h5 class="form-title mb-4">Chat App</h5>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="">First name</label>
                        <input type="text" placeholder="First name" name="fname" class="form-control" required>
                        <div class="invalid-feedback">
                            Please provide a first name!
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Last name</label>
                        <input type="text" placeholder="Last name" name="lname" class="form-control" required>
                        <div class="invalid-feedback">
                            Please provide a Last name!
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">User name</label>
                        <input type="text" placeholder="User name" name="username" class="form-control" required>
                        <div class="invalid-feedback">
                           User name can not be empty!
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Password</label>
                        <input type="password" placeholder="Password" name="password" class="form-control" required>
                        <i class="fa fa-eye"></i>
                        <div class="invalid-feedback">
                            password can not be empty!
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">email</label>
                        <input type="email" placeholder="Email Address" name="email" class="form-control" >  
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Image</label>
                        <input id="input-image" type="file"  name="image" class="form-control" >  
                    </div>
                </div>
            <button type="submit" id="btn-submit" class="btn btn-primary">Sign Up</button>        
            </form>
            <span>Already have an account ?<a href="login.php"> Login Now...</a></span>
        </div>
    </div>
</body>
<script src="../js/sign_up.js"></script>
</html>