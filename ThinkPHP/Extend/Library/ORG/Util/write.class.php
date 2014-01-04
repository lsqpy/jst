<?php
class Excel{
/**   
* Header of excel document (prepended to the rows)   
*    
* Copied from the excel xml-specs.   
*    
* @access private   
* @var string   
*/   
var $header=	"<?xml version=\"1.0\" encoding=\"UTF-8\"?\>\n\t<Workbook xmlns=\"urn:schemas-microsoft-com:office:spreadsheet\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\"  xmlns:ss=\"urn:schemas-microsoft-com:office:spreadsheet\"  xmlns:html=\"http://www.w3.org/TR/REC-html40\">";
/**   
* Footer of excel document (appended to the rows)   
*    
* Copied from the excel xml-specs.   
*    
* @access private   
* @var string   
*/   
var $footer = "</Workbook>";    

/**   
* Document lines (rows in an array)   
*    
* @access private   
* @var array   
*/   
	var $lines = array ();    

/**   
* Worksheet title   
*   
* Contains the title of a single worksheet   
*   
* @access private    
* @var string   
*/   
	var $worksheet_title = "Table1";    
/**   
* Add a single row to the $document string   
*    
* @access private   
* @param array 1-dimensional array   
* @todo Row-creation should be done by $this->addArray   
*/   
	function addRow ($array){
	   
		// initialize all cells for this row    
		$cells = ""; 
		// foreach key -> write value into cells    
		foreach ($array as $k => $v): 
		// 加个字符串与数字的判断 避免生成的 excel 出现数字以字符串存储的警告  
        $v = $this->th($v);  
   
	    //$v = preg_replace ("/[\\\|:|\/|\?|\*|\[|\]|<|>]/", "", $v);
        if(is_numeric($v)) {    
			// 防止首字母为 0 时生成 excel 后 0 丢失    
			if(substr($v, 0, 1) == 0 || strlen($v)>15) { 
			    
				$cells .= "<Cell><Data ss:Type=\"String\">" . $v . "</Data></Cell>\n";    
			} else {    
				$cells .= "<Cell><Data ss:Type=\"Number\">" . $v . "</Data></Cell>\n";    
			}    
		} else {    
				$cells .= "<Cell><Data ss:Type=\"String\">" . $v . "</Data></Cell>\n";    
		}  
		endforeach;    
		// transform $cells content into one row 
		$this->lines[] = "<Row>\n" . $cells . "</Row>\n"; 
	}
    function th($string)
    {
        $string = preg_replace ("/[\\\|:|\/|\?|\*|\[|\]|<|>]/", "", $string);
        return $string;
    }
/**   
* Add an array to the document   
*    
* This should be the only method needed to generate an excel   
* document.   
*    
* @access public   
* @param array 2-dimensional array   
* @todo Can be transfered to __construct() later on   
*/   
	function addArray ($array){
		// run through the array and add them into rows    
        
		foreach ($array as $k => $v):    
		$this->addRow ($v);    
		endforeach;
	}
/**   
* Set the worksheet title   
*    
* Checks the string for not allowed characters (:\/?*),   
* cuts it to maximum 31 characters and set the title. Damn   
* why are not-allowed chars nowhere to be found? Windows   
* help's no help…   
*   
* @access public   
* @param string $title Designed title   
*/   
	function setWorksheetTitle ($title) {
	// strip out special chars first 
		$title = preg_replace ("/[\\\|:|\/|\?|\*|\[|\]]/", "", $title);
		// now cut it to the allowed length    
		$title = substr ($title, 0, 31);    
	
	// set title    
		$this->worksheet_title = $title;  
}
/**   
* Generate the excel file   
*    
* Finally generates the excel file and uses the header() function   
* to deliver it to the browser.   
*    
* @access public   
* @param string $filename Name of excel file to generate (…xls)   
*/   
	function generateXML ($filename){
		// deliver header (as recommended in php manual)    
		header("Content-Type: application/vnd.ms-excel; charset=UTF-8");    
		header("Content-Disposition: inline; filename=\"" . $filename . ".xls\"");
			// print out document to the browser    
			// need to use stripslashes for the damn ">"    
		echo stripslashes ($this->header);    
		echo "\n<Worksheet ss:Name=\"" . $this->worksheet_title . "\">\n<Table>\n";    
		echo "<Column ss:Index=\"1\" ss:AutoFitWidth=\"0\" ss:Width=\"100\"/>\n";    
        echo "<Column ss:Index=\"2\" ss:AutoFitWidth=\"0\" ss:Width=\"200\"/>\n";
        echo "<Column ss:Index=\"3\" ss:AutoFitWidth=\"0\" ss:Width=\"400\"/>\n";
        echo "<Column ss:Index=\"4\" ss:AutoFitWidth=\"0\" ss:Width=\"100\"/>\n";  
        echo "<Column ss:Index=\"5\" ss:AutoFitWidth=\"0\" ss:Width=\"100\"/>\n";  
        echo "<Column ss:Index=\"6\" ss:AutoFitWidth=\"0\" ss:Width=\"200\"/>\n";
        echo "<Column ss:Index=\"7\" ss:AutoFitWidth=\"0\" ss:Width=\"100\"/>\n";  
        echo "<Column ss:Index=\"8\" ss:AutoFitWidth=\"0\" ss:Width=\"200\"/>\n"; 
        echo "<Column ss:Index=\"9\" ss:AutoFitWidth=\"0\" ss:Width=\"100\"/>\n";    
        echo "<Column ss:Index=\"10\" ss:AutoFitWidth=\"0\" ss:Width=\"200\"/>\n"; 
        echo "<Column ss:Index=\"11\" ss:AutoFitWidth=\"0\" ss:Width=\"400\"/>\n"; 
        echo "<Column ss:Index=\"12\" ss:AutoFitWidth=\"0\" ss:Width=\"200\"/>\n"; 
		echo implode ("\n", $this->lines);    
		echo "</Table>\n</Worksheet>\n";    
		echo $this->footer;
	}
}  
//	require_once('excel.php');   

?>