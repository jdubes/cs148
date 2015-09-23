<?php

/* 
 * q01 - Display just the NetID of all teachers. (1010)
 */


        

include "top.php";


//now print out each record
    $query = 'SELECT pmkNetId FROM tblTeachers';
    $info2 = $thisDatabaseReader->select($query, "", 0, 0, 0, 0, false, false);
    $columns = 1;
    $highlight = 0; // used to highlight alternate rows
    
   
     print ' ' . count($info2) . ' total records';
  
    
    print "<table> ";
    
    foreach ($info2 as $rec) {
        $highlight++;
        if ($highlight % 2 != 0) {
            $style = ' odd ';
        } else {
            $style = ' even ';
        }
        print '<tr class="' . $style . '">';
        for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $rec[$i] . '</td>';
        }
        print '</tr>';
    }

    // all done
    print '</table>';
echo $columns;
include "footer.php";
?>
       