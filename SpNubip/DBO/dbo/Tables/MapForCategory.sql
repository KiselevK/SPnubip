CREATE TABLE [dbo].[MapForCategory] (
    [ID_MapForCAtegory] UNIQUEIDENTIFIER NOT NULL,
    [ID_News]           UNIQUEIDENTIFIER NOT NULL,
    [ID_Category]       UNIQUEIDENTIFIER NOT NULL, 
    CONSTRAINT [PK_MapForCategory] PRIMARY KEY ([ID_MapForCAtegory])
);

