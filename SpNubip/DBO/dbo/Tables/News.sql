CREATE TABLE [dbo].[News] (
    [ID_News]  UNIQUEIDENTIFIER NOT NULL,
    [Title]    VARCHAR (MAX)    NOT NULL,
    [News]     VARCHAR (MAX)    NOT NULL,
    [DateNews] DATE             NOT NULL,
    [Img]      VARCHAR (MAX)    NOT NULL, 
    CONSTRAINT [PK_News] PRIMARY KEY ([ID_News])
);

