<?php
// Сортировка массива, применяется для функции showMenu
function arraySort(array $array, $key, $sort): array
{
  usort($array, function($a, $b) use ($sort, $key) {
    return $sort == SORT_ASC ? $a[$key] <=> $b[$key] : $b[$key] <=> $a[$key];
    }
  );
  return $array;
}