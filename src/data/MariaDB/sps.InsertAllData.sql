CREATE DEFINER=`root`@`localhost` PROCEDURE `sps.InsertAllData`(
	IN `Lastname_var` VARCHAR(255),
	IN `Firstname_var` VARCHAR(255),
	IN `Birth_Date_var` DATE,
	IN `EMail_var` VARCHAR(255),
	IN `AHV_Number_var` VARCHAR(16),
	IN `Personal_Number_var` INT,
	IN `Tel_var` VARCHAR(10),
	IN `Company_Name_var` VARCHAR(255),
	IN `Department_Name_var` VARCHAR(255),
	IN `Job_Title_var` VARCHAR(255),
	IN `Job_Description_var` VARCHAR(255)









)
LANGUAGE SQL
NOT DETERMINISTIC
CONTAINS SQL
SQL SECURITY DEFINER
COMMENT ''
BEGIN

	if not exists (select 'Company_Name' from companies where Company_Name = Company_Name_var)
        then INSERT INTO companies (Company_Name) VALUES (Company_Name_var);
end if;

    if not exists (select 'Department_Name' from departments where Department_Name = Department_Name_var)
        then INSERT INTO departments (Department_Name) VALUES (Department_Name_var);
end if;

    if not exists (select 'Personal_Number' from persons where Personal_Number = Personal_Number_var)
        then INSERT INTO persons 
        (Lastname, Firstname, Birth_Date, Email, AHV_Number, Personal_Number, Tel, Company_fk, Department_fk, Job_Title, Job_Description)
select Lastname_var, Firstname_var, Birth_Date_var, EMail_var, AHV_Number_var, Personal_Number_var, Tel_var,
       c.Id, d.Id,
       Job_Title_var, Job_Description_var
from companies c, departments d
where c.Company_Name = Company_Name_var AND d.Department_Name = Department_Name_var;
end if;

END