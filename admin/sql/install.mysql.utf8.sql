DROP TABLE IF EXISTS `#__students`;
 
CREATE TABLE IF NOT EXISTS `#__students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `LastName` varchar(255),
  `FirstName` varchar(255),
  `ParentId` varchar(255),
  `Grade` tinyint(2),
  `ts` timestamp NOT NULL default CURRENT_TIMESTAMP,
   PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
