@extends('layout.layout')

@section('content')
    <div class="row">
        <div class="col-3">
            @include('shared.left-sidebar')
        </div>
        <div class="col-6">
            <h1>Términos y condiciones</h1>
            <div>
                Términos y Condiciones de Uso

                INFORMACIÓN RELEVANTE
                Es requisito necesario para la adquisición de los servicios que se ofrecen en este sitio, que lea
                y acepte los siguientes Términos y Condiciones que a continuación se redactan. El uso de
                nuestros servicios implicará que usted ha leído y aceptado los Términos y Condiciones de Uso
                en el presente documento. Todas los servicios que son ofrecidos por nuestro sitio web
                pudieran ser creadas, cobradas, enviadas o presentadas por una página web tercera y en tal
                caso estarían sujetas a sus propios Términos y Condiciones. En algunos casos, para adquirir
                un servicio, será necesario el registro por parte del usuario, con ingreso de datos personales
                fidedignos y definición de una contraseña.
                El usuario puede elegir y cambiar la clave para su acceso de administración de la cuenta en
                cualquier momento, en caso de que se haya registrado y que sea necesario para la solicitud
                de alguno de nuestros servicios. plusSilver no asume la responsabilidad en
                caso de que entregue dicha clave a terceros.
                Todas las compras y transacciones que se lleven a cabo por medio de este sitio web, están
                sujetas a un proceso de confirmación y verificación, el cual podría incluir la verificación y
                disponibilidad de producto, validación de la forma de pago, validación de la factura (en caso de
                existir) y el cumplimiento de las condiciones requeridas por el medio de pago seleccionado. En
                algunos casos puede que se requiera una verificación por medio de correo electrónico.
                Los precios de los servicios ofrecidos en este Sitio Web es válido solamente en las compras
                realizadas en este sitio web.
                LICENCIA
                plusSilver a través de su sitio web concede una licencia específica por un lapso
                de tiempo definido para que los usuarios utilicen los servicios con el fin de lograr la
                acreditación de acuerdo a los Términos y Condiciones que se describen en este documento.
            </div>
        </div>
        <div class="col-3">
            @include('shared.search-bar')
            @include('shared.follow-box')
        </div>
        
    </div>
@endsection