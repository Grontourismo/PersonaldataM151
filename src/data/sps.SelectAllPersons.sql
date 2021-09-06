
ALTER PROCEDURE SelectAllPersons
AS
BEGIN
	select p.Id, Lastname, Firstname, Birth_Date, EMail, AHV_Number, Personal_Number, Tel, c.Company_Name, d.Department_Name, Job_Title, Job_Description from Persons p
	inner join Companies c on c.Id = p.Company_fk
	inner join Departments d on d.Id = p.Department_fk
END
--