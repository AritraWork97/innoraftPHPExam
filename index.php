<?php

$total_marks = 0;

$data = array("1" => [
        "name" => "Kunal Singh",
        "class" => "12",
        "marks" => [
            "Hindi" => "100",
            "English" => "100",
            "Maths" => "100",
     ],
    ], "2" => [
        "name" => "Aman Singh",
        "class" => "11",
        "marks" => [
            "Hindi" => "45",
            "English" => "55",
            "Maths" => "75",
     ],
    ], "3" => [
        "name" => "Ama Singh",
        "class" => "10",
        "marks" => [
            "Hindi" => "42",
            "English" => "82",
            "Maths" => "72",
     ],
    ]);
    $total_marks_1 = 0;
    $marks = array();
    foreach($data as $key => $value)
    {
        if(is_array($key) == false)
        {
            $marks[$key] = $value;
            continue;
        }
        if(is_array($value) == true)
        {
            foreach($value as $sub => $marks)
            {
                $total_marks_1 = $total_marks_1 + $marks;
            }
            $marks[$total_marks] = $total_marks_1;
        }
    }
    
    function compareByName($a, $b) {
        return strcmp($a["class"], $b["class"]);
      }
      
    usort($marks, 'cmp');

    echo "<table border='2' class='stats' cellspacing='0'>
                  <tr>
                   <th>Id</th>
                   <th>Name</th>
                   <th>Class</th>
                   <th>Marks</th>
                  </tr>";
        echo "</tr>";
        foreach ($marks as $key => $value){
                echo "<tr>";
                echo "<td>" . $key . "</td>";
                echo "<td>" . $value['name'] . "</td>";
                echo "<td>" . $value['class'] . "</td>";
                foreach($value['marks'] as $sub=>$val)
                {
                    $total_marks_1 = $total_marks_1 + $val;
                }
                echo "<td>" . $total_marks_1 . "</td>";
                $total_marks_1 = 0;
                echo "</tr>";
            }

?>