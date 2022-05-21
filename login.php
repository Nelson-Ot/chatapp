<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat app</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

</head>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>chat application system</header>
            <form action="" method="post">
                <div class="err-txt"></div>
               
                <div class="field">
                   
                    <input type="email" name="email" id="email" placeholder="email" required>
                </div>
                <div class="field">
                    
                    <input type="password" name="password" id="password" placeholder="enter password" required>
                    <i class="fas fa-eye"></i>
                </div>
              

                <div class="field button">
                    <input type="submit" name="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Not yet signed in? <a href="index.php">Register now</a></div>
        </section>
    </div>

    <script src="js/show-hide-password.js"></script>
    <script src="js/login.js"></script>
</body>

</html>