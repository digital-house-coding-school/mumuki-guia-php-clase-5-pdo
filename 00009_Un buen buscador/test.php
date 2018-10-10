public function testBuscar1(): void {
  global $db;
  $_GET = [
    "buscador" => "T"
  ];
  
  $resul = buscarMarca($db);
  
  $this->assertTrue(is_array($resul), "El resultado deberia ser un array");
  
  $this->assertTrue(count($resul) == 8, "El buscador no esta retornando la cantidad de elementos esperada");
}

public function testBuscar2(): void {
  global $db;
  $_GET = [
    "buscador" => "S"
  ];
  
  $resul = buscarMarca($db);
  
  $this->assertTrue(is_array($resul), "El resultado deberia ser un array");
  
  $this->assertTrue(count($resul) == 11, "El buscador no esta retornando la cantidad de elementos esperada");
}

public function testBuscar3(): void {
  global $db;
  $_GET = [
    "buscador" => "R"
  ];
  
  $resul = buscarMarca($db);
  
  $this->assertTrue(is_array($resul), "El resultado deberia ser un array");
  
  $this->assertTrue(count($resul) == 5, "El buscador no esta retornando la cantidad de elementos esperada");
}