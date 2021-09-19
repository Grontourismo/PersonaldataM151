CREATE PROCEDURE `UpdatePerson`(
    IN `p_Id` INT,
    IN `p_Firstname` VARCHAR(50),
    IN `p_Lastname` VARCHAR(50),
    IN `p_Birth_Date` DATE,
    IN `p_Email` VARCHAR(50),
    IN `p_AHV` VARCHAR(50),
    IN `p_Tel` VARCHAR(50),
    IN `p_Company_Name` VARCHAR(50),
    IN `p_Department_Name` VARCHAR(50),
    IN `p_Job_Title` VARCHAR(50),
    IN `p_Job_Description` VARCHAR(50)
)
    LANGUAGE SQL
    NOT DETERMINISTIC
    CONTAINS SQL
    SQL SECURITY DEFINER
    COMMENT ''
BEGIN

    if NOT EXISTS (select Company_Name from Companies where Company_Name = p_Company_Name)
    then INSERT INTO Companies VALUES (p_Company_Name);
    END if;

    if not exists (select Department_Name from Departments where Department_Name = p_Department_Name)
    then INSERT INTO Departments VALUES (p_Department_Name);
    end if;

    UPDATE Persons SET Lastname = p_Lastname,
                       Firstname = p_Firstname,
                       Birth_Date = p_Birth_Date,
                       EMail = p_Email,
                       AHV_Number = p_AHV,
                       Tel = p_Tel,
                       Company_fk = (select Id from Companies where Company_Name = p_Company_Name),
                       Department_fk = (select Id from Departments where Department_Name = p_Company_Name),
                       Job_Title = p_Job_Title,
                       Job_Description = p_Job_Description
    WHERE Id = p_Id;
END