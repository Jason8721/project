<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/app.css">
    <title>GameLibrary.com</title>
</head>
<body class="p-3 mb-2 bg-dark-subtle text-dark-emphasis">
  
  <div class="container">
    <nav class="navbar navbar-expand-lg ">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">GameL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Library</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Category
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Online</a></li>
                <li><a class="dropdown-item" href="#">Offline</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Popular</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="What do you need?" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          
        </div>
      </div>
    </nav>
   
    <section id="about">
        <h2>درباره ما</h2>
        <p>ما یک وبسایت برای ارائه بهترین خدمات به کاربران هستیم.</p>
    </section>
    <section id="features">
        <h2>ویژگی‌ها</h2>
        <ul>
            <li>ویژگی ۱: خدمات باکیفیت</li>
            <li>ویژگی ۲: پشتیبانی ۲۴ ساعته</li>
            <li>ویژگی ۳: قیمت مناسب</li>
        </ul>
    </section>
    <section id="news">
        <h2>اخبار</h2>
        <p>به‌روزرسانی‌های جدید و اخبار مهم را در اینجا مشاهده کنید.</p>
    </section>
    <section id="contact">
        <h2>تماس با ما</h2>
        <form>
            <input type="text" placeholder="نام شما" required>
            <input type="email" placeholder="ایمیل شما" required>
            <textarea placeholder="پیام شما" required></textarea>
            <button type="submit">ارسال</button>
        </form>
    </section>
    <footer>
        <p>کپی‌رایت © 2024 وبسایت من</p>
    </footer>
  </div>

  



        
    
      


























    
    
</body>
</html>