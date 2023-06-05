

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `querylog_tbl` (
  `query` text NOT NULL,
  `executedTime` varchar(50) NOT NULL,
  `timeTaken` varchar(50) NOT NULL,
  `executedBy` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


COMMIT;


