<?php
$json = '[
    { "route": "1", "orig_tc": "竹園邨", "dest_tc": "尖沙咀碼頭"},
    { "route": "1", "orig_tc": "尖沙咀碼頭", "dest_tc": "竹園邨",}
    ]';
    $data = json_decode($json, true);

    echo "<br><br><b>JSON to PHP multidimensinal array:</b>";
    echo '<table border="1"><tr><th>ROUTE</th><th>Orig_tc</th><th>Dest_tc></th></tr>';
    foreach ($data as $item) {
        echo "<tr><td>" . $item['route'] . "</td><td>" . $item['orig_tc'] . "</td><td>" . $item['dest_tc'] . "</td></tr>";

    }
    echo "</table>";

    ?>