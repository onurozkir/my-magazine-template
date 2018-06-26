<?php

function getBaseUrl($string = '')
{
    $link = ($string == '') ? '/' : '/' . $string;
    return sprintf(
        "%s%s",
        httpServerName().'/test3', $link
    );
}

function mailAdress()
{
    return 'info@tepekule.com.tr';
}

function mailBodyTemplate($mailContent = array())
{

    $template = '<table width="100%">';
    $template .= '<caption style="margin-bottom: 20px"><i>Bu ' . siteName() . ' İletişim formundan gönderilmiştir.</i></caption>';
    foreach ($mailContent as $key => $val) {
        $template .= "<tr>";
        $template .= "<td width='300'><b>" . $key . "</b></td>";
        $template .= "<td>" . $val . "</td>";
        $template .= "</tr>";
    }
    $template .= "<tr><td>Bu Mesaj <b>" . getUserIP() . "</b> İp adresinden <b>" . todayToNow() . "</b> tarihinde gönderildi.</td></tr>";
    $template .= '</table>';

    return $template;
}

function js($string)
{
    return sprintf(
        "%s%s/%s",
        getBaseUrl(), "assets/js", $string
    );
}

function jsBuild($string)
{
    return sprintf(
        "%s%s/%s",
        getBaseUrl(), "assets/js/build", $string
    );
}

function css($string)
{
    return sprintf(
        "%s%s/%s",
        getBaseUrl(), "assets/css", $string
    );
}

function getImgPath($string)
{
    return sprintf(
        "%s/%s/%s",
        getBaseUrl(), "assets/img", $string
    );
}

function getUploadImgPath($string)
{
    return sprintf(
        "%s/%s/%s",
        getBaseUrl(), "assets/dergi/upload", $string
    );
}


function getUserIP() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if (isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if (isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}


function todayToNow()
{
    return date('d-m-Y H:i:s');
}


function cssVersion()
{
    return 'v=1.0.0';
}

function jsVersion(){
    return 'v=1.0.0';
}

function httpServerName(){
    return isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http' . '://' . $_SERVER['SERVER_NAME'];
}

function siteName(){
    return "Magazine Dergi";
}

function smtpMailAdress()
{
    return "magazinedergi@bacaorganik.com";
}

function smtpMailPassword()
{
    return 'intrek*2016#';
}


function mailMessage($name = '', $type = true) {
    if ($type == true) {
        if ($name != '') {
            $msg = 'Mesajınız Tarafımıza iletildi. En yakın sürede geri dönüş sağlayacağız.';
        } else {
            $msg = 'Sn.' . $name . ' mesajınız tarafımıza iletildi. En yakın sürede geri dönüş sağlayacağız.';
        }
    } else {
        $msg = 'Bir sorunla karşılaşıldı. Lütfen daha sonra tekrar deneyiniz.';
    }

    return $msg;
}


function stripTags($string){
    $invalid_characters = array("$" => '{$}', "%" => '{%}', "#" => '{#}', "<" => '&lgt', ">" => '&rgt', "|" => '&pipe' ,'../' => '{../}', '~' => '~yaklaşık');
    return strtr(trim(htmlspecialchars(strip_tags($string))),$invalid_characters);

}

function siteKeyword(){
    return '1';
}

function siteDesc(){
    return '1';
}


