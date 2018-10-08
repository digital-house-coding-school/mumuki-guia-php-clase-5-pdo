public function testInsertGoogle(): void {
  global $db;
  insertarMarca($db);
  
  $query = $db->query("Select * from marcas");
  $marcas = $query->fetchAll();
  
  $this->assertTrue(count($marcas) == 21, "Parecería que no se insertó ninguna marca...");
  
  $last = array_pop($marcas);
  
  $this->assertTrue(array_key_exists("nombre", $last), "La marca insertada no tiene nombre asociado");
  
  $this->assertTrue($last["nombre"] == "Google", "La marca insertada no tiene el nombre correcto");
}