<?php

namespace Bridge\App\Repository;


if (!defined('ABSPATH'))
	exit;

use Bridge\Database\Repository\Repository;

class SiteRepository extends Repository { 

	public function all($per_page = 10 ) {
		$query = self::buildQuery($args);
		if ( ! empty( $query->get_results() ) ) {
			return new UserCollection($user_query->get_results());
		}
	}

	public function get($args = []) {
		$query = self::buildQuery($args);
		if ( ! empty( $query->get_results() ) ) {
			return new UserCollection($user_query->get_results());
		}
	}

	public function find($name) {
		if(is_numeric($name)) {

		}
		$args = [
		];
		$query = self::buildQuery($args);
		if ( ! empty( $query->get_results() ) ) {
			return new User($user_query->get_results());
		}
	}

	static public function buildQuery($args = []) {
		return new \WP_User_Query($args);
	}
}

