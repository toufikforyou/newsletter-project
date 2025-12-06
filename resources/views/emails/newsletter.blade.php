<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', sans-serif;
            font-size: 16px;
            line-height: 1.6;
            color: #1f2937;
            background-color: #ffffff;
        }
        .container {
            max-width: 640px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
        }
        .content {
            padding: 24px;
            background-color: #ffffff;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', sans-serif;
            font-size: 16px;
            line-height: 1.8;
            color: #1f2937;
        }
        .content p {
            margin: 0 0 16px 0;
            font-size: 16px;
            line-height: 1.8;
            color: #1f2937;
        }
        .content h1, .content h2, .content h3, .content h4, .content h5, .content h6 {
            margin: 24px 0 12px 0;
            font-weight: 600;
            color: #111827;
            line-height: 1.4;
        }
        .content h1 {
            font-size: 28px;
        }
        .content h2 {
            font-size: 24px;
        }
        .content h3 {
            font-size: 20px;
        }
        .content ul, .content ol {
            margin: 16px 0;
            padding-left: 24px;
            font-size: 16px;
            line-height: 1.8;
            color: #1f2937;
        }
        .content li {
            margin-bottom: 8px;
            color: #1f2937;
        }
        .content a {
            color: #2563eb;
            text-decoration: none;
            border-bottom: 1px solid #2563eb;
        }
        .content a:hover {
            color: #1d4ed8;
        }
        .content strong {
            font-weight: 600;
            color: #111827;
        }
        .content em {
            font-style: italic;
        }
        .content blockquote {
            margin: 16px 0;
            padding-left: 16px;
            border-left: 4px solid #3b82f6;
            color: #4b5563;
            background-color: #f0f9ff;
            padding: 12px;
        }
        .footer {
            padding: 20px;
            text-align: center;
            font-size: 13px;
            line-height: 1.6;
            color: #6b7280;
            background-color: #f8fafc;
        }
        .footer p {
            margin: 8px 0;
            font-size: 13px;
            color: #6b7280;
        }
        .footer a {
            color: #2563eb;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
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
