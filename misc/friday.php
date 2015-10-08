<?php

/* 
 *Create a php page named friday.php that performs a query that selects 
 * all columns from the students, sorted by last name then first name. 
 * To make it more interesting, without using a where clause return only 
 * ten records starting with the one thousandth record, you can google 
 * limit if you are not sure how to do it.
 */
 
include "top.php";


//now print out each record
    $query = 'SELECT `pmkStudentId`, `fldFirstName`, `fldLastName`, `fldStreetAddress`, `fldCity`, `fldState`, `fldZip`, `fldGender` FROM `tblStudents` ORDER BY `fldLastName`,`fldFirstName` LIMIT 10 OFFSET 999';


    $info2 = $thisDatabaseReader->select($query, "", 0, 1, 0, 0, false, false);
    $columns = 8;
    $highlight = 0; // used to highlight alternate rows
    
   
     print ' ' . count($info2) . ' total records';
  
    print "<table> ";
    print "<tr><th>Student ID</th><th>First Name</th><th>Last Name</th><th>Address</th><th>City</th><th>State</th><th>Zipcode</th><th>Gender</th></tr>";
    
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
       