<?php
class Principal extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }
    public function about()
    {
        $data['title'] = 'Servicios';
        $this->views->getView('principal', "about", $data);
    }
    public function shop()
    {
        // $pagina = (empty($page)) ? 1 : $page;
        //$porPagina = 20;
        //$desde = ($pagina - 1) * $porPagina;

        $data['title'] = 'Nuestros productos';
        $data['productos'] = $this->model->getProductos();
        $this->views->getView('principal', "shop", $data);
    }
    public function contact()
    {
        $data['title'] = 'contacto';
        $this->views->getView('principal', "contact", $data);
    }
    public function detail($id_producto)
    {
        $data['producto'] = $this->model->getProducto($id_producto);
        $id_categoria = $data['producto']['id_categoria'];
        $data['aleatorios'] = $this->model->getAleatorios($id_categoria, $data['producto']['id']);
        $data['title'] = $data['producto']['nombre'];
        $this->views->getView('principal', "detail", $data);
    }
    public function categorias($id_categoria)
    {
        $data['productos'] = $this->model->getProductoCat($id_categoria);
        $data['title'] =  'Categorias';
        $this->views->getView('principal', "categorias", $data);
    }
    public function deseo()
    {
        $data['title'] = 'Lista de deseos';
        $this->views->getView('principal', "deseo", $data);
    }
    public function listaDeseo()
    {
        $datos = file_get_contents('php://input');
        $json = json_decode($datos, true);
        $array = array();
        foreach ($json as $producto) {
            $result = $this->model->getProducto($producto['idProducto']);
            $data['id'] = $result['id'];
            $data['nombre'] = $result['nombre'];
            $data['precio'] = $result['precio'];
            $data['cantidad'] = $producto['cantidad'];
            $data['imagen'] = $result['imagen'];
            array_push($array, $data);
        }
        echo json_encode($array, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function listaCarrito()
    {
        $datos = file_get_contents('php://input');
        $json = json_decode($datos, true);
        $array['productos'] = array();
        $total = 0.00;
        foreach ($json as $producto) {
            $result = $this->model->getProducto($producto['idProducto']);
            $data['id'] = $result['id'];
            $data['nombre'] = $result['nombre'];
            $data['precio'] = $result['precio'];
            $data['cantidad'] = $producto['cantidad'];
            $data['imagen'] = $result['imagen'];
            $subTotal = $result['precio'] * $producto['cantidad'];
            $data['subTotal'] = number_format($subTotal, 2);
            array_push($array['productos'], $data);
            $total += $subTotal;
        }
        $array['total'] = number_format($total, 2);
        echo json_encode($array, JSON_UNESCAPED_UNICODE);
        die();
    }
}
