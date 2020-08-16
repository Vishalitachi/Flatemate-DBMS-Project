<?php

    include_once "db_connect.php";

    $q = intval($_GET['q']);

    $query = "DELETE FROM MEMBER WHERE m_id = $q;";
    $result=mysqli_query($conn,$query);

?>