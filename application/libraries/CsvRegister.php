<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CsvRegister {

    public function getCsvData($csv){

        $handle = fopen($csv, "r");
        
        //VALORES DA PRIMEIRA LINHA DA TABELA (CHAVES)
        $header = explode(",",fgets($handle));
		
		$row = array();
		
		while ($data = fgetcsv($handle,1000, ",")) {
			$data_row = $data;

			
		
			//DEFINE UM ARRAY COM CHAVE (VALORES DO ARRAY $HEADER) E VALOR (VALORES DAS LINHAS ARMAZENADAS EM $DATA_ROW)
			for ($i=0; $i < count($header); $i++) { 
				$index = trim(strtolower($header[$i]));

				// echo var_dump($data_row[$i])."<br>";

				if ($data_row[$i] !== "") {
					$row_index[$index] = $data_row[$i];
				}else{
					unset($row_index[$index]);
				}
			}

			array_push($row, $row_index);	
		}

		fclose($handle);	

		return $row;
	}
	
	public function setJson($data){
		$path = getcwd()."/public/data/";
		$file = fopen($path."andamento.json", "w");

		$json = json_encode($data);

		fwrite($file,$json);

		fclose($file);
	}

	public function getRow($csv ,$filter = "", $filter_value = ""){
		$data = $this->getCsvData($csv);

		if($filter !== ""){
			foreach ($data as $value) {
				if(isset($value[$filter])){
					$array_filter_value = explode(" ",$filter_value);
					$array_value = explode(" ",$value[$filter]);

					$result = array_diff_assoc($array_filter_value,$array_value);

					if(count($result) < count($array_filter_value)){
						return $value;
					}
				}
			}
		}
	}

}