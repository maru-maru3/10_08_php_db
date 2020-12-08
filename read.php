<?php



// DB接続情報
$dbn = 'mysql:dbname=gacf_l04_08;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}


// データ参照SQL作成 ※PDF４９Pより追記
// SELECT文  ↓ テーブル名の後 ORDER BY id DESC で降順に
$sql = 'SELECT * FROM question_field  ORDER BY id DESC';

$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  exit('sqlError:' . $error[2]);
} else {
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $output = "";
  foreach ($result as $record) {
    $output .= "<div class='arrow_box'>";
    $output .= "<p>NAME: {$record["nickname"]}</ｐ>";
    $output .= "<p>E-mail: {$record["mail"]}</p>";
    $output .= "<p>分野: {$record["field"]}</p><br>";
    $output .= "<p>{$record["field_text"]}</p>";
    // $output .= "<td style=padding:10px>{$record["shihon"]}</td>";
    // $output .= "<td style=padding:10px>{$record["syainsu"]}</td>";
    // $output .= "<td style=padding:10px>{$record["gengo"]}</td>";
    $output .= "</div>";
    $output .= "<br>";
    $output .= "　　😋👺😮🤖😋🤡🤣　　<br>";
    $output .= "<br>";
  }
}

// $emoji = rand (1,6);
// if($emoji==1){
//   $_result= `💩`;

// }elseif($emoji == 1)
// }`👺`, `😮`, `😋`, `🤣`, `🤖`
// {



// if ($status == false) {
//   $error = $stmt->errorInfo();
//   exit('sqlError:' . $error[2]);
// } else {
//   $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//   $output = "";
//   foreach ($result as $record) {
//     $output .= "<tr>";
//     $output .= "<td style=padding:10px>{$record["nickname"]}</td>";
//     $output .= "<td style=padding:10px>{$record["mail"]}</td>";
//     $output .= "<td style=padding:10px>{$record["field"]}</td>";
//     $output .= "<td style=padding:10px>{$record["field_text"]}</td>";
//     // $output .= "<td style=padding:10px>{$record["shihon"]}</td>";
//     // $output .= "<td style=padding:10px>{$record["syainsu"]}</td>";
//     // $output .= "<td style=padding:10px>{$record["gengo"]}</td>";
//     $output .= "</tr>";
//   }
// }


?>





<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>データベース登録データ一覧</title>
  <link rel="stylesheet" href="css/read.css">
</head>

<body>

  <button><a href="input.php">戻る</a></button>
  <br>
  <br>

  <div class="all-wrapper">

    <div class="wrap">
      <table>


        <tbody>
          <!-- ここにフキダシの中に<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
          <?= $output ?>
        </tbody>


      </table>
    </div>


    <div>

      <!-- 集計結果 -->
      <div class=form-box3>
        <div class="chart1">
          選択ジャンルの統計 :
          <br>
          <p class="text">これまであなたが選んだジャンルはこのような割合です</p>
          <canvas id="mycanvas" height="250" width="400"></canvas>
        </div>




      </div>


      <!-- グラフ用javascriptライブラリと自作JSの読込み -->
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
      <script src="js/read.js"></script>
    </div>
  </div>



</body>

</html>