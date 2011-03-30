#
# Table structure for table 'tx_podcast_chanels'
#
CREATE TABLE tx_podcast_chanels (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	title tinytext,
	subtitle tinytext,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);