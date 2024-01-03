<?php 

 foreach ($std as $row) :
   echo $row["hs"];
   echo "<br>";
   $hs = $row["hs"];
   $hss = $row["hss"];

endforeach;

   $values = explode(",", $hs);
   $values2 = explode(",", $hss);

   // Initialize variables
   $hsnm = null;
   $hsmrk = null;
   $hsper = null;
   $hssyl = null;
   $hssnm = null;
   $hssmrk = null;
   $hssper = null;
   $hsssyl = null;
   
   // Loop through the exploded values
   foreach ($values as $value) {
       // Split each value based on ":"
       
       $pair = explode(":", $value);
   
       // Check the key and assign the value to the corresponding variable
       if ($pair[0] == 'hs_name') {
           $hsnm = $pair[1];
       } elseif ($pair[0] == 'hs_mark') {
           $hsmrk = $pair[1];
       }elseif ($pair[0] == 'hs_percentage') {
        $hsper = $pair[1];
    }elseif ($pair[0] == 'hs_sylabus') {
        $hssyl = $pair[1];
    }
   }
 
 

 foreach ($values2 as $value) {
    // Split each value based on ":"
    
    $pair = explode(":", $value);

    // Check the key and assign the value to the corresponding variable
    if ($pair[0] == 'hss_name') {
        $hssnm = $pair[1];
    } elseif ($pair[0] == 'hss_mark') {
        $hssmrk = $pair[1];
    }elseif ($pair[0] == 'hss_percentage') {
     $hssper = $pair[1];
 }elseif ($pair[0] == 'hss_sylabus') {
     $hsssyl = $pair[1];
 }
}




?>

<table>
    <tr>
        <th>hs_name</th>
        <th>hs_mark</th>
        <th>hs_percentage</th>
        <th>hs_sylabus</th>
        <th>hss_name</th>
        <th>hss_mark</th>
        <th>hss_percentage</th>
        <th>hss_sylabus</th>
    </tr>
    <tr>
        <td><?= $hsnm  ?></td>
        <td><?= $hsmrk  ?></td>
        <td><?= $hsper  ?></td>
        <td><?=$hssyl  ?></td>
        <td><?= $hssnm  ?></td>
        <td><?= $hssmrk  ?></td>
        <td><?= $hssper  ?></td>
        <td><?=$hsssyl  ?></td>
    </tr>
</table>