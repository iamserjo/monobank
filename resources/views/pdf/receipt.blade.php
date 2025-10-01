<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Платіжна інструкція № {{ $check->pdf_uuid }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <style>
        @page {
            margin: 0;
            size: A4;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DejaVu Sans', sans-serif;
            font-size: 11pt;
            line-height: 1.4;
            color: #000;
            padding: 0;
        }

        /* Use Inter font for HTML preview only */
        @media screen {
            body {
                font-family: Inter, 'DejaVu Sans', sans-serif;
            }
        }

        /* Common page container used for both HTML preview and PDF */
        .a4-page {
            padding: 0 50px;
        }

        /* Header/Footer images sizing */
        .pdf-header,
        .pdf-footer {
            width: 100%;
            height: auto;
            display: block;
        }

        /* Screen-only A4 sizing to mirror PDF dimensions */
        @media screen {
            html {
                background: #f2f2f2;
            }
            body {
                padding: 20px 0;
            }
            .a4-page {
                width: 210mm;           /* A4 width */
                min-height: 297mm;      /* A4 height */
                margin: 0 auto;
                background: #fff;
                box-shadow: 0 2mm 8mm rgba(0, 0, 0, 0.1);
            }
        }

        /* Print/PDF defaults (DomPDF uses print media) */
        @media print {
            .a4-page {
                width: auto;
                min-height: auto;
                margin: 0;
                box-shadow: none;
                background: #fff;
            }
        }

        .header {
            margin-bottom: 30px;
        }

        .logo-section {
            width: 100%;
            margin-bottom: 30px;
            overflow: hidden;
        }

        .logo-left {
            float: left;
            width: 50%;
        }

        .logo-text {
            font-size: 28pt;
            font-weight: bold;
            letter-spacing: -1px;
            margin-bottom: 5px;
        }

        .logo-subtitle {
            font-size: 11pt;
            color: #333;
        }

        .bank-info {
            float: right;
            width: 50%;
            text-align: right;
            font-size: 9pt;
            line-height: 1.6;
        }

        .title {
            font-size: 15pt;
            font-weight: bold;
            margin-bottom: 7px;
        }

        .section {
            margin-bottom: 25px;
            page-break-inside: avoid;
        }

        .section-title {
            font-size: 15pt;
            font-weight: 600;
            margin-bottom: 6px;
            page-break-after: avoid;
        }

        .info-table {
            width: 100%;
            border-collapse: collapse;
        }

        .info-row {
            margin-bottom: 8px;
            width: 100%;
        }

        .info-label {
            font-weight: 400;
            font-size: 14pt;
        }

        .info-value {
            font-size: 14pt;
            font-weight: bold;
        }

        .divider {
            /*border-bottom: 1px solid #e0e0e0;*/
            /*margin: 20px 0;*/
        }

        .footer {
            margin-top: 40px;
            width: 100%;
            overflow: hidden;
        }

        .signature-section {
            width: 100%;
            overflow: hidden;
        }

        .signature-left {
            float: left;
            width: 50%;
            padding-top: 30px;
        }

        .signature-right {
            float: right;
            width: 50%;
            text-align: right;
            padding-top: 30px;
        }

        .stamp-placeholder {
            width: 150px;
            height: 150px;
            border: 2px solid #0066cc;
            border-radius: 50%;
            display: inline-block;
            vertical-align: middle;
            position: relative;
            text-align: center;
            line-height: 150px;
            color: #0066cc;
            font-size: 10pt;
            margin-right: 20px;
        }

        .signature-line {
            display: inline-block;
            border-bottom: 1px solid #000;
            width: 200px;
            height: 40px;
            vertical-align: middle;
        }

        .note {
            font-size: 8pt;
            color: #666;
            margin-top: 30px;
            font-style: italic;
        }
        .pdf-header{
            margin-left: -49px;
            margin-top: 12px;
            width: 791px;
            height: 77px;
        }
    </style>
</head>
<body>
    <div class="a4-page">
    <!-- Header image -->
    <img class="pdf-header" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/pdf/header.png'))) }}" alt="Header">
    <div class="title">Платіжна інструкція № {{ $check->pdf_uuid }} від {{ $check->date->format('d.m.Y') }}</div>

    <div class="section">
        <div class="section-title">Платник</div>
        <div class="info-row">
            <div class="info-label">Ім'я</div>
            <div class="info-value">{{ $payer_name }}</div>
        </div>
        <div class="info-row">
            <div class="info-label">Банк</div>
            <div class="info-value">{{ $check->sender_bankname ?? 'АТ УНІВЕРСАЛ БАНК' }}</div>
        </div>
        <div class="info-row">
            <div class="info-label">Код</div>
            <div class="info-value">{{ $check->sender_taxid ?? $payer_code }}</div>
        </div>
        <div class="info-row">
            <div class="info-label">Номер рахунку</div>
            <div class="info-value">{{ $check->sender_account ?? $payer_account }}</div>
        </div>
    </div>

    <div class="divider" style="margin: 31px 0;"></div>

    <div class="section">
        <div class="section-title">Отримувач</div>
        <div class="info-row">
            <div class="info-label">Назва</div>
            <div class="info-value">{{ $check->recipient }}</div>
        </div>
        <div class="info-row">
            <div class="info-label">Код</div>
            <div class="info-value">{{ $recipient_code }}</div>
        </div>
        <div class="info-row">
            <div class="info-label">Номер рахунку</div>
            <div class="info-value">{{ $recipient_account }}</div>
        </div>
        <div class="info-row">
            <div class="info-label">Банк</div>
            <div class="info-value">АТ "УНІВЕРСАЛ БАНК"</div>
        </div>
    </div>

    <div class="divider" style="margin: -1px 0;"></div>

    <div class="section">
        <div class="section-title">Деталі транзакції</div>
        <div class="info-row">
            <div class="info-label">Сума (грн)</div>
            <div class="info-value">{{ number_format($check->amount, 2, ',', ' ') }} ({{ $amount_in_words }})</div>
        </div>
        <div class="info-row">
            <div class="info-label">Комісія(грн)</div>
            <div class="info-value">0,0</div>
        </div>
        <div class="info-row">
            <div class="info-label">Дата і час складання</div>
            <div class="info-value">{{ $check->date->format('d.m.Y H:i') }}</div>
        </div>
        <div class="info-row">
            <div class="info-label">Дата виконання</div>
            <div class="info-value">{{ $check->date->format('d.m.Y') }}</div>
        </div>
        <div class="info-row">
            <div class="info-label">Призначення платежу</div>
            <div class="info-value">{{ $check->description }}</div>
        </div>
    </div>

    <div class="note">
        Реквізити платіжної інструкції підписані удосконаленим електронним підписом платника.
    </div>
    <!-- Footer image -->
    <img class="pdf-footer" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/pdf/footer.png'))) }}" alt="Footer">
    </div>
</body>
</html>


