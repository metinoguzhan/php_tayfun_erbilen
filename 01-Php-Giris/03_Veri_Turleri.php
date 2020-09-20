<?php


    /**
     * 
     *      Veri Türleri (Data Types)
     *      String "metin oğuzhan"
     *      Integer 500,200
     *      Float (Double) 5.5 2.7
     *      Boolean  (true,false)
     *      Array (dizi)
     *      Object (Nesne)
     *      NULL
     * gettype()
     * 
     */

    $string = "Metin Oğuzhan";
    $int = 500;
    $float = 12.588;
    $bool = true;
    $array = array();
    $object = new stdClass;
    $null = NULL;

    echo gettype($string)."<br>";
    echo gettype($int)."<br>";
    echo gettype($float)."<br>";
    echo gettype($bool)."<br>";
    echo gettype($array)."<br>";
    echo gettype($object)."<br>";
    echo gettype($null)."<br>";



?>