<?php

abstract class stringAndrle {

    public static function substrAndrle($stringKterýmNahrazuji = 'auto', $stringKterýNahrazuji = 'motorka') {
        return substr($stringKterýNahrazuji, $stringKterýmNahrazuji);
    }

    public static function substr_replaceAndrle($stringKterýmNahrazuji1 = 'auto', $stringKterýNahrazuji1 = 'motorka', $začátečníBit = 0) {
        return substr_replace($stringKterýNahrazuji1, $stringKterýmNahrazuji1, $začátečníBit);
    }

    public static function strtrAndrle($slovoKterýmNahrazuji = 'pes', $slovoKterýNahrazuji = 'kočka', $věta = 'Přejel jsem omylem kočka') {
        return strtr($věta, $slovoKterýNahrazuji, $slovoKterýmNahrazuji);
    }

    public static function stroupperAndrle($velkéPísmeno = 'ASDFFGGHJKLGBF') {
        return strtoupper($velkéPísmeno);
    }

    public static function strtlowerAndrle($maléPísmeno = 'dgjkukeetrezre') {
        return strtolower($maléPísmeno);
    }

    public static function strrposAndrle($bit1 = 8, $bit2 = 7) {
        return strrpos($bit1, $bit2, $offset = 0);
    }

    public static function strriposAndrle($přesněNajdi, $bit = '2B') {
        return strripos($přesněNajdi, $bit, $offset = 0);
    }

    public static function strlenAndrle($délkaŘetězce = 20) {
        return strlen($délkaŘetězce);
    }

    public static function str_replaceAndrle($odstraníPísmeno = 'a', $nahradíPísmenem = 'b', $veVětě = 'Tohle je hřeaík') {
        return str_replace($odstraníPísmeno, $nahradíPísmenem, $veVětě, $count = NULL);
    }

    public static function md5Andrle($zakódujeHeslo = 'jjs5dswsa') {
        return md5($zakódujeHeslo);
    }

    public static function implodeAndrle($čárka = ',') {
        return implode('...věděl', $čárka, 'ale...');
    }

    public static function explodeAndrle($rozdělíString) {
        return explode('', $rozdělíString);
    }
    
    public static function addslashesAndrle($přidejLomeno = '/') {
        return addslashes($přidejLomeno);
    }
    
    public static function trimAndrle($vynechKusŘetězce) {
        return trim($vynechKusŘetězce);
    }
    
    public static function ucfirstAndrle ($prvníPísmenoVelké) {
    return ucfirst($prvníPísmenoVelké);
    }
    
    public static function ucwordsAndrle ($každéPrvníPísmenoVeVětěVelké) {
        return ucwords($každéPrvníPísmenoVeVětěVelké);
    }

}

var_dump(substrAndrle);

?> 
