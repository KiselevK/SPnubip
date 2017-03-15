CREATE TABLE [dbo].[Imgs_for_projects]
(
	[Id_Img_for_projects] UNIQUEIDENTIFIER NOT NULL PRIMARY KEY, 
    [Id_Img] UNIQUEIDENTIFIER NOT NULL, 
    CONSTRAINT [FK_Imgs_for_projects_Imgs] FOREIGN KEY (Id_Img) REFERENCES Imgs(Id_Img) 
)
