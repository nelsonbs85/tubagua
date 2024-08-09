-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: tubaguagt.com    Database: tubagua
-- ------------------------------------------------------
-- Server version	8.0.36-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `modulo`
--

DROP TABLE IF EXISTS `modulo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `modulo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `active` int NOT NULL DEFAULT '1',
  `nombre` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tipo` int NOT NULL,
  `padre` int NOT NULL,
  `link` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `orden` int DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=138 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modulo`
--

LOCK TABLES `modulo` WRITE;
/*!40000 ALTER TABLE `modulo` DISABLE KEYS */;
INSERT INTO `modulo` VALUES (1,1,'Articulos',0,0,'modulos/articulo/index.php',3),(2,1,'Inventario',0,0,'modulos/inventario/index.php',4),(3,1,'Facturacion',0,0,'modulos/factura/index.php',6),(4,1,'Clientes',0,0,'modulos/cliente/index.php',1),(7,1,'Empresa',0,0,'modulos/empresa/index.php',8),(20,1,'Orden de Compra',1,2,'modulos/ingreso_inv/index.php',5),(33,1,'Pedidos',0,0,'modulos/pedido2/index.php',5),(42,1,'Reportes',0,0,'modulos/ventas/index.php',9),(59,1,'Pedidos',1,33,'modulos/pedido/index.php',2),(60,1,'Lista Pedidos',1,33,'modulos/lista_pedidos/index.php',1),(61,1,'Facturas',1,3,'modulos/factura/index.php',1),(62,1,'Clientes',1,4,'modulos/cliente/index.php',1),(63,1,'Lista Ordenes de Compra',1,2,'modulos/lista_oc/index.php',6),(64,1,'Salidas Inv',1,2,'modulos/salidas_inv/index.php',7),(65,1,'Cobros',0,0,'modulos/cobros/index.php',7),(66,1,'Recibos',1,65,'modulos/recibos/index.php',1),(67,1,'Obtener Inventario',1,2,'modulos/get_inv/index.php',8),(68,1,'Actualizar',1,91,'modulos/actualizar/index.php',1),(69,1,'Cheques PostFechados',1,65,'modulos/cpost/index.php',2),(70,1,'Notas de Credito',1,65,'modulos/nota_credito/index.php',6),(71,1,'Anular Nota Credito',1,65,'modulos/anular_nc/index.php',7),(72,1,'Lista Notas Credito',1,65,'modulos/lista_nc/index.php',8),(73,1,'Operar Cobros',1,65,'modulos/operar_cobros/index.php',4),(76,1,'Movimientos',1,2,'modulos/movs/index.php',9),(77,1,'Ventas del Año',1,42,'modulos/ventas_año/index.php',1),(78,1,'Articulo',1,1,'modulos/articulo_v2/index.php',1),(79,1,'Guardar Comision',1,7,'modulos/gcomision/index.php',2),(80,1,'Estado de Cuenta',1,4,'modulos/estado_cuenta/index.php',2),(81,1,'Rechazos',1,65,'modulos/rechazos/index.php',5),(82,1,'Listado Precios',1,1,'modulos/listado_precio/index.php',2),(83,1,'Crear Recibos',1,7,'modulos/crear_rec/index.php',3),(84,1,'Guias Guatex',1,3,'modulos/guias_guatex/index.php',2),(85,1,'Ventas Por Vendedor',1,42,'modulos/ventas_vends/index.php',2),(86,1,'Cats/Marca/UniMed',1,1,'modulos/arts1/index.php',3),(87,1,'Cod/Nom/Peso/Fardo',1,1,'modulos/arts2/index.php',4),(88,1,'Anular Factura',1,3,'modulos/afactura/index.php',3),(89,1,'Unidad Medida',1,1,'modulos/unidad_medida/index.php',5),(90,1,'Modulos',1,91,'modulos/modulo/index.php',4),(91,1,'Sistemas',0,0,'modulos/sistemas/index.php',10),(92,1,'Marca',1,1,'modulos/marca/index.php',6),(94,1,'Usuarios',1,7,'modulos/usuario/index.php',4),(95,1,'Roles',1,7,'modulos/rol/index.php',5),(96,1,'Categoria',1,1,'modulos/categoria/index.php',7),(97,1,'Imagenes',1,1,'modulos/imagen/index.php',8),(98,1,'Orden Compra Inventario',1,2,'modulos/oc_inv/index.php',1),(99,1,'Lista Ajustes Inventario',1,2,'modulos/lita_oc_local/index.php',2),(100,1,'Ajustes Inventario',1,2,'modulos/ajuste_inventario/index.php',3),(101,1,'Ajuste Manual Inventario',1,2,'modulos/lista_ajustes/index.php',4),(102,1,'Contraseñas',1,3,'modulos/contra/index.php',4),(103,1,'Vends',0,0,'modulos/ventas/index.php',2),(104,1,'Sacar Rutas',1,103,'modulos/sacar_rutas/index.php',1),(105,1,'Cambiar Fechas Recs',1,65,'modulos/cambiar_fecha_recs/index.php',3),(106,1,'Incidencias',1,103,'modulos/incidencias/index.php',2),(107,1,'Manifiesto',1,3,'modulos/bultos/index.php',5),(108,1,'Exhibidores',1,4,'modulos/exhibidores/index.php',3),(109,1,'Reporte Bodega',1,33,'modulos/reporteBodega/index.php',3),(110,1,'Metas',1,7,'modulos/metas/index.php',6),(111,1,'Ventas',1,103,'modulos/reporteVendedores/index.php',3),(112,1,'Clientes Nuevos',1,103,'modulos/reporteClientes/index.php',4),(114,1,'Descuentos Categoria',1,4,'modulos/descuentoCategoria/index.php',4),(116,1,'Mejores Clientes',1,4,'modulos/mejoresClientes/index.php',5),(117,1,'Reporte Vendedores Mes/Año',1,103,'modulos/reporteVendedores2/index.php',5),(118,1,'Reporte Pedidos',1,103,'modulos/reportePedidos/index.php',6),(119,1,'Etiquetas caja',1,1,'modulos/etiqueta/index.php',9),(120,1,'Codigo de Barras',1,1,'modulos/codigo_barras_v1/index.php',11),(121,1,'Muestras',1,103,'modulos/muestras/index.php',7),(122,1,'Call Center',1,4,'modulos/call-center/index.php',6),(123,1,'Pronto Pago',1,33,'modulos/pronto_pago/index.php',4),(125,1,'Errores Bodega',1,7,'modulos/errores_bodega/index.php',7),(126,1,'Errores Artículos',1,7,'modulos/errores_articulo/index.php',8),(127,1,'Codigo QR',1,1,'modulos/codigo_qr/index.php',10),(128,1,'Reportes Contabilidad',1,91,'modulos/reporte_conta/index.php',3),(129,1,'Creditos',1,103,'modulos/creditos/index.php',8),(130,1,'Dashboard',1,91,'modulos/dashboard_v1/index.php',2),(131,1,'Sacar Pedidos por Lote',1,2,'modulos/pedido_arts/index.php',10),(132,1,'Buscar Depositos',1,65,'modulos/buscar_depositos/index.php',9),(133,1,'Proveedores',1,7,'modulos/proveedores/index.php',11),(134,1,'Pagos a Proveedores	',1,7,'modulos/pago_proveedor/index.php',5),(135,1,'Lista Pedido Facturación',1,33,'modulos/lista_pedidos_facturacion/index.php',15),(136,1,'Usuarios (Beta)',1,91,'modulos/usuario_v2/index.php',9),(137,1,'Subir Excel Proveedores',1,2,'modulos/subir_contenedor/index.php',99);
/*!40000 ALTER TABLE `modulo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-16 18:56:42
