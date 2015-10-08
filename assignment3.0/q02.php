<?php

/* 
 * q02 - Display the distinct days of the week and times (sorted by times) 
 * during which Robert Snapp (where clause should not contain his netid but his 
 * full name) teaches classes. (3)
 */


        

include "top.php";


//now print out each record
    $query = 'SELECT DISTINCT fldDays,fldStart,fldStop FROM tblSections JOIN tblTeachers ON pmkNetId = fnkTeacherNetId WHERE tblTeachers.fldFirstName ="Robert Raymond" AND tblTeachers.fldLastName ="Snapp" ORDER BY fldStart';
    
   
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
       