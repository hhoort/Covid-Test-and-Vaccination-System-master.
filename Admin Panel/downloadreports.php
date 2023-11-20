<?php
// store folder
$dir = '../Reports/Testreport/';

if (isset($_GET['Report'])) {
    $file = basename($_GET['Report']);
    $allowedExtensions = ['pdf', 'docx', 'xls'];
    $fileExtension = pathinfo($file, PATHINFO_EXTENSION);

    if (in_array($fileExtension, $allowedExtensions)) {
        $filePath = $dir . $file;

        if (file_exists($filePath)) {
            header('Content-Description: File Transfer');

            // Set 'Content-Type' based on file type
            if ($fileExtension == 'pdf') {
                header('Content-Type: application/pdf');
            } elseif ($fileExtension == 'docx') {
                header('Content-Type: application/msword');
            } elseif ($fileExtension == 'xls') {
                header('Content-Type: application/vnd.ms-excel');
            }

            header('Content-Disposition: attachment; filename="' . $file);
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