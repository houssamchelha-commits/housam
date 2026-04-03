<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portfolio - Houssam</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background:#0f172a;
    color:white;
}

/* NAVBAR */
nav{
    display:flex;
    justify-content:space-between;
    padding:20px;
    background:#020617;
    position:sticky;
    top:0;
}

nav h2{
    color:#38bdf8;
}

nav a{
    color:white;
    text-decoration:none;
    margin-left:15px;
}

/* HERO */
.hero{
    text-align:center;
    padding:80px 20px;
}

.hero h1{
    font-size:40px;
}

.hero span{
    color:#38bdf8;
}

.hero p{
    margin:20px 0;
}

/* BUTTON */
.btn{
    background:#38bdf8;
    padding:10px 20px;
    border:none;
    border-radius:5px;
    cursor:pointer;
}

/* SECTION */
section{
    padding:50px 20px;
}

/* CARDS */
.projects{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(250px,1fr));
    gap:20px;
}

.card{
    background:#1e293b;
    padding:20px;
    border-radius:10px;
    transition:0.3s;
}

.card:hover{
    transform:scale(1.05);
}

/* FOOTER */
footer{
    text-align:center;
    padding:20px;
    background:#020617;
}

/* RESPONSIVE */
@media(max-width:600px){
    .hero h1{
        font-size:28px;
    }
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav>
    <h2>Houssam</h2>
    <div>
        <a href="#about">À propos</a>
        <a href="#projects">Projets</a>
        <a href="#contact">Contact</a>
    </div>
</nav>

<!-- HERO -->
<div class="hero">
    <h1>Bonjour, je suis <span>Houssam</span></h1>
    <p>Stagiaire en 1ère année Développement Full Stack</p>
    <button class="btn" onclick="scrollToProjects()">Voir mes projets</button>
</div>

<!-- ABOUT -->
<section id="about">
    <h2>À propos de moi</h2>
    <p>
        Je suis un étudiant passionné par le développement web.
        Je travaille sur des projets en HTML, CSS, JavaScript et PHP.
        Actuellement, je développe des ateliers pratiques pour améliorer mes compétences.
    </p>
</section>

<!-- PROJECTS -->
<section id="projects">
    <h2>Mes Ateliers PHP</h2>

    <div class="projects">

        <div class="card">
            <h3>Calculatrice PHP</h3>
            <p>Application simple pour effectuer des calculs.</p>
            <button class="btn">Voir</button>
        </div>

        <div class="card">
            <h3>To Do List PHP</h3>
            <p>Gestion des tâches avec ajout et suppression.</p>
            <button class="btn">Voir</button>
        </div>

        <div class="card">
            <h3>Gestion des utilisateurs</h3>
            <p>Système d'inscription et connexion.</p>
            <button class="btn">Voir</button>
        </div>

    </div>
</section>

<!-- CONTACT -->
<section id="contact">
    <h2>Contact</h2>
    <p>Email : houssam@email.com</p>
</section>

<!-- FOOTER -->
<footer>
    <p>© 2026 Houssam - Portfolio</p>
</footer>

<script>
function scrollToProjects(){
    document.getElementById("projects").scrollIntoView({
        behavior:"smooth"
    });
}
</script>

</body>
</html>