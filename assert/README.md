## assert() を使ったテスト

assert() の第一引数の結果がFALSEの場合に、第二引数のメッセージが出る

### 実行環境

PHP コマンドが使えばテスト実行可能

### テスト流れ

あえてテスト失敗するように$result === 5 にしています。


### テスト実行

php test_sum.php

何も表示しない場合、

php -d assert.exception=1 -d zend.assertions=1 test_sum.php
