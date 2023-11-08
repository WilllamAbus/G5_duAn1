<?php
if(isset($_COOKIE['user_admin'])){
    $admin = $_COOKIE['user_admin'];
}
?>
<div class="content-wrapper">
    <h3>Tên đăng nhập: <?=$admin?></h3>
</div>
