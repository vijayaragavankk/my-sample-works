<?PHP
$uname=$_POST['uname'];
$password=$_POST['password'];
$address=$_POST['address'];
$pnum=$_POST['pnum'];
$mail=$_POST['mail'];

//database connection
$conn=new mysqli('localhost','root','','donation_details');
if($conn->connect_error)
{
    die('connection Failed :'.$conn->connect_error');
}
else{
    $stmt=$conn->prepare("insert into user_details(uname,password,address,pnum,mail)
     values(?,?,?,?,?);
    $stmt->bind_param("sssis",$uname,$password,$address,$pnum,$mail);
    $stmt->execute();
    echo"Registered Successfully...";
    $stmt-.close();
    $conn->close();
}

?>