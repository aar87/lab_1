<?php

$request = $_SERVER["REQUEST_URI"];
$queries = array();
parse_str(!empty($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '', $queries);
$path = explode("/", $request);
$route = $path[1];

global $login;;

if ($route == 'login') {
    $login = !empty($queries['username']) ? $queries['username'] : '';
    include('login.php');
} else if ($route == 'table') {
    include('table.php');
} else if ($route == 'padding') {
    include('padding.php');
} else if ($route == 'number-list') {
    include('number_list.php');
} else if ($route == 'table-2') {
    include('table2.php');
} else if ($route == 'marked-list') {
    include('marked_list.php');
} else if ($route == 'marked-list-random') {
    include('marked_list_random.php');
} else if ($route == 'triangle') {
    $x1 = !is_null($queries['x1']) ? $queries['x1'] : null;
    $x2 = !is_null($queries['x2']) ? $queries['x2'] : null;
    $x3 = !is_null($queries['x3']) ? $queries['x3'] : null;
    $y1 = !is_null($queries['y1']) ? $queries['y1'] : null;
    $y2 = !is_null($queries['y2']) ? $queries['y2'] : null;
    $y3 = !is_null($queries['y3']) ? $queries['y3'] : null;
    include('triangle.php');
} else if ($route == 'same-divider') {
    include('same_divider.php');
} else if ($route == 'isosceles-triangle') {
    include('isosceles_triangle.php');
} else if ($route == 'table-3') {
    include('table3.php');
} else if ($route == 'table-4') {
    include('table4.php');
} else if ($route == 'letter-case') {
    $text = !empty($queries['text']) ? $queries['text'] : '';
    include('letter_case.php');
} else if ($route == 'number-list-2') {
    include('numbers_list2.php');
} else if ($route == 'number-list-3') {
    include('numbers_list3.php');
} else if ($route == 'text-tab') {
    $baseText = !empty($queries['text']) ? $queries['text'] : '';
    include('text_tab.php');
} else if ($route == 'sum-divider') {
    include('sum_divider.php');
} else if ($route == 'number-digits') {
    include('number_digits.php');
} else if ($route == 'number-digits-2') {
    include('number_digits2.php');
}
