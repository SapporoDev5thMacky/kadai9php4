
<!-- DBの名前はgs_db,テーブル名はgs_bm_table3, gsuser -->
<!-- user password test1 test1（講義と同じ） -->



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid" style="background-color:#191910;">
                
                <div class="navbar-header"><a class="navbar-brand" href="chart.php">集計結果グラフ<span style="font-size: 10px;">（ログイン不要）</span></a></div>
                <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ確認<span style="font-size: 10px;">（ログイン必要）</span></a></div>
                <!-- <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div> -->
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="POST" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>札幌社会福祉法人　事業別収益</legend>
                <label>年度：<input type="number" name="year" min="2024" max="2025"></label><br>
                <label>保育事業収入：<input type="number" name="revenue" min="1000" max="5000"></label><br>
                <label>老人福祉事業収入：<input type="number" name="revenue2" min="1000" max="5000"></label><br>
                <label>介護保険事業収入：<input type="number" name="revenue3" min="1000" max="5000"></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>

    <!-- Main[End] -->
</body>

</html>
