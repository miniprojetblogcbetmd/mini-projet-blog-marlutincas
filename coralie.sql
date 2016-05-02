-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 02 Mai 2016 à 13:39
-- Version du serveur :  5.7.9
-- Version de PHP :  5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `coralie`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin_coralie`
--

DROP TABLE IF EXISTS `admin_coralie`;
CREATE TABLE IF NOT EXISTS `admin_coralie` (
  `id_Admin` int(11) NOT NULL AUTO_INCREMENT,
  `Loggin_Admin` varchar(150) NOT NULL,
  `Pass_Admin` varchar(100) NOT NULL,
  `Email_Admin` varchar(150) NOT NULL,
  `Niveau_Admin` int(11) NOT NULL,
  PRIMARY KEY (`id_Admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin_coralie`
--

INSERT INTO `admin_coralie` (`id_Admin`, `Loggin_Admin`, `Pass_Admin`, `Email_Admin`, `Niveau_Admin`) VALUES
(1, 'Marion', 'fadeco', 'm.dasriaux@deltatk.net', 1);

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id_Artilce` int(11) NOT NULL AUTO_INCREMENT,
  `Titre_Article` varchar(255) NOT NULL,
  `Resume_Article` longtext,
  `Page_Article` longtext NOT NULL,
  `Niveau_Article` int(11) NOT NULL,
  `Date_Article` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Lien_Article` varchar(255) NOT NULL,
  `Img_Article` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_Artilce`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id_Artilce`, `Titre_Article`, `Resume_Article`, `Page_Article`, `Niveau_Article`, `Date_Article`, `Lien_Article`, `Img_Article`) VALUES
(1, 'test', '<p><em>L''affiche satisfait les organisateurs de la 15&egrave;me &eacute;dition de la Coupe de la Ligue. Ce dimanche, Montpellier, le taulier de l''Arena, 9 fois vainqueur de l''&eacute;preuve accueillera le PSG, leader du championnat de France qui lui, ne l''a jamais remport&eacute;e.</em><br />\r\n&nbsp;<br />\r\n<em>par Yves MICHEL</em></p>', '<p><strong>Le PSG en d&eacute;monstration</strong><br />\r\n<br />\r\nDu courage, c''est &agrave; peu pr&egrave;s tout ce qu''a pu opposer Toulouse dans sa 1&egrave;re demi-finale face &agrave; Paris. En panne d''efficacit&eacute; en attaque et trop tendres en d&eacute;fense, les hommes de Philippe Gardent ont subi la loi d''une &eacute;quipe bien en place, tr&egrave;s fluide dans le jeu et propre dans la finition. Le PSG n''a vraiment pas eu &agrave; forcer son talent pour faire la diff&eacute;rence. En &agrave; peine 5 minutes, la cause &eacute;tait entendue (1-6). L''addition va se cors&eacute;e au fil du temps. Huit buts d''avance &agrave; la 13&egrave;me, douze &agrave; la 23&egrave;me, Toulouse va contenir l''h&eacute;morragie en fin de 1er acte, lorsque le mal &eacute;tait irr&eacute;m&eacute;diablement fait (15-24 &agrave; la pause).&nbsp;Incapable d''&eacute;voluer sur la largeur du terrain, le F&eacute;nix n''a rivalis&eacute; dans aucun secteur de jeu, &quot;Titi&quot; Omeyer se montrant &eacute;galement intraitable sur certaines intentions (9 arr&ecirc;ts lors de ces 30 premi&egrave;res minutes - 15 sur la totalit&eacute;).<br />\r\n<br />\r\nQue dire de l''entame au retour des vestiaires ? Elle se fera sur des bases&nbsp;identiques &agrave; la&nbsp;1&egrave;re mi-temps. Un F&eacute;nix toujours en souffrance dans son jeu plac&eacute;, rendant des ballons de contre &agrave; un adversaire parisien qui ne va pas oublier de les bonifier. Si bien que le trou d&eacute;j&agrave; creus&eacute; &agrave; la pause, va prendre des allures d''un foss&eacute; impossible &agrave; combler (19-33 &agrave; la 40&egrave;me et seize buts d''&eacute;cart huit minutes plus tard). Malgr&eacute; un bon Maxime Gilbert qui sera le seul c&ocirc;t&eacute; toulousain &agrave; sortir la t&ecirc;te de l''eau, la mainmise du PSG va se confirmer et se maintenir jusqu''&agrave; la fin (31-45).&nbsp;<em>&laquo; On &eacute;tait venu pour prendre du plaisir et surtout ne pas passer pour des abrutis, on s&rsquo;est bien fait chier et on est pass&eacute; pour des cons,</em> analysera sans nuance <strong>Valentin Porte</strong> au micro de beIN. <em>Par rapport &agrave; ce qu&rsquo;on a produit, c&rsquo;est une honte pour nous, pour le public, pour tout le monde. C&rsquo;est s&ucirc;r que Paris a &eacute;t&eacute; monstrueux mais nous, nous avons &eacute;t&eacute; des spectateurs.&raquo;</em>&nbsp; M&ecirc;me si Paris &eacute;tait donn&eacute; favori, Toulouse a jou&eacute; &agrave; l''&eacute;conomie notamment en 1&egrave;re p&eacute;riode, souvent &agrave; contretemps. Et comme si la correction au tableau d''affichage ne suffisait pas,&nbsp;R&eacute;mi Calvel&nbsp;coupable dans les 30 derni&egrave;res secondes d''une agression aussi idiote que dangereuse sur Jeffrey M''Tima a &eacute;cop&eacute; d''un carton rouge amplement m&eacute;rit&eacute; et qui pourrait avoir quelques cons&eacute;quences en commission de discipline.<br />\r\n<br />\r\nPour le PSG, tout est b&eacute;n&eacute;fice,&nbsp;&quot;Noka&quot; Serdarusic a fait tourner l''ensemble de son effectif qui &agrave; l''image de Luc Abalo et&nbsp;de Mikkel Hansen (8 buts chacun) a r&eacute;pondu pr&eacute;sent et le pronostic lui sera encore favorable ce dimanche en finale contre Montpellier (&agrave; l''Ar&eacute;na de Montpellier &agrave; 16h00 <strong>sur beIN Sports 3</strong>).<br />\r\n&nbsp;</p>', 1, '2016-03-16 00:00:00', 'http://www.google.fr', 'edf.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_Client` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Client` varchar(150) NOT NULL,
  `Prenom_Client` varchar(150) DEFAULT NULL,
  `Email_Client` varchar(150) NOT NULL,
  `Ville_Client` varchar(150) DEFAULT NULL,
  `Password_Client` varchar(100) NOT NULL,
  `Newsletter_Client` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_Client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `Id_Commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Client` int(11) NOT NULL,
  `Id_Article` int(11) NOT NULL,
  `Texte_Commentaire` longtext NOT NULL,
  `Publication_Com` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id_Commentaire`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `page_html`
