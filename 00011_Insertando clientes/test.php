public function testInsertarAle(): void {
  global $db;
  global $huboBind;
  $huboBind = false;
  
  $_POST = [
    "nombre" => "Alejandro",
    "apellido" => "Vivone",
    "email" => "alejandro@digitalhouse.com",
    "telefono" => 42345678,
    "celular" => 1140965412,
    "dia" => 12,
    "mes" => 10,
    "anio" => 1980,
    "producto_preferido" => 2
  ];
  
  insertarUsuario($db);
  
  $query = $db->query("Select * from clientes");
  $clientes = $query->fetchAll();
  
  $this->assertTrue(count($marcas) == 7, "Parecería que no se insertó ningun cliente...");
  
  $last = array_pop($clientes);
  
  $this->assertTrue(array_key_exists("nombre", $last), "El cliente insertado no tiene nombre asociado");
  
  $this->assertTrue($last["nombre"] == "Alejandro", "El cliente insertado no tiene el nombre correcto");
  
  $this->assertTrue(array_key_exists("apellido", $last), "El cliente insertado no tiene apellido asociado");
  
  $this->assertTrue($last["apellido"] == "Vivone", "El cliente insertado no tiene el apellido correcto");
  
  $this->assertTrue(array_key_exists("telefono", $last), "El cliente insertado no tiene telefono asociado");
  
  $this->assertTrue($last["telefono"] == "42345678", "El cliente insertado no tiene el telefono correcto");
  
  $this->assertTrue(array_key_exists("celular", $last), "El cliente insertado no tiene celular asociado");
  
  $this->assertTrue($last["celular"] == "1140965412", "El cliente insertado no tiene el nombre correcto");
  
  $this->assertTrue(array_key_exists("fecha_de_nacimiento", $last), "El cliente insertado no tiene fecha de nacimiento asociado");
  
  $this->assertTrue($last["fecha_de_nacimiento"] == "1980-10-12", "El cliente insertado no tiene la fecha de nacimiento correcta");
  
  $this->assertTrue(array_key_exists("id_producto_preferido", $last), "El cliente insertado no tiene producto preferido asociado");
  
  $this->assertTrue($last["id_producto_preferido"] == "2", "El cliente insertado no tiene el producto preferido correcto");
  
  $this->assertTrue($huboBind, "Hiciste binding de parametros?");
}