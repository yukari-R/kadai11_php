<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>お気に入りの動画</title>
    <script>
        function getLastChars() {
            var text = document.getElementById("url").value;
            var lastChars = text.slice(-11);
            document.getElementById("urlid").value = lastChars;
        }

        function handleInput() {
            getLastChars();
        }
    </script>
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
    <form method="post" action="postact.php" enctype="multipart/form-data">
        <div class="jumbotron">
            <table>
                <tr><th>url:</th><td><input type ="url" name="url" id="url" oninput="handleInput()"></td></tr>
                <tr><th>urlid:</th><td><input type ="text" name="urlid" id="urlid" value="自動で入力されます"></td></tr>
                <tr><th>title:</th><td><input type="text" name="title"></td></tr>
                <tr><th>comment:</th><td><textArea name="comment" rows="4" cols="40"></textArea></td></tr>
                <tr><th>score:</th><td><input type="range" name="score" max="10" min="1"></td></tr>
            </table>
            <input type="submit" value="送信" class="btn">
        </div>
    </form>
    </div>

    <a  href="top.php"><img src="ホームのベクター素材.png" class="fixedicon"></a>


</body>
</html>