<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class AdminController extends AppController {
	public function beforeFilter() {
		if ($this->request->action != "login") {
			if (!$this->Session->read("is_logged")) {
				$this->redirect("/admin/login");
			}
		}
	}

	public function index() {
		$this->loadModel("Mark");
		// $this->loadModel("Singer");
		// $all_singers= $this->Singer->find("all");
		// $amount = count($all_singers);

		// $results = array();
		// for ($i=0; $i < $amount; $i++) { 
		// 	$votes = $this->Vote->findAllBySingerId($i+1);
		// 	$this_singer = $this->Singer->findBySingerId($i+1);
		// 	$results[$i]["name"] = $this_singer["Singer"]["name"];
		// 	$results[$i]["amount"] = count($votes);
		// }
		// $votes_amount = count($this->Vote->find("all"));

		$all_marks = $this->Mark->find("all", array('order' => array('singer_id' => 'asc')));

		// var_dump(isset($all_marks[0]["Mark"]["m1"]));
		$marks0 = array(); // singe
		$marks1 = array();	// multiple
		foreach ($all_marks as $key => $mark) {
			if ($mark["Mark"]["type"] == 0) {
				$marks0[$mark["Mark"]["singer_id"]]["singer_id"] = $mark["Mark"]["singer_id"];
				if (!isset($marks0[$mark["Mark"]["singer_id"]]["m1"])) $marks0[$mark["Mark"]["singer_id"]]["m1"] = $mark["Mark"]["m1"];
				else $marks0[$mark["Mark"]["singer_id"]]["m1"] = $marks0[$mark["Mark"]["singer_id"]]["m1"] ."+". $mark["Mark"]["m1"];

				if (!isset($marks0[$mark["Mark"]["singer_id"]]["m2"])) $marks0[$mark["Mark"]["singer_id"]]["m2"] = $mark["Mark"]["m2"];
				else $marks0[$mark["Mark"]["singer_id"]]["m2"] = $marks0[$mark["Mark"]["singer_id"]]["m2"] ."+". $mark["Mark"]["m2"];

				if (!isset($marks0[$mark["Mark"]["singer_id"]]["m3"])) $marks0[$mark["Mark"]["singer_id"]]["m3"] = $mark["Mark"]["m3"];
				else $marks0[$mark["Mark"]["singer_id"]]["m3"] = $marks0[$mark["Mark"]["singer_id"]]["m3"] ."+". $mark["Mark"]["m3"];

				if (!isset($marks0[$mark["Mark"]["singer_id"]]["m4"])) $marks0[$mark["Mark"]["singer_id"]]["m4"] = $mark["Mark"]["m4"];
				else $marks0[$mark["Mark"]["singer_id"]]["m4"] = $marks0[$mark["Mark"]["singer_id"]]["m4"] ."+". $mark["Mark"]["m4"];
				
				if (!isset($marks0[$mark["Mark"]["singer_id"]]["m5"])) $marks0[$mark["Mark"]["singer_id"]]["m5"] = $mark["Mark"]["m5"];
				else $marks0[$mark["Mark"]["singer_id"]]["m5"] = $marks0[$mark["Mark"]["singer_id"]]["m5"] ."+". $mark["Mark"]["m5"];

				if (!isset($marks0[$mark["Mark"]["singer_id"]]["overall"])) $marks0[$mark["Mark"]["singer_id"]]["overall"] = $mark["Mark"]["overall"];
				else $marks0[$mark["Mark"]["singer_id"]]["overall"] += $mark["Mark"]["overall"];

				// seperated score
				if (!isset($marks0[$mark["Mark"]["singer_id"]]["m1_total"])) $marks0[$mark["Mark"]["singer_id"]]["m1_total"] = $mark["Mark"]["m1"];
				else $marks0[$mark["Mark"]["singer_id"]]["m1_total"] = $marks0[$mark["Mark"]["singer_id"]]["m1_total"] + $mark["Mark"]["m1"];

				if (!isset($marks0[$mark["Mark"]["singer_id"]]["m2_total"])) $marks0[$mark["Mark"]["singer_id"]]["m2_total"] = $mark["Mark"]["m2"];
				else $marks0[$mark["Mark"]["singer_id"]]["m2_total"] = $marks0[$mark["Mark"]["singer_id"]]["m2_total"] + $mark["Mark"]["m2"];

				if (!isset($marks0[$mark["Mark"]["singer_id"]]["m3_total"])) $marks0[$mark["Mark"]["singer_id"]]["m3_total"] = $mark["Mark"]["m3"];
				else $marks0[$mark["Mark"]["singer_id"]]["m3_total"] = $marks0[$mark["Mark"]["singer_id"]]["m3_total"] + $mark["Mark"]["m3"];

				if (!isset($marks0[$mark["Mark"]["singer_id"]]["m4_total"])) $marks0[$mark["Mark"]["singer_id"]]["m4_total"] = $mark["Mark"]["m4"];
				else $marks0[$mark["Mark"]["singer_id"]]["m4_total"] = $marks0[$mark["Mark"]["singer_id"]]["m4_total"] + $mark["Mark"]["m4"];
				
				if (!isset($marks0[$mark["Mark"]["singer_id"]]["m5_total"])) $marks0[$mark["Mark"]["singer_id"]]["m5_total"] = $mark["Mark"]["m5"];
				else $marks0[$mark["Mark"]["singer_id"]]["m5_total"] = $marks0[$mark["Mark"]["singer_id"]]["m5_total"] + $mark["Mark"]["m5"];
			}
			else {
				$marks1[$mark["Mark"]["singer_id"]]["singer_id"] = $mark["Mark"]["singer_id"];
				if (!isset($marks1[$mark["Mark"]["singer_id"]]["m1"])) $marks1[$mark["Mark"]["singer_id"]]["m1"] = $mark["Mark"]["m1"];
				else $marks1[$mark["Mark"]["singer_id"]]["m1"] = $marks1[$mark["Mark"]["singer_id"]]["m1"] ."+". $mark["Mark"]["m1"];

				if (!isset($marks1[$mark["Mark"]["singer_id"]]["m2"])) $marks1[$mark["Mark"]["singer_id"]]["m2"] = $mark["Mark"]["m2"];
				else $marks1[$mark["Mark"]["singer_id"]]["m2"] = $marks1[$mark["Mark"]["singer_id"]]["m2"] ."+". $mark["Mark"]["m2"];

				if (!isset($marks1[$mark["Mark"]["singer_id"]]["m3"])) $marks1[$mark["Mark"]["singer_id"]]["m3"] = $mark["Mark"]["m3"];
				else $marks1[$mark["Mark"]["singer_id"]]["m3"] = $marks1[$mark["Mark"]["singer_id"]]["m3"] ."+". $mark["Mark"]["m3"];

				if (!isset($marks1[$mark["Mark"]["singer_id"]]["m4"])) $marks1[$mark["Mark"]["singer_id"]]["m4"] = $mark["Mark"]["m4"];
				else $marks1[$mark["Mark"]["singer_id"]]["m4"] = $marks1[$mark["Mark"]["singer_id"]]["m4"] ."+". $mark["Mark"]["m4"];

				if (!isset($marks0[$mark["Mark"]["singer_id"]]["m5"])) $marks0[$mark["Mark"]["singer_id"]]["m5"] = $mark["Mark"]["m5"];
				else $marks0[$mark["Mark"]["singer_id"]]["m5"] = $marks0[$mark["Mark"]["singer_id"]]["m5"] ."+". $mark["Mark"]["m5"];

				if (!isset($marks1[$mark["Mark"]["singer_id"]]["overall"])) $marks1[$mark["Mark"]["singer_id"]]["overall"] = $mark["Mark"]["overall"];
				else $marks1[$mark["Mark"]["singer_id"]]["overall"] += $mark["Mark"]["overall"];
			}

		}

		function cmp($a, $b)
		{	
			if ($a["overall"] == $b["overall"]) {
		        return 0;
		    }
		    return ($a["overall"]> $b["overall"]) ? -1 : 1;
		}
		function cmp_m1($a, $b)
		{	
			if ($a["m1_total"] == $b["m1_total"]) {
		        return 0;
		    }
		    return ($a["m1_total"]> $b["m1_total"]) ? -1 : 1;
		}
		function cmp_m3($a, $b)
		{	
			if ($a["m3_total"] == $b["m3_total"]) {
		        return 0;
		    }
		    return ($a["m3_total"]> $b["m3_total"]) ? -1 : 1;
		}
		function cmp_m4($a, $b)
		{	
			if ($a["m4_total"] == $b["m4_total"]) {
		        return 0;
		    }
		    return ($a["m4_total"]> $b["m4_total"]) ? -1 : 1;
		}

		

		usort($marks0, "cmp");
		usort($marks1, "cmp");
		// echo "<pre>";
		// var_dump($marks);

		// $results = array();
		// foreach ($marks as $key => $mark) {
		// 	$results[$mark["overall"]][$mark["singer_id"]] = $mark;
		// }
		// echo "<pre>";
		// var_dump($results);

		$this->loadModel("User");
		$users_amount = count($this->User->find("all"));

		$this->set("marks0",$marks0);
		$this->set("marks1",$marks1);

		//best use of eng
		usort($marks0, "cmp_m1");
		$this->set("marks_m1",$marks0);

		//most creativie
		usort($marks0, "cmp_m3");
		$this->set("marks_m3",$marks0);

		//most popular
		usort($marks0, "cmp_m4");
		$this->set("marks_m4",$marks0);
		
		$this->set("users_amount",$users_amount);
	}

	public function login() {
		if ($this->request->is('post')) {

			$username = $this->request->data("Admin.login");
			$password = $this->request->data("Admin.password");
			$user = $this->Admin->findByUsernameAndPassword($username,md5($password));

			
			if (count($user) > 0) {
				$this->Session->write("is_logged", true);
				$this->redirect("/admin");
			}
			else {
				$this->Session->setFlash(__('Login Failed.'), 'default', array ('class' => 'alert-box alert'));
				$this->redirect("/admin/login");
			}
		}
	}

	public function logout() {
		$this->Session->write("is_logged", false);
		$this->redirect("/admin");
	}





}
