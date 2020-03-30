@component('mail::message')
# Enquiry Form

<h2>Customer Name: {{ $validatedData->name }}</h2>
<p>Customer Email: {{ $validatedData->email }}</p>
<p>Customer Message: {{ $validatedData->message }}</p>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
