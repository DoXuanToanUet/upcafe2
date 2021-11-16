@component('mail::message')

You have new enquiry!<br>

Customer Details: <br>
Name: {{$data['name']}}<br>
Email: {{$data['email']}}<br>
Contact: {{$data['contact']}}<br>
Comment: {{$data['comment']}}<br>

<br>
Thanks,<br>
Up Cafe Team
@endcomponent