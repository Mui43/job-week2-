<?php
//ประกาศตัวแปรแบบธรรมดา
    $name = "ปวช.2/3<hr>";
    echo $name;

//ประกาศตัวแปรแบบArray รูปแบบที่ 1 สัญลักษณ์ []
    $department = ["ACC","ME","IT","DMD","TOUR","FOOD","MICE","DBT"];

//ประกาศตัวแปรแบบArray รูปแบบที่ 2 ฟังก์ชัน
    $department1 = array("ACC","ME","IT","DMD","TOUR","FOOD","MICE","DBT");

    echo $department [4]."<br>";
    echo $department [7]."<br>";
    echo "<hr>";

//loop for สามารถกำหนดรอบได้
for($i=0;$i<=7;$i++){
    echo $i." ".$department[$i]."<br>";
}

echo "<hr>";

//loop foreach ไม่สามารถกำหนดรอบได้
foreach($department as $num){
    echo $num."<br>";
}

/* ชนิดของข้อมูล 6 ชนิด
    1.string มีสัญลักษณ์ "" คือ ข้อความ ตัวอักษร 
    2.integer คือ เลขจำนวนเต็ม
    3.float/double คือ ตัวเลขที่เป็นทศนิยม
    4.boolean คือ ค่าทางตรรกศาสตร์ที่ เป็นจริง=1 เท็จ=0
    5.object คือ คุณสมบัติของตัวแปรที่อยู่ในรูปแบบ OOP
    6.array คือ กลุ่มข้อมูลที่มีตัวเเปรเป็นชนิดเดียวกัน
 */

?>