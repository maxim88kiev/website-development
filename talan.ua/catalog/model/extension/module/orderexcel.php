<?php

class ModelExtensionModuleOrderExcel extends Model {

  public function getFileName($data, $extension = '.xlsx'){

    // Filename
		$result = "";

		// Если это заказ
		if (is_numeric($data)) {
			$result .= 'order_'.$data;

		// Если это массив с заказами	
		} elseif (is_array($data)){
			if (count($data) > 1) {
				$result .= "order_".array_pop($data)."_".array_shift($data); 
			} else {
				$result .= "order_".array_pop($data);
			}

		// Корзина
		} elseif (is_string($data) && $data === 'cart') {
			$result .= "cart_".date("d-m-Y_H-i-s"); 
		}

    return 'catalog/orderexcel/'.$result.$extension;

  }

}