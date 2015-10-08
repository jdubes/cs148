<?php

/* 
 *q06 - Display the first name, phone number, and salary of all teachers 
 * who earn less than average salary (514)
 */


        

include "top.php";


//now print out each record
    $query = 'SELECT fldFirstName, fldPhone, fldSalary FROM tblTeachers WHERE fldSalary<(SELECT AVG(fldSalary) FROM tblTeachers)';
    $info2 = $thisDatabaseReader->select($query, "", 1, 0, 0, 1, false, false);
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
       