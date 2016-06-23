USE [export1]
GO

/****** Object:  StoredProcedure [dbo].[sp_ProductWithCategory]    Script Date: 4/19/2016 1:50:04 PM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

create procedure [dbo].[sp_ProductWithCategory]

as

SELECT pr.ID, Name, Description,ProductMade,CostOfProduct,CategoryName, CategoryID FROM Category ct right join product pr on pr.CategoryID=ct.ID

GO


