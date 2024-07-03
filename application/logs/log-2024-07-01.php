<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2024-07-01 16:57:45 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 16:57:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 16:57:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 16:57:45 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 16:57:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 16:57:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 16:57:45 --> Total execution time: 0.1058
DEBUG - 2024-07-01 16:57:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 16:57:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 16:57:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 16:57:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 16:57:49 --> Total execution time: 0.1548
DEBUG - 2024-07-01 16:57:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 16:57:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 16:57:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 16:57:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 16:57:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 16:57:49 --> Total execution time: 0.0704
DEBUG - 2024-07-01 16:57:49 --> Total execution time: 0.1822
DEBUG - 2024-07-01 16:57:54 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 16:57:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 16:57:54 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 16:57:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 16:57:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 16:57:54 --> Total execution time: 0.0954
DEBUG - 2024-07-01 16:57:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 16:57:54 --> Total execution time: 0.1023
DEBUG - 2024-07-01 16:58:09 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 16:58:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 16:58:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 16:58:09 --> Total execution time: 0.1187
DEBUG - 2024-07-01 16:58:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 16:58:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 16:58:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 16:58:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 16:58:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 16:58:10 --> Total execution time: 0.0957
DEBUG - 2024-07-01 16:58:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 16:58:10 --> Total execution time: 0.1510
DEBUG - 2024-07-01 16:58:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 16:58:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 16:58:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 16:58:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 16:58:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 16:58:12 --> Total execution time: 0.1883
DEBUG - 2024-07-01 16:58:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 16:58:12 --> Total execution time: 0.0884
DEBUG - 2024-07-01 16:58:18 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 16:58:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 16:58:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 16:58:19 --> Total execution time: 0.0863
DEBUG - 2024-07-01 17:03:23 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:03:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:03:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 17:03:23 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Conversion failed when converting the varchar value '2024-07-01' to data type int. - Invalid query: SELECT t.*, p.name as 'payment' , x.totalPrint
            from cso1_transaction as t
            left join cso1_paymentType as p on p.id = t.paymentTypeId
            left join (
                select count(transactionId) as 'totalPrint', transactionId from cso1_transactionPrintLog
                group by transactionId 
            ) as x on x.transactionId = t.id
            where t.presence = 1  and t.transactionDate  =  '2024-07-01' 
            order by t.transactionDate DESC
DEBUG - 2024-07-01 17:04:02 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:04:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:04:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 17:04:02 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Conversion failed when converting the varchar value '2024-07-01' to data type int. - Invalid query: SELECT t.*, p.name as 'payment' , x.totalPrint
            from cso1_transaction as t
            left join cso1_paymentType as p on p.id = t.paymentTypeId
            left join (
                select count(transactionId) as 'totalPrint', transactionId from cso1_transactionPrintLog
                group by transactionId 
            ) as x on x.transactionId = t.id
            where t.presence = 1  and t.transactionDate  =  '2024-07-01' 
            order by t.transactionDate DESC
