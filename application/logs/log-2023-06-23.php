<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2023-06-23 05:33:47 --> UTF-8 Support Enabled
DEBUG - 2023-06-23 05:33:47 --> No URI present. Default controller set.
DEBUG - 2023-06-23 05:33:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-23 05:33:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2023-06-23 05:33:47 --> Total execution time: 0.1675
DEBUG - 2023-06-23 05:34:10 --> UTF-8 Support Enabled
DEBUG - 2023-06-23 05:34:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-23 05:34:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2023-06-23 10:34:10 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Incorrect syntax near 'i'. - Invalid query: SELECT p.id, p.endDate,
        i.id as 'detailId', p.status, i.itemId, i.specialPrice, i.status as 'detailStatus'
        from cso1_promotionItem i 
        join cso1_promotion as p on p.id = i.promotionId
        i.status = 1 or p.status = 1  
DEBUG - 2023-06-23 05:34:29 --> UTF-8 Support Enabled
DEBUG - 2023-06-23 05:34:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-23 05:34:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2023-06-23 10:34:37 --> Total execution time: 7.6822
