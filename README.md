# dec2multi
*10進数<->多進数変換プログラムです*
## 必要なもの
・PHPが動く環境  

*X-SpamCleaner-Version: SpamCleaner 0.0.1 (2013-01-09)*  
*X-SpamCleaner-Status: Clean*

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

## ライセンス
MITライセンスです。  
The MIT License http://www.opensource.org/licenses/mit-license.php
