@component('mail::message')
# Incoming Transmission Recieved:
@php echo($message) @endphp

@component('mail::button', ['url' => 'mailto:'.$email])
Reply
@endcomponent

From:<br>
@php echo($name) @endphp <br>
Email:<br>
@php echo($email) @endphp
@endcomponent
