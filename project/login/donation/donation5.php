<?PHP
$phone=$_POST['phone'];
$avail=$_POST['avail'];
$date1=$_POST['date1'];
$time1=$_POST['time1'];
$add1=$_POST['add1'];

//database connection
$conn=new mysqli('localhost','root','','donation_details');
if($conn->connect_error)
{
    die('connection Failed :'.$conn->connect_error');
}
else{
    $stmt=$conn->prepare("insert into donation_details(phone,avail,date1,time1,add1)
     values(?,?,?,?,?);
    $stmt->bind_param("iisss",$phone,$avail,$date1,$time1,$add1);
    $stmt->execute();
    echo"Registered Successfully...";
    $stmt-.close();
    $conn->close();
}

?>