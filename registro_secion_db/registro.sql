--
-- PostgreSQL database dump
--

-- Dumped from database version 9.1.13
-- Dumped by pg_dump version 9.1.13
-- Started on 2014-05-14 11:18:16 VET

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 192 (class 1259 OID 17997)
-- Dependencies: 6
-- Name: base_asig_org; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE base_asig_org (
    co_asig_org integer NOT NULL,
    id_asig_org integer NOT NULL,
    nu_docm_idnt integer NOT NULL,
    co_org integer NOT NULL,
    fe_crea timestamp without time zone,
    fe_modf timestamp without time zone,
    usr_crea character varying(10),
    usr_modf character varying(10),
    in_stat character(1) NOT NULL,
    tx_desc character varying(100)
);


ALTER TABLE public.base_asig_org OWNER TO postgres;

--
-- TOC entry 193 (class 1259 OID 18000)
-- Dependencies: 192 6
-- Name: base_asig_org_id_asig_org_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE base_asig_org_id_asig_org_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.base_asig_org_id_asig_org_seq OWNER TO postgres;

--
-- TOC entry 2155 (class 0 OID 0)
-- Dependencies: 193
-- Name: base_asig_org_id_asig_org_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE base_asig_org_id_asig_org_seq OWNED BY base_asig_org.id_asig_org;


--
-- TOC entry 194 (class 1259 OID 18002)
-- Dependencies: 1958 6
-- Name: base_empleados; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE base_empleados (
    nu_docm_idnt integer NOT NULL,
    id_usuario integer NOT NULL,
    nu_docm_idnt_supv integer,
    username character varying(64) NOT NULL,
    nb_pers character varying(100) NOT NULL,
    email character varying(50),
    ldap_login bit(1) DEFAULT B'0'::"bit" NOT NULL,
    fe_crea timestamp without time zone,
    fe_modf timestamp without time zone,
    usr_crea character varying(10),
    usr_modf character varying(10),
    in_stat character(1) NOT NULL,
    tx_desc character varying(100)
);


ALTER TABLE public.base_empleados OWNER TO postgres;

--
-- TOC entry 195 (class 1259 OID 18006)
-- Dependencies: 194 6
-- Name: base_empleados_id_usuario_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE base_empleados_id_usuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.base_empleados_id_usuario_seq OWNER TO postgres;

--
-- TOC entry 2156 (class 0 OID 0)
-- Dependencies: 195
-- Name: base_empleados_id_usuario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE base_empleados_id_usuario_seq OWNED BY base_empleados.id_usuario;


--
-- TOC entry 196 (class 1259 OID 18008)
-- Dependencies: 6
-- Name: base_org; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE base_org (
    co_org integer NOT NULL,
    id_org integer NOT NULL,
    co_org_dpnd integer,
    nb_org character varying(128) NOT NULL,
    tx_descripcion character varying(250) NOT NULL,
    abv_org character varying(10),
    fe_crea timestamp without time zone,
    fe_modf timestamp without time zone,
    usr_crea character varying(10),
    usr_modf character varying(10),
    in_stat character(1) NOT NULL,
    tx_desc character varying(100),
    co_org_rrhh character varying(30) NOT NULL,
    co_org_dpnd_rrhh character varying(30) NOT NULL,
    ceco character varying(30) NOT NULL
);


ALTER TABLE public.base_org OWNER TO postgres;

--
-- TOC entry 197 (class 1259 OID 18014)
-- Dependencies: 6 196
-- Name: base_org_id_org_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE base_org_id_org_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.base_org_id_org_seq OWNER TO postgres;

--
-- TOC entry 2157 (class 0 OID 0)
-- Dependencies: 197
-- Name: base_org_id_org_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE base_org_id_org_seq OWNED BY base_org.id_org;


--
-- TOC entry 198 (class 1259 OID 18016)
-- Dependencies: 6
-- Name: cruge_authassignment; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE cruge_authassignment (
    userid integer NOT NULL,
    itemname character varying(64) NOT NULL,
    bizrule text,
    data text
);


ALTER TABLE public.cruge_authassignment OWNER TO postgres;

