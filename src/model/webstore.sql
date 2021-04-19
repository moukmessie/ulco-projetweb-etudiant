-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 16 avr. 2021 à 18:48
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `webstore`
--

-- --------------------------------------------------------

--
-- Structure de la table `account`
--

CREATE TABLE `account` (
  `id` int(10) NOT NULL,
  `firstname` varchar(80) NOT NULL,
  `lastname` varchar(80) NOT NULL,
  `mail` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `account`
--

INSERT INTO `account` (`id`, `firstname`, `lastname`, `mail`, `password`) VALUES
(13, 'tony', 'gandalf', 'tony@gmail.com', '$2y$10$3Bbp/DZLWdk1odO53hIo3u8mDqrT4DxNtgpKs0WvJFEzPP8Ji4q0y'),
(14, 'deb', 'gandalf', 'deb@gmail.com', '$2y$10$M57oDPqzQEOKP/I5S1H2IeH0jcYom0XWwquCfX2Hb5HaB/L7.0mrC');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Creator Expert'),
(2, 'Technic'),
(3, 'Architecture');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL,
  `content` text NOT NULL,
  `id_product` int(10) NOT NULL,
  `id_account` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `content`, `id_product`, `id_account`, `date`) VALUES
(6, 'Voila un bon cadeau d\'anniversaire ', 5, 13, '2021-04-16'),
(7, 'je valide', 5, 13, '2021-04-16'),
(8, 'vive la liberté', 9, 13, '2021-04-16'),
(9, 'vive la liberté', 9, 13, '2021-04-16'),
(10, 'Nice', 2, 13, '2021-04-16'),
(11, 'waouuh', 8, 13, '2021-04-16'),
(12, 'waouuh', 8, 13, '2021-04-16'),
(13, 'la bete', 6, 13, '2021-04-16'),
(14, 'la bete', 6, 13, '2021-04-16'),
(15, 'pp ', 4, 13, '2021-04-16');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `name` varchar(80) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(80) NOT NULL,
  `image_alt1` varchar(80) NOT NULL,
  `image_alt2` varchar(80) NOT NULL,
  `image_alt3` varchar(80) NOT NULL,
  `spec` text NOT NULL,
  `category` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `image_alt1`, `image_alt2`, `image_alt3`, `spec`, `category`) VALUES
