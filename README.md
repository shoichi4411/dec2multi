# dec2multi
*10進数<->多進数変換プログラムです*
## 必要なもの
・PHPが動く環境  

## 使用方法
・$string = dec2multi($dec, $multiPattarn);

    $dec : 10進数
    $multiPattarn（省略化） : '0123456789abcdef'のような文字パターンを入力
    ※省略時は62進数（0-9a-zA-Z）。
    $string : 多進数の返り値（文字列）

・$string = multi2dec($multi, $multiPattarn);

    $multi : dec2multiで変換した文字列
    $multiPattarn（省略化） : '0123456789abcdef'のような文字パターンを入力
    ※省略時は62進数（0-9a-zA-Z）。
    $string : 10進数の返り値（文字列）

## 使用事例

・62進数

    echo dec2multi("1234567890"); // 1fnlCI
    echo '<br />';
    echo multi2dec("1fnlCI"); // 1234567890
    echo '<hr />';

・16進数

    echo dec2multi("1234567890", "0123456789abcdef"); // 499602d2
    echo '<br />';
    echo multi2dec("499602d2", "0123456789abcdef"); // 1234567890
    echo '<hr />';

・2進数

    echo dec2multi("1234567890", "01"); // 1001001100101100000001011010010
    echo '<br />';
    echo multi2dec("1001001100101100000001011010010", "01"); // 1234567890
    echo '<hr />';

・92進数

    echo dec2multi("1234567890", "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!#$%&()-=+*_[]{}@:;~^|/.,<>?"); // i_J+0
    echo '<br />';
    echo multi2dec("i_J+0", "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!#$%&()-=+*_[]{}@:;~^|/.,<>?"); // 1234567890
    echo '<hr />';


## ライセンス
MITライセンスです。  
The MIT License http://www.opensource.org/licenses/mit-license.php
