CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assignto` int(2) NOT NULL DEFAULT '0',
  `name` varchar(40) NOT NULL,
  `link` varchar(40) NOT NULL,
  `pos` int(2) NOT NULL DEFAULT '0',
  `auth` int(1) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'main',
  `show` int(1) NOT NULL DEFAULT '1',
  `active` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Daten für Tabelle `menu`
--

INSERT INTO `menu` (`id`, `assignto`, `name`, `link`, `pos`, `auth`, `type`, `show`, `active`) VALUES
(1, 0, 'Home', '/', 1, 0, 'main', 1, 1),
(2, 0, 'Menüpunkt 1', '/menue-one', 2, 0, 'main', 1, 1),
(3, 0, 'Menüpunkt 2', '/menue-two', 3, 0, 'main', 1, 1),
(4, 0, 'Topmenü 1', '/topmenue-one', 1, 0, 'top', 1, 1),
(5, 0, 'Topmenü 2', '/topmenue-two', 2, 0, 'top', 1, 1),
(6, 2, 'Submenü 1', '/submenue-one', 1, 0, 'main', 1, 1),
(7, 2, 'Submenü 2', '/submenue-two', 2, 0, 'main', 1, 1);