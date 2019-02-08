<?php
/**
 * 接口中的常量
 */
interface IConnectInfo
{
    const HOST = "localhost";
    const UNAME = "root";
    const DBNAME = "laravel5";
    const PW = "root123";
    function testConnection();
}