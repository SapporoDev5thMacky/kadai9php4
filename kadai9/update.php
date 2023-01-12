<?php

session_start();
require_once('funcs.php');
loginCheck();

//1. POSTデータ取得
$year   = $_POST['year'];
$revenue  = $_POST['revenue'];
$revenue2 = $_POST['revenue2'];
$revenue3    = $_POST['revenue3'];
$id     = $_POST['id'];

//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('UPDATE gs_bm_table3 SET year=:year,revenue=:revenue,revenue2=:revenue2,revenue3=:revenue3 WHERE id=:id;');
$stmt->bindValue(':year', $year, PDO::PARAM_STR);
$stmt->bindValue(':revenue', $revenue, PDO::PARAM_STR);
$stmt->bindValue(':revenue2', $revenue2, PDO::PARAM_INT);
$stmt->bindValue(':revenue3', $revenue3, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    redirect('select.php');
}
