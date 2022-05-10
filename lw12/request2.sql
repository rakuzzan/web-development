SELECT
    *
FROM 
    student
    INNER JOIN class ON student.class_id = class.id
    INNER JOIN faculty ON faculty.id = class.faculty_id
WHERE
    faculty.name = 'ФИиВТ';