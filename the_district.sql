-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 03 avr. 2024 à 09:40
-- Version du serveur : 11.3.2-MariaDB-1:11.3.2+maria~ubu2204
-- Version de PHP : 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `the_district`
--

-- --------------------------------------------------------

--
-- Structure de la table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES
(1, 'Alice Johnson', 'alice@example.com', '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq'),
(2, 'Bob Smith', 'bob@example.com', '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq'),
(3, 'Emily Brown', 'emily@example.com', '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq'),
(4, 'David Wilson', 'david@example.com', '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq'),
(5, 'Sophia Martiniez', 'sophia@example.com', '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq'),
(6, 'Michael Johnson', 'michael@example.com', '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq'),
(7, 'Jessica Miller', 'jessica@example.com', '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq'),
(8, 'Daniel Davis', 'daniel@example.com', '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq'),
(9, 'Olivia Wilson', 'olivia@example.com', '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq'),
(10, 'James Taylor', 'james@example.com', '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq'),
(11, 'Emma Garcia', 'emma@example.com', '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq'),
(12, 'Willian Clark', 'willian@example.com', '$2y$10$6am1aelazku8Ish9Uoqk4eGm9Wc/xv6GTl2xf19anc.emYa4JWcDq'),
(13, 'fab', '$2y$10$siBIeJsn1l8d8zczgAXHOOtRiOJ.etO2AInzZZDrMYqBOHh0oLORq', 'f.beaujois@gmail.com'),
(14, 'fab2', '$2y$10$PQWqt47k1.e9RwxsJu1izOQScVw/slbAbHUWcON0kfnerNxTOAt8W', 'fbezafilfeza@gmail.com'),
(15, 'fab25', '$2y$10$OvFkkmOpCq.ThkOjqlpwquK3fbrBUNjNDLtKyR08Yx005q1Yipw1S', 'fbezafilfeza@gmail.com'),
(16, 'fab2505', '$2y$10$Hm54IIqHT.m3ijJkSzyr5eum5kBK5KKBAyFGAV706tXAg6k7m47UC', 'dvdsvdsa@gmail.com'),
(17, 'gtherh', '$2y$10$8.aHAuqZ2vLjKYbNDHBpeeHxLSIwVP2lP4m2pVAzAqRMfdRsUJduG', 'jju@gmza.com'),
(18, 'gbz', '$2y$10$Gz7EgB.uGR.Y0pXCxRntC.fA8MKJmbcwxYFjGnICJCAoP0FwXF3Qq', 'cc@gmail.com'),
(19, 'cdbvdsvsv', '$2y$10$3pnHd/fdseTzj7NZr8DP/uRWWT8OHSIw3PHO/.osGmTkUgYjhKN2G', 'fdbfdbfdb@gmail.com'),
(20, 'vdvsv', '$2y$10$0sn/JZ4kHd1ss52pzmrIZuRuE18LRa/B.82AuN2mKFCWAu/YPmRWC', 'vdsvdsvsd@gmail.com'),
(21, 'ddsqcdsqcsqc', '$2y$10$8UiiBGd8TBi87YnKWQNQJuXc9z9Tq7uo8ImN4GfPSbjrPpPVj/m.y', 'efefaezfa@gmail.com'),
(22, 'sqcqcsqc', '$2y$10$x7x4284fq..jxwQ5DU0c0urEJA2uxslGvNv2byliefAa1AaxZqV7K', 'csqcsqccs@gmail.com'),
(23, 'sqcqcsqcvdv', '$2y$10$OIeu7CyzUzmo8spPvyvOPOijx.ZN00MAOkOhX.6yONgGmE.YSmd7i', 'csqcsqcdsvdsvcs@gmail.com'),
(24, 'fabrice', '$2y$10$JYJCSUD6SH3pNqh3Nq6oRebGhGZmT3HyhAPn6K1wwodCk/kyX7Dti', 'vdvdsv@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_thumbs` varchar(255) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`, `image`, `image_thumbs`, `active`) VALUES
(4, 'Pizza', 'assets/img/images_the_district/category/pizza_cat.png', 'assets/img/thumbs/images_the_district/category/pizza_cat.png', 'Yes'),
(5, 'Burger', 'assets/img/images_the_district/category/burger_cat.png', 'assets/img/thumbs/images_the_district/category/burger_cat.png', 'Yes'),
(9, 'Wrap', 'assets/img/images_the_district/category/wrap_cat.png', 'assets/img/thumbs/images_the_district/category/wrap_cat.png', 'Yes'),
(10, 'Pasta', 'assets/img/images_the_district/category/pasta_cat.jpg', 'assets/img/thumbs/images_the_district/category/pasta_cat.jpg', 'Yes'),
(11, 'Salade', 'assets/img/images_the_district/category/salade_cat.jpg', 'assets/img/thumbs/images_the_district/category/salade_cat.jpg', 'Yes'),
(12, 'Asian Food', 'assets/img/images_the_district/category/asian_food.jpg', 'assets/img/thumbs/images_the_district/category/asian_food.jpg', 'No'),
(13, 'Sandwichs', 'assets/img/images_the_district/category/sandwich_cat.jpg', 'assets/img/thumbs/images_the_district/category/sandwich_cat.jpg', 'Yes'),
(14, 'Veggie', 'assets/img/images_the_district/category/veggie_cat.jpg', 'assets/img/thumbs/images_the_district/category/veggie_cat.jpg', 'Yes'),
(16, 'Partage', 'assets/img/images_the_district/category/cat_partage.jpg', '', 'No');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `id_plat` int(11) NOT NULL,
  `id_accounts` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `date_commande` datetime NOT NULL,
  `etat` varchar(50) NOT NULL,
  `username` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `adresse_client` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `id_plat`, `id_accounts`, `quantite`, `total`, `date_commande`, `etat`, `username`, `phone`, `email`, `adresse_client`) VALUES
