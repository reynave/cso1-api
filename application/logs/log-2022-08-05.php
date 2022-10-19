<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2022-08-05 00:00:51 --> Total execution time: 0.1045
DEBUG - 2022-08-05 00:00:51 --> Total execution time: 0.0617
DEBUG - 2022-08-05 00:00:52 --> Total execution time: 0.0588
DEBUG - 2022-08-05 00:00:52 --> Total execution time: 0.0717
DEBUG - 2022-08-05 00:00:53 --> Total execution time: 0.0756
DEBUG - 2022-08-05 00:00:53 --> Total execution time: 0.0558
ERROR - 2022-08-05 00:02:45 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Incorrect syntax near ','. - Invalid query: SELECT t1.*, i.shortDesc, i.description
                from 
                    (select count(k.itemId) as 'qty', k.itemId,  , sum(k.isSpecialPrice) as 'isSpecialPrice',
                    sum(k.price) as 'totalPrice', sum(k.discount) as 'totalDiscount', k.price
                    from cso1_kioskCart as k
                    where k.presence = 1 and k.kioskUuid =  '62ebe9ddca73e'
                    group by k.price, k.itemId ) as t1
                join cso1_item as i  on t1.itemId = i.id 
                
DEBUG - 2022-08-05 00:03:12 --> Total execution time: 0.1402
DEBUG - 2022-08-05 00:03:12 --> Total execution time: 0.0809
DEBUG - 2022-08-05 00:04:21 --> Total execution time: 0.2870
DEBUG - 2022-08-05 00:04:21 --> Total execution time: 0.2686
DEBUG - 2022-08-05 00:04:37 --> Total execution time: 3.1970
DEBUG - 2022-08-05 00:04:37 --> Total execution time: 0.1729
DEBUG - 2022-08-05 00:04:59 --> Total execution time: 0.1086
DEBUG - 2022-08-05 00:04:59 --> Total execution time: 0.0568
DEBUG - 2022-08-05 00:05:18 --> Total execution time: 0.0552
DEBUG - 2022-08-05 00:05:18 --> Total execution time: 0.0726
DEBUG - 2022-08-05 00:05:18 --> Total execution time: 0.0724
DEBUG - 2022-08-05 00:05:18 --> Total execution time: 0.0535
DEBUG - 2022-08-05 00:05:43 --> Total execution time: 0.0828
DEBUG - 2022-08-05 00:05:43 --> Total execution time: 0.0622
DEBUG - 2022-08-05 00:05:47 --> Total execution time: 0.0544
DEBUG - 2022-08-05 00:05:47 --> Total execution time: 0.0593
DEBUG - 2022-08-05 00:05:47 --> Total execution time: 0.0964
DEBUG - 2022-08-05 00:06:21 --> Total execution time: 0.2162
DEBUG - 2022-08-05 00:06:21 --> Total execution time: 0.1926
DEBUG - 2022-08-05 00:06:33 --> Total execution time: 0.2358
DEBUG - 2022-08-05 00:06:34 --> Total execution time: 0.2928
DEBUG - 2022-08-05 00:08:56 --> Total execution time: 0.0562
DEBUG - 2022-08-05 00:08:56 --> Total execution time: 0.0773
DEBUG - 2022-08-05 00:08:56 --> Total execution time: 0.0670
DEBUG - 2022-08-05 00:08:56 --> Total execution time: 0.0615
DEBUG - 2022-08-05 00:08:57 --> Total execution time: 0.0659
DEBUG - 2022-08-05 00:08:57 --> Total execution time: 0.0601
DEBUG - 2022-08-05 00:08:57 --> Total execution time: 0.0665
DEBUG - 2022-08-05 00:08:57 --> Total execution time: 0.0615
DEBUG - 2022-08-05 00:08:59 --> Total execution time: 0.0677
DEBUG - 2022-08-05 00:08:59 --> Total execution time: 0.0655
DEBUG - 2022-08-05 00:09:00 --> Total execution time: 0.0999
DEBUG - 2022-08-05 00:09:00 --> Total execution time: 0.0916
DEBUG - 2022-08-05 00:09:01 --> Total execution time: 0.1195
DEBUG - 2022-08-05 00:09:01 --> Total execution time: 0.1096
DEBUG - 2022-08-05 00:09:04 --> Total execution time: 0.1128
DEBUG - 2022-08-05 00:09:05 --> Total execution time: 0.2217
DEBUG - 2022-08-05 00:09:05 --> Total execution time: 0.1992
DEBUG - 2022-08-05 00:09:05 --> Total execution time: 0.1258
DEBUG - 2022-08-05 00:09:08 --> Total execution time: 0.0953
DEBUG - 2022-08-05 00:09:08 --> Total execution time: 0.0654
DEBUG - 2022-08-05 00:14:28 --> Total execution time: 0.0583
DEBUG - 2022-08-05 00:14:29 --> Total execution time: 0.0840
DEBUG - 2022-08-05 00:14:29 --> Total execution time: 0.0851
DEBUG - 2022-08-05 00:14:29 --> Total execution time: 0.0564
DEBUG - 2022-08-05 00:15:55 --> Total execution time: 0.1029
DEBUG - 2022-08-05 00:15:55 --> Total execution time: 0.0622
DEBUG - 2022-08-05 00:15:56 --> Total execution time: 0.0664
DEBUG - 2022-08-05 00:15:56 --> Total execution time: 0.0945
DEBUG - 2022-08-05 00:15:56 --> Total execution time: 0.0746
DEBUG - 2022-08-05 00:15:56 --> Total execution time: 0.0587
DEBUG - 2022-08-05 00:16:34 --> Total execution time: 0.1180
DEBUG - 2022-08-05 00:16:34 --> Total execution time: 0.0699
DEBUG - 2022-08-05 00:16:35 --> Total execution time: 0.0615
DEBUG - 2022-08-05 00:16:35 --> Total execution time: 0.0787
DEBUG - 2022-08-05 00:16:35 --> Total execution time: 0.0622
DEBUG - 2022-08-05 00:16:35 --> Total execution time: 0.0621
DEBUG - 2022-08-05 00:16:45 --> Total execution time: 0.1053
DEBUG - 2022-08-05 00:16:45 --> Total execution time: 0.0736
DEBUG - 2022-08-05 00:16:46 --> Total execution time: 0.0653
DEBUG - 2022-08-05 00:16:46 --> Total execution time: 0.0855
DEBUG - 2022-08-05 00:16:47 --> Total execution time: 0.1224
DEBUG - 2022-08-05 00:16:47 --> Total execution time: 0.0674
DEBUG - 2022-08-05 00:16:54 --> Total execution time: 0.1144
DEBUG - 2022-08-05 00:16:54 --> Total execution time: 0.0596
DEBUG - 2022-08-05 00:16:55 --> Total execution time: 0.0604
DEBUG - 2022-08-05 00:16:55 --> Total execution time: 0.0721
DEBUG - 2022-08-05 00:16:55 --> Total execution time: 0.0705
DEBUG - 2022-08-05 00:16:55 --> Total execution time: 0.0626
DEBUG - 2022-08-05 00:17:36 --> Total execution time: 0.1659
DEBUG - 2022-08-05 00:17:37 --> Total execution time: 0.0949
DEBUG - 2022-08-05 00:17:38 --> Total execution time: 0.0576
ERROR - 2022-08-05 00:17:38 --> Severity: Notice --> Undefined index: discount C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 243
ERROR - 2022-08-05 00:17:38 --> Severity: Notice --> Undefined index: discount C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 243
ERROR - 2022-08-05 00:17:38 --> Severity: Notice --> Undefined index: discount C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 243
ERROR - 2022-08-05 00:17:38 --> Severity: Notice --> Undefined index: discount C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 243
ERROR - 2022-08-05 00:17:38 --> Severity: Notice --> Undefined index: discount C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 243
ERROR - 2022-08-05 00:17:38 --> Severity: Notice --> Undefined index: discount C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 243
ERROR - 2022-08-05 00:17:38 --> Severity: Notice --> Undefined index: discount C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 243
ERROR - 2022-08-05 00:17:38 --> Severity: Notice --> Undefined index: discount C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 243
ERROR - 2022-08-05 00:17:38 --> Severity: Notice --> Undefined index: discount C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 243
ERROR - 2022-08-05 00:17:38 --> Severity: Notice --> Undefined index: discount C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 243
DEBUG - 2022-08-05 00:17:38 --> Total execution time: 0.0867
DEBUG - 2022-08-05 00:18:18 --> Total execution time: 0.0645
DEBUG - 2022-08-05 00:18:18 --> Total execution time: 0.0842
DEBUG - 2022-08-05 00:18:18 --> Total execution time: 0.0810
DEBUG - 2022-08-05 00:18:18 --> Total execution time: 0.0577
DEBUG - 2022-08-05 00:18:29 --> Total execution time: 0.0742
DEBUG - 2022-08-05 00:18:29 --> Total execution time: 0.0543
DEBUG - 2022-08-05 00:20:42 --> Total execution time: 0.0666
DEBUG - 2022-08-05 00:20:42 --> Total execution time: 0.0885
DEBUG - 2022-08-05 00:20:42 --> Total execution time: 0.0803
DEBUG - 2022-08-05 00:20:42 --> Total execution time: 0.0544
DEBUG - 2022-08-05 00:21:11 --> Total execution time: 0.1264
DEBUG - 2022-08-05 00:21:11 --> Total execution time: 0.0905
DEBUG - 2022-08-05 00:21:12 --> Total execution time: 0.0585
ERROR - 2022-08-05 00:21:12 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid object name 'cso1_kioskCart2'. - Invalid query: UPDATE "cso1_kioskCart2" SET "discount" = 7650, "updateDate" = 1659633672
WHERE "id" = 1011
DEBUG - 2022-08-05 00:24:15 --> Total execution time: 0.0605
DEBUG - 2022-08-05 00:24:15 --> Total execution time: 0.0805
DEBUG - 2022-08-05 00:24:15 --> Total execution time: 0.0787
DEBUG - 2022-08-05 00:24:15 --> Total execution time: 0.0566
DEBUG - 2022-08-05 00:24:23 --> Total execution time: 0.1026
DEBUG - 2022-08-05 00:24:23 --> Total execution time: 0.0814
DEBUG - 2022-08-05 00:24:25 --> Total execution time: 0.0639
DEBUG - 2022-08-05 00:24:25 --> Total execution time: 0.1097
DEBUG - 2022-08-05 00:24:25 --> Total execution time: 0.0973
DEBUG - 2022-08-05 00:24:25 --> Total execution time: 0.1644
DEBUG - 2022-08-05 00:26:32 --> Total execution time: 0.0839
DEBUG - 2022-08-05 00:26:32 --> Total execution time: 0.0512
DEBUG - 2022-08-05 00:26:34 --> Total execution time: 0.0562
DEBUG - 2022-08-05 00:26:34 --> Total execution time: 0.0881
DEBUG - 2022-08-05 00:26:34 --> Total execution time: 0.0903
DEBUG - 2022-08-05 00:26:35 --> Total execution time: 0.0755
DEBUG - 2022-08-05 00:31:29 --> Total execution time: 0.0653
DEBUG - 2022-08-05 00:31:29 --> Total execution time: 0.0526
DEBUG - 2022-08-05 00:31:32 --> Total execution time: 0.0597
DEBUG - 2022-08-05 00:31:32 --> Total execution time: 0.0844
DEBUG - 2022-08-05 00:31:32 --> Total execution time: 0.0732
DEBUG - 2022-08-05 00:31:32 --> Total execution time: 0.1030
DEBUG - 2022-08-05 00:32:34 --> Total execution time: 0.1463
DEBUG - 2022-08-05 00:32:34 --> Total execution time: 0.0930
DEBUG - 2022-08-05 00:32:44 --> Total execution time: 0.1556
DEBUG - 2022-08-05 00:32:44 --> Total execution time: 0.2273
DEBUG - 2022-08-05 00:32:54 --> Total execution time: 0.1919
DEBUG - 2022-08-05 00:32:54 --> Total execution time: 0.1852
DEBUG - 2022-08-05 00:33:02 --> Total execution time: 0.2244
DEBUG - 2022-08-05 00:33:02 --> Total execution time: 0.2020
DEBUG - 2022-08-05 00:39:42 --> Total execution time: 0.1871
DEBUG - 2022-08-05 00:39:42 --> Total execution time: 0.0844
DEBUG - 2022-08-05 00:42:49 --> Total execution time: 0.1178
DEBUG - 2022-08-05 00:42:49 --> Total execution time: 0.0579
DEBUG - 2022-08-05 00:42:50 --> Total execution time: 0.0564
DEBUG - 2022-08-05 00:42:50 --> Total execution time: 0.0711
DEBUG - 2022-08-05 00:42:50 --> Total execution time: 0.0581
DEBUG - 2022-08-05 00:42:53 --> Total execution time: 0.0579
DEBUG - 2022-08-05 00:42:53 --> Total execution time: 0.0815
DEBUG - 2022-08-05 00:42:53 --> Total execution time: 0.0761
DEBUG - 2022-08-05 00:42:53 --> Total execution time: 0.0879
DEBUG - 2022-08-05 00:42:56 --> Total execution time: 0.0776
DEBUG - 2022-08-05 00:42:56 --> Total execution time: 0.0512
DEBUG - 2022-08-05 00:42:58 --> Total execution time: 0.0559
DEBUG - 2022-08-05 00:42:58 --> Total execution time: 0.0711
DEBUG - 2022-08-05 00:42:58 --> Total execution time: 0.0679
DEBUG - 2022-08-05 00:43:02 --> Total execution time: 0.0571
DEBUG - 2022-08-05 00:43:02 --> Total execution time: 0.0819
DEBUG - 2022-08-05 00:43:02 --> Total execution time: 0.1298
DEBUG - 2022-08-05 00:43:02 --> Total execution time: 0.0795
DEBUG - 2022-08-05 00:43:15 --> Total execution time: 0.0885
DEBUG - 2022-08-05 00:43:15 --> Total execution time: 0.0549
DEBUG - 2022-08-05 00:43:17 --> Total execution time: 0.0574
DEBUG - 2022-08-05 00:43:17 --> Total execution time: 0.0719
DEBUG - 2022-08-05 00:43:17 --> Total execution time: 0.0602
DEBUG - 2022-08-05 00:43:18 --> Total execution time: 0.0560
DEBUG - 2022-08-05 00:43:18 --> Total execution time: 0.0900
DEBUG - 2022-08-05 00:43:19 --> Total execution time: 0.0830
DEBUG - 2022-08-05 00:43:19 --> Total execution time: 0.0621
DEBUG - 2022-08-05 00:46:15 --> Total execution time: 0.0871
DEBUG - 2022-08-05 00:46:15 --> Total execution time: 0.0556
DEBUG - 2022-08-05 00:46:53 --> Total execution time: 0.0944
DEBUG - 2022-08-05 00:46:53 --> Total execution time: 0.1129
DEBUG - 2022-08-05 00:46:53 --> Total execution time: 0.1090
DEBUG - 2022-08-05 00:46:54 --> Total execution time: 0.1038
DEBUG - 2022-08-05 00:46:55 --> Total execution time: 0.1340
DEBUG - 2022-08-05 00:46:55 --> Total execution time: 0.1065
DEBUG - 2022-08-05 00:46:56 --> Total execution time: 0.1046
DEBUG - 2022-08-05 00:46:56 --> Total execution time: 0.1054
DEBUG - 2022-08-05 00:46:57 --> Total execution time: 0.1037
DEBUG - 2022-08-05 00:46:57 --> Total execution time: 0.0975
DEBUG - 2022-08-05 00:46:59 --> Total execution time: 0.0943
ERROR - 2022-08-05 00:46:59 --> Severity: Notice --> Undefined variable: update C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 257
DEBUG - 2022-08-05 00:47:37 --> Total execution time: 0.1349
DEBUG - 2022-08-05 00:47:37 --> Total execution time: 0.0849
DEBUG - 2022-08-05 00:47:40 --> Total execution time: 0.0561
DEBUG - 2022-08-05 00:47:40 --> Total execution time: 0.0975
DEBUG - 2022-08-05 00:47:40 --> Total execution time: 0.0837
DEBUG - 2022-08-05 00:47:40 --> Total execution time: 0.0580
DEBUG - 2022-08-05 00:51:31 --> Total execution time: 0.0833
DEBUG - 2022-08-05 00:51:31 --> Total execution time: 0.0615
DEBUG - 2022-08-05 00:51:33 --> Total execution time: 0.0571
ERROR - 2022-08-05 00:51:34 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid object name 'cso1_kioskCart2'. - Invalid query: SELECT TOP 3 * from cso1_kioskCart2 
                        WHERE kioskUuid = '62ebe9ddca73e' AND itemId = '0058858' AND  presence = 1 ORDER BY inputDate ASC
DEBUG - 2022-08-05 00:52:24 --> Total execution time: 0.0707
ERROR - 2022-08-05 00:52:24 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'discount2'. - Invalid query: UPDATE "cso1_kioskCart" SET "discount2" = 0, "updateDate" = 1659635544
WHERE "id" = 1032
DEBUG - 2022-08-05 00:53:55 --> Total execution time: 0.0786
DEBUG - 2022-08-05 00:53:55 --> Total execution time: 0.0756
DEBUG - 2022-08-05 00:53:55 --> Total execution time: 0.0841
DEBUG - 2022-08-05 00:53:55 --> Total execution time: 0.0562
DEBUG - 2022-08-05 00:54:24 --> Total execution time: 0.1139
DEBUG - 2022-08-05 00:54:24 --> Total execution time: 0.0554
DEBUG - 2022-08-05 00:54:25 --> Total execution time: 0.0562
DEBUG - 2022-08-05 00:54:25 --> Total execution time: 0.0735
DEBUG - 2022-08-05 00:54:25 --> Total execution time: 0.0691
DEBUG - 2022-08-05 00:54:25 --> Total execution time: 0.0621
DEBUG - 2022-08-05 00:54:41 --> Total execution time: 0.0783
DEBUG - 2022-08-05 00:54:41 --> Total execution time: 0.0997
DEBUG - 2022-08-05 00:54:43 --> Total execution time: 0.0570
DEBUG - 2022-08-05 00:54:43 --> Total execution time: 0.0676
DEBUG - 2022-08-05 00:54:43 --> Total execution time: 0.1044
DEBUG - 2022-08-05 00:54:43 --> Total execution time: 0.0565
DEBUG - 2022-08-05 00:54:58 --> Total execution time: 0.1140
DEBUG - 2022-08-05 00:54:59 --> Total execution time: 0.0676
DEBUG - 2022-08-05 00:55:00 --> Total execution time: 0.0610
DEBUG - 2022-08-05 00:55:00 --> Total execution time: 0.0644
DEBUG - 2022-08-05 00:55:00 --> Total execution time: 0.0602
DEBUG - 2022-08-05 00:55:00 --> Total execution time: 0.0595
DEBUG - 2022-08-05 00:55:09 --> Total execution time: 0.0733
DEBUG - 2022-08-05 00:55:09 --> Total execution time: 0.0535
DEBUG - 2022-08-05 00:55:12 --> Total execution time: 0.0565
DEBUG - 2022-08-05 00:55:12 --> Total execution time: 0.0671
DEBUG - 2022-08-05 00:55:18 --> Total execution time: 0.0537
DEBUG - 2022-08-05 00:55:18 --> Total execution time: 0.0701
DEBUG - 2022-08-05 00:55:19 --> Total execution time: 0.0727
DEBUG - 2022-08-05 00:55:19 --> Total execution time: 0.0621
DEBUG - 2022-08-05 00:55:20 --> Total execution time: 0.0619
DEBUG - 2022-08-05 00:55:20 --> Total execution time: 0.0944
DEBUG - 2022-08-05 00:55:21 --> Total execution time: 0.0557
DEBUG - 2022-08-05 00:55:21 --> Total execution time: 0.0775
DEBUG - 2022-08-05 00:55:22 --> Total execution time: 0.0771
DEBUG - 2022-08-05 00:55:22 --> Total execution time: 0.0562
DEBUG - 2022-08-05 00:55:24 --> Total execution time: 0.0833
DEBUG - 2022-08-05 00:55:24 --> Total execution time: 0.0580
DEBUG - 2022-08-05 00:55:26 --> Total execution time: 0.0554
DEBUG - 2022-08-05 00:55:26 --> Total execution time: 0.0564
DEBUG - 2022-08-05 00:55:26 --> Total execution time: 0.0599
DEBUG - 2022-08-05 00:55:29 --> Total execution time: 0.0640
DEBUG - 2022-08-05 00:55:29 --> Total execution time: 0.0533
DEBUG - 2022-08-05 00:55:29 --> Total execution time: 0.0581
DEBUG - 2022-08-05 00:55:29 --> Total execution time: 0.0544
DEBUG - 2022-08-05 00:55:30 --> Total execution time: 0.0595
DEBUG - 2022-08-05 00:55:30 --> Total execution time: 0.0551
DEBUG - 2022-08-05 00:55:34 --> Total execution time: 0.0758
DEBUG - 2022-08-05 00:55:34 --> Total execution time: 0.0921
DEBUG - 2022-08-05 00:55:34 --> Total execution time: 0.1139
DEBUG - 2022-08-05 00:55:34 --> Total execution time: 0.1030
DEBUG - 2022-08-05 00:56:14 --> Total execution time: 0.1014
DEBUG - 2022-08-05 00:56:14 --> Total execution time: 0.0629
DEBUG - 2022-08-05 00:56:25 --> Total execution time: 0.0639
DEBUG - 2022-08-05 00:56:25 --> Total execution time: 0.0806
DEBUG - 2022-08-05 00:56:25 --> Total execution time: 0.0733
DEBUG - 2022-08-05 00:56:25 --> Total execution time: 0.0596
DEBUG - 2022-08-05 00:56:26 --> Total execution time: 0.0629
DEBUG - 2022-08-05 00:56:26 --> Total execution time: 0.0798
DEBUG - 2022-08-05 00:56:27 --> Total execution time: 0.0671
DEBUG - 2022-08-05 00:56:27 --> Total execution time: 0.0745
DEBUG - 2022-08-05 00:56:28 --> Total execution time: 0.0678
DEBUG - 2022-08-05 00:56:28 --> Total execution time: 0.1003
DEBUG - 2022-08-05 00:56:29 --> Total execution time: 0.0723
DEBUG - 2022-08-05 00:56:29 --> Total execution time: 0.0707
DEBUG - 2022-08-05 00:56:31 --> Total execution time: 0.0692
DEBUG - 2022-08-05 00:56:31 --> Total execution time: 0.0981
DEBUG - 2022-08-05 00:56:31 --> Total execution time: 0.1092
DEBUG - 2022-08-05 00:56:31 --> Total execution time: 0.0795
DEBUG - 2022-08-05 00:57:19 --> Total execution time: 0.0901
DEBUG - 2022-08-05 00:57:19 --> Total execution time: 0.0522
DEBUG - 2022-08-05 00:57:20 --> Total execution time: 0.0573
DEBUG - 2022-08-05 00:57:20 --> Total execution time: 0.0851
DEBUG - 2022-08-05 00:57:20 --> Total execution time: 0.0822
DEBUG - 2022-08-05 00:57:21 --> Total execution time: 0.0904
DEBUG - 2022-08-05 00:57:21 --> Total execution time: 0.1310
DEBUG - 2022-08-05 00:57:22 --> Total execution time: 0.0770
DEBUG - 2022-08-05 00:57:22 --> Total execution time: 0.0754
DEBUG - 2022-08-05 00:57:33 --> Total execution time: 0.0586
DEBUG - 2022-08-05 00:57:33 --> Total execution time: 0.0844
DEBUG - 2022-08-05 00:57:33 --> Total execution time: 0.0721
DEBUG - 2022-08-05 00:57:33 --> Total execution time: 0.0593
DEBUG - 2022-08-05 00:57:35 --> Total execution time: 0.0771
DEBUG - 2022-08-05 00:57:35 --> Total execution time: 0.0549
DEBUG - 2022-08-05 00:57:37 --> Total execution time: 0.0610
DEBUG - 2022-08-05 00:57:37 --> Total execution time: 0.0730
DEBUG - 2022-08-05 00:57:37 --> Total execution time: 0.1080
DEBUG - 2022-08-05 00:57:38 --> Total execution time: 0.0599
DEBUG - 2022-08-05 00:57:38 --> Total execution time: 0.0712
DEBUG - 2022-08-05 00:57:39 --> Total execution time: 0.0642
DEBUG - 2022-08-05 00:57:39 --> Total execution time: 0.0711
DEBUG - 2022-08-05 00:57:40 --> Total execution time: 0.0615
DEBUG - 2022-08-05 00:57:40 --> Total execution time: 0.0627
DEBUG - 2022-08-05 00:57:41 --> Total execution time: 0.0608
DEBUG - 2022-08-05 00:57:41 --> Total execution time: 0.0639
DEBUG - 2022-08-05 00:57:41 --> Total execution time: 0.0527
DEBUG - 2022-08-05 00:57:46 --> Total execution time: 0.0547
DEBUG - 2022-08-05 00:57:46 --> Total execution time: 0.0741
DEBUG - 2022-08-05 00:57:46 --> Total execution time: 0.1079
DEBUG - 2022-08-05 00:57:46 --> Total execution time: 0.0596
DEBUG - 2022-08-05 00:58:15 --> Total execution time: 0.0919
DEBUG - 2022-08-05 00:58:15 --> Total execution time: 0.0560
DEBUG - 2022-08-05 00:58:16 --> Total execution time: 0.0553
DEBUG - 2022-08-05 00:58:16 --> Total execution time: 0.0636
DEBUG - 2022-08-05 00:58:16 --> Total execution time: 0.0631
DEBUG - 2022-08-05 00:58:22 --> Total execution time: 0.0557
DEBUG - 2022-08-05 00:58:22 --> Total execution time: 0.0711
DEBUG - 2022-08-05 00:58:23 --> Total execution time: 0.0619
DEBUG - 2022-08-05 00:58:23 --> Total execution time: 0.0629
DEBUG - 2022-08-05 00:58:25 --> Total execution time: 0.1086
DEBUG - 2022-08-05 00:58:25 --> Total execution time: 0.0555
DEBUG - 2022-08-05 00:58:27 --> Total execution time: 0.0569
DEBUG - 2022-08-05 00:58:27 --> Total execution time: 0.0919
DEBUG - 2022-08-05 00:58:27 --> Total execution time: 0.1286
DEBUG - 2022-08-05 00:58:27 --> Total execution time: 0.0836
DEBUG - 2022-08-05 00:58:27 --> Total execution time: 0.0925
DEBUG - 2022-08-05 00:58:29 --> Total execution time: 0.0588
DEBUG - 2022-08-05 00:58:29 --> Total execution time: 0.0921
DEBUG - 2022-08-05 00:58:29 --> Total execution time: 0.0910
DEBUG - 2022-08-05 00:58:29 --> Total execution time: 0.0635
DEBUG - 2022-08-05 00:59:58 --> Total execution time: 0.1324
DEBUG - 2022-08-05 00:59:58 --> Total execution time: 0.0787
DEBUG - 2022-08-05 01:00:07 --> Total execution time: 0.1649
DEBUG - 2022-08-05 01:00:07 --> Total execution time: 0.1440
DEBUG - 2022-08-05 01:02:15 --> Total execution time: 0.1883
DEBUG - 2022-08-05 01:02:16 --> Total execution time: 0.1358
DEBUG - 2022-08-05 01:02:42 --> Total execution time: 0.1711
DEBUG - 2022-08-05 01:02:42 --> Total execution time: 0.1392
DEBUG - 2022-08-05 01:02:48 --> Total execution time: 0.0687
DEBUG - 2022-08-05 01:02:48 --> Total execution time: 0.0969
DEBUG - 2022-08-05 01:02:48 --> Total execution time: 0.1017
DEBUG - 2022-08-05 01:02:48 --> Total execution time: 0.1342
DEBUG - 2022-08-05 01:02:50 --> Total execution time: 0.0636
DEBUG - 2022-08-05 01:02:51 --> Total execution time: 0.1119
DEBUG - 2022-08-05 01:02:51 --> Total execution time: 0.1000
DEBUG - 2022-08-05 01:02:51 --> Total execution time: 0.0849
DEBUG - 2022-08-05 01:02:56 --> Total execution time: 0.0665
DEBUG - 2022-08-05 01:02:56 --> Total execution time: 0.0618
DEBUG - 2022-08-05 01:02:58 --> Total execution time: 0.0529
DEBUG - 2022-08-05 01:02:58 --> Total execution time: 0.0736
DEBUG - 2022-08-05 01:02:58 --> Total execution time: 0.0576
DEBUG - 2022-08-05 01:03:00 --> Total execution time: 0.0578
DEBUG - 2022-08-05 01:03:00 --> Total execution time: 0.0766
DEBUG - 2022-08-05 01:03:00 --> Total execution time: 0.0677
DEBUG - 2022-08-05 01:03:00 --> Total execution time: 0.0631
DEBUG - 2022-08-05 01:03:04 --> Total execution time: 0.0886
DEBUG - 2022-08-05 01:03:04 --> Total execution time: 0.0587
DEBUG - 2022-08-05 01:03:06 --> Total execution time: 0.0532
DEBUG - 2022-08-05 01:03:06 --> Total execution time: 0.0622
DEBUG - 2022-08-05 01:03:06 --> Total execution time: 0.0693
DEBUG - 2022-08-05 01:03:08 --> Total execution time: 0.0665
DEBUG - 2022-08-05 01:03:08 --> Total execution time: 0.0731
DEBUG - 2022-08-05 01:03:08 --> Total execution time: 0.0622
DEBUG - 2022-08-05 01:03:08 --> Total execution time: 0.0668
DEBUG - 2022-08-05 01:03:50 --> Total execution time: 0.3516
DEBUG - 2022-08-05 01:03:51 --> Total execution time: 0.3244
DEBUG - 2022-08-05 01:04:09 --> Total execution time: 0.2952
DEBUG - 2022-08-05 01:04:09 --> Total execution time: 0.1851
DEBUG - 2022-08-05 01:04:49 --> Total execution time: 0.0945
DEBUG - 2022-08-05 01:04:49 --> Total execution time: 0.0535
DEBUG - 2022-08-05 01:04:55 --> Total execution time: 0.0571
DEBUG - 2022-08-05 01:04:55 --> Total execution time: 0.0897
DEBUG - 2022-08-05 01:04:55 --> Total execution time: 0.0897
DEBUG - 2022-08-05 01:04:55 --> Total execution time: 0.0599
DEBUG - 2022-08-05 01:06:58 --> Total execution time: 0.0888
DEBUG - 2022-08-05 01:06:58 --> Total execution time: 0.0554
DEBUG - 2022-08-05 01:07:00 --> Total execution time: 0.0549
DEBUG - 2022-08-05 01:07:00 --> Total execution time: 0.0969
DEBUG - 2022-08-05 01:07:00 --> Total execution time: 0.0689
DEBUG - 2022-08-05 01:07:00 --> Total execution time: 0.0596
DEBUG - 2022-08-05 01:10:22 --> Total execution time: 0.1059
DEBUG - 2022-08-05 01:10:22 --> Total execution time: 0.0541
DEBUG - 2022-08-05 01:10:24 --> Total execution time: 0.0589
DEBUG - 2022-08-05 01:10:24 --> Total execution time: 0.1018
DEBUG - 2022-08-05 01:10:25 --> Total execution time: 0.0733
DEBUG - 2022-08-05 01:10:25 --> Total execution time: 0.0634
DEBUG - 2022-08-05 01:13:31 --> Total execution time: 0.1955
DEBUG - 2022-08-05 01:13:31 --> Total execution time: 0.0823
DEBUG - 2022-08-05 01:13:34 --> Total execution time: 0.0570
DEBUG - 2022-08-05 01:13:34 --> Total execution time: 0.1017
DEBUG - 2022-08-05 01:13:34 --> Total execution time: 0.0693
DEBUG - 2022-08-05 01:13:35 --> Total execution time: 0.0585
DEBUG - 2022-08-05 01:13:48 --> Total execution time: 0.1075
DEBUG - 2022-08-05 01:13:48 --> Total execution time: 0.0568
DEBUG - 2022-08-05 01:13:49 --> Total execution time: 0.0594
ERROR - 2022-08-05 01:13:49 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'id2'. - Invalid query: SELECT id2 FROM cso1_promotionFree WHERE presence = 1 AND status = 1 AND itemId = '0009542'  AND   promotionId =  'PR000010'  OR   promotionId =  'PR000011' 
DEBUG - 2022-08-05 01:21:48 --> Total execution time: 0.0936
DEBUG - 2022-08-05 01:21:48 --> Total execution time: 0.0868
DEBUG - 2022-08-05 01:21:48 --> Total execution time: 0.0808
DEBUG - 2022-08-05 01:21:48 --> Total execution time: 0.0549
DEBUG - 2022-08-05 01:21:50 --> Total execution time: 0.0610
DEBUG - 2022-08-05 01:21:50 --> Total execution time: 0.0539
DEBUG - 2022-08-05 01:21:52 --> Total execution time: 0.0763
DEBUG - 2022-08-05 01:21:52 --> Total execution time: 0.0661
DEBUG - 2022-08-05 01:21:54 --> Total execution time: 0.0781
ERROR - 2022-08-05 01:24:55 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 278
DEBUG - 2022-08-05 01:24:55 --> Total execution time: 0.0700
DEBUG - 2022-08-05 01:24:55 --> Total execution time: 0.0889
DEBUG - 2022-08-05 01:24:55 --> Total execution time: 0.0806
DEBUG - 2022-08-05 01:24:55 --> Total execution time: 0.0583
DEBUG - 2022-08-05 01:30:45 --> Total execution time: 0.1218
DEBUG - 2022-08-05 01:30:45 --> Total execution time: 0.0628
DEBUG - 2022-08-05 01:30:46 --> Total execution time: 0.0598
DEBUG - 2022-08-05 01:30:46 --> Total execution time: 0.0703
DEBUG - 2022-08-05 01:30:46 --> Total execution time: 0.1018
DEBUG - 2022-08-05 01:30:47 --> Total execution time: 0.0638
DEBUG - 2022-08-05 01:30:47 --> Total execution time: 0.0635
DEBUG - 2022-08-05 01:30:48 --> Total execution time: 0.0626
DEBUG - 2022-08-05 01:30:48 --> Total execution time: 0.0589
DEBUG - 2022-08-05 01:30:49 --> Total execution time: 0.0621
DEBUG - 2022-08-05 01:30:49 --> Total execution time: 0.0702
DEBUG - 2022-08-05 01:30:49 --> Total execution time: 0.0643
DEBUG - 2022-08-05 01:30:50 --> Total execution time: 0.0663
ERROR - 2022-08-05 01:30:54 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 315
DEBUG - 2022-08-05 01:30:54 --> Total execution time: 0.0603
ERROR - 2022-08-05 01:30:54 --> Severity: Notice --> Undefined index: qtyFrom C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 296
ERROR - 2022-08-05 01:30:54 --> Severity: Notice --> Undefined index: qtyTo C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 298
ERROR - 2022-08-05 01:30:54 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Incorrect syntax near '*'. - Invalid query: SELECT TOP  * from cso1_kioskCart 
                        WHERE kioskUuid = '62ebe9ddca73e' AND itemId = '0092496' AND  presence = 1 ORDER BY inputDate ASC
