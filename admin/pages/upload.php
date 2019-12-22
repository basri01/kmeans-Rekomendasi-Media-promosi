 <?php    
if(isset($_POST['SubmitButton'])){ //check if form was submitted

$target_dir = 'uploads/';
$target_file = $target_dir . basename($_FILES["filepath"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

require_once dirname(__FILE__) . '/Includes/Classes/PHPExcel/IOFactory.php';

$inputFileType = PHPExcel_IOFactory::identify($target_file);

$objReader = PHPExcel_IOFactory::createReader($inputFileType);
$objPHPExcel = $objReader->load($target_file);

$i=2;
$val=array();
$count=0;
for($i=2;$i<34;$i++)
{
$val[$count++]=$objPHPExcel->getActiveSheet()->getCell('C'.$i)->getValue();
}
//echo'<pre>';print_r($val);
}    
?>
