-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 07-11-2023 a las 00:43:47
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catalogo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `asunto` varchar(100) DEFAULT '',
  `comentario` varchar(100) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `asunto`, `comentario`) VALUES
(1, 'Entrega de pedido', '		    		    		    		    		    		    		    Los articulos solicitados aun no hay sido enviados a mi do');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL DEFAULT '',
  `imagen` varchar(100) NOT NULL DEFAULT '',
  `precio` decimal(11,2) NOT NULL DEFAULT 0.00,
  `cantidad` int(11) DEFAULT 0,
  `id_proveedor` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `descripcion`, `imagen`, `precio`, `cantidad`, `id_proveedor`) VALUES
(1, 'Computadora escolar básica', 'estudiantes.jpg', 8.00, 2, 1),
(2, 'Computadora para Oficinistas', 'oficinistas.jpg', 625.00, 5, 1),
(3, 'Computadora Especial para Arquitectos', 'arquitectos.jpg', 1.00, 3, 1),
(4, 'Computadora Portátil HP Pavilion DV1125LA', 'pavillion.jpg', 995.27, 2, 2),
(5, 'Computadora Portátil Compaq Presario M2015LA', 'presario.jpg', 1034.12, 1, 2),
(6, 'Monitor Samsung 17 pulgadas', 'samsung.jpg', 127.13, 1, 3),
(7, 'Monitor Benq LCD 17 FP767', 'benq.jpg', 347.87, 10, 3),
(8, 'Teclado Genius KB21 PS2', 'genius.jpg', 15.17, 10, 3),
(9, 'Impresora Hewlett Packard LaserJet 6000 Series', 'laserjet.gif', 332.39, 1, 3),
(10, 'Tarjeta madre Intel BOXD 865 GBFL BUS 800 HT RED', 'motherboxd.jpg', 118.72, 1, 4),
(11, 'Tarjeta madre Intel BOXED 865 PERL BUS 800 HT', 'mothergiga_boxed.jpg', 147.91, 1, 4),
(12, 'Tarjeta madre PCCHIPS M925G91BRV91B MATX 533 RETAIL', 'mother_pcchips925.jpg', 51.78, 1, 4),
(13, 'Tarjeta madre PCCHIPS 935G31AR P/CEL Y P4', 'mother_pcchip935.jpg', 53.57, 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre`) VALUES
(1, 'Compucenter S.A. de C.V.'),
(2, 'Hewlet Packard'),
(3, 'Western Digital'),
(4, 'Gigabyte Technology');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL DEFAULT '',
  `contrasena` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `contrasena`) VALUES
(1, 'admin', 'root'),
(2, 'visitante', 'anonimo'),
(3, 'alumno', 'pwlis');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