--
-- TOC entry 199 (class 1259 OID 18022)
-- Dependencies: 6
-- Name: cruge_authitem; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE cruge_authitem (
    name character varying(64) NOT NULL,
    type integer NOT NULL,
    description text,
    bizrule text,
    data text
);


ALTER TABLE public.cruge_authitem OWNER TO postgres;

--
-- TOC entry 200 (class 1259 OID 18028)
-- Dependencies: 6
-- Name: cruge_authitemchild; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE cruge_authitemchild (
    parent character varying(64) NOT NULL,
    child character varying(64) NOT NULL
);


ALTER TABLE public.cruge_authitemchild OWNER TO postgres;

--
-- TOC entry 201 (class 1259 OID 18031)
-- Dependencies: 1961 1962 1963 1964 1965 1966 6
-- Name: cruge_field; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE cruge_field (
    idfield integer NOT NULL,
    fieldname character varying(20) NOT NULL,
    longname character varying(50),
    "position" integer DEFAULT 0,
    required integer DEFAULT 0,
    fieldtype integer DEFAULT 0,
    fieldsize integer DEFAULT 20,
    maxlength integer DEFAULT 45,
    showinreports integer DEFAULT 0,
    useregexp character varying(512),
    useregexpmsg character varying(512),
    predetvalue bytea
);


ALTER TABLE public.cruge_field OWNER TO postgres;

--
-- TOC entry 202 (class 1259 OID 18043)
-- Dependencies: 201 6
-- Name: cruge_field_idfield_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE cruge_field_idfield_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cruge_field_idfield_seq OWNER TO postgres;

--
-- TOC entry 2158 (class 0 OID 0)
-- Dependencies: 202
-- Name: cruge_field_idfield_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE cruge_field_idfield_seq OWNED BY cruge_field.idfield;


--
-- TOC entry 203 (class 1259 OID 18045)
-- Dependencies: 6
-- Name: cruge_fieldvalue; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE cruge_fieldvalue (
    idfieldvalue integer NOT NULL,
    iduser integer NOT NULL,
    idfield integer NOT NULL,
    value bytea
);


ALTER TABLE public.cruge_fieldvalue OWNER TO postgres;

--
-- TOC entry 204 (class 1259 OID 18051)
-- Dependencies: 6 203
-- Name: cruge_fieldvalue_idfieldvalue_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE cruge_fieldvalue_idfieldvalue_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cruge_fieldvalue_idfieldvalue_seq OWNER TO postgres;

--
-- TOC entry 2159 (class 0 OID 0)
-- Dependencies: 204
-- Name: cruge_fieldvalue_idfieldvalue_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE cruge_fieldvalue_idfieldvalue_seq OWNED BY cruge_fieldvalue.idfieldvalue;


--
-- TOC entry 205 (class 1259 OID 18053)
-- Dependencies: 1969 1970 6
-- Name: cruge_session; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE cruge_session (
    idsession integer NOT NULL,
    iduser integer NOT NULL,
    created bigint,
    expire bigint,
    status integer DEFAULT 0,
    ipaddress character varying(45),
    usagecount integer DEFAULT 0,
    lastusage bigint,
    logoutdate bigint,
    ipaddressout character varying(45)
);


ALTER TABLE public.cruge_session OWNER TO postgres;

--
-- TOC entry 206 (class 1259 OID 18058)
-- Dependencies: 6 205
-- Name: cruge_session_idsession_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE cruge_session_idsession_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cruge_session_idsession_seq OWNER TO postgres;

--
-- TOC entry 2160 (class 0 OID 0)
-- Dependencies: 206
-- Name: cruge_session_idsession_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE cruge_session_idsession_seq OWNED BY cruge_session.idsession;


--
-- TOC entry 207 (class 1259 OID 18060)
-- Dependencies: 1972 1973 1974 1975 1976 1977 1978 1979 1980 1981 1982 6
-- Name: cruge_system; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE cruge_system (
    idsystem integer NOT NULL,
    name character varying(45),
    largename character varying(45),
    sessionmaxdurationmins integer DEFAULT 30,
    sessionmaxsameipconnections integer DEFAULT 10,
    sessionreusesessions integer DEFAULT 1,
    sessionmaxsessionsperday integer DEFAULT (-1),
    sessionmaxsessionsperuser integer DEFAULT (-1),
    systemnonewsessions integer DEFAULT 0,
    systemdown integer DEFAULT 0,
    registerusingcaptcha integer DEFAULT 0,
    registerusingterms integer DEFAULT 0,
    terms bytea,
    registerusingactivation integer DEFAULT 1,
    defaultroleforregistration character varying(64),
    registerusingtermslabel character varying(100),
    registrationonlogin integer DEFAULT 1
);


