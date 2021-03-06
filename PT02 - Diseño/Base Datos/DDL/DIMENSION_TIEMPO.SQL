
  CREATE TABLE "CONSUMO_PREDICTIVO"."DIMENSION_TIEMPO" 
   (	"TIEMPO_DIMENSION_KEY" NUMBER(38,0) NOT NULL ENABLE, 
	"AGNO_ID" NUMBER(38,0), 
	"AGNO_FECHA" VARCHAR2(25 BYTE), 
	"AGNO_NOMBRE_DIA" VARCHAR2(40 BYTE), 
	"TRIMESTRE_ID" NUMBER(38,0), 
	"TRIMESTRE_FECHA" VARCHAR2(25 BYTE), 
	"TRIMESTRE_NOMBRE_DIA" VARCHAR2(40 BYTE), 
	"MES_ID" NUMBER(38,0), 
	"MES_FECHA" VARCHAR2(25 BYTE), 
	"MES_NOMBRE_DIA" VARCHAR2(40 BYTE), 
	"SEMANA_ID" NUMBER(38,0), 
	"SEMANA_FECHA" VARCHAR2(25 BYTE), 
	"SEMANA_NOMBRE_DIA" VARCHAR2(40 BYTE), 
	"DIA_ID" NUMBER(38,0), 
	"DIA_FECHA" DATE, 
	"DIA_NOMBRE_DIA" NUMBER(3,0), 
	"DIA_ANTERIOR" DATE, 
	"MES_ANTERIOR" DATE, 
	"AGNO_ANTERIOR" DATE
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;

  CREATE UNIQUE INDEX "CONSUMO_PREDICTIVO"."DIMENSION_TIEMPO_IDX" ON "CONSUMO_PREDICTIVO"."DIMENSION_TIEMPO" ("TIEMPO_DIMENSION_KEY") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
