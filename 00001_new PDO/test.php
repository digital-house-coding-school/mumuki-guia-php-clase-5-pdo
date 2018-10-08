public function testBaseDeDatos(): void {
  $resul = abrirBaseDeDatos('sqlite:test', 'root', 'root');
  
  $this->assertTrue(gettype($resul) == "object", "La funcion no esta devolviendo una conexión a Base de Datos abierta");
  
  $this->assertTrue($resul instanceof PDO, "La funcion no esta devolviendo una conexión a Base de Datos abierta");
}