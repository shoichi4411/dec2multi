# dec2multi
*10�i��<->���i���ϊ��v���O�����ł�*
## �K�v�Ȃ���
�EPHP��������  

## �g�p���@
�E$string = dec2multi($dec, $multiPattarn);

    $dec : 10�i��
    $multiPattarn�i�ȗ����j : '0123456789abcdef'�̂悤�ȕ����p�^�[�������
    ���ȗ�����62�i���i0-9a-zA-Z�j�B
    $string : ���i���̕Ԃ�l�i������j

�E$string = multi2dec($multi, $multiPattarn);

    $multi : dec2multi�ŕϊ�����������
    $multiPattarn�i�ȗ����j : '0123456789abcdef'�̂悤�ȕ����p�^�[�������
    ���ȗ�����62�i���i0-9a-zA-Z�j�B
    $string : 10�i���̕Ԃ�l�i������j

## �g�p����

�E62�i��

    echo dec2multi("1234567890"); // 1fnlCI
    echo '<br />';
    echo multi2dec("1fnlCI"); // 1234567890
    echo '<hr />';

�E16�i��

    echo dec2multi("1234567890", "0123456789abcdef"); // 499602d2
    echo '<br />';
    echo multi2dec("499602d2", "0123456789abcdef"); // 1234567890
    echo '<hr />';

�E2�i��

    echo dec2multi("1234567890", "01"); // 1001001100101100000001011010010
    echo '<br />';
    echo multi2dec("1001001100101100000001011010010", "01"); // 1234567890
    echo '<hr />';

�E92�i��

    echo dec2multi("1234567890", "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!#$%&()-=+*_[]{}@:;~^|/.,<>?"); // i_J+0
    echo '<br />';
    echo multi2dec("i_J+0", "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!#$%&()-=+*_[]{}@:;~^|/.,<>?"); // 1234567890
    echo '<hr />';


## ���C�Z���X
MIT���C�Z���X�ł��B  
The MIT License http://www.opensource.org/licenses/mit-license.php
