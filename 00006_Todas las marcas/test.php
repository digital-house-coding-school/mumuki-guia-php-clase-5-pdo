public function testMarcas(): void {
  global $db;
  $resul = traerMarcas($db);
  
  $this->assertTrue(is_array($resul), "El resultado deberia ser un array");
  
  $this->assertTrue(count($resul) == 20, "Estas seguro que estas trayendo todas las marcas? Deberia haber 20...");
  
  $primera = $resul[0];
  
  $this->assertTrue($primera["nombre"] == "HP", "Estas retornando marcas?");
}