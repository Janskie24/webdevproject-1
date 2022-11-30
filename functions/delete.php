<?php
    include_once("../dbConnection/mysqlconfig_connection.php");

    $id = $_GET['id'];

    mysqli_query($dbc, "DELETE FROM TBLSUBJECTS WHERE SUBJECT_id = '$id' ");

    header("Location: ../index.php");
?>
