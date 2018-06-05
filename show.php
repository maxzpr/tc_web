<pre>
    <?php 
        include 'Database.php';
        $studentData = get_student();
        //print_r($studentData);
    ?>
</pre>

<details>
    <summary>
        +เพิ่ม
    </summary>
    <?php include 'add.php'; ?>
</details>

<?php 

session_start();

if(isset($_SESSION['message'])){ // ถ้ามีข้อความ
    echo "({$_SESSION['message']})"; //แสดงข้อความ
    unset($_SESSION['message']); //ลบข้อความนั้นจากระบบ
}

?>
<br><br>

<table border="1">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Grade</th>
    </tr>
    <?php for($i=0;$i<count($studentData);$i++){ ?>
    <tr>
        <td>
            <?php echo $studentData[$i]['student_id']; ?>
        </td>
        <td>
            <?php echo $studentData[$i]['firstname']; ?>
        </td>
        <td>
            <?php echo $studentData[$i]['lastname']; ?>
        </td>
        <td>
            <?php echo $studentData[$i]['grade']; ?>
        </td>
    </tr>
    <?php } ?>
</table>