ERROR - 2022-08-05 01:34:45 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 305
DEBUG - 2022-08-05 01:34:45 --> Total execution time: 0.1133
DEBUG - 2022-08-05 01:34:45 --> Total execution time: 0.1497
DEBUG - 2022-08-05 01:34:45 --> Total execution time: 0.1415
DEBUG - 2022-08-05 01:34:45 --> Total execution time: 0.1142
DEBUG - 2022-08-05 01:36:27 --> Total execution time: 0.3677
DEBUG - 2022-08-05 01:36:27 --> Total execution time: 0.1365
ERROR - 2022-08-05 01:36:29 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 307
DEBUG - 2022-08-05 01:36:29 --> Total execution time: 0.0942
DEBUG - 2022-08-05 01:36:29 --> Total execution time: 0.1492
DEBUG - 2022-08-05 01:36:30 --> Total execution time: 0.1201
DEBUG - 2022-08-05 01:36:30 --> Total execution time: 0.1541
DEBUG - 2022-08-05 01:36:49 --> Total execution time: 0.2221
DEBUG - 2022-08-05 01:36:49 --> Total execution time: 0.1240
ERROR - 2022-08-05 01:36:52 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 304
DEBUG - 2022-08-05 01:36:52 --> Total execution time: 0.1082
DEBUG - 2022-08-05 01:36:52 --> Total execution time: 0.1497
DEBUG - 2022-08-05 01:36:53 --> Total execution time: 0.2429
DEBUG - 2022-08-05 01:36:53 --> Total execution time: 0.1369
DEBUG - 2022-08-05 01:36:58 --> Total execution time: 0.1691
DEBUG - 2022-08-05 01:36:58 --> Total execution time: 0.1067
ERROR - 2022-08-05 01:37:01 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 307
DEBUG - 2022-08-05 01:37:01 --> Total execution time: 0.1443
DEBUG - 2022-08-05 01:37:02 --> Total execution time: 0.1442
DEBUG - 2022-08-05 01:37:02 --> Total execution time: 0.1668
DEBUG - 2022-08-05 01:37:02 --> Total execution time: 0.1800
DEBUG - 2022-08-05 01:37:06 --> Total execution time: 0.1474
DEBUG - 2022-08-05 01:37:07 --> Total execution time: 0.1134
ERROR - 2022-08-05 01:37:11 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 307
DEBUG - 2022-08-05 01:37:11 --> Total execution time: 0.0938
DEBUG - 2022-08-05 01:37:11 --> Total execution time: 0.1254
DEBUG - 2022-08-05 01:37:11 --> Total execution time: 0.1317
DEBUG - 2022-08-05 01:37:11 --> Total execution time: 0.1069
DEBUG - 2022-08-05 01:37:42 --> Total execution time: 0.1279
DEBUG - 2022-08-05 01:37:42 --> Total execution time: 0.0715
ERROR - 2022-08-05 01:37:45 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 307
DEBUG - 2022-08-05 01:37:45 --> Total execution time: 0.0868
DEBUG - 2022-08-05 01:37:45 --> Total execution time: 0.0820
DEBUG - 2022-08-05 01:37:45 --> Total execution time: 0.0681
DEBUG - 2022-08-05 01:37:45 --> Total execution time: 0.0757
DEBUG - 2022-08-05 01:38:57 --> Total execution time: 0.2163
DEBUG - 2022-08-05 01:38:57 --> Total execution time: 0.0906
ERROR - 2022-08-05 01:38:59 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 305
DEBUG - 2022-08-05 01:38:59 --> Total execution time: 0.0608
ERROR - 2022-08-05 01:39:00 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Incorrect syntax near '='. - Invalid query: SELECT * FROM cso1_promotionFree WHERE id =  
ERROR - 2022-08-05 01:39:18 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 305
DEBUG - 2022-08-05 01:39:18 --> Total execution time: 0.0677
DEBUG - 2022-08-05 01:39:18 --> Total execution time: 0.0951
DEBUG - 2022-08-05 01:39:18 --> Total execution time: 0.0812
DEBUG - 2022-08-05 01:39:18 --> Total execution time: 0.0550
DEBUG - 2022-08-05 01:55:38 --> Total execution time: 0.1099
DEBUG - 2022-08-05 01:55:38 --> Total execution time: 0.0574
ERROR - 2022-08-05 01:55:43 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 306
DEBUG - 2022-08-05 01:55:43 --> Total execution time: 0.0625
DEBUG - 2022-08-05 01:55:43 --> Total execution time: 0.0982
DEBUG - 2022-08-05 01:55:44 --> Total execution time: 0.0793
DEBUG - 2022-08-05 01:55:44 --> Total execution time: 0.0582
DEBUG - 2022-08-05 02:13:28 --> Total execution time: 0.1051
DEBUG - 2022-08-05 02:13:28 --> Total execution time: 0.0596
DEBUG - 2022-08-05 02:13:38 --> Total execution time: 0.0552
DEBUG - 2022-08-05 02:13:38 --> Total execution time: 0.0749
DEBUG - 2022-08-05 02:13:39 --> Total execution time: 0.0636
DEBUG - 2022-08-05 02:13:39 --> Total execution time: 0.0551
DEBUG - 2022-08-05 02:13:40 --> Total execution time: 0.0674
DEBUG - 2022-08-05 02:13:40 --> Total execution time: 0.0630
DEBUG - 2022-08-05 02:14:02 --> Total execution time: 0.0710
DEBUG - 2022-08-05 02:14:02 --> Total execution time: 0.0863
DEBUG - 2022-08-05 02:14:02 --> Total execution time: 0.1268
DEBUG - 2022-08-05 02:14:02 --> Total execution time: 0.0772
DEBUG - 2022-08-05 02:14:12 --> Total execution time: 0.0762
ERROR - 2022-08-05 02:14:12 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid object name 'cso1_promotionFrees'. - Invalid query: SELECT * from cso1_promotionFrees 
                    Where itemId = '0009542' AND presence = 1 AND status = 1  AND   promotionId =  'PR000011' 
