<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background: url('<?= BASE_URL ?>/public/img/kantor.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Inter', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-overlay {
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(30, 41, 59, 0.45);
            z-index: 1;
        }
        .login-card {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 380px;
            margin: 40px auto;
            background: rgba(255,255,255,0.18);
            border-radius: 18px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.18);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1.5px solid rgba(255,255,255,0.25);
            padding: 38px 32px 28px 32px;
            animation: fadeIn 0.7s cubic-bezier(.4,0,.2,1);
        }
        .login-card .close-btn {
            position: absolute;
            top: 18px;
            right: 18px;
            background: rgba(255,255,255,0.25);
            border: none;
            border-radius: 50%;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 1.5em;
            color: #1e293b;
            transition: background 0.2s;
        }
        .login-card .close-btn:hover {
            background: rgba(255,255,255,0.45);
        }
        .login-title {
            text-align: center;
            font-size: 2em;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 28px;
            letter-spacing: 1px;
        }
        .form-group {
            margin-bottom: 22px;
            position: relative;
            display: flex;
            flex-direction: column;
        }
        .form-group label {
            font-weight: 500;
            color: #334155;
            margin-bottom: 6px;
            display: block;
        }
        .form-group .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }
        .form-control {
            width: 100%;
            padding: 12px 40px 12px 44px;
            border-radius: 8px;
            border: none;
            background: rgba(255,255,255,0.7);
            font-size: 1em;
            color: #1e293b;
            box-shadow: 0 1px 2px rgba(0,0,0,0.03);
            outline: none;
            transition: box-shadow 0.2s;
        }
        .form-control:focus {
            box-shadow: 0 0 0 2px #4F46E5;
            background: #fff;
        }
        .form-group .material-icons-outlined {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #64748b;
            font-size: 1.3em;
            pointer-events: none;
        }
        .form-group .toggle-password {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #64748b;
            font-size: 1.2em;
            cursor: pointer;
        }
        .btn-login {
            width: 100%;
            background: #1e293b;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 13px 0;
            font-size: 1.1em;
            font-weight: 600;
            margin-top: 8px;
            margin-bottom: 10px;
            box-shadow: 0 2px 8px rgba(30,41,59,0.08);
            transition: background 0.2s, transform 0.2s;
        }
        .btn-login:hover {
            background: #334155;
            transform: translateY(-2px) scale(1.02);
        }
        .error-message {
            color: #dc3545;
            text-align: center;
            margin-bottom: 15px;
            font-weight: 500;
        }
        @media (max-width: 600px) {
            .login-card { padding: 22px 8px 18px 8px; }
        }
    </style>
</head>
<body>
    <div class="login-overlay"></div>
    <div class="login-card">
        <button class="close-btn" onclick="window.location.href='<?= BASE_URL ?>/'" title="Kembali ke Beranda">
            <span class="material-icons-outlined">close</span>
        </button>
        <div class="login-title">Login</div>
        <?php if (!empty($data['error'])): ?>
            <div class="error-message"><?= $data['error']; ?></div>
        <?php endif; ?>
        <form method="POST" action="<?= BASE_URL ?>/admin/login" autocomplete="off">
            <div class="form-group">
                <label for="username">Username</label>
                <div class="input-wrapper">
                    <span class="material-icons-outlined">person</span>
                    <input type="text" id="username" name="username" class="form-control" required autofocus placeholder="Username">
                </div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-wrapper">
                    <span class="material-icons-outlined">lock</span>
                    <input type="password" id="password" name="password" class="form-control" required placeholder="Password">
                    <button type="button" class="toggle-password" onclick="togglePassword()" tabindex="-1">
                        <span class="material-icons-outlined" id="eyeIcon">visibility_off</span>
                    </button>
                </div>
            </div>
            <button type="submit" class="btn-login">Login</button>
        </form>
    </div>
    <script>
    function togglePassword() {
        var pwd = document.getElementById('password');
        var icon = document.getElementById('eyeIcon');
        if (pwd.type === 'password') {
            pwd.type = 'text';
            icon.textContent = 'visibility';
        } else {
            pwd.type = 'password';
            icon.textContent = 'visibility_off';
        }
    }
    </script>
</body>
</html> 