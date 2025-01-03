```php
function incrementArrayValue(array &$arr, string $key): void {
  if (!array_key_exists($key, $arr)) {
    $arr[$key] = 0; // Initialize if key doesn't exist
  }
  $arr[$key]++;
}

$myArray = ['a' => 1, 'b' => 2];
incrementArrayValue($myArray, 'c');
incrementArrayValue($myArray, 'a');

print_r($myArray);
```