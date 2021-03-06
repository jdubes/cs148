<?php

/* 
 *q06 - Display every course name with the word "data" in it that is not in the CS department (7)
 */


        

include "top.php";


//now print out each record
    $query = 'SELECT fldCourseName FROM tblCourses WHERE NOT (fldDepartment = "CS") AND fldCourseName LIKE "%data%"';
    $info2 = $thisDatabaseReader->select($query, "", 1, 2, 4, 0, false, false);
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

include "footer.php";
?>
       