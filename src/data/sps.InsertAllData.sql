
ALTER PROCEDURE InsertAllData
	@Lastname varchar(255), 
	@Firstname varchar(255), 
	@Birth_Date Date,
	@EMail varchar(255),
	@AHV_Number varchar(16),
	@Personal_Number int,
	@Tel varchar(10),
	@Company_Name varchar(255),
	@Department_Name varchar(255) ,
	@Job_Title varchar(255),
	@Job_Description varchar(255)

AS
BEGIN
	IF NOT EXISTS (select Company_Name from dbo.Companies where Company_Name = @Company_Name)
	BEGIN
		INSERT INTO dbo.Companies 
		select @Company_Name
	END

	IF NOT EXISTS (select Department_Name from dbo.Departments where Department_Name = @Department_Name)
	BEGIN
		INSERT INTO dbo.Departments 
		select @Department_Name
	END

	INSERT INTO dbo.Persons
	select @Lastname, @Firstname, @Birth_Date, @EMail, @AHV_Number, @Personal_Number, @Tel, 
	c.Id, d.Id,
	@Job_Title, @Job_Description
	from dbo.Companies c, dbo.Departments d
	where c.Company_Name = @Company_Name AND d.Department_Name = @Department_Name
END