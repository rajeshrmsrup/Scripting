<html>
<head>
<style>
#err{color: red;}
h2{
    color: green;
}
#btn{
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    font-size: 20px;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>
<body>  

    <?php
        $nameErr = $courseErr = $emailErr = "";
        $name = $course = $email = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["name"])){
                $nameErr = "* Name is required";
            }
            else{
                $name = test_input($_POST["name"]);
                if(!preg_match("/^[A-Za-z ]+$/", $name)){
                    $nameErr = "* Only letters and white space allowed";
                }
            }
        
            if(test_input($_POST["course"]) == "Default"){
                $courseErr = "* Choose your course from options";
            }
            else{
                $course = test_input($_POST["course"]);
            }

            if(empty($_POST["email"])){
                $emailErr = "* Email is required";
            }
            else{
                $email = test_input($_POST["email"]);
                if(!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $email)){
                    $emailErr = "* Invalid email format";
                }
            }           
        }

        function test_input($data) {
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <h2>PHP Form Validation</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name" value="<?php echo $name;?>" placeholder="Enter your name">
        <span id="err"><?php echo $nameErr;?></span><br><br>

        Course: <select name="course">
            <option selected="" value="Default">-Choose your course-</option>
            <option>MCA</option>
            <option>BCA</option>
            <option>Btech</option>
        </select>
        <span id="err"><?php echo $courseErr;?></span><br><br>

        E-mail: <input type="text" name="email" value="<?php echo $email;?>" placeholder="xyz@gmail.com">
        <span id="err"><?php echo $emailErr;?></span><br><br>

        <input type="submit" name="submit" value="Submit" id="btn">
    </form>

    <?php
        if(isset($_POST['submit'])){  
            if($nameErr == "" && $courseErr == "" && $emailErr == ""){  
                echo "<h3>You have sucessfully registered</h3>";  
                echo "<h2>Your Details:</h2>";  
                echo "Name: ".$name;
                echo "<br>";
                echo "Course: ".$course; 
                echo "<br>";
                echo "Email: ".$email;
            }
            else
                echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";
        } 
    ?>

</body>
</html>