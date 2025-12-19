<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ล็อคอินเข้าสู่ระบบ</title>

    <!-- Google Font: Modern fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css') ?>">
</head>
<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #4ecdc4 0%, #44a08d 25%, #f39c12 75%, #e67e22 100%);
        --secondary-gradient: linear-gradient(135deg, #26d0ce 0%, #1a2a6c 100%);
        --accent-color: #26d0ce;
        --accent-orange: #f39c12;
        --navy-blue: #1a2a6c;
        --teal-primary: #4ecdc4;
        --teal-dark: #44a08d;
        --text-dark: #1a2a6c;
        --text-light: #5f7c8a;
        --white: #ffffff;
        --glass-bg: rgba(255, 255, 255, 0.25);
        --glass-border: rgba(78, 205, 196, 0.3);
        --shadow-light: 0 8px 32px 0 rgba(26, 42, 108, 0.15);
        --shadow-heavy: 0 20px 60px rgba(26, 42, 108, 0.25);
        --orange-glow: rgba(243, 156, 18, 0.3);
        --teal-glow: rgba(78, 205, 196, 0.3);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Kanit', 'Poppins', sans-serif;
    }

    body {
        background: var(--primary-gradient);
        background-attachment: fixed;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow-x: hidden;
    }

    /* Animated background particles - Pet themed */
    body::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml,<svg width="80" height="80" viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g fill="%234ecdc4" fill-opacity="0.1"><circle cx="20" cy="20" r="2"/><circle cx="60" cy="60" r="2"/></g><g fill="%23f39c12" fill-opacity="0.08"><circle cx="40" cy="40" r="1.5"/><circle cx="70" cy="30" r="1.5"/></g></svg>') repeat;
        animation: float 25s ease-in-out infinite;
        z-index: 0;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }

    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes pulse {
        0% { box-shadow: 0 0 0 0 var(--teal-glow); }
        70% { box-shadow: 0 0 0 15px rgba(78, 205, 196, 0); }
        100% { box-shadow: 0 0 0 0 rgba(78, 205, 196, 0); }
    }

    @keyframes pulseOrange {
        0% { box-shadow: 0 0 0 0 var(--orange-glow); }
        70% { box-shadow: 0 0 0 12px rgba(243, 156, 18, 0); }
        100% { box-shadow: 0 0 0 0 rgba(243, 156, 18, 0); }
    }

    .login-container {
        position: relative;
        z-index: 1;
        width: 100%;
        max-width: 450px;
        padding: 20px;
    }

    .login-card {
        background: var(--glass-bg);
        backdrop-filter: blur(16px) saturate(180%);
        -webkit-backdrop-filter: blur(16px) saturate(180%);
        border-radius: 24px;
        border: 1px solid var(--glass-border);
        box-shadow: var(--shadow-light);
        overflow: hidden;
        animation: slideInUp 0.8s ease-out;
        transition: all 0.3s ease;
    }

    .login-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-heavy);
    }

    .card-header {
        background: linear-gradient(135deg, rgba(78, 205, 196, 0.2), rgba(255, 255, 255, 0.1));
        padding: 2rem 1.5rem 1rem;
        text-align: center;
        border-bottom: 1px solid var(--glass-border);
        position: relative;
    }

    .card-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, var(--teal-primary), var(--accent-orange));
        opacity: 0.1;
        border-radius: 24px 24px 0 0;
    }

    .logo-container {
        display: inline-block;
        padding: 25px;
        background: var(--white);
        border-radius: 50%;
        box-shadow: 0 15px 40px rgba(78, 205, 196, 0.2);
        animation: pulse 3s infinite;
        position: relative;
        z-index: 1;
        border: 3px solid rgba(78, 205, 196, 0.1);
    }

    .logo-container:hover {
        animation: pulseOrange 2s infinite;
        transform: scale(1.05);
        transition: all 0.3s ease;
    }

    .card-body {
        padding: 2rem 1.5rem;
        background: rgba(255, 255, 255, 0.1);
    }

    .welcome-text {
        text-align: center;
        margin-bottom: 1rem;
        color: var(--white);
        font-size: 1.8rem;
        font-weight: 700;
        text-shadow: 
            0 2px 10px rgba(26, 42, 108, 0.4),
            0 4px 20px rgba(78, 205, 196, 0.3),
            2px 2px 0 rgba(26, 42, 108, 0.2),
            -2px -2px 0 rgba(78, 205, 196, 0.2);
        position: relative;
        letter-spacing: 0.5px;
        filter: drop-shadow(0 0 8px rgba(255, 255, 255, 0.3));
    }
    
    .subtitle-text {
        text-align: center;
        color: rgba(255, 255, 255, 0.95);
        margin-bottom: 2rem;
        font-weight: 500;
        font-size: 1rem;
        text-shadow: 
            0 2px 8px rgba(0, 0, 0, 0.5),
            0 1px 3px rgba(26, 42, 108, 0.3);
        line-height: 1.5;
    }

    .form-group {
        position: relative;
        margin-bottom: 1.5rem;
    }

    .form-control {
        width: 100%;
        padding: 1rem 3rem 1rem 3rem;
        border: 2px solid rgba(255, 255, 255, 0.2);
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.9);
        font-size: 1rem;
        font-weight: 500;
        color: var(--text-dark);
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .form-control:focus {
        outline: none;
        border-color: var(--accent-color);
        background: var(--white);
        box-shadow: 0 0 0 3px var(--teal-glow), 0 5px 15px rgba(78, 205, 196, 0.2);
        transform: translateY(-2px);
    }

    .form-control::placeholder {
        color: var(--text-light);
        font-weight: 400;
    }

    .input-icon {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: var(--text-light);
        font-size: 1.1rem;
        z-index: 2;
        transition: all 0.3s ease;
    }

    .input-icon-right {
        position: absolute;
        right: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: var(--text-light);
        font-size: 1.1rem;
        z-index: 3;
        transition: all 0.2s ease;
        cursor: pointer;
    }

    .form-group:focus-within .input-icon {
        color: var(--teal-primary);
        transform: translateY(-50%) scale(1.1);
        text-shadow: 0 0 8px var(--teal-glow);
    }

    .btn-login {
        width: 100%;
        padding: 1rem;
        border: none;
        border-radius: 12px;
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--teal-dark) 50%, var(--accent-orange) 100%);
        color: var(--white);
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        margin-top: 1rem;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    }

    .btn-login:hover {
        background: linear-gradient(135deg, var(--accent-orange) 0%, var(--teal-primary) 50%, var(--navy-blue) 100%);
        transform: translateY(-3px);
        box-shadow: 0 12px 30px var(--teal-glow), 0 5px 15px var(--orange-glow);
    }

    .btn-login:active {
        transform: translateY(0);
    }

    .btn-login::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: left 0.6s;
    }

    .btn-login:hover::before {
        left: 100%;
    }

    .btn-login::after {
        content: '🐾';
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        opacity: 0;
        transition: all 0.3s ease;
        font-size: 1.2rem;
    }

    .btn-login:hover::after {
        opacity: 1;
        right: 20px;
    }

    .footer-text {
        text-align: center;
        margin-top: 2rem;
        color: rgba(255, 255, 255, 0.8);
        font-size: 0.9rem;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .login-container {
            padding: 10px;
        }
        
        .card-header {
            padding: 1.5rem 1rem 0.5rem;
        }
        
        .card-body {
            padding: 1.5rem 1rem;
        }
        
        .welcome-text {
            font-size: 1.5rem;
        }
        
        .subtitle-text {
            font-size: 0.95rem;
        }
        
        .form-control {
            padding: 0.9rem 0.9rem 0.9rem 2.8rem;
            font-size: 0.95rem;
        }
        
        .btn-login {
            padding: 0.9rem;
            font-size: 1rem;
        }
    }

    @media (max-width: 480px) {
        .login-container {
            max-width: 320px;
        }
        
        .welcome-text {
            font-size: 1.4rem;
        }
        
        .subtitle-text {
            font-size: 0.9rem;
        }
    }

    /* Loading states */
    .loading {
        pointer-events: none;
        opacity: 0.7;
    }

    .loading .btn-login {
        background: #9ca3af;
    }

    /* Custom Alert Modal */
    .custom-alert-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(26, 42, 108, 0.75);
        /* ลดงาน render: ตัด blur เต็มหน้าจอออก */
        /* backdrop-filter: blur(5px); */
        /* -webkit-backdrop-filter: blur(5px); */
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.25s ease, visibility 0.25s ease;
    }

    .custom-alert-overlay.show {
        opacity: 1;
        visibility: visible;
    }

    .custom-alert {
        background: #ffffff;
        /* ลดงาน GPU: ไม่ใช้ blur ซ้อนในกล่องอีกชั้น */
        /* backdrop-filter: blur(16px) saturate(180%); */
        /* -webkit-backdrop-filter: blur(16px) saturate(180%); */
        border-radius: 20px;
        padding: 2rem;
        min-width: 320px;
        max-width: 500px;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
        transform: scale(0.7);
        opacity: 0;
        transition: transform 0.28s cubic-bezier(0.34, 1.56, 0.64, 1),
                    opacity 0.28s cubic-bezier(0.34, 1.56, 0.64, 1);
        border: 2px solid rgba(78, 205, 196, 0.3);
        position: relative;
        overflow: hidden;
    }

    .custom-alert-overlay.show .custom-alert {
        transform: scale(1);
        opacity: 1;
    }

    .custom-alert::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, var(--teal-primary) 0%, var(--accent-orange) 100%);
    }

    .custom-alert-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 1.5rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.5rem;
        position: relative;
        animation: bounceIn 0.6s ease-out;
    }

    @keyframes bounceIn {
        0% {
            transform: scale(0);
            opacity: 0;
        }
        50% {
            transform: scale(1.1);
        }
        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    @keyframes checkmark {
        0% {
            stroke-dashoffset: 100;
        }
        100% {
            stroke-dashoffset: 0;
        }
    }

    .custom-alert-icon.success {
        background: linear-gradient(135deg, #d4f4dd 0%, #a7f3d0 100%);
        color: #059669;
        border: 3px solid #10b981;
    }

    .custom-alert-icon.error {
        background: linear-gradient(135deg, #fee2e2 0%, #fecaca 100%);
        color: #dc2626;
        border: 3px solid #ef4444;
    }

    .custom-alert-icon.warning {
        background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
        color: #d97706;
        border: 3px solid #f59e0b;
    }

    .custom-alert-icon.loading {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--accent-orange) 100%);
        color: var(--white);
        border: 3px solid var(--teal-primary);
    }

    .custom-alert-icon.loading i {
        animation: spin 1s linear infinite;
    }

    .custom-alert-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 0.5rem;
        text-align: center;
    }

    .custom-alert-message {
        font-size: 1rem;
        color: var(--text-light);
        margin-bottom: 1.5rem;
        text-align: center;
        line-height: 1.5;
    }

    .custom-alert-buttons {
        display: flex;
        gap: 1rem;
        justify-content: center;
    }

    .custom-alert-btn {
        padding: 0.75rem 2rem;
        border: none;
        border-radius: 10px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        font-family: 'Kanit', sans-serif;
    }

    .custom-alert-btn.primary {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--accent-orange) 100%);
        color: var(--white);
        box-shadow: 0 4px 15px rgba(78, 205, 196, 0.3);
    }

    .custom-alert-btn.primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(78, 205, 196, 0.4);
    }

    .custom-alert-btn.secondary {
        background: #e5e7eb;
        color: var(--text-dark);
    }

    .custom-alert-btn.secondary:hover {
        background: #d1d5db;
        transform: translateY(-2px);
    }

    /* Shake animation for errors */
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        10%, 30%, 50%, 70%, 90% { transform: translateX(-10px); }
        20%, 40%, 60%, 80% { transform: translateX(10px); }
    }

    .custom-alert.shake {
        animation: shake 0.6s;
    }

    /* Zoom out animation for success */
    @keyframes zoomOut {
        0% { transform: scale(1); opacity: 1; }
        100% { transform: scale(0.7); opacity: 0; }
    }

    .custom-alert.zoom-out {
        animation: zoomOut 0.3s forwards;
    }
