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
                        <td style="padding: 40px 30px; border-bottom: 1px solid #e5e7eb;">
                            <h2 style="margin: 0; color: #1f2937; font-size: 24px; font-weight: 600;">We've Received Your Message</h2>
                            <p style="margin: 8px 0 0 0; color: #6b7280; font-size: 14px;">Ticket #{{ $contact->ticket_id }}</p>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding: 30px;">
                            <p style="margin: 0 0 20px 0; color: #374151; font-size: 16px; line-height: 1.5;">
                                Hi {{ $contact->full_name }},
                            </p>

                            <p style="margin: 0 0 20px 0; color: #374151; font-size: 14px; line-height: 1.6;">
                                Thank you for reaching out to us. We've reviewed your message and wanted to get back to you:
                            </p>

                            <!-- Reply Message Box -->
                            <div style="background-color: #f3f4f6; border-left: 4px solid #3b82f6; padding: 20px; border-radius: 4px; margin: 20px 0;">
                                <p style="margin: 0; color: #1f2937; font-size: 14px; line-height: 1.6; white-space: pre-wrap;">{{ $replyMessage }}</p>
                            </div>

                            <!-- Original Message Reference -->
                            <div style="background-color: #f9fafb; border: 1px solid #e5e7eb; padding: 15px; border-radius: 6px; margin: 20px 0;">
                                <p style="margin: 0 0 10px 0; color: #6b7280; font-size: 12px; font-weight: 600; text-transform: uppercase;">Your Original Message:</p>
                                <p style="margin: 8px 0 0 0; color: #374151; font-size: 13px;"><strong>Subject:</strong> {{ $contact->subject }}</p>
                                <p style="margin: 8px 0 0 0; color: #374151; font-size: 13px; white-space: pre-wrap;">{{ $contact->message }}</p>
                            </div>

                            <p style="margin: 20px 0 0 0; color: #374151; font-size: 14px; line-height: 1.6;">
                                If you have any further questions, feel free to reply to this email.
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="padding: 20px 30px; border-top: 1px solid #e5e7eb; background-color: #f9fafb; border-radius: 0 0 12px 12px;">
                            <p style="margin: 0; color: #6b7280; font-size: 12px; line-height: 1.5;">
                                Ticket ID: <strong>{{ $contact->ticket_id }}</strong><br>
                                Sent: {{ now()->format('M d, Y \a\t g:i A') }}<br>
                                <br>
                                <span style="color: #9ca3af;">© {{ date('Y') }} Newsletter. All rights reserved.</span>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
