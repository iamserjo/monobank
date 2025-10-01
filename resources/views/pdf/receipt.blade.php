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
            font-family: Inter, DejaVu Sans, sans-serif;
            font-size: 11pt;
            line-height: 1.4;
            color: #000;
            padding: 0;
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
            display: table;
            width: 100%;
            margin-bottom: 30px;
        }

        .logo-left {
            display: table-cell;
            width: 50%;
            vertical-align: top;
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
            display: table-cell;
            width: 50%;
            text-align: right;
            vertical-align: top;
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
        }

        .section-title {
            font-size: 15pt;
            font-weight: 600;
            margin-bottom: 6px;
        }

        .info-table {
            width: 100%;
            border-collapse: collapse;
        }

        .info-row {
            margin-bottom: 2px;
        }

        .info-label {
            display: inline-block;
            width: 47%;
            font-weight: 400;
            font-size: 17px;
            vertical-align: top;
        }

        .info-value {
            font-size: 19px;
            display: inline-block;
            width: 50%;
            font-weight: 550;
            vertical-align: top;
        }

        .divider {
            /*border-bottom: 1px solid #e0e0e0;*/
            /*margin: 20px 0;*/
        }

        .footer {
            margin-top: 40px;
            display: table;
            width: 100%;
        }

        .signature-section {
            display: table-row;
        }

        .signature-left {
            display: table-cell;
            width: 50%;
            padding-top: 30px;
        }

        .signature-right {
            display: table-cell;
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
            <span class="info-label">Ім'я</span>
            <span class="info-value">{{ $payer_name }}</span>
        </div>
        <div class="info-row">
            <span class="info-label">Банк</span>
            <span class="info-value">АТ УНІВЕРСАЛ БАНК</span>
        </div>
        <div class="info-row">
            <span class="info-label">Код</span>
            <span class="info-value">{{ $payer_code }}</span>
        </div>
        <div class="info-row">
            <span class="info-label">Номер рахунку</span>
            <span class="info-value">{{ $payer_account }}</span>
        </div>
    </div>

    <div class="divider" style="margin: 31px 0;"></div>

    <div class="section">
        <div class="section-title">Отримувач</div>
        <div class="info-row">
            <span class="info-label">Назва</span>
            <span class="info-value">{{ $check->recipient }}</span>
        </div>
        <div class="info-row">
            <span class="info-label">Код</span>
            <span class="info-value">{{ $recipient_code }}</span>
        </div>
        <div class="info-row">
            <span class="info-label">Номер рахунку</span>
            <span class="info-value">{{ $recipient_account }}</span>
        </div>
        <div class="info-row">
            <span class="info-label">Банк</span>
            <span class="info-value">АТ "УНІВЕРСАЛ БАНК"</span>
        </div>
    </div>

    <div class="divider" style="margin: -1px 0;"></div>

    <div class="section">
        <div class="section-title">Деталі транзакції</div>
        <div class="info-row">
            <span class="info-label">Сума (грн)</span>
            <span class="info-value">{{ number_format($check->amount, 2, ',', ' ') }} ({{ $amount_in_words }})</span>
        </div>
        <div class="info-row">
            <span class="info-label">Комісія(грн)</span>
            <span class="info-value">0,0</span>
        </div>
        <div class="info-row">
            <span class="info-label">Дата і час складання</span>
            <span class="info-value">{{ $check->date->format('d.m.Y H:i') }}</span>
        </div>
        <div class="info-row">
            <span class="info-label">Дата виконання</span>
            <span class="info-value">{{ $check->date->format('d.m.Y') }}</span>
        </div>
        <div class="info-row">
            <span class="info-label">Призначення платежу</span>
            <span class="info-value">{{ $check->description }}</span>
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