</style>

<body>
    <!-- Custom Alert Modal -->
    <div class="custom-alert-overlay" id="customAlertOverlay">
        <div class="custom-alert" id="customAlert">
            <div class="custom-alert-icon" id="alertIcon">
                <i class="fas fa-check"></i>
            </div>
            <h3 class="custom-alert-title" id="alertTitle">ข้อความ</h3>
            <p class="custom-alert-message" id="alertMessage"></p>
            <div class="custom-alert-buttons" id="alertButtons">
                <button class="custom-alert-btn primary" id="alertConfirmBtn">ตกลง</button>
            </div>
        </div>
    </div>

    <div class="login-container">
        <div class="login-card animate__animated animate__fadeInUp">
            <div class="card-header">
                <div class="logo-container">
                    <img src="<?= base_url('dist/img/logo-pet.png') ?>" alt="PetEX Import-Export Logo" style="width: 120px; height: auto; max-width: 100%;">
                </div>
            </div>
            
            <div class="card-body">
                <h2 class="welcome-text">ยินดีต้อนรับสู่ PetEX</h2>
                <p class="subtitle-text">จัดการธุรกิจนำเข้า-ส่งออกสัตว์เลี้ยงของคุณ</p>

                <form action="javascript:action_login('dashboard/login/auth', 'login_form');" method="post" id="login_form" autocomplete="on">
                    <div class="form-group">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" class="form-control" placeholder="กรอกอีเมล์" id="email_admin" name="email_admin" autocomplete="email" required>
                    </div>
                    
                    <div class="form-group" style="position:relative;">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-control" placeholder="กรอกรหัสผ่าน" id="password_admin" name="password_admin" autocomplete="current-password" required>
                        <i class="fas fa-eye input-icon-right toggle-password" role="button" aria-label="Toggle password visibility" tabindex="0"></i>
                    </div>
                    
                    <button type="submit" class="btn-login">
                        <span class="btn-text">เข้าสู่ระบบ</span>
                        <i class="fas fa-arrow-right" style="margin-left: 8px; transition: transform 0.3s ease;"></i>
                    </button>
                </form>
                
                <div class="footer-text">
                    <p>© 2025 Pet Ex. สงวนลิขสิทธิ์</p>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('dist/js/adminlte.min.js') ?>"></script>

    <!-- Custom Alert JavaScript -->
    <script>
        // Custom Alert System
        const CustomAlert = {
            overlay: null,
            alert: null,
            icon: null,
            title: null,
            message: null,
            buttons: null,
            confirmBtn: null,
            
            init() {
                this.overlay = document.getElementById('customAlertOverlay');
                this.alert = document.getElementById('customAlert');
                this.icon = document.getElementById('alertIcon');
                this.title = document.getElementById('alertTitle');
                this.message = document.getElementById('alertMessage');
                this.buttons = document.getElementById('alertButtons');
                this.confirmBtn = document.getElementById('alertConfirmBtn');
                
                // Close on overlay click
                this.overlay.addEventListener('click', (e) => {
                    if (e.target === this.overlay) {
                        this.close();
                    }
                });
            },
            
            show(options) {
                const {
                    icon = 'success',
                    title = '',
                    text = '',
                    confirmButtonText = 'ตกลง',
                    showConfirmButton = true,
                    timer = null,
                    onConfirm = null
                } = options;
                
                // Set icon
                this.icon.className = 'custom-alert-icon ' + icon;
                const iconMap = {
                    success: '<i class="fas fa-check"></i>',
                    error: '<i class="fas fa-times"></i>',
                    warning: '<i class="fas fa-exclamation"></i>',
                    loading: '<i class="fas fa-spinner"></i>'
                };
                this.icon.innerHTML = iconMap[icon] || iconMap.success;
                
                // Set content
                this.title.textContent = title;
                this.message.textContent = text;
                this.message.style.display = text ? 'block' : 'none';
                
                // Set buttons
                if (showConfirmButton) {
                    this.confirmBtn.textContent = confirmButtonText;
                    this.confirmBtn.style.display = 'inline-block';
                    this.confirmBtn.onclick = () => {
                        if (onConfirm) onConfirm();
                        this.close();
                    };
                } else {
                    this.confirmBtn.style.display = 'none';
                }
                
                // Show alert
                this.overlay.classList.add('show');
                document.body.style.overflow = 'hidden';
                
                // Add shake animation for errors
                if (icon === 'error' || icon === 'warning') {
                    this.alert.classList.add('shake');
                    setTimeout(() => {
                        this.alert.classList.remove('shake');
                    }, 600);
                }
                
                // Auto close
                if (timer) {
                    setTimeout(() => {
                        this.close();
                    }, timer);
                }
            },
            
            showLoading() {
                this.show({
                    icon: 'loading',
                    title: 'กำลังตรวจสอบข้อมูล...',
                    showConfirmButton: false
                });
            },
            
            close() {
                this.overlay.classList.remove('show');
                document.body.style.overflow = '';
            }
        };
        
        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            CustomAlert.init();
        });
    </script>

    <!-- Enhanced JavaScript with modern UX -->
    <script>
        // Form validation
        function validateForm() {
            const email = document.getElementById('email_admin').value;
            const password = document.getElementById('password_admin').value;
            
            if (!email) {
                showError('กรุณากรอกอีเมล์');
                return false;
            }
            
            if (!isValidEmail(email)) {
                showError('รูปแบบอีเมล์ไม่ถูกต้อง');
                return false;
            }
            
            if (!password) {
                showError('กรุณากรอกรหัสผ่าน');
                return false;
            }
            
            if (password.length < 6) {
                showError('รหัสผ่านต้องมีอย่างน้อย 6 ตัวอักษร');
                return false;
            }
            
            return true;
        }
        
        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
        
        function showError(message) {
            CustomAlert.show({
                icon: 'warning',
                title: message,
                confirmButtonText: 'ตกลง'
            });
        }
        
        // Enhanced login function
        function action_login(url, form) {
            if (!validateForm()) {
                return;
            }
            
            const formElement = document.getElementById(form);
            const btnLogin = formElement.querySelector('.btn-login');
            const btnText = btnLogin.querySelector('.btn-text');
            const btnIcon = btnLogin.querySelector('.fas');
            
            var formData = new FormData(formElement);
            
            $.ajax({
                url: '<?= base_url() ?>' + url,
                type: "POST",
                cache: false,
                data: formData,
                processData: false,
                contentType: false,
                dataType: "JSON",
                beforeSend: function() {
                    // Add loading state
                    formElement.classList.add('loading');
                    btnLogin.disabled = true;
                    btnText.textContent = 'กำลังเข้าสู่ระบบ...';
                    btnIcon.className = 'fas fa-spinner fa-spin';
                    
                    // Show loading alert
                    CustomAlert.showLoading();
                },
                success: function(response) {
                    // Reset button state
                    formElement.classList.remove('loading');
                    btnLogin.disabled = false;
                    btnText.textContent = 'เข้าสู่ระบบ';
                    btnIcon.className = 'fas fa-arrow-right';
                    
                    CustomAlert.close();
                    
                    if (response.success) {
                        CustomAlert.show({
                            icon: 'success',
                            title: 'เข้าสู่ระบบสำเร็จ!',
                            text: response.message || 'ยินดีต้อนรับเข้าสู่ระบบ',
                            showConfirmButton: false,
                            timer: 2000
                        });
                        
                        // Add success animation to form
                        document.querySelector('.login-card').classList.add('animate__animated', 'animate__zoomOut');
                        
                        if (response.reload) {
                            setTimeout(function() {
                                window.location.href = '<?= base_url('dashboard/dashboardhome') ?>';
                            }, 2000);
                        }
                    } else {
                        CustomAlert.show({
                            icon: 'error',
                            title: 'เข้าสู่ระบบไม่สำเร็จ',
                            text: response.message || 'อีเมล์หรือรหัสผ่านไม่ถูกต้อง',
                            confirmButtonText: 'ลองอีกครั้ง'
                        });
                        
                        // Add shake animation to form
                        const loginCard = document.querySelector('.login-card');
                        loginCard.classList.add('animate__animated', 'animate__shakeX');
                        setTimeout(() => {
                            loginCard.classList.remove('animate__animated', 'animate__shakeX');
                        }, 1000);
                    }
                },
                error: function(xhr, status, error) {
                    // Reset button state
                    formElement.classList.remove('loading');
                    btnLogin.disabled = false;
                    btnText.textContent = 'เข้าสู่ระบบ';
                    btnIcon.className = 'fas fa-arrow-right';
                    
                    CustomAlert.show({
                        icon: 'error',
                        title: 'เกิดข้อผิดพลาด',
                        text: 'ไม่สามารถเชื่อมต่อกับเซิร์ฟเวอร์ได้ กรุณาลองอีกครั้ง',
                        confirmButtonText: 'ตกลง'
                    });
                }
            });
        }
        
        // Add Enter key support
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('login_form').addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    action_login('dashboard/login/auth', 'login_form');
                }
            });
            
            // Add focus effects
            const inputs = document.querySelectorAll('.form-control');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('focused');
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('focused');
                });
            });

                // Password visibility toggle
                document.querySelectorAll('.toggle-password').forEach(function(toggle) {
                    const input = document.getElementById('password_admin');
                    function togglePassword(e) {
                        e && e.preventDefault();
                        if (!input) return;
                        const isPassword = input.getAttribute('type') === 'password';
                        input.setAttribute('type', isPassword ? 'text' : 'password');
                        toggle.classList.toggle('fa-eye');
                        toggle.classList.toggle('fa-eye-slash');
                    }
                    toggle.addEventListener('click', togglePassword);
                    toggle.addEventListener('keydown', function(e) {
                        if (e.key === 'Enter' || e.key === ' ') {
                            togglePassword(e);
                        }
                    });
                });
        });
    </script>
</body>

</html>