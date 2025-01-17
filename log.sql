USE [cso1]
GO

/****** Object:  Table [dbo].[cso1_rate]    Script Date: 7/3/2024 11:49:33 AM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[cso1_rate](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[rate] [int] NOT NULL,
	[transactionId] [varchar](50) NOT NULL,
	[storeOutlesId] [varchar](50) NULL,
	[terminalId] [varchar](50) NULL,
	[inputDate] [datetime] NOT NULL,
 CONSTRAINT [PK_cso1_rate] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO

