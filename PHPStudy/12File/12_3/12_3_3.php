<?php
/**
 * Created by PhpStorm.
 * User: fangyue
 * Date: 2015/10/14
 * Time: 17:27
 */

function t1(){
    //打开
    $fp = fopen("demo.txt", "r");

    while(!feof($fp)){
        echo fgetc($fp);

    }
//关闭
    fclose($fp);
}

function t2(){
    //打开
    $fp = fopen("demo.txt", "r");
    while(!feof($fp)) {
        echo fgets($fp)."<br>";
    }
//关闭
    fclose($fp);
}

function t3(){
    //打开
    $fp = fopen("demo.txt", "r");
//echo fread($fp, filesize("demo.txt"));
    while(!feof($fp)) {
        echo fread($fp, 1024);
    }
//关闭
    fclose($fp);
}

function t4(){
    //打开
    $fp = fopen("demo.txt", "r");

    echo ftell($fp)."<br>";
    fseek($fp, 4);
    echo ftell($fp)."<br>";
    echo fread($fp, 11)."<br>";
    echo ftell($fp)."<br>";
    fseek($fp, -3, SEEK_END);
    echo fread($fp, 3);
    rewind($fp);
    echo ftell($fp)."<br>";
//关闭
    fclose($fp);
}

function t5(){
    //打开
    $fp = fopen("demo.txt", "a");
    fwrite($fp, "www.lampbrother.net\n");
//关闭
    fclose($fp);
}
//t5();

function t6(){
    //打开
    $fp = fopen("demo.txt", "a");
    rewind($fp);
    echo ftell($fp)."<br>";
    fwrite($fp, "hello world\n");
//关闭
    fclose($fp);
}