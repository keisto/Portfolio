@component('mail::message')
# Introduction

$request->message

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

From:<br>
$request->name
@endcomponent
