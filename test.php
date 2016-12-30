<?php
try
{
  // $dbh = new PDO(DSN, ユーザー名, パスワード)
  $dbh = new PDO('mysql:host=localhost;dbname=test1','root');
  //echo '成功しました！';
}
catch (PDOException $e)
{
  //echo($e->getMessage());
  exit;
};

?>

<?php
$APPLE_WEB = 'http://www.apple.com';
$AMAZON_WEB = 'http://www.amazon.co.jp/';
$INDEX_HTML = 'http://192.168.33.10/db_connect/index.html';
?>

<?php
//web上にあるコンテンツのバイト数を抽出
    $apple_web = file_get_contents($APPLE_WEB);
    $apple_web_byte = strlen($apple_web);
    var_dump($apple_web_byte);

    $amazon_web = file_get_contents($AMAZON_WEB);
    $amazon_web_byte = strlen($amazon_web);
    var_dump($amazon_web_byte);

    $index_html = file_get_contents($INDEX_HTML);
    $index_html_byte = strlen($index_html);
    var_dump($index_html_byte);


    date_default_timezone_set('Asia/Tokyo');
    $createdAt = date('Y-m-d H:i:s');



// //1. SQLのまとめたものを記載して(table botに記載されたbyte数を抽出)
 $db_byte_check_apple = "select byte from bot where $APPLE_WEB;"
 $db_byte_check_amazon = "select byte from bot where $AMAZON_WEB;"
 $db_byte_check_index = "select byte from bot where $INDEX_HTML;"

?>