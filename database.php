<?php
    $servername = "localhost";
    $username = "root";

    $conn = new mysqli($servername, $username,"",'bank');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
        echo "Connected successfully";
        $sql = "INSERT INTO users(name, email, balance)
        VALUES ('Vinay', 'Vinay@gmail.com','3200')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
        
        $sql = "INSERT INTO users(name, email, balance)
        VALUES ('Sasi', 'Sasi@gmail.com','11900')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
        
        $sql = "INSERT INTO users(name, email, balance)
        VALUES ('Sowmya', 'Sowmya@gmail.com','24800')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
        
        $sql = "INSERT INTO users(name, email, balance)
        VALUES 'Vardhini', 'Vardhini@gmail.com','45000')';
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
        
        $sql = "INSERT INTO users(name, email, balance)
        VALUES ('Neha', 'Neha@gmail.com','55750')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
        
        $sql = "INSERT INTO users(name, email, balance)
        VALUES ('Raghava', 'Raghava@gmail.com','67500')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
        
        $sql = "INSERT INTO users(name, email, balance)
        VALUES ('Raj', 'Raj@example.com','67500')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
        
        $sql = "INSERT INTO users(name, email, balance)
        VALUES ('Veda', 'Veda@gmail.com','93000')";       
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


?>
