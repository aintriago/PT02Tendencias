
  CREATE TABLE "CONSUMO_PREDICTIVO"."DIMENSION_MEDIO_PAGO" 
   (	"MEDIO_PAGO_DIMENSION_KEY" NUMBER(38,0) NOT NULL ENABLE, 
	"TOTAL_ID" NUMBER, 
	"TOTAL_CODIGO" VARCHAR2(25 BYTE), 
	"TOTAL_NOMBRE" VARCHAR2(40 BYTE), 
	"MEDIO_PAGO_ID" NUMBER, 
	"MEDIO_PAGO_CODIGO" VARCHAR2(25 BYTE), 
	"MEDIO_PAGO_NOMBRE" VARCHAR2(40 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;

  CREATE UNIQUE INDEX "CONSUMO_PREDICTIVO"."DIMENSION_MEDIO_PAGO_IDX" ON "CONSUMO_PREDICTIVO"."DIMENSION_MEDIO_PAGO" ("MEDIO_PAGO_DIMENSION_KEY") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