(1, 2, 1, 3, '36.00', '2024-03-04 08:30:00', 'En attente de traitement', 'Alice Johnson', '7894561230', 'alice@example.com', '123 Main Street'),
(2, 4, 2, 2, '26.00', '2024-03-04 09:15:00', 'En cours de livraison', 'Bob Smith', '7418529630', 'bob@example.com', '456 Elm Street'),
(3, 8, 3, 1, '15.00', '2024-03-04 10:00:00', 'Livrée', 'Emily Brown', '7458963210', 'emily@example.com', '789 Oak Avenue'),
(4, 12, 4, 3, '42.00', '2024-03-04 11:45:00', 'En attente de confirmation', 'David Wilson', '7485963210', 'david@example.com', '963 Pine Street'),
(5, 20, 5, 2, '29.00', '2024-03-04 13:20:00', 'En cours de préparation', 'Sophia Martinez', '7412589630', 'sophia@example.com', '258 Cedar Street'),
(6, 6, 6, 4, '56.00', '2024-03-04 14:10:00', 'En attente de traitement', 'Michael Johnson', '7894569630', 'michael@example.com', '753 Maple Street'),
(7, 14, 7, 2, '12.00', '2024-03-04 15:05:00', 'En cours de livraison', 'Jessica Miller', '7458963210', 'jessica@example.com', '852 Walnut Street'),
(8, 16, 8, 1, '14.00', '2024-03-04 16:30:00', 'Livrée', 'Daniel Davis', '7485963210', 'daniel@example.com', '369 Pine Street'),
(9, 22, 9, 3, '40.50', '2024-03-04 17:20:00', 'En attente de confirmation', 'Olivia Wilson', '7412589630', 'olivia@example.com', '963 Cedar Street'),
(10, 24, 10, 2, '24.00', '2024-03-04 18:45:00', 'En cours de préparation', 'James Taylor', '7894569630', 'james@example.com', '753 Maple Street'),
(11, 10, 11, 2, '24.00', '2024-03-04 19:30:00', 'Annulée', 'Emma Garcia', '7412589630', 'emma@example.com', '963 Oak Street'),
(12, 26, 12, 1, '14.00', '2024-03-04 20:15:00', 'Annulée', 'William Clark', '7894569630', 'william@example.com', '753 Pine Street');

-- --------------------------------------------------------

