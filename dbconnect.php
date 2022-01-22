<html>
    <head>
        <title>registration</title>
    </head>
    <body> 
        <?php
        $conn = new mysql('localhost' , 'root' , '123456' , 'project101');
        if($conn->connection_error)  {
            die("connection failed: ".$conn->connect__error);
        
        }
        $name=$_POST['name'];
        $password=$_POST['password']
        $email=$_POST['email']
        $mobile number=$_POST['mobile number']
        $gender=$_POST['gender']
        $adress=$_POST['adress']
        $sqlquery ="insert into details('$name','$password','$email','$mobile number','$gender','adress')";

        if ($conn->query($sqlquery) === TRUE) {
            echo  "<h1>recived your details<br/></h1>";
        } else {
            echo "error: ".$sql . "<br>" . $conn->error;
        }
        $conn->close();
        ?>
        </body>
        </html>