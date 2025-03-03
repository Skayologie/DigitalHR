<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your New Account</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f9f9f9; color: #333333;">
<table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #f9f9f9;">
    <tr>
        <td align="center" style="padding: 40px 0;">
            <table width="600" cellpadding="0" cellspacing="0" border="0" style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                <!-- Header -->
                <tr>
                    <td style="background-color: #2c3e50; padding: 30px 40px;">
                        <h1 style="color: #ffffff; margin: 0; font-size: 24px; font-weight: 500;">Welcome to the Team!</h1>
                    </td>
                </tr>

                <!-- Content -->
                <tr>
                    <td style="padding: 40px; line-height: 1.6;">
                        <p style="margin-top: 0; font-size: 16px;">Hello, {{$name}}</p>
                        <p style="font-size: 16px;">Your company account has been created. Below are your login credentials:</p>

                        <!-- Credentials Box -->
                        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin: 30px 0; background-color: #f8f9fa; border-radius: 6px; border-left: 4px solid #3498db;">
                            <tr>
                                <td style="padding: 20px;">
                                    <p style="margin: 0; font-size: 14px; color: #7f8c8d; margin-bottom: 5px;">Email Address</p>
                                    <p style="margin: 0; font-size: 16px; font-weight: 500; margin-bottom: 20px; color: #2c3e50; word-break: break-all;">{{$EMAIL_PLACEHOLDER}}</p>

                                    <p style="margin: 0; font-size: 14px; color: #7f8c8d; margin-bottom: 5px;">Temporary Password</p>
                                    <p style="margin: 0; font-size: 16px; font-weight: 500; color: #2c3e50; font-family: monospace; background-color: #ecf0f1; padding: 8px; border-radius: 4px; display: inline-block;">{{$PASSWORD_PLACEHOLDER}}</p>
                                    <p style="color: darkred; margin: 0; font-size: 12px; font-weight: 500;">Attention : After login , Please Change The Password !</p>
                                </td>
                            </tr>
                        </table>

                        <p style="font-size: 16px;">Please login at <a href="" style="color: #3498db; text-decoration: none; font-weight: 500;">our company portal</a> and change your password as soon as possible.</p>

                        <p style="font-size: 16px;">If you have any questions, please contact the IT department.</p>

                        <p style="font-size: 16px; margin-bottom: 0;">Best regards,<br>HR Department</p>
                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td style="background-color: #f2f4f6; padding: 20px 40px; border-top: 1px solid #e9ecef;">
                        <p style="margin: 0; font-size: 14px; color: #7f8c8d; text-align: center;">
                            This is an automated email. Please do not reply.
                        </p>
                        <p style="margin: 10px 0 0; font-size: 14px; color: #7f8c8d; text-align: center;">
                            © {{$CURRENT_YEAR}} HR PRO . All rights reserved.
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
