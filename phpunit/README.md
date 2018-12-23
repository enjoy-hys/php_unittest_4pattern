## PHPUnit を使ったテスト

### 実行環境
PHPが実行できればテスト可能

### テスト流れ

src ディレクトリにテスト対象コードをおいて、
test ディレクトリにテストコードを格納

### テスト実行

#### composer インストール

composer install
※　！！！　本番は開発用パッケージをインストールしない様に composer install --no-dev

#### 実行(php phpunit_path test_code_path)

php vendor/bin/phpunit tests/
