Una vez más vamos a trabajar sobre la función `abrirBaseDeDatos` pero en este caso las pruebas serán más exhaustivas.

Esto se debe a que al ejecutar `new PDO` podría generarse un error.

¿Que debería hacer tu función?

Si no hay ningun error, debería retornar una conexión a base de datos abierta (igual que en el ejercicio anterior). Por el contrario, si hubiese un error, debe retornar `false`