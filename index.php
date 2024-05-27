<html>

<head>
    <title>PHP Starter</title>
</head>

<body>




    <?php 
 
    function number() {
        $Level=""; //ตัวแปรที่ใช้เก็บผลลัพธ์
        $number = array("2","6","88","99","22","1","76","3"); //ตัวแปรที่ใช้เก็บข้อมูล array ในเเต่ละ Level
        $levels = array("1","2","4","8"); //ตัวแปรที่ใช้เก็บข้อมูล array ของจำนวนในเเต่ละ Level
        $num = 0; //ตัวแปรเก็บค่าตำแหน่งในอาร์เรย์ $number
        $sum = 0; //ตัวแปรเก็บผลรวมการคูณที่ได้ในเเต่ละ Level
       
        
        for($i=0 ; $i< count($levels) ; $i++){ //ลูปตามจำนวนข้อมูล array ของ $levels 
        $Level .= "Level " . ($i + 1) . " : "; //ตัวแปรเก็บผลลัพธ์
        $level_values = array(); //ตัวแปร array ในเเต่ละ Level
        $sumLevel=1; //ตัวแปรเก็บผลคูณเเต่ละ Level
        
        for($e=0 ; $e< $levels[$i] ; $e++){ //ลูปตามจำนวนข้อมูลใน array ของ $levels ตามตำเเหน่งใน array 
            if($num < count($number)){ //ตั้งเงื่อนไขเพื่อดึงค่า $number และนำมาเก็บใน $level_values 
                $level_values[] = $number[$num]; //เก็บค่าในอาร์เรย์ $number ไว้ใน $level_values
                $sumLevel *= $number[$num]; //คำนวณผลคูณของค่าทั้งหมดในแต่ละ Level
                $num++;
            }
        }
        sort($level_values); // เรียงลำดับข้อมูลจากน้อยไปมากในเเต่ละ Level
        $Level .= implode(",", $level_values); //รวมข้อมูล array เเละคั่นด้วย , ในเเต่ละ Level
        $Level .= " ผลคูณ: " . $sumLevel; //เก็บผลคูณในเเต่ละ Level
        $Level .= "<br>"; //ขึ้นบรรทัดใหม่
        $sum += $sumLevel;  //คำนวณผลบวกของค่าคูณทั้งหมดในเเต่ละ Level
    }
    if($sum%2 == 0){ //ตั้งเงื่อนไขเลขคู่เลขคี่
        $a= "even"; //เลขคู่
    }else{
        $a= "odd"; //เลขคี่
    }
    //เเสดงผลลัพธ์
    echo $Level;
    echo "Sum = $sum is $a";
    
}
//เรียกใช้ฟังก์ชัน
number();
?>
</body>

</html>