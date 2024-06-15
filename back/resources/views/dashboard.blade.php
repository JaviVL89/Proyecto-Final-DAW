<!DOCTYPE html>
<html lang="en">
<title>Dashboard | CustomAcademy</title>    
@include('profile.partials.header')
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('js/dashboard.js') }}" defer></script>

<div class="separator"></div>

<main class="main">
    <section class="left-panel">
        <div class="catalog">
            <h2>Los más populares</h2>
            <div class="catalog-grid">
                <div class="plan">
                    <div class="inner">
                        <span class="pricing">
                            <span>3 Horas</span>
                        </span>
                        <p class="title">HTML 5</p>
                        <img src="{{ asset('images/html5.png') }}" alt="Descripción de la imagen" class="course-image">
                        <p class="info">Aprende HTML 5 desde cero y crea sitios web impresionantes con los últimos estándares.</p>
                        <ul class="features">
                            <li>
                                <span class="icon">
                                    <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                        <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                    </svg>
                                </span>
                                <span><strong>20</strong> lecciones</span>
                            </li>
                        <div class="action">
                            <a class="button" href="/courses/1">Comenzar curso</a>
                        </div>
                    </div>
                </div>
                <div class="plan">
                    <div class="inner">
                        <span class="pricing">
                            <span>6 Horas</span>
                        </span>
                        <p class="title">Java Spring</p>
                        <img src="{{ asset('images/spring.png') }}" alt="Descripción de la imagen" class="course-image">
                        <p class="info">Domina la programación en Java con Spring y desarrolla aplicaciones robustas.</p>
                        <ul class="features">
                            <li>
                                <span class="icon">
                                    <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                        <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                    </svg>
                                </span>
                                <span><strong>Framework</strong> incluido</span>
                            </li>
                        <div class="action">
                            <a class="button" href="/courses/2">Comenzar curso</a>
                        </div>
                    </div>
                </div>
                <div class="plan">
                    <div class="inner">
                        <span class="pricing">
                            <span>5 Horas</span>
                        </span>
                        <p class="title">JavaScript</p>
                        <img src="{{ asset('images/JS.jpg') }}" alt="Descripción de la imagen" class="course-image">
                        <p class="info">Comprende los fundamentos y crea aplicaciones web dinámicas e interactivas en poco tiempo.</p>
                        <ul class="features">
                            <li>
                                <span class="icon">
                                    <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                        <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                    </svg>
                                </span>
                                <span><strong>+120</strong> funciones</span>
                            </li>
                        <div class="action">
                            <a class="button" href="/courses/3">Comenzar curso</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="right-panel">
        <div class="top-right">
            <h2>Personaliza tu aprendizaje</h2>
            <p>Inicia tu aventura educativa con cursos hechos a tu medida. Indícanos tu nivel actual y tus intereses para ofrecerte la experiencia más enriquecedora. ¡Tu camino hacia el conocimiento comienza aquí!</p>
            <a class="btn" href="{{ route('test.show') }}">Comenzar test</a>
        </div>
        <div class="bottom-right">
            <canvas id="myChart"></canvas>
        </div>
    </section>
</main>
<div class="separator"></div>

@include('profile.partials.footer')
</body>
</html>