DEBUG - 2022-08-05 02:15:32 --> Total execution time: 0.0637
DEBUG - 2022-08-05 02:15:32 --> Total execution time: 0.0790
DEBUG - 2022-08-05 02:15:32 --> Total execution time: 0.1073
DEBUG - 2022-08-05 02:15:32 --> Total execution time: 0.0638
DEBUG - 2022-08-05 02:15:51 --> Total execution time: 0.0705
DEBUG - 2022-08-05 02:15:51 --> Total execution time: 0.0851
DEBUG - 2022-08-05 02:15:51 --> Total execution time: 0.0974
DEBUG - 2022-08-05 02:15:51 --> Total execution time: 0.0710
DEBUG - 2022-08-05 02:15:52 --> Total execution time: 0.0695
DEBUG - 2022-08-05 02:15:52 --> Total execution time: 0.1077
DEBUG - 2022-08-05 02:17:08 --> Total execution time: 0.0567
DEBUG - 2022-08-05 02:17:08 --> Total execution time: 0.0818
DEBUG - 2022-08-05 02:17:08 --> Total execution time: 0.0805
DEBUG - 2022-08-05 02:17:08 --> Total execution time: 0.0535
DEBUG - 2022-08-05 02:17:09 --> Total execution time: 0.0729
DEBUG - 2022-08-05 02:17:09 --> Total execution time: 0.0781
DEBUG - 2022-08-05 02:17:10 --> Total execution time: 0.0647
DEBUG - 2022-08-05 02:17:10 --> Total execution time: 0.0731
DEBUG - 2022-08-05 02:18:38 --> Total execution time: 0.0545
DEBUG - 2022-08-05 02:18:38 --> Total execution time: 0.0916
DEBUG - 2022-08-05 02:18:38 --> Total execution time: 0.1063
DEBUG - 2022-08-05 02:18:38 --> Total execution time: 0.0690
DEBUG - 2022-08-05 02:18:44 --> Total execution time: 0.0571
DEBUG - 2022-08-05 02:18:44 --> Total execution time: 0.0891
DEBUG - 2022-08-05 02:18:44 --> Total execution time: 0.0600
DEBUG - 2022-08-05 02:18:44 --> Total execution time: 0.0571
DEBUG - 2022-08-05 02:37:20 --> Total execution time: 0.0677
DEBUG - 2022-08-05 02:37:20 --> Total execution time: 0.0796
DEBUG - 2022-08-05 02:37:20 --> Total execution time: 0.0820
DEBUG - 2022-08-05 02:37:21 --> Total execution time: 0.0561
DEBUG - 2022-08-05 02:38:20 --> Total execution time: 0.0558
DEBUG - 2022-08-05 02:38:20 --> Total execution time: 0.0756
DEBUG - 2022-08-05 02:38:20 --> Total execution time: 0.0682
DEBUG - 2022-08-05 02:38:20 --> Total execution time: 0.0604
DEBUG - 2022-08-05 02:38:22 --> Total execution time: 0.0632
DEBUG - 2022-08-05 02:38:22 --> Total execution time: 0.0885
DEBUG - 2022-08-05 02:38:27 --> Total execution time: 0.0519
DEBUG - 2022-08-05 02:38:27 --> Total execution time: 0.0638
DEBUG - 2022-08-05 02:38:28 --> Total execution time: 0.0611
DEBUG - 2022-08-05 02:38:28 --> Total execution time: 0.0565
DEBUG - 2022-08-05 02:39:16 --> Total execution time: 0.0595
DEBUG - 2022-08-05 02:39:16 --> Total execution time: 0.0810
DEBUG - 2022-08-05 02:39:17 --> Total execution time: 0.1185
DEBUG - 2022-08-05 02:39:17 --> Total execution time: 0.0821
DEBUG - 2022-08-05 02:39:45 --> Total execution time: 0.0555
DEBUG - 2022-08-05 02:39:45 --> Total execution time: 0.0771
DEBUG - 2022-08-05 02:39:45 --> Total execution time: 0.0739
DEBUG - 2022-08-05 02:39:45 --> Total execution time: 0.0609
DEBUG - 2022-08-05 02:39:47 --> Total execution time: 0.0640
DEBUG - 2022-08-05 02:39:47 --> Total execution time: 0.0610
DEBUG - 2022-08-05 02:39:52 --> Total execution time: 0.0559
DEBUG - 2022-08-05 02:39:52 --> Total execution time: 0.0693
DEBUG - 2022-08-05 02:39:52 --> Total execution time: 0.0710
DEBUG - 2022-08-05 02:39:52 --> Total execution time: 0.0552
DEBUG - 2022-08-05 02:39:59 --> Total execution time: 0.0544
DEBUG - 2022-08-05 02:39:59 --> Total execution time: 0.0652
DEBUG - 2022-08-05 02:40:00 --> Total execution time: 0.0676
DEBUG - 2022-08-05 02:40:00 --> Total execution time: 0.0552
DEBUG - 2022-08-05 02:40:42 --> Total execution time: 0.1207
DEBUG - 2022-08-05 02:40:42 --> Total execution time: 0.1484
DEBUG - 2022-08-05 02:40:46 --> Total execution time: 0.0567
DEBUG - 2022-08-05 02:40:46 --> Total execution time: 0.0739
DEBUG - 2022-08-05 02:40:46 --> Total execution time: 0.0573
DEBUG - 2022-08-05 02:41:13 --> Total execution time: 0.0560
DEBUG - 2022-08-05 02:41:13 --> Total execution time: 0.0644
DEBUG - 2022-08-05 02:41:13 --> Total execution time: 0.0597
DEBUG - 2022-08-05 02:41:13 --> Total execution time: 0.0535
DEBUG - 2022-08-05 02:41:14 --> Total execution time: 0.0680
DEBUG - 2022-08-05 02:41:14 --> Total execution time: 0.0603
DEBUG - 2022-08-05 02:41:48 --> Total execution time: 0.0543
DEBUG - 2022-08-05 02:41:48 --> Total execution time: 0.0768
DEBUG - 2022-08-05 02:41:48 --> Total execution time: 0.0705
DEBUG - 2022-08-05 02:41:48 --> Total execution time: 0.0509
DEBUG - 2022-08-05 02:41:48 --> Total execution time: 0.0617
DEBUG - 2022-08-05 02:41:49 --> Total execution time: 0.0607
DEBUG - 2022-08-05 02:41:53 --> Total execution time: 0.0522
DEBUG - 2022-08-05 02:41:53 --> Total execution time: 0.0684
DEBUG - 2022-08-05 02:41:53 --> Total execution time: 0.0608
DEBUG - 2022-08-05 02:41:53 --> Total execution time: 0.0545
DEBUG - 2022-08-05 02:42:09 --> Total execution time: 0.0534
DEBUG - 2022-08-05 02:42:09 --> Total execution time: 0.0646
DEBUG - 2022-08-05 02:42:09 --> Total execution time: 0.0701
DEBUG - 2022-08-05 02:42:09 --> Total execution time: 0.0680
DEBUG - 2022-08-05 02:44:23 --> Total execution time: 0.0607
DEBUG - 2022-08-05 02:44:23 --> Total execution time: 0.0781
DEBUG - 2022-08-05 02:44:23 --> Total execution time: 0.0655
DEBUG - 2022-08-05 02:44:23 --> Total execution time: 0.0618
DEBUG - 2022-08-05 02:44:24 --> Total execution time: 0.0646
DEBUG - 2022-08-05 02:44:24 --> Total execution time: 0.0636
DEBUG - 2022-08-05 02:49:31 --> Total execution time: 0.0564
DEBUG - 2022-08-05 02:49:31 --> Total execution time: 0.0790
DEBUG - 2022-08-05 02:49:31 --> Total execution time: 0.0958
DEBUG - 2022-08-05 02:49:31 --> Total execution time: 0.0563
DEBUG - 2022-08-05 02:50:34 --> Total execution time: 0.0616
DEBUG - 2022-08-05 02:50:34 --> Total execution time: 0.0781
DEBUG - 2022-08-05 02:50:34 --> Total execution time: 0.0822
DEBUG - 2022-08-05 02:50:34 --> Total execution time: 0.0530
DEBUG - 2022-08-05 02:50:35 --> Total execution time: 0.0650
DEBUG - 2022-08-05 02:50:35 --> Total execution time: 0.0625
DEBUG - 2022-08-05 02:50:36 --> Total execution time: 0.0626
DEBUG - 2022-08-05 02:50:36 --> Total execution time: 0.0631
DEBUG - 2022-08-05 02:50:44 --> Total execution time: 0.0584
DEBUG - 2022-08-05 02:50:44 --> Total execution time: 0.0698
DEBUG - 2022-08-05 02:50:44 --> Total execution time: 0.0681
DEBUG - 2022-08-05 02:50:44 --> Total execution time: 0.0628
DEBUG - 2022-08-05 02:50:49 --> Total execution time: 0.0546
DEBUG - 2022-08-05 02:50:49 --> Total execution time: 0.0635
DEBUG - 2022-08-05 02:50:49 --> Total execution time: 0.0597
DEBUG - 2022-08-05 02:50:50 --> Total execution time: 0.0579
DEBUG - 2022-08-05 02:50:54 --> Total execution time: 0.0625
DEBUG - 2022-08-05 02:50:54 --> Total execution time: 0.1022
DEBUG - 2022-08-05 02:50:58 --> Total execution time: 0.0524
DEBUG - 2022-08-05 02:50:58 --> Total execution time: 0.0660
DEBUG - 2022-08-05 02:50:58 --> Total execution time: 0.0716
DEBUG - 2022-08-05 02:50:59 --> Total execution time: 0.0710
DEBUG - 2022-08-05 02:51:00 --> Total execution time: 0.0585
DEBUG - 2022-08-05 02:51:00 --> Total execution time: 0.0710
DEBUG - 2022-08-05 02:51:01 --> Total execution time: 0.0657
DEBUG - 2022-08-05 02:51:01 --> Total execution time: 0.0663
DEBUG - 2022-08-05 02:51:01 --> Total execution time: 0.0656
DEBUG - 2022-08-05 02:51:02 --> Total execution time: 0.0687
DEBUG - 2022-08-05 02:51:08 --> Total execution time: 0.0560
DEBUG - 2022-08-05 02:51:08 --> Total execution time: 0.0668
DEBUG - 2022-08-05 02:51:08 --> Total execution time: 0.1223
DEBUG - 2022-08-05 02:51:08 --> Total execution time: 0.0611
DEBUG - 2022-08-05 02:51:12 --> Total execution time: 0.0684
DEBUG - 2022-08-05 02:51:12 --> Total execution time: 0.0660
DEBUG - 2022-08-05 02:52:09 --> Total execution time: 0.0641
DEBUG - 2022-08-05 02:52:09 --> Total execution time: 0.0928
DEBUG - 2022-08-05 02:52:09 --> Total execution time: 0.0708
DEBUG - 2022-08-05 02:52:09 --> Total execution time: 0.0598
DEBUG - 2022-08-05 02:52:10 --> Total execution time: 0.0635
DEBUG - 2022-08-05 02:52:10 --> Total execution time: 0.0729
ERROR - 2022-08-05 02:52:10 --> Severity: Notice --> Undefined index: applyMultyply C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-05 02:52:10 --> Total execution time: 0.0704
DEBUG - 2022-08-05 02:52:12 --> Total execution time: 0.0547
DEBUG - 2022-08-05 02:52:13 --> Total execution time: 0.0617
DEBUG - 2022-08-05 02:52:13 --> Total execution time: 0.0649
DEBUG - 2022-08-05 02:52:14 --> Total execution time: 0.0578
DEBUG - 2022-08-05 02:52:14 --> Total execution time: 0.0630
DEBUG - 2022-08-05 02:52:14 --> Total execution time: 0.0588
DEBUG - 2022-08-05 02:52:14 --> Total execution time: 0.0513
DEBUG - 2022-08-05 02:52:26 --> Total execution time: 0.0552
ERROR - 2022-08-05 02:52:26 --> Severity: Notice --> Undefined index: applyMultyply C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-05 02:52:26 --> Total execution time: 0.0900
DEBUG - 2022-08-05 02:52:53 --> Total execution time: 0.1646
DEBUG - 2022-08-05 02:52:53 --> Total execution time: 0.0996
DEBUG - 2022-08-05 02:52:54 --> Total execution time: 0.0538
DEBUG - 2022-08-05 02:52:54 --> Total execution time: 0.0721
DEBUG - 2022-08-05 02:52:54 --> Total execution time: 0.0548
DEBUG - 2022-08-05 02:53:18 --> Total execution time: 0.0676
DEBUG - 2022-08-05 02:53:18 --> Total execution time: 0.0652
DEBUG - 2022-08-05 02:53:18 --> Total execution time: 0.0642
DEBUG - 2022-08-05 02:53:18 --> Total execution time: 0.0589
DEBUG - 2022-08-05 02:53:51 --> Total execution time: 0.0557
DEBUG - 2022-08-05 02:53:51 --> Total execution time: 0.0793
DEBUG - 2022-08-05 02:53:51 --> Total execution time: 0.0627
DEBUG - 2022-08-05 02:53:51 --> Total execution time: 0.0618
DEBUG - 2022-08-05 02:53:52 --> Total execution time: 0.0657
DEBUG - 2022-08-05 02:53:52 --> Total execution time: 0.0614
DEBUG - 2022-08-05 02:53:53 --> Total execution time: 0.0652
DEBUG - 2022-08-05 02:53:53 --> Total execution time: 0.0630
DEBUG - 2022-08-05 02:54:24 --> Total execution time: 0.0581
DEBUG - 2022-08-05 02:54:24 --> Total execution time: 0.0677
DEBUG - 2022-08-05 02:54:24 --> Total execution time: 0.0614
DEBUG - 2022-08-05 02:54:24 --> Total execution time: 0.0588
DEBUG - 2022-08-05 02:54:25 --> Total execution time: 0.0659
DEBUG - 2022-08-05 02:54:26 --> Total execution time: 0.0645
DEBUG - 2022-08-05 02:54:26 --> Total execution time: 0.0667
DEBUG - 2022-08-05 02:54:26 --> Total execution time: 0.0627
DEBUG - 2022-08-05 02:54:31 --> Total execution time: 0.0538
DEBUG - 2022-08-05 02:54:31 --> Total execution time: 0.0646
DEBUG - 2022-08-05 02:54:32 --> Total execution time: 0.0683
DEBUG - 2022-08-05 02:54:32 --> Total execution time: 0.0529
DEBUG - 2022-08-05 02:54:32 --> Total execution time: 0.0613
DEBUG - 2022-08-05 02:54:32 --> Total execution time: 0.0635
DEBUG - 2022-08-05 02:54:33 --> Total execution time: 0.0679
DEBUG - 2022-08-05 02:54:33 --> Total execution time: 0.0632
DEBUG - 2022-08-05 02:54:41 --> Total execution time: 0.0741
DEBUG - 2022-08-05 02:54:41 --> Total execution time: 0.1123
DEBUG - 2022-08-05 02:54:41 --> Total execution time: 0.0929
DEBUG - 2022-08-05 02:54:41 --> Total execution time: 0.0861
DEBUG - 2022-08-05 02:54:41 --> Total execution time: 0.0807
DEBUG - 2022-08-05 02:54:41 --> Total execution time: 0.0894
DEBUG - 2022-08-05 02:54:42 --> Total execution time: 0.0793
DEBUG - 2022-08-05 02:54:42 --> Total execution time: 0.0744
DEBUG - 2022-08-05 02:59:17 --> Total execution time: 0.0581
DEBUG - 2022-08-05 02:59:17 --> Total execution time: 0.0784
DEBUG - 2022-08-05 02:59:17 --> Total execution time: 0.0883
DEBUG - 2022-08-05 02:59:17 --> Total execution time: 0.0600
DEBUG - 2022-08-05 02:59:17 --> Total execution time: 0.0639
DEBUG - 2022-08-05 02:59:18 --> Total execution time: 0.0603
DEBUG - 2022-08-05 02:59:18 --> Total execution time: 0.0687
DEBUG - 2022-08-05 02:59:19 --> Total execution time: 0.0628
DEBUG - 2022-08-05 02:59:32 --> Total execution time: 0.0547
DEBUG - 2022-08-05 02:59:32 --> Total execution time: 0.0687
DEBUG - 2022-08-05 02:59:32 --> Total execution time: 0.0689
DEBUG - 2022-08-05 02:59:32 --> Total execution time: 0.0620
DEBUG - 2022-08-05 02:59:33 --> Total execution time: 0.0693
DEBUG - 2022-08-05 02:59:33 --> Total execution time: 0.0742
DEBUG - 2022-08-05 02:59:34 --> Total execution time: 0.0639
DEBUG - 2022-08-05 02:59:34 --> Total execution time: 0.0646
DEBUG - 2022-08-05 02:59:35 --> Total execution time: 0.0653
DEBUG - 2022-08-05 02:59:35 --> Total execution time: 0.0684
DEBUG - 2022-08-05 02:59:49 --> Total execution time: 0.0572
DEBUG - 2022-08-05 02:59:49 --> Total execution time: 0.0652
DEBUG - 2022-08-05 02:59:49 --> Total execution time: 0.0739
DEBUG - 2022-08-05 02:59:49 --> Total execution time: 0.0601
DEBUG - 2022-08-05 02:59:50 --> Total execution time: 0.0634
DEBUG - 2022-08-05 02:59:50 --> Total execution time: 0.0664
DEBUG - 2022-08-05 02:59:51 --> Total execution time: 0.0626
DEBUG - 2022-08-05 02:59:51 --> Total execution time: 0.0673
DEBUG - 2022-08-05 03:00:00 --> Total execution time: 0.0530
DEBUG - 2022-08-05 03:00:00 --> Total execution time: 0.0673
DEBUG - 2022-08-05 03:00:00 --> Total execution time: 0.1167
DEBUG - 2022-08-05 03:00:00 --> Total execution time: 0.0554
DEBUG - 2022-08-05 03:00:01 --> Total execution time: 0.0726
DEBUG - 2022-08-05 03:00:01 --> Total execution time: 0.0837
DEBUG - 2022-08-05 03:00:02 --> Total execution time: 0.0756
DEBUG - 2022-08-05 03:00:02 --> Total execution time: 0.0679
DEBUG - 2022-08-05 03:00:06 --> Total execution time: 0.0655
DEBUG - 2022-08-05 03:00:06 --> Total execution time: 0.0945
DEBUG - 2022-08-05 03:00:06 --> Total execution time: 0.0772
DEBUG - 2022-08-05 03:00:06 --> Total execution time: 0.1029
DEBUG - 2022-08-05 03:00:07 --> Total execution time: 0.0778
DEBUG - 2022-08-05 03:00:07 --> Total execution time: 0.0972
DEBUG - 2022-08-05 03:00:08 --> Total execution time: 0.0955
DEBUG - 2022-08-05 03:00:08 --> Total execution time: 0.0785
DEBUG - 2022-08-05 03:00:09 --> Total execution time: 0.0862
DEBUG - 2022-08-05 03:00:10 --> Total execution time: 0.0827
DEBUG - 2022-08-05 03:00:11 --> Total execution time: 0.0811
DEBUG - 2022-08-05 03:00:11 --> Total execution time: 0.0672
ERROR - 2022-08-05 03:03:46 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 336
DEBUG - 2022-08-05 03:03:46 --> Total execution time: 0.0703
DEBUG - 2022-08-05 03:03:46 --> Total execution time: 0.0676
DEBUG - 2022-08-05 03:03:46 --> Total execution time: 0.0864
DEBUG - 2022-08-05 03:03:46 --> Total execution time: 0.0578
DEBUG - 2022-08-05 05:31:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 05:31:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 05:31:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:31:58 --> Total execution time: 1.4020
DEBUG - 2022-08-05 05:31:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 05:31:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 05:31:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:31:58 --> Total execution time: 0.1075
DEBUG - 2022-08-05 05:49:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 05:49:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 05:49:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:49:15 --> Total execution time: 0.1525
DEBUG - 2022-08-05 05:49:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 05:49:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 05:49:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:49:15 --> Total execution time: 0.0762
DEBUG - 2022-08-05 05:58:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 05:58:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 05:58:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 05:58:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 05:58:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 05:58:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 05:58:19 --> Total execution time: 0.1857
DEBUG - 2022-08-05 05:59:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 05:59:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 05:59:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 05:59:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 05:59:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 05:59:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 05:59:08 --> Total execution time: 0.0967
DEBUG - 2022-08-05 05:59:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 05:59:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 05:59:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 05:59:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 05:59:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 05:59:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 05:59:08 --> Total execution time: 0.0770
DEBUG - 2022-08-05 05:59:08 --> Total execution time: 0.0641
DEBUG - 2022-08-05 05:59:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 05:59:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 05:59:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 05:59:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 05:59:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 05:59:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 05:59:10 --> Total execution time: 0.0893
DEBUG - 2022-08-05 05:59:10 --> Total execution time: 0.1048
DEBUG - 2022-08-05 05:59:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 05:59:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 05:59:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 05:59:10 --> Total execution time: 0.0688
DEBUG - 2022-08-05 05:59:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 05:59:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 05:59:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 05:59:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 05:59:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 05:59:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 05:59:16 --> Total execution time: 0.0929
DEBUG - 2022-08-05 05:59:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 05:59:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 05:59:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 05:59:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 05:59:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 05:59:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 05:59:16 --> Total execution time: 0.0616
DEBUG - 2022-08-05 05:59:16 --> Total execution time: 0.0807
DEBUG - 2022-08-05 05:59:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 05:59:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 05:59:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 05:59:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 05:59:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 05:59:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 05:59:17 --> Total execution time: 0.0916
DEBUG - 2022-08-05 05:59:17 --> Total execution time: 0.0964
DEBUG - 2022-08-05 05:59:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 05:59:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 05:59:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 05:59:17 --> Total execution time: 0.0757
DEBUG - 2022-08-05 06:09:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:09:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:09:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:09:35 --> Total execution time: 0.0591
DEBUG - 2022-08-05 06:09:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:09:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:09:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:09:35 --> Total execution time: 0.0842
DEBUG - 2022-08-05 06:09:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:09:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:09:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:09:35 --> Total execution time: 0.0779
DEBUG - 2022-08-05 06:09:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:09:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:09:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:09:35 --> Total execution time: 0.0583
DEBUG - 2022-08-05 06:09:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:09:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:09:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:09:36 --> Total execution time: 0.0646
DEBUG - 2022-08-05 06:09:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:09:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:09:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:09:36 --> Total execution time: 0.0615
DEBUG - 2022-08-05 06:09:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:09:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:09:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:09:45 --> Total execution time: 0.0695
DEBUG - 2022-08-05 06:09:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:09:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:09:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:09:45 --> Total execution time: 0.1076
DEBUG - 2022-08-05 06:09:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:09:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:09:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:09:45 --> Total execution time: 0.0872
DEBUG - 2022-08-05 06:09:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:09:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:09:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:09:45 --> Total execution time: 0.0927
DEBUG - 2022-08-05 06:09:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:09:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:09:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:09:46 --> Total execution time: 0.0812
DEBUG - 2022-08-05 06:09:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:09:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:09:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:09:46 --> Total execution time: 0.0827
DEBUG - 2022-08-05 06:09:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:09:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:09:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:09:47 --> Total execution time: 0.0808
DEBUG - 2022-08-05 06:09:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:09:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:09:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:09:47 --> Total execution time: 0.0759
DEBUG - 2022-08-05 06:11:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:11:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:11:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:11:16 --> Total execution time: 0.0650
DEBUG - 2022-08-05 06:11:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:11:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:11:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:11:16 --> Total execution time: 0.1084
DEBUG - 2022-08-05 06:11:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:11:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:11:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:11:16 --> Total execution time: 0.0691
DEBUG - 2022-08-05 06:11:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:11:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:11:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:11:16 --> Total execution time: 0.0717
DEBUG - 2022-08-05 06:11:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:11:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:11:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:11:17 --> Total execution time: 0.0963
DEBUG - 2022-08-05 06:11:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:11:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:11:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:11:17 --> Total execution time: 0.0674
DEBUG - 2022-08-05 06:17:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:17:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:17:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:17:42 --> Total execution time: 0.1994
DEBUG - 2022-08-05 06:17:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:17:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:17:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:17:42 --> Total execution time: 0.1387
DEBUG - 2022-08-05 06:20:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:20:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:20:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:20:48 --> Total execution time: 0.2699
DEBUG - 2022-08-05 06:20:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:20:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:20:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:20:48 --> Total execution time: 0.1682
DEBUG - 2022-08-05 06:21:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:21:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:21:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:21:17 --> Total execution time: 0.1306
DEBUG - 2022-08-05 06:21:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:21:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:21:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:21:17 --> Total execution time: 0.0815
DEBUG - 2022-08-05 06:22:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:22:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:22:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:22:52 --> Total execution time: 0.0524
DEBUG - 2022-08-05 06:22:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:22:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:22:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:22:52 --> Total execution time: 0.0820
DEBUG - 2022-08-05 06:22:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:22:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:22:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:22:52 --> Total execution time: 0.0690
DEBUG - 2022-08-05 06:22:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:22:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:22:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:22:52 --> Total execution time: 0.0552
DEBUG - 2022-08-05 06:23:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:23:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:23:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 06:23:36 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 323
DEBUG - 2022-08-05 06:23:36 --> Total execution time: 0.0954
DEBUG - 2022-08-05 06:23:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:23:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:23:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 06:23:36 --> Total execution time: 0.0688
DEBUG - 2022-08-05 06:23:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:23:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:23:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:23:40 --> Total execution time: 0.0622
DEBUG - 2022-08-05 06:23:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:23:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:23:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:23:40 --> Total execution time: 0.0776
DEBUG - 2022-08-05 06:23:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:23:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:23:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:23:40 --> Total execution time: 0.1071
DEBUG - 2022-08-05 06:23:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:23:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:23:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:23:40 --> Total execution time: 0.0657
DEBUG - 2022-08-05 06:23:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:23:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:23:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:23:41 --> Total execution time: 0.0787
DEBUG - 2022-08-05 06:23:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:23:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:23:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:23:41 --> Total execution time: 0.0864
DEBUG - 2022-08-05 06:23:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:23:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:23:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:23:42 --> Total execution time: 0.0794
DEBUG - 2022-08-05 06:23:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:23:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:23:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:23:42 --> Total execution time: 0.0862
DEBUG - 2022-08-05 06:23:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:23:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:23:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:23:43 --> Total execution time: 0.0864
DEBUG - 2022-08-05 06:23:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:23:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:23:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:23:43 --> Total execution time: 0.0796
DEBUG - 2022-08-05 06:23:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:23:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:23:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:23:58 --> Total execution time: 0.0952
DEBUG - 2022-08-05 06:23:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:23:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:23:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:23:58 --> Total execution time: 0.1030
DEBUG - 2022-08-05 06:25:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:25:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:25:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:25:23 --> Total execution time: 0.0620
DEBUG - 2022-08-05 06:25:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:25:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:25:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:25:23 --> Total execution time: 0.0769
DEBUG - 2022-08-05 06:25:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:25:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:25:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:25:23 --> Total execution time: 0.0744
DEBUG - 2022-08-05 06:25:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:25:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:25:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:25:23 --> Total execution time: 0.0531
DEBUG - 2022-08-05 06:25:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:25:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:25:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:25:29 --> Total execution time: 0.0612
DEBUG - 2022-08-05 06:25:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:25:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:25:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:25:29 --> Total execution time: 0.0677
DEBUG - 2022-08-05 06:25:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:25:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:25:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:25:29 --> Total execution time: 0.0716
DEBUG - 2022-08-05 06:25:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:25:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:25:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:25:29 --> Total execution time: 0.0539
DEBUG - 2022-08-05 06:26:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:26:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:26:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:26:21 --> Total execution time: 0.0642
DEBUG - 2022-08-05 06:26:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:26:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:26:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:26:21 --> Total execution time: 0.0875
DEBUG - 2022-08-05 06:26:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:26:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:26:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:26:22 --> Total execution time: 0.0907
DEBUG - 2022-08-05 06:26:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:26:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:26:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:26:22 --> Total execution time: 0.0761
DEBUG - 2022-08-05 06:26:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:26:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:26:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:26:23 --> Total execution time: 0.0734
DEBUG - 2022-08-05 06:26:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:26:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:26:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:26:23 --> Total execution time: 0.0727
DEBUG - 2022-08-05 06:26:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:26:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:26:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:26:23 --> Total execution time: 0.0819
DEBUG - 2022-08-05 06:26:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:26:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:26:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:26:23 --> Total execution time: 0.0872
DEBUG - 2022-08-05 06:26:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:26:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:26:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:26:24 --> Total execution time: 0.0796
DEBUG - 2022-08-05 06:26:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:26:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:26:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:26:24 --> Total execution time: 0.0793
DEBUG - 2022-08-05 06:26:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:26:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:26:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:26:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:26:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 06:26:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 06:26:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:26:54 --> Total execution time: 0.1216
DEBUG - 2022-08-05 06:26:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:26:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:26:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:26:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 06:26:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 06:26:54 --> Total execution time: 0.0914
DEBUG - 2022-08-05 06:26:54 --> Total execution time: 0.0709
DEBUG - 2022-08-05 06:26:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:26:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:26:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 06:26:58 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 323
DEBUG - 2022-08-05 06:26:58 --> Total execution time: 0.0604
DEBUG - 2022-08-05 06:26:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:26:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:26:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 06:26:58 --> Total execution time: 0.0591
DEBUG - 2022-08-05 06:27:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:27:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:27:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:27:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:27:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 06:27:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 06:27:01 --> Total execution time: 0.1030
DEBUG - 2022-08-05 06:27:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:27:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:27:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:27:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:27:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 06:27:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 06:27:01 --> Total execution time: 0.0666
DEBUG - 2022-08-05 06:27:01 --> Total execution time: 0.0647
DEBUG - 2022-08-05 06:27:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:27:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:27:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:27:29 --> Total execution time: 0.0574
DEBUG - 2022-08-05 06:27:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:27:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:27:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:27:29 --> Total execution time: 0.0771
DEBUG - 2022-08-05 06:27:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:27:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:27:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:27:30 --> Total execution time: 0.0916
DEBUG - 2022-08-05 06:27:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:27:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:27:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:27:30 --> Total execution time: 0.0536
DEBUG - 2022-08-05 06:27:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:27:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:27:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:27:30 --> Total execution time: 0.0691
DEBUG - 2022-08-05 06:27:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:27:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:27:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:27:30 --> Total execution time: 0.0640
DEBUG - 2022-08-05 06:27:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:27:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:27:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:27:31 --> Total execution time: 0.0722
DEBUG - 2022-08-05 06:27:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:27:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:27:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:27:31 --> Total execution time: 0.0664
DEBUG - 2022-08-05 06:27:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:27:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:27:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:27:32 --> Total execution time: 0.0752
DEBUG - 2022-08-05 06:27:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:27:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:27:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:27:32 --> Total execution time: 0.0757
DEBUG - 2022-08-05 06:33:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:33:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:33:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:33:59 --> Total execution time: 0.1625
DEBUG - 2022-08-05 06:33:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:33:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:33:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:33:59 --> Total execution time: 0.1049
DEBUG - 2022-08-05 06:39:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:39:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:39:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:39:46 --> Total execution time: 0.1521
DEBUG - 2022-08-05 06:39:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:39:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:39:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:39:46 --> Total execution time: 0.0851
DEBUG - 2022-08-05 06:53:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:53:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:53:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:53:11 --> Total execution time: 0.2801
DEBUG - 2022-08-05 06:53:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:53:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:53:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:53:11 --> Total execution time: 0.1942
DEBUG - 2022-08-05 06:54:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:54:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:54:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:54:02 --> Total execution time: 0.1961
DEBUG - 2022-08-05 06:54:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:54:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:54:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:54:02 --> Total execution time: 0.2037
DEBUG - 2022-08-05 06:54:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:54:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:54:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:54:19 --> Total execution time: 0.2490
DEBUG - 2022-08-05 06:54:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:54:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:54:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:54:19 --> Total execution time: 0.1953
DEBUG - 2022-08-05 06:54:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:54:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:54:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:54:51 --> Total execution time: 0.2092
DEBUG - 2022-08-05 06:54:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:54:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:54:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:54:51 --> Total execution time: 0.2231
DEBUG - 2022-08-05 06:55:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:09 --> Total execution time: 0.7164
DEBUG - 2022-08-05 06:55:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:09 --> Total execution time: 0.2781
DEBUG - 2022-08-05 06:55:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:15 --> Total execution time: 0.2871
DEBUG - 2022-08-05 06:55:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:16 --> Total execution time: 0.3633
DEBUG - 2022-08-05 06:55:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:25 --> Total execution time: 0.0618
DEBUG - 2022-08-05 06:55:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:26 --> Total execution time: 0.1027
DEBUG - 2022-08-05 06:55:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:26 --> Total execution time: 0.0819
DEBUG - 2022-08-05 06:55:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:26 --> Total execution time: 0.0550
DEBUG - 2022-08-05 06:55:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:27 --> Total execution time: 0.0684
DEBUG - 2022-08-05 06:55:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:27 --> Total execution time: 0.0810
DEBUG - 2022-08-05 06:55:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:28 --> Total execution time: 0.0649
DEBUG - 2022-08-05 06:55:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:29 --> Total execution time: 0.0650
DEBUG - 2022-08-05 06:55:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:30 --> Total execution time: 0.0634
DEBUG - 2022-08-05 06:55:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:30 --> Total execution time: 0.0608
DEBUG - 2022-08-05 06:55:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:49 --> Total execution time: 0.0858
DEBUG - 2022-08-05 06:55:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:49 --> Total execution time: 0.0961
DEBUG - 2022-08-05 06:55:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:49 --> Total execution time: 0.0948
DEBUG - 2022-08-05 06:55:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:49 --> Total execution time: 0.0890
DEBUG - 2022-08-05 06:55:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:50 --> Total execution time: 0.0744
DEBUG - 2022-08-05 06:55:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:50 --> Total execution time: 0.0742
DEBUG - 2022-08-05 06:55:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:51 --> Total execution time: 0.0744
DEBUG - 2022-08-05 06:55:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:51 --> Total execution time: 0.0702
DEBUG - 2022-08-05 06:55:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:52 --> Total execution time: 0.0653
DEBUG - 2022-08-05 06:55:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:52 --> Total execution time: 0.0731
DEBUG - 2022-08-05 06:55:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:53 --> Total execution time: 0.0731
DEBUG - 2022-08-05 06:55:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:53 --> Total execution time: 0.0689
DEBUG - 2022-08-05 06:55:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:54 --> Total execution time: 0.0613
DEBUG - 2022-08-05 06:55:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:54 --> Total execution time: 0.0711
DEBUG - 2022-08-05 06:55:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:54 --> Total execution time: 0.0855
DEBUG - 2022-08-05 06:55:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:54 --> Total execution time: 0.0811
DEBUG - 2022-08-05 06:55:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:55 --> Total execution time: 0.0786
DEBUG - 2022-08-05 06:55:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:55:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:55:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:55:55 --> Total execution time: 0.0990
DEBUG - 2022-08-05 06:56:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 06:56:04 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 323
DEBUG - 2022-08-05 06:56:04 --> Total execution time: 0.0557
DEBUG - 2022-08-05 06:56:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 06:56:04 --> Total execution time: 0.0590
DEBUG - 2022-08-05 06:56:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:06 --> Total execution time: 0.0721
DEBUG - 2022-08-05 06:56:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:06 --> Total execution time: 0.0721
DEBUG - 2022-08-05 06:56:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:06 --> Total execution time: 0.1048
DEBUG - 2022-08-05 06:56:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:06 --> Total execution time: 0.0620
DEBUG - 2022-08-05 06:56:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:07 --> Total execution time: 0.0663
DEBUG - 2022-08-05 06:56:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:07 --> Total execution time: 0.0660
DEBUG - 2022-08-05 06:56:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:09 --> Total execution time: 0.0617
DEBUG - 2022-08-05 06:56:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:09 --> Total execution time: 0.0818
DEBUG - 2022-08-05 06:56:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:10 --> Total execution time: 0.0716
DEBUG - 2022-08-05 06:56:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:10 --> Total execution time: 0.0831
DEBUG - 2022-08-05 06:56:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:11 --> Total execution time: 0.1070
DEBUG - 2022-08-05 06:56:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:11 --> Total execution time: 0.1386
DEBUG - 2022-08-05 06:56:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:12 --> Total execution time: 0.1050
DEBUG - 2022-08-05 06:56:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:12 --> Total execution time: 0.1902
DEBUG - 2022-08-05 06:56:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:12 --> Total execution time: 0.1710
DEBUG - 2022-08-05 06:56:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:13 --> Total execution time: 0.1466
DEBUG - 2022-08-05 06:56:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:13 --> Total execution time: 0.2222
DEBUG - 2022-08-05 06:56:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:13 --> Total execution time: 0.1427
DEBUG - 2022-08-05 06:56:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:14 --> Total execution time: 0.1276
DEBUG - 2022-08-05 06:56:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:15 --> Total execution time: 0.1873
DEBUG - 2022-08-05 06:56:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:16 --> Total execution time: 0.1107
DEBUG - 2022-08-05 06:56:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:16 --> Total execution time: 0.1761
DEBUG - 2022-08-05 06:56:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:17 --> Total execution time: 0.0906
DEBUG - 2022-08-05 06:56:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:17 --> Total execution time: 0.0818
DEBUG - 2022-08-05 06:56:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:18 --> Total execution time: 0.0672
DEBUG - 2022-08-05 06:56:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:18 --> Total execution time: 0.0884
DEBUG - 2022-08-05 06:56:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:18 --> Total execution time: 0.0896
DEBUG - 2022-08-05 06:56:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:18 --> Total execution time: 0.0949
DEBUG - 2022-08-05 06:56:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:49 --> Total execution time: 0.0540
DEBUG - 2022-08-05 06:56:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:49 --> Total execution time: 0.0775
DEBUG - 2022-08-05 06:56:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:49 --> Total execution time: 0.1109
DEBUG - 2022-08-05 06:56:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:49 --> Total execution time: 0.0569
DEBUG - 2022-08-05 06:56:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:50 --> Total execution time: 0.0632
DEBUG - 2022-08-05 06:56:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:50 --> Total execution time: 0.0828
DEBUG - 2022-08-05 06:56:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:51 --> Total execution time: 0.0747
DEBUG - 2022-08-05 06:56:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:51 --> Total execution time: 0.0714
DEBUG - 2022-08-05 06:56:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:52 --> Total execution time: 0.0709
DEBUG - 2022-08-05 06:56:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:52 --> Total execution time: 0.0677
DEBUG - 2022-08-05 06:56:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:53 --> Total execution time: 0.0693
DEBUG - 2022-08-05 06:56:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:53 --> Total execution time: 0.0722
DEBUG - 2022-08-05 06:56:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:54 --> Total execution time: 0.0696
DEBUG - 2022-08-05 06:56:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:54 --> Total execution time: 0.0671
DEBUG - 2022-08-05 06:56:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:55 --> Total execution time: 0.0688
DEBUG - 2022-08-05 06:56:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:56 --> Total execution time: 0.0921
DEBUG - 2022-08-05 06:56:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:56 --> Total execution time: 0.1371
DEBUG - 2022-08-05 06:56:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:56 --> Total execution time: 0.0862
DEBUG - 2022-08-05 06:56:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:56 --> Total execution time: 0.0990
DEBUG - 2022-08-05 06:56:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:56 --> Total execution time: 0.1744
DEBUG - 2022-08-05 06:56:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:57 --> Total execution time: 0.1015
DEBUG - 2022-08-05 06:56:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:57 --> Total execution time: 0.0886
DEBUG - 2022-08-05 06:56:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:58 --> Total execution time: 0.0805
DEBUG - 2022-08-05 06:56:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:58 --> Total execution time: 0.0859
DEBUG - 2022-08-05 06:56:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:59 --> Total execution time: 0.0915
DEBUG - 2022-08-05 06:56:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:56:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:56:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:56:59 --> Total execution time: 0.1244
DEBUG - 2022-08-05 06:57:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:57:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:57:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:57:00 --> Total execution time: 0.0867
DEBUG - 2022-08-05 06:57:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:57:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:57:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:57:00 --> Total execution time: 0.0900
DEBUG - 2022-08-05 06:57:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:57:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:57:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:57:01 --> Total execution time: 0.0801
DEBUG - 2022-08-05 06:57:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:57:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:57:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:57:01 --> Total execution time: 0.0894
DEBUG - 2022-08-05 06:57:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:57:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:57:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:57:01 --> Total execution time: 0.1225
DEBUG - 2022-08-05 06:57:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:57:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:57:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:57:02 --> Total execution time: 0.1012
DEBUG - 2022-08-05 06:57:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:57:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:57:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:57:02 --> Total execution time: 0.1052
DEBUG - 2022-08-05 06:57:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:57:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:57:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:57:02 --> Total execution time: 0.1965
DEBUG - 2022-08-05 06:57:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:57:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:57:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:57:03 --> Total execution time: 0.1038
DEBUG - 2022-08-05 06:57:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:57:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:57:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:57:03 --> Total execution time: 0.0892
DEBUG - 2022-08-05 06:57:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:57:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:57:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:57:04 --> Total execution time: 0.0759
DEBUG - 2022-08-05 06:57:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:57:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:57:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:57:04 --> Total execution time: 0.1021
DEBUG - 2022-08-05 06:57:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:57:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:57:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:57:05 --> Total execution time: 0.0815
DEBUG - 2022-08-05 06:57:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:57:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:57:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:57:05 --> Total execution time: 0.1014
DEBUG - 2022-08-05 06:57:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:57:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:57:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:57:06 --> Total execution time: 0.0875
DEBUG - 2022-08-05 06:57:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:57:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:57:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:57:06 --> Total execution time: 0.0793
DEBUG - 2022-08-05 06:57:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:57:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:57:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 11:57:19 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 342
DEBUG - 2022-08-05 11:57:19 --> Total execution time: 0.0661
DEBUG - 2022-08-05 06:57:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:57:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:57:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:57:19 --> Total execution time: 0.0884
DEBUG - 2022-08-05 06:57:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:57:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:57:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:57:19 --> Total execution time: 0.1508
DEBUG - 2022-08-05 06:57:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:57:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:57:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:57:19 --> Total execution time: 0.0878
DEBUG - 2022-08-05 06:59:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:59:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:59:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:59:09 --> Total execution time: 0.2854
DEBUG - 2022-08-05 06:59:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:59:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:59:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:59:09 --> Total execution time: 0.2350
DEBUG - 2022-08-05 06:59:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:59:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:59:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:59:35 --> Total execution time: 0.3126
DEBUG - 2022-08-05 06:59:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 06:59:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 06:59:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:59:35 --> Total execution time: 0.2931
DEBUG - 2022-08-05 07:00:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:00:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:00:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:00:01 --> Total execution time: 0.2668
DEBUG - 2022-08-05 07:00:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:00:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:00:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:00:01 --> Total execution time: 0.2930
DEBUG - 2022-08-05 07:00:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:00:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:00:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:00:05 --> Total execution time: 0.3106
DEBUG - 2022-08-05 07:00:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:00:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:00:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:00:45 --> Total execution time: 0.4924
DEBUG - 2022-08-05 07:00:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:00:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:00:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:00:45 --> Total execution time: 0.2532
DEBUG - 2022-08-05 07:01:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:01:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:01:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:01:02 --> Total execution time: 0.3218
DEBUG - 2022-08-05 07:01:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:01:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:01:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:01:02 --> Total execution time: 0.2072
DEBUG - 2022-08-05 07:01:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:01:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:01:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:01:20 --> Total execution time: 0.2010
DEBUG - 2022-08-05 07:01:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:01:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:01:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:01:21 --> Total execution time: 0.2659
DEBUG - 2022-08-05 07:15:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:15:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:15:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:15:24 --> Total execution time: 0.1676
DEBUG - 2022-08-05 07:15:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:15:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:15:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:15:24 --> Total execution time: 0.1180
DEBUG - 2022-08-05 07:15:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:15:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:15:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 12:15:26 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 342
DEBUG - 2022-08-05 12:15:26 --> Total execution time: 0.0763
DEBUG - 2022-08-05 07:15:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:15:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:15:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:15:26 --> Total execution time: 0.0885
DEBUG - 2022-08-05 07:15:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:15:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:15:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:15:26 --> Total execution time: 0.1046
DEBUG - 2022-08-05 07:15:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:15:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:15:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:15:26 --> Total execution time: 0.0828
DEBUG - 2022-08-05 07:15:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:15:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:15:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:15:58 --> Total execution time: 0.1790
DEBUG - 2022-08-05 07:15:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:15:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:15:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:15:59 --> Total execution time: 0.1915
DEBUG - 2022-08-05 07:36:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:36:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:36:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:36:58 --> Total execution time: 0.9477
DEBUG - 2022-08-05 07:36:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:36:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:36:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:36:58 --> Total execution time: 0.4219
DEBUG - 2022-08-05 07:37:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:37:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:37:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:37:37 --> Total execution time: 0.2352
DEBUG - 2022-08-05 07:37:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:37:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:37:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:37:37 --> Total execution time: 0.1537
DEBUG - 2022-08-05 07:37:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:37:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:37:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:37:49 --> Total execution time: 0.2512
DEBUG - 2022-08-05 07:37:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:37:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:37:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:37:49 --> Total execution time: 0.5398
DEBUG - 2022-08-05 07:37:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:37:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:37:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:37:57 --> Total execution time: 0.2143
DEBUG - 2022-08-05 07:37:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:37:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:37:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:37:58 --> Total execution time: 0.1863
DEBUG - 2022-08-05 07:39:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:39:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:39:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:39:30 --> Total execution time: 0.2320
DEBUG - 2022-08-05 07:39:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:39:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:39:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:39:30 --> Total execution time: 0.1458
DEBUG - 2022-08-05 07:39:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:39:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:39:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:39:49 --> Total execution time: 0.3331
DEBUG - 2022-08-05 07:39:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:39:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:39:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:39:49 --> Total execution time: 0.1624
DEBUG - 2022-08-05 07:40:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:40:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:40:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:40:11 --> Total execution time: 0.2238
DEBUG - 2022-08-05 07:40:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:40:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:40:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:40:12 --> Total execution time: 0.1995
DEBUG - 2022-08-05 07:41:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:41:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:41:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:41:17 --> Total execution time: 0.2593
DEBUG - 2022-08-05 07:41:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:41:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:41:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:41:17 --> Total execution time: 0.1821
DEBUG - 2022-08-05 07:41:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:41:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:41:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:41:36 --> Total execution time: 0.2950
DEBUG - 2022-08-05 07:41:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:41:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:41:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:41:37 --> Total execution time: 0.1703
DEBUG - 2022-08-05 07:49:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:49:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:49:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:49:05 --> Total execution time: 0.2573
DEBUG - 2022-08-05 07:49:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:49:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:49:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:49:05 --> Total execution time: 0.2578
DEBUG - 2022-08-05 07:49:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:49:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:49:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:49:15 --> Total execution time: 0.5728
DEBUG - 2022-08-05 07:49:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:49:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:49:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:49:16 --> Total execution time: 0.3020
DEBUG - 2022-08-05 07:49:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:49:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:49:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:49:41 --> Total execution time: 0.3623
DEBUG - 2022-08-05 07:49:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:49:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:49:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:49:41 --> Total execution time: 0.1913
DEBUG - 2022-08-05 07:55:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:55:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:55:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 07:55:03 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 323
DEBUG - 2022-08-05 07:55:03 --> Total execution time: 0.0865
DEBUG - 2022-08-05 07:55:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:55:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:55:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 07:55:03 --> Total execution time: 0.0943
DEBUG - 2022-08-05 07:55:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:55:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:55:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 07:55:03 --> Total execution time: 0.0676
DEBUG - 2022-08-05 07:55:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:55:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:55:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 07:55:05 --> Total execution time: 0.0765
DEBUG - 2022-08-05 07:55:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:55:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:55:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 07:55:11 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 323
DEBUG - 2022-08-05 07:55:11 --> Total execution time: 0.0598
DEBUG - 2022-08-05 07:55:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:55:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:55:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 07:55:11 --> Total execution time: 0.0624
DEBUG - 2022-08-05 07:55:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:55:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:55:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 07:55:12 --> Total execution time: 0.0593
DEBUG - 2022-08-05 07:58:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:58:45 --> Total execution time: 0.0822
DEBUG - 2022-08-05 07:58:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:58:45 --> Total execution time: 0.0549
DEBUG - 2022-08-05 07:58:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:58:46 --> Total execution time: 0.0578
DEBUG - 2022-08-05 07:58:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:58:46 --> Total execution time: 0.0882
DEBUG - 2022-08-05 07:58:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:58:46 --> Total execution time: 0.0713
DEBUG - 2022-08-05 07:58:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:58:47 --> Total execution time: 0.0633
DEBUG - 2022-08-05 07:58:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:58:47 --> Total execution time: 0.0615
DEBUG - 2022-08-05 07:58:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:58:48 --> Total execution time: 0.0675
DEBUG - 2022-08-05 07:58:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:58:48 --> Total execution time: 0.0653
DEBUG - 2022-08-05 07:58:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:58:49 --> Total execution time: 0.0720
DEBUG - 2022-08-05 07:58:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:58:49 --> Total execution time: 0.0786
DEBUG - 2022-08-05 07:58:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:58:50 --> Total execution time: 0.0727
DEBUG - 2022-08-05 07:58:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:58:50 --> Total execution time: 0.0813
DEBUG - 2022-08-05 07:58:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:58:51 --> Total execution time: 0.0757
DEBUG - 2022-08-05 07:58:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:58:51 --> Total execution time: 0.0910
DEBUG - 2022-08-05 07:58:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:58:51 --> Total execution time: 0.0725
DEBUG - 2022-08-05 07:58:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:58:52 --> Total execution time: 0.0699
DEBUG - 2022-08-05 07:58:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:58:52 --> Total execution time: 0.0836
DEBUG - 2022-08-05 07:58:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:58:52 --> Total execution time: 0.0783
DEBUG - 2022-08-05 07:58:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:58:53 --> Total execution time: 0.0877
DEBUG - 2022-08-05 07:58:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:58:53 --> Total execution time: 0.0819
DEBUG - 2022-08-05 07:58:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:58:54 --> Total execution time: 0.0842
DEBUG - 2022-08-05 07:58:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:58:54 --> Total execution time: 0.0810
DEBUG - 2022-08-05 07:58:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 12:58:56 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 342
DEBUG - 2022-08-05 12:58:56 --> Total execution time: 0.1033
DEBUG - 2022-08-05 07:58:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:58:56 --> Total execution time: 0.1094
DEBUG - 2022-08-05 07:58:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:58:56 --> Total execution time: 0.1557
DEBUG - 2022-08-05 07:58:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 07:58:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 07:58:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:58:56 --> Total execution time: 0.1414
DEBUG - 2022-08-05 08:02:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:02:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:02:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:02:41 --> Total execution time: 0.1365
DEBUG - 2022-08-05 08:02:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:02:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:02:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:02:41 --> Total execution time: 0.0578
DEBUG - 2022-08-05 08:02:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:02:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:02:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:02:49 --> Total execution time: 0.0631
DEBUG - 2022-08-05 08:02:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:02:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:02:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:02:49 --> Total execution time: 0.1097
DEBUG - 2022-08-05 08:02:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:02:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:02:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:02:50 --> Total execution time: 0.0739
DEBUG - 2022-08-05 08:02:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:02:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:02:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:02:50 --> Total execution time: 0.0789
DEBUG - 2022-08-05 08:02:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:02:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:02:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:02:50 --> Total execution time: 0.1678
DEBUG - 2022-08-05 08:02:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:02:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:02:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:02:50 --> Total execution time: 0.1329
DEBUG - 2022-08-05 08:02:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:02:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:02:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:02:51 --> Total execution time: 0.1296
DEBUG - 2022-08-05 08:02:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:02:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:02:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:02:51 --> Total execution time: 0.1825
DEBUG - 2022-08-05 08:02:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:02:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:02:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:02:52 --> Total execution time: 0.1088
DEBUG - 2022-08-05 08:02:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:02:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:02:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:02:52 --> Total execution time: 0.1421
DEBUG - 2022-08-05 08:02:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:02:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:02:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:02:53 --> Total execution time: 0.0922
DEBUG - 2022-08-05 08:02:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:02:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:02:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:02:53 --> Total execution time: 0.1090
DEBUG - 2022-08-05 08:02:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:02:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:02:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:02:54 --> Total execution time: 0.0877
DEBUG - 2022-08-05 08:02:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:02:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:02:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:02:54 --> Total execution time: 0.0825
DEBUG - 2022-08-05 08:02:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:02:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:02:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 08:02:58 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 323
DEBUG - 2022-08-05 08:02:58 --> Total execution time: 0.0638
DEBUG - 2022-08-05 08:02:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:02:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:02:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 08:02:58 --> Total execution time: 0.0796
DEBUG - 2022-08-05 08:03:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 08:03:03 --> Total execution time: 0.0657
DEBUG - 2022-08-05 08:03:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 08:03:09 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 323
DEBUG - 2022-08-05 08:03:09 --> Total execution time: 0.0557
DEBUG - 2022-08-05 08:03:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 08:03:09 --> Total execution time: 0.0631
DEBUG - 2022-08-05 08:03:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 08:03:13 --> Total execution time: 0.0652
DEBUG - 2022-08-05 08:03:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 08:03:13 --> Total execution time: 0.0609
DEBUG - 2022-08-05 08:03:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:18 --> Total execution time: 0.0679
DEBUG - 2022-08-05 08:03:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:19 --> Total execution time: 0.2309
DEBUG - 2022-08-05 08:03:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:19 --> Total execution time: 0.0974
DEBUG - 2022-08-05 08:03:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:19 --> Total execution time: 0.0581
DEBUG - 2022-08-05 08:03:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:19 --> Total execution time: 0.0934
DEBUG - 2022-08-05 08:03:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:19 --> Total execution time: 0.1026
DEBUG - 2022-08-05 08:03:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:20 --> Total execution time: 0.0825
DEBUG - 2022-08-05 08:03:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:20 --> Total execution time: 0.0928
DEBUG - 2022-08-05 08:03:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:21 --> Total execution time: 0.1160
DEBUG - 2022-08-05 08:03:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:21 --> Total execution time: 0.1347
DEBUG - 2022-08-05 08:03:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:22 --> Total execution time: 0.1143
DEBUG - 2022-08-05 08:03:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:22 --> Total execution time: 0.1422
DEBUG - 2022-08-05 08:03:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:24 --> Total execution time: 0.0834
DEBUG - 2022-08-05 08:03:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:24 --> Total execution time: 0.1388
DEBUG - 2022-08-05 08:03:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:24 --> Total execution time: 0.0971
DEBUG - 2022-08-05 08:03:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:24 --> Total execution time: 0.0851
DEBUG - 2022-08-05 08:03:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:26 --> Total execution time: 0.0717
DEBUG - 2022-08-05 08:03:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:26 --> Total execution time: 0.0835
DEBUG - 2022-08-05 08:03:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:26 --> Total execution time: 0.0787
DEBUG - 2022-08-05 08:03:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:26 --> Total execution time: 0.0846
DEBUG - 2022-08-05 08:03:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:27 --> Total execution time: 0.0898
DEBUG - 2022-08-05 08:03:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:27 --> Total execution time: 0.0831
DEBUG - 2022-08-05 08:03:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:31 --> Total execution time: 0.0617
DEBUG - 2022-08-05 08:03:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:31 --> Total execution time: 0.0720
DEBUG - 2022-08-05 08:03:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:31 --> Total execution time: 0.0938
DEBUG - 2022-08-05 08:03:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:31 --> Total execution time: 0.0873
DEBUG - 2022-08-05 08:03:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:31 --> Total execution time: 0.0921
DEBUG - 2022-08-05 08:03:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:31 --> Total execution time: 0.0801
DEBUG - 2022-08-05 08:03:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 13:03:34 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 342
DEBUG - 2022-08-05 13:03:34 --> Total execution time: 0.0611
DEBUG - 2022-08-05 08:03:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:34 --> Total execution time: 0.0712
DEBUG - 2022-08-05 08:03:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:34 --> Total execution time: 0.0946
DEBUG - 2022-08-05 08:03:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:03:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:03:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:03:34 --> Total execution time: 0.1342
DEBUG - 2022-08-05 08:05:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:05:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:05:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:05:51 --> Total execution time: 0.2717
DEBUG - 2022-08-05 08:05:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:05:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:05:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:05:52 --> Total execution time: 0.1562
DEBUG - 2022-08-05 08:06:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:06:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:06:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:06:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:06:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 08:06:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 08:06:54 --> Total execution time: 0.1217
DEBUG - 2022-08-05 08:06:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:06:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:06:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:06:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:06:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 08:06:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 08:06:54 --> Total execution time: 0.0822
DEBUG - 2022-08-05 08:06:54 --> Total execution time: 0.1025
DEBUG - 2022-08-05 08:07:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:19 --> Total execution time: 0.1511
DEBUG - 2022-08-05 08:07:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:19 --> Total execution time: 0.0624
DEBUG - 2022-08-05 08:07:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:26 --> Total execution time: 0.0660
DEBUG - 2022-08-05 08:07:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:26 --> Total execution time: 0.0824
DEBUG - 2022-08-05 08:07:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:27 --> Total execution time: 0.1231
DEBUG - 2022-08-05 08:07:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:27 --> Total execution time: 0.0828
DEBUG - 2022-08-05 08:07:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:27 --> Total execution time: 0.0859
DEBUG - 2022-08-05 08:07:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:27 --> Total execution time: 0.1033
DEBUG - 2022-08-05 08:07:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:28 --> Total execution time: 0.1054
DEBUG - 2022-08-05 08:07:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:28 --> Total execution time: 0.1301
DEBUG - 2022-08-05 08:07:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:36 --> Total execution time: 0.0609
DEBUG - 2022-08-05 08:07:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:36 --> Total execution time: 0.0783
DEBUG - 2022-08-05 08:07:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:37 --> Total execution time: 0.0643
DEBUG - 2022-08-05 08:07:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:37 --> Total execution time: 0.0600
DEBUG - 2022-08-05 08:07:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:37 --> Total execution time: 0.0759
DEBUG - 2022-08-05 08:07:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:37 --> Total execution time: 0.0768
DEBUG - 2022-08-05 08:07:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:40 --> Total execution time: 0.0858
DEBUG - 2022-08-05 08:07:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:41 --> Total execution time: 0.0976
DEBUG - 2022-08-05 08:07:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:41 --> Total execution time: 0.0928
DEBUG - 2022-08-05 08:07:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:41 --> Total execution time: 0.1109
DEBUG - 2022-08-05 08:07:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:42 --> Total execution time: 0.0864
DEBUG - 2022-08-05 08:07:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:42 --> Total execution time: 0.1243
DEBUG - 2022-08-05 08:07:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:42 --> Total execution time: 0.1045
DEBUG - 2022-08-05 08:07:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:42 --> Total execution time: 0.1035
DEBUG - 2022-08-05 08:07:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:43 --> Total execution time: 0.1523
DEBUG - 2022-08-05 08:07:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:44 --> Total execution time: 0.1936
DEBUG - 2022-08-05 08:07:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 13:07:49 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 351
DEBUG - 2022-08-05 13:07:49 --> Total execution time: 0.0814
DEBUG - 2022-08-05 08:07:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:49 --> Total execution time: 0.1114
DEBUG - 2022-08-05 08:07:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:50 --> Total execution time: 0.1900
DEBUG - 2022-08-05 08:07:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:07:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:07:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:07:50 --> Total execution time: 0.0919
DEBUG - 2022-08-05 08:12:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:12:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:12:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:12:48 --> Total execution time: 0.1190
DEBUG - 2022-08-05 08:12:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:12:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:12:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:12:48 --> Total execution time: 0.0570
DEBUG - 2022-08-05 08:13:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:13:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:13:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 08:13:37 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 323
DEBUG - 2022-08-05 08:13:37 --> Total execution time: 0.0632
DEBUG - 2022-08-05 08:13:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:13:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:13:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 08:13:37 --> Total execution time: 0.0667
DEBUG - 2022-08-05 08:13:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:13:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:13:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 08:13:39 --> Total execution time: 0.0597
DEBUG - 2022-08-05 08:13:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:13:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:13:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 08:13:43 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 323
DEBUG - 2022-08-05 08:13:43 --> Total execution time: 0.0580
DEBUG - 2022-08-05 08:13:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:13:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:13:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 08:13:43 --> Total execution time: 0.0678
DEBUG - 2022-08-05 08:13:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:13:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:13:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 08:13:45 --> Total execution time: 0.0568
DEBUG - 2022-08-05 08:13:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:13:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:13:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:13:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:13:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 08:13:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 08:13:49 --> Total execution time: 0.1126
DEBUG - 2022-08-05 08:13:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:13:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:13:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:13:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:13:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 08:13:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 08:13:49 --> Total execution time: 0.0582
DEBUG - 2022-08-05 08:13:49 --> Total execution time: 0.0736
DEBUG - 2022-08-05 08:14:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:14:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:14:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:14:28 --> Total execution time: 0.0663
DEBUG - 2022-08-05 08:14:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:14:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:14:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:14:28 --> Total execution time: 0.0813
DEBUG - 2022-08-05 08:14:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:14:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:14:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:14:28 --> Total execution time: 0.0685
DEBUG - 2022-08-05 08:14:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:14:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:14:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:14:28 --> Total execution time: 0.0594
DEBUG - 2022-08-05 08:14:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:14:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:14:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:14:29 --> Total execution time: 0.0731
DEBUG - 2022-08-05 08:14:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:14:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:14:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:14:29 --> Total execution time: 0.0693
DEBUG - 2022-08-05 08:14:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:14:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:14:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:14:29 --> Total execution time: 0.0819
DEBUG - 2022-08-05 08:14:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:14:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:14:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:14:30 --> Total execution time: 0.0765
DEBUG - 2022-08-05 08:14:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:14:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:14:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:14:30 --> Total execution time: 0.0886
DEBUG - 2022-08-05 08:14:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:14:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:14:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:14:30 --> Total execution time: 0.1017
DEBUG - 2022-08-05 08:14:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:14:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:14:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:14:31 --> Total execution time: 0.0903
DEBUG - 2022-08-05 08:14:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:14:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:14:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:14:31 --> Total execution time: 0.0905
DEBUG - 2022-08-05 08:14:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:14:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:14:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:14:32 --> Total execution time: 0.0960
DEBUG - 2022-08-05 08:14:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:14:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:14:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:14:32 --> Total execution time: 0.1082
DEBUG - 2022-08-05 08:24:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:24:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:24:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:24:07 --> Total execution time: 0.0601
DEBUG - 2022-08-05 08:24:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:24:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:24:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:24:07 --> Total execution time: 0.0985
DEBUG - 2022-08-05 08:24:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:24:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:24:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:24:07 --> Total execution time: 0.0717
DEBUG - 2022-08-05 08:24:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:24:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:24:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:24:07 --> Total execution time: 0.0689
DEBUG - 2022-08-05 08:24:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:24:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:24:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:24:08 --> Total execution time: 0.0710
DEBUG - 2022-08-05 08:24:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:24:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:24:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:24:08 --> Total execution time: 0.0737
DEBUG - 2022-08-05 08:24:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:24:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:24:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:24:08 --> Total execution time: 0.0714
DEBUG - 2022-08-05 08:24:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:24:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:24:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:24:08 --> Total execution time: 0.0812
DEBUG - 2022-08-05 08:24:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:24:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:24:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:24:09 --> Total execution time: 0.0696
DEBUG - 2022-08-05 08:24:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:24:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:24:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:24:09 --> Total execution time: 0.0880
DEBUG - 2022-08-05 08:24:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:24:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:24:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:24:10 --> Total execution time: 0.0657
DEBUG - 2022-08-05 08:24:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:24:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:24:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:24:10 --> Total execution time: 0.0910
DEBUG - 2022-08-05 08:35:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:35:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:35:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:35:50 --> Total execution time: 0.0636
DEBUG - 2022-08-05 08:35:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:35:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:35:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:35:51 --> Total execution time: 0.0783
DEBUG - 2022-08-05 08:35:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:35:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:35:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:35:51 --> Total execution time: 0.0717
DEBUG - 2022-08-05 08:35:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:35:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:35:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:35:51 --> Total execution time: 0.0549
DEBUG - 2022-08-05 08:36:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:36:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:36:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:36:11 --> Total execution time: 0.0559
DEBUG - 2022-08-05 08:36:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:36:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:36:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:36:11 --> Total execution time: 0.0656
DEBUG - 2022-08-05 08:36:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:36:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:36:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:36:11 --> Total execution time: 0.0691
DEBUG - 2022-08-05 08:36:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:36:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:36:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:36:11 --> Total execution time: 0.0700
DEBUG - 2022-08-05 08:36:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:36:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:36:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:36:12 --> Total execution time: 0.0645
DEBUG - 2022-08-05 08:36:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:36:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:36:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:36:12 --> Total execution time: 0.0730
DEBUG - 2022-08-05 08:36:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:36:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:36:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:36:13 --> Total execution time: 0.0643
DEBUG - 2022-08-05 08:36:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:36:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:36:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:36:13 --> Total execution time: 0.0876
DEBUG - 2022-08-05 08:36:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:36:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:36:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:36:16 --> Total execution time: 0.0650
DEBUG - 2022-08-05 08:36:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:36:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:36:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:36:16 --> Total execution time: 0.0985
DEBUG - 2022-08-05 08:36:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:36:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:36:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:36:17 --> Total execution time: 0.0934
DEBUG - 2022-08-05 08:36:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:36:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:36:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:36:17 --> Total execution time: 0.0538
DEBUG - 2022-08-05 08:36:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:36:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:36:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:36:19 --> Total execution time: 0.0851
DEBUG - 2022-08-05 08:36:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:36:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:36:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:36:20 --> Total execution time: 0.0853
DEBUG - 2022-08-05 08:36:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:36:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:36:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:36:23 --> Total execution time: 0.0566
DEBUG - 2022-08-05 08:36:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:36:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:36:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:36:23 --> Total execution time: 0.0568
DEBUG - 2022-08-05 08:36:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:36:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:36:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:36:23 --> Total execution time: 0.0699
DEBUG - 2022-08-05 08:36:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:36:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:36:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:36:23 --> Total execution time: 0.1002
DEBUG - 2022-08-05 08:43:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:43:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:43:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 13:43:20 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 342
DEBUG - 2022-08-05 13:43:20 --> Total execution time: 0.0773
DEBUG - 2022-08-05 08:43:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:43:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:43:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:43:20 --> Total execution time: 0.0801
DEBUG - 2022-08-05 08:43:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:43:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:43:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:43:20 --> Total execution time: 0.1179
DEBUG - 2022-08-05 08:43:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:43:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:43:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:43:20 --> Total execution time: 0.0591
DEBUG - 2022-08-05 08:48:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:48:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:48:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:48:54 --> Total execution time: 0.1673
DEBUG - 2022-08-05 08:48:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 08:48:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 08:48:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 13:48:55 --> Total execution time: 0.0711
DEBUG - 2022-08-05 09:00:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:00:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:00:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 14:00:40 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 355
DEBUG - 2022-08-05 14:00:40 --> Total execution time: 0.0778
DEBUG - 2022-08-05 09:00:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:00:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:00:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:00:40 --> Total execution time: 0.0828
DEBUG - 2022-08-05 09:00:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:00:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:00:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:00:40 --> Total execution time: 0.0956
DEBUG - 2022-08-05 09:00:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:00:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:00:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:00:40 --> Total execution time: 0.0586
DEBUG - 2022-08-05 09:00:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:00:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:00:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:00:48 --> Total execution time: 0.1292
DEBUG - 2022-08-05 09:00:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:00:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:00:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:00:48 --> Total execution time: 0.0653
DEBUG - 2022-08-05 09:00:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:00:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:00:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 14:00:56 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 355
DEBUG - 2022-08-05 14:00:56 --> Total execution time: 0.0586
DEBUG - 2022-08-05 09:00:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:00:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:00:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:00:56 --> Total execution time: 0.0597
DEBUG - 2022-08-05 09:00:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:00:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:00:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:00:56 --> Total execution time: 0.0672
DEBUG - 2022-08-05 09:00:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:00:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:00:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:00:56 --> Total execution time: 0.1339
DEBUG - 2022-08-05 09:01:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:01:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:01:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:01:45 --> Total execution time: 0.1389
DEBUG - 2022-08-05 09:01:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:01:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:01:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:01:45 --> Total execution time: 0.0707
DEBUG - 2022-08-05 09:01:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:01:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:01:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 14:01:54 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 353
DEBUG - 2022-08-05 14:01:54 --> Total execution time: 0.0642
DEBUG - 2022-08-05 09:01:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:01:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:01:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:01:54 --> Total execution time: 0.0916
DEBUG - 2022-08-05 09:01:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:01:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:01:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:01:55 --> Total execution time: 0.0829
DEBUG - 2022-08-05 09:01:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:01:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:01:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:01:55 --> Total execution time: 0.0590
DEBUG - 2022-08-05 09:03:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:03:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:03:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:03:48 --> Total execution time: 0.1541
DEBUG - 2022-08-05 09:03:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:03:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:03:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:03:48 --> Total execution time: 0.0677
DEBUG - 2022-08-05 09:04:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:04:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:04:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:04:00 --> Total execution time: 0.0598
DEBUG - 2022-08-05 09:04:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:04:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:04:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:04:00 --> Total execution time: 0.0720
DEBUG - 2022-08-05 09:04:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:04:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:04:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:04:00 --> Total execution time: 0.0730
DEBUG - 2022-08-05 09:04:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:04:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:04:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:04:00 --> Total execution time: 0.0525
DEBUG - 2022-08-05 09:04:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:04:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:04:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 14:04:06 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 355
DEBUG - 2022-08-05 14:04:06 --> Total execution time: 0.1225
DEBUG - 2022-08-05 09:04:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:04:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:04:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:04:06 --> Total execution time: 0.1441
DEBUG - 2022-08-05 09:04:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:04:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:04:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:04:07 --> Total execution time: 0.1516
DEBUG - 2022-08-05 09:04:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:04:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:04:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:04:07 --> Total execution time: 0.1290
DEBUG - 2022-08-05 09:08:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:08:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:08:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:08:42 --> Total execution time: 0.1870
DEBUG - 2022-08-05 09:08:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:08:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:08:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:08:42 --> Total execution time: 0.1266
DEBUG - 2022-08-05 09:08:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:08:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:08:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 14:08:44 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 355
DEBUG - 2022-08-05 14:08:44 --> Total execution time: 0.0845
DEBUG - 2022-08-05 09:08:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:08:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:08:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:08:44 --> Total execution time: 0.1102
DEBUG - 2022-08-05 09:08:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:08:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:08:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:08:44 --> Total execution time: 0.1408
DEBUG - 2022-08-05 09:08:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:08:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:08:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:08:44 --> Total execution time: 0.1334
DEBUG - 2022-08-05 09:09:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:09:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:09:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:09:23 --> Total execution time: 0.2614
DEBUG - 2022-08-05 09:09:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:09:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:09:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:09:23 --> Total execution time: 0.1120
DEBUG - 2022-08-05 09:09:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:09:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:09:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 14:09:26 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 346
DEBUG - 2022-08-05 14:09:26 --> Total execution time: 0.0691
DEBUG - 2022-08-05 09:09:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:09:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:09:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 14:09:26 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Incorrect syntax near '='. - Invalid query: SELECT * from cso1_kioskCartFreeItem
            wherekioskUuid = '62ebe9ddca73e' 
