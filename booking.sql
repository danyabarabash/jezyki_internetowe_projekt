-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Чрв 24 2021 р., 13:46
-- Версія сервера: 10.4.19-MariaDB
-- Версія PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `booking`
--

-- --------------------------------------------------------

--
-- Структура таблиці `accounts`
--

CREATE TABLE `accounts` (
  `id` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`) VALUES
(0, 'admin', '4297f44b13955235245b2497399d7a93'),
(1, 'klient', 'd8578edf8458ce06fbc5bb76a58c5ca4');

-- --------------------------------------------------------

--
-- Структура таблиці `categories`
--

CREATE TABLE `categories` (
  `id` int(255) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(0, 'Summer'),
(1, 'Winter');

-- --------------------------------------------------------

--
-- Структура таблиці `customers`
--

CREATE TABLE `customers` (
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` text NOT NULL,
  `id` int(255) NOT NULL,
  `journey_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `customers`
--

INSERT INTO `customers` (`first_name`, `last_name`, `email`, `id`, `journey_id`) VALUES
('Barabash ', 'Danyil ', 'joker@gmail.com', 15, 0);

-- --------------------------------------------------------

--
-- Структура таблиці `journey`
--

CREATE TABLE `journey` (
  `id` int(255) NOT NULL,
  `name` varchar(512) NOT NULL,
  `price` int(255) NOT NULL,
  `season` int(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `flytime` datetime DEFAULT NULL,
  `duration` text NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `journey`
--

INSERT INTO `journey` (`id`, `name`, `price`, `season`, `description`, `flytime`, `duration`, `date`) VALUES
(0, 'Warszawa', 250, 0, 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. ', '2020-10-23 14:54:06', '2h30min', '2021-06-03'),
(1, 'London', 470, 0, 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. If the border of the metropolis is well defined, its internal structure is immensely complicated and defies description. Indeed, London’s defining characteristic is an absence of overall form. It is physically a polycentric city, with many core districts and no clear hierarchy among them. London has at least two (and sometimes many more) of everything: cities, mayors, dioceses, cathedrals, chambers of commerce, police forces, opera houses, orchestras, and universities. In every aspect it functions as a compound or confederal metropolis.', '2021-04-13 13:02:38', '4h55min', '2021-06-11'),
(2, 'Paris', 300, 1, 'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. \"What\'s happened to me?\" he thought. It wasn\'t a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather.\r\n\r\n', '2021-06-17 15:03:04', '2h05min', '2020-11-11'),
(3, 'New-York', 500, 1, 'New York is the most ethnically diverse, religiously varied, commercially driven, famously congested, and, in the eyes of many, the most attractive urban centre in the country. No other city has contributed more images to the collective consciousness of Americans: Wall Street means finance, Broadway is synonymous with theatre, Fifth Avenue is automatically paired with shopping, Madison Avenue means the advertising industry, Greenwich Village connotes bohemian lifestyles, Seventh Avenue signifies fashion, Tammany Hall defines machine politics, and Harlem evokes images of the Jazz Age, African American aspirations, and slums. The word tenement brings to mind both the miseries of urban life and the upward mobility of striving immigrant masses. New York has more Jews than Tel Aviv, more Irish than Dublin, more Italians than Naples, and more Puerto Ricans than San Juan. Its symbol is the Statue of Liberty, but the metropolis is itself an icon, the arena in which Emma Lazarus’s “tempest-tost” people of every nation are transformed into Americans—and if they remain in the city, they become New Yorkers.', '2021-06-30 01:03:14', '5h05min', '2021-09-09'),
(4, 'Amsterdam', 325, 0, 'Amsterdam was founded at the Amstel, that was dammed to control flooding, and the city\'s name derives from the Amstel dam. Originating as a small fishing village in the late 12th century, Amsterdam became one of the most important ports in the world during the Dutch Golden Age of the 17th century, and became the leading centre for finance and trade. In the 19th and 20th centuries, the city expanded and many new neighbourhoods and suburbs were planned and built. The 17th-century canals of Amsterdam and the 19–20th century Defence Line of Amsterdam are on the UNESCO World Heritage List. Sloten, annexed in 1921 by the municipality of Amsterdam, is the oldest part of the city, dating to the 9th century.', '2020-11-10 04:03:21', '2h25min', '2021-08-11'),
(5, 'Kyiv', 260, 0, 'Kyiv is one of the most beautiful cities of the world that picturesquely spreads on the Dnipro river hills. As others old cities Kyiv has no exact date of foundation. According to the legend, Kyiv was founded more than 1,500 years ago by three brothers Kyi, Schek, Khoryv and their sister Lybid. The city was named after the oldest brother Kyi. In the 9th century Kyiv became the capital of the Ancient Rus. The territory of this independent state stretched out from the Baltic Sea in the North to the Black Sea in the South and from Volga River in the East to the Carpathians Mountains in the West. Kyiv is often referred as \"the mother of all cities\" by Russians and Ukrainians and as a cradle of Slavonic civilization.', '2021-06-08 12:18:08', '2h15min', '2022-03-31'),
(6, 'Vienna', 370, 0, 'Modern Vienna has undergone several historical incarnations. From 1558 to 1918 it was an imperial city—until 1806 the seat of the Holy Roman Empire and then the capital of the Austro-Hungarian Empire. In 1918 it became the capital of the truncated, landlocked central European country that emerged from World War I as a republic. From 1938 to 1945 Austria was a part of Adolf Hitler’s “Greater” Germany, and Vienna became “Greater” Vienna, reflecting the Nazi revision of the city limits. In the decade following World War II, Austria was occupied by British, French, American, and Soviet forces, and Vienna was divided into five zones, including an international zone, covering the Innere Stadt (“Inner City”). In 1955 the State Treaty, by which the country regained independence, was signed with the four occupying powers, and Vienna became once again the capital of a sovereign Austria. Vienna is among the least spoiled of the great old western European capitals. Its central core, the Innere Stadt, is easily manageable by foot and public transportation.', '2021-04-04 23:18:08', '2h30min', '2022-03-31'),
(7, 'Barcelona', 410, 0, 'Catalonia and Barcelona has become one of the first tourist destination of Spain, it has everything to please the majority of visitors : with a history among the oldest in Europe, a capital, Barcelona, which never sleeps and an inland full of charm not to forget beautiful beaches in La Costa Brava. The variety of artistic treasures, the Romanesque churches and the great names in modern art and architecture , Dali, Gaudi, Miro, Picasso ... Barcelona sited between the sea and the mountains, has found a formidable balance: a foot in the traditional things and the other in the avant-garde. Barcelona has the reputation of being the most cosmopolitan, modern and avant-garde city in Spain and it has renewed for the 1992 Olympic Games. While in Barcelona take a little time to visit Catalonia: Costa Brava owes its name of \"wild coast\" to the uniqueness of the sudden encounter between mountain and sea. Nature, climate and history, the picturesque of its ports and certain villages have been enough to have a worldwide reputation. Costa Dorada , in the south of Barcelona, it is the color of gold, luminous, being in the maritime littoral the reason of its name \"Costa Dorada\" (Golden Coast).', '2021-01-26 06:18:08', '3h08min', '2022-01-12'),
(8, 'Milan', 393, 1, 'One of the world\'s fashion capitals, Milan is often overlooked by tourists who flock to Rome, Florence, and Venice. But this gem of a city has a lot to offer, including the iconic Duomo di Milano, the world\'s largest—and perhaps most stunning—Gothic cathedral; the exquisite mosaics and glass vaults of Galleria Vittorio Emanuelle II; and impressive museums, such as the Pinacoteca di Brera. There\'s also trendy restaurants, gorgeous cafes, and the longstanding Milanese tradition of aperitivo. No trip would be complete without some serious shopping, and there are multitude of options. In the evening, grab tickets to a performance at the opulent La Scala opera house. The fact that Milan is at a distance from much of the rest of Italy, that it is peripheral in a geographic sense, does not explain its position of “second city,” a position it has always vainly fought. Indeed, some of the greatest European capitals are peripheral in this sense. Rather, Milan’s role was the consequence of the immense historical importance and the enormous accumulation of myths and symbols that conferred on Milan’s antagonist, Rome, an inevitable prestige. During the Risorgimento, the 19th-century movement for Italian unification, Rome became the heart of a future anticipated in the collective fantasies of the Italian people.', '2021-08-25 11:18:08', '2h26min', '2021-08-09');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Індекси таблиці `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `journey_id` (`journey_id`);

--
-- Індекси таблиці `journey`
--
ALTER TABLE `journey`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `season` (`season`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`journey_id`) REFERENCES `journey` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `journey`
--
ALTER TABLE `journey`
  ADD CONSTRAINT `journey_ibfk_1` FOREIGN KEY (`season`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
