<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styleForgot.css">
    <title>SIPPMA</title>
    <link rel="icon" type="image/png" href="img/logo_SIPPMA.png">
</head>
<body>
<div class="background">
        <div class="overlay">
            <div class="login-card">
                <div class="logo-container">
                    <img src="img/Logo_SiPPMA.png" alt="Logo" class="logo">
                </div>
                <h2>CHANGE PASSWORD</h2>
                <form action="" method="post">
                    <input type="text" name="nim" placeholder="NIM" required>
                    <input type="text" name="email" placeholder="EMAIL" required>
                    <input type="password" name="new password" placeholder="NEW PASSWORD" required>
                    <input type="password" name="comfirm password" placeholder="CONFIRM PASSWORD" required>
                    <button class="update" type="submit">UPDATE</button>
                    <button class="back" type="button" onclick="window.location.href='login.php'">BACK</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>