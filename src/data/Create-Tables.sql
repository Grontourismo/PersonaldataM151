
CREATE TABLE Companies (
	Id int identity(1,1),
	Company_Name varchar(255),

	PRIMARY KEY (Id)
)

CREATE TABLE Departments (
	Id int identity(1,1),
	Department_Name varchar(255),

	PRIMARY KEY (Id)
)
--df
CREATE TABLE Persons (
	Id int identity(1,1),
	Lastname varchar(255),
	Firstname varchar(255),
	Birth_Date Date,
	EMail varchar(255),
	AHV_Number varchar(16),
	Personal_Number int unique,
	Tel varchar(10),
	Company_fk int,
	Department_fk int,
	Job_Title varchar(255),
	Job_Description varchar(255),

	PRIMARY KEY (Id),
	FOREIGN KEY (Company_fk) REFERENCES Companies(Id),
	FOREIGN KEY (Department_fk) REFERENCES Departments(Id)
)

