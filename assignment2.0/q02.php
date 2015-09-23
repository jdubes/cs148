<?php

/* 
 * q02 - Display just the department for courses named "Introduction" (12)
 */


        

include "top.php";


//now print out each record
    $query = 'SELECT fldDepartment FROM tblCourses WHERE fldCourseName LIKE "Introduction%"';
    
   
    $info2 = $thisDatabaseReader->select($query, "", 1, 0, 2, 0, false, false);
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
       