SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `birth` date NOT NULL,
  `adress` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `inactive` bit(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
  
  INSERT INTO `users` (`id`, `name`, `email`, `password`, `cpf`, `birth`, `adress`, `city`, `country`) VALUES
(1, 'Leonardo Bonkoski', 'teste@gmail.com', 'teste', '42825439832', '1993-07-23', 'Rua Santa Mônica, 1-59', 'Bauru', 'Brazil');

COMMIT;


