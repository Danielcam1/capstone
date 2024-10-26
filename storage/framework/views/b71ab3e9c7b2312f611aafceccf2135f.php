<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="app.css">
</head>

<body class="bg-dark login-page">
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="login-card">
            <div class="login-card-header text-white">
                <h2 class="login-title">PDSChecker</h2>
                <p>is simply easyzsx</p>
            </div>
            <div class="login-card-body">
                <?php if(Session::has('error')): ?>
                    <div class="alert alert-danger logAlert" role="alert">
                        <?php echo e(Session::get('error')); ?>

                    </div>
                <?php endif; ?>
                <form action="<?php echo e(route('login')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                            required>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary">Login</button>
                    </div>
                </form>
                <p class="text-center mt-3 text-white">
                    Don't have an account? <a href="/register" id="registerLink" class="text-info">Register here</a>
                </p>

            </div>
            <div class="login-footer text-white">
                <p>Version X.0.0.0 | Company Address</p>
                <p>Contact Us | Support | Privacy Statement | Copyright</p>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("registerLink").addEventListener("click", function (event) {
            event.preventDefault(); // Prevent default link behavior

            // Add slide-right class to the card for the animation
            document.querySelector(".login-card").classList.add("slide-right");

            // Redirect to register page after the animation (0.5s delay)
            setTimeout(function () {
                window.location.href = "/register";
            }, 500); // Match this to the animation duration in CSS
        });
    </script>

</body>


</html><?php /**PATH C:\Users\Ramos Familla\FinalRequirements\resources\views/login.blade.php ENDPATH**/ ?>