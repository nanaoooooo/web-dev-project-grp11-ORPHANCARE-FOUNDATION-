document.addEventListener("DOMContentLoaded", function() {
    function generateQR() {
      var youtubeURL = "https://www.youtube.com"; // YouTube URL
      var qr = new QRious({
        element: document.getElementById('qrCode'),
        value: youtubeURL,
        size: 200
      });
  
      // Make the QR code clickable
      var qrLink = document.createElement("a");
      qrLink.href = youtubeURL;
      qrLink.target = "_blank";
      qrLink.appendChild(qr.getCanvas());
      document.getElementById('qrCode').innerHTML = '';
      document.getElementById('qrCode').appendChild(qrLink);
    }
  
    // Generate QR code on page load
    generateQR();
  });
  
