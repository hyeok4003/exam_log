--データベースを削除する
DROP DATABASE IF EXISTS `exam_log`;
--データベースを作成する
CREATE DATABASE IF NOT EXISTS `exam_log`
--データベースを選択
USE `exam_log`;

--テーブルを削除する
DROP TABLE IF EXISTS `exam_log`;
--テーブルを作成する
CREATE TABLE IF NOT EXISTS `exam_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自動番号付与(AI)',
  `crnt_date` datetime NOT NULL COMMENT 'YYYY-MM-DD HH:MM:SS刑データ',
  `todohuken` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '都道府県データ格納',
  `fname` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '氏名の一番目データ格納',
  `lname` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT '氏名の二番目データ格納',
  `viewcnt` int(11) NOT NULL COMMENT '参加人数データ格納',
  `ip_addr` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ユーザーIP Address格納',
  `referer` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ユーザーReferer格納',
  `usr_agent` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ユーザーAgent格納',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