ALTER TABLE public.cruge_system OWNER TO postgres;

--
-- TOC entry 2161 (class 0 OID 0)
-- Dependencies: 207
-- Name: COLUMN cruge_system.sessionreusesessions; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN cruge_system.sessionreusesessions IS '1yes 0no';


--
-- TOC entry 2162 (class 0 OID 0)
-- Dependencies: 207
-- Name: COLUMN cruge_system.systemnonewsessions; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN cruge_system.systemnonewsessions IS '1yes 0no';


--
-- TOC entry 208 (class 1259 OID 18077)
-- Dependencies: 207 6
-- Name: cruge_system_idsystem_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE cruge_system_idsystem_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cruge_system_idsystem_seq OWNER TO postgres;

--
-- TOC entry 2163 (class 0 OID 0)
-- Dependencies: 208
-- Name: cruge_system_idsystem_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE cruge_system_idsystem_seq OWNED BY cruge_system.idsystem;


--
-- TOC entry 209 (class 1259 OID 18079)
-- Dependencies: 1984 1985 1986 6
-- Name: cruge_user; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE cruge_user (
    iduser integer NOT NULL,
    regdate bigint,
    actdate bigint,
    logondate bigint,
    username character varying(64) NOT NULL,
    email character varying(45),
    password character varying(64),
    authkey character varying(100),
    state integer DEFAULT 0,
    totalsessioncounter integer DEFAULT 0,
    currentsessioncounter integer DEFAULT 0
);


ALTER TABLE public.cruge_user OWNER TO postgres;

--
-- TOC entry 2164 (class 0 OID 0)
-- Dependencies: 209
-- Name: COLUMN cruge_user.password; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN cruge_user.password IS 'hashed password';


--
-- TOC entry 2165 (class 0 OID 0)
-- Dependencies: 209
-- Name: COLUMN cruge_user.authkey; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN cruge_user.authkey IS 'llave de autentificacion';


--
-- TOC entry 210 (class 1259 OID 18085)
-- Dependencies: 6 209
-- Name: cruge_user_iduser_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE cruge_user_iduser_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cruge_user_iduser_seq OWNER TO postgres;

--
-- TOC entry 2166 (class 0 OID 0)
-- Dependencies: 210
-- Name: cruge_user_iduser_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE cruge_user_iduser_seq OWNED BY cruge_user.iduser;


--
-- TOC entry 1957 (class 2604 OID 18087)
-- Dependencies: 193 192
-- Name: id_asig_org; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY base_asig_org ALTER COLUMN id_asig_org SET DEFAULT nextval('base_asig_org_id_asig_org_seq'::regclass);


--
-- TOC entry 1959 (class 2604 OID 18088)
-- Dependencies: 195 194
-- Name: id_usuario; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY base_empleados ALTER COLUMN id_usuario SET DEFAULT nextval('base_empleados_id_usuario_seq'::regclass);


--
-- TOC entry 1960 (class 2604 OID 18089)
-- Dependencies: 197 196
-- Name: id_org; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY base_org ALTER COLUMN id_org SET DEFAULT nextval('base_org_id_org_seq'::regclass);


--
-- TOC entry 1967 (class 2604 OID 18090)
-- Dependencies: 202 201
-- Name: idfield; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cruge_field ALTER COLUMN idfield SET DEFAULT nextval('cruge_field_idfield_seq'::regclass);


--
-- TOC entry 1968 (class 2604 OID 18091)
-- Dependencies: 204 203
-- Name: idfieldvalue; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cruge_fieldvalue ALTER COLUMN idfieldvalue SET DEFAULT nextval('cruge_fieldvalue_idfieldvalue_seq'::regclass);


