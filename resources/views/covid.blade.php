@extends('layout')

@section('contenido')

<div class="page-title" style="background-image: url(images/page-title.png)">
    <h1>Covid-19</h1>
</div>

<section id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="about-img">
                    <img src="images/about-img_covid19.png" alt="">
                </div>
            </div>
            <div class="col-md-5">
                <div class="about-content">
                    <h2>¿Qu&eacute; es COVID-19 ?</h2>
                    <p>La COVID-19 es la enfermedad infecciosa causada por el coronavirus que se ha descubierto m&aacute;s recientemente. Tanto el nuevo virus como la enfermedad eran desconocidos antes de que estallara el brote en Wuhan (China) en diciembre de 2019.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="middle" class="skill-area" style="background-image: url(images/skill-bg_covid19.png)">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 fadeInDown">
                <div class="skill">
                    <h2>¿Cuáles son los síntomas de la COVID-19?</h2>
                    <p>Los síntomas más comunes de la COVID-19 son fiebre, cansancio y tos seca. Algunos pacientes pueden presentar dolores, congestión nasal, rinorrea, dolor de garganta o diarrea. Estos síntomas suelen ser leves y aparecen de forma gradual. Algunas personas se infectan pero no desarrollan ningún síntoma y no se encuentran mal. La mayoría de las personas (alrededor del 80%) se recupera de la enfermedad sin necesidad de realizar ningún tratamiento especial. Alrededor de 1 de cada 6 personas que contraen la COVID-19 desarrolla una enfermedad grave y tiene dificultad para respirar. Las personas mayores y las que padecen afecciones médicas subyacentes, como hipertensión arterial, problemas cardiacos o diabetes, tienen más probabilidades de desarrollar una enfermedad grave. En torno al 2% de las personas que han contraído la enfermedad han muerto. Las personas que tengan fiebre, tos y dificultad para respirar deben buscar atención médica.</p>
                </div>
            </div>
            <!--/.col-sm-6-->

            <div class="col-md-2 col-sm-6">
                <div>
                    <div class="team-img">
                        <img src="images/sin1.png" alt="">
                    </div>
                    <div class="team-content">
                        <h4 style="color:#FFF">Fiebre > 37.5°</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-6">
                <div>
                    <div class="team-img">
                        <img src="images/sin2.png" alt="">
                    </div>
                    <div class="team-content">
                        <h4 style="color:#FFF">Tos</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-6">
                <div> <!--class="inner"-->
                    <div class="team-img">
                        <img src="images/sin3.png" alt="">
                    </div>
                    <div class="team-content">
                        <h4 style="color:#FFF">Secrecion Nasal</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-6">
                <div>
                    <div class="team-img">
                        <img src="images/sin4.png" alt="">
                    </div>
                    <div class="team-content">
                        <h4 style="color:#FFF">Dificultad para Respirar</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-6">
                <div>
                    <div class="team-img">
                        <img src="images/sin5.png" alt="">
                    </div>
                    <div class="team-content">
                        <h4 style="color:#FFF">Dolor de Garganta</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-6">
                <div>
                    <div class="team-img">
                        <img src="images/sin6.png" alt="">
                    </div>
                    <div class="team-content">
                        <h4 style="color:#FFF">Fatiga</h4>
                    </div>
                </div>
            </div>	            
            
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#middle-->

<section id="team-area">
    <div class="container">
        <div class="center fadeInDown">
            <h2>¿Cómo se propaga la COVID-19?</h2>
            <p class="lead">Una persona puede contraer la COVID-19 por contacto con otra que esté infectada por el virus. La enfermedad puede propagarse de persona a persona a través de las gotículas procedentes de la nariz o la boca que salen despedidas cuando una persona infectada tose o exhala. Estas gotículas caen sobre los objetos y superficies que rodean a la persona, de modo que otras personas pueden contraer la COVID-19 si tocan estos objetos o superficies y luego se tocan los ojos, la nariz o la boca. También pueden contagiarse si inhalan las gotículas que haya esparcido una persona con COVID-19 al toser o exhalar. Por eso es importante mantenerse a más de 1 metro (3 pies) de distancia de una persona que se encuentre enferma.

La OMS está estudiando las investigaciones en curso sobre las formas de propagación de la COVID-19 y seguirá informando sobre los resultados actualizados.</p>
        </div>
    </div>
</section>

@endsection
