/*******Debemos Copiar las Tablas que comienzen POR ******/

base_

cruge_


/******Todas Nuestras Tablas deben tener Estos Campos ******/

`in_stat` varchar(1) NOT NULL DEFAULT 'A',
`usr_crea` varchar(10) NOT NULL,
`fe_crea` datetime NOT NULL,
`usr_modf` varchar(10) DEFAULT NULL,
`fe_modf` datetime DEFAULT NULL,
`tx_obs` varchar(250) NOT NULL,








-- ----------------------------
-- Table structure for `base_active_record_log`
-- ----------------------------
DROP TABLE IF EXISTS `base_active_record_log`;
CREATE TABLE `base_active_record_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(255) DEFAULT NULL,
  `action` varchar(20) DEFAULT NULL,
  `model` varchar(45) DEFAULT NULL,
  `idModel` int(10) unsigned DEFAULT NULL,
  `field` varchar(45) DEFAULT NULL,
  `creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userid` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=725 DEFAULT CHARSET=utf8;


-- ----------------------------
-- Table structure for `base_asig_org`
-- ----------------------------
DROP TABLE IF EXISTS `base_asig_org`;
CREATE TABLE `base_asig_org` (
  `id_asig_org` int(11) NOT NULL AUTO_INCREMENT,
  `co_asig_org` int(10) NOT NULL,
  `nu_docm_idnt` int(10) NOT NULL,
  `co_org` int(10) NOT NULL,
  `fe_crea` datetime DEFAULT NULL,
  `fe_modf` datetime DEFAULT NULL,
  `usr_crea` varchar(10) DEFAULT NULL,
  `usr_modf` varchar(10) DEFAULT NULL,
  `in_stat` char(1) NOT NULL DEFAULT 'A',
  `tx_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`co_asig_org`),
  UNIQUE KEY `uk_id_asig_org` (`id_asig_org`),
  KEY `idx_asig_org_nu_docm_idnt` (`nu_docm_idnt`),
  KEY `idx_asig_org_co_org` (`co_org`),
  CONSTRAINT `fk_asig_org_co_org` FOREIGN KEY (`co_org`) REFERENCES `base_org` (`co_org`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_asig_org_nu_doc` FOREIGN KEY (`nu_docm_idnt`) REFERENCES `base_empleados` (`nu_docm_idnt`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COMMENT='tabla de usuarios del sistema';

-- ----------------------------
-- Records of base_asig_org
-- ----------------------------
INSERT INTO `base_asig_org` VALUES ('20', '1', '15481004', '1007', '2014-02-04 18:03:21', '2014-02-05 09:11:00', '1', '1', 'A', null);
INSERT INTO `base_asig_org` VALUES ('22', '2', '15481004', '1006', '2014-02-04 18:05:14', '2014-02-04 18:05:14', '1', '1', 'I', null);
INSERT INTO `base_asig_org` VALUES ('23', '3', '15481004', '1003', '2014-02-04 18:05:22', '2014-02-04 18:05:22', '1', '1', 'I', null);
INSERT INTO `base_asig_org` VALUES ('24', '4', '15481004', '1006', '2014-02-05 09:11:00', '2014-02-05 09:11:00', '1', '1', 'I', null);

-- ----------------------------
-- Table structure for `base_empleados`
-- ----------------------------
DROP TABLE IF EXISTS `base_empleados`;
CREATE TABLE `base_empleados` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nu_docm_idnt` int(10) NOT NULL,
  `nu_docm_idnt_supv` int(10) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `nb_pers` varchar(100) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `ldap_login` bit(1) NOT NULL DEFAULT b'0',
  `fe_crea` datetime DEFAULT NULL,
  `fe_modf` datetime DEFAULT NULL,
  `usr_crea` varchar(10) DEFAULT NULL,
  `usr_modf` varchar(10) DEFAULT NULL,
  `in_stat` char(1) NOT NULL DEFAULT 'A',
  `tx_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`nu_docm_idnt`),
  UNIQUE KEY `uk_id_usuario` (`id_usuario`),
  UNIQUE KEY `idx_username` (`username`),
  KEY `idx_nu_docm_idnt_supv` (`nu_docm_idnt_supv`),
  CONSTRAINT `fk_nu_docm_idnt` FOREIGN KEY (`nu_docm_idnt_supv`) REFERENCES `base_empleados` (`nu_docm_idnt`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_username` FOREIGN KEY (`username`) REFERENCES `cruge_user` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='tabla de asignacion de usuarios a organizacion';

-- ----------------------------
-- Records of base_empleados
-- ----------------------------
INSERT INTO `base_empleados` VALUES ('8', '15480325', '15480325', 'lascan01', 'Ascanio Paez Luis Alberto', 'lascan01@cantv.com.ve', '', '2014-02-05 14:29:59', '2014-05-07 13:56:25', '1', 'admin', 'A', '');
INSERT INTO `base_empleados` VALUES ('9', '15480326', null, 'luis2apg', 'Ascanio Paez Luis Alberto', 'luis2apg@gmail.com', '', '2014-02-06 09:47:07', '2014-02-06 09:47:07', '1', '1', 'A', 'ninguna');
INSERT INTO `base_empleados` VALUES ('7', '15481004', null, 'averen01', 'VERENZUELA ANDRES', 'averen01@cantv.com.ve', '', '2014-02-01 12:06:11', '2014-02-04 17:50:16', '1', '1', 'A', '');

-- ----------------------------
-- Table structure for `base_org`
-- ----------------------------
DROP TABLE IF EXISTS `base_org`;
CREATE TABLE `base_org` (
  `id_org` int(11) NOT NULL AUTO_INCREMENT,
  `co_org` int(10) NOT NULL,
  `co_org_dpnd` int(10) DEFAULT NULL,
  `nb_org` varchar(128) NOT NULL,
  `tx_descripcion` varchar(250) NOT NULL,
  `abv_org` varchar(10) DEFAULT NULL,
  `fe_crea` datetime DEFAULT NULL,
  `fe_modf` datetime DEFAULT NULL,
  `usr_crea` varchar(10) DEFAULT NULL,
  `usr_modf` varchar(10) DEFAULT NULL,
  `in_stat` char(1) NOT NULL DEFAULT 'A',
  `tx_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`co_org`),
  UNIQUE KEY `uk_id_org` (`id_org`),
  KEY `idx_co_org_dpnd` (`co_org_dpnd`),
  CONSTRAINT `fk_co_org` FOREIGN KEY (`co_org_dpnd`) REFERENCES `base_org` (`co_org`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='tabla de estrutura organizativa';

-- ----------------------------
-- Records of base_org
-- ----------------------------
INSERT INTO `base_org` VALUES ('2', '1001', '1001', 'CANTV', 'Compañia Anónima Nacional Teléfonos de Venezuela', 'CANTV', '2014-01-27 15:10:21', '2014-02-04 14:11:38', '1', '1', 'A', '');
INSERT INTO `base_org` VALUES ('3', '1002', '1001', 'Presidencia', 'Presidencia Cantv', '', '2014-01-27 15:24:45', '2014-02-04 14:11:51', '1', '1', 'A', '');
INSERT INTO `base_org` VALUES ('4', '1003', '1002', 'Vicepresidencia Ejecutiva', 'Vicepresidencia Ejecutiva', 'VPE', '2014-01-27 15:25:27', '2014-02-04 14:12:14', '1', '1', 'A', '');
INSERT INTO `base_org` VALUES ('5', '1004', '1003', 'Gcia. Gral.Tecnología y Operaciones', 'Gcia. Gral.Tecnología y Operaciones', 'GGTO', '2014-01-27 15:26:25', '2014-02-04 15:16:23', '1', '1', 'A', '');
INSERT INTO `base_org` VALUES ('7', '1005', '1004', 'Gcia. Ing. Desarrollo y Const. IT/IS', 'Gcia. Ing. Desarrollo y Const. IT/IS', 'GIDC IT/IS', '2014-01-27 15:36:56', '2014-02-04 15:16:49', '1', '1', 'A', '');
INSERT INTO `base_org` VALUES ('8', '1006', '1005', 'Gcia. Atención al Cliente', 'Gcia. Atención al Cliente', 'GAC', '2014-01-27 15:37:59', '2014-02-04 17:42:26', '1', '1', 'A', '');
INSERT INTO `base_org` VALUES ('9', '1007', '1005', 'Gcia. Ingeniería de Soluciones', 'Gcia. Ingeniería de Soluciones', 'GIS', '2014-01-27 15:50:44', '2014-02-04 17:42:57', '1', '1', 'A', '');
INSERT INTO `base_org` VALUES ('10', '1008', '1005', 'Gcia. Entrega de Soluciones', 'Gcia. Entrega de Soluciones', 'GES', '2014-01-27 15:51:27', '2014-02-04 17:43:21', '1', '1', 'A', '');
INSERT INTO `base_org` VALUES ('11', '1009', '1005', 'Gcia. Centro Transacciones Corporativas', 'Gcia. Centro Transacciones Corporativas', 'GCTC', '2014-01-27 15:52:05', '2014-02-04 17:43:39', '1', '1', 'A', '');
INSERT INTO `base_org` VALUES ('12', '1010', '1005', 'Gcia. Facturación', 'Gcia. Facturación', 'GF', '2014-01-27 15:52:51', '2014-02-04 17:43:50', '1', '1', 'A', '');
INSERT INTO `base_org` VALUES ('13', '1011', '1005', 'Gcia. Des.Mantto.Calidad de Aplicaciones', 'Gcia. Des.Mantto.Calidad de Aplicaciones', 'GDMCA', '2014-01-27 15:53:35', '2014-02-04 17:44:31', '1', '1', 'A', '');


-- ----------------------------
-- Table structure for `cruge_authassignment`
-- ----------------------------
DROP TABLE IF EXISTS `cruge_authassignment`;
CREATE TABLE `cruge_authassignment` (
  `userid` int(11) NOT NULL,
  `bizrule` text,
  `data` text,
  `itemname` varchar(64) NOT NULL,
  PRIMARY KEY (`userid`,`itemname`),
  KEY `fk_cruge_authassignment_cruge_authitem1` (`itemname`),
  KEY `fk_cruge_authassignment_user` (`userid`),
  CONSTRAINT `fk_cruge_authassignment_cruge_authitem1` FOREIGN KEY (`itemname`) REFERENCES `cruge_authitem` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cruge_authassignment_user` FOREIGN KEY (`userid`) REFERENCES `cruge_user` (`iduser`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cruge_authassignment
-- ----------------------------
INSERT INTO `cruge_authassignment` VALUES ('11', null, 'n;', 'empleados_consultar');
INSERT INTO `cruge_authassignment` VALUES ('11', null, 'N;', 'localidad_consultar');
INSERT INTO `cruge_authassignment` VALUES ('11', null, 'n;', 'organizaciones_consultar');
INSERT INTO `cruge_authassignment` VALUES ('11', null, 'n;', 'usuarios_consultar');

-- ----------------------------
-- Table structure for `cruge_authitem`
-- ----------------------------
DROP TABLE IF EXISTS `cruge_authitem`;
CREATE TABLE `cruge_authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cruge_authitem
-- ----------------------------
INSERT INTO `cruge_authitem` VALUES ('action_amborg_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_amborg_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_amborg_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_amborg_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_amborg_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_amborg_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_asigorg_admin', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_asigorg_create', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_asigorg_delete', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_asigorg_index', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_asigorg_update', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_asigorg_view', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_cueprinfic_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_cueprinfic_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_cueprinfic_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_cueprinfic_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_cueprinfic_listaestado', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_cueprinfic_listaorganismo', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_cueprinfic_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_cueprinfic_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_datorgres_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_datorgres_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_datorgres_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_datorgres_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_datorgres_listaestado', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_datorgres_listaorganismo', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_datorgres_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_datorgres_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_desgeooe_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_desgeooe_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_desgeooe_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_desgeooe_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_desgeooe_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_desgeooe_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_empleados_admin', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_empleados_create', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_empleados_delete', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_empleados_index', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_empleados_update', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_empleados_view', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_entesLocalidades_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_enteslocalidades_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_enteslocalidades_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_enteslocalidades_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_enteslocalidades_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_enteslocalidades_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_estado_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_estado_create', '0', '', '', 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_estado_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_estado_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_estado_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_estado_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha1_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha1_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha1_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha1_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha1_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha1_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha2_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha2_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha2_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha2_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha2_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha2_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha3_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha3_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha3_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha3_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha3_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha3_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha4_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha4_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha4_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha4_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha4_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha4_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha5_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha5_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha5_datosorganismof5', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha5_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha5_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha5_listaestadof5', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha5_listaorganismof5', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha5_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ficha5_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_insfue_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_insfue_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_insfue_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_insfue_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_insfue_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_insfue_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_insperfue_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_insperfue_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_insperfue_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_insperfue_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_insperfue_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_insperfue_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_metodorecdat_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_metodorecdat_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_metodorecdat_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_metodorecdat_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_metodorecdat_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_metodorecdat_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_metrecdat_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_metrecdat_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_metrecdat_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_metrecdat_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_metrecdat_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_metrecdat_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_moneda_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_moneda_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_moneda_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_moneda_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_moneda_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_moneda_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_municipio_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_municipio_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_municipio_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_municipio_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_municipio_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_municipio_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_objplapat_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_objplapat_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_objplapat_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_objplapat_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_objplapat_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_objplapat_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_orgads_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_orgads_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_orgads_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_orgads_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_orgads_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_orgads_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_orgres_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_orgres_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_orgres_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_orgres_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_orgres_listamunicipio', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_orgres_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_orgres_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_org_admin', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_org_create', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_org_delete', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_org_index', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_org_update', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_org_view', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_peractoe_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_peractoe_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_peractoe_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_peractoe_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_peractoe_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_peractoe_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_sectem_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_sectem_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_sectem_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_sectem_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_sectem_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_sectem_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_site_captcha', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_site_contact', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_site_error', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_site_index', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_site_login', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_site_logout', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_site_page', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_tipolocalidades_admin', '0', '', '', 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_tipolocalidades_create', '0', '', '', 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_tipolocalidades_delete', '0', '', '', 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_tipolocalidades_index', '0', '', '', 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_tipolocalidades_update', '0', '', '', 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_tipolocalidades_view', '0', '', '', 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_tipoOrdenServicio_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_tipoOrdenServicio_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_tipoordenservicio_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_tipoOrdenServicio_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_tipoordenservicio_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_tipoOrdenServicio_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_tipope_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_tipope_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_tipope_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_tipope_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_tipope_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_tipope_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_ui_editprofile', '0', '', '', 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_ui_fieldsadmincreate', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_ui_fieldsadmindelete', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_ui_fieldsadminlist', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_ui_fieldsadminupdate', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_ui_rbacajaxassignment', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_ui_rbacajaxsetchilditem', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_ui_rbacauthitemchilditems', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_ui_rbacauthitemcreate', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_ui_rbacauthitemdelete', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_ui_rbacauthitemupdate', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_ui_rbaclistops', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_ui_rbaclistroles', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_ui_rbaclisttasks', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_ui_rbacusersassignments', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_ui_sessionadmin', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_ui_sessionadmindelete', '0', '', '', 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_ui_systemupdate', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_ui_usermanagementadmin', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_ui_usermanagementcreate', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_ui_usermanagementdelete', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_ui_usermanagementupdate', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_ui_usersaved', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('action_usupriinf_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_usupriinf_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_usupriinf_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_usupriinf_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_usupriinf_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_usupriinf_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_varf5_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_varf5_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_varf5_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_varf5_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_varf5_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_varf5_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_varunif1_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_varunif1_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_varunif1_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_varunif1_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_varunif1_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_varunif1_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_varunif2_admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_varunif2_create', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_varunif2_delete', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_varunif2_index', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_varunif2_update', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('action_varunif2_view', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('admin', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_amborg', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_asigorg', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('controller_cueprinfic', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_datorgres', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_desgeooe', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_empleados', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('controller_enteslocalidades', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_estado', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_ficha1', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_ficha2', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_ficha3', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_ficha4', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_ficha5', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_insfue', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_insperfue', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_metodorecdat', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_metrecdat', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_moneda', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_municipio', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_objplapat', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_org', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('controller_orgads', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_orgres', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_peractoe', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_sectem', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_site', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('controller_tipolocalidades', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_tipoordenservicio', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_tipope', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_usuarios', '0', '', null, 'n;');
INSERT INTO `cruge_authitem` VALUES ('controller_usupriinf', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_varf5', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_varunif1', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('controller_varunif2', '0', '', null, 'N;');
INSERT INTO `cruge_authitem` VALUES ('edit-advanced-profile-features', '0', '', '', 'n;');
INSERT INTO `cruge_authitem` VALUES ('empleados_actualizar', '1', '', '', 'n;');
INSERT INTO `cruge_authitem` VALUES ('empleados_administrar', '2', '', '', 'n;');
INSERT INTO `cruge_authitem` VALUES ('empleados_agregar', '1', '', '', 'n;');
INSERT INTO `cruge_authitem` VALUES ('empleados_consultar', '2', '', '', 'n;');
INSERT INTO `cruge_authitem` VALUES ('empleados_eliminar', '1', '', '', 'n;');
INSERT INTO `cruge_authitem` VALUES ('empleados_listar', '1', '', '', 'n;');
INSERT INTO `cruge_authitem` VALUES ('goradmin', '0', '', '', 'n;');
INSERT INTO `cruge_authitem` VALUES ('localidad_administrar', '2', '', '', 'N;');
INSERT INTO `cruge_authitem` VALUES ('localidad_consultar', '2', '', '', 'N;');
INSERT INTO `cruge_authitem` VALUES ('organizaciones_actualizar', '1', '', '', 'n;');
INSERT INTO `cruge_authitem` VALUES ('organizaciones_administrar', '2', '', '', 'n;');
INSERT INTO `cruge_authitem` VALUES ('organizaciones_agregar', '1', '', '', 'n;');
INSERT INTO `cruge_authitem` VALUES ('organizaciones_consultar', '2', '', '', 'n;');
INSERT INTO `cruge_authitem` VALUES ('organizaciones_eliminar', '1', '', '', 'n;');
INSERT INTO `cruge_authitem` VALUES ('organizaciones_listar', '1', '', '', 'n;');
INSERT INTO `cruge_authitem` VALUES ('organizacion_aignar', '1', '', '', 'n;');
INSERT INTO `cruge_authitem` VALUES ('rolprueba', '2', 'prueba', '', 'N;');
INSERT INTO `cruge_authitem` VALUES ('tipoLocalidad_actualizar', '1', '', '', 'N;');
INSERT INTO `cruge_authitem` VALUES ('tipoLocalidad_agregar', '1', '', '', 'N;');
INSERT INTO `cruge_authitem` VALUES ('tipoLocalidad_eliminar', '1', '', '', 'N;');
INSERT INTO `cruge_authitem` VALUES ('tipoLocalidad_listar', '1', '', '', 'N;');
INSERT INTO `cruge_authitem` VALUES ('usuarios_actualizar', '1', '', '', 'n;');
INSERT INTO `cruge_authitem` VALUES ('usuarios_administrar', '2', '', '', 'n;');
INSERT INTO `cruge_authitem` VALUES ('usuarios_agregar', '1', '', '', 'n;');
INSERT INTO `cruge_authitem` VALUES ('usuarios_consultar', '2', '', '', 'n;');
INSERT INTO `cruge_authitem` VALUES ('usuarios_eliminar', '1', '', '', 'n;');
INSERT INTO `cruge_authitem` VALUES ('usuarios_listar', '1', '', '', 'n;');
INSERT INTO `cruge_authitem` VALUES ('usuarios_super_admin', '1', '', '', 'n;');

-- ----------------------------
-- Table structure for `cruge_authitemchild`
-- ----------------------------
DROP TABLE IF EXISTS `cruge_authitemchild`;
CREATE TABLE `cruge_authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `crugeauthitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `crugeauthitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cruge_authitemchild
-- ----------------------------
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_listar', 'action_asigorg_admin');
INSERT INTO `cruge_authitemchild` VALUES ('organizacion_aignar', 'action_asigorg_admin');
INSERT INTO `cruge_authitemchild` VALUES ('organizacion_aignar', 'action_asigorg_create');
INSERT INTO `cruge_authitemchild` VALUES ('organizacion_aignar', 'action_asigorg_delete');
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_listar', 'action_asigorg_index');
INSERT INTO `cruge_authitemchild` VALUES ('organizacion_aignar', 'action_asigorg_index');
INSERT INTO `cruge_authitemchild` VALUES ('organizacion_aignar', 'action_asigorg_update');
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_listar', 'action_asigorg_view');
INSERT INTO `cruge_authitemchild` VALUES ('organizacion_aignar', 'action_asigorg_view');
INSERT INTO `cruge_authitemchild` VALUES ('empleados_actualizar', 'action_empleados_admin');
INSERT INTO `cruge_authitemchild` VALUES ('empleados_agregar', 'action_empleados_admin');
INSERT INTO `cruge_authitemchild` VALUES ('empleados_eliminar', 'action_empleados_admin');
INSERT INTO `cruge_authitemchild` VALUES ('empleados_listar', 'action_empleados_admin');
INSERT INTO `cruge_authitemchild` VALUES ('empleados_agregar', 'action_empleados_create');
INSERT INTO `cruge_authitemchild` VALUES ('empleados_eliminar', 'action_empleados_delete');
INSERT INTO `cruge_authitemchild` VALUES ('empleados_actualizar', 'action_empleados_index');
INSERT INTO `cruge_authitemchild` VALUES ('empleados_agregar', 'action_empleados_index');
INSERT INTO `cruge_authitemchild` VALUES ('empleados_eliminar', 'action_empleados_index');
INSERT INTO `cruge_authitemchild` VALUES ('empleados_listar', 'action_empleados_index');
INSERT INTO `cruge_authitemchild` VALUES ('empleados_actualizar', 'action_empleados_update');
INSERT INTO `cruge_authitemchild` VALUES ('empleados_actualizar', 'action_empleados_view');
INSERT INTO `cruge_authitemchild` VALUES ('empleados_agregar', 'action_empleados_view');
INSERT INTO `cruge_authitemchild` VALUES ('empleados_eliminar', 'action_empleados_view');
INSERT INTO `cruge_authitemchild` VALUES ('empleados_listar', 'action_empleados_view');
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_actualizar', 'action_org_admin');
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_agregar', 'action_org_admin');
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_eliminar', 'action_org_admin');
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_listar', 'action_org_admin');
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_agregar', 'action_org_create');
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_eliminar', 'action_org_delete');
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_actualizar', 'action_org_index');
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_agregar', 'action_org_index');
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_eliminar', 'action_org_index');
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_listar', 'action_org_index');
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_actualizar', 'action_org_update');
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_actualizar', 'action_org_view');
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_agregar', 'action_org_view');
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_eliminar', 'action_org_view');
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_listar', 'action_org_view');
INSERT INTO `cruge_authitemchild` VALUES ('tipoLocalidad_actualizar', 'action_tipolocalidades_admin');
INSERT INTO `cruge_authitemchild` VALUES ('tipoLocalidad_agregar', 'action_tipolocalidades_admin');
INSERT INTO `cruge_authitemchild` VALUES ('tipoLocalidad_eliminar', 'action_tipolocalidades_admin');
INSERT INTO `cruge_authitemchild` VALUES ('tipoLocalidad_listar', 'action_tipolocalidades_admin');
INSERT INTO `cruge_authitemchild` VALUES ('tipoLocalidad_agregar', 'action_tipolocalidades_create');
INSERT INTO `cruge_authitemchild` VALUES ('tipoLocalidad_eliminar', 'action_tipolocalidades_delete');
INSERT INTO `cruge_authitemchild` VALUES ('tipoLocalidad_actualizar', 'action_tipolocalidades_index');
INSERT INTO `cruge_authitemchild` VALUES ('tipoLocalidad_agregar', 'action_tipolocalidades_index');
INSERT INTO `cruge_authitemchild` VALUES ('tipoLocalidad_eliminar', 'action_tipolocalidades_index');
INSERT INTO `cruge_authitemchild` VALUES ('tipoLocalidad_listar', 'action_tipolocalidades_index');
INSERT INTO `cruge_authitemchild` VALUES ('tipoLocalidad_actualizar', 'action_tipolocalidades_update');
INSERT INTO `cruge_authitemchild` VALUES ('tipoLocalidad_actualizar', 'action_tipolocalidades_view');
INSERT INTO `cruge_authitemchild` VALUES ('tipoLocalidad_agregar', 'action_tipolocalidades_view');
INSERT INTO `cruge_authitemchild` VALUES ('tipoLocalidad_eliminar', 'action_tipolocalidades_view');
INSERT INTO `cruge_authitemchild` VALUES ('tipoLocalidad_listar', 'action_tipolocalidades_view');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_super_admin', 'action_ui_editprofile');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_super_admin', 'action_ui_fieldsadmincreate');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_super_admin', 'action_ui_fieldsadmindelete');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_super_admin', 'action_ui_fieldsadminlist');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_super_admin', 'action_ui_fieldsadminupdate');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_super_admin', 'action_ui_rbacajaxassignment');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_super_admin', 'action_ui_rbacajaxsetchilditem');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_super_admin', 'action_ui_rbacauthitemchilditems');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_super_admin', 'action_ui_rbacauthitemcreate');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_super_admin', 'action_ui_rbacauthitemdelete');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_super_admin', 'action_ui_rbacauthitemupdate');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_super_admin', 'action_ui_rbaclistops');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_super_admin', 'action_ui_rbaclistroles');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_super_admin', 'action_ui_rbaclisttasks');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_super_admin', 'action_ui_rbacusersassignments');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_super_admin', 'action_ui_sessionadmin');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_super_admin', 'action_ui_sessionadmindelete');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_super_admin', 'action_ui_systemupdate');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_consultar', 'action_ui_usermanagementadmin');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_listar', 'action_ui_usermanagementadmin');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_agregar', 'action_ui_usermanagementcreate');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_eliminar', 'action_ui_usermanagementdelete');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_actualizar', 'action_ui_usermanagementupdate');
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_listar', 'controller_asigorg');
INSERT INTO `cruge_authitemchild` VALUES ('organizacion_aignar', 'controller_asigorg');
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_actualizar', 'controller_org');
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_agregar', 'controller_org');
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_eliminar', 'controller_org');
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_listar', 'controller_org');
INSERT INTO `cruge_authitemchild` VALUES ('tipoLocalidad_actualizar', 'controller_tipolocalidades');
INSERT INTO `cruge_authitemchild` VALUES ('tipoLocalidad_agregar', 'controller_tipolocalidades');
INSERT INTO `cruge_authitemchild` VALUES ('tipoLocalidad_eliminar', 'controller_tipolocalidades');
INSERT INTO `cruge_authitemchild` VALUES ('tipoLocalidad_listar', 'controller_tipolocalidades');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_super_admin', 'edit-advanced-profile-features');
INSERT INTO `cruge_authitemchild` VALUES ('empleados_administrar', 'empleados_actualizar');
INSERT INTO `cruge_authitemchild` VALUES ('rolprueba', 'empleados_actualizar');
INSERT INTO `cruge_authitemchild` VALUES ('rolprueba', 'empleados_administrar');
INSERT INTO `cruge_authitemchild` VALUES ('empleados_administrar', 'empleados_agregar');
INSERT INTO `cruge_authitemchild` VALUES ('rolprueba', 'empleados_agregar');
INSERT INTO `cruge_authitemchild` VALUES ('rolprueba', 'empleados_consultar');
INSERT INTO `cruge_authitemchild` VALUES ('empleados_administrar', 'empleados_eliminar');
INSERT INTO `cruge_authitemchild` VALUES ('empleados_administrar', 'empleados_listar');
INSERT INTO `cruge_authitemchild` VALUES ('empleados_consultar', 'empleados_listar');
INSERT INTO `cruge_authitemchild` VALUES ('rolprueba', 'empleados_listar');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_super_admin', 'goradmin');
INSERT INTO `cruge_authitemchild` VALUES ('rolprueba', 'localidad_consultar');
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_administrar', 'organizaciones_actualizar');
INSERT INTO `cruge_authitemchild` VALUES ('rolprueba', 'organizaciones_actualizar');
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_administrar', 'organizaciones_agregar');
INSERT INTO `cruge_authitemchild` VALUES ('rolprueba', 'organizaciones_agregar');
INSERT INTO `cruge_authitemchild` VALUES ('rolprueba', 'organizaciones_consultar');
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_administrar', 'organizaciones_listar');
INSERT INTO `cruge_authitemchild` VALUES ('organizaciones_consultar', 'organizaciones_listar');
INSERT INTO `cruge_authitemchild` VALUES ('rolprueba', 'organizaciones_listar');
INSERT INTO `cruge_authitemchild` VALUES ('rolprueba', 'organizacion_aignar');
INSERT INTO `cruge_authitemchild` VALUES ('localidad_administrar', 'tipoLocalidad_actualizar');
INSERT INTO `cruge_authitemchild` VALUES ('rolprueba', 'tipoLocalidad_actualizar');
INSERT INTO `cruge_authitemchild` VALUES ('localidad_administrar', 'tipoLocalidad_agregar');
INSERT INTO `cruge_authitemchild` VALUES ('rolprueba', 'tipoLocalidad_agregar');
INSERT INTO `cruge_authitemchild` VALUES ('localidad_administrar', 'tipoLocalidad_listar');
INSERT INTO `cruge_authitemchild` VALUES ('localidad_consultar', 'tipoLocalidad_listar');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_administrar', 'usuarios_actualizar');
INSERT INTO `cruge_authitemchild` VALUES ('rolprueba', 'usuarios_administrar');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_administrar', 'usuarios_agregar');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_administrar', 'usuarios_eliminar');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_administrar', 'usuarios_listar');
INSERT INTO `cruge_authitemchild` VALUES ('usuarios_administrar', 'usuarios_super_admin');

