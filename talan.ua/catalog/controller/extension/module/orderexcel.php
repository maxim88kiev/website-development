<?php

include_once(DIR_SYSTEM . 'library/PHPExcel.php');

class ControllerExtensionModuleOrderExcel extends Controller
{

	private $obj;
	private $setting = array();
	private $alfabet = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
	private $file_type = 'Excel2007';
	private $extension = '.xlsx';
	private $row = 1;
	private $symbol_first = 'A';
	private $symbol_last 	= 'Z';
	//АЛИК
	public function br2nl($string)
	{
		return preg_replace('/\<br(\s*)?\/?\>/i', PHP_EOL, $string);
	}
	//АЛИК
	public function index()
	{

		$data  = array();

		$customer_group_id = $this->config->get('orderexcel_customer_group_id');
		if (isset($customer_group_id) && $customer_group_id != 0 && $customer_group_id != $this->customer->getGroupId()) {
			return false;
		}

		$this->load->language('extension/module/orderexcel');

		if (($this->request->server['REQUEST_METHOD'] == 'GET') && isset($this->request->get['order_id'])) {
			$data['order_data'] = '{"order_id": ' . $this->request->get['order_id'] . '}';
		} else {
			$data['order_data'] = '{"cart": true}';
		}

		$data['button_loading'] = $this->language->get('button_loading');
		$data['text_donwload_excel'] = $this->language->get('text_donwload_excel');

		return $this->load->view('extension/module/orderexcel', $data);
	}

