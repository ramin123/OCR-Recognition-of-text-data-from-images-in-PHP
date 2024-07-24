# OCR Распознавание текстовых данных по изображениям на PHP

Этот проект представляет собой приложение на PHP, предназначенное для выполнения оптического распознавания символов (OCR) на изображениях с целью извлечения текстовых данных. В нем используется движок Tesseract OCR, который является открытым программным обеспечением для OCR, поддерживающим широкий спектр языков и известным своей точностью.

## Особенности

- Распознает текст на изображениях с помощью движка Tesseract OCR.
- Поддерживает несколько языков на основе языковых пакетов Tesseract.
- Предоставляет простой интерфейс на PHP для отправки изображений на обработку OCR.
- Возвращает распознанный текст в структурированном формате для дальнейшего использования.

## Требования

- PHP 7.0 или выше
- Установленный на сервере движок Tesseract OCR
- Языковые данные Tesseract для языков, которые вы хотите поддерживать

## Установка

1. Клонируйте репозиторий или загрузите исходный код с GitHub.
2. Убедитесь, что на вашем сервере установлен движок Tesseract OCR. Вы можете установить его с помощью менеджера пакетов (например, `apt-get install tesseract-ocr` в Ubuntu/Debian).
3. Установите необходимые языковые данные для Tesseract с помощью вашего менеджера пакетов (например, `apt-get install tesseract-ocr-[lang]`).
4. Разместите исходный код в корневом каталоге вашего веб-сервера или настройте сервер для указания на каталог проекта.

## Использование
