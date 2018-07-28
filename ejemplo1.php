<?php 

$estudiante = new Estudiante($_POST['nombre'], $_POST['apellido'], $_POST['cedula'], $_POST['fechadenacimiento'], $_POST['ciudad'], $_POST['genero'], $_POST['usuario'], $_POST['password'], $_POST['correo'], $_POST['direccion'], $_POST['pasatiempo'], $_POST['localidad']);

echo $estudiante->toString();

// CLASE ESTUDIANTE

class  Estudiante
{
	private $nombre;
	private $apellido;
	private $cedula;
	private $fechadenacimiento;
	private $ciudad;
	private $genero;
	private $usuario;
	private $password;
	private $correo;
	private $direccion;
	private $pasatiempo;
	private $localidad;


	/**
	 * Class Constructor
	 * @param    $nombre   
	 * @param    $apellido   
	 * @param    $cedula   
	 * @param    $fechadenacimiento   
	 * @param    $ciudad   
	 * @param    $genero   
	 * @param    $usuario   
	 * @param    $password   
	 * @param    $correo   
	 * @param    $direccion   
	 * @param    $pasatiempo   
	 * @param    $localidad   
	 */

	public function __construct($nombre, $apellido, $cedula, $fechadenacimiento, $ciudad, $genero, $usuario, $password, $correo, $direccion, $pasatiempo, $localidad)
	{
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->cedula = $cedula;
		$this->fechadenacimiento = $fechadenacimiento;
		$this->ciudad = $ciudad;
		$this->genero = $genero;
		$this->usuario = $usuario;
		$this->password = $password;
		$this->correo = $correo;
		$this->direccion = $direccion;
		$this->pasatiempo = $pasatiempo;
		$this->localidad = $localidad;
	}

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     *
     * @return self
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * @param mixed $cedula
     *
     * @return self
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechadenacimiento()
    {
        return $this->fechadenacimiento;
    }

    /**
     * @param mixed $fechadenacimiento
     *
     * @return self
     */
    public function setFechadenacimiento($fechadenacimiento)
    {
        $this->fechadenacimiento = $fechadenacimiento;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * @param mixed $ciudad
     *
     * @return self
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * @param mixed $genero
     *
     * @return self
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     *
     * @return self
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * @param mixed $correo
     *
     * @return self
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     *
     * @return self
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPasatiempo()
    {
        return $this->pasatiempo;
    }

    /**
     * @param mixed $pasatiempo
     *
     * @return self
     */
    public function setPasatiempo($pasatiempo)
    {
        $this->pasatiempo = $pasatiempo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * @param mixed $localidad
     *
     * @return self
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    public function toString(){

    	$estudiante_a_string = "Nombre: $this->nombre apellido: $this->apellido direccion: $this->direccion localidad: $this->localidad";
    	return $estudiante_a_string;
    }

}
 ?>