<?php
session_start();
include("db.php");

class data extends db{
    private $bookpic;
    private $bookname;
    private $bookdetail;
    private $bookaudor;
    private $bookpub;
    private $branch;
    private $bookprice;
    private $bookquantity;
    private $type;
    private $book;
    private $userselect;
    private $days;
    private $getdate;
    private $returnDate;



    function __construct(){
        // echo "Working";
    }
    function adminLogin($t1,$t2)
    {
        $q="SELECT * FROM admin WHERE email='$t1' and Pass='$t2'";
        $recordSet=$this->connection->query($q);
        $result=$recordSet->rowCount();


        if ($result>0) {
            foreach($recordSet->fetchAll() as row){
                $logid=$row['id'];
                $_SESSION['adminid']=$logid;
            header("location:admin_service_dashboard.php");
        }
        }
        elseif ($result<=0) {
            header("location:index.php?msg=Invalid Cridentional");
        }
    }
    function addnewuser($names,$pasword,$email,$type)
    {
        $this->name=$name;
        $this->pasword=$pasword;
        $this->email=$email;
        $this->type=$type;
        $q="INSERT INTO userdata(id,name,email,pass,type)VALUES('','$name','$email','$pasword','$type')";
        if ($this->connection->exec($q)) {
            header("Location:admin_service_dashboard.php?msg=New Add Done");
        }
        else{
            header("Location:admin_service_dashboard.php?msg=Register Fail");
        }
    }
}
?>