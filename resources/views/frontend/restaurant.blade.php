@extends('app')
@section('content_body')
    <div class="logo_fixed background_default"></div>
    @include('elements.main_menu')
    <div class="container-fluid">
        @include('sections.section_one_generic', ['image_class_background' => 'restaurant_one', 'title' => 'Hotel Jardin La Paz', 'subtitle' => 'Conoce nuestro restaurante',
                                                    'description' => 'Prueba nuestras comidas tipicas, una autentica experiencia Guatemalteca.',
                                                    'subdescription' => 'Un delicioso desayuno para iniciar el dia y que mejor que companarlo con una vista hermosa!'
                                                    ])
        @include('sections.section_five_generic', ['images_one' => ['/images/hotel_images/restaurant/kitchen_12.jpg',
                                                                '/images/hotel_images/restaurant/food_8.jpg',
                                                                '/images/hotel_images/restaurant/kitchen_4.jpg',
                                                                '/images/hotel_images/restaurant/food_1.jpg',
                                                                '/images/hotel_images/restaurant/food_9.jpg',
                                                                '/images/hotel_images/restaurant/food_11.jpg']
                                                  ],
                                                  ['images_two' => [
                                                                '/images/hotel_images/restaurant/restaurant_two.jpg',
                                                                '/images/hotel_images/restaurant/restaurant_six.jpg',
                                                                '/images/hotel_images/restaurant/restaurant_one.jpg',
                                                    ]])
        @include('sections.section_seven')
        @include('sections.footer')
    </div>
@endsection
