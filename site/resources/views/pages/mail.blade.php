@component('mail::message')
# Vous avez reçu un message de la part de {{ $data['first_name'] }} {{ $data['last_name'] }} ({{ $data['email'] }})

Sujet: 

{{ $data['subject'] }}

Contenu du message:

{{ $data['message'] }}

@endcomponent