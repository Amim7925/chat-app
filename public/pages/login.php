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
            <form class="needs-validation" novalidate action="#">
                <h5 class="form-title mb-4">Chat App</h5>
                <!-- <div class="error">
                    <p class="error"></p>
                </div> -->
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-user"></i></div>
                        </div>
                        <input type="text" class="form-control"  name="username" placeholder="user name..." required>
                        <div class="invalid-feedback">
                            User name can not be empty!
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-key "></i></div>
                        </div>
                        <input type="password" class="form-control"  name="passowrd" placeholder="passowrd..." required>
                        <i class="fa fa-eye login-eye"></i>
                        <div class="invalid-feedback">
                            please enter your password!
                        </div>
                    </div>
                </div>
       
            <button type="submit" id="btn-submit" class="btn btn-primary">Login</button>        
            </form>
            <span>haven't signed up yet ?<a href="sign_up.php"> Sign Up Now...</a></span>
        </div>
    </div>
</body>
<script src="../js/sign_up.js"></script>
</html>