(1, 'Le Colisée', 500, 'product_01.jpg', 'product_01_alt1.jpg', 'product_01_alt2.jpg', 'product_01_alt3.jpg', '<p>Aucun lieu sur Terre n\'égale la majesté Colisée de Rome. Les constructeurs trouveront dans la construction du plus gros modèle LEGO® à ce jour (en novembre 2020) l\'occasion d\'échapper à la routine quotidienne. Ce modèle monumental du Colisée de 9 036 pièces représente de manière détaillée chaque partie de la célèbre structure. Les détails authentiques mettent en valeur la façade nord du mur extérieur et ses arches emblématiques. Le modèle comporte 3 étages parés de colonnes d\'ordres dorique, ionique et corinthien, tandis que l\'attique est orné de pilastres corinthiens.</p> <h3>Une pièce impressionnante à exposer</h3> <p>Le Colisée LEGO (10276) repose sur un support ovale qui permet d\'observer le modèle sous tous les angles. C\'est l\'un des plus grands modèles LEGO jamais créés, mais il peut néanmoins facilement être pris entre les mains pour observer les détails sous tous les angles à travers les arches.</p> <h3>Un projet de construction à savourer</h3> <p>Le Colisée fait partie d\'une collection de modèles LEGO pour les adultes passionnés de belles architectures et de conceptions soignées. Il constitue également un formidable cadeau pour les amateurs d\'architecture et les fans de LEGO.</p> <ul> <li>Le modèle en briques du monumental Colisée prend vie avec le kit LEGO® Le Colisée (10276), une expérience de construction fascinante et enrichissante pour adultes.</li> <li>Avec pas moins de 9 036 pièces, ce modèle du Colisée est le plus grand set LEGO® existant (en novembre 2020) et offre des heures de détente aux adultes passionnés par la construction de sets.</li> <li>Tous les passionnés de modèles architecturaux vont apprécier les détails étonnants que renferme ce souvenir du Colisée. S\'élevant sur 3 étages, le modèle est paré de colonnes d\'ordres dorique, ionique et corinthien.</li> <li>Ce set de construction constitue un excellent choix pour ceux qui sont à la recherche d\'un cadeau spécial pour les amateurs d\'architecture ou les passionnés d\'histoire. Il offre des heures d\'expérience de construction inoubliables et un superbe modèle du Colisée à exposer.</li> <li>Ce modèle architectural du Colisée mesure plus de 27 cm de haut, 52 cm de large et 59 cm de profondeur. Composé de 9 036 pièces, c\'est l\'un des plus grands sets LEGO® au monde, mais il est facile à soulever et à faire pivoter.</li> <li>Les Romains n\'avaient pas besoin de piles – ce modèle non plus ! Cette reconstitution du Colisée fonctionne grâce à la puissance de l\'imagination, et ne nécessite pas de piles.</li> <li>Ce modèle est fourni avec des instructions de montage de qualité et des détails inspirants relatifs à sa conception et son histoire.</li> <li>Le modèle fait partie d\'une série de sets de construction LEGO® inspirants, conçus pour les fans de construction LEGO et les amateurs de loisirs créatifs qui apprécient les beaux designs, les belles architectures et les modèles riches en détails.</li> <li>Les briques de construction LEGO® sont conformes aux normes industrielles les plus élevées ; elles sont compatibles entre elles, s\'assemblent et se séparent facilement, et cela depuis 1958.</li> <li>Les briques et les pièces LEGO® font l\'objet de tests rigoureux afin de s\'assurer que chaque set de construction est conforme aux normes de sécurité et de qualité les plus élevées. C\'est la garantie que ce modèle architectural est conçu pour durer.</li> </ul>', 1),
(2, 'Les montagnes russes', 350, 'product_02.jpg', 'product_02_alt1.jpg', 'product_02_alt2.jpg', 'product_02_alt3.jpg', '<p>Cet ensemble sensationnel LEGO® Creator Expert Les montagnes russes offre de la vitesse, des sensations fortes et de la joie. Ce modèle avec une rampe de montée mécanique entièrement fonctionnelle comprend 2 trains et de nombreuses fonctions authentiques. Parmi elles un guichet, des stands à barbe à papa et à nourriture, une toise et une station de départ couverte avec des barrières qui s\'ouvrent et une console de commande. Les barres de sécurité des passagers dans les wagons peuvent s\'abaisser et il suffit de relâcher le frein pour envoyer le train au pied de la première montée. La crémaillère peut enfin être actionnée et la gravité fait le reste du travail tandis que les wagons négocient les bosses et les virages du circuit à toute allure. Ces montagnes russes peuvent être améliorée avec LEGO Power Functions en motorisant la crémaillère, ou avec LEGO BOOST pour ajouter un détecteur de mouvement et des effets sonores réalistes ! Cet incroyable jouet de collection a été conçu pour offrir une expérience de construction stimulante et satisfaisante avec une touche de nostalgie et de charme. Inclut 11 figurines.</p> <ul> <li>Inclut 11 figurines : un vendeur de barbe à papa, 2 animateurs de manège, 2 grands-parents avec leur petite-fille et 5 passagers. 8 de ces figurines ont des têtes réversibles pour exprimer différentes émotions.</li> <li>Ce modèle de montagnes russes doté d\'une rampe de montée mécanique entièrement fonctionnelle comprend un panneau en briques, une console de commande, 2 trains composés chacun de 3 wagons avec des roues à friction faible et un circuit de 44 pièces composé de 7 éléments de rail différents.</li> <li>Comprend aussi un guichet, une fontaine, un stand de barbe à papa, un stand de nourriture, une zone d\'attente avec un banc, un élément de caméra et une mare avec une figurine de grenouille.</li> <li>Des tickets sont disponibles au guichet.</li> <li>Pas de triche à la toise : l\'employé du manège a un mètre avec lui pour mesurer les passagers !</li> <li>Les barres de sécurité sont à abaisser pour éviter que les passagers ne tombent des wagons.</li> <li>Il suffit de relâcher le frein pour envoyer les wagons au pied de la première montée.</li> <li>La crémaillère peut être activée pour hisser les wagons du train au sommet de la première descente.</li> <li>Les rails peuvent être déplacés pour lancer un deuxième train.</li> <li>Des boissons rafraîchissantes sont proposées au stand de nourriture.</li> <li>L\'appareil photo capture les plus beaux sourires !</li> <li>Ces montagnes russes peuvent être améliorées avec LEGO® Power Functions en motorisant la crémaillère, ou avec LEGO BOOST pour ajouter un déclencheur automatique et des effets sonores réalistes !</li> <li>Cet ensemble incroyable comprend plus de 4 120 pièces.</li> <li>Les éléments décoratifs incluent un billet, de l\'argent, des dalles fléchées, un manomètre, un clavier numérique et une console de commande.</li> <li>Les nouveaux éléments décoratifs prévus pour juin 2018 incluent une portion de rails inclinée de 2x8x6, une brique courbée 1x2x1, et des éléments de feuilles, de tiges et de fleurs.</li> <li>Les autres éléments incluent une toise et 2 barbes à papa.</li> <li>Ce modèle peut être combiné avec l\'ensemble LEGO® Creator Expert Le manège (10257) pour une obtenir une fête forraine.</li> <li>Motorise Les montagnes russes avec le moteur moyen LEGO Power Functions 8883 et le boîtier à piles AAA 88000 (non inclus).</li> <li>Mesure plus de 53 cm de haut, 88 cm de large et 41 cm de profondeur.</li> </ul>', 1),
(3, 'Old Trafford - Manchester United', 270, 'product_03.jpg', 'product_03_alt1.jpg', 'product_03_alt2.jpg', 'product_03_alt3.jpg', '<p>Les fans de Manchester United vont adorer construire ce grand modèle LEGO® du stade Old Trafford (10272), afin de prouver leur passion pour l\'un des clubs de football les plus célèbres au monde. La construction de ce modèle de stade de football LEGO représente un défi amusant qui résulte en une pièce d\'exposition spectaculaire.</p> <h3>Le cadeau ultime pour les fans de Manchester United</h3> <p>Les fans de Manchester United pourront exposer cette réplique du stade Old Trafford à la maison ou au bureau. Nouveauté de février 2020, ce set LEGO® Creator sur le thème du sport coïncide avec le 110e anniversaire du stade. Ce kit de construction s\'adresse aux adultes et comporte plusieurs détails évocateurs, notamment le tunnel des joueurs et la statue de la United Trinity.</p> <h3>Donner vie à la passion avec les sets LEGO® avancés !</h3> <p>Les sets de construction LEGO® Creator Expert permettent aux adultes de construire des modèles qui reflètent certaines de leurs plus grandes passions, notamment des voitures, des bâtiments et des stades. Une fois l\'expérience de construction amusante et ambitieuse terminée, ces modèles de collection en briques constituent de superbes pièces d\'exposition pour la maison ou le bureau.</p> <ul> <li>Un set de construction spectaculaire destiné aux adultes, pour créer un modèle détaillé du stade Old Trafford. Le cadeau idéal pour les fans de Manchester United qui veulent afficher leur soutien indéfectible pour le club en exposant ce stade de football LEGO®.</li> <li>Une réplique au 1:600 du stade Old Trafford. Ce modèle de stade de football LEGO® détaillé est un projet amusant et enrichissant qui permet aux fans de revivre leurs plus beaux souvenirs avec le club Manchester United.</li> <li>Première occasion de construire une réplique du stade Old Trafford de Manchester United en briques. Ce stade de football LEGO® constitue une superbe pièce d\'exposition pour la maison ou le bureau.</li> <li>Ce grand set de LEGO® de 3 898 pièces pour adultes sur le thème du football est un cadeau unique pour les fans de Manchester United. Il permet aux constructeurs de s\'évader avec un projet de longue haleine gratifiant, et d\'afficher leur passion pour leur club.</li> <li>Le modèle LEGO du stade de football Old Trafford de Manchester United mesure 18 cm de haut, 47 cm de long et 39 cm de large. Des dimensions idéales pour inclure des détails authentiques, notamment le tunnel des joueurs et la statue de Sir Alex Ferguson.</li> <li>Pas besoin de piles pour ce set de construction avancé ; le coup de sifflet final ne retentira donc jamais dans ce stade de football LEGO®.</li> <li>Ce set LEGO® propose une expérience de construction ultime ainsi que des instructions étape par étape faciles à suivre, afin de guider les constructeurs tout au long du processus d\'assemblage enrichissant.</li> <li>Les sets de construction LEGO® Creator Expert permettent aux adultes de construire des modèles basés sur certaines de leurs plus grandes passions, notamment des voitures, des bâtiments et des stades.</li> <li>Les briques LEGO® sont conformes aux normes industrielles les plus élevées, elles sont donc toujours uniformes et compatibles entre elles et peuvent toujours être facilement séparées, et cela depuis plus de 60 ans.</li> <li>LEGO® est synonyme de sécurité. Toutes les briques et pièces ont été testées sans relâche et répondent aux normes de sécurité et de qualité les plus élevées au monde.</li> </ul>', 1),
(4, 'Porsche 911', 140, 'product_04.jpg', 'product_04_alt1.jpg', 'product_04_alt2.jpg', 'product_04_alt3.jpg', '<p>Célébrez le style exclusif de Porsche avec ce fabuleux défi de construction et créez votre propre voiture de collection avec le set LEGO® Porsche 911 (10295). Choisissez entre le modèle Turbo et son moteur à turbocompresseur, ou le modèle Targa avec son arceau iconique et son toit amovible qui se range dans le coffre avant.</p> <h3>Construisez votre Porsche 911 préférée</h3> <p>Turbo ou Targa, les deux modèles recréent les détails emblématiques de la Porsche 911, tels que les pare-chocs avant et arrière, les phares ronds, l\'insigne imprimé et les plaques minéralogiques. L\'intérieur est tout aussi impressionnant avec une direction fonctionnelle, un levier de vitesse, un frein à main, des sièges inclinables et un habitacle cannelle et savane.</p> <h3>Un projet pour vous</h3> <p>La Porsche 911 LEGO fait partie d\'une série de sets pour adultes qui invitent à s\'évader du quotidien en construisant, par exemple, des voitures de collection mythiques ou des bâtiments détaillés.</p> <ul> <li>Échappez au quotidien avec ce fabuleux projet de construction. La maquette à construire LEGO® Porsche 911 (10295) est idéale pour les adultes en quête de nouveaux défis à relever.</li> <li>Découvrez toutes les caractéristiques de la Porsche 911, dont le moteur 6 cylindres à refroidissement par air monté à l\'arrière, la direction opérationnelle, le levier de vitesse, le frein à main et les sièges inclinables.</li> <li>Quel modèle choisirez-vous de construire ? Le modèle Turbo, avec son moteur à turbocompresseur, ou le modèle Targa, avec son toit amovible qui se range dans le coffre avant ?</li> <li>La réplique de la Porsche 911 Turbo présente un large essieu arrière, un aileron intégré et un moteur à turbocompresseur avec refroidisseur.</li> <li>La réplique de la Porsche 911 Targa inclut un toit amovible qui se range dans le coffre avant et l\'emblématique arceau Targa avec lunette arrière, derrière le conducteur.</li> <li>Conçu spécialement pour les fans de voitures mythiques et les passionnés de Porsche, ce set de construction sophistiqué inclut des instructions de montage de qualité et des détails de conception passionnants.</li> <li>Cette maquette de Porsche 911 à collectionner mesure plus de 10 cm de haut, 35 cm de long et 16 cm de large.</li> <li>Vous recherchez un beau cadeau pour un fan de voitures mythiques ? Cette maquette de Porsche 911 à collectionner constitue un excellent choix. Elle a été spécialement conçue pour les fans adultes de LEGO® qui apprécient les designs remarquables.</li> <li>Les briques LEGO® sont fabriquées avec des matériaux de qualité supérieure. Elles sont compatibles entre elles, s\'assemblent et se séparent facilement, et cela depuis 1958.</li> <li>Avec les pièces LEGO®, la sécurité et la qualité sont primordiales. C\'est pourquoi elles sont soumises à des tests stricts garantissant que le modèle est aussi robuste qu\'esthétique.</li> </ul>', 1),
(5, 'Bugatti Chiron', 380, 'product_05.jpg', 'product_05_alt1.jpg', 'product_05_alt2.jpg', 'product_05_alt3.jpg', '<p>Découvrez le célèbre modèle Bugatti Chiron LEGO® Technic™ 42083. Ce modèle exclusif a été développé en partenariat avec Bugatti Automobiles S.A.S de façon à reproduire de la façon la plus fidèle possible cette voiture de sport emblématique. Ce modèle dispose d\'une carrosserie aérodynamique, de jantes à rayons portant le logo de la marque, de pneus à profil bas et de disques de frein riches en détails. L\'habitacle comprend une boîte à 8 vitesses Technic, des palettes de changement de vitesses mobiles et un volant arborant le logo de Bugatti. Insérez la Bugatti Speed Key pour incliner l\'aileron arrière actif et pour passer de la position de conduite à la position de vitesse de pointe. Le capot arrière laisse entrevoir le moteur W16 doté de pistons. Un numéro de série unique et un compartiment de rangement compact contenant un élégant sac de voyage Bugatti sont à découvrir sous le capot avant. Ce modèle à l\'échelle 1:8 arbore deux tons de bleu, association qui caractérise la marque Bugatti, et comprend un ensemble d\'autocollants pour ajouter encore plus de détails. Cet ensemble est vendu dans un emballage luxueux et inclut un livret collector en couleur avec les instructions de montage complètes.</p> <ul> <li>Réplique LEGO® exclusive de la Bugatti Chiron à l\'échelle 1:8 comportant de nombreuses caractéristiques luxueuses, telles qu\'une carrosserie aérodynamique dotée d\'un aileron arrière actif, de jantes à rayons portant le logo de la marque, de pneus à profil bas, de disques de frein et d\'un moteur W16 avec des pistons.</li> <li>Les portes s\'ouvrent pour accéder à l\'habitacle comportant une boîte à 8 vitesses LEGO® Technic™, des palettes de changement de vitesses mobiles et un volant arborant le logo de Bugatti.</li> <li>Insérez la Bugatti Speed Key pour incliner l\'aileron arrière actif et pour passer de la position de conduite à la position de vitesse de pointe.</li> <li>Le capot peut-être soulevé pour accéder au compartiment de rangement compact contenant un élégant sac de voyage Bugatti.</li> <li>Le moteur W16 riche en détails est doté de pistons mobiles.</li> <li>Inclut un numéro de série unique situé sous le capot.</li> <li>Arbore deux tons de bleu, association qui caractérise la marque Bugatti, et comprend un ensemble d\'autocollants pour ajouter encore plus de détails.</li> <li>Inclut un livret collector en couleur renfermant des instructions de montage complètes.</li> <li>Ce modèle LEGO® Technic™ est conçu pour offrir une expérience de construction immersive et unique.</li> <li>Cet ensemble comprend 3 599 pièces.</li> <li>Convient aux enfants âgés de 16 ans et plus.</li> <li>La Bugatti Chiron mesure plus de 14 cm de haut 56 cm de long et 32 cm de large.</li> </ul>', 2),
(6, 'Lamborghini Sián FKP 37', 380, 'product_06.jpg', 'product_06_alt1.jpg', 'product_06_alt2.jpg', 'product_06_alt3.jpg', '<p>Les constructeurs découvrent la puissance et l\'esthétique de la Lamborghini Sián FKP 37 grâce à ce kit LEGO® Technic (42115). Grâce à ses superbes détails, ce modèle de voiture est une représentation fidèle de la Sián FKP 37 originale, en vert citron avec des jantes dorées.</p> <h3>La beauté dans les détails</h3> <p>La voiture déborde de détails authentiques, tels que la boîte à 8 vitesses avec palettes de changement de vitesse mobiles, le moteur V12 avec pistons mobiles et les 4 roues motrices. Le volant peut être utilisé pour diriger la voiture, et les suspensions avant et arrière peuvent être ajustées. À l\'instar de la véritable voiture de sport, ce modèle miniature dispose des célèbres portes à ouverture papillon.</p> <h3>Caractéristiques luxueuses</h3> <p>Ce modèle de voiture à construire permet de prendre du temps pour soi et de se distraire en donnant vie à la magnifique Sián FKP 37. Livré dans un coffret somptueux, ce set inclut un livret exclusif contenant des instructions de montage, des images et des interviews en coulisses. Un numéro de série unique inscrit sous le capot permet de débloquer du contenu spécial en ligne.</p> <ul> <li>Le set LEGO® Technic Lamborghini Sián FKP 37 (42115) propose une expérience de construction immersive. Une fois le modèle assemblé, les constructeurs peuvent explorer les fonctions de la voiture, fidèles à l\'originale : le moteur V12 à pistons mobiles, la direction et les suspensions avant et arrière.</li> <li>Ce set LEGO® Technic, doté d\'une boîte séquentielle à 8 rapports, d\'un aileron arrière, d\'un capot et d\'un coffre qui s\'ouvrent, de freins à disque détaillés et de jantes dorées, permet de découvrir tous les détails de la véritable Lamborghini Sián FKP 37.</li> <li>Conçu spécialement pour les amateurs de voitures de sport, ce set de construction LEGO® Technic avancé aux détails fascinants est livré avec un socle décoratif permettant d\'exposer la voiture, et un numéro de série unique pour débloquer du contenu numérique exclusif.</li> <li>Un projet de construction gratifiant à s\'offrir ou à offrir à un proche, pour un anniversaire ou pour Noël. Ce set LEGO® est présenté dans un coffret exclusif somptueux et contient une pièce fascinant à exposer.</li> <li>Élaboré dans des tons vert citron vifs avec des jantes dorées et des éléments décorés, ce modèle de voiture constructible à l\'échelle 1:8 mesure plus de 13 cm de haut, 60 cm de long et 25 cm de large.</li> <li>Propulsé par la passion ! Pas besoin de piles pour ce set LEGO® Technic. Ainsi, il est possible de commencer à construire sans attendre.</li> <li>Livret pour collectionneurs exclusif, avec des instructions de montage complètes, des images et des interviews en coulisses des deux équipes ayant travaillé sur ce projet : le groupe LEGO et Automobili Lamborghini.</li> <li>Les sets LEGO® Technic, avec leurs designs élégants et leurs fonctions réalistes, proposent une expérience de construction enrichissante et des modèles aux caractéristiques impressionnantes.</li> <li>Les sets LEGO® Technic sont conformes aux normes industrielles les plus élevées, ce qui garantit que les éléments s\'assemblent facilement.</li> <li>Les kits de construction LEGO® Technic sont soigneusement testés pour s\'assurer que tous répondent aux normes de sécurité et de qualité les plus élevées au monde.</li> </ul>', 2),
(7, 'Burj Khalifa', 45, 'product_07.jpg', 'product_07_alt1.jpg', 'product_07_alt2.jpg', 'product_07_alt3.jpg', '<p>Le set de construction LEGO® Architecture Burj Khalifa (21055) permet aux passionnés de recréer un célèbre monument de Dubaï et de s\'offrir des moments de qualité. S\'élevant gracieusement dans le désert, cette tour mesure 828 mètres de haut et compte 160 étages. Burj Khalifa était la plus grande tour du monde lors de son inauguration en 2010 et cette impressionnante interprétation LEGO immortalise les détails instantanément reconnaissables de son architecture.</p> <h3>Un modèle spectaculaire à exposer</h3> <p>Magnifique idée de cadeau pour les fans de LEGO, les habitants et les visiteurs de Dubaï ainsi que pour tous les admirateurs de cette « merveille vivante », ce set offre une expérience de construction immersive et gratifiante et permet de réaliser un splendide modèle à exposer à la maison ou au bureau.</p> <h3>Bienvenue dans LEGO Architecture</h3> <p>Les sets LEGO Architecture immortalisent l\'essence des bâtiments, monuments et villes les plus connus au monde. Des monuments emblématiques aux paysages urbains, tous les passionnés d\'architecture, de voyages, d\'histoire et de design y trouveront leur bonheur.</p> <ul> <li>Le set de construction LEGO® Architecture (21055) permet de construire et d\'exposer un modèle détaillé de la spectaculaire tour Burj Khalifa de Dubaï.</li> <li>Les détails architecturaux réalistes de la Burj Khalifa sont superbement reproduits en briques LEGO®. Le support orné d\'un écriteau ajoute une touche finale à cette pièce d\'exposition qui deviendra un passionnant sujet de conversation.</li> <li>Livret inclus avec des détails sur la conception et l\'histoire de ce monument (en anglais uniquement. Autres langues disponibles en téléchargement sur LEGO.com/architecture).</li> <li>Une idée de cadeau fascinante et créative pour les constructeurs de 16 ans et plus, fans de LEGO®, habitants et visiteurs de Dubaï ou tout admirateur de la splendide réalisation architecturale qu\'est la tour Burj Khalifa.</li> <li>Mesurant plus de 39 cm de haut, 9 cm de large et 9 cm de profondeur, ce modèle de 333 pièces à construire constitue un fascinant objet à exposer à la maison ou au bureau.</li> <li>Ce modèle est destiné à une personne novice dans les sets de construction LEGO® ? Aucun problème. Il est fourni avec des instructions de montage illustrées faciles à suivre pour permettre à tous de construire en toute confiance.</li> <li>Les modèles de paysages urbains et de monuments emblématiques LEGO® Architecture offrent une variété d\'expériences de construction enrichissantes à tous les passionnés d\'architecture, de voyages, d\'histoire et de design.</li> <li>Conformes aux normes industrielles les plus strictes, les éléments LEGO® sont compatibles entre eux et s\'assemblent toujours solidement.</li> <li>Les briques et les pièces LEGO® sont testées de presque toutes les manières imaginables afin de garantir qu\'elles répondent aux normes de sécurité les plus rigoureuses au monde.</li> </ul>', 3),
(8, 'L\'Empire State Building', 110, 'product_08.jpg', 'product_08_alt1.jpg', 'product_08_alt2.jpg', 'product_08_alt3.jpg', '<p>L\'ensemble L\'Empire State Building LEGO Architecture 21046 place la construction LEGO® à un niveau de compétences supérieur. Situé au cœur de New York, l\'Empire State Building domine les gratte-ciel environnants. Sa construction a débuté le 17 mars 1930 pour s\'achever un an et 45 jours plus tard, le 1er mai 1931. La hauteur de la structure a été augmentée en 1950 avec l\'ajout de la célèbre tour d\'antenne. Avec 55 cm de haut, soit le modèle LEGO Architecture le plus haut à ce jour (juillet 2019), cette réplique à collectionner très détaillée recrée fidèlement les lignes symétriques des 4 façades de type mur-rideau du bâtiment et la tour d\'antenne de style Art déco. La plaque de base représente la Cinquième Avenue et ses environs avec des taxis jaunes, et est accompagnée d\'une plaque nominative ornementale. Ce modèle exposable à 360° propose une expérience de construction intéressante et gratifiante et constitue un élément de décoration idéal pour la maison ou le bureau. Il a été conçu pour tous les passionnés de voyage, de culture architecturale, d\'histoire et de design.</p> <ul> <li>Interprétation LEGO® Architecture du célèbre Empire State Building de New York.</li> <li>Ce modèle exposable à 360° comprend 4 façades détaillées, une tour d\'antenne argentée et une plaque de base représentant la Cinquième Avenue et ses environs, avec 6 taxis jaunes.</li> <li>Avec 55 cm de haut, cette réplique de l\'Empire State Building est le plus grand modèle LEGO® Architecture à ce jour (juillet 2019).</li> <li>Le livret inclus contient des informations sur le designer, l\'architecture et l\'histoire de la structure, ainsi que des faits historiques sur l\'Empire State Building et son héritage architectural. (En anglais uniquement. Autres langues disponibles en téléchargement sur LEGO.com/architecture).</li> <li>Inclut une plaque nominative ornementale de l\'Empire State Building.</li> <li>La gamme LEGO® Architecture célèbre le monde de l\'architecture à travers la brique LEGO, pour tous les passionnés de voyage, d\'architecture, d\'histoire et de design.</li> <li>Cet ensemble inclut plus de 1 750 pièces.</li> <li>Une expérience de construction LEGO® Architecture à la fois stimulante et gratifiante.</li> <li>Mesure plus de 55 cm de haut, 20 cm de large et 12 cm de profondeur.</li> </ul>', 3),
(9, 'La Statue de la Liberté', 110, 'product_09.jpg', 'product_09_alt1.jpg', 'product_09_alt2.jpg', 'product_09_alt3.jpg', '<p>Mettez à l\'honneur un monument qui symbolise l\'équilibre parfait entre architecture et sculpture grâce à cet ensemble LEGO® Architecture 21042 La Statue de la Liberté. Symbole emblématique de la liberté en Amérique, elle surplombe Liberty Island du haut de ses 93 mètres dans le port de New York City et accueille les navigateurs venus des quatre coins du monde. Cette réplique LEGO impressionnante reflète parfaitement le mélange entre sculpture et architecture qui caractérise le célèbre monument, avec son piédestal très détaillé, orné de motifs représentant des briques et de balcons à colonnades. La superbe Statue de la Liberté est dotée de sa robe ample, de menottes brisées, d\'une couronne à 7 branches, de sa célèbre tablette et de sa torche dorée brandie vers le ciel. Caractérisé par une magnifique finition de teintes authentiques beige et vert-de-gris et rehaussé d\'un écriteau décoratif, ce modèle promet à tous les passionnés d\'architecture, de voyage, d\'histoire et de conception une expérience de construction particulièrement gratifiante. Une fois terminée, cette œuvre emblématique remarquable trouvera parfaitement sa place dans la décoration de votre maison ou du bureau.</p> <ul> <li>Réplique LEGO® Architecture d\'un célèbre monument, la Statue de la Liberté.</li> <li>Comprend un piédestal orné de motifs complexes représentant des briques ainsi que de balcons à colonnades, ainsi qu\'une Statue de la Liberté dotée de sa robe ample, d\'une couronne à 7 branches, de sa célèbre tablette et de sa torche dorée.</li> <li>Livret inclus avec des détails sur la conception, l\'architecture et l\'histoire du bâtiment (en anglais, français et chinois uniquement. Autres langues disponibles en téléchargement sur LEGO.com/architecture).</li> <li>La ligne de produits LEGO® Architecture célèbre le monde de l\'architecture par le biais de la brique LEGO, pour toutes les personnes qui s\'intéressent à la création, à l\'histoire et à l\'architecture.</li> <li>Cet ensemble comprend plus de 1 685 pièces LEGO®.</li> <li>Une expérience de construction agréablement stimulante et gratifiante avec cet ensemble LEGO® Architecture.</li> <li>Mesure plus de 44 cm de haut, 14 cm de large et 14 cm de profondeur.</li> </ul>', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_account` (`id_account`),
  ADD KEY `id_product` (`id_product`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category` (`category`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_account`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`category`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
