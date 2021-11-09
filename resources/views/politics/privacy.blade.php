@extends('layouts.app')

@section('title', 'Política privacidad')

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
    <h1>Políticas de privacidad</h1>
    <p>Esta politica de privacidad establece los términos para que <strong>Ta-Chilero</strong> utilice y proteja la infromación proporcionada por sus usuarios al utilizar 
    el sitio web. La información personal de los usuarios no serán cedidos, comunicados ni transferidos a terceros, excepto a 
    entidades relacionadas a Grupo Chiquitó S.A. de quien es miembro <strong>Ta-Chilero</strong>.   Cuando le solicitemos que complete los campos de información personal que puedan identificarlo, nos aseguraremos de que esta información se utilice solo de acuerdo con los términos de este documento.  Sin embargo, esta política 
    de privaciad puede cambiarse o actulizarse con el tiempo, por lo que recomendamos y enfatisamos que continúe revisando esta pagina para asegurarse de que esta de acuerdo con los 
    cambios anterirores.  <strong>Al visitar Ta-Chilero.gt, acepta los terminos y condiciones de uso descritas en esta pagina.</strong>
    </p>

    <h3>Información que es recogida</h3>
    <p>
        Nuestro sitio web recopila datos para operar de manera eficiente y brindarle la mejor experiencia a través de nuestros servicios en línea. Los usuarios ingresán datos directamente al crear una cuenta personal. 
        Recibimos y almacenamos cualquier información que ingrese en nuestro sitio web o que nos proporcione de cualquier otra manera. Los usuarios pueden optar por no proporcionar cierta información, pero es posible que no 
        pueda utilizar de manera adecuada nuestras funciones.  La información proporcionada sera utilizada para fines que mejoren la funcionalidad y experiencia de compra para poder personalizar sus futuras compras.
    </p>

    <h3>Uso de la información recogida</h3>
    <p>
        La informacion proporcionada se utiliza para brindar el mejor servicio, especialmente para mantener registros de usuarios, pedidos en caso que aplique y para mejorar nuestros productos y servicios.  Es posible que se
        envíen correos electronicos con regularidad a través de nuestro sitio web, que contienen ofertas especiales, nuevos productos y otra información publicitaria que creemos que son relevantes o que pueden ser relevantes 
        para los usuarios.  Para brindarle algunos beneficios, estos correos electrónicos se enviaran a la dirección que proporcionó y que pueden cancelarse en cualquier momento. <br>
        Al proporcionarnos su datos personales, nos autoriza para uso de su información de conformidad con lo siguiente. <br>
        <ol>
            <li>
                Envios de correos electronicos cuando se requerido para notificaciones sobre la cuenta de usuario, boletines responder inquietudes o comentarios, mantener informado a los usuarios, fines publicitarios (Estos pueden soliticarse la cancelación). <br>
            </li>
            <li>
                Para valorar sus criterios y orientar mejor los productos y sercicios aquí ofrecidos. <br>
            </li>
            <li>
                Con fines estadisticos.
            </li>
            <li>Para la integración de nuestra base de datos de usuarios. <br></li>
        </ol>
        <strong>Ta-Chilero</strong> está altamente comprometico con el cumplimiento de su información y por el rasponsabilidad que estos.  Usamos los sistemas más avanzados y los actualizamos constantemente para asegurarnos de que no exista ningún acceso no autorizado.
    </p>
    <h3>Cookies</h3>
    <p>Una cookies se refiere a un fichero que es enviado con la finalidad de solicitar permiso para almacenarse en su ordenador, al aceptar dicho fichero se crea y la cookie sirve entonces para tener información respecto 
        al tráfico web, y tambien facilita las futuras visitas en una web recurrente.  Otra función que tienen las cookies es que con ellas nuestra web puede reconocerte individualmente y por tanto brindarte el mejor servicio 
        personalizado de su web.  <br>
        Nuestro sitio web emplea las cookies para poder identificar las páginas que son visitadas y su frecuencia.  Esta información es empleada únicamente para analisis estadístico y despues la información se elimina de forma 
        permanente.  Usted puede eliminar las cookies en cualquier momento desde su ordenador.  Sin embargo las cookies ayudan a proporcionar un mejor servicio de los sitios web, estás no dan acceso a información de su ordenador 
        ni de usted, a menos de que usted asi lo quiera y la proporcione directamente.  Usted puede aceptar cookies automaticamente pues sirve para tener un mejor servicio web.  También usted puede cambiar la configuración de su ordenador
        para declinar las cookies.  Si se declinan es posible que no pueda utilizar algunos de nuestros servicios.
    </p>
    <h3>Enlaces a terceros</h3>
    <p>Este sitio web pudiera contener enlaces a otros sitios que puedieran ser de su interés.  una vez que usted de clic en estos enlaces y abandone nustra pagina, ya no tenemos control sobre al sitio al que es dirigido y por lo 
        tanto no somos responsables de los terminos o privacidad ni de la protección de sus datos en esos otros sitios terceros.  Dichos sitios están sujetos a sus propias politicas de privacidad por lo cual es recomendable que los 
        consulte para confirmar que usted esta de acuerdo con estas.
    </p>
    <h3>Control de su información personal</h3>
    <p>En cualquier momento usted puede restringir la recopilación o el uso de la información personal que es proporcionada a nuestro sitio web.  Cada vez que se le solicite rellenar un formulario, como el de dar de alta a un usuario,
         puede marcar o desmarcar la opción de recibir información por correo electrónico.  En caso de que haya marcado la opcion de recibir nuestro boletín o publicidad usted puede cancelarla en cualquier momento. <br>
         Ta-chilero no venderá, cedera ni distribuira la información personal que es recopilada sin su consentimiento, salvo que sea requerido por un juez con orden judicial.  <br>
        <strong> Ta-chilero</strong> se reserva el derecho de cambiar los términos de la presente Politica de Privacidad en cualquier momento.  <br>
    </p>
@endsection