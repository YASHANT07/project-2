

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `drinks` (
  `d_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `drinks` (`d_id`, `name`, `description`, `price`, `image`) VALUES
(1, 'Virgin cocktail', '', '32', 'sd1.png'),
(2, 'Mix Fruit Juice', '', '27', 'sd2.png'),
(3, 'Blueberry Mojito', '', '11', 'sd3.png');



CREATE TABLE `orders` (
  `o_id` int(11) NOT NULL,
  `u_id` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `drinks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `orders` (`o_id`, `u_id`, `fname`, `lname`, `email`, `total`, `drinks`) VALUES
(1, '1', 'Mike', 'Tyson', 'Tyson@gmail.com', '128', '{\"1\":4}');



CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `users` (`u_id`, `fname`, `lname`, `email`, `password`, `type`) VALUES
(1, 'Mike', 'Tyson', 'Tyson@gmail.com', '7815696ecbf1c96e6894b779456d330e', 'admin');


--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);


--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);


--
ALTER TABLE `drinks`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--

--
ALTER TABLE `orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--

--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;