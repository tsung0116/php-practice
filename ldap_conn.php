<?php
// 使用 ldap bind
$ldaprdn  = 'ftp-user';     // AD 帳號
$ldappass = 'Naruko193';  // AD 密碼

// 連線 ap server 主機資訊
$ldapconn = ldap_connect("nad1.niuer.tpe")
    or die("Could not connect to LDAP server.");

if ($ldapconn) {

    // 綁定 AD server
    $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

    // 進行認證
    if ($ldapbind) {
        echo "LDAP bind successful...";//假如成功就回傳 successful
    } else {
        echo "LDAP bind failed...";//失敗的話則回傳錯誤訊息
    }

}