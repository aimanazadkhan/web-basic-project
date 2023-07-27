<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <style>
        body {
            height: 100vh;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="bg-white p-3 rounded shadow" action="registerAction.php" method="post" style="max-width: 400px; width: 100%;">
                    <h4 class="text-center mb-3">Register</h4>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="r_username" placeholder="Username" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="r_email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="form-control" name="r_mobile" placeholder="Mobile" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="r_pass" placeholder="Password" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="r_con_pass" placeholder="Confirm Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                    <a href="login.php" class="d-block text-center mt-3" style="color: #333;">Already Registered? Login here</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
