<?php
session_start();
if(!$_SESSION['email'])  
{  
      header("Location: login_jobseeker.php");//redirect to login page to secure the welcome page without login access.  
}
include("db_connection.php");  

$job_id=$_GET['job_id'];  
$jid=$_GET['jid'];  

$delete_query="delete from job_selection WHERE job_id='".$job_id."' AND jid='".$jid."'";//delete query  

$run=$conn->query($delete_query);  

if($run)  

{   

    echo "<script>
    alert('Your job application deleted successfully!');
    window.open('my_application.php','_self')</script>";  

}  
?>