-- ----------------------------
-- Table structure for `cruge_field`
-- ----------------------------
DROP TABLE IF EXISTS `cruge_field`;
CREATE TABLE `cruge_field` (
  `idfield` int(11) NOT NULL AUTO_INCREMENT,
  `fieldname` varchar(20) NOT NULL,
  `longname` varchar(50) DEFAULT NULL,
  `position` int(11) DEFAULT '0',
  `required` int(11) DEFAULT '0',
  `fieldtype` int(11) DEFAULT '0',
  `fieldsize` int(11) DEFAULT '20',
  `maxlength` int(11) DEFAULT '45',
  `showinreports` int(11) DEFAULT '0',
  `useregexp` varchar(512) DEFAULT NULL,
  `useregexpmsg` varchar(512) DEFAULT NULL,
  `predetvalue` mediumblob,
  PRIMARY KEY (`idfield`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- ----------------------------
-- Table structure for `cruge_fieldvalue`
-- ----------------------------
DROP TABLE IF EXISTS `cruge_fieldvalue`;
CREATE TABLE `cruge_fieldvalue` (
  `idfieldvalue` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `idfield` int(11) NOT NULL,
  `value` blob,
  PRIMARY KEY (`idfieldvalue`),
  KEY `fk_cruge_fieldvalue_cruge_user1` (`iduser`),
  KEY `fk_cruge_fieldvalue_cruge_field1` (`idfield`),
  CONSTRAINT `fk_cruge_fieldvalue_cruge_field1` FOREIGN KEY (`idfield`) REFERENCES `cruge_field` (`idfield`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_cruge_fieldvalue_cruge_user1` FOREIGN KEY (`iduser`) REFERENCES `cruge_user` (`iduser`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cruge_fieldvalue
-- ----------------------------

-- ----------------------------
-- Table structure for `cruge_session`
-- ----------------------------
DROP TABLE IF EXISTS `cruge_session`;
CREATE TABLE `cruge_session` (
  `idsession` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `created` bigint(30) DEFAULT NULL,
  `expire` bigint(30) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `ipaddress` varchar(45) DEFAULT NULL,
  `usagecount` int(11) DEFAULT '0',
  `lastusage` bigint(30) DEFAULT NULL,
  `logoutdate` bigint(30) DEFAULT NULL,
  `ipaddressout` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idsession`),
  KEY `crugesession_iduser` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;



-- ----------------------------
-- Table structure for `cruge_system`
-- ----------------------------
DROP TABLE IF EXISTS `cruge_system`;
CREATE TABLE `cruge_system` (
  `idsystem` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `largename` varchar(45) DEFAULT NULL,
  `sessionmaxdurationmins` int(11) DEFAULT '30',
  `sessionmaxsameipconnections` int(11) DEFAULT '10',
  `sessionreusesessions` int(11) DEFAULT '1' COMMENT '1yes 0no',
  `sessionmaxsessionsperday` int(11) DEFAULT '-1',
  `sessionmaxsessionsperuser` int(11) DEFAULT '-1',
  `systemnonewsessions` int(11) DEFAULT '0' COMMENT '1yes 0no',
  `systemdown` int(11) DEFAULT '0',
  `registerusingcaptcha` int(11) DEFAULT '0',
  `registerusingterms` int(11) DEFAULT '0',
  `terms` blob,
  `registerusingactivation` int(11) DEFAULT '1',
  `defaultroleforregistration` varchar(64) DEFAULT NULL,
  `registerusingtermslabel` varchar(100) DEFAULT NULL,
  `registrationonlogin` int(11) DEFAULT '1',
  PRIMARY KEY (`idsystem`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cruge_system
-- ----------------------------
INSERT INTO `cruge_system` VALUES ('1', 'default', null, '30', '10', '1', '-1', '-1', '0', '0', '0', '0', '', '0', '', '', '0');

-- ----------------------------
-- Table structure for `cruge_user`
-- ----------------------------
DROP TABLE IF EXISTS `cruge_user`;
CREATE TABLE `cruge_user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `regdate` bigint(30) DEFAULT NULL,
  `actdate` bigint(30) DEFAULT NULL,
  `logondate` bigint(30) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL COMMENT 'hashed password',
  `authkey` varchar(100) DEFAULT NULL COMMENT 'llave de autentificacion',
  `state` int(11) DEFAULT '0',
  `totalsessioncounter` int(11) DEFAULT '0',
  `currentsessioncounter` int(11) DEFAULT '0',
  PRIMARY KEY (`iduser`),
  UNIQUE KEY `idx_cruge_username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cruge_user
-- ----------------------------
INSERT INTO `cruge_user` VALUES ('1', null, null, '1400007110', 'admin', 'cislibre@cantv.com.ve', '21232f297a57a5a743894a0e4a801fc3', null, '1', '0', '0');
INSERT INTO `cruge_user` VALUES ('2', '1391219995', null, '1391228201', 'invitado', 'invitado@cantv.com.ve', 'a6ae8a143d440ab8c006d799f682d48d', 'a2302625999b85435b84ef447e4a05b7', '1', '0', '0');

