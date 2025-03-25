<?php 
include 'api-google/vendor/autoload.php';
use Google\Client; 
use Google\Service\Drive;
$credentialsPath = 'archivostubagua-5a6120c8bf21.json';


//putenv('GOOGLE_APPLICATION_CREDENTIALS=archivostubagua-5a6120c8bf21.json');
// $cliente = new Client();
// $cliente->useApplicationDefaultCredentials();
// $cliente->addScope(Drive::DRIVE);
// //$cliente->setScopes(['https://www..gogleapis.com/auth/drive.file']);
// //$cliente->addScope(Google_Service_Drive::DRIVE);
// $service =new Drive($cliente);

// $resultado = $service->files->listFiles();
// //var_dump($resultado);
// foreach($resultado as  $elemento){
//     echo $elemento->id. ' ' .$elemento->name . '<br/>';

// }
class GoogleDriveImages {
    private $client;
    private $service; 

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
            'fields' => 'files(id, name, mimeType, webViewLink, parents)'
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
}

?>