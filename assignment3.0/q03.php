<?php

/* 
q03  - Display the distinct course names, days of the week and times
 *  (sorted by times) of classes taught by Jackie Horton. (4)
 */


/*SELECT DISTINCT fldCourseName, fldStart, fldStop, fldDays FROM tblSections, tblTeachers, tblCourses  WHERE fnkTeacherNetId = "jlhorton" ORDER BY fldStart;
*/

include "top.php";


//now print out each record
    $query = 'SELECT DISTINCT fldCourseName,fldDays,fldStart,fldStop FROM tblCourses JOIN tblSections ON pmkCourseId = fnkCourseId JOIN tblTeachers ON pmkNetId = fnkTeacherNetId WHERE tblTeachers.fldFirstName ="Jackie Lynn" AND tblTeachers.fldLastName ="Horton" ORDER BY fldStart';
    $info2 = $thisDatabaseReader->select($query, "", 1, 2, 4, 0, false, false);
    $columns = 4;
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
       