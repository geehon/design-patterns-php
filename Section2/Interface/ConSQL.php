<?php

include_once('IConnectInfoMethod.php');

class ConSQL implements IConnectInfo
{
    private $server = IConnectInfo::HOST;
    private $currentDB = IConnectInfo::DBNAME;
    private $user = IConnectInfo::UNAME;
    private $pass = IConnectInfo::PW;

    public function testConnection()
    {
        $con = new mysqli(
            $this->server,
            $this->user,
            $this->pass,
            $this->currentDB
        );
        
        // 检测连接
        if (mysqli_connect_error($con))
        {
            die("数据库连接失败：<br />" . mysqli_connect_error());
        }

        print "数据库成功连接！<br />" . $con->host_info;
        $con->close();
    }
}

$useConstant = new ConSQL();
$useConstant->testConnection();