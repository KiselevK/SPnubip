CREATE TABLE [dbo].[Projects]
(
	[Id_Project] UNIQUEIDENTIFIER NOT NULL PRIMARY KEY, 
    [Title] NVARCHAR(MAX) NOT NULL, 
    [Creator] NVARCHAR(MAX) NOT NULL, 
    [Description] NVARCHAR(MAX) NOT NULL, 
    [Areas_of_application] NVARCHAR(MAX) NOT NULL, 
    [Efficiency] NVARCHAR(MAX) NOT NULL, 
    [View] NVARCHAR(MAX) NOT NULL, 
    [Id_Img_for_projects] UNIQUEIDENTIFIER NOT NULL, 
    [Id_Category] UNIQUEIDENTIFIER NOT NULL, 
    [Pulpit] NVARCHAR(MAX) NOT NULL, 
    CONSTRAINT [FK_Projects_Imgs_for_projects] FOREIGN KEY (Id_Img_for_projects) REFERENCES Imgs_for_projects(Id_Img_for_projects), 
    CONSTRAINT [FK_Projects_Category] FOREIGN KEY (Id_Category) REFERENCES Category(Id_Category)
)


