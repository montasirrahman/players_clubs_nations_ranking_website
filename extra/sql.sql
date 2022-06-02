CREATE TABLE `nation` (
  `id` int(11) NOT NULL,
  `ranking` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `market_value` varchar(100) NOT NULL,
  `point` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `nation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ranking` (`ranking`);


ALTER TABLE `nation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;