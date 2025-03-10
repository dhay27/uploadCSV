<?php
namespace App\Controllers;
use CodeIgniter\HTTP\Client;
class Api extends BaseController
{
    public function index()
    {
        return view('api_view');
    }

    public function descargarImagenes($cantidad = 75, $ancho = 200, $alto = 300)
    {
        $client = \Config\Services::curlrequest();
        $rutaGuardado = WRITEPATH . 'images/picsum/'; // Directorio para guardar las imágenes
        if (!is_dir($rutaGuardado)) {
            mkdir($rutaGuardado, 0777, true); // Crea el directorio si no existe
        }
        for ($i = 0; $i < $cantidad; $i++) {
            $url = "https://picsum.photos/{$ancho}/{$alto}";
            $nombreArchivo = "picsum_{$ancho}x{$alto}_{$i}.jpg";
            $rutaCompleta = $rutaGuardado . $nombreArchivo;
            try {
                $response = $client->request('GET', $url);
                if ($response->getStatusCode() === 200) {
                    file_put_contents($rutaCompleta, $response->getBody());
                    echo "Imagen {$i} descargada y guardada en: " . $rutaCompleta . "<br>";
                } else {
                    echo "Error al descargar la imagen {$i}. Código de estado: " . $response->getStatusCode() . "<br>";
                }
            } catch (\Exception $e) {
                log_message('error', '[ERROR] {exception}', ['exception' => $e]);
                echo "Error al descargar la imagen {$i}: " . $e->getMessage() . "<br>";
            }
        }
        echo "Descarga de {$cantidad} imágenes completada.";
    }
}