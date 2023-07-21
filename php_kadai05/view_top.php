<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>お気に入りの動画</title>
    <link rel="stylesheet" href="css/range.css">
    <link href="css/top.css" rel="stylesheet">
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
    <div class="thumbnailList">
        <?= $view ?>
    </div>

    <a  href="top.php"><img src="ホームのベクター素材.png" class="fixedicon"></a>

</body>
</html>