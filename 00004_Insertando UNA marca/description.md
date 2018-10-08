¿Recuerdan la tabla de marcas?

<div
  class='mu-erd'
  data-entities='{
    "marcas": {
      "id": {
        "type": "Integer",
        "pk": true
      },
      "nombre": {
        "type": "Text"
      }
    }
  }'>
</div>

Dada esta tabla, tu trabajo es completar la función `insertarMarca` que va a insertar una marca nueva en la tabla **marcas**. 

La función recibe una variable `$db` **que ya tiene la conexión a base de datos abierta**

Es decir, ya esta hecha la parte de `new PDO`

**En este caso tenes que insertar una marca con nombre Google**

Abajo te dejamos una pista si el ejercicio se hace muy complejo :point_down:
