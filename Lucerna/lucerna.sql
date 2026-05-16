-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2026 a las 17:18:52
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lucerna`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `velas`
--

CREATE TABLE `velas` (
  `id_vela` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,0) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `velas`
--

INSERT INTO `velas` (`id_vela`, `nombre`, `descripcion`, `precio`, `stock`, `imagen`, `categoria`) VALUES
(0, 'Vela Fresa', 'Aroma dulce a frutilla <br> Duración: 20 horas <br> Ideal para ambientar espacios', 5000, 10, '/Lucerna/Recursos/Catalogo/Postres/postre1.png', 'postres'),
(0, 'Vela Dulces y Frutas', 'Aroma dulce a frutos rojos con un toque de chocolate <br> Duración: 20 horas <br> Ideal para ambientar espacios', 6000, 8, '/Lucerna/Recursos/Catalogo/Postres/postre2.jpg', 'postres'),
(0, 'Vela Helado', 'Aroma dulce a vainilla <br> Duración: 20 horas <br> Ideal para ambientar espacios', 6500, 8, '/Lucerna/Recursos/Catalogo/Postres/postre3.webp', 'postres'),
(0, 'Vela Unicornio', 'Aroma dulce a canela <br> Duración: 20 horas <br> Ideal para ambientar espacios', 5500, 6, '/Lucerna/Recursos/Catalogo/Postres/postre4.webp', 'postres'),
(0, 'Vela Café', 'Aroma a café <br>Duración: 20 horas <br> Ideal para ambientar espacios', 6500, 5, '/Lucerna/Recursos/Catalogo/Postres/postre5.png', 'postres'),
(0, 'Vela Mar azul', 'Aroma a manzana <br> Duración: 20 horas <br> Ideal para ambientar espacios', 6500, 6, '/Lucerna/Recursos/Catalogo/Postres/postre6.png', 'postres'),
(0, 'Vela Girasol', 'Aroma floral dulce <br> Duración: 20 horas <br> Ideal para ambientar espacios', 5500, 6, '/Lucerna/Recursos/Catalogo/Flores/flor1.png', 'flores'),
(0, 'Vela Rosa', 'Aroma floral a rosa <br> Duración: 20 horas <br> Ideal para ambientar espacios', 5500, 6, '/Lucerna/Recursos/Catalogo/Flores/flor2.png', 'flores'),
(0, 'Vela Cala', 'Aroma floral cítrico <br> Duración: 20 horas <br> Ideal para ambientar espacios', 5500, 6, '/Lucerna/Recursos/Catalogo/Flores/flor3.png', 'flores'),
(0, 'Vela Claveles', 'Aroma floral a claveles <br> Duración: 20 horas <br> Ideal para ambientar espacios', 5000, 6, '/Lucerna/Recursos/Catalogo/Flores/flor4.png', 'flores'),
(0, 'Vela Petunia', 'Aroma floral cítrico <br> Duración: 20 horas <br> Ideal para ambientar espacios', 5000, 4, '/Lucerna/Recursos/Catalogo/Flores/flor5.png', 'flores'),
(0, 'Vela No me olvides', 'Aroma floral dulce <br> Duración: 20 horas <br> Ideal para ambientar espacios', 6000, 8, '/Lucerna/Recursos/Catalogo/Flores/flor6.png', 'flores'),
(0, 'Vela Blanca', 'Sin aroma <br> Duración: 20 horas <br> Ideal para iluminar espacios', 3000, 8, '/Lucerna/Recursos/Catalogo/Clasicas/clasica1.png', 'clasicas'),
(0, 'Vela Azul', 'Sin aroma <br> Duración: 20 horas <br> Ideal para iluminar espacios', 3000, 8, '/Lucerna/Recursos/Catalogo/Clasicas/clasica2.png', 'clasicas'),
(0, 'Vela Negra', 'Sin aroma <br> Duración: 20 horas <br> Ideal para rituales', 4000, 8, '/Lucerna/Recursos/Catalogo/Clasicas/clasica3.png', 'clasicas'),
(0, 'Vela Tallada', 'Aroma sutil floral  <br> Duración: 20 horas <br> Ideal para ambientar espacios interiores', 5000, 6, '/Lucerna/Recursos/Catalogo/Clasicas/clasica4.png', 'clasicas'),
(0, 'Vela Religiosa', 'Aroma sutil dulce <br> Duración: 20 horas <br> Ideal para altares', 5000, 6, '/Lucerna/Recursos/Catalogo/Clasicas/clasica5.png', 'clasicas'),
(0, 'Vela Musical', 'Aroma a éxito <br> Duración: 20 horas <br> Ideal para músicos', 5000, 6, '/Lucerna/Recursos/Catalogo/Clasicas/clasica6.png', 'clasicas');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
