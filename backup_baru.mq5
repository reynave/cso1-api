
CREATE TABLE [dbo].[cso1_account](
	[id] [int] NOT NULL,
	[name] [varchar](max) NULL,
	[value] [text] NULL,
	[updateDate] [int] NULL,
	[updateBy] [int] NULL,
 CONSTRAINT [PK_cso1_account] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_greeting]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_greeting](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[message] [varchar](250) NULL,
	[publishDate] [date] NULL,
	[status] [int] NOT NULL,
	[presence] [int] NOT NULL,
	[inputBy] [int] NULL,
	[inputDate] [int] NULL,
	[updateDate] [int] NULL,
	[updateBy] [int] NULL,
 CONSTRAINT [PK_cso1_greeting] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_item]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_item](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[barcode] [varchar](50) NULL,
	[description] [varchar](250) NULL,
	[shortDesc] [varchar](250) NULL,
	[price1] [float] NULL,
	[price2] [float] NULL,
	[price3] [float] NULL,
	[price4] [float] NULL,
	[price5] [float] NULL,
	[price6] [float] NULL,
	[price7] [float] NULL,
	[price8] [float] NULL,
	[price9] [float] NULL,
	[price10] [float] NULL,
	[itemTypeId] [varchar](50) NULL,
	[itemUomId] [varchar](50) NULL,
	[itemCategoryId] [varchar](50) NULL,
	[itemDiscountId] [varchar](50) NULL,
	[itemTaxId] [varchar](50) NULL,
	[presence] [int] NOT NULL,
	[status] [int] NOT NULL,
	[inputBy] [int] NULL,
	[inputDate] [int] NULL,
	[updateBy] [int] NULL,
	[updateDate] [int] NULL,
 CONSTRAINT [PK_cso1_item] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_itemCategory]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_itemCategory](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[id_parent] [int] NULL,
	[name] [varchar](255) NULL,
	[status] [int] NOT NULL,
	[presence] [int] NOT NULL,
	[inputBy] [int] NULL,
	[inputDate] [int] NULL,
	[updateBy] [int] NULL,
	[updateDate] [int] NULL,
 CONSTRAINT [PK__cso1_ite__3213E83F7D1AE442] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_itemDepartement]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_itemDepartement](
	[id] [varchar](50) NOT NULL,
	[description] [varchar](255) NOT NULL,
	[status] [int] NOT NULL,
	[presence] [int] NOT NULL,
	[inputBy] [int] NULL,
	[inputDate] [int] NULL,
	[updateBy] [int] NULL,
	[updateDate] [int] NULL,
 CONSTRAINT [PK__cso1_ite__3213E83F35499D85] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_itemDiscount]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_itemDiscount](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[name] [varchar](255) NOT NULL,
	[description] [varchar](255) NOT NULL,
	[status] [int] NOT NULL,
	[presence] [int] NOT NULL,
	[inputBy] [int] NULL,
	[inputDate] [int] NULL,
	[updateBy] [int] NULL,
	[updateDate] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_itemTax]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_itemTax](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[description] [varchar](255) NOT NULL,
	[status] [int] NOT NULL,
	[presence] [int] NOT NULL,
	[inputBy] [int] NULL,
	[inputDate] [int] NULL,
	[updateBy] [int] NULL,
	[updateDate] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_itemType]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_itemType](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[description] [varchar](255) NOT NULL,
	[status] [int] NOT NULL,
	[presence] [int] NOT NULL,
	[inputBy] [int] NULL,
	[inputDate] [int] NULL,
	[updateBy] [int] NULL,
	[updateDate] [int] NULL,
 CONSTRAINT [PK__cso1_ite__3213E83F91A75028] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_itemUom]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_itemUom](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[name] [varchar](255) NULL,
	[description] [varchar](255) NULL,
	[status] [int] NOT NULL,
	[presence] [int] NOT NULL,
	[inputBy] [int] NULL,
	[inputDate] [int] NULL,
	[updateBy] [int] NULL,
	[updateDate] [int] NULL,
 CONSTRAINT [PK__cso1_ite__3213E83FF3C82559] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_member]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_member](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[memberTypeId] [int] NULL,
	[firstName] [varchar](50) NULL,
	[lastName] [varchar](50) NULL,
	[sex] [bit] NULL,
	[phone] [varchar](50) NOT NULL,
	[email] [varchar](50) NULL,
	[birthdate] [date] NULL,
	[presence] [int] NOT NULL,
	[status] [int] NOT NULL,
	[inputDate] [int] NULL,
	[inputBy] [int] NULL,
	[updateDate] [int] NULL,
	[updateBy] [int] NULL,
 CONSTRAINT [PK_cso1_member] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_paymentType]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_paymentType](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[name] [varchar](50) NULL,
	[status] [int] NOT NULL,
	[presence] [int] NOT NULL,
	[inputBy] [int] NULL,
	[inputDate] [int] NULL,
	[updateBy] [int] NULL,
	[updateDate] [int] NULL,
 CONSTRAINT [PK_cso1_paymentType] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_promotion]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_promotion](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[typeOfPromotion] [int] NOT NULL,
	[storeOutlesId] [int] NULL,
	[code] [varchar](50) NULL,
	[description] [varchar](250) NULL,
	[startDate] [date] NULL,
	[endDate] [date] NULL,
	[discountPercent] [float] NULL,
	[discountAmount] [float] NULL,
	[status] [int] NOT NULL,
	[presence] [int] NOT NULL,
	[inputDate] [int] NULL,
	[inputBy] [int] NULL,
	[updateDate] [int] NULL,
	[updateBy] [int] NULL,
 CONSTRAINT [PK_cso1_promotion] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_promotionFree]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_promotionFree](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[promotionId] [int] NULL,
	[itemId] [int] NULL,
	[qty] [int] NOT NULL,
	[freeItemId] [int] NULL,
	[freeQty] [int] NULL,
	[applyMultiply] [bit] NOT NULL,
	[scanFree] [bit] NOT NULL,
	[printOnBill] [bit] NOT NULL,
	[status] [int] NULL,
	[presence] [int] NOT NULL,
	[inputDate] [int] NULL,
	[inputBy] [int] NULL,
	[updateBy] [int] NULL,
	[updateDate] [int] NULL,
 CONSTRAINT [PK_cso1_promotionFreeItem] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_promotionItem]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_promotionItem](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[itemId] [varchar](50) NULL,
	[promotionId] [int] NULL,
	[qtyFrom] [int] NULL,
	[qtyTo] [int] NULL,
	[discountPrice] [float] NULL,
	[disc1] [float] NULL,
	[disc2] [float] NULL,
	[disc3] [float] NULL,
	[discountFinal] [float] NULL,
	[presence] [int] NOT NULL,
	[status] [int] NOT NULL,
	[inputDate] [int] NULL,
	[inputBy] [int] NULL,
	[updateDate] [int] NULL,
	[updateBy] [int] NULL,
 CONSTRAINT [PK_cso1_promotionItem_1] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_storeBranches]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_storeBranches](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[name] [varchar](50) NULL,
	[description] [varchar](50) NULL,
	[storeBrandsId] [int] NULL,
	[status] [int] NOT NULL,
	[presence] [int] NOT NULL,
	[inputBy] [int] NULL,
	[inputDate] [int] NULL,
	[updateBy] [int] NULL,
	[updateDate] [int] NULL,
 CONSTRAINT [PK__cso1_sto__3213E83F53371D76] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_storeBrands]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_storeBrands](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[name] [varchar](50) NULL,
	[description] [varchar](255) NULL,
	[status] [int] NOT NULL,
	[presence] [int] NOT NULL,
	[inputBy] [int] NULL,
	[inputDate] [int] NULL,
	[updateBy] [int] NULL,
	[updateDate] [int] NULL,
 CONSTRAINT [PK__cso1_sto__3213E83F4C5C4433] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_storeOutles]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_storeOutles](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[description] [varchar](255) NULL,
	[storeBranchesId] [int] NULL,
	[status] [int] NOT NULL,
	[presence] [int] NOT NULL,
	[inputBy] [int] NULL,
	[inputDate] [int] NULL,
	[updateBy] [int] NULL,
	[updateDate] [int] NULL,
 CONSTRAINT [PK__cso1_sto__3213E83FFBC19C06] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_storeOutlesPaymentType]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_storeOutlesPaymentType](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[paymentTypeId] [int] NULL,
	[storeOutlesId] [int] NOT NULL,
	[status] [int] NOT NULL,
	[presence] [int] NOT NULL,
	[inputDate] [int] NULL,
	[inputBy] [int] NULL,
	[updateDate] [int] NULL,
	[updateBy] [int] NULL,
 CONSTRAINT [PK_cso1_storeOutlesPaymentType] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_syncLog]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_syncLog](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[fileName] [varchar](250) NULL,
	[fileSize] [int] NULL,
	[status] [int] NOT NULL,
	[presence] [int] NOT NULL,
	[inputDate] [int] NULL,
 CONSTRAINT [PK_cso1_syncLog] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_taxCode]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_taxCode](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[taxCode] [varchar](50) NULL,
	[taxType] [int] NULL,
	[percentage] [float] NULL,
	[status] [int] NULL,
	[presence] [int] NULL,
	[inputDate] [int] NULL,
	[inputBy] [int] NULL,
	[updateDate] [int] NULL,
	[updateBy] [int] NULL,
 CONSTRAINT [PK_cso1_taxCode] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_terminal]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_terminal](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[storeOutlesId] [int] NULL,
	[keyLisence] [varchar](50) NULL,
	[token] [varchar](250) NULL,
	[status] [int] NOT NULL,
	[presence] [int] NOT NULL,
	[inputBy] [int] NULL,
	[inputDate] [int] NULL,
	[updateDate] [int] NULL,
	[updateBy] [int] NULL,
 CONSTRAINT [PK_cso1_terminal] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_transaction]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_transaction](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[struk] [varchar](50) NULL,
	[memberId] [int] NULL,
	[storeOutlesId] [int] NULL,
	[terminalId] [int] NULL,
	[total] [float] NULL,
	[paymentType] [int] NULL,
	[locked] [bit] NOT NULL,
	[presence] [int] NOT NULL,
	[inputDate] [int] NULL,
	[updateDate] [int] NULL,
 CONSTRAINT [PK_cso1_transaction] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_transactionDetail]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_transactionDetail](
	[id] [int] NOT NULL,
	[transactionId] [int] NOT NULL,
	[itemId] [int] NULL,
	[price] [float] NOT NULL,
	[discount] [float] NOT NULL,
	[qty] [int] NOT NULL,
	[unitPrice] [float] NOT NULL,
	[promotionId] [int] NULL,
	[presence] [int] NOT NULL,
	[inputBy] [int] NULL,
	[inputDate] [int] NULL,
	[updateDate] [int] NULL,
	[updateBy] [int] NULL,
 CONSTRAINT [PK_cso1_transactionDetail] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_transactionPayment]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_transactionPayment](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[transactionId] [int] NOT NULL,
	[paymentTypeId] [int] NULL,
	[amount] [float] NULL,
	[rounding] [float] NULL,
	[presence] [int] NOT NULL,
	[inputDate] [int] NULL,
	[updateDate] [int] NULL,
 CONSTRAINT [PK_cso1_transactionPayment] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_user]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_user](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[name] [varchar](250) NULL,
	[userAccessId] [int] NULL,
	[email] [varchar](250) NULL,
	[password] [varchar](50) NULL,
	[presence] [int] NOT NULL,
	[status] [int] NOT NULL,
	[inputBy] [int] NULL,
	[inputDate] [int] NULL,
	[updateBy] [int] NULL,
	[updateDate] [int] NULL,
 CONSTRAINT [PK_cso1_user] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_userAccess]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_userAccess](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[name] [varchar](50) NOT NULL,
 CONSTRAINT [PK_cso1_userAccess] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_userAccessModule]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_userAccessModule](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[userAccessId] [int] NOT NULL,
	[module] [varchar](50) NULL,
	[_access] [bit] NOT NULL,
	[_modify] [bit] NOT NULL,
 CONSTRAINT [PK_cso1_userAccessModule] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cso1_userAuth]    Script Date: 06/06/2022 13:53:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cso1_userAuth](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[userId] [varchar](50) NULL,
	[token] [varchar](50) NOT NULL,
	[agent] [varchar](250) NULL,
	[client_ip] [varchar](50) NULL,
	[status] [int] NULL,
	[inputBy] [int] NULL,
	[inputDate] [int] NULL,
	[updateBy] [int] NULL,
	[updateDate] [int] NULL,
 CONSTRAINT [PK_cso1_UserAuth] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[cso1_account] ADD  CONSTRAINT [DF_cso1_account_id]  DEFAULT ((1)) FOR [id]
GO
ALTER TABLE [dbo].[cso1_greeting] ADD  CONSTRAINT [DF_cso1_greeting_status]  DEFAULT ((0)) FOR [status]
GO
ALTER TABLE [dbo].[cso1_greeting] ADD  CONSTRAINT [DF_cso1_greeting_presence]  DEFAULT ((1)) FOR [presence]
GO
ALTER TABLE [dbo].[cso1_item] ADD  CONSTRAINT [DF_cso1_item_presecen]  DEFAULT ((1)) FOR [presence]
GO
ALTER TABLE [dbo].[cso1_item] ADD  CONSTRAINT [DF_cso1_item_status]  DEFAULT ((1)) FOR [status]
GO
ALTER TABLE [dbo].[cso1_itemCategory] ADD  CONSTRAINT [DF_cso1_itemCategory_parentId]  DEFAULT ('') FOR [id_parent]
GO
ALTER TABLE [dbo].[cso1_itemCategory] ADD  CONSTRAINT [DF_cso1_itemCategory_status]  DEFAULT ((1)) FOR [status]
GO
ALTER TABLE [dbo].[cso1_itemCategory] ADD  CONSTRAINT [DF_cso1_itemCategory_presence]  DEFAULT ((1)) FOR [presence]
GO
ALTER TABLE [dbo].[cso1_itemDepartement] ADD  CONSTRAINT [DF_cso1_itemDepartement_status]  DEFAULT ((1)) FOR [status]
GO
ALTER TABLE [dbo].[cso1_itemDepartement] ADD  CONSTRAINT [DF_cso1_itemDepartement_presence]  DEFAULT ((1)) FOR [presence]
GO
ALTER TABLE [dbo].[cso1_itemTax] ADD  CONSTRAINT [DF_cso1_itemTax_status]  DEFAULT ((1)) FOR [status]
GO
ALTER TABLE [dbo].[cso1_itemTax] ADD  CONSTRAINT [DF_cso1_itemTax_presence]  DEFAULT ((1)) FOR [presence]
GO
ALTER TABLE [dbo].[cso1_itemType] ADD  CONSTRAINT [DF_cso1_itemType_status]  DEFAULT ((1)) FOR [status]
GO
ALTER TABLE [dbo].[cso1_itemType] ADD  CONSTRAINT [DF_cso1_itemType_presence]  DEFAULT ((1)) FOR [presence]
GO
ALTER TABLE [dbo].[cso1_itemUom] ADD  CONSTRAINT [DF_cso1_itemUom_status]  DEFAULT ((1)) FOR [status]
GO
ALTER TABLE [dbo].[cso1_itemUom] ADD  CONSTRAINT [DF_cso1_itemUom_presence]  DEFAULT ((1)) FOR [presence]
GO
ALTER TABLE [dbo].[cso1_member] ADD  CONSTRAINT [DF_cso1_member_presence]  DEFAULT ((1)) FOR [presence]
GO
ALTER TABLE [dbo].[cso1_member] ADD  CONSTRAINT [DF_cso1_member_status]  DEFAULT ((1)) FOR [status]
GO
ALTER TABLE [dbo].[cso1_paymentType] ADD  CONSTRAINT [DF_cso1_paymentType_status]  DEFAULT ((1)) FOR [status]
GO
ALTER TABLE [dbo].[cso1_paymentType] ADD  CONSTRAINT [DF_cso1_paymentType_presence]  DEFAULT ((1)) FOR [presence]
GO
ALTER TABLE [dbo].[cso1_promotion] ADD  CONSTRAINT [DF_cso1_promotion_typeOfPromotion]  DEFAULT ((0)) FOR [typeOfPromotion]
GO
ALTER TABLE [dbo].[cso1_promotion] ADD  CONSTRAINT [DF_cso1_promotion_status]  DEFAULT ((1)) FOR [status]
GO
ALTER TABLE [dbo].[cso1_promotion] ADD  CONSTRAINT [DF_cso1_promotion_presence]  DEFAULT ((0)) FOR [presence]
GO
ALTER TABLE [dbo].[cso1_promotionFree] ADD  CONSTRAINT [DF_cso1_promotionFreeItem_qty]  DEFAULT ((0)) FOR [qty]
GO
ALTER TABLE [dbo].[cso1_promotionFree] ADD  CONSTRAINT [DF_cso1_promotionFreeItem_applyMultiply]  DEFAULT ((0)) FOR [applyMultiply]
GO
ALTER TABLE [dbo].[cso1_promotionFree] ADD  CONSTRAINT [DF_cso1_promotionFreeItem_scanFree]  DEFAULT ((0)) FOR [scanFree]
GO
ALTER TABLE [dbo].[cso1_promotionFree] ADD  CONSTRAINT [DF_cso1_promotionFreeItem_printOnBill]  DEFAULT ((0)) FOR [printOnBill]
GO
ALTER TABLE [dbo].[cso1_promotionFree] ADD  CONSTRAINT [DF_cso1_promotionFree_status]  DEFAULT ((1)) FOR [status]
GO
ALTER TABLE [dbo].[cso1_promotionFree] ADD  CONSTRAINT [DF_cso1_promotionFree_presence]  DEFAULT ((1)) FOR [presence]
GO
ALTER TABLE [dbo].[cso1_promotionItem] ADD  CONSTRAINT [DF_cso1_promotionItem_presence]  DEFAULT ((1)) FOR [presence]
GO
ALTER TABLE [dbo].[cso1_promotionItem] ADD  CONSTRAINT [DF_cso1_promotionItem_status]  DEFAULT ((1)) FOR [status]
GO
ALTER TABLE [dbo].[cso1_storeBranches] ADD  CONSTRAINT [DF_cso1_storeBranches_status]  DEFAULT ((1)) FOR [status]
GO
ALTER TABLE [dbo].[cso1_storeBranches] ADD  CONSTRAINT [DF_cso1_storeBranches_presence]  DEFAULT ((1)) FOR [presence]
GO
ALTER TABLE [dbo].[cso1_storeBrands] ADD  CONSTRAINT [DF_cso1_storeBrands_status]  DEFAULT ((1)) FOR [status]
GO
ALTER TABLE [dbo].[cso1_storeBrands] ADD  CONSTRAINT [DF_cso1_storeBrands_presence]  DEFAULT ((1)) FOR [presence]
GO
ALTER TABLE [dbo].[cso1_storeOutles] ADD  CONSTRAINT [DF_cso1_storeOutles_status]  DEFAULT ((0)) FOR [status]
GO
ALTER TABLE [dbo].[cso1_storeOutles] ADD  CONSTRAINT [DF_cso1_storeOutles_presence]  DEFAULT ((1)) FOR [presence]
GO
ALTER TABLE [dbo].[cso1_storeOutlesPaymentType] ADD  CONSTRAINT [DF_cso1_storeOutlesPaymentType_status]  DEFAULT ((1)) FOR [status]
GO
ALTER TABLE [dbo].[cso1_storeOutlesPaymentType] ADD  CONSTRAINT [DF_cso1_storeOutlesPaymentType_presence]  DEFAULT ((1)) FOR [presence]
GO
ALTER TABLE [dbo].[cso1_syncLog] ADD  CONSTRAINT [DF_cso1_syncLog_fileSize]  DEFAULT ((0)) FOR [fileSize]
GO
ALTER TABLE [dbo].[cso1_syncLog] ADD  CONSTRAINT [DF_cso1_syncLog_status]  DEFAULT ((0)) FOR [status]
GO
ALTER TABLE [dbo].[cso1_syncLog] ADD  CONSTRAINT [DF_cso1_syncLog_presence]  DEFAULT ((0)) FOR [presence]
GO
ALTER TABLE [dbo].[cso1_taxCode] ADD  CONSTRAINT [DF_cso1_taxCode_percentage]  DEFAULT ((0)) FOR [percentage]
GO
ALTER TABLE [dbo].[cso1_taxCode] ADD  CONSTRAINT [DF_cso1_taxCode_status]  DEFAULT ((0)) FOR [status]
GO
ALTER TABLE [dbo].[cso1_taxCode] ADD  CONSTRAINT [DF_cso1_taxCode_presence]  DEFAULT ((1)) FOR [presence]
GO
ALTER TABLE [dbo].[cso1_terminal] ADD  CONSTRAINT [DF_cso1_terminal_status]  DEFAULT ((1)) FOR [status]
GO
ALTER TABLE [dbo].[cso1_terminal] ADD  CONSTRAINT [DF_cso1_terminal_presence]  DEFAULT ((1)) FOR [presence]
GO
ALTER TABLE [dbo].[cso1_transaction] ADD  CONSTRAINT [DF_cso1_transaction_locked]  DEFAULT ((0)) FOR [locked]
GO
ALTER TABLE [dbo].[cso1_transaction] ADD  CONSTRAINT [DF_cso1_transaction_presence]  DEFAULT ((1)) FOR [presence]
GO
ALTER TABLE [dbo].[cso1_transactionDetail] ADD  CONSTRAINT [DF_cso1_transactionDetail_price]  DEFAULT ((0)) FOR [price]
GO
ALTER TABLE [dbo].[cso1_transactionDetail] ADD  CONSTRAINT [DF_cso1_transactionDetail_discount]  DEFAULT ((0)) FOR [discount]
GO
ALTER TABLE [dbo].[cso1_transactionDetail] ADD  CONSTRAINT [DF_cso1_transactionDetail_qty]  DEFAULT ((1)) FOR [qty]
GO
ALTER TABLE [dbo].[cso1_transactionDetail] ADD  CONSTRAINT [DF_cso1_transactionDetail_unitPrice]  DEFAULT ((0)) FOR [unitPrice]
GO
ALTER TABLE [dbo].[cso1_transactionDetail] ADD  CONSTRAINT [DF_cso1_transactionDetail_presence]  DEFAULT ((0)) FOR [presence]
GO
ALTER TABLE [dbo].[cso1_transactionPayment] ADD  CONSTRAINT [DF_cso1_transactionPayment_presence]  DEFAULT ((0)) FOR [presence]
GO
ALTER TABLE [dbo].[cso1_user] ADD  CONSTRAINT [DF_cso1_User_Presence]  DEFAULT ((1)) FOR [presence]
GO
ALTER TABLE [dbo].[cso1_user] ADD  CONSTRAINT [DF_cso1_User_Status]  DEFAULT ((1)) FOR [status]
GO
ALTER TABLE [dbo].[cso1_userAccessModule] ADD  CONSTRAINT [DF_cso1_userAccessModule__view]  DEFAULT ((0)) FOR [_access]
GO
ALTER TABLE [dbo].[cso1_userAccessModule] ADD  CONSTRAINT [DF_cso1_userAccessModule__modify]  DEFAULT ((0)) FOR [_modify]
GO
ALTER TABLE [dbo].[cso1_userAuth] ADD  CONSTRAINT [DF_cso1_userAuth_status]  DEFAULT ((1)) FOR [status]
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Inclusive or Exclusive' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'cso1_taxCode', @level2type=N'COLUMN',@level2name=N'taxType'
GO
USE [master]
GO
ALTER DATABASE [cso1] SET  READ_WRITE 
GO
