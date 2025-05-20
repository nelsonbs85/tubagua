<?php 
include 'api-google/vendor/autoload.php';
use Google\Client; 
use Google\Service\Drive;
$credentialsPath = 'archivostubagua-28591ff69fd4.json';

// $directorios = array(
//     0 =>'1ypcvmK1ANPTld8xdyW2aoRH9JSUdJwOQ',
//     1 =>'1jweGmbrmZ9XMMkwYK_UVeAX_MybwENS1',
//     2 =>'1La6E7Ylvk0ibO0fcLhl-fIYq7U3r3s41',
//     3 =>'12QGPVrC7ew4PqNB3aGtrGIhoc8jhRwon',
//     4 =>'1yPMTEsv6e0y1Vxo2Y9Knh8ncOz9aXL6X',
//     5 =>'',
//     6 =>'',
//     7 =>'1BDcq9y-3I0xSwUSoamTSZNa2PXhEKK50',

// );


class GoogleDriveImages {
    private $client;
    private $service; 
    private $directorios = array( //prueba
        0 =>'1hyiSHxcwVrBNaAbnsRV8AANhq6IkXdpU',
        1 =>'1mrxeXNAuWPTHWLuChA9gz1ABJAbdEOmh',
        2 =>'1FYTBYDNCfNF95bmmt4V1XuLplHFyjoy6',
        3 =>'1GBANdjbWsFncXVn8N22fcv8kdO-YgaMU',
        4 =>'18-jVyRRZfi35VOtZKG7X2Pj1vwTSxkL7',
        5 =>'',
        6 =>'',
        7 =>'1IQZ_I0hLuCCLf2zgRAFSJ2ZlgebMqhZ0',
    );
    public function __construct($credentialsPath) {
        $this->client = new Client();
        $this->client->setAuthConfig($credentialsPath);
       // $client->useApplicationDefaultCredentials();
        $this->client->addScope(Drive::DRIVE);

        $this->service = new Drive($this->client);
    }

    public function searchImagesByName($folderId, $imageName) {
        $query = sprintf(
            "'%s' in parents and name contains '%s' and mimeType starts with 'image/'",
            $folderId,
            $imageName
        );

        $params = ['q' => $query];
        $results = $this->service->files->listFiles($params);
        //var_dump($results);
        $images = [];
        foreach ($results->getFiles() as $file) {
            $images[] = [
                'id' => $file->getId(),
                'name' => $file->getName(),
                'link' => $file->getWebViewLink()
                
            ];
        }
        //var_dump($images);
        return $images;
    }
    public function searchImagesRecursively($folderId, $imageName) {
       
        $query = sprintf(
            "'%s' in parents and name contains '%s' and mimeType starts with 'image/'",
            $folderId,
            $imageName
        );
      
        $params = [
            'q' => $query,
            'fields' => 'files(id, name, 
            mimeType, webViewLink, parents)'
        ];
        $results = $this->service->files->listFiles($params);
    
        $images = [];
        foreach ($results->getFiles() as $file) {
            $images[] = [
                'id' => $file->getId(),
                'name' => $file->getName(),
                'link' => $file->getWebViewLink()
            ];
        }
     //   var_dump($images);
        return $images;
    }
    public function searchImagesInAllFolders($folderId, $imageName) {
        $images = [];
        $query = sprintf(
            "'%s' in parents and mimeType = 'application/vnd.google-apps.folder'",
            $folderId
        );

        $params = ['q' => $query];
        $subFolders = $this->service->files->listFiles($params);
    
        foreach ($subFolders->getFiles() as $subFolder) {
            // Busca imágenes en el subdirectorio actual
            $images = array_merge($images, $this->searchImagesByName($subFolder->getId(), $imageName));
    
            // Realiza búsqueda en subdirectorios del subdirectorio (recursivamente)
            $images = array_merge($images, $this->searchImagesInAllFolders($subFolder->getId(), $imageName));
        }
    
        return $images;
    }
    public function searchAll($categoria, $subcategoria, $nombreImagen){
       
         $folderId = $this->directorios[$categoria];
       
        $imagenes = [];
		// Buscar imágenes en la carpeta actual
		$optParams = [
			'q' => "'$folderId' in parents and name contains '$nombreImagen' and mimeType contains 'image/'",
			'fields' => 'files(id, name, mimeType)'
		];
		$resultados = $this->service->files->listFiles($optParams);

		foreach ($resultados->getFiles() as $archivo) {
			$imagenes[] =  $archivo->getId();
		}

		// Obtener subdirectorios dentro de la carpeta actual
		$optParams = [
			'q' => "'$folderId' in parents and mimeType = 'application/vnd.google-apps.folder'",
			'fields' => 'files(id, name)'
		];
		$subcarpetas = $this->service->files->listFiles($optParams);

		foreach ($subcarpetas->getFiles() as $carpeta) {
			$imagenes = array_merge($imagenes, $this->searchAll(
             $categoria, $subcategoria, $nombreImagen, ''));
             
		}
        var_dump($imagenes);
		return $imagenes;
  }
}

?>