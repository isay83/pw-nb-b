<?php
// Get POST data
$amount = isset($_POST['amount']) ? $_POST['amount'] : null;
$from = isset($_POST['from']) ? $_POST['from'] : null;
$to = isset($_POST['to']) ? $_POST['to'] : null;

if ($amount === null || $from === null || $to === null) {
    echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Missing required parameters.',
            icon: 'error'
        });
    </script>";
    exit();
}

// Create a cURL handle
$ch = curl_init();

// Set the URL to fetch
$url = 'https://www.xe.com/currencyconverter/convert/?Amount=' . $amount . '&From=' . $from . '&To=' . $to;
curl_setopt($ch, CURLOPT_URL, $url);

// Set the user agent (optional)
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36');

// Set the option to return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the request
$response = curl_exec($ch);

// Check for cURL errors
if ($response === false) {
    echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'cURL Error: " . curl_error($ch) . "',
            icon: 'error'
        });
    </script>";
    curl_close($ch);
    exit();
}

// Close the cURL handle
curl_close($ch);

// Check if the request was successful
if ($response !== false) {
    // Use a regex to extract the amount and currency text
    $pattern = '/<p class="sc-1c293993-1 fxoXHw">([\d,\.]+)<span class="faded-digits">(\d+)<\/span> (Colombian Pesos)<\/p>/';
    if (preg_match($pattern, $response, $matches)) {
        // The amount with faded digits
        $amount = $matches[1] . $matches[2];
        // The currency text
        $currency = $matches[3];

        // Output the extracted values
        echo "<script>
            Swal.fire({
                icon: 'info',
                title: 'Conversion Result',
                html: 'Amount: " . $amount . "<br>Currency: " . $currency . "',
                icon: 'info'
            });
        </script>";
    } else {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'The pattern was not found in the response.',
                icon: 'error'
            });
        </script>";
    }
} else {
    echo "cURL Error: " . curl_error($ch);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.min.css">
    <title>Xe</title>
</head>

<body>


    <script src="xe.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.all.min.js"></script>
</body>

</html>