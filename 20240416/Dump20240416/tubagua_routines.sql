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
-- Dumping events for database 'tubagua'
--

--
-- Dumping routines for database 'tubagua'
--
/*!50003 DROP PROCEDURE IF EXISTS `deletePermisoPadre` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `deletePermisoPadre`(IN `inputPermiso` INT(10), IN `inputUsuario` VARCHAR(10), IN `inputModulo` INT(5))
BEGIN
    SELECT @varPadre := padre FROM modulo WHERE id = inputModulo LIMIT 1;
    SELECT @varUsuario := id FROM usuario WHERE codigo = inputUsuario LIMIT 1;
	DELETE FROM permiso WHERE id = inputPermiso;
    IF NOT EXISTS(SELECT id FROM permiso WHERE usuario_id = @varUsuario AND modulo_id = (SELECT id FROM modulo WHERE padre = @varPadre3))
    THEN
		SET SQL_SAFE_UPDATES = 0;
		DELETE FROM permiso WHERE usuario_id = @varUsuario AND modulo_id = @varPadre;
        SET SQL_SAFE_UPDATES = 1;
    END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `desc_categoria` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `desc_categoria`(IN `setArticuloId` INT, IN `setClienteId` INT)
BEGIN
	IF EXISTS (SELECT porcentaje FROM descuento_categoria WHERE categoria_id = (SELECT sscategoria_id FROM articulo WHERE id = setArticuloId) AND cliente_id = setClienteId) THEN 
    BEGIN
		SELECT (lpd.precio_local - (lpd.precio_local*dc.porcentaje/100)) AS precio_local
        FROM descuento_categoria dc
        INNER JOIN listado_precio_d lpd ON articulo_id = setArticuloId AND listado_precio_id = 1
        INNER JOIN articulo a ON a.id = setArticuloId
        WHERE dc.categoria_id = a.sscategoria_id
        AND dc.cliente_id = setClienteId;
	END;
    ELSEIF EXISTS (SELECT porcentaje FROM descuento_categoria WHERE categoria_id = (SELECT scategoria_id FROM articulo WHERE id = setArticuloId) AND cliente_id = setClienteId) THEN
    BEGIN
		SELECT (lpd.precio_local - (lpd.precio_local*dc.porcentaje/100)) precio_local
        FROM descuento_categoria dc
        INNER JOIN listado_precio_d lpd ON articulo_id = setArticuloId AND listado_precio_id = 1
        INNER JOIN articulo a ON a.id = setArticuloId
        WHERE dc.categoria_id = a.scategoria_id
        AND dc.cliente_id = setClienteId;
    END;
    ELSEIF EXISTS (SELECT porcentaje FROM descuento_categoria WHERE categoria_id = (SELECT categoria_id FROM articulo WHERE id = setArticuloId) AND cliente_id = setClienteId) THEN
    BEGIN
		SELECT (lpd.precio_local - (lpd.precio_local*dc.porcentaje/100)) precio_local
        FROM descuento_categoria dc
        INNER JOIN listado_precio_d lpd ON articulo_id = setArticuloId AND listado_precio_id = 1
        INNER JOIN articulo a ON a.id = setArticuloId
        WHERE dc.categoria_id = a.categoria_id
        AND dc.cliente_id = setClienteId;
    END;
    ELSE
    BEGIN
		SELECT precio_local
        FROM listado_precio_d 
        WHERE articulo_id = setArticuloId 
        AND listado_precio_id = 1
        ORDER BY id DESC;
    END;
    END IF;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `insertPermisoPadre` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertPermisoPadre`(IN `inputUsuario` VARCHAR(10), IN `inputModulo` INT(5), IN `inputId` INT(5))
BEGIN
INSERT INTO permiso(usuario_id, modulo_id, crear, lectura, modificar, eliminar, user_id) 
        VALUES((SELECT id FROM usuario WHERE codigo = inputUsuario),inputModulo, 1,1,1,1,inputId);
IF NOT EXISTS (SELECT p.id FROM permiso p WHERE usuario_id = (SELECT u.id FROM usuario u WHERE u.codigo = inputUsuario) 
AND modulo_id = (SELECT m.padre FROM modulo m WHERE m.id = inputModulo))
	THEN
		INSERT INTO permiso(usuario_id, modulo_id, crear, lectura, modificar, eliminar, user_id)
		VALUES((SELECT u.id FROM usuario u WHERE u.codigo = inputUsuario),(SELECT m.padre FROM modulo m WHERE m.id = inputModulo),1,1,1,1,inputId);
END IF; 
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `insertUsuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertUsuario`(IN `setCodigo` VARCHAR(10), IN `setNombres` VARCHAR(100), IN `setApellidos` VARCHAR(100), IN `setUsuario` VARCHAR(45), IN `setPassword` VARCHAR(250), IN `setEmail` VARCHAR(100), IN `setCelular_personal` VARCHAR(25), IN `setCelular_empresa` VARCHAR(25), IN `setRol_id` INT(11), IN `setUsuario_id` INT(11))
BEGIN
	INSERT INTO usuario(active, estado, codigo, nombres, apellidos, usuario, password, email, celular_personal, celular_empresa, rol_id, usuario_id)
    VALUES(1,1,setCodigo,setNombres,setApellidos,setUsuario, AES_ENCRYPT(setPassword,'Tubagua2022$.#'),setEmail,setCelular_personal,setCelular_empresa,
    setRol_id,setUsuario_id);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `loginUser` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `loginUser`(IN `setUsuario` VARCHAR(45), IN `setPassword` VARCHAR(250), OUT `respuesta` VARCHAR(50))
BEGIN
	IF EXISTS (SELECT id FROM usuario WHERE usuario = setUsuario AND password = (AES_ENCRYPT(setPassword,'Tubagua2022$.#'))) THEN
		BEGIN
			SELECT '1' AS login, id, usuario FROM usuario WHERE usuario = setUsuario;
		END;
		ELSE
		BEGIN
			SELECT '0' AS login;
		END;
    END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `updateCodant` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateCodant`(IN `ingreso_dIn` INT, IN `codigoIn` VARCHAR(11))
BEGIN
	IF EXISTS (SELECT id FROM orden_compra_proveerdor WHERE articulo_id = (SELECT articulo_id FROM ingreso_d WHERE id = ingreso_dIn LIMIT 1) AND 
		proveedor_id = (SELECT proveedor_id FROM ingreso WHERE id = (SELECT ingreso_id FROM ingreso_d WHERE id = ingreso_dIn LIMIT 1) LIMIT 1)) THEN 
    BEGIN
		UPDATE orden_compra_proveerdor SET codigo = codigoIn 
        WHERE articulo_id = (SELECT articulo_id FROM ingreso_d WHERE id = ingreso_dIn LIMIT 1) AND
        proveedor_id = (SELECT proveedor_id FROM ingreso WHERE id = (SELECT ingreso_id FROM ingreso_d WHERE id = ingreso_dIn LIMIT 1) LIMIT 1);
    END;
	ELSE
    BEGIN
		INSERT INTO orden_compra_proveerdor(codigo, articulo_id, proveedor_id)
        VALUE(codigoIn, (SELECT articulo_id FROM ingreso_d WHERE id = ingreso_dIn LIMIT 1),
        (SELECT proveedor_id FROM ingreso WHERE id = (SELECT ingreso_id FROM ingreso_d WHERE id = ingreso_dIn LIMIT 1) LIMIT 1));
    END;
    END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `updatePasswordUsuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `updatePasswordUsuario`(IN `setCodigoViejo` VARCHAR(10), IN `setCodigo` VARCHAR(10), IN `setNombres` VARCHAR(100), IN `setApellidos` VARCHAR(100), IN `setUsuario` VARCHAR(45), IN `setPassword` VARCHAR(250), IN `setEmail` VARCHAR(100), IN `setCelular_personal` VARCHAR(25), IN `setCelular_empresa` VARCHAR(25), IN `setRol_id` INT(11), IN `setEstado` INT(11))
BEGIN
	UPDATE usuario SET codigo = setCodigo, nombres = setNombres, apellidos = setApellidos, 
    usuario = setUsuario, password = AES_ENCRYPT(setPassword,'Tubagua2022$.#'), email = setEmail, 
    rol_id = setRol_id, active = setEstado, celular_personal = setCelular_personal, celular_empresa = setCelular_empresa
    WHERE codigo = setCodigoViejo;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `validarVendedorReporte` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `validarVendedorReporte`(IN `setIdUser` INT)
BEGIN
	IF( (SELECT rol_id FROM usuario WHERE id = setIdUser ) = 3 ) THEN 
		BEGIN
			SELECT id, codigo, nombres, apellidos FROM usuario
            WHERE id = setIdUser;
		END;
	ELSE 
		BEGIN
			SELECT u.id, u.codigo, u.nombres, u.apellidos FROM metas m
			INNER JOIN usuario u ON u.id = m.usuario_id
			ORDER BY u.codigo ASC;
		END;
    END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-16 19:18:30
