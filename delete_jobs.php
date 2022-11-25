<?php
session_start();
if(!$_SESSION['email'])  
{  
      header("Location: login_employer.php");//redirect to login page to secure the welcome page without login access.  
}
include("db_connection.php");  

$job=$_GET['del'];  

$delete_query="delete from jobs WHERE job_id='".$job."'";//delete query  

$run=$conn->query($delete_query);  

if($run)  

{   

    echo "<script>
    alert('Job post deleted successfully!');
    window.open('my_jobs.php','_self')</script>";  

}  
?>