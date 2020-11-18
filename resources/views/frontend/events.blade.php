@extends('app')
@section('content_body')
    <div class="logo_fixed background_default"></div>
    @include('elements.main_menu')
    <div class="container-fluid">
        @include('sections.section_one_generic', ['image_class_background'=>'events_two', 'title' => 'Hotel Jardin La Paz', 'subtitle' => 'Para sus eventos con un gran espacio',
                                                    'description' => 'En Hotel Jardin La Paz encontrarás un bello lugar natural con jardines para eventos de
                                                    ensueño, salones para eventos pequeños y grandes,
                                                    un elegante lugar para ceremonias, en dónde tus sueños se harán realidad.

Permítenos ser parte de tu historia, de tus mejores recuerdos, de aquellos momentos que nunca olvidarás y de las decisiones importantes que has tomado en tu vida.',
                                                    'subdescription' => 'Nuestras instalaciones fueron diseñadas pensando en la comodidad de tus invitados y en tu satisfacción.'])
        @include('sections.section_five_generic', ['images_one' => ['/images/hotel_images/oct_photos/events_02.jpg',
                                                    '/images/hotel_images/oct_photos/events_05.jpg',
                                                    '/images/hotel_images/oct_photos/events_06.jpg',
                                                    '/images/hotel_images/oct_photos/events_07.jpg',
                                                    '/images/hotel_images/oct_photos/events_08.jpg',
                                                    '/images/hotel_images/oct_photos/events_04.jpg'],
                                                  ])
        @include('sections.section_seven')
        @include('sections.footer')
    </div>
@endsection