--
-- Structure de la table `plat`
--

CREATE TABLE `plat` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `plat`
--

INSERT INTO `plat` (`id`, `libelle`, `description`, `prix`, `image`, `id_categorie`, `active`) VALUES
(2, 'Classic burger', 'Dégustez le délice intemporel de notre Burger Classique, où chaque bouchée est une symphonie de saveurs parfaitement élaborée. Niché entre deux pains briochés moelleux et toastés se trouve une généreuse portion de steak de bœuf juteux, grillé à la perfection selon votre préférence, offrant un contraste alléchant entre la saveur fumée et la tendreté de la viande.', '12.00', 'assets/img/images_the_district/food/plat_burger_classic.jpg', 5, 'Yes'),
(4, 'burger traditionelle', 'Plongez dans une expérience gustative inoubliable avec notre Burger Traditionnel, un véritable hymne à la simplicité et au plaisir culinaire. Ce chef-d\'œuvre de saveurs réconfortantes commence par un généreux steak de bœuf grillé à la perfection, dégageant des arômes alléchants et une tendreté incomparable à chaque bouchée.', '11.00', 'assets/img/images_the_district/food/plat_burger.jpg', 5, 'Yes'),
(6, 'Giga burger', 'Préparez-vous à une aventure culinaire hors du commun avec notre Giga Burger Épique, une création monumentale conçue pour satisfaire les appétits les plus voraces et éblouir les amateurs de sensations fortes gastronomiques. Ce chef-d\'œuvre culinaire commence par une montagne de tendres steaks de bœuf grillés à la perfection, empilés les uns sur les autres pour former une tour de saveurs inégalée.', '14.00', 'assets/img/images_the_district/food/plat_burger_giga.jpg', 5, 'Yes'),
(8, 'Pizza 4 fromage', 'Plongez dans un tourbillon de fromages exquis avec notre Pizza Quatre Fromages, une création délectable qui séduira les amateurs de fromage les plus exigeants. Sur une base de pâte à pizza artisanale, légère et croustillante, se déploie un festin de fromages fins soigneusement sélectionnés.', '13.00', 'assets/img/images_the_district/food/plat_pizza_fromage.jpg', 4, 'Yes'),
(10, 'Pizza pepperoni', 'Plongez dans l\'essence de l\'Italie avec notre Pizza Pepperoni, une explosion de saveurs audacieuses et épicées qui ravira vos papilles à chaque bouchée. Sur une base de pâte à pizza fraîchement préparée, légère et croustillante, se déploie un festin de saveurs inégalées.', '12.00', 'assets/img/images_the_district/food/plat_pizza_peperoni.jpg', 4, 'Yes'),
(12, 'Pizza hawaienne', 'Laissez-vous transporter vers des rivages ensoleillés avec notre Pizza Hawaïenne, une fusion exotique de saveurs tropicales qui éveillera vos sens à chaque bouchée. Sur une base de pâte à pizza fraîchement préparée, légère et dorée, se marient des ingrédients soigneusement sélectionnés pour créer une expérience culinaire inoubliable.', '14.00', 'assets/img/images_the_district/food/plat_pizza_hawai.jpg', 5, 'Yes'),
(14, 'Epaule d\'Agneau braisée aux Herbes', 'Plongez dans un festin de saveurs méditerranéennes avec notre épaule d\'agneau braisée aux herbes, un plat réconfortant qui éveillera vos sens et éblouira vos convives. Préparée avec soin et amour, cette pièce d\'agneau tendre et juteuse est imprégnée d\'un mélange d\'herbes fraîches et d\'épices parfumées, offrant une explosion de saveurs à chaque bouchée.', '12.00', 'assets/img/images_the_district/food/plat_carnivore_agneau.jpg', 9, 'Yes'),
(16, 'Roti de boeuf aux Herbes', 'Découvrez l\'exquisité de notre Rôti de Bœuf aux Herbes, un plat qui incarne l\'élégance et la simplicité de la cuisine traditionnelle. Ce rôti de bœuf est soigneusement sélectionné, assaisonné avec un mélange d\'herbes fraîches et rôti lentement pour révéler toute sa tendreté et son arôme délicieux.', '14.00', 'assets/img/images_the_district/food/plat_carnivore_roti.jpg', 9, 'Yes'),
(18, 'Steak Frites', 'Dégustez notre savoureux steak accompagné de frites croustillantes. Un classique réconfortant qui ravira vos papilles à chaque bouchée.', '15.00', 'assets/img/images_the_district/food/plat_carnivore_steak.jpg', 9, 'Yes'),
(20, 'Pennes aux Poulet', 'Savourez nos délicieuses pennes accompagnées de tendres morceaux de poulet grillé, le tout enrobé d une sauce tomate maison et saupoudré de parmesan frais. Un plat réconfortant qui saura satisfaire toutes les papilles.', '14.50', 'assets/img/images_the_district/food/plat_pasta_pennepoulet.jpg', 10, 'Yes'),
(22, 'Tagliatelles à la Sauce Tomate', 'Dégustez nos tagliatelles fraîches nappées d une délicieuse sauce tomate maison, relevée d herbes fraîches et d ail. Un plat italien classique qui vous transportera directement en Méditerranée.', '13.50', 'assets/img/images_the_district/food/plat_pasta_tagliatelle.jpg', 10, 'Yes'),
(24, 'Spaghetti à la Sauce Tomate', 'Savourez nos spaghettis al dente enrobés d une sauce tomate maison, préparée avec des tomates mûries au soleil, de l ail, de l huile d olive et des herbes fraîches. Un plat simple mais délicieusement réconfortant.', '12.00', 'assets/img/images_the_district/food/plat_pasta_spaghetti.jpg', 10, 'Yes'),
(26, 'classic Salade', 'Dégustez notre salade fraîche et croquante composée de laitue iceberg, de tomates juteuses, de concombres frais, de carottes râpées et de tranches d\'oignon rouge. Accompagnée d\'une vinaigrette maison légère et parfumée, cette salade est le choix parfait pour une entrée rafraîchissante ou un plat léger.', '11.00', 'assets/img/images_the_district/food/plat_salade_classic.jpg', 11, 'Yes'),
(28, 'Salade au Saumon', 'Savourez notre délicieuse salade au saumon, un mélange équilibré de laitue croquante, d\'épinards frais, de concombres tranchés, d\'oignons rouges et de tomates cerises, accompagné de morceaux de saumon grillé ou fumé. Garnie de câpres et de quartiers de citron pour une touche de fraîcheur, cette salade est sublimée par une vinaigrette à l\'aneth maison.', '13.00', 'assets/img/images_the_district/food/plat_salade_saumon.jpg', 11, 'Yes'),
(30, 'Salade au Poulet', 'Dégustez notre savoureuse salade au poulet, composée de laitue croquante, de tomates juteuses, de concombres frais, d\'avocat crémeux, de maïs doux, et de tranches d\'oignon rouge, le tout agrémenté de morceaux de poulet grillé et assaisonné. Accompagnée d\'une vinaigrette maison légère et parfumée, cette salade est un choix délicieux et équilibré pour un repas satisfaisant.', '14.00', 'assets/img/images_the_district/food/plat_salade_poulet.jpg', 11, 'Yes'),
(32, 'Sushis saumon', 'Savourez nos délicieux sushis au saumon, préparés avec du riz vinaigré et des tranches de saumon frais, roulés dans de l\'algue nori. Chaque bouchée offre un équilibre parfait entre le riz tendre et le saumon fondant, accompagné de wasabi et de sauce soja pour une expérience gustative authentique.', '12.00', 'assets/img/images_the_district/food/plat_sushi_saumon.jpg', 12, 'Yes'),
(34, 'Sushis Assortis', 'Découvrez notre sélection d\'exquis sushis assortis, préparés avec du riz vinaigré et une variété de garnitures savoureuses telles que le saumon, le thon, l\'avocat, le concombre, et bien plus encore. Chaque bouchée offre une explosion de saveurs et une expérience culinaire authentique.', '15.00', 'assets/img/images_the_district/food/plat_sushi_sushi.jpg', 12, 'Yes'),
(36, 'Ramen', 'Dégustez nos délicieux ramen, un plat japonais réconfortant composé de nouilles fraîches, d\'un bouillon savoureux et d\'une variété d\'ingrédients tels que des tranches de porc, des œufs mollets, des légumes frais et des algues nori. Chaque bol est une explosion de saveurs et une expérience culinaire inoubliable.', '14.00', 'assets/img/images_the_district/food/plat_sushi_ramen.jpg', 12, 'Yes'),
(38, '\'Sandwich au Poulet', 'Dégustez notre délicieux sandwich au poulet, composé de blancs de poulet grillés, de laitue croquante, de tomates juteuses et de mayonnaise, le tout enveloppé dans du pain moelleux et doré. Un classique réconfortant qui saura satisfaire vos papilles.', '10.00', 'assets/img/images_the_district/food/plat_sandwich_poulet.jpg', 13, 'Yes'),
(40, 'Tartine avocat', 'Dégustez notre savoureuse tartine à l\'avocat, garnie de tranches d\'avocat mûr, de tomates cerises, de jeunes pousses d\'épinards, et d\'une touche de sel et de poivre. Servie sur du pain grillé, cette tartine est un choix délicieusement léger pour une pause déjeuner ou une collation.', '9.00', 'assets/img/images_the_district/food/plat_sandwich_tartine.jpg', 13, 'Yes'),
(42, 'Wrap', 'Dégustez notre délicieux wrap au poulet, garni de blancs de poulet grillés, de laitue croquante, de tomates fraîches, de fromage râpé et de sauce ranch, le tout enveloppé dans une tortilla de blé moelleuse. Un repas rapide et savoureux pour combler vos envies.', '11.00', 'assets/img/images_the_district/food/plat_sandwich_wrap.jpg', 13, 'Yes'),
(44, 'Pavé de saumon grillé', 'Savourez notre délicieux pavé de saumon grillé, servi avec un accompagnement de votre choix. Le saumon est grillé à la perfection, offrant une texture tendre et savoureuse, avec une légère caramélisation à l\'extérieur. Un choix parfait pour les amateurs de fruits de mer.', '18.00', 'assets/img/images_the_district/food/plat_poisson_saumon.jpg', 14, 'Yes'),
(46, 'Filet de merlu Grillé', 'Dégustez notre succulent filet de merlu grillé, accompagné d\'une garniture de saison. Le merlu est grillé à la perfection, offrant une chair tendre et délicate, avec des arômes subtils de la mer. Un choix parfait pour les amateurs de poisson.', '16.00', 'assets/img/images_the_district/food/plat_poisson_merlu.jpg', 14, 'Yes'),
(48, 'Fish & Chips', 'Dégustez notre délicieux fish & chips, composé de filets de poisson frais, enrobés d\'une pâte croustillante et dorée, accompagnés de frites fraîchement préparées. Servi avec une sauce tartare maison et une tranche de citron, ce plat emblématique de la cuisine britannique est un régal pour les amateurs de fruits de mer.', '14.00', 'assets/img/images_the_district/food/plat_poisson_fish&chips.jpg', 14, 'Yes'),
(50, 'Plateau d\'assortiment Partager', 'Découvrez notre plateau de charcuterie à partager, garni d\'une sélection de délices salés tels que du jambon cru, du saucisson, des terrines, des cornichons, des olives et du fromage. Accompagné de pain frais et de condiments, ce plateau est parfait pour partager un moment convivial entre amis ou en famille.', '18.00', 'assets/img/images_the_district/food/plat_partage_assortiment.jpg', 16, 'Yes'),
(52, 'Assiette de Charcuterie', 'Savourez notre délicieuse assiette de charcuterie, garnie d\'une sélection variée de spécialités charcutières telles que du jambon cru, du saucisson, du pâté, des rillettes et des cornichons. Un assortiment généreux de saveurs salées, parfait pour les amateurs de charcuterie.', '16.00', 'assets/img/images_the_district/food/plat_partage_charcuterie.jpg', 16, 'Yes');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `plat`
--
ALTER TABLE `plat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `plat`
--
ALTER TABLE `plat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;