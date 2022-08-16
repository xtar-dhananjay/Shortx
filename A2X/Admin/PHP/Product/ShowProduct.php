<?php

    include '../Config.php';

    $SelectQuery = " SELECT * FROM product ORDER BY Pro_ID DESC ";
    $Statement = $Con -> prepare($SelectQuery);
    $Statement -> execute();

    $OutPut = [];

    if ($Statement -> rowCount() > 0) {

        while ($Data = $Statement -> fetch(PDO::FETCH_ASSOC)) {
            $OutPut[]= $Data;  
        }

    }else{
        $OutPut['Empty'] = ['Empty'];
    }

    echo json_encode($OutPut);

?>