USE [cso1]
GO
/****** Object:  Table [dbo].[cso1_promotion]    Script Date: 21/11/2022 18:56:55 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_promotion](
	[id] [varchar](50) NOT NULL,
	[typeOfPromotion] [int] NOT NULL,
	[storeOutlesId] [varchar](50) NULL,
	[code] [varchar](50) NULL,
	[description] [varchar](250) NULL,
	[startDate] [int] NULL,
	[endDate] [int] NULL,
	[discountPercent] [float] NULL,
	[discountAmount] [float] NULL,
	[status] [int] NOT NULL,
	[presence] [int] NOT NULL,
	[Mon] [int] NULL,
	[Tue] [int] NULL,
	[Wed] [int] NULL,
	[Thur] [int] NULL,
	[Fri] [int] NULL,
	[Sat] [int] NULL,
	[Sun] [int] NULL,
	[inputDate] [int] NULL,
	[inputBy] [int] NULL,
	[updateDate] [int] NULL,
	[updateBy] [int] NULL,
 CONSTRAINT [PK_cso1_promotion] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[cso1_promotion] ADD  CONSTRAINT [DF_cso1_promotion_typeOfPromotion]  DEFAULT ((0)) FOR [typeOfPromotion]
GO
ALTER TABLE [dbo].[cso1_promotion] ADD  CONSTRAINT [DF_cso1_promotion_status]  DEFAULT ((1)) FOR [status]
GO
ALTER TABLE [dbo].[cso1_promotion] ADD  CONSTRAINT [DF_cso1_promotion_presence]  DEFAULT ((0)) FOR [presence]
GO
