--
-- PostgreSQL database dump
--

-- Dumped from database version 9.4.0
-- Dumped by pg_dump version 9.4.0
-- Started on 2015-01-25 03:56:59

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- TOC entry 2043 (class 1262 OID 12135)
-- Dependencies: 2042
-- Name: postgres; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON DATABASE postgres IS 'default administrative connection database';


--
-- TOC entry 7 (class 2615 OID 16393)
-- Name: nusmaids; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA nusmaids;


ALTER SCHEMA nusmaids OWNER TO postgres;

--
-- TOC entry 182 (class 3079 OID 11855)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2046 (class 0 OID 0)
-- Dependencies: 182
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


--
-- TOC entry 181 (class 3079 OID 16384)
-- Name: adminpack; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS adminpack WITH SCHEMA pg_catalog;


--
-- TOC entry 2047 (class 0 OID 0)
-- Dependencies: 181
-- Name: EXTENSION adminpack; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION adminpack IS 'administrative functions for PostgreSQL';


SET search_path = nusmaids, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 178 (class 1259 OID 16416)
-- Name: job_types; Type: TABLE; Schema: nusmaids; Owner: postgres; Tablespace: 
--

CREATE TABLE job_types (
    id bigint NOT NULL,
    name character varying(100) NOT NULL
);


ALTER TABLE job_types OWNER TO postgres;

--
-- TOC entry 177 (class 1259 OID 16414)
-- Name: job_types_id_seq; Type: SEQUENCE; Schema: nusmaids; Owner: postgres
--

CREATE SEQUENCE job_types_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE job_types_id_seq OWNER TO postgres;

--
-- TOC entry 2048 (class 0 OID 0)
-- Dependencies: 177
-- Name: job_types_id_seq; Type: SEQUENCE OWNED BY; Schema: nusmaids; Owner: postgres
--

ALTER SEQUENCE job_types_id_seq OWNED BY job_types.id;


--
-- TOC entry 176 (class 1259 OID 16407)
-- Name: jobs; Type: TABLE; Schema: nusmaids; Owner: postgres; Tablespace: 
--

CREATE TABLE jobs (
    id bigint NOT NULL,
    type integer,
    location text,
    employer_id integer,
    maid_id integer,
    cost money,
    workflow_state integer,
    description text,
    start_date text,
    end_date text
);


ALTER TABLE jobs OWNER TO postgres;

--
-- TOC entry 175 (class 1259 OID 16405)
-- Name: jobs_id_seq; Type: SEQUENCE; Schema: nusmaids; Owner: postgres
--

CREATE SEQUENCE jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE jobs_id_seq OWNER TO postgres;

--
-- TOC entry 2049 (class 0 OID 0)
-- Dependencies: 175
-- Name: jobs_id_seq; Type: SEQUENCE OWNED BY; Schema: nusmaids; Owner: postgres
--

ALTER SEQUENCE jobs_id_seq OWNED BY jobs.id;


--
-- TOC entry 174 (class 1259 OID 16396)
-- Name: users; Type: TABLE; Schema: nusmaids; Owner: postgres; Tablespace: 
--

CREATE TABLE users (
    id bigint NOT NULL,
    name character varying NOT NULL,
    address text,
    contact character varying(21)
);


ALTER TABLE users OWNER TO postgres;

--
-- TOC entry 173 (class 1259 OID 16394)
-- Name: users_id_seq; Type: SEQUENCE; Schema: nusmaids; Owner: postgres
--

CREATE SEQUENCE users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE users_id_seq OWNER TO postgres;

--
-- TOC entry 2050 (class 0 OID 0)
-- Dependencies: 173
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: nusmaids; Owner: postgres
--

ALTER SEQUENCE users_id_seq OWNED BY users.id;


--
-- TOC entry 180 (class 1259 OID 16441)
-- Name: workflow_state; Type: TABLE; Schema: nusmaids; Owner: postgres; Tablespace: 
--

CREATE TABLE workflow_state (
    id bigint NOT NULL,
    state character varying(50) NOT NULL
);


ALTER TABLE workflow_state OWNER TO postgres;

--
-- TOC entry 179 (class 1259 OID 16439)
-- Name: workflow_state_id_seq; Type: SEQUENCE; Schema: nusmaids; Owner: postgres
--

CREATE SEQUENCE workflow_state_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE workflow_state_id_seq OWNER TO postgres;

--
-- TOC entry 2051 (class 0 OID 0)
-- Dependencies: 179
-- Name: workflow_state_id_seq; Type: SEQUENCE OWNED BY; Schema: nusmaids; Owner: postgres
--

ALTER SEQUENCE workflow_state_id_seq OWNED BY workflow_state.id;


--
-- TOC entry 1905 (class 2604 OID 16419)
-- Name: id; Type: DEFAULT; Schema: nusmaids; Owner: postgres
--

ALTER TABLE ONLY job_types ALTER COLUMN id SET DEFAULT nextval('job_types_id_seq'::regclass);


--
-- TOC entry 1904 (class 2604 OID 16410)
-- Name: id; Type: DEFAULT; Schema: nusmaids; Owner: postgres
--

ALTER TABLE ONLY jobs ALTER COLUMN id SET DEFAULT nextval('jobs_id_seq'::regclass);


--
-- TOC entry 1903 (class 2604 OID 16399)
-- Name: id; Type: DEFAULT; Schema: nusmaids; Owner: postgres
--

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- TOC entry 1906 (class 2604 OID 16444)
-- Name: id; Type: DEFAULT; Schema: nusmaids; Owner: postgres
--

