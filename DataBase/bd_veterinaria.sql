-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-08-2021 a las 09:02:57
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_productos`
--

CREATE TABLE `categoria_productos` (
  `Id_Categoria_Producto` int(6) NOT NULL,
  `Nombre_Categoria` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cirugia`
--

CREATE TABLE `cirugia` (
  `Id_Cirugia` int(6) NOT NULL,
  `Motivo_Cirugia` varchar(200) DEFAULT NULL,
  `Descripcion_Cirugia` varchar(250) NOT NULL,
  `Id_Mascota` int(6) NOT NULL,
  `Id_Personal` int(6) DEFAULT NULL,
  `Id_Servicio` int(6) NOT NULL,
  `Id_Producto` int(6) NOT NULL,
  `Id_Cita` int(6) DEFAULT NULL,
  `Fecha_Cirugia` date NOT NULL,
  `Hora_Cirugia` date NOT NULL,
  `Baja_Cirugia` binary(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `Id_Cita` int(10) NOT NULL,
  `Id_Cliente` int(6) NOT NULL,
  `Id_Mascota` int(6) NOT NULL,
  `Fecha_Cita` date NOT NULL,
  `Hora_Cita` time NOT NULL,
  `Motivo_Cita` varchar(200) NOT NULL,
  `Id_EstadoCita` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ID_Cliente` int(6) NOT NULL,
  `Identificacion_Cliente` varchar(15) NOT NULL,
  `Primer_Nombre` varchar(15) NOT NULL,
  `Segundo_Nombre` varchar(15) NOT NULL,
  `Primer_Apellido` varchar(15) NOT NULL,
  `Segundo_Apellido` varchar(15) NOT NULL,
  `Id_Usuario` int(6) NOT NULL,
  `Id_Telefonos` int(6) NOT NULL,
  `Correo_Electronico` varchar(50) NOT NULL,
  `Direccion_Casa` varchar(200) NOT NULL,
  `Id_Mascota` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `Id_Compra` int(6) NOT NULL,
  `Fecha_Compra` date NOT NULL,
  `Id_Proveedor` int(6) NOT NULL,
  `Total_Compra` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `Id_Consulta` int(6) NOT NULL,
  `Diagnostico_Consulta` varchar(200) NOT NULL,
  `Fecha_Consulta` date NOT NULL,
  `Id_Cita` int(6) NOT NULL,
  `Id_Mascota` int(6) NOT NULL,
  `Id_Receta` int(6) NOT NULL,
  `Id_Personal` int(6) NOT NULL,
  `Baja_Consulta` binary(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos_proveedores`
--

CREATE TABLE `contactos_proveedores` (
  `Id_Contacto` int(6) NOT NULL,
  `Id_Proveedor` int(6) NOT NULL,
  `Nombre_Contacto` varchar(25) NOT NULL,
  `Apellidos_Contacto` int(25) NOT NULL,
  `Telefono_Celular` int(8) NOT NULL,
  `Correo_Electronico` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle de compra`
--

CREATE TABLE `detalle de compra` (
  `Id_Detalle_Compra` int(6) NOT NULL,
  `Id_Compra` int(6) NOT NULL,
  `Id_Producto` int(6) NOT NULL,
  `Cantidad_Producto` int(6) NOT NULL,
  `Id_Fabricante` int(11) NOT NULL,
  `Lote` int(11) NOT NULL,
  `Precio_Compra` float NOT NULL,
  `IVA_Compra` float NOT NULL,
  `Fecha_Vencimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `Id_Detalle_Venta` int(6) NOT NULL,
  `Id_Venta` int(6) NOT NULL,
  `Id_Producto` int(6) NOT NULL,
  `Id_Servicio` int(6) NOT NULL,
  `Cantidad` int(6) NOT NULL,
  `SubTotal_Venta` int(11) NOT NULL,
  `IVA_Venta` int(11) NOT NULL,
  `Total_Venta` int(11) NOT NULL,
  `Exento_IVA` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadoscita`
--

CREATE TABLE `estadoscita` (
  `Id_EstadoCita` int(6) NOT NULL,
  `Nombre_EstadoCita` varchar(15) NOT NULL,
  `Descripcion_EstadoCita` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fabricantes`
--

CREATE TABLE `fabricantes` (
  `Id_Fabricante` int(6) NOT NULL,
  `Nombre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `Id_Historial` int(6) NOT NULL,
  `Id_Mascota` int(6) NOT NULL,
  `Baja_Historial` binary(1) NOT NULL DEFAULT '0',
  `Id_Servicio` int(6) NOT NULL,
  `Id_Receta` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hospitalzacion`
--

CREATE TABLE `hospitalzacion` (
  `Id_Hospitalizacion` int(6) NOT NULL,
  `Fecha_Ingreso` date NOT NULL,
  `Hora_Hora` time NOT NULL,
  `Motivo` varchar(200) DEFAULT NULL,
  `Id_Jaula` int(6) DEFAULT NULL,
  `Id_Mascota` int(6) NOT NULL,
  `Id_Personal` int(6) DEFAULT NULL,
  `Id_Producto` int(6) DEFAULT NULL,
  `Id_Servicio` int(6) NOT NULL,
  `Fecha_Salida` date NOT NULL,
  `Hora_Salida` date NOT NULL,
  `Estado` binary(1) NOT NULL,
  `Baja_Hospitalizacion` binary(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jaulas`
--

CREATE TABLE `jaulas` (
  `Id_Jaula` int(6) NOT NULL,
  `Descripcion Jaula` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `Id_Mascota` int(6) NOT NULL,
  `Nombre_Mascota` varchar(15) NOT NULL,
  `Edad_Mascota` int(2) NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `Id_Especie` int(6) NOT NULL,
  `Descripcion_Mascota` varchar(200) NOT NULL,
  `Fecha_Registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `Id_Personal` int(6) NOT NULL,
  `Identificacion_Personal` varchar(15) NOT NULL,
  `Primer_Nombre` varchar(15) NOT NULL,
  `Segundo_Nombre` varchar(15) NOT NULL,
  `Primer_Apellido` varchar(15) NOT NULL,
  `Segundo_Apellido` varchar(15) NOT NULL,
  `Puesto_Trabajo` varchar(50) NOT NULL,
  `Area` int(6) NOT NULL,
  `Baja_Personal` binary(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentaciones_producto`
--

CREATE TABLE `presentaciones_producto` (
  `Id_Presentacion` int(6) NOT NULL,
  `Descripcion_Presentacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id_Producto` int(6) NOT NULL,
  `Codigo_Producto` varchar(20) NOT NULL,
  `Nombre_Producto` varchar(25) NOT NULL,
  `Id_Presentacion` int(6) NOT NULL,
  `ID_Categoria` int(6) NOT NULL,
  `Cantidad_Producto` int(6) NOT NULL,
  `Fecha_Vencimiento` date NOT NULL,
  `Precio_Venta` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `Id_Proveedor` int(6) NOT NULL,
  `RTN_Proveedor` varchar(16) NOT NULL,
  `Nombre_Legal` varchar(200) NOT NULL,
  `Direccion_Proveedor` varchar(200) NOT NULL,
  `Telefono_Proveedor` int(8) NOT NULL,
  `Estado_Proveedor` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas`
--

CREATE TABLE `recetas` (
  `Id_Receta` int(6) NOT NULL,
  `Id_Personal` int(6) NOT NULL,
  `Cantidad` int(3) NOT NULL,
  `Tratamiento_Medicamento` varchar(100) NOT NULL,
  `Dosificacion` varchar(25) NOT NULL,
  `Dias` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles_usuario`
--

CREATE TABLE `roles_usuario` (
  `Id_Rol` int(6) NOT NULL,
  `Rol` varchar(15) NOT NULL,
  `Descripcion_Rol` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `Id_Servicio` int(6) NOT NULL,
  `Nombre_Servicio` varchar(50) NOT NULL,
  `Precio_Servicio` int(11) NOT NULL,
  `Id_Tipo_Servicio` int(6) NOT NULL,
  `Id_Personal` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonos_clientes`
--

CREATE TABLE `telefonos_clientes` (
  `Id_Telefono_Cliente` int(6) NOT NULL,
  `Telefono_Cliente` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_especies`
--

CREATE TABLE `tipo_especies` (
  `Id_Especie` int(6) NOT NULL,
  `Tipo_Especie` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_servicios`
--

CREATE TABLE `tipo_servicios` (
  `Id_Tipo_Servicio` int(6) NOT NULL,
  `Tipo_Servicio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_clientes`
--

CREATE TABLE `usuarios_clientes` (
  `Id_Usuario_Cliente` int(6) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `CorreoElectronico` varchar(50) NOT NULL,
  `Nickname` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL,
  `Fecha_Registro` varchar(50) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios_clientes`
--

INSERT INTO `usuarios_clientes` (`Id_Usuario_Cliente`, `Nombre`, `CorreoElectronico`, `Nickname`, `password`, `Fecha_Registro`) VALUES
(0, 'Samuel Jose Cruz Pereira', 'SamuelCruz.HN@hotmail.com', 'SDark82', '123', '22-08-2021 00:55:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_empleados`
--

CREATE TABLE `usuarios_empleados` (
  `Id_Usuario_Empleado` int(6) NOT NULL,
  `Nickname` varchar(15) NOT NULL,
  `Id_Personal` int(6) NOT NULL,
  `Contraseña` varchar(25) NOT NULL,
  `Fecha_Registro` date NOT NULL,
  `Id_Rol` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `Id_Venta` int(11) NOT NULL,
  `Fecha_Venta` date NOT NULL,
  `Id_Mascota` int(6) NOT NULL,
  `Id_Cliente` int(6) NOT NULL,
  `Total_Venta` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria_productos`
--
ALTER TABLE `categoria_productos`
  ADD PRIMARY KEY (`Id_Categoria_Producto`);

--
-- Indices de la tabla `cirugia`
--
ALTER TABLE `cirugia`
  ADD PRIMARY KEY (`Id_Cirugia`),
  ADD KEY `Id_Mascota` (`Id_Mascota`,`Id_Personal`,`Id_Servicio`,`Id_Producto`,`Id_Cita`),
  ADD KEY `Id_Personal` (`Id_Personal`),
  ADD KEY `Id_Producto` (`Id_Producto`),
  ADD KEY `Id_Cita` (`Id_Cita`),
  ADD KEY `Id_Servicio` (`Id_Servicio`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`Id_Cita`),
  ADD UNIQUE KEY `Id_EstadoCita` (`Id_EstadoCita`),
  ADD KEY `Id_Cliente` (`Id_Cliente`),
  ADD KEY `Id_Mascota` (`Id_Mascota`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID_Cliente`),
  ADD KEY `Id_Telefonos` (`Id_Telefonos`),
  ADD KEY `Id_Telefonos_2` (`Id_Telefonos`),
  ADD KEY `Id_Mascota` (`Id_Mascota`),
  ADD KEY `Id_Usuario` (`Id_Usuario`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`Id_Compra`),
  ADD KEY `Id_Proveedor` (`Id_Proveedor`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`Id_Consulta`),
  ADD KEY `id_paciente` (`Id_Mascota`),
  ADD KEY `id_cita` (`Id_Cita`),
  ADD KEY `id_receta` (`Id_Receta`),
  ADD KEY `Id_Personal` (`Id_Personal`);

--
-- Indices de la tabla `contactos_proveedores`
--
ALTER TABLE `contactos_proveedores`
  ADD PRIMARY KEY (`Id_Contacto`),
  ADD KEY `Id_Proveedor` (`Id_Proveedor`);

--
-- Indices de la tabla `detalle de compra`
--
ALTER TABLE `detalle de compra`
  ADD PRIMARY KEY (`Id_Detalle_Compra`),
  ADD KEY `Id_Compra` (`Id_Compra`),
  ADD KEY `Id_Producto` (`Id_Producto`),
  ADD KEY `Id_Fabricante` (`Id_Fabricante`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`Id_Detalle_Venta`),
  ADD KEY `Id_Venta` (`Id_Venta`),
  ADD KEY `Id_Producto` (`Id_Producto`),
  ADD KEY `Id_Servicio` (`Id_Servicio`);

--
-- Indices de la tabla `estadoscita`
--
ALTER TABLE `estadoscita`
  ADD PRIMARY KEY (`Id_EstadoCita`);

--
-- Indices de la tabla `fabricantes`
--
ALTER TABLE `fabricantes`
  ADD PRIMARY KEY (`Id_Fabricante`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`Id_Historial`),
  ADD KEY `id_paciente` (`Id_Mascota`),
  ADD KEY `Id_Consulta` (`Id_Servicio`),
  ADD KEY `Id_Servicio` (`Id_Servicio`),
  ADD KEY `Id_Receta` (`Id_Receta`);

--
-- Indices de la tabla `hospitalzacion`
--
ALTER TABLE `hospitalzacion`
  ADD PRIMARY KEY (`Id_Hospitalizacion`),
  ADD KEY `id_paciente` (`Id_Mascota`),
  ADD KEY `id_personal` (`Id_Personal`),
  ADD KEY `id_jaula` (`Id_Jaula`),
  ADD KEY `id_medicamento` (`Id_Producto`),
  ADD KEY `Id_Jaula_2` (`Id_Jaula`,`Id_Mascota`,`Id_Personal`,`Id_Producto`,`Id_Servicio`),
  ADD KEY `Id_Jaula_3` (`Id_Jaula`,`Id_Mascota`,`Id_Personal`,`Id_Producto`,`Id_Servicio`),
  ADD KEY `Id_Servicio` (`Id_Servicio`);

--
-- Indices de la tabla `jaulas`
--
ALTER TABLE `jaulas`
  ADD PRIMARY KEY (`Id_Jaula`);

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`Id_Mascota`),
  ADD KEY `Id_Especie` (`Id_Especie`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`Id_Personal`);

--
-- Indices de la tabla `presentaciones_producto`
--
ALTER TABLE `presentaciones_producto`
  ADD PRIMARY KEY (`Id_Presentacion`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id_Producto`),
  ADD KEY `ID_Categoria` (`ID_Categoria`),
  ADD KEY `Id_Presentacion` (`Id_Presentacion`),
  ADD KEY `Id_Presentacion_2` (`Id_Presentacion`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`Id_Proveedor`),
  ADD UNIQUE KEY `RTN_Proveedor` (`RTN_Proveedor`);

--
-- Indices de la tabla `recetas`
--
ALTER TABLE `recetas`
  ADD PRIMARY KEY (`Id_Receta`),
  ADD KEY `Id_Personal` (`Id_Personal`);

--
-- Indices de la tabla `roles_usuario`
--
ALTER TABLE `roles_usuario`
  ADD PRIMARY KEY (`Id_Rol`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`Id_Servicio`),
  ADD KEY `Id_Tipo_Servicio` (`Id_Tipo_Servicio`),
  ADD KEY `Id_Personal` (`Id_Personal`);

--
-- Indices de la tabla `telefonos_clientes`
--
ALTER TABLE `telefonos_clientes`
  ADD PRIMARY KEY (`Id_Telefono_Cliente`);

--
-- Indices de la tabla `tipo_especies`
--
ALTER TABLE `tipo_especies`
  ADD PRIMARY KEY (`Id_Especie`);

--
-- Indices de la tabla `tipo_servicios`
--
ALTER TABLE `tipo_servicios`
  ADD PRIMARY KEY (`Id_Tipo_Servicio`);

--
-- Indices de la tabla `usuarios_clientes`
--
ALTER TABLE `usuarios_clientes`
  ADD PRIMARY KEY (`Id_Usuario_Cliente`);

--
-- Indices de la tabla `usuarios_empleados`
--
ALTER TABLE `usuarios_empleados`
  ADD PRIMARY KEY (`Id_Usuario_Empleado`),
  ADD KEY `Id_Cliente` (`Id_Personal`),
  ADD KEY `Id_Rol` (`Id_Rol`),
  ADD KEY `Id_Cliente_2` (`Id_Personal`),
  ADD KEY `Id_Personal` (`Id_Personal`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`Id_Venta`),
  ADD KEY `Id_Cliente` (`Id_Cliente`),
  ADD KEY `Id_Mascota` (`Id_Mascota`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria_productos`
--
ALTER TABLE `categoria_productos`
  MODIFY `Id_Categoria_Producto` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cirugia`
--
ALTER TABLE `cirugia`
  MODIFY `Id_Cirugia` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `Id_Cita` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID_Cliente` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `Id_Compra` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `Id_Consulta` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contactos_proveedores`
--
ALTER TABLE `contactos_proveedores`
  MODIFY `Id_Contacto` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle de compra`
--
ALTER TABLE `detalle de compra`
  MODIFY `Id_Detalle_Compra` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `Id_Detalle_Venta` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estadoscita`
--
ALTER TABLE `estadoscita`
  MODIFY `Id_EstadoCita` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fabricantes`
--
ALTER TABLE `fabricantes`
  MODIFY `Id_Fabricante` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `Id_Historial` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hospitalzacion`
--
ALTER TABLE `hospitalzacion`
  MODIFY `Id_Hospitalizacion` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jaulas`
--
ALTER TABLE `jaulas`
  MODIFY `Id_Jaula` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `Id_Personal` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `presentaciones_producto`
--
ALTER TABLE `presentaciones_producto`
  MODIFY `Id_Presentacion` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id_Producto` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `Id_Proveedor` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `recetas`
--
ALTER TABLE `recetas`
  MODIFY `Id_Receta` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles_usuario`
--
ALTER TABLE `roles_usuario`
  MODIFY `Id_Rol` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `telefonos_clientes`
--
ALTER TABLE `telefonos_clientes`
  MODIFY `Id_Telefono_Cliente` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_especies`
--
ALTER TABLE `tipo_especies`
  MODIFY `Id_Especie` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_servicios`
--
ALTER TABLE `tipo_servicios`
  MODIFY `Id_Tipo_Servicio` int(6) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cirugia`
--
ALTER TABLE `cirugia`
  ADD CONSTRAINT `cirugia_ibfk_2` FOREIGN KEY (`Id_Mascota`) REFERENCES `mascotas` (`Id_Mascota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cirugia_ibfk_3` FOREIGN KEY (`Id_Personal`) REFERENCES `personal` (`Id_Personal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cirugia_ibfk_4` FOREIGN KEY (`Id_Producto`) REFERENCES `productos` (`Id_Producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cirugia_ibfk_5` FOREIGN KEY (`Id_Cita`) REFERENCES `citas` (`Id_Cita`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cirugia_ibfk_6` FOREIGN KEY (`Id_Servicio`) REFERENCES `servicios` (`Id_Servicio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`Id_Mascota`) REFERENCES `mascotas` (`Id_Mascota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_ibfk_3` FOREIGN KEY (`Id_Cliente`) REFERENCES `clientes` (`ID_Cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_ibfk_4` FOREIGN KEY (`Id_EstadoCita`) REFERENCES `estadoscita` (`Id_EstadoCita`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`Id_Telefonos`) REFERENCES `telefonos_clientes` (`Id_Telefono_Cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `clientes_ibfk_2` FOREIGN KEY (`Id_Mascota`) REFERENCES `mascotas` (`Id_Mascota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `clientes_ibfk_3` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuarios_clientes` (`Id_Usuario_Cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`Id_Proveedor`) REFERENCES `proveedores` (`Id_Proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`Id_Personal`) REFERENCES `personal` (`Id_Personal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `consulta_ibfk_2` FOREIGN KEY (`Id_Mascota`) REFERENCES `mascotas` (`Id_Mascota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `consulta_ibfk_3` FOREIGN KEY (`Id_Cita`) REFERENCES `citas` (`Id_Cita`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `consulta_ibfk_4` FOREIGN KEY (`Id_Receta`) REFERENCES `recetas` (`Id_Receta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `contactos_proveedores`
--
ALTER TABLE `contactos_proveedores`
  ADD CONSTRAINT `contactos_proveedores_ibfk_1` FOREIGN KEY (`Id_Proveedor`) REFERENCES `proveedores` (`Id_Proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle de compra`
--
ALTER TABLE `detalle de compra`
  ADD CONSTRAINT `detalle de compra_ibfk_1` FOREIGN KEY (`Id_Fabricante`) REFERENCES `fabricantes` (`Id_Fabricante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle de compra_ibfk_2` FOREIGN KEY (`Id_Producto`) REFERENCES `productos` (`Id_Producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle de compra_ibfk_3` FOREIGN KEY (`Id_Compra`) REFERENCES `compras` (`Id_Compra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `detalle_venta_ibfk_1` FOREIGN KEY (`Id_Servicio`) REFERENCES `servicios` (`Id_Servicio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_venta_ibfk_2` FOREIGN KEY (`Id_Venta`) REFERENCES `ventas` (`Id_Venta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`Id_Servicio`) REFERENCES `servicios` (`Id_Servicio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `historial_ibfk_2` FOREIGN KEY (`Id_Mascota`) REFERENCES `mascotas` (`Id_Mascota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `historial_ibfk_3` FOREIGN KEY (`Id_Receta`) REFERENCES `recetas` (`Id_Receta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `hospitalzacion`
--
ALTER TABLE `hospitalzacion`
  ADD CONSTRAINT `hospitalzacion_ibfk_1` FOREIGN KEY (`Id_Personal`) REFERENCES `personal` (`Id_Personal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hospitalzacion_ibfk_2` FOREIGN KEY (`Id_Servicio`) REFERENCES `servicios` (`Id_Servicio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hospitalzacion_ibfk_3` FOREIGN KEY (`Id_Jaula`) REFERENCES `jaulas` (`Id_Jaula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hospitalzacion_ibfk_4` FOREIGN KEY (`Id_Mascota`) REFERENCES `mascotas` (`Id_Mascota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hospitalzacion_ibfk_5` FOREIGN KEY (`Id_Producto`) REFERENCES `productos` (`Id_Producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD CONSTRAINT `mascotas_ibfk_2` FOREIGN KEY (`Id_Mascota`) REFERENCES `ventas` (`Id_Mascota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mascotas_ibfk_3` FOREIGN KEY (`Id_Especie`) REFERENCES `tipo_especies` (`Id_Especie`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`Id_Producto`) REFERENCES `detalle_venta` (`Id_Producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`ID_Categoria`) REFERENCES `categoria_productos` (`Id_Categoria_Producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_3` FOREIGN KEY (`Id_Presentacion`) REFERENCES `presentaciones_producto` (`Id_Presentacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `servicios_ibfk_1` FOREIGN KEY (`Id_Tipo_Servicio`) REFERENCES `tipo_servicios` (`Id_Tipo_Servicio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `servicios_ibfk_2` FOREIGN KEY (`Id_Personal`) REFERENCES `personal` (`Id_Personal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_empleados`
--
ALTER TABLE `usuarios_empleados`
  ADD CONSTRAINT `usuarios_empleados_ibfk_1` FOREIGN KEY (`Id_Rol`) REFERENCES `roles_usuario` (`Id_Rol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_empleados_ibfk_2` FOREIGN KEY (`Id_Personal`) REFERENCES `personal` (`Id_Personal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`Id_Cliente`) REFERENCES `clientes` (`ID_Cliente`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
