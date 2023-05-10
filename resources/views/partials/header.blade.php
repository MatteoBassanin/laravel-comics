<div class="header_wrapper d_flex space_between w_80_auto">
    <div class="logo_wrapper">
        <img class="logo" src={{ Vite::asset('resources/img/dc-logo.png') }} alt="">
    </div>

    <nav class="navbar d_flex">

        <ul class="d_flex ">
            @foreach ($linkArrayTop as $link)
                <li><a href="#">{{ $link }}</a></li>
            @endforeach
        </ul>
    </nav>

</div>
