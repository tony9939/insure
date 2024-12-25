<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Section</title>
    <link rel="stylesheet" href="about.css">
    <style>
      /* General Reset */
      body {
         margin: 0;
         font-family: 'Arial', sans-serif;
         background-color: #1a1a1a;
         color: #fff;
      }

      /* Container Styling */
      .container {
         display: flex;
         justify-content: space-between;
         flex-wrap: wrap;
         gap: 20px;
         padding: 40px;
         max-width: 1200px;
         margin: 0 auto;
      }

      /* Card Styling */
      .card {
         background-color: #222;
         border-radius: 15px;
         padding: 20px;
         width: calc(33% - 20px);
         box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
         text-align: center;
         transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .card:hover {
         transform: translateY(-5px);
         box-shadow: 0 8px 12px rgba(0, 0, 0, 0.4);
      }

      /* Card Logo Styling */
      .card-logo {
         max-width: 50px;
         margin-bottom: 15px;
      }

      /* Card Text Styling */
      .card h3 {
         font-size: 20px;
         margin-bottom: 10px;
         color: #fff;
      }

      .card p {
         font-size: 14px;
         line-height: 1.6;
         color: #ccc;
      }

      /* Responsive Design */
      @media screen and (max-width: 768px) {
         .card {
            width: 100%;
         }
      }

    </style>
</head>
<body>
    <div class="container" id="about">
        <div class="card">
            <h3>Бидний тухай</h3>
            <p>
                Манай компани нь үүлэн технологид суурилсан даатгалын их өгөгдийн санг бүрдүүлж, 
                хиймэл оюун ухааны тусламжтайгаар эрсдэлийн үнэлгээ, 
                хураамжийн тооцоолол, гэрээ бүртгэлтэй холбоотой бүх үйл ажиллагааг автоматжуулах нөхцлийг бүрдүүлэхээр ажиллаж байна.
            </p>
        </div>
        <div class="card">
            <h3>Эрхэм зорилго</h3>
            <p>
                Даатгалын үйл ажиллагааг бүрэн автоматжуулж, 
                түргэн шуурхай хялбар системийн шийдлийг 
                даатгалын байгууллагууд болон хэрэглэгчдэд санал болгох.
            </p>
        </div>
        <div class="card">
            <h3>Алсын хараа</h3>
            <p>
                Хиймэл оюун ухаанд суурилсан технологийн шинэ шийдлийг нэвтрүүлж, 
                хүртээмжтэй даатгалын тогтолцоог бий болгоно.
            </p>
        </div>
    </div>
</body>
</html>


