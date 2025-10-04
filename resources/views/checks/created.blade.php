<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Платіжну інструкцію створено</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: #f5f5f5;
            padding: 40px 20px;
            color: #333;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            padding: 50px 40px;
        }

        .success-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 30px;
            background: #4caf50;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .success-icon svg {
            width: 45px;
            height: 45px;
            color: #fff;
        }

        h1 {
            text-align: center;
            font-size: 28px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 12px;
        }

        .subtitle {
            text-align: center;
            font-size: 16px;
            color: #666;
            margin-bottom: 40px;
        }

        .link-section {
            margin-bottom: 30px;
        }

        .link-label {
            font-size: 14px;
            font-weight: 600;
            color: #555;
            margin-bottom: 8px;
            display: block;
        }

        .link-input-wrapper {
            position: relative;
            display: flex;
            gap: 10px;
        }

        .link-input {
            flex: 1;
            padding: 14px 16px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 15px;
            font-family: 'Courier New', monospace;
            color: #0066cc;
            background: #f9f9f9;
            transition: all 0.2s;
        }

        .link-input:focus {
            outline: none;
            border-color: #0066cc;
            background: #fff;
        }

        .copy-btn {
            padding: 14px 24px;
            background: #0066cc;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            white-space: nowrap;
            text-decoration: none;
            display: inline-block;
        }

        .copy-btn:hover {
            background: #0052a3;
        }

        .copy-btn:active {
            transform: scale(0.98);
        }

        .copy-btn.copied {
            background: #4caf50;
        }

        .open-btn {
            background: #28a745;
        }

        .open-btn:hover {
            background: #218838;
        }

        .separator {
            height: 1px;
            background: #e0e0e0;
            margin: 35px 0;
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: 35px;
        }

        .btn {
            flex: 1;
            padding: 16px 24px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            text-decoration: none;
            text-align: center;
            display: inline-block;
        }

        .btn-primary {
            background: #0066cc;
            color: #fff;
        }

        .btn-primary:hover {
            background: #0052a3;
        }

        .btn-secondary {
            background: #fff;
            color: #0066cc;
            border: 2px solid #0066cc;
        }

        .btn-secondary:hover {
            background: #f0f7ff;
        }

        .info-box {
            background: #f0f7ff;
            border-left: 4px solid #0066cc;
            padding: 16px 20px;
            border-radius: 6px;
            margin-top: 30px;
            font-size: 14px;
            color: #555;
        }

        .info-box strong {
            color: #0066cc;
            display: block;
            margin-bottom: 6px;
        }

        @media (max-width: 768px) {
            .container {
                padding: 30px 20px;
            }

            h1 {
                font-size: 24px;
            }

            .link-input-wrapper {
                flex-wrap: wrap;
            }

            .link-input {
                width: 100%;
                margin-bottom: 10px;
            }

            .copy-btn {
                flex: 1;
            }

            .action-buttons {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="success-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
            </svg>
        </div>

        <h1>Платіжну інструкцію успішно створено!</h1>
        <p class="subtitle">Номер інструкції: {{ $check->pdf_uuid }}</p>

        <div class="link-section">
            <label class="link-label">Посилання для перегляду:</label>
            <div class="link-input-wrapper">
                <input 
                    type="text" 
                    class="link-input" 
                    id="public-link" 
                    value="{{ route('public.check', $check->string_id) }}" 
                    readonly
                >
                <button class="copy-btn" onclick="copyToClipboard('public-link', this)">
                    Копіювати
                </button>
                <a href="{{ route('public.check', $check->string_id) }}" class="copy-btn open-btn" target="_blank">
                    Відкрити
                </a>
            </div>
        </div>

        <div class="separator"></div>

        <div class="link-section">
            <label class="link-label">Посилання на PDF документ:</label>
            <div class="link-input-wrapper">
                <input 
                    type="text" 
                    class="link-input" 
                    id="pdf-link" 
                    value="{{ route('pdf.receipt', $check->pdf_uuid) }}" 
                    readonly
                >
                <button class="copy-btn" onclick="copyToClipboard('pdf-link', this)">
                    Копіювати
                </button>
                <a href="{{ route('pdf.receipt', $check->pdf_uuid) }}" class="copy-btn open-btn" target="_blank">
                    Відкрити
                </a>
            </div>
        </div>

        <div class="action-buttons">
            <a href="/" class="btn btn-primary">Створити ще один чек</a>
        </div>

        <div class="info-box">
            <strong>Збережіть посилання!</strong>
            Використовуйте посилання вище для доступу до платіжної інструкції. Ви можете поділитися ними або зберегти для майбутнього використання.
        </div>
    </div>

    <script>
        function copyToClipboard(inputId, button) {
            const input = document.getElementById(inputId);
            
            // Select the text
            input.select();
            input.setSelectionRange(0, 99999); // For mobile devices
            
            // Copy to clipboard
            navigator.clipboard.writeText(input.value).then(function() {
                // Change button text and style
                const originalText = button.textContent;
                button.textContent = 'Скопійовано!';
                button.classList.add('copied');
                
                // Reset after 2 seconds
                setTimeout(function() {
                    button.textContent = originalText;
                    button.classList.remove('copied');
                }, 2000);
            }).catch(function(err) {
                // Fallback for older browsers
                try {
                    document.execCommand('copy');
                    const originalText = button.textContent;
                    button.textContent = 'Скопійовано!';
                    button.classList.add('copied');
                    
                    setTimeout(function() {
                        button.textContent = originalText;
                        button.classList.remove('copied');
                    }, 2000);
                } catch(e) {
                    alert('Не вдалося скопіювати. Будь ласка, скопіюйте вручну.');
                }
            });
        }
    </script>
</body>
</html>

