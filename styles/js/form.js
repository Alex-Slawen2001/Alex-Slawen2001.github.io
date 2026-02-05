document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('consultModal');

    if (!modal) {
        console.warn('consultModal not found');
        return;
    }

    const form = document.getElementById('consultForm');
    const submitBtn = form?.querySelector('.consult-submit');
    const fields = {
        message: {
            input: form?.querySelector('textarea[name="Message"]'),
            error: document.getElementById('messageError')
        },
        name: {
            input: form?.querySelector('input[name="Name"]'),
            error: document.getElementById('nameError')
        },
        email: {
            input: form?.querySelector('input[name="Email"]'),
            error: document.getElementById('emailError')
        },
        phone: {
            input: form?.querySelector('input[name="Phone"]'),
            error: document.getElementById('phoneError')
        },
        company: {
            input: form?.querySelector('input[name="Company"]'),
            error: document.getElementById('companyError')
        }
    };

    document.querySelectorAll('.js-open-consult').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
            clearAllErrors();
        });
    });

    document.querySelectorAll('.js-close-consult').forEach(btn => {
        btn.addEventListener('click', () => {
            closeModal();
        });
    });

    const refreshBtn = document.getElementById('refreshCaptcha');
    const captchaImg = document.getElementById('captchaImage');

    if (refreshBtn && captchaImg) {
        refreshBtn.addEventListener('click', () => {
            captchaImg.src = '/ajax/captcha/image/' + Date.now();
        });
    }

    if (form) {
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            if (!validateForm()) {
                return;
            }

            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.textContent = 'Отправка...';
            }

            try {
                const formData = new FormData(form);
                const success = await simulateServerRequest(formData);

                if (success) {
                    showSuccessMessage();
                    setTimeout(() => {
                        closeModal();
                        resetForm();
                    }, 3000);
                } else {
                    showErrorMessage('Произошла ошибка при отправке. Попробуйте еще раз.');
                }
            } catch (error) {
                console.error('Ошибка отправки формы:', error);
                showErrorMessage('Произошла ошибка. Пожалуйста, попробуйте позже.');
            } finally {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.textContent = 'Отправить запрос';
                }
            }
        });

        Object.values(fields).forEach(field => {
            if (field.input) {
                field.input.addEventListener('blur', () => {
                    validateField(field);
                });

                field.input.addEventListener('input', () => {
                    clearFieldError(field);
                });
            }
        });
    }

    function validateForm() {
        let isValid = true;

        if (fields.message.input && !fields.message.input.value.trim()) {
            showFieldError(fields.message, 'Введите ваше сообщение');
            isValid = false;
        }

        if (fields.name.input && !fields.name.input.value.trim()) {
            showFieldError(fields.name, 'Введите ваше имя');
            isValid = false;
        }

        if (fields.email.input && fields.email.input.value.trim() && !isValidEmail(fields.email.input.value.trim())) {
            showFieldError(fields.email, 'Введите корректный email адрес');
            isValid = false;
        }

        if (fields.phone.input && fields.phone.input.value.trim() && !isValidPhone(fields.phone.input.value.trim())) {
            showFieldError(fields.phone, 'Введите корректный номер телефона');
            isValid = false;
        }

        return isValid;
    }

    function validateField(field) {
        if (!field.input) return true;

        const value = field.input.value.trim();
        let isValid = true;

        if (field.input.name === 'Message' && !value) {
            showFieldError(field, 'Введите ваше сообщение');
            isValid = false;
        } else if (field.input.name === 'Name' && !value) {
            showFieldError(field, 'Введите ваше имя');
            isValid = false;
        } else if (field.input.name === 'Email' && value && !isValidEmail(value)) {
            showFieldError(field, 'Введите корректный email адрес');
            isValid = false;
        } else if (field.input.name === 'Phone' && value && !isValidPhone(value)) {
            showFieldError(field, 'Введите корректный номер телефона');
            isValid = false;
        } else {
            clearFieldError(field);
        }

        return isValid;
    }

    function showFieldError(field, message) {
        clearFieldError(field);

        if (field.error) {
            field.error.textContent = message;
            field.error.style.display = 'block';
            if (field.input) {
                field.input.style.borderColor = '#ff4757';
                field.input.style.borderWidth = '2px';
            }
        }
    }

    function clearFieldError(field) {
        if (field.error) {
            field.error.textContent = '';
            field.error.style.display = 'none';
        }

        if (field.input) {
            field.input.style.borderColor = '';
            field.input.style.borderWidth = '';
        }
    }

    function clearAllErrors() {
        Object.values(fields).forEach(field => {
            clearFieldError(field);
        });
    }

    function isValidEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    function isValidPhone(phone) {
        const re = /^[\d\s\-\+\(\)]{10,}$/;
        return re.test(phone.replace(/\s/g, ''));
    }
    function isValidCompany(company) {
        const re = /^[A-Za-z\s]+$/;
        return re.test(company);
    }

    function closeModal() {
        modal.classList.remove('active');
        document.body.style.overflow = '';
        resetForm();
    }

    function resetForm() {
        if (form) {
            form.reset();
            clearAllErrors();
        }
    }

    function showSuccessMessage() {
        const successMsg = document.createElement('div');
        successMsg.className = 'success-message';
        successMsg.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: #00C6A7;
            color: white;
            padding: 15px 25px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.3);
            z-index: 10000;
            animation: slideIn 0.3s ease;
        `;

        if (!document.querySelector('#consult-form-styles')) {
            const style = document.createElement('style');
            style.id = 'consult-form-styles';
            style.textContent = `
                @keyframes slideIn {
                    from { transform: translateX(100%); opacity: 0; }
                    to { transform: translateX(0); opacity: 1; }
                }
                @keyframes slideOut {
                    from { transform: translateX(0); opacity: 1; }
                    to { transform: translateX(100%); opacity: 0; }
                }
                .success-message,
                .error-message {
                    position: fixed;
                    top: 20px;
                    right: 20px;
                    padding: 15px 25px;
                    border-radius: 12px;
                    box-shadow: 0 5px 20px rgba(0,0,0,0.3);
                    z-index: 10000;
                    animation: slideIn 0.3s ease;
                }
                .success-message {
                    background: #00C6A7;
                    color: white;
                }
                .error-message {
                    background: #ff4757;
                    color: white;
                }
                /* Стили для существующих элементов ошибок */
                #messageError,
                #nameError,
                #emailError,
                #phoneError {
                    color: #ff4757;
                    font-size: 13px;
                    margin-top: 5px;
                    padding-left: 5px;
                    min-height: 20px;
                    display: none;
                }
            `;
            document.head.appendChild(style);
        }

        successMsg.innerHTML = `
            <div style="display: flex; align-items: center; gap: 10px;">
                <span style="font-size: 20px;">✓</span>
                <div>
                    <div style="font-weight: 600;">Заявка отправлена!</div>
                    <div style="font-size: 13px; opacity: 0.9;">Мы свяжемся с вами в ближайшее время</div>
                </div>
            </div>
        `;

        document.body.appendChild(successMsg);

        setTimeout(() => {
            successMsg.style.animation = 'slideOut 0.3s ease';
            setTimeout(() => successMsg.remove(), 300);
        }, 5000);
    }

    function showErrorMessage(message) {
        const errorMsg = document.createElement('div');
        errorMsg.className = 'error-message';
        errorMsg.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: #ff4757;
            color: white;
            padding: 15px 25px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.3);
            z-index: 10000;
            animation: slideIn 0.3s ease;
        `;

        errorMsg.innerHTML = `
            <div style="display: flex; align-items: center; gap: 10px;">
                <span style="font-size: 20px;">⚠</span>
                <div>
                    <div style="font-weight: 600;">Ошибка отправки</div>
                    <div style="font-size: 13px; opacity: 0.9;">${message}</div>
                </div>
            </div>
        `;

        document.body.appendChild(errorMsg);
        setTimeout(() => {
            errorMsg.style.animation = 'slideOut 0.3s ease';
            setTimeout(() => errorMsg.remove(), 300);
        }, 5000);
    }

    async function simulateServerRequest(formData) {
        return new Promise((resolve, reject) => {
            setTimeout(() => {
                const isSuccess = Math.random() > 0.1;

                if (isSuccess) {
                    console.log('Форма отправлена:', {
                        message: fields.message.input?.value,
                        name: fields.name.input?.value,
                        email: fields.email.input?.value,
                        phone: fields.phone.input?.value,
                        company: fields.company.input?.value,
                        timestamp: new Date().toISOString()
                    });
                    resolve(true);
                } else {
                    reject(new Error('Ошибка сервера'));
                }
            }, 1500);
        });
    }

    clearAllErrors();
});

// Для реальной отправки  simulateServerRequest на:
/*
async function sendRealRequest(formData) {
    try {
        const response = await fetch('/ajax/message/send', {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        });

        if (!response.ok) {
            throw new Error('Ошибка сервера: ' + response.status);
        }

        const data = await response.json();
        return data.success || true;
    } catch (error) {
        console.error('Ошибка отправки:', error);
        throw error;
    }
}
*/ 