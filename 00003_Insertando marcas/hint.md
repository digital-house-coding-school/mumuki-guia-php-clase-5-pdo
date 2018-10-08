Hay dos trucos en este ejercicio:

1. Por un lado no olvides hacer la secuencia de `prepare` que va a recibir el código SQL y `execute` que va a ejecutar la consulta

2. No olvides que para asignarle un id autonumérico en SQLite podemos enviar **null** como id

3. No olvides que en SQL al insertar Strings son entre comillas. Esto vale aunque tengamos una variable en la consulta.