<?php

/* 
* q10 - Repeat the above query for Friday (44) - Compare the Kalkin building for Wednesday and Friday. How would you verify the results and explain why?
 */


        

include "top.php";


//now print out each record
    $query = 'SELECT DISTINCT fldBuilding, COUNT(*) fldNumStudents FROM tblSections WHERE fldDays LIKE "%F%" GROUP BY fldBuilding ORDER BY fldNumStudents DESC';

    $info2 = $thisDatabaseReader->select($query, "", 1, 1, 2, 0, false, false);
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
       