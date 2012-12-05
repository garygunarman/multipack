<?php
include ("../../../static/connect_database.php");
include 'PHPExcel.php';

$objPHPExcel = new PHPExcel();

//$objReader = new PHPExcel_Reader_Excel2007(); /*.xlsx*/
$objReader = new PHPExcel_Reader_Excel5();
$objReader->setReadDataOnly(true);
$objPHPExcel = $objReader->load($xls_file);



$rowIterator = $objPHPExcel->getActiveSheet()->getRowIterator();

$array_data = array();
foreach($rowIterator as $row){
    $cellIterator = $row->getCellIterator();
    $cellIterator->setIterateOnlyExistingCells(false); // Loop all cells, even if it is not set
    if(1 == $row->getRowIndex ()) continue;//skip first row
    $rowIndex = $row->getRowIndex ();
    $array_data[$rowIndex] = array('no'=>'','product_category'=>'','type_code'=>'','product_name'=>'','type_name'=>'','color_image'=>'','type_price'=>'','type_description'=>'','type_specification'=>'','type_weight'=>'','size_type'=>'','quantity'=>'','image1'=>'','image2'=>'','image3'=>'','image4'=>'','image5'=>'');
 
    foreach ($cellIterator as $cell) {
        if('A' == $cell->getColumn()){
            $array_data[$rowIndex]["no"] = $cell->getCalculatedValue();
        } else if('B' == $cell->getColumn()){
            $array_data[$rowIndex]["product_category"] = $cell->getCalculatedValue();
        } else if('C' == $cell->getColumn()){
            $array_data[$rowIndex]["type_code"] = $cell->getCalculatedValue();
        } else if('D' == $cell->getColumn()){
            $array_data[$rowIndex]["product_name"] = $cell->getCalculatedValue();
        	} else if('E' == $cell->getColumn()){
	        $array_data[$rowIndex]["type_name"] = $cell->getCalculatedValue();
     	}  else if('F' == $cell->getColumn()){
		    $array_data[$rowIndex]["color_image"] = $cell->getCalculatedValue();
			}  else if('G' == $cell->getColumn()){
			    $array_data[$rowIndex]["type_price"] = $cell->getCalculatedValue();
			
			} else if('H' == $cell->getColumn()){
			    $array_data[$rowIndex]["type_description"] = $cell->getCalculatedValue();
			
			}	else if('I' == $cell->getColumn()){
				    $array_data[$rowIndex]["type_specification"] = $cell->getCalculatedValue();

			}else if('J' == $cell->getColumn()){
			    $array_data[$rowIndex]["type_weight"] = $cell->getCalculatedValue();
			
			} else if('K' == $cell->getColumn()){
			    $array_data[$rowIndex]["size_type"] = $cell->getCalculatedValue();
			
			} else if('L' == $cell->getColumn()){
			    $array_data[$rowIndex]["quantity"] = $cell->getCalculatedValue();
			
			} else if('M' == $cell->getColumn()){
			    $array_data[$rowIndex]["image1"] = $cell->getCalculatedValue();
			
			} else if('N' == $cell->getColumn()){
			    $array_data[$rowIndex]["image2"] = $cell->getCalculatedValue();
			
			} else if('O' == $cell->getColumn()){
			    $array_data[$rowIndex]["image3"] = $cell->getCalculatedValue();
			
			} else if('P' == $cell->getColumn()){
			    $array_data[$rowIndex]["image4"] = $cell->getCalculatedValue();
			} else if('Q' == $cell->getColumn()){
				$array_data[$rowIndex]["image5"] = $cell->getCalculatedValue();
			}
			

    }
}




include("translate.php");
include("insert_multiple.php");



?>
