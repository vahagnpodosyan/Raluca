<?php

# @Author Vahagn Podosyan

$order = array('Name','Color','Element','Likes');
$array = array(
    array(
        'Name' => 'Trixie',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers'
        ),
    array(
        'Name' => 'Tinkerbell',
        'Element' => 'Air',
        'Likes' => 'Singning',
        'Color' => 'Blue'
        ), 
    array(
        'Element' => 'Water',
        'Likes' => 'Dancing',
        'Name' => 'Blum',
        'Color' => 'Pink'
        ),
);

// Here's  function, that will sort and show up with our custom order (in the task i see that the order must be like this - Name,Color,Elements,Likes, So you can change it antime :P )
function sortme_and_show($a,$o){
	$res = array();
	// Let's start the looping (count($array)))
	foreach($a as $b){
			echo '<tr>';
			//Let's loop again pls , to get the value with key from the order)
			for($i=0;$i<count($b);$i++){
				$style = $o[$i]=='Color'?'style="background:	'.$b[$o[$i]].'"':''; // Change the color of TD
					echo '<td '.$style.'>'.$b[$o[$i]].'</td>';
				
			}
			echo '</tr>';
	}
}




####################
# Start of drawing #
####################


// Construct table's header with the custom order 
$thead = '';
foreach($order as $o){
	$thead .= '<td><h4>'.$o.'</h4></td>';
}

echo '<table style="width:500px;" border="1" cellspacing="0" cellpadding="5"><thead><tr>'.$thead.'</tr></thead><tbody>';

$array = sortme_and_show($array,$order);

?>