DEBUG - 2022-08-05 09:10:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:10:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:10:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:10:24 --> Total execution time: 0.3162
DEBUG - 2022-08-05 09:10:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:10:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:10:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:10:24 --> Total execution time: 0.2096
DEBUG - 2022-08-05 09:10:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:10:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:10:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 14:10:26 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 346
DEBUG - 2022-08-05 14:10:26 --> Total execution time: 0.1511
DEBUG - 2022-08-05 09:10:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:10:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:10:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:10:26 --> Total execution time: 0.4494
DEBUG - 2022-08-05 09:10:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:10:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:10:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:10:27 --> Total execution time: 0.2329
DEBUG - 2022-08-05 09:10:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:10:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:10:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:10:27 --> Total execution time: 0.1578
DEBUG - 2022-08-05 09:12:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:12:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:12:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:12:03 --> Total execution time: 0.1580
DEBUG - 2022-08-05 09:12:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:12:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:12:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:12:03 --> Total execution time: 0.1037
DEBUG - 2022-08-05 09:12:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:12:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:12:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:12:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:12:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 09:12:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:12:05 --> Total execution time: 0.1436
DEBUG - 2022-08-05 14:12:05 --> Total execution time: 0.1554
DEBUG - 2022-08-05 09:12:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:12:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:12:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:12:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:12:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 09:12:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:12:05 --> Total execution time: 0.1198
DEBUG - 2022-08-05 14:12:05 --> Total execution time: 0.1220
DEBUG - 2022-08-05 09:12:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:12:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:12:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:12:06 --> Total execution time: 0.1600
DEBUG - 2022-08-05 09:12:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:12:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:12:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:12:07 --> Total execution time: 0.2668
DEBUG - 2022-08-05 09:12:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:12:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:12:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 14:12:09 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 346
DEBUG - 2022-08-05 14:12:09 --> Total execution time: 0.1217
DEBUG - 2022-08-05 09:12:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:12:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:12:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:12:09 --> Total execution time: 0.1293
DEBUG - 2022-08-05 09:12:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:12:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:12:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:12:09 --> Total execution time: 0.1098
DEBUG - 2022-08-05 09:12:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:12:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:12:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:12:09 --> Total execution time: 0.1117
DEBUG - 2022-08-05 09:12:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:12:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:12:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:12:38 --> Total execution time: 0.5727
DEBUG - 2022-08-05 09:12:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:12:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:12:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:12:38 --> Total execution time: 0.1636
DEBUG - 2022-08-05 09:12:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:12:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:12:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 14:12:39 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 346
DEBUG - 2022-08-05 14:12:39 --> Total execution time: 0.1075
DEBUG - 2022-08-05 09:12:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:12:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:12:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 14:12:39 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Incorrect syntax near 'scanFree'. - Invalid query: SELECT * from cso1_kioskCartFreeItem
            where presence = 1  scanFree = 0 and  kioskUuid = '62ebe9ddca73e' 
