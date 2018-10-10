public function testId1(): void {
  global $db;
  global $huboBind;
  $huboBind = false;
  $resul = traerMarcaPorId($db, 1);
  
  $this->assertTrue(is_array($resul), "El resultado deberia ser un array");
  
  $this->assertTrue(array_key_exists("nombre", $resul), "La informacion devuelta pareceria no tener columna nombre. Estas seguro de estar retornando solo una fila?");
  
  $this->assertTrue($resul["nombre"] == "HP", "No estas devolviendo la fila correcta");
   $this->assertTrue($huboBind, "Hiciste binding de parametros?");
}

public function testId2(): void {
  global $db;
  global $huboBind;
  $huboBind = false;
  $resul = traerMarcaPorId($db, 8);
  
  $this->assertTrue(is_array($resul), "El resultado deberia ser un array");
  
  $this->assertTrue(array_key_exists("nombre", $resul), "La informacion devuelta pareceria no tener columna nombre. Estas seguro de estar retornando solo una fila?");
  
  $this->assertTrue($resul["nombre"] == "Apple", "No estas devolviendo la fila correcta");
   $this->assertTrue($huboBind, "Hiciste binding de parametros?");
}