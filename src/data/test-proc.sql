
exec dbo.SelectAllPersons

exec dbo.InsertAllData 
	@Lastname = 'Osmanaj', 
	@Firstname = 'Noel', 
	@Birth_Date = '05-02-2003', 
	@EMail = 'osmanaj.noel0@gmail.com', 
	@AHV_Number = '756.2323.2323.22', 
	@Personal_Number = 10,
	@Tel = '0765850007', 
	@Company_Name = 'Insite AG', 
	@Department_Name = 'IT', 
	@Job_Title = 'Computer Scientist', 
	@Job_Description = 'Program cool things'

	--delete from Companies
	--DBCC CHECKIDENT (Companies, reseed, 0)
--
	select * from dbo.Persons
	select * from dbo.Companies
	select * from dbo.Departments

