@extends('app')
@section('content_body')
    <div class="logo_fixed background_default"></div>
    @include('elements.main_menu')
    <div class="container-fluid">
        @include('sections.section_one_generic')
        @include('sections.section_five_generic', ['images_one' => ['/images/hotel_images/picture_curtain.jpg', '/images/hotel_images/room_12.jpg', '/images/hotel_images/bath_7.jpg',
                                                                '/images/hotel_images/bath_2.jpg', '/images/hotel_images/bath_4.jpg', '/images/hotel_images/bath_6.jpg'],
                                                    'images_two' => [
                                                        '/images/hotel_images/room_14.jpg',
                                                        '/images/hotel_images/bath_curtain.jpg',
                                                        '/images/hotel_images/curtain_7.jpg',
                                                        '/images/hotel_images/kitchen_room11.jpg',
                                                        '/images/hotel_images/kitchen-room25.jpg',
                                                        '/images/hotel_images/nine.jpg',
                                                    ]
                                                  ])
        @include('sections.section_seven')
        @include('sections.footer')
    </div>
@endsection
