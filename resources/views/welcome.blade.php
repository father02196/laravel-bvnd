
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"> {{-- Codificación del documento --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> {{-- Escala responsiva --}}
    <title>Solusiones Díaz y Asociados</title> {{-- Título del navegador --}}
    <style>
        h2{
            text-align: center;
        }
        p{
         text-align: center;
        }
        body {
            font-family: 'Segoe UI', sans-serif; /* Fuente general */
            background: #f2f2f2; /* Color de fondo */
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #003366;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .container {
            padding: 30px;
        }
        h2 {
            color: #003366;
        }
        .logo {
            width: 100px;
        }
        /*.section {
            margin-bottom: 20px;
            text-align: center;
        }*/
        .section1 {
            width:35%;
            margin:0 auto;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ asset('images/logo.png') }}" class="logo" alt="Logo de la empresa"> {{-- Logo --}}
        <h1>Bienvenido a Solusiones Díaz y Asociados</h1> {{-- Título principal --}}
    </div>

    <div class="container">
        <div class="section">
            <h2>Introducción</h2>
            <p>En un entorno económico dinámico y desafiante, la necesidad de servicios financieros flexibles y accesibles se ha convertido en una prioridad para individuos y empresas por igual. En este contexto, [SOLUSIONES DÍAZ Y ASOCIADOS], se presenta como una solución integral en el sector de préstamos, comprometida a satisfacer las necesidades financieras de nuestros clientes con transparencia, eficiencia y responsabilidad</p>
        </div>

        <div class="section">
            <h2>Misión</h2>
            <p>Proporcionar soluciones financieras accesibles y personalizadas que impulsen el progreso económico de individuos y empresas. Nos comprometemos a ofrecer servicios confiables, transparentes e innovadores que satisfagan las necesidades cambiantes de nuestros clientes, respaldados por un equipo comprometido con la excelencia y la integridad. ...</p>
        </div>

        <div class="section">
            <h2>Visión</h2>
            <p>Ser reconocidos como líderes en la industria de préstamos, destacando por nuestra capacidad para adaptarnos dinámicamente a las tendencias del mercado y a las necesidades cambiantes de nuestros clientes. Aspiramos a ser la primera opción para aquellos que buscan soluciones financieras flexibles, confiables y orientadas al éxito a largo plazo...</p>
        </div>

        <div class="section1">
            <h2>Valores</h2>
            <ol class="section1">
                <li>Integridad</li>
                <li>Innovación</li>
                <li>Compromiso con el cliente</li>
                <li>Responsabilidad Social</li>
                <li>Empatía</li>
    </ol>
        </div>

        <div class="section">
            <h2>Objetivos Estratégicos</h2>
            <p>Crecimiento de la cartera de préstamos, eficiencia operativa...</p>
        </div>
    </div>
</body>
</html>
