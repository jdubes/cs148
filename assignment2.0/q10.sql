SELECT DISTINCT fldBuilding, COUNT(*) fldNumStudents FROM tblSections WHERE fldDays LIKE "%F%" GROUP BY fldBuilding ORDER BY fldNumStudents DESC
