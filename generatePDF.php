<?php
require_once('../dompdf/autoload.inc.php');
include_once "../config/dbconnect.php";
use Dompdf\Dompdf;

extract($_POST);

if(isset($submit)){

    $html = ''; // Initialize the HTML variable
    
    $html .= '   
            <h2 align="center">Parcels Report CCSA</h2>
            <table style="width:100%; border-collapse:collapse;">
            
            <tr>
                <th style="border:1px solid #ddd; padding:8px; text-align:left;">P.N.</th>
                <th style="border:1px solid #ddd; padding:8px; text-align:left;">Tracking Number</th>
                <th style="border:1px solid #ddd; padding:8px; text-align:left;">Contact</th>
                <th style="border:1px solid #ddd; padding:8px; text-align:left;">Receive Date</th>
                <th style="border:1px solid #ddd; padding:8px; text-align:left;">Status</th>
                <th style="border:1px solid #ddd; padding:8px; text-align:left;">Recipient Name</th>
                <th style="border:1px solid #ddd; padding:8px; text-align:left;">Collection Date</th>
            </tr>
            ';

    $sql="SELECT * from parcel ORDER BY receiveDate DESC";
    $result=$conn-> query($sql);
    
    if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
            $html .= '
                <tr>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">' . $row["parcelNumber"] . '</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">' . $row["trackNum"] . '</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">' . $row["phoneNum"] . '</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">' . $row["receiveDate"] . '</td>';
            if($row["parcelStatus"]==0){
                $html .= '<td style="border:1px solid #ddd; padding:8px; text-align:left;">Pending</td>';
            } else {
                $html .= '<td style="border:1px solid #ddd; padding:8px; text-align:left;">Collected</td>';
            }
            $html .= '
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">' . $row["recipientName"] . '</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">' . $row["collectionDate"] . '</td>
                    </tr>'; // Close the row
        }
    }

    $html .= '</table>'; // Close the table
    
    $dompdf = new DOMPDF(); 
    $dompdf->loadHtml($html);
    $dompdf->setPaper("A4", "portrait"); 
    $dompdf->render();
    $dompdf->stream("data.pdf");
    $pdf_content = $dompdf->output();
}





// $dompdf = new Dompdf;

// $html = '<h1 style="color: green">Example</h1>';

 
/**
 * Set the Dompdf options
 */
// $options = new Options;
// $options->setChroot(__DIR__);
// $options->setIsRemoteEnabled(true);

// $dompdf = new Dompdf($options);

/**
 * Set the paper size and orientation
 */
// $dompdf->setPaper("A4", "potrait");

/**
 * Load the HTML and replace placeholders with values from the form
 */
// $html = file_get_contents('view.php');

// $dompdf->loadHtml($html);
//$dompdf->loadHtmlFile("template.html");

/**
 * Create the PDF and set attributes
 */
// $dompdf->render();

// $dompdf->addInfo("Title", "An Example PDF"); // "add_info" in earlier versions of Dompdf

/**
 * Send the PDF to the browser
 */
// $dompdf->stream("invoice.pdf", ["Attachment" => 0]);

/**
 * Save the PDF file locally
 */
// $output = $dompdf->output();
// file_put_contents("file.pdf", $output);







// $dompdf = new Dompdf();

// $html = '<h1 style="color: blue;">Hello this is from DC </h1>';

// $dompdf->loadHtml($html);

// $dompdf->setPaper ('A4', 'Inandscape');

// $dompdf->render();

// $dompdf->stream("new file", array('Attachment' =>0));

// $pdf = $dompdf->output(); file_put_contents("newfilegen.pdf", $pdf);
?>