CREATE TABLE `civicrm_group_contacts_log` (
     `id` int unsigned NOT NULL AUTO_INCREMENT  ,
     `groupid` int unsigned    COMMENT 'FK to Group',
     `contactid` int unsigned    COMMENT 'FK to Contact',
     `action` varchar(10) NOT NULL   ,
     `createdat` timestamp NOT NULL  DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, PRIMARY KEY (`id`),
     CONSTRAINT FK_civicrm_groupcontactslog_contactid FOREIGN KEY (`contactid`) REFERENCES `civicrm_contact`(`id`) ON DELETE CASCADE,          CONSTRAINT FK_civicrm_groupcontactslog_groupid FOREIGN KEY (`groupid`) REFERENCES `civicrm_group`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;