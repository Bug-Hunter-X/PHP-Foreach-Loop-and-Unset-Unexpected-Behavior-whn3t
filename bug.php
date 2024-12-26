function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

//This code will not properly unset elements during the loop in some cases because foreach is copying the array into the loop
function foo2(array &$arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo2($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

//This code shows how to properly unset element during the loop
function foo3(array &$arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo3($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )