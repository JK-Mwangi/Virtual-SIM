<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body style="background-image: url(assets/img/counts-bg.png);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-6">
                    <div class="login-wrap py-5" style="background-color: transparent;">
                        <h3 class="text-center mb-0">Welcome</h3>
                        <p class="text-center" style="color: white;">Access your sim information by entering the information below</p>
                        <form action="admin/index.html" class="login-form">
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                                <input type="text" class="form-control bg-transparent" placeholder="Username" required style="border-bottom:1px solid white;">
                            </div>
                            <div class=" form-group ">
                                <div class="icon d-flex align-items-center justify-content-center "><span class="fa fa-lock "></span></div>
                                <input type="password " class="form-control bg-transparent " placeholder="Password " required style="border-bottom:1px solid white; ">
                            </div>
                            <div class="form-group d-md-flex ">
                                <div class="w-100 text-md-right ">
                                    <a href="# " style="color: orange; ">Forgot Password?...</a>
                                </div>
                            </div>
                            <div class="form-group ">
                                <input type="submit" value="Login" id="btn" class="btn rounded submit px-md-2" style="border: 1px solid white; width: 100%; ">
                            </div>
                        </form>
                        <div class="text-center p-t-46 p-b-20 ">
                            <span class="txt2 " style="color: white;">
                                No sim information registered?...<br><a href="register.html "><span style="color:orange ">REGISTER HERE</span></a>
                            </span>
                            <a href="home.html" style="margin-left: 15%; color: white;">
                                <i class="fa fa-home fa-2x" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js "></script>
    <script src="js/popper.js "></script>
    <script src="js/bootstrap.min.js "></script>
    <script src="js/main.js "></script>

</body>
<style>
    #btn {
        color: white;
    }
    
    #btn:hover {
        background-color: white;
        color: blue;
    }
</style>

</html>