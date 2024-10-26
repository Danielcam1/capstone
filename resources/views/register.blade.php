<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="app.css">
</head>

<body class="login-page">

    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="card register-card landscape-card" style="margin-top: 25vh">
            <div class="card-header bg-primary text-white text-center">
                <h2 class="card-title">Register</h2>
            </div>
            <div class="card-body">
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" name="firstname" class="form-control" id="firstname"
                                    placeholder="First Name" required>
                            </div>
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" name="lastname" class="form-control" id="lastname"
                                    placeholder="Last Name" required>
                            </div>
                            <div class="form-group">
                                <label for="middlename">Middle Name</label>
                                <input type="text" name="middlename" class="form-control" id="middlename"
                                    placeholder="Middle Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Password" required>
                            </div>
                            <button class="btn btn-primary w-100 mt-4">Register</button>
                        </div>
                    </div>
                    <p class="logAlert text-center mt-3 text-white">
                        Already have an account? <a href="/login" id="loginLink" class="text-info">Login here</a>
                    </p>

                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("loginLink").addEventListener("click", function (event) {
            event.preventDefault(); // Prevent default link behavior

            // Add slide-left class to the card for the animation
            document.querySelector(".register-card").classList.add("slide-left");

            // Redirect to login page after the animation (0.5s delay)
            setTimeout(function () {
                window.location.href = "/login";
            }, 500); // Match this to the animation duration in CSS
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>