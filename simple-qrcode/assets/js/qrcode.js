
document.addEventListener('DOMContentLoaded', function () {
    const qrCodeElement = document.querySelector('.simple-qrcode');

    if (!qrCodeElement) {
        return;
    }

    const url = simple_qr_code_data.post_url;

    const size = parseInt(qrCodeElement.getAttribute('data-size')) || 128;
    const color = qrCodeElement.getAttribute('data-color') || '#000000';

    try {
        new QRCode(qrCodeElement,
            {
                text: url,
                width: size,
                height: size,
                colorDark: color,
                colorLight: '#FFFFFF',
                correctLevel: QRCode.CorrectLevel.H
            }
        );

        console.log('Simple QRCode: QR code generated successfully for URL:', url);
    }
    catch (err) {
        console.error('Simple QRCode: Failed to generate QR code:', err);
    }
});