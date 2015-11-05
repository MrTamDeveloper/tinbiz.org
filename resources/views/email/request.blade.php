<table width="100%" border="0" style="background:#eee">
    <tbody>
        <tr>
            <td>
                <table style="width:55%;border-collapse:collapse;margin:20px auto;background:#fff;color:#666;border:1px solid #e5e5e5" cellpadding="4" cellspacing="0" border="1">
                    <tbody>
                        <tr style="text-align:center;background:#f5f5f5">
                            <td colspan="2"><img src="http://www.palmvietnamtravel.com/template/Default/images/logo-desktop.png" alt="{{ Config::get('myconfig.SITE_NAME') }}">
                                <h1 style="font-size:18px;margin:0">{{ Config::get('myconfig.SITE_NAME') }}</h1>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p><img src="http://www.palmvietnamtravel.com/template/Default/images/msdiep.png" alt=" Vietnam Travel" style="float:left;margin:0 10px 0 0">
                                    <br>
                                </p>
                                <p><i><strong>Dear {!! $gender !!},</strong><br>
&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Thank you for choosing {{ Config::get('myconfig.SITE_NAME') }}!<br>
&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Below is the information for your customized tour:</i>
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
                            <td width="65%">{!! $nationality !!}</td>
                        </tr>
                        <tr>
                            <td><strong style="text-align:right;display:block">Gender:</strong>
                            </td>
                            <td>{!! $gender !!}</td>
                        </tr>
                        <tr>
                            <td><strong style="text-align:right;display:block">Full name:</strong>
                            </td>
                            <td>{!! $first_name !!} {{ !empty($last_name) ? $last_name : '' }}</td>
                        </tr>
                        <tr>
                            <td><strong style="text-align:right;display:block">Email:</strong>
                            </td>
                            <td><a href="mailto:{{ $email }}" target="_blank">{!! $email !!}</a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong style="text-align:right;display:block">Phone:</strong>
                            </td>
                            <td>{!! $phone !!}</td>
                        </tr>
                        <tr>
                            <td><strong style="text-align:right;display:block">Payment method:</strong>
                            </td>
                            <td>{!! $payment_method !!}</td>
                        </tr>
                        <tr style="background:#f5f5f5;color:#0283DE;font-size:14px;padding:10px;text-align:right;font-weight:bold">
                            <td style="border:0">Reservation Trip Details</td>
                            <td style="border:0">&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong style="text-align:right;display:block">Destinations to visit:</strong>
                            </td>
                            <td>
                            	<?php $destinations = json_decode($destinations) ?>
                                <p>
                                	@foreach($destinations as $destination)
										- {{ $destination }} <br/>
                                	@endforeach
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td><strong style="text-align:right;display:block">Date of arrival:</strong>
                            </td>
                            <td>{!! $arrival_date !!}</td>
                        </tr>
                        <tr>
                            <td><strong style="text-align:right;display:block">Date of departure:</strong>
                            </td>
                            <td>{!! $departure_date !!}</td>
                        </tr>
                        <tr>
                            <td><strong style="text-align:right;display:block">Duration:</strong>
                            </td>
                            <td>{!! $duration !!}</td>
                        </tr>
                        <tr>
                            <td><strong style="text-align:right;display:block">Arrival port:</strong>
                            </td>
                            <td>{!! $arrival_port !!}</td>
                        </tr>
                        <tr>
                            <td><strong style="text-align:right;display:block">Hotel class:</strong>
                            </td>
                            <td>{!! $hotel_class !!}</td>
                        </tr>
                        <tr>
                            <td><strong style="text-align:right;display:block">Hotel name:</strong>
                            </td>
                            <td>{!! $hotel_name !!}</td>
                        </tr>
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
                            <td><strong style="text-align:right;display:block">Adults:</strong>
                            </td>
                            <td>{!! $adults !!}</td>
                        </tr>
                        <tr>
                            <td><strong style="text-align:right;display:block">Children:</strong>
                            </td>
                            <td>{!! !empty($chidren) ? $children : 0 !!}</td>
                        </tr>
                        <tr>
                            <td><strong style="text-align:right;display:block">Babies:</strong>
                            </td>
                            <td>{!! !empty($babies) ? $babies : 0 !!}</td>
                        </tr>
                        <tr>
                            <td><strong style="text-align:right;display:block">Other Information:</strong>
                            </td>
                            <td>{!! $comment !!}</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="background:#f5f5f5;padding:0 10px;margin:0">
                                <p>Thank you very much for contacting us at <a href="{{ url() }}" title="Vietnam Saigon Travel">www.palmvietnamtravel.com</a>. We will contact you within 8 - 24 hours with a suggested itinerary and price.
                                    <br>
                                    <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; If you’ve not received a reply within 48 business hours please email <a href="mailto:{{ Config::get('myconfig.MAIL_INFO') }}" title="Email">{{ Config::get('myconfig.MAIL_INFO') }}</a>, you may also email us at this address to provide feedback on our services.
                                    <br>
                                    <br>After accept the our quote, we will require a deposit payment of 30% of the total amount for all services, 70% of the total sum of your tour is required to be paid in 15-30 days prior to tour arrival date (A detail payment instruction will be sent to you via email).</p>
                                <p style="text-align:center"><b style="padding:0 0 5px;display:block">We accept:</b> <img src="http://www.palmvietnamtravel.com/template/Default/images/PayPal-button.gif" alt 'palm="" vietnam="" travel="" payment="" safely="" with="" paypal'=""> </p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="font-size:11px;padding:10px"><b style="font-size:12px">If you have any questions or would like to discuss payment methods you can contact us at:</b>
                                <br> &nbsp; &nbsp; &nbsp; &nbsp; {{ Config::get('myconfig.ADDRESS') }}
                                <br> &nbsp; &nbsp; &nbsp; &nbsp; Tel: {{ Config::get('myconfig.TELL') }} - Fax: {{ Config::get('myconfig.FAX') }} - {{ Config::get('myconfig.HOTLINE') }}
                                <br> &nbsp; &nbsp; &nbsp; &nbsp; E-mail: <a href="{{ Config::get('myconfig.MAIL_INFO') }}" title="Email">{{ Config::get('myconfig.MAIL_INFO') }}</a> - Website: <a href="{{ url() }}" title="Vietnam Travel">{{ url() }}</a>
                                <br>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>