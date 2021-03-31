<?php
class ModelExtensionModuleTopStickers extends Model {
	public function addTopSticker($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "topstickers SET topsticker_id = '" . (int)$this->db->escape($data['topsticker_id']) . "', name = '" . $this->db->escape($data['name']) . "', text = '" . $this->db->escape(json_encode($data['text'])) . "', bg_color = '" . $this->db->escape($data['bg_color']) . "', status = '" . (int)$data['status'] . "'");
		return $this->db->getLastId();
	}
	
	public function editTopSticker($topsticker_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "topstickers SET name = '" . $this->db->escape(json_encode($data['name'])) . "', bg_color = '" . $this->db->escape($data['bg_color']) . "', status = '" . (int)$data['status'] . "' WHERE id = '" . (int)$topsticker_id . "'");
	}
	
	public function deleteTopSticker($topsticker_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "topstickers WHERE id = '" . (int)$topsticker_id . "'");
	}
	
	public function truncateTopStickers() {
		$this->db->query("TRUNCATE TABLE " . DB_PREFIX . "topstickers");
	}
	
	public function getTopSticker($topsticker_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "topstickers WHERE id = '" . (int)$topsticker_id . "'");
		return $query->row;
	}
	
	public function getTopStickersProduct($product_id) {
		$query = $this->db->query("SELECT topsticker_id FROM " . DB_PREFIX . "topstickers_product WHERE product_id = '" . (int)$product_id . "'");
		return $query->rows;
	}
	
	public function getTopStickers($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "topstickers";
		$sort_data = array(
			'name',
			'status'
		);
		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY topsticker_id";
		}
		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}
		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}
			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}
			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}
		$query = $this->db->query($sql);
		return $query->rows;
	}
	
	public function getTotalTopStickers() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "topstickers");
		return $query->row['total'];
	}
}