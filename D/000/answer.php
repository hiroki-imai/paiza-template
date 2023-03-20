<?php
// 例題：スペース区切りの文字列を改行区切りにしてください
$input = fgets(STDIN);
foreach (explode(' ', $input) as $line) {
    echo $line . "\n";
}
