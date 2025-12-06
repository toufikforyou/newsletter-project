<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            color: #1e293b;
            line-height: 1.6;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8fafc;
        }
        .header {
            background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%);
            color: white;
            padding: 40px 20px;
            text-align: center;
            border-radius: 8px;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: bold;
        }
        .content {
            background-color: white;
            padding: 30px;
            margin: 20px 0;
            border-radius: 8px;
            border: 1px solid #e2e8f0;
        }
        .footer {
            text-align: center;
            color: #64748b;
            font-size: 12px;
            margin-top: 20px;
        }
        .highlight {
            background-color: #f0f9ff;
            padding: 20px;
            border-left: 4px solid #3b82f6;
            border-radius: 4px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🎉 Welcome to TechNews!</h1>
        </div>

        <div class="content">
            <p>Hi there,</p>

            <p>Thanks for subscribing to <strong>TechNews</strong>! We're excited to have you join our community of 50,000+ developers and engineers.</p>

            <div class="highlight">
                <strong>✓ You're all set!</strong><br>
                Your email has been confirmed and you're now subscribed to receive our weekly tech briefing.
            </div>

            <p>Every week, we curate the most important insights on:</p>
            <ul>
                <li>Software Engineering & Best Practices</li>
                <li>AI & Machine Learning</li>
                <li>Cloud Architecture</li>
                <li>DevOps & Infrastructure</li>
                <li>Emerging Technologies</li>
            </ul>

            <p>Our first newsletter will arrive in your inbox soon. In the meantime, check out our blog for in-depth articles and tutorials.</p>

            <p style="margin-top: 30px;">
                <a href="{{ url('/blog') }}" style="display: inline-block; background-color: #2563eb; color: white; padding: 12px 24px; border-radius: 6px; text-decoration: none; font-weight: bold;">
                    Explore Our Blog
                </a>
            </p>

            <p style="margin-top: 30px; color: #64748b;">
                Have questions? Reply to this email or <a href="{{ url('/contact') }}" style="color: #2563eb;">contact us</a>.
            </p>

            <p style="margin-top: 10px;">
                Best regards,<br>
                <strong>The TechNews Team</strong>
            </p>
        </div>

        <div class="footer">
            <p>You received this email because you subscribed to TechNews. <a href="{{ url('/') }}" style="color: #3b82f6;">Manage your preferences</a></p>
            <p>&copy; {{ date('Y') }} TechNews. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
