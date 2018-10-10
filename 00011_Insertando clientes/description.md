Vamos con un desafío final! Insertar un cliente!

Recordemos como se veía la tabla de clientes...

<div
  class='mu-erd'
  data-entities='{
    "clientes": {
      "id": {
        "type": "Integer",
        "pk": true
      },
      "nombre": {
        "type": "Text"
      },
      "apellido": {
        "type": "Text"
      },
      "email": {
        "type": "Text"
      },
      "telefono": {
        "type": "Text"
      },
      "celular": {
        "type": "Text"
      },
      "fecha_de_nacimiento": {
        "type": "Datetime"
      },
      "id_producto_preferido" : {
        "type": "Integer"
      }
    }
  }'>
</div>

Para poder registrarse un usuario llena un formulario con las siguientes características:

``` html
<form method="POST">
  <input type="text" name="nombre">
  <input type="text" name="apellido">
  <input type="email" name="email">
  <input type="text" name="telefono">
  <input type="text" name="celular">
  <input type="text" name="dia">
  <input type="text" name="mes">
  <input type="text" name="anio">
  <select name="producto_preferido">
    
    
  </select>
</form>
```

Tu desafío entonces es tomar toda la información del formulario e insertarla en la tabla de usuarios **de manera segura**

Cuidado con la fecha de nacimiento ya que recibimos los datos en 3 campos separados y deberías armar un solo dato en formato "YYYY-MM-DD"

Podes asumir para el ejercicio que los datos ya estan validados.

¡Éxitos!
