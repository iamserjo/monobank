<!DOCTYPE html>
<html lang="uk">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Генерувати чек Монобанк онлайн | Створити платіжну квитанцію та PDF чек безкоштовно</title>
        <meta name="description" content="Безкоштовний онлайн генератор чеків Monobank. Створіть платіжну інструкцію, квитанцію та PDF чек моментально. Швидко згенеруйте чек з логотипом Монобанку для платіжних операцій.">
        <meta name="keywords" content="генератор чеків монобанк, створити чек monobank, платіжна квитанція монобанк, pdf чек моноbank, квитанція монобанк онлайн, згенерувати чек, платіжна інструкція">
        <meta name="author" content="Monobank Receipt Generator">
        <meta name="robots" content="index, follow">
        <link rel="canonical" href="{{ url()->current() }}">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="Генератор чеків Монобанк | Створити платіжну квитанцію PDF">
        <meta property="og:description" content="Безкоштовний онлайн генератор чеків та квитанцій Monobank. Створюйте PDF чеки швидко та зручно.">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta property="twitter:title" content="Генератор чеків Монобанк | Створити платіжну квитанцію PDF">
        <meta property="twitter:description" content="Безкоштовний онлайн генератор чеків та квитанцій Monobank. Створюйте PDF чеки швидко та зручно.">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Structured Data -->
        <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "WebApplication",
            "name": "Генератор чеків Monobank",
            "description": "Безкоштовний онлайн генератор чеків та квитанцій Monobank. Створюйте платіжні інструкції та PDF чеки швидко та зручно.",
            "url": "{{ url()->current() }}",
            "applicationCategory": "FinanceApplication",
            "operatingSystem": "Any",
            "offers": {
                "@@type": "Offer",
                "price": "0",
                "priceCurrency": "UAH"
            },
            "featureList": [
                "Генерація чеків Monobank",
                "Створення платіжних квитанцій",
                "Завантаження PDF чеків",
                "Безкоштовне використання",
                "Миттєве створення документів"
            ],
            "inLanguage": "uk-UA"
        }
        </script>

        <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "BreadcrumbList",
            "itemListElement": [{
                "@@type": "ListItem",
                "position": 1,
                "name": "Головна",
                "item": "{{ url('/') }}"
            }]
        }
        </script>

        <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "FAQPage",
            "mainEntity": [{
                "@@type": "Question",
                "name": "Як згенерувати чек Monobank онлайн?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Для генерації чеку Monobank заповніть форму з даними платника, отримувача та деталями транзакції. Після заповнення натисніть кнопку створення і отримайте готовий PDF чек."
                }
            }, {
                "@@type": "Question",
                "name": "Чи безкоштовний генератор чеків Монобанк?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Так, наш онлайн генератор чеків та платіжних квитанцій Monobank повністю безкоштовний і не вимагає реєстрації."
                }
            }, {
                "@@type": "Question",
                "name": "В якому форматі можна завантажити чек?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Згенеровані чеки Monobank доступні для завантаження у форматі PDF, який зручний для друку та зберігання."
                }
            }]
        }
        </script>
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @endauth

                    @guest
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endguest
                </nav>
            @endif
        </header>
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main style="max-width: 1000px; margin: 0 auto; width: 100%;">
                <div id="main-form-container" style="background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%); padding: 50px; box-shadow: 0 10px 40px rgba(0,0,0,0.08), 0 2px 12px rgba(0,0,0,0.04); border-radius: 16px; border: 1px solid rgba(0,0,0,0.05); transition: all 0.3s ease;">
                    <div style="margin-bottom: 35px; padding: 20px; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 12px; border: 2px solid #0066cc; position: relative; box-shadow: 0 2px 8px rgba(0, 102, 204, 0.1);">
                        <div style="position: absolute; top: 0; left: 0; width: 80px; height: 5px; background: linear-gradient(90deg, #0066cc, #0052a3); border-radius: 12px 0 0 0;"></div>
                        <div style="font-size: 20px; font-weight: 700; color: #1a1a1a; line-height: 1.6; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 8px;">
                            Платіжна інструкція
                        </div>
                        <div style="display: flex; align-items: center; gap: 12px; flex-wrap: wrap;">
                            <div style="display: flex; align-items: center; gap: 8px;">
                                <span style="font-size: 18px; font-weight: 700; color: #2c3e50;">№</span>
                                <span id="payment-uuid" style="font-family: 'Courier New', monospace; font-size: 20px; font-weight: 700; color: #0066cc; background: #ffffff; padding: 8px 16px; border-radius: 8px; border: 2px solid #0066cc; box-shadow: 0 2px 4px rgba(0, 102, 204, 0.15); letter-spacing: 1px;">................</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 8px;">
                                <span style="font-size: 18px; font-weight: 700; color: #2c3e50;">від</span>
                                <span id="payment-date" style="font-size: 20px; color: #1a1a1a; font-weight: 700; background: #ffffff; padding: 8px 16px; border-radius: 8px; border: 2px solid #dee2e6;">{{ now()->format('d.m.Y') }}</span>
                            </div>
                        </div>
                    </div>

                    <h1 style="font-size: 32px; font-weight: 700; margin-bottom: 12px; color: #1a1a1a; letter-spacing: -0.5px;">Генератор чеків Monobank - Створити платіжну квитанцію онлайн</h1>

                    <div style="background: linear-gradient(135deg, #e3f2fd 0%, #f1f8ff 100%); padding: 20px 24px; border-radius: 12px; margin-bottom: 28px; border-left: 4px solid #0066cc;">
                        <h2 style="font-size: 18px; font-weight: 600; color: #1a1a1a; margin-bottom: 10px;">🧾 Безкоштовний генератор чеків та квитанцій Монобанк</h2>
                        <p style="color: #2c3e50; font-size: 15px; line-height: 1.7; margin-bottom: 8px;">
                            Наш онлайн сервіс дозволяє <strong>згенерувати платіжний чек Monobank</strong> та <strong>створити PDF квитанцію</strong> за лічені секунди. Ви можете безкоштовно створити платіжну інструкцію з усіма необхідними реквізитами для банківських переказів.
                        </p>
                        <p style="color: #2c3e50; font-size: 15px; line-height: 1.7; margin: 0;">
                            ✓ Миттєве створення чеків • ✓ Завантаження в PDF форматі • ✓ Професійне оформлення • ✓ Всі банківські реквізити
                        </p>
                    </div>

                    <p style="color: #6c757d; font-size: 16px; margin-bottom: 32px; line-height: 1.6;">Заповніть форму нижче для створення нової платіжної інструкції Монобанк. Всі поля, відмічені зірочкою (*), є обов'язковими.</p>

                    @if (session('success'))
                        <div class="success-message" style="background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%); border: 1px solid #28a745; border-left: 4px solid #28a745; padding: 20px; margin-bottom: 24px; border-radius: 8px; color: #155724; box-shadow: 0 4px 12px rgba(40, 167, 69, 0.15); animation: slideIn 0.4s ease-out;">
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 10px;">
                                <svg style="width: 24px; height: 24px; flex-shrink: 0;" fill="none" stroke="#28a745" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span style="font-weight: 600; font-size: 16px;">{{ session('success') }}</span>
                            </div>
                            @if (session('check'))
                                <div style="margin-top: 12px; padding-top: 12px; border-top: 1px solid rgba(40, 167, 69, 0.2); display: flex; gap: 16px;">
                                    <a href="{{ route('public.check', session('check')->string_id) }}" class="btn-link" style="color: #0066cc; text-decoration: none; font-weight: 500; display: inline-flex; align-items: center; gap: 6px; transition: all 0.2s;">
                                        <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                        Переглянути чек
                                    </a>
                                    <a href="{{ route('pdf.receipt', session('check')->pdf_uuid) }}" class="btn-link" style="color: #0066cc; text-decoration: none; font-weight: 500; display: inline-flex; align-items: center; gap: 6px; transition: all 0.2s;">
                                        <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                        Завантажити PDF
                                    </a>
                                </div>
                            @endif
                        </div>
                    @endif

                    <form action="{{ route('check.store') }}" method="POST" id="payment-form" style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif; font-size: 15px;">
                        @csrf

                        <div class="form-section" style="margin-bottom: 40px; background: white; padding: 28px; border-radius: 12px; border: 1px solid #e8eaed; box-shadow: 0 2px 8px rgba(0,0,0,0.03); transition: all 0.3s ease;">
                            <h2 style="font-size: 20px; font-weight: 600; margin-bottom: 20px; color: #1a1a1a; display: flex; align-items: center; gap: 10px;">
                                <span style="width: 32px; height: 32px; background: linear-gradient(135deg, #0066cc, #0052a3); color: white; border-radius: 8px; display: inline-flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 700;">1</span>
                                Платник
                            </h2>

                            <div class="form-group" style="margin-bottom: 20px;">
                                <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #2c3e50; font-size: 14px;">Ім'я платника <span style="color: #dc3545;">*</span></label>
                                <div class="input-wrapper" style="position: relative;">
                                    <input type="text" name="sender" value="{{ old('sender', 'володимир путін') }}" required
                                        class="form-input" style="width: 100%; padding: 12px 16px; border: 2px solid #e1e4e8; border-radius: 8px; font-size: 15px; transition: all 0.3s ease; background: #fafbfc;"
                                        onfocus="this.style.borderColor='#0066cc'; this.style.boxShadow='0 0 0 3px rgba(0,102,204,0.1)'; this.style.background='#ffffff';"
                                        onblur="this.style.borderColor='#e1e4e8'; this.style.boxShadow='none'; this.style.background='#fafbfc';">
                                    @error('sender')
                                        <div class="error-message" style="color: #dc3545; font-size: 13px; margin-top: 6px; display: flex; align-items: center; gap: 6px;">
                                            <svg style="width: 14px; height: 14px; flex-shrink: 0;" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group" style="margin-bottom: 20px;">
                                <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #2c3e50; font-size: 14px;">Банк</label>
                                <div class="input-wrapper" style="position: relative;">
                                    <input type="text" name="sender_bankname" value="{{ old('sender_bankname', 'АТ "УНІВЕРСАЛ БАНК"') }}"
                                        class="form-input" style="width: 100%; padding: 12px 16px; border: 2px solid #e1e4e8; border-radius: 8px; font-size: 15px; transition: all 0.3s ease; background: #fafbfc;"
                                        onfocus="this.style.borderColor='#0066cc'; this.style.boxShadow='0 0 0 3px rgba(0,102,204,0.1)'; this.style.background='#ffffff';"
                                        onblur="this.style.borderColor='#e1e4e8'; this.style.boxShadow='none'; this.style.background='#fafbfc';">
                                    @error('sender_bankname')
                                        <div class="error-message" style="color: #dc3545; font-size: 13px; margin-top: 6px; display: flex; align-items: center; gap: 6px;">
                                            <svg style="width: 14px; height: 14px; flex-shrink: 0;" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group" style="margin-bottom: 20px;">
                                <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #2c3e50; font-size: 14px;">Код</label>
                                <div class="input-wrapper" style="position: relative;">
                                    <input type="text" name="sender_taxid" value="{{ old('sender_taxid', '0000000000') }}"
                                        class="form-input" style="width: 100%; padding: 12px 16px; border: 2px solid #e1e4e8; border-radius: 8px; font-size: 15px; transition: all 0.3s ease; background: #fafbfc; font-family: 'Courier New', monospace;"
                                        onfocus="this.style.borderColor='#0066cc'; this.style.boxShadow='0 0 0 3px rgba(0,102,204,0.1)'; this.style.background='#ffffff';"
                                        onblur="this.style.borderColor='#e1e4e8'; this.style.boxShadow='none'; this.style.background='#fafbfc';">
                                    @error('sender_taxid')
                                        <div class="error-message" style="color: #dc3545; font-size: 13px; margin-top: 6px; display: flex; align-items: center; gap: 6px;">
                                            <svg style="width: 14px; height: 14px; flex-shrink: 0;" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group" style="margin-bottom: 0;">
                                <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #2c3e50; font-size: 14px;">Номер рахунку</label>
                                <div class="input-wrapper" style="position: relative;">
                                    <input type="text" name="sender_account" value="{{ old('sender_account', 'UA217544505502639508336219228') }}"
                                        class="form-input" style="width: 100%; padding: 12px 16px; border: 2px solid #e1e4e8; border-radius: 8px; font-size: 15px; transition: all 0.3s ease; background: #fafbfc; font-family: 'Courier New', monospace;"
                                        onfocus="this.style.borderColor='#0066cc'; this.style.boxShadow='0 0 0 3px rgba(0,102,204,0.1)'; this.style.background='#ffffff';"
                                        onblur="this.style.borderColor='#e1e4e8'; this.style.boxShadow='none'; this.style.background='#fafbfc';">
                                    @error('sender_account')
                                        <div class="error-message" style="color: #dc3545; font-size: 13px; margin-top: 6px; display: flex; align-items: center; gap: 6px;">
                                            <svg style="width: 14px; height: 14px; flex-shrink: 0;" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-section" style="margin-bottom: 40px; background: white; padding: 28px; border-radius: 12px; border: 1px solid #e8eaed; box-shadow: 0 2px 8px rgba(0,0,0,0.03); transition: all 0.3s ease;">
                            <h2 style="font-size: 20px; font-weight: 600; margin-bottom: 20px; color: #1a1a1a; display: flex; align-items: center; gap: 10px;">
                                <span style="width: 32px; height: 32px; background: linear-gradient(135deg, #28a745, #20c997); color: white; border-radius: 8px; display: inline-flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 700;">2</span>
                                Отримувач
                            </h2>

                            <div class="form-group" style="margin-bottom: 20px;">
                                <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #2c3e50; font-size: 14px;">Назва <span style="color: #dc3545;">*</span></label>
                                <div class="input-wrapper" style="position: relative;">
                                    <input type="text" name="recipient" value="{{ old('recipient', 'Володимир Зеленський') }}" required
                                        class="form-input" style="width: 100%; padding: 12px 16px; border: 2px solid #e1e4e8; border-radius: 8px; font-size: 15px; transition: all 0.3s ease; background: #fafbfc;"
                                        onfocus="this.style.borderColor='#28a745'; this.style.boxShadow='0 0 0 3px rgba(40,167,69,0.1)'; this.style.background='#ffffff';"
                                        onblur="this.style.borderColor='#e1e4e8'; this.style.boxShadow='none'; this.style.background='#fafbfc';">
                                    @error('recipient')
                                        <div class="error-message" style="color: #dc3545; font-size: 13px; margin-top: 6px; display: flex; align-items: center; gap: 6px;">
                                            <svg style="width: 14px; height: 14px; flex-shrink: 0;" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group" style="margin-bottom: 20px;">
                                <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #2c3e50; font-size: 14px;">Код</label>
                                <div class="input-wrapper" style="position: relative;">
                                    <input type="text" name="recipient_taxid" value="{{ old('recipient_taxid', '2142454791') }}"
                                        class="form-input" style="width: 100%; padding: 12px 16px; border: 2px solid #e1e4e8; border-radius: 8px; font-size: 15px; transition: all 0.3s ease; background: #fafbfc; font-family: 'Courier New', monospace;"
                                        onfocus="this.style.borderColor='#28a745'; this.style.boxShadow='0 0 0 3px rgba(40,167,69,0.1)'; this.style.background='#ffffff';"
                                        onblur="this.style.borderColor='#e1e4e8'; this.style.boxShadow='none'; this.style.background='#fafbfc';">
                                    @error('recipient_taxid')
                                        <div class="error-message" style="color: #dc3545; font-size: 13px; margin-top: 6px; display: flex; align-items: center; gap: 6px;">
                                            <svg style="width: 14px; height: 14px; flex-shrink: 0;" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group" style="margin-bottom: 20px;">
                                <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #2c3e50; font-size: 14px;">Номер рахунку</label>
                                <div class="input-wrapper" style="position: relative;">
                                    <input type="text" name="recipient_account" value="{{ old('recipient_account', 'UA12346856708289109112368825') }}"
                                        class="form-input" style="width: 100%; padding: 12px 16px; border: 2px solid #e1e4e8; border-radius: 8px; font-size: 15px; transition: all 0.3s ease; background: #fafbfc; font-family: 'Courier New', monospace;"
                                        onfocus="this.style.borderColor='#28a745'; this.style.boxShadow='0 0 0 3px rgba(40,167,69,0.1)'; this.style.background='#ffffff';"
                                        onblur="this.style.borderColor='#e1e4e8'; this.style.boxShadow='none'; this.style.background='#fafbfc';">
                                    @error('recipient_account')
                                        <div class="error-message" style="color: #dc3545; font-size: 13px; margin-top: 6px; display: flex; align-items: center; gap: 6px;">
                                            <svg style="width: 14px; height: 14px; flex-shrink: 0;" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group" style="margin-bottom: 0;">
                                <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #2c3e50; font-size: 14px;">Банк</label>
                                <div class="input-wrapper" style="position: relative;">
                                    <input type="text" name="recipient_bankname" value="{{ old('recipient_bankname', 'АТ "УНІВЕРСАЛ БАНК"') }}"
                                        class="form-input" style="width: 100%; padding: 12px 16px; border: 2px solid #e1e4e8; border-radius: 8px; font-size: 15px; transition: all 0.3s ease; background: #fafbfc;"
                                        onfocus="this.style.borderColor='#28a745'; this.style.boxShadow='0 0 0 3px rgba(40,167,69,0.1)'; this.style.background='#ffffff';"
                                        onblur="this.style.borderColor='#e1e4e8'; this.style.boxShadow='none'; this.style.background='#fafbfc';">
                                    @error('recipient_bankname')
                                        <div class="error-message" style="color: #dc3545; font-size: 13px; margin-top: 6px; display: flex; align-items: center; gap: 6px;">
                                            <svg style="width: 14px; height: 14px; flex-shrink: 0;" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-section" style="margin-bottom: 40px; background: white; padding: 28px; border-radius: 12px; border: 1px solid #e8eaed; box-shadow: 0 2px 8px rgba(0,0,0,0.03); transition: all 0.3s ease;">
                            <h2 style="font-size: 20px; font-weight: 600; margin-bottom: 20px; color: #1a1a1a; display: flex; align-items: center; gap: 10px;">
                                <span style="width: 32px; height: 32px; background: linear-gradient(135deg, #ffc107, #ff9800); color: white; border-radius: 8px; display: inline-flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 700;">3</span>
                                Деталі транзакції
                            </h2>

                            <div class="form-group" style="margin-bottom: 20px;">
                                <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #2c3e50; font-size: 14px;">Сума (грн) <span style="color: #dc3545;">*</span></label>
                                <div class="input-wrapper" style="position: relative;">
                                    <div style="position: relative;">
                                        <span style="position: absolute; left: 16px; top: 50%; transform: translateY(-50%); color: #6c757d; font-weight: 600; font-size: 16px; pointer-events: none;">₴</span>
                                        <input type="number" id="amount" name="amount" value="{{ old('amount', '1300') }}" required min="0" step="0.01"
                                            class="form-input" style="width: 100%; padding: 12px 16px 12px 36px; border: 2px solid #e1e4e8; border-radius: 8px; font-size: 16px; font-weight: 600; transition: all 0.3s ease; background: #fafbfc;"
                                            onfocus="this.style.borderColor='#ffc107'; this.style.boxShadow='0 0 0 3px rgba(255,193,7,0.1)'; this.style.background='#ffffff';"
                                            onblur="this.style.borderColor='#e1e4e8'; this.style.boxShadow='none'; this.style.background='#fafbfc';">
                                    </div>
                                    @error('amount')
                                        <div class="error-message" style="color: #dc3545; font-size: 13px; margin-top: 6px; display: flex; align-items: center; gap: 6px;">
                                            <svg style="width: 14px; height: 14px; flex-shrink: 0;" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <div id="amount-words" style="margin-top: 10px; padding: 10px 12px; background: rgba(255,193,7,0.08); border-radius: 6px; font-size: 14px; color: #856404; font-style: italic; border-left: 3px solid #ffc107;"></div>
                                </div>
                            </div>

                            <div class="form-group" style="margin-bottom: 20px;">
                                <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #2c3e50; font-size: 14px;">Комісія (грн)</label>
                                <div class="input-wrapper" style="position: relative;">
                                    <input type="text" name="commission" value="0,0" readonly
                                        class="form-input" style="width: 100%; padding: 12px 16px; border: 2px solid #e1e4e8; border-radius: 8px; font-size: 15px; background: #f5f7f9; color: #6c757d; cursor: not-allowed;">
                                </div>
                            </div>

                            <div class="form-group" style="margin-bottom: 20px;">
                                <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #2c3e50; font-size: 14px;">Дата і час складання <span style="color: #dc3545;">*</span></label>
                                <div class="input-wrapper" style="position: relative;">
                                    <input type="datetime-local" name="date" value="{{ old('date', now()->format('Y-m-d\TH:i')) }}" required
                                        class="form-input" style="width: 100%; padding: 12px 16px; border: 2px solid #e1e4e8; border-radius: 8px; font-size: 15px; transition: all 0.3s ease; background: #fafbfc;"
                                        onfocus="this.style.borderColor='#ffc107'; this.style.boxShadow='0 0 0 3px rgba(255,193,7,0.1)'; this.style.background='#ffffff';"
                                        onblur="this.style.borderColor='#e1e4e8'; this.style.boxShadow='none'; this.style.background='#fafbfc';">
                                    @error('date')
                                        <div class="error-message" style="color: #dc3545; font-size: 13px; margin-top: 6px; display: flex; align-items: center; gap: 6px;">
                                            <svg style="width: 14px; height: 14px; flex-shrink: 0;" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group" style="margin-bottom: 20px;">
                                <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #2c3e50; font-size: 14px;">Дата виконання</label>
                                <div class="input-wrapper" style="position: relative;">
                                    <input type="date" name="execution_date" value="{{ old('execution_date', now()->format('Y-m-d')) }}"
                                        class="form-input" style="width: 100%; padding: 12px 16px; border: 2px solid #e1e4e8; border-radius: 8px; font-size: 15px; transition: all 0.3s ease; background: #fafbfc;"
                                        onfocus="this.style.borderColor='#ffc107'; this.style.boxShadow='0 0 0 3px rgba(255,193,7,0.1)'; this.style.background='#ffffff';"
                                        onblur="this.style.borderColor='#e1e4e8'; this.style.boxShadow='none'; this.style.background='#fafbfc';">
                                    @error('execution_date')
                                        <div class="error-message" style="color: #dc3545; font-size: 13px; margin-top: 6px; display: flex; align-items: center; gap: 6px;">
                                            <svg style="width: 14px; height: 14px; flex-shrink: 0;" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group" style="margin-bottom: 0;">
                                <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #2c3e50; font-size: 14px;">Призначення платежу <span style="color: #dc3545;">*</span></label>
                                <div class="input-wrapper" style="position: relative;">
                                    <textarea name="description" required rows="4"
                                        class="form-input" style="width: 100%; padding: 12px 16px; border: 2px solid #e1e4e8; border-radius: 8px; font-size: 15px; transition: all 0.3s ease; resize: vertical; background: #fafbfc; line-height: 1.6;"
                                        onfocus="this.style.borderColor='#ffc107'; this.style.boxShadow='0 0 0 3px rgba(255,193,7,0.1)'; this.style.background='#ffffff';"
                                        onblur="this.style.borderColor='#e1e4e8'; this.style.boxShadow='none'; this.style.background='#fafbfc';">{{ old('description', 'Репарації') }}</textarea>
                                    @error('description')
                                        <div class="error-message" style="color: #dc3545; font-size: 13px; margin-top: 6px; display: flex; align-items: center; gap: 6px;">
                                            <svg style="width: 14px; height: 14px; flex-shrink: 0;" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div style="margin-top: 40px; padding-top: 32px; border-top: 2px solid #e8eaed;">
                            <button type="submit" id="submit-btn"
                                style="background: linear-gradient(135deg, #0066cc 0%, #0052a3 100%); color: #fff; padding: 16px 40px; border: none; border-radius: 10px; font-size: 17px; font-weight: 700; cursor: pointer; box-shadow: 0 4px 14px rgba(0, 102, 204, 0.25); transition: all 0.3s ease; display: inline-flex; align-items: center; gap: 10px; letter-spacing: 0.3px;"
                                onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 20px rgba(0, 102, 204, 0.35)';"
                                onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 14px rgba(0, 102, 204, 0.25)';"
                                onmousedown="this.style.transform='translateY(0px)';"
                                onmouseup="this.style.transform='translateY(-2px)';">
                                <svg style="width: 20px; height: 20px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Створити платіжну інструкцію
                            </button>
                            <p style="margin-top: 16px; color: #6c757d; font-size: 14px; line-height: 1.6;">
                                <svg style="width: 16px; height: 16px; display: inline-block; vertical-align: middle; margin-right: 6px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Після створення ви зможете переглянути чек та завантажити його у форматі PDF.
                            </p>
                        </div>
                    </form>

                    <!-- SEO Content Section -->
                    <div style="margin-top: 50px; padding-top: 40px; border-top: 2px solid #e8eaed;">
                        <div style="margin-bottom: 32px;">
                            <h2 style="font-size: 24px; font-weight: 700; color: #1a1a1a; margin-bottom: 16px;">Про генератор чеків та квитанцій Monobank</h2>
                            <p style="color: #495057; font-size: 15px; line-height: 1.8; margin-bottom: 12px;">
                                Наш <strong>онлайн генератор чеків Монобанк</strong> - це зручний інструмент для створення платіжних квитанцій та чеків у форматі PDF. Ви можете швидко <strong>згенерувати чек Monobank</strong> з усіма необхідними банківськими реквізитами, включаючи дані платника, отримувача, суму платежу та призначення операції.
                            </p>
                            <p style="color: #495057; font-size: 15px; line-height: 1.8; margin-bottom: 12px;">
                                Сервіс дозволяє <strong>створити платіжну інструкцію онлайн</strong> безкоштовно та миттєво завантажити готовий документ у PDF форматі. Всі згенеровані чеки мають професійний вигляд та містять всю необхідну інформацію для підтвердження банківських операцій.
                            </p>
                        </div>

                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin-bottom: 32px;">
                            <div style="background: #f8f9fa; padding: 20px; border-radius: 10px; border-left: 3px solid #0066cc;">
                                <h3 style="font-size: 16px; font-weight: 600; color: #1a1a1a; margin-bottom: 10px;">📄 Формати документів</h3>
                                <p style="color: #6c757d; font-size: 14px; line-height: 1.6; margin: 0;">
                                    Генеруйте чеки у PDF форматі для зручного зберігання, друку та надсилання. Платіжні квитанції Монобанк доступні для перегляду онлайн.
                                </p>
                            </div>

                            <div style="background: #f8f9fa; padding: 20px; border-radius: 10px; border-left: 3px solid #28a745;">
                                <h3 style="font-size: 16px; font-weight: 600; color: #1a1a1a; margin-bottom: 10px;">⚡ Швидке створення</h3>
                                <p style="color: #6c757d; font-size: 14px; line-height: 1.6; margin: 0;">
                                    Миттєве генерування платіжних інструкцій за лічені секунди. Просто заповніть форму і отримайте готовий чек Monobank.
                                </p>
                            </div>

                            <div style="background: #f8f9fa; padding: 20px; border-radius: 10px; border-left: 3px solid #ffc107;">
                                <h3 style="font-size: 16px; font-weight: 600; color: #1a1a1a; margin-bottom: 10px;">🔒 Безпека даних</h3>
                                <p style="color: #6c757d; font-size: 14px; line-height: 1.6; margin: 0;">
                                    Всі дані обробляються конфіденційно. Ваші банківські реквізити захищені під час створення квитанцій та чеків.
                                </p>
                            </div>
                        </div>

                        <div style="margin-bottom: 32px;">
                            <h2 style="font-size: 20px; font-weight: 700; color: #1a1a1a; margin-bottom: 16px;">Як згенерувати чек Монобанк?</h2>
                            <ol style="color: #495057; font-size: 15px; line-height: 1.8; padding-left: 20px;">
                                <li style="margin-bottom: 8px;"><strong>Заповніть дані платника:</strong> вкажіть ім'я, банк, код та номер рахунку відправника коштів</li>
                                <li style="margin-bottom: 8px;"><strong>Додайте інформацію про отримувача:</strong> назва, банківські реквізити одержувача платежу</li>
                                <li style="margin-bottom: 8px;"><strong>Вкажіть деталі транзакції:</strong> сума переказу, дата операції та призначення платежу</li>
                                <li style="margin-bottom: 8px;"><strong>Створіть квитанцію:</strong> натисніть кнопку генерації та завантажте готовий PDF чек Monobank</li>
                            </ol>
                        </div>

                        <div style="background: linear-gradient(135deg, #fff3cd 0%, #fff8e1 100%); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #ffc107; margin-bottom: 20px;">
                            <h3 style="font-size: 17px; font-weight: 600; color: #1a1a1a; margin-bottom: 10px;">💡 Коли використовувати генератор чеків Monobank?</h3>
                            <p style="color: #495057; font-size: 14px; line-height: 1.7; margin: 0;">
                                Наш сервіс ідеально підходить для створення платіжних документів, квитанцій про перекази, підтвердження оплати послуг,
                                оформлення бухгалтерської документації та інших випадків, коли потрібен офіційний вигляд банківського чеку або платіжної інструкції.
                            </p>
                        </div>

                        <!-- Hidden SEO text -->
                        <div style="font-size: 13px; color: #868e96; line-height: 1.6; margin-top: 24px; opacity: 0.7;">
                            <p style="margin-bottom: 8px;">
                                <strong>Ключові слова:</strong> генератор чеків монобанк, створити чек monobank, платіжна квитанція монобанк онлайн,
                                згенерувати pdf чек, квитанція про переказ monobank, платіжна інструкція монобанк, чек монобанку завантажити,
                                безкоштовний генератор квитанцій, онлайн чеки монобанк, створення платіжних документів, генератор банківських чеків,
                                monobank receipt generator ukraine, платіжка монобанк, квитанція про оплату monobank
                            </p>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <style>
            @@keyframes slideIn {
                from {
                    opacity: 0;
                    transform: translateY(-10px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @@keyframes fadeIn {
                from {
                    opacity: 0;
                }
                to {
                    opacity: 1;
                }
            }

            @@keyframes pulse {
                0%, 100% {
                    opacity: 1;
                }
                50% {
                    opacity: 0.7;
                }
            }

            .form-section:hover {
                box-shadow: 0 4px 16px rgba(0,0,0,0.06) !important;
                transform: translateY(-2px);
            }

            #main-form-container:hover {
                box-shadow: 0 12px 45px rgba(0,0,0,0.10), 0 3px 15px rgba(0,0,0,0.05) !important;
            }

            .btn-link:hover {
                color: #0052a3 !important;
                text-decoration: underline !important;
            }

            #submit-btn:active {
                transform: scale(0.98) !important;
            }

            .form-input:focus {
                outline: none;
            }

            /* Smooth scroll */
            html {
                scroll-behavior: smooth;
            }

            /* Better selection color */
            ::selection {
                background: rgba(0, 102, 204, 0.2);
                color: #1a1a1a;
            }

            /* Loading animation for button */
            @@keyframes spin {
                to {
                    transform: rotate(360deg);
                }
            }

            .loading {
                pointer-events: none;
                opacity: 0.7;
            }

            .loading svg {
                animation: spin 1s linear infinite;
            }

            /* Responsive Design */
            @media (max-width: 768px) {
                #main-form-container {
                    padding: 30px 20px !important;
                    border-radius: 12px !important;
                }

                .form-section {
                    padding: 20px !important;
                }

                h1 {
                    font-size: 26px !important;
                }

                h2 {
                    font-size: 18px !important;
                }

                .form-input {
                    font-size: 16px !important; /* Prevents zoom on iOS */
                }

                #submit-btn {
                    width: 100%;
                    justify-content: center;
                    padding: 14px 20px !important;
                }

                #payment-uuid {
                    font-size: 16px !important;
                    padding: 6px 12px !important;
                    letter-spacing: 0.5px !important;
                }

                #payment-date {
                    font-size: 16px !important;
                    padding: 6px 12px !important;
                }
            }

            @media (max-width: 480px) {
                #main-form-container {
                    padding: 20px 16px !important;
                }

                h1 {
                    font-size: 22px !important;
                }

                .form-section h2 span {
                    width: 28px !important;
                    height: 28px !important;
                    font-size: 14px !important;
                }

                /* SEO section responsive */
                ol, ul {
                    padding-left: 16px !important;
                }
            }

            /* Print styles */
            @media print {
                #main-form-container {
                    box-shadow: none !important;
                }

                #submit-btn {
                    display: none !important;
                }
            }

            /* Ripple effect animation */
            @keyframes ripple {
                to {
                    transform: scale(2);
                    opacity: 0;
                }
            }
        </style>

        <div style="display: none;">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
                <div class="bg-[#fff2f2] dark:bg-[#1D0002] relative lg:-ml-px -mb-px lg:mb-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg aspect-[335/376] lg:aspect-auto w-full lg:w-[438px] shrink-0 overflow-hidden">
                    {{-- Laravel Logo --}}
                    <svg class="w-full text-[#F53003] dark:text-[#F61500] transition-all translate-y-0 opacity-100 max-w-none duration-750 starting:opacity-0 starting:translate-y-6" viewBox="0 0 438 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.2036 -3H0V102.197H49.5189V86.7187H17.2036V-3Z" fill="currentColor" />
                        <path d="M110.256 41.6337C108.061 38.1275 104.945 35.3731 100.905 33.3681C96.8667 31.3647 92.8016 30.3618 88.7131 30.3618C83.4247 30.3618 78.5885 31.3389 74.201 33.2923C69.8111 35.2456 66.0474 37.928 62.9059 41.3333C59.7643 44.7401 57.3198 48.6726 55.5754 53.1293C53.8287 57.589 52.9572 62.274 52.9572 67.1813C52.9572 72.1925 53.8287 76.8995 55.5754 81.3069C57.3191 85.7173 59.7636 89.6241 62.9059 93.0293C66.0474 96.4361 69.8119 99.1155 74.201 101.069C78.5885 103.022 83.4247 103.999 88.7131 103.999C92.8016 103.999 96.8667 102.997 100.905 100.994C104.945 98.9911 108.061 96.2359 110.256 92.7282V102.195H126.563V32.1642H110.256V41.6337ZM108.76 75.7472C107.762 78.4531 106.366 80.8078 104.572 82.8112C102.776 84.8161 100.606 86.4183 98.0637 87.6206C95.5202 88.823 92.7004 89.4238 89.6103 89.4238C86.5178 89.4238 83.7252 88.823 81.2324 87.6206C78.7388 86.4183 76.5949 84.8161 74.7998 82.8112C73.004 80.8078 71.6319 78.4531 70.6856 75.7472C69.7356 73.0421 69.2644 70.1868 69.2644 67.1821C69.2644 64.1758 69.7356 61.3205 70.6856 58.6154C71.6319 55.9102 73.004 53.5571 74.7998 51.5522C76.5949 49.5495 78.738 47.9451 81.2324 46.7427C83.7252 45.5404 86.5178 44.9396 89.6103 44.9396C92.7012 44.9396 95.5202 45.5404 98.0637 46.7427C100.606 47.9451 102.776 49.5487 104.572 51.5522C106.367 53.5571 107.762 55.9102 108.76 58.6154C109.756 61.3205 110.256 64.1758 110.256 67.1821C110.256 70.1868 109.756 73.0421 108.76 75.7472Z" fill="currentColor" />
                        <path d="M242.805 41.6337C240.611 38.1275 237.494 35.3731 233.455 33.3681C229.416 31.3647 225.351 30.3618 221.262 30.3618C215.974 30.3618 211.138 31.3389 206.75 33.2923C202.36 35.2456 198.597 37.928 195.455 41.3333C192.314 44.7401 189.869 48.6726 188.125 53.1293C186.378 57.589 185.507 62.274 185.507 67.1813C185.507 72.1925 186.378 76.8995 188.125 81.3069C189.868 85.7173 192.313 89.6241 195.455 93.0293C198.597 96.4361 202.361 99.1155 206.75 101.069C211.138 103.022 215.974 103.999 221.262 103.999C225.351 103.999 229.416 102.997 233.455 100.994C237.494 98.9911 240.611 96.2359 242.805 92.7282V102.195H259.112V32.1642H242.805V41.6337ZM241.31 75.7472C240.312 78.4531 238.916 80.8078 237.122 82.8112C235.326 84.8161 233.156 86.4183 230.614 87.6206C228.07 88.823 225.251 89.4238 222.16 89.4238C219.068 89.4238 216.275 88.823 213.782 87.6206C211.289 86.4183 209.145 84.8161 207.35 82.8112C205.554 80.8078 204.182 78.4531 203.236 75.7472C202.286 73.0421 201.814 70.1868 201.814 67.1821C201.814 64.1758 202.286 61.3205 203.236 58.6154C204.182 55.9102 205.554 53.5571 207.35 51.5522C209.145 49.5495 211.288 47.9451 213.782 46.7427C216.275 45.5404 219.068 44.9396 222.16 44.9396C225.251 44.9396 228.07 45.5404 230.614 46.7427C233.156 47.9451 235.326 49.5487 237.122 51.5522C238.917 53.5571 240.312 55.9102 241.31 58.6154C242.306 61.3205 242.806 64.1758 242.806 67.1821C242.805 70.1868 242.305 73.0421 241.31 75.7472Z" fill="currentColor" />
                        <path d="M438 -3H421.694V102.197H438V-3Z" fill="currentColor" />
                        <path d="M139.43 102.197H155.735V48.2834H183.712V32.1665H139.43V102.197Z" fill="currentColor" />
                        <path d="M324.49 32.1665L303.995 85.794L283.498 32.1665H266.983L293.748 102.197H314.242L341.006 32.1665H324.49Z" fill="currentColor" />
                        <path d="M376.571 30.3656C356.603 30.3656 340.797 46.8497 340.797 67.1828C340.797 89.6597 356.094 104 378.661 104C391.29 104 399.354 99.1488 409.206 88.5848L398.189 80.0226C398.183 80.031 389.874 90.9895 377.468 90.9895C363.048 90.9895 356.977 79.3111 356.977 73.269H411.075C413.917 50.1328 398.775 30.3656 376.571 30.3656ZM357.02 61.0967C357.145 59.7487 359.023 43.3761 376.442 43.3761C393.861 43.3761 395.978 59.7464 396.099 61.0967H357.02Z" fill="currentColor" />
                    </svg>

                    {{-- Light Mode 12 SVG --}}
                    <svg class="w-[448px] max-w-none relative -mt-[4.9rem] -ml-8 lg:ml-0 lg:-mt-[6.6rem] dark:hidden" viewBox="0 0 440 376" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" fill="black" />
                            <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" fill="black" />
                            <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" stroke="#1B1B18" stroke-width="1" />
                            <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" stroke="#1B1B18" stroke-width="1" />
                            <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" fill="#F8B803" />
                            <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" fill="#F8B803" />
                            <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" stroke="#1B1B18" stroke-width="1" />
                            <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" stroke="#1B1B18" stroke-width="1" />
                        </g>
                        <g style="mix-blend-mode: hard-light" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" fill="#F0ACB8" />
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" fill="#F0ACB8" />
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" stroke="#1B1B18" stroke-width="1" />
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" stroke="#1B1B18" stroke-width="1" />
                        </g>
                        <g style="mix-blend-mode: plus-darker" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M230.951 281.792L231.282 281.793C238.128 274.907 248.453 265.823 262.256 254.539C275.617 243.256 285.666 234.267 292.402 227.573C299.027 220.688 303.554 213.421 305.983 205.771C308.412 198.12 307.253 190.183 302.504 181.959C297.203 172.778 289.749 165.415 280.142 159.868C270.645 154.13 260.596 151.26 249.995 151.26C239.615 151.26 232.823 154.033 229.621 159.579C226.309 164.934 227.413 172.393 232.935 181.956L168.335 181.954C159.058 165.888 155.082 151.543 156.407 138.92C157.953 126.298 164.247 116.544 175.289 109.659C186.442 102.583 201.294 99.045 219.846 99.0457C239.281 99.0464 258.551 102.585 277.655 109.663C296.649 116.549 313.986 126.303 329.667 138.927C345.349 151.551 357.827 165.895 367.104 181.961C375.718 196.88 379.528 209.981 378.535 221.265C377.762 232.549 374.063 242.399 367.438 250.814C361.033 259.229 351.095 269.557 337.624 281.796L419.782 281.8L448.605 331.719L259.774 331.712L230.951 281.792Z" fill="#F3BEC7" />
                            <path d="M51.8063 152.402L28.9479 152.401L-0.0411453 102.195L85.7608 102.198L218.282 331.711L155.339 331.709L51.8063 152.402Z" fill="#F3BEC7" />
                            <path d="M230.951 281.792L231.282 281.793C238.128 274.907 248.453 265.823 262.256 254.539C275.617 243.256 285.666 234.267 292.402 227.573C299.027 220.688 303.554 213.421 305.983 205.771C308.412 198.12 307.253 190.183 302.504 181.959C297.203 172.778 289.749 165.415 280.142 159.868C270.645 154.13 260.596 151.26 249.995 151.26C239.615 151.26 232.823 154.033 229.621 159.579C226.309 164.934 227.413 172.393 232.935 181.956L168.335 181.954C159.058 165.888 155.082 151.543 156.407 138.92C157.953 126.298 164.247 116.544 175.289 109.659C186.442 102.583 201.294 99.045 219.846 99.0457C239.281 99.0464 258.551 102.585 277.655 109.663C296.649 116.549 313.986 126.303 329.667 138.927C345.349 151.551 357.827 165.895 367.104 181.961C375.718 196.88 379.528 209.981 378.535 221.265C377.762 232.549 374.063 242.399 367.438 250.814C361.033 259.229 351.095 269.557 337.624 281.796L419.782 281.8L448.605 331.719L259.774 331.712L230.951 281.792Z" stroke="#1B1B18" stroke-width="1" />
                            <path d="M51.8063 152.402L28.9479 152.401L-0.0411453 102.195L85.7608 102.198L218.282 331.711L155.339 331.709L51.8063 152.402Z" stroke="#1B1B18" stroke-width="1" />
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M188.467 355.363L188.798 355.363C195.644 348.478 205.969 339.393 219.772 328.11C233.133 316.826 243.181 307.837 249.917 301.144C253.696 297.217 256.792 293.166 259.205 288.991C261.024 285.845 262.455 282.628 263.499 279.341C265.928 271.691 264.768 263.753 260.02 255.529C254.719 246.349 247.265 238.985 237.657 233.438C228.16 227.7 218.111 224.831 207.51 224.83C197.13 224.83 190.339 227.603 187.137 233.149C183.824 238.504 184.929 245.963 190.45 255.527L125.851 255.524C116.574 239.458 112.598 225.114 113.923 212.491C114.615 206.836 116.261 201.756 118.859 197.253C122.061 191.704 126.709 187.03 132.805 183.229C143.958 176.153 158.81 172.615 177.362 172.616C196.797 172.617 216.067 176.156 235.171 183.233C254.164 190.119 271.502 199.874 287.183 212.497C302.864 225.121 315.343 239.466 324.62 255.532C333.233 270.45 337.044 283.551 336.05 294.835C335.46 303.459 333.16 311.245 329.151 318.194C327.915 320.337 326.515 322.4 324.953 324.384C318.549 332.799 308.611 343.127 295.139 355.367L377.297 355.37L406.121 405.289L217.29 405.282L188.467 355.363Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M9.32197 225.972L-13.5365 225.971L-42.5255 175.765L43.2765 175.768L175.798 405.282L112.854 405.279L9.32197 225.972Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M345.247 111.915C329.566 99.2919 312.229 89.5371 293.235 82.6512L235.167 183.228C254.161 190.114 271.498 199.869 287.179 212.492L345.247 111.915Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M382.686 154.964C373.41 138.898 360.931 124.553 345.25 111.93L287.182 212.506C302.863 225.13 315.342 239.475 324.618 255.541L382.686 154.964Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M293.243 82.6472C274.139 75.57 254.869 72.031 235.434 72.0303L177.366 172.607C196.801 172.608 216.071 176.147 235.175 183.224L293.243 82.6472Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M394.118 194.257C395.112 182.973 391.301 169.872 382.688 154.953L324.619 255.53C333.233 270.448 337.044 283.55 336.05 294.834L394.118 194.257Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M235.432 72.0311C216.88 72.0304 202.027 75.5681 190.875 82.6442L132.806 183.221C143.959 176.145 158.812 172.607 177.363 172.608L235.432 72.0311Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M265.59 124.25C276.191 124.251 286.24 127.12 295.737 132.858L237.669 233.435C228.172 227.697 218.123 224.828 207.522 224.827L265.59 124.25Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M295.719 132.859C305.326 138.406 312.78 145.77 318.081 154.95L260.013 255.527C254.712 246.347 247.258 238.983 237.651 233.436L295.719 132.859Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M387.218 217.608C391.227 210.66 393.527 202.874 394.117 194.25L336.049 294.827C335.459 303.451 333.159 311.237 329.15 318.185L387.218 217.608Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M245.211 132.577C248.413 127.03 255.204 124.257 265.584 124.258L207.516 224.835C197.136 224.834 190.345 227.607 187.143 233.154L245.211 132.577Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M318.094 154.945C322.842 163.17 324.002 171.107 321.573 178.757L263.505 279.334C265.934 271.684 264.774 263.746 260.026 255.522L318.094 154.945Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M176.925 96.6737C180.127 91.1249 184.776 86.4503 190.871 82.6499L132.803 183.227C126.708 187.027 122.059 191.702 118.857 197.25L176.925 96.6737Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M387.226 217.606C385.989 219.749 384.59 221.813 383.028 223.797L324.96 324.373C326.522 322.39 327.921 320.326 329.157 318.183L387.226 217.606Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M317.269 188.408C319.087 185.262 320.519 182.045 321.562 178.758L263.494 279.335C262.451 282.622 261.019 285.839 259.201 288.985L317.269 188.408Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M245.208 132.573C241.895 137.928 243 145.387 248.522 154.95L190.454 255.527C184.932 245.964 183.827 238.505 187.14 233.15L245.208 132.573Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M176.93 96.6719C174.331 101.175 172.686 106.255 171.993 111.91L113.925 212.487C114.618 206.831 116.263 201.752 118.862 197.249L176.93 96.6719Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M317.266 188.413C314.853 192.589 311.757 196.64 307.978 200.566L249.91 301.143C253.689 297.216 256.785 293.166 259.198 288.99L317.266 188.413Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M464.198 304.708L435.375 254.789L377.307 355.366L406.13 405.285L464.198 304.708Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M353.209 254.787C366.68 242.548 376.618 232.22 383.023 223.805L324.955 324.382C318.55 332.797 308.612 343.124 295.141 355.364L353.209 254.787Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M435.37 254.787L353.212 254.784L295.144 355.361L377.302 355.364L435.37 254.787Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M183.921 154.947L248.521 154.95L190.453 255.527L125.853 255.524L183.921 154.947Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M171.992 111.914C170.668 124.537 174.643 138.881 183.92 154.947L125.852 255.524C116.575 239.458 112.599 225.114 113.924 212.491L171.992 111.914Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M307.987 200.562C301.251 207.256 291.203 216.244 277.842 227.528L219.774 328.105C233.135 316.821 243.183 307.832 249.919 301.139L307.987 200.562Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M15.5469 75.1797L44.5359 125.386L-13.5321 225.963L-42.5212 175.756L15.5469 75.1797Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M277.836 227.536C264.033 238.82 253.708 247.904 246.862 254.789L188.794 355.366C195.64 348.481 205.965 339.397 219.768 328.113L277.836 227.536Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M275.358 304.706L464.189 304.713L406.12 405.29L217.29 405.283L275.358 304.706Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M44.5279 125.39L67.3864 125.39L9.31834 225.967L-13.5401 225.966L44.5279 125.39Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M101.341 75.1911L233.863 304.705L175.795 405.282L43.2733 175.768L101.341 75.1911ZM15.5431 75.19L-42.525 175.767L43.277 175.77L101.345 75.1932L15.5431 75.19Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M246.866 254.784L246.534 254.784L188.466 355.361L188.798 355.361L246.866 254.784Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M246.539 254.781L275.362 304.701L217.294 405.277L188.471 355.358L246.539 254.781Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M67.3906 125.391L170.923 304.698L112.855 405.275L9.32257 225.967L67.3906 125.391Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M170.921 304.699L233.865 304.701L175.797 405.278L112.853 405.276L170.921 304.699Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        </g>
                        <g style="mix-blend-mode: hard-light" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" fill="#F0ACB8" />
                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="round" />
                        </g>
                        <g style="mix-blend-mode: hard-light" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" fill="#F0ACB8" />
                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" stroke="#1B1B18" stroke-width="1" />
                        </g>
                    </svg>

                    {{-- Dark Mode 12 SVG --}}
                    <svg class="w-[448px] max-w-none relative -mt-[4.9rem] -ml-8 lg:ml-0 lg:-mt-[6.6rem] hidden dark:block" viewBox="0 0 440 376" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" fill="black"/>
                            <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" fill="black"/>
                            <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" fill="#391800"/>
                            <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" fill="#391800"/>
                            <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" fill="#733000"/>
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" fill="#733000"/>
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.726 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M188.467 355.363L188.798 355.363C195.644 348.478 205.969 339.393 219.772 328.11C233.133 316.826 243.181 307.837 249.917 301.144C253.696 297.217 256.792 293.166 259.205 288.991C261.024 285.845 262.455 282.628 263.499 279.341C265.928 271.691 264.768 263.753 260.02 255.529C254.719 246.349 247.265 238.985 237.657 233.438C228.16 227.7 218.111 224.831 207.51 224.83C197.13 224.83 190.339 227.603 187.137 233.149C183.824 238.504 184.929 245.963 190.45 255.527L125.851 255.524C116.574 239.458 112.598 225.114 113.923 212.491C114.615 206.836 116.261 201.756 118.859 197.253C122.061 191.704 126.709 187.03 132.805 183.229C143.958 176.153 158.81 172.615 177.362 172.616C196.797 172.617 216.067 176.156 235.171 183.233C254.164 190.119 271.502 199.874 287.183 212.497C302.864 225.121 315.343 239.466 324.62 255.532C333.233 270.45 337.044 283.551 336.05 294.835C335.46 303.459 333.16 311.245 329.151 318.194C327.915 320.337 326.515 322.4 324.953 324.384C318.549 332.799 308.611 343.127 295.139 355.367L377.297 355.37L406.121 405.289L217.29 405.282L188.467 355.363Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M9.32197 225.972L-13.5365 225.971L-42.5255 175.765L43.2765 175.768L175.798 405.282L112.854 405.279L9.32197 225.972Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M345.247 111.915C329.566 99.2919 312.229 89.5371 293.235 82.6512L235.167 183.228C254.161 190.114 271.498 199.869 287.179 212.492L345.247 111.915Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M382.686 154.964C373.41 138.898 360.931 124.553 345.25 111.93L287.182 212.506C302.863 225.13 315.342 239.475 324.618 255.541L382.686 154.964Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M293.243 82.6472C274.139 75.57 254.869 72.031 235.434 72.0303L177.366 172.607C196.801 172.608 216.071 176.147 235.175 183.224L293.243 82.6472Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M394.118 194.257C395.112 182.973 391.301 169.872 382.688 154.953L324.619 255.53C333.233 270.448 337.044 283.55 336.05 294.834L394.118 194.257Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M235.432 72.0311C216.88 72.0304 202.027 75.5681 190.875 82.6442L132.806 183.221C143.959 176.145 158.812 172.607 177.363 172.608L235.432 72.0311Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M265.59 124.25C276.191 124.251 286.24 127.12 295.737 132.858L237.669 233.435C228.172 227.697 218.123 224.828 207.522 224.827L265.59 124.25Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M295.719 132.859C305.326 138.406 312.78 145.77 318.081 154.95L260.013 255.527C254.712 246.347 247.258 238.983 237.651 233.436L295.719 132.859Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M387.218 217.608C391.227 210.66 393.527 202.874 394.117 194.25L336.049 294.827C335.459 303.451 333.159 311.237 329.15 318.185L387.218 217.608Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M245.211 132.577C248.413 127.03 255.204 124.257 265.584 124.258L207.516 224.835C197.136 224.834 190.345 227.607 187.143 233.154L245.211 132.577Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M318.094 154.945C322.842 163.17 324.002 171.107 321.573 178.757L263.505 279.334C265.934 271.684 264.774 263.746 260.026 255.522L318.094 154.945Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M176.925 96.6737C180.127 91.1249 184.776 86.4503 190.871 82.6499L132.803 183.227C126.708 187.027 122.059 191.702 118.857 197.25L176.925 96.6737Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M387.226 217.606C385.989 219.749 384.59 221.813 383.028 223.797L324.96 324.373C326.522 322.39 327.921 320.326 329.157 318.183L387.226 217.606Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M317.269 188.408C319.087 185.262 320.519 182.045 321.562 178.758L263.494 279.335C262.451 282.622 261.019 285.839 259.201 288.985L317.269 188.408Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M245.208 132.573C241.895 137.928 243 145.387 248.522 154.95L190.454 255.527C184.932 245.964 183.827 238.505 187.14 233.15L245.208 132.573Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M176.93 96.6719C174.331 101.175 172.686 106.255 171.993 111.91L113.925 212.487C114.618 206.831 116.263 201.752 118.862 197.249L176.93 96.6719Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M317.266 188.413C314.853 192.589 311.757 196.64 307.978 200.566L249.91 301.143C253.689 297.216 256.785 293.166 259.198 288.99L317.266 188.413Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M464.198 304.708L435.375 254.789L377.307 355.366L406.13 405.285L464.198 304.708Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M353.209 254.787C366.68 242.548 376.618 232.22 383.023 223.805L324.955 324.382C318.55 332.797 308.612 343.124 295.141 355.364L353.209 254.787Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M435.37 254.787L353.212 254.784L295.144 355.361L377.302 355.364L435.37 254.787Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M183.921 154.947L248.521 154.95L190.453 255.527L125.853 255.524L183.921 154.947Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M171.992 111.914C170.668 124.537 174.643 138.881 183.92 154.947L125.852 255.524C116.575 239.458 112.599 225.114 113.924 212.491L171.992 111.914Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M307.987 200.562C301.251 207.256 291.203 216.244 277.842 227.528L219.774 328.105C233.135 316.821 243.183 307.832 249.919 301.139L307.987 200.562Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M15.5469 75.1797L44.5359 125.386L-13.5321 225.963L-42.5212 175.756L15.5469 75.1797Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M277.836 227.536C264.033 238.82 253.708 247.904 246.862 254.789L188.794 355.366C195.64 348.481 205.965 339.397 219.768 328.113L277.836 227.536Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M275.358 304.706L464.189 304.713L406.12 405.29L217.29 405.283L275.358 304.706Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M44.5279 125.39L67.3864 125.39L9.31834 225.967L-13.5401 225.966L44.5279 125.39Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M101.341 75.1911L233.863 304.705L175.795 405.282L43.2733 175.768L101.341 75.1911ZM15.5431 75.19L-42.525 175.767L43.277 175.77L101.345 75.1932L15.5431 75.19Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M246.866 254.784L246.534 254.784L188.466 355.361L188.798 355.361L246.866 254.784Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M246.539 254.781L275.362 304.701L217.294 405.277L188.471 355.358L246.539 254.781Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M67.3906 125.391L170.923 304.698L112.855 405.275L9.32257 225.967L67.3906 125.391Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M170.921 304.699L233.865 304.701L175.797 405.278L112.853 405.276L170.921 304.699Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">
                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" fill="#4B0600"/>
                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="round"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">
                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" fill="#4B0600"/>
                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                    </svg>
                    <div class="absolute inset-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]"></div>
                </div>
            </main>
        </div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif

        <script>
            // UUID Generator with Matrix Effect
            function generateUUID() {
                const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
                const segments = [4, 4, 4, 4];
                let uuid = segments.map(len => {
                    let segment = '';
                    for (let i = 0; i < len; i++) {
                        segment += chars.charAt(Math.floor(Math.random() * chars.length));
                    }
                    return segment;
                }).join('-');
                return uuid;
            }

            function getRandomChar() {
                const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
                return chars.charAt(Math.floor(Math.random() * chars.length));
            }

            function animateUUID() {
                const uuidElement = document.getElementById('payment-uuid');
                if (!uuidElement) return;

                // Generate final UUID
                const finalUUID = generateUUID();

                // Matrix effect with easing (starts fast, slows down)
                const animationDuration = 5000; // 5 seconds total
                const startTime = Date.now();
                let animationFrame;

                function updateMatrix() {
                    const elapsed = Date.now() - startTime;
                    const progress = Math.min(elapsed / animationDuration, 1);

                    if (progress < 1) {
                        // Calculate easing - starts fast, slows down exponentially
                        // Using ease-out cubic: 1 - (1-x)^3
                        const easeProgress = 1 - Math.pow(1 - progress, 3);

                        // For the full duration, all characters keep changing randomly
                        const uuidArray = finalUUID.split('').map(char => {
                            if (char === '-') {
                                return '-'; // Keep dashes
                            }
                            // All other positions: random characters (Matrix effect!)
                            return getRandomChar();
                        });

                        uuidElement.textContent = uuidArray.join('');

                        // Calculate next delay with easing (slower at the end)
                        // Start at 30ms, gradually increase to 200ms at the end
                        const baseDelay = 30;
                        const maxDelay = 200;
                        const nextDelay = baseDelay + (maxDelay - baseDelay) * easeProgress;

                        // Schedule next update with progressive delay
                        setTimeout(() => {
                            animationFrame = requestAnimationFrame(updateMatrix);
                        }, nextDelay);
                    } else {
                        // Animation complete - lock in final UUID
                        uuidElement.textContent = finalUUID;

                        // Add a subtle highlight effect when it locks
                        uuidElement.style.transition = 'all 0.3s ease';
                        uuidElement.style.textShadow = '0 0 10px rgba(0, 102, 204, 0.5)';
                        setTimeout(() => {
                            uuidElement.style.textShadow = 'none';
                        }, 500);
                    }
                }

                // Start the animation
                updateMatrix();
            }

            function getCurrencyForm(number, forms) {
                // forms: [форма для 1, форма для 2-4, форма для 5-0 та 11-14]
                // Example: ['гривня', 'гривні', 'гривень']
                const absNumber = Math.abs(number);
                const lastDigit = absNumber % 10;
                const lastTwoDigits = absNumber % 100;

                if (lastTwoDigits >= 11 && lastTwoDigits <= 14) {
                    return forms[2]; // гривень, копійок
                }

                if (lastDigit === 1) {
                    return forms[0]; // гривня, копійка
                }

                if (lastDigit >= 2 && lastDigit <= 4) {
                    return forms[1]; // гривні, копійки
                }

                return forms[2]; // гривень, копійок
            }

            function numberToWordsUkrainian(number) {
                const ones = ['', 'один', 'два', 'три', 'чотири', "п'ять", 'шість', 'сім', 'вісім', "дев'ять"];
                const onesFeminine = ['', 'одна', 'дві', 'три', 'чотири', "п'ять", 'шість', 'сім', 'вісім', "дев'ять"];
                const tens = ['', '', 'двадцять', 'тридцять', 'сорок', "п'ятдесят", 'шістдесят', 'сімдесят', 'вісімдесят', "дев'яносто"];
                const hundreds = ['', 'сто', 'двісті', 'триста', 'чотириста', "п'ятсот", 'шістсот', 'сімсот', 'вісімсот', "дев'ятсот"];
                const teens = ['десять', 'одинадцять', 'дванадцять', 'тринадцять', 'чотирнадцять', "п'ятнадцять", 'шістнадцять', 'сімнадцять', 'вісімнадцять', "дев'ятнадцять"];

                if (number == 0) {
                    return 'нуль гривень 00 копійок';
                }

                let result = '';
                let grn = Math.floor(number);
                let kop = Math.round((number - grn) * 100);
                let kopString = String(kop).padStart(2, '0');

                if (grn >= 1000) {
                    let thousands = Math.floor(grn / 1000);
                    if (thousands >= 100) {
                        result += hundreds[Math.floor(thousands / 100)] + ' ';
                        thousands = thousands % 100;
                    }
                    if (thousands >= 20) {
                        result += tens[Math.floor(thousands / 10)] + ' ';
                        thousands = thousands % 10;
                    }
                    if (thousands >= 10) {
                        result += teens[thousands - 10] + ' ';
                        thousands = 0;
                    }
                    if (thousands > 0) {
                        // Use feminine forms for thousands (тисяча is feminine)
                        if (thousands == 1) {
                            result += 'одна ';
                        } else if (thousands == 2) {
                            result += 'дві ';
                        } else {
                            result += ones[thousands] + ' ';
                        }
                    }
                    result += 'тисяч ';
                    grn = grn % 1000;
                }

                if (grn >= 100) {
                    result += hundreds[Math.floor(grn / 100)] + ' ';
                    grn = grn % 100;
                }

                if (grn >= 20) {
                    result += tens[Math.floor(grn / 10)] + ' ';
                    grn = grn % 10;
                }

                if (grn >= 10) {
                    result += teens[grn - 10] + ' ';
                    grn = 0;
                }

                // Use feminine forms for 1 and 2 when followed by currency (гривня is feminine)
                if (grn > 0) {
                    result += onesFeminine[grn] + ' ';
                }

                // Get proper word form for hryvnias
                const grnForm = getCurrencyForm(Math.floor(number), ['гривня', 'гривні', 'гривень']);

                // Get proper word form for kopiykas
                const kopForm = getCurrencyForm(kop, ['копійка', 'копійки', 'копійок']);

                result += grnForm + ' ' + kopString + ' ' + kopForm;

                return result.trim();
            }

            function updateAmountWords() {
                const amountInput = document.getElementById('amount');
                const amountWordsDiv = document.getElementById('amount-words');

                if (amountInput && amountWordsDiv) {
                    const value = parseFloat(amountInput.value) || 0;
                    if (value > 0) {
                        amountWordsDiv.textContent = '(' + numberToWordsUkrainian(value) + ')';
                    } else {
                        amountWordsDiv.textContent = '';
                    }
                }
            }

            // Update on page load
            document.addEventListener('DOMContentLoaded', function() {
                // Start UUID animation
                animateUUID();

                // Update amount words
                updateAmountWords();

                // Update on input change
                const amountInput = document.getElementById('amount');
                if (amountInput) {
                    amountInput.addEventListener('input', updateAmountWords);
                }

                // Form submission enhancement
                const form = document.getElementById('payment-form');
                const submitBtn = document.getElementById('submit-btn');

                if (form && submitBtn) {
                    form.addEventListener('submit', function(e) {
                        // Add loading state
                        submitBtn.classList.add('loading');
                        submitBtn.innerHTML = `
                            <svg style="width: 20px; height: 20px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" fill="none" opacity="0.25"/>
                                <path d="M12 2a10 10 0 0110 10" stroke="currentColor" stroke-width="4" stroke-linecap="round"/>
                            </svg>
                            Обробка...
                        `;
                    });
                }

                // Animate form sections on scroll/load
                const formSections = document.querySelectorAll('.form-section');
                formSections.forEach((section, index) => {
                    section.style.opacity = '0';
                    section.style.transform = 'translateY(20px)';

                    setTimeout(() => {
                        section.style.transition = 'all 0.5s ease';
                        section.style.opacity = '1';
                        section.style.transform = 'translateY(0)';
                    }, 100 + (index * 150));
                });

                // Input validation feedback
                const inputs = document.querySelectorAll('.form-input');
                inputs.forEach(input => {
                    // Add checkmark on valid filled inputs
                    input.addEventListener('blur', function() {
                        if (this.value && this.checkValidity()) {
                            const wrapper = this.closest('.input-wrapper');
                            if (wrapper && !wrapper.querySelector('.check-icon')) {
                                const checkIcon = document.createElement('div');
                                checkIcon.className = 'check-icon';
                                checkIcon.style.cssText = 'position: absolute; right: 16px; top: 50%; transform: translateY(-50%); color: #28a745; pointer-events: none;';
                                checkIcon.innerHTML = '<svg style="width: 20px; height: 20px;" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>';
                                wrapper.appendChild(checkIcon);

                                // Animate in
                                checkIcon.style.opacity = '0';
                                checkIcon.style.transform = 'translateY(-50%) scale(0.5)';
                                setTimeout(() => {
                                    checkIcon.style.transition = 'all 0.3s ease';
                                    checkIcon.style.opacity = '1';
                                    checkIcon.style.transform = 'translateY(-50%) scale(1)';
                                }, 10);
                            }
                        }
                    });

                    // Remove checkmark when editing
                    input.addEventListener('focus', function() {
                        const wrapper = this.closest('.input-wrapper');
                        if (wrapper) {
                            const checkIcon = wrapper.querySelector('.check-icon');
                            if (checkIcon) {
                                checkIcon.remove();
                            }
                        }
                    });
                });

                // Add smooth scroll to first error
                const firstError = document.querySelector('.error-message');
                if (firstError) {
                    setTimeout(() => {
                        firstError.closest('.form-group').scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                    }, 100);
                }

                // Success message auto-hide after 10 seconds
                const successMessage = document.querySelector('.success-message');
                if (successMessage) {
                    setTimeout(() => {
                        successMessage.style.transition = 'all 0.5s ease';
                        successMessage.style.opacity = '0';
                        successMessage.style.transform = 'translateY(-10px)';
                        setTimeout(() => {
                            successMessage.style.display = 'none';
                        }, 500);
                    }, 10000);
                }

                // Add ripple effect to button
                if (submitBtn) {
                    submitBtn.addEventListener('click', function(e) {
                        const ripple = document.createElement('span');
                        const rect = this.getBoundingClientRect();
                        const size = Math.max(rect.width, rect.height);
                        const x = e.clientX - rect.left - size / 2;
                        const y = e.clientY - rect.top - size / 2;

                        ripple.style.cssText = `
                            position: absolute;
                            width: ${size}px;
                            height: ${size}px;
                            left: ${x}px;
                            top: ${y}px;
                            background: rgba(255, 255, 255, 0.5);
                            border-radius: 50%;
                            transform: scale(0);
                            animation: ripple 0.6s ease-out;
                            pointer-events: none;
                        `;

                        this.style.position = 'relative';
                        this.style.overflow = 'hidden';
                        this.appendChild(ripple);

                        setTimeout(() => ripple.remove(), 600);
                    });
                }
            });
        </script>
    </body>
</html>
