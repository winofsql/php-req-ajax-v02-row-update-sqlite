<?php
require_once("setting.php");

header( "Content-Type: application/json; charset=utf-8" );

// データベースに接続する
require_once("db_connect.php");
require_once("model.php");

// ***********************************
// 読込み
// ***********************************
if ( $_GET["type"] != "get" ) {
    update_row( );
}

// ***********************************
// SQL 文字列
// ***********************************
$sql = <<<QUERY
select
    *
from 社員マスタ
order by 社員コード
QUERY;

// ***********************************
// 準備
// ***********************************
$statement = $pdo->prepare($sql);

// ***********************************
// バインド
// ***********************************
// $statement->bindValue(':name', "%{$_REQUEST["name"]}%", PDO::PARAM_STR);

// ***********************************
// 実行
// ***********************************
$statement->execute();

// ***********************************
// 読込み
// ***********************************
$rows = $statement->fetchall(PDO::FETCH_ASSOC);

// ***********************************
// 終了処理
// ***********************************
print json_encode($rows, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
