@component('mail::message')

Hi {{$data['customer']['name']}},

Please find your order confirmation.<br>

Our Upcafe team will be in contact to discuss further.<br>

Customer Details: <br><br>
Name: {{$data['customer']['name']}}<br>
Email: {{$data['customer']['email']}}<br>
Contact: {{$data['customer']['contact']}}<br>
For when: {{$data['customer']['date']}}<br>
At what time: {{$data['customer']['time']}}<br>
Is it for pick-up or deliver?: @if($data['customer']['type']) 'Pick Up' @else 'Delivery' @endif <br>
@if($data['customer']['type'] == 0)
    Address: {{$data['customer']['apartment']}} {{$data['customer']['street']}} {{$data['customer']['code']}} {{$data['customer']['city']}}<br>
@endif

<table>
    <thead>
        <tr>
            <th class="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:16px;line-height:1.5em;margin-top:0;text-align:left">Menu</th>
            <th class="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:16px;line-height:1.5em;margin-top:0;text-align:left;margin-right: 20px;">No. of People</th>
        <tr>
    </thead> 
    <tbody>
        @foreach($data['order'] as $m)
            <tr>
                <td style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:16px;line-height:1.5em;margin-top:0;text-align:left">{{$m['menu']['name']}}</td>
                <td style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:16px;line-height:1.5em;margin-top:0;text-align:right; margin-right: 20px;">
                    <?=($m['quantity']) ? $m['quantity'] : null;?>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<br>
<span class="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:16px;line-height:1.5em;margin-top:0;text-align:left">
    Thanks,
</span><br>
<span class="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:16px;line-height:1.5em;margin-top:0;text-align:left">
Up Cafe Team
</span>
@endcomponent