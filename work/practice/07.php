<?php

// <<<'変数'を指定すると、改行なども反映して代入できる。
$text = <<<'EOT'

  hello!
      this is looooooooong
  text!

  EOT;

echo $text;