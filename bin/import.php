#!/usr/bin/env php
<?php

    $user = 'remarkbansal';  //username
    $pass = 'zrrJ8zNEdpuTwuty';  //password
    $dbname='autobot';
    $servername = 'localhost';

    print("Connecting TO DB..\n");
    // Create connection
    $handler = new mysqli($servername, $user, $pass, $dbname);


    print("Loading csv file..\n");

    //$data = "users.csv";
    $data = "vehicles.csv";

    print("Opening csv file\n");
    $file = fopen($data,"r") or die("Unable to open file");

    //counter
    $count = 1;

    while($row = fgetcsv($file,2000,',')) {



        $sql = "INSERT INTO vehicles (reg_no, chassis_no, engine_no, fuel_type, maker_class, maker_model, reg_date, reg_auth, aadhaar)
            VALUES('$row[0]', '$row[1]', '$row[2]', '$row[3]', '$row[4]', '$row[5]', '$row[6]', '$row[7]', '$row[8]')";

        //$sql = "INSERT INTO users (id, aadhaar, name, gender, dob, email, address, license_no, reg_no)
          //          VALUES('$row[0]', '$row[1]', '$row[2]', '$row[3]', '$row[4]', '$row[5]', '$row[6]', '$row[7]', '$row[8]')";

        if ($handler->query($sql) == TRUE) {
            echo "New record created successfully ". $count."\n";
        } else {
            echo "Error: " . $sql . "\n" . $handler->error;
        }

        $count++;

    }
    fclose( $file );
    print("Complete, csv file closed\n");
?>