ALTER TABLE ONLY workflow_state ALTER COLUMN id SET DEFAULT nextval('workflow_state_id_seq'::regclass);


--
-- TOC entry 2035 (class 0 OID 16416)
-- Dependencies: 178
-- Data for Name: job_types; Type: TABLE DATA; Schema: nusmaids; Owner: postgres
--

COPY job_types (id, name) FROM stdin;
1	Cleaning
2	Repairs
3	Labour
4	Handicap Assistance
\.


--
-- TOC entry 2052 (class 0 OID 0)
-- Dependencies: 177
-- Name: job_types_id_seq; Type: SEQUENCE SET; Schema: nusmaids; Owner: postgres
--

SELECT pg_catalog.setval('job_types_id_seq', 4, true);


--
-- TOC entry 2033 (class 0 OID 16407)
-- Dependencies: 176
-- Data for Name: jobs; Type: TABLE DATA; Schema: nusmaids; Owner: postgres
--

COPY jobs (id, type, location, employer_id, maid_id, cost, workflow_state, description, start_date, end_date) FROM stdin;
\.


--
-- TOC entry 2053 (class 0 OID 0)
-- Dependencies: 175
-- Name: jobs_id_seq; Type: SEQUENCE SET; Schema: nusmaids; Owner: postgres
--

SELECT pg_catalog.setval('jobs_id_seq', 1, false);


--
-- TOC entry 2031 (class 0 OID 16396)
-- Dependencies: 174
-- Data for Name: users; Type: TABLE DATA; Schema: nusmaids; Owner: postgres
--

COPY users (id, name, address, contact) FROM stdin;
\.


--
-- TOC entry 2054 (class 0 OID 0)
-- Dependencies: 173
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: nusmaids; Owner: postgres
--

SELECT pg_catalog.setval('users_id_seq', 1, false);


--
-- TOC entry 2037 (class 0 OID 16441)
-- Dependencies: 180
-- Data for Name: workflow_state; Type: TABLE DATA; Schema: nusmaids; Owner: postgres
--

COPY workflow_state (id, state) FROM stdin;
1	open
2	pending
3	approved
4	closed
\.


--
-- TOC entry 2055 (class 0 OID 0)
-- Dependencies: 179
-- Name: workflow_state_id_seq; Type: SEQUENCE SET; Schema: nusmaids; Owner: postgres
--

SELECT pg_catalog.setval('workflow_state_id_seq', 5, true);


--
-- TOC entry 1910 (class 2606 OID 16423)
-- Name: job_types_name_key; Type: CONSTRAINT; Schema: nusmaids; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY job_types
    ADD CONSTRAINT job_types_name_key UNIQUE (name);


--
-- TOC entry 1912 (class 2606 OID 16421)
-- Name: job_types_pkey; Type: CONSTRAINT; Schema: nusmaids; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY job_types
    ADD CONSTRAINT job_types_pkey PRIMARY KEY (id);


--
-- TOC entry 1908 (class 2606 OID 16404)
-- Name: users_pkey; Type: CONSTRAINT; Schema: nusmaids; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- TOC entry 1914 (class 2606 OID 16446)
-- Name: workflow_state_pkey; Type: CONSTRAINT; Schema: nusmaids; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY workflow_state
    ADD CONSTRAINT workflow_state_pkey PRIMARY KEY (id);


--
-- TOC entry 1916 (class 2606 OID 16448)
-- Name: workflow_state_state_key; Type: CONSTRAINT; Schema: nusmaids; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY workflow_state
    ADD CONSTRAINT workflow_state_state_key UNIQUE (state);


--
-- TOC entry 1917 (class 2606 OID 16424)
-- Name: jobs_employer_id_fkey; Type: FK CONSTRAINT; Schema: nusmaids; Owner: postgres
--

ALTER TABLE ONLY jobs
    ADD CONSTRAINT jobs_employer_id_fkey FOREIGN KEY (employer_id) REFERENCES users(id) ON UPDATE CASCADE ON DELETE SET NULL;


--
-- TOC entry 1918 (class 2606 OID 16429)
-- Name: jobs_maid_id_fkey; Type: FK CONSTRAINT; Schema: nusmaids; Owner: postgres
--

ALTER TABLE ONLY jobs
    ADD CONSTRAINT jobs_maid_id_fkey FOREIGN KEY (maid_id) REFERENCES users(id) ON UPDATE CASCADE ON DELETE SET NULL;


--
-- TOC entry 1919 (class 2606 OID 16434)
-- Name: jobs_type_fkey; Type: FK CONSTRAINT; Schema: nusmaids; Owner: postgres
--

ALTER TABLE ONLY jobs
    ADD CONSTRAINT jobs_type_fkey FOREIGN KEY (type) REFERENCES job_types(id) ON UPDATE CASCADE ON DELETE SET NULL;


--
-- TOC entry 1920 (class 2606 OID 16449)
-- Name: jobs_workflow_state_fkey; Type: FK CONSTRAINT; Schema: nusmaids; Owner: postgres
--

ALTER TABLE ONLY jobs
    ADD CONSTRAINT jobs_workflow_state_fkey FOREIGN KEY (workflow_state) REFERENCES workflow_state(id) ON UPDATE CASCADE ON DELETE SET NULL;


--
-- TOC entry 2045 (class 0 OID 0)
-- Dependencies: 5
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2015-01-25 03:56:59

--
-- PostgreSQL database dump complete
--

