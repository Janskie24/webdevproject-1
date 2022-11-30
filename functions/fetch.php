<?php
    $query = "SELECT * FROM TBLSUBJECTS LEFT JOIN TBLSYLLABUS ON TBLSYLLABUS.SUBJECT_ID = TBLSUBJECTS.SUBJECT_ID";
    $result = mysqli_query($dbc, $query);
?>