--
-- TOC entry 1971 (class 2604 OID 18092)
-- Dependencies: 206 205
-- Name: idsession; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cruge_session ALTER COLUMN idsession SET DEFAULT nextval('cruge_session_idsession_seq'::regclass);


--
-- TOC entry 1983 (class 2604 OID 18093)
-- Dependencies: 208 207
-- Name: idsystem; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cruge_system ALTER COLUMN idsystem SET DEFAULT nextval('cruge_system_idsystem_seq'::regclass);


--
-- TOC entry 1987 (class 2604 OID 18094)
-- Dependencies: 210 209
-- Name: iduser; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cruge_user ALTER COLUMN iduser SET DEFAULT nextval('cruge_user_iduser_seq'::regclass);


--
-- TOC entry 2132 (class 0 OID 17997)
-- Dependencies: 192 2151
-- Data for Name: base_asig_org; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2167 (class 0 OID 0)
-- Dependencies: 193
-- Name: base_asig_org_id_asig_org_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('base_asig_org_id_asig_org_seq', 1, false);


--
-- TOC entry 2134 (class 0 OID 18002)
-- Dependencies: 194 2151
-- Data for Name: base_empleados; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2168 (class 0 OID 0)
-- Dependencies: 195
-- Name: base_empleados_id_usuario_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('base_empleados_id_usuario_seq', 1, false);


--
-- TOC entry 2136 (class 0 OID 18008)
-- Dependencies: 196 2151
-- Data for Name: base_org; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2169 (class 0 OID 0)
-- Dependencies: 197
-- Name: base_org_id_org_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('base_org_id_org_seq', 1, false);


--
-- TOC entry 2138 (class 0 OID 18016)
-- Dependencies: 198 2151
-- Data for Name: cruge_authassignment; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2139 (class 0 OID 18022)
-- Dependencies: 199 2151
-- Data for Name: cruge_authitem; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2140 (class 0 OID 18028)
-- Dependencies: 200 2151
-- Data for Name: cruge_authitemchild; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2141 (class 0 OID 18031)
-- Dependencies: 201 2151
-- Data for Name: cruge_field; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2170 (class 0 OID 0)
-- Dependencies: 202
-- Name: cruge_field_idfield_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('cruge_field_idfield_seq', 1, false);


--
-- TOC entry 2143 (class 0 OID 18045)
-- Dependencies: 203 2151
-- Data for Name: cruge_fieldvalue; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2171 (class 0 OID 0)
-- Dependencies: 204
-- Name: cruge_fieldvalue_idfieldvalue_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('cruge_fieldvalue_idfieldvalue_seq', 1, false);


