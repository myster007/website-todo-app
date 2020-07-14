<!-- @extends ('layouts.hom') -->

<!-- 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Artur Gorzelany front-end developer portfolio"
    />
    <link rel="stylesheet" href="./dist/css/styles.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700&display=swap"
      rel="stylesheet"
    />
    <title>Artur Gorzelany</title>
  </head>
  <body>
    <div id="stars2"></div>
    <header class="header">
      <nav class="header__nav">
        <ul class="header__list">
          <li class="header__list--item">
            <a href="#hero" id="hero-link">Home</a>
          </li>
          <li class="header__list--item">
            <a href="#about" id="about-link">About</a>
          </li>
          <li class="header__list--item">
            <a href="#projects" id="projects-link">Projects</a>
          </li>
          <li class="header__list--item">
            <a href="#contact" id="contact-link">Contact</a>
          </li>
        </ul>
      </nav>
    </header>
    <main>
      <section id="hero" class="page-section hero" data-link="#hero-link">
        <div class="hero__title">
          Hello, I am <span class="highlight"> Artur Gorzelany</span>.
          <br />
          I <span class="cross">am</span> want to be a front-end devloper.
          <br />
          <a href="#about" class="btn btn--main">
            <p>View my work</p>
            <svg class="btn--main--icon" viewBox="0 0 32 32">
              <use xlink:href="./src/icons/icons.svg#right-arrow"></use>
            </svg>
          </a>
        </div>
      </section>
      <section id="about" class="page-section about" data-link="#about-link">
        <h1 class="heading">
          ABOUT
        </h1>
        
        <div class="about__hexagons">
          <div class="hexagon__wrapper">
            <div class="hexagon">
              <svg class="about__icon" viewBox="0 0 32 32">
                <use xlink:href="./src/icons/icons.svg#map"></use>
              </svg>
            </div>
            <p class="hexagon__text">
              Always having a destination
            </p>
          </div>
          <div class="hexagon__wrapper">
            <div class="hexagon">
              <svg class="about__icon" viewBox="0 0 32 32">
                <use xlink:href="./src/icons/icons.svg#manager"></use>
              </svg>
            </div>
            <p class="hexagon__text">
              Responsible
            </p>
          </div>
          <div class="hexagon__wrapper">
            <div class="hexagon">
              <svg class="about__icon" viewBox="0 0 32 32">
                <use xlink:href="./src/icons/icons.svg#coworking"></use>
              </svg>
            </div>
            <p class="hexagon__text">
              Communicative
            </p>
          </div>
          <div class="hexagon__wrapper">
            <div class="hexagon">
              <svg class="about__icon" viewBox="0 0 32 32">
                <use xlink:href="./src/icons/icons.svg#trekking"></use>
              </svg>
            </div>
            <p class="hexagon__text">
              Independent
            </p>
          </div>
          <div class="hexagon__wrapper">
            <div class="hexagon">
              <svg class="about__icon" viewBox="0 0 32 32">
                <use xlink:href="./src/icons/icons.svg#timer"></use>
              </svg>
            </div>
            <p class="hexagon__text">
              Always on time
            </p>
          </div>
          <div class="hexagon__wrapper">
            <div class="hexagon">
              <svg class="about__icon" viewBox="0 0 32 32">
                <use xlink:href="./src/icons/icons.svg#mountain"></use>
              </svg>
            </div>
            <p class="hexagon__text">
              Setting goals in my life
            </p>
          </div>
        </div>
        <div class="about__content">
          <img
            class="about__img"
            src="./src/images/me.jpg"
            width="340"
            height="520"
            alt="photo of me"
          />
          <div class="about__skills-wrapper">
            <p class="about__skills-percentage-info">
              *Percentages indicate my confidence using associated technologies
            </p>
            <div class="about__skills">
              <div class="about__skill-bar">
                <div class="about__skill-bar--skill-name">HTML5</div>
                <div class="about__skill-bar--percentage-outer">
                  <div
                    class="about__skill-bar--percentage-inner about__skill-bar--percentage-inner--html"
                  >
                    90%
                  </div>
                </div>
              </div>
              <div class="about__skill-bar">
                <div class="about__skill-bar--skill-name">CSS3</div>
                <div class="about__skill-bar--percentage-outer">
                  <div
                    class="about__skill-bar--percentage-inner about__skill-bar--percentage-inner--css"
                  >
                    85%
                  </div>
                </div>
              </div>
              <div class="about__skill-bar">
                <div class="about__skill-bar--skill-name">JAVASCRIPT</div>
                <div class="about__skill-bar--percentage-outer">
                  <div
                    class="about__skill-bar--percentage-inner about__skill-bar--percentage-inner--js"
                  >
                    80%
                  </div>
                </div>
              </div>
              <div class="about__skill-bar">
                <div class="about__skill-bar--skill-name">REACT</div>
                <div class="about__skill-bar--percentage-outer">
                  <div
                    class="about__skill-bar--percentage-inner about__skill-bar--percentage-inner--react"
                  >
                    85%
                  </div>
                </div>
              </div>
              <div class="about__skill-bar">
                <div class="about__skill-bar--skill-name">REDUX</div>
                <div class="about__skill-bar--percentage-outer">
                  <div
                    class="about__skill-bar--percentage-inner about__skill-bar--percentage-inner--redux"
                  >
                    75%
                  </div>
                </div>
              </div>
              <div class="about__skill-bar">
                <div class="about__skill-bar--skill-name">GIT</div>
                <div class="about__skill-bar--percentage-outer">
                  <div
                    class="about__skill-bar--percentage-inner about__skill-bar--percentage-inner--git"
                  >
                    85%
                  </div>
                </div>
              </div>
              <div class="about__skill-bar">
                <div class="about__skill-bar--skill-name">JEST</div>
                <div class="about__skill-bar--percentage-outer">
                  <div
                    class="about__skill-bar--percentage-inner about__skill-bar--percentage-inner--jest"
                  >
                    60%
                  </div>
                </div>
              </div>
              <div class="about__skill-bar">
                <div class="about__skill-bar--skill-name">TYPESCRIPT</div>
                <div class="about__skill-bar--percentage-outer">
                  <div
                    class="about__skill-bar--percentage-inner about__skill-bar--percentage-inner--typescript"
                  >
                    20%
                  </div>
                </div>
              </div>
            </div>
            <div class="about__skills__description">
              Hover skills to show details
            </div>
          </div>
        </div>
      </section>
      <section
        id="projects"
        class="projects page-section"
        data-link="#projects-link"
      >
        <h1 class="heading">
          PROJECTS
        </h1>
        <div class="projects__content">
          <div class="project project--clothes">
            <div class="project__desc">
              <p class="project__desc--title">
                Clothes Shop
              </p>
              <p class="project__desc--stack">
                react / redux / react-router / redux-saga / styled-components /
                axios / firestore
              </p>
            </div>
            <div class="btn__container">
              <a
                href="https://clothes-shop--live.herokuapp.com/"
                target="_blank"
                rel="noopener"
                class="btn btn--project"
                >Live</a
              >
              <a
                href="https://github.com/Artas47/clothes-shop-project"
                target="_blank"
                rel="noopener"
                class="btn btn--project"
                >Code</a
              >
            </div>
          </div>
          <div class="project project--movie">
            <div class="project__desc">
              <p class="project__desc--title">
                Movie Search
              </p>
              <p class="project__desc--stack">
                react / context api / react-router / styled-components / axios
              </p>
            </div>
            <div class="btn__container">
              <a
                href="https://movie-search-live.herokuapp.com/"
                target="_blank"
                rel="noopener"
                class="btn btn--project"
                >Live</a
              >
              <a
                href="https://github.com/Artas47/movie-search"
                target="_blank"
                rel="noopener"
                class="btn btn--project"
                >Code</a
              >
            </div>
          </div>
          <div class="project project--youtube">
            <div class="project__most-proud-of"></div>
            <p class="project__most-proud-of--text">Most proud of</p>
            <div class="project__desc">
              <p class="project__desc--title">
                YouTube Clone
              </p>
              <p class="project__desc--stack">
                react / redux / react-router / react-responsive /
                styled-components / redux-toolkit / redux-thunk / reselect /
                axios / lodash
              </p>
            </div>
            <div class="btn__container">
              <a
                href="https://youtube-clone-live.herokuapp.com/"
                target="_blank"
                rel="noopener"
                class="btn btn--project"
                >Live</a
              >
              <a
                href="https://github.com/Artas47/yt-clone"
                target="_blank"
                rel="noopener"
                class="btn btn--project"
                >Code</a
              >
            </div>
          </div>
          <div class="project project--portfolio">
            <div class="project__desc">
              <p class="project__desc--title">
                My Portfolio
              </p>
              <p class="project__desc--stack">
                html / css / sass / BEM / vanilla javascript / lodash / webpack
              </p>
            </div>
            <div class="btn__container">
              <a
                href="https://github.com/Artas47/portfolio"
                target="_blank"
                rel="noopener"
                class="btn btn--project"
                >Code</a
              >
            </div>
          </div>
          <div class="project project--news">
            <div class="project__desc">
              <p class="project__desc--title">
                Quick News
              </p>
              <p class="project__desc--stack">
                react / redux / react-router / redux-saga / styled-components /
                axios
              </p>
            </div>
            <div class="btn__container">
              <a
                href="https://quick-news.herokuapp.com/"
                target="_blank"
                rel="noopener"
                class="btn btn--project"
                >Live</a
              >
              <a
                href="https://github.com/Artas47/quick-news"
                target="_blank"
                rel="noopener"
                class="btn btn--project"
                >Code</a
              >
            </div>
          </div>
          <p class="projects__info">
            *Projects are hosted on Heroku for free which may cause a little
            delay before the project will load in the browser
          </p>
        </div>
        <div class="projects__github">
          <a href="https://github.com/Artas47" target="_blank" rel="noopener">
            <svg class="projects__icon" viewBox="0 0 32 32">
              <use xlink:href="./src/icons/icons.svg#github"></use>
            </svg>
          </a>
        </div>
      </section>
    </main>
    <footer id="contact" class="page-section contact" data-link="#contact-link">
      <h1 class="heading heading--white">
        CONTACT
      </h1>
      <p class="contact__text">
        Have a question or want to work together?
      </p>
      <p class="contact__email">artur.gorzelany98@gmail.com</p>
    </footer>
    <script src="dist/js/bundle.js"></script>
  </body>
</html> -->
