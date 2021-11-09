@extends('layouts.app')

@section('title', 'Política Garantía')

@section('categories-menu')
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
@stop

@section('content')
    <h1>Políticas de Garantía</h1>
    <p>Los productos estan garantizados contra defectos de fabrica. En manufactura y funcionalidad por un determinado período de tiempo, el cual varia según el producto y fabricante.
        Con Excepción en los productos consumibles como ejemplo: cartuchos, papel, comida, cosmeticos, medicamentos. <br> <br>
        La presente garantía se limitan a la reparación, remplazo de la o las piezas que correspondan y el servicio que sea necesario para tales efectos.  Es requisito indispensable para poder hacer
        efectiva la Garantía, presentar el original o una copia de factura comercial, correspondiente a la venta del equipo, asi como de la presentación original del certificado de garantía debidamente 
        sellado y firmado, donde deberá constar claramente el tipo de equipo, marca, modelo, número de serie y fecha de compra. <br><br>

        Ta-chilero no se comprometerá a reparar o reemplazar piezas en calidad de garantía, en los siguientes casos: <br><br>
        <ol>
            <li>Daños fisicos, piezas quebradas, perforadas, rajadas o quemadas</li>
            <li>Cuando el sello de garantia esté violado</li>
            <li>Todo lo relacionado al software, programas, configuraciones (impresoras, tamaños de papel, desconfiguración de windows, multimedia), uso de paquetes, virus, etc.</li>
            <li>Fallas electricas, cortes de energía eléctrica variaciones en la corriente electrica, mala instalación electrica</li>
            <li>Falta de conocimiento del usuario en el uso del equipo o mal trato del mismo</li>
            <li>Falta de mantenimiento</li>
            <li>Destapar o extraer piezas del computador o equipo</li>
            <li>Intervencion de técnicos ajenos a la empresa</li>
            <li>Por fenómenos naturales, como lo son: tormentas electricas, inundaciones, terremotos, vandalismo, etc.</li>
            <li>Desgaste de productos renovables o consumibles</li>
            <li>Los monitores y pantallas de Notebook con pixeles dañados, unicamente serán aceptados por garantiía, cuando los pixeles dañados, sean mas de 7</li>
            <li>Si la impresora usa cartuchos genéricos o rellenados</li>
            <li>Por líquidos derramados sobre el proudcto o precencia de animales en el mismo (cucarachas, etc.)</li>
        </ol>
        Ta chilero se recerva las reparaciones bajo las condiciones anteriores, tendrá derecho a realizar cobros que considere convenientes. <br><br>
        Componentes o equipos descontinuados por el fabricante, seran cambiados por el inmediato superior, debiendo pagar el cliente.
    </p>
    <h2>Proceso de garantía</h2>
    <p>
        <ul>
            <li>El cliente deberá enviar un correo a la siguiente dirección grupochiquitosa@gmail.com con los siguientes datos: número de pedido, fotografías del producto, razón o inconveniente con el producto</li>
            <li>Una vez verificada la información se procederá a dictaminar si el producto cumple con los términos para iniciar el proceso de garantía</li>
            <li>No aplica: recibirás un correo electrónico de los motivos por los que no aplica garantía</li>
            <li>Si aplica: recibirás un correo solicitando el producto a nuestras instalaciones para soporte técnico. (él envio del producto deberá ser cubierto por el cliente.)</li>
            <li>Una vez recibido el producto se realizará evaluación fisica por el departamento técnico</li>
            <li>Si aplica, se procede a la reparación cambio, reembolso o nota de crédito. (Se enviará correo noficando la resolución)</li>
            <li>No aplica, se enviará correo al cliente detallando las razones por la cuales no procede.</li>
        </ul>
    </p>
@endsection