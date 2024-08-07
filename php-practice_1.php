<?php
// Q1 変数と文字列
<?php
$name = "安藤";

echo "私の名前は「" . $name . "」です。";

// Q2 四則演算
<?php
echo ($num = 5 * 4) . "\n" . ($num / 2);

// Q3 日付操作
<?php
echo "現在時刻は、" . date("Y年m月d日 H時i分s秒") . "です。";

// Q4 条件分岐-1 if文
<?php
$device = "windows";

if ($device == "windows") {
    echo "使用OSは、windowsです。";
} else {
    echo ($device == "mac") ? "使用OSは、macです。" : "どちらでもありません。";
}

// Q5 条件分岐-2 三項演算子
<?php
$age = 29;
echo $age < 18 ? "未成年です。" : "成人です。";

// Q6 配列
<?php
$kanto = ["東京都", "神奈川県", "栃木県", "千葉県", "埼玉県", "茨城県", "群馬県"];
echo $kanto[2] . "と" . $kanto[3] . "は関東地方の都道府県です。";

// Q7 連想配列-1
<?php
$kanto = [
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県" => "千葉市",
    "埼玉県" => "さいたま市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "茨城県" => "水戸市"
];

foreach ($kanto as $city) {
    echo $city . "\n";
}

// Q8 連想配列-2
<?php
$kanto = [
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県" => "千葉市",
    "埼玉県" => "さいたま市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "茨城県" => "水戸市"
];

foreach ($kanto as $ken => $city) {
    if ($ken == "埼玉県") {
        echo $ken . "の県庁所在地は、" . $city . "です。";
    }
}

// Q9 連想配列-3
<?php
$kanto = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市",
  "愛知県" => "名古屋市",
  "大阪府" => "大阪市"
];

foreach ($kanto as $prefecture => $city) {
    if ($prefecture == "愛知県" || $prefecture == "大阪府") {
        echo $prefecture . "は関東地方ではありません。\n";
    } else {
        echo $prefecture . "の県庁所在地は、" . $city . "です。 \n";
    }
}

// Q10 関数-1
<?php
function hello($name) {
    return $name . "さん、こんにちは。\n";
}

echo hello("鈴木");
echo hello("田中");

// Q11 関数-2
<?php
function calcTaxInPrice($price) {
    return $price * 1.10;
}

$price = 1000;
$taxInPrice = calcTaxInPrice($price);

echo $price . "円の商品の税込価格は" . $taxInPrice . "円です。";

// Q12 関数とif文
<?php
function distinguishNum($num) {
    if ($num % 2 == 0) {
        return $num . "は偶数です。";
    } else {
        return $num . "は奇数です。";
    }
}

$numbers = [11, 24];

foreach ($numbers as $num) {
    echo distinguishNum($num) . "\n";
}

// Q13 関数とswitch文
<?php
function evaluateGrade($grade) {
    switch ($grade) {
        case 'A':
        case 'B':
            return "合格です。";
        case 'C':
            return "合格ですが追加課題があります。";
        case 'D':
            return "不合格です。";
        default:
            return "判定不明です。講師に問い合わせてください。";
    }
}

echo evaluateGrade('A'). "\n";
echo evaluateGrade('E'); 

?>