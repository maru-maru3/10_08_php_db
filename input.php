<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DB連携型todoリスト（入力画面）</title>
  <link rel="stylesheet" href="css/input.css">
</head>

<body>

  <button><a href="read.php">一覧画面</a></button>
  <br>
  <br>

  <form action="create.php" method="POST">

    <div class="form-wrapper">

      <div class=form-box1>
        <div class="form">
          nickname : <input type="text" name="nickname">
        </div>
        <div class="form">
          e-mail : <input type="text" name="mail">
        </div>
        <div class="form">
          <div class="radio-bt">
            分野 :
            <ul>
              <li><input type="radio" name="field" value="ファッション"> ファッション </li>
              <li><input type="radio" name="field" value="音楽"> 音楽</li>
              <li><input type="radio" name="field" value="アート"> アート</li>
              <li><input type="radio" name="field" value="社会福祉"> 社会福祉</li>
              <li><input type="radio" name="field" value="マンガ・ゲーム"> マンガ・ゲーム</li>
            </ul>
          </div>
        </div>
        <div class="form">
          自由ワード検索 : <input type="text" name="field_text">
        </div>

        <br>
        <div class="form-bt">
          <button>submit</button>
        </div>
        <br>

      </div>


      <div class=form-box2>
        <!-- <div class="form">
            資本金 :
            <select name="shihon">
              <option value="a"> ～ 100万</option>
              <option value="b"> ～ 500万</option>
              <option value="c"> ～ 1,000万</option>
              <option value="d"> ～ 5,000万</option>
              <option value="e"> ～ 1億</option>
            </select>
            円以上
          </div>
          <div class=" form">
            社員数 :
            <select name="syainsu">
              <option value="1"> ～ 10</option>
              <option value="2"> ～ 20</option>
              <option value="3"> ～ 50</option>
              <option value="4"> ～ 100</option>
              <option value="5"> ～ 1,000</option>
            </select>
            人以上
          </div> -->
        <!-- <div class="form">
            <div class="gengo">
              言　語 :
              <ul>
                <li><input type="checkbox" name="gengo[]" value="英語"> 英語 </li>
                <li><input type="checkbox" name="gengo[]" value="中国語"> 中国語</li>
                <li><input type="checkbox" name="gengo[]" value="韓国語"> 韓国語</li>
                <li><input type="checkbox" name="gengo[]" value="その他"> その他</li>
              </ul>
            </div> -->
        <img class="img" src="img/img-.png" alt="">


      </div>
    </div>
  </form>


  </div>




  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</body>

</html>