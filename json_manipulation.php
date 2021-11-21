
<?php
$data = '[
  {
    "inventory_id": 9382,
    "name": "Brown Chair",
    "type": "furniture",
    "tags": [
      "chair",
      "furniture",
      "brown"
    ],
    "purchased_at": 1579190471,
    "placement": {
      "room_id": 3,
      "name": "Meeting Room"
    }
  },
  {
    "inventory_id": 9380,
    "name": "Big Desk",
    "type": "furniture",
    "tags": [
      "desk",
      "furniture",
      "brown"
    ],
    "purchased_at": 1579190642,
    "placement": {
      "room_id": 3,
      "name": "Meeting Room"
    }
  },
  {
    "inventory_id": 2932,
    "name": "LG Monitor 50 inch",
    "type": "electronic",
    "tags": [
      "monitor"
    ],
    "purchased_at": 1579017842,
    "placement": {
      "room_id": 3,
      "name": "Lavender"
    }
  },
  {
    "inventory_id": 232,
    "name": "Sharp Pendingin Ruangan 2PK",
    "type": "electronic",
    "tags": [
      "ac"
    ],
    "purchased_at": 1578931442,
    "placement": {
      "room_id": 5,
      "name": "Dhanapala"
    }
  },
  {
    "inventory_id": 9382,
    "name": "Alat Makan",
    "type": "tableware",
    "tags": [
      "spoon",
      "fork",
      "tableware"
    ],
    "purchased_at": 1578672242,
    "placement": {
      "room_id": 10,
      "name": "Rajawali"
    }
  }
]';

// 1.
$datanya = json_decode($data, true);
$obj=(object)$datanya;
foreach ($obj as $d){
    if ($d['placement']['name'] == 'Meeting Room'){
        echo $d['name']; echo ' | '; 
    }
}

echo "<br>";
echo "<br>";

// 2.
$datanya = json_decode($data, true);
$obj=(object)$datanya;
foreach ($obj as $d){
    if ($d['type'] == 'electronic'){
        echo $d['name']; echo ' | ';
    }
}

echo "<br>";
echo "<br>";

// 3.
$datanya = json_decode($data, true);
$obj=(object)$datanya;
foreach ($obj as $d){
    if ($d['type'] == 'furniture'){
        echo $d['name']; echo ' | ';
    }
}

echo "<br>";
echo "<br>";

// 4.
$datanya = json_decode($data, true);
$obj=(object)$datanya;
$ds = '01/16/2020';
foreach ($obj as $d){
    if (date('m/d/Y', $d['purchased_at']) == $ds){
        echo date('m/d/Y', $d['purchased_at']) . ' | ';
    }   
}

echo "<br>";
echo "<br>";

// 5.
$datanya = json_decode($data, true);
$obj=(object)$datanya;
foreach ($obj as $d){
    if (in_array('brown', $d['tags'])){
        echo $d['name']; echo ' | '; 
    }
}

?>

