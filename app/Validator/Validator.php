<?php 

	class Validator {

		public function validateData($data){
			$fieldA = $data['fieldA'];
			$fieldB = $data['fieldB'];
			
			if ($fieldA > $fieldB) {
				return true;
			} else {
				return false;
			}
		
		}

		
	}


	$Validator = new Validator();