--

DROP TABLE IF EXISTS `page_html`;
CREATE TABLE IF NOT EXISTS `page_html` (
  `id_html` int(11) NOT NULL AUTO_INCREMENT,
  `Titre_HTML` varchar(255) NOT NULL,
  `Date_HTML` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Corps_HTML` longtext NOT NULL,
  PRIMARY KEY (`id_html`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `page_html`
--

INSERT INTO `page_html` (`id_html`, `Titre_HTML`, `Date_HTML`, `Corps_HTML`) VALUES
(1, 'Test', '2016-03-16 00:00:00', '<div class="titles" style="padding: 3px;">CDLL M: PSG - Montpellier, l''affiche r&ecirc;v&eacute;e d''une finale<br />\r\n<a class="ldatas" href="http://www.handzone.net/asp.net/main.news/news.aspx?month=3&amp;year=2016">12 Mars 2016</a> | <a class="ldatas" href="http://www.handzone.net/asp.net/main.news/news.aspx?section=41">France</a> &amp;gt; <a class="ldatas" href="http://www.handzone.net/asp.net/main.news/news.aspx?section=18">Coupe LNH</a></div>\r\n\r\n<div style="padding: 3px;">\r\n<p><em>L''affiche satisfait les organisateurs de la 15&egrave;me &eacute;dition de la Coupe de la Ligue. Ce dimanche, Montpellier, le taulier de l''Arena, 9 fois vainqueur de l''&eacute;preuve accueillera le PSG, leader du championnat de France qui lui, ne l''a jamais remport&eacute;e.</em><br />\r\n&nbsp;<br />\r\n<em>par Yves MICHEL</em><br />\r\n<br />\r\n<strong>Le PSG en d&eacute;monstration</strong><br />\r\n<br />\r\nDu courage, c''est &agrave; peu pr&egrave;s tout ce qu''a pu opposer Toulouse dans sa 1&egrave;re demi-finale face &agrave; Paris. En panne d''efficacit&eacute; en attaque et trop tendres en d&eacute;fense, les hommes de Philippe Gardent ont subi la loi d''une &eacute;quipe bien en place, tr&egrave;s fluide dans le jeu et propre dans la finition. Le PSG n''a vraiment pas eu &agrave; forcer son talent pour faire la diff&eacute;rence. En &agrave; peine 5 minutes, la cause &eacute;tait entendue (1-6). L''addition va se cors&eacute;e au fil du temps. Huit buts d''avance &agrave; la 13&egrave;me, douze &agrave; la 23&egrave;me, Toulouse va contenir l''h&eacute;morragie en fin de 1er acte, lorsque le mal &eacute;tait irr&eacute;m&eacute;diablement fait (15-24 &agrave; la pause).&nbsp;Incapable d''&eacute;voluer sur la largeur du terrain, le F&eacute;nix n''a rivalis&eacute; dans aucun secteur de jeu, &quot;Titi&quot; Omeyer se montrant &eacute;galement intraitable sur certaines intentions (9 arr&ecirc;ts lors de ces 30 premi&egrave;res minutes - 15 sur la totalit&eacute;).<br />\r\n<br />\r\nQue dire de l''entame au retour des vestiaires ? Elle se fera sur des bases&nbsp;identiques &agrave; la&nbsp;1&egrave;re mi-temps. Un F&eacute;nix toujours en souffrance dans son jeu plac&eacute;, rendant des ballons de contre &agrave; un adversaire parisien qui ne va pas oublier de les bonifier. Si bien que le trou d&eacute;j&agrave; creus&eacute; &agrave; la pause, va prendre des allures d''un foss&eacute; impossible &agrave; combler (19-33 &agrave; la 40&egrave;me et seize buts d''&eacute;cart huit minutes plus tard). Malgr&eacute; un bon Maxime Gilbert qui sera le seul c&ocirc;t&eacute; toulousain &agrave; sortir la t&ecirc;te de l''eau, la mainmise du PSG va se confirmer et se maintenir jusqu''&agrave; la fin (31-45).&nbsp;<em>&laquo; On &eacute;tait venu pour prendre du plaisir et surtout ne pas passer pour des abrutis, on s&rsquo;est bien fait chier et on est pass&eacute; pour des cons,</em> analysera sans nuance <strong>Valentin Porte</strong> au micro de beIN. <em>Par rapport &agrave; ce qu&rsquo;on a produit, c&rsquo;est une honte pour nous, pour le public, pour tout le monde. C&rsquo;est s&ucirc;r que Paris a &eacute;t&eacute; monstrueux mais nous, nous avons &eacute;t&eacute; des spectateurs.&raquo;</em>&nbsp; M&ecirc;me si Paris &eacute;tait donn&eacute; favori, Toulouse a jou&eacute; &agrave; l''&eacute;conomie notamment en 1&egrave;re p&eacute;riode, souvent &agrave; contretemps. Et comme si la correction au tableau d''affichage ne suffisait pas,&nbsp;R&eacute;mi Calvel&nbsp;coupable dans les 30 derni&egrave;res secondes d''une agression aussi idiote que dangereuse sur Jeffrey M''Tima a &eacute;cop&eacute; d''un carton rouge amplement m&eacute;rit&eacute; et qui pourrait avoir quelques cons&eacute;quences en commission de discipline.<br />\r\n<br />\r\nPour le PSG, tout est b&eacute;n&eacute;fice,&nbsp;&quot;Noka&quot; Serdarusic a fait tourner l''ensemble de son effectif qui &agrave; l''image de Luc Abalo et&nbsp;de Mikkel Hansen (8 buts chacun) a r&eacute;pondu pr&eacute;sent et le pronostic lui sera encore favorable ce dimanche en finale contre Montpellier (&agrave; l''Ar&eacute;na de Montpellier &agrave; 16h00 <strong>sur beIN Sports 3</strong>).</p>\r\n</div>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
