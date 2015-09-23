<?php

/* 
q03 - Display all section data for classes that start at 1:10PM in Kalkin (10)
 */


        

include "top.php";


//now print out each record
    $query = 'SELECT * FROM tblSections WHERE fldStart = "13:10:00" AND fldBuilding = "KALKIN"';
    $info2 = $thisDatabaseReader->select($query, "", 1, 1, 4, 0, false, false);
    $columns = 12;
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

include "footer.php";
?>
       