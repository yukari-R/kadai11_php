# 課題11

## 紹介と使い方
  - データの追加・削除、ログインログアウト機能のある「お気に入りの動画を保存する」アプリを作りました
  - 前回まで課題で作成していた動画投稿アプリをYoutubeのリンクを保存しサムネイルを表示するアプリに作り替えました
  - MVCを分けたファイルにすることにも取り組みました

## 工夫した点
  - YoutubeのURLを入力すると、リアルタイムで下１１桁の動画IDを抽出し、POSTメソッドでIDを送信、データベースに格納しサムネイル表示できるようにしました
  - お気に入り度をscore（input type = range)で登録し、お気に入り度順に動画が一覧表示されるようにしました
    
## 苦戦した点
  -　　削除がうまくできない　・・・　削除するレコードのIDを引数として渡せていなかった
  - Youtube URLの下　１１桁を別のカラムに格納する処理　・・・　JSのtext.slice（）；を使用し、inputtype　のValueとして渡すことで対応

## 参考にした web サイトなど
  - Youtubeのサムネイル表示の方法
  - https://n-v-l.co/blog/youtube-embed
  - 文字の一部を抽出して表示させる方法（php、JS）
  - https://sql-oracle.com/sqlserver/?p=1196
  - https://www.javadrive.jp/javascript/form/index1.html
  - デザイン周り（CSSコード）
  - https://photoshopvip.net/133583
  - https://mgmgblog.com/post-1523/
  - https://b-risk.jp/blog/2018/07/table-css/
  - https://www.tagindex.com/stylesheet/link/color.html
  - https://10to1travel.com/thethor-textlink-15498.html
  - 素材
  - https://icooon-mono.com/
