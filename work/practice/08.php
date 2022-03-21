<?php

//四則演算
echo 10 + 3 . PHP_EOL;
echo 10 - 3 . PHP_EOL;
echo 10 * 3 . PHP_EOL;
echo 10 / 3 . PHP_EOL;

//余りを求める、二乗や三乗
echo 10 % 3 . PHP_EOL;
echo 10 ** 3 . PHP_EOL;

//計算の優先順位
echo 2 + 10 * 3 . PHP_EOL; //32
echo (2 + 10) * 3 . PHP_EOL;  //36

//数字にしようとするので計算できる
echo 2 + '3' . PHP_EOL;  //5