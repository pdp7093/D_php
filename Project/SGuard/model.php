<?php
class model
{
	public $conn = "";
	function __construct()
	{
		$this->conn = new mysqli('127.0.0.1', 'root', '', 'security_hiring');
		if ($this->conn->connect_error) {
			die("Connection failed: " . $this->conn->connect_error);
		}

	}
	//select function
	function select($tbl)
	{

		$sel = "select * from $tbl";   // query
		$run = $this->conn->query($sel);  // run 
		while ($fetch = $run->fetch_object()) {

			$arr[] = $fetch;
		}
		return $arr;

	}

	//insert function
	function insert($tbl, $arr)
	{


		$col_arr = array_keys($arr);
		$col = implode(",", $col_arr);

		$value_arr = array_values($arr);
		$value = implode("','", $value_arr);

		$ins = "insert into $tbl ($col) values ('$value')";
		$run = $this->conn->query($ins);
		return $run;
	}

	//Delete function

	function delete_where($tbl, $arr)
	{
		$column_arr = array_keys($arr);
		$values_arr = array_values($arr);

		$del = "delete from $tbl where 1=1";  // 1=1 means query contnue
		$i = 0;
		foreach ($arr as $w) {
			echo $del .= " and $column_arr[$i]='$values_arr[$i]'";
			$i++;
		}
		$run = $this->conn->query($del);  // query run on db
		return $run;
	}

	function select_where($tbl, $arr)
	{
		$column_arr = array_keys($arr);
		$values_arr = array_values($arr);

		$sel = "select * from $tbl where 1=1";  // 1=1 means query contnue
		$i = 0;
		foreach ($arr as $w) {
			$sel .= " and $column_arr[$i]='$values_arr[$i]'";
			$i++;
		}
		$run = $this->conn->query($sel);  // query run on db
		return $run;
	}
	function update($tbl, $arr, $where)
	{
		$column_arr = array_keys($arr);
		$values_arr = array_values($arr);

		$upt = "update $tbl set ";  // 1=1 means query contnue
		$i = 0;
		$count = count($arr);
		foreach ($arr as $w) {
			if ($count == $i + 1) {
				$upt .= " $column_arr[$i]='$values_arr[$i]'";
				$i++;
			} else {
				$upt .= " $column_arr[$i]='$values_arr[$i]',";
				$i++;
			}

		}
		$wcolumn_arr = array_keys($where);
		$wvalues_arr = array_values($where);

		$upt .= " where 1=1";  // 1=1 means query contnue
		$j = 0;
		foreach ($where as $w) {
			$upt .= " and $wcolumn_arr[$j]='$wvalues_arr[$j]'";
			$j++;
		}

		$run = $this->conn->query($upt);  // query run on db
		return $run;
	}


	//join function
	function join($tbl1, $tbl2, $on)
	{
		$sel = "select * from $tbl1 join $tbl2 on $on";   // query
		$run = $this->conn->query($sel);  // run 
		while ($fetch = $run->fetch_object()) {

			$arr[] = $fetch;
		}
		return $arr;

	}

	function joins($tbl1, $tbl2, $tbl3, $on1, $on2, $con, $where)
	{
		$sel = "select * from $tbl1 join $tbl2 on $on1 join $tbl3 on $on2 where $con=$where";   // query
		$run = $this->conn->query($sel);  // run 
		while ($fetch = $run->fetch_object()) {

			$arr[] = $fetch;
		}
		return $arr;


	}

	function simple_joins($tbl1, $tbl2, $on1, $tbl3, $on2)
	{
		$sel = "select * from $tbl1 join $tbl2 on $on1 join $tbl3 on $on2 ";   // query
		$run = $this->conn->query($sel);  // run 
		while ($fetch = $run->fetch_object()) {

			$arr[] = $fetch;
		}
		return $arr;


	}

	function join_where($tbl1, $tbl2, $on, $con, $where)
	{
		$sel = "select * from $tbl1 join $tbl2 on $on where $con=$where";   // query
		$sel;
		$run = $this->conn->query($sel);  // run 
		while ($fetch = $run->fetch_array()) {

			$arr[] = $fetch;
		}
		return $arr;
	}
}

$obj = new model;
?>