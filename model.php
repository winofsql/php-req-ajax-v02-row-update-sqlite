<?php

// ***********************************
// 更新処理
// ***********************************
function update_row() {

    global $pdo;

    file_put_contents("update.log", print_r($_GET, true) );
}

// **************************
// デバッグ表示
// **************************
function debug_print() {

    print "<pre class=\"m-5\">";
    print_r( $_GET );
    print_r( $_POST );
    print_r( $_SESSION );
    print_r( $_FILES );
    print "</pre>";

}