<?php

/* 
 * q04 - Display all course data for our class (1)
 */


        

include "top.php";


//now print out each record
$query = 'SELECT fnkSectionId, fldFirstName, fldLastName FROM tblStudents JOIN tblEnrolls ON pmkStudentId = fnkStudentId WHERE fnkCourseId = 392';

    
    $info2 = $thisDatabaseReader->select($query, "", 1, 0, 0, 0, false, false);
    $columns = 3;
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
       