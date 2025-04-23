<?php
$student_id = 12345;
$name = "张三";
$surname = "三";

if ($student_id > 0) {
    echo "您当前的学号是 $student_id，用户名是 $name, 密码是 $surname.";
} else {
    echo "抱歉，您的学号不存在。可能是因为数据库设置不正确或用户已登录，请检查数据并重试。";
}
?>
