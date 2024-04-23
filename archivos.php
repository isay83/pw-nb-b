<?php
$ruta = "archivos/";

if (isset($_FILES['archivo']) && $_FILES['archivo']['name'] > "") {
    if (!is_dir($ruta) && !is_writable($ruta)) {
        mkdir("archivos", 0777, true);
    }
    move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta . $_FILES['archivo']['name']);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="archivo" accept="">
        <button>Enviar</button>
    </form>

    <?php
    // despliegue de archivos
    if (is_dir($ruta)) {
        $directorio = opendir($ruta);
        $files = [];
        while ($archivo = readdir($directorio)) {
            if ($archivo != "." && $archivo != "..") {
                $files[] = $archivo;
            }
        }
        closedir($directorio);
    ?>
        <div class="container">
            <div class="row">
                <?php
                foreach ($files as $archivo) {
                    $extension = pathinfo($archivo, PATHINFO_EXTENSION);
                    $iconClass = "";
                    switch ($extension) {
                        case "pdf":
                            $iconClass = "bi-file-pdf-fill";
                            break;
                        case "doc":
                        case "docx":
                            $iconClass = "bi-file-word-fill";
                            break;
                        case "xls":
                        case "xlsx":
                            $iconClass = "bi-file-excel-fill";
                            break;
                        case "ppt":
                        case "pptx":
                            $iconClass = "bi-file-powerpoint-fill";
                            break;
                        case "zip":
                        case "rar":
                            $iconClass = "bi-file-zip-fill";
                            break;
                        case "jpg":
                        case "jpeg":
                        case "png":
                        case "gif":
                            $iconClass = "bi-file-image-fill";
                            break;
                        case "mp4":
                        case "avi":
                        case "mov":
                            $iconClass = "bi-file-play-fill";
                            break;
                        default:
                            $iconClass = "bi-file-earmark-fill";
                            break;
                    }
                ?>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi <?php echo $iconClass; ?> me-2"></i>
                            <a href="<?php echo $ruta . $archivo; ?>"><?php echo $archivo; ?></a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    <?php
    }
    ?>
</body>

</html>