<?PHP
$str = '<body>
  <div id="main">
    <div class="side">
      <h4>商品大分類</h4>
      <select id="mainMenu"></select>
      <br>
      <div>
        <h4>商品小分類</h4>
        <select id="subMenu"></select>
      </div>
    </div>
    <div id="contents">
      <br>
      <div id="itemList"></div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="js/18_02.js" charset="UTF-8"></script>
</body>';
echo "strip_tags()の使用例：";
echo "\nOriginal:\n" . $str . "\n";
echo "\nApplied:\n" . strip_tags($str) . "\n";

echo "\narray_push()の使用例：";
$arr = ["Apple", "Banana", "Orange"];
echo "\nOriginal:\n";
print_r($arr);
echo "\nApplied:\n";
array_push($arr, "Grape", "Lemon");
print_r($arr);

echo "\narray_merge()の使用例：";
$arr1 = ["Apple", "Banana", "Orange"];
$arr2 = ["Grape", "Lemon"];
echo "\nOriginal:\n";
print_r($arr1);
print_r($arr2);
echo "\nApplied:\n";
print_r(array_merge($arr1, $arr2)) . "\n";

echo "\ntime()/mktime()/date()の使用例：";
date_default_timezone_set('Asia/Tokyo');
echo "\ntime()/date():\n";
echo date('Y-m-d H:i:s e', time());
echo "\n\nmktime()/date():\n";
echo date('Y-m-d H:i:s e', mktime(9, 0, 0, 5, 15, 2023)) . "\n";
?>