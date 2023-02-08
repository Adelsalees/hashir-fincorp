<html lang="en">
<body>
<div style="display: none; max-height: 0px; overflow: hidden;">
    @yield('preText')
</div>
<table role="presentation" align="center" border="0" cellspacing="0" cellpadding="10" width="100%" bgcolor="#edf0f3"
       style="background-color:#edf0f3;table-layout:fixed;">
    <tbody>
    <tr>
        <td>
                <div
                    style="background-color:#ffffff;max-width:600px;margin:auto; box-shadow: 1px 1px 8px rgba(0,0,0,0.1);">

                    <table cellspacing="0" cellpadding="0" align="center"
                           style="width:100%;border:1px solid #0a589d; border-top-width:3px;">
                        <tbody>
                        <tr>
                            <td align="center" style="vertical-align:middle">
                                <div style="padding: 10px; background: #fff;">
                                    <table cellspacing="0" cellpadding="0" border="0" align="center"
                                           style="width:100%;">
                                        <tbody>
                                        <tr>
                                            <td align="left"
                                                style="vertical-align:middle;padding-top:10px;"
                                                bgcolor="#fff">
                                                

                                            <a  href="{{config('envs.app_url')}}"><img 
                                                    src="{{asset('assets/img/logo.png')}}"
                                                   Logo" style="display:block;max-height:47px;">
                                            </a>
                                            </td>
                                            <td align="right"
                                                style="vertical-align:middle;"
                                                bgcolor="#fff ">
                                                <table width="100%" cellpadding="0" cellspacing="0"
                                                       border="0">
                                                    <tbody>
                                                    <tr>
                                                        <td align="right">
                                                            <table align="right" cellpadding="0"
                                                                   cellspacing="0" border="0">
                                                                <tbody>
                                                                <tr>
                                                                    <td align="right"
                                                                        colspan="4"
                                                                        style="padding: 5px 0; font-size: 11px;padding-left: 16px;background: #fff;">
                                                                        <a  href="tel:+919745421461" style="color:#000">+91 97454 21461</a><br>
                                                                        <a  href="mailto:finprocorporatesolutions@gmail.com" style="color:#000">finprocorporatesolutions@gmail.com</a>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <table cellspacing="0" cellpadding="0" border="0" align="center"
                                       style="width:100%" bgcolor="#fff">
                                    <tbody>
                                    <tr>
                                        <td align="center" style="vertical-align:middle;height:10px"
                                            bgcolor="#ffffff">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left"
                                            style="vertical-align:middle;padding:0 15px; font-size:13px!important;line-height:1.255!important; color: #696969"
                                            bgcolor="#ffffff">
                                            @yield('body')
                                            <p>
                                                Thank You!<br/>
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div style="background: #f9f8fc; padding:15px 0;">
                                                <table width="100%">
                                                    <tbody>
                                                    <tr>
                                                        <td align="left"
                                                            style="vertical-align:middle;padding:0 15px; font-size:11px!important;line-height:1.255!important; color: #696969">
                                                            Notice: The information contained in this e-mail message and/or attachments to it may contain confidential or privileged information. If you are  not the intended recipient, any dissemination, use, review, distribution, printing or copying of the information contained in this e-mail message and/or attachments to it are strictly prohibited. If you have received this communication in error, please notify us by reply e-mail or telephone and immediately and permanently delete the message and any attachments.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center"
                                                            style="vertical-align:middle;padding:0 15px; font-size:11px!important;line-height:1.255!important; color: #696969">

                                                            <div style="padding-top:15px">
                                                                &copy; www.finprocs.com<br><br>
                                                                <a href="{{config('envs.app_url')}}" target="_blank" rel="noopener noreferrer">{{config('envs.app_url')}}</a>
                                                                <span
                                                                    style="padding-left:3px; padding-right:3px"> | </span>
                                                                    <a href="mailto:finprocorporatesolutions@gmail.com">finprocorporatesolutions@gmail.com</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
        </td>
    </tr>
    </tbody>
</table>
                            </body>
</html>
