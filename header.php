<?php

?>
<div class="header-container">
    <a href="home.php" class="header-logo">
        <i class="fa-solid fa-address-book"></i>
        <p>Contacts</p>
    </a>
    <div class="header-add">
    <i class="fa-solid fa-plus"></i>
        <p>Create contact</p>
    </div>
       
    <div class="header-search-box">
        <input type="text" name="search" id="header-search" placeholder="search contacts">
        <div id="header-search-btn">
            <button id="header-btn1">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <button id="header-btn2">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
            
        </div>

    <div class="header-list-container">
       <table id="tbl1">

       </table>
    </div>

    </div>
        <div class="header-setting-container">
        <div class="header-setting-btn">
            <i class="fa-solid fa-gear"></i>
        </div>
        <div class="header-help-btn">
            <i class="fa-solid fa-question"></i>
        </div>
        <div class="header-logout-btn">
        <a href="logout.php"><i title="Log out" class="fa-solid fa-right-from-bracket"></i></a>
        </div>
    </div>

</div>

