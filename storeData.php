<?php
error_reporting(E_ALL);

require 'connection.php';
$connect = Connect();

try {
    if (isset($_POST['save_Creds'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];


        $query = "INSERT INTO credentials(id, username, password) 
                  VALUES ( :user, :pass)";

        $query_run = $connect->prepare($query);

        $data = [
            ':user' => $user,
            ':pass' => $pass,
        ];

        $query_execute = $query_run->execute($data);


        // <!-- <script>
        //             Swal.fire({
        //                 icon: 'error',
        //                 title: 'Invalid',
        //                 text: 'Input Fields Cant Be Empty'
        //             })
        //         </script> -->

        //   echo '<script type="text/javascript">';
        //   echo 'alert ("Your data has been save successfully")';
        //   echo '</script>';

        //   echo "New record created successfully";

        if ($connection->query($query) === TRUE) {
            echo "data inserted";
        } else {
            echo "failed";
        }



        header('Location: signup.php');
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
