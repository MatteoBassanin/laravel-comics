<header>
    <div class="header_wrapper d_flex space_between w_80_auto">
        <div class="logo_wrapper">
            <img class="logo" src="/img/dc-logo.png" alt="">
        </div>

        <nav class="navbar d_flex">
            <ul class="d_flex ">
                <li v-for="element in linkArrayTop" class="navbar_link"><a href="#">{{ element . name }}</a></li>
            </ul>
        </nav>

    </div>
</header>