--
-- TOC entry 2145 (class 0 OID 18053)
-- Dependencies: 205 2151
-- Data for Name: cruge_session; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO cruge_session (idsession, iduser, created, expire, status, ipaddress, usagecount, lastusage, logoutdate, ipaddressout) VALUES (1, 1, 1400076907, 1400078707, 0, '127.0.0.1', 1, 1400076907, 1400077198, '127.0.0.1');
INSERT INTO cruge_session (idsession, iduser, created, expire, status, ipaddress, usagecount, lastusage, logoutdate, ipaddressout) VALUES (3, 1, 1400077261, 1400079061, 0, '127.0.0.1', 1, 1400077261, 1400077359, '127.0.0.1');
INSERT INTO cruge_session (idsession, iduser, created, expire, status, ipaddress, usagecount, lastusage, logoutdate, ipaddressout) VALUES (4, 3, 1400077389, 1400079189, 0, '127.0.0.1', 1, 1400077389, 1400077455, '127.0.0.1');
INSERT INTO cruge_session (idsession, iduser, created, expire, status, ipaddress, usagecount, lastusage, logoutdate, ipaddressout) VALUES (2, 2, 1400077222, 1400079022, 1, '127.0.0.1', 3, 1400077479, NULL, NULL);
INSERT INTO cruge_session (idsession, iduser, created, expire, status, ipaddress, usagecount, lastusage, logoutdate, ipaddressout) VALUES (5, 4, 1400077559, 1400079359, 0, '127.0.0.1', 1, 1400077559, 1400077862, '127.0.0.1');
INSERT INTO cruge_session (idsession, iduser, created, expire, status, ipaddress, usagecount, lastusage, logoutdate, ipaddressout) VALUES (6, 1, 1400078075, 1400079875, 0, '127.0.0.1', 1, 1400078075, 1400078122, '127.0.0.1');
INSERT INTO cruge_session (idsession, iduser, created, expire, status, ipaddress, usagecount, lastusage, logoutdate, ipaddressout) VALUES (7, 4, 1400078157, 1400079957, 0, '127.0.0.1', 1, 1400078157, 1400078890, '127.0.0.1');
INSERT INTO cruge_session (idsession, iduser, created, expire, status, ipaddress, usagecount, lastusage, logoutdate, ipaddressout) VALUES (8, 1, 1400078958, 1400080758, 1, '127.0.0.1', 1, 1400078958, NULL, NULL);
INSERT INTO cruge_session (idsession, iduser, created, expire, status, ipaddress, usagecount, lastusage, logoutdate, ipaddressout) VALUES (9, 1, 1400080774, 1400082574, 0, '127.0.0.1', 1, 1400080774, 1400080926, '127.0.0.1');
INSERT INTO cruge_session (idsession, iduser, created, expire, status, ipaddress, usagecount, lastusage, logoutdate, ipaddressout) VALUES (10, 2, 1400080946, 1400082746, 1, '127.0.0.1', 1, 1400080946, NULL, NULL);
INSERT INTO cruge_session (idsession, iduser, created, expire, status, ipaddress, usagecount, lastusage, logoutdate, ipaddressout) VALUES (11, 4, 1400081281, 1400083081, 1, '127.0.0.1', 1, 1400081281, NULL, NULL);


--
-- TOC entry 2172 (class 0 OID 0)
-- Dependencies: 206
-- Name: cruge_session_idsession_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('cruge_session_idsession_seq', 11, true);


--
-- TOC entry 2147 (class 0 OID 18060)
-- Dependencies: 207 2151
-- Data for Name: cruge_system; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO cruge_system (idsystem, name, largename, sessionmaxdurationmins, sessionmaxsameipconnections, sessionreusesessions, sessionmaxsessionsperday, sessionmaxsessionsperuser, systemnonewsessions, systemdown, registerusingcaptcha, registerusingterms, terms, registerusingactivation, defaultroleforregistration, registerusingtermslabel, registrationonlogin) VALUES (1, 'default', NULL, 30, 10, 1, -1, -1, 0, 0, 0, 0, '\x', 0, '', '', 0);


--
-- TOC entry 2173 (class 0 OID 0)
-- Dependencies: 208
-- Name: cruge_system_idsystem_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('cruge_system_idsystem_seq', 1, false);


--
-- TOC entry 2149 (class 0 OID 18079)
-- Dependencies: 209 2151
-- Data for Name: cruge_user; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO cruge_user (iduser, regdate, actdate, logondate, username, email, password, authkey, state, totalsessioncounter, currentsessioncounter) VALUES (3, 1400077389, 1400077389, 1400077389, 'lascan01', 'lascan01@cantv.com.ve', '8cd6ee62439a75981df8cb968fa8a38a', NULL, 1, 0, 0);
INSERT INTO cruge_user (iduser, regdate, actdate, logondate, username, email, password, authkey, state, totalsessioncounter, currentsessioncounter) VALUES (1, 1400076907, 1400076907, 1400080774, 'admin', 'admin@cantv.com.ve', '21232f297a57a5a743894a0e4a801fc3', NULL, 1, 0, 0);
INSERT INTO cruge_user (iduser, regdate, actdate, logondate, username, email, password, authkey, state, totalsessioncounter, currentsessioncounter) VALUES (2, 1400077222, 1400077222, 1400080946, 'hbened01', 'hbened01@cantv.com.ve', 'cf43958ebd49ae9256ff16b46c4267d8', NULL, 1, 0, 0);
INSERT INTO cruge_user (iduser, regdate, actdate, logondate, username, email, password, authkey, state, totalsessioncounter, currentsessioncounter) VALUES (4, 1400077559, 1400077559, 1400081281, 'acarde03', 'acarde03@cantv.com.ve', '0bc78fe9d1209d7b5f63895d8335c688', NULL, 1, 0, 0);


