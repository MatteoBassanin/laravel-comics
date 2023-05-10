<footer>
    <div class="footer_wrapper">
        <div class="inner_wrapper w_80_auto d_flex space_between">
            <div class="left_side">
                <div class="list_wrapper d_flex space_between">
                    <div class="first col">
                        <h3>DC COMICS</h3>
                        <ul>
                            <li v-for="element in linkArrayBotFirstLeft"><a href="#">{{ element . name }}</a></li>

                        </ul>
                        <h3>SHOP</h3>
                        <ul>
                            <li v-for="element in linkArrayBotSecondLeft"><a href="#">{{ element . name }}</a></li>

                        </ul>
                    </div>
                    <div class="second col">
                        <h3>DC</h3>
                        <ul>
                            <li v-for="element in linkArrayMiddle"><a href="#">{{ element . name }}</a></li>

                        </ul>
                    </div>
                    <div class="third col">
                        <h3>SITES</h3>
                        <ul>
                            <li v-for="element in linkArrayBotRight"><a href="#">{{ element . name }}</a></li>

                        </ul>

                    </div>
                </div>
            </div>
            <div class="right_side p_relative">
                <!-- <img class="big_logo p_relative" src="public/img/dc-logo-bg.png" alt=""> -->
            </div>
        </div>
    </div>
</footer>
