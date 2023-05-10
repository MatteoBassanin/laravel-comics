@extends('layouts.app')


@section('page-title')
    <div class="container">
        <div class="main_top"></div>
        <div class="main_bot">
            <div class="blue_botton top"><a href="#">CURRENT SERIES</a></div>
            <div class="cards_container w_80_auto">
                <div class="big_cards_wrapper">
                    <ul class="d_flex flex_wrap">
                        @foreach ($comics as $comic)
                            <li class="card_wrapper">
                                <a href="#"><img :src="" alt=""></a>
                                <div class="text_wrapper">
                                    <h5><a href="#">{{ $comic['title'] }}</a></h5>
                                </div>
                            </li>
                        @endforeach
                    </ul>


                </div>
            </div>
            <div class="blue_botton bot"><a href="#">LOAD MORE</a></div>

        </div>

    </div>
@endsection


@section('content')
    <h1>ciao</h1>
@endsection
