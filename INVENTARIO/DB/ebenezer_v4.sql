-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 03-12-2023 a las 01:45:58
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ebenezer_v4.sql`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `categoria_id` int NOT NULL,
  `categoria_nombre` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `categoria_ubicacion` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`categoria_id`, `categoria_nombre`, `categoria_ubicacion`) VALUES
(1, 'Analgésicos', 'Pasillo A'),
(2, 'Antibióticos', 'Pasillo B'),
(3, 'Antihistamínicos', 'Pasillo C'),
(4, 'Antipiréticos', 'Pasillo D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `producto_id` int NOT NULL,
  `producto_codigo` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `producto_nombre` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `producto_precio` decimal(30,2) NOT NULL,
  `producto_stock` int NOT NULL,
  `producto_foto` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `categoria_id` int NOT NULL,
  `usuario_id` int NOT NULL,
  `producto_ub_p` varchar(2) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `producto_ub_e` varchar(2) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `producto_ub_n` varchar(2) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`producto_id`, `producto_codigo`, `producto_nombre`, `producto_precio`, `producto_stock`, `producto_foto`, `categoria_id`, `usuario_id`, `producto_ub_p`, `producto_ub_e`, `producto_ub_n`) VALUES
(1, '7501159580359', 'PARACETAMOL 500MG TABLETAS C/10', 20.00, 20, 'PARACETAMOL_500MG_TABLETAS_C_10_81.jpg', 1, 1, 'A', '1', '2'),
(2, 'COD001', 'Ibuprofeno 400mg', 5.99, 100, 'ibuprofeno_400mg.jpg', 1, 1, 'A', '1', '1'),
(3, 'COD002', 'Paracetamol 500mg', 4.50, 150, 'paracetamol_500mg.jpg', 1, 1, 'B', '2', '2'),
(4, 'COD003', 'Aspirina 100mg', 3.75, 120, 'aspirina_100mg.jpg', 1, 1, 'C', '3', '3'),
(5, 'COD004', 'Naproxeno 250mg', 6.25, 80, 'naproxeno_250mg.jpg', 1, 1, 'D', '4', '4'),
(6, 'COD005', 'Diclofenaco 50mg', 7.99, 90, 'diclofenaco_50mg.jpg', 1, 1, 'A', '1', '2'),
(7, 'COD006', 'Amoxicilina 500mg', 8.50, 80, 'amoxicilina_500mg.jpg', 2, 1, 'B', '2', '2'),
(8, 'COD007', 'Ciprofloxacino 250mg', 10.75, 60, 'ciprofloxacino_250mg.jpg', 2, 1, 'C', '3', '3'),
(9, 'COD008', 'Azitromicina 200mg', 12.99, 40, 'azitromicina_200mg.jpg', 2, 1, 'A', '1', '1'),
(10, 'COD009', 'Doxiciclina 100mg', 9.25, 75, 'doxiciclina_100mg.jpg', 2, 1, 'D', '4', '4'),
(11, 'COD010', 'Cefalexina 250mg', 11.50, 50, 'cefalexina_250mg.jpg', 2, 1, 'A', '1', '2'),
(12, 'COD011', 'Loratadina 10mg', 6.99, 120, 'loratadina_10mg.jpg', 3, 1, 'C', '3', '3'),
(13, 'COD012', 'Cetirizina 5mg', 5.75, 150, 'cetirizina_5mg.jpg', 3, 1, 'D', '4', '4'),
(14, 'COD013', 'Desloratadina 5mg', 8.25, 100, 'desloratadina_5mg.jpg', 3, 1, 'A', '1', '1'),
(15, 'COD014', 'Fexofenadina 180mg', 9.50, 80, 'fexofenadina_180mg.jpg', 3, 1, 'B', '2', '2'),
(16, 'COD015', 'Levocetirizina 5mg', 7.25, 110, 'levocetirizina_5mg.jpg', 3, 1, 'A', '1', '2'),
(17, 'COD016', 'Paracetamol Infantil 120mg', 3.99, 200, 'paracetamol_infantil_120mg.jpg', 4, 1, 'B', '2', '2'),
(18, 'COD017', 'Ibuprofeno 200mg', 5.25, 180, 'ibuprofeno_200mg.jpg', 4, 1, 'C', '3', '3'),
(19, 'COD018', 'Ácido Acetilsalicílico 100mg', 4.50, 150, 'acido_acetilsalicilico_100mg.jpg', 4, 1, 'A', '1', '1'),
(20, 'COD019', 'Naproxeno Infantil 50mg', 6.99, 120, 'naproxeno_infantil_50mg.jpg', 4, 1, 'D', '4', '4'),
(21, 'COD020', 'Dipirona 500mg', 7.75, 100, 'dipirona_500mg.jpg', 4, 1, 'A', '1', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `direccion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `correo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `celular` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre`, `direccion`, `correo`, `celular`) VALUES
(2, 'Distribuidora Farmacéutica S.A.', 'Calle de los Remedios 123, Ciudad Saludable, Estado Bienestar', 'info@distribuidorafarmaceutica.com', '987654321'),
(3, 'PharmaSuministros Express', 'Avenida de la Salud 789, Pueblo Vital, Estado Sanitario', 'contacto@pharmasuministrosexpress.net', '555234678'),
(4, 'Proveeduría Salud y Bienestar Ltda.', 'Plaza de la Farmacia 456, Villa Medicinal, Estado de la Curación', 'ventas@saludybienestarpro.com', '555345678'),
(5, 'Suministros Farmacológicos Innovadores', 'Carrera de la Prevención 789, Pueblo Saludable, Estado Terapéutico', 'info@innovafarmacos.com', '555456789');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros_transacciones`
--

CREATE TABLE `registros_transacciones` (
  `id_transaccion` varchar(500) NOT NULL,
  `fecha` date DEFAULT NULL,
  `producto_id` int DEFAULT NULL,
  `cantidad_producto` varchar(200) DEFAULT NULL,
  `tipo_transaccion` enum('entrada','salida') DEFAULT NULL,
  `usuario_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int NOT NULL,
  `usuario_nombre` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuario_apellido` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuario_usuario` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuario_clave` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuario_email` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario_nombre`, `usuario_apellido`, `usuario_usuario`, `usuario_clave`, `usuario_email`) VALUES
(1, 'Administrador', 'Principal', 'Administrador', '$2y$10$EPY9LSLOFLDDBriuJICmFOqmZdnDXxLJG8YFbog5LcExp77DBQvgC', ''),
(2, 'Carlos', 'Delgado', 'Carlos', '$2y$10$HGho4iI9V8AHB7rlH1EpZeZZK47OzJClwmlrviSJ38lck54PK3M9y', 'carlos@gmail.com'),
(3, 'Aaron', 'Segura', 'Aaron', '$2y$10$xcY/jLT.KdLanftYXg0VHOpev4QkLGxSt6go9IzqPAYD7DUHzq4/G', 'aaron@gmail.com'),
(4, 'Leonardo', 'Catañeda', 'Leonardo', '$2y$10$XCPnvBBtcul55GXR4ldmuOVhHkhmI9lY7V9Q2tWkQTPefsaVUFXCG', 'leonardo@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`producto_id`),
  ADD KEY `categoria_id` (`categoria_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `registros_transacciones`
--
ALTER TABLE `registros_transacciones`
  ADD PRIMARY KEY (`id_transaccion`),
  ADD KEY `producto_id` (`producto_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `categoria_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `producto_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`categoria_id`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`);

--
-- Filtros para la tabla `registros_transacciones`
--
ALTER TABLE `registros_transacciones`
  ADD CONSTRAINT `registros_transacciones_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`producto_id`),
  ADD CONSTRAINT `registros_transacciones_ibfk_3` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
