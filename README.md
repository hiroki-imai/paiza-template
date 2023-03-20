# リポジトリを自分のリポジトリにコピー


# PHP実行環境(8.0)の立ち上げ
1. docker compose up -d

# 使い方
## 回答
1. [paizaスキルチェック](https://paiza.jp/challenges)
2. 問題を選ぶ
3. 該当ディレクトリで開発（Ex. C012なら C/012/answer.php, C/012/input.txt）

## 実行確認
### 実行コマンド
`sh test.sh {ランク} {設問番号} {option:入力ファイル名}`

### 例1．Dランクの000番の問題を実行確認  
`sh test.sh D 000`  
※入力にはデフォルトで「input.txt」が利用される

### 例2．Dランクの000番の問題を「input2.txt」を入力として実行確認  
`sh test.sh D 000 input2.txt`
※第3引数を指定すると入力を変更できる


