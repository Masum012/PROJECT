 <?php
 	session_start();
if(!isset($_SESSION['id']))
{
	header("Location:../ALL/login.php");
	die();
}

$file_name=$_POST['download'];


// make sure it's a file before doing anything!
if(is_file($file_name)) {

    /*
        Do any processing you'd like here:
        1.  Increment a counter
        2.  Do something with the DB
        3.  Check user permissions
        4.  Anything you want!
    */

    // required for IE
    if(ini_get('zlib.output_compression')) { ini_set('zlib.output_compression', 'Off'); }

    // get the file mime type using the file extension
    switch(strtolower(substr(strrchr($file_name, '.'), 1))) {
        case 'pdf': $mime = 'application/pdf'; break;
        case 'zip': $mime = 'application/zip'; break;
        case 'jpeg':
        case 'jpg': $mime = 'image/jpg'; break;
        default: $mime = 'application/force-download';
    }
    header('Pragma: public');   // required
    header('Expires: 0');       // no cache
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Last-Modified: '.gmdate ('D, d M Y H:i:s', filemtime ($file_name)).' GMT');
    header('Cache-Control: private',false);
    header('Content-Type: '.$mime);
    header('Content-Disposition: attachment; filename="'.basename($file_name).'"');
    header('Content-Transfer-Encoding: binary');
    header('Content-Length: '.filesize($file_name));    // provide file size
    header('Connection: close');
    readfile($file_name);       // push it out
    exit();

}
// required for IE, otherwise Content-disposition is ignored
/*if(ini_get('zlib.output_compression'))
  ini_set('zlib.output_compression', 'Off');

// addition by Jorg Weske
$file_extension = strtolower(substr(strrchr($filename,"."),1));

if( $filename == "" ) 
{
  echo "<html><title>eLouai's Download Script</title><body>ERROR: download file NOT SPECIFIED. USE force-download.php?file=filepath</body></html>";
  exit;
} elseif ( ! file_exists( $filename ) ) 
{
  echo "<html><title>eLouai's Download Script</title><body>ERROR: File not found. USE force-download.php?file=filepath</body></html>";
  exit;
};
switch( $file_extension )
{
  case "pdf": $ctype="application/pdf"; break;
  case "exe": $ctype="application/octet-stream"; break;
  case "zip": $ctype="application/zip"; break;
  case "doc": $ctype="application/msword"; break;
  case "xls": $ctype="application/vnd.ms-excel"; break;
  case "ppt": $ctype="application/vnd.ms-powerpoint"; break;
  case "gif": $ctype="image/gif"; break;
  case "png": $ctype="image/png"; break;
  case "jpeg": $ctype="image/jpeg"; break;
  case "jpg": $ctype="image/jpg"; break;
  default: $ctype="application/force-download";
}
header("Pragma: public"); // required
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private",false); // required for certain browsers 
header("Content-Type: $ctype");
// change, added quotes to allow spaces in filenames, by Rajkumar Singh
header("Content-Disposition: attachment; filename=\"".basename($filename)."\";" );
header("Content-Transfer-Encoding: binary");
header("Content-Length: ".filesize($filename));
readfile("$filename");
exit(); */

?>
