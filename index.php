<?php
$hexs = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "a", "b", "c", "d", "e", "f"];
function hex2Str($hx)
{
    $a = strtolower($hx);
    $length = intval(strlen($a) / 2);
    $bt = "";
    for ($i = 0;
    $i < $length - 1;
    $i++)
    {
        $i2 = $i * 2;
        $b = intval(substr($a, $i2, 2), 16) & 255;
        $bt .= chr($b);
    }
    return $bt;
}
function byte2hex($bt)
{
    $strs = "";
    for ($i = 0;
    $i < strlen($bt);
    $i++)
    {
        $s = strtoupper(dechex(ord($bt[$i])));
        if (strlen($s) > 2)
        {
            $strs .= substr($s, 6);
        }
        else if (strlen($s) < 2)
        {
            $strs .= "0" . $s;
        }
        else
        {
            $strs .= $s;
        }
    }
    return $strs;
}
function hashMd5($s)
{
    return md5($s);
}
$DES_MODE_DECRYPT = 1;
$arrayE = [31, 0, $DES_MODE_DECRYPT, 2, 3, 4, -1, -1, 3, 4, 5, 6, 7, 8, -1, -1, 7, 8, 9, 10, 11, 12, -1, -1, 11, 12, 13, 14, 15, 16, -1, -1, 15, 16, 17, 18, 19, 20, -1, -1, 19, 20, 21, 22, 23, 24, -1, -1, 23, 24, 25, 26, 27, 28, -1, -1, 27, 28, 29, 30, 31, 30, -1, -1];
$arrayIP = [57, 49, 41, 33, 25, 17, 9, $DES_MODE_DECRYPT, 59, 51, 43, 35, 27, 19, 11, 3, 61, 53, 45, 37, 29, 21, 13, 5, 63, 55, 47, 39, 31, 23, 15, 7, 56, 48, 40, 32, 24, 16, 8, 0, 58, 50, 42, 34, 26, 18, 10, 2, 60, 52, 44, 36, 28, 20, 12, 4, 62, 54, 46, 38, 30, 22, 14, 6];
$arrayIP_1 = [39, 7, 47, 15, 55, 23, 63, 31, 38, 6, 46, 14, 54, 22, 62, 30, 37, 5, 45, 13, 53, 21, 61, 29, 36, 4, 44, 12, 52, 20, 60, 28, 35, 3, 43, 11, 51, 19, 59, 27, 34, 2, 42, 10, 50, 18, 58, 26, 33, $DES_MODE_DECRYPT, 41, 9, 49, 17, 57, 25, 32, 0, 40, 8, 48, 16, 56, 24];
$arrayLs = [1, 1, 2, 2, 2, 2, 2, 2, 1, 2, 2, 2, 2, 2, 2, 1];
$arrayLsMask = [0, 0x100001, 0x300003];
$arrayMask = [1, 2, 4, 8, 16, 32, 64, 128, 256, 512, 1024, 2048, 4096, 8192, 16384, 32768, 65536, 131072, 262144, 524288, 1048576, 2097152, 4194304, 8388608, 16777216, 33554432, 67108864, 134217728, 268435456, 536870912, 1073741824, 2147483648, 4294967296, 8589934592, 17179869184, 34359738368, 68719476736, 137438953472, 274877906944, 549755813888, 1099511627776, 2199023255552, 4398046511104, 8796093022208, 17592186044416, 35184372088832, 70368744177664, 140737488355328, 281474976710656, 562949953421312, 1125899906842624, 2251799813685248, 4503599627370496, 9007199254740992, 18014398509481984, 36028797018963968, 72057594037927936, 144115188075855872, 288230376151711744, 576460752303423488, 1152921504606846976, 2305843009213693952, 4611686018427387904, -9223372036854775808];
$arrayP = [15, 6, 19, 20, 28, 11, 27, 16, 0, 14, 22, 25, 4, 17, 30, 9, 1, 7, 23, 13, 31, 26, 2, 8, 18, 12, 29, 5, 21, 10, 3, 24];
$arrayPC_1 = [56, 48, 40, 32, 24, 16, 8, 0, 57, 49, 41, 33, 25, 17, 9, 1, 58, 50, 42, 34, 26, 18, 10, 2, 59, 51, 43, 35, 62, 54, 46, 38, 30, 22, 14, 6, 61, 53, 45, 37, 29, 21, 13, 5, 60, 52, 44, 36, 28, 20, 12, 4, 27, 19, 11, 3];
$arrayPC_2 = [13, 16, 10, 23, 0, 4, -1, -1, 2, 27, 14, 5, 20, 9, -1, -1, 22, 18, 11, 3, 25, 7, -1, -1, 15, 6, 26, 19, 12, 1, -1, -1, 40, 51, 30, 36, 46, 54, -1, -1, 29, 39, 50, 44, 32, 47, -1, -1, 43, 48, 38, 55, 33, 52, -1, -1, 45, 41, 49, 35, 28, 31, -1, -1];
$matrixNSBox = [[14, 4, 3, 15, 2, 13, 5, 3, 13, 14, 6, 9, 11, 2, 0, 5, 4, 1, 10, 12, 15, 6, 9, 10, 1, 8, 12, 7, 8, 11, 7, 0, 0, 15, 10, 5, 14, 4, 9, 10, 7, 8, 12, 3, 13, 1, 3, 6, 15, 12, 6, 11, 2, 9, 5, 0, 4, 2, 11, 14, 1, 7, 8, 13], [15, 0, 9, 5, 6, 10, 12, 9, 8, 7, 2, 12, 3, 13, 5, 2, 1, 14, 7, 8, 11, 4, 0, 3, 14, 11, 13, 6, 4, 1, 10, 15, 3, 13, 12, 11, 15, 3, 6, 0, 4, 10, 1, 7, 8, 4, 11, 14, 13, 8, 0, 6, 2, 15, 9, 5, 7, 1, 10, 12, 14, 2, 5, 9], [10, 13, 1, 11, 6, 8, 11, 5, 9, 4, 12, 2, 15, 3, 2, 14, 0, 6, 13, 1, 3, 15, 4, 10, 14, 9, 7, 12, 5, 0, 8, 7, 13, 1, 2, 4, 3, 6, 12, 11, 0, 13, 5, 14, 6, 8, 15, 2, 7, 10, 8, 15, 4, 9, 11, 5, 9, 0, 14, 3, 10, 7, 1, 12], [7, 10, 1, 15, 0, 12, 11, 5, 14, 9, 8, 3, 9, 7, 4, 8, 13, 6, 2, 1, 6, 11, 12, 2, 3, 0, 5, 14, 10, 13, 15, 4, 13, 3, 4, 9, 6, 10, 1, 12, 11, 0, 2, 5, 0, 13, 14, 2, 8, 15, 7, 4, 15, 1, 10, 7, 5, 6, 12, 11, 3, 8, 9, 14], [2, 4, 8, 15, 7, 10, 13, 6, 4, 1, 3, 12, 11, 7, 14, 0, 12, 2, 5, 9, 10, 13, 0, 3, 1, 11, 15, 5, 6, 8, 9, 14, 14, 11, 5, 6, 4, 1, 3, 10, 2, 12, 15, 0, 13, 2, 8, 5, 11, 8, 0, 15, 7, 14, 9, 4, 12, 7, 10, 9, 1, 13, 6, 3], [12, 9, 0, 7, 9, 2, 14, 1, 10, 15, 3, 4, 6, 12, 5, 11, 1, 14, 13, 0, 2, 8, 7, 13, 15, 5, 4, 10, 8, 3, 11, 6, 10, 4, 6, 11, 7, 9, 0, 6, 4, 2, 13, 1, 9, 15, 3, 8, 15, 3, 1, 14, 12, 5, 11, 0, 2, 12, 14, 7, 5, 10, 8, 13], [4, 1, 3, 10, 15, 12, 5, 0, 2, 11, 9, 6, 8, 7, 6, 9, 11, 4, 12, 15, 0, 3, 10, 5, 14, 13, 7, 8, 13, 14, 1, 2, 13, 6, 14, 9, 4, 1, 2, 14, 11, 13, 5, 0, 1, 10, 8, 3, 0, 11, 3, 5, 9, 4, 15, 2, 7, 8, 12, 15, 10, 7, 6, 12], [13, 7, 10, 0, 6, 9, 5, 15, 8, 4, 3, 10, 11, 14, 12, 5, 2, 11, 9, 6, 15, 12, 0, 3, 4, 1, 14, 13, 1, 2, 7, 8, 1, 2, 12, 15, 10, 4, 0, 3, 13, 14, 6, 9, 7, 8, 9, 6, 15, 1, 5, 12, 3, 10, 14, 5, 8, 7, 11, 0, 4, 13, 2, 11]];
$SECRET_KEY = "ylzsxkwm";
function bit_transform($arr_int, $n, $l)
{
    $l2 = 0;
    for ($i = 0;
    $i < $n;
    $i++)
    {
        if ($arr_int[$i] < 0 || ($l & $GLOBALS['arrayMask'][$arr_int[$i]]) == 0)
        {
            continue;
        }
        $l2 |= $GLOBALS['arrayMask'][$i];
    }
    return $l2;
}
function DES64($longs, $l)
{
    $out = 0;
    $SOut = 0;
    $pR = [0, 0, 0, 0, 0, 0, 0, 0];
    $pSource = [0, 0];
    $sbi = 0;
    $t = 0;
    $L = 0;
    $R = 0;
    $out = bit_transform($GLOBALS['arrayIP'], 64, $l);
    $pSource[0] = 0xFFFFFFFF & $out;
    $pSource[1] = (-4294967296 & $out) >> 32;
    for ($i = 0;
    $i < 16;
    $i++)
    {
        $R = $pSource[1];
        $R = bit_transform($GLOBALS['arrayE'], 64, $R);
        $R ^= $longs[$i];
        for ($j = 0;
        $j < 8;
        $j++)
        {
            $pR[$j] = 255 & $R >> $j * 8;
        }
        $SOut = 0;
        for ($sbi = 7;
        $sbi >= 0;
        $sbi--)
        {
            $SOut <<= 4;
            $SOut |= $GLOBALS['matrixNSBox'][$sbi][$pR[$sbi]];
        }
        $R = bit_transform($GLOBALS['arrayP'], 32, $SOut);
        $L = $pSource[0];
        $pSource[0] = $pSource[1];
        $pSource[1] = $L ^ $R;
    }
    $pSource = array_reverse($pSource);
    $out = -4294967296 & $pSource[1] << 32 | 0xFFFFFFFF & $pSource[0];
    $out = bit_transform($GLOBALS['arrayIP_1'], 64, $out);
    return $out;
}
function sub_keys($l, &$longs, $n)
{
    $l2 = bit_transform($GLOBALS['arrayPC_1'], 56, $l);
    for ($i = 0;
    $i < 16;
    $i++)
    {
        $l2 = (($l2 & $GLOBALS['arrayLsMask'][$GLOBALS['arrayLs'][$i]]) << 28 - $GLOBALS['arrayLs'][$i] | ($l2 & ~$GLOBALS['arrayLsMask'][$GLOBALS['arrayLs'][$i]]) >> $GLOBALS['arrayLs'][$i]);
        $longs[$i] = bit_transform($GLOBALS['arrayPC_2'], 64, $l2);
    }
    $j = 0;
    while ($n == 1 && $j < 8)
    {
        $l3 = $longs[$j];
        $longs[$j] = $longs[15 - $j];
        $longs[15 - $j] = $l3;
        $j += 1;
    }
}
function encrypt($msg)
{
    $key = $GLOBALS['SECRET_KEY'];
    if (is_string($msg))
    {
        $msg = $msg;
    }
    if (is_string($key))
    {
        $key = $key;
    }
    $l = 0;
    for ($i = 0;
    $i < 8;
    $i++)
    {
        $l = $l | ord($key[$i]) << $i * 8;
    }
    $j = floor(strlen($msg) / 8);
    $arrLong1 = array_fill(0, 16, 0);
    sub_keys($l, $arrLong1, 0);
    $arrLong2 = array_fill(0, $j, 0);
    for ($m = 0;
    $m < $j;
    $m++)
    {
        for ($n = 0;
        $n < 8;
        $n++)
        {
            $arrLong2[$m] |= ord($msg[$n + $m * 8]) << $n * 8;
        }
    }
    $arrLong3 = array_fill(0, floor((1 + 8 * ($j + 1)) / 8), 0);
    for ($i1 = 0;
    $i1 < $j;
    $i1++)
    {
        $arrLong3[$i1] = DES64($arrLong1, $arrLong2[$i1]);
    }
    $arrByte1 = substr($msg, $j * 8);
    $l2 = 0;
    for ($i1 = 0;
    $i1 < strlen($msg) % 8;
    $i1++)
    {
        $l2 |= ord($arrByte1[$i1]) << $i1 * 8;
    }
    $arrLong3[$j] = DES64($arrLong1, $l2);
    $arrByte2 = str_repeat(chr(0), 8 * count($arrLong3));
    $i4 = 0;
    foreach ($arrLong3 as $l3)
    {
        for ($i6 = 0;
        $i6 < 8;
        $i6++)
        {
            $arrByte2[$i4] = chr(255 & $l3 >> $i6 * 8);
            $i4 += 1;
        }
    }
    return $arrByte2;
}
function base64_encrypt($msg)
{
    $b1 = encrypt($msg);
    $b2 = str_split($b1);
    $s = base64_encode(implode($b2));
    return str_replace(["\r\n", "\n"], '', $s);
}
function getMusicUrlUrl($id, $format,$br)
{
    $willEnc = "user=0&android_id=0&prod=kwplayer_ar_8.5.5.0&corp=kuwo&newver=3&vipver=8.5.5.0&source=kwplayer_ar_8.5.5.0_apk_keluze.apk&p2p=1&notrace=0&type=convert_url2&br={$br}&format={$format}&sig=0&rid={$id}&priority=bitrate&loginUid=0&network=WIFI&loginSid=0&mode=download";
    $url ="http://mobi.kuwo.cn/mobi.s?f=kuwo&q=" . base64_encrypt($willEnc);
    //echo $url;
    return $url;
}
// 获取 GET 参数 rid
$id = isset($_GET['rid']) ? $_GET['rid'] : '114514';
$yz = isset($_GET['yz']) ? $_GET['yz'] : '5';
if ($yz == '1')
{
    $format = 'acc';
    $br = '64kacc';
}
elseif ($yz == '2')
{
    $format = 'mp3';
    $br = '128kmp3';
}
elseif ($yz == '3')
{
    $format = 'mp3';
    $br = '160kmp3';
}
elseif ($yz == '4')
{
    $format = 'mp3';
    $br = '320kmp3';
}
elseif ($yz == '5')
{
    $format = 'flac';
    $br = '2000flac';
}
else
{
    // 如果 $yz 的值不在上述范围内，默认使用 'mp3' 和 '160kmp3'
    $format = 'mp3';
    $br = '160kmp3';
}
// 调用 getMusicUrlUrl 函数获取音乐 URL
$musicUrl = getMusicUrlUrl($id,$format,$br);
$headers = [
"User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_5_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Mobile/15E148 Safari/604.1"
];
$ch = curl_init($musicUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
// 设置请求头
$response = curl_exec($ch);
curl_close($ch);
/*
调用如下：
https://api.fanxing.life/api/kw.php?rid=228908    直接返回高品音質
https://api.fanxing.life/api/kw.php?rid=228908&yz=音質選擇1-5  音質選擇從低到高（yz=1為流暢，yz=5為無損）
*/
// $rid = $id;
preg_match('/url=(.*?)\s/', $response, $matches);
$url = $matches[1];
echo $url;
?>