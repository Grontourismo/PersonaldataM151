
CREATE PROCEDURE DeletePerson
    @Id int
    AS
BEGIN
DELETE Persons WHERE id=@Id
END