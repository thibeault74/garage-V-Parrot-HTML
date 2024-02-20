<<?php
require_once 'conexion.php'; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_FILES['fichero'])) {
        
        if ($_FILES['fichero']['error'] === UPLOAD_ERR_OK) {
            
            $allowed_types = ['image/jpeg', 'image/png'];
            $file_type = mime_content_type($_FILES['fichero']['tmp_name']);
            if (!in_array($file_type, $allowed_types)) {
                echo "El tipo de archivo que desea cargar no es JPEG ni PNG";
                exit();
            }

            
            $max_size_kb = 3072;
            if ($_FILES['fichero']['size'] / 1024 > $max_size_kb) {
                echo "Límite de carga del archivo excedido (máximo $max_size_kb KB)";
                exit();
            }

            
            $uploads_dir = "cargados";
            if (!is_dir($uploads_dir) && !mkdir($uploads_dir, 0777, true)) {
                echo "Error al crear la carpeta";
                exit();
            }

            $file_name = uniqid() . '_' . $_FILES['fichero']['name']; 
            $upload_path = "$uploads_dir/$file_name";
            if (move_uploaded_file($_FILES['fichero']['tmp_name'], $upload_path)) {
                
                $marca = $_POST['marca'];
                $tipo_vehiculo = $_POST['tipo_vehiculo'];
                $anio = $_POST['anio'];
                $precio = $_POST['precio'];

                
                $sql = "INSERT INTO datos_vehiculos (marca, tipo_vehiculo, anio, precio, imagen) VALUES (?, ?, ?, ?, ?)";
                $stmt = $conexion->prepare($sql);
                $stmt->bind_param("ssiss", $marca, $tipo_vehiculo, $anio, $precio, $file_name);

                if ($stmt->execute()) {
                    echo "Données insérées correctement dans la base de données";
                } else {
                    echo "Erreur lors de l'insertion des données dans la base de données";
                }
                $stmt->close();
            } else {
                echo "erreur de chargement du fichier";
            }
        } else {
            echo "Erreur lors du téléchargement du fichier: " . $_FILES['fichero']['error'];
        }
    } else {
        echo "Aucun fichier sélectionné à télécharger";
    }
}
?>


