<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>monobank check</title>
    <meta name="description" content="Квитанція від monobank">
    <link rel="icon" href="/icon.ico">
    <style>
        @font-face {
            font-family: Inter;
            src: url(/fonts/1.woff2) format("woff2")
        }
        * {
            box-sizing: border-box;
            font-family: Inter,sans-serif;
            scrollbar-color: hsla(0,0%,100%,.3) transparent
        }
        :root {
            scrollbar-gutter: stable
        }
        body {
            margin: 0;
            padding: 0;
            background: #fff;
            color: #000;
            min-height: 100%;
            display: flex;
            flex-direction: column
        }
        #main {
            flex-grow: 1;
            display: flex;
            flex-direction: column
        }
        .page-header {
            display: flex;
            justify-content: center;
            margin-bottom: 36px;
            margin-top: 24px
        }
        .page-container {
            align-items: center;
            display: flex;
            flex-direction: column;
            padding: 24px
        }
        .page-content {
            background: #fff;
            border-radius: 24px;
            box-shadow: 0 4px 24px rgba(0,0,0,.08);
            max-width: 327px;
            padding: 24px;
            width: 100%;
            align-items: center;
            display: flex;
            flex-direction: column
        }
        .status-title {
            font-size: 20px;
            font-weight: 700;
            margin-top: 16px;
            min-height: 25px;
            text-align: center
        }
        .status-subtitle {
            color: grey;
            font-size: 14px;
            font-weight: 400;
            line-height: 140%;
            min-height: 20px;
            text-align: center
        }
        .split-line {
            border-top: .5px solid #ccc;
            margin: 24px 0;
            width: 100%
        }
        .list-item-value {
            color: #000;
            font-size: 14px;
            font-weight: 500;
            line-height: 24px;
            max-width: 171px;
            overflow-wrap: break-word;
            text-align: right;
            word-wrap: break-word;
            -webkit-hyphens: none;
            -moz-hyphens: none;
            -ms-hyphens: none;
            hyphens: none;
            word-break: break-word
        }
        .list-item-label {
            color: grey;
            font-size: 14px;
            font-weight: 400;
            line-height: 24px;
            margin-right: 8px
        }
        .list-item {
            display: flex;
            justify-content: space-between;
            min-height: 24px
        }
        .list-content {
            display: flex;
            flex-direction: column;
            width: 100%
        }
        .view-button {
            align-items: center;
            background: #fa5255;
            border: none;
            border-radius: 12px;
            color: #fff;
            cursor: pointer;
            display: flex;
            font-size: 16px;
            font-weight: 600;
            justify-content: center;
            line-height: 24px;
            margin-top: 24px;
            min-height: 40px;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            transition: all .2s ease;
            width: 100%
        }
        .view-button:hover {
            background: #d3484a
        }
        .status-icon {
            display: block;
            height: 64px;
            width: 64px
        }
        .logo .logo-image {
            height: 25px
        }
    </style>
</head>
<body>
    <main id="main">
        <div class="page-container">
            <div class="page-header">
                <div class="logo">
                    <img src="/images/logo.svg" alt="monobank | Universal Bank" class="logo-image">
                </div>
            </div>
            <div id="page-content" class="page-content">
                <img src="/images/success.svg" class="status-icon">
                <div class="status-title">Платіж успішний</div>
                <div class="status-subtitle">Квитанція {{ $check->pdf_uuid }}</div>
                <div class="split-line"></div>
                <div class="list-content">
                    <div class="list-item">
                        <div class="list-item-label">Відправник</div>
                        <div class="list-item-value">{{ $check->sender }}</div>
                    </div>
                    <div class="list-item">
                        <div class="list-item-label">Одержувач</div>
                        <div class="list-item-value">{{ $check->recipient }}</div>
                    </div>
                    <div class="list-item">
                        <div class="list-item-label">Сума</div>
                        <div class="list-item-value">{{ number_format($check->amount, 0, ',', ' ') }}&nbsp;₴</div>
                    </div>
                    <div class="list-item">
                        <div class="list-item-label">Дата</div>
                        <div class="list-item-value">{{ $check->date->format('Y-m-d H:i') }}</div>
                    </div>
                    <div class="list-item">
                        <div class="list-item-label">Призначення</div>
                        <div class="list-item-value">{{ $check->description }}</div>
                    </div>
                </div>
                <a href="{{ route('pdf.receipt', $check->pdf_uuid) }}" class="view-button">Переглянути квитанцію</a>
            </div>
        </div>
    </main>
</body>
</html>

