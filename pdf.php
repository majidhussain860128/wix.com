<?php
require(fpdf/fpdf.php);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Create a new PDF instance
    $pdf = new fpdf();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);

    // Add content to the PDF
    $pdf->Cell(0, 10, 'User Details', 0, 1, 'C');
    $pdf->Ln(10);

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, 'Name: ' . $name, 0, 1);
    $pdf->Cell(0, 10, 'Email: ' . $email, 0, 1);
    $pdf->MultiCell(0, 10, 'Message: ' . $message);

    // Output the PDF
    $pdf->Output('I', 'UserDetails.pdf'); // Inline display
}
?>
