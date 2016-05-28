<?php
require_once 'db.php';

	class User extends BASE {

		public function __construct() {
			parent::__construct();
		}

		public function create($username, $password) {
			if ($this->get_user_by_username($username)) {
				return false;
			}

			$stmt = $this->conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
			$stmt->execute(array($username, md5($password)));
			return true;
		}

		public function get($username, $password) {
			$hashed_pass = md5($password);

			$stmt = $this->conn->prepare("SELECT * FROM users WHERE (username = ?) AND (password = ?)");
			$stmt->execute(array($username, $hashed_pass));
			return $stmt->fetch();
					
		}

		private function get_user_by_username($username) {
			$stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ?");
			$stmt->execute(array($username));

			return $stmt->fetch();
		}
	}