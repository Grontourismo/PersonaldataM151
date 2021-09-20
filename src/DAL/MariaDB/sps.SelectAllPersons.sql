CREATE PROCEDURE `SelectALLPersons`()
    LANGUAGE SQL
    NOT DETERMINISTIC
CONTAINS SQL
SQL SECURITY DEFINER
COMMENT ''
BEGIN
    SELECT p.Id, p.Lastname, p.Firstname, p.Birth_Date, p.EMail, p.AHV_Number, p.Personal_Number, p.Tel, c.Company_Name, d.Department_Name, p.Job_Title, p.Job_Description from Persons p
    inner join Companies c on c.Id = p.Company_fk
    inner join Departments d on d.Id = p.Department_fk;
END