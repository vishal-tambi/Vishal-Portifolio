        <?php
            $name = $_POST['name'];
            $subject = $_POST['subject'];
            // $lastName = $_POST['lastName'];
            // $gender = $_POST['gender'];
            $email = $_POST['email'];
            // $password = $_POST['password'];
            $message = $_POST['message'];

            // Database connection
            $conn = new mysqli('localhost','root','','connect');
            if($conn->connect_error){
                echo "$conn->connect_error";
                die("Connection Failed : ". $conn->connect_error);
            } else {
                $stmt = $conn->prepare("insert into connect_table(name, email, subject, message) values(?, ?, ?, ?)");
                $stmt->bind_param("ssss", $name, $email, $subject, $message);
                $execval = $stmt->execute();
                echo $execval;
                echo "Your message reached successfully...";
                $stmt->close();
                $conn->close();
            }
                ?>