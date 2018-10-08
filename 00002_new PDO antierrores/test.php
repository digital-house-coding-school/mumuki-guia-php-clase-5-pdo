public function testBaseDeDatos(): void {
  $resul = abrirBaseDeDatos('sqlite:test', 'root', 'root');
  
  $this->assertTrue(gettype($resul) == "object", "La funcion no esta devolviendo una conexión a Base de Datos abierta");
  
  $this->assertTrue($resul instanceof PDO, "La funcion no esta devolviendo una conexión a Base de Datos abierta");
}

public function testBaseDeDatosError(): void {
  $resul = abrirBaseDeDatos('qlite:test', 'root', 'root');
  
  $this->assertTrue($resul === false, "La función debe retornar false en caso de que haya un error");
}