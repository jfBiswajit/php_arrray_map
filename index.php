<?PHP
$additionFun = function($val) {
  return $val + 2;
};

function arr_map($fun, $arr) {
  $result = array();
  foreach ($arr as $val) {
   $result[] = $fun($val);
  }
  return $result;
}

echo "<pre>";
print_r(arr_map($additionFun, [10, 20, 30, 40, 50]));