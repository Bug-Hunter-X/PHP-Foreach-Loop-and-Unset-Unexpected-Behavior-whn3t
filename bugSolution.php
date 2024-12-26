// Correct way to modify array within a foreach loop using pass by reference
function foo(array &$arr) {
    foreach ($arr as $key => &$value) {
        if ($value === 'bar') {
            unset($arr[$key]);
        }
    }
    return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )
//Another way to solve this is to use a while loop
function foo2(array $arr) {
    $i = 0;
    while ($i < count($arr)) {
        if ($arr[$i] === 'bar') {
            unset($arr[$i]);
        } else {
            $i++;
        }
    }
    return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo2($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )