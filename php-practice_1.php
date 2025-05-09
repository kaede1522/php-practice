<?php
// Q1 変数と文字列
$name = '鈴木';
echo "私の名前は「" . $name . "」です。";

// Q2 四則演算
$num = 5 * 4;
echo $num;
echo $num / 2;

// Q3 日付操作
$date = date('Y-m-d H:i:s');
echo $date;

// Q4 条件分岐-1 if文
$device = 'windows';
if ($device === 'windows')
{
    echo "使用OSは、" . $device . "です。";
} else {
    echo "使用OSは、macです。";
}

// Q5 条件分岐-2 三項演算子
$age = 29;

$message = ($age > 20) ? '成人です。' : '未成年です。';

echo $message;

// Q6 配列
$from = [
  "埼玉県", "東京都", "栃木県", "千葉県"
  ];

echo $from[2] . "と" . $from[3] . "は関東地方の都道府県です。";

// Q7 連想配列-1
$from = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市",
];

foreach ($from as $value) {
  echo $value . PHP_EOL;
}

// Q8 連想配列-2
$from = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市",
];

foreach ($from as $key => $value) {
  if ($key === '埼玉県') {
      echo $key . "の県庁所在地は、" . $value . "です。";
  }
}

// Q9 連想配列-3
$from = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市",
];

$from['北海道'] = '北海道';
$from['沖縄'] = '沖縄';

foreach ($from as $key => $value) {
  if ($key === '北海道' || $key === '沖縄') {
      echo $key . 'は関東地方ではありません。';
  } else {
      echo $key . 'の県庁所在地は' . $value . 'です。';
  }
};

var_dump($from);

// Q10 関数-1
function hello($name)
{
    echo $name . 'さん、こんにちは。' . PHP_EOL ;
};

hello('田中');
hello('鈴木');

// Q11 関数-2
function calcTaxInPrice($price) {
  $taxInPrice = $price * (1 + 0.10);
  return $price . '円の商品の税込み価格は' . $taxInPrice . 'です。';
}

echo calcTaxInPrice(1000);

// Q12 関数とif文
function distinguishNum($num) {
  if($num % 2 === 0) { // %は割り算の余りを求める演算子で、0が余りがない状態だから偶数。逆に、2 > 0なら奇数。
      return $num . 'は偶数です。' . "\n";
  } else {
      return $num . 'は奇数です。' . "\n";
  }
}
echo distinguishNum(4);
echo distinguishNum(5);

// Q13 関数とswitch文
function evaluateGrade($rank) {
  switch ($rank) {
      case 'A':
      case 'B':
          return '合格です。' . "\n";
      
      case 'C':
          return '合格ですが追加課題があります。' . "\n";
      
      case 'D':
          return '不合格です。' . "\n";
      
      default:
          return '判定不明です。講師に問い合わせてください。' . "\n";
  }
}

echo evaluateGrade('E');
echo evaluateGrade('A');

?>