@component('mail::message', $message)
# Message Recieved:
@php echo($message) @endphp
{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

From:<br>
@php echo($name) @endphp
Email:
@php echo($email) @endphp
@endcomponent
