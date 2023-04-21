<?PHP
function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    // ここで配列の中の1番大きい値を探したい
    if ($a > $max_number) {
        $max_number = $a;
    }
  }
  return $max_number;
}

echo max_array(array(1, 3, 5 ,7, 9)) . "\n";
?>