DEBUG - 2022-08-05 09:32:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:32:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:32:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 14:32:09 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskLogin.php 52
DEBUG - 2022-08-05 14:32:09 --> Total execution time: 0.0929
DEBUG - 2022-08-05 09:32:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:32:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:32:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:32:09 --> Total execution time: 0.0845
DEBUG - 2022-08-05 09:32:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:32:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:32:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:32:10 --> Total execution time: 0.1049
DEBUG - 2022-08-05 09:32:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:32:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:32:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:32:10 --> Total execution time: 0.0566
DEBUG - 2022-08-05 09:32:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:32:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:32:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:32:18 --> Total execution time: 0.1203
DEBUG - 2022-08-05 09:32:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:32:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:32:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:32:19 --> Total execution time: 0.0647
DEBUG - 2022-08-05 09:33:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:33:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:33:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 14:33:22 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 346
DEBUG - 2022-08-05 14:33:22 --> Total execution time: 0.0618
DEBUG - 2022-08-05 09:33:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:33:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:33:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:33:22 --> Total execution time: 0.0900
DEBUG - 2022-08-05 09:33:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:33:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:33:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:33:22 --> Total execution time: 0.0819
DEBUG - 2022-08-05 09:33:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:33:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:33:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:33:22 --> Total execution time: 0.0902
DEBUG - 2022-08-05 09:42:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:42:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:42:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:42:14 --> Total execution time: 0.1955
DEBUG - 2022-08-05 09:42:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:42:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:42:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:42:14 --> Total execution time: 0.0736
DEBUG - 2022-08-05 09:42:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:42:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:42:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 14:42:16 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 355
DEBUG - 2022-08-05 14:42:16 --> Total execution time: 0.0616
DEBUG - 2022-08-05 09:42:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:42:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:42:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:42:16 --> Total execution time: 0.1057
DEBUG - 2022-08-05 09:42:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:42:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:42:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:42:16 --> Total execution time: 0.1168
DEBUG - 2022-08-05 09:42:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:42:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:42:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:42:17 --> Total execution time: 0.0863
DEBUG - 2022-08-05 09:43:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:43:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:43:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:43:07 --> Total execution time: 0.1440
DEBUG - 2022-08-05 09:43:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:43:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:43:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:43:07 --> Total execution time: 0.0677
DEBUG - 2022-08-05 09:43:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:43:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:43:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 14:43:09 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 355
DEBUG - 2022-08-05 14:43:09 --> Total execution time: 0.0638
DEBUG - 2022-08-05 09:43:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:43:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:43:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:43:09 --> Total execution time: 0.1017
DEBUG - 2022-08-05 09:43:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:43:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:43:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:43:09 --> Total execution time: 0.0791
DEBUG - 2022-08-05 09:43:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:43:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:43:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:43:09 --> Total execution time: 0.0599
DEBUG - 2022-08-05 09:43:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:43:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:43:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:43:33 --> Total execution time: 0.1563
DEBUG - 2022-08-05 09:43:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:43:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:43:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:43:33 --> Total execution time: 0.0657
DEBUG - 2022-08-05 09:43:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:43:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:43:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:43:36 --> Total execution time: 0.0533
DEBUG - 2022-08-05 09:43:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:43:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:43:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:43:36 --> Total execution time: 0.0586
DEBUG - 2022-08-05 09:43:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:43:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:43:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:43:36 --> Total execution time: 0.1192
DEBUG - 2022-08-05 09:43:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:43:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:43:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 14:43:43 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 355
DEBUG - 2022-08-05 14:43:43 --> Total execution time: 0.0642
DEBUG - 2022-08-05 09:43:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:43:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:43:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:43:43 --> Total execution time: 0.0733
DEBUG - 2022-08-05 09:43:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:43:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:43:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:43:43 --> Total execution time: 0.0842
DEBUG - 2022-08-05 09:43:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:43:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:43:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:43:43 --> Total execution time: 0.0714
DEBUG - 2022-08-05 09:55:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:55:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:55:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:55:16 --> Total execution time: 0.1136
DEBUG - 2022-08-05 09:55:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:55:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:55:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:55:16 --> Total execution time: 0.0597
DEBUG - 2022-08-05 09:55:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:55:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:55:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:55:24 --> Total execution time: 0.0567
DEBUG - 2022-08-05 09:55:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:55:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:55:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:55:24 --> Total execution time: 0.0826
DEBUG - 2022-08-05 09:55:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:55:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:55:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:55:24 --> Total execution time: 0.0900
DEBUG - 2022-08-05 09:55:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:55:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:55:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:55:24 --> Total execution time: 0.0559
DEBUG - 2022-08-05 09:55:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:55:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:55:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:55:25 --> Total execution time: 0.0717
DEBUG - 2022-08-05 09:55:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:55:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:55:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:55:25 --> Total execution time: 0.0918
DEBUG - 2022-08-05 09:55:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:55:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:55:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:55:26 --> Total execution time: 0.0747
DEBUG - 2022-08-05 09:55:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:55:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:55:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:55:26 --> Total execution time: 0.0884
DEBUG - 2022-08-05 09:55:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:55:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:55:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:55:26 --> Total execution time: 0.0714
DEBUG - 2022-08-05 09:55:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:55:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:55:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:55:26 --> Total execution time: 0.0644
DEBUG - 2022-08-05 09:55:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:55:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:55:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:55:27 --> Total execution time: 0.0665
DEBUG - 2022-08-05 09:55:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:55:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:55:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:55:27 --> Total execution time: 0.0977
DEBUG - 2022-08-05 09:55:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:55:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:55:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 14:55:35 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 355
DEBUG - 2022-08-05 14:55:35 --> Total execution time: 0.0593
DEBUG - 2022-08-05 09:55:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:55:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:55:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 14:55:35 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Incorrect syntax near '='. - Invalid query: SELECT price FROM cso1_kioskCart WHERE id =  
DEBUG - 2022-08-05 09:56:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:56:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:56:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 14:56:30 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 355
DEBUG - 2022-08-05 14:56:30 --> Total execution time: 0.0604
DEBUG - 2022-08-05 09:56:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:56:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:56:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 14:56:30 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Incorrect syntax near '='. - Invalid query: SELECT price FROM cso1_kioskCart WHERE id =  
DEBUG - 2022-08-05 09:57:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:57:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:57:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 14:57:05 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 355
DEBUG - 2022-08-05 14:57:05 --> Total execution time: 0.0844
DEBUG - 2022-08-05 09:57:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:57:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:57:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 14:57:05 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'id2'. - Invalid query: SELECT id2 FROM cso1_kioskCart WHERE isFreeItem = 0  AND presence = 1 and void = 0 and kioskUuid = '62ebe9ddca73e' and itemId = '0067499' 
DEBUG - 2022-08-05 09:58:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:58:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:58:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:58:52 --> Total execution time: 0.0558
DEBUG - 2022-08-05 09:58:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:58:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:58:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:58:52 --> Total execution time: 0.1362
DEBUG - 2022-08-05 09:58:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:58:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:58:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:58:52 --> Total execution time: 0.0792
DEBUG - 2022-08-05 09:58:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:58:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:58:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:58:52 --> Total execution time: 0.0747
DEBUG - 2022-08-05 09:58:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:58:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:58:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:58:53 --> Total execution time: 0.0811
DEBUG - 2022-08-05 09:58:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:58:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:58:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:58:53 --> Total execution time: 0.1156
DEBUG - 2022-08-05 09:58:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:58:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:58:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:58:53 --> Total execution time: 0.0909
DEBUG - 2022-08-05 09:58:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:58:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:58:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:58:54 --> Total execution time: 0.1280
DEBUG - 2022-08-05 09:58:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:58:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:58:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:58:54 --> Total execution time: 0.0901
DEBUG - 2022-08-05 09:58:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:58:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:58:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:58:54 --> Total execution time: 0.1073
DEBUG - 2022-08-05 09:58:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:58:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:58:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:58:57 --> Total execution time: 0.0882
DEBUG - 2022-08-05 09:58:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:58:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:58:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:58:57 --> Total execution time: 0.0811
DEBUG - 2022-08-05 09:59:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:59:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:59:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 14:59:03 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 355
DEBUG - 2022-08-05 14:59:03 --> Total execution time: 0.0622
DEBUG - 2022-08-05 09:59:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:59:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:59:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 14:59:03 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'id2'. - Invalid query: SELECT id2 FROM cso1_kioskCart WHERE isFreeItem = 0  AND presence = 1 and void = 0 and kioskUuid = '62ebe9ddca73e' and itemId = '0067499' 
DEBUG - 2022-08-05 09:59:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:59:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:59:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:59:45 --> Total execution time: 0.1117
DEBUG - 2022-08-05 09:59:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:59:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:59:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 14:59:45 --> Total execution time: 0.1032
DEBUG - 2022-08-05 09:59:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:59:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:59:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 14:59:47 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 358
DEBUG - 2022-08-05 14:59:47 --> Total execution time: 0.0737
DEBUG - 2022-08-05 09:59:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 09:59:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 09:59:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 14:59:47 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'id2'. - Invalid query: SELECT id2 FROM cso1_kioskCart WHERE isFreeItem = 0  AND presence = 1 and void = 0 and kioskUuid = '62ebe9ddca73e' and itemId = '0067499' 
DEBUG - 2022-08-05 10:00:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:00:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:00:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 15:00:05 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 358
DEBUG - 2022-08-05 15:00:05 --> Total execution time: 0.0705
DEBUG - 2022-08-05 10:00:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:00:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:00:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:00:05 --> Total execution time: 0.0793
DEBUG - 2022-08-05 10:00:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:00:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:00:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:00:05 --> Total execution time: 0.0929
DEBUG - 2022-08-05 10:00:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:00:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:00:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:00:05 --> Total execution time: 0.0776
DEBUG - 2022-08-05 10:00:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:00:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:00:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:00:07 --> Total execution time: 0.1082
DEBUG - 2022-08-05 10:00:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:00:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:00:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:00:07 --> Total execution time: 0.0584
DEBUG - 2022-08-05 10:00:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:00:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:00:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 15:00:11 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 358
DEBUG - 2022-08-05 15:00:11 --> Total execution time: 0.0701
DEBUG - 2022-08-05 10:00:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:00:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:00:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:00:11 --> Total execution time: 0.0658
DEBUG - 2022-08-05 10:00:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:00:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:00:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:00:11 --> Total execution time: 0.0669
DEBUG - 2022-08-05 10:00:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:00:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:00:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:00:11 --> Total execution time: 0.0757
DEBUG - 2022-08-05 10:00:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:00:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:00:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:00:29 --> Total execution time: 0.1194
DEBUG - 2022-08-05 10:00:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:00:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:00:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:00:29 --> Total execution time: 0.0595
DEBUG - 2022-08-05 10:00:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:00:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:00:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:00:30 --> Total execution time: 0.0625
DEBUG - 2022-08-05 10:00:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:00:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:00:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:00:30 --> Total execution time: 0.0989
DEBUG - 2022-08-05 10:00:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:00:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:00:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:00:30 --> Total execution time: 0.0801
DEBUG - 2022-08-05 10:00:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:00:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:00:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:00:31 --> Total execution time: 0.0738
DEBUG - 2022-08-05 10:00:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:00:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:00:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:00:31 --> Total execution time: 0.0722
DEBUG - 2022-08-05 10:00:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:00:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:00:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 15:00:34 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 358
DEBUG - 2022-08-05 15:00:34 --> Total execution time: 0.0716
DEBUG - 2022-08-05 10:00:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:00:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:00:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:00:34 --> Total execution time: 0.0784
DEBUG - 2022-08-05 10:00:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:00:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:00:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:00:34 --> Total execution time: 0.0833
DEBUG - 2022-08-05 10:00:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:00:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:00:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:00:34 --> Total execution time: 0.0749
DEBUG - 2022-08-05 10:01:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:01:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:01:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:01:26 --> Total execution time: 0.2040
DEBUG - 2022-08-05 10:01:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:01:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:01:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:01:26 --> Total execution time: 0.1435
DEBUG - 2022-08-05 10:01:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:01:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:01:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:01:30 --> Total execution time: 0.1316
DEBUG - 2022-08-05 10:01:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:01:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:01:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:01:30 --> Total execution time: 0.0579
DEBUG - 2022-08-05 10:01:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:01:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:01:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:01:35 --> Total execution time: 0.1014
DEBUG - 2022-08-05 10:01:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:01:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:01:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:01:35 --> Total execution time: 0.1680
DEBUG - 2022-08-05 10:01:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:01:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:01:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:01:35 --> Total execution time: 0.1110
DEBUG - 2022-08-05 10:01:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:01:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:01:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:01:36 --> Total execution time: 0.0993
DEBUG - 2022-08-05 10:01:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:01:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:01:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 15:01:38 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 358
DEBUG - 2022-08-05 15:01:38 --> Total execution time: 0.0763
DEBUG - 2022-08-05 10:01:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:01:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:01:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:01:38 --> Total execution time: 0.0839
DEBUG - 2022-08-05 10:01:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:01:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:01:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:01:38 --> Total execution time: 0.1912
DEBUG - 2022-08-05 10:01:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:01:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:01:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:01:38 --> Total execution time: 0.1097
DEBUG - 2022-08-05 10:01:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:01:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:01:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:01:51 --> Total execution time: 0.1300
DEBUG - 2022-08-05 10:01:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:01:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:01:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:01:51 --> Total execution time: 0.0756
DEBUG - 2022-08-05 10:01:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:01:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:01:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:01:51 --> Total execution time: 0.0941
DEBUG - 2022-08-05 10:01:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:01:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:01:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:01:52 --> Total execution time: 0.1098
DEBUG - 2022-08-05 10:01:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:01:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:01:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:01:52 --> Total execution time: 0.0899
DEBUG - 2022-08-05 10:01:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:01:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:01:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:01:52 --> Total execution time: 0.0904
DEBUG - 2022-08-05 10:01:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:01:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:01:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:01:52 --> Total execution time: 0.1200
DEBUG - 2022-08-05 10:01:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:01:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:01:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:01:54 --> Total execution time: 0.0653
DEBUG - 2022-08-05 10:01:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:01:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:01:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:01:54 --> Total execution time: 0.0680
DEBUG - 2022-08-05 10:01:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:01:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:01:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:01:58 --> Total execution time: 0.0583
DEBUG - 2022-08-05 10:01:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:01:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:01:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:01:58 --> Total execution time: 0.0730
DEBUG - 2022-08-05 10:01:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:01:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:01:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:01:58 --> Total execution time: 0.0673
DEBUG - 2022-08-05 10:01:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:01:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:01:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:01:58 --> Total execution time: 0.0659
DEBUG - 2022-08-05 10:02:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 15:02:00 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 358
DEBUG - 2022-08-05 15:02:00 --> Total execution time: 0.0732
DEBUG - 2022-08-05 10:02:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:00 --> Total execution time: 0.0892
DEBUG - 2022-08-05 10:02:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:00 --> Total execution time: 0.0856
DEBUG - 2022-08-05 10:02:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:00 --> Total execution time: 0.0889
DEBUG - 2022-08-05 10:02:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:05 --> Total execution time: 0.1701
DEBUG - 2022-08-05 10:02:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:05 --> Total execution time: 0.0778
DEBUG - 2022-08-05 10:02:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:06 --> Total execution time: 0.0943
DEBUG - 2022-08-05 10:02:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:06 --> Total execution time: 0.1813
DEBUG - 2022-08-05 10:02:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:06 --> Total execution time: 0.1424
DEBUG - 2022-08-05 10:02:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:07 --> Total execution time: 0.1340
DEBUG - 2022-08-05 10:02:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:07 --> Total execution time: 0.1279
DEBUG - 2022-08-05 10:02:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:08 --> Total execution time: 0.1184
DEBUG - 2022-08-05 10:02:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:08 --> Total execution time: 0.0947
DEBUG - 2022-08-05 10:02:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:09 --> Total execution time: 0.0887
DEBUG - 2022-08-05 10:02:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:09 --> Total execution time: 0.0858
DEBUG - 2022-08-05 10:02:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:11 --> Total execution time: 0.0793
DEBUG - 2022-08-05 10:02:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:11 --> Total execution time: 0.0793
DEBUG - 2022-08-05 10:02:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:11 --> Total execution time: 0.0722
DEBUG - 2022-08-05 10:02:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 15:02:13 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 358
DEBUG - 2022-08-05 15:02:13 --> Total execution time: 0.0610
DEBUG - 2022-08-05 10:02:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:13 --> Total execution time: 0.0775
DEBUG - 2022-08-05 10:02:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:13 --> Total execution time: 0.0891
DEBUG - 2022-08-05 10:02:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:13 --> Total execution time: 0.0868
DEBUG - 2022-08-05 10:02:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:35 --> Total execution time: 0.2103
DEBUG - 2022-08-05 10:02:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:35 --> Total execution time: 0.0609
DEBUG - 2022-08-05 10:02:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 10:02:47 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 323
DEBUG - 2022-08-05 10:02:47 --> Total execution time: 0.0851
DEBUG - 2022-08-05 10:02:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:02:48 --> Total execution time: 0.0935
DEBUG - 2022-08-05 10:02:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:02:48 --> Total execution time: 0.0658
DEBUG - 2022-08-05 10:02:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:51 --> Total execution time: 0.1113
DEBUG - 2022-08-05 10:02:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:51 --> Total execution time: 0.1255
DEBUG - 2022-08-05 10:02:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:51 --> Total execution time: 0.0918
DEBUG - 2022-08-05 10:02:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:52 --> Total execution time: 0.0918
DEBUG - 2022-08-05 10:02:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:52 --> Total execution time: 0.0841
DEBUG - 2022-08-05 10:02:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:52 --> Total execution time: 0.0954
DEBUG - 2022-08-05 10:02:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:53 --> Total execution time: 0.0866
DEBUG - 2022-08-05 10:02:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:53 --> Total execution time: 0.1115
DEBUG - 2022-08-05 10:02:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:54 --> Total execution time: 0.0975
DEBUG - 2022-08-05 10:02:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:54 --> Total execution time: 0.1040
DEBUG - 2022-08-05 10:02:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:56 --> Total execution time: 0.0580
DEBUG - 2022-08-05 10:02:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:57 --> Total execution time: 0.0776
DEBUG - 2022-08-05 10:02:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:57 --> Total execution time: 0.0715
DEBUG - 2022-08-05 10:02:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:57 --> Total execution time: 0.0693
DEBUG - 2022-08-05 10:02:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 15:02:59 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 358
DEBUG - 2022-08-05 15:02:59 --> Total execution time: 0.0678
DEBUG - 2022-08-05 10:02:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:59 --> Total execution time: 0.0826
DEBUG - 2022-08-05 10:02:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:59 --> Total execution time: 0.1180
DEBUG - 2022-08-05 10:02:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:02:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:02:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:02:59 --> Total execution time: 0.0867
DEBUG - 2022-08-05 10:03:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:02 --> Total execution time: 0.1220
DEBUG - 2022-08-05 10:03:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:02 --> Total execution time: 0.0659
DEBUG - 2022-08-05 10:03:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:14 --> Total execution time: 0.0703
DEBUG - 2022-08-05 10:03:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:14 --> Total execution time: 0.0813
DEBUG - 2022-08-05 10:03:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:14 --> Total execution time: 0.2084
DEBUG - 2022-08-05 10:03:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:14 --> Total execution time: 0.1171
DEBUG - 2022-08-05 10:03:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:15 --> Total execution time: 0.0948
DEBUG - 2022-08-05 10:03:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:16 --> Total execution time: 0.0984
DEBUG - 2022-08-05 10:03:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:16 --> Total execution time: 0.1081
DEBUG - 2022-08-05 10:03:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:16 --> Total execution time: 0.1389
DEBUG - 2022-08-05 10:03:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:16 --> Total execution time: 0.1301
DEBUG - 2022-08-05 10:03:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:16 --> Total execution time: 0.1097
DEBUG - 2022-08-05 10:03:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:17 --> Total execution time: 0.3566
DEBUG - 2022-08-05 10:03:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:03:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:03:17 --> Total execution time: 0.3282
DEBUG - 2022-08-05 10:03:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:17 --> Total execution time: 0.3304
DEBUG - 2022-08-05 10:03:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:03:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:03:17 --> Total execution time: 0.3136
DEBUG - 2022-08-05 10:03:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:18 --> Total execution time: 0.2310
DEBUG - 2022-08-05 10:03:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:18 --> Total execution time: 0.2923
DEBUG - 2022-08-05 10:03:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:03:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:18 --> Total execution time: 0.4332
DEBUG - 2022-08-05 10:03:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:03:18 --> Total execution time: 0.4539
DEBUG - 2022-08-05 10:03:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:03:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:19 --> Total execution time: 0.4012
DEBUG - 2022-08-05 15:03:19 --> Total execution time: 0.3694
DEBUG - 2022-08-05 10:03:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:03:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:03:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:03:19 --> Total execution time: 0.4128
DEBUG - 2022-08-05 15:03:19 --> Total execution time: 0.4272
DEBUG - 2022-08-05 10:03:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:19 --> Total execution time: 0.4176
DEBUG - 2022-08-05 10:03:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:03:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:03:20 --> Total execution time: 0.4542
DEBUG - 2022-08-05 10:03:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:03:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:03:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:03:20 --> Total execution time: 0.2610
DEBUG - 2022-08-05 10:03:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:03:20 --> Total execution time: 0.3259
DEBUG - 2022-08-05 10:03:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:03:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:03:20 --> Total execution time: 0.3282
DEBUG - 2022-08-05 10:03:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:03:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:03:20 --> Total execution time: 0.3823
DEBUG - 2022-08-05 10:03:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:20 --> Total execution time: 0.3342
DEBUG - 2022-08-05 10:03:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:20 --> Total execution time: 0.3393
DEBUG - 2022-08-05 10:03:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:21 --> Total execution time: 0.4877
DEBUG - 2022-08-05 10:03:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:21 --> Total execution time: 0.3285
DEBUG - 2022-08-05 10:03:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:22 --> Total execution time: 0.3422
DEBUG - 2022-08-05 10:03:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:44 --> Total execution time: 0.0541
DEBUG - 2022-08-05 10:03:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:44 --> Total execution time: 0.0797
DEBUG - 2022-08-05 10:03:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:44 --> Total execution time: 0.0810
DEBUG - 2022-08-05 10:03:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:44 --> Total execution time: 0.0600
DEBUG - 2022-08-05 10:03:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:46 --> Total execution time: 0.0724
DEBUG - 2022-08-05 10:03:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:46 --> Total execution time: 0.0990
DEBUG - 2022-08-05 10:03:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:47 --> Total execution time: 0.0930
DEBUG - 2022-08-05 10:03:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:47 --> Total execution time: 0.1216
DEBUG - 2022-08-05 10:03:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:48 --> Total execution time: 0.0970
DEBUG - 2022-08-05 10:03:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:48 --> Total execution time: 0.1724
DEBUG - 2022-08-05 10:03:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:48 --> Total execution time: 0.1138
DEBUG - 2022-08-05 10:03:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:48 --> Total execution time: 0.1321
DEBUG - 2022-08-05 10:03:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:49 --> Total execution time: 0.1316
DEBUG - 2022-08-05 10:03:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:49 --> Total execution time: 0.1472
DEBUG - 2022-08-05 10:03:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:50 --> Total execution time: 0.1176
DEBUG - 2022-08-05 10:03:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:50 --> Total execution time: 0.1267
DEBUG - 2022-08-05 10:03:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:50 --> Total execution time: 0.1136
DEBUG - 2022-08-05 10:03:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:50 --> Total execution time: 0.1135
DEBUG - 2022-08-05 10:03:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:50 --> Total execution time: 0.1196
DEBUG - 2022-08-05 10:03:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:03:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:03:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:03:50 --> Total execution time: 0.1361
DEBUG - 2022-08-05 10:04:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:04:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:04:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:04:04 --> Total execution time: 0.0576
DEBUG - 2022-08-05 10:04:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:04:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:04:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:04:04 --> Total execution time: 0.0712
DEBUG - 2022-08-05 10:04:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:04:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:04:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:04:04 --> Total execution time: 0.0944
DEBUG - 2022-08-05 10:04:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:04:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:04:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:04:04 --> Total execution time: 0.0749
DEBUG - 2022-08-05 10:04:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:04:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:04:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:04:04 --> Total execution time: 0.0768
DEBUG - 2022-08-05 10:04:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:04:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:04:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:04:05 --> Total execution time: 0.0814
DEBUG - 2022-08-05 10:04:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:04:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:04:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:04:06 --> Total execution time: 0.0835
DEBUG - 2022-08-05 10:04:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:04:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:04:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:04:06 --> Total execution time: 0.1368
DEBUG - 2022-08-05 10:04:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:04:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:04:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:04:07 --> Total execution time: 0.0845
DEBUG - 2022-08-05 10:04:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:04:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:04:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:04:07 --> Total execution time: 0.0869
DEBUG - 2022-08-05 10:04:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:04:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:04:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 15:04:09 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 358
DEBUG - 2022-08-05 15:04:09 --> Total execution time: 0.0700
DEBUG - 2022-08-05 10:04:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:04:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:04:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:04:09 --> Total execution time: 0.0929
DEBUG - 2022-08-05 10:04:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:04:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:04:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:04:09 --> Total execution time: 0.1414
DEBUG - 2022-08-05 10:04:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:04:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:04:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:04:09 --> Total execution time: 0.1038
DEBUG - 2022-08-05 10:04:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:04:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:04:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:04:47 --> Total execution time: 0.3940
DEBUG - 2022-08-05 10:04:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:04:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:04:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:04:48 --> Total execution time: 0.3194
DEBUG - 2022-08-05 10:05:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:05:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:05:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:05:26 --> Total execution time: 0.3298
DEBUG - 2022-08-05 10:05:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:05:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:05:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:05:27 --> Total execution time: 0.2428
DEBUG - 2022-08-05 10:05:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:05:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:05:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:05:33 --> Total execution time: 0.2923
DEBUG - 2022-08-05 10:05:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:05:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:05:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:05:33 --> Total execution time: 0.1610
DEBUG - 2022-08-05 10:05:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:05:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:05:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:05:35 --> Total execution time: 0.1733
DEBUG - 2022-08-05 10:05:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:05:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:05:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:05:35 --> Total execution time: 0.1004
DEBUG - 2022-08-05 10:28:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:28:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:28:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:28:42 --> Total execution time: 0.0614
DEBUG - 2022-08-05 10:28:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:28:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:28:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:28:42 --> Total execution time: 0.0785
DEBUG - 2022-08-05 10:28:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:28:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:28:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:28:42 --> Total execution time: 0.0720
DEBUG - 2022-08-05 10:28:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:28:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:28:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:28:42 --> Total execution time: 0.0656
DEBUG - 2022-08-05 10:28:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:28:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:28:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:28:43 --> Total execution time: 0.0748
DEBUG - 2022-08-05 10:28:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:28:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:28:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:28:44 --> Total execution time: 0.0645
DEBUG - 2022-08-05 10:28:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:28:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:28:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:28:44 --> Total execution time: 0.0642
DEBUG - 2022-08-05 10:28:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:28:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:28:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:28:44 --> Total execution time: 0.0754
DEBUG - 2022-08-05 10:28:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:28:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:28:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:28:45 --> Total execution time: 0.0688
DEBUG - 2022-08-05 10:28:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:28:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:28:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:28:45 --> Total execution time: 0.0603
DEBUG - 2022-08-05 10:28:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:28:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:28:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:28:46 --> Total execution time: 0.0673
DEBUG - 2022-08-05 10:28:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:28:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:28:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:28:46 --> Total execution time: 0.0678
DEBUG - 2022-08-05 10:28:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:28:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:28:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:28:48 --> Total execution time: 0.0629
DEBUG - 2022-08-05 10:28:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:28:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:28:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:28:48 --> Total execution time: 0.0772
DEBUG - 2022-08-05 10:28:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:28:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:28:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:28:48 --> Total execution time: 0.0605
DEBUG - 2022-08-05 10:28:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:28:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:28:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:28:48 --> Total execution time: 0.0619
DEBUG - 2022-08-05 10:28:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:28:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:28:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:28:49 --> Total execution time: 0.0674
DEBUG - 2022-08-05 10:28:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:28:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:28:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:28:50 --> Total execution time: 0.0857
DEBUG - 2022-08-05 10:28:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:28:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:28:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 15:28:51 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 358
DEBUG - 2022-08-05 15:28:51 --> Total execution time: 0.0583
DEBUG - 2022-08-05 10:28:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:28:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:28:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:28:51 --> Total execution time: 0.0840
DEBUG - 2022-08-05 10:28:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:28:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:28:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:28:51 --> Total execution time: 0.0845
DEBUG - 2022-08-05 10:28:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:28:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:28:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:28:52 --> Total execution time: 0.0712
DEBUG - 2022-08-05 10:28:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:28:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:28:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:28:59 --> Total execution time: 0.1296
DEBUG - 2022-08-05 10:28:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:28:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:28:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:28:59 --> Total execution time: 0.0632
DEBUG - 2022-08-05 10:29:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 15:29:05 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 358
DEBUG - 2022-08-05 15:29:05 --> Total execution time: 0.0655
DEBUG - 2022-08-05 10:29:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:05 --> Total execution time: 0.0941
DEBUG - 2022-08-05 10:29:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:05 --> Total execution time: 0.0774
DEBUG - 2022-08-05 10:29:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:05 --> Total execution time: 0.0650
DEBUG - 2022-08-05 10:29:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:14 --> Total execution time: 0.1225
DEBUG - 2022-08-05 10:29:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:14 --> Total execution time: 0.1527
DEBUG - 2022-08-05 10:29:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:15 --> Total execution time: 0.0649
DEBUG - 2022-08-05 10:29:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:15 --> Total execution time: 0.0871
DEBUG - 2022-08-05 10:29:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:15 --> Total execution time: 0.0982
DEBUG - 2022-08-05 10:29:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:16 --> Total execution time: 0.1001
DEBUG - 2022-08-05 10:29:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:16 --> Total execution time: 0.1025
DEBUG - 2022-08-05 10:29:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:17 --> Total execution time: 0.1093
DEBUG - 2022-08-05 10:29:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:17 --> Total execution time: 0.0965
DEBUG - 2022-08-05 10:29:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:18 --> Total execution time: 0.0897
DEBUG - 2022-08-05 10:29:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:18 --> Total execution time: 0.1001
DEBUG - 2022-08-05 10:29:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:18 --> Total execution time: 0.1015
DEBUG - 2022-08-05 10:29:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:19 --> Total execution time: 0.1099
DEBUG - 2022-08-05 10:29:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:19 --> Total execution time: 0.1060
DEBUG - 2022-08-05 10:29:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:19 --> Total execution time: 0.1138
DEBUG - 2022-08-05 10:29:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:19 --> Total execution time: 0.1120
DEBUG - 2022-08-05 10:29:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:20 --> Total execution time: 0.1290
DEBUG - 2022-08-05 10:29:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:20 --> Total execution time: 0.1245
DEBUG - 2022-08-05 10:29:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:21 --> Total execution time: 0.1031
DEBUG - 2022-08-05 10:29:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:21 --> Total execution time: 0.1201
DEBUG - 2022-08-05 10:29:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:21 --> Total execution time: 0.2422
DEBUG - 2022-08-05 10:29:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 15:29:26 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 358
DEBUG - 2022-08-05 15:29:26 --> Total execution time: 0.0810
DEBUG - 2022-08-05 10:29:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:26 --> Total execution time: 0.0927
DEBUG - 2022-08-05 10:29:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:26 --> Total execution time: 0.1085
DEBUG - 2022-08-05 10:29:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:29:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:29:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:29:26 --> Total execution time: 0.0905
DEBUG - 2022-08-05 10:30:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:30:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:30:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:30:09 --> Total execution time: 0.3042
DEBUG - 2022-08-05 10:30:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:30:09 --> Total execution time: 0.1683
DEBUG - 2022-08-05 10:30:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:09 --> Total execution time: 0.1412
DEBUG - 2022-08-05 10:30:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:30:09 --> Total execution time: 0.0978
DEBUG - 2022-08-05 10:30:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:30:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:30:11 --> Total execution time: 0.1423
DEBUG - 2022-08-05 10:30:11 --> Total execution time: 0.1905
DEBUG - 2022-08-05 10:30:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:30:11 --> Total execution time: 0.1681
DEBUG - 2022-08-05 10:30:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:30:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:30:13 --> Total execution time: 0.1434
DEBUG - 2022-08-05 10:30:13 --> Total execution time: 0.1649
DEBUG - 2022-08-05 10:30:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:30:13 --> Total execution time: 0.0581
DEBUG - 2022-08-05 10:30:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:30:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:30:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:15 --> Total execution time: 0.1951
DEBUG - 2022-08-05 10:30:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:30:15 --> Total execution time: 0.0888
DEBUG - 2022-08-05 10:30:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:30:15 --> Total execution time: 0.0712
DEBUG - 2022-08-05 10:30:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:30:20 --> Total execution time: 0.1642
DEBUG - 2022-08-05 10:30:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:30:20 --> Total execution time: 0.1705
DEBUG - 2022-08-05 10:30:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:30:20 --> Total execution time: 0.1025
DEBUG - 2022-08-05 10:30:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:30:21 --> Total execution time: 0.1584
DEBUG - 2022-08-05 10:30:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:30:21 --> Total execution time: 0.1165
DEBUG - 2022-08-05 10:30:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:30:21 --> Total execution time: 0.1259
DEBUG - 2022-08-05 10:30:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:30:21 --> Total execution time: 0.1449
DEBUG - 2022-08-05 10:30:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:30:22 --> Total execution time: 0.1208
DEBUG - 2022-08-05 10:30:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:30:22 --> Total execution time: 0.1282
DEBUG - 2022-08-05 10:30:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:30:23 --> Total execution time: 0.1253
DEBUG - 2022-08-05 10:30:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:30:23 --> Total execution time: 0.1400
DEBUG - 2022-08-05 10:30:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:30:23 --> Total execution time: 0.1425
DEBUG - 2022-08-05 10:30:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:30:24 --> Total execution time: 0.2572
DEBUG - 2022-08-05 10:30:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 15:30:25 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 358
DEBUG - 2022-08-05 15:30:25 --> Total execution time: 0.0786
DEBUG - 2022-08-05 10:30:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:30:26 --> Total execution time: 0.1088
DEBUG - 2022-08-05 10:30:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:30:26 --> Total execution time: 0.1267
DEBUG - 2022-08-05 10:30:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:30:26 --> Total execution time: 0.0942
DEBUG - 2022-08-05 10:30:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:30:51 --> Total execution time: 0.6490
DEBUG - 2022-08-05 10:30:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 10:30:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:30:51 --> Total execution time: 0.3871
DEBUG - 2022-08-05 10:30:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:30:52 --> Total execution time: 0.4232
DEBUG - 2022-08-05 10:30:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:30:52 --> Total execution time: 0.3736
DEBUG - 2022-08-05 10:30:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:30:52 --> Total execution time: 0.1718
DEBUG - 2022-08-05 10:30:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:30:59 --> Total execution time: 0.1201
DEBUG - 2022-08-05 10:30:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:30:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:30:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:30:59 --> Total execution time: 0.2002
DEBUG - 2022-08-05 10:31:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:31:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:31:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:31:00 --> Total execution time: 0.1041
DEBUG - 2022-08-05 10:31:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:31:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:31:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:31:00 --> Total execution time: 0.1015
DEBUG - 2022-08-05 10:31:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:31:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:31:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:31:00 --> Total execution time: 0.1220
DEBUG - 2022-08-05 10:31:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:31:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:31:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 15:31:04 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 358
DEBUG - 2022-08-05 15:31:04 --> Total execution time: 0.0802
DEBUG - 2022-08-05 10:31:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:31:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:31:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:31:04 --> Total execution time: 0.1155
DEBUG - 2022-08-05 10:31:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:31:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:31:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:31:05 --> Total execution time: 0.1375
DEBUG - 2022-08-05 10:31:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 10:31:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 10:31:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 15:31:05 --> Total execution time: 0.0921
DEBUG - 2022-08-05 11:01:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:01:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:01:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:01:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:01:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:01:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:01:48 --> Total execution time: 0.1057
DEBUG - 2022-08-05 16:01:48 --> Total execution time: 0.1074
DEBUG - 2022-08-05 11:01:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:01:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:01:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:01:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:01:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:01:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:01:48 --> Total execution time: 0.0628
DEBUG - 2022-08-05 16:01:48 --> Total execution time: 0.0615
DEBUG - 2022-08-05 11:01:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:01:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:01:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:01:50 --> Total execution time: 0.1287
DEBUG - 2022-08-05 11:01:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:01:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:01:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:01:50 --> Total execution time: 0.0917
DEBUG - 2022-08-05 11:02:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:02:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:02:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:02:26 --> Total execution time: 0.1077
DEBUG - 2022-08-05 11:02:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:02:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:02:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:02:26 --> Total execution time: 0.0670
DEBUG - 2022-08-05 11:02:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:02:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:02:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:02:28 --> Total execution time: 0.0529
DEBUG - 2022-08-05 11:02:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:02:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:02:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:02:29 --> Total execution time: 0.0621
DEBUG - 2022-08-05 11:02:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:02:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:02:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:02:29 --> Total execution time: 0.1076
DEBUG - 2022-08-05 11:02:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:02:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:02:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:02:44 --> Total execution time: 0.0576
DEBUG - 2022-08-05 11:02:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:02:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:02:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:02:44 --> Total execution time: 0.0620
DEBUG - 2022-08-05 11:02:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:02:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:02:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:02:44 --> Total execution time: 0.1700
DEBUG - 2022-08-05 11:02:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:02:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:02:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:02:44 --> Total execution time: 0.0590
DEBUG - 2022-08-05 11:03:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:03:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:03:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:03:17 --> Total execution time: 0.2355
DEBUG - 2022-08-05 11:03:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:03:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:03:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:03:18 --> Total execution time: 0.1890
DEBUG - 2022-08-05 11:03:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:03:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:03:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:03:33 --> Total execution time: 0.2816
DEBUG - 2022-08-05 11:03:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:03:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:03:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:03:33 --> Total execution time: 0.4040
DEBUG - 2022-08-05 11:03:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:03:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:03:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:03:37 --> Total execution time: 0.2161
DEBUG - 2022-08-05 11:03:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:03:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:03:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:03:43 --> Total execution time: 0.3775
DEBUG - 2022-08-05 11:03:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:03:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:03:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:03:44 --> Total execution time: 0.2969
DEBUG - 2022-08-05 11:03:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:03:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:03:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:03:53 --> Total execution time: 0.2967
DEBUG - 2022-08-05 11:03:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:03:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:03:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:03:54 --> Total execution time: 0.1905
DEBUG - 2022-08-05 11:04:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:04:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:04:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:04:08 --> Total execution time: 0.3958
DEBUG - 2022-08-05 11:04:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:04:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:04:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:04:09 --> Total execution time: 0.2951
DEBUG - 2022-08-05 11:04:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:04:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:04:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:04:22 --> Total execution time: 0.1746
DEBUG - 2022-08-05 11:04:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:04:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:04:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:04:22 --> Total execution time: 0.1185
DEBUG - 2022-08-05 11:04:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:04:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:04:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 16:04:30 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 358
DEBUG - 2022-08-05 16:04:30 --> Total execution time: 0.0597
DEBUG - 2022-08-05 11:04:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:04:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:04:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:04:30 --> Total execution time: 0.0895
DEBUG - 2022-08-05 11:04:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:04:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:04:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:04:30 --> Total execution time: 0.0928
DEBUG - 2022-08-05 11:04:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:04:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:04:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:04:30 --> Total execution time: 0.0797
DEBUG - 2022-08-05 11:05:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:05:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:05:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:05:45 --> Total execution time: 0.2154
DEBUG - 2022-08-05 11:05:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:05:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:05:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:05:45 --> Total execution time: 0.1415
DEBUG - 2022-08-05 11:06:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:06:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:06:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:06:27 --> Total execution time: 0.3009
DEBUG - 2022-08-05 11:06:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:06:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:06:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:06:27 --> Total execution time: 0.2363
DEBUG - 2022-08-05 11:06:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:06:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:07:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:07:00 --> Total execution time: 0.5119
DEBUG - 2022-08-05 11:07:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:07:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:07:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:07:00 --> Total execution time: 0.3728
DEBUG - 2022-08-05 11:12:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:12:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:12:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:12:12 --> Total execution time: 0.2778
DEBUG - 2022-08-05 11:12:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:12:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:12:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:12:12 --> Total execution time: 0.1606
DEBUG - 2022-08-05 11:12:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:12:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:12:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:12:15 --> Total execution time: 0.1898
DEBUG - 2022-08-05 11:12:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:12:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:12:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:12:58 --> Total execution time: 0.4030
DEBUG - 2022-08-05 11:12:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:12:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:12:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:12:58 --> Total execution time: 0.3226
DEBUG - 2022-08-05 11:13:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:13:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:13:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:13:07 --> Total execution time: 0.2377
DEBUG - 2022-08-05 11:13:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:13:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:13:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:13:07 --> Total execution time: 0.1513
DEBUG - 2022-08-05 11:13:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:13:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:13:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:13:14 --> Total execution time: 0.2852
DEBUG - 2022-08-05 11:13:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:13:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:13:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:13:14 --> Total execution time: 0.2936
DEBUG - 2022-08-05 11:13:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:13:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:13:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:13:33 --> Total execution time: 0.1222
DEBUG - 2022-08-05 11:13:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:13:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:13:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:13:33 --> Total execution time: 0.1597
DEBUG - 2022-08-05 11:13:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:13:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:13:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:13:41 --> Total execution time: 0.3509
DEBUG - 2022-08-05 11:13:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:13:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:13:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:13:41 --> Total execution time: 0.2832
DEBUG - 2022-08-05 11:14:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:14:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:14:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:14:08 --> Total execution time: 0.3648
DEBUG - 2022-08-05 11:14:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:14:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:14:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:14:08 --> Total execution time: 0.2163
DEBUG - 2022-08-05 11:14:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:14:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:14:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:14:18 --> Total execution time: 0.2409
DEBUG - 2022-08-05 11:14:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:14:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:14:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:14:18 --> Total execution time: 0.1813
DEBUG - 2022-08-05 11:14:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:14:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:14:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:14:26 --> Total execution time: 0.1847
DEBUG - 2022-08-05 11:14:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:14:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:14:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:14:26 --> Total execution time: 0.1617
DEBUG - 2022-08-05 11:16:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:16:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:16:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:16:32 --> Total execution time: 0.3737
DEBUG - 2022-08-05 11:16:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:16:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:16:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:16:36 --> Total execution time: 4.2299
DEBUG - 2022-08-05 11:16:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:16:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:16:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:16:49 --> Total execution time: 0.2924
DEBUG - 2022-08-05 11:16:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:16:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:16:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:16:49 --> Total execution time: 0.3544
DEBUG - 2022-08-05 11:16:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:16:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:16:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:16:51 --> Total execution time: 0.2712
DEBUG - 2022-08-05 11:16:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:16:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:16:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:16:51 --> Total execution time: 0.1351
DEBUG - 2022-08-05 11:17:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:17:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:17:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:17:00 --> Total execution time: 0.2337
DEBUG - 2022-08-05 11:17:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:17:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:17:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:17:01 --> Total execution time: 0.1992
DEBUG - 2022-08-05 11:17:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:17:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:17:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:17:13 --> Total execution time: 0.0615
DEBUG - 2022-08-05 11:17:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:17:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:17:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:17:13 --> Total execution time: 0.0790
DEBUG - 2022-08-05 11:17:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:17:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:17:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:17:13 --> Total execution time: 0.0724
DEBUG - 2022-08-05 11:17:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:17:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:17:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:17:13 --> Total execution time: 0.0562
DEBUG - 2022-08-05 11:17:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:17:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:17:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:17:14 --> Total execution time: 0.0677
DEBUG - 2022-08-05 11:17:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:17:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:17:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:17:14 --> Total execution time: 0.0676
DEBUG - 2022-08-05 11:17:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:17:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:17:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:17:15 --> Total execution time: 0.0664
DEBUG - 2022-08-05 11:17:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:17:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:17:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:17:15 --> Total execution time: 0.0630
DEBUG - 2022-08-05 11:17:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:17:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:17:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:17:16 --> Total execution time: 0.0638
DEBUG - 2022-08-05 11:17:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:17:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:17:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:17:16 --> Total execution time: 0.0635
DEBUG - 2022-08-05 11:17:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:17:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:17:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:17:17 --> Total execution time: 0.0674
DEBUG - 2022-08-05 11:17:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:17:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:17:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:17:17 --> Total execution time: 0.0701
DEBUG - 2022-08-05 11:17:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:17:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:17:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:17:18 --> Total execution time: 0.1023
DEBUG - 2022-08-05 11:17:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:17:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:17:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:17:18 --> Total execution time: 0.1066
DEBUG - 2022-08-05 11:17:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:17:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:17:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:17:19 --> Total execution time: 0.0972
DEBUG - 2022-08-05 11:17:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:17:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:17:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:17:19 --> Total execution time: 0.1375
DEBUG - 2022-08-05 11:17:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:17:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:17:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:17:19 --> Total execution time: 0.1392
DEBUG - 2022-08-05 11:17:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:17:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:17:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:17:20 --> Total execution time: 0.1437
DEBUG - 2022-08-05 11:17:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:17:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:17:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 16:17:22 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 358
DEBUG - 2022-08-05 16:17:22 --> Total execution time: 0.0933
DEBUG - 2022-08-05 11:17:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:17:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:17:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:17:22 --> Total execution time: 0.1592
DEBUG - 2022-08-05 11:17:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:17:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:17:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:17:22 --> Total execution time: 0.2289
DEBUG - 2022-08-05 11:17:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:17:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:17:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:17:22 --> Total execution time: 0.1146
DEBUG - 2022-08-05 11:31:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:31:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:31:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:31:23 --> Total execution time: 0.2403
DEBUG - 2022-08-05 11:31:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:31:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:31:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:31:23 --> Total execution time: 0.1707
DEBUG - 2022-08-05 11:31:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:31:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:31:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:31:38 --> Total execution time: 0.7429
DEBUG - 2022-08-05 11:31:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:31:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:31:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:31:38 --> Total execution time: 0.5807
DEBUG - 2022-08-05 11:31:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:31:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:31:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:31:55 --> Total execution time: 0.3294
DEBUG - 2022-08-05 11:31:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:31:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:31:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:31:55 --> Total execution time: 0.2345
DEBUG - 2022-08-05 11:32:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:32:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:32:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:32:04 --> Total execution time: 0.2262
DEBUG - 2022-08-05 11:32:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:32:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:32:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:32:05 --> Total execution time: 0.2057
DEBUG - 2022-08-05 11:32:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:32:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:32:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:32:15 --> Total execution time: 0.4221
DEBUG - 2022-08-05 11:32:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:32:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:32:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:32:16 --> Total execution time: 0.2667
DEBUG - 2022-08-05 11:34:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:34:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:34:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:34:11 --> Total execution time: 0.1309
DEBUG - 2022-08-05 11:34:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:34:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:34:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:34:11 --> Total execution time: 0.0607
DEBUG - 2022-08-05 11:34:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:34:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:34:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:34:16 --> Total execution time: 0.0540
DEBUG - 2022-08-05 11:34:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:34:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:34:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:34:16 --> Total execution time: 0.0562
DEBUG - 2022-08-05 11:34:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:34:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:34:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:34:17 --> Total execution time: 0.1217
DEBUG - 2022-08-05 11:34:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:34:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:34:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:34:17 --> Total execution time: 0.0519
DEBUG - 2022-08-05 11:34:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:34:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:34:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:34:25 --> Total execution time: 0.0501
DEBUG - 2022-08-05 11:34:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:34:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:34:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:34:25 --> Total execution time: 0.0569
DEBUG - 2022-08-05 11:34:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:34:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:34:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:34:25 --> Total execution time: 0.0598
DEBUG - 2022-08-05 11:34:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:34:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:34:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:34:25 --> Total execution time: 0.0545
DEBUG - 2022-08-05 11:34:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:34:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:34:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 16:34:30 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 358
DEBUG - 2022-08-05 16:34:30 --> Total execution time: 0.0684
DEBUG - 2022-08-05 11:34:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:34:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:34:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:34:30 --> Total execution time: 0.1019
DEBUG - 2022-08-05 11:34:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:34:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:34:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:34:30 --> Total execution time: 0.1084
DEBUG - 2022-08-05 11:34:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:34:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:34:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:34:30 --> Total execution time: 0.0865
DEBUG - 2022-08-05 11:34:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:34:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:34:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:34:49 --> Total execution time: 0.1543
DEBUG - 2022-08-05 11:34:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:34:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:34:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:34:49 --> Total execution time: 0.0840
DEBUG - 2022-08-05 11:34:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:34:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:34:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:34:55 --> Total execution time: 0.0685
DEBUG - 2022-08-05 11:34:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:34:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:34:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:34:55 --> Total execution time: 0.0648
DEBUG - 2022-08-05 11:34:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:34:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:34:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:34:55 --> Total execution time: 0.1049
DEBUG - 2022-08-05 11:34:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:34:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:34:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:34:55 --> Total execution time: 0.1162
DEBUG - 2022-08-05 11:35:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:10 --> Total execution time: 0.0756
DEBUG - 2022-08-05 11:35:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:10 --> Total execution time: 0.0557
DEBUG - 2022-08-05 11:35:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:10 --> Total execution time: 0.0748
DEBUG - 2022-08-05 11:35:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:10 --> Total execution time: 0.0533
DEBUG - 2022-08-05 11:35:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:20 --> Total execution time: 0.0522
DEBUG - 2022-08-05 11:35:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:20 --> Total execution time: 0.0540
DEBUG - 2022-08-05 11:35:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:20 --> Total execution time: 0.0884
DEBUG - 2022-08-05 11:35:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:20 --> Total execution time: 0.0541
DEBUG - 2022-08-05 11:35:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:26 --> Total execution time: 0.0508
DEBUG - 2022-08-05 11:35:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:26 --> Total execution time: 0.0542
DEBUG - 2022-08-05 11:35:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:26 --> Total execution time: 0.0588
DEBUG - 2022-08-05 11:35:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:26 --> Total execution time: 0.0520
DEBUG - 2022-08-05 11:35:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 16:35:29 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 358
DEBUG - 2022-08-05 16:35:29 --> Total execution time: 0.0681
DEBUG - 2022-08-05 11:35:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:29 --> Total execution time: 0.0902
DEBUG - 2022-08-05 11:35:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:29 --> Total execution time: 0.0943
DEBUG - 2022-08-05 11:35:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:29 --> Total execution time: 0.0588
DEBUG - 2022-08-05 11:35:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:41 --> Total execution time: 0.1482
DEBUG - 2022-08-05 11:35:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:41 --> Total execution time: 0.0775
DEBUG - 2022-08-05 11:35:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:43 --> Total execution time: 0.0565
DEBUG - 2022-08-05 11:35:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:43 --> Total execution time: 0.0572
DEBUG - 2022-08-05 11:35:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:44 --> Total execution time: 0.1056
DEBUG - 2022-08-05 11:35:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:48 --> Total execution time: 0.0497
DEBUG - 2022-08-05 11:35:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:48 --> Total execution time: 0.0546
DEBUG - 2022-08-05 11:35:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:48 --> Total execution time: 0.0589
DEBUG - 2022-08-05 11:35:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:48 --> Total execution time: 0.0566
DEBUG - 2022-08-05 11:35:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:49 --> Total execution time: 0.0569
DEBUG - 2022-08-05 11:35:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:49 --> Total execution time: 0.0639
DEBUG - 2022-08-05 11:35:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:51 --> Total execution time: 0.0559
DEBUG - 2022-08-05 11:35:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:51 --> Total execution time: 0.0575
DEBUG - 2022-08-05 11:35:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:53 --> Total execution time: 0.0590
DEBUG - 2022-08-05 11:35:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:53 --> Total execution time: 0.0576
DEBUG - 2022-08-05 11:35:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:55 --> Total execution time: 0.0517
DEBUG - 2022-08-05 11:35:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:55 --> Total execution time: 0.0546
DEBUG - 2022-08-05 11:35:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:55 --> Total execution time: 0.0573
DEBUG - 2022-08-05 11:35:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:55 --> Total execution time: 0.0525
DEBUG - 2022-08-05 11:35:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 16:35:59 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 358
DEBUG - 2022-08-05 16:35:59 --> Total execution time: 0.0614
DEBUG - 2022-08-05 11:35:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:59 --> Total execution time: 0.0809
DEBUG - 2022-08-05 11:35:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:59 --> Total execution time: 0.1350
DEBUG - 2022-08-05 11:35:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:35:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:35:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:35:59 --> Total execution time: 0.0589
DEBUG - 2022-08-05 11:36:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:36:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:36:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:36:40 --> Total execution time: 0.1047
DEBUG - 2022-08-05 11:36:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:36:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:36:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:36:40 --> Total execution time: 0.0602
DEBUG - 2022-08-05 11:36:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:36:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:36:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:36:48 --> Total execution time: 0.0575
DEBUG - 2022-08-05 11:36:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:36:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:36:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:36:48 --> Total execution time: 0.0812
DEBUG - 2022-08-05 11:36:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:36:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:36:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:36:48 --> Total execution time: 0.0924
DEBUG - 2022-08-05 11:36:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:36:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:36:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:36:48 --> Total execution time: 0.0525
DEBUG - 2022-08-05 11:36:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:36:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:36:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:36:49 --> Total execution time: 0.0829
DEBUG - 2022-08-05 11:36:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:36:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:36:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:36:49 --> Total execution time: 0.0936
DEBUG - 2022-08-05 11:36:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:36:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:36:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:36:50 --> Total execution time: 0.0691
DEBUG - 2022-08-05 11:36:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:36:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:36:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:36:50 --> Total execution time: 0.0657
DEBUG - 2022-08-05 11:36:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:36:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:36:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:36:51 --> Total execution time: 0.0714
DEBUG - 2022-08-05 11:36:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:36:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:36:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:36:51 --> Total execution time: 0.0702
DEBUG - 2022-08-05 11:36:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:36:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:36:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 16:36:52 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 358
DEBUG - 2022-08-05 16:36:52 --> Total execution time: 0.0575
DEBUG - 2022-08-05 11:36:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:36:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:36:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:36:52 --> Total execution time: 0.0862
DEBUG - 2022-08-05 11:36:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:36:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:36:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:36:53 --> Total execution time: 0.0824
DEBUG - 2022-08-05 11:36:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:36:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:36:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:36:53 --> Total execution time: 0.0655
DEBUG - 2022-08-05 11:36:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:36:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:36:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:36:57 --> Total execution time: 0.1224
DEBUG - 2022-08-05 11:36:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:36:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:36:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:36:57 --> Total execution time: 0.0609
DEBUG - 2022-08-05 11:36:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:36:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:36:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:36:58 --> Total execution time: 0.0623
DEBUG - 2022-08-05 11:36:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:36:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:36:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:36:58 --> Total execution time: 0.0711
DEBUG - 2022-08-05 11:36:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:36:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:36:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:36:58 --> Total execution time: 0.0937
DEBUG - 2022-08-05 11:36:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:36:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:36:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:36:59 --> Total execution time: 0.0664
DEBUG - 2022-08-05 11:36:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:36:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:36:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:36:59 --> Total execution time: 0.0670
DEBUG - 2022-08-05 11:37:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:37:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:37:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 16:37:01 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 358
DEBUG - 2022-08-05 16:37:01 --> Total execution time: 0.0637
DEBUG - 2022-08-05 11:37:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:37:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:37:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:37:01 --> Total execution time: 0.0725
DEBUG - 2022-08-05 11:37:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:37:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:37:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:37:01 --> Total execution time: 0.0755
DEBUG - 2022-08-05 11:37:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:37:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:37:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:37:01 --> Total execution time: 0.0670
DEBUG - 2022-08-05 11:37:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:37:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:37:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:37:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:37:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:37:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:37:10 --> Total execution time: 0.1489
DEBUG - 2022-08-05 16:37:10 --> Total execution time: 0.1672
DEBUG - 2022-08-05 11:37:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:37:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:37:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:37:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:37:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:37:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:37:10 --> Total execution time: 0.1280
DEBUG - 2022-08-05 16:37:10 --> Total execution time: 0.1323
DEBUG - 2022-08-05 11:37:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:37:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:37:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:37:12 --> Total execution time: 0.1621
DEBUG - 2022-08-05 11:37:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:37:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:37:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:37:13 --> Total execution time: 0.1230
DEBUG - 2022-08-05 11:37:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:37:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:37:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:37:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:37:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:37:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:37:15 --> Total execution time: 0.0871
DEBUG - 2022-08-05 16:37:15 --> Total execution time: 0.0927
DEBUG - 2022-08-05 11:39:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:39:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:39:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:39:01 --> Total execution time: 0.2101
DEBUG - 2022-08-05 11:39:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:39:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:39:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:39:01 --> Total execution time: 0.0546
DEBUG - 2022-08-05 11:39:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:39:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:39:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:39:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:39:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:39:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:39:02 --> Total execution time: 0.0855
DEBUG - 2022-08-05 16:39:02 --> Total execution time: 0.0816
DEBUG - 2022-08-05 11:39:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:39:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:39:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:39:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:39:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:39:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:39:02 --> Total execution time: 0.0634
DEBUG - 2022-08-05 16:39:02 --> Total execution time: 0.0552
DEBUG - 2022-08-05 11:39:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:39:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:39:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:39:08 --> Total execution time: 0.1301
DEBUG - 2022-08-05 11:39:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:39:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:39:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:39:09 --> Total execution time: 0.0798
DEBUG - 2022-08-05 11:39:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:39:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:39:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:39:36 --> Total execution time: 0.2698
DEBUG - 2022-08-05 11:39:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:39:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:39:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:39:36 --> Total execution time: 0.2342
DEBUG - 2022-08-05 11:39:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:39:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:39:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:39:56 --> Total execution time: 0.2670
DEBUG - 2022-08-05 11:39:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:39:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:39:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:39:57 --> Total execution time: 0.2327
DEBUG - 2022-08-05 11:40:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:40:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:40:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:40:02 --> Total execution time: 0.2612
DEBUG - 2022-08-05 11:40:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:40:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:40:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:40:02 --> Total execution time: 0.2190
DEBUG - 2022-08-05 11:40:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:40:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:40:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:40:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:40:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:40:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:40:22 --> Total execution time: 0.1107
DEBUG - 2022-08-05 16:40:22 --> Total execution time: 0.1121
DEBUG - 2022-08-05 11:40:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:40:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:40:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:40:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:40:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:40:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:40:22 --> Total execution time: 0.0626
DEBUG - 2022-08-05 16:40:22 --> Total execution time: 0.0654
DEBUG - 2022-08-05 11:40:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:40:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:40:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:40:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:40:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:40:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:40:36 --> Total execution time: 0.2593
DEBUG - 2022-08-05 16:40:36 --> Total execution time: 0.2896
DEBUG - 2022-08-05 11:40:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:40:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:40:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:40:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:40:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:40:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:40:36 --> Total execution time: 0.2033
DEBUG - 2022-08-05 16:40:36 --> Total execution time: 0.1973
DEBUG - 2022-08-05 11:40:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:40:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:40:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:40:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:40:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:40:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:40:44 --> Total execution time: 0.2530
DEBUG - 2022-08-05 16:40:44 --> Total execution time: 0.2616
DEBUG - 2022-08-05 11:40:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:40:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:40:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:40:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:40:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:40:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:40:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:40:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:40:44 --> Total execution time: 0.4880
DEBUG - 2022-08-05 16:40:44 --> Total execution time: 0.5229
DEBUG - 2022-08-05 11:40:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:40:45 --> Total execution time: 0.4620
DEBUG - 2022-08-05 11:40:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:40:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:40:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:40:45 --> Total execution time: 0.2137
DEBUG - 2022-08-05 11:40:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:40:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:40:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:40:49 --> Total execution time: 0.3151
DEBUG - 2022-08-05 11:40:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:41:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:41:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:41:00 --> Total execution time: 0.2821
DEBUG - 2022-08-05 11:41:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:41:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:41:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:41:00 --> Total execution time: 0.3333
DEBUG - 2022-08-05 11:41:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:41:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:41:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 16:41:09 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 358
DEBUG - 2022-08-05 16:41:09 --> Total execution time: 0.0927
DEBUG - 2022-08-05 11:41:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:41:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:41:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:41:09 --> Total execution time: 0.1347
DEBUG - 2022-08-05 11:41:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:41:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:41:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:41:09 --> Total execution time: 0.1425
DEBUG - 2022-08-05 11:41:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:41:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:41:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:41:09 --> Total execution time: 0.1439
DEBUG - 2022-08-05 11:41:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:41:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:41:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:41:19 --> Total execution time: 0.2911
DEBUG - 2022-08-05 11:41:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:41:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:41:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:41:19 --> Total execution time: 0.2514
DEBUG - 2022-08-05 11:41:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:41:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:41:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:41:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:41:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:41:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:41:25 --> Total execution time: 0.0984
DEBUG - 2022-08-05 16:41:25 --> Total execution time: 0.0984
DEBUG - 2022-08-05 11:41:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:41:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:41:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:41:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:41:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:41:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:41:25 --> Total execution time: 0.0762
DEBUG - 2022-08-05 16:41:25 --> Total execution time: 0.0725
DEBUG - 2022-08-05 11:41:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:41:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:41:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:41:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:41:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:41:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:41:39 --> Total execution time: 0.3207
DEBUG - 2022-08-05 16:41:39 --> Total execution time: 0.3209
DEBUG - 2022-08-05 11:41:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:41:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:41:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:41:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:41:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:41:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:41:39 --> Total execution time: 0.1859
DEBUG - 2022-08-05 16:41:39 --> Total execution time: 0.2019
DEBUG - 2022-08-05 11:41:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:41:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:41:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:41:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:41:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:41:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:41:44 --> Total execution time: 0.2363
DEBUG - 2022-08-05 16:41:44 --> Total execution time: 0.2457
DEBUG - 2022-08-05 11:41:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:41:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:41:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:41:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:41:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:41:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:41:45 --> Total execution time: 0.2443
DEBUG - 2022-08-05 16:41:45 --> Total execution time: 0.2748
DEBUG - 2022-08-05 11:46:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:46:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:46:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:46:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:46:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:46:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:46:41 --> Total execution time: 0.1390
DEBUG - 2022-08-05 16:46:41 --> Total execution time: 0.1414
DEBUG - 2022-08-05 11:46:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:46:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:46:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:46:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:46:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:46:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:46:41 --> Total execution time: 0.1004
DEBUG - 2022-08-05 16:46:41 --> Total execution time: 0.1038
DEBUG - 2022-08-05 11:48:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:48:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:48:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:48:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:48:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:48:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:48:06 --> Total execution time: 0.2926
DEBUG - 2022-08-05 16:48:06 --> Total execution time: 0.2980
DEBUG - 2022-08-05 11:48:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:48:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:48:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:48:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:48:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:48:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:48:06 --> Total execution time: 0.1819
DEBUG - 2022-08-05 16:48:06 --> Total execution time: 0.1841
DEBUG - 2022-08-05 11:48:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:48:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:48:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:48:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:48:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:48:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:48:18 --> Total execution time: 0.3062
DEBUG - 2022-08-05 16:48:18 --> Total execution time: 0.3184
DEBUG - 2022-08-05 11:48:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:48:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:48:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:48:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:48:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:48:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:48:18 --> Total execution time: 0.2555
DEBUG - 2022-08-05 16:48:19 --> Total execution time: 0.6183
DEBUG - 2022-08-05 11:48:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:48:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:48:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:48:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:48:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:48:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:48:29 --> Total execution time: 0.1656
DEBUG - 2022-08-05 16:48:29 --> Total execution time: 0.1715
DEBUG - 2022-08-05 11:48:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:48:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:48:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:48:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:48:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:48:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:48:30 --> Total execution time: 0.1678
DEBUG - 2022-08-05 16:48:30 --> Total execution time: 0.1629
DEBUG - 2022-08-05 11:48:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:48:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:48:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:48:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:48:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:48:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:48:44 --> Total execution time: 0.3164
DEBUG - 2022-08-05 16:48:44 --> Total execution time: 0.3364
DEBUG - 2022-08-05 11:48:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:48:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:48:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:48:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:48:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:48:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:48:44 --> Total execution time: 0.2356
DEBUG - 2022-08-05 16:48:44 --> Total execution time: 0.2318
DEBUG - 2022-08-05 11:48:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:48:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:48:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:48:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:48:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:48:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:48:49 --> Total execution time: 0.2690
DEBUG - 2022-08-05 16:48:49 --> Total execution time: 0.2786
DEBUG - 2022-08-05 11:49:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:49:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:49:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:49:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:49:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:49:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:49:12 --> Total execution time: 0.2902
DEBUG - 2022-08-05 16:49:12 --> Total execution time: 0.3274
DEBUG - 2022-08-05 11:49:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:49:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:49:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:49:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:49:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:49:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:49:13 --> Total execution time: 0.2177
DEBUG - 2022-08-05 16:49:13 --> Total execution time: 0.1841
DEBUG - 2022-08-05 11:49:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:49:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:49:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:49:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:49:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:49:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:49:24 --> Total execution time: 0.2623
DEBUG - 2022-08-05 16:49:24 --> Total execution time: 0.2733
DEBUG - 2022-08-05 11:49:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:49:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:49:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:49:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:49:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:49:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:49:24 --> Total execution time: 0.2016
DEBUG - 2022-08-05 16:49:24 --> Total execution time: 0.2280
DEBUG - 2022-08-05 11:50:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:50:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:50:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:50:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:50:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:50:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:50:15 --> Total execution time: 0.2391
DEBUG - 2022-08-05 16:50:15 --> Total execution time: 0.2496
DEBUG - 2022-08-05 11:50:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:50:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 11:50:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:50:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 11:50:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 11:50:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:50:15 --> Total execution time: 0.2231
DEBUG - 2022-08-05 16:50:15 --> Total execution time: 0.2396
DEBUG - 2022-08-05 12:09:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:09:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:09:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 17:09:07 --> Total execution time: 0.1276
DEBUG - 2022-08-05 12:09:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:09:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:09:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 17:09:08 --> Total execution time: 0.2022
DEBUG - 2022-08-05 12:09:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:09:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:09:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:09:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:09:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:09:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 17:09:18 --> Total execution time: 0.0968
DEBUG - 2022-08-05 17:09:18 --> Total execution time: 0.0954
DEBUG - 2022-08-05 12:09:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:09:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:09:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:09:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:09:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:09:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 17:09:18 --> Total execution time: 0.0918
DEBUG - 2022-08-05 17:09:18 --> Total execution time: 0.0808
DEBUG - 2022-08-05 12:18:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:18:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:18:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 17:18:51 --> Total execution time: 0.2107
DEBUG - 2022-08-05 12:18:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:18:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:18:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 17:18:51 --> Total execution time: 0.1033
DEBUG - 2022-08-05 12:26:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:26:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:26:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:26:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:26:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:26:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 17:26:20 --> Total execution time: 0.1542
DEBUG - 2022-08-05 17:26:20 --> Total execution time: 0.1548
DEBUG - 2022-08-05 12:26:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:26:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:26:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:26:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:26:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:26:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 17:26:20 --> Total execution time: 0.1033
DEBUG - 2022-08-05 17:26:20 --> Total execution time: 0.1129
DEBUG - 2022-08-05 12:26:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:26:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:26:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 17:26:42 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskPayment.php 159
DEBUG - 2022-08-05 17:26:42 --> Total execution time: 0.1159
DEBUG - 2022-08-05 12:26:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:26:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:26:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 17:26:42 --> Severity: Notice --> Undefined variable: kioskUuid C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskPayment.php 64
DEBUG - 2022-08-05 17:26:42 --> Total execution time: 0.1544
DEBUG - 2022-08-05 12:27:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:27:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:27:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:27:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:27:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:27:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 17:27:27 --> Total execution time: 0.2480
DEBUG - 2022-08-05 17:27:27 --> Total execution time: 0.2587
DEBUG - 2022-08-05 12:27:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:27:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:27:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:27:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:27:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 12:27:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 17:27:27 --> Total execution time: 0.3226
DEBUG - 2022-08-05 17:27:27 --> Total execution time: 0.3961
DEBUG - 2022-08-05 12:27:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:27:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:27:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 17:27:37 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskPayment.php 159
DEBUG - 2022-08-05 17:27:37 --> Total execution time: 0.1198
DEBUG - 2022-08-05 12:27:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:27:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:27:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 17:27:37 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Cannot insert the value NULL into column 'id', table 'cso1.dbo.cso1_transactionDetail'; column does not allow nulls. INSERT fails. - Invalid query: INSERT INTO "cso1_transactionDetail" ("transactionId", "itemId", "originPrice", "price", "discount", "isPriceEdit", "isFreeItem", "isSpecialPrice", "isPrintOnBill", "void", "presence", "inputDate", "updateDate") VALUES ('2022000000026', '0092496', 2100, 2100, 0, 0, 0, 0, 1, 0, 1, 1659695257, 1659695257)
DEBUG - 2022-08-05 17:27:37 --> DB Transaction Failure
DEBUG - 2022-08-05 12:29:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:29:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:29:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 17:29:16 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskPayment.php 159
DEBUG - 2022-08-05 17:29:17 --> Total execution time: 0.1284
DEBUG - 2022-08-05 12:29:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:29:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:29:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 17:29:17 --> Severity: Notice --> Undefined index: isPrintOnBill C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskPayment.php 128
ERROR - 2022-08-05 17:29:17 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'printOnBill'. - Invalid query: INSERT INTO "cso1_transactionDetail" ("transactionId", "itemId", "originPrice", "price", "discount", "isPriceEdit", "isFreeItem", "isSpecialPrice", "printOnBill", "void", "presence", "inputDate", "updateDate") VALUES ('2022000000026', '0017313', 0, 0, 0, 0, 1, 0, NULL, 0, 1, 1659695357, 1659695357)
DEBUG - 2022-08-05 17:29:17 --> DB Transaction Failure
DEBUG - 2022-08-05 12:29:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:29:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:29:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 17:29:54 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskPayment.php 159
DEBUG - 2022-08-05 17:29:54 --> Total execution time: 0.2256
DEBUG - 2022-08-05 12:29:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:29:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:29:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 17:29:54 --> Severity: Notice --> Undefined index: isPrintOnBill C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskPayment.php 128
ERROR - 2022-08-05 17:29:54 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Cannot insert the value NULL into column 'isPrintOnBill', table 'cso1.dbo.cso1_transactionDetail'; column does not allow nulls. INSERT fails. - Invalid query: INSERT INTO "cso1_transactionDetail" ("transactionId", "itemId", "originPrice", "price", "discount", "isPriceEdit", "isFreeItem", "isSpecialPrice", "isPrintOnBill", "void", "presence", "inputDate", "updateDate") VALUES ('2022000000026', '0017313', 0, 0, 0, 0, 1, 0, NULL, 0, 1, 1659695394, 1659695394)
DEBUG - 2022-08-05 17:29:54 --> DB Transaction Failure
DEBUG - 2022-08-05 12:30:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:30:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:30:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 17:30:35 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskPayment.php 159
DEBUG - 2022-08-05 17:30:35 --> Total execution time: 0.1411
DEBUG - 2022-08-05 12:30:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:30:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:30:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 17:30:36 --> Total execution time: 0.2357
DEBUG - 2022-08-05 12:43:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:43:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:43:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 17:43:10 --> Total execution time: 0.2630
DEBUG - 2022-08-05 12:43:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:43:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 12:43:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 17:43:11 --> Total execution time: 0.1557
DEBUG - 2022-08-05 12:47:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:47:15 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-08-05 12:47:15 --> 404 Page Not Found: KioskPrint/index
DEBUG - 2022-08-05 12:48:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:48:04 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-08-05 12:48:04 --> 404 Page Not Found: KioskBill/printlist
DEBUG - 2022-08-05 12:48:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 12:48:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2022-08-05 12:48:12 --> 404 Page Not Found: KioskBill/printList
DEBUG - 2022-08-05 13:04:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:04:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:04:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:04:54 --> Total execution time: 0.2156
DEBUG - 2022-08-05 13:04:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:04:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:04:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:04:55 --> Total execution time: 0.2265
DEBUG - 2022-08-05 13:05:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:05:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:05:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:05:36 --> Total execution time: 0.2067
DEBUG - 2022-08-05 13:05:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:05:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:05:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:05:36 --> Total execution time: 0.1542
DEBUG - 2022-08-05 13:06:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:06:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:06:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:06:49 --> Total execution time: 0.2541
DEBUG - 2022-08-05 13:06:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:06:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:06:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:06:49 --> Total execution time: 0.1782
DEBUG - 2022-08-05 13:06:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:06:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:06:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:06:57 --> Total execution time: 0.2954
DEBUG - 2022-08-05 13:06:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:06:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:06:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:06:57 --> Total execution time: 0.1717
DEBUG - 2022-08-05 13:07:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:07:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:07:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:07:22 --> Total execution time: 0.2670
DEBUG - 2022-08-05 13:07:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:07:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:07:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:07:22 --> Total execution time: 0.2655
DEBUG - 2022-08-05 13:08:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:08:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:08:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:08:17 --> Total execution time: 0.3031
DEBUG - 2022-08-05 13:08:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:08:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:08:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:08:17 --> Total execution time: 0.2197
DEBUG - 2022-08-05 13:08:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:08:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:08:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:08:24 --> Total execution time: 0.3584
DEBUG - 2022-08-05 13:08:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:08:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:08:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:08:25 --> Total execution time: 0.3064
DEBUG - 2022-08-05 13:08:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:08:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:08:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:08:33 --> Total execution time: 0.2343
DEBUG - 2022-08-05 13:08:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:08:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:08:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:08:34 --> Total execution time: 0.2412
DEBUG - 2022-08-05 13:10:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:10:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:10:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:10:11 --> Total execution time: 0.2381
DEBUG - 2022-08-05 13:10:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:10:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:10:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:10:11 --> Total execution time: 0.1531
DEBUG - 2022-08-05 13:11:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:11:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:11:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:11:05 --> Total execution time: 0.2724
DEBUG - 2022-08-05 13:11:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:11:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:11:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:11:05 --> Total execution time: 0.2034
DEBUG - 2022-08-05 13:11:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:11:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:11:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:11:26 --> Total execution time: 0.2574
DEBUG - 2022-08-05 13:11:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:11:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:11:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:11:26 --> Total execution time: 0.2376
DEBUG - 2022-08-05 13:11:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:11:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:11:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:11:41 --> Total execution time: 0.2236
DEBUG - 2022-08-05 13:11:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:11:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:11:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:11:41 --> Total execution time: 0.1820
DEBUG - 2022-08-05 13:11:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:11:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:11:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:11:50 --> Total execution time: 0.2507
DEBUG - 2022-08-05 13:11:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:11:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:11:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:11:50 --> Total execution time: 0.1863
DEBUG - 2022-08-05 13:12:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:12:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:12:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:12:38 --> Total execution time: 0.2685
DEBUG - 2022-08-05 13:12:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:12:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:12:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:12:38 --> Total execution time: 0.1963
DEBUG - 2022-08-05 13:13:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:13:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:13:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:13:21 --> Total execution time: 0.1890
DEBUG - 2022-08-05 13:13:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:13:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:13:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:13:21 --> Total execution time: 0.1687
DEBUG - 2022-08-05 13:14:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:14:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:14:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:14:03 --> Total execution time: 0.1964
DEBUG - 2022-08-05 13:14:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:14:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:14:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:14:03 --> Total execution time: 0.1787
DEBUG - 2022-08-05 13:14:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:14:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:14:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:14:17 --> Total execution time: 0.2799
DEBUG - 2022-08-05 13:14:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:14:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:14:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:14:17 --> Total execution time: 0.3533
DEBUG - 2022-08-05 13:14:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:14:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:14:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:14:51 --> Total execution time: 0.2683
DEBUG - 2022-08-05 13:14:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:14:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:14:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:14:51 --> Total execution time: 0.1696
DEBUG - 2022-08-05 13:15:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:15:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:15:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:15:07 --> Total execution time: 0.0713
DEBUG - 2022-08-05 13:15:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:15:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:15:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:15:07 --> Total execution time: 0.1133
DEBUG - 2022-08-05 13:15:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:15:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:15:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:15:12 --> Total execution time: 0.0731
DEBUG - 2022-08-05 13:15:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:15:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:15:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:15:12 --> Total execution time: 0.1185
DEBUG - 2022-08-05 13:17:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:17:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:17:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:17:45 --> Total execution time: 0.0748
DEBUG - 2022-08-05 13:17:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:17:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:17:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:17:46 --> Total execution time: 0.1023
DEBUG - 2022-08-05 13:19:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:19:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:19:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:19:32 --> Total execution time: 0.3743
DEBUG - 2022-08-05 13:19:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:19:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:19:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:19:33 --> Total execution time: 0.2765
DEBUG - 2022-08-05 13:22:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:22:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:22:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 18:22:54 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskBill.php 124
DEBUG - 2022-08-05 18:22:54 --> Total execution time: 0.2207
DEBUG - 2022-08-05 13:22:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:22:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:22:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 18:22:54 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskBill.php 124
DEBUG - 2022-08-05 18:22:54 --> Total execution time: 0.1681
DEBUG - 2022-08-05 13:23:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:23:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:23:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 18:23:37 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskBill.php 124
DEBUG - 2022-08-05 18:23:37 --> Total execution time: 0.2375
DEBUG - 2022-08-05 13:23:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:23:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:23:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 18:23:37 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskBill.php 124
DEBUG - 2022-08-05 18:23:37 --> Total execution time: 0.3335
DEBUG - 2022-08-05 13:24:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:24:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:24:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:24:59 --> Total execution time: 0.2238
DEBUG - 2022-08-05 13:24:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:24:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:24:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:24:59 --> Total execution time: 0.1348
DEBUG - 2022-08-05 13:26:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:26:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:26:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:26:47 --> Total execution time: 0.2237
DEBUG - 2022-08-05 13:26:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:26:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:26:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:26:47 --> Total execution time: 0.1404
DEBUG - 2022-08-05 13:28:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:28:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:28:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:28:39 --> Total execution time: 0.2067
DEBUG - 2022-08-05 13:28:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:28:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:28:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:28:39 --> Total execution time: 0.1787
DEBUG - 2022-08-05 13:29:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:29:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:29:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:29:03 --> Total execution time: 0.3170
DEBUG - 2022-08-05 13:29:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:29:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:29:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:29:04 --> Total execution time: 0.2076
DEBUG - 2022-08-05 13:29:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:29:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:29:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:29:20 --> Total execution time: 0.1924
DEBUG - 2022-08-05 13:29:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:29:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:29:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:29:20 --> Total execution time: 0.1778
DEBUG - 2022-08-05 13:29:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:29:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:29:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:29:31 --> Total execution time: 0.2557
DEBUG - 2022-08-05 13:29:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:29:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:29:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:29:31 --> Total execution time: 0.2483
DEBUG - 2022-08-05 13:33:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:33:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:33:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:33:06 --> Total execution time: 0.1640
DEBUG - 2022-08-05 13:33:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:33:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:33:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:33:06 --> Total execution time: 0.0996
DEBUG - 2022-08-05 13:33:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:33:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:33:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:33:10 --> Total execution time: 0.1017
DEBUG - 2022-08-05 13:33:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:33:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:33:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:33:10 --> Total execution time: 0.0895
DEBUG - 2022-08-05 13:33:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:33:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:33:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:33:46 --> Total execution time: 0.1926
DEBUG - 2022-08-05 13:33:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:33:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:33:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:33:47 --> Total execution time: 0.1691
DEBUG - 2022-08-05 13:33:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:33:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:33:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:33:52 --> Total execution time: 0.1101
DEBUG - 2022-08-05 13:33:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:33:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:33:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:33:52 --> Total execution time: 0.0838
DEBUG - 2022-08-05 13:34:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:34:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:34:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:34:10 --> Total execution time: 0.1469
DEBUG - 2022-08-05 13:34:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:34:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:34:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:34:10 --> Total execution time: 0.1077
DEBUG - 2022-08-05 13:35:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:35:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:35:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:35:49 --> Total execution time: 0.1307
DEBUG - 2022-08-05 13:35:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:35:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:35:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:35:49 --> Total execution time: 0.1606
DEBUG - 2022-08-05 13:36:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:36:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:36:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:36:07 --> Total execution time: 0.2756
DEBUG - 2022-08-05 13:36:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:36:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:36:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:36:07 --> Total execution time: 0.1838
DEBUG - 2022-08-05 13:38:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:38:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:38:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:38:53 --> Total execution time: 0.2172
DEBUG - 2022-08-05 13:38:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:38:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:38:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:38:53 --> Total execution time: 0.1616
DEBUG - 2022-08-05 13:39:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:39:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:39:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:39:58 --> Total execution time: 0.5602
DEBUG - 2022-08-05 13:39:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:39:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:39:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:39:58 --> Total execution time: 0.5042
DEBUG - 2022-08-05 13:40:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:40:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:40:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:40:27 --> Total execution time: 0.2056
DEBUG - 2022-08-05 13:40:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:40:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:40:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:40:27 --> Total execution time: 0.1805
DEBUG - 2022-08-05 13:48:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:48:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:48:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:48:20 --> Total execution time: 0.1104
DEBUG - 2022-08-05 13:48:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:48:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:48:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:48:20 --> Total execution time: 0.1030
DEBUG - 2022-08-05 13:48:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:48:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:48:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:48:54 --> Total execution time: 0.2498
DEBUG - 2022-08-05 13:48:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:48:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:48:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:48:54 --> Total execution time: 0.1851
DEBUG - 2022-08-05 13:49:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:49:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:49:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:49:18 --> Total execution time: 0.1283
DEBUG - 2022-08-05 13:49:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:49:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:49:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:49:18 --> Total execution time: 0.1081
DEBUG - 2022-08-05 13:49:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:49:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:49:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:49:21 --> Total execution time: 0.1069
DEBUG - 2022-08-05 13:49:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:49:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:49:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:49:22 --> Total execution time: 0.0772
DEBUG - 2022-08-05 13:49:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:49:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:49:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:49:24 --> Total execution time: 0.0627
DEBUG - 2022-08-05 13:49:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:49:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:49:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:49:25 --> Total execution time: 0.0592
DEBUG - 2022-08-05 13:49:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:49:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:49:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:49:26 --> Total execution time: 0.0810
DEBUG - 2022-08-05 13:51:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:51:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:51:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:51:01 --> Total execution time: 0.0852
DEBUG - 2022-08-05 13:51:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:51:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:51:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:51:01 --> Total execution time: 0.0713
DEBUG - 2022-08-05 13:52:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:52:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:52:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:52:26 --> Total execution time: 0.0709
DEBUG - 2022-08-05 13:52:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:52:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:52:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:52:26 --> Total execution time: 0.0624
DEBUG - 2022-08-05 13:52:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:52:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:52:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:52:27 --> Total execution time: 0.1020
DEBUG - 2022-08-05 13:52:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:52:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:52:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:52:27 --> Total execution time: 0.0813
DEBUG - 2022-08-05 13:53:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:53:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:53:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:53:56 --> Total execution time: 0.1755
DEBUG - 2022-08-05 13:53:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 13:53:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 13:53:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 18:53:56 --> Total execution time: 0.1491
DEBUG - 2022-08-05 14:05:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 14:05:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 14:05:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 19:05:16 --> Total execution time: 0.3079
DEBUG - 2022-08-05 14:05:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 14:05:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 14:05:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 19:05:17 --> Total execution time: 0.2335
DEBUG - 2022-08-05 14:32:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 14:32:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 14:32:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 19:32:45 --> Total execution time: 0.2591
DEBUG - 2022-08-05 14:32:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 14:32:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 14:32:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 19:32:45 --> Total execution time: 0.1487
DEBUG - 2022-08-05 15:02:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:02:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:02:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:02:36 --> Total execution time: 0.3711
DEBUG - 2022-08-05 15:02:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:02:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:02:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:02:36 --> Total execution time: 0.3033
DEBUG - 2022-08-05 15:07:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:07:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:07:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 20:07:57 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'discount'. - Invalid query: SELECT t1.*, i.description, i.shortDesc, i.id as 'itemId'
                    FROM (
                        SELECT count(td.itemId) as qty, td.itemId, sum(td.price - td.discount) as 'totalPrice', 
                        sum(td.isSpecialPrice) as 'specialPrice', sum(td.discount) as 'totalDiscount'
                        from cso1_transactionDetail as td
                        where td.presence = 1 and td.transactionId = '2022000000026' and td.isFreeItem = 0
                        group by td.itemId, td.price
                    ) as t1
                    JOIN cso1_item as i on i.id = t1.itemId
                    ORDER BY i.description, t1.discount ASC
                
