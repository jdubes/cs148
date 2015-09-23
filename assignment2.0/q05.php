<?php

/* 
 *q05 - Display the first and last name of teachers whose Net ID begins with the letter 'r' and ends in the letter "o". (4)
 */


        

include "top.php";


//now print out each record
    $query = 'SELECT fldFirstName, fldLastName FROM tblTeachers WHERE pmkNetId LIKE "r%o"';
 
    $info2 = $thisDatabaseReader->select($query, "", 1, 0, 2, 0, false, false);
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
       