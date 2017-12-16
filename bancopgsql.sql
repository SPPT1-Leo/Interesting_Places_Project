CREATE TABLE controller (
  id INTEGER   NOT NULL ,
  nome VARCHAR(255)   NOT NULL   ,
PRIMARY KEY(id));




CREATE TABLE tipo_lugar (
  id SERIAL  NOT NULL ,
  nome VARCHAR(255)   NOT NULL   ,
PRIMARY KEY(id));




CREATE TABLE uf (
  id SERIAL  NOT NULL ,
  nome VARCHAR(255)   NOT NULL ,
  sigla VARCHAR(2)   NOT NULL   ,
PRIMARY KEY(id));




CREATE TABLE action (
  id INTEGER   NOT NULL ,
  nome VARCHAR(255)   NOT NULL   ,
PRIMARY KEY(id));




CREATE TABLE pessoa (
  id SERIAL  NOT NULL ,
  nome VARCHAR(255)   NOT NULL ,
  cnpj_cpf VARCHAR(30)   NOT NULL ,
  endereco_id INTEGER   NOT NULL ,
  email VARCHAR(255)   NOT NULL ,
  telefone_1 VARCHAR(25)   NOT NULL ,
  telefone_2 VARCHAR(25)      ,
PRIMARY KEY(id));




CREATE TABLE role (
  id INTEGER   NOT NULL ,
  nome VARCHAR(255)   NOT NULL   ,
PRIMARY KEY(id));




CREATE TABLE cidade (
  id SERIAL  NOT NULL ,
  nome VARCHAR(255)   NOT NULL ,
  uf_id INTEGER   NOT NULL ,
  codigo_ibge INTEGER      ,
PRIMARY KEY(id)  ,
  FOREIGN KEY(uf_id)
    REFERENCES uf(id));


CREATE INDEX cidade_FKIndex1 ON cidade (uf_id);


CREATE INDEX IFK_Rel_01 ON cidade (uf_id);


CREATE TABLE endereco (
  id SERIAL  NOT NULL ,
  logradouro VARCHAR(255)   NOT NULL ,
  bairro VARCHAR(255)   NOT NULL ,
  cep VARCHAR(12)   NOT NULL ,
  cidade_id INTEGER   NOT NULL ,
  numero INTEGER   NOT NULL ,
  complemento VARCHAR(255)      ,
PRIMARY KEY(id)  ,
  FOREIGN KEY(cidade_id)
    REFERENCES cidade(id));


CREATE INDEX endereco_FKIndex1 ON endereco (cidade_id);


CREATE INDEX IFK_Rel_02 ON endereco (cidade_id);


CREATE TABLE resource (
  id INTEGER   NOT NULL ,
  action_id INTEGER   NOT NULL ,
  controller_id INTEGER   NOT NULL   ,
PRIMARY KEY(id)    ,
  FOREIGN KEY(action_id)
    REFERENCES action(id),
  FOREIGN KEY(controller_id)
    REFERENCES controller(id));


CREATE INDEX resource_FKIndex1 ON resource (action_id);
CREATE INDEX resource_FKIndex2 ON resource (controller_id);


CREATE INDEX IFK_Rel_07 ON resource (action_id);
CREATE INDEX IFK_Rel_08 ON resource (controller_id);


CREATE TABLE usuario (
  id SERIAL  NOT NULL ,
  role_id INTEGER   NOT NULL ,
  login VARCHAR(255)   NOT NULL ,
  senha VARCHAR(255)   NOT NULL ,
  pessoa_id INTEGER   NOT NULL   ,
PRIMARY KEY(id)    ,
  FOREIGN KEY(pessoa_id)
    REFERENCES pessoa(id),
  FOREIGN KEY(role_id)
    REFERENCES role(id));


CREATE INDEX usuario_FKIndex1 ON usuario (pessoa_id);
CREATE INDEX usuario_FKIndex2 ON usuario (role_id);


CREATE INDEX IFK_Rel_05 ON usuario (pessoa_id);
CREATE INDEX IFK_Rel_06 ON usuario (role_id);


CREATE TABLE lugar (
  id SERIAL  NOT NULL ,
  tipo_lugar_id INTEGER   NOT NULL ,
  nome VARCHAR(255)   NOT NULL ,
  tipo_id INTEGER   NOT NULL ,
  endereco_id INTEGER   NOT NULL ,
  site VARCHAR(255)    ,
  telefone_1 VARCHAR(25)   NOT NULL ,
  telefone_2 VARCHAR(25)    ,
  facebook VARCHAR(255)    ,
  instagram VARCHAR(255)    ,
  whatsapp VARCHAR(25)      ,
PRIMARY KEY(id)    ,
  FOREIGN KEY(tipo_lugar_id)
    REFERENCES tipo_lugar(id),
  FOREIGN KEY(endereco_id)
    REFERENCES endereco(id));


