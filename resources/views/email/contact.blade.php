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
                            {{ $content }}
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>