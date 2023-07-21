<link rel="stylesheet" href="css/top.css">
<?php


function db_connect(){  //dbに接続する関数
    try{
        $db_name = 'gs_db6'; //データベース名
        $db_id   = 'root'; //アカウント名
        $db_pw   = ''; //パスワード：MAMPは'root'
        $db_host = 'localhost'; //DBホスト
        $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
    
        return $pdo; //returnで外で使えるようにする

    } catch (PDOException $e){
        exit("DB Connection Error:" . $e->getMessage());
    }

}

function get_all_posts($pdo){  //テーブルを表示する
    $stmt = $pdo->prepare("SELECT * FROM ge_thumbnail_table ORDER BY score DESC");
    $status = $stmt->execute();
    $view = "";
    if($status === false){
        $error = $stmt->errorInfo();
        exit("SQLError:" . print_r($error, true));
    }else{
        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)){
            $view .= '<div class="thumbnail_box">';
            $view .= '<iframe width="280" height="280" src="https://www.youtube.com/embed/' . $result["urlid"] . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
            $view .= '<div class="titlebox"><p>';
            $view .= '<a class="titlelink" href="' . $result["url"] . '">' .$result["title"] . '</a>';
            $view .= '</p></div><br>';
            $view .= '<div class="commentbox"><p>';
            $view .= $result["comment"];
            $view .= '</p></div>';
            $view .= '<div class="delete"><a class="deletelink" href="deleteact.php?id=' . $result['id'] . '">';
            $view .= '<p>削除</p>';
            $view .= '</a></div>';
            $view .= '</div>';
        }
        return $view;
        var_dump($result["urlid"]);
    }
}


function db_connect_lg()
{
    try {
        $db_name = 'gs_db6';    //データベース名
        $db_id   = 'root';      //アカウント名
        $db_pw   = '';      
        $db_host = 'localhost'; //DBホスト
        $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
        return $pdo;
    } catch (PDOException $e) {
        exit('DB Connection Error:' . $e->getMessage());
    }
}

// ログインチェク処理 loginCheck()
function loginCheck(){
    if (!isset($_SESSION['chk_ssid']) || $_SESSION['chk_ssid'] !== session_id()) {
        header('Location: login.php');
    } else {
        session_regenerate_id(true);
        $_SESSION['chk_ssid'] = session_id();
    }
    
}


function delete($pdo,$id){
$stmt = $pdo->prepare('DELETE FROM ge_thumbnail_table WHERE id = :id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行

if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . $error[2]);
} else {
    header('Location: top.php');
    exit();
}
}