
<DOCTYPE html>



<!-- for work variable type file-->
<form method="POST" enctype="multipart/form-data">
<!-- حقل اجباري من نوع file-->
    <input type="file" name="img" required/>
<!-- submit button-->
    <button type="submit" name="upload" >csubmit</button>
    
</form>

<?php
//if upload submitted select that
if(isset($_POST['upload'])){
echo $name = $_FILES['img']['name'];
//مسار الملف المرسل
echo $name = $_FILES['img']['tmp_name'];
//حفظ الصور داخل ملف في ايطار العمل
move_uploaded_file($_FILES['img']['tmp_name'],'files/'.$_FILES['img']['name']);
}
?>
</html>