DEBUG - 2022-08-05 15:08:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:08:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:08:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 20:08:06 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'discount'. - Invalid query: SELECT t1.*, i.description, i.shortDesc, i.id as 'itemId'
                    FROM (
                        SELECT count(td.itemId) as qty, td.itemId, sum(td.price - td.discount) as 'totalPrice', 
                        sum(td.isSpecialPrice) as 'specialPrice', sum(td.discount) as 'totalDiscount'
                        from cso1_transactionDetail as td
                        where td.presence = 1 and td.transactionId = '2022000000026' and td.isFreeItem = 0
                        group by td.itemId, td.price
                    ) as t1
                    JOIN cso1_item as i on i.id = t1.itemId
                    ORDER BY i.description, t1.discount ASC
                
DEBUG - 2022-08-05 15:08:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:08:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:08:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:08:17 --> Total execution time: 0.1836
DEBUG - 2022-08-05 15:12:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:12:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:12:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:12:43 --> Total execution time: 0.3544
DEBUG - 2022-08-05 15:12:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:12:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:12:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:12:44 --> Total execution time: 0.2723
DEBUG - 2022-08-05 15:13:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:13:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:13:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:13:34 --> Total execution time: 0.2735
DEBUG - 2022-08-05 15:13:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:13:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:13:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:13:34 --> Total execution time: 0.1414
DEBUG - 2022-08-05 15:14:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:14:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:14:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:14:04 --> Total execution time: 0.2509
DEBUG - 2022-08-05 15:14:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:14:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:14:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:14:05 --> Total execution time: 0.3105
DEBUG - 2022-08-05 15:29:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:29:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:29:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:29:24 --> Total execution time: 0.2328
DEBUG - 2022-08-05 15:29:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:29:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:29:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:29:25 --> Total execution time: 0.1708
DEBUG - 2022-08-05 15:29:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:29:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:29:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:29:54 --> Total execution time: 0.2323
DEBUG - 2022-08-05 15:29:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:29:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:29:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:29:54 --> Total execution time: 0.1639
DEBUG - 2022-08-05 15:30:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:30:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:30:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:30:03 --> Total execution time: 0.1834
DEBUG - 2022-08-05 15:30:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:30:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:30:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:30:03 --> Total execution time: 0.3020
DEBUG - 2022-08-05 15:30:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:30:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:30:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:30:08 --> Total execution time: 0.1762
DEBUG - 2022-08-05 15:30:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:30:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:30:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:30:08 --> Total execution time: 0.2192
DEBUG - 2022-08-05 15:40:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:40:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:40:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:40:38 --> Total execution time: 0.2716
DEBUG - 2022-08-05 15:40:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:40:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:40:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:40:38 --> Total execution time: 0.2059
DEBUG - 2022-08-05 15:47:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:47:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:47:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:47:37 --> Total execution time: 0.2881
DEBUG - 2022-08-05 15:47:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:47:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:47:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:47:38 --> Total execution time: 0.1451
DEBUG - 2022-08-05 15:48:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:48:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:48:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:48:00 --> Total execution time: 0.2393
DEBUG - 2022-08-05 15:48:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:48:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:48:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:48:00 --> Total execution time: 0.1736
DEBUG - 2022-08-05 15:48:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:48:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:48:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:48:43 --> Total execution time: 0.2990
DEBUG - 2022-08-05 15:48:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:48:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:48:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:48:43 --> Total execution time: 0.1670
DEBUG - 2022-08-05 15:49:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:49:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:49:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:49:22 --> Total execution time: 0.2360
DEBUG - 2022-08-05 15:49:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:49:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:49:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:49:23 --> Total execution time: 0.2167
DEBUG - 2022-08-05 15:49:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:49:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:49:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:49:36 --> Total execution time: 0.1908
DEBUG - 2022-08-05 15:49:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:49:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:49:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:49:36 --> Total execution time: 0.1569
DEBUG - 2022-08-05 15:50:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:50:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:50:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:50:13 --> Total execution time: 0.2043
DEBUG - 2022-08-05 15:50:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:50:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:50:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:50:14 --> Total execution time: 0.1672
DEBUG - 2022-08-05 15:50:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:50:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:50:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:50:18 --> Total execution time: 0.4806
DEBUG - 2022-08-05 15:50:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:50:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:50:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:50:58 --> Total execution time: 0.2516
DEBUG - 2022-08-05 15:50:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:50:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:50:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:50:59 --> Total execution time: 0.1841
DEBUG - 2022-08-05 15:51:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:51:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:51:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:51:27 --> Total execution time: 0.2271
DEBUG - 2022-08-05 15:51:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:51:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:51:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:51:28 --> Total execution time: 0.2015
DEBUG - 2022-08-05 15:51:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:51:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:51:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:51:51 --> Total execution time: 0.2047
DEBUG - 2022-08-05 15:51:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:51:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:51:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:51:51 --> Total execution time: 0.1766
DEBUG - 2022-08-05 15:52:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:52:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:52:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:52:12 --> Total execution time: 0.1836
DEBUG - 2022-08-05 15:52:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:52:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:52:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:52:12 --> Total execution time: 0.1582
DEBUG - 2022-08-05 15:52:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:52:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:52:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:52:29 --> Total execution time: 0.3201
DEBUG - 2022-08-05 15:52:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:52:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:52:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:52:30 --> Total execution time: 0.7009
DEBUG - 2022-08-05 15:52:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:52:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:52:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:52:33 --> Total execution time: 0.3148
DEBUG - 2022-08-05 15:52:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:52:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:52:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:52:41 --> Total execution time: 0.6113
DEBUG - 2022-08-05 15:52:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:52:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:52:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:52:41 --> Total execution time: 0.2586
DEBUG - 2022-08-05 15:53:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:53:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:53:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:53:03 --> Total execution time: 0.2291
DEBUG - 2022-08-05 15:53:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:53:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:53:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:53:03 --> Total execution time: 0.1793
DEBUG - 2022-08-05 15:53:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:53:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:53:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:53:49 --> Total execution time: 0.3462
DEBUG - 2022-08-05 15:53:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:53:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:53:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:53:49 --> Total execution time: 0.1773
DEBUG - 2022-08-05 15:54:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:54:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:54:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:54:03 --> Total execution time: 0.1293
DEBUG - 2022-08-05 15:54:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:54:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:54:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:54:03 --> Total execution time: 0.0961
DEBUG - 2022-08-05 15:54:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:54:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:54:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:54:12 --> Total execution time: 0.1313
DEBUG - 2022-08-05 15:54:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:54:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:54:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:54:12 --> Total execution time: 0.1520
DEBUG - 2022-08-05 15:54:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:54:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:54:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:54:29 --> Total execution time: 0.0796
DEBUG - 2022-08-05 15:54:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:54:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:54:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:54:29 --> Total execution time: 0.0759
DEBUG - 2022-08-05 15:54:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:54:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:54:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:54:31 --> Total execution time: 0.1074
DEBUG - 2022-08-05 15:54:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:54:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:54:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:54:31 --> Total execution time: 0.0978
DEBUG - 2022-08-05 15:54:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:54:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:54:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:54:36 --> Total execution time: 0.0869
DEBUG - 2022-08-05 15:54:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:54:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:54:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:54:36 --> Total execution time: 0.0900
DEBUG - 2022-08-05 15:54:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:54:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:54:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:54:43 --> Total execution time: 0.1340
DEBUG - 2022-08-05 15:54:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:54:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:54:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:54:43 --> Total execution time: 0.1206
DEBUG - 2022-08-05 15:54:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:54:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:54:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:54:44 --> Total execution time: 0.1615
DEBUG - 2022-08-05 15:54:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:54:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:54:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:54:44 --> Total execution time: 0.1555
DEBUG - 2022-08-05 15:54:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 15:54:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 15:54:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 20:54:45 --> Total execution time: 0.1110
DEBUG - 2022-08-05 16:00:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:00:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:00:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 21:00:23 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskLogin.php 52
DEBUG - 2022-08-05 21:00:23 --> Total execution time: 0.0664
DEBUG - 2022-08-05 16:00:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:00:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:00:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:00:23 --> Total execution time: 0.0591
DEBUG - 2022-08-05 16:00:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:00:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:00:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:00:23 --> Total execution time: 0.1168
DEBUG - 2022-08-05 16:00:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:00:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:00:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:00:23 --> Total execution time: 0.0719
DEBUG - 2022-08-05 16:16:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:16:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:16:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:16:10 --> Total execution time: 0.0793
DEBUG - 2022-08-05 16:16:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:16:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:16:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:16:10 --> Total execution time: 0.1014
DEBUG - 2022-08-05 16:16:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:16:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:16:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:16:10 --> Total execution time: 0.0941
DEBUG - 2022-08-05 16:16:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:16:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:16:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:16:10 --> Total execution time: 0.0785
DEBUG - 2022-08-05 16:16:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:16:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:16:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:16:16 --> Total execution time: 0.0593
DEBUG - 2022-08-05 16:16:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:16:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:16:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:16:16 --> Total execution time: 0.0635
DEBUG - 2022-08-05 16:17:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:17:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:17:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:17:17 --> Total execution time: 0.4666
DEBUG - 2022-08-05 16:17:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:17:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:17:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:17:18 --> Total execution time: 0.4175
DEBUG - 2022-08-05 16:17:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:17:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:17:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:17:24 --> Total execution time: 0.2462
DEBUG - 2022-08-05 16:17:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:17:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:17:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:17:24 --> Total execution time: 0.2134
DEBUG - 2022-08-05 16:18:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:18:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:18:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:18:07 --> Total execution time: 0.2608
DEBUG - 2022-08-05 16:18:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:18:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:18:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:18:08 --> Total execution time: 0.1453
DEBUG - 2022-08-05 16:18:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:18:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:18:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:18:09 --> Total execution time: 0.0959
DEBUG - 2022-08-05 16:18:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:18:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:18:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:18:09 --> Total execution time: 0.1327
DEBUG - 2022-08-05 16:18:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:18:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:18:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:18:09 --> Total execution time: 0.1009
DEBUG - 2022-08-05 16:18:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:18:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:18:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:18:15 --> Total execution time: 0.0618
DEBUG - 2022-08-05 16:18:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:18:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:18:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:18:15 --> Total execution time: 0.0741
DEBUG - 2022-08-05 16:18:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:18:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:18:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:18:15 --> Total execution time: 0.0789
DEBUG - 2022-08-05 16:18:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:18:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:18:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:18:15 --> Total execution time: 0.0703
DEBUG - 2022-08-05 16:18:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:18:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:18:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:18:17 --> Total execution time: 0.0833
DEBUG - 2022-08-05 16:19:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:19:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:19:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:19:10 --> Total execution time: 0.2848
DEBUG - 2022-08-05 16:19:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:19:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:19:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:19:10 --> Total execution time: 0.1904
DEBUG - 2022-08-05 16:20:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:20:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:20:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:20:13 --> Total execution time: 0.2369
DEBUG - 2022-08-05 16:20:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:20:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:20:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:20:14 --> Total execution time: 0.1653
DEBUG - 2022-08-05 16:21:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:21:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:21:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:21:19 --> Total execution time: 0.3055
DEBUG - 2022-08-05 16:21:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:21:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:21:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:21:19 --> Total execution time: 0.1907
DEBUG - 2022-08-05 16:21:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:21:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:21:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:21:47 --> Total execution time: 0.3664
DEBUG - 2022-08-05 16:21:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:21:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:21:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:21:48 --> Total execution time: 0.2022
DEBUG - 2022-08-05 16:22:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:22:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:22:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:22:08 --> Total execution time: 0.4863
DEBUG - 2022-08-05 16:22:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:22:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:22:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:22:09 --> Total execution time: 0.3259
DEBUG - 2022-08-05 16:22:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:22:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:22:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:22:24 --> Total execution time: 0.3449
DEBUG - 2022-08-05 16:22:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:22:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:22:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:22:24 --> Total execution time: 0.2247
DEBUG - 2022-08-05 16:29:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:29:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:29:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:29:07 --> Total execution time: 0.3827
DEBUG - 2022-08-05 16:29:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:29:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:29:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:29:07 --> Total execution time: 0.2554
DEBUG - 2022-08-05 16:29:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:29:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:29:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:29:17 --> Total execution time: 0.4318
DEBUG - 2022-08-05 16:29:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:29:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:29:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:29:17 --> Total execution time: 0.3816
DEBUG - 2022-08-05 16:29:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:29:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:29:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:29:32 --> Total execution time: 0.3207
DEBUG - 2022-08-05 16:29:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:29:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:29:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:29:32 --> Total execution time: 0.2935
DEBUG - 2022-08-05 16:30:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:30:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:30:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:30:06 --> Total execution time: 0.2598
DEBUG - 2022-08-05 16:30:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:30:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:30:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:30:07 --> Total execution time: 0.1881
DEBUG - 2022-08-05 16:30:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:30:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:30:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 21:30:17 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskLogin.php 52
DEBUG - 2022-08-05 21:30:18 --> Total execution time: 0.0829
DEBUG - 2022-08-05 16:30:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:30:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:30:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:30:18 --> Total execution time: 0.0860
DEBUG - 2022-08-05 16:30:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:30:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:30:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:30:18 --> Total execution time: 0.1185
DEBUG - 2022-08-05 16:30:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:30:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:30:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:30:18 --> Total execution time: 0.0918
DEBUG - 2022-08-05 16:30:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:30:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:30:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:30:21 --> Total execution time: 0.0788
DEBUG - 2022-08-05 16:30:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:30:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:30:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:30:21 --> Total execution time: 0.1144
DEBUG - 2022-08-05 16:30:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:30:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:30:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:30:21 --> Total execution time: 0.0909
DEBUG - 2022-08-05 16:30:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:30:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:30:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:30:22 --> Total execution time: 0.0875
DEBUG - 2022-08-05 16:30:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:30:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:30:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:30:22 --> Total execution time: 0.0809
DEBUG - 2022-08-05 16:30:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:30:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:30:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:30:23 --> Total execution time: 0.0746
DEBUG - 2022-08-05 16:30:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:30:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:30:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:30:23 --> Total execution time: 0.0693
DEBUG - 2022-08-05 16:30:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:30:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:30:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:30:24 --> Total execution time: 0.0822
DEBUG - 2022-08-05 16:30:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:30:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:30:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:30:53 --> Total execution time: 0.1539
DEBUG - 2022-08-05 16:30:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:30:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:30:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:30:53 --> Total execution time: 0.1187
DEBUG - 2022-08-05 16:30:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:30:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:30:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 21:30:56 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 358
DEBUG - 2022-08-05 21:30:56 --> Total execution time: 0.0729
DEBUG - 2022-08-05 16:30:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:30:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:30:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:30:56 --> Total execution time: 0.0940
DEBUG - 2022-08-05 16:30:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:30:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:30:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:30:56 --> Total execution time: 0.1119
DEBUG - 2022-08-05 16:30:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:30:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:30:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:30:56 --> Total execution time: 0.1417
DEBUG - 2022-08-05 16:31:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:31:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:31:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:31:13 --> Total execution time: 0.1998
DEBUG - 2022-08-05 16:31:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:31:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:31:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:31:13 --> Total execution time: 0.1340
DEBUG - 2022-08-05 16:31:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:31:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:31:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:31:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:31:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:31:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:31:14 --> Total execution time: 0.2232
DEBUG - 2022-08-05 21:31:14 --> Total execution time: 0.2282
DEBUG - 2022-08-05 16:31:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:31:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:31:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:31:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:31:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:31:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:31:15 --> Total execution time: 0.2001
DEBUG - 2022-08-05 21:31:15 --> Total execution time: 0.1975
DEBUG - 2022-08-05 16:31:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:31:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:31:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:31:16 --> Total execution time: 0.1392
DEBUG - 2022-08-05 16:31:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:31:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:31:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:31:17 --> Total execution time: 0.1114
DEBUG - 2022-08-05 16:31:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:31:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:31:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-05 21:31:20 --> Severity: Notice --> Undefined variable: q1 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 358
DEBUG - 2022-08-05 21:31:20 --> Total execution time: 0.0827
DEBUG - 2022-08-05 16:31:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:31:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:31:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:31:20 --> Total execution time: 0.0936
DEBUG - 2022-08-05 16:31:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:31:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:31:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:31:21 --> Total execution time: 0.0931
DEBUG - 2022-08-05 16:31:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:31:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:31:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:31:21 --> Total execution time: 0.0900
DEBUG - 2022-08-05 16:31:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:31:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:31:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:31:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:31:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:31:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:31:22 --> Total execution time: 0.0801
DEBUG - 2022-08-05 21:31:22 --> Total execution time: 0.0791
DEBUG - 2022-08-05 16:31:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:31:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:31:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:31:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:31:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 16:31:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:31:23 --> Total execution time: 0.0835
DEBUG - 2022-08-05 21:31:23 --> Total execution time: 0.0837
DEBUG - 2022-08-05 16:31:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:31:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:31:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:31:29 --> Total execution time: 0.0825
DEBUG - 2022-08-05 16:31:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:31:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:31:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:31:29 --> Total execution time: 0.0731
DEBUG - 2022-08-05 16:31:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:31:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:31:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:31:32 --> Total execution time: 0.1054
DEBUG - 2022-08-05 16:31:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:31:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:31:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:31:32 --> Total execution time: 0.1054
DEBUG - 2022-08-05 16:31:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:31:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:31:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:31:33 --> Total execution time: 0.0652
DEBUG - 2022-08-05 16:31:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:31:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:31:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:31:33 --> Total execution time: 0.0697
DEBUG - 2022-08-05 16:31:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-05 16:31:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-05 16:31:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-05 21:31:33 --> Total execution time: 0.0800