--
-- TOC entry 2174 (class 0 OID 0)
-- Dependencies: 210
-- Name: cruge_user_iduser_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('cruge_user_iduser_seq', 4, true);


--
-- TOC entry 1989 (class 2606 OID 18096)
-- Dependencies: 192 192 2152
-- Name: base_asig_org_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY base_asig_org
    ADD CONSTRAINT base_asig_org_pk PRIMARY KEY (co_asig_org);


--
-- TOC entry 1994 (class 2606 OID 18098)
-- Dependencies: 194 194 2152
-- Name: base_empleados_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY base_empleados
    ADD CONSTRAINT base_empleados_pk PRIMARY KEY (nu_docm_idnt);


--
-- TOC entry 1999 (class 2606 OID 18100)
-- Dependencies: 196 196 2152
-- Name: base_org_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY base_org
    ADD CONSTRAINT base_org_pk PRIMARY KEY (co_org);


--
-- TOC entry 2003 (class 2606 OID 18102)
-- Dependencies: 198 198 198 2152
-- Name: cruge_authassignment_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY cruge_authassignment
    ADD CONSTRAINT cruge_authassignment_pk PRIMARY KEY (userid, itemname);


--
-- TOC entry 2007 (class 2606 OID 18104)
-- Dependencies: 199 199 2152
-- Name: cruge_authitem_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY cruge_authitem
    ADD CONSTRAINT cruge_authitem_pk PRIMARY KEY (name);


--
-- TOC entry 2010 (class 2606 OID 18106)
-- Dependencies: 200 200 200 2152
-- Name: cruge_authitemchild_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY cruge_authitemchild
    ADD CONSTRAINT cruge_authitemchild_pk PRIMARY KEY (parent, child);


--
-- TOC entry 2012 (class 2606 OID 18108)
-- Dependencies: 201 201 2152
-- Name: cruge_field_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY cruge_field
    ADD CONSTRAINT cruge_field_pk PRIMARY KEY (idfield);


--
-- TOC entry 2014 (class 2606 OID 18110)
-- Dependencies: 203 203 2152
-- Name: cruge_fieldvalue_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY cruge_fieldvalue
    ADD CONSTRAINT cruge_fieldvalue_pk PRIMARY KEY (idfieldvalue);


--
-- TOC entry 2018 (class 2606 OID 18112)
-- Dependencies: 205 205 2152
-- Name: cruge_session_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY cruge_session
    ADD CONSTRAINT cruge_session_pk PRIMARY KEY (idsession);


--
-- TOC entry 2021 (class 2606 OID 18114)
-- Dependencies: 207 207 2152
-- Name: cruge_system_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY cruge_system
    ADD CONSTRAINT cruge_system_pk PRIMARY KEY (idsystem);


--
-- TOC entry 2023 (class 2606 OID 18116)
-- Dependencies: 209 209 2152
-- Name: cruge_user_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY cruge_user
    ADD CONSTRAINT cruge_user_pk PRIMARY KEY (iduser);


--
-- TOC entry 2008 (class 1259 OID 18117)
-- Dependencies: 200 2152
-- Name: child; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX child ON cruge_authitemchild USING btree (child);


--
-- TOC entry 2019 (class 1259 OID 18118)
-- Dependencies: 205 2152
-- Name: crugesession_iduser; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX crugesession_iduser ON cruge_session USING btree (iduser);


--
-- TOC entry 2004 (class 1259 OID 18119)
-- Dependencies: 198 2152
-- Name: fk_cruge_authassignment_cruge_authitem1; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fk_cruge_authassignment_cruge_authitem1 ON cruge_authassignment USING btree (itemname);


--
-- TOC entry 2005 (class 1259 OID 18120)
-- Dependencies: 198 2152
-- Name: fk_cruge_authassignment_user; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fk_cruge_authassignment_user ON cruge_authassignment USING btree (userid);


--
-- TOC entry 2015 (class 1259 OID 18121)
-- Dependencies: 203 2152
-- Name: fk_cruge_fieldvalue_cruge_field1; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fk_cruge_fieldvalue_cruge_field1 ON cruge_fieldvalue USING btree (idfield);


