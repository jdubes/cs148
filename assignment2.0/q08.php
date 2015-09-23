<?php

/* 
* q08 - Display each building name and the number of sections it has (59)
 */


        

include "top.php";


//now print out each record
    $query = 'SELECT DISTINCT fldBuilding, COUNT(*) fldSection FROM tblSections GROUP BY fldBuilding';
    
    $info2 = $thisDatabaseReader->select($query, "", 0, 0, 0, 0, false, false);
    $columns = 2;
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
       