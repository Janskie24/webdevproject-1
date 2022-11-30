<?php
    $query = "SELECT * FROM TBLSUBJECTS LEFT JOIN TBLSYLLABUS ON TBLSYLLABUS.Subject_id = TBLSUBJECTS.SUBJECT_ID";
    $result = mysqli_query($dbc, $query);
?>