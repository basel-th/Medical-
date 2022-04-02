<?php
//MAKE CONNECT WITH DATABASE BY BASEL AHMED 


$server="localhost";
$username="root";
$password="";
$dbname="macial2";

$conn=mysqli_connect($server,$username,$password,$dbname);

if(!$conn)
{
   die("Error in connection " . mysqli_connect_error());
}


//  FUNCTION  FOR INSTER DATA BY BASEL AHMED
    
    
function db_insert($sql){


    global $conn;

    $result=mysqli_query($conn,$sql);

    if($result)
    {
        return"Added Success ";
    }
    return false;
     }


//  FUNCTION  FOR UPDATE DATA BY BASEL AHMED
    
    
function db_update($sql){


    global $conn;

    $result=mysqli_query($conn,$sql);

    if($result){

        return"Updated Success ";
    }
    return false;
}


// GET ROWS FROM DATABASE  BY BASEL AHMED


function getRows($table) 
   {

    global $conn;

    $sql="SELECT * FROM `$table`  ";

    $result=mysqli_query($conn,$sql);


    if($result){
        
        $rows = [ ];
        if(mysqli_num_rows($result) > 0) 
            {

           while ($row = mysqli_fetch_assoc($result)) {
              $rows[] = $row;
              
           }
        }
    
    }
    return $rows; 



}

// GET ROWS TODAY FROM DATABASE  BY BASEL AHMED


function getDayRows($table,$field,$value) 
   {

    global $conn;

    $sql="SELECT * FROM `$table` WHERE $field = '$value'; ";

    $result=mysqli_query($conn,$sql);


    if($result){
        
        $rows = [ ];
        if(mysqli_num_rows($result) > 0) 
            {

           while ($row = mysqli_fetch_assoc($result)) {
              $rows[] = $row;
              
           }
        }
    
    }
    return $rows; 



}



// GET SREACH CITY  FROM DATABASE  BY BASEL AHMED


function Sreach($table,$field,$value) 
   {

    global $conn;

    $sql="SELECT * FROM `$table` WHERE $field like '%$value%'; ";

    $result=mysqli_query($conn,$sql);


    if($result){
        
        $rows = [ ];
        if(mysqli_num_rows($result) > 0) 
            {

           while ($row = mysqli_fetch_assoc($result)) {
              $rows[] = $row;
              
           }
        }
    
    }
    return $rows; 



}



// GET ROW FROM DATABASE BY BASEL 


function getRow($table,$field,$value){


    global $conn;
    
    $sql="SELECT * FROM `$table` where `$field`= `$value`";

    $result=mysqli_query($conn,$sql);


    if($result){
       
        $rows=[ ];
        if(mysqli_num_rows($result)>0){

            $rows[]=mysqli_fetch_array($result);
            return $rows[0];

           
    
        }
    
    }
    return false;



}