--
-- TOC entry 2016 (class 1259 OID 18122)
-- Dependencies: 203 2152
-- Name: fk_cruge_fieldvalue_cruge_user1; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fk_cruge_fieldvalue_cruge_user1 ON cruge_fieldvalue USING btree (iduser);


--
-- TOC entry 1990 (class 1259 OID 18123)
-- Dependencies: 192 2152
-- Name: idx_asig_org_co_org; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX idx_asig_org_co_org ON base_asig_org USING btree (co_org);


--
-- TOC entry 1991 (class 1259 OID 18124)
-- Dependencies: 192 2152
-- Name: idx_asig_org_nu_docm_idnt; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX idx_asig_org_nu_docm_idnt ON base_asig_org USING btree (nu_docm_idnt);


--
-- TOC entry 2000 (class 1259 OID 18125)
-- Dependencies: 196 2152
-- Name: idx_co_org_dpnd; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX idx_co_org_dpnd ON base_org USING btree (co_org_dpnd);


--
-- TOC entry 2024 (class 1259 OID 18126)
-- Dependencies: 209 2152
-- Name: idx_cruge_username; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE UNIQUE INDEX idx_cruge_username ON cruge_user USING btree (username);


--
-- TOC entry 1995 (class 1259 OID 18127)
-- Dependencies: 194 2152
-- Name: idx_nu_docm_idnt_supv; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX idx_nu_docm_idnt_supv ON base_empleados USING btree (nu_docm_idnt_supv);


--
-- TOC entry 1996 (class 1259 OID 18128)
-- Dependencies: 194 2152
-- Name: idx_username; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE UNIQUE INDEX idx_username ON base_empleados USING btree (username);


--
-- TOC entry 1992 (class 1259 OID 18129)
-- Dependencies: 192 2152
-- Name: uk_id_asig_org; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE UNIQUE INDEX uk_id_asig_org ON base_asig_org USING btree (id_asig_org);


--
-- TOC entry 2001 (class 1259 OID 18130)
-- Dependencies: 196 2152
-- Name: uk_id_org; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE UNIQUE INDEX uk_id_org ON base_org USING btree (id_org);


--
-- TOC entry 1997 (class 1259 OID 18131)
-- Dependencies: 194 2152
-- Name: uk_id_usuario; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE UNIQUE INDEX uk_id_usuario ON base_empleados USING btree (id_usuario);


--
-- TOC entry 2025 (class 2606 OID 18132)
-- Dependencies: 196 1998 192 2152
-- Name: fk_asig_org_co_org; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY base_asig_org
    ADD CONSTRAINT fk_asig_org_co_org FOREIGN KEY (co_org) REFERENCES base_org(co_org);


--
-- TOC entry 2026 (class 2606 OID 18137)
-- Dependencies: 192 194 1993 2152
-- Name: fk_asig_org_nu_doc; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY base_asig_org
    ADD CONSTRAINT fk_asig_org_nu_doc FOREIGN KEY (nu_docm_idnt) REFERENCES base_empleados(nu_docm_idnt);


--
-- TOC entry 2028 (class 2606 OID 18142)
-- Dependencies: 198 2006 199 2152
-- Name: fk_cruge_authassignment_cruge_authitem1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cruge_authassignment
    ADD CONSTRAINT fk_cruge_authassignment_cruge_authitem1 FOREIGN KEY (itemname) REFERENCES cruge_authitem(name);


--
-- TOC entry 2029 (class 2606 OID 18147)
-- Dependencies: 203 2011 201 2152
-- Name: fk_cruge_fieldvalue_cruge_field1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cruge_fieldvalue
    ADD CONSTRAINT fk_cruge_fieldvalue_cruge_field1 FOREIGN KEY (idfield) REFERENCES cruge_field(idfield) ON DELETE CASCADE;


--
-- TOC entry 2027 (class 2606 OID 18152)
-- Dependencies: 194 2024 209 2152
-- Name: fk_username; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY base_empleados
    ADD CONSTRAINT fk_username FOREIGN KEY (username) REFERENCES cruge_user(username);


-- Completed on 2014-05-14 11:18:16 VET

--
-- PostgreSQL database dump complete
--

