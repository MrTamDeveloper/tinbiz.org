<table style="width:55%;border-collapse:collapse;margin:20px auto;background:#fff;color:#666;border:1px solid #e5e5e5" cellpadding="4" cellspacing="0" border="1">
    <tbody>
        <tr style="text-align:center;background:#f5f5f5">
            <td colspan="2">
                <a href="{{ url() }}" title="{{ Config::get('myconfig.SITE_NAME') }}"><img src="http://www.palmvietnamtravel.com/template/Default/images/logo-desktop.png" alt="{{ Config::get('myconfig.SITE_NAME') }}">
                </a>
                <h1 style="font-size:18px;margin:0">{{ Config::get('myconfig.SITE_NAME') }}</h1>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <p><img src="http://www.palmvietnamtravel.com/template/Default/images/msdiep.png" alt="{{ Config::get('myconfig.SITE_NAME') }}" style="float:left;margin:0 10px 0 0">
                    <br>
                </p>
                <p><i><strong>Dear Sir/Madam,</strong><br>
&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Thank you for choosing {{ Config::get('myconfig.SITE_NAME') }}!<br>
&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Below is the information for your booking:</i>
                </p>
            </td>
        </tr>
        <tr style="background:#f5f5f5;color:#0283DE;font-size:14px;padding:10px;text-align:right;font-weight:bold">
            <td style="border:0">Your Information</td>
            <td style="border:0">&nbsp;</td>
        </tr>
        <tr>
            <td width="35%"><strong style="text-align:right;display:block">Nationality:</strong>
            </td>
            <td width="75%">{{ $nationality }}</td>
        </tr>
        <tr>
            <td><strong style="text-align:right;display:block">Gender:</strong>
            </td>
            <td>{{ $gender }}</td>
        </tr>
        <tr>
            <td><strong style="text-align:right;display:block">First name:</strong>
            </td>
            <td>{{ $first_name }}</td>
        </tr>
        <tr>
            <td><strong style="text-align:right;display:block">Last name:</strong>
            </td>
            <td>{{ $last_name }}</td>
        </tr>
        <tr>
            <td><strong style="text-align:right;display:block">Email:</strong>
            </td>
            <td><a href="mailto:{{ $email }}" target="_blank">{{ $email }}</a>
            </td>
        </tr>
        <tr>
            <td><strong style="text-align:right;display:block">Phone:</strong>
            </td>
            <td>{{ $phone }}</td>
        </tr>
        <tr style="background:#f5f5f5;color:#0283DE;font-size:14px;padding:10px;text-align:right;font-weight:bold">
            <td style="border:0">Reservation Trip Details</td>
            <td style="border:0">&nbsp;</td>
        </tr>
        <tr>
            <td><strong style="text-align:right;display:block">Tour name:</strong>
            </td>
            <td><a href="{{ url('vietnam/$tour_alias') }}" title="Sapa - a Walk of Colors - 2 Days/ 1 Night" style="text-decoration:none;color:#0283DE">{{ $tour_name }}</a>
            </td>
        </tr>
        <tr>
            <td><strong style="text-align:right;display:block">Date of arrival:</strong>
            </td>
            <td>{{ $arrival_date }}</td>
        </tr>
        <tr>
            <td><strong style="text-align:right;display:block">Date of departure:</strong>
            </td>
            <td>{{ $departure_date }}</td>
        </tr>
        <tr>
            <td><strong style="text-align:right;display:block">Adults:</strong>
            </td>
            <td>{{ $adults }}</td>
        </tr>
        <tr>
            <td><strong style="text-align:right;display:block">Children:</strong>
            </td>
            <td>{{ isset($children) ? $children : 0 }}</td>
        </tr>
        <tr>
            <td><strong style="text-align:right;display:block">Babies:</strong>
            </td>
            <td>{{ isset($babies) ? $babies : 0 }}</td>
        </tr>
        <tr>
            <td><strong style="text-align:right;display:block">Hotel Class:</strong>
            </td>
            <td>{{ $hotel_class }}</td>
        </tr>
        @if(isset($hotel_name))
        <tr>
            <td><strong style="text-align:right;display:block">Hotel name:</strong>
            </td>
            <td>{{ $hotel_name }}</td>
        </tr>
        @endif
        <tr>
            <td><strong style="text-align:right;display:block">Room preference:</strong>
            </td>
            <?php $room_references = json_decode($hotel_room_reference, true) ?>
            <td>
                Single:{!! !empty($room_references['single']) ? $room_references['single'] : 00 !!}  - Double:{!! !empty($room_references['double']) ? $room_references['double'] : 00 !!}  -
                Twin:{!! !empty($room_references['twin']) ? $room_references['twin'] : 00 !!}  -
                Triple:{!! !empty($room_references['triple']) ? $room_references['triple'] : 00 !!}
            </td>
        </tr>
        <tr>
            <td><strong style="text-align:right;display:block">Other Information:</strong>
            </td>
            <td>{{ $comment }}</td>
        </tr>
        <!-- <tr>
            <td><strong style="text-align:right;display:block">Online Transaction Fee (4.5%)</strong>
            </td>
            <td><strong style="color:#f00">9 USD</strong>
            </td>
        </tr>
        <tr>
            <td><strong style="text-align:right;display:block">Total Deposit</strong>
            </td>
            <td><strong style="color:#f00">209 USD</strong>
            </td>
        </tr> -->
        <tr>
            <td colspan="2" style="background:#f5f5f5;margin:0;padding:0 10px;margin:0">
                <p>Your booking information has been sent to Palm Vietnam Travel and is pedding. To complete the booking you must pay a deposit of <b style="color:#f00">(209 USD)</b> by click the <b>‘Check out with Paypal’</b> button below to Payment safely with Paypal.
                    <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; If you’ve not received a reply within 48 business hours please email <a href="mailto:{{ Config::get('myconfig.MAIL_INFO') }}" title="Email">{{ Config::get('myconfig.MAIL_INFO') }}</a>, you may also email us at this address to provide feedback on our services.</p>
                <p style="text-align:center;margin:0 0 5px"><b style="padding:0 0 5px;display:block">We accept:</b> <img src="http://www.palmvietnamtravel.com/template/Default/images/PayPal-button.gif" alt 'palm="" vietnam="" travel="" payment="" safely="" with="" paypal'=""> </p>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:11px;padding:10px"><b style="font-size:12px">If you have any questions or would like to discuss payment methods you can contact us at:</b>
                <br> &nbsp; &nbsp; &nbsp; &nbsp; {{ Config::get('myconfig.ADDRESS') }}
                <br> &nbsp; &nbsp; &nbsp; &nbsp; Tel: {{ Config::get('myconfig.TELL') }} - Fax: {{ Config::get('myconfig.FAX') }} - {{ Config::get('myconfig.HOTLINE') }}
                <br> &nbsp; &nbsp; &nbsp; &nbsp; E-mail: <a href="{{ Config::get('myconfig.MAIL_INFO') }}" title="Email">{{ Config::get('myconfig.MAIL_INFO') }}</a> - Website: <a href="{{ url() }}" title="Palm Vietnam Travel">{{ url() }}</a>
                <br>
            </td>
        </tr>
    </tbody>
</table>