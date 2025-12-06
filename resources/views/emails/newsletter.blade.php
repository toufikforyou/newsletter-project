<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #ffffff;
        }
        .container {
            max-width: 640px;
            margin: 0 auto;
            padding: 16px;
        }
        .content {
            padding: 16px;
            background-color: #ffffff;
        }
        .footer {
            padding: 16px;
            text-align: center;
            font-size: 12px;
            color: #6b7280;
            background-color: #f8fafc;
        }
    </style>
</head>
<body>
    <div class="container">
        <p style="margin: 0 0 12px 0; font-size: 13px; color: #4b5563;">From: {{ $authorName ?? 'TechNews Team' }}</p>
        <div class="content">
            {!! $body !!}
        </div>
        <div class="footer">
            <p>&copy; 2025 TechNews. All rights reserved.</p>
            <p><a href="#" style="color: #2563eb; text-decoration: none;">Unsubscribe</a></p>
        </div>
    </div>
</body>
</html>
