<?php
$loggedInUserEmail = Auth::user()->email;
?>

<div class="sidebar" id="sidebar">
    <h2>Admin</h2>
    <ul>
        <li><a href="#"><i class="fas fa-user"></i>{{ $loggedInUserEmail }}</a></li>
        <li><a href="/admin/posts"><i class="fas fa-edit"></i>Posts</a></li>
        <li><a href="/admin/msg"><i class="fas fa-envelope"></i>Messages</a></li>
        <li><a href="/logout"><i class="fas fa-sign-out-alt"></i>Logout</a></li>

    </ul>
</div>

