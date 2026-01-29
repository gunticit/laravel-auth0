<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Laravel Auth0</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f7fa;
            min-height: 100vh;
        }

        .navbar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            text-decoration: none;
        }

        .navbar-nav {
            display: flex;
            gap: 1.5rem;
            align-items: center;
        }

        .navbar-nav a {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            transition: color 0.3s;
        }

        .navbar-nav a:hover {
            color: white;
        }

        .main-content {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 2rem;
        }

        .welcome-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            margin-bottom: 2rem;
        }

        .welcome-card h1 {
            color: #333;
            margin-bottom: 0.5rem;
        }

        .welcome-card p {
            color: #666;
        }

        .user-info-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .user-info-card h2 {
            color: #333;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid #f0f0f0;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .info-item {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 10px;
            border-left: 4px solid #667eea;
        }

        .info-item label {
            display: block;
            color: #888;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .info-item span {
            color: #333;
            font-size: 1.1rem;
            font-weight: 500;
            word-break: break-all;
        }

        .logout-btn {
            display: inline-block;
            padding: 0.8rem 2rem;
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5253 100%);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .logout-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(238, 82, 83, 0.4);
        }

        .avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2rem;
            color: white;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <a href="/" class="navbar-brand">🔐 Laravel Auth0</a>
        <div class="navbar-nav">
            <a href="/">Home</a>
            <a href="/dashboard">Dashboard</a>
            <a href="/logout" class="logout-btn">Logout</a>
        </div>
    </nav>

    <main class="main-content">
        <div class="welcome-card">
            <div class="avatar">
                {{ strtoupper(substr(auth()->user()->name ?? auth()->user()->email ?? 'U', 0, 1)) }}
            </div>
            <h1>Welcome to your Dashboard!</h1>
            <p>You are now authenticated with Auth0. Below you can see your user information.</p>
        </div>

        <div class="user-info-card">
            <h2>👤 User Information</h2>
            <div class="info-grid">
                <div class="info-item">
                    <label>User ID</label>
                    <span>{{ auth()->id() }}</span>
                </div>
                @if(auth()->user()->name)
                    <div class="info-item">
                        <label>Name</label>
                        <span>{{ auth()->user()->name }}</span>
                    </div>
                @endif
                @if(auth()->user()->email)
                    <div class="info-item">
                        <label>Email</label>
                        <span>{{ auth()->user()->email }}</span>
                    </div>
                @endif
                @if(auth()->user()->nickname)
                    <div class="info-item">
                        <label>Nickname</label>
                        <span>{{ auth()->user()->nickname }}</span>
                    </div>
                @endif
            </div>
        </div>
    </main>
</body>

</html>