<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/admin.css">
    <style>
        body { background: #f4f6f8; }
        .login-container {
            max-width: 400px;
            margin: 80px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
            padding: 40px 30px;
        }
        .login-title {
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.6em;
            color: #007bff;
        }
        .form-group { margin-bottom: 20px; }
        .form-group label { font-weight: 500; }
        .form-control { width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ddd; }
        .btn { width: 100%; }
        .error-message { color: #dc3545; text-align: center; margin-bottom: 15px; }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-title">Login Admin</div>
        <?php if (!empty($data['error'])): ?>
            <div class="error-message"><?= $data['error']; ?></div>
        <?php endif; ?>
        <form method="POST" action="<?= BASE_URL ?>/admin/login">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html> 