	public function get()
	{

		$this->load->language('extension/module/orderexcel');

		$json = array();

		$this->load->model('setting/setting');
		$result = $this->model_setting_setting->getSetting('orderexcel');

		if (!empty($result)) {

			// Записываем в общее поле
			$this->setting = array(
				'setting' => (isset($result['orderexcel_setting']) ? $result['orderexcel_setting'] : array()),
				'meta' 		=> (isset($result['orderexcel_meta']) ? $result['orderexcel_meta'] : array()),
				'contact' => (isset($result['orderexcel_contact']) ? $result['orderexcel_contact'] : array()),
				'column' 	=> (isset($result['orderexcel_column']) ? $result['orderexcel_column'] : array()),
				'note' 		=> (isset($result['orderexcel_note']) ? $result['orderexcel_note'] : array()),
				'email' 	=> (isset($result['orderexcel_email']) ? $result['orderexcel_email'] : array()),
				'style' 	=> (isset($result['orderexcel_style']) ? $result['orderexcel_style'] : array())
			);

			$this->load->model('extension/module/orderexcel');

			// Один заказ
			if (!empty($this->request->get['order_id'])) {
				$result = $this->getOrder($this->request->get['order_id']);
				$filename = $this->model_extension_module_orderexcel->getFileName((int)$this->request->get['order_id']);
				// Несколько заказов
			} elseif (!empty($this->request->get['orders'])) {
				$result = $this->getOrders($this->request->get['orders']);
				$filename = $this->model_extension_module_orderexcel->getFileName($this->request->get['orders']);
				// Корзина
			} elseif (!empty($this->request->get['cart'])) {
				if ($this->cart->hasProducts() !== 0) {
					$result = $this->getCart();
					$filename = $this->model_extension_module_orderexcel->getFileName('cart');
				} else {
					$json['error'] = $this->language->get('error_cart_empty');
				}
			} else {
				$json['error'] = $this->language->get('error_event');
			}
		}

		if (!$json) {

			$products = $result['products'];
			$totals 	=	$result['totals'];

			// создаем файл с данными
			if (isset($result['customer'])) {
				$customer = $result['customer'];
				$file = $this->createFile($products, $totals, $customer);
			} else {
				$file = $this->createFile($products, $totals);
			}

			// Сохраняем файл
			$file->save(DIR_IMAGE . $filename);

			$json['route'] = HTTP_SERVER . 'image/' . $filename;
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function getOrders($orders)
	{

		$products = array();
		$totals = array();

		$this->load->model('account/order');

		$product_key = 0;
		$total_key = 0;

		// Получаем все заказы
		foreach ($orders as $order_id) {

			// Товары
			foreach ($this->model_account_order->getOrderProducts($order_id) as $product) {
				$products[$product_key] = $this->getProduct($product, $order_id);
				$product_key++;
			}

			// Тоталы
			foreach ($this->model_account_order->getOrderTotals($order_id) as $total) {
				$totals[$total_key] = array(
					'title' => $total['title'],
					'value' => $total['value']
				);
				$total_key++;
			}
		}

		// Объединяем товары
		if ($this->setting['setting']['union']) {
			$products = $this->unionProducts($products);
		}

		// Объединяем товары
		if ($this->setting['setting']['alltotal']) {
			$totals = $this->unionTotals($totals);
		}

		return array(
			'products' 	=> $products,
			'totals'		=> $totals
		);
	}

	public function getOrder($order_id)
	{

		$products = array();
		$totals = array();

		$this->load->model('account/order');

		// Получаем все товары
		foreach ($this->model_account_order->getOrderProducts($order_id) as $key => $product) {
			$products[$key] = $this->getProduct($product, $order_id);
		}

		// Получить все тоталы
		foreach ($this->model_account_order->getOrderTotals($order_id) as $key => $total) {
			$totals[$key] = array(
				'title' => $total['title'],
				'value' => $total['value']
			);
		}

		return array(
			'products' 	=> $products,
			'totals'		=> $totals
		);
	}

	public function getCart()
	{

		$totals = array();
		$products = array();

		$this->load->language('extension/module/orderexcel');

		// Получаем все товары
		foreach ($this->cart->getProducts() as $key => $product) {
			$products[$key] = $this->getProduct($product);
		}

		// Получаем все тоталы
		$totals[] = array(
			'title' => $this->language->get('total_total'),
			'value' => $this->getProductTotal($products)
		);

		return array(
			'products' 	=> $products,
			'totals'		=> $totals
		);
	}

	public function sendEmail($order_id)
	{

		// Запоминаем общую информацию о настройках модуля
		$this->load->model('setting/setting');
		$setting = $this->model_setting_setting->getSetting('orderexcel');
		if (!empty($setting)) {
			$this->setting = array(
				'setting' => (isset($setting['orderexcel_setting']) ? $setting['orderexcel_setting'] : array()),
				'meta' 		=> (isset($setting['orderexcel_meta']) ? $setting['orderexcel_meta'] : array()),
				'contact' => (isset($setting['orderexcel_contact']) ? $setting['orderexcel_contact'] : array()),
				'column' 	=> (isset($setting['orderexcel_column']) ? $setting['orderexcel_column'] : array()),
				'note' 		=> (isset($setting['orderexcel_note']) ? $setting['orderexcel_note'] : array()),
				'email' 	=> (isset($setting['orderexcel_email']) ? $setting['orderexcel_email'] : array()),
				'style' 	=> (isset($setting['orderexcel_style']) ? $setting['orderexcel_style'] : array())
			);
		}

		$result = $this->getOrder($order_id);

		$this->load->model('extension/module/orderexcel');
		$filename = $this->model_extension_module_orderexcel->getFileName($order_id);

		$products = $result['products'];
		$totals 	=	$result['totals'];

		// создаем файл с данными
		if (isset($result['customer'])) {
			$file = $this->createFile($products, $totals, $result['customer']);
		} else {
			$file = $this->createFile($products, $totals);
		}

		// Сохраняем файл
		$file->save(DIR_IMAGE . $filename);

		// Есть кому отправлять
		if (isset($file) && $this->setting['email']['to'] && !empty($this->setting['email']['to'])) {

			$this->load->language('extension/module/orderexcel');
			$subject = sprintf($this->language->get('email_subject'), $order_id);
			$text = $this->language->get('email_text');

			$mail = new Mail();
			$mail->protocol = $this->config->get('config_mail_protocol');
			$mail->parameter = $this->config->get('config_mail_parameter');
			$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
			$mail->smtp_username = $this->config->get('config_mail_smtp_username');
			$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
			$mail->smtp_port = $this->config->get('config_mail_smtp_port');
			$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

			$lang_data = $this->config->get('config_langdata');
			$language_id = (int)$this->config->get('config_language_id');

			$mail->setTo($this->setting['email']['to']);
			$mail->setFrom($this->config->get('config_email'));
			$mail->setSender(html_entity_decode($lang_data[$language_id]['name'], ENT_QUOTES, 'UTF-8'));
			$mail->setSubject(html_entity_decode($subject, ENT_QUOTES, 'UTF-8'));
			$mail->setHtml($text);

			$mail->addAttachment(DIR_IMAGE . $filename);

			$mail->send();
		}

		return true;
	}

	private function createFile($products, $totals = array(), $customer = array())
	{

		// Создаем Объект
		$this->obj = new PHPExcel();

		// Пробиваем какой символ первый, какой последний
		$this->setSymbols();

		// Устанавливаем мета-данные
		$this->setTableProperties();

		// Устанавливаем контактные данные
		$this->setTableContact();

		// Устанавливаем заголовки
		$this->setTableHeader();

		// Записываем товары
		foreach ($products as $product) {
			$this->setTableProduct($product);
		}

		// Записываем тоталы
		foreach ($totals as $total) {
			$this->setTableTotal($total);
		}

		$this->setTableNote();

		// Отдаем сформированный файл
		return PHPExcel_IOFactory::createWriter($this->obj, $this->file_type);
	}

	private function getProduct($product, $order_id = 0)
	{

		$result = array();

		$setting = $this->setting['setting'];

		$this->load->model('account/order');
		$this->load->model('catalog/product');

		$product_info = $this->model_catalog_product->getProduct($product['product_id']);

		if (empty($product_info)) {
			return false;
		}

		$result['product_id'] 	= $product_info['product_id'];
		$result['order_id'] 		= $order_id;
		$result['name'] 				= $product_info['name'];
		$result['model'] 				= $product_info['model'];
		$result['sku']					= $product_info['sku'];
		$result['tag']					= $product_info['tag'];
		$result['weight']				= $product_info['weight'];
		$result['description'] 	= strip_tags(html_entity_decode(trim($this->br2nl($product_info['description'])), ENT_QUOTES, 'UTF-8'));
		// $result['description'] 	= html_entity_decode($this->br2nl($product_info['description']), ENT_QUOTES, 'UTF-8');
		$result['image'] 				= $product_info['image'];
		$result['quantity'] 		= $product['quantity'];
		$result['price'] 				= $product['price'];
		$result['total'] 				= $product['total'];
		$result['attributes']		= array();

		// Attributes
		$attributes = $this->model_catalog_product->getProductAttributes($product['product_id']);
		foreach ($attributes as $group) {
			foreach ($group['attribute'] as $attribute) {
				$attribute_id = $attribute['attribute_id'];
				$result['attributes'][$attribute_id] = $attribute['text'];
			}
		}

		// Для корзины
		if (!empty($product['option']) && $setting['option']) {
			foreach ($product['option'] as $key1 => $option) {
				$result['name'] .= "\n" . $option['name'] . ": " . $option['value'];
			}
			// Для заказа
		} elseif ($order_id !== 0 && $setting['option']) {
			$options = $this->model_account_order->getOrderOptions($order_id, $product['order_product_id']);
			if (!empty($options)) {
				foreach ($options as $key1 => $option) {
					$result['name'] .= "\n" . $option['name'] . ": " . $option['value'];
				}
			}
		}

		return $result;
	}

	private function unionProducts($products)
	{

		$result = array(); // Итоговый массив
		$cache = array(); // Кэш имен

		foreach ($products as $key => $product) {

			$search = array_search($product['name'], $cache);

			// Элемент ранее повторялся
			if ($search !== false) {

				// Дописываем количество
				$result[$search]['quantity'] += $product['quantity'];
				$result[$search]['total'] += $product['total'];

				// Элемент не повторялся
			} else {

				$result[$key] = $product;
				$cache[$key] = $product['name'];
			}
		}

		return $result;
	}

	private function unionTotals($totals)
	{

		$result = array(); // Итоговый массив
		$cache = array(); // Кэш имен

		foreach ($totals as $key => $total) {

			$search = array_search($total['title'], $cache);

			// Элемент ранее повторялся
			if ($search !== false) {

				// Дописываем сумму
				$result[$search]['value'] += $total['value'];

				// Элемент не повторялся
			} else {

				$result[$key] = $total;
				$cache[$key] = $total['title'];
			}
		}

		return $result;
	}

	private function getProductTotal($products)
	{
		$result = 0;
		foreach ($products as $product) {
			$result += $product['total'];
		}
		return $result;
	}

	// Мета-данные
	private function setTableProperties()
	{

		if (!empty($setting['meta']['author'])) {
			$this->obj->getProperties()->setCreator($this->setting['meta']['author']);
		}

		if (!empty($setting['meta']['title'])) {
			$this->obj->getProperties()->setTitle($this->setting['meta']['title']);
		}

		if (!empty($setting['meta']['sheet'])) {
			$this->obj->getProperties()->setSubject($this->setting['meta']['sheet']);
		}
	}

	// Контактные данные
	private function setTableContact()
	{

		if (!$this->setting['setting']['contact']) {
			return false;
		}

		$row = $this->row;

		$contact 		= $this->setting['contact'];
		$style 			= $this->setting['style']['contact'];
		$cell_first = $this->symbol_first . $row;
		$cell_last 	= $this->symbol_last . $row;

		if ($contact['logo']['status']) {

			$this->setTableContactCell(
				$contact['logo']['cell_start'] . $row,
				$contact['logo']['cell_finish'] . $row
			);

			$this->setTableCellImage(
				$contact['logo']['cell_start'] . $row,

				"topline.png",

				$contact['logo']['width'],
				$style['height']
			);
		}

		if ($contact['telephone']['status']) {
			$this->setTableContactCell(
				$contact['telephone']['cell_start'] . $row,
				$contact['telephone']['cell_finish'] . $row,
				$this->config->get('config_telephone')
			);
		}

		if ($contact['market_name']['status']) {
			$this->setTableContactCell(
				$contact['market_name']['cell_start'] . $row,
				$contact['market_name']['cell_finish'] . $row,
				$this->config->get('config_name')
			);
		}

		if ($contact['email']['status']) {
			$this->setTableContactCell(
				$contact['email']['cell_start'] . $row,
				$contact['email']['cell_finish'] . $row,
				$this->config->get('config_email')
			);
		}

		if ($contact['address']['status']) {
			$this->setTableContactCell(
				$contact['address']['cell_start'] . $row,
				$contact['address']['cell_finish'] . $row,
				$this->config->get('config_address')
			);
		}

		if ($contact['work']['status']) {
			$this->setTableContactCell(
				$contact['work']['cell_start'] . $row,
				$contact['work']['cell_finish'] . $row,
				$this->config->get('config_work')
			);
		}

		// Высота строки
		$this->setTableCellHeight($row, $style['height']);

		// Оформление
		$this->obj->getActiveSheet()->getStyle($cell_first . ':' . $cell_last)->applyFromArray($this->getStyleArray($style));

		// Строка заполнена
		$this->row++;
	}

	// Шапка таблицы
	private function setTableHeader()
	{

		if (!$this->setting['setting']['header']) {
			return false;
		}

		$this->load->language('extension/module/orderexcel');

		$row = $this->row;

		$columns = $this->setting['column'];
		$style = $this->setting['style']['header'];
		$cell_first = $this->symbol_first . $row;
		$cell_last 	= $this->symbol_last . $row;

		foreach ($columns as $key => $column) {
			$this->setTableHeaderColumn($column['column'] . $row, html_entity_decode($column['title']), (int)$column['width']);
		}

		// Высота строки
		$this->setTableCellHeight($row, $style['height']);

		// Оформление
		$this->obj->getActiveSheet()->getStyle($cell_first . ':' . $cell_last)->applyFromArray($this->getStyleArray($style));

		// Строка заполнена
		$this->row++;
	}


	// Строка товара
	private function setTableProduct($product)
	{

		$row = $this->row;

		$columns = $this->setting['column'];
		$style = $this->setting['style']['cell'];

		$cell_first = $this->symbol_first . $row;
		$cell_last 	= $this->symbol_last . $row;

		// Высота строки
		$this->setTableCellHeight($row, $style['height']);

		// Оформление
		$this->obj->getActiveSheet()->getStyle($cell_first . ':' . $cell_last)->applyFromArray($this->getStyleArray($style));

		foreach ($columns as $key => $column) {

			if ($column['name'] === 'order_id' && !empty($product['order_id'])) {
				$this->setTableCellText($column['column'] . $row, $product['order_id'], $column['keyword']);
			}

			if ($column['name'] === 'product_id' && !empty($product['product_id'])) {
				$this->setTableCellText($column['column'] . $row, $product['product_id'], $column['keyword']);
			}

			if ($column['name'] === 'link' && !empty($product['product_id'])) {
				$url = $this->url->link('product/product', 'product_id=' . $product['product_id'], true);
				$this->setTableCellText($column['column'] . $row, $this->language->get('text_link'), $column['keyword']);
				$this->obj->getActiveSheet()->getCell($column['column'] . $row)->getHyperlink()->setUrl(html_entity_decode($url));
			}

			if ($column['name'] === 'name' && !empty($product['name'])) {
				$this->setTableCellText($column['column'] . $row, $product['name'], $column['keyword'], true);
			}

			if ($column['name'] === 'tag' && !empty($product['tag'])) {
				$this->setTableCellText($column['column'] . $row, $product['tag'], $column['keyword']);
			}

			if ($column['name'] === 'weight' && !empty($product['weight'])) {
				$this->setTableCellText($column['column'] . $row, $product['weight'], $column['keyword']);
			}

			if ($column['name'] === 'description' && !empty($product['description'])) {
				$this->setTableCellText($column['column'] . $row, $product['description'], $column['keyword'], true);
			}

			if ($column['name'] === 'image' && !empty($product['image'])) {
				$this->setTableCellImage($column['column'] . $row, $product['image'], $column['width'], $style['height']);
			}

			if ($column['name'] === 'model' && !empty($product['model'])) {
				$this->setTableCellText($column['column'] . $row, $product['model'], $column['keyword']);
			}

			if ($column['name'] === 'sku' && !empty($product['sku'])) {
				$this->setTableCellText($column['column'] . $row, $product['sku'], $column['keyword']);
			}

			if ($column['name'] === 'quantity' && !empty($product['quantity'])) {
				$this->setTableCellText($column['column'] . $row, $product['quantity'], $column['keyword']);
			}

			if ($column['name'] === 'price' && !empty($product['price'])) {
				$this->setTableCellText($column['column'] . $row, $product['price'], $column['keyword']);
			}

			if ($column['name'] === 'total' && !empty($product['total'])) {
				$this->setTableCellText($column['column'] . $row, $product['total'], $column['keyword']);
			}

			if (is_numeric($column['name']) && !empty($product['attributes'][$column['name']])) {
				$this->setTableCellText($column['column'] . $row, $product['attributes'][$column['name']], $column['keyword'], true);
			}
		}

		// Строка заполнена
		$this->row++;
	}

	// Итоги
	private function setTableTotal($total)
	{

		if (!$this->setting['setting']['alltotal']) {
			return false;
		}

		$row = $this->row;

		$columns = $this->setting['column'];
		$style = $this->setting['style']['cell'];

		$cell_first = $this->symbol_first . $row;
		$cell_last 	= $this->symbol_last . $row;

		// Найти колонку с total
		foreach ($columns as $key => $column) {
			if ($column['name'] === 'total') {
				$code = array_search($column['column'], $this->alfabet);
			}
		}

		if (!isset($code)) return false;

		$cell_title = $this->alfabet[$code - 1];
		$cell_value = $this->alfabet[$code];

		if (!empty($total['title']) && !empty($total['value'])) {
			$this->obj->getActiveSheet()->setCellValue($cell_title . $row, $total['title']);
			$this->obj->getActiveSheet()->setCellValue($cell_value . $row, $total['value']);
		}

		// Оформление
		$this->obj->getActiveSheet()->getStyle($cell_first . ':' . $cell_last)->applyFromArray($this->getStyleArray($style));

		// Строка заполнена
		$this->row++;
	}

	// Прим.
	private function setTableNote()
	{

		if (!$this->setting['setting']['note'] || empty($this->setting['note'])) {
			return false;
		}

		$note = $this->setting['note'];

		$row = $this->row;

		$style = $this->setting['style']['cell'];

		$cell_first = $this->symbol_first . $row;
		$cell_last 	= $this->symbol_last . $row;

		// Объединяем ячейки
		$this->obj->getActiveSheet()->mergeCells($cell_first . ":" . $cell_last);

		// Вносим данные
		$this->obj->getActiveSheet()->setCellValue($cell_first, html_entity_decode($note));
		$this->obj->getActiveSheet()->getStyle($cell_first)->getAlignment()->setWrapText(true);

		// Оформление
		$this->obj->getActiveSheet()->getStyle($cell_first . ':' . $cell_last)->applyFromArray($this->getStyleArray($style));

		// Подгоняем высоту
		if (empty($style['height'])) {
			$style['height'] = 15;
		}
		$height = count(explode("\n", $note)) * (int)$style['height'];
		$this->obj->getActiveSheet()->getRowDimension($row)->setRowHeight($height);

		$this->row++;
	}

	// Установка заголовка
	private function setTableHeaderColumn($cell, $value, $width = 10)
	{

		// Если значение по-умалчанию не установлено, то
		if ($width === 0) {
			$width = 10;
		}

		// Вписываем имя
		$this->obj->getActiveSheet()->setCellValue($cell, $value);

		// Устанавливаем ширину
		$this->obj->getActiveSheet()->getColumnDimension($cell[0])->setWidth($width);
	}

	// Текстовая  информация
	private function setTableCellText($cell, $value, $keywords = '', $wrap = false)
	{

		$this->obj->getActiveSheet()->setCellValue($cell, html_entity_decode($value));
		if ($wrap) {
			$this->obj->getActiveSheet()->getStyle($cell)->getAlignment()->setWrapText(true);
		}

		if (!empty($keywords)) {
			foreach (explode(", ", $keywords) as $keyword) {
				if (mb_strtolower($keyword) === mb_strtolower($value)) {

					$color = !empty($this->setting['style']['cell']['fill_keyword']) ? substr($this->setting['style']['cell']['fill_keyword'], 1) : 'CCCCCC';

					$bg = array(
						'fill' => array(
							'type' => 'solid',
							'color' => array('rgb' => $color)
						)
					);

					$this->obj->getActiveSheet()->getStyle($cell)->applyFromArray($bg);

					break;
				}
			}
		}
	}

	private function setTableContactCell($cell_start, $cell_finish, $value = '', $height = 0)
	{

		// Объединяем
		if ($cell_start !== $cell_finish && isset($cell_finish[0]) && $cell_finish[0] != '0' && $cell_finish[0] != '1') {
			$this->obj->getActiveSheet()->mergeCells($cell_start . ":" . $cell_finish);
		}

		// Записываем значение
		if (!empty($value)) {
			$this->obj->getActiveSheet()->setCellValue($cell_start, html_entity_decode($value));
		}
	}

	// Изображение
	private function setTableCellImage($cell, $value, $width = 10, $height = 50)
	{

		if (empty($width)) {
			$width = 10;
		}

		if (empty($height)) {
			$height = 50;
		}

		$image = $this->getImage($value, $width * 7, $height * 1.3);

		if ($image !== false && is_file($image)) {
			$objDrawing = new PHPExcel_Worksheet_Drawing();
			$objDrawing->setPath($image); // width, height переводим в PX
			$objDrawing->setOffsetX(3);
			$objDrawing->setOffsetY(3);
			$objDrawing->setCoordinates($cell);
			$objDrawing->setWidth($width * 0.95);
			$objDrawing->setHeight($height * 1.3 * 0.95);

			$objDrawing->setWorksheet($this->obj->getActiveSheet());

			unset($objDrawing);
		}
	}

	private function setTableCellHeight($row, $height)
	{

		// Если значение пустое
		if (empty($height)) {
			$height = 50;
		}

		$this->obj->getActiveSheet()->getRowDimension($row)->setRowHeight((int)$height);
	}

	private function getStyleArray($style)
	{
		return array(
			'fill' => array(
				'type' 	=> 	!empty($style['fill']) ? 'solid' : 'none',
				'color'	=>	array('rgb' => !empty($style['fill']) ? substr($style['fill'], 1) : 'FFFFFF')
			),
			'alignment' => array(
				'horizontal' 	=> !empty($style['horizontal']) ? $style['horizontal'] 	: 'general',
				'vertical' 		=> !empty($style['vertical']) 	? $style['vertical'] 		: 'center'
			),
			'font'  => array(
				'bold'  	=> $style['bold'] == '1' ? true : false,
				'italic'  => $style['italic'] == '1' ? true : false,
				'color' 	=> array('rgb' => !empty($style['color']) ? substr($style['color'], 1)  : '000000'),
				'size'  	=> !empty($style['size']) ? $style['size']  : '11',
				'name'  	=> !empty($style['family']) ? $style['family']  : 'Arial'
			)
		);
	}

	private function getImage($image, $width = 50, $height = 50)
	{

		$this->load->model('tool/image');
		$result = $this->model_tool_image->resize($image, (int)$width, (int)$height);

		// Составляем путь до него
		if ($result) {
			return DIR_IMAGE . 'cache/' . utf8_substr($image, 0, utf8_strrpos($image, '.')) . '-' . (int)$width . 'x' . (int)$height . '.' . pathinfo($image, PATHINFO_EXTENSION);
		}

		return false;
	}

	private function getFileType($extension)
	{

		switch ($extension) {
			case 'excel':
				return 'Excel2007';
			case 'csv':
				return 'CSV';
			case 'pdf':
				return 'PDF';
			default:
				return 'Excel2007';
		}
	}

	private function getFileExtension($type)
	{

		switch ($type) {
			case 'excel':
				return '.xlsx';
			case 'csv':
				return '.csv';
			case 'pdf':
				return '.pdf';
			default:
				return '.xlsx';
		}
	}

	private function setSymbols()
	{

		$index_first = count($this->alfabet) - 1;
		$index_last = 0;

		foreach ($this->setting['column'] as $column) {

			$index = array_search($column['column'], $this->alfabet);

			if ($index !== false && $index <= $index_first) {
				$index_first = $index;
			}

			if ($index !== false && $index >= $index_last) {
				$index_last = $index;
			}
		}

		$this->symbol_first = $this->alfabet[$index_first];
		$this->symbol_last 	= $this->alfabet[$index_last];
	}
}
