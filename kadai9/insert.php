<?php
//1. POSTデータ取得
$year   = $_POST['year'];
$revenue  = $_POST['revenue'];
$revenue2 = $_POST['revenue2'];
$revenue3   = $_POST['revenue3']; //追加されています

//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('INSERT INTO gs_bm_table3(year,revenue,revenue2,revenue3,indate)VALUES(:year,:revenue,:revenue2,:revenue3,sysdate());');
$stmt->bindValue(':year', $year, PDO::PARAM_STR);
$stmt->bindValue(':revenue', $revenue, PDO::PARAM_STR);
$stmt->bindValue(':revenue2', $revenue2, PDO::PARAM_INT);
$stmt->bindValue(':revenue3', $revenue3, PDO::PARAM_STR);
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status == false) {
    sql_error($stmt);
} else {
  echo '<p>上記内容にて登録いたしました</p>';
  echo '<a href="index.php">入力フォームへ戻る</a><br>';
  echo '<a href="chart.php" target="_blank">集計結果を見る</a>';
    
}
