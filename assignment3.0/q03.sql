SELECT DISTINCT fldCourseName,fldDays,fldStart,fldStop FROM tblCourses JOIN tblSections ON pmkCourseId = fnkCourseId JOIN tblTeachers ON pmkNetId = fnkTeacherNetId WHERE tblTeachers.fldFirstName ="Jackie Lynn" AND tblTeachers.fldLastName ="Horton" ORDER BY fldStart