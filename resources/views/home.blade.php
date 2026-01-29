<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Auth0 Demo</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: rgba(255, 255, 255, 0.95);
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            text-align: center;
            max-width: 500px;
            width: 90%;
        }

        .logo {
            font-size: 4rem;
            margin-bottom: 1rem;
        }

        h1 {
            color: #333;
            margin-bottom: 1rem;
            font-size: 2rem;
        }

        p {
            color: #666;
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .btn {
            display: inline-block;
            padding: 1rem 2.5rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
        }

        .features {
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid #eee;
        }

        .features h3 {
            color: #333;
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }

        .feature-list {
            list-style: none;
            text-align: left;
        }

        .feature-list li {
            padding: 0.5rem 0;
            color: #555;
        }

        .feature-list li::before {
            content: "✓ ";
            color: #667eea;
            font-weight: bold;
        }

        @if(auth()->check())
            .logged-in-notice {
                background: #d4edda;
                color: #155724;
                padding: 1rem;
                border-radius: 10px;
                margin-bottom: 1.5rem;
            }

        @endif
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">🔐</div>
        <h1>Laravel + Auth0</h1>

        @auth
            <div style="background: #d4edda; color: #155724; padding: 1rem; border-radius: 10px; margin-bottom: 1.5rem;">
                Welcome back, {{ auth()->user()->name ?? auth()->user()->email ?? 'User' }}!
            </div>
            <a href="/dashboard" class="btn">Go to Dashboard</a>
            <br><br>
            <a href="/logout" style="color: #666;">Logout</a>
        @else
            <p>
                Secure authentication powered by Auth0.
                Click the button below to sign in or create an account.
            </p>
            <a href="/login" class="btn">Login with Auth0</a>
        @endauth

        <div class="features">
            <h3>Features</h3>
            <ul class="feature-list">
                <li>Secure OAuth 2.0 Authentication</li>
                <li>Social Login Support</li>
                <li>Multi-factor Authentication</li>
                <li>Enterprise SSO Ready</li>
            </ul>
        </div>
    </div>
</body>

</html>