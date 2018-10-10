Una vez más el usuario completa un formulario de buscador con las siguientes características:

``` html
<form method="GET">
  <input type="text" name="buscador">
</form>
```

Es tu tarea (de nuevo) obtener el valor escrito por el usuario y completar la función que retorne todos los resultados de marcas que correspondan con el texto buscado.

El texto buscado debe estar en cualquier parte del nombre de la marca.

**La diferencia** con el ejercicio anterior es que en este caso queremos asegurar seguridad sabiendo que lo que haya escrito el usuario no va a generar un ataque de SQL injection. Para esto, necesitamos que utilices binding de valores.

Alguna aclaraciones **imporantes** respecto al binding de parámetros utilizando el operador LIKE:

1. La query SQL debería verse algo así: `like :buscador`. 

2. Esto significa que no escribimos la parte de los wildcards (%) en el SQL sino cuando hacemos `bindValue` 

3. Esto también significa que ya no son necesarias las comillas en la parte de SQL (las que recubrirían a `:buscador` no son necesarias) 



Éxitos!!