

<?php

 function getId($connection, $position){

    $select = "select employeeID from employee WHERE employeeID like '$position%'";
    $query = mysqli_query($connection, $select);

    $employeeIDs = [];
    while ($data = mysqli_fetch_array($query)) {
        $employeeIDs[] = $data[0];
    }

    $maxID = 0;
    foreach ($employeeIDs as $id) {
        $numPart = (int) substr($id, strlen($position));
        if ($numPart > $maxID) {
            $maxID = $numPart;
        }
    }

     $foundGap = false;
     for ($i = 1; $i <= $maxID; $i++) {
         $regno = $position . str_pad($i, 2, '0', STR_PAD_LEFT);
         if (!in_array($regno, $employeeIDs)) {
             $foundGap = true;
             break;
         }
     }

      if (!$foundGap) 
      {
        $newID = $maxID + 1;
      } else {
        $newID = $i;
      }

      $regno = $position . str_pad($newID, 2, '0', STR_PAD_LEFT);

      return $regno;
 }

 ?>