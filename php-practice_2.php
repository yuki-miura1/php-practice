<?php
// Q1 tic-tac問題
<?php
echo "1から100までのカウントを開始します\n";

for ($i = 1; $i <= 100; $i++) {
       if ($i % 4 == 0 && $i % 5 == 0) {
        echo "tic-tac\n";
    } elseif ($i % 4 == 0) {
        echo "tic\n";
    } elseif ($i % 5 == 0) {
        echo "tac\n";
    } else {
        echo $i . "\n";
    }
}

// Q2 多次元連想配列
<?php
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
Q1
echo "Bさんの電話番号は{$personalInfos[1]['tel']}です。";

Q2
foreach ($personalInfos as $i => $info) {
    echo ($i + 1) . "番目の{$info['name']}のメールアドレスは{$info['mail']}で、電話番号は{$info['tel']}です。\n";
}
Q3
$ageList = [25, 30, 18];

foreach ($personalInfos as $i => &$info) {
    $info['age'] = $ageList[$i];
}

var_dump($personalInfos);

// Q3 オブジェクト-1
<?php

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$student = new Student(120, '山田');

echo "学籍番号{$student->studentId}番の生徒は{$student->studentName}です。";

// Q4 オブジェクト-2
<?php

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        echo "{$this->studentName}は{$subject}の授業に参加しました。学籍番号：{$this->studentId}";
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
Q1
<?php
$date = new DateTime('2021-03-02');

$date->modify('-1 month');

echo $date->format('Y-m-d');

Q2
<?php
$today = new DateTime();

$interval = $today->diff(new DateTime('1992-04-25'));

echo "あの日から{$interval->days}日経過しました。";
?>