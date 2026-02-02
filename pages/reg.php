<?php require_once __DIR__ .'/../blocks/header.php'?>
    <style>
        :root {
            --bg-main: #121212;
            --bg-secondary: #1E1E1E;
            --surface: #2A2A2A;
            --surface-hover: #343434;
            --surface-dark: #1a1a1a;
            --surface-blue: rgba(23, 97, 167, 0.15);
            --surface-blue-hover: rgba(23, 97, 167, 0.25);
            --surface-green: rgba(0, 198, 167, 0.1);
            --surface-red: rgba(255, 71, 87, 0.1);

            --text-main: #E0E0E0;
            --text-secondary: #A0A0A0;
            --text-muted: #a0a0a0;
            --text-white: #FFFFFF;

            --primary: #4F8AFF;
            --primary-dark: #3a7cff;
            --accent: #00C6A7;
            --accent-red: #FF4757;
            --blue-accent: #1761A7;

            --radius: 14px;
            --radius-lg: 20px;
            --radius-sm: 8px;
            --transition: .3s ease;

            --shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            --shadow-hover: 0 15px 40px rgba(0, 0, 0, 0.3);
            --shadow-card: 0 4px 20px rgba(0, 0, 0, 0.15);
            --shadow-input: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        body {
            background: var(--bg-main);
            color: var(--text-main);
            font-family: 'Inter', system-ui, sans-serif;
            line-height: 1.6;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
            width: 100%;
        }

        .page-header {
            text-align: center;
            padding: 60px 0 40px;
        }

        .page-header h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--text-white);
            background: var(--text-white);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .page-header p {
            color: var(--text-secondary);
            font-size: 18px;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .registration-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0 0 80px;
        }

        .registration-card {
            background: linear-gradient(145deg, var(--surface) 0%, var(--surface-dark) 100%);
            border-radius: var(--radius-lg);
            padding: 50px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: var(--shadow);
            max-width: 600px;
            width: 100%;
            transition: all var(--transition);
        }

        .registration-card:hover {
            box-shadow: var(--shadow-hover);
            border-color: rgba(79, 138, 255, 0.2);
        }

        .registration-steps {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
            position: relative;
        }

        .registration-steps::before {
            content: '';
            position: absolute;
            top: 24px;
            left: 20px;
            right: 20px;
            height: 2px;
            background: rgba(255, 255, 255, 0.1);
            z-index: 1;
        }

        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 2;
            flex: 1;
        }

        .step-number {
            width: 48px;
            height: 48px;
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 18px;
            color: var(--text-secondary);
            margin-bottom: 12px;
            transition: all var(--transition);
        }

        .step.active .step-number {
            background: var(--primary);
            border-color: var(--primary);
            color: var(--text-white);
            box-shadow: 0 0 20px rgba(79, 138, 255, 0.3);
        }

        .step.completed .step-number {
            background: var(--accent);
            border-color: var(--accent);
            color: var(--text-white);
        }

        .step.completed .step-number::after {
            content: '✓';
            font-size: 20px;
        }

        .step-label {
            font-size: 14px;
            color: var(--text-secondary);
            text-align: center;
            font-weight: 500;
        }

        .step.active .step-label {
            color: var(--primary);
            font-weight: 600;
        }

        .step.completed .step-label {
            color: var(--accent);
        }

        .form-section {
            display: none;
            animation: fadeIn 0.3s ease;
        }

        .form-section.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: var(--text-main);
            font-size: 15px;
        }

        .form-label.required::after {
            content: ' *';
            color: var(--accent-red);
        }

        .form-input {
            width: 100%;
            padding: 16px 20px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: var(--radius);
            color: var(--text-main);
            font-size: 15px;
            transition: all var(--transition);
            box-shadow: var(--shadow-input);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary);
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 0 0 3px rgba(79, 138, 255, 0.1);
        }

        .form-input:hover {
            border-color: rgba(255, 255, 255, 0.2);
        }

        .form-input.error {
            border-color: var(--accent-red);
            background: var(--surface-red);
        }

        .form-hint {
            display: block;
            margin-top: 8px;
            font-size: 13px;
            color: var(--text-muted);
        }

        .form-hint.error {
            color: var(--accent-red);
        }

        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
        }

        .form-row .form-group {
            flex: 1;
            margin-bottom: 0;
        }

        .checkbox-group {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 25px;
        }

        .checkbox {
            width: 20px;
            height: 20px;
            margin-top: 3px;
            flex-shrink: 0;
            cursor: pointer;
        }

        .checkbox-label {
            color: var(--text-secondary);
            font-size: 14px;
            line-height: 1.5;
        }

        .checkbox-label a {
            color: var(--primary);
            text-decoration: none;
            transition: color var(--transition);
        }

        .checkbox-label a:hover {
            color: var(--accent);
            text-decoration: underline;
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-top: 40px;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
        }

        .btn {
            padding: 16px 32px;
            border-radius: var(--radius);
            font-weight: 600;
            font-size: 15px;
            cursor: pointer;
            transition: all var(--transition);
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-width: 140px;
        }

        .btn-primary {
            background: linear-gradient(90deg, var(--primary), var(--primary-dark));
            color: var(--text-white);
            box-shadow: 0 8px 20px rgba(79, 138, 255, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 25px rgba(79, 138, 255, 0.4);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.05);
            color: var(--text-secondary);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.2);
            color: var(--text-main);
            transform: translateY(-2px);
        }

        .btn[disabled] {
            opacity: 0.5;
            cursor: not-allowed;
            transform: none !important;
        }

        .btn i {
            font-size: 18px;
        }

        .password-strength {
            margin-top: 10px;
            height: 4px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 2px;
            overflow: hidden;
        }

        .password-strength-bar {
            height: 100%;
            width: 0%;
            background: var(--accent-red);
            transition: width 0.3s ease;
            border-radius: 2px;
        }

        .password-strength-bar.weak { width: 25%; background: var(--accent-red); }
        .password-strength-bar.fair { width: 50%; background: #FFA500; }
        .password-strength-bar.good { width: 75%; background: #FFCC00; }
        .password-strength-bar.strong { width: 100%; background: var(--accent); }

        .password-tips {
            margin-top: 15px;
            padding: 15px;
            background: rgba(255, 255, 255, 0.03);
            border-radius: var(--radius-sm);
            border-left: 3px solid var(--primary);
        }

        .password-tips p {
            margin: 0 0 8px 0;
            font-size: 13px;
            color: var(--text-secondary);
        }

        .password-tips ul {
            margin: 0;
            padding-left: 20px;
        }

        .password-tips li {
            font-size: 12px;
            color: var(--text-muted);
            margin-bottom: 4px;
        }

        .login-link {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            color: var(--text-secondary);
            font-size: 14px;
        }

        .login-link a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: color var(--transition);
        }

        .login-link a:hover {
            color: var(--accent);
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .container {
                padding: 0 16px;
            }

            .page-header {
                padding: 40px 0 30px;
            }

            .page-header h1 {
                font-size: 32px;
            }

            .page-header p {
                font-size: 16px;
                padding: 0 16px;
            }

            .registration-card {
                padding: 30px 25px;
            }

            .registration-steps {
                margin-bottom: 30px;
            }

            .step-label {
                font-size: 12px;
            }

            .form-row {
                flex-direction: column;
                gap: 15px;
            }

            .form-actions {
                flex-direction: column;
                gap: 15px;
            }

            .btn {
                width: 100%;
                min-width: auto;
            }
        }

        @media (max-width: 480px) {
            .page-header h1 {
                font-size: 28px;
            }

            .registration-card {
                padding: 25px 20px;
            }

            .step-number {
                width: 40px;
                height: 40px;
                font-size: 16px;
            }

            .step-label {
                font-size: 11px;
            }
        }

        .hidden {
            display: none;
        }

        .success-message {
            text-align: center;
            padding: 40px 0;
        }

        .success-icon {
            width: 80px;
            height: 80px;
            background: var(--accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            font-size: 40px;
            color: white;
        }

        .success-title {
            font-size: 24px;
            font-weight: 700;
            color: var(--text-white);
            margin-bottom: 15px;
        }

        .success-text {
            color: var(--text-secondary);
            max-width: 400px;
            margin: 0 auto 30px;
            line-height: 1.6;
        }

        .error-message {
            padding: 15px;
            background: var(--surface-red);
            border-radius: var(--radius-sm);
            border-left: 3px solid var(--accent-red);
            color: var(--accent-red);
            margin-bottom: 25px;
            font-size: 14px;
            display: none;
        }

        .error-message.show {
            display: block;
            animation: fadeIn 0.3s ease;
        }
    </style>

    <body>

    <div class="container">

        <div class="page-header">
            <h1>Регистрация</h1>
            <p>Создайте учетную запись для доступа ко всем услугам Вертолетной сервисной компании</p>
        </div>

        <div class="registration-container">
            <div class="registration-card">

                <div class="registration-steps">
                    <div class="step active" data-step="1">
                        <div class="step-number">1</div>
                        <div class="step-label">Личные данные</div>
                    </div>
                    <div class="step" data-step="2">
                        <div class="step-number">2</div>
                        <div class="step-label">Учетные данные</div>
                    </div>
                    <div class="step" data-step="3">
                        <div class="step-number">3</div>
                        <div class="step-label">Подтверждение</div>
                    </div>
                </div>

                <div class="error-message" id="errorMessage">
                    Пожалуйста, исправьте ошибки в форме
                </div>

                <form id="registrationForm">
                    <div class="form-section active" id="section1">
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label required">Имя</label>
                                <input type="text" class="form-input" id="firstName" name="firstName" required>
                                <span class="form-hint">Введите ваше имя</span>
                            </div>
                            <div class="form-group">
                                <label class="form-label required">Фамилия</label>
                                <input type="text" class="form-input" id="lastName" name="lastName" required>
                                <span class="form-hint">Введите вашу фамилию</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label required">Email</label>
                            <input type="email" class="form-input" id="email" name="email" required>
                            <span class="form-hint">На этот адрес будут отправляться уведомления</span>
                        </div>

                        <div class="form-group">
                            <label class="form-label required">Телефон</label>
                            <input type="tel" class="form-input" id="phone" name="phone" placeholder="+7 (999) 999-99-99" required>
                            <span class="form-hint">В формате +7 XXX XXX-XX-XX</span>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Компания</label>
                            <input type="text" class="form-input" id="company" name="company">
                            <span class="form-hint">Название вашей организации (если есть)</span>
                        </div>

                        <div class="form-actions">
                            <button type="button" class="btn btn-secondary" disabled>
                                <i>←</i> Назад
                            </button>
                            <button type="button" class="btn btn-primary" onclick="nextStep(2)">
                                Далее <i>→</i>
                            </button>
                        </div>
                    </div>

                    <div class="form-section" id="section2">
                        <div class="form-group">
                            <label class="form-label required">Логин</label>
                            <input type="text" class="form-input" id="username" name="username" required>
                            <span class="form-hint">Минимум 4 символа, только латинские буквы и цифры</span>
                        </div>

                        <div class="form-group">
                            <label class="form-label required">Пароль</label>
                            <input type="password" class="form-input" id="password" name="password" required>
                            <div class="password-strength">
                                <div class="password-strength-bar" id="passwordStrength"></div>
                            </div>
                            <div class="password-tips">
                                <p>Пароль должен содержать:</p>
                                <ul>
                                    <li id="lengthCheck">Минимум 8 символов</li>
                                    <li id="uppercaseCheck">Заглавную букву</li>
                                    <li id="numberCheck">Цифру</li>
                                    <li id="specialCheck">Специальный символ</li>
                                </ul>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label required">Подтверждение пароля</label>
                            <input type="password" class="form-input" id="confirmPassword" name="confirmPassword" required>
                            <span class="form-hint" id="passwordMatch">Повторите введенный пароль</span>
                        </div>

                        <div class="checkbox-group">
                            <input type="checkbox" class="checkbox" id="newsletter" name="newsletter" checked>
                            <label class="checkbox-label">
                                Получать новости и обновления от Вертолетной сервисной компании
                            </label>
                        </div>

                        <div class="form-actions">
                            <button type="button" class="btn btn-secondary" onclick="prevStep(1)">
                                <i>←</i> Назад
                            </button>
                            <button type="button" class="btn btn-primary" onclick="nextStep(3)">
                                Далее <i>→</i>
                            </button>
                        </div>
                    </div>

                    <div class="form-section" id="section3">
                        <div class="checkbox-group">
                            <input type="checkbox" class="checkbox" id="terms" name="terms" required>
                            <label class="checkbox-label required">
                                Я соглашаюсь с <a href="https://www.hsc-copter.com/useragreement" target="_blank">Пользовательским соглашением</a> и даю согласие на обработку моих персональных данных в соответствии с <a href="/content/document/personal_data_ru.pdf" target="_blank">Политикой конфиденциальности</a>
                            </label>
                        </div>

                        <div class="form-actions">
                            <button type="button" class="btn btn-secondary" onclick="prevStep(2)">
                                <i>←</i> Назад
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Зарегистрироваться <i>✓</i>
                            </button>
                        </div>
                    </div>
                </form>

                <div class="form-section hidden" id="sectionSuccess">
                    <div class="success-message">
                        <div class="success-icon">
                            <i>✓</i>
                        </div>
                        <div class="success-title">Регистрация завершена!</div>
                        <div class="success-text">
                            На вашу электронную почту отправлено письмо с подтверждением регистрации.
                            Пожалуйста, проверьте почту и следуйте инструкциям для активации учетной записи.
                        </div>
                        <button type="button" class="btn btn-primary" onclick="location.href='https://passport.hsc-copter.com/login'">
                            Перейти к входу <i>→</i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="login-link">
                Уже есть аккаунт? <a href="https://passport.hsc-copter.com/login">Войдите в систему</a>
            </div>
        </div>

    </div>

    <script>
        let currentStep = 1;
        const totalSteps = 3;

        function updateSteps() {
            document.querySelectorAll('.step').forEach(step => {
                const stepNum = parseInt(step.dataset.step);
                step.classList.remove('active', 'completed');

                if (stepNum < currentStep) {
                    step.classList.add('completed');
                } else if (stepNum === currentStep) {
                    step.classList.add('active');
                }
            });
        }

        function showSection(sectionNumber) {
            document.querySelectorAll('.form-section').forEach(section => {
                section.classList.remove('active');
            });
            document.getElementById(`section${sectionNumber}`).classList.add('active');
        }

        function validateStep(step) {
            const errorMessage = document.getElementById('errorMessage');
            errorMessage.classList.remove('show');

            if (step === 1) {
                const firstName = document.getElementById('firstName').value.trim();
                const lastName = document.getElementById('lastName').value.trim();
                const email = document.getElementById('email').value.trim();
                const phone = document.getElementById('phone').value.trim();

                if (!firstName || !lastName || !email || !phone) {
                    errorMessage.textContent = 'Пожалуйста, заполните все обязательные поля';
                    errorMessage.classList.add('show');
                    return false;
                }

                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(email)) {
                    errorMessage.textContent = 'Пожалуйста, введите корректный email адрес';
                    errorMessage.classList.add('show');
                    document.getElementById('email').classList.add('error');
                    return false;
                }

                const phoneRegex = /^\+7\s?\(?\d{3}\)?\s?\d{3}[\s-]?\d{2}[\s-]?\d{2}$/;
                if (!phoneRegex.test(phone)) {
                    errorMessage.textContent = 'Пожалуйста, введите корректный номер телефона';
                    errorMessage.classList.add('show');
                    document.getElementById('phone').classList.add('error');
                    return false;
                }
            }

            if (step === 2) {
                const username = document.getElementById('username').value.trim();
                const password = document.getElementById('password').value;
                const confirmPassword = document.getElementById('confirmPassword').value;

                if (!username || !password || !confirmPassword) {
                    errorMessage.textContent = 'Пожалуйста, заполните все обязательные поля';
                    errorMessage.classList.add('show');
                    return false;
                }

                if (username.length < 4) {
                    errorMessage.textContent = 'Логин должен содержать минимум 4 символа';
                    errorMessage.classList.add('show');
                    document.getElementById('username').classList.add('error');
                    return false;
                }

                const usernameRegex = /^[a-zA-Z0-9]+$/;
                if (!usernameRegex.test(username)) {
                    errorMessage.textContent = 'Логин может содержать только латинские буквы и цифры';
                    errorMessage.classList.add('show');
                    document.getElementById('username').classList.add('error');
                    return false;
                }

                if (password !== confirmPassword) {
                    errorMessage.textContent = 'Пароли не совпадают';
                    errorMessage.classList.add('show');
                    document.getElementById('confirmPassword').classList.add('error');
                    return false;
                }

                const passwordStrength = checkPasswordStrength(password);
                if (passwordStrength === 'weak') {
                    errorMessage.textContent = 'Пароль слишком слабый. Усильте его согласно требованиям';
                    errorMessage.classList.add('show');
                    return false;
                }
            }

            if (step === 3) {
                const terms = document.getElementById('terms').checked;
                if (!terms) {
                    errorMessage.textContent = 'Необходимо согласиться с условиями регистрации';
                    errorMessage.classList.add('show');
                    return false;
                }
            }

            return true;
        }

        function nextStep(next) {
            if (validateStep(currentStep)) {
                currentStep = next;
                updateSteps();
                showSection(currentStep);
            }
        }

        function prevStep(prev) {
            currentStep = prev;
            updateSteps();
            showSection(currentStep);
        }

        function checkPasswordStrength(password) {
            let strength = 0;
            const tips = document.querySelectorAll('.password-tips li');

            if (password.length >= 8) {
                strength++;
                tips[0].style.color = '#00C6A7';
            } else {
                tips[0].style.color = '#FF4757';
            }

            if (/[A-Z]/.test(password)) {
                strength++;
                tips[1].style.color = '#00C6A7';
            } else {
                tips[1].style.color = '#FF4757';
            }

            if (/[0-9]/.test(password)) {
                strength++;
                tips[2].style.color = '#00C6A7';
            } else {
                tips[2].style.color = '#FF4757';
            }

            if (/[^A-Za-z0-9]/.test(password)) {
                strength++;
                tips[3].style.color = '#00C6A7';
            } else {
                tips[3].style.color = '#FF4757';
            }

            const strengthBar = document.getElementById('passwordStrength');
            let strengthClass = 'weak';

            if (strength === 1) {
                strengthClass = 'weak';
            } else if (strength === 2) {
                strengthClass = 'fair';
            } else if (strength === 3) {
                strengthClass = 'good';
            } else if (strength >= 4) {
                strengthClass = 'strong';
            }

            strengthBar.className = 'password-strength-bar ' + strengthClass;

            return strengthClass;
        }

        function checkPasswordMatch() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const matchHint = document.getElementById('passwordMatch');

            if (confirmPassword === '') {
                matchHint.textContent = 'Повторите введенный пароль';
                matchHint.className = 'form-hint';
            } else if (password === confirmPassword) {
                matchHint.textContent = 'Пароли совпадают';
                matchHint.className = 'form-hint';
            } else {
                matchHint.textContent = 'Пароли не совпадают';
                matchHint.className = 'form-hint error';
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            updateSteps();

            document.getElementById('password').addEventListener('input', function() {
                checkPasswordStrength(this.value);
                checkPasswordMatch();
            });

            document.getElementById('confirmPassword').addEventListener('input', checkPasswordMatch);

            document.querySelectorAll('.form-input').forEach(input => {
                input.addEventListener('input', function() {
                    this.classList.remove('error');
                });
            });

            document.getElementById('registrationForm').addEventListener('submit', function(e) {
                e.preventDefault();

                if (validateStep(3)) {
                    showSection('Success');
                    document.querySelector('.form-section.active').classList.remove('active');
                    document.getElementById('sectionSuccess').classList.remove('hidden');
                    document.getElementById('sectionSuccess').classList.add('active');

                    setTimeout(() => {
                        console.log('Форма отправлена');
                    }, 1000);
                }
            });
        });
    </script>

<?php require_once __DIR__ .'/../blocks/footer.php'?>