<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Add background image to the body */
        body {
            background-image: url('https://img.freepik.com/free-vector/digital-technology-polygon-background_1035-18184.jpg?w=1060&t=st=1695278422~exp=1695279022~hmac=11fc35f2d109ab051856754599c2c28ee14b193b473fb45be511db22372f50e6');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            height: 100vh;
        }
        /* Center the container */
        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 500px;
            width: 600px;
            border: 3px solid black;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
            border-radius: 10px;
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 29%, rgba(0,212,255,1) 100%);
        }
        input, label{
            color: white;
        }
    </style>
</head>
<body>
    <div class="center-container">
        <form method="post" action="<?= base_url('admin/login') ?>" name="signup-form" class="container mt-5">
            <?php if (session()->getFlashdata('invalid')): ?> <!-- Check if 'invalid' flash data is set -->
                <div class="alert alert-primary" role="alert">
                    <?= session()->getFlashdata('invalid') ?> <!-- Display the flash data message -->
                </div>
            <?php endif; ?>
            <div class="form-group">
                <label for="name">ID</label>
                <input type="text" class="form-control" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" name="register" value="register" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</html>
