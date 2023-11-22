<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- |favicon| -->
  <link rel="shortcut icon" href="images/favicon.png" type="images/x-icon" />
  <!-- |Main Css| -->
  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap Css -->
  <link rel="stylesheet" href="Assets/Bootstrap/Css/bootstrap.min.css" />

  <style>
    .btn-login {
      font-size: 0.9rem;
      letter-spacing: 0.05rem;
      padding: 0.75rem 1rem;
    }

    .btn-google {
      color: white !important;
      background-color: #ea4335;
      border: none;
      border-radius: 0.375rem;
    }

    .btn-facebook {
      color: white !important;
      background-color: #3b5998;
      border: none;
      border-radius: 0.375rem;
    }

    .form-control {
      border: 1px solid #000;
    }

    .bn632-hover {
      width: 22rem;
      height: 3rem;
      border-radius: 0.375rem;

    }

    .line {
      position: relative;
      height: 1px;
      width: 100%;
      margin: 36px 0;
      background-color: #d4d4d4;
    }

    .line::before {
      content: 'Or';
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #FFF;
      color: #8b8b8b;
      padding: 0 15px;
    }
  </style>
</head>

<body>

  <header id="main-header">
    <!-- <section class="header"> -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light ">
      <div class="container">
        <!-- Mobile Menu Button -->
        <svg data-bs-toggle="collapse" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" class="hb d-xxl-none d-xl-none d-lg-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" stroke="rgb(18, 18, 18)" stroke-width=".6" fill="rgba(0,0,0,0)" stroke-linecap="round" style="cursor: pointer">
          <path d="M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7">
            <animate dur="0.2s" attributeName="d" values="M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7;M3,3L5,5L7,3M5,5L5,5M3,7L5,5L7,7" fill="freeze" begin="start.begin" />
            <animate dur="0.2s" attributeName="d" values="M3,3L5,5L7,3M5,5L5,5M3,7L5,5L7,7;M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7" fill="freeze" begin="reverse.begin" />
          </path>
          <rect width="10" height="10" stroke="none">
            <animate dur="2s" id="reverse" attributeName="width" begin="click" />
          </rect>
          <rect width="10" height="10" stroke="none">
            <animate dur="0.001s" id="start" attributeName="width" values="10;0" fill="freeze" begin="click" />
            <animate dur="0.001s" attributeName="width" values="0;10" fill="freeze" begin="reverse.begin" />
          </rect>
        </svg>
        <!-- Logo -->
        <a id="nav-item-link-image" class="navbar-brand d-flex justify-content-start" href="index.html">
          <img id="navbar-brand-image" src="images/digilog-logo.png" alt="Logo" />
        </a>
        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a id="nav-item-link" class="nav-link" href="Big Deal🔥.html">Big Deal🔥</a>
            </li>
            <li class="nav-item">
              <a id="nav-item-link" class="nav-link" href="Catalog.html">Catalog</a>
            </li>
            <li class="nav-item">
              <a id="nav-item-link" class="nav-link" href="Contact.html">Contact</a>
            </li>
            <li class="nav-item">
              <a id="nav-item-link" class="nav-link" href="Track Your Order.html">Track Your Order</a>
            </li>
          </ul>
        </div>
        <div class="d-flex justify-content-end ">
          <div class="Search">
            <ion-icon id="Search-btn" name="search-outline"></ion-icon>
          </div>
          <div class="Search-box pt-2 pb-2">
            <div class="fluid">
              <input class="p-2" id="Search-box-" type="text" placeholder="Search">
              <ion-icon id="Search-btn" name="search-outline"></ion-icon>
            </div>
            <ion-icon id="Search-close" name="close-outline"></ion-icon>
            <section id="section-first"></section>
          </div>
        </div>
        <div id="top-option" class="d-none d-sm-none d-md-none d-xxl-block d-xl-block d-lg-block"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" id="main-login" class="icon icon-account" fill="none" viewBox="0 0 18 19">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M6 4.5a3 3 0 116 0 3 3 0 01-6 0zm3-4a4 4 0 100 8 4 4 0 000-8zm5.58 12.15c1.12.82 1.83 2.24 1.91 4.85H1.51c.08-2.6.79-4.03 1.9-4.85C4.66 11.75 6.5 11.5 9 11.5s4.35.26 5.58 1.15zM9 10.5c-2.5 0-4.65.24-6.17 1.35C1.27 12.98.5 14.93.5 18v.5h17V18c0-3.07-.77-5.02-2.33-6.15-1.52-1.1-3.67-1.35-6.17-1.35z" fill="currentColor">
            </path>
          </svg>
        </div>
        <div id="top-option"><svg class="icon icon-cart-empty" id="main-cart" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" fill="none">
            <path d="m15.75 11.8h-3.16l-.77 11.6a5 5 0 0 0 4.99 5.34h7.38a5 5 0 0 0 4.99-5.33l-.78-11.61zm0 1h-2.22l-.71 10.67a4 4 0 0 0 3.99 4.27h7.38a4 4 0 0 0 4-4.27l-.72-10.67h-2.22v.63a4.75 4.75 0 1 1 -9.5 0zm8.5 0h-7.5v.63a3.75 3.75 0 1 0 7.5 0z" fill="currentColor" fill-rule="evenodd"></path>
          </svg>
          </svg>
        </div>
      </div>
      </div>
      </div>
    </nav>

    <!-- Navbar Mobile Menu -->
    <nav id="mobile-nav-menu">
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <!-- Mobile Menu Links -->
        <div class="offcanvas-body">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li id="nav-item-id" class="nav-item">
              <a id="nav-item-link-menu" class="nav-link fs-4 p-2" href="Big Deal🔥.html">Big Deal🔥</a>
            </li>
            <li id="nav-item-id" class="nav-item">
              <a id="nav-item-link-menu" class="nav-link fs-4 p-2" href="Catalog.html">Catalog</a>
            </li>
            <li id="nav-item-id" class="nav-item">
              <a id="nav-item-link-menu" class="nav-link fs-4 p-2" href="Contact.html">Contact</a>
            </li>
            <li id="nav-item-id" class="nav-item">
              <a id="nav-item-link-menu" class="nav-link fs-4 p-2" href="Track Your Order.html">Track Your Order</a>
            </li>
          </ul>
        </div>
        <!-- Login -->
        <div class="p-4" id="account-login-etc">
          <a href="#" class="icon-and-login p-1">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="icon-login" fill="none" viewBox="0 0 18 19">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M6 4.5a3 3 0 116 0 3 3 0 01-6 0zm3-4a4 4 0 100 8 4 4 0 000-8zm5.58 12.15c1.12.82 1.83 2.24 1.91 4.85H1.51c.08-2.6.79-4.03 1.9-4.85C4.66 11.75 6.5 11.5 9 11.5s4.35.26 5.58 1.15zM9 10.5c-2.5 0-4.65.24-6.17 1.35C1.27 12.98.5 14.93.5 18v.5h17V18c0-3.07-.77-5.02-2.33-6.15-1.52-1.1-3.67-1.35-6.17-1.35z" fill="currentColor">
              </path>
            </svg>Log in</a>
          <br>
          <br>
          <!-- ****Social links***** -->
          <ul class="list list-social list-unstyled" role="list">
            <li class="list-social__item">
              <a href="https://twitter.com/" class="list-social__link link"><svg id="nav-mobile-social-icon" aria-hidden="true" focusable="false" class="icon icon-twitter" viewBox="0 0 20 20">
                  <path fill="currentColor" d="M18.608 4.967a7.364 7.364 0 0 1-1.758 1.828c0 .05 0 .13.02.23l.02.232a10.014 10.014 0 0 1-1.697 5.565 11.023 11.023 0 0 1-2.029 2.29 9.13 9.13 0 0 1-2.832 1.607 10.273 10.273 0 0 1-8.94-.985c.342.02.613.04.834.04 1.647 0 3.114-.502 4.4-1.506a3.616 3.616 0 0 1-3.315-2.46c.528.128 1.08.107 1.597-.061a3.485 3.485 0 0 1-2.029-1.216 3.385 3.385 0 0 1-.803-2.23v-.03c.462.242.984.372 1.587.402A3.465 3.465 0 0 1 2.116 5.76c0-.612.14-1.205.452-1.798a9.723 9.723 0 0 0 3.214 2.612A10.044 10.044 0 0 0 9.88 7.649a3.013 3.013 0 0 1-.13-.804c0-.974.34-1.808 1.034-2.49a3.466 3.466 0 0 1 2.561-1.035 3.505 3.505 0 0 1 2.551 1.104 6.812 6.812 0 0 0 2.24-.853 3.415 3.415 0 0 1-1.547 1.948 7.732 7.732 0 0 0 2.02-.542v-.01Z">
                  </path>
                </svg>
                <span class="visually-hidden">Twitter</span>
              </a>
            </li>
            <li class="list-social__item">
              <a href="https://www.facebook.com/" class="list-social__link link"><svg aria-hidden="true" focusable="false" id="nav-mobile-social-icon" class="icon icon-facebook" viewBox="0 0 20 20">
                  <path fill="currentColor" d="M18 10.049C18 5.603 14.419 2 10 2c-4.419 0-8 3.603-8 8.049C2 14.067 4.925 17.396 8.75 18v-5.624H6.719v-2.328h2.03V8.275c0-2.017 1.195-3.132 3.023-3.132.874 0 1.79.158 1.79.158v1.98h-1.009c-.994 0-1.303.621-1.303 1.258v1.51h2.219l-.355 2.326H11.25V18c3.825-.604 6.75-3.933 6.75-7.951Z">
                  </path>
                </svg>
                <span class="visually-hidden">Facebook</span>
              </a>
            </li>
            <li class="list-social__item">
              <a href="https://www.pinterest.com/" class="list-social__link link"><svg aria-hidden="true" focusable="false" id="nav-mobile-social-icon" class="icon icon-pinterest" viewBox="0 0 20 20">
                  <path fill="currentColor" d="M10 2.01c2.124.01 4.16.855 5.666 2.353a8.087 8.087 0 0 1 1.277 9.68A7.952 7.952 0 0 1 10 18.04a8.164 8.164 0 0 1-2.276-.307c.403-.653.672-1.24.816-1.729l.567-2.2c.134.27.393.5.768.702.384.192.768.297 1.19.297.836 0 1.585-.24 2.248-.72a4.678 4.678 0 0 0 1.537-1.969c.37-.89.554-1.848.537-2.813 0-1.249-.48-2.315-1.43-3.227a5.061 5.061 0 0 0-3.65-1.374c-.893 0-1.729.154-2.478.461a5.023 5.023 0 0 0-3.236 4.552c0 .72.134 1.355.413 1.902.269.538.672.922 1.22 1.152.096.039.182.039.25 0 .066-.028.114-.096.143-.192l.173-.653c.048-.144.02-.288-.105-.432a2.257 2.257 0 0 1-.548-1.565 3.803 3.803 0 0 1 3.976-3.861c1.047 0 1.863.288 2.44.855.585.576.883 1.315.883 2.228 0 .768-.106 1.479-.317 2.122a3.813 3.813 0 0 1-.893 1.556c-.384.384-.836.576-1.345.576-.413 0-.749-.144-1.018-.451-.259-.307-.345-.672-.25-1.085.147-.514.298-1.026.452-1.537l.173-.701c.057-.25.086-.451.086-.624 0-.346-.096-.634-.269-.855-.192-.22-.451-.336-.797-.336-.432 0-.797.192-1.085.595-.288.394-.442.893-.442 1.499.005.374.063.746.173 1.104l.058.144c-.576 2.478-.913 3.938-1.037 4.36-.116.528-.154 1.153-.125 1.863A8.067 8.067 0 0 1 2 10.03c0-2.208.778-4.11 2.343-5.666A7.721 7.721 0 0 1 10 2.001v.01Z">
                  </path>
                </svg>
                <span class="visually-hidden">Pinterest</span>
              </a>
            </li>
            <li class="list-social__item">
              <a href="https://www.instagram.com/" class="list-social__link link"><svg aria-hidden="true" focusable="false" id="nav-mobile-social-icon" class="icon icon-instagram" viewBox="0 0 20 20">
                  <path fill="currentColor" fill-rule="evenodd" d="M13.23 3.492c-.84-.037-1.096-.046-3.23-.046-2.144 0-2.39.01-3.238.055-.776.027-1.195.164-1.487.273a2.43 2.43 0 0 0-.912.593 2.486 2.486 0 0 0-.602.922c-.11.282-.238.702-.274 1.486-.046.84-.046 1.095-.046 3.23 0 2.134.01 2.39.046 3.229.004.51.097 1.016.274 1.495.145.365.319.639.602.913.282.282.538.456.92.602.474.176.974.268 1.479.273.848.046 1.103.046 3.238.046 2.134 0 2.39-.01 3.23-.046.784-.036 1.203-.164 1.486-.273.374-.146.648-.329.921-.602.283-.283.447-.548.602-.922.177-.476.27-.979.274-1.486.037-.84.046-1.095.046-3.23 0-2.134-.01-2.39-.055-3.229-.027-.784-.164-1.204-.274-1.495a2.43 2.43 0 0 0-.593-.913 2.604 2.604 0 0 0-.92-.602c-.284-.11-.703-.237-1.488-.273ZM6.697 2.05c.857-.036 1.131-.045 3.302-.045 1.1-.014 2.202.001 3.302.045.664.014 1.321.14 1.943.374a3.968 3.968 0 0 1 1.414.922c.41.397.728.88.93 1.414.23.622.354 1.279.365 1.942C18 7.56 18 7.824 18 10.005c0 2.17-.01 2.444-.046 3.292-.036.858-.173 1.442-.374 1.943-.2.53-.474.976-.92 1.423a3.896 3.896 0 0 1-1.415.922c-.51.191-1.095.337-1.943.374-.857.036-1.122.045-3.302.045-2.171 0-2.445-.009-3.302-.055-.849-.027-1.432-.164-1.943-.364a4.152 4.152 0 0 1-1.414-.922 4.128 4.128 0 0 1-.93-1.423c-.183-.51-.329-1.085-.365-1.943C2.009 12.45 2 12.167 2 10.004c0-2.161 0-2.435.055-3.302.027-.848.164-1.432.365-1.942a4.44 4.44 0 0 1 .92-1.414 4.18 4.18 0 0 1 1.415-.93c.51-.183 1.094-.33 1.943-.366Zm.427 4.806a4.105 4.105 0 1 1 5.805 5.805 4.105 4.105 0 0 1-5.805-5.805Zm1.882 5.371a2.668 2.668 0 1 0 2.042-4.93 2.668 2.668 0 0 0-2.042 4.93Zm5.922-5.942a.958.958 0 1 1-1.355-1.355.958.958 0 0 1 1.355 1.355Z" clip-rule="evenodd"></path>
                </svg>
                <span class="visually-hidden">Instagram</span>
              </a>
            </li>
            <li class="list-social__item">
              <a href="https://www.tiktok.com/" class="list-social__link link"><svg aria-hidden="true" focusable="false" id="nav-mobile-social-icon" class="icon icon-tiktok" viewBox="0 0 20 20">
                  <path fill="currentColor" d="M10.511 1.705h2.74s-.157 3.51 3.795 3.768v2.711s-2.114.129-3.796-1.158l.028 5.606A5.073 5.073 0 1 1 8.213 7.56h.708v2.785a2.298 2.298 0 1 0 1.618 2.205L10.51 1.705Z">
                  </path>
                </svg>
                <span class="visually-hidden">TikTok</span>
              </a>
            </li>
            <li class="list-social__item">
              <a href="https://www.youtube.com/" class="list-social__link link"><svg aria-hidden="true" focusable="false" id="nav-mobile-social-icon" class="icon icon-youtube" viewBox="0 0 20 20">
                  <path fill="currentColor" d="M18.16 5.87c.34 1.309.34 4.08.34 4.08s0 2.771-.34 4.08a2.125 2.125 0 0 1-1.53 1.53c-1.309.34-6.63.34-6.63.34s-5.321 0-6.63-.34a2.125 2.125 0 0 1-1.53-1.53c-.34-1.309-.34-4.08-.34-4.08s0-2.771.34-4.08a2.173 2.173 0 0 1 1.53-1.53C4.679 4 10 4 10 4s5.321 0 6.63.34a2.173 2.173 0 0 1 1.53 1.53ZM8.3 12.5l4.42-2.55L8.3 7.4v5.1Z">
                  </path>
                </svg>
                <span class="visually-hidden">YouTube</span>
              </a>
            </li>
          </ul>
        </div>
      </div>

    </nav>
  </header>


  <!-- login -->
  <section class="vh-100">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <!-- <div class="card border-0 shadow rounded-3 my-5"> -->
          <div class="card-body p-4 p-sm-5">
            <h1 class="mb-5 text-center">Log in</h1>
            <form>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Repeat Password">
                <label for="floatingPassword">Repeat Password</label>
              </div>
              <p><a class="text-decoration-none text-dark" href="login.php"><u>Forget your password</u></a></p>
              <div class="d-flex justify-content-center">
                <a href="#"><button class="bn632-hover bn21">Log in</button></a>
              </div>
              <p class="text-center">Don't have an account?<a class="text-decoration-none" href="Registration.php">Registration</a></p>
              <div class="line"></div>
              <div class="d-grid mb-2">
                <button class="btn-google btn-login text-uppercase fw-bold" type="submit">
                  <i class="fab fa-google me-2"></i> Sign in with Google
                </button>
              </div>
              <div class="d-grid">
                <button class="btn-facebook btn-login text-uppercase fw-bold" type="submit">
                  <i class="fab fa-facebook-f me-2"></i> Sign in with Facebook
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>


  <!-- Bootstrap Js -->
  <script src="Assets/Bootstrap/Js/bootstrap.bundle.min.js"></script>
  <script src="Assets/Bootstrap/Js/jquery.slim.min.js"></script>
  <!-- Main Js -->
  <script src="script.js"></script>
  <!-- Iconicons Js -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>