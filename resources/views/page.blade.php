<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
</head>
<body>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
</div>
<div id="footer">
    <ul id="footer-menu">
        <li class="homeButton"><a href="#">Home</a></li>
        <li>
            <a href="#">Account</a>
            <div class="one_column_layout">
                <div class="col_1">
                    <a class="header_links">Stream</a>
                    <a class="header_links">Messages</a>
                    <a class="listLinks">Inbox</a>
                    <a class="listLinks">Sent</a>
                    <a class="listLinks">Trash</a>
                    <a class="listLinks">Compose</a>
                </div>
            </div>
        </li>
        <li></li>
        <li></li>
    </ul>
</div>

</body>
</html>
