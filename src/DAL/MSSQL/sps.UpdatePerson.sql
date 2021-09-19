
ALTER PROCEDURE dbo.UpdatePerson
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

	if NOT EXISTS (select Company_Name from dbo.Companies where Company_Name = @Company_Name)
	BEGIN
		INSERT INTO dbo.Companies VALUES (@Company_Name)
	END

	if NOT EXISTS (select Department_Name from dbo.Departments where Department_Name = @Department_Name)
	BEGIN
		INSERT INTO dbo.Departments VALUES (@Department_Name)
	END

	UPDATE dbo.Persons SET Lastname = @Lastname, 
	Firstname = @Firstname, 
	Birth_Date = @Birth_Date, 
	EMail = @EMail, 
	AHV_Number = @AHV_Number,
	Tel = @Tel,
	Company_fk = (select Id from dbo.Companies where Company_Name = @Company_Name),
	Department_fk = (select Id from dbo.Departments where Department_Name = @Company_Name),
	Job_Title = @Job_Title,
	Job_Description = @Job_Description
	WHERE Personal_Number = @Personal_Number
END
