<?php
// Q1 tic-tac問題
function numCount() {
  for ($i = 1; $i <= 100; $i++) {
      if ($i % 4 === 0 && $i % 5 === 0) {
         echo 'tictac' . "\n";
      } elseif($i % 4 === 0) {
             echo 'tic' . "\n";
          } elseif($i % 5 === 0) {
              echo 'tac' . "\n";
          } else {
              echo $i . "\n";
          }
  }
}

echo numCount();

// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

// 問題1
$B = $personalInfos[1];

echo $B['name'] . 'の電話番号は' . $B['tel'] . 'です。';


// 問題2
foreach ($personalInfos as $x => $y) {
    $number = $x + 1;
echo "{$number}番目の{$y['name']}のメールアドレスは{$y['mail']}で、電話番号は{$y['tel']}です。\n" ;
} //文字列の中で配列のキーを使うときはPHPにとって「どこまでが変数か」が曖昧になるため、{}で囲む必要がある


// 問題3
foreach ($personalInfos as $x => $y) {
    $ageList = [25, 30, 18];
    $personalInfos[$x]['age'] = $ageList[$x];
}

var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
        echo '学籍番号' . $id . '番の生徒は' . $name . 'です。'; //関数の中で呼び出したい内容を記載する。
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$student = new Student(120, '山田'); //学籍番号120番の生徒は山田です。


// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($class)
    {
        echo $this->studentName . 'は' . $class . 'の授業に出席しました。学籍番号：' . $this->studentId . "\n";
    }
}

$student = new Student(120, '山田');
$student->attend('PHP');


// Q5 定義済みクラス
// 問題1
$date = new Datetime();
$date->modify('-1 month'); // 決まりで文字列で指定する必要があるとなっている。

echo $date->format('Y-m-d') . "\n"


$date->modify('+1 week'); // 1週間後
$date->modify('+1 day'); // 1日後


// 問題2
$startDay = new Datetime('1992-4-25');

$today = new Datetime();
$interval = $startDay->diff($today);


echo 'あの日から' . $interval->days . '日経過しました。'; //->daysはDateIntervalクラスのプロパティで、経過日数を取得するためのもの

?>