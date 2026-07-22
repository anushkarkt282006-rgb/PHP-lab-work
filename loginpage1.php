<?php
// Simple designer login page example
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($username === 'designer' && $password === 'studio123') {
        $message = 'Login successful. Welcome, Designer!';
    } else {
        $message = 'Invalid username or password. Please try again.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Designer Login</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1f2937 0%, #4b5563 100%);
            color: #f8fafc;
        }
        .container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .card {
            width: 100%;
            max-width: 420px;
            background: rgba(15, 23, 42, 0.95);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 24px;
            box-shadow: 0 25px 55px rgba(15, 23, 42, 0.35);
            padding: 36px;
        }
        .card h1 {
            margin: 0 0 16px;
            font-size: 2rem;
            letter-spacing: 0.02em;
        }
        .card p {
            margin: 0 0 24px;
            color: #cbd5e1;
        }
        .input-group {
            margin-bottom: 18px;
        }
        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 0.94rem;
            color: #e2e8f0;
        }
        .input-group input {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid rgba(148, 163, 184, 0.3);
            border-radius: 14px;
            background: rgba(15, 23, 42, 0.85);
            color: #f8fafc;
            font-size: 1rem;
        }
        .input-group input:focus {
            outline: none;
            border-color: #60a5fa;
            box-shadow: 0 0 0 3px rgba(96, 165, 250, 0.18);
        }
        .button {
            width: 100%;
            padding: 14px 16px;
            border: none;
            border-radius: 14px;
            background: linear-gradient(135deg, #38bdf8, #0ea5e9);
            color: #0f172a;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            transition: transform 0.2s ease, opacity 0.2s ease;
        }
        .button:hover {
            transform: translateY(-1px);
            opacity: 0.95;
        }
        .message {
            margin-top: 18px;
            padding: 14px 16px;
            border-radius: 14px;
            background: rgba(255, 255, 255, 0.08);
            color: #e2e8f0;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 0.85rem;
            color: #94a3b8;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>Designer Login</h1>
            <p>Enter your credentials to access the design dashboard.</p>
            <form method="post" action="">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" value="<?= htmlspecialchars($_POST['username'] ?? '', ENT_QUOTES) ?>" placeholder="designer" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" required>
                </div>
                <button type="submit" class="button">Sign In</button>
            </form>
            <?php if ($message): ?>
            <div class="message"><?= htmlspecialchars($message, ENT_QUOTES) ?></div>
            <?php endif; ?>
            <div class="footer">Need an account? Contact the design team for access.</div>
        </div>
    </div>
</body>
</html>
