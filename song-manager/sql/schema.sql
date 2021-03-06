CREATE TABLE `songs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `text` longtext,
  `alternativeTitles` varchar(1000) DEFAULT '',
  `interpret` varchar(255) DEFAULT '',
  `pageRondoRed` int(11) DEFAULT NULL,
  `pageRondoBlue` int(11) DEFAULT NULL,
  `pageRondoGreen` int(11) DEFAULT NULL,
  `copyrightInfo` text,
  `copyrightContact` varchar(1000) DEFAULT '',
  `copyrightStatusApp` enum('NEW','INPROGRESS','DONE','NO_LICENSE') NOT NULL DEFAULT 'NEW',
  `copyrightStatusBook` enum('NEW','INPROGRESS','DONE','NO_LICENSE') NOT NULL DEFAULT 'NEW',
  `license` enum('UNKNOWN','FREE','LICENSED','LICENSED_BOOK_ONLY') NOT NULL DEFAULT 'UNKNOWN',
  `license_type` enum('UNKNOWN','ONE_TIME','ANNUAL') NOT NULL DEFAULT 'UNKNOWN',
  `comments` text,
  `status` enum('NEW','INPROGRESS','DONE') NOT NULL DEFAULT 'NEW',
  `updated` int(11) DEFAULT NULL,
  `rawImage` longblob,
  `rawXML` longblob,
  `rawSIB` longblob,
  `rawNotesPDF` longblob,
  `rawNotesPNG` longblob,
  `rawMidi` longblob,
  `rawCopyrightPDF` longblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;