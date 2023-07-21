<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/top.css">
    <title>管理者用ログイン</title>
</head>

<body>

<header>
        <nav>
            <div class="navbar">
                <div class="log">
                    <div class="login"><a href="login.php" class="navlink">log in</a></div>
                    <div class="logout"><a href="logoutact.php" class="navlink">log out</a></div>
                </div>
                <div class="post"><a href="post.php" class="navlink">post</a></div>
            </div>
        </nav>
    </header>

<div class="form-wrapper">
    <h1>管理者ログイン</h1>
    <div class="form-item">
    <form name="login" action="loginact.php" method="post">
        ID:<input type="text" name="lid">
        パスワード:<input type="password" name="lpw">
        <div class="button-panel">
        <input type="submit" value="log in">
    </div>
    </form>
</div>
<a  href="top.php"><img src="ホームのベクター素材.png" class="fixedicon"></a>

</body>

</html>