CREATE INDEX lugar_FKIndex1 ON lugar (tipo_lugar_id);
CREATE INDEX lugar_FKIndex2 ON lugar (endereco_id);


CREATE INDEX IFK_Rel_03 ON lugar (tipo_lugar_id);
CREATE INDEX IFK_Rel_04 ON lugar (endereco_id);


CREATE TABLE privilege (
  id INTEGER   NOT NULL ,
  role_id INTEGER   NOT NULL ,
  resource_id INTEGER   NOT NULL ,
  permission BOOL   NOT NULL   ,
PRIMARY KEY(id)    ,
  FOREIGN KEY(role_id)
    REFERENCES role(id),
  FOREIGN KEY(resource_id)
    REFERENCES resource(id));


CREATE INDEX privilege_FKIndex1 ON privilege (role_id);
CREATE INDEX privilege_FKIndex2 ON privilege (resource_id);


CREATE INDEX IFK_Rel_09 ON privilege (role_id);
CREATE INDEX IFK_Rel_10 ON privilege (resource_id);


CREATE TABLE nota (
  id INTEGER   NOT NULL ,
  horario TIMESTAMP   NOT NULL ,
  pessoa_id INTEGER   NOT NULL ,
  lugar_id INTEGER   NOT NULL ,
  valor INTEGER   NOT NULL ,
  resenha VARCHAR(255)      ,
PRIMARY KEY(id)      ,
  FOREIGN KEY(lugar_id)
    REFERENCES lugar(id),
  FOREIGN KEY(pessoa_id)
    REFERENCES pessoa(id));


CREATE UNIQUE INDEX nota_FKIndex1 ON nota (lugar_id);
CREATE INDEX nota_FKIndex2 ON nota (pessoa_id);
CREATE UNIQUE INDEX nota_unique ON nota (lugar_id, pessoa_id);


CREATE INDEX IFK_Rel_12 ON nota (lugar_id);
CREATE INDEX IFK_Rel_13 ON nota (pessoa_id);


CREATE TABLE imagens_lugar (
  id SERIAL  NOT NULL ,
  lugar_id INTEGER   NOT NULL ,
  path VARCHAR(255)   NOT NULL   ,
PRIMARY KEY(id)  ,
  FOREIGN KEY(lugar_id)
    REFERENCES lugar(id));


CREATE INDEX imagens_lugar_FKIndex1 ON imagens_lugar (lugar_id);


--CREATE INDEX IFK_Rel_13 ON imagens_lugar (lugar_id);


CREATE TABLE imagens_pessoa (
  id SERIAL  NOT NULL ,
  path VARCHAR(255)   NOT NULL ,
  pessoa_id INTEGER    ,
  lugar_id INTEGER      ,
PRIMARY KEY(id)    ,
  FOREIGN KEY(lugar_id)
    REFERENCES lugar(id),
  FOREIGN KEY(pessoa_id)
    REFERENCES pessoa(id));


CREATE INDEX imagens_pessoa_FKIndex1 ON imagens_pessoa (lugar_id);
CREATE INDEX imagens_pessoa_FKIndex2 ON imagens_pessoa (pessoa_id);


CREATE INDEX IFK_Rel_14 ON imagens_pessoa (lugar_id);
CREATE INDEX IFK_Rel_15 ON imagens_pessoa (pessoa_id);


CREATE TABLE comentario (
  id SERIAL  NOT NULL ,
  desc_2 TEXT   NOT NULL ,
  pessoa_id INTEGER   NOT NULL ,
  imagens_pessoa_id INTEGER   NOT NULL ,
  horario TIMESTAMP   NOT NULL   ,
PRIMARY KEY(id)    ,
  FOREIGN KEY(pessoa_id)
    REFERENCES pessoa(id),
  FOREIGN KEY(imagens_pessoa_id)
    REFERENCES imagens_pessoa(id));


CREATE INDEX comentario_FKIndex1 ON comentario (pessoa_id);
CREATE INDEX comentario_FKIndex2 ON comentario (imagens_pessoa_id);


CREATE INDEX IFK_Rel_16 ON comentario (pessoa_id);
CREATE INDEX IFK_Rel_17 ON comentario (imagens_pessoa_id);



