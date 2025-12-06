<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica', 'Arial', sans-serif; margin: 0; padding: 0; background-color: #f9fafb;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f9fafb;">
        <tr>
            <td align="center" style="padding: 40px 20px;">
                <table width="100%" style="max-width: 600px; background-color: white; border-radius: 12px; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                    <!-- Header -->
                    <tr>
                        <td style="padding: 40px 30px; text-align: center; border-bottom: 1px solid #e5e7eb;">
                            <div style="display: inline-flex; align-items: center; justify-content: center; width: 64px; height: 64px; background-color: #3b82f6; border-radius: 50%; margin-bottom: 20px;">
                                <span style="color: white; font-size: 36px; font-weight: bold;">🔐</span>
                            </div>
                            <h1 style="margin: 0; color: #1f2937; font-size: 28px; font-weight: 700;">Admin Registration OTP</h1>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px 30px; text-align: center;">
                            <p style="margin: 0 0 30px 0; color: #374151; font-size: 16px; line-height: 1.6;">
                                Your One-Time Password (OTP) for admin registration is:
                            </p>

                            <!-- OTP Box -->
                            <div style="background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); padding: 24px; border-radius: 12px; margin: 20px 0;">
                                <p style="margin: 0; color: white; font-size: 42px; font-weight: bold; letter-spacing: 8px; font-family: 'Courier New', monospace;">{{ $otp }}</p>
                            </div>

                            <p style="margin: 30px 0 0 0; color: #6b7280; font-size: 14px; line-height: 1.6;">
                                This OTP is valid for <strong>10 minutes</strong>. Please do not share this code with anyone.
                            </p>

                            <div style="background-color: #fef3c7; border-left: 4px solid #f59e0b; padding: 16px; border-radius: 4px; margin: 30px 0; text-align: left;">
                                <p style="margin: 0; color: #92400e; font-size: 13px; line-height: 1.5;">
                                    <strong>Security Notice:</strong> If you didn't request this OTP, please ignore this email. Your account is secure.
                                </p>
                            </div>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="padding: 20px 30px; border-top: 1px solid #e5e7eb; background-color: #f9fafb; text-align: center; border-radius: 0 0 12px 12px;">
                            <p style="margin: 0; color: #6b7280; font-size: 12px; line-height: 1.5;">
                                TechNews Admin Panel<br>
                                Sent: {{ now()->format('M d, Y \a\t g:i A') }}<br>
                                <br>
                                <span style="color: #9ca3af;">© {{ date('Y') }} TechNews. All rights reserved.</span>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
