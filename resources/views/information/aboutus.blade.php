@extends('layouts.app')

@section('categories-menu')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Este boton solo se muestra version telefono -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="categoriesMenu">
            <ul class="navbar-nav">
            @foreach($taxonomies as $taxonomy)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ $taxonomy->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @include('product.index._category_level', ['taxons' => $taxonomy->rootLevelTaxons()])
                    </div>
                </li>
            @endforeach
            </ul>
        </div>
    </nav>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="p-3 border bg-light">
                    <h2>Columna1</h2>
                    <p>Texto de la columna uno</p>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="p-3 border bg-light">
                    <h2>Columna2</h2>
                    <p>Texto de la segunda columna</p>
                </div>
            </div>
        </div>
        <h1>Tenemos todo lo que necesitas</h1>

        <p>Tinyfis es una tienda en linea que te permite obtener los productos que necesites
            de la forma más segura, todo desde la comodidad de tu hogar contamos con entregas
            en todo el pais. <br>

            Ademas contamos con distintos proveedores los cuales muestran sus productos en tu tienda
            en linea garantizando proveedores certificados por nosotros para evitar cobros y productos
            no seleccionados. <br><br>

            Tynyfis es una plataforma innovadora que conecta a vendedores y compradores a través de un 
            sistema confiable de validación y verificación denominada payment assurance, con formas seguras de pagar, protección contra
            circunstancias imprevistas, como problemas con el envío, mediación entre compradores y proveedores.

            <h1>Proveedor de Confianza</h1>

            Los vendedores que desean ofrecer sus productos en Tynyfisdeben de someterse a una serie de verificaciones 
            para garantizar que cumplan con los estándares de calidad y transparencia de la plataforma.  Este proceso 
            incluye la verificación de identidad, historial de ventas, cumplimiento de normativas legales y la evaluación
            de la calidad de sus productos.  Una vez aprobados, se les otorga la insignia de "Proveedor de confianza", lo
            que aumenta su visibilidad y credibilidad dentro de la plataforma.

            <h1>Cliente de confianza</h1>

            De manera similar, los compradores tambien son validados para asegurar la legitimidad de sus transacciones.  Esto
            implica la verificación de identidad y una revisión del historial de compras, lo que les permite obtener la insignia 
            de "Cliente de confianza".  Con esta esta distinción, los compradores pueden acceder a ofertas exclusivas y negociar 
            con proveedores con mayor seguridad.

            Tynyfis ofrece un entorno donde la confianza y la seguridad son los pilares fundamentales de cada transacción, creando
            una comunidad próspera y segura para todos sus usuarios.
        </p>

        <div class="row">
            <h1>Nuestros valores</h1>

            Los valores de Tinyfis se fundamentan ne principios esenciales que guían todas las operaciones y relaciones 
            dentro de la plataforma. <br><br>
            
            <div class="col-12 col-md-4">
                <div class="p-3 border bg-light">

                <h2>Confianza</h2>

                Nuestro objetivo es crear un entorno basado en la confianza donde todos los usuarios se sientan respaldados 
                por relaciones confiables y seguras.
                
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="p-3 border bg-light">
                <h2>Integridad</h2>

                En Tinyfis creemos en la transparencia, el respeto por el cumplimiento de los más altos estándares éticos.
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="p-3 border bg-light">
                    <h2>Calidad</h2>

                    Tinyfis se esfuerza por ofrecer productos y servicios de la más alta calidad, nos aseguramos de que cada producto 
                    que se comercializa en nuestra plataforma cumpla con los criterios de excelencia que nuestros usuarios esperan.
                </div>
            </div>
        </div>

        <h1>Misión</h1>

        Ofrecer una plataforma en linea que permita a los usuarios comprar y vender productos de manera segura y sin riesgos 
        de estafas, a traves de un sistema de validación de vendedores y productos.  Nos enfocamos en garantizar la transparecia, 
        proteger a nuestros usuarios y promover una economia basado en la confianza y sostenibilidad.

        <h1>Visión</h1>

        Ser la tienda en línea más confiable para la compra y venta de productos, donde cada usuario pueda encontrar lo que necesita 
        con la tranquilidad de estar respaldado por un sistema de verificación y confianza.

        <h2>Vende a traves de Tinyfis</h2>

        <p>Quieres formar parte de nuestra vendedores dentro de nuestra tienda. Registrate para pdo_drivers
            vender tus productos y poder llegar a tu publico y hacer crecer tu negocio, comienza a vender en linea 
            con nostros y llega a todo el país.
        </p>
    </div>
@stop