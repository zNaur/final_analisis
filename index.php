<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>FinSist</title>
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">FinSist</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="images/menu.png" class="menu-icon" alt="">
            </label>

            <nav class="navbar">
                <ul>
                    <li><a href="emprendimiento.php">Empredimientos</a></li>
                    <li><a href="entidades_financ.php">Financiamiento</a></li>
                    <li><a href="">Servicio al cliente</a></li>
                    <li><a href="">Buscar</a></li>  
                    <li><button class="btnlogin-popup">Login</button></li>
                </ul>
                
            </nav>
        </div>
        
        

        <div class="header-content container">
            <h1>Emprende ya</h1>
            
            <p>
                Iniciar un negocio no cuesta nada. Solo necesitas entusiasmo y, con FinSist, es aún más sencillo. 
                Si tienes preguntas, también puedes contar con el apoyo de nuestro equipo de asesores, 
                quienes te orientarán en el camino correcto.
            </p>
    
            <a href="#" class="btn-1">Information</a>
    
        </div>
    </header>

   
    <div class="wrapper">

        <span class="icon-close">
           <ion-icon name="close"></ion-icon>
        </span>

        <div class="form-box login">
            <h2>Login</h2>
            <form action="php/login_usuario.php">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" id="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="contrasena" name="contrasena" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">
                    recordar</label>
                    <a href="#">Has olvidado tu contraseña</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>No tengo cuenta <a href="#" class="register-link">Registrar</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registro</h2>
            <form action="php/registro_usuario.php" method="POST" autocomplete="off">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" id="username"  name="username" required>
                    <label>Nombre De Usuario</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" id="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="contrasena" name="contrasena" required>
                    <label>Contraseña</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" list="cargos" id="cargo" name="cargo" required>
                    <label>Tipo de usuario</label>
                    <datalist id="cargos">
                        <option value="Emprendedor"></option>
                        <option value="Accionista"></option>
                    </datalist>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">
                    Aceptar terminos y condiciones</label>
                    
                </div>
                <button action="prueba,html" type="submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Ya tienes cuenta? <a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    
    <section class="coffee">
        

        <div class="coffee-content container">
            <h2>Servicios</h2>
            <p class="txt-p">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ipsum aperiam cum illo numquam amet reiciendis vero nesciunt dolorum iusto est corporis, 
                ratione fugit repellendus debitis eius aliquid fugiat veritatis quasi.
            </p>

            <div class="coffee-group">
                
                <div class="coffee-1">
                    <img src="media/empren_7.png" alt="">
                    <h3>Emprendedor</h3>
                    <p>
                    Individuo visionario y creativo que identifica oportunidades, desarrolla soluciones innovadoras y asume riesgos para crear empresas exitosas, con una mentalidad adaptable y orientada al crecimiento.
                    </p>
                </div>

                <div class="coffee-1">
                    <img src="media/accio_2.png" alt="">
                    <h3>Accionista</h3>
                    <p>
                    Inversionista que posee acciones de una empresa, buscando obtener retornos financieros a través del aumento del valor de sus acciones y/o el pago de dividendos, participando en las decisiones corporativas y los resultados de la empresa.
                    </p>
                </div>

                <div class="coffee-1">
                    <img src="media/finan_5.png" alt="">
                    <h3>Financiamiento</h3>
                    <p>
                    Proceso mediante el cual se obtienen recursos monetarios para operar, expandirse o realizar inversiones, a través de préstamos, emisión de acciones, capital de riesgo, esencial para el crecimiento económico y la innovación.
                    </p>
                </div>
            </div>
            <a href="#" class="btn-1">Information</a>
        </div>
    </section>

    <main class="servicies">
        <div class="servicies-content container">
            
            
            <div class="servicies-group">
            
                <div class="servicies-1">
                    <img src="media/moneda_amarilla.webp" alt="">
                    <h3>servicie </h3>
                </div>
    
                <div class="servicies-1">
                    <img src="media/moneda_amarilla.webp" alt="">
                    <h3>servicie </h3>
                </div>
    
                <div class="servicies-1">
                    <img src="media/moneda_amarilla.webp" alt="">
                    <h3>servicie </h3>
                </div>
    
            </div>
            <p>
                En FinSist podrás seguir sectores que te interesen y se te mostrarán aquellos proyectos que encajan con tus gustos. 
                Conoce a emprendedores cerca de ti con ideas geniales.
            </p>
    
            
    
        </div>
        
        

        
    </main>

    <section class="general">
        
        <div class="general-1">
            <h2>Registrar Marca y Patentes</h2>
            <p>
                En FinSist incluye la manera mas fácil y segura de registrar tu marca. 
                Tu nos facilitas tu nombre y descripcion, y nosotros nos encargamos de todo para que no te preocupes.
            </p>
            
        </div>
        
        <div class="general-2"></div>

    </section>

    <section class="general">
        
        <div class="general-3"></div>
        
        <div class="general-1">
            <h2>Requisitos Legales</h2>
            <p>
                Los comercios electrónicos deben cumplir tanto la normativa de protección de datos como la de consumidores. 
                Si estás pensando en lanzar un negocio en la red, deberías saber cuáles son los requisitos mínimos 
                necesarios para hacerlo conforme a la ley.
            </p>
            
        </div>
        
    </section>

    <section class="blog container">
        <h2>Blog</h2>
        <p> </p>

        <div class="blog-content">
            
            <div class="blog-1">
                <img src="images/blog1.jpg" alt="">
                <h3>Registrar Marca</h3>
                <p>
                    En FinSist preferimos describir al emprendedor como un "superhéroe resolutivo, libre, inteligente,soñador y
                    decidido,capaz de identificar un plan de negocio y lanzarse con determinación.
                </p>
            </div>

            <div class="blog-1">
                <img src="images/bg2.jpg" alt="">
                <h3>Cuanto Cuesta?</h3>
                <p>
                    Lanzar un proyecto no es para todos los bolsillos. Algunas ideas requieren una gran inversión pero hay trucos 
                    por los que podríamos ahorrarnos.
                </p>
            </div>

            <div class="blog-1">
                <img src="images/blog3.jpg" alt="">
                <h3>Materializar Idea</h3>
                <p>
                    ¿Quién no ha tenido una buena idea y no la ha materializado por falta de información? Desde FinSist 
                    damos respuesta a tus inquietudes para que tus proyectos no mueran por falta de conocimiento.
                </p>
            </div>
        </div>
       
    </section>

    <footer class="footer">
        <div class="footer-content container">

            <div class="link">
                <h3>titulo</h3>
                <ul class="ul_footer">
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                </ul>

            </div>

            <div class="link">
                <h3>titulo</h3>
                <ul class="ul_footer">
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                </ul>

            </div>

            <div class="link">
                <h3>titulo</h3>
                <ul class="ul_footer">
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">lorem</a></li>
                </ul>

            </div>
        </div>
    </footer>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>