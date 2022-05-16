@php
$messages = array(
    array(
        'user' => 4,
        'type' => 'in',
        'text' => 'How likely are you to recommend our company to your friends and family ?',
        'time' => '2 mins'
    ),
    array(
        'user' => 2,
        'type' => 'out',
        'text' => 'Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.',
        'time' => '5 mins'
    ),
    array(
        'user' => 4,
        'type' => 'in',
        'text' => 'Ok, Understood!',
        'time' => '1 Hour'
    ),
    array(
        'user' => 2,
        'type' => 'out',
        'text' => 'You’ll receive notifications for all issues, pull requests!',
        'time' => '2 Hours'
    ),
    array(
        'user' => 4,
        'type' => 'in',
        'text' => 'You can unwatch this repository immediately by clicking here: <a href="https://keenthemes.com">Keenthemes.com</a>',
        'time' => '3 Hours'
    ),
    array(
        'user' => 2,
        'type' => 'out',
        'text' => 'Most purchased Business courses during this sale!',
        'time' => '4 Hours'
    ),
    array(
        'user' => 4,
        'type' => 'in',
        'text' => 'Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided',
        'time' => '5 Hours'
    ),


    array(
        'template' => true,
        'user'     => 2,
        'type'     => 'out',
        'text'     => '',
        'time'     => 'Just now'
    ),
    array(
        'template' => true,
        'user'     => 4,
        'type'     => 'in',
        'text'     => 'Right before vacation season we have the next Big Deal for you.',
        'time'     => 'Just now'
    )
)
@endphp

@foreach($messages as $message)
    @php
        $user = \App\Core\Data::getSampleUserInfo($message['user']);
        $user['size'] = '35px';
        $state =  $message['type'] === 'in' ? 'info' : 'primary';
        $comment = (isset($message['template']) ? 'template for ' : '') . $message['type'];
        $template_attr = (isset($message['template']) ? 'data-kt-element="template-' . $message['type'] . '"' : '');
    @endphp

    <!--begin::Message({{ $comment }})-->
    <div class="d-flex justify-content-{{ $message['type'] === 'in'? 'start' : 'end' }} mb-10 {{ isset($message['template']) ? 'd-none' : '' }}" {{ $template_attr }}>
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-{{ $message['type'] === 'in'? 'start' : 'end' }}">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                @if($message['type'] === 'in')
                    {!! \App\Core\Components::getAvatar($user) !!}

                    <!--begin::Details-->
                    <div class="ms-3">
                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">{{ $user['name'] }}</a>
                        <span class="text-muted fs-7 mb-1">{{ $message['time'] }}</span>
                    </div>
                    <!--end::Details-->
                @else
                    <!--begin::Details-->
                    <div class="me-3">
                        <span class="text-muted fs-7 mb-1">{{ $message['time'] }}</span>
                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                    </div>
                    <!--end::Details-->

                    {!! \App\Core\Components::getAvatar($user) !!}
                @endif
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-{{ $state }} text-dark fw-bold mw-lg-400px text-{{ $message['type'] === 'in'? 'start' : 'end' }}" data-kt-element="message-text">
                {{ $message['text'] }}
            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message({{ $comment }})-->
@endforeach
