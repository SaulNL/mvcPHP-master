

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



-- Base de datos: `mvc_php`
CREATE DATABASE IF NOT EXISTS `mvc_php` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `mvc_php`;



DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto` (
  `idProducto` int(10) UNSIGNED NOT NULL,
  `nit` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nomprod` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `precioU` float NOT NULL,
  `descrip` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



TRUNCATE TABLE `producto`;


INSERT INTO `producto` (`idProducto`, `nit`, `nomprod`, `precioU`, `descrip`) VALUES 
('411', '111', 'Yogur', '3', 'Toper grande'), 
('412', '112', 'Agua 600ml', '10', 'Botella pequeña'), 
('413', '113', 'Yoli', '5', 'Botella grande'), 
('414', '114', 'Roles Bimbo', '15', 'Roles medianos'), 
('415', '115', 'Rufles', '7', 'Rufles de queso'), 
('416', '116', 'Chiles chiplotle', '11', 'Lata chica');


DROP TABLE IF EXISTS `proveedor`;
CREATE TABLE `proveedor` (
  `nit` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `razonS` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `dir` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


TRUNCATE TABLE `proveedor`;


INSERT INTO `proveedor` (`nit`, `razonS`, `dir`, `tel`) VALUES 
('111', 'Lacteo', 'LALA', '7561234578'), 
('112', 'Agua', 'Bonafont', '7561478596'), 
('113', 'Refresco', 'Cocacola', '7561596523'), 
('114', 'Pan', 'Bimbo', '7567894512'), 
('115', 'Sabritas', 'Sabritas', '7563215487'), 
('116', 'Enlatado', 'La costeña', '7563698745');



ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `Producto_FKIndex1` (`nit`);


ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`nit`);


ALTER TABLE `producto`
  MODIFY `idProducto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=898903;

ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`nit`) REFERENCES `proveedor` (`nit`) ON DELETE CASCADE ON UPDATE CASCADE;
