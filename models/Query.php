<?php
require_once "Conexion.php";
class Query extends Conexion{
    public function get( $tables, $columns = array(), $conditions = array() ) {
        $query = 'SELECT ';
        foreach ($columns as $column){
            if ( end( $columns ) == $column ){
                $query .= $column;
            }else{
                $query .= $column.', ';
            }
        }
        $query .= " FROM $tables";
        if ( !empty( $conditions ) ){
            $query .= " WHERE ";
            foreach ($conditions as $condition){
                if ( end( $conditions ) == $condition ){
                    $query .= $condition;
                }else{
                    $query .= $condition.' AND ';
                }
            }
        }
        $query .= ';';
        //return $query;
        $this->query = $query;
        $this->get_query();
		$data = array();
		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
		}
		return $data;
    }
    
}
?>