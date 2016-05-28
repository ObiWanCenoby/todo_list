<?php
require_once 'db.php';

class Demand_Management extends Base {
	private $table_name='list'; // таблица, что необходимо сделать.
	private $post_per_page = 10; // кол-во постов на странице.

	public function __construct() {
			parent::__construct();
		}

	public function get_all($page) {
			$stmt = $this->conn->prepare("SELECT * FROM $this->table_name ORDER BY id DESC LIMIT :offset, :lim ");
			$stmt->bindValue(':offset', $this->post_per_page * (intval($page) - 1), PDO::PARAM_INT);
			$stmt->bindValue(':lim', $this->post_per_page, PDO::PARAM_INT);
			$stmt->execute();	

			return $stmt->fetchAll();
		}

	public function get_one($id) {
			$stmt = $this->conn->prepare("SELECT * FROM $this->table_name WHERE id = ?");
			$stmt->execute(array($id));

			return $stmt->fetchAll();
		}

	public function set_exp($mode,$id) {
			$stmt = $this->conn->prepare("UPDATE $this->table_name SET mode=? WHERE id=?");
			$stmt->execute(array($mode,$id));

		}

	public function create($text) {
			$stmt = $this->conn->prepare("INSERT INTO $this->table_name (mode, text) VALUES (?, ?)");
			$stmt->execute(array(0, $text));
		}

	public function delete($id) {
			$stmt = $this->conn->prepare("DELETE FROM $this->table_name WHERE id = ?");
			$stmt->execute(array($id));
		}

	public function update($id, $text) {
			$stmt = $this->conn->prepare("UPDATE $this->table_name SET text = ? WHERE id =?");
			$stmt->execute(array($text, $id));
		}
	public function page_count() {
			$post_count = $this->count();
			return ceil($post_count / $this->post_per_page);
		}

	private function count() {
		$stmt = $this->conn->query("SELECT COUNT(id) FROM $this->table_name");
		return $post_count = $stmt->fetchColumn();
		
	}

}