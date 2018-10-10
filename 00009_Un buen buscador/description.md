Una vez más el usuario completa un formulario de buscador con las siguientes características:

``` html
<form method="GET">
  <input type="text" name="buscador">
</form>
```

Es tu tarea (de nuevo) obtener el valor escrito por el usuario y completar la función que retorne todos los resultados de marcas que correspondan con el texto buscado.

El texto buscado debe estar en cualquier parte del nombre de la marca.

**La diferencia** con el ejercicio anterior es que en este caso queremos asegurar seguridad sabiendo que lo que haya escrito el usuario no va a generar un ataque de SQL injection. Para esto, necesitamos que utilices binding de valores.

Éxitos!!