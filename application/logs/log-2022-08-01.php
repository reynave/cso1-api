<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2022-08-01 08:29:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:29:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:29:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 13:29:38 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 31
ERROR - 2022-08-01 13:29:38 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'itemQty'. - Invalid query: SELECT c.id, c.itemId, c.itemQty, i.description, c.finalPrice, c.discAmount, c.isPriceEdit,
                    i.shortDesc, i.id as itemId, i.barcode,   c.price, c.discAmount , c.finalDiscount
                    from cso1_kioskCart as c 
                    join cso1_item as i on c.itemId = i.id
                    where c.presence = 1 and c.kioskUuid = '62e73c9fa604d'
                    order by c.inputDate asc
DEBUG - 2022-08-01 08:34:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:34:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:34:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 13:34:17 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 30
ERROR - 2022-08-01 13:34:17 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'itemQty'. - Invalid query: select sum(itemQty * price) as 'subtotal' from cso1_kioskCart where presence = 1 and kioskUuid = '62e73c9fa604d' 
DEBUG - 2022-08-01 08:34:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:34:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:34:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 13:34:26 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 30
ERROR - 2022-08-01 13:34:26 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'itemQty'. - Invalid query: select sum(itemQty * price) as 'subtotal' from cso1_kioskCart where presence = 1 and kioskUuid = '62e73c9fa604d' 
DEBUG - 2022-08-01 08:34:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:34:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:34:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 13:34:47 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 30
DEBUG - 2022-08-01 13:34:47 --> Total execution time: 0.0902
DEBUG - 2022-08-01 08:34:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:34:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:34:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 13:34:50 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 30
DEBUG - 2022-08-01 13:34:50 --> Total execution time: 0.1108
DEBUG - 2022-08-01 08:34:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:34:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:34:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 13:34:50 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 30
DEBUG - 2022-08-01 13:34:50 --> Total execution time: 0.0957
DEBUG - 2022-08-01 08:35:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:35:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:35:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:35:19 --> Total execution time: 0.0618
DEBUG - 2022-08-01 08:38:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:38:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:38:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 13:38:11 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 30
DEBUG - 2022-08-01 13:38:11 --> Total execution time: 0.0659
DEBUG - 2022-08-01 08:38:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:38:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:38:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 13:38:36 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid object name 'cso1_kioskUuid2'. - Invalid query: SELECT * FROM cso1_kioskUuid2  where presence = 1 and kioskUuid = '62e73c9fa604d'
DEBUG - 2022-08-01 08:39:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:39:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:39:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:39:30 --> Total execution time: 0.0681
DEBUG - 2022-08-01 08:39:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:39:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:39:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:39:33 --> Total execution time: 0.0556
DEBUG - 2022-08-01 08:39:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:39:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:39:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:39:45 --> Total execution time: 0.0620
DEBUG - 2022-08-01 08:40:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:40:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:40:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:40:01 --> Total execution time: 0.0747
DEBUG - 2022-08-01 08:40:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:40:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:40:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:40:01 --> Total execution time: 0.0602
DEBUG - 2022-08-01 08:43:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:43:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:43:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 13:43:24 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 13:43:24 --> Total execution time: 0.0692
DEBUG - 2022-08-01 08:43:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:43:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:43:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 13:43:24 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'itemQty'. - Invalid query: INSERT INTO "cso1_kioskCart" ("id", "kioskUuid", "itemQty", "itemId", "finalDiscount", "price", "originPrice", "finalPrice", "void", "presence", "inputDate", "updateDate") VALUES (1659336204, '62e73c9fa604d', 1, '0000009', 0, 14500, 14500, 14500, 0, 1, 1659336204, 1659336204)
DEBUG - 2022-08-01 08:44:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:44:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:44:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:44:35 --> Total execution time: 0.0938
DEBUG - 2022-08-01 08:44:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:44:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:44:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:44:35 --> Total execution time: 0.0579
DEBUG - 2022-08-01 08:44:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:44:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:44:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 13:44:36 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 124
DEBUG - 2022-08-01 13:44:36 --> Total execution time: 0.0486
DEBUG - 2022-08-01 08:44:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:44:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:44:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 13:44:36 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Cannot insert explicit value for identity column in table 'cso1_kioskCart' when IDENTITY_INSERT is set to OFF. - Invalid query: INSERT INTO "cso1_kioskCart" ("id", "kioskUuid", "itemId", "price", "originPrice", "discount", "void", "presence", "inputDate", "updateDate") VALUES (1659336276, '62e73c9fa604d', '0000009', 14500, 14500, 0, 0, 1, 1659336276, 1659336276)
DEBUG - 2022-08-01 08:46:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:46:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:46:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:46:01 --> Total execution time: 0.0896
DEBUG - 2022-08-01 08:46:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:46:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:46:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:46:01 --> Total execution time: 0.0729
DEBUG - 2022-08-01 08:46:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:46:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:46:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 13:46:03 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 124
DEBUG - 2022-08-01 13:46:03 --> Total execution time: 0.0478
DEBUG - 2022-08-01 08:46:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:46:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:46:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 13:46:03 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Arithmetic overflow error converting expression to data type datetime. - Invalid query: INSERT INTO "cso1_kioskCart" ("id", "kioskUuid", "itemId", "price", "originPrice", "discount", "void", "presence", "inputDate", "updateDate") VALUES (1659336363, '62e73c9fa604d', '0000009', 14500, 14500, 0, 0, 1, 1659336363, 1659336363)
DEBUG - 2022-08-01 08:46:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:46:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:46:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 13:46:53 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 124
DEBUG - 2022-08-01 13:46:53 --> Total execution time: 0.0729
DEBUG - 2022-08-01 08:46:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:46:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:46:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:46:53 --> Total execution time: 0.0600
DEBUG - 2022-08-01 08:46:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:46:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:46:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:46:54 --> Total execution time: 0.1082
DEBUG - 2022-08-01 08:46:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:46:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:46:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:46:54 --> Total execution time: 0.0737
DEBUG - 2022-08-01 08:46:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:46:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:46:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:46:56 --> Total execution time: 0.0658
DEBUG - 2022-08-01 08:46:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:46:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:46:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:46:56 --> Total execution time: 0.0852
DEBUG - 2022-08-01 08:47:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:47:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:47:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 13:47:02 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 124
DEBUG - 2022-08-01 13:47:02 --> Total execution time: 0.0498
DEBUG - 2022-08-01 08:47:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:47:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:47:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:47:02 --> Total execution time: 0.0745
DEBUG - 2022-08-01 08:47:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:47:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:47:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:47:02 --> Total execution time: 0.0645
DEBUG - 2022-08-01 08:47:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:47:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:47:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:47:02 --> Total execution time: 0.0495
DEBUG - 2022-08-01 08:47:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:47:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:47:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:47:03 --> Total execution time: 0.0588
DEBUG - 2022-08-01 08:47:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:47:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:47:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:47:03 --> Total execution time: 0.0562
DEBUG - 2022-08-01 08:47:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:47:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:47:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:47:04 --> Total execution time: 0.0541
DEBUG - 2022-08-01 08:47:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:47:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:47:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:47:04 --> Total execution time: 0.0725
DEBUG - 2022-08-01 08:47:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:47:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:47:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:47:05 --> Total execution time: 0.0563
DEBUG - 2022-08-01 08:47:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:47:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:47:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:47:05 --> Total execution time: 0.0525
DEBUG - 2022-08-01 08:47:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:47:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:47:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:47:06 --> Total execution time: 0.0545
DEBUG - 2022-08-01 08:47:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:47:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:47:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:47:06 --> Total execution time: 0.0526
DEBUG - 2022-08-01 08:57:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:57:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:57:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 13:57:43 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 124
DEBUG - 2022-08-01 13:57:43 --> Total execution time: 0.0544
DEBUG - 2022-08-01 08:57:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:57:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:57:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:57:43 --> Total execution time: 0.0576
DEBUG - 2022-08-01 08:57:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:57:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:57:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:57:43 --> Total execution time: 0.0594
DEBUG - 2022-08-01 08:57:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:57:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:57:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:57:43 --> Total execution time: 0.0477
DEBUG - 2022-08-01 08:59:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:59:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:59:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:59:05 --> Total execution time: 0.0899
DEBUG - 2022-08-01 08:59:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:59:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:59:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:59:05 --> Total execution time: 0.0639
DEBUG - 2022-08-01 08:59:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:59:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:59:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 13:59:06 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 124
DEBUG - 2022-08-01 13:59:06 --> Total execution time: 0.0485
DEBUG - 2022-08-01 08:59:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:59:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:59:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:59:06 --> Total execution time: 0.0568
DEBUG - 2022-08-01 08:59:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:59:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:59:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:59:06 --> Total execution time: 0.0516
DEBUG - 2022-08-01 08:59:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:59:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:59:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:59:17 --> Total execution time: 0.1087
DEBUG - 2022-08-01 08:59:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:59:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:59:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:59:17 --> Total execution time: 0.0724
DEBUG - 2022-08-01 08:59:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:59:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:59:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:59:50 --> Total execution time: 0.0939
DEBUG - 2022-08-01 08:59:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 08:59:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 08:59:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 13:59:50 --> Total execution time: 0.0920
DEBUG - 2022-08-01 09:00:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:00:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:00:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:00:18 --> Total execution time: 0.1274
DEBUG - 2022-08-01 09:00:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:00:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:00:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:00:18 --> Total execution time: 0.0757
DEBUG - 2022-08-01 09:00:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:00:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:00:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:00:24 --> Total execution time: 0.1871
DEBUG - 2022-08-01 09:00:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:00:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:00:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:00:25 --> Total execution time: 0.1464
DEBUG - 2022-08-01 09:22:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:22:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:22:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:22:38 --> Total execution time: 0.0967
DEBUG - 2022-08-01 09:22:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:22:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:22:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:22:38 --> Total execution time: 0.0606
DEBUG - 2022-08-01 09:23:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:23:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:23:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:23:23 --> Total execution time: 0.0976
DEBUG - 2022-08-01 09:23:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:23:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:23:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:23:23 --> Total execution time: 0.0922
DEBUG - 2022-08-01 09:24:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:24:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:24:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:24:11 --> Total execution time: 0.1064
DEBUG - 2022-08-01 09:24:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:24:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:24:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:24:11 --> Total execution time: 0.0750
DEBUG - 2022-08-01 09:24:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:24:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:24:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:24:22 --> Total execution time: 0.1420
DEBUG - 2022-08-01 09:24:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:24:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:24:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:24:22 --> Total execution time: 0.1603
DEBUG - 2022-08-01 09:24:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:24:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:24:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:24:39 --> Total execution time: 0.1407
DEBUG - 2022-08-01 09:24:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:24:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:24:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:24:39 --> Total execution time: 0.1202
DEBUG - 2022-08-01 09:25:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:25:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:25:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 14:25:07 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 127
DEBUG - 2022-08-01 14:25:07 --> Total execution time: 0.0512
DEBUG - 2022-08-01 09:25:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:25:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:25:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:25:07 --> Total execution time: 0.0532
DEBUG - 2022-08-01 09:25:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:25:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:25:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:25:07 --> Total execution time: 0.0525
DEBUG - 2022-08-01 09:25:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:25:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:25:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:25:08 --> Total execution time: 0.0477
DEBUG - 2022-08-01 09:25:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:25:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:25:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:25:10 --> Total execution time: 0.0534
DEBUG - 2022-08-01 09:25:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:25:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:25:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:25:10 --> Total execution time: 0.0484
DEBUG - 2022-08-01 09:25:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:25:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:25:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:25:12 --> Total execution time: 0.0510
DEBUG - 2022-08-01 09:25:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:25:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:25:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:25:12 --> Total execution time: 0.0506
DEBUG - 2022-08-01 09:25:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:25:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:25:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 14:25:13 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 127
DEBUG - 2022-08-01 14:25:13 --> Total execution time: 0.0470
DEBUG - 2022-08-01 09:25:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:25:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:25:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:25:13 --> Total execution time: 0.0571
DEBUG - 2022-08-01 09:25:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:25:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:25:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:25:13 --> Total execution time: 0.0580
DEBUG - 2022-08-01 09:25:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:25:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:25:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:25:13 --> Total execution time: 0.0520
DEBUG - 2022-08-01 09:25:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:25:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:25:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:25:14 --> Total execution time: 0.0533
DEBUG - 2022-08-01 09:25:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:25:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:25:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:25:14 --> Total execution time: 0.0524
DEBUG - 2022-08-01 09:25:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:25:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:25:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:25:16 --> Total execution time: 0.0623
DEBUG - 2022-08-01 09:25:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:25:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:25:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:25:16 --> Total execution time: 0.0536
DEBUG - 2022-08-01 09:26:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:26:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:26:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:26:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:26:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:26:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:26:52 --> Total execution time: 0.1401
DEBUG - 2022-08-01 09:43:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:43:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:43:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:43:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:43:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:43:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:43:03 --> Total execution time: 0.1465
DEBUG - 2022-08-01 09:43:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:43:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:43:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:43:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:43:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:43:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:43:03 --> Total execution time: 0.0838
DEBUG - 2022-08-01 09:43:03 --> Total execution time: 0.1122
DEBUG - 2022-08-01 09:43:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:43:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:43:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:43:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:43:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:43:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:43:04 --> Total execution time: 0.0924
DEBUG - 2022-08-01 09:43:04 --> Total execution time: 0.1266
DEBUG - 2022-08-01 09:43:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:43:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:43:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:43:05 --> Total execution time: 0.0654
DEBUG - 2022-08-01 09:45:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:45:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:45:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:45:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:45:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:45:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:45:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:45:31 --> Total execution time: 0.4012
DEBUG - 2022-08-01 09:45:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:45:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:45:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:45:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:45:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:45:31 --> Total execution time: 0.3538
DEBUG - 2022-08-01 09:45:31 --> Total execution time: 0.2710
DEBUG - 2022-08-01 09:45:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:45:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:45:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:45:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:45:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:45:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:45:33 --> Total execution time: 0.2475
DEBUG - 2022-08-01 09:45:33 --> Total execution time: 0.2883
DEBUG - 2022-08-01 09:45:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:45:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:45:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:45:33 --> Total execution time: 0.1743
DEBUG - 2022-08-01 09:45:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:45:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:45:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:45:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:45:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:45:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:45:38 --> Total execution time: 0.2795
DEBUG - 2022-08-01 09:45:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:45:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:45:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:45:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:45:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:45:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:45:39 --> Total execution time: 0.2946
DEBUG - 2022-08-01 09:45:39 --> Total execution time: 0.2995
DEBUG - 2022-08-01 09:46:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:46:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:46:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:46:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:46:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:46:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:46:19 --> Total execution time: 0.2131
DEBUG - 2022-08-01 09:46:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:46:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:46:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:46:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:46:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:46:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:46:19 --> Total execution time: 0.1206
DEBUG - 2022-08-01 09:46:19 --> Total execution time: 0.1606
DEBUG - 2022-08-01 09:47:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:47:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:47:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:47:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:47:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:47:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:47:00 --> Total execution time: 0.1632
DEBUG - 2022-08-01 09:47:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:47:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:47:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:47:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:47:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:47:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:47:00 --> Total execution time: 0.1616
DEBUG - 2022-08-01 09:47:00 --> Total execution time: 0.1573
DEBUG - 2022-08-01 09:47:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:47:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:47:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:47:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:47:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:47:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:47:23 --> Total execution time: 0.1569
DEBUG - 2022-08-01 09:47:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:47:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:47:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:47:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:47:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:47:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:47:23 --> Total execution time: 0.1273
DEBUG - 2022-08-01 09:47:23 --> Total execution time: 0.1005
DEBUG - 2022-08-01 09:47:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:47:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:47:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:47:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:47:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:47:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:47:58 --> Total execution time: 0.1305
DEBUG - 2022-08-01 09:47:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:47:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:47:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:47:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:47:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:47:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:47:58 --> Total execution time: 0.1202
DEBUG - 2022-08-01 09:47:58 --> Total execution time: 0.1181
DEBUG - 2022-08-01 09:48:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:48:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:48:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:48:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:48:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:48:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:48:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:48:36 --> Total execution time: 0.1553
DEBUG - 2022-08-01 09:48:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:48:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:48:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:48:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:48:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:48:36 --> Total execution time: 0.1705
DEBUG - 2022-08-01 09:48:36 --> Total execution time: 0.1481
DEBUG - 2022-08-01 09:51:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:51:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:51:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:51:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:51:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:51:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:51:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:51:01 --> Total execution time: 0.1458
DEBUG - 2022-08-01 09:51:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:51:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:51:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:51:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:51:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:51:01 --> Total execution time: 0.1475
DEBUG - 2022-08-01 09:51:01 --> Total execution time: 0.1111
DEBUG - 2022-08-01 09:51:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:51:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:51:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:51:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:51:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:51:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:51:20 --> Total execution time: 0.1366
DEBUG - 2022-08-01 09:51:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:51:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:51:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:51:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:51:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:51:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:51:20 --> Total execution time: 0.1597
DEBUG - 2022-08-01 09:51:20 --> Total execution time: 0.1610
DEBUG - 2022-08-01 09:51:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:51:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:51:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:51:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:51:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:51:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:51:34 --> Total execution time: 0.1308
DEBUG - 2022-08-01 09:51:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:51:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:51:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:51:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:51:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:51:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:51:34 --> Total execution time: 0.1769
DEBUG - 2022-08-01 09:51:34 --> Total execution time: 0.1746
DEBUG - 2022-08-01 09:51:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:51:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:51:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:51:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:51:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:51:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:51:56 --> Total execution time: 0.1057
DEBUG - 2022-08-01 09:51:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:51:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:51:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:51:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:51:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:51:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 09:51:56 --> Total execution time: 0.0836
DEBUG - 2022-08-01 09:51:56 --> Total execution time: 0.0619
DEBUG - 2022-08-01 09:59:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:59:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:59:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 09:59:35 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 251
DEBUG - 2022-08-01 09:59:35 --> Total execution time: 0.0612
DEBUG - 2022-08-01 09:59:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 09:59:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 09:59:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 09:59:35 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'discountFinal'. - Invalid query: UPDATE "cso1_promotionItem" SET "qtyFrom" = 2, "qtyTo" = 3, "discountPrice" = 5766, "disc1" = 10, "disc2" = 10, "disc3" = 10, "status" = 1, "discountFinal" = 41884, "updateDate" = 1659340775, "updateBy" = '1'
WHERE "id" = '1037' 
DEBUG - 2022-08-01 10:00:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:00:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:00:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:00:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:00:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:00:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:00:34 --> Total execution time: 0.1505
DEBUG - 2022-08-01 10:00:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:00:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:00:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:00:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:00:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:00:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:00:34 --> Total execution time: 0.1539
DEBUG - 2022-08-01 10:00:34 --> Total execution time: 0.1293
DEBUG - 2022-08-01 10:00:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:00:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:00:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 10:00:39 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 236
DEBUG - 2022-08-01 10:00:39 --> Total execution time: 0.0540
DEBUG - 2022-08-01 10:00:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:00:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:00:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:00:39 --> Total execution time: 0.0697
DEBUG - 2022-08-01 10:00:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:00:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:00:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:00:39 --> Total execution time: 0.0618
DEBUG - 2022-08-01 10:00:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:00:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:00:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:00:39 --> Total execution time: 0.0723
DEBUG - 2022-08-01 10:00:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:00:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:00:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 10:00:44 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 236
DEBUG - 2022-08-01 10:00:44 --> Total execution time: 0.0586
DEBUG - 2022-08-01 10:00:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:00:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:00:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:00:44 --> Total execution time: 0.0593
DEBUG - 2022-08-01 10:00:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:00:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:00:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:00:44 --> Total execution time: 0.0577
DEBUG - 2022-08-01 10:00:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:00:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:00:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:00:44 --> Total execution time: 0.0641
DEBUG - 2022-08-01 10:00:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:00:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:00:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:00:46 --> Total execution time: 0.0628
DEBUG - 2022-08-01 10:00:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:00:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:00:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:00:46 --> Total execution time: 0.0604
DEBUG - 2022-08-01 10:01:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:01:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:01:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:01:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:01:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:01:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:01:28 --> Total execution time: 0.2639
DEBUG - 2022-08-01 10:01:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:01:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:01:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:01:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:01:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:01:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:01:28 --> Total execution time: 0.2730
DEBUG - 2022-08-01 10:01:28 --> Total execution time: 0.2514
DEBUG - 2022-08-01 10:01:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:01:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:01:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 10:01:33 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 236
DEBUG - 2022-08-01 10:01:33 --> Total execution time: 0.0727
DEBUG - 2022-08-01 10:01:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:01:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:01:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:01:33 --> Total execution time: 0.0880
DEBUG - 2022-08-01 10:01:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:01:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:01:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:01:33 --> Total execution time: 0.0804
DEBUG - 2022-08-01 10:01:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:01:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:01:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:01:36 --> Total execution time: 0.0603
DEBUG - 2022-08-01 10:01:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:01:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:01:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:01:36 --> Total execution time: 0.0669
DEBUG - 2022-08-01 10:01:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:01:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:01:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:01:36 --> Total execution time: 0.0579
DEBUG - 2022-08-01 10:02:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:02:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:02:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:02:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:02:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:02:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:02:03 --> Total execution time: 0.1759
DEBUG - 2022-08-01 10:02:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:02:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:02:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:02:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:02:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:02:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:02:03 --> Total execution time: 0.1914
DEBUG - 2022-08-01 10:02:03 --> Total execution time: 0.2241
DEBUG - 2022-08-01 10:02:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:02:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:02:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 10:02:07 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 236
DEBUG - 2022-08-01 10:02:07 --> Total execution time: 0.0776
DEBUG - 2022-08-01 10:02:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:02:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:02:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:02:07 --> Total execution time: 0.0790
DEBUG - 2022-08-01 10:02:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:02:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:02:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:02:07 --> Total execution time: 0.0825
DEBUG - 2022-08-01 10:04:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:04:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:04:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 10:04:19 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 231
DEBUG - 2022-08-01 10:04:19 --> Total execution time: 0.0624
DEBUG - 2022-08-01 10:04:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:04:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:04:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:04:19 --> Total execution time: 0.0641
DEBUG - 2022-08-01 10:04:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:04:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:04:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:04:19 --> Total execution time: 0.0792
DEBUG - 2022-08-01 10:04:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:04:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:04:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:04:20 --> Total execution time: 0.0496
DEBUG - 2022-08-01 10:04:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:04:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:04:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:04:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:04:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:04:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:04:21 --> Total execution time: 0.0946
DEBUG - 2022-08-01 10:04:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:04:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:04:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:04:21 --> Total execution time: 0.0993
DEBUG - 2022-08-01 10:04:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:04:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:04:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 10:04:26 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 231
DEBUG - 2022-08-01 10:04:26 --> Total execution time: 0.0660
DEBUG - 2022-08-01 10:04:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:04:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:04:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:04:27 --> Total execution time: 0.0629
DEBUG - 2022-08-01 10:04:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:04:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:04:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:04:27 --> Total execution time: 0.0675
DEBUG - 2022-08-01 10:04:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:04:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:04:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:04:27 --> Total execution time: 0.0554
DEBUG - 2022-08-01 10:05:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:05:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:05:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 10:05:10 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 231
DEBUG - 2022-08-01 10:05:10 --> Total execution time: 0.0559
DEBUG - 2022-08-01 10:05:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:05:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:05:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:05:10 --> Total execution time: 0.0608
DEBUG - 2022-08-01 10:05:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:05:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:05:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:05:10 --> Total execution time: 0.0646
DEBUG - 2022-08-01 10:05:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:05:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:05:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:05:10 --> Total execution time: 0.0511
DEBUG - 2022-08-01 10:05:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:05:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:05:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:05:11 --> Total execution time: 0.0597
DEBUG - 2022-08-01 10:05:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:05:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:05:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:05:11 --> Total execution time: 0.0573
DEBUG - 2022-08-01 10:05:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:05:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:05:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:05:13 --> Total execution time: 0.0578
DEBUG - 2022-08-01 10:05:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:05:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:05:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:05:13 --> Total execution time: 0.0652
DEBUG - 2022-08-01 10:05:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:05:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:05:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 10:05:17 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 231
DEBUG - 2022-08-01 10:05:17 --> Total execution time: 0.0521
DEBUG - 2022-08-01 10:05:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:05:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:05:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:05:17 --> Total execution time: 0.0613
DEBUG - 2022-08-01 10:05:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:05:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:05:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:05:17 --> Total execution time: 0.0577
DEBUG - 2022-08-01 10:05:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:05:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:05:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:05:17 --> Total execution time: 0.0549
DEBUG - 2022-08-01 10:05:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:05:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:05:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 10:05:24 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 231
DEBUG - 2022-08-01 10:05:24 --> Total execution time: 0.0526
DEBUG - 2022-08-01 10:05:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:05:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:05:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:05:24 --> Total execution time: 0.0581
DEBUG - 2022-08-01 10:05:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:05:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:05:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:05:25 --> Total execution time: 0.0634
DEBUG - 2022-08-01 10:05:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:05:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:05:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:05:25 --> Total execution time: 0.0506
DEBUG - 2022-08-01 10:05:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:05:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:05:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:05:26 --> Total execution time: 0.0566
DEBUG - 2022-08-01 10:05:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:05:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:05:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:05:26 --> Total execution time: 0.0666
DEBUG - 2022-08-01 10:08:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:08:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:08:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:08:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:08:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:08:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:08:50 --> Total execution time: 0.1232
DEBUG - 2022-08-01 10:08:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:08:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:08:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:08:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:08:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:08:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:08:50 --> Total execution time: 0.1097
DEBUG - 2022-08-01 10:08:50 --> Total execution time: 0.1370
DEBUG - 2022-08-01 10:08:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:08:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:08:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 10:08:57 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 231
DEBUG - 2022-08-01 10:08:57 --> Total execution time: 0.0615
DEBUG - 2022-08-01 10:08:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:08:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:08:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:08:57 --> Total execution time: 0.0597
DEBUG - 2022-08-01 10:08:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:08:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:08:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:08:57 --> Total execution time: 0.0631
DEBUG - 2022-08-01 10:08:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:08:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:08:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:08:57 --> Total execution time: 0.0517
DEBUG - 2022-08-01 10:09:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 10:09:02 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 231
DEBUG - 2022-08-01 10:09:02 --> Total execution time: 0.0588
DEBUG - 2022-08-01 10:09:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:02 --> Total execution time: 0.0596
DEBUG - 2022-08-01 10:09:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:02 --> Total execution time: 0.0629
DEBUG - 2022-08-01 10:09:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:02 --> Total execution time: 0.0563
DEBUG - 2022-08-01 10:09:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:04 --> Total execution time: 0.0562
DEBUG - 2022-08-01 10:09:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:04 --> Total execution time: 0.0632
DEBUG - 2022-08-01 10:09:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 10:09:15 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 231
DEBUG - 2022-08-01 10:09:15 --> Total execution time: 0.0540
DEBUG - 2022-08-01 10:09:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:15 --> Total execution time: 0.0636
DEBUG - 2022-08-01 10:09:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:15 --> Total execution time: 0.0668
DEBUG - 2022-08-01 10:09:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:15 --> Total execution time: 0.0512
DEBUG - 2022-08-01 10:09:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:29 --> Total execution time: 0.1308
DEBUG - 2022-08-01 10:09:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:29 --> Total execution time: 0.1054
DEBUG - 2022-08-01 10:09:29 --> Total execution time: 0.1254
DEBUG - 2022-08-01 10:09:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 10:09:32 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 231
DEBUG - 2022-08-01 10:09:32 --> Total execution time: 0.0718
DEBUG - 2022-08-01 10:09:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:32 --> Total execution time: 0.0676
DEBUG - 2022-08-01 10:09:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:32 --> Total execution time: 0.0807
DEBUG - 2022-08-01 10:09:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:34 --> Total execution time: 0.0572
DEBUG - 2022-08-01 10:09:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:34 --> Total execution time: 0.0616
DEBUG - 2022-08-01 10:09:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 10:09:42 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 231
DEBUG - 2022-08-01 10:09:42 --> Total execution time: 0.0593
DEBUG - 2022-08-01 10:09:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:42 --> Total execution time: 0.0556
DEBUG - 2022-08-01 10:09:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:42 --> Total execution time: 0.0597
DEBUG - 2022-08-01 10:09:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:42 --> Total execution time: 0.0526
DEBUG - 2022-08-01 10:09:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:47 --> Total execution time: 0.0621
DEBUG - 2022-08-01 10:09:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:47 --> Total execution time: 0.0597
DEBUG - 2022-08-01 10:09:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 10:09:50 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 231
DEBUG - 2022-08-01 10:09:50 --> Total execution time: 0.0577
DEBUG - 2022-08-01 10:09:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:50 --> Total execution time: 0.0584
DEBUG - 2022-08-01 10:09:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:50 --> Total execution time: 0.0665
DEBUG - 2022-08-01 10:09:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:50 --> Total execution time: 0.0579
DEBUG - 2022-08-01 10:09:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:52 --> Total execution time: 0.0599
DEBUG - 2022-08-01 10:09:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:52 --> Total execution time: 0.0863
DEBUG - 2022-08-01 10:09:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 10:09:55 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 231
DEBUG - 2022-08-01 10:09:55 --> Total execution time: 0.0543
DEBUG - 2022-08-01 10:09:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:55 --> Total execution time: 0.0595
DEBUG - 2022-08-01 10:09:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:55 --> Total execution time: 0.0600
DEBUG - 2022-08-01 10:09:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:09:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:09:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:09:56 --> Total execution time: 0.0513
DEBUG - 2022-08-01 10:10:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:10:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:10:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 10:10:05 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 231
DEBUG - 2022-08-01 10:10:05 --> Total execution time: 0.0547
DEBUG - 2022-08-01 10:10:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:10:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:10:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:10:05 --> Total execution time: 0.0581
DEBUG - 2022-08-01 10:10:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:10:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:10:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:10:05 --> Total execution time: 0.0610
DEBUG - 2022-08-01 10:10:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:10:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:10:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:10:05 --> Total execution time: 0.0497
DEBUG - 2022-08-01 10:10:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:10:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:10:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 10:10:33 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 231
DEBUG - 2022-08-01 10:10:33 --> Total execution time: 0.0615
DEBUG - 2022-08-01 10:10:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:10:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:10:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:10:33 --> Total execution time: 0.0635
DEBUG - 2022-08-01 10:10:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:10:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:10:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:10:33 --> Total execution time: 0.0656
DEBUG - 2022-08-01 10:10:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 10:10:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 10:10:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 10:10:33 --> Total execution time: 0.0554
DEBUG - 2022-08-01 11:26:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:26:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:26:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:26:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:26:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:26:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:26:00 --> Total execution time: 0.2087
DEBUG - 2022-08-01 11:26:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:26:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:26:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:26:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:26:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:26:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:26:00 --> Total execution time: 0.1033
DEBUG - 2022-08-01 11:26:00 --> Total execution time: 0.0965
DEBUG - 2022-08-01 11:26:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:26:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:26:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:26:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:26:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:26:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:26:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:26:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:26:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:26:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:26:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:26:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:26:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:26:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:26:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:26:07 --> Total execution time: 0.1037
DEBUG - 2022-08-01 11:26:07 --> Total execution time: 0.1061
DEBUG - 2022-08-01 11:26:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:26:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:26:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:26:07 --> Total execution time: 0.0634
DEBUG - 2022-08-01 11:26:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:26:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:26:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:26:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:26:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:26:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:26:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:26:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:26:10 --> Total execution time: 0.1545
DEBUG - 2022-08-01 11:26:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:26:10 --> Total execution time: 0.2345
DEBUG - 2022-08-01 11:26:10 --> Total execution time: 0.1387
DEBUG - 2022-08-01 11:26:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:26:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:26:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:26:10 --> Total execution time: 0.0700
DEBUG - 2022-08-01 11:26:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:26:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:26:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:26:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:26:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:26:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:26:10 --> Total execution time: 0.1236
DEBUG - 2022-08-01 11:26:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:26:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:26:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:26:11 --> Total execution time: 0.5732
DEBUG - 2022-08-01 11:29:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:29:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:29:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 16:29:30 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 124
DEBUG - 2022-08-01 16:29:30 --> Total execution time: 0.4079
DEBUG - 2022-08-01 11:29:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:29:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:29:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:29:31 --> Total execution time: 0.6368
DEBUG - 2022-08-01 11:29:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:29:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:29:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:29:31 --> Total execution time: 0.6410
DEBUG - 2022-08-01 11:29:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:29:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:29:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:29:32 --> Total execution time: 0.5508
DEBUG - 2022-08-01 11:29:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:29:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:29:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:29:33 --> Total execution time: 0.3444
DEBUG - 2022-08-01 11:29:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:29:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:29:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:29:33 --> Total execution time: 0.3318
DEBUG - 2022-08-01 11:29:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:29:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:29:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:29:39 --> Total execution time: 0.4822
DEBUG - 2022-08-01 11:29:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:29:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:29:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:29:40 --> Total execution time: 0.7840
DEBUG - 2022-08-01 11:34:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:34:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:34:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:34:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:34:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:34:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:34:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:34:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:34:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:34:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:34:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:34:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:34:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:34:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:34:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:34:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:34:48 --> Total execution time: 0.0700
DEBUG - 2022-08-01 11:34:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:34:48 --> Total execution time: 0.0739
DEBUG - 2022-08-01 11:34:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:34:48 --> Total execution time: 0.0695
DEBUG - 2022-08-01 11:34:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:34:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:34:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:34:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:34:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:34:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:34:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:34:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:34:49 --> Total execution time: 0.1401
DEBUG - 2022-08-01 11:34:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:34:49 --> Total execution time: 0.2016
DEBUG - 2022-08-01 11:34:49 --> Total execution time: 0.1079
DEBUG - 2022-08-01 11:34:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:34:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:34:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:34:49 --> Total execution time: 0.0662
DEBUG - 2022-08-01 11:34:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:34:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:34:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:34:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:34:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:34:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:34:50 --> Total execution time: 0.1203
DEBUG - 2022-08-01 11:34:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:34:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:34:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:34:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:34:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:34:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:34:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:34:51 --> Total execution time: 0.5888
DEBUG - 2022-08-01 11:34:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:34:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:34:51 --> Total execution time: 0.1580
DEBUG - 2022-08-01 11:34:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:34:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:34:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:34:51 --> Total execution time: 0.0737
DEBUG - 2022-08-01 11:34:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:34:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:34:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:34:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:34:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:34:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:34:51 --> Total execution time: 0.1353
DEBUG - 2022-08-01 11:34:51 --> Total execution time: 0.1314
DEBUG - 2022-08-01 11:34:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:34:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:34:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:34:51 --> Total execution time: 0.0588
DEBUG - 2022-08-01 11:34:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:34:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:34:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:34:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:34:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:34:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:34:54 --> Total execution time: 0.1273
DEBUG - 2022-08-01 11:34:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:34:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:34:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:34:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:34:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:34:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:34:54 --> Total execution time: 0.0650
DEBUG - 2022-08-01 11:34:54 --> Total execution time: 0.0524
DEBUG - 2022-08-01 11:34:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:34:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:34:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 16:34:59 --> Severity: Notice --> Undefined property: KioskCart::$modal C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 123
ERROR - 2022-08-01 16:34:59 --> Severity: error --> Exception: Call to a member function promotionItem() on null C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 123
DEBUG - 2022-08-01 11:35:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:35:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:35:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:35:08 --> Total execution time: 0.1001
DEBUG - 2022-08-01 11:35:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:35:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:35:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:35:08 --> Total execution time: 0.0631
DEBUG - 2022-08-01 11:35:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:35:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:35:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 16:35:09 --> Severity: Notice --> Undefined property: KioskCart::$modal C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 123
ERROR - 2022-08-01 16:35:09 --> Severity: error --> Exception: Call to a member function promotionItem() on null C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 123
DEBUG - 2022-08-01 11:35:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:35:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:35:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 16:35:12 --> Severity: Notice --> Undefined property: KioskCart::$modal C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 123
ERROR - 2022-08-01 16:35:12 --> Severity: error --> Exception: Call to a member function promotionItem() on null C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 123
DEBUG - 2022-08-01 11:35:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:35:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:35:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:35:25 --> Total execution time: 0.1388
DEBUG - 2022-08-01 11:35:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:35:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:35:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:35:25 --> Total execution time: 0.1352
DEBUG - 2022-08-01 11:35:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:35:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:35:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 16:35:27 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 125
DEBUG - 2022-08-01 16:35:27 --> Total execution time: 0.0783
DEBUG - 2022-08-01 11:35:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:35:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:35:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:35:27 --> Total execution time: 0.0871
DEBUG - 2022-08-01 11:35:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:35:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:35:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:35:27 --> Total execution time: 0.0848
DEBUG - 2022-08-01 11:35:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:35:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:35:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:35:32 --> Total execution time: 0.0887
DEBUG - 2022-08-01 11:35:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:35:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:35:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:35:32 --> Total execution time: 0.0608
DEBUG - 2022-08-01 11:35:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:35:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:35:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:35:49 --> Total execution time: 0.1347
DEBUG - 2022-08-01 11:35:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:35:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:35:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:35:49 --> Total execution time: 0.1248
DEBUG - 2022-08-01 11:35:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:35:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:35:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 16:35:50 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 125
DEBUG - 2022-08-01 16:35:50 --> Total execution time: 0.0943
DEBUG - 2022-08-01 11:35:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:35:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:35:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:35:50 --> Total execution time: 0.1085
DEBUG - 2022-08-01 11:35:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:35:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:35:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:35:50 --> Total execution time: 0.1027
DEBUG - 2022-08-01 11:35:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:35:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:35:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:35:51 --> Total execution time: 0.0952
DEBUG - 2022-08-01 11:35:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:35:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:35:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:35:51 --> Total execution time: 0.0879
DEBUG - 2022-08-01 11:36:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:36:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:36:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 11:36:08 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 231
DEBUG - 2022-08-01 11:36:08 --> Total execution time: 0.0548
DEBUG - 2022-08-01 11:36:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:36:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:36:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:36:08 --> Total execution time: 0.0618
DEBUG - 2022-08-01 11:36:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:36:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:36:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:36:08 --> Total execution time: 0.0689
DEBUG - 2022-08-01 11:36:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:36:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:36:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 11:36:09 --> Total execution time: 0.0528
DEBUG - 2022-08-01 11:54:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:54:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:54:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 16:54:19 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'status'. - Invalid query: SELECT * FROM cso1_kioskCart   WHERE  kioskUuid = '' and  presence =1 AND status = 1
DEBUG - 2022-08-01 11:54:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:54:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:54:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 16:54:49 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'status'. - Invalid query: SELECT * FROM cso1_kioskCart   WHERE  kioskUuid = '' and  presence =1 AND status = 1
DEBUG - 2022-08-01 11:55:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:55:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:55:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:55:20 --> Total execution time: 0.1012
DEBUG - 2022-08-01 11:55:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:55:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:55:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:55:20 --> Total execution time: 0.0630
DEBUG - 2022-08-01 11:55:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:55:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:55:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 16:55:23 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 125
DEBUG - 2022-08-01 16:55:23 --> Total execution time: 0.0572
DEBUG - 2022-08-01 11:55:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:55:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:55:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 16:55:24 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'isEditPrice'. - Invalid query: SELECT id FROM cso1_promotionItem WHERE isEditPrice = 0 AND presence = 1  AND promotionId = 'PR000010' and itemId = '0009542' 
DEBUG - 2022-08-01 11:55:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:55:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:55:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:55:45 --> Total execution time: 0.1715
DEBUG - 2022-08-01 11:55:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:55:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:55:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:55:45 --> Total execution time: 0.1086
DEBUG - 2022-08-01 11:55:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:55:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:55:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 16:55:50 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 125
DEBUG - 2022-08-01 16:55:50 --> Total execution time: 0.0618
DEBUG - 2022-08-01 11:55:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:55:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:55:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 16:55:50 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'originPrice'. - Invalid query: SELECT originPrice FROM cso1_promotionItem WHERE  id = '0009542'
DEBUG - 2022-08-01 11:56:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:56:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:56:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:56:25 --> Total execution time: 0.0835
DEBUG - 2022-08-01 11:56:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:56:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:56:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:56:25 --> Total execution time: 0.0773
DEBUG - 2022-08-01 11:56:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:56:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:56:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 16:56:27 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 125
DEBUG - 2022-08-01 16:56:27 --> Total execution time: 0.0547
DEBUG - 2022-08-01 11:56:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:56:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:56:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 16:56:27 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'isEditPrice'. - Invalid query: UPDATE "cso1_kioskCart" SET "price" = 40000, "discount" = 1, "updateDate" = 1659347787
WHERE "isEditPrice" =0 and "id" = '0009542'  and "kioskUuid" = '62e73c9fa604d' 
DEBUG - 2022-08-01 11:57:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:57:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:57:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:57:26 --> Total execution time: 0.0970
DEBUG - 2022-08-01 11:57:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:57:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:57:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:57:26 --> Total execution time: 0.0654
DEBUG - 2022-08-01 11:57:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:57:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:57:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 16:57:28 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 125
DEBUG - 2022-08-01 16:57:28 --> Total execution time: 0.0571
DEBUG - 2022-08-01 11:57:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:57:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:57:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:57:28 --> Total execution time: 0.0755
DEBUG - 2022-08-01 11:57:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:57:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:57:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:57:28 --> Total execution time: 0.0547
DEBUG - 2022-08-01 11:57:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:57:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:57:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:57:29 --> Total execution time: 0.0710
DEBUG - 2022-08-01 11:57:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:57:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:57:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:57:29 --> Total execution time: 0.0561
DEBUG - 2022-08-01 11:57:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:57:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:57:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:57:30 --> Total execution time: 0.0700
DEBUG - 2022-08-01 11:57:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:57:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:57:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:57:31 --> Total execution time: 0.0616
DEBUG - 2022-08-01 11:57:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:57:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:57:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:57:32 --> Total execution time: 0.0710
DEBUG - 2022-08-01 11:57:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:57:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:57:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:57:32 --> Total execution time: 0.0552
DEBUG - 2022-08-01 11:57:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:57:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:57:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:57:32 --> Total execution time: 0.0504
DEBUG - 2022-08-01 11:57:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:57:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:57:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 16:57:33 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 125
DEBUG - 2022-08-01 16:57:33 --> Total execution time: 0.0545
DEBUG - 2022-08-01 11:57:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:57:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:57:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:57:33 --> Total execution time: 0.0750
DEBUG - 2022-08-01 11:57:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:57:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:57:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:57:33 --> Total execution time: 0.0504
DEBUG - 2022-08-01 11:57:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:57:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:57:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:57:36 --> Total execution time: 0.0719
DEBUG - 2022-08-01 11:57:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:57:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:57:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:57:37 --> Total execution time: 0.0608
DEBUG - 2022-08-01 11:58:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:58:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:58:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 16:58:19 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 125
DEBUG - 2022-08-01 16:58:19 --> Total execution time: 0.0584
DEBUG - 2022-08-01 11:58:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:58:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:58:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:58:19 --> Total execution time: 0.0703
DEBUG - 2022-08-01 11:58:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:58:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:58:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:58:19 --> Total execution time: 0.0617
DEBUG - 2022-08-01 11:58:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 11:58:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 11:58:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:58:19 --> Total execution time: 0.0470
DEBUG - 2022-08-01 12:00:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:00:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:00:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:00:56 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 125
DEBUG - 2022-08-01 17:00:56 --> Total execution time: 0.0689
DEBUG - 2022-08-01 12:00:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:00:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:00:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:00:56 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'isPriceEdit2'. - Invalid query: UPDATE "cso1_kioskCart" SET "price" = 40000, "discount" = 1, "updateDate" = 1659348056
WHERE "isPriceEdit2" =0 and "id" = '0009542'  and "kioskUuid" = '62e73c9fa604d' 
DEBUG - 2022-08-01 12:02:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:02:06 --> Total execution time: 0.1072
DEBUG - 2022-08-01 12:02:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:02:06 --> Total execution time: 0.0676
DEBUG - 2022-08-01 12:02:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:02:07 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 125
DEBUG - 2022-08-01 17:02:07 --> Total execution time: 0.0621
DEBUG - 2022-08-01 12:02:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:02:07 --> Total execution time: 0.1175
DEBUG - 2022-08-01 12:02:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:02:07 --> Total execution time: 0.1167
DEBUG - 2022-08-01 12:02:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:02:09 --> Total execution time: 0.0764
DEBUG - 2022-08-01 12:02:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:02:09 --> Total execution time: 0.0603
DEBUG - 2022-08-01 12:02:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:02:11 --> Total execution time: 0.1312
DEBUG - 2022-08-01 12:02:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:02:11 --> Total execution time: 0.0598
DEBUG - 2022-08-01 12:02:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:02:11 --> Total execution time: 0.0660
DEBUG - 2022-08-01 12:02:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:02:12 --> Total execution time: 0.0894
DEBUG - 2022-08-01 12:02:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:02:12 --> Total execution time: 0.0603
DEBUG - 2022-08-01 12:02:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:02:12 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 125
DEBUG - 2022-08-01 17:02:12 --> Total execution time: 0.0580
DEBUG - 2022-08-01 12:02:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:02:13 --> Total execution time: 0.0729
DEBUG - 2022-08-01 12:02:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:02:13 --> Total execution time: 0.0589
DEBUG - 2022-08-01 12:02:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:02:13 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Violation of PRIMARY KEY constraint 'PK_cso1_kioskCart2'. Cannot insert duplicate key in object 'dbo.cso1_kioskCart'. The duplicate key value is (1659348133). - Invalid query: INSERT INTO "cso1_kioskCart" ("id", "kioskUuid", "itemId", "price", "originPrice", "discount", "void", "presence", "inputDate", "updateDate") VALUES (1659348133, '62e73c9fa604d', '0009542', 47650, 47650, 0, 0, 1, 1659348133, 1659348133)
DEBUG - 2022-08-01 12:02:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:02:15 --> Total execution time: 0.0736
DEBUG - 2022-08-01 12:02:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:02:18 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 125
DEBUG - 2022-08-01 17:02:18 --> Total execution time: 0.0546
DEBUG - 2022-08-01 12:02:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:02:18 --> Total execution time: 0.0689
DEBUG - 2022-08-01 12:02:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:02:18 --> Total execution time: 0.0575
DEBUG - 2022-08-01 12:02:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:02:18 --> Total execution time: 0.0500
DEBUG - 2022-08-01 12:02:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:02:20 --> Total execution time: 0.0695
DEBUG - 2022-08-01 12:02:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:02:22 --> Total execution time: 0.0746
DEBUG - 2022-08-01 12:02:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:02:22 --> Total execution time: 0.0630
DEBUG - 2022-08-01 12:02:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:02:23 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 125
DEBUG - 2022-08-01 17:02:23 --> Total execution time: 0.0588
DEBUG - 2022-08-01 12:02:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:02:23 --> Total execution time: 0.0761
DEBUG - 2022-08-01 12:02:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:02:23 --> Total execution time: 0.0557
DEBUG - 2022-08-01 12:02:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:02:24 --> Total execution time: 0.0518
DEBUG - 2022-08-01 12:02:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:02:25 --> Total execution time: 0.0764
DEBUG - 2022-08-01 12:02:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:02:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:02:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:02:25 --> Total execution time: 0.0619
DEBUG - 2022-08-01 12:19:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:19:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:19:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:19:09 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:19:09 --> Total execution time: 0.0613
DEBUG - 2022-08-01 12:19:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:19:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:19:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:19:10 --> Total execution time: 0.0543
DEBUG - 2022-08-01 12:19:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:19:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:19:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:19:10 --> Total execution time: 0.0673
DEBUG - 2022-08-01 12:19:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:19:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:19:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:19:10 --> Total execution time: 0.0471
DEBUG - 2022-08-01 12:19:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:19:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:19:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:19:11 --> Severity: Notice --> Undefined variable: update C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 161
DEBUG - 2022-08-01 17:19:11 --> Total execution time: 0.0615
DEBUG - 2022-08-01 12:19:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:19:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:19:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:19:11 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 141
ERROR - 2022-08-01 17:19:11 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 147
ERROR - 2022-08-01 17:19:11 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 157
DEBUG - 2022-08-01 17:19:11 --> Total execution time: 0.0855
DEBUG - 2022-08-01 12:19:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:19:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:19:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:19:32 --> Severity: Notice --> Undefined variable: update C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 156
DEBUG - 2022-08-01 17:19:32 --> Total execution time: 0.0641
DEBUG - 2022-08-01 12:19:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:19:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:19:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:19:32 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 141
ERROR - 2022-08-01 17:19:32 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 152
DEBUG - 2022-08-01 17:19:32 --> Total execution time: 0.0586
DEBUG - 2022-08-01 12:19:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:19:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:19:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:19:40 --> Severity: Notice --> Undefined variable: update C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 155
DEBUG - 2022-08-01 17:19:40 --> Total execution time: 0.0691
DEBUG - 2022-08-01 12:19:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:19:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:19:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:19:40 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 141
ERROR - 2022-08-01 17:19:40 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 151
DEBUG - 2022-08-01 17:19:40 --> Total execution time: 0.0543
DEBUG - 2022-08-01 12:21:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:21:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:21:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:21:16 --> Severity: Notice --> Undefined variable: update C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 143
DEBUG - 2022-08-01 17:21:16 --> Total execution time: 0.0645
DEBUG - 2022-08-01 12:21:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:21:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:21:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:21:16 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 139
DEBUG - 2022-08-01 17:21:16 --> Total execution time: 0.0523
DEBUG - 2022-08-01 12:21:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:21:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:21:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:21:54 --> Total execution time: 0.1275
DEBUG - 2022-08-01 12:21:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:21:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:21:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:21:54 --> Total execution time: 0.1178
DEBUG - 2022-08-01 12:22:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:22:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:22:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:22:06 --> Total execution time: 0.1072
DEBUG - 2022-08-01 12:22:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:22:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:22:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:22:06 --> Total execution time: 0.0610
DEBUG - 2022-08-01 12:22:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:22:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:22:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:22:08 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:22:08 --> Total execution time: 0.0545
DEBUG - 2022-08-01 12:22:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:22:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:22:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:22:08 --> Total execution time: 0.0753
DEBUG - 2022-08-01 12:22:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:22:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:22:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:22:08 --> Total execution time: 0.0548
DEBUG - 2022-08-01 12:22:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:22:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:22:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:22:10 --> Total execution time: 0.0623
DEBUG - 2022-08-01 12:22:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:22:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:22:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:22:10 --> Total execution time: 0.0567
DEBUG - 2022-08-01 12:22:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:22:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:22:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:22:11 --> Total execution time: 0.0658
DEBUG - 2022-08-01 12:22:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:22:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:22:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:22:11 --> Total execution time: 0.0586
DEBUG - 2022-08-01 12:22:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:22:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:22:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:22:15 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:22:15 --> Total execution time: 0.0546
DEBUG - 2022-08-01 12:22:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:22:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:22:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:22:15 --> Total execution time: 0.0656
DEBUG - 2022-08-01 12:22:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:22:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:22:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:22:15 --> Total execution time: 0.0633
DEBUG - 2022-08-01 12:22:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:22:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:22:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:22:15 --> Total execution time: 0.0596
DEBUG - 2022-08-01 12:22:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:22:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:22:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:22:49 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:22:49 --> Total execution time: 0.0645
DEBUG - 2022-08-01 12:22:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:22:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:22:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:22:49 --> Total execution time: 0.0637
DEBUG - 2022-08-01 12:22:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:22:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:22:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:22:49 --> Total execution time: 0.0561
DEBUG - 2022-08-01 12:22:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:22:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:22:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:22:50 --> Total execution time: 0.0646
DEBUG - 2022-08-01 12:23:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:23:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:23:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:23:14 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:23:14 --> Total execution time: 0.0574
DEBUG - 2022-08-01 12:23:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:23:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:23:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:23:15 --> Total execution time: 0.0814
DEBUG - 2022-08-01 12:23:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:23:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:23:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:23:15 --> Total execution time: 0.0557
DEBUG - 2022-08-01 12:23:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:23:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:23:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:23:15 --> Total execution time: 0.0493
DEBUG - 2022-08-01 12:23:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:23:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:23:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:23:32 --> Total execution time: 0.0909
DEBUG - 2022-08-01 12:23:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:23:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:23:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:23:32 --> Total execution time: 0.0649
DEBUG - 2022-08-01 12:23:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:23:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:23:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:23:34 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:23:34 --> Total execution time: 0.0583
DEBUG - 2022-08-01 12:23:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:23:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:23:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:23:34 --> Total execution time: 0.0667
DEBUG - 2022-08-01 12:23:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:23:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:23:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:23:34 --> Total execution time: 0.0514
DEBUG - 2022-08-01 12:23:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:23:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:23:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:23:50 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:23:50 --> Total execution time: 0.0513
DEBUG - 2022-08-01 12:23:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:23:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:23:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:23:50 --> Total execution time: 0.0689
DEBUG - 2022-08-01 12:23:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:23:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:23:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:23:50 --> Total execution time: 0.0542
DEBUG - 2022-08-01 12:23:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:23:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:23:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:23:50 --> Total execution time: 0.0461
DEBUG - 2022-08-01 12:24:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:24:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:24:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:24:32 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:24:32 --> Total execution time: 0.0852
DEBUG - 2022-08-01 12:24:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:24:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:24:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:24:32 --> Total execution time: 0.1750
DEBUG - 2022-08-01 12:24:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:24:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:24:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:24:32 --> Total execution time: 0.0674
DEBUG - 2022-08-01 12:24:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:24:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:24:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:24:32 --> Total execution time: 0.0570
DEBUG - 2022-08-01 12:24:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:24:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:24:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 12:24:39 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 174
DEBUG - 2022-08-01 12:24:39 --> Total execution time: 0.0628
DEBUG - 2022-08-01 12:24:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:24:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:24:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 12:24:39 --> Severity: Notice --> Undefined index: specialPrice C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 165
ERROR - 2022-08-01 12:24:39 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'specialPrice'. - Invalid query: UPDATE "cso1_promotion" SET "typeOfPromotion" = 1, "storeOutlesId" = '22', "code" = 'CodeDemo01', "description" = '234567', "startDate" = 1669417200, "endDate" = 1640646000, "discountPercent" = 12, "specialPrice" = NULL, "inputDate" = 1659349479, "inputBy" = '1'
WHERE "id" = 'PR000010' 
DEBUG - 2022-08-01 12:24:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:24:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:24:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 12:24:41 --> Severity: Notice --> Undefined index: specialPrice C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 165
ERROR - 2022-08-01 12:24:41 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'specialPrice'. - Invalid query: UPDATE "cso1_promotion" SET "typeOfPromotion" = 1, "storeOutlesId" = '22', "code" = 'CodeDemo01', "description" = '234567', "startDate" = 1670281200, "endDate" = 1640646000, "discountPercent" = 12, "specialPrice" = NULL, "inputDate" = 1659349481, "inputBy" = '1'
WHERE "id" = 'PR000010' 
DEBUG - 2022-08-01 12:24:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:24:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:24:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:24:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:24:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 12:24:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 12:24:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:24:45 --> Total execution time: 0.1232
DEBUG - 2022-08-01 12:24:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:24:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:24:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:24:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 12:24:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 12:24:46 --> Total execution time: 0.1002
DEBUG - 2022-08-01 12:24:46 --> Total execution time: 0.0667
DEBUG - 2022-08-01 12:28:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:28:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:28:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:28:04 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:28:04 --> Total execution time: 0.1588
DEBUG - 2022-08-01 12:28:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:28:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:28:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:28:05 --> Total execution time: 0.2964
DEBUG - 2022-08-01 12:28:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:28:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:28:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:28:05 --> Total execution time: 0.1688
DEBUG - 2022-08-01 12:28:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:28:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:28:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:28:05 --> Total execution time: 0.1055
DEBUG - 2022-08-01 12:29:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:29:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:29:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:29:29 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:29:29 --> Total execution time: 0.1764
DEBUG - 2022-08-01 12:29:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:29:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:29:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:29:29 --> Total execution time: 0.2477
DEBUG - 2022-08-01 12:29:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:29:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:29:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:29:29 --> Total execution time: 0.1159
DEBUG - 2022-08-01 12:29:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:29:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:29:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:29:29 --> Total execution time: 0.1337
DEBUG - 2022-08-01 12:29:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:29:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:29:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:29:32 --> Total execution time: 0.1498
DEBUG - 2022-08-01 12:29:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:29:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:29:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:29:32 --> Total execution time: 0.1107
DEBUG - 2022-08-01 12:29:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:29:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:29:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:29:33 --> Total execution time: 0.4201
DEBUG - 2022-08-01 12:29:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:29:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:29:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:29:34 --> Total execution time: 0.1670
DEBUG - 2022-08-01 12:29:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:29:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:29:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:29:35 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:29:35 --> Total execution time: 0.1899
DEBUG - 2022-08-01 12:29:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:29:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:29:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:29:35 --> Total execution time: 0.2884
DEBUG - 2022-08-01 12:29:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:29:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:29:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:29:35 --> Total execution time: 0.2023
DEBUG - 2022-08-01 12:29:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:29:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:29:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:29:35 --> Total execution time: 0.1663
DEBUG - 2022-08-01 12:29:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:29:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:29:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:29:36 --> Total execution time: 0.3370
DEBUG - 2022-08-01 12:29:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:29:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:29:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:29:36 --> Total execution time: 0.2059
DEBUG - 2022-08-01 12:30:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:30:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:30:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:30:20 --> Total execution time: 0.1036
DEBUG - 2022-08-01 12:30:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:30:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:30:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:30:20 --> Total execution time: 0.0797
DEBUG - 2022-08-01 12:30:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:30:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:30:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:30:23 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:30:23 --> Total execution time: 0.1484
DEBUG - 2022-08-01 12:30:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:30:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:30:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:30:23 --> Total execution time: 0.1903
DEBUG - 2022-08-01 12:30:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:30:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:30:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:30:23 --> Total execution time: 0.1191
DEBUG - 2022-08-01 12:30:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:30:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:30:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:30:26 --> Total execution time: 0.1637
DEBUG - 2022-08-01 12:30:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:30:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:30:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:30:26 --> Total execution time: 0.1102
DEBUG - 2022-08-01 12:30:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:30:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:30:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:30:26 --> Total execution time: 0.1230
DEBUG - 2022-08-01 12:30:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:30:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:30:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:30:27 --> Total execution time: 0.1702
DEBUG - 2022-08-01 12:30:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:30:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:30:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:30:27 --> Total execution time: 0.1241
DEBUG - 2022-08-01 12:30:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:30:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:30:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:30:55 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:30:55 --> Total execution time: 0.1747
DEBUG - 2022-08-01 12:30:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:30:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:30:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:30:55 --> Total execution time: 0.1478
DEBUG - 2022-08-01 12:30:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:30:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:30:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:30:55 --> Total execution time: 0.1210
DEBUG - 2022-08-01 12:30:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:30:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:30:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:30:55 --> Total execution time: 0.1177
DEBUG - 2022-08-01 12:30:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:30:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:30:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:30:57 --> Total execution time: 0.1667
DEBUG - 2022-08-01 12:30:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:30:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:30:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:30:57 --> Total execution time: 0.1283
DEBUG - 2022-08-01 12:30:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:30:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:30:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:30:58 --> Total execution time: 0.1866
DEBUG - 2022-08-01 12:30:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:30:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:30:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:30:58 --> Total execution time: 0.1162
DEBUG - 2022-08-01 12:30:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:30:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:30:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:30:59 --> Total execution time: 0.1773
DEBUG - 2022-08-01 12:30:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:30:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:31:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:31:00 --> Total execution time: 0.1251
DEBUG - 2022-08-01 12:31:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:31:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:31:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:31:01 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:31:01 --> Total execution time: 0.1792
DEBUG - 2022-08-01 12:31:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:31:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:31:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:31:01 --> Total execution time: 0.1309
DEBUG - 2022-08-01 12:31:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:31:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:31:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:31:01 --> Total execution time: 0.1131
DEBUG - 2022-08-01 12:31:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:31:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:31:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:31:01 --> Total execution time: 0.1301
DEBUG - 2022-08-01 12:31:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:31:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:31:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:31:02 --> Total execution time: 0.1985
DEBUG - 2022-08-01 12:31:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:31:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:31:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:31:02 --> Total execution time: 0.1187
DEBUG - 2022-08-01 12:31:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:31:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:31:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:31:03 --> Total execution time: 0.2010
DEBUG - 2022-08-01 12:31:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:31:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:31:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:31:04 --> Total execution time: 0.1945
DEBUG - 2022-08-01 12:32:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:32:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:32:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:32:30 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:32:30 --> Total execution time: 0.1637
DEBUG - 2022-08-01 12:32:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:32:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:32:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:32:30 --> Total execution time: 0.1801
DEBUG - 2022-08-01 12:34:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:34:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:34:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:34:10 --> Total execution time: 0.1549
DEBUG - 2022-08-01 12:34:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:34:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:34:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:34:10 --> Total execution time: 0.0832
DEBUG - 2022-08-01 12:34:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:34:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:34:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:34:13 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:34:13 --> Total execution time: 0.1468
DEBUG - 2022-08-01 12:34:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:34:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:34:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:34:14 --> Total execution time: 0.1642
DEBUG - 2022-08-01 12:35:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:35:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:35:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:35:25 --> Total execution time: 0.1107
DEBUG - 2022-08-01 12:35:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:35:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:35:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:35:25 --> Total execution time: 0.0858
DEBUG - 2022-08-01 12:35:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:35:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:35:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:35:26 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:35:26 --> Total execution time: 0.1512
DEBUG - 2022-08-01 12:35:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:35:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:35:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:35:26 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid object name 'cso1_kioskCart2'. - Invalid query: SELECT count(id) FROM cso1_kioskCart2 WHERE  itemId = '0009542'  and kioskUuid = '62e73c9fa604d'
DEBUG - 2022-08-01 12:37:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:37:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:37:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:37:28 --> Total execution time: 0.1170
DEBUG - 2022-08-01 12:37:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:37:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:37:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:37:28 --> Total execution time: 0.0926
DEBUG - 2022-08-01 12:37:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:37:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:37:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:37:29 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:37:29 --> Total execution time: 0.1613
DEBUG - 2022-08-01 12:37:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:37:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:37:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:37:29 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid object name 'cso1_kioskCart2'. - Invalid query:  SELECT count(id) as qty FROM cso1_kioskCart2 WHERE itemId = '0009542'  and kioskUuid = '62e73c9fa604d'
DEBUG - 2022-08-01 12:38:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:38:02 --> Total execution time: 0.0982
DEBUG - 2022-08-01 12:38:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:38:02 --> Total execution time: 0.0824
DEBUG - 2022-08-01 12:38:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:38:04 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:38:04 --> Total execution time: 0.1443
DEBUG - 2022-08-01 12:38:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:38:04 --> Total execution time: 0.1338
DEBUG - 2022-08-01 12:38:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:38:04 --> Total execution time: 0.1112
DEBUG - 2022-08-01 12:38:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:38:06 --> Total execution time: 0.1774
DEBUG - 2022-08-01 12:38:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:38:06 --> Total execution time: 0.1168
DEBUG - 2022-08-01 12:38:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:38:08 --> Total execution time: 0.1855
DEBUG - 2022-08-01 12:38:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:38:08 --> Total execution time: 0.1143
DEBUG - 2022-08-01 12:38:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:38:08 --> Total execution time: 0.1184
DEBUG - 2022-08-01 12:38:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:38:46 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:38:46 --> Total execution time: 0.1677
DEBUG - 2022-08-01 12:38:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:38:46 --> Total execution time: 0.1624
DEBUG - 2022-08-01 12:38:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:38:46 --> Total execution time: 0.1490
DEBUG - 2022-08-01 12:38:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:38:46 --> Total execution time: 0.1270
DEBUG - 2022-08-01 12:38:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:38:48 --> Total execution time: 0.1565
DEBUG - 2022-08-01 12:38:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:38:48 --> Total execution time: 0.1155
DEBUG - 2022-08-01 12:38:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:38:50 --> Total execution time: 0.1816
DEBUG - 2022-08-01 12:38:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:38:50 --> Total execution time: 0.1189
DEBUG - 2022-08-01 12:38:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:38:51 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:38:51 --> Total execution time: 0.1773
DEBUG - 2022-08-01 12:38:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:38:51 --> Total execution time: 0.1540
DEBUG - 2022-08-01 12:38:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:38:51 --> Total execution time: 0.1272
DEBUG - 2022-08-01 12:38:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:38:52 --> Total execution time: 0.1542
DEBUG - 2022-08-01 12:38:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:38:53 --> Total execution time: 0.1774
DEBUG - 2022-08-01 12:38:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:38:53 --> Total execution time: 0.1149
DEBUG - 2022-08-01 12:38:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:38:54 --> Total execution time: 0.2036
DEBUG - 2022-08-01 12:38:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:38:54 --> Total execution time: 0.2766
DEBUG - 2022-08-01 12:38:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:38:55 --> Total execution time: 0.2052
DEBUG - 2022-08-01 12:38:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:38:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:38:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:38:56 --> Total execution time: 0.1172
DEBUG - 2022-08-01 12:39:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:39:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:39:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:39:29 --> Total execution time: 0.1181
DEBUG - 2022-08-01 12:39:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:39:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:39:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:39:29 --> Total execution time: 0.1019
DEBUG - 2022-08-01 12:39:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:39:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:39:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:39:32 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:39:32 --> Total execution time: 0.1476
DEBUG - 2022-08-01 12:39:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:39:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:39:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:39:32 --> Total execution time: 0.1766
DEBUG - 2022-08-01 12:39:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:39:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:39:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:39:32 --> Total execution time: 0.1302
DEBUG - 2022-08-01 12:39:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:39:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:39:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:39:34 --> Total execution time: 0.1613
DEBUG - 2022-08-01 12:39:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:39:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:39:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:39:34 --> Total execution time: 0.1228
DEBUG - 2022-08-01 12:39:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:39:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:39:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:39:51 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:39:51 --> Total execution time: 0.1502
DEBUG - 2022-08-01 12:39:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:39:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:39:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:39:51 --> Total execution time: 0.1975
DEBUG - 2022-08-01 12:39:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:39:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:39:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:39:51 --> Total execution time: 0.1286
DEBUG - 2022-08-01 12:39:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:39:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:39:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:39:51 --> Total execution time: 0.1160
DEBUG - 2022-08-01 12:39:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:39:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:39:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:39:52 --> Total execution time: 0.1830
DEBUG - 2022-08-01 12:39:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:39:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:39:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:39:53 --> Total execution time: 0.2181
DEBUG - 2022-08-01 12:39:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:39:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:39:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:39:54 --> Total execution time: 0.1716
DEBUG - 2022-08-01 12:39:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:39:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:39:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:39:54 --> Total execution time: 0.1220
DEBUG - 2022-08-01 12:39:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:39:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:39:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:39:56 --> Total execution time: 0.1654
DEBUG - 2022-08-01 12:39:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:39:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:39:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:39:56 --> Total execution time: 0.1532
DEBUG - 2022-08-01 12:39:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:39:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:39:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:39:57 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:39:57 --> Total execution time: 0.1542
DEBUG - 2022-08-01 12:39:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:39:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:39:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:39:57 --> Total execution time: 0.1354
DEBUG - 2022-08-01 12:39:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:39:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:39:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:39:57 --> Total execution time: 0.1259
DEBUG - 2022-08-01 12:39:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:39:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:39:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:39:57 --> Total execution time: 0.1240
DEBUG - 2022-08-01 12:40:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:40:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:40:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:40:20 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:40:20 --> Total execution time: 0.1672
DEBUG - 2022-08-01 12:40:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:40:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:40:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:40:20 --> Total execution time: 0.2059
DEBUG - 2022-08-01 12:40:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:40:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:40:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:40:20 --> Total execution time: 0.1732
DEBUG - 2022-08-01 12:40:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:40:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:40:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:40:21 --> Total execution time: 0.1600
DEBUG - 2022-08-01 12:40:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:40:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:40:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:40:23 --> Total execution time: 0.1933
DEBUG - 2022-08-01 12:40:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:40:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:40:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:40:23 --> Total execution time: 0.1256
DEBUG - 2022-08-01 12:41:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:41:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:41:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:41:57 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:41:57 --> Total execution time: 0.1606
DEBUG - 2022-08-01 12:41:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:41:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:41:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:41:57 --> Total execution time: 0.2107
DEBUG - 2022-08-01 12:42:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:42:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:42:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:42:12 --> Total execution time: 0.0902
DEBUG - 2022-08-01 12:42:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:42:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:42:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:42:12 --> Total execution time: 0.1041
DEBUG - 2022-08-01 12:42:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:42:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:42:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:42:14 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:42:14 --> Total execution time: 0.1543
DEBUG - 2022-08-01 12:42:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:42:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:42:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:42:14 --> Total execution time: 0.1283
DEBUG - 2022-08-01 12:42:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:42:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:42:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:42:39 --> Total execution time: 0.1203
DEBUG - 2022-08-01 12:42:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:42:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:42:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:42:39 --> Total execution time: 0.0991
DEBUG - 2022-08-01 12:42:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:42:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:42:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:42:41 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:42:41 --> Total execution time: 0.1824
DEBUG - 2022-08-01 12:42:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:42:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:42:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:42:41 --> Total execution time: 0.3719
DEBUG - 2022-08-01 12:42:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:42:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:42:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:42:44 --> Total execution time: 0.1030
DEBUG - 2022-08-01 12:42:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:42:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:42:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:42:46 --> Total execution time: 0.2177
DEBUG - 2022-08-01 12:42:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:42:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:42:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:42:47 --> Total execution time: 0.1339
DEBUG - 2022-08-01 12:42:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:42:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:42:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:42:48 --> Total execution time: 0.1015
DEBUG - 2022-08-01 12:42:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:42:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:42:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:42:55 --> Total execution time: 0.1412
DEBUG - 2022-08-01 12:42:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:42:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:42:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:42:55 --> Total execution time: 0.1315
DEBUG - 2022-08-01 12:42:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:42:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:42:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:42:57 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:42:57 --> Total execution time: 0.1462
DEBUG - 2022-08-01 12:42:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:42:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:42:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:42:57 --> Total execution time: 0.1829
DEBUG - 2022-08-01 12:42:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:42:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:42:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:42:57 --> Total execution time: 0.1362
DEBUG - 2022-08-01 12:42:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:42:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:42:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:42:59 --> Total execution time: 0.1789
DEBUG - 2022-08-01 12:42:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:42:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:42:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:42:59 --> Total execution time: 0.1481
DEBUG - 2022-08-01 12:43:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:43:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:43:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:43:00 --> Total execution time: 0.1859
DEBUG - 2022-08-01 12:43:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:43:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:43:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:43:00 --> Total execution time: 0.1236
DEBUG - 2022-08-01 12:43:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:43:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:43:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:43:12 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:43:12 --> Total execution time: 0.1547
DEBUG - 2022-08-01 12:43:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:43:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:43:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:43:12 --> Total execution time: 0.1231
DEBUG - 2022-08-01 12:43:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:43:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:43:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:43:12 --> Total execution time: 0.1134
DEBUG - 2022-08-01 12:43:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:43:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:43:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:43:12 --> Total execution time: 0.1307
DEBUG - 2022-08-01 12:43:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:43:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:43:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:43:13 --> Total execution time: 0.1608
DEBUG - 2022-08-01 12:43:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:43:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:43:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:43:13 --> Total execution time: 0.1138
DEBUG - 2022-08-01 12:43:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:43:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:43:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:43:15 --> Total execution time: 0.1738
DEBUG - 2022-08-01 12:43:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:43:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:43:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:43:15 --> Total execution time: 0.1153
DEBUG - 2022-08-01 12:43:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:43:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:43:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:43:16 --> Total execution time: 0.1678
DEBUG - 2022-08-01 12:43:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:43:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:43:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:43:16 --> Total execution time: 0.1137
DEBUG - 2022-08-01 12:43:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:43:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:43:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 17:43:18 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 17:43:18 --> Total execution time: 0.1672
DEBUG - 2022-08-01 12:43:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:43:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:43:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:43:18 --> Total execution time: 0.1327
DEBUG - 2022-08-01 12:43:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:43:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:43:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:43:18 --> Total execution time: 0.1299
DEBUG - 2022-08-01 12:43:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:43:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:43:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:43:18 --> Total execution time: 0.1255
DEBUG - 2022-08-01 12:43:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:43:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:43:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:43:19 --> Total execution time: 0.1858
DEBUG - 2022-08-01 12:43:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 12:43:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 12:43:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 17:43:19 --> Total execution time: 0.1190
DEBUG - 2022-08-01 13:39:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:39:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:39:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 18:39:21 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 18:39:21 --> Total execution time: 0.0955
DEBUG - 2022-08-01 13:39:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:39:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:39:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:39:21 --> Total execution time: 0.0889
DEBUG - 2022-08-01 13:39:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:39:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:39:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:39:21 --> Total execution time: 0.0663
DEBUG - 2022-08-01 13:39:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:39:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:39:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:39:21 --> Total execution time: 0.0601
DEBUG - 2022-08-01 13:39:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:39:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:39:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:39:22 --> Total execution time: 0.0714
DEBUG - 2022-08-01 13:39:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:39:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:39:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:39:22 --> Total execution time: 0.0711
DEBUG - 2022-08-01 13:39:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:39:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:39:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:39:24 --> Total execution time: 0.0979
DEBUG - 2022-08-01 13:39:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:39:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:39:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:39:24 --> Total execution time: 0.0861
DEBUG - 2022-08-01 13:39:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:39:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:39:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 18:39:27 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 18:39:27 --> Total execution time: 0.0542
DEBUG - 2022-08-01 13:39:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:39:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:39:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:39:27 --> Total execution time: 0.0517
DEBUG - 2022-08-01 13:39:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:39:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:39:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:39:27 --> Total execution time: 0.0601
DEBUG - 2022-08-01 13:39:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:39:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:39:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:39:27 --> Total execution time: 0.0530
DEBUG - 2022-08-01 13:39:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:39:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:39:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:39:55 --> Total execution time: 0.3852
DEBUG - 2022-08-01 13:39:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:39:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:39:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:39:55 --> Total execution time: 0.2603
DEBUG - 2022-08-01 13:42:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:42:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:42:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:42:36 --> Total execution time: 0.1113
DEBUG - 2022-08-01 13:42:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:42:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:42:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:42:36 --> Total execution time: 0.0781
DEBUG - 2022-08-01 13:43:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:43:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:43:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:43:09 --> Total execution time: 0.4089
DEBUG - 2022-08-01 13:43:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:43:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:43:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:43:10 --> Total execution time: 0.3214
DEBUG - 2022-08-01 13:43:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:43:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:43:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:43:16 --> Total execution time: 0.1828
DEBUG - 2022-08-01 13:43:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:43:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:43:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:43:16 --> Total execution time: 0.1643
DEBUG - 2022-08-01 13:43:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:43:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:43:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:43:19 --> Total execution time: 0.1763
DEBUG - 2022-08-01 13:54:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:54:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:54:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:54:54 --> Total execution time: 0.1909
DEBUG - 2022-08-01 13:54:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:54:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:54:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:54:54 --> Total execution time: 0.1554
DEBUG - 2022-08-01 13:57:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:57:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:57:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:57:14 --> Total execution time: 0.0980
DEBUG - 2022-08-01 13:57:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:57:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:57:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:57:14 --> Total execution time: 0.0599
DEBUG - 2022-08-01 13:57:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:57:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:58:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:58:00 --> Total execution time: 0.2130
DEBUG - 2022-08-01 13:58:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:58:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:58:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:58:00 --> Total execution time: 0.1765
DEBUG - 2022-08-01 13:58:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:58:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:58:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:58:17 --> Total execution time: 0.2300
DEBUG - 2022-08-01 13:58:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:58:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:58:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:58:18 --> Total execution time: 0.1722
DEBUG - 2022-08-01 13:58:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:58:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:58:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:58:50 --> Total execution time: 0.2749
DEBUG - 2022-08-01 13:58:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:58:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:58:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:58:50 --> Total execution time: 0.1833
DEBUG - 2022-08-01 13:58:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:58:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:58:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:58:58 --> Total execution time: 0.1973
DEBUG - 2022-08-01 13:58:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 13:58:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 13:58:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 18:58:58 --> Total execution time: 0.1896
DEBUG - 2022-08-01 14:01:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:01:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:01:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:01:15 --> Total execution time: 0.1357
DEBUG - 2022-08-01 14:01:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:01:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:01:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:01:15 --> Total execution time: 0.0648
DEBUG - 2022-08-01 14:01:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:01:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:01:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:01:33 --> Total execution time: 0.1955
DEBUG - 2022-08-01 14:01:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:01:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:01:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:01:33 --> Total execution time: 0.1582
DEBUG - 2022-08-01 14:01:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:01:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:01:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:01:41 --> Total execution time: 0.2398
DEBUG - 2022-08-01 14:01:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:01:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:01:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:01:41 --> Total execution time: 0.2462
DEBUG - 2022-08-01 14:03:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:03:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:03:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:03:13 --> Total execution time: 0.0970
DEBUG - 2022-08-01 14:03:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:03:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:03:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:03:13 --> Total execution time: 0.0621
DEBUG - 2022-08-01 14:03:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:03:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:03:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:03:38 --> Total execution time: 0.1034
DEBUG - 2022-08-01 14:03:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:03:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:03:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:03:38 --> Total execution time: 0.0792
DEBUG - 2022-08-01 14:04:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:17 --> Total execution time: 0.0534
DEBUG - 2022-08-01 14:04:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:17 --> Total execution time: 0.0532
DEBUG - 2022-08-01 14:04:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:20 --> Total execution time: 0.1189
DEBUG - 2022-08-01 14:04:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:20 --> Total execution time: 0.0729
DEBUG - 2022-08-01 14:04:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:21 --> Total execution time: 0.0497
DEBUG - 2022-08-01 14:04:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:23 --> Total execution time: 0.0879
DEBUG - 2022-08-01 14:04:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:32 --> Total execution time: 0.1420
DEBUG - 2022-08-01 14:04:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:32 --> Total execution time: 0.1344
DEBUG - 2022-08-01 14:04:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:33 --> Total execution time: 0.0838
DEBUG - 2022-08-01 14:04:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:33 --> Total execution time: 0.0892
DEBUG - 2022-08-01 14:04:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:34 --> Total execution time: 0.0810
DEBUG - 2022-08-01 14:04:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:34 --> Total execution time: 0.0803
DEBUG - 2022-08-01 14:04:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:34 --> Total execution time: 0.0762
DEBUG - 2022-08-01 14:04:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:35 --> Total execution time: 0.0697
DEBUG - 2022-08-01 14:04:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:35 --> Total execution time: 0.0700
DEBUG - 2022-08-01 14:04:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:36 --> Total execution time: 0.0593
DEBUG - 2022-08-01 14:04:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:36 --> Total execution time: 0.0631
DEBUG - 2022-08-01 14:04:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:36 --> Total execution time: 0.0620
DEBUG - 2022-08-01 14:04:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:36 --> Total execution time: 0.0628
DEBUG - 2022-08-01 14:04:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:37 --> Total execution time: 0.0517
DEBUG - 2022-08-01 14:04:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:38 --> Total execution time: 0.0585
DEBUG - 2022-08-01 14:04:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:38 --> Total execution time: 0.0554
DEBUG - 2022-08-01 14:04:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:04:43 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 129
DEBUG - 2022-08-01 19:04:43 --> Total execution time: 0.0492
DEBUG - 2022-08-01 14:04:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:43 --> Total execution time: 0.0766
DEBUG - 2022-08-01 14:04:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:43 --> Total execution time: 0.0551
DEBUG - 2022-08-01 14:04:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:43 --> Total execution time: 0.0470
DEBUG - 2022-08-01 14:04:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:45 --> Total execution time: 0.0640
DEBUG - 2022-08-01 14:04:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:45 --> Total execution time: 0.0565
DEBUG - 2022-08-01 14:04:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:47 --> Total execution time: 0.0710
DEBUG - 2022-08-01 14:04:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:04:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:04:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:04:47 --> Total execution time: 0.0533
DEBUG - 2022-08-01 14:05:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:05:13 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 129
DEBUG - 2022-08-01 19:05:13 --> Total execution time: 0.0598
DEBUG - 2022-08-01 14:05:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:13 --> Total execution time: 0.0851
DEBUG - 2022-08-01 14:05:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:13 --> Total execution time: 0.0606
DEBUG - 2022-08-01 14:05:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:13 --> Total execution time: 0.0578
DEBUG - 2022-08-01 14:05:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:05:19 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 129
DEBUG - 2022-08-01 19:05:19 --> Total execution time: 0.0475
DEBUG - 2022-08-01 14:05:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:19 --> Total execution time: 0.0682
DEBUG - 2022-08-01 14:05:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:20 --> Total execution time: 0.0519
DEBUG - 2022-08-01 14:05:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:20 --> Total execution time: 0.0429
DEBUG - 2022-08-01 14:05:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:21 --> Total execution time: 0.0553
DEBUG - 2022-08-01 14:05:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:21 --> Total execution time: 0.0554
DEBUG - 2022-08-01 14:05:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:21 --> Total execution time: 0.0604
DEBUG - 2022-08-01 14:05:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:22 --> Total execution time: 0.0576
DEBUG - 2022-08-01 14:05:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:22 --> Total execution time: 0.0539
DEBUG - 2022-08-01 14:05:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:22 --> Total execution time: 0.0547
DEBUG - 2022-08-01 14:05:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:22 --> Total execution time: 0.0595
DEBUG - 2022-08-01 14:05:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:22 --> Total execution time: 0.0524
DEBUG - 2022-08-01 14:05:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:22 --> Total execution time: 0.0555
DEBUG - 2022-08-01 14:05:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:23 --> Total execution time: 0.0572
DEBUG - 2022-08-01 14:05:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:23 --> Total execution time: 0.0555
DEBUG - 2022-08-01 14:05:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:23 --> Total execution time: 0.0553
DEBUG - 2022-08-01 14:05:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:23 --> Total execution time: 0.0570
DEBUG - 2022-08-01 14:05:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:24 --> Total execution time: 0.0568
DEBUG - 2022-08-01 14:05:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:25 --> Total execution time: 0.0919
DEBUG - 2022-08-01 14:05:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:05:26 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 129
DEBUG - 2022-08-01 19:05:26 --> Total execution time: 0.0560
DEBUG - 2022-08-01 14:05:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:26 --> Total execution time: 0.0641
DEBUG - 2022-08-01 14:05:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:26 --> Total execution time: 0.0536
DEBUG - 2022-08-01 14:05:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:26 --> Total execution time: 0.0623
DEBUG - 2022-08-01 14:05:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:27 --> Total execution time: 0.0664
DEBUG - 2022-08-01 14:05:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:27 --> Total execution time: 0.0565
DEBUG - 2022-08-01 14:05:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:28 --> Total execution time: 0.0679
DEBUG - 2022-08-01 14:05:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:28 --> Total execution time: 0.1001
DEBUG - 2022-08-01 14:05:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:29 --> Total execution time: 0.0652
DEBUG - 2022-08-01 14:05:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:29 --> Total execution time: 0.0568
DEBUG - 2022-08-01 14:05:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:30 --> Total execution time: 0.0660
DEBUG - 2022-08-01 14:05:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:31 --> Total execution time: 0.0610
DEBUG - 2022-08-01 14:05:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:43 --> Total execution time: 0.1776
DEBUG - 2022-08-01 14:05:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:43 --> Total execution time: 0.1847
DEBUG - 2022-08-01 14:05:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:05:54 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 129
DEBUG - 2022-08-01 19:05:54 --> Total execution time: 0.0497
DEBUG - 2022-08-01 14:05:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:54 --> Total execution time: 0.0454
DEBUG - 2022-08-01 14:05:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:54 --> Total execution time: 0.0702
DEBUG - 2022-08-01 14:05:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:05:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:05:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:05:55 --> Total execution time: 0.0456
DEBUG - 2022-08-01 14:06:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:06:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:06:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:06:01 --> Severity: Notice --> Undefined variable: update C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 67
DEBUG - 2022-08-01 19:06:01 --> Total execution time: 0.0535
DEBUG - 2022-08-01 14:06:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:06:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:06:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:06:02 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'itemQty'. - Invalid query: SELECT itemQty FROM cso1_kioskCart WHERE id=1659355524
DEBUG - 2022-08-01 14:06:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:06:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:06:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:06:36 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 129
DEBUG - 2022-08-01 19:06:36 --> Total execution time: 0.1114
DEBUG - 2022-08-01 14:06:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:06:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:06:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:06:36 --> Total execution time: 0.0594
DEBUG - 2022-08-01 14:06:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:06:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:06:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:06:36 --> Total execution time: 0.0806
DEBUG - 2022-08-01 14:06:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:06:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:06:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:06:36 --> Total execution time: 0.0599
DEBUG - 2022-08-01 14:06:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:06:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:06:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:06:42 --> Total execution time: 0.0914
DEBUG - 2022-08-01 14:06:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:06:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:06:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:06:42 --> Total execution time: 0.0755
DEBUG - 2022-08-01 14:06:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:06:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:06:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:06:55 --> Total execution time: 0.1941
DEBUG - 2022-08-01 14:06:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:06:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:06:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:06:55 --> Total execution time: 0.2733
DEBUG - 2022-08-01 14:06:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:06:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:06:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:06:57 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 129
DEBUG - 2022-08-01 19:06:57 --> Total execution time: 0.0925
DEBUG - 2022-08-01 14:06:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:06:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:06:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:06:57 --> Total execution time: 0.0925
DEBUG - 2022-08-01 14:06:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:06:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:06:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:06:57 --> Total execution time: 0.1066
DEBUG - 2022-08-01 14:07:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:07:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:07:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:07:33 --> Total execution time: 0.1881
DEBUG - 2022-08-01 14:07:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:07:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:07:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:07:33 --> Total execution time: 0.1399
DEBUG - 2022-08-01 14:07:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:07:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:07:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:07:43 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 129
DEBUG - 2022-08-01 19:07:43 --> Total execution time: 0.0955
DEBUG - 2022-08-01 14:07:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:07:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:07:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:07:43 --> Total execution time: 0.0658
DEBUG - 2022-08-01 14:07:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:07:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:07:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:07:43 --> Total execution time: 0.0683
DEBUG - 2022-08-01 14:07:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:07:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:07:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:07:43 --> Total execution time: 0.0544
DEBUG - 2022-08-01 14:07:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:07:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:07:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:07:56 --> Total execution time: 0.1760
DEBUG - 2022-08-01 14:07:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:07:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:07:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:07:56 --> Total execution time: 0.1430
DEBUG - 2022-08-01 14:07:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:07:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:07:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:07:57 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 129
DEBUG - 2022-08-01 19:07:57 --> Total execution time: 0.0718
DEBUG - 2022-08-01 14:07:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:07:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:07:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:07:57 --> Total execution time: 0.0798
DEBUG - 2022-08-01 14:07:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:07:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:07:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:07:58 --> Total execution time: 0.0853
DEBUG - 2022-08-01 14:08:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:08:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:08:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:08:57 --> Severity: Notice --> Undefined variable: update C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 67
DEBUG - 2022-08-01 19:08:57 --> Total execution time: 0.0605
DEBUG - 2022-08-01 14:08:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:08:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:08:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:08:57 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'itemQty'. - Invalid query: SELECT itemQty FROM cso1_kioskCart WHERE id=1659355528
DEBUG - 2022-08-01 14:15:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:15:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:15:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:15:34 --> Total execution time: 0.1231
DEBUG - 2022-08-01 14:15:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:15:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:15:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:15:34 --> Total execution time: 0.0604
DEBUG - 2022-08-01 14:15:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:15:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:15:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:15:38 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 127
DEBUG - 2022-08-01 19:15:38 --> Total execution time: 0.0521
DEBUG - 2022-08-01 14:15:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:15:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:15:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:15:38 --> Total execution time: 0.0511
DEBUG - 2022-08-01 14:15:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:15:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:15:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:15:38 --> Total execution time: 0.0635
DEBUG - 2022-08-01 14:15:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:15:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:15:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:15:43 --> Severity: Notice --> Undefined variable: update C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 65
DEBUG - 2022-08-01 19:15:43 --> Total execution time: 0.0572
DEBUG - 2022-08-01 14:15:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:15:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:15:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:15:43 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'itemQty'. - Invalid query: SELECT itemQty FROM cso1_kioskCart WHERE id=1659355524
DEBUG - 2022-08-01 14:16:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:16:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:16:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:16:01 --> Severity: Notice --> Undefined variable: update C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 64
DEBUG - 2022-08-01 19:16:01 --> Total execution time: 0.0656
DEBUG - 2022-08-01 14:16:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:16:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:16:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:16:01 --> Total execution time: 0.0666
DEBUG - 2022-08-01 14:16:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:16:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:16:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:16:01 --> Total execution time: 0.0696
DEBUG - 2022-08-01 14:16:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:16:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:16:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:16:02 --> Total execution time: 0.0542
DEBUG - 2022-08-01 14:16:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:16:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:16:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:16:04 --> Total execution time: 0.1007
DEBUG - 2022-08-01 14:16:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:16:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:16:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:16:06 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:16:06 --> Total execution time: 0.0536
DEBUG - 2022-08-01 14:16:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:16:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:16:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:16:06 --> Total execution time: 0.0532
DEBUG - 2022-08-01 14:16:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:16:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:16:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:16:06 --> Total execution time: 0.0704
DEBUG - 2022-08-01 14:16:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:16:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:16:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:16:07 --> Severity: Notice --> Undefined variable: update C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 64
DEBUG - 2022-08-01 19:16:07 --> Total execution time: 0.0569
DEBUG - 2022-08-01 14:16:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:16:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:16:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:16:08 --> Total execution time: 0.0608
DEBUG - 2022-08-01 14:16:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:16:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:16:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:16:08 --> Total execution time: 0.0662
DEBUG - 2022-08-01 14:16:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:16:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:16:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:16:08 --> Total execution time: 0.0629
DEBUG - 2022-08-01 14:19:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:19:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:19:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:19:39 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:19:39 --> Total execution time: 0.0510
DEBUG - 2022-08-01 14:19:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:19:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:19:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:19:39 --> Total execution time: 0.0824
DEBUG - 2022-08-01 14:19:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:19:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:19:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:19:39 --> Total execution time: 0.0592
DEBUG - 2022-08-01 14:19:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:19:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:19:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:19:39 --> Total execution time: 0.0544
DEBUG - 2022-08-01 14:19:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:19:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:19:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:19:41 --> Total execution time: 0.0519
DEBUG - 2022-08-01 14:19:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:19:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:19:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:19:42 --> Total execution time: 0.0676
DEBUG - 2022-08-01 14:19:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:19:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:19:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:19:51 --> Total execution time: 0.0467
DEBUG - 2022-08-01 14:19:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:19:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:19:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:19:51 --> Total execution time: 0.0485
DEBUG - 2022-08-01 14:19:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:19:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:19:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:19:51 --> Total execution time: 0.0503
DEBUG - 2022-08-01 14:19:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:19:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:19:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:19:51 --> Total execution time: 0.0482
DEBUG - 2022-08-01 14:19:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:19:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:19:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:19:51 --> Total execution time: 0.0549
DEBUG - 2022-08-01 14:19:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:19:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:19:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:19:51 --> Total execution time: 0.0543
DEBUG - 2022-08-01 14:19:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:19:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:19:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:19:52 --> Total execution time: 0.0546
DEBUG - 2022-08-01 14:19:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:19:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:19:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:19:52 --> Total execution time: 0.0506
DEBUG - 2022-08-01 14:19:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:19:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:19:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:19:52 --> Total execution time: 0.0541
DEBUG - 2022-08-01 14:19:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:19:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:19:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:19:52 --> Total execution time: 0.0563
DEBUG - 2022-08-01 14:19:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:19:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:19:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:19:56 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:19:56 --> Total execution time: 0.0542
DEBUG - 2022-08-01 14:19:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:19:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:19:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:19:56 --> Total execution time: 0.0594
DEBUG - 2022-08-01 14:19:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:19:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:19:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:19:56 --> Total execution time: 0.0513
DEBUG - 2022-08-01 14:19:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:19:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:19:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:19:58 --> Total execution time: 0.0661
DEBUG - 2022-08-01 14:19:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:19:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:19:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:19:58 --> Total execution time: 0.0539
DEBUG - 2022-08-01 14:19:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:19:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:19:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:19:58 --> Total execution time: 0.0459
DEBUG - 2022-08-01 14:20:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:20:03 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:20:03 --> Total execution time: 0.0488
DEBUG - 2022-08-01 14:20:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:03 --> Total execution time: 0.0493
DEBUG - 2022-08-01 14:20:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:03 --> Total execution time: 0.0833
DEBUG - 2022-08-01 14:20:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:03 --> Total execution time: 0.0448
DEBUG - 2022-08-01 14:20:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:04 --> Total execution time: 0.0527
DEBUG - 2022-08-01 14:20:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:04 --> Total execution time: 0.0512
DEBUG - 2022-08-01 14:20:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:04 --> Total execution time: 0.0523
DEBUG - 2022-08-01 14:20:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:07 --> Total execution time: 0.0653
DEBUG - 2022-08-01 14:20:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:07 --> Total execution time: 0.0563
DEBUG - 2022-08-01 14:20:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:20:14 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:20:14 --> Total execution time: 0.0507
DEBUG - 2022-08-01 14:20:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:14 --> Total execution time: 0.0496
DEBUG - 2022-08-01 14:20:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:14 --> Total execution time: 0.0583
DEBUG - 2022-08-01 14:20:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:14 --> Total execution time: 0.0536
DEBUG - 2022-08-01 14:20:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:15 --> Total execution time: 0.0534
DEBUG - 2022-08-01 14:20:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:15 --> Total execution time: 0.0587
DEBUG - 2022-08-01 14:20:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:15 --> Total execution time: 0.0542
DEBUG - 2022-08-01 14:20:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:15 --> Total execution time: 0.0548
DEBUG - 2022-08-01 14:20:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:15 --> Total execution time: 0.0577
DEBUG - 2022-08-01 14:20:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:15 --> Total execution time: 0.0548
DEBUG - 2022-08-01 14:20:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:16 --> Total execution time: 0.0642
DEBUG - 2022-08-01 14:20:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:16 --> Total execution time: 0.0546
DEBUG - 2022-08-01 14:20:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:16 --> Total execution time: 0.0920
DEBUG - 2022-08-01 14:20:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:18 --> Total execution time: 0.0646
DEBUG - 2022-08-01 14:20:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:18 --> Total execution time: 0.0572
DEBUG - 2022-08-01 14:20:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:20:19 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:20:19 --> Total execution time: 0.0552
DEBUG - 2022-08-01 14:20:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:19 --> Total execution time: 0.0636
DEBUG - 2022-08-01 14:20:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:19 --> Total execution time: 0.0534
DEBUG - 2022-08-01 14:20:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:19 --> Total execution time: 0.0481
DEBUG - 2022-08-01 14:20:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:20 --> Total execution time: 0.0660
DEBUG - 2022-08-01 14:20:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:20 --> Total execution time: 0.0569
DEBUG - 2022-08-01 14:20:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:21 --> Total execution time: 0.0641
DEBUG - 2022-08-01 14:20:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:21 --> Total execution time: 0.0560
DEBUG - 2022-08-01 14:20:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:20:28 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:20:28 --> Total execution time: 0.0548
DEBUG - 2022-08-01 14:20:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:28 --> Total execution time: 0.0563
DEBUG - 2022-08-01 14:20:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:28 --> Total execution time: 0.0667
DEBUG - 2022-08-01 14:20:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:20:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:20:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:20:28 --> Total execution time: 0.0445
DEBUG - 2022-08-01 14:21:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:21:40 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:21:40 --> Total execution time: 0.0617
DEBUG - 2022-08-01 14:21:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:41 --> Total execution time: 0.0531
DEBUG - 2022-08-01 14:21:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:41 --> Total execution time: 0.0595
DEBUG - 2022-08-01 14:21:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:41 --> Total execution time: 0.0556
DEBUG - 2022-08-01 14:21:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:41 --> Total execution time: 0.0481
DEBUG - 2022-08-01 14:21:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:41 --> Total execution time: 0.0522
DEBUG - 2022-08-01 14:21:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:42 --> Total execution time: 0.0546
DEBUG - 2022-08-01 14:21:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:42 --> Total execution time: 0.0551
DEBUG - 2022-08-01 14:21:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:42 --> Total execution time: 0.0561
DEBUG - 2022-08-01 14:21:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:42 --> Total execution time: 0.0565
DEBUG - 2022-08-01 14:21:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:43 --> Total execution time: 0.0571
DEBUG - 2022-08-01 14:21:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:43 --> Total execution time: 0.0561
DEBUG - 2022-08-01 14:21:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:43 --> Total execution time: 0.0641
DEBUG - 2022-08-01 14:21:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:44 --> Total execution time: 0.0524
DEBUG - 2022-08-01 14:21:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:44 --> Total execution time: 0.0551
DEBUG - 2022-08-01 14:21:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:21:51 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:21:51 --> Total execution time: 0.0550
DEBUG - 2022-08-01 14:21:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:52 --> Total execution time: 0.0764
DEBUG - 2022-08-01 14:21:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:52 --> Total execution time: 0.0667
DEBUG - 2022-08-01 14:21:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:52 --> Total execution time: 0.0477
DEBUG - 2022-08-01 14:21:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:53 --> Total execution time: 0.0645
DEBUG - 2022-08-01 14:21:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:53 --> Total execution time: 0.0550
DEBUG - 2022-08-01 14:21:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:54 --> Total execution time: 0.0624
DEBUG - 2022-08-01 14:21:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:54 --> Total execution time: 0.0543
DEBUG - 2022-08-01 14:21:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:55 --> Total execution time: 0.0627
DEBUG - 2022-08-01 14:21:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:55 --> Total execution time: 0.0585
DEBUG - 2022-08-01 14:21:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:56 --> Total execution time: 0.0622
DEBUG - 2022-08-01 14:21:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:56 --> Total execution time: 0.0549
DEBUG - 2022-08-01 14:21:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:21:57 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:21:57 --> Total execution time: 0.0529
DEBUG - 2022-08-01 14:21:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:57 --> Total execution time: 0.0690
DEBUG - 2022-08-01 14:21:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:57 --> Total execution time: 0.0554
DEBUG - 2022-08-01 14:21:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:57 --> Total execution time: 0.0545
DEBUG - 2022-08-01 14:21:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:59 --> Total execution time: 0.0575
DEBUG - 2022-08-01 14:21:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:21:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:21:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:21:59 --> Total execution time: 0.0633
DEBUG - 2022-08-01 14:22:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:22:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:22:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 14:22:23 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 231
DEBUG - 2022-08-01 14:22:23 --> Total execution time: 0.0590
DEBUG - 2022-08-01 14:22:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:22:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:22:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:22:23 --> Total execution time: 0.0639
DEBUG - 2022-08-01 14:22:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:22:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:22:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:22:23 --> Total execution time: 0.0756
DEBUG - 2022-08-01 14:22:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:22:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:22:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:22:23 --> Total execution time: 0.0476
DEBUG - 2022-08-01 14:22:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:22:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:22:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:22:26 --> Total execution time: 0.0547
DEBUG - 2022-08-01 14:22:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:22:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:22:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:22:26 --> Total execution time: 0.0516
DEBUG - 2022-08-01 14:22:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:22:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:22:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 14:22:29 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 231
DEBUG - 2022-08-01 14:22:29 --> Total execution time: 0.0531
DEBUG - 2022-08-01 14:22:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:22:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:22:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:22:29 --> Total execution time: 0.0580
DEBUG - 2022-08-01 14:22:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:22:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:22:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:22:29 --> Total execution time: 0.0657
DEBUG - 2022-08-01 14:22:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:22:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:22:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:22:29 --> Total execution time: 0.0519
DEBUG - 2022-08-01 14:22:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:22:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:22:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:22:31 --> Total execution time: 0.0566
DEBUG - 2022-08-01 14:22:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:22:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:22:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:22:31 --> Total execution time: 0.0553
DEBUG - 2022-08-01 14:22:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:22:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:22:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 14:22:35 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 231
DEBUG - 2022-08-01 14:22:35 --> Total execution time: 0.0554
DEBUG - 2022-08-01 14:22:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:22:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:22:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:22:35 --> Total execution time: 0.0553
DEBUG - 2022-08-01 14:22:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:22:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:22:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:22:35 --> Total execution time: 0.0537
DEBUG - 2022-08-01 14:22:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:22:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:22:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:22:35 --> Total execution time: 0.0658
DEBUG - 2022-08-01 14:22:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:22:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:22:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:22:37 --> Total execution time: 0.0632
DEBUG - 2022-08-01 14:22:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:22:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:22:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:22:37 --> Total execution time: 0.0653
DEBUG - 2022-08-01 14:22:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:22:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:22:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:22:45 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:22:45 --> Total execution time: 0.0536
DEBUG - 2022-08-01 14:22:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:22:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:22:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:22:45 --> Total execution time: 0.0812
DEBUG - 2022-08-01 14:22:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:22:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:22:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:22:46 --> Total execution time: 0.0578
DEBUG - 2022-08-01 14:22:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:22:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:22:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:22:46 --> Total execution time: 0.0501
DEBUG - 2022-08-01 14:31:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:31:06 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:31:06 --> Total execution time: 0.0589
DEBUG - 2022-08-01 14:31:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:31:06 --> Total execution time: 0.0906
DEBUG - 2022-08-01 14:31:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:31:06 --> Total execution time: 0.0584
DEBUG - 2022-08-01 14:31:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:31:06 --> Total execution time: 0.0444
DEBUG - 2022-08-01 14:31:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:31:08 --> Total execution time: 0.0669
DEBUG - 2022-08-01 14:31:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:31:08 --> Total execution time: 0.0572
DEBUG - 2022-08-01 14:31:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:31:10 --> Total execution time: 0.0706
DEBUG - 2022-08-01 14:31:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:31:10 --> Total execution time: 0.0576
DEBUG - 2022-08-01 14:31:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:31:12 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:31:12 --> Total execution time: 0.0551
DEBUG - 2022-08-01 14:31:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:31:13 --> Total execution time: 0.0495
DEBUG - 2022-08-01 14:31:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:31:13 --> Total execution time: 0.0748
DEBUG - 2022-08-01 14:31:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:31:13 --> Total execution time: 0.0526
DEBUG - 2022-08-01 14:31:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:31:16 --> Total execution time: 0.0525
DEBUG - 2022-08-01 14:31:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:31:16 --> Total execution time: 0.0528
DEBUG - 2022-08-01 14:31:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:31:16 --> Total execution time: 0.0553
DEBUG - 2022-08-01 14:31:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:31:16 --> Total execution time: 0.0660
DEBUG - 2022-08-01 14:31:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:31:16 --> Total execution time: 0.0617
DEBUG - 2022-08-01 14:31:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:31:17 --> Total execution time: 0.0534
DEBUG - 2022-08-01 14:31:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:31:17 --> Total execution time: 0.0571
DEBUG - 2022-08-01 14:31:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:31:19 --> Total execution time: 0.0562
DEBUG - 2022-08-01 14:31:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:31:19 --> Total execution time: 0.0680
DEBUG - 2022-08-01 14:31:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:31:19 --> Total execution time: 0.0676
DEBUG - 2022-08-01 14:31:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:31:21 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:31:21 --> Total execution time: 0.0480
DEBUG - 2022-08-01 14:31:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:31:21 --> Total execution time: 0.0670
DEBUG - 2022-08-01 14:31:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:31:21 --> Total execution time: 0.0541
DEBUG - 2022-08-01 14:31:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:31:24 --> Total execution time: 0.0900
DEBUG - 2022-08-01 14:31:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:31:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:31:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:31:24 --> Total execution time: 0.0795
DEBUG - 2022-08-01 14:32:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:32:20 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:32:20 --> Total execution time: 0.0538
DEBUG - 2022-08-01 14:32:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:20 --> Total execution time: 0.0491
DEBUG - 2022-08-01 14:32:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:20 --> Total execution time: 0.0754
DEBUG - 2022-08-01 14:32:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:20 --> Total execution time: 0.0474
DEBUG - 2022-08-01 14:32:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:21 --> Total execution time: 0.0511
DEBUG - 2022-08-01 14:32:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:21 --> Total execution time: 0.0550
DEBUG - 2022-08-01 14:32:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:21 --> Total execution time: 0.0657
DEBUG - 2022-08-01 14:32:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:23 --> Total execution time: 0.0477
DEBUG - 2022-08-01 14:32:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:23 --> Total execution time: 0.0575
DEBUG - 2022-08-01 14:32:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:32:27 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:32:27 --> Total execution time: 0.0520
DEBUG - 2022-08-01 14:32:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:27 --> Total execution time: 0.0887
DEBUG - 2022-08-01 14:32:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:27 --> Total execution time: 0.0534
DEBUG - 2022-08-01 14:32:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:27 --> Total execution time: 0.0441
DEBUG - 2022-08-01 14:32:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:29 --> Total execution time: 0.0765
DEBUG - 2022-08-01 14:32:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:29 --> Total execution time: 0.0567
DEBUG - 2022-08-01 14:32:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:31 --> Total execution time: 0.1077
DEBUG - 2022-08-01 14:32:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:31 --> Total execution time: 0.0694
DEBUG - 2022-08-01 14:32:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:32 --> Total execution time: 0.1447
DEBUG - 2022-08-01 14:32:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:32 --> Total execution time: 0.0704
DEBUG - 2022-08-01 14:32:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:32:36 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:32:36 --> Total execution time: 0.0540
DEBUG - 2022-08-01 14:32:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:36 --> Total execution time: 0.0506
DEBUG - 2022-08-01 14:32:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:36 --> Total execution time: 0.0700
DEBUG - 2022-08-01 14:32:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:36 --> Total execution time: 0.0444
DEBUG - 2022-08-01 14:32:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:37 --> Total execution time: 0.0531
DEBUG - 2022-08-01 14:32:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:37 --> Total execution time: 0.0620
DEBUG - 2022-08-01 14:32:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:37 --> Total execution time: 0.0623
DEBUG - 2022-08-01 14:32:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:38 --> Total execution time: 0.0548
DEBUG - 2022-08-01 14:32:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:38 --> Total execution time: 0.0644
DEBUG - 2022-08-01 14:32:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:39 --> Total execution time: 0.0545
DEBUG - 2022-08-01 14:32:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:39 --> Total execution time: 0.0568
DEBUG - 2022-08-01 14:32:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:32:42 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:32:42 --> Total execution time: 0.0526
DEBUG - 2022-08-01 14:32:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:32:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:32:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:32:42 --> Total execution time: 0.0578
DEBUG - 2022-08-01 14:33:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:33:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:33:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:33:41 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:33:41 --> Total execution time: 0.0617
DEBUG - 2022-08-01 14:33:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:33:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:33:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:33:41 --> Total execution time: 0.0881
DEBUG - 2022-08-01 14:33:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:33:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:33:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:33:41 --> Total execution time: 0.0567
DEBUG - 2022-08-01 14:33:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:33:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:33:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:33:41 --> Total execution time: 0.0483
DEBUG - 2022-08-01 14:33:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:33:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:33:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:33:45 --> Total execution time: 0.0495
DEBUG - 2022-08-01 14:33:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:33:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:33:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:33:45 --> Total execution time: 0.0719
DEBUG - 2022-08-01 14:33:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:33:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:33:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:33:48 --> Total execution time: 0.0541
DEBUG - 2022-08-01 14:33:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:33:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:33:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:33:48 --> Total execution time: 0.0641
DEBUG - 2022-08-01 14:33:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:33:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:33:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:33:48 --> Total execution time: 0.0572
DEBUG - 2022-08-01 14:33:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:33:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:33:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:33:48 --> Total execution time: 0.0486
DEBUG - 2022-08-01 14:33:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:33:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:33:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:33:49 --> Total execution time: 0.0544
DEBUG - 2022-08-01 14:33:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:33:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:33:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:33:49 --> Total execution time: 0.0629
DEBUG - 2022-08-01 14:33:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:33:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:33:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:33:50 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:33:50 --> Total execution time: 0.0520
DEBUG - 2022-08-01 14:33:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:33:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:33:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:33:50 --> Total execution time: 0.0702
DEBUG - 2022-08-01 14:33:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:33:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:33:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:33:51 --> Total execution time: 0.0552
DEBUG - 2022-08-01 14:33:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:33:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:33:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:33:53 --> Total execution time: 0.0717
DEBUG - 2022-08-01 14:33:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:33:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:33:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:33:53 --> Total execution time: 0.0573
DEBUG - 2022-08-01 14:33:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:33:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:33:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:33:53 --> Total execution time: 0.0467
DEBUG - 2022-08-01 14:34:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:34:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:34:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:34:02 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:34:02 --> Total execution time: 0.0606
DEBUG - 2022-08-01 14:34:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:34:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:34:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:34:02 --> Total execution time: 0.0532
DEBUG - 2022-08-01 14:34:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:34:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:34:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:34:02 --> Total execution time: 0.0690
DEBUG - 2022-08-01 14:34:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:34:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:34:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:34:02 --> Total execution time: 0.0457
DEBUG - 2022-08-01 14:34:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:34:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:34:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:34:03 --> Total execution time: 0.0579
DEBUG - 2022-08-01 14:34:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:34:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:34:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:34:03 --> Total execution time: 0.0602
DEBUG - 2022-08-01 14:34:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:34:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:34:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:34:03 --> Total execution time: 0.0661
DEBUG - 2022-08-01 14:34:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:34:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:34:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:34:05 --> Total execution time: 0.0735
DEBUG - 2022-08-01 14:34:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:34:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:34:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:34:05 --> Total execution time: 0.0557
DEBUG - 2022-08-01 14:34:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:34:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:34:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:34:07 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:34:07 --> Total execution time: 0.0602
DEBUG - 2022-08-01 14:34:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:34:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:34:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:34:07 --> Total execution time: 0.0809
DEBUG - 2022-08-01 14:34:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:34:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:34:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:34:07 --> Total execution time: 0.0830
DEBUG - 2022-08-01 14:34:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:34:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:34:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:34:07 --> Total execution time: 0.0645
DEBUG - 2022-08-01 14:34:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:34:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:34:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:34:08 --> Total execution time: 0.0758
DEBUG - 2022-08-01 14:34:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:34:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:34:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:34:08 --> Total execution time: 0.0584
DEBUG - 2022-08-01 14:34:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:34:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:34:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:34:10 --> Total execution time: 0.0509
DEBUG - 2022-08-01 14:34:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:34:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:34:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:34:10 --> Total execution time: 0.0697
DEBUG - 2022-08-01 14:34:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:34:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:34:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:34:11 --> Total execution time: 0.0554
DEBUG - 2022-08-01 14:34:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:34:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:34:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:34:11 --> Total execution time: 0.0586
DEBUG - 2022-08-01 14:34:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:34:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:34:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:34:11 --> Total execution time: 0.0545
DEBUG - 2022-08-01 14:34:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:34:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:34:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:34:11 --> Total execution time: 0.0546
DEBUG - 2022-08-01 14:34:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:34:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:34:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:34:11 --> Total execution time: 0.0649
DEBUG - 2022-08-01 14:34:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:34:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:34:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:34:12 --> Total execution time: 0.0569
DEBUG - 2022-08-01 14:34:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:34:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:34:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:34:12 --> Total execution time: 0.0574
DEBUG - 2022-08-01 14:35:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:35:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:35:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:35:02 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:35:02 --> Total execution time: 0.0522
DEBUG - 2022-08-01 14:35:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:35:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:35:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:35:02 --> Total execution time: 0.0949
DEBUG - 2022-08-01 14:35:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:35:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:35:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:35:03 --> Total execution time: 0.0649
DEBUG - 2022-08-01 14:35:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:35:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:35:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:35:03 --> Total execution time: 0.0435
DEBUG - 2022-08-01 14:35:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:35:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:35:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:35:05 --> Total execution time: 0.1141
DEBUG - 2022-08-01 14:35:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:35:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:35:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:35:07 --> Total execution time: 0.0504
DEBUG - 2022-08-01 14:35:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:35:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:35:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:35:07 --> Total execution time: 0.0559
DEBUG - 2022-08-01 14:35:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:35:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:35:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:35:08 --> Total execution time: 0.0507
DEBUG - 2022-08-01 14:35:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:35:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:35:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:35:08 --> Total execution time: 0.0551
DEBUG - 2022-08-01 14:35:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:35:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:35:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:35:08 --> Total execution time: 0.0556
DEBUG - 2022-08-01 14:35:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:35:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:35:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:35:08 --> Total execution time: 0.0502
DEBUG - 2022-08-01 14:35:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:35:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:35:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:35:08 --> Total execution time: 0.0543
DEBUG - 2022-08-01 14:35:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:35:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:35:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:35:08 --> Total execution time: 0.0548
DEBUG - 2022-08-01 14:35:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:35:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:35:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:35:11 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:35:11 --> Total execution time: 0.0537
DEBUG - 2022-08-01 14:35:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:35:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:35:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:35:11 --> Total execution time: 0.0665
DEBUG - 2022-08-01 14:35:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:35:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:35:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:35:11 --> Total execution time: 0.0569
DEBUG - 2022-08-01 14:35:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:35:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:35:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:35:14 --> Total execution time: 0.0712
DEBUG - 2022-08-01 14:35:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:35:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:35:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:35:14 --> Total execution time: 0.0550
DEBUG - 2022-08-01 14:35:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:35:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:35:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:35:14 --> Total execution time: 0.0467
DEBUG - 2022-08-01 14:36:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:36:37 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:36:37 --> Total execution time: 0.0622
DEBUG - 2022-08-01 14:36:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:37 --> Total execution time: 0.0535
DEBUG - 2022-08-01 14:36:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:37 --> Total execution time: 0.0747
DEBUG - 2022-08-01 14:36:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:37 --> Total execution time: 0.0454
DEBUG - 2022-08-01 14:36:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:38 --> Total execution time: 0.0480
DEBUG - 2022-08-01 14:36:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:38 --> Total execution time: 0.0587
DEBUG - 2022-08-01 14:36:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:38 --> Total execution time: 0.0543
DEBUG - 2022-08-01 14:36:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:39 --> Total execution time: 0.0522
DEBUG - 2022-08-01 14:36:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:39 --> Total execution time: 0.0536
DEBUG - 2022-08-01 14:36:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:36:48 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:36:48 --> Total execution time: 0.0527
DEBUG - 2022-08-01 14:36:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:48 --> Total execution time: 0.0846
DEBUG - 2022-08-01 14:36:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:48 --> Total execution time: 0.0516
DEBUG - 2022-08-01 14:36:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:48 --> Total execution time: 0.0449
DEBUG - 2022-08-01 14:36:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:50 --> Total execution time: 0.0741
DEBUG - 2022-08-01 14:36:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:50 --> Total execution time: 0.0573
DEBUG - 2022-08-01 14:36:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:51 --> Total execution time: 0.0784
DEBUG - 2022-08-01 14:36:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:51 --> Total execution time: 0.0628
DEBUG - 2022-08-01 14:36:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:52 --> Total execution time: 0.1787
DEBUG - 2022-08-01 14:36:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:52 --> Total execution time: 0.0635
DEBUG - 2022-08-01 14:36:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:36:54 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:36:54 --> Total execution time: 0.0616
DEBUG - 2022-08-01 14:36:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:55 --> Total execution time: 0.0637
DEBUG - 2022-08-01 14:36:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:55 --> Total execution time: 0.1004
DEBUG - 2022-08-01 14:36:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:55 --> Total execution time: 0.0842
DEBUG - 2022-08-01 14:36:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:57 --> Total execution time: 0.0729
DEBUG - 2022-08-01 14:36:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:57 --> Total execution time: 0.0990
DEBUG - 2022-08-01 14:36:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:57 --> Total execution time: 0.0975
DEBUG - 2022-08-01 14:36:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:57 --> Total execution time: 0.0755
DEBUG - 2022-08-01 14:36:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:57 --> Total execution time: 0.0787
DEBUG - 2022-08-01 14:36:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:58 --> Total execution time: 0.0725
DEBUG - 2022-08-01 14:36:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:58 --> Total execution time: 0.1115
DEBUG - 2022-08-01 14:36:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:58 --> Total execution time: 0.0855
DEBUG - 2022-08-01 14:36:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:58 --> Total execution time: 0.0813
DEBUG - 2022-08-01 14:36:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:59 --> Total execution time: 0.0814
DEBUG - 2022-08-01 14:36:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:59 --> Total execution time: 0.1035
DEBUG - 2022-08-01 14:36:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:59 --> Total execution time: 0.0780
DEBUG - 2022-08-01 14:36:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:59 --> Total execution time: 0.0809
DEBUG - 2022-08-01 14:36:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:36:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:36:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:59 --> Total execution time: 0.1102
DEBUG - 2022-08-01 14:36:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:37:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:37:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:37:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:37:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:00 --> Total execution time: 0.0945
DEBUG - 2022-08-01 14:37:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:00 --> Total execution time: 0.0886
DEBUG - 2022-08-01 14:37:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:37:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:37:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:00 --> Total execution time: 0.1686
DEBUG - 2022-08-01 14:37:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:37:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:37:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:00 --> Total execution time: 0.0949
DEBUG - 2022-08-01 14:37:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:37:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:37:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:37:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:37:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:00 --> Total execution time: 0.1045
DEBUG - 2022-08-01 14:37:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:37:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:37:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:00 --> Total execution time: 0.0955
DEBUG - 2022-08-01 14:37:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:00 --> Total execution time: 0.1041
DEBUG - 2022-08-01 14:37:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:37:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:37:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:01 --> Total execution time: 0.1269
DEBUG - 2022-08-01 14:37:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:37:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:37:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:01 --> Total execution time: 0.0971
DEBUG - 2022-08-01 14:37:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:37:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:37:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:01 --> Total execution time: 0.1253
DEBUG - 2022-08-01 14:37:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:37:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:37:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:02 --> Total execution time: 0.0778
DEBUG - 2022-08-01 14:37:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:37:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:37:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:02 --> Total execution time: 0.0794
DEBUG - 2022-08-01 14:37:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:37:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:37:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:02 --> Total execution time: 0.0744
DEBUG - 2022-08-01 14:37:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:37:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:37:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:37:04 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:37:04 --> Total execution time: 0.0608
DEBUG - 2022-08-01 14:37:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:37:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:37:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:04 --> Total execution time: 0.0770
DEBUG - 2022-08-01 14:37:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:37:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:37:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:04 --> Total execution time: 0.0562
DEBUG - 2022-08-01 14:37:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:37:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:37:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:08 --> Total execution time: 0.0521
DEBUG - 2022-08-01 14:37:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:37:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:37:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:09 --> Total execution time: 0.0614
DEBUG - 2022-08-01 14:37:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:37:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:37:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:09 --> Total execution time: 0.0452
DEBUG - 2022-08-01 14:37:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:37:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:37:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:10 --> Total execution time: 0.0474
DEBUG - 2022-08-01 14:37:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:37:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:37:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:10 --> Total execution time: 0.0553
DEBUG - 2022-08-01 14:37:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:37:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:37:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:10 --> Total execution time: 0.0554
DEBUG - 2022-08-01 14:38:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:38:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:38:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:38:48 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:38:48 --> Total execution time: 0.0603
DEBUG - 2022-08-01 14:38:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:38:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:38:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:38:48 --> Total execution time: 0.0766
DEBUG - 2022-08-01 14:38:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:38:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:38:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:38:48 --> Total execution time: 0.0639
DEBUG - 2022-08-01 14:38:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:38:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:38:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:38:48 --> Total execution time: 0.0551
DEBUG - 2022-08-01 14:38:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:38:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:38:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:38:49 --> Total execution time: 0.0688
DEBUG - 2022-08-01 14:38:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:38:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:38:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:38:49 --> Total execution time: 0.0590
DEBUG - 2022-08-01 14:40:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:40:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:40:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:40:36 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:40:36 --> Total execution time: 0.0520
DEBUG - 2022-08-01 14:40:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:40:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:40:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:40:36 --> Total execution time: 0.0527
DEBUG - 2022-08-01 14:40:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:40:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:40:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:40:36 --> Total execution time: 0.1207
DEBUG - 2022-08-01 14:40:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:40:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:40:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:40:36 --> Total execution time: 0.0491
DEBUG - 2022-08-01 14:40:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:40:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:40:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:40:37 --> Total execution time: 0.0616
DEBUG - 2022-08-01 14:40:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:40:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:40:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:40:37 --> Total execution time: 0.0547
DEBUG - 2022-08-01 14:40:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:40:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:40:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:40:37 --> Total execution time: 0.0542
DEBUG - 2022-08-01 14:40:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:40:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:40:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:40:38 --> Total execution time: 0.0510
DEBUG - 2022-08-01 14:40:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:40:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:40:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:40:38 --> Total execution time: 0.1072
DEBUG - 2022-08-01 14:40:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:40:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:40:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:40:40 --> Total execution time: 0.0718
DEBUG - 2022-08-01 14:40:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:40:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:40:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:40:40 --> Total execution time: 0.0542
DEBUG - 2022-08-01 14:40:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:40:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:40:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:40:41 --> Total execution time: 0.0648
DEBUG - 2022-08-01 14:40:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:40:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:40:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:40:41 --> Total execution time: 0.0940
DEBUG - 2022-08-01 14:43:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:43:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:43:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 14:43:41 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 231
DEBUG - 2022-08-01 14:43:41 --> Total execution time: 0.0508
DEBUG - 2022-08-01 14:43:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:43:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:43:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:43:41 --> Total execution time: 0.0593
DEBUG - 2022-08-01 14:43:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:43:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:43:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:43:41 --> Total execution time: 0.0587
DEBUG - 2022-08-01 14:43:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:43:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:43:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 14:43:42 --> Total execution time: 0.0481
DEBUG - 2022-08-01 14:44:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:44:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:44:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:44:06 --> Total execution time: 0.0899
DEBUG - 2022-08-01 14:44:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:44:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:44:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:44:06 --> Total execution time: 0.0570
DEBUG - 2022-08-01 14:44:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:44:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:44:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:44:07 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:44:07 --> Total execution time: 0.0485
DEBUG - 2022-08-01 14:44:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:44:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:44:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:44:07 --> Total execution time: 0.0732
DEBUG - 2022-08-01 14:44:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:44:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:44:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:44:07 --> Total execution time: 0.0531
DEBUG - 2022-08-01 14:44:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:44:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:44:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:44:09 --> Total execution time: 0.0634
DEBUG - 2022-08-01 14:44:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:44:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:44:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:44:09 --> Total execution time: 0.0539
DEBUG - 2022-08-01 14:45:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:45:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:45:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:45:38 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:45:38 --> Total execution time: 0.0547
DEBUG - 2022-08-01 14:45:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:45:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:45:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:45:38 --> Total execution time: 0.0958
DEBUG - 2022-08-01 14:45:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:45:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:45:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:45:38 --> Total execution time: 0.0729
DEBUG - 2022-08-01 14:45:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:45:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:45:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:45:38 --> Total execution time: 0.0480
DEBUG - 2022-08-01 14:45:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:45:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:45:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:45:40 --> Total execution time: 0.0731
DEBUG - 2022-08-01 14:45:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:45:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:45:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:45:40 --> Total execution time: 0.0623
DEBUG - 2022-08-01 14:46:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:46:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:46:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:46:31 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:46:31 --> Total execution time: 0.0595
DEBUG - 2022-08-01 14:46:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:46:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:46:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:46:31 --> Total execution time: 0.0502
DEBUG - 2022-08-01 14:46:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:46:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:46:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:46:31 --> Total execution time: 0.0653
DEBUG - 2022-08-01 14:46:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:46:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:46:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:46:31 --> Total execution time: 0.0500
DEBUG - 2022-08-01 14:46:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:46:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:46:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:46:32 --> Total execution time: 0.0582
DEBUG - 2022-08-01 14:46:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:46:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:46:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:46:32 --> Total execution time: 0.0633
DEBUG - 2022-08-01 14:46:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:46:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:46:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:46:33 --> Total execution time: 0.0523
DEBUG - 2022-08-01 14:46:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:46:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:46:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:46:33 --> Total execution time: 0.0554
DEBUG - 2022-08-01 14:46:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:46:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:46:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:46:33 --> Total execution time: 0.0525
DEBUG - 2022-08-01 14:46:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:46:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:46:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:46:39 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:46:39 --> Total execution time: 0.0568
DEBUG - 2022-08-01 14:46:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:46:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:46:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:46:39 --> Total execution time: 0.0713
DEBUG - 2022-08-01 14:46:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:46:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:46:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:46:39 --> Total execution time: 0.0500
DEBUG - 2022-08-01 14:46:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:46:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:46:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:46:39 --> Total execution time: 0.0463
DEBUG - 2022-08-01 14:46:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:46:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:46:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:46:41 --> Total execution time: 0.0644
DEBUG - 2022-08-01 14:46:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:46:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:46:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:46:41 --> Total execution time: 0.0538
DEBUG - 2022-08-01 14:47:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:47:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:47:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:47:57 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:47:57 --> Total execution time: 0.0594
DEBUG - 2022-08-01 14:47:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:47:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:47:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:47:57 --> Total execution time: 0.0739
DEBUG - 2022-08-01 14:47:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:47:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:47:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:47:58 --> Total execution time: 0.0573
DEBUG - 2022-08-01 14:47:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:47:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:47:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:47:58 --> Total execution time: 0.0437
DEBUG - 2022-08-01 14:48:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:48:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:48:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:48:04 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:48:04 --> Total execution time: 0.0519
DEBUG - 2022-08-01 14:48:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:48:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:48:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:48:04 --> Total execution time: 0.0660
DEBUG - 2022-08-01 14:48:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:48:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:48:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:48:04 --> Total execution time: 0.0519
DEBUG - 2022-08-01 14:48:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:48:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:48:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:48:04 --> Total execution time: 0.0462
DEBUG - 2022-08-01 14:55:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:55:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:55:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:55:54 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:55:54 --> Total execution time: 0.0514
DEBUG - 2022-08-01 14:55:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:55:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:55:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:55:54 --> Total execution time: 0.0709
DEBUG - 2022-08-01 14:55:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:55:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:55:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:55:54 --> Total execution time: 0.0606
DEBUG - 2022-08-01 14:55:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:55:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:55:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:55:54 --> Total execution time: 0.0435
DEBUG - 2022-08-01 14:55:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:55:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:55:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:55:56 --> Total execution time: 0.0629
DEBUG - 2022-08-01 14:55:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:55:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:55:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:55:56 --> Total execution time: 0.0572
DEBUG - 2022-08-01 14:56:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:56:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:56:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:56:25 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:56:25 --> Total execution time: 0.0751
DEBUG - 2022-08-01 14:56:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:56:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:56:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:56:25 --> Total execution time: 0.0686
DEBUG - 2022-08-01 14:56:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:56:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:56:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:56:32 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:56:32 --> Total execution time: 0.0499
DEBUG - 2022-08-01 14:56:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:56:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:56:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:56:33 --> Severity: Notice --> Undefined variable: discLevel3 C:\xampp\htdocs\application\cso\admin\api\application\models\Model.php 609
DEBUG - 2022-08-01 19:56:33 --> Total execution time: 0.0624
DEBUG - 2022-08-01 14:56:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:56:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:56:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:56:36 --> Total execution time: 0.1304
DEBUG - 2022-08-01 14:56:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:56:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:56:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:56:36 --> Total execution time: 0.0974
DEBUG - 2022-08-01 14:56:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:56:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:56:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:56:38 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:56:38 --> Total execution time: 0.0744
DEBUG - 2022-08-01 14:56:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:56:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:56:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:56:38 --> Severity: Notice --> Undefined variable: discLevel3 C:\xampp\htdocs\application\cso\admin\api\application\models\Model.php 609
ERROR - 2022-08-01 19:56:38 --> Severity: Notice --> Undefined variable: discLevel3 C:\xampp\htdocs\application\cso\admin\api\application\models\Model.php 609
DEBUG - 2022-08-01 19:56:38 --> Total execution time: 0.1076
DEBUG - 2022-08-01 14:56:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:56:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:56:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:56:55 --> Total execution time: 0.1370
DEBUG - 2022-08-01 14:56:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:56:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:56:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:56:55 --> Total execution time: 0.1418
DEBUG - 2022-08-01 14:56:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:56:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:56:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:56:56 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:56:56 --> Total execution time: 0.0709
DEBUG - 2022-08-01 14:56:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:56:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:56:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:56:57 --> Total execution time: 0.0990
DEBUG - 2022-08-01 14:56:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:56:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:56:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:56:57 --> Total execution time: 0.0691
DEBUG - 2022-08-01 14:57:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:57:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:57:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:57:06 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:57:06 --> Total execution time: 0.0527
DEBUG - 2022-08-01 14:57:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:57:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:57:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:57:07 --> Total execution time: 0.0591
DEBUG - 2022-08-01 14:57:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:57:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:57:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:57:07 --> Total execution time: 0.0558
DEBUG - 2022-08-01 14:57:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:57:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:57:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:57:07 --> Total execution time: 0.0535
DEBUG - 2022-08-01 14:57:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:57:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:57:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:57:08 --> Total execution time: 0.0603
DEBUG - 2022-08-01 14:57:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:57:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:57:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:57:08 --> Total execution time: 0.0542
DEBUG - 2022-08-01 14:57:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:57:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:57:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:57:56 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:57:56 --> Total execution time: 0.0575
DEBUG - 2022-08-01 14:57:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:57:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:57:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:57:56 --> Total execution time: 0.0746
DEBUG - 2022-08-01 14:57:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:57:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:57:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:57:57 --> Total execution time: 0.0560
DEBUG - 2022-08-01 14:57:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:57:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:57:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:57:57 --> Total execution time: 0.0497
DEBUG - 2022-08-01 14:57:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:57:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:57:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:57:59 --> Total execution time: 0.0661
DEBUG - 2022-08-01 14:57:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:57:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:57:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:57:59 --> Total execution time: 0.0557
DEBUG - 2022-08-01 14:58:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:58:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:58:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:58:44 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:58:44 --> Total execution time: 0.0538
DEBUG - 2022-08-01 14:58:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:58:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:58:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:58:44 --> Total execution time: 0.0620
DEBUG - 2022-08-01 14:58:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:58:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:58:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:58:44 --> Total execution time: 0.0502
DEBUG - 2022-08-01 14:58:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:58:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:58:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:58:44 --> Total execution time: 0.0528
DEBUG - 2022-08-01 14:58:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:58:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:58:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:58:45 --> Total execution time: 0.0648
DEBUG - 2022-08-01 14:58:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:58:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:58:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:58:45 --> Total execution time: 0.0534
DEBUG - 2022-08-01 14:59:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:59:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:59:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:59:57 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 19:59:57 --> Total execution time: 0.0780
DEBUG - 2022-08-01 14:59:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:59:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:59:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:59:58 --> Total execution time: 0.1291
DEBUG - 2022-08-01 14:59:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:59:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:59:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:59:58 --> Total execution time: 0.0860
DEBUG - 2022-08-01 14:59:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 14:59:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 14:59:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:59:58 --> Total execution time: 0.0539
DEBUG - 2022-08-01 15:00:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:00:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:00:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 20:00:20 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 20:00:20 --> Total execution time: 0.0445
DEBUG - 2022-08-01 15:00:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:00:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:00:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:00:20 --> Total execution time: 0.0672
DEBUG - 2022-08-01 15:00:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:00:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:00:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:00:20 --> Total execution time: 0.0572
DEBUG - 2022-08-01 15:00:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:00:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:00:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:00:20 --> Total execution time: 0.0474
DEBUG - 2022-08-01 15:00:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:00:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:00:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:00:22 --> Total execution time: 0.0671
DEBUG - 2022-08-01 15:00:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:00:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:00:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:00:22 --> Total execution time: 0.0542
DEBUG - 2022-08-01 15:00:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:00:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:00:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 20:00:46 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 20:00:46 --> Total execution time: 0.0581
DEBUG - 2022-08-01 15:00:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:00:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:00:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:00:46 --> Total execution time: 0.0611
DEBUG - 2022-08-01 15:00:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:00:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:00:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:00:46 --> Total execution time: 0.0541
DEBUG - 2022-08-01 15:00:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:00:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:00:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:00:46 --> Total execution time: 0.0425
DEBUG - 2022-08-01 15:00:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:00:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:00:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:00:47 --> Total execution time: 0.0573
DEBUG - 2022-08-01 15:00:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:00:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:00:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:00:47 --> Total execution time: 0.0545
DEBUG - 2022-08-01 15:00:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:00:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:00:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 20:00:51 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 20:00:51 --> Total execution time: 0.0534
DEBUG - 2022-08-01 15:00:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:00:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:00:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:00:51 --> Total execution time: 0.0629
DEBUG - 2022-08-01 15:00:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:00:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:00:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:00:52 --> Total execution time: 0.0520
DEBUG - 2022-08-01 15:00:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:00:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:00:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:00:52 --> Total execution time: 0.0482
DEBUG - 2022-08-01 15:01:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:01:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:01:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 20:01:12 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 20:01:12 --> Total execution time: 0.0576
DEBUG - 2022-08-01 15:01:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:01:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:01:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:01:12 --> Total execution time: 0.0767
DEBUG - 2022-08-01 15:01:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:01:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:01:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:01:12 --> Total execution time: 0.0607
DEBUG - 2022-08-01 15:01:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:01:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:01:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:01:13 --> Total execution time: 0.0489
DEBUG - 2022-08-01 15:01:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:01:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:01:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:01:15 --> Total execution time: 0.0593
DEBUG - 2022-08-01 15:01:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:01:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:01:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:01:15 --> Total execution time: 0.0571
DEBUG - 2022-08-01 15:01:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:01:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:01:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 20:01:50 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 20:01:50 --> Total execution time: 0.0516
DEBUG - 2022-08-01 15:01:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:01:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:01:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:01:50 --> Total execution time: 0.0691
DEBUG - 2022-08-01 15:01:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:01:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:01:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:01:50 --> Total execution time: 0.0531
DEBUG - 2022-08-01 15:01:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:01:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:01:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:01:50 --> Total execution time: 0.0452
DEBUG - 2022-08-01 15:02:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:02:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:02:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 20:02:39 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 20:02:39 --> Total execution time: 0.0534
DEBUG - 2022-08-01 15:02:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:02:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:02:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:02:39 --> Total execution time: 0.0670
DEBUG - 2022-08-01 15:02:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:02:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:02:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:02:39 --> Total execution time: 0.0573
DEBUG - 2022-08-01 15:02:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:02:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:02:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:02:39 --> Total execution time: 0.0445
DEBUG - 2022-08-01 15:02:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:02:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:02:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:02:40 --> Total execution time: 0.0599
DEBUG - 2022-08-01 15:02:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:02:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:02:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:02:41 --> Total execution time: 0.0640
DEBUG - 2022-08-01 15:03:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 20:03:16 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 20:03:16 --> Total execution time: 0.0533
DEBUG - 2022-08-01 15:03:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:03:16 --> Total execution time: 0.0857
DEBUG - 2022-08-01 15:03:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:03:16 --> Total execution time: 0.0687
DEBUG - 2022-08-01 15:03:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:03:17 --> Total execution time: 0.0455
DEBUG - 2022-08-01 15:03:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:03:17 --> Total execution time: 0.0719
DEBUG - 2022-08-01 15:03:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:03:17 --> Total execution time: 0.0562
DEBUG - 2022-08-01 15:03:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:03:18 --> Total execution time: 0.0658
DEBUG - 2022-08-01 15:03:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:03:18 --> Total execution time: 0.0904
DEBUG - 2022-08-01 15:03:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:03:20 --> Total execution time: 0.0771
DEBUG - 2022-08-01 15:03:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:03:20 --> Total execution time: 0.0540
DEBUG - 2022-08-01 15:03:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 20:03:24 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 20:03:24 --> Total execution time: 0.0500
DEBUG - 2022-08-01 15:03:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:03:24 --> Total execution time: 0.0505
DEBUG - 2022-08-01 15:03:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:03:24 --> Total execution time: 0.0610
DEBUG - 2022-08-01 15:03:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:03:24 --> Total execution time: 0.0505
DEBUG - 2022-08-01 15:03:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 15:03:38 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 231
DEBUG - 2022-08-01 15:03:38 --> Total execution time: 0.0510
DEBUG - 2022-08-01 15:03:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:03:38 --> Total execution time: 0.0633
DEBUG - 2022-08-01 15:03:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:03:39 --> Total execution time: 0.0660
DEBUG - 2022-08-01 15:03:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:03:39 --> Total execution time: 0.0625
DEBUG - 2022-08-01 15:03:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:03:41 --> Total execution time: 0.0613
DEBUG - 2022-08-01 15:03:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:03:41 --> Total execution time: 0.0614
DEBUG - 2022-08-01 15:03:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 15:03:45 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 231
DEBUG - 2022-08-01 15:03:45 --> Total execution time: 0.0601
DEBUG - 2022-08-01 15:03:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:03:45 --> Total execution time: 0.0598
DEBUG - 2022-08-01 15:03:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:03:45 --> Total execution time: 0.0609
DEBUG - 2022-08-01 15:03:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:03:45 --> Total execution time: 0.0526
DEBUG - 2022-08-01 15:03:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 15:03:51 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 231
DEBUG - 2022-08-01 15:03:51 --> Total execution time: 0.0544
DEBUG - 2022-08-01 15:03:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:03:51 --> Total execution time: 0.0545
DEBUG - 2022-08-01 15:03:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:03:51 --> Total execution time: 0.0597
DEBUG - 2022-08-01 15:03:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:03:51 --> Total execution time: 0.0488
DEBUG - 2022-08-01 15:03:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:03:54 --> Total execution time: 0.0536
DEBUG - 2022-08-01 15:03:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:03:54 --> Total execution time: 0.0570
DEBUG - 2022-08-01 15:03:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 20:03:57 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 20:03:57 --> Total execution time: 0.0493
DEBUG - 2022-08-01 15:03:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:03:57 --> Total execution time: 0.0732
DEBUG - 2022-08-01 15:03:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:03:57 --> Total execution time: 0.0518
DEBUG - 2022-08-01 15:03:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:03:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:03:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:03:57 --> Total execution time: 0.0443
DEBUG - 2022-08-01 15:04:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:04:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:04:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 20:04:26 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 20:04:26 --> Total execution time: 0.0514
DEBUG - 2022-08-01 15:04:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:04:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:04:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:04:26 --> Total execution time: 0.0525
DEBUG - 2022-08-01 15:04:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:04:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:04:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:04:27 --> Total execution time: 0.0706
DEBUG - 2022-08-01 15:04:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:04:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:04:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:04:27 --> Total execution time: 0.0456
DEBUG - 2022-08-01 15:04:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:04:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:04:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:04:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:04:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:04:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:04:41 --> Total execution time: 0.1183
DEBUG - 2022-08-01 15:04:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:04:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:04:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:04:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:04:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:04:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:04:41 --> Total execution time: 0.0558
DEBUG - 2022-08-01 15:04:41 --> Total execution time: 0.0743
DEBUG - 2022-08-01 15:04:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:04:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:04:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:04:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:04:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:04:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:04:43 --> Total execution time: 0.0994
DEBUG - 2022-08-01 15:04:43 --> Total execution time: 0.1163
DEBUG - 2022-08-01 15:04:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:04:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:04:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:04:43 --> Total execution time: 0.0778
DEBUG - 2022-08-01 15:04:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:04:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:04:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:04:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:04:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:04:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:04:46 --> Total execution time: 0.0918
DEBUG - 2022-08-01 15:04:46 --> Total execution time: 0.1064
DEBUG - 2022-08-01 15:04:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:04:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:04:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:04:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:04:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:04:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:04:48 --> Total execution time: 0.0913
DEBUG - 2022-08-01 15:04:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:04:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:04:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:04:48 --> Total execution time: 0.0626
DEBUG - 2022-08-01 15:04:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:04:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:04:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 15:04:58 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 174
DEBUG - 2022-08-01 15:04:58 --> Total execution time: 0.0596
DEBUG - 2022-08-01 15:04:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:04:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:04:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 15:04:58 --> Severity: Notice --> Undefined index: specialPrice C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 165
ERROR - 2022-08-01 15:04:58 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'specialPrice'. - Invalid query: UPDATE "cso1_promotion" SET "typeOfPromotion" = 2, "storeOutlesId" = '22', "code" = 'FOMCNews', "description" = 'Free Item promo test', "startDate" = 1671663600, "endDate" = 1641596400, "discountPercent" = 0, "specialPrice" = NULL, "inputDate" = 1659359098, "inputBy" = '1'
WHERE "id" = 'PR000011' 
DEBUG - 2022-08-01 15:07:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:07:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:07:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 15:07:26 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 173
DEBUG - 2022-08-01 15:07:26 --> Total execution time: 0.0615
DEBUG - 2022-08-01 15:07:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:07:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:07:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 15:07:26 --> Severity: Notice --> Undefined index: specialPrice C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 164
ERROR - 2022-08-01 15:07:26 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'specialPrice'. - Invalid query: UPDATE "cso1_promotion" SET "typeOfPromotion" = 2, "storeOutlesId" = '22', "code" = 'FOMCNews', "description" = 'Free Item promo test1', "startDate" = 1671663600, "endDate" = 1641596400, "discountPercent" = 0, "specialPrice" = NULL, "inputDate" = 1659359246, "inputBy" = '1'
WHERE "id" = 'PR000011' 
DEBUG - 2022-08-01 15:08:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:08:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:08:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 15:08:15 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 172
DEBUG - 2022-08-01 15:08:15 --> Total execution time: 0.0581
DEBUG - 2022-08-01 15:08:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:08:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:08:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:08:15 --> Total execution time: 0.0630
DEBUG - 2022-08-01 15:08:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:08:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:08:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:08:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:08:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:08:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:08:18 --> Total execution time: 0.1161
DEBUG - 2022-08-01 15:08:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:08:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:08:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:08:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:08:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:08:18 --> Total execution time: 0.1141
DEBUG - 2022-08-01 15:08:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:08:18 --> Total execution time: 0.1014
DEBUG - 2022-08-01 15:08:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:08:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:08:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 20:08:27 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 20:08:27 --> Total execution time: 0.0525
DEBUG - 2022-08-01 15:08:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:08:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:08:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:08:27 --> Total execution time: 0.0877
DEBUG - 2022-08-01 15:08:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:08:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:08:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:08:27 --> Total execution time: 0.0582
DEBUG - 2022-08-01 15:08:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:08:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:08:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:08:27 --> Total execution time: 0.0446
DEBUG - 2022-08-01 15:09:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:09:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:09:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 20:09:20 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 20:09:20 --> Total execution time: 0.0539
DEBUG - 2022-08-01 15:09:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:09:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:09:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:09:20 --> Total execution time: 0.0491
DEBUG - 2022-08-01 15:09:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:09:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:09:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:09:20 --> Total execution time: 0.0731
DEBUG - 2022-08-01 15:09:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:09:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:09:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:09:20 --> Total execution time: 0.0441
DEBUG - 2022-08-01 15:09:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:09:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:09:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 20:09:25 --> Severity: Notice --> Undefined variable: update C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 64
DEBUG - 2022-08-01 20:09:26 --> Total execution time: 0.0900
DEBUG - 2022-08-01 15:09:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:09:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:09:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:09:26 --> Total execution time: 0.0572
DEBUG - 2022-08-01 15:09:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:09:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:09:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:09:26 --> Total execution time: 0.0505
DEBUG - 2022-08-01 15:09:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:09:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:09:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:09:26 --> Total execution time: 0.0485
DEBUG - 2022-08-01 15:09:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:09:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:09:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 20:09:48 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 20:09:48 --> Total execution time: 0.0520
DEBUG - 2022-08-01 15:09:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:09:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:09:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:09:49 --> Total execution time: 0.0894
DEBUG - 2022-08-01 15:09:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:09:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:09:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:09:49 --> Total execution time: 0.0589
DEBUG - 2022-08-01 15:09:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:09:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:09:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:09:49 --> Total execution time: 0.0453
DEBUG - 2022-08-01 15:09:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:09:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:09:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:09:52 --> Total execution time: 0.0908
DEBUG - 2022-08-01 15:09:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:09:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:09:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:09:52 --> Total execution time: 0.0636
DEBUG - 2022-08-01 15:12:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:12:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:12:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 20:12:13 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 20:12:13 --> Total execution time: 0.0545
DEBUG - 2022-08-01 15:12:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:12:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:12:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:12:13 --> Total execution time: 0.0484
DEBUG - 2022-08-01 15:12:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:12:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:12:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:12:14 --> Total execution time: 0.0738
DEBUG - 2022-08-01 15:12:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:12:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:12:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:12:14 --> Total execution time: 0.0451
DEBUG - 2022-08-01 15:12:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:12:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:12:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:12:25 --> Total execution time: 0.0545
DEBUG - 2022-08-01 15:12:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:12:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:12:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:12:25 --> Total execution time: 0.0493
DEBUG - 2022-08-01 15:12:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:12:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:12:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:12:25 --> Total execution time: 0.0628
DEBUG - 2022-08-01 15:12:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:12:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:12:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:12:25 --> Total execution time: 0.0505
DEBUG - 2022-08-01 15:12:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:12:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:12:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 20:12:27 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 20:12:27 --> Total execution time: 0.0528
DEBUG - 2022-08-01 15:12:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:12:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:12:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:12:27 --> Total execution time: 0.0709
DEBUG - 2022-08-01 15:12:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:12:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:12:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:12:27 --> Total execution time: 0.0520
DEBUG - 2022-08-01 15:14:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:14:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:14:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:14:28 --> Total execution time: 0.1265
DEBUG - 2022-08-01 15:14:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:14:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:14:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:14:28 --> Total execution time: 0.0764
DEBUG - 2022-08-01 15:14:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:14:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:14:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 15:14:34 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 385
DEBUG - 2022-08-01 15:14:34 --> Total execution time: 0.0522
DEBUG - 2022-08-01 15:14:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:14:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:14:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:14:34 --> Total execution time: 0.0606
DEBUG - 2022-08-01 15:14:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:14:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:14:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:14:47 --> Total execution time: 0.0759
DEBUG - 2022-08-01 15:14:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:14:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:14:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:14:47 --> Total execution time: 0.0754
DEBUG - 2022-08-01 15:14:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:14:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:14:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 15:14:52 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 385
DEBUG - 2022-08-01 15:14:52 --> Total execution time: 0.0505
DEBUG - 2022-08-01 15:14:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:14:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:14:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:14:52 --> Total execution time: 0.0572
DEBUG - 2022-08-01 15:14:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:14:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:14:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:14:55 --> Total execution time: 0.0749
DEBUG - 2022-08-01 15:14:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:14:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:14:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:14:55 --> Total execution time: 0.0789
DEBUG - 2022-08-01 15:15:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:15:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:15:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:15:01 --> Total execution time: 0.0861
DEBUG - 2022-08-01 15:15:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:15:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:15:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:15:01 --> Total execution time: 0.0706
DEBUG - 2022-08-01 15:15:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:15:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:15:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 15:15:04 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 385
DEBUG - 2022-08-01 15:15:04 --> Total execution time: 0.0453
DEBUG - 2022-08-01 15:15:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:15:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:15:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:15:04 --> Total execution time: 0.0483
DEBUG - 2022-08-01 15:15:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:15:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:15:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:15:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:15:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:15:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:15:08 --> Total execution time: 0.1146
DEBUG - 2022-08-01 15:15:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:15:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:15:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:15:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:15:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:15:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:15:08 --> Total execution time: 0.0992
DEBUG - 2022-08-01 15:15:08 --> Total execution time: 0.0789
DEBUG - 2022-08-01 15:15:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:15:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:15:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:15:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:15:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:15:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:15:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:15:22 --> Total execution time: 0.1018
DEBUG - 2022-08-01 15:15:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:15:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:15:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:15:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:15:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:15:22 --> Total execution time: 0.0492
DEBUG - 2022-08-01 15:15:22 --> Total execution time: 0.0685
DEBUG - 2022-08-01 15:15:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:15:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:15:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:15:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:15:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:15:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:15:26 --> Total execution time: 0.0870
DEBUG - 2022-08-01 15:15:26 --> Total execution time: 0.1208
DEBUG - 2022-08-01 15:15:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:15:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:15:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:15:27 --> Total execution time: 0.0941
DEBUG - 2022-08-01 15:16:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:16:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:16:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:16:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:16:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:16:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:16:13 --> Total execution time: 0.1243
DEBUG - 2022-08-01 15:16:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:16:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:16:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:16:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:16:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:16:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:16:14 --> Total execution time: 0.1239
DEBUG - 2022-08-01 15:16:14 --> Total execution time: 0.1221
DEBUG - 2022-08-01 15:16:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:16:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:16:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:16:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:16:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:16:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:16:40 --> Total execution time: 0.2248
DEBUG - 2022-08-01 15:16:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:16:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:16:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:16:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:16:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:16:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:16:40 --> Total execution time: 0.1782
DEBUG - 2022-08-01 15:16:40 --> Total execution time: 0.1366
DEBUG - 2022-08-01 15:17:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:17:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:17:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:17:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:17:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:17:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:17:02 --> Total execution time: 0.1376
DEBUG - 2022-08-01 15:17:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:17:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:17:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:17:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:17:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:17:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:17:03 --> Total execution time: 0.1367
DEBUG - 2022-08-01 15:17:03 --> Total execution time: 0.1317
DEBUG - 2022-08-01 15:17:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:17:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:17:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:17:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:17:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:17:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:17:14 --> Total execution time: 0.1408
DEBUG - 2022-08-01 15:17:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:17:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:17:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:17:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:17:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:17:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:17:14 --> Total execution time: 0.1485
DEBUG - 2022-08-01 15:17:14 --> Total execution time: 0.1557
DEBUG - 2022-08-01 15:17:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:17:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:17:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:17:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:17:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:17:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:17:56 --> Total execution time: 0.2391
DEBUG - 2022-08-01 15:17:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:17:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:17:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:17:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:17:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:17:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:17:57 --> Total execution time: 0.1463
DEBUG - 2022-08-01 15:17:57 --> Total execution time: 0.1862
DEBUG - 2022-08-01 15:18:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 20:18:04 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 20:18:04 --> Total execution time: 0.0516
DEBUG - 2022-08-01 15:18:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:18:04 --> Total execution time: 0.0820
DEBUG - 2022-08-01 15:18:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:18:04 --> Total execution time: 0.0683
DEBUG - 2022-08-01 15:18:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:18:04 --> Total execution time: 0.0690
DEBUG - 2022-08-01 15:18:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:18:06 --> Total execution time: 0.0620
DEBUG - 2022-08-01 15:18:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:18:06 --> Total execution time: 0.0577
DEBUG - 2022-08-01 15:18:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:18:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:18:17 --> Total execution time: 0.0995
DEBUG - 2022-08-01 15:18:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:18:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:18:17 --> Total execution time: 0.0637
DEBUG - 2022-08-01 15:18:17 --> Total execution time: 0.0554
DEBUG - 2022-08-01 15:18:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:18:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:18:18 --> Total execution time: 0.0893
DEBUG - 2022-08-01 15:18:18 --> Total execution time: 0.0943
DEBUG - 2022-08-01 15:18:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:18:18 --> Total execution time: 0.0558
DEBUG - 2022-08-01 15:18:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 20:18:33 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 20:18:33 --> Total execution time: 0.0551
DEBUG - 2022-08-01 15:18:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:18:33 --> Total execution time: 0.0507
DEBUG - 2022-08-01 15:18:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:18:33 --> Total execution time: 0.0717
DEBUG - 2022-08-01 15:18:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:18:33 --> Total execution time: 0.0703
DEBUG - 2022-08-01 15:18:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:18:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:18:37 --> Total execution time: 0.1011
DEBUG - 2022-08-01 15:18:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:18:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:18:37 --> Total execution time: 0.0758
DEBUG - 2022-08-01 15:18:37 --> Total execution time: 0.0644
DEBUG - 2022-08-01 15:18:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:18:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:18:38 --> Total execution time: 0.1069
DEBUG - 2022-08-01 15:18:38 --> Total execution time: 0.1186
DEBUG - 2022-08-01 15:18:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 15:18:38 --> Total execution time: 0.0856
DEBUG - 2022-08-01 15:18:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 20:18:44 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 20:18:44 --> Total execution time: 0.0550
DEBUG - 2022-08-01 15:18:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:18:44 --> Total execution time: 0.0893
DEBUG - 2022-08-01 15:18:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:18:44 --> Total execution time: 0.0669
DEBUG - 2022-08-01 15:18:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:18:45 --> Total execution time: 0.0572
DEBUG - 2022-08-01 15:18:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:18:46 --> Total execution time: 0.0832
DEBUG - 2022-08-01 15:18:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:18:46 --> Total execution time: 0.0703
DEBUG - 2022-08-01 15:18:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:18:47 --> Total execution time: 0.0725
DEBUG - 2022-08-01 15:18:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 15:18:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 15:18:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:18:47 --> Total execution time: 0.0613
DEBUG - 2022-08-01 16:58:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 21:58:38 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 21:58:38 --> Total execution time: 0.1601
DEBUG - 2022-08-01 16:58:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:58:38 --> Total execution time: 0.0661
DEBUG - 2022-08-01 16:58:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:58:39 --> Total execution time: 0.1009
DEBUG - 2022-08-01 16:58:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:58:39 --> Total execution time: 0.0700
DEBUG - 2022-08-01 16:58:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:58:40 --> Total execution time: 0.0653
DEBUG - 2022-08-01 16:58:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:58:40 --> Total execution time: 0.0694
DEBUG - 2022-08-01 16:58:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:58:40 --> Total execution time: 0.0724
DEBUG - 2022-08-01 16:58:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:58:40 --> Total execution time: 0.1491
DEBUG - 2022-08-01 16:58:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:58:40 --> Total execution time: 0.0849
DEBUG - 2022-08-01 16:58:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:58:40 --> Total execution time: 0.0921
DEBUG - 2022-08-01 16:58:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:58:41 --> Total execution time: 0.0955
DEBUG - 2022-08-01 16:58:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:58:41 --> Total execution time: 0.1022
DEBUG - 2022-08-01 16:58:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:58:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:58:41 --> Total execution time: 0.1153
DEBUG - 2022-08-01 16:58:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:58:41 --> Total execution time: 0.1589
DEBUG - 2022-08-01 16:58:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:58:41 --> Total execution time: 0.1357
DEBUG - 2022-08-01 16:58:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:58:41 --> Total execution time: 0.1373
DEBUG - 2022-08-01 16:58:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:58:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:58:42 --> Total execution time: 0.1730
DEBUG - 2022-08-01 16:58:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:58:42 --> Total execution time: 0.1947
DEBUG - 2022-08-01 16:58:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:58:42 --> Total execution time: 0.1503
DEBUG - 2022-08-01 16:58:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:58:42 --> Total execution time: 0.1715
DEBUG - 2022-08-01 16:58:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 16:58:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:58:42 --> Total execution time: 0.1585
DEBUG - 2022-08-01 21:58:42 --> Total execution time: 0.1262
DEBUG - 2022-08-01 16:58:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:58:42 --> Total execution time: 0.1582
DEBUG - 2022-08-01 16:58:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:58:43 --> Total execution time: 0.1211
DEBUG - 2022-08-01 16:58:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:58:43 --> Total execution time: 0.1270
DEBUG - 2022-08-01 16:58:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:58:43 --> Total execution time: 0.1695
DEBUG - 2022-08-01 16:58:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:58:43 --> Total execution time: 0.1283
DEBUG - 2022-08-01 16:58:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 21:58:46 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 21:58:46 --> Total execution time: 0.0626
DEBUG - 2022-08-01 16:58:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:58:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:58:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 21:58:46 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'qty'. - Invalid query: SELECT qty FROM cso1_promotionItem WHERE  id = 2009 
DEBUG - 2022-08-01 16:59:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:59:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:59:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:59:24 --> Total execution time: 0.1735
DEBUG - 2022-08-01 16:59:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:59:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:59:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:59:24 --> Total execution time: 0.1359
DEBUG - 2022-08-01 16:59:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:59:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:59:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 21:59:26 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 21:59:26 --> Total execution time: 0.0654
DEBUG - 2022-08-01 16:59:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:59:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:59:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:59:26 --> Total execution time: 0.0631
DEBUG - 2022-08-01 16:59:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:59:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:59:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:59:26 --> Total execution time: 0.0741
DEBUG - 2022-08-01 16:59:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:59:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:59:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:59:28 --> Total execution time: 0.0562
DEBUG - 2022-08-01 16:59:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:59:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:59:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:59:28 --> Total execution time: 0.0584
DEBUG - 2022-08-01 16:59:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:59:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:59:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:59:28 --> Total execution time: 0.0657
DEBUG - 2022-08-01 16:59:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:59:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:59:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 21:59:33 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 21:59:33 --> Total execution time: 0.0569
DEBUG - 2022-08-01 16:59:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:59:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:59:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:59:34 --> Total execution time: 0.0776
DEBUG - 2022-08-01 16:59:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:59:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:59:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:59:34 --> Total execution time: 0.0586
DEBUG - 2022-08-01 16:59:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:59:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:59:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:59:34 --> Total execution time: 0.0558
DEBUG - 2022-08-01 16:59:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:59:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:59:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 21:59:35 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Violation of PRIMARY KEY constraint 'PK_cso1_kioskCart2'. Cannot insert duplicate key in object 'dbo.cso1_kioskCart'. The duplicate key value is (1659365975). - Invalid query: INSERT INTO "cso1_kioskCart" ("id", "kioskUuid", "itemId", "originPrice", "discount", "price", "isFreeItem", "inputDate", "updateDate") VALUES (1659365975, '62e73c9fa604d', '0009542', 47650, 0, 0, 1, 1659365975, 1659365975)
DEBUG - 2022-08-01 16:59:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 16:59:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 16:59:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:59:38 --> Total execution time: 0.0512
DEBUG - 2022-08-01 18:14:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 18:14:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 18:14:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 23:14:04 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 23:14:04 --> Total execution time: 0.0751
DEBUG - 2022-08-01 18:14:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 18:14:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 18:14:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 23:14:04 --> Total execution time: 0.0944
DEBUG - 2022-08-01 18:14:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 18:14:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 18:14:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 23:14:04 --> Total execution time: 0.0644
DEBUG - 2022-08-01 18:14:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 18:14:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 18:14:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 23:14:05 --> Total execution time: 0.0560
DEBUG - 2022-08-01 18:24:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 18:24:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 18:24:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 23:24:12 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 23:24:12 --> Total execution time: 0.0620
DEBUG - 2022-08-01 18:24:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 18:24:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 18:24:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 23:24:12 --> Total execution time: 0.0985
DEBUG - 2022-08-01 18:24:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 18:24:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 18:24:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 23:24:12 --> Total execution time: 0.0634
DEBUG - 2022-08-01 18:24:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 18:24:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 18:24:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 23:24:12 --> Total execution time: 0.0503
DEBUG - 2022-08-01 18:24:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 18:24:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 18:24:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 23:24:30 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 23:24:30 --> Total execution time: 0.0569
DEBUG - 2022-08-01 18:24:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 18:24:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 18:24:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 23:24:30 --> Total execution time: 0.0753
DEBUG - 2022-08-01 18:24:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 18:24:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 18:24:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 23:24:30 --> Total execution time: 0.0581
DEBUG - 2022-08-01 18:24:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 18:24:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 18:24:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 23:24:30 --> Total execution time: 0.0448
DEBUG - 2022-08-01 18:25:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 18:25:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 18:25:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 23:25:07 --> Total execution time: 0.1220
DEBUG - 2022-08-01 18:25:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 18:25:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 18:25:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 23:25:07 --> Total execution time: 0.0800
DEBUG - 2022-08-01 18:25:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 18:25:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 18:25:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 23:25:09 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 23:25:09 --> Total execution time: 0.0574
DEBUG - 2022-08-01 18:25:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 18:25:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 18:25:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 23:25:09 --> Total execution time: 0.0790
DEBUG - 2022-08-01 18:25:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 18:25:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 18:25:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 23:25:09 --> Total execution time: 0.0571
DEBUG - 2022-08-01 18:25:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 18:25:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 18:25:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 23:25:14 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\KioskCart.php 126
DEBUG - 2022-08-01 23:25:14 --> Total execution time: 0.0604
DEBUG - 2022-08-01 18:25:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 18:25:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 18:25:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 23:25:15 --> Total execution time: 0.0895
DEBUG - 2022-08-01 18:25:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 18:25:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 18:25:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 23:25:15 --> Total execution time: 0.0787
DEBUG - 2022-08-01 18:25:15 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 18:25:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 18:25:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 23:25:15 --> Total execution time: 0.0675
DEBUG - 2022-08-01 19:27:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:27:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:27:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:27:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:27:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:27:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:27:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:27:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:27:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:27:04 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:27:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:27:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:27:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:27:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:27:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:27:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:27:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:27:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:27:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:27:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:27:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:27:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:27:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:27:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:35:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:35:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:35:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:35:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:35:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:35:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:35:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:35:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:35:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:35:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:35:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:35:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:35:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:35:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:35:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:35:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:35:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:35:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:36:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:36:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:36:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:36:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:36:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:36:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:36:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:36:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:36:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:36:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:36:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:36:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:36:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:36:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:36:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:36:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:36:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:36:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:36:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:36:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:36:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:36:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:36:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:36:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:36:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:36:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:36:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:36:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:36:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:36:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:36:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:36:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:36:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:36:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:36:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:36:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:36:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:36:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:36:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:36:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:36:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:36:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:36:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:36:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:36:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:37:18 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 323
DEBUG - 2022-08-01 19:37:18 --> Total execution time: 0.0589
DEBUG - 2022-08-01 19:37:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:18 --> Total execution time: 0.0675
DEBUG - 2022-08-01 19:37:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:19 --> Total execution time: 0.0609
DEBUG - 2022-08-01 19:37:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:22 --> Total execution time: 0.0663
DEBUG - 2022-08-01 19:37:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 19:37:25 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 323
DEBUG - 2022-08-01 19:37:25 --> Total execution time: 0.0582
DEBUG - 2022-08-01 19:37:25 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:25 --> Total execution time: 0.0579
DEBUG - 2022-08-01 19:37:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:31 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:37:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:37:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:37:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:38:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:38:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:38:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:38:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:38:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:38:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:38:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:38:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:38:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:38:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:38:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:38:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:38:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:38:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:38:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:38:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:38:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:38:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:39:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:39:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:39:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:39:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:39:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:39:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:39:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:39:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:39:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:39:09 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:39:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:39:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:39:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:39:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:39:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:39:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:39:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:39:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:39:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:39:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:39:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:39:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:39:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:39:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:39:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:39:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:39:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:39:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:39:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:39:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:39:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:39:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:39:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:39:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:39:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:39:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:39:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:39:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:39:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:39:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:39:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:39:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:39:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:39:20 --> Total execution time: 0.1157
DEBUG - 2022-08-01 19:39:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:39:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:39:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:39:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:39:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:39:20 --> Total execution time: 0.0841
DEBUG - 2022-08-01 19:39:20 --> Total execution time: 0.0614
DEBUG - 2022-08-01 19:40:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:40:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:40:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:40:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:40:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:40:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:40:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:40:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:40:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:40:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:40:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:40:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:40:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:40:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:40:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:40:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:40:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:40:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:40:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:40:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:40:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:41:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:41:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:41:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:41:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:41:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:41:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:41:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:41:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:41:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:41:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:41:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:41:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:41:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:41:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:41:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:41:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:41:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:41:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:44:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:44:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:44:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:44:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:44:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:44:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:44:24 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:44:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:44:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:45:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:45:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:45:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 19:45:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 19:45:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 19:45:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:46 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:48 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:27:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:27:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:27:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:29:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:29:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:29:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:29:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:29:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:29:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:29:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:29:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:29:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:29:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:29:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:29:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:29:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:29:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:29:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:29:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:29:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:29:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:29:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:29:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:29:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:29:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:29:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:29:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:29:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:29:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:29:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:29:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:29:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:29:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:29:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:29:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:29:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:29:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:29:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:29:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:29:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:29:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:29:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:29:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:29:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:29:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:22 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:56 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:33:58 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:33:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:33:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:26 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:27 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:28 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:30 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-08-01 20:34:43 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\application\cso\admin\api\application\controllers\Promotion.php 323
DEBUG - 2022-08-01 20:34:43 --> Total execution time: 0.0563
DEBUG - 2022-08-01 20:34:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:43 --> Total execution time: 0.0603
DEBUG - 2022-08-01 20:34:44 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:44 --> Total execution time: 0.0516
DEBUG - 2022-08-01 20:34:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:47 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:34:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:34:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:34:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:36:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:36:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:36:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:36:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:36:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:36:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:36:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:36:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:36:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:36:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:36:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:36:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:36:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:36:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:36:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:36:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:36:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:36:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:36:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:36:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:36:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:36:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:36:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:36:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:36:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:36:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:36:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:36:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:36:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:36:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:36:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:36:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:36:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:36:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:36:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:36:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:36:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:36:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:36:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:36:21 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:36:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:36:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:36:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:36:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:36:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:36:23 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:36:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:36:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:36:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:36:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:36:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:36:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:36:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:36:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:38:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:38:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:38:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:38:57 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:38:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:38:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:39:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:39:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:39:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:39:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:39:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:39:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:39:59 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:39:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:39:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:29 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:54 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:40:55 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:40:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:40:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:41:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:41:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:41:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:41:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:41:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:41:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:41:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:41:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:41:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:41:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:41:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:41:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:41:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:41:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:41:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:41:45 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:41:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:41:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:42:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:42:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:42:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:42:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:42:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:42:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:42:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:42:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:42:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:42:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:42:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:42:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:42:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:42:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:42:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:42:02 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:42:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:42:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:42:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:42:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:42:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:42:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:42:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:42:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:42:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:42:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:42:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:42:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:42:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:42:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:42:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:42:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:42:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:42:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:42:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:42:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:42:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:42:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:42:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:42:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:42:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:42:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:42:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:42:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:42:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:44:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:44:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:44:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:44:49 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:44:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:44:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:44:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:44:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:44:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:44:50 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:44:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:44:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:44:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:44:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:44:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:44:51 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:44:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:44:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:45:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:45:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:45:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:45:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:45:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:45:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:45:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:45:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:45:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:45:52 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:45:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:45:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:45:53 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:45:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:45:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:47:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:47:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:47:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:47:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:47:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:47:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:47:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:47:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:47:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:47:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:47:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:47:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:47:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:47:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:47:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:47:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:47:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:47:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:47:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:47:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:47:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:47:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:47:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:47:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:47:37 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:47:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:47:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:47:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:47:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:47:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:47:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:47:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:47:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 20:47:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 20:47:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 20:47:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:00 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:01 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:03 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:05 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:06 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:07 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:08 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:10 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:12 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:13 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:14 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:09:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:09:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:09:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:10:16 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:10:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:10:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:10:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:10:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:10:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:10:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:10:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:10:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:10:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:10:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:10:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:10:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:10:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:10:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:10:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:10:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:10:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:10:17 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:10:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:10:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:10:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:10:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:10:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:10:18 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:10:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:10:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:10:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:10:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:10:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:10:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:10:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:10:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:10:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:10:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:10:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:10:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:10:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:10:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:10:19 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:10:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:10:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:10:20 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:10:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:10:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:12:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:12:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:12:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:12:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:12:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:12:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:12:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:12:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:12:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:12:32 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:12:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:12:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:12:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:12:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:12:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:12:33 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:12:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:12:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:12:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:12:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:12:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:12:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:12:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:12:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:12:34 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:12:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:12:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:12:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:12:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:12:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:12:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:12:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:12:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:12:35 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:12:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:12:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:12:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:12:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:12:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:12:36 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:12:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:12:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:13:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:13:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:13:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:13:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:13:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:13:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:13:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:13:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:13:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:13:38 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:13:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:13:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:13:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:13:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:13:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:13:39 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:13:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:13:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:13:40 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:13:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:13:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:13:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:13:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:13:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:13:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:13:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:13:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:13:41 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:13:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:13:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:13:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:13:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:13:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:13:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:13:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:13:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:13:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:13:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:13:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:13:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:13:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:13:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:13:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:13:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:13:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:13:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:13:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:13:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:13:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:13:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:13:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:13:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:13:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:13:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:13:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:13:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:13:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:13:42 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:13:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:13:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:13:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:13:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:13:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:13:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:13:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:13:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:13:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:13:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:13:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:13:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:13:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:13:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:13:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:13:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:13:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:13:43 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:13:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:13:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:14:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:14:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:14:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2022-08-01 21:14:11 --> UTF-8 Support Enabled
DEBUG - 2022-08-01 21:14:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2022-08-01 21:14:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