DEBUG - 2024-07-01 17:04:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:04:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:04:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:04:09 --> Total execution time: 0.5610
DEBUG - 2024-07-01 17:04:43 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:04:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:04:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:04:43 --> Total execution time: 0.0552
DEBUG - 2024-07-01 17:06:44 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:06:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:06:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:06:44 --> Total execution time: 0.0526
DEBUG - 2024-07-01 17:06:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:06:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:06:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:06:49 --> Total execution time: 0.0560
DEBUG - 2024-07-01 17:06:57 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:06:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:06:57 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:06:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:06:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:06:58 --> Total execution time: 0.1859
DEBUG - 2024-07-01 17:06:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:06:58 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:06:58 --> Total execution time: 0.0947
DEBUG - 2024-07-01 17:06:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:06:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:06:58 --> Total execution time: 0.1660
DEBUG - 2024-07-01 17:07:05 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:07:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:07:05 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:07:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:07:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:07:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:07:05 --> Total execution time: 0.3324
DEBUG - 2024-07-01 17:07:05 --> Total execution time: 0.1831
DEBUG - 2024-07-01 17:07:05 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:07:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:07:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:07:05 --> Total execution time: 0.1447
DEBUG - 2024-07-01 17:15:35 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:15:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:15:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:15:35 --> Total execution time: 0.1865
DEBUG - 2024-07-01 17:15:35 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:15:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:15:35 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:15:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:15:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:15:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:15:35 --> Total execution time: 0.1016
DEBUG - 2024-07-01 17:15:35 --> Total execution time: 0.1264
DEBUG - 2024-07-01 17:15:43 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:15:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:15:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:15:43 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:15:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:15:43 --> Total execution time: 0.2272
DEBUG - 2024-07-01 17:15:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:15:43 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:15:43 --> Total execution time: 0.1707
DEBUG - 2024-07-01 17:15:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:15:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:15:43 --> Total execution time: 0.1229
DEBUG - 2024-07-01 17:15:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:15:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:15:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:15:49 --> Total execution time: 0.0581
DEBUG - 2024-07-01 17:19:17 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:19:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:19:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:19:17 --> Total execution time: 0.1479
DEBUG - 2024-07-01 17:19:17 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:19:17 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:19:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:19:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:19:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:19:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:19:17 --> Total execution time: 0.0974
DEBUG - 2024-07-01 17:19:18 --> Total execution time: 0.5526
DEBUG - 2024-07-01 17:19:53 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:19:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:19:53 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:19:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:19:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:19:53 --> Total execution time: 0.5370
DEBUG - 2024-07-01 17:19:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:19:53 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:19:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:19:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:19:54 --> Total execution time: 0.2984
DEBUG - 2024-07-01 17:19:54 --> Total execution time: 1.4130
DEBUG - 2024-07-01 17:20:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:20:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:20:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:20:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:20:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:20:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:20:11 --> Total execution time: 0.2096
DEBUG - 2024-07-01 17:20:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:20:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:20:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:20:11 --> Total execution time: 0.0890
DEBUG - 2024-07-01 17:20:12 --> Total execution time: 0.5936
DEBUG - 2024-07-01 17:20:15 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:20:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:20:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:20:15 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:20:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:20:15 --> Total execution time: 0.1693
DEBUG - 2024-07-01 17:20:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:20:15 --> Total execution time: 0.5519
DEBUG - 2024-07-01 17:20:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:20:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:20:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:20:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:20:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:20:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:20:21 --> Total execution time: 0.1942
DEBUG - 2024-07-01 17:20:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:20:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:20:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:20:21 --> Total execution time: 0.1093
DEBUG - 2024-07-01 17:20:21 --> Total execution time: 0.6126
DEBUG - 2024-07-01 17:20:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:20:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:20:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:20:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:20:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:20:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:20:33 --> Total execution time: 0.5894
DEBUG - 2024-07-01 17:20:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:20:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:20:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:20:33 --> Total execution time: 0.2664
DEBUG - 2024-07-01 17:20:34 --> Total execution time: 1.2072
DEBUG - 2024-07-01 17:20:40 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:20:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:20:40 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:20:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:20:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:20:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:20:41 --> Total execution time: 0.4771
DEBUG - 2024-07-01 17:20:41 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:20:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:20:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:20:41 --> Total execution time: 0.2707
DEBUG - 2024-07-01 17:20:42 --> Total execution time: 1.1483
DEBUG - 2024-07-01 17:20:55 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:20:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:20:55 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:20:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:20:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:20:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:20:55 --> Total execution time: 0.3996
DEBUG - 2024-07-01 17:20:55 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:20:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:20:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:20:56 --> Total execution time: 0.3570
DEBUG - 2024-07-01 17:20:56 --> Total execution time: 0.9511
DEBUG - 2024-07-01 17:21:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:21:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:21:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:21:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:21:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:21:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:21:04 --> Total execution time: 0.6566
DEBUG - 2024-07-01 17:21:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:21:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:21:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:21:04 --> Total execution time: 0.2125
DEBUG - 2024-07-01 17:21:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:21:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:21:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:21:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:21:06 --> Total execution time: 2.6053
DEBUG - 2024-07-01 17:21:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:21:06 --> Total execution time: 0.5586
DEBUG - 2024-07-01 17:21:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:21:07 --> Total execution time: 1.1294
DEBUG - 2024-07-01 17:21:14 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:21:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:21:14 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:21:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:21:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:21:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:21:15 --> Total execution time: 0.3489
DEBUG - 2024-07-01 17:21:15 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 17:21:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 17:21:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 17:21:15 --> Total execution time: 0.2291
DEBUG - 2024-07-01 17:21:15 --> Total execution time: 0.8372
DEBUG - 2024-07-01 20:16:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:21 --> No URI present. Default controller set.
DEBUG - 2024-07-01 20:16:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:21 --> Total execution time: 0.4297
DEBUG - 2024-07-01 20:16:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:21 --> No URI present. Default controller set.
DEBUG - 2024-07-01 20:16:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:21 --> Total execution time: 0.2047
DEBUG - 2024-07-01 20:16:23 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:23 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:16:23 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:16:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:23 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:23 --> Total execution time: 0.5332
DEBUG - 2024-07-01 20:16:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:24 --> Total execution time: 0.2276
DEBUG - 2024-07-01 20:16:25 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:25 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:16:25 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:16:25 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:25 --> Total execution time: 0.4131
DEBUG - 2024-07-01 20:16:25 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:26 --> Total execution time: 0.6650
DEBUG - 2024-07-01 20:16:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:26 --> Total execution time: 0.7800
DEBUG - 2024-07-01 20:16:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:16:27 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:16:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:27 --> Total execution time: 0.4639
DEBUG - 2024-07-01 20:16:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:27 --> Total execution time: 0.2503
DEBUG - 2024-07-01 20:16:28 --> Total execution time: 0.4857
DEBUG - 2024-07-01 20:16:32 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:16:32 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:16:32 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:33 --> Total execution time: 0.1658
DEBUG - 2024-07-01 20:16:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:16:33 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:16:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:16:33 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 20:16:33 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:16:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:33 --> Total execution time: 0.1492
DEBUG - 2024-07-01 20:16:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:33 --> Total execution time: 0.1983
DEBUG - 2024-07-01 20:16:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:33 --> Total execution time: 0.1578
DEBUG - 2024-07-01 20:16:35 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:16:35 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:16:35 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:35 --> Total execution time: 0.1572
DEBUG - 2024-07-01 20:16:36 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:36 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:16:36 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:16:36 --> Total execution time: 0.2549
DEBUG - 2024-07-01 20:16:36 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:36 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:36 --> Total execution time: 0.1642
DEBUG - 2024-07-01 20:16:37 --> Total execution time: 0.3901
DEBUG - 2024-07-01 20:16:44 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:16:44 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:16:44 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:44 --> Total execution time: 0.3931
DEBUG - 2024-07-01 20:16:44 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:16:45 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:16:45 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:45 --> Total execution time: 0.1836
DEBUG - 2024-07-01 20:16:47 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:16:47 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:16:47 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:47 --> Total execution time: 0.1729
DEBUG - 2024-07-01 20:16:47 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:48 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:48 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:16:48 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:16:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:48 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:48 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-07-01 20:16:48 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:16:48 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:16:48 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:16:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:48 --> Total execution time: 0.1765
DEBUG - 2024-07-01 20:16:48 --> Total execution time: 0.1442
DEBUG - 2024-07-01 20:16:48 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:48 --> Total execution time: 0.1450
DEBUG - 2024-07-01 20:16:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:16:49 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:16:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:49 --> Total execution time: 0.1262
DEBUG - 2024-07-01 20:16:50 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:50 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:16:50 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:16:50 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:50 --> Total execution time: 0.1753
DEBUG - 2024-07-01 20:16:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:50 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:50 --> Total execution time: 0.1777
DEBUG - 2024-07-01 20:16:50 --> Total execution time: 0.3896
DEBUG - 2024-07-01 20:16:53 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:16:54 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:16:54 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:54 --> Total execution time: 0.2928
DEBUG - 2024-07-01 20:16:54 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:16:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:16:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:16:54 --> Total execution time: 0.1558
DEBUG - 2024-07-01 20:17:09 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:17:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:17:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:17:09 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:17:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:17:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:17:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:17:10 --> Total execution time: 0.1410
DEBUG - 2024-07-01 20:17:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:17:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:17:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:17:10 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:17:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:17:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:17:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:17:10 --> Total execution time: 0.1534
DEBUG - 2024-07-01 20:17:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:17:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:17:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:17:11 --> Total execution time: 0.1664
DEBUG - 2024-07-01 20:17:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:17:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:17:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:17:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:17:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:17:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:17:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:17:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:17:12 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 20:17:12 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:17:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:17:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:17:12 --> UTF-8 Support Enabled
ERROR - 2024-07-01 20:17:12 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:17:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:17:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:17:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:17:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:17:12 --> Total execution time: 0.1774
DEBUG - 2024-07-01 20:17:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:17:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:17:12 --> Total execution time: 0.2603
DEBUG - 2024-07-01 20:17:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:17:12 --> Total execution time: 0.1577
DEBUG - 2024-07-01 20:17:43 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:17:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:17:43 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:17:43 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:17:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:17:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:17:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:17:44 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:17:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:17:44 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:17:44 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:17:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:17:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:17:44 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:17:44 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:17:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:17:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:17:44 --> Total execution time: 0.4704
DEBUG - 2024-07-01 20:17:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:17:44 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:17:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:17:44 --> Total execution time: 0.3511
DEBUG - 2024-07-01 20:17:45 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:17:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:17:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:17:45 --> Total execution time: 0.4618
DEBUG - 2024-07-01 20:17:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:17:45 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:17:45 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:17:45 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:17:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:17:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:17:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:17:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:17:45 --> Total execution time: 0.1990
DEBUG - 2024-07-01 20:17:45 --> Total execution time: 0.2737
DEBUG - 2024-07-01 20:17:45 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:17:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:17:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:17:45 --> Total execution time: 0.2337
DEBUG - 2024-07-01 20:17:46 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:17:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:17:46 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:17:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:17:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:17:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:17:47 --> Total execution time: 0.3961
DEBUG - 2024-07-01 20:17:47 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:17:47 --> Total execution time: 0.4412
DEBUG - 2024-07-01 20:17:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:17:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:17:47 --> Total execution time: 0.3825
DEBUG - 2024-07-01 20:18:03 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:18:04 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:18:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:18:04 --> Total execution time: 0.4286
DEBUG - 2024-07-01 20:18:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:18:04 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:18:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:18:05 --> Total execution time: 0.2944
DEBUG - 2024-07-01 20:18:09 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:18:09 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:18:09 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:18:10 --> Total execution time: 0.8150
DEBUG - 2024-07-01 20:18:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:18:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:18:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:18:13 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 20:18:13 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 20:18:13 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:18:13 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:13 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:18:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:18:13 --> Total execution time: 0.1543
DEBUG - 2024-07-01 20:18:13 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:13 --> Total execution time: 0.2032
DEBUG - 2024-07-01 20:18:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:18:13 --> Total execution time: 0.2095
DEBUG - 2024-07-01 20:18:16 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:18:16 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:18:16 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:18:16 --> Total execution time: 0.1866
DEBUG - 2024-07-01 20:18:16 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:18:16 --> Total execution time: 0.2769
DEBUG - 2024-07-01 20:18:18 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:18:18 --> Total execution time: 0.2170
DEBUG - 2024-07-01 20:18:18 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:18:18 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:18:19 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:18:19 --> Total execution time: 0.1323
DEBUG - 2024-07-01 20:18:43 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:43 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:43 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:18:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:18:43 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 20:18:43 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:18:43 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:18:43 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:18:43 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:18:43 --> Total execution time: 0.1960
DEBUG - 2024-07-01 20:18:43 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:18:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:18:43 --> Total execution time: 0.2432
DEBUG - 2024-07-01 20:18:43 --> Total execution time: 0.1525
DEBUG - 2024-07-01 20:18:45 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:45 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:18:45 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:18:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:18:45 --> Total execution time: 0.4383
DEBUG - 2024-07-01 20:18:45 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:45 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:18:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:18:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:18:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:18:46 --> Total execution time: 0.1356
DEBUG - 2024-07-01 20:18:46 --> Total execution time: 0.2195
DEBUG - 2024-07-01 20:19:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:19:04 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:19:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:19:04 --> Total execution time: 0.1315
DEBUG - 2024-07-01 20:19:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:19:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:19:04 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 20:19:04 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:19:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:19:04 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:19:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:19:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:19:04 --> Total execution time: 0.1537
DEBUG - 2024-07-01 20:19:04 --> Total execution time: 0.1806
DEBUG - 2024-07-01 20:19:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:19:05 --> Total execution time: 0.1459
DEBUG - 2024-07-01 20:19:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:19:06 --> Total execution time: 0.1658
DEBUG - 2024-07-01 20:19:07 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:07 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:19:07 --> Total execution time: 0.4087
DEBUG - 2024-07-01 20:19:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:19:07 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:07 --> Total execution time: 0.4751
DEBUG - 2024-07-01 20:19:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:19:08 --> Total execution time: 0.2204
DEBUG - 2024-07-01 20:19:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:19:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:19:30 --> Total execution time: 0.3583
ERROR - 2024-07-01 20:19:30 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:19:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:19:30 --> Total execution time: 0.1853
DEBUG - 2024-07-01 20:19:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:19:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:19:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:19:38 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 20:19:38 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 20:19:38 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:19:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:19:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:19:38 --> Total execution time: 0.1419
DEBUG - 2024-07-01 20:19:38 --> Total execution time: 0.1869
DEBUG - 2024-07-01 20:19:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:19:38 --> Total execution time: 0.1845
DEBUG - 2024-07-01 20:19:39 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:19:39 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:19:39 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:19:40 --> Total execution time: 0.1100
DEBUG - 2024-07-01 20:19:40 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:41 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:19:41 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:19:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:19:41 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:41 --> Total execution time: 0.4864
DEBUG - 2024-07-01 20:19:41 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:19:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:19:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:19:41 --> Total execution time: 0.1229
DEBUG - 2024-07-01 20:19:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:19:41 --> Total execution time: 0.3615
DEBUG - 2024-07-01 20:20:57 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:20:57 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:20:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:20:57 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:20:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:20:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:20:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:20:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:20:58 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 20:20:58 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:20:58 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:20:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:20:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:20:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:20:58 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:20:58 --> Total execution time: 0.1659
DEBUG - 2024-07-01 20:20:58 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:20:58 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:20:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:20:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:20:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:20:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:20:58 --> Total execution time: 0.4777
DEBUG - 2024-07-01 20:20:58 --> Total execution time: 0.5139
DEBUG - 2024-07-01 20:21:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:21:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:21:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:21:27 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:21:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:21:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:21:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:21:27 --> Total execution time: 0.1153
DEBUG - 2024-07-01 20:21:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:21:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:21:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:21:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:21:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:21:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:21:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:21:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:21:28 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 20:21:28 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:21:28 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:21:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:21:28 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-07-01 20:21:28 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:21:28 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:21:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:21:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:21:28 --> Total execution time: 0.1595
DEBUG - 2024-07-01 20:21:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:21:28 --> Total execution time: 0.1847
DEBUG - 2024-07-01 20:21:28 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:21:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:21:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:21:28 --> Total execution time: 0.1822
DEBUG - 2024-07-01 20:21:32 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:21:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:21:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:21:33 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:21:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:21:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:21:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:21:33 --> Total execution time: 0.2266
DEBUG - 2024-07-01 20:21:34 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:21:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:21:34 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:21:34 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:21:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:21:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:21:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:21:34 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:21:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:21:34 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:21:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:21:34 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:21:34 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:21:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:21:35 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:21:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:21:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:21:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:21:35 --> Total execution time: 0.3024
DEBUG - 2024-07-01 20:21:35 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:21:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:21:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:21:35 --> Total execution time: 0.7209
DEBUG - 2024-07-01 20:21:35 --> Total execution time: 0.5177
DEBUG - 2024-07-01 20:21:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:21:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:21:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:21:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:21:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:21:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:21:39 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:21:39 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:21:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:21:39 --> Total execution time: 0.7957
DEBUG - 2024-07-01 20:21:39 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:21:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:21:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:21:39 --> Total execution time: 0.7869
DEBUG - 2024-07-01 20:21:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:21:39 --> Total execution time: 0.5211
DEBUG - 2024-07-01 20:21:41 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:21:41 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:21:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:21:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:21:41 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:21:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:21:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:21:41 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:21:41 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:21:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:21:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:21:42 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:21:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:21:42 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:21:42 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:21:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:21:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:21:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:21:42 --> Total execution time: 0.2175
DEBUG - 2024-07-01 20:21:42 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:21:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:21:42 --> Total execution time: 0.5688
DEBUG - 2024-07-01 20:21:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:21:42 --> Total execution time: 0.2308
DEBUG - 2024-07-01 20:22:03 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:22:03 --> No URI present. Default controller set.
DEBUG - 2024-07-01 20:22:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:22:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:22:03 --> Total execution time: 0.2553
DEBUG - 2024-07-01 20:22:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:22:04 --> No URI present. Default controller set.
DEBUG - 2024-07-01 20:22:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:22:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:22:04 --> Total execution time: 0.1730
DEBUG - 2024-07-01 20:22:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:22:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:22:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:22:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:22:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:22:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:22:06 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:22:06 --> Total execution time: 0.1572
DEBUG - 2024-07-01 20:22:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:22:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:22:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:22:06 --> Total execution time: 0.1808
DEBUG - 2024-07-01 20:22:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:22:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:22:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:22:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:22:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:22:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:22:11 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:22:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:22:11 --> Total execution time: 0.1394
DEBUG - 2024-07-01 20:22:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:22:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:22:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:22:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:22:11 --> Total execution time: 0.1557
DEBUG - 2024-07-01 20:22:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:22:11 --> Total execution time: 0.2362
DEBUG - 2024-07-01 20:22:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:22:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:22:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:22:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:22:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:22:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:22:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:22:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:22:12 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 20:22:12 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:22:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:22:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:22:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:22:12 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:22:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:22:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:22:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:22:12 --> Total execution time: 0.1762
DEBUG - 2024-07-01 20:22:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:22:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:22:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:22:12 --> Total execution time: 0.1561
DEBUG - 2024-07-01 20:22:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:22:12 --> Total execution time: 0.2312
DEBUG - 2024-07-01 20:22:14 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:22:14 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:22:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:22:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:22:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:22:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:22:14 --> Total execution time: 0.1573
DEBUG - 2024-07-01 20:22:14 --> Total execution time: 0.1642
DEBUG - 2024-07-01 20:22:14 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:22:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:22:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:22:14 --> Total execution time: 0.1438
DEBUG - 2024-07-01 20:22:15 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:22:15 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:22:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:22:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:22:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:22:15 --> Total execution time: 0.1663
DEBUG - 2024-07-01 20:22:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:22:15 --> Total execution time: 0.2859
DEBUG - 2024-07-01 20:22:17 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:22:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:22:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:22:17 --> Total execution time: 0.1958
DEBUG - 2024-07-01 20:23:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:23:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:23:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:23:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:23:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:23:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:23:50 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:23:50 --> Total execution time: 0.3022
DEBUG - 2024-07-01 20:23:50 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:23:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:23:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:23:50 --> Total execution time: 0.1508
DEBUG - 2024-07-01 20:23:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:23:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:23:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:23:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:23:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:23:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:23:51 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:23:51 --> Total execution time: 0.1798
DEBUG - 2024-07-01 20:23:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:23:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:23:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:23:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:23:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:23:51 --> Total execution time: 0.1448
DEBUG - 2024-07-01 20:23:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:23:51 --> Total execution time: 0.1982
DEBUG - 2024-07-01 20:23:52 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:23:52 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:23:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:23:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:23:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:23:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:23:52 --> Total execution time: 0.1265
ERROR - 2024-07-01 20:23:52 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:23:52 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:23:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:23:52 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:23:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:23:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:23:52 --> Total execution time: 0.1563
DEBUG - 2024-07-01 20:23:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:23:52 --> Total execution time: 0.2156
DEBUG - 2024-07-01 20:24:59 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:24:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:24:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:24:59 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:24:59 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:24:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:24:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:24:59 --> Total execution time: 0.2021
DEBUG - 2024-07-01 20:24:59 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:24:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:24:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:24:59 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:24:59 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:24:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:25:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:25:00 --> Total execution time: 0.4013
DEBUG - 2024-07-01 20:25:09 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:25:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:25:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:25:09 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:25:09 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:25:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:25:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:25:09 --> Total execution time: 0.2230
DEBUG - 2024-07-01 20:25:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:25:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:25:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:25:10 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:25:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:25:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:25:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:25:10 --> Total execution time: 0.2009
DEBUG - 2024-07-01 20:25:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:25:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:25:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:25:24 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:25:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:25:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:25:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:25:24 --> Total execution time: 0.2440
DEBUG - 2024-07-01 20:25:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:25:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:25:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:25:25 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:25:25 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:25:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:25:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:25:25 --> Total execution time: 0.1720
DEBUG - 2024-07-01 20:25:31 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:25:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:25:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:25:31 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:25:31 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:25:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:25:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:25:31 --> Total execution time: 0.2537
DEBUG - 2024-07-01 20:25:31 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:25:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:25:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:25:31 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:25:31 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:25:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:25:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:25:32 --> Total execution time: 0.1770
DEBUG - 2024-07-01 20:25:42 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:25:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:25:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:25:42 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:25:42 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:25:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:25:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:25:43 --> Total execution time: 0.2802
DEBUG - 2024-07-01 20:25:43 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:25:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:25:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:25:43 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:25:43 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:25:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:25:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:25:43 --> Total execution time: 0.2280
DEBUG - 2024-07-01 20:25:48 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:25:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:25:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:25:48 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:25:48 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:25:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:25:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:25:48 --> Total execution time: 0.1868
DEBUG - 2024-07-01 20:25:48 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:25:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:25:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:25:48 --> Total execution time: 0.1999
DEBUG - 2024-07-01 20:26:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:26:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:26:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:26:27 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:26:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:26:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:26:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:26:27 --> Total execution time: 0.2236
DEBUG - 2024-07-01 20:26:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:26:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:26:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:26:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:26:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:26:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:26:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:26:27 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:26:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:26:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:26:27 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 20:26:27 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:26:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:26:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:26:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:26:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:26:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:26:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:26:27 --> Total execution time: 0.1691
DEBUG - 2024-07-01 20:26:28 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:26:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:26:28 --> Total execution time: 0.2963
DEBUG - 2024-07-01 20:26:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:26:28 --> Total execution time: 0.3745
DEBUG - 2024-07-01 20:26:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:26:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:26:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:26:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:26:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:26:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:26:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:26:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:26:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:26:30 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 20:26:30 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:26:30 --> Total execution time: 0.1448
DEBUG - 2024-07-01 20:26:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:26:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:26:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:26:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:26:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:26:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:26:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:26:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:26:30 --> Total execution time: 0.1433
DEBUG - 2024-07-01 20:26:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:26:30 --> Total execution time: 0.1801
DEBUG - 2024-07-01 20:26:30 --> Total execution time: 0.2657
DEBUG - 2024-07-01 20:37:25 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:37:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:37:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:37:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:37:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:37:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:37:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:37:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:37:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:37:27 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:37:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:37:27 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:37:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:37:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:37:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:37:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:37:27 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-07-01 20:37:27 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:37:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:37:27 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:37:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:37:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:37:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:37:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:37:27 --> Total execution time: 0.4055
DEBUG - 2024-07-01 20:37:27 --> Total execution time: 0.3410
DEBUG - 2024-07-01 20:37:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:37:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:37:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:37:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:37:28 --> Total execution time: 0.1126
DEBUG - 2024-07-01 20:37:28 --> Total execution time: 0.4417
DEBUG - 2024-07-01 20:37:37 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:37:37 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:37:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:37:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:37:37 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:37:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:37:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:37:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:37:37 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 20:37:37 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:37:37 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:37:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:37:37 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:37:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:37:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:37:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:37:37 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:37:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:37:37 --> Total execution time: 0.1515
DEBUG - 2024-07-01 20:37:37 --> Total execution time: 0.1960
DEBUG - 2024-07-01 20:37:37 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:37:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:37:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:37:37 --> Total execution time: 0.1372
DEBUG - 2024-07-01 20:38:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:38:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:38:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:38:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:38:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:38:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:38:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:38:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:38:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:38:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:38:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:38:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:38:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:38:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:38:26 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 20:38:26 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:38:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:38:26 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:38:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:38:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:38:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-07-01 20:38:26 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:38:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:38:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:38:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-07-01 20:38:26 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:38:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:38:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:38:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:38:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:38:27 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:38:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:38:27 --> Total execution time: 0.2255
DEBUG - 2024-07-01 20:38:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:38:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:38:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:38:27 --> Total execution time: 0.2705
DEBUG - 2024-07-01 20:38:27 --> Total execution time: 0.2846
DEBUG - 2024-07-01 20:38:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:38:27 --> Total execution time: 0.2902
DEBUG - 2024-07-01 20:38:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:38:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:38:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:38:27 --> Total execution time: 0.5619
DEBUG - 2024-07-01 20:38:28 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:38:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:38:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:38:28 --> Total execution time: 0.2460
DEBUG - 2024-07-01 20:38:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:38:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:38:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:38:29 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:38:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:38:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:38:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:38:29 --> Total execution time: 0.1311
DEBUG - 2024-07-01 20:38:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:38:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:38:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:38:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:38:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:38:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:38:29 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:38:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:38:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:38:29 --> Total execution time: 0.2583
DEBUG - 2024-07-01 20:38:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:38:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:38:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:38:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:38:30 --> Total execution time: 0.7408
DEBUG - 2024-07-01 20:38:30 --> Total execution time: 0.6829
DEBUG - 2024-07-01 20:38:31 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:38:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:38:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:38:31 --> Total execution time: 0.1344
DEBUG - 2024-07-01 20:38:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:38:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:38:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:38:33 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:38:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:38:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:38:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:38:33 --> Total execution time: 0.2283
DEBUG - 2024-07-01 20:55:28 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:55:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:55:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:55:29 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:55:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:55:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:55:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:55:29 --> Total execution time: 0.1768
DEBUG - 2024-07-01 20:58:35 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:58:35 --> No URI present. Default controller set.
DEBUG - 2024-07-01 20:58:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:58:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:58:35 --> Total execution time: 0.1518
DEBUG - 2024-07-01 20:58:35 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:58:35 --> No URI present. Default controller set.
DEBUG - 2024-07-01 20:58:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:58:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:58:35 --> Total execution time: 0.1123
DEBUG - 2024-07-01 20:58:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:58:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:58:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:58:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:58:38 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-07-01 20:58:38 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:58:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:58:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:58:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:58:38 --> Total execution time: 0.2341
DEBUG - 2024-07-01 20:58:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:58:38 --> Total execution time: 0.1749
DEBUG - 2024-07-01 20:58:41 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:58:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:58:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:58:41 --> Total execution time: 0.1597
DEBUG - 2024-07-01 20:58:43 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:58:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:58:43 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:58:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:58:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:58:43 --> Total execution time: 0.1565
DEBUG - 2024-07-01 20:58:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:58:43 --> Total execution time: 0.2526
DEBUG - 2024-07-01 20:58:50 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:58:50 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:58:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:58:50 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:58:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:58:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:58:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:58:50 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:58:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:58:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:58:50 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 20:58:50 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:58:50 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:58:50 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:58:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:58:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:58:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:58:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:58:51 --> Total execution time: 0.1347
DEBUG - 2024-07-01 20:58:51 --> Total execution time: 0.1695
DEBUG - 2024-07-01 20:58:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:58:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:58:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:58:51 --> Total execution time: 0.1271
DEBUG - 2024-07-01 20:58:58 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:58:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:58:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:58:58 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:58:58 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:58:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:58:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:58:58 --> Total execution time: 0.1063
DEBUG - 2024-07-01 20:58:59 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:58:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:58:59 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:58:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:58:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:58:59 --> UTF-8 Support Enabled
ERROR - 2024-07-01 20:58:59 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:58:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:58:59 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:58:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:58:59 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:58:59 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:58:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:58:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:58:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:59:00 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:59:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:59:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:59:00 --> Total execution time: 0.2279
DEBUG - 2024-07-01 20:59:00 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:59:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:59:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:59:00 --> Total execution time: 0.1391
DEBUG - 2024-07-01 20:59:00 --> Total execution time: 0.5368
DEBUG - 2024-07-01 20:59:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:59:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:59:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:59:01 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:59:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:59:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:59:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:59:01 --> Total execution time: 0.2324
DEBUG - 2024-07-01 20:59:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:59:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:59:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:59:02 --> Total execution time: 0.3024
DEBUG - 2024-07-01 20:59:03 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:59:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:59:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:59:03 --> Total execution time: 0.2364
DEBUG - 2024-07-01 20:59:03 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:59:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:59:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:59:03 --> Total execution time: 0.1462
DEBUG - 2024-07-01 20:59:05 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:59:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:59:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:59:05 --> Total execution time: 0.3636
DEBUG - 2024-07-01 20:59:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:59:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:59:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:59:06 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:59:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:59:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:59:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:59:06 --> Total execution time: 0.1192
DEBUG - 2024-07-01 20:59:07 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:59:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:59:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 20:59:07 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 20:59:07 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:59:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:59:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:59:07 --> Total execution time: 0.2772
DEBUG - 2024-07-01 20:59:07 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 20:59:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 20:59:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 20:59:08 --> Total execution time: 0.1265
DEBUG - 2024-07-01 21:00:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:26 --> No URI present. Default controller set.
DEBUG - 2024-07-01 21:00:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:26 --> Total execution time: 0.1810
DEBUG - 2024-07-01 21:00:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:26 --> No URI present. Default controller set.
DEBUG - 2024-07-01 21:00:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:27 --> Total execution time: 0.1522
DEBUG - 2024-07-01 21:00:28 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:28 --> No URI present. Default controller set.
DEBUG - 2024-07-01 21:00:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:28 --> Total execution time: 0.1446
DEBUG - 2024-07-01 21:00:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:00:29 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:00:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:29 --> Total execution time: 0.1228
DEBUG - 2024-07-01 21:00:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:29 --> Total execution time: 0.2225
DEBUG - 2024-07-01 21:00:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:00:33 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:00:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:33 --> Total execution time: 0.1565
DEBUG - 2024-07-01 21:00:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:34 --> Total execution time: 0.2254
DEBUG - 2024-07-01 21:00:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:34 --> Total execution time: 0.2150
DEBUG - 2024-07-01 21:00:35 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:00:35 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:00:35 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:35 --> Total execution time: 0.2197
DEBUG - 2024-07-01 21:00:36 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:36 --> Total execution time: 0.1223
DEBUG - 2024-07-01 21:00:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:38 --> Total execution time: 0.1239
DEBUG - 2024-07-01 21:00:41 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:41 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:41 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:00:41 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 21:00:41 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:00:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:00:41 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:00:41 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:41 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:42 --> Total execution time: 0.2900
DEBUG - 2024-07-01 21:00:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:42 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:42 --> Total execution time: 0.4304
DEBUG - 2024-07-01 21:00:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:42 --> Total execution time: 0.1313
DEBUG - 2024-07-01 21:00:43 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:00:43 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:00:43 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:43 --> Total execution time: 0.2443
DEBUG - 2024-07-01 21:00:44 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:44 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:44 --> Total execution time: 0.2370
DEBUG - 2024-07-01 21:00:44 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:00:44 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:00:45 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:45 --> Total execution time: 0.2323
DEBUG - 2024-07-01 21:00:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:45 --> Total execution time: 0.3334
DEBUG - 2024-07-01 21:00:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:00:50 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:00:50 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:50 --> Total execution time: 0.2488
DEBUG - 2024-07-01 21:00:50 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:50 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:50 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:50 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:00:51 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 21:00:51 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 21:00:51 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:00:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:00:51 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:00:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:51 --> Total execution time: 0.1751
DEBUG - 2024-07-01 21:00:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:51 --> Total execution time: 0.2255
DEBUG - 2024-07-01 21:00:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:00:51 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:00:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:51 --> Total execution time: 0.4305
DEBUG - 2024-07-01 21:00:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:51 --> Total execution time: 0.4147
DEBUG - 2024-07-01 21:00:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:52 --> Total execution time: 0.3178
DEBUG - 2024-07-01 21:00:52 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:00:52 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:00:52 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:52 --> Total execution time: 0.2070
DEBUG - 2024-07-01 21:00:54 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:54 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:54 --> Total execution time: 0.4265
DEBUG - 2024-07-01 21:00:54 --> Total execution time: 0.4894
DEBUG - 2024-07-01 21:00:54 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:54 --> Total execution time: 0.2356
DEBUG - 2024-07-01 21:00:55 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:00:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:00:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:00:55 --> Total execution time: 0.2269
DEBUG - 2024-07-01 21:01:02 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:01:02 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:01:02 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:01:02 --> Total execution time: 0.1910
DEBUG - 2024-07-01 21:01:02 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:01:02 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:01:02 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:01:02 --> Total execution time: 0.1798
DEBUG - 2024-07-01 21:01:25 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:01:25 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:01:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:01:26 --> Total execution time: 0.1759
DEBUG - 2024-07-01 21:01:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:01:26 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:01:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:01:26 --> Total execution time: 0.1298
DEBUG - 2024-07-01 21:01:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:01:27 --> Total execution time: 0.1586
DEBUG - 2024-07-01 21:01:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:01:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:01:27 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:01:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:27 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-07-01 21:01:27 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:01:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:01:27 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:01:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:01:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:27 --> Total execution time: 0.1759
DEBUG - 2024-07-01 21:01:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:01:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:28 --> Total execution time: 0.2076
DEBUG - 2024-07-01 21:01:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:01:28 --> Total execution time: 0.1735
DEBUG - 2024-07-01 21:01:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:01:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:01:29 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 21:01:29 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:01:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:01:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:29 --> Total execution time: 0.3071
DEBUG - 2024-07-01 21:01:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:01:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:01:29 --> Total execution time: 0.1943
DEBUG - 2024-07-01 21:01:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:01:30 --> Total execution time: 0.2664
DEBUG - 2024-07-01 21:01:30 --> Total execution time: 0.1443
DEBUG - 2024-07-01 21:01:41 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:41 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:01:41 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:01:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:01:41 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:41 --> Total execution time: 0.4756
DEBUG - 2024-07-01 21:01:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:01:41 --> Total execution time: 0.2067
DEBUG - 2024-07-01 21:01:42 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:42 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:01:42 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:01:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:01:42 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:42 --> Total execution time: 0.3030
DEBUG - 2024-07-01 21:01:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:01:42 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:43 --> Total execution time: 0.2540
DEBUG - 2024-07-01 21:01:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:01:43 --> Total execution time: 0.1730
DEBUG - 2024-07-01 21:01:43 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:43 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:01:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:01:43 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:01:43 --> Total execution time: 0.1740
DEBUG - 2024-07-01 21:01:43 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:43 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:01:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:01:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:01:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:01:44 --> Total execution time: 0.2362
DEBUG - 2024-07-01 21:01:44 --> Total execution time: 0.2076
DEBUG - 2024-07-01 21:05:07 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:05:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:05:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:05:07 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:05:07 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:05:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:05:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:05:08 --> Total execution time: 0.2812
DEBUG - 2024-07-01 21:05:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:05:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:05:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:05:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:05:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:05:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:05:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:05:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:05:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:05:08 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 21:05:08 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 21:05:08 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:05:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:05:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:05:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:05:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:05:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:05:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:05:08 --> Total execution time: 0.1831
DEBUG - 2024-07-01 21:05:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:05:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:05:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:05:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:05:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:05:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:05:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:05:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:05:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:05:08 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:05:08 --> Total execution time: 0.2901
ERROR - 2024-07-01 21:05:08 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:05:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:05:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:05:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:05:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:05:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:05:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:05:09 --> Total execution time: 0.6907
DEBUG - 2024-07-01 21:05:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:05:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:05:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:05:09 --> Total execution time: 0.2107
DEBUG - 2024-07-01 21:05:09 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:05:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:05:09 --> Total execution time: 0.3037
DEBUG - 2024-07-01 21:05:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:05:09 --> Total execution time: 0.3728
DEBUG - 2024-07-01 21:05:09 --> Total execution time: 0.1699
DEBUG - 2024-07-01 21:13:50 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:13:50 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:13:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:13:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:13:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:13:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:13:50 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:13:50 --> UTF-8 Support Enabled
ERROR - 2024-07-01 21:13:50 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:13:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:13:50 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:13:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:13:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:13:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:13:51 --> Total execution time: 0.1524
DEBUG - 2024-07-01 21:13:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:13:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:13:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:13:51 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:13:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:13:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:13:51 --> Total execution time: 0.4863
DEBUG - 2024-07-01 21:13:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:13:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:13:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:13:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:13:51 --> Total execution time: 0.1523
DEBUG - 2024-07-01 21:13:51 --> Total execution time: 0.2518
DEBUG - 2024-07-01 21:15:28 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:15:28 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:15:28 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:15:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:15:28 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:15:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:15:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:15:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:15:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:15:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:15:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:15:28 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 21:15:28 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 21:15:28 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:15:28 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:15:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:15:28 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:15:28 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:15:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:15:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:15:28 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:15:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:15:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:15:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:15:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:15:29 --> Total execution time: 0.5554
DEBUG - 2024-07-01 21:15:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:15:29 --> Total execution time: 0.4761
DEBUG - 2024-07-01 21:15:29 --> Total execution time: 0.6316
DEBUG - 2024-07-01 21:15:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:15:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:15:29 --> Total execution time: 0.1199
DEBUG - 2024-07-01 21:17:25 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:17:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:17:25 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:17:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:17:25 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:17:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:17:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:17:25 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:17:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:17:25 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:17:25 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-07-01 21:17:25 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:17:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:17:25 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:17:25 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:17:25 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:17:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:17:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:17:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:17:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:17:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:17:25 --> Total execution time: 0.2352
DEBUG - 2024-07-01 21:17:25 --> Total execution time: 0.1384
DEBUG - 2024-07-01 21:17:25 --> Total execution time: 0.1636
DEBUG - 2024-07-01 21:17:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:17:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:17:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:17:26 --> Total execution time: 0.1228
DEBUG - 2024-07-01 21:18:28 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:18:28 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:18:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:18:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:18:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:18:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:18:28 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:18:28 --> Total execution time: 0.2116
DEBUG - 2024-07-01 21:18:28 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:18:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:18:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:18:28 --> Total execution time: 0.1610
DEBUG - 2024-07-01 21:18:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:18:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:18:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:18:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:18:29 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-07-01 21:18:29 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:18:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:18:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:18:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:18:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:18:29 --> Total execution time: 0.2293
DEBUG - 2024-07-01 21:18:29 --> Total execution time: 0.2003
DEBUG - 2024-07-01 21:18:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:18:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:18:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:18:30 --> Total execution time: 0.2052
DEBUG - 2024-07-01 21:18:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:18:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:18:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:18:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:18:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:18:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:18:30 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:18:30 --> Total execution time: 0.1328
DEBUG - 2024-07-01 21:18:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:18:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:18:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:18:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:18:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:18:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:18:31 --> Total execution time: 0.1837
DEBUG - 2024-07-01 21:18:31 --> Total execution time: 0.2302
DEBUG - 2024-07-01 21:48:23 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:48:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:48:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:48:23 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:48:23 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:48:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:48:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:48:24 --> Total execution time: 0.3521
DEBUG - 2024-07-01 21:48:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:48:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:48:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:48:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:48:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:48:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:48:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:48:24 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:48:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:48:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:48:24 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 21:48:24 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:48:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:48:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:48:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:48:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:48:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:48:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:48:24 --> Total execution time: 0.2490
DEBUG - 2024-07-01 21:48:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:48:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:48:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:48:24 --> Total execution time: 0.1916
DEBUG - 2024-07-01 21:48:25 --> Total execution time: 0.4978
DEBUG - 2024-07-01 21:48:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:48:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:48:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:48:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:48:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:48:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:48:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:48:49 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:48:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:48:49 --> UTF-8 Support Enabled
ERROR - 2024-07-01 21:48:49 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:48:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:48:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 21:48:49 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 21:48:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:48:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:48:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:48:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:48:50 --> Total execution time: 0.2696
DEBUG - 2024-07-01 21:48:50 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 21:48:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 21:48:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 21:48:50 --> Total execution time: 0.1435
DEBUG - 2024-07-01 21:48:50 --> Total execution time: 0.6201
DEBUG - 2024-07-01 22:57:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 22:57:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 22:57:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 22:57:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 22:57:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 22:57:31 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 22:57:31 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 22:57:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 22:57:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 22:57:31 --> Total execution time: 0.3657
DEBUG - 2024-07-01 22:57:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 22:57:31 --> Total execution time: 0.2533
DEBUG - 2024-07-01 22:57:32 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 22:57:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 22:57:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 22:57:32 --> Total execution time: 0.1433
DEBUG - 2024-07-01 23:07:57 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:07:57 --> No URI present. Default controller set.
DEBUG - 2024-07-01 23:07:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:07:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:07:58 --> Total execution time: 0.1966
DEBUG - 2024-07-01 23:07:58 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:07:58 --> No URI present. Default controller set.
DEBUG - 2024-07-01 23:07:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:07:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:07:58 --> Total execution time: 0.1079
DEBUG - 2024-07-01 23:08:35 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:08:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:08:35 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:08:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:08:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:08:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:08:35 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:08:35 --> Total execution time: 0.2870
DEBUG - 2024-07-01 23:08:35 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:08:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:08:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:08:35 --> Total execution time: 0.1490
DEBUG - 2024-07-01 23:08:41 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:08:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:08:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:08:41 --> Total execution time: 0.3022
DEBUG - 2024-07-01 23:13:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:13:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:13:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:13:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:13:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:13:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:13:01 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:13:01 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:13:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:13:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:13:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:13:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:13:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:13:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:13:01 --> Total execution time: 0.2268
DEBUG - 2024-07-01 23:13:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:13:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:13:01 --> Total execution time: 0.3328
DEBUG - 2024-07-01 23:13:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:13:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:13:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:13:01 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:13:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:13:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:13:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:13:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:13:02 --> Total execution time: 0.6336
DEBUG - 2024-07-01 23:13:02 --> Total execution time: 0.6249
DEBUG - 2024-07-01 23:13:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:13:08 --> No URI present. Default controller set.
DEBUG - 2024-07-01 23:13:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:13:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:13:08 --> Total execution time: 0.3183
DEBUG - 2024-07-01 23:13:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:13:08 --> No URI present. Default controller set.
DEBUG - 2024-07-01 23:13:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:13:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:13:08 --> Total execution time: 0.2143
DEBUG - 2024-07-01 23:13:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:13:27 --> No URI present. Default controller set.
DEBUG - 2024-07-01 23:13:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:13:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:13:30 --> Total execution time: 2.1028
DEBUG - 2024-07-01 23:13:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:13:30 --> No URI present. Default controller set.
DEBUG - 2024-07-01 23:13:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:13:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:13:30 --> Total execution time: 0.4149
DEBUG - 2024-07-01 23:13:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:13:38 --> No URI present. Default controller set.
DEBUG - 2024-07-01 23:13:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:13:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:13:39 --> Total execution time: 0.1707
DEBUG - 2024-07-01 23:13:39 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:13:39 --> No URI present. Default controller set.
DEBUG - 2024-07-01 23:13:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:13:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:13:39 --> Total execution time: 0.1080
DEBUG - 2024-07-01 23:14:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:14:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:14:08 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:14:08 --> Total execution time: 0.3105
DEBUG - 2024-07-01 23:14:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:14:08 --> Total execution time: 0.1787
DEBUG - 2024-07-01 23:14:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:14:10 --> Total execution time: 0.1420
DEBUG - 2024-07-01 23:14:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:14:10 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:14:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:14:10 --> Total execution time: 0.1972
DEBUG - 2024-07-01 23:14:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:14:10 --> Total execution time: 0.1918
DEBUG - 2024-07-01 23:14:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:14:12 --> Total execution time: 0.1378
DEBUG - 2024-07-01 23:14:13 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:13 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:14:13 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:14:13 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:14:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:14 --> Total execution time: 0.2734
DEBUG - 2024-07-01 23:14:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:14:14 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:14 --> Total execution time: 0.1843
DEBUG - 2024-07-01 23:14:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:14:14 --> Total execution time: 0.1511
DEBUG - 2024-07-01 23:14:17 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:14:17 --> Total execution time: 0.1462
DEBUG - 2024-07-01 23:14:17 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:17 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:14:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:14:18 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:14:18 --> Total execution time: 0.1521
DEBUG - 2024-07-01 23:14:18 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:18 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:14:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:14:18 --> Total execution time: 0.1135
DEBUG - 2024-07-01 23:14:18 --> Total execution time: 0.1664
DEBUG - 2024-07-01 23:14:19 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:14:19 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:14:19 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:14:19 --> Total execution time: 0.1465
DEBUG - 2024-07-01 23:14:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:14:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:14:21 --> Total execution time: 0.1562
DEBUG - 2024-07-01 23:14:21 --> Total execution time: 0.1472
DEBUG - 2024-07-01 23:14:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:14:21 --> Total execution time: 0.1612
DEBUG - 2024-07-01 23:14:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:14:22 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:14:23 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:14:23 --> Total execution time: 0.1686
DEBUG - 2024-07-01 23:14:23 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:14:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:14:24 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:14:24 --> Total execution time: 0.4591
DEBUG - 2024-07-01 23:14:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:14:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:14:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:14:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:14:24 --> Total execution time: 0.1286
DEBUG - 2024-07-01 23:14:24 --> Total execution time: 0.3212
DEBUG - 2024-07-01 23:15:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:15:24 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:15:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:15:24 --> Total execution time: 0.1336
DEBUG - 2024-07-01 23:15:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:15:24 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:15:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:15:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:15:24 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:15:24 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:15:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:25 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:15:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:15:25 --> Total execution time: 0.2068
DEBUG - 2024-07-01 23:15:25 --> Total execution time: 0.1617
DEBUG - 2024-07-01 23:15:25 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:15:25 --> Total execution time: 0.1478
DEBUG - 2024-07-01 23:15:25 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:15:26 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:15:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:15:26 --> Total execution time: 0.1286
DEBUG - 2024-07-01 23:15:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:15:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:15:28 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:15:28 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:28 --> Total execution time: 0.7598
DEBUG - 2024-07-01 23:15:28 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:15:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:15:28 --> Total execution time: 0.1098
DEBUG - 2024-07-01 23:15:28 --> Total execution time: 0.3204
DEBUG - 2024-07-01 23:15:31 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:15:31 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:15:31 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:15:31 --> Total execution time: 0.2230
DEBUG - 2024-07-01 23:15:31 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:15:31 --> Total execution time: 0.1526
DEBUG - 2024-07-01 23:15:32 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:15:32 --> Total execution time: 0.2144
DEBUG - 2024-07-01 23:15:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:15:33 --> Total execution time: 0.2097
DEBUG - 2024-07-01 23:15:34 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:15:34 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:15:34 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:15:34 --> Total execution time: 0.2676
DEBUG - 2024-07-01 23:15:34 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:15:35 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:15:35 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:15:35 --> Total execution time: 0.1386
DEBUG - 2024-07-01 23:15:35 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:15:35 --> Total execution time: 0.2275
DEBUG - 2024-07-01 23:15:35 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:35 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:35 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:15:35 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:15:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:15:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:15:36 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:15:36 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:36 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-07-01 23:15:36 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:15:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:15:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:15:36 --> Total execution time: 0.2064
DEBUG - 2024-07-01 23:15:36 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:36 --> Total execution time: 0.2639
DEBUG - 2024-07-01 23:15:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:15:36 --> Total execution time: 0.1934
DEBUG - 2024-07-01 23:15:37 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:37 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:37 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:15:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:15:37 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:15:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:15:37 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:15:37 --> Total execution time: 0.1990
DEBUG - 2024-07-01 23:15:37 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:37 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:37 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:15:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:15:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:15:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:15:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:15:37 --> Total execution time: 0.1519
DEBUG - 2024-07-01 23:15:37 --> Total execution time: 0.1744
DEBUG - 2024-07-01 23:15:37 --> Total execution time: 0.2223
DEBUG - 2024-07-01 23:16:00 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:16:00 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:16:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:16:00 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:16:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:16:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:16:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:16:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:16:00 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:16:00 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:16:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:16:00 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:16:00 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:16:00 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:16:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:16:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:16:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:16:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:16:00 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:16:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:16:00 --> Total execution time: 0.4770
DEBUG - 2024-07-01 23:16:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:16:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:16:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:16:01 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:16:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:16:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:16:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:16:01 --> Total execution time: 0.3415
DEBUG - 2024-07-01 23:16:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:16:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:16:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:16:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:16:01 --> Total execution time: 0.2204
DEBUG - 2024-07-01 23:16:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:16:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:16:01 --> Total execution time: 1.2848
DEBUG - 2024-07-01 23:16:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:16:01 --> Total execution time: 0.2030
DEBUG - 2024-07-01 23:16:01 --> Total execution time: 0.5819
DEBUG - 2024-07-01 23:18:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:18:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:18:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:18:20 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:18:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:18:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:18:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:18:21 --> Total execution time: 0.1642
DEBUG - 2024-07-01 23:18:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:18:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:18:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:18:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:18:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:18:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:18:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:18:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:18:21 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:18:21 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:18:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:18:21 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:18:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:18:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:18:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:18:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:18:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:18:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:18:22 --> Total execution time: 0.1586
DEBUG - 2024-07-01 23:18:22 --> Total execution time: 0.2098
DEBUG - 2024-07-01 23:18:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:18:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:18:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:18:22 --> Total execution time: 0.2544
DEBUG - 2024-07-01 23:18:58 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:18:58 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:18:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:18:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:18:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:18:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:18:58 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:18:58 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:18:58 --> Total execution time: 0.2731
DEBUG - 2024-07-01 23:18:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:18:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:18:58 --> Total execution time: 0.2133
DEBUG - 2024-07-01 23:18:59 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:18:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:18:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:18:59 --> Total execution time: 0.1709
DEBUG - 2024-07-01 23:19:05 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:19:05 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:19:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:19:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:19:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:19:05 --> Total execution time: 0.5368
DEBUG - 2024-07-01 23:19:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:19:05 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:19:05 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:19:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:19:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:19:06 --> Total execution time: 0.1226
DEBUG - 2024-07-01 23:19:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:19:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:19:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:19:06 --> Total execution time: 0.1439
DEBUG - 2024-07-01 23:30:19 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:30:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:30:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:30:19 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:30:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:30:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:30:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:30:21 --> Total execution time: 1.2677
DEBUG - 2024-07-01 23:39:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:39:05 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:39:05 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:06 --> Total execution time: 0.6569
DEBUG - 2024-07-01 23:39:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:39:11 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:39:11 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:39:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:39:12 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:39:12 --> Total execution time: 0.1771
DEBUG - 2024-07-01 23:39:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:12 --> Total execution time: 0.3106
DEBUG - 2024-07-01 23:39:12 --> Total execution time: 0.1052
DEBUG - 2024-07-01 23:39:12 --> Total execution time: 0.1999
DEBUG - 2024-07-01 23:39:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:39:22 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:39:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:22 --> Total execution time: 0.5319
DEBUG - 2024-07-01 23:39:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:22 --> Total execution time: 0.2062
DEBUG - 2024-07-01 23:39:23 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:23 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:39:23 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:39:23 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:23 --> Total execution time: 0.3572
DEBUG - 2024-07-01 23:39:23 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:24 --> Total execution time: 0.7066
DEBUG - 2024-07-01 23:39:24 --> Total execution time: 0.5396
DEBUG - 2024-07-01 23:39:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:39:24 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:39:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:24 --> Total execution time: 0.1945
DEBUG - 2024-07-01 23:39:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:26 --> Total execution time: 0.2438
ERROR - 2024-07-01 23:39:26 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:39:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:26 --> Total execution time: 0.2021
DEBUG - 2024-07-01 23:39:26 --> Total execution time: 0.3004
DEBUG - 2024-07-01 23:39:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:39:28 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:39:28 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:28 --> Total execution time: 0.1481
DEBUG - 2024-07-01 23:39:28 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:28 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:39:28 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:39:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:39:28 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:39:28 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:28 --> Total execution time: 0.3190
DEBUG - 2024-07-01 23:39:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:28 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:29 --> Total execution time: 0.4154
DEBUG - 2024-07-01 23:39:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:29 --> Total execution time: 0.2831
DEBUG - 2024-07-01 23:39:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:29 --> Total execution time: 0.1947
DEBUG - 2024-07-01 23:39:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:30 --> Total execution time: 0.3972
DEBUG - 2024-07-01 23:39:30 --> Total execution time: 0.4811
DEBUG - 2024-07-01 23:39:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:30 --> Total execution time: 0.2481
DEBUG - 2024-07-01 23:39:31 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:31 --> Total execution time: 0.2747
DEBUG - 2024-07-01 23:39:31 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:31 --> Total execution time: 0.2095
DEBUG - 2024-07-01 23:39:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:39:33 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:39:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:33 --> Total execution time: 0.4553
DEBUG - 2024-07-01 23:39:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:39:33 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:39:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:34 --> Total execution time: 0.1315
DEBUG - 2024-07-01 23:39:34 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:39:35 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:39:35 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:35 --> Total execution time: 0.2967
DEBUG - 2024-07-01 23:39:35 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:35 --> Total execution time: 0.1713
DEBUG - 2024-07-01 23:39:37 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:37 --> Total execution time: 0.4426
DEBUG - 2024-07-01 23:39:37 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:38 --> Total execution time: 0.1826
DEBUG - 2024-07-01 23:39:39 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:39 --> Total execution time: 0.3558
DEBUG - 2024-07-01 23:39:39 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:39:39 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:39:39 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:39:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:39:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:39:40 --> Total execution time: 0.1908
DEBUG - 2024-07-01 23:40:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:40:12 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:40:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:40:14 --> Total execution time: 1.4377
DEBUG - 2024-07-01 23:40:14 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:40:15 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:40:15 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:40:16 --> Total execution time: 0.8329
DEBUG - 2024-07-01 23:40:18 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:40:19 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:40:19 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:40:19 --> Total execution time: 0.3498
DEBUG - 2024-07-01 23:40:19 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:40:19 --> Total execution time: 0.2031
DEBUG - 2024-07-01 23:40:19 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:40:20 --> Total execution time: 0.2952
DEBUG - 2024-07-01 23:40:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:40:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:40:20 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:40:20 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:40:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:40:20 --> UTF-8 Support Enabled
ERROR - 2024-07-01 23:40:20 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:40:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:40:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:40:20 --> Total execution time: 0.1968
DEBUG - 2024-07-01 23:40:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:40:20 --> Total execution time: 0.1099
DEBUG - 2024-07-01 23:40:20 --> Total execution time: 0.3062
DEBUG - 2024-07-01 23:40:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:40:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:40:22 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:40:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:40:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-07-01 23:40:22 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:40:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:22 --> Total execution time: 0.2761
DEBUG - 2024-07-01 23:40:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:40:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:40:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:40:22 --> Total execution time: 0.2078
DEBUG - 2024-07-01 23:40:22 --> Total execution time: 0.3863
DEBUG - 2024-07-01 23:40:22 --> Total execution time: 0.3389
DEBUG - 2024-07-01 23:40:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:40:24 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:40:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:40:24 --> Total execution time: 0.1207
DEBUG - 2024-07-01 23:40:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:25 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:40:25 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:40:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:40:25 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:25 --> Total execution time: 0.2582
DEBUG - 2024-07-01 23:40:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:40:25 --> Total execution time: 0.3078
DEBUG - 2024-07-01 23:40:58 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:58 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:58 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:58 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:40:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:40:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:40:58 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:40:58 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:40:58 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:40:58 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:58 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:40:59 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:40:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:40:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:40:59 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:59 --> Total execution time: 0.2342
DEBUG - 2024-07-01 23:40:59 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:40:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:40:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:40:59 --> Total execution time: 0.2540
DEBUG - 2024-07-01 23:40:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:40:59 --> Total execution time: 0.1743
DEBUG - 2024-07-01 23:40:59 --> Total execution time: 0.4563
DEBUG - 2024-07-01 23:41:07 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:41:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:41:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:41:07 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:41:07 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:41:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:41:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:41:07 --> Total execution time: 0.1148
DEBUG - 2024-07-01 23:41:07 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:41:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:41:07 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:41:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:41:07 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:41:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:41:07 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:41:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:41:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:41:07 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:41:07 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:41:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:41:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:41:08 --> Total execution time: 0.1960
DEBUG - 2024-07-01 23:41:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:41:08 --> Total execution time: 0.3150
DEBUG - 2024-07-01 23:41:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:41:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:41:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:41:26 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:41:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:41:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:41:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:41:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:41:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:41:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:41:27 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:41:27 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:41:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:41:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:41:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:41:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:41:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:41:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:41:27 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:41:27 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:41:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:41:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:41:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:41:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:41:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:41:27 --> Total execution time: 0.2554
DEBUG - 2024-07-01 23:41:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:41:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:41:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:41:27 --> Total execution time: 0.1346
DEBUG - 2024-07-01 23:41:27 --> Total execution time: 0.4550
DEBUG - 2024-07-01 23:41:27 --> Total execution time: 0.3947
DEBUG - 2024-07-01 23:41:57 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:41:57 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:41:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:41:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:41:57 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:41:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:41:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:41:58 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:41:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:41:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:41:58 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:41:58 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:41:58 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:41:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:41:58 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:41:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:41:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:41:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:41:59 --> Total execution time: 0.5680
DEBUG - 2024-07-01 23:41:59 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:41:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:41:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:41:59 --> Total execution time: 0.2205
DEBUG - 2024-07-01 23:41:59 --> Total execution time: 0.9941
DEBUG - 2024-07-01 23:42:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:42:01 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:42:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:01 --> UTF-8 Support Enabled
ERROR - 2024-07-01 23:42:01 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:42:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:01 --> Total execution time: 0.4353
DEBUG - 2024-07-01 23:42:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:02 --> Total execution time: 0.5951
DEBUG - 2024-07-01 23:42:02 --> Total execution time: 0.4377
DEBUG - 2024-07-01 23:42:02 --> Total execution time: 0.6696
DEBUG - 2024-07-01 23:42:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:42:04 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:42:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:04 --> Total execution time: 0.1346
DEBUG - 2024-07-01 23:42:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:42:04 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:42:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:42:04 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:42:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:04 --> Total execution time: 0.2216
DEBUG - 2024-07-01 23:42:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:05 --> Total execution time: 0.3831
DEBUG - 2024-07-01 23:42:14 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:14 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:14 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:14 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:42:14 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:42:14 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:42:14 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:42:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:42:14 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:42:14 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:14 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:14 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:15 --> Total execution time: 0.2701
DEBUG - 2024-07-01 23:42:15 --> Total execution time: 0.2925
DEBUG - 2024-07-01 23:42:15 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:15 --> Total execution time: 0.3724
DEBUG - 2024-07-01 23:42:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:15 --> Total execution time: 0.1059
DEBUG - 2024-07-01 23:42:15 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:15 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:42:16 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:42:16 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:16 --> Total execution time: 0.6459
DEBUG - 2024-07-01 23:42:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:16 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:16 --> Total execution time: 0.1169
DEBUG - 2024-07-01 23:42:16 --> Total execution time: 0.2057
DEBUG - 2024-07-01 23:42:17 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:17 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:42:17 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:42:17 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:18 --> Total execution time: 0.3613
DEBUG - 2024-07-01 23:42:18 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:18 --> Total execution time: 0.2880
DEBUG - 2024-07-01 23:42:18 --> Total execution time: 0.1776
DEBUG - 2024-07-01 23:42:18 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:18 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:18 --> Total execution time: 0.2540
DEBUG - 2024-07-01 23:42:18 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:18 --> Total execution time: 0.3096
DEBUG - 2024-07-01 23:42:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:18 --> Total execution time: 0.3071
DEBUG - 2024-07-01 23:42:19 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:42:20 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:42:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:20 --> Total execution time: 0.1823
DEBUG - 2024-07-01 23:42:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:42:20 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:42:20 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:42:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:20 --> UTF-8 Support Enabled
ERROR - 2024-07-01 23:42:20 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:42:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:20 --> Total execution time: 0.1067
DEBUG - 2024-07-01 23:42:20 --> Total execution time: 0.2635
DEBUG - 2024-07-01 23:42:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:21 --> Total execution time: 0.3098
DEBUG - 2024-07-01 23:42:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:22 --> Total execution time: 0.1831
DEBUG - 2024-07-01 23:42:23 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:42:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:42:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:42:23 --> Total execution time: 0.2419
DEBUG - 2024-07-01 23:43:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:43:01 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:43:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:01 --> Total execution time: 0.1712
DEBUG - 2024-07-01 23:43:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:43:01 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:43:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:02 --> Total execution time: 0.6351
DEBUG - 2024-07-01 23:43:02 --> Total execution time: 0.7233
DEBUG - 2024-07-01 23:43:02 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:02 --> Total execution time: 0.1631
DEBUG - 2024-07-01 23:43:03 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:43:03 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:43:03 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:03 --> Total execution time: 0.1293
DEBUG - 2024-07-01 23:43:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:43:04 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:43:04 --> Total execution time: 0.2529
DEBUG - 2024-07-01 23:43:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:04 --> Total execution time: 0.1892
DEBUG - 2024-07-01 23:43:04 --> Total execution time: 0.3695
DEBUG - 2024-07-01 23:43:05 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:43:06 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:43:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:06 --> Total execution time: 0.2625
DEBUG - 2024-07-01 23:43:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:06 --> Total execution time: 0.1668
DEBUG - 2024-07-01 23:43:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:08 --> Total execution time: 0.2591
DEBUG - 2024-07-01 23:43:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:08 --> Total execution time: 0.2087
DEBUG - 2024-07-01 23:43:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:10 --> Total execution time: 0.2224
DEBUG - 2024-07-01 23:43:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:43:11 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:43:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:11 --> Total execution time: 0.1474
DEBUG - 2024-07-01 23:43:13 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:43:13 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:43:13 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:13 --> Total execution time: 0.3329
DEBUG - 2024-07-01 23:43:13 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:14 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:14 --> Total execution time: 1.0667
DEBUG - 2024-07-01 23:43:15 --> Total execution time: 0.8895
DEBUG - 2024-07-01 23:43:15 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:15 --> Total execution time: 0.2410
DEBUG - 2024-07-01 23:43:16 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:16 --> Total execution time: 0.2640
DEBUG - 2024-07-01 23:43:16 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:16 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:16 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:43:17 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:43:17 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:43:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:43:17 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:43:17 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:17 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:17 --> Total execution time: 0.1734
DEBUG - 2024-07-01 23:43:17 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:17 --> Total execution time: 0.3184
DEBUG - 2024-07-01 23:43:17 --> Total execution time: 0.2250
DEBUG - 2024-07-01 23:43:18 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:18 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:18 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:43:19 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:43:19 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:19 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-07-01 23:43:19 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:43:19 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:19 --> Total execution time: 0.2866
DEBUG - 2024-07-01 23:43:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:19 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:19 --> Total execution time: 0.2108
DEBUG - 2024-07-01 23:43:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:19 --> Total execution time: 0.1789
DEBUG - 2024-07-01 23:43:19 --> Total execution time: 0.1190
DEBUG - 2024-07-01 23:43:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:43:20 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:43:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:20 --> Total execution time: 0.1153
DEBUG - 2024-07-01 23:43:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:43:20 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:43:20 --> Total execution time: 0.1524
DEBUG - 2024-07-01 23:43:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:21 --> Total execution time: 0.1573
DEBUG - 2024-07-01 23:43:48 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:43:48 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:43:48 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:49 --> Total execution time: 0.7170
DEBUG - 2024-07-01 23:43:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:43:50 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:43:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:50 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:43:50 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:43:50 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:43:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:50 --> Total execution time: 0.2031
DEBUG - 2024-07-01 23:43:50 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:50 --> Total execution time: 0.2272
DEBUG - 2024-07-01 23:43:50 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:51 --> Total execution time: 0.2044
DEBUG - 2024-07-01 23:43:51 --> Total execution time: 2.6535
DEBUG - 2024-07-01 23:43:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:52 --> Total execution time: 3.1508
DEBUG - 2024-07-01 23:43:52 --> Total execution time: 3.1197
DEBUG - 2024-07-01 23:43:52 --> Total execution time: 0.6195
DEBUG - 2024-07-01 23:43:52 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:53 --> Total execution time: 0.5193
DEBUG - 2024-07-01 23:43:53 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:53 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:43:53 --> Severity: Notice --> Undefined variable: insert C:\xampp7433\htdocs\app\cso1-api\application\controllers\KioskPrint.php 167
DEBUG - 2024-07-01 23:43:53 --> Total execution time: 0.3898
DEBUG - 2024-07-01 23:43:53 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:53 --> Total execution time: 0.1926
DEBUG - 2024-07-01 23:43:53 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:54 --> Total execution time: 0.1596
DEBUG - 2024-07-01 23:43:55 --> Total execution time: 2.0819
DEBUG - 2024-07-01 23:43:55 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:43:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:43:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:43:55 --> Total execution time: 0.5658
DEBUG - 2024-07-01 23:44:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:44:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:44:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:44:10 --> Severity: Notice --> Undefined variable: insert C:\xampp7433\htdocs\app\cso1-api\application\controllers\KioskPrint.php 149
DEBUG - 2024-07-01 23:44:10 --> Total execution time: 0.4086
DEBUG - 2024-07-01 23:44:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:44:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:44:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:44:10 --> Total execution time: 0.1195
DEBUG - 2024-07-01 23:44:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:44:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:44:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:44:11 --> Total execution time: 0.6943
DEBUG - 2024-07-01 23:44:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:44:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:44:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:44:11 --> Total execution time: 0.4961
DEBUG - 2024-07-01 23:44:19 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:44:19 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:44:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:44:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:44:19 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:44:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:44:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:44:19 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:44:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:44:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:44:19 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:44:19 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:44:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:44:19 --> UTF-8 Support Enabled
ERROR - 2024-07-01 23:44:19 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:44:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:44:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:44:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:44:20 --> Total execution time: 0.1542
DEBUG - 2024-07-01 23:44:20 --> Total execution time: 0.1870
DEBUG - 2024-07-01 23:44:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:44:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:44:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:44:20 --> Total execution time: 0.1260
DEBUG - 2024-07-01 23:44:58 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:44:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:44:58 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:44:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:44:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:44:58 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:44:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:44:58 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:44:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:44:58 --> Total execution time: 0.4550
DEBUG - 2024-07-01 23:44:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:44:58 --> Total execution time: 0.2097
DEBUG - 2024-07-01 23:45:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:45:05 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:45:05 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:05 --> Total execution time: 0.1400
DEBUG - 2024-07-01 23:45:05 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:05 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:45:05 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:45:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:05 --> Total execution time: 0.1104
DEBUG - 2024-07-01 23:45:05 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:05 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:05 --> Total execution time: 0.1609
DEBUG - 2024-07-01 23:45:05 --> Total execution time: 0.1490
DEBUG - 2024-07-01 23:45:07 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:07 --> Total execution time: 0.1742
DEBUG - 2024-07-01 23:45:07 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:07 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:07 --> Total execution time: 0.1443
DEBUG - 2024-07-01 23:45:07 --> Total execution time: 0.2156
DEBUG - 2024-07-01 23:45:07 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:08 --> Total execution time: 0.1380
DEBUG - 2024-07-01 23:45:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:45:10 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:45:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:10 --> Total execution time: 0.1230
DEBUG - 2024-07-01 23:45:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:45:12 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:45:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:45:12 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:45:12 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:45:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:12 --> Total execution time: 0.1232
DEBUG - 2024-07-01 23:45:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:45:12 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:45:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:12 --> Total execution time: 0.2151
DEBUG - 2024-07-01 23:45:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:12 --> Total execution time: 0.4702
DEBUG - 2024-07-01 23:45:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:12 --> Total execution time: 0.1661
DEBUG - 2024-07-01 23:45:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:12 --> Total execution time: 0.1652
DEBUG - 2024-07-01 23:45:13 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:13 --> Total execution time: 0.1891
DEBUG - 2024-07-01 23:45:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-07-01 23:45:20 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:45:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:45:20 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:45:20 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:45:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:20 --> Total execution time: 0.1841
DEBUG - 2024-07-01 23:45:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:20 --> Total execution time: 0.1418
DEBUG - 2024-07-01 23:45:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:21 --> Total execution time: 0.1669
DEBUG - 2024-07-01 23:45:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:45:22 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:45:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:22 --> Total execution time: 0.2174
DEBUG - 2024-07-01 23:45:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:22 --> Total execution time: 0.1169
DEBUG - 2024-07-01 23:45:22 --> Total execution time: 0.3055
DEBUG - 2024-07-01 23:45:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:45:27 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:45:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:27 --> UTF-8 Support Enabled
ERROR - 2024-07-01 23:45:27 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:45:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:45:27 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:45:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:27 --> Total execution time: 0.1914
DEBUG - 2024-07-01 23:45:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:27 --> Total execution time: 0.2737
DEBUG - 2024-07-01 23:45:27 --> Total execution time: 0.4021
DEBUG - 2024-07-01 23:45:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:45:27 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:45:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:27 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:28 --> Total execution time: 0.1960
DEBUG - 2024-07-01 23:45:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:28 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:28 --> Total execution time: 0.2120
DEBUG - 2024-07-01 23:45:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:28 --> Total execution time: 0.2090
DEBUG - 2024-07-01 23:45:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:29 --> Total execution time: 0.1505
DEBUG - 2024-07-01 23:45:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:29 --> Total execution time: 0.1836
DEBUG - 2024-07-01 23:45:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:29 --> Total execution time: 0.2639
DEBUG - 2024-07-01 23:45:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:29 --> Total execution time: 0.1359
DEBUG - 2024-07-01 23:45:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:29 --> Total execution time: 0.1358
DEBUG - 2024-07-01 23:45:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:29 --> Total execution time: 0.1194
DEBUG - 2024-07-01 23:45:31 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:31 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:31 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:31 --> Total execution time: 0.1359
DEBUG - 2024-07-01 23:45:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:31 --> Total execution time: 0.1548
DEBUG - 2024-07-01 23:45:31 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:31 --> Total execution time: 0.1830
DEBUG - 2024-07-01 23:45:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:32 --> Total execution time: 0.3514
DEBUG - 2024-07-01 23:45:32 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:32 --> Total execution time: 0.3265
DEBUG - 2024-07-01 23:45:32 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:32 --> Total execution time: 0.1207
DEBUG - 2024-07-01 23:45:35 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:45:35 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:45:36 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:36 --> Total execution time: 0.2821
DEBUG - 2024-07-01 23:45:36 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:45:36 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:45:36 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:36 --> Total execution time: 0.1641
DEBUG - 2024-07-01 23:45:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:38 --> Total execution time: 0.2582
DEBUG - 2024-07-01 23:45:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:45:38 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:45:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:45:38 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:45:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:45:39 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:45:39 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:39 --> Total execution time: 0.1466
DEBUG - 2024-07-01 23:45:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:39 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:39 --> Total execution time: 0.1523
DEBUG - 2024-07-01 23:45:39 --> Total execution time: 0.2387
DEBUG - 2024-07-01 23:45:45 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:45 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:45 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:45:45 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:45:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:45:45 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:45:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:45 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:45 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-07-01 23:45:45 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:45:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:45 --> Total execution time: 0.1606
DEBUG - 2024-07-01 23:45:45 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:45 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:45 --> Total execution time: 0.3007
DEBUG - 2024-07-01 23:45:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:45:45 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:45:45 --> Total execution time: 0.2708
DEBUG - 2024-07-01 23:45:45 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:45 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:45 --> Total execution time: 0.1693
DEBUG - 2024-07-01 23:45:45 --> Total execution time: 0.1349
DEBUG - 2024-07-01 23:45:46 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:46 --> Total execution time: 0.1439
DEBUG - 2024-07-01 23:45:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:49 --> Total execution time: 0.1117
DEBUG - 2024-07-01 23:45:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:49 --> Total execution time: 0.2101
DEBUG - 2024-07-01 23:45:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:49 --> Total execution time: 0.2020
DEBUG - 2024-07-01 23:45:49 --> Total execution time: 0.2770
DEBUG - 2024-07-01 23:45:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:50 --> Total execution time: 0.1832
DEBUG - 2024-07-01 23:45:50 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:50 --> Total execution time: 0.1667
DEBUG - 2024-07-01 23:45:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:45:51 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:45:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:45:51 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:45:51 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:45:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:51 --> Total execution time: 0.2061
DEBUG - 2024-07-01 23:45:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:51 --> Total execution time: 0.2856
DEBUG - 2024-07-01 23:45:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:45:51 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:45:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:51 --> Total execution time: 0.1478
DEBUG - 2024-07-01 23:45:51 --> Total execution time: 0.3269
DEBUG - 2024-07-01 23:45:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:52 --> Total execution time: 0.1339
DEBUG - 2024-07-01 23:45:52 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:52 --> Total execution time: 0.1370
DEBUG - 2024-07-01 23:45:55 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:55 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:55 --> Total execution time: 0.1997
DEBUG - 2024-07-01 23:45:55 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:55 --> Total execution time: 0.1483
DEBUG - 2024-07-01 23:45:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:55 --> Total execution time: 0.1141
DEBUG - 2024-07-01 23:45:55 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:45:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:45:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:45:55 --> Total execution time: 0.1436
DEBUG - 2024-07-01 23:46:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:46:08 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:46:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:46:08 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:46:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:46:08 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:46:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:46:08 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:46:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-07-01 23:46:08 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:46:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:46:08 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:46:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:09 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:09 --> Total execution time: 0.1755
DEBUG - 2024-07-01 23:46:09 --> Total execution time: 0.2418
DEBUG - 2024-07-01 23:46:09 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:09 --> Total execution time: 0.1688
DEBUG - 2024-07-01 23:46:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:09 --> Total execution time: 0.5105
DEBUG - 2024-07-01 23:46:09 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:09 --> Total execution time: 0.2891
DEBUG - 2024-07-01 23:46:09 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:10 --> Total execution time: 0.1270
DEBUG - 2024-07-01 23:46:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:10 --> Total execution time: 0.3073
DEBUG - 2024-07-01 23:46:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:10 --> Total execution time: 0.3829
DEBUG - 2024-07-01 23:46:10 --> Total execution time: 0.1702
DEBUG - 2024-07-01 23:46:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:11 --> Total execution time: 0.3034
DEBUG - 2024-07-01 23:46:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:11 --> Total execution time: 0.1359
DEBUG - 2024-07-01 23:46:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:11 --> Total execution time: 0.1309
DEBUG - 2024-07-01 23:46:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:46:22 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:46:22 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:46:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:22 --> Total execution time: 0.1561
ERROR - 2024-07-01 23:46:22 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:46:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:22 --> Total execution time: 0.1659
DEBUG - 2024-07-01 23:46:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:22 --> Total execution time: 0.2736
DEBUG - 2024-07-01 23:46:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:46:22 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:46:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:22 --> Total execution time: 0.1847
DEBUG - 2024-07-01 23:46:22 --> Total execution time: 0.3071
DEBUG - 2024-07-01 23:46:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:23 --> Total execution time: 0.1411
DEBUG - 2024-07-01 23:46:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:24 --> Total execution time: 0.1551
DEBUG - 2024-07-01 23:46:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:24 --> Total execution time: 0.3196
DEBUG - 2024-07-01 23:46:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:25 --> Total execution time: 0.5965
DEBUG - 2024-07-01 23:46:25 --> Total execution time: 0.4251
DEBUG - 2024-07-01 23:46:25 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:25 --> Total execution time: 0.1313
DEBUG - 2024-07-01 23:46:25 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:25 --> Total execution time: 0.1314
DEBUG - 2024-07-01 23:46:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:46:30 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:46:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:30 --> UTF-8 Support Enabled
ERROR - 2024-07-01 23:46:30 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:46:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:46:30 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:46:30 --> Total execution time: 0.1965
DEBUG - 2024-07-01 23:46:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:30 --> Total execution time: 0.1227
DEBUG - 2024-07-01 23:46:30 --> Total execution time: 0.3155
DEBUG - 2024-07-01 23:46:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:46:33 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:46:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:33 --> Total execution time: 0.1614
DEBUG - 2024-07-01 23:46:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:46:33 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:46:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:34 --> Total execution time: 0.2863
DEBUG - 2024-07-01 23:46:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:34 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:34 --> Total execution time: 0.5551
DEBUG - 2024-07-01 23:46:34 --> Total execution time: 0.5063
DEBUG - 2024-07-01 23:46:35 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:35 --> Total execution time: 0.1286
DEBUG - 2024-07-01 23:46:36 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:36 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:36 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:46:36 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:46:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:46:36 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:46:37 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:37 --> Total execution time: 0.1713
DEBUG - 2024-07-01 23:46:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:37 --> Total execution time: 0.1811
DEBUG - 2024-07-01 23:46:37 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:37 --> Total execution time: 0.2087
DEBUG - 2024-07-01 23:46:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:46:38 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:46:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:46:38 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:46:38 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:46:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:39 --> UTF-8 Support Enabled
ERROR - 2024-07-01 23:46:39 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:46:39 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:39 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-07-01 23:46:39 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:46:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:39 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:46:39 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:46:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:39 --> Total execution time: 0.2079
DEBUG - 2024-07-01 23:46:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:39 --> Total execution time: 0.1383
DEBUG - 2024-07-01 23:46:39 --> Total execution time: 0.2680
DEBUG - 2024-07-01 23:46:39 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:39 --> Total execution time: 0.1498
DEBUG - 2024-07-01 23:46:39 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:39 --> Total execution time: 0.1274
DEBUG - 2024-07-01 23:46:39 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:39 --> Total execution time: 0.1250
DEBUG - 2024-07-01 23:46:40 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:40 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:40 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:40 --> Total execution time: 0.1276
DEBUG - 2024-07-01 23:46:40 --> Total execution time: 0.1999
DEBUG - 2024-07-01 23:46:40 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:40 --> Total execution time: 0.2696
DEBUG - 2024-07-01 23:46:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:41 --> Total execution time: 0.2621
DEBUG - 2024-07-01 23:46:41 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:41 --> Total execution time: 0.1479
DEBUG - 2024-07-01 23:46:41 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:41 --> Total execution time: 0.1410
DEBUG - 2024-07-01 23:46:45 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:45 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:46 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:46:46 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:46:46 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:46:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:46:46 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:46:46 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:46 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:46 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:46:46 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:46:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:46 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:46 --> Total execution time: 0.3401
DEBUG - 2024-07-01 23:46:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:46 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:46 --> Total execution time: 0.2814
DEBUG - 2024-07-01 23:46:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:46 --> Total execution time: 0.2253
DEBUG - 2024-07-01 23:46:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:47 --> Total execution time: 0.2417
DEBUG - 2024-07-01 23:46:47 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:47 --> Total execution time: 0.1354
DEBUG - 2024-07-01 23:46:47 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:46:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:46:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:46:47 --> Total execution time: 0.2014
DEBUG - 2024-07-01 23:47:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:47:06 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:47:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:47:06 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:47:06 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:47:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:47:07 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:47:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:47:07 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:47:07 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:47:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:07 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:07 --> Total execution time: 0.4857
DEBUG - 2024-07-01 23:47:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:07 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:07 --> Total execution time: 0.2211
DEBUG - 2024-07-01 23:47:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:07 --> Total execution time: 0.1559
DEBUG - 2024-07-01 23:47:07 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:07 --> Total execution time: 0.7101
DEBUG - 2024-07-01 23:47:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:07 --> Total execution time: 0.1671
DEBUG - 2024-07-01 23:47:07 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:07 --> Total execution time: 0.1887
DEBUG - 2024-07-01 23:47:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:13 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:13 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:47:13 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:47:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:47:13 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:47:13 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:13 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:13 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-07-01 23:47:13 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:47:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:13 --> Total execution time: 0.1609
DEBUG - 2024-07-01 23:47:13 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:13 --> Total execution time: 0.3080
DEBUG - 2024-07-01 23:47:13 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:47:13 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:47:13 --> Total execution time: 0.2516
DEBUG - 2024-07-01 23:47:13 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:13 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:13 --> Total execution time: 0.1584
DEBUG - 2024-07-01 23:47:13 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:14 --> Total execution time: 0.2898
DEBUG - 2024-07-01 23:47:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:14 --> Total execution time: 0.1904
DEBUG - 2024-07-01 23:47:16 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:16 --> Total execution time: 0.1504
DEBUG - 2024-07-01 23:47:16 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:16 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:16 --> Total execution time: 0.1387
DEBUG - 2024-07-01 23:47:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:16 --> Total execution time: 0.1886
DEBUG - 2024-07-01 23:47:16 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:17 --> Total execution time: 0.1148
DEBUG - 2024-07-01 23:47:37 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:37 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:37 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:37 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:37 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:37 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:47:38 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:47:38 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:47:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:47:38 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:47:38 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:47:38 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:47:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:47:38 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:47:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:38 --> Total execution time: 0.2679
DEBUG - 2024-07-01 23:47:38 --> Total execution time: 0.7694
DEBUG - 2024-07-01 23:47:39 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:39 --> Total execution time: 0.9507
DEBUG - 2024-07-01 23:47:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:39 --> Total execution time: 0.2061
DEBUG - 2024-07-01 23:47:39 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:39 --> Total execution time: 0.1554
DEBUG - 2024-07-01 23:47:39 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:40 --> Total execution time: 0.7474
DEBUG - 2024-07-01 23:47:52 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:52 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:47:52 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:47:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:53 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:53 --> Total execution time: 0.2661
DEBUG - 2024-07-01 23:47:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:53 --> Total execution time: 0.3052
DEBUG - 2024-07-01 23:47:55 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:55 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:47:55 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:47:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:55 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:55 --> Total execution time: 0.2224
DEBUG - 2024-07-01 23:47:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:55 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:55 --> Total execution time: 0.3233
DEBUG - 2024-07-01 23:47:55 --> Total execution time: 0.2644
DEBUG - 2024-07-01 23:47:56 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:56 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:47:56 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:47:56 --> Total execution time: 0.1770
DEBUG - 2024-07-01 23:47:56 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:56 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:47:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:47:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:47:56 --> Total execution time: 0.1871
DEBUG - 2024-07-01 23:47:56 --> Total execution time: 0.2755
DEBUG - 2024-07-01 23:48:05 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:48:05 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:48:05 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:05 --> Total execution time: 0.2088
DEBUG - 2024-07-01 23:48:05 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:05 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:05 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:48:05 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:48:05 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:48:05 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:48:05 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:48:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:06 --> Total execution time: 0.2587
DEBUG - 2024-07-01 23:48:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:06 --> Total execution time: 0.2352
DEBUG - 2024-07-01 23:48:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:06 --> Total execution time: 0.1539
DEBUG - 2024-07-01 23:48:07 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:48:07 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:48:07 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:07 --> Total execution time: 0.1421
DEBUG - 2024-07-01 23:48:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:48:08 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:48:08 --> Total execution time: 0.1547
DEBUG - 2024-07-01 23:48:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:09 --> Total execution time: 0.1355
DEBUG - 2024-07-01 23:48:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:09 --> Total execution time: 0.4537
DEBUG - 2024-07-01 23:48:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:48:11 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:48:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:11 --> Total execution time: 0.2671
DEBUG - 2024-07-01 23:48:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:12 --> Total execution time: 0.4289
DEBUG - 2024-07-01 23:48:14 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:14 --> Total execution time: 0.2668
DEBUG - 2024-07-01 23:48:14 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:48:14 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:48:14 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:15 --> Total execution time: 0.2441
DEBUG - 2024-07-01 23:48:17 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:48:18 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:48:18 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:18 --> Total execution time: 0.1028
DEBUG - 2024-07-01 23:48:19 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:19 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:19 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:48:19 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:48:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:48:19 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:48:19 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:19 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:48:19 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:48:19 --> Total execution time: 0.1164
DEBUG - 2024-07-01 23:48:19 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:19 --> Total execution time: 0.1594
DEBUG - 2024-07-01 23:48:19 --> Total execution time: 0.3184
DEBUG - 2024-07-01 23:48:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:48:21 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:48:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:21 --> Total execution time: 0.2945
DEBUG - 2024-07-01 23:48:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:22 --> Total execution time: 0.8418
DEBUG - 2024-07-01 23:48:23 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:23 --> Total execution time: 0.2314
DEBUG - 2024-07-01 23:48:23 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:23 --> Total execution time: 0.1576
DEBUG - 2024-07-01 23:48:32 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:32 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:48:33 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:48:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:33 --> Total execution time: 0.3193
DEBUG - 2024-07-01 23:48:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:33 --> Total execution time: 0.3643
DEBUG - 2024-07-01 23:48:34 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:34 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:48:34 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:48:34 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:34 --> Total execution time: 0.2728
DEBUG - 2024-07-01 23:48:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:34 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:35 --> Total execution time: 0.4237
DEBUG - 2024-07-01 23:48:36 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:48:36 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:48:36 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:36 --> Total execution time: 0.2021
DEBUG - 2024-07-01 23:48:38 --> Total execution time: 3.3787
DEBUG - 2024-07-01 23:48:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:38 --> Total execution time: 0.1978
DEBUG - 2024-07-01 23:48:38 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:48:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:48:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:48:38 --> Total execution time: 0.2593
DEBUG - 2024-07-01 23:49:09 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:49:09 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:49:09 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:09 --> Total execution time: 0.2639
DEBUG - 2024-07-01 23:49:09 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:49:09 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:49:09 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:10 --> Total execution time: 0.1697
DEBUG - 2024-07-01 23:49:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:10 --> Total execution time: 0.2540
DEBUG - 2024-07-01 23:49:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:49:11 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:49:11 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:49:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:49:11 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:49:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:11 --> Total execution time: 0.1590
DEBUG - 2024-07-01 23:49:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:11 --> Total execution time: 0.1404
DEBUG - 2024-07-01 23:49:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:11 --> Total execution time: 0.6822
DEBUG - 2024-07-01 23:49:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:49:11 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:49:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:11 --> Total execution time: 0.1968
DEBUG - 2024-07-01 23:49:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:49:12 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:49:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:12 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:12 --> Total execution time: 0.2012
DEBUG - 2024-07-01 23:49:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:12 --> Total execution time: 0.3903
DEBUG - 2024-07-01 23:49:12 --> Total execution time: 0.2326
DEBUG - 2024-07-01 23:49:13 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:49:13 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:49:13 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:13 --> Total execution time: 0.1513
DEBUG - 2024-07-01 23:49:13 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:13 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:49:14 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:49:14 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:14 --> Total execution time: 0.4965
DEBUG - 2024-07-01 23:49:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:14 --> Total execution time: 0.2248
DEBUG - 2024-07-01 23:49:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:49:30 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:49:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:30 --> Total execution time: 0.2213
DEBUG - 2024-07-01 23:49:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:49:31 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:49:31 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:49:31 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:49:31 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:49:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:31 --> Total execution time: 0.5755
DEBUG - 2024-07-01 23:49:31 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:32 --> Total execution time: 0.3467
DEBUG - 2024-07-01 23:49:32 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:32 --> Total execution time: 2.0480
DEBUG - 2024-07-01 23:49:32 --> Total execution time: 1.8125
DEBUG - 2024-07-01 23:49:32 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:32 --> Total execution time: 0.2216
DEBUG - 2024-07-01 23:49:32 --> Total execution time: 1.9506
DEBUG - 2024-07-01 23:49:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:33 --> Total execution time: 0.8761
DEBUG - 2024-07-01 23:49:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:34 --> Total execution time: 0.5847
DEBUG - 2024-07-01 23:49:34 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:34 --> Total execution time: 0.5579
DEBUG - 2024-07-01 23:49:42 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:49:42 --> Severity: Notice --> Undefined variable: insert C:\xampp7433\htdocs\app\cso1-api\application\controllers\KioskPrint.php 149
DEBUG - 2024-07-01 23:49:42 --> Total execution time: 0.1587
DEBUG - 2024-07-01 23:49:42 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:42 --> Total execution time: 0.1577
DEBUG - 2024-07-01 23:49:42 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:43 --> Total execution time: 0.6861
DEBUG - 2024-07-01 23:49:43 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:49:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:49:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:49:43 --> Total execution time: 0.5198
DEBUG - 2024-07-01 23:50:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:50:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:50:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:50:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:50:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:50:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:50:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:50:08 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:50:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:50:09 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:50:09 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:50:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:50:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:50:09 --> UTF-8 Support Enabled
ERROR - 2024-07-01 23:50:09 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:50:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:50:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:50:09 --> Total execution time: 0.1506
DEBUG - 2024-07-01 23:50:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:50:09 --> Total execution time: 0.2538
DEBUG - 2024-07-01 23:50:09 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:50:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:50:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:50:09 --> Total execution time: 0.1274
DEBUG - 2024-07-01 23:50:09 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:50:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:50:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:50:10 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:50:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:50:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:50:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:50:10 --> Total execution time: 0.1478
DEBUG - 2024-07-01 23:50:10 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:50:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:50:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:50:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:50:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:50:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:50:11 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:50:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:50:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:50:11 --> Total execution time: 0.8729
DEBUG - 2024-07-01 23:50:11 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:50:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:50:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:50:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:50:12 --> Total execution time: 0.1930
DEBUG - 2024-07-01 23:50:12 --> Total execution time: 0.3569
DEBUG - 2024-07-01 23:50:13 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:50:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:50:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:50:13 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:50:13 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:50:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:50:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:50:13 --> Total execution time: 0.2662
DEBUG - 2024-07-01 23:50:13 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:50:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:50:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:50:14 --> Total execution time: 0.5639
DEBUG - 2024-07-01 23:50:15 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:50:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:50:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:50:15 --> Total execution time: 0.3286
DEBUG - 2024-07-01 23:50:15 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:50:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:50:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:50:16 --> Total execution time: 1.0234
DEBUG - 2024-07-01 23:50:18 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:50:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:50:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:50:18 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:50:18 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:50:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:50:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:50:18 --> Total execution time: 0.2900
DEBUG - 2024-07-01 23:50:18 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:50:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:50:19 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:50:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:50:19 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:50:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:50:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:50:19 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:50:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:50:19 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:50:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:50:19 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:50:19 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:50:19 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:50:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:50:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:50:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:50:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:50:19 --> Total execution time: 0.1903
DEBUG - 2024-07-01 23:50:19 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:50:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:50:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:50:19 --> Total execution time: 0.0981
DEBUG - 2024-07-01 23:50:19 --> Total execution time: 0.3599
DEBUG - 2024-07-01 23:51:17 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:17 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:17 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:18 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:18 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:18 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:51:21 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:51:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:51:21 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:51:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:51:21 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:51:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:51:21 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:51:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:51:22 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:51:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:51:22 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:51:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:23 --> Total execution time: 0.9712
DEBUG - 2024-07-01 23:51:23 --> Total execution time: 1.0563
DEBUG - 2024-07-01 23:51:23 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:23 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:24 --> Total execution time: 0.9729
DEBUG - 2024-07-01 23:51:24 --> Total execution time: 0.8412
DEBUG - 2024-07-01 23:51:24 --> Total execution time: 2.2592
DEBUG - 2024-07-01 23:51:24 --> Total execution time: 2.1786
DEBUG - 2024-07-01 23:51:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:29 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:51:29 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:51:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:29 --> UTF-8 Support Enabled
ERROR - 2024-07-01 23:51:29 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:51:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:30 --> Total execution time: 0.1904
DEBUG - 2024-07-01 23:51:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:51:30 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:51:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:30 --> Total execution time: 0.1353
DEBUG - 2024-07-01 23:51:30 --> Total execution time: 0.3720
DEBUG - 2024-07-01 23:51:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:30 --> Total execution time: 0.2164
DEBUG - 2024-07-01 23:51:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:30 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:51:31 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:51:31 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:51:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:31 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:31 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:31 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-07-01 23:51:31 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:51:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:51:31 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:51:31 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:31 --> Total execution time: 0.1283
DEBUG - 2024-07-01 23:51:31 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:31 --> Total execution time: 0.3858
DEBUG - 2024-07-01 23:51:31 --> Total execution time: 0.4381
DEBUG - 2024-07-01 23:51:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:31 --> Total execution time: 0.1777
DEBUG - 2024-07-01 23:51:32 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:51:32 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:51:32 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:33 --> Total execution time: 0.1518
DEBUG - 2024-07-01 23:51:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:51:33 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:51:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:33 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:33 --> Total execution time: 0.3520
DEBUG - 2024-07-01 23:51:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:33 --> Total execution time: 0.2420
DEBUG - 2024-07-01 23:51:47 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:51:47 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:51:47 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:47 --> Total execution time: 0.2713
DEBUG - 2024-07-01 23:51:47 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:48 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:48 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:48 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:48 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:48 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:51:49 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:51:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:51:49 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:51:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-07-01 23:51:49 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:51:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:49 --> Total execution time: 0.1589
DEBUG - 2024-07-01 23:51:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:49 --> Total execution time: 0.1476
DEBUG - 2024-07-01 23:51:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:49 --> Total execution time: 0.1215
DEBUG - 2024-07-01 23:51:50 --> Total execution time: 2.5241
DEBUG - 2024-07-01 23:51:50 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:50 --> Total execution time: 2.7899
DEBUG - 2024-07-01 23:51:50 --> Total execution time: 2.6849
DEBUG - 2024-07-01 23:51:51 --> Total execution time: 0.6543
DEBUG - 2024-07-01 23:51:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:51 --> Total execution time: 0.6858
DEBUG - 2024-07-01 23:51:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:51:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:51:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:51:52 --> Total execution time: 0.7075
DEBUG - 2024-07-01 23:52:39 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:52:39 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:52:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:52:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:52:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:52:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:52:39 --> Total execution time: 0.2277
ERROR - 2024-07-01 23:52:39 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:52:39 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:52:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:52:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:52:39 --> Total execution time: 0.1995
DEBUG - 2024-07-01 23:52:40 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:52:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:52:40 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:52:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:52:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:52:40 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:52:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:52:41 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:52:41 --> Total execution time: 0.1755
DEBUG - 2024-07-01 23:52:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:52:41 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:52:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:52:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:52:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:52:41 --> Total execution time: 0.2087
DEBUG - 2024-07-01 23:52:41 --> Total execution time: 0.1777
DEBUG - 2024-07-01 23:52:58 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:52:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:52:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:52:58 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:52:58 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:52:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:52:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:52:58 --> Total execution time: 0.1085
DEBUG - 2024-07-01 23:52:59 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:52:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:52:59 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:52:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:52:59 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:52:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:52:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:52:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:53:00 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:53:00 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:53:00 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:00 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:53:00 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:53:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:00 --> Total execution time: 0.2103
DEBUG - 2024-07-01 23:53:00 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:00 --> Total execution time: 0.1465
DEBUG - 2024-07-01 23:53:00 --> Total execution time: 0.3886
DEBUG - 2024-07-01 23:53:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:53:02 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:53:02 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:02 --> Total execution time: 0.2936
DEBUG - 2024-07-01 23:53:02 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:02 --> Total execution time: 0.4944
DEBUG - 2024-07-01 23:53:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:53:04 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:53:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:04 --> Total execution time: 0.1449
DEBUG - 2024-07-01 23:53:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:53:04 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:53:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:04 --> Total execution time: 0.2331
DEBUG - 2024-07-01 23:53:04 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:04 --> Total execution time: 0.1651
DEBUG - 2024-07-01 23:53:04 --> Total execution time: 0.2935
DEBUG - 2024-07-01 23:53:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:53:06 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:53:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:53:06 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
ERROR - 2024-07-01 23:53:06 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:53:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:53:06 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:53:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:06 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:07 --> Total execution time: 0.1768
DEBUG - 2024-07-01 23:53:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:07 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:07 --> Total execution time: 0.2834
DEBUG - 2024-07-01 23:53:07 --> Total execution time: 0.2726
DEBUG - 2024-07-01 23:53:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:07 --> Total execution time: 0.2069
DEBUG - 2024-07-01 23:53:07 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:53:08 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:53:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:08 --> Total execution time: 0.1272
DEBUG - 2024-07-01 23:53:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:53:08 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:53:08 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:08 --> Total execution time: 0.2592
DEBUG - 2024-07-01 23:53:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:08 --> Total execution time: 0.2125
DEBUG - 2024-07-01 23:53:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:53:20 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:53:20 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:21 --> Total execution time: 0.4010
DEBUG - 2024-07-01 23:53:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:21 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:53:22 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:53:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:53:22 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:53:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:53:22 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:53:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:22 --> Total execution time: 0.1922
DEBUG - 2024-07-01 23:53:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:22 --> Total execution time: 0.2690
DEBUG - 2024-07-01 23:53:22 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:22 --> Total execution time: 0.1315
DEBUG - 2024-07-01 23:53:23 --> Total execution time: 2.0676
DEBUG - 2024-07-01 23:53:23 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:23 --> Total execution time: 2.4242
DEBUG - 2024-07-01 23:53:23 --> Total execution time: 2.3261
DEBUG - 2024-07-01 23:53:24 --> Total execution time: 0.5431
DEBUG - 2024-07-01 23:53:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:24 --> Total execution time: 0.5023
DEBUG - 2024-07-01 23:53:24 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:25 --> Total execution time: 0.7670
DEBUG - 2024-07-01 23:53:41 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:53:41 --> Severity: Notice --> Undefined variable: insert C:\xampp7433\htdocs\app\cso1-api\application\controllers\KioskPrint.php 149
DEBUG - 2024-07-01 23:53:41 --> Total execution time: 0.2445
DEBUG - 2024-07-01 23:53:41 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:42 --> Total execution time: 0.1295
DEBUG - 2024-07-01 23:53:42 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:42 --> Total execution time: 0.7880
DEBUG - 2024-07-01 23:53:42 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:43 --> Total execution time: 0.5100
DEBUG - 2024-07-01 23:53:46 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:46 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:46 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:53:46 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:53:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:53:46 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:53:46 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:46 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:53:46 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:53:46 --> Total execution time: 0.2194
DEBUG - 2024-07-01 23:53:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:46 --> Total execution time: 0.2194
DEBUG - 2024-07-01 23:53:46 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:46 --> Total execution time: 0.1229
DEBUG - 2024-07-01 23:53:47 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:53:47 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:53:47 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:47 --> Total execution time: 0.1235
DEBUG - 2024-07-01 23:53:48 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:48 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:53:49 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:53:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:49 --> Total execution time: 0.6533
DEBUG - 2024-07-01 23:53:49 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:49 --> Total execution time: 0.1078
DEBUG - 2024-07-01 23:53:49 --> Total execution time: 0.3093
DEBUG - 2024-07-01 23:53:50 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:53:50 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:53:50 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:51 --> Total execution time: 0.3008
DEBUG - 2024-07-01 23:53:51 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:52 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:52 --> Total execution time: 1.6222
DEBUG - 2024-07-01 23:53:53 --> Total execution time: 0.7824
DEBUG - 2024-07-01 23:53:53 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:53 --> Total execution time: 0.4735
DEBUG - 2024-07-01 23:53:55 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:55 --> Total execution time: 0.2468
DEBUG - 2024-07-01 23:53:55 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:53:55 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:53:55 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:55 --> Total execution time: 0.1824
DEBUG - 2024-07-01 23:53:56 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:53:56 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:53:56 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:56 --> Total execution time: 0.1813
DEBUG - 2024-07-01 23:53:56 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:57 --> Total execution time: 0.1714
DEBUG - 2024-07-01 23:53:59 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:53:59 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:53:59 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:53:59 --> Total execution time: 0.2331
DEBUG - 2024-07-01 23:53:59 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:59 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:59 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:53:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:53:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:53:59 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:54:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:54:00 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:54:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:54:00 --> UTF-8 Support Enabled
ERROR - 2024-07-01 23:54:00 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:54:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:54:00 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:54:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:54:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:54:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:54:00 --> Total execution time: 0.2895
DEBUG - 2024-07-01 23:54:00 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:54:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:54:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:54:00 --> Total execution time: 0.1470
DEBUG - 2024-07-01 23:54:00 --> Total execution time: 0.3697
DEBUG - 2024-07-01 23:54:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:54:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:54:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:54:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:54:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:54:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2024-07-01 23:54:01 --> Severity: Notice --> Undefined index: Token C:\xampp7433\htdocs\app\cso1-api\application\models\Model.php 59
DEBUG - 2024-07-01 23:54:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:54:01 --> Total execution time: 0.3045
DEBUG - 2024-07-01 23:54:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:54:01 --> UTF-8 Support Enabled
DEBUG - 2024-07-01 23:54:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-07-01 23:54:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:54:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2024-07-01 23:54:01 --> Total execution time: 0.1456
DEBUG - 2024-07-01 23:54:01 --> Total execution time: 0.1413
