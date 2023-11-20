<?php
$dir = 'Reports/Testreport/';

// print_r ($_GET);
// die();
if (isset($_GET['Report'])) {
    $file = basename($_GET['Report']);
    $allowedExtensions = ['pdf'];
    $fileExtension = pathinfo($file, PATHINFO_EXTENSION);

    if (in_array($fileExtension, $allowedExtensions)) {
        $filePath = $dir . $file;

        if (file_exists($filePath)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . $file . 'Reports/Testreport/covidTestReport.pdf');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($filePath));

            // Output the file
            readfile($filePath);
            exit;
        } else {
            echo "File not found.";
        }
    } else {
        echo "File type not allowed.";
    }
} else {
    echo "Invalid request.";
}
?>