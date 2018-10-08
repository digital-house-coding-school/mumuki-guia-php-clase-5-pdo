public function testInsertFanta(): void {
  global $db;
  insertarMarca($db, "Fanta");
  
  $query = $db->query("Select * from marcas");
  $marcas = $query->fetchAll();
  
  $this->assertTrue(count($marcas) == 21, "Parecería que no se insertó ninguna marca...");
  
  $last = array_pop($marcas);
  
  $this->assertTrue(array_key_exists("nombre", $last), "La marca insertada no tiene nombre asociado");
  
  $this->assertTrue($last["nombre"] == "Fanta", "La marca insertada no tiene el nombre correcto");
}

public function testInsertArcor(): void {
  global $db;
  insertarMarca($db, "Arcor");
  
  $query = $db->query("Select * from marcas");
  $marcas = $query->fetchAll();
  
  $this->assertTrue(count($marcas) == 22, "Parecería que no se insertó ninguna marca...");
  
  $last = array_pop($marcas);
  
  $this->assertTrue(array_key_exists("nombre", $last), "La marca insertada no tiene nombre asociado");
  
  $this->assertTrue($last["nombre"] == "Arcor", "La marca insertada no tiene el nombre correcto");
}