-- MySQL dump 10.10
--
-- Host: localhost    Database: gul_db
-- ------------------------------------------------------
-- Server version	5.0.18-nt

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `additional_equipment`
--

DROP TABLE IF EXISTS `additional_equipment`;
CREATE TABLE `additional_equipment` (
  `addequ_id` int(10) unsigned NOT NULL auto_increment,
  `baseequ_id` int(10) unsigned NOT NULL,
  `option_id` int(10) unsigned NOT NULL,
  `addequ_price` varchar(20) NOT NULL,
  PRIMARY KEY  (`addequ_id`),
  KEY `baseequ_id` (`baseequ_id`),
  KEY `option_id` (`option_id`),
  CONSTRAINT `additional_equipment_ibfk_1` FOREIGN KEY (`baseequ_id`) REFERENCES `base_equipment` (`baseequ_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `additional_equipment_ibfk_2` FOREIGN KEY (`option_id`) REFERENCES `options` (`option_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `additional_equipment`
--


/*!40000 ALTER TABLE `additional_equipment` DISABLE KEYS */;
LOCK TABLES `additional_equipment` WRITE;
UNLOCK TABLES;
/*!40000 ALTER TABLE `additional_equipment` ENABLE KEYS */;

--
-- Table structure for table `base_equipment`
--

DROP TABLE IF EXISTS `base_equipment`;
CREATE TABLE `base_equipment` (
  `baseequ_id` int(10) unsigned NOT NULL auto_increment,
  `car_id` int(10) unsigned NOT NULL,
  `baseequ_name` varchar(30) NOT NULL,
  `baseequ_price` varchar(20) NOT NULL,
  PRIMARY KEY  (`baseequ_id`),
  KEY `car_id` (`car_id`),
  CONSTRAINT `base_equipment_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `cars` (`car_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `base_equipment`
--


/*!40000 ALTER TABLE `base_equipment` DISABLE KEYS */;
LOCK TABLES `base_equipment` WRITE;
INSERT INTO `base_equipment` VALUES (1,2,'Base HY_TUC Equipment','186245'),(2,2,'Base HY_TUC Equipment Plus','197249'),(3,1,'CAMRY Base_Equ_Light','187239');
UNLOCK TABLES;
/*!40000 ALTER TABLE `base_equipment` ENABLE KEYS */;

--
-- Table structure for table `baseequ_options`
--

DROP TABLE IF EXISTS `baseequ_options`;
CREATE TABLE `baseequ_options` (
  `baseequ_option_id` int(10) unsigned NOT NULL auto_increment,
  `option_id` int(10) unsigned NOT NULL,
  `baseequ_id` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`baseequ_option_id`),
  KEY `option_id` (`option_id`),
  KEY `baseequ_id` (`baseequ_id`),
  CONSTRAINT `baseequ_options_ibfk_1` FOREIGN KEY (`option_id`) REFERENCES `options` (`option_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `baseequ_options_ibfk_2` FOREIGN KEY (`baseequ_id`) REFERENCES `base_equipment` (`baseequ_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `baseequ_options`
--


/*!40000 ALTER TABLE `baseequ_options` DISABLE KEYS */;
LOCK TABLES `baseequ_options` WRITE;
UNLOCK TABLES;
/*!40000 ALTER TABLE `baseequ_options` ENABLE KEYS */;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands` (
  `brand_id` int(10) unsigned NOT NULL auto_increment,
  `brand_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`brand_id`),
  UNIQUE KEY `brand_name` (`brand_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--


/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
LOCK TABLES `brands` WRITE;
INSERT INTO `brands` VALUES (7,'Audi'),(1,'BMW'),(12,'Citroen'),(17,'Daewoo'),(9,'Ford'),(14,'Honda'),(8,'Hyndai'),(18,'KIA Motors'),(2,'Mercedes-Benz'),(13,'Mitsubishi'),(10,'Opel'),(16,'Peugeout'),(11,'Renault'),(5,'Saab'),(15,'Suzuki'),(3,'Toyota'),(6,'Volkswagen'),(4,'Volvo');
UNLOCK TABLES;
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;

--
-- Table structure for table `carcass_types`
--

DROP TABLE IF EXISTS `carcass_types`;
CREATE TABLE `carcass_types` (
  `carcasstype_id` int(10) unsigned NOT NULL auto_increment,
  `carcasstype_name` varchar(20) NOT NULL,
  `carcasstype_desc` varchar(100) NOT NULL,
  PRIMARY KEY  (`carcasstype_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carcass_types`
--


/*!40000 ALTER TABLE `carcass_types` DISABLE KEYS */;
LOCK TABLES `carcass_types` WRITE;
INSERT INTO `carcass_types` VALUES (1,'Sedan','Lorem Ipsum'),(2,'Hatchback','Lorem Ipsum'),(3,'Universal','Lorem Ipsum'),(4,'Cabriolet','Тако собі лигонько сти кабріолет :-)');
UNLOCK TABLES;
/*!40000 ALTER TABLE `carcass_types` ENABLE KEYS */;

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE `cars` (
  `car_id` int(10) unsigned NOT NULL auto_increment,
  `model_id` int(10) unsigned NOT NULL,
  `number_of_places` tinyint(3) unsigned NOT NULL,
  `max_speed` smallint(5) unsigned NOT NULL,
  `engine_volume` double(4,2) unsigned NOT NULL,
  `gear_id` int(10) unsigned NOT NULL,
  `carcasstype_id` int(10) unsigned NOT NULL,
  `width` double(6,3) unsigned NOT NULL,
  `height` double(6,3) unsigned NOT NULL,
  `length` double(6,3) unsigned NOT NULL,
  `fueltype_id` tinyint(3) unsigned NOT NULL,
  `fuel_consumption` double(6,3) NOT NULL,
  `weight` double(8,3) NOT NULL,
  `engine_number` varchar(10) NOT NULL,
  `carcass_number` varchar(10) NOT NULL,
  PRIMARY KEY  (`car_id`),
  UNIQUE KEY `engine_number` (`engine_number`),
  UNIQUE KEY `carcass_number` (`carcass_number`),
  KEY `model_id` (`model_id`),
  KEY `gear_id` (`gear_id`),
  KEY `carcasstype_id` (`carcasstype_id`),
  KEY `fueltype_id` (`fueltype_id`),
  CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`model_id`) REFERENCES `models` (`model_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `cars_ibfk_2` FOREIGN KEY (`gear_id`) REFERENCES `gears` (`gear_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `cars_ibfk_3` FOREIGN KEY (`carcasstype_id`) REFERENCES `carcass_types` (`carcasstype_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `cars_ibfk_4` FOREIGN KEY (`fueltype_id`) REFERENCES `fuel_types` (`fueltype_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cars`
--


/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
LOCK TABLES `cars` WRITE;
INSERT INTO `cars` VALUES (1,14,5,225,2.20,1,1,250.560,153.220,544.330,2,52.000,2400.000,'4897512','9754231'),(2,11,5,230,2.20,3,3,450.560,181.220,587.820,2,64.000,2750.000,'1456871240','9876542210');
UNLOCK TABLES;
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients` (
  `client_id` int(10) unsigned NOT NULL auto_increment,
  `client_surname` varchar(50) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `client_fname` varchar(50) NOT NULL,
  `client_address` varchar(200) NOT NULL,
  `client_phone` varchar(20) NOT NULL,
  `client_email` varchar(100) NOT NULL,
  PRIMARY KEY  (`client_id`),
  UNIQUE KEY `client_email` (`client_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--


/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
LOCK TABLES `clients` WRITE;
INSERT INTO `clients` VALUES (1,'Якубовський','Володимир','Петрович','76018, м. Івано-Франківськ, вул. Залізнична, 9/6','(067)999-99-99','vippergood@gmail.com'),(2,'Штаєр','Лідія','Омелянівна','76018, м. Івано-Франківськ, вул. Карпатська, 15/1','(050)500-00-00','ktsu@nung.edu.ua');
UNLOCK TABLES;
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;

--
-- Table structure for table `fuel_types`
--

DROP TABLE IF EXISTS `fuel_types`;
CREATE TABLE `fuel_types` (
  `fueltype_id` tinyint(3) unsigned NOT NULL auto_increment,
  `fueltype_name` varchar(30) NOT NULL,
  PRIMARY KEY  (`fueltype_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fuel_types`
--


/*!40000 ALTER TABLE `fuel_types` DISABLE KEYS */;
LOCK TABLES `fuel_types` WRITE;
INSERT INTO `fuel_types` VALUES (1,'diesel'),(2,'gasoline'),(3,'gas'),(4,'electrical');
UNLOCK TABLES;
/*!40000 ALTER TABLE `fuel_types` ENABLE KEYS */;

--
-- Table structure for table `gears`
--

DROP TABLE IF EXISTS `gears`;
CREATE TABLE `gears` (
  `gear_id` int(10) unsigned NOT NULL auto_increment,
  `gear_name` varchar(30) NOT NULL,
  PRIMARY KEY  (`gear_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gears`
--


/*!40000 ALTER TABLE `gears` DISABLE KEYS */;
LOCK TABLES `gears` WRITE;
INSERT INTO `gears` VALUES (1,'front'),(2,'back'),(3,'full');
UNLOCK TABLES;
/*!40000 ALTER TABLE `gears` ENABLE KEYS */;

--
-- Table structure for table `models`
--

DROP TABLE IF EXISTS `models`;
CREATE TABLE `models` (
  `model_id` int(10) unsigned NOT NULL auto_increment,
  `model_name` varchar(50) NOT NULL,
  `brand_id` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`model_id`),
  KEY `brand_id` (`brand_id`),
  CONSTRAINT `models_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `models`
--


/*!40000 ALTER TABLE `models` DISABLE KEYS */;
LOCK TABLES `models` WRITE;
INSERT INTO `models` VALUES (1,'M5',1),(2,'Z8',1),(3,'X5',1),(4,'M3',1),(5,'X6',1),(6,'Carina-E',3),(7,'Prado',3),(8,'Hiache',3),(9,'Land Cruiser',3),(10,'Corolla',3),(11,'Tucson',8),(12,'SantaFe 1',8),(13,'Accent',8),(14,'Camry',3),(15,'Land Cruiser 200',3),(16,'Land Cruiser 300',3),(17,'Land Cruiser 400',3),(18,'Land Cruiser 4000',3),(19,'Grand Vitara 4',15),(20,'Nexia',17),(21,'Nubira',17),(22,'Leganza',17),(23,'Lanos',17),(24,'Sens',17),(25,'Golf',6),(26,'Bora',6),(27,'Golf CCC',6),(28,'Lanos Polska',17);
UNLOCK TABLES;
/*!40000 ALTER TABLE `models` ENABLE KEYS */;

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
CREATE TABLE `options` (
  `option_id` int(10) unsigned NOT NULL auto_increment,
  `option_name` varchar(50) NOT NULL,
  `optg_id` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`option_id`),
  KEY `optg_id` (`optg_id`),
  CONSTRAINT `options_ibfk_1` FOREIGN KEY (`optg_id`) REFERENCES `options_groups` (`optg_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--


/*!40000 ALTER TABLE `options` DISABLE KEYS */;
LOCK TABLES `options` WRITE;
INSERT INTO `options` VALUES (1,'Шкіряна обшивка крісел',1),(2,'Деревяна обшивка передньої панелі',1),(3,'Деревяна обшивка бокових панелей',1),(4,'Система 2.1 Pioneer CAS 10.2 Revision 334',2),(5,'Система 5.1',2);
UNLOCK TABLES;
/*!40000 ALTER TABLE `options` ENABLE KEYS */;

--
-- Table structure for table `options_groups`
--

DROP TABLE IF EXISTS `options_groups`;
CREATE TABLE `options_groups` (
  `optg_id` int(10) unsigned NOT NULL auto_increment,
  `optg_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`optg_id`),
  UNIQUE KEY `optg_name` (`optg_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options_groups`
--


/*!40000 ALTER TABLE `options_groups` DISABLE KEYS */;
LOCK TABLES `options_groups` WRITE;
INSERT INTO `options_groups` VALUES (3,'GPS Навігація'),(2,'Аудіосистема'),(1,'Обшивка салону');
UNLOCK TABLES;
/*!40000 ALTER TABLE `options_groups` ENABLE KEYS */;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `order_id` int(10) unsigned NOT NULL auto_increment,
  `baseequ_id` int(10) unsigned NOT NULL,
  `addequ_id` int(10) unsigned default NULL,
  `preorder` tinyint(1) NOT NULL,
  `order_date` date NOT NULL,
  `client_id` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`order_id`),
  KEY `client_id` (`client_id`),
  KEY `baseequ_id` (`baseequ_id`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`baseequ_id`) REFERENCES `base_equipment` (`baseequ_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--


/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
LOCK TABLES `orders` WRITE;
INSERT INTO `orders` VALUES (1,2,NULL,1,'2013-06-11',1),(2,3,NULL,1,'2013-06-11',2),(3,3,0,1,'2013-06-11',1);
UNLOCK TABLES;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

