<?php
require_once('Application.class.php');

function printDrivingTable($tableName)
{
	global $application;

	$sqlQuery = "
		SELECT information_schema.tables.table_comment, 
			information_schema.columns.column_name, 
			information_schema.columns.data_type, 
			information_schema.columns.column_comment, 
			information_schema.columns.is_nullable, 
			information_schema.table_constraints.constraint_type, 
			information_schema.key_column_usage.referenced_table_name, 
			information_schema.key_column_usage.referenced_column_name 
		FROM information_schema.tables 
			INNER JOIN information_schema.columns ON information_schema.tables.table_name = information_schema.columns.table_name 
			LEFT JOIN information_schema.key_column_usage ON information_schema.key_column_usage.table_name = information_schema.tables.table_name AND information_schema.key_column_usage.column_name = information_schema.columns.column_name 
			LEFT JOIN information_schema.table_constraints ON information_schema.table_constraints.constraint_name = information_schema.key_column_usage.constraint_name AND information_schema.table_constraints.table_name = information_schema.tables.table_name 
		WHERE information_schema.tables.table_name = ?";
	$query = $application->database->prepare($sqlQuery);
	$query->execute(array($tableName));

	foreach($query as $row)
		$columns[$row['column_name']] = $row;

	$firstColumn = current($columns);

	/*
	row_state:
	1 = Unchanged
	2 = Added
	3 = Deleted
	4 = Modified
	*/

	echo '<form id="driving-table" method="POST" action="php/saveDrivingTable.php">';
	echo '	<table>';
	echo '		<caption>'.$firstColumn['table_comment'].'</caption>';
	echo '		<thead>';
	echo '			<tr>';
	echo '				<th id="col_row_state">Row state</th>';

	foreach($columns as $column)
		echo '<th id="col_'.$column['column_name'].'">'.$column['column_comment'].'</th>';

	echo '			</tr>';
	echo '			<tr id="new-row">';
	echo '				<td headers="col_row_state"><input type="number" id="row_state" name="row_state" value="2" required disabled></td>';

	foreach($columns as $column)
	{
		echo '<td headers="col_'.$column['column_name'].'">';
		generateField($column);
		echo '</td>';
	}

	echo '				</tr>';
	echo '			</thead>';
	echo '			<tbody>';

	foreach($application->database->query("SELECT * FROM $tableName") as $row)
	{
		echo '				<tr>';
		echo '					<td headers="col_row_state"><input type="number" id="row_state1" name="row_state1" value="1" required disabled></td>';

		foreach($columns as $column)
		{
			echo '<td headers="col_'.$column['column_name'].'">';
			generateField($column, $row[$column['column_name']]);
			echo '</td>';
		}

		echo '				</tr>';
	}

	echo '			</tbody>';
	echo '	</table>';
	echo '	<button type="submit">Enregistrer</button>';
	echo '	<button type="reset">Annuler</button>';
	echo '</form>';
}

function generateField($column, $value = null)
{
	$type = getInputType($column);
	$required = ($column['column_name'] != 'ID' && $column['is_nullable'] == 'NO') ? ' required' : '';

	switch($type)
	{
		case 'select':
			echo '<select id="'.$column['column_name'].'" name="'.$column['column_name'].'">';
			echo '	<option value="0"></option>';

			$table = $column['referenced_table_name'];

			global $application;

			$query = $application->database->query("SELECT column_name FROM information_schema.columns WHERE table_name = '$table' AND ordinal_position = 2");
			$data = $query->fetch();
			$column = $data['column_name'];

			foreach($application->database->query("SELECT ID, $column FROM $table WHERE inactif = FALSE") as $row)
				echo '	<option value="'.$row['ID'].'">'.$row[$column].'</option>';

			echo '</select>';
			break;

		case 'checkbox':
			if(is_null($value) || $value == 0)
				echo '	<input type="checkbox" id="'.$column['column_name'].'" name="'.$column['column_name'].'">';
			else
				echo '	<input type="checkbox" id="'.$column['column_name'].'" name="'.$column['column_name'].'" checked>';
			break;

		default:
			if(is_null($value))
				$valueAttribute = '';
			else
				$valueAttribute = " value=\"$value\"";

			echo '	<input type="'.$type.'" id="'.$column['column_name'].'" name="'.$column['column_name'].'"'.$valueAttribute.$required.'>';
	}
}

function getInputType($column)
{
	if($column['constraint_type'] == 'FOREIGN KEY')
		return 'select';

	if($column['data_type'] == 'tinyint')
		return 'checkbox';

	switch($column['data_type'])
	{
		case 'tinyint':
		case 'smallint':
		case 'mediumint':
		case 'int':
		case 'bigint':
		case 'float':
		case 'double':
		case 'decimal':
		case 'numeric':
			$type = 'number';
			break;

		default:
			$type = 'text';
	}

	return $type;
}
?>
