function generateQRCode() {
    var text = document.getElementById("text-input").value;
    var qrCode = new QRCode(document.getElementById("qr-code"), {
      text: text,
      width: 128,
      height: 128
    });
  }
  