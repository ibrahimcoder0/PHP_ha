<?php
$x = 9;
$y = 8;

function greaterOrSmaller($x, $y)
{
  if ($x > $y) {
    return 1;
  } elseif ($x == $y) {
    return 0;
  } else {
    return -1;
  }
}

if (greaterOrSmaller($x, $y) == 1) {
  echo "$x is greater than $y";
} elseif (greaterOrSmaller($x, $y) == 0) {
  echo "$x is equal to $y";
} elseif (greaterOrSmaller($x, $y) == -1) {
  echo "$x is smaller than $y";
}

echo PHP_EOL;

$result = $x <=> $y;
if ($result == 1) {
  echo "$x is greater than $y";
} elseif ($result == 0) {
  echo "$x is equal to $y";
} elseif ($result == -1) {
  echo "$x is smaller than $y";
}