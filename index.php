<?php
$students= array (
    array(
        'name' => 'Мафусаил',
    ),
    array(
        'name' => 'Прокопий',
    ),
    array(
        'name' => 'Феоктист',
    ),
);

foreach ($students as $student) {
    foreach ($student as $data=>$value) {
        echo '<div> Студент '.$value;
        for($i=0; $i < 3; $i++){
            if (empty($marks)) {
                $marks=array();
            };
            $marks[$i]= rand(1, 5);
            $srb = round((array_sum($marks)/sizeof($marks)),2);
        };
        echo ' имеет '.sizeof($marks).' оценки: '.implode(', ',$marks).'; средний балл- '.$srb.';    </div>';
    };
};