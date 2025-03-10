<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ArchivosCVS;
use Spatie\Exif\Exif;

class Archivos extends BaseController
{
    public function index()
    {
        return view('formulario');
    }

    public function nuevo()
    {
        return view('nuevo');
    }

    public function convertir()
    {
        $directorioImagenes = WRITEPATH . 'uploads/images/picsum/'; // Ruta a tu directorio de imágenes
        $nombreArchivoCsv = WRITEPATH . 'csv/datos.csv'; // Ruta para el archivo CSV

        $this->convertirImagenesACsv($directorioImagenes, $nombreArchivoCsv);
       
        echo "Conversión completada. Archivo CSV creado en: " . $nombreArchivoCsv;
    }

    private function convertirImagenesACsv($directorioImagenes, $nombreArchivoCsv)
    {
        $archivoCsv = fopen($nombreArchivoCsv, 'w');
        fputcsv($archivoCsv, ['Nombre Archivo', 'Modelo Cámara', 'Fecha Creación', 'GPS Latitud', 'GPS Longitud'], ';'); // Encabezados CSV

        foreach (glob($directorioImagenes . '*.{jpg,jpeg,png,gif}', GLOB_BRACE) as $rutaImagen) {
            try {
                $exif = exif_read_data($rutaImagen);
                var_dump($exif);
        exit();
                fputcsv($archivoCsv, $exif, ';');
            } catch (\Exception $e) {
                error_log("Error al procesar la imagen: " . $rutaImagen . " - " . $e->getMessage());
            }
        }
        
        exit();
        fclose($archivoCsv);
    }

    public function ver($id)
    {
        $model = new ArchivosCVS();
        $data['datos'] = $model->where("id", $id)->get()->getRowArray();
        return view('ver' , $data);
    }

    public function crear()
    {
        $model = new ArchivosCVS();
        $data = [
            'name' => $this->request->getPost('name'),
            'model' => $this->request->getPost('model'),
            'manufacturer' => $this->request->getPost('manufacturer'),
            'cost_in_credits' => $this->request->getPost('cost_in_credits'),
            'length' => $this->request->getPost('length'),
            'max_atmosphering_speed' => $this->request->getPost('max_atmosphering_speed'),
            'crew' => $this->request->getPost('crew'),
            'passengers' => $this->request->getPost('passengers'),
            'cargo_capacity' => $this->request->getPost('cargo_capacity'),
            'consumables' => $this->request->getPost('consumables'),
            'hyperdrive_rating' => $this->request->getPost('hyperdrive_rating'),
            'MGLT' => $this->request->getPost('MGLT'),
            'starship_class' => $this->request->getPost('starship_class'),
            'created' => $this->request->getPost('created'),
            'edited' => $this->request->getPost('edited'),
            'url' => $this->request->getPost('url'),
        ];
        $model->insert($data);
        return redirect()->to('/visualizar')->with('mensaje', 'Producto añadido');
    }

    public function upload()
    {
       
        $file = $this->request->getFile('csv_file');

      
            $newName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $newName);

            $filepath = WRITEPATH . 'uploads/' . $newName;

            $csv = array_map('str_getcsv', file($filepath));
            array_shift($csv);

            $model = new ArchivosCVS();

        foreach ($csv as $item) {
            $data = $this->extractData($item);
            //var_dump($data);
            //exit();
            if ($data) {
                $model->insert($data);
            }
        }

        return redirect()->to('/visualizar')->with('success', 'Archivo CSV cargado con éxito.');
        
    }

    public function eliminar($id)
    {
        $model = new ArchivosCVS();
        $model->delete($id);

        return redirect()->to('/upload')->with('mensaje', 'Dato Eliminado');
    }
    
    public function visualizar()
    {
        $model = new ArchivosCVS();
        $data['datos'] = $model->findAll();
        return view('visualizar_datos', $data);
    }
    
        
    public function extractData($item){
        $data = [];

                // Determinar la estructura del sub-array y extraer los datos
                if (count($item) == 1) {
                    $values = explode(';', $item[0]);
                    if (count($values) >= 16) {
                        $data = [
                                'name' => $values[0],
                                'model' => $values[1],
                                'manufacturer' => $values[2],
                                'cost_in_credits' => $values[3],
                                'length' => $values[4],
                                'max_atmosphering_speed' => $values[5],
                                'crew' => $values[6],
                                'passengers' => $values[7],
                                'cargo_capacity' => $values[8],
                                'consumables' => $values[9],
                                'hyperdrive_rating' => $values[10],
                                'MGLT' => $values[11],
                                'starship_class' => $values[12],
                                'created' => $values[13],
                                'edited' => $values[14],
                                'url' => $values[15],
                        ];
                    }
            
                } elseif (count($item) == 2) {
                    $values1 = explode(';', $item[0]);
                    $values2 = explode(';', $item[1]);
            
                    if (count($values1) >= 1 && count($values2) >= 16) {
                        $data = [
                            'name' => $values[0],
                            'model' => $values[1],
                            'manufacturer' => $values[2],
                            'cost_in_credits' => $values[3],
                            'length' => $values[4],
                            'max_atmosphering_speed' => $values[5],
                            'crew' => $values[6],
                            'passengers' => $values[7],
                            'cargo_capacity' => $values[8],
                            'consumables' => $values[9],
                            'hyperdrive_rating' => $values[10],
                            'MGLT' => $values[11],
                            'starship_class' => $values[12],
                            'created' => $values[13],
                            'edited' => $values[14],
                            'url' => $values[15],
                    ];
                        
                }
            
                }elseif (count($item) == 3){
                    $values1 = explode(';', $item[0]);
                    $values2 = explode(';', $item[1]);
                    $values3 = explode(';', $item[2]);
            
                    if (count($values1) >= 1 && count($values2) >= 1 && count($values3) >= 16) {
                        $data = [
                            'name' => $values[0],
                            'model' => $values[1],
                            'manufacturer' => $values[2],
                            'cost_in_credits' => $values[3],
                            'length' => $values[4],
                            'max_atmosphering_speed' => $values[5],
                            'crew' => $values[6],
                            'passengers' => $values[7],
                            'cargo_capacity' => $values[8],
                            'consumables' => $values[9],
                            'hyperdrive_rating' => $values[10],
                            'MGLT' => $values[11],
                            'starship_class' => $values[12],
                            'created' => $values[13],
                            'edited' => $values[14],
                            'url' => $values[15],
                    ];
            
                }   
                    
            
                }elseif (count($item) == 4){
                    $values1 = explode(';', $item[0]);
                    $values2 = explode(';', $item[1]);
                    $values3 = explode(';', $item[2]);
                    $values4 = explode(';', $item[3]);
            
                    if (count($values1) >= 1 && count($values2) >= 1 && count($values3) >= 1 && count($values4) >= 16) {
                        $data = [
                            'name' => $values[0],
                            'model' => $values[1],
                            'manufacturer' => $values[2],
                            'cost_in_credits' => $values[3],
                            'length' => $values[4],
                            'max_atmosphering_speed' => $values[5],
                            'crew' => $values[6],
                            'passengers' => $values[7],
                            'cargo_capacity' => $values[8],
                            'consumables' => $values[9],
                            'hyperdrive_rating' => $values[10],
                            'MGLT' => $values[11],
                            'starship_class' => $values[12],
                            'created' => $values[13],
                            'edited' => $values[14],
                            'url' => $values[15],
                    ];

                }
                
                 
    }

    return $data;
}

}
