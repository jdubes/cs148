<?php

/* 
 * q01 - Display all the distinct course names (sorted of course) for 
 * courses which had a student receive a grade of 100. (13)
 */


        

include "top.php";


//now print out each record
    
$query = 'SELECT DISTINCT fldCourseName FROM tblCourses JOIN tblEnrolls ON pmkCourseId = fnkCourseId WHERE fldGrade = 100 ORDER BY fldCourseName';

    
    $info2 = $thisDatabaseReader->select($query, "", 1, 1, 0, 0, false, false);
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
       