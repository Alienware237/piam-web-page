<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* styles/test.scss */
class __TwigTemplate_2fbd092cdc7ed129d33c67e513d7ee8f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "styles/test.scss"));

        // line 1
        echo "@import \"bootstrap/scss/bootstrap\";


.example-wrapper {
  color: green;
}

/********** Template CSS **********/
:root {
  --primary: #6244C5;
  --secondary: #FFC448;
  --light: #FAFAFB;
  --dark: #12141D;
}

.back-to-top {
  position: fixed;
  display: none;
  right: 45px;
  bottom: 45px;
  z-index: 99;
}

.my-6 {
  margin-top: 6rem;
  margin-bottom: 6rem;
}

.py-6 {
  padding-top: 6rem;
  padding-bottom: 6rem;
}


/*** Spinner ***/
#spinner {
  opacity: 0;
  visibility: hidden;
  transition: opacity .5s ease-out, visibility 0s linear .5s;
  z-index: 99999;
}

#spinner.show {
  transition: opacity .5s ease-out, visibility 0s linear 0s;
  visibility: visible;
  opacity: 1;
}


/*** Button ***/
.btn {
  font-weight: 500;
  transition: .5s;
}

.btn.btn-primary,
.btn.btn-secondary {
  color: #FFFFFF;
}

.btn-square {
  width: 38px;
  height: 38px;
}

.btn-sm-square {
  width: 32px;
  height: 32px;
}

.btn-lg-square {
  width: 48px;
  height: 48px;
}

.btn-square,
.btn-sm-square,
.btn-lg-square {
  padding: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: normal;
}


/*** Navbar ***/
.navbar.fixed-top {
  display: none;
  transition: .5s;
}

.navbar .navbar-nav .nav-link {
  padding: 20px 15px;
  color: var(--dark);
  font-size: 18px;
  font-weight: 600;
  outline: none;
}

.navbar .navbar-nav .nav-link:hover,
.navbar .navbar-nav .nav-link.active {
  color: var(--primary);
}

@media (max-width: 991.98px) {
  .navbar .navbar-nav .nav-link  {
    padding: 10px 0;
  }
}


/*** Header ***/
#home {
  margin-bottom: 6rem;
  background: url(img/bg-header.png) left top no-repeat;

.typed-cursor {
  font-size: 30px;
  color: var(--dark);

.btn-play {
  position: relative;
  display: block;
  box-sizing: content-box;
  width: 16px;
  height: 26px;
  border-radius: 100%;
  border: none;
  outline: none !important;
  padding: 18px 20px 20px 28px;
  background: var(--primary);
}

.btn-play:before {
  content: \"\";
  position: absolute;
  z-index: 0;
  left: 50%;
  top: 50%;
  transform: translateX(-50%) translateY(-50%);
  display: block;
  width: 60px;
  height: 60px;
  background: var(--primary);
  border-radius: 100%;
  animation: pulse-border 1500ms ease-out infinite;
}

.btn-play:after {
  content: \"\";
  position: absolute;
  z-index: 1;
  left: 50%;
  top: 50%;
  transform: translateX(-50%) translateY(-50%);
  display: block;
  width: 60px;
  height: 60px;
  background: #FFFFFF;
  border-radius: 100%;
  transition: all 200ms;
}

.btn-play span {
  display: block;
  position: relative;
  z-index: 3;
  width: 0;
  height: 0;
  left: -1px;
  border-left: 16px solid var(--primary);
  border-top: 11px solid transparent;
  border-bottom: 11px solid transparent;
}

@keyframes pulse-border {
  0% {
    transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
    opacity: 1;
  }

  100% {
    transform: translateX(-50%) translateY(-50%) translateZ(0) scale(2);
    opacity: 0;
  }
}

.modal-video .modal-dialog {
  position: relative;
  max-width: 800px;
  margin: 60px auto 0 auto;
}

.modal-video .modal-body {
  position: relative;
  padding: 0px;
}

.modal-video .close {
  position: absolute;
  width: 30px;
  height: 30px;
  right: 0px;
  top: -30px;
  z-index: 999;
  font-size: 30px;
  font-weight: normal;
  color: #FFFFFF;
  background: #000000;
  opacity: 1;
}


/*** About ***/
#about .years .display-1 {
  font-size: 10rem;
  line-height: 9rem;
}

#about .years h5 {
  letter-spacing: 30px;
  margin-right: -30px;
}


/*** Skills ***/
#skill .progress {
  height: 5px;
  border-radius: 5px;
}

#skill .progress .progress-bar {
  width: 0px;
  border-radius: 5px;
  transition: 3s;
}

#skill .nav-pills .nav-link {
  color: var(--dark);
}

#skill .nav-pills .nav-link.active {
  color: #FFFFFF;
}

#skill .tab-content hr {
  width: 30px;
}


/*** Service ***/
.service-item .bg-icon {
  width: 100px;
  height: 100px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: url(../../assets/img/bg-icon.png) center center no-repeat;
  background-size: cover;
}


/*** Project Portfolio ***/
#portfolio-flters li {
  display: inline-block;
  font-weight: 500;
  color: var(--dark);
  cursor: pointer;
  transition: .5s;
  border-bottom: 2px solid transparent;
}

#portfolio-flters li:hover,
#portfolio-flters li.active {
  color: var(--primary);
  border-color: var(--primary);
}

.portfolio-img {
  position: relative;
}

.portfolio-btn {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: rgba(98, 68, 197, .9);
  display: flex;
  align-items: flex-end;
  justify-content: flex-start;
  padding: 30px;
  padding-bottom: 100px !important;
  opacity: 0;
  transition: .5s;
}

.portfolio-item:hover .portfolio-btn {
  opacity: 1;
  padding-bottom: 30px !important;
}


/*** Team ***/
.team-item img {
  transition: .5s;
}

.team-item:hover img {
  opacity: .7;
}

.team-item .team-text {
  position: absolute;
  left: 0;
  right: 60px;
  bottom: 30px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  opacity: 0;
  transition: .5s;
}

.team-item:hover .team-text {
  right: 30px;
  opacity: 1;
}

.team-item .team-text div {
  transition: .5s;
}

.team-item:hover .team-text div {
  margin-left: 30px;
}


/*** Testimonial ***/
.testimonial-left,
.testimonial-right {
  position: relative;
}

.testimonial-left img,
.testimonial-right img {
  position: absolute;
  padding: 5px;
  border: 1px solid var(--secondary);
  border-radius: 70px;
}

.testimonial-left img:nth-child(1),
.testimonial-right img:nth-child(3) {
  width: 70px;
  height: 70px;
  top: 10%;
  left: 50%;
  transform: translateX(-50%);
}

.testimonial-left img:nth-child(2),
.testimonial-right img:nth-child(2) {
  width: 60px;
  height: 60px;
  top: 50%;
  left: 10%;
  transform: translateY(-50%);
}

.testimonial-left img:nth-child(3),
.testimonial-right img:nth-child(1) {
  width: 50px;
  height: 50px;
  bottom: 10%;
  right: 10%;
}

.testimonial-carousel .owl-item img {
  width: 120px;
  height: 120px;
}

.testimonial-carousel .testimonial-icon {
  position: absolute;
  width: 40px;
  height: 40px;
  left: 50%;
  bottom: -15px;
  transform: translateX(-50%);
  display: flex;
  align-items: center;
  justify-content: center;
  background: #FFFFFF;
  border: 1px solid var(--secondary);
  border-radius: 60px;
}

.testimonial-carousel .owl-dots {
  height: 40px;
  margin-top: 25px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.testimonial-carousel .owl-dot {
  position: relative;
  display: inline-block;
  margin: 0 5px;
  width: 30px;
  height: 30px;
  background: #FFFFFF;
  border: 2px solid var(--secondary);
  border-radius: 30px;
  transition: .5s;
}

.testimonial-carousel .owl-dot::after {
  position: absolute;
  content: \"\";
  width: 16px;
  height: 16px;
  top: 5px;
  left: 5px;
  border-radius: 16px;
  background: var(--secondary);
  transition: .5s;
}

.testimonial-carousel .owl-dot.active::after {
  background: var(--primary);
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "styles/test.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@import \"bootstrap/scss/bootstrap\";


.example-wrapper {
  color: green;
}

/********** Template CSS **********/
:root {
  --primary: #6244C5;
  --secondary: #FFC448;
  --light: #FAFAFB;
  --dark: #12141D;
}

.back-to-top {
  position: fixed;
  display: none;
  right: 45px;
  bottom: 45px;
  z-index: 99;
}

.my-6 {
  margin-top: 6rem;
  margin-bottom: 6rem;
}

.py-6 {
  padding-top: 6rem;
  padding-bottom: 6rem;
}


/*** Spinner ***/
#spinner {
  opacity: 0;
  visibility: hidden;
  transition: opacity .5s ease-out, visibility 0s linear .5s;
  z-index: 99999;
}

#spinner.show {
  transition: opacity .5s ease-out, visibility 0s linear 0s;
  visibility: visible;
  opacity: 1;
}


/*** Button ***/
.btn {
  font-weight: 500;
  transition: .5s;
}

.btn.btn-primary,
.btn.btn-secondary {
  color: #FFFFFF;
}

.btn-square {
  width: 38px;
  height: 38px;
}

.btn-sm-square {
  width: 32px;
  height: 32px;
}

.btn-lg-square {
  width: 48px;
  height: 48px;
}

.btn-square,
.btn-sm-square,
.btn-lg-square {
  padding: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: normal;
}


/*** Navbar ***/
.navbar.fixed-top {
  display: none;
  transition: .5s;
}

.navbar .navbar-nav .nav-link {
  padding: 20px 15px;
  color: var(--dark);
  font-size: 18px;
  font-weight: 600;
  outline: none;
}

.navbar .navbar-nav .nav-link:hover,
.navbar .navbar-nav .nav-link.active {
  color: var(--primary);
}

@media (max-width: 991.98px) {
  .navbar .navbar-nav .nav-link  {
    padding: 10px 0;
  }
}


/*** Header ***/
#home {
  margin-bottom: 6rem;
  background: url(img/bg-header.png) left top no-repeat;

.typed-cursor {
  font-size: 30px;
  color: var(--dark);

.btn-play {
  position: relative;
  display: block;
  box-sizing: content-box;
  width: 16px;
  height: 26px;
  border-radius: 100%;
  border: none;
  outline: none !important;
  padding: 18px 20px 20px 28px;
  background: var(--primary);
}

.btn-play:before {
  content: \"\";
  position: absolute;
  z-index: 0;
  left: 50%;
  top: 50%;
  transform: translateX(-50%) translateY(-50%);
  display: block;
  width: 60px;
  height: 60px;
  background: var(--primary);
  border-radius: 100%;
  animation: pulse-border 1500ms ease-out infinite;
}

.btn-play:after {
  content: \"\";
  position: absolute;
  z-index: 1;
  left: 50%;
  top: 50%;
  transform: translateX(-50%) translateY(-50%);
  display: block;
  width: 60px;
  height: 60px;
  background: #FFFFFF;
  border-radius: 100%;
  transition: all 200ms;
}

.btn-play span {
  display: block;
  position: relative;
  z-index: 3;
  width: 0;
  height: 0;
  left: -1px;
  border-left: 16px solid var(--primary);
  border-top: 11px solid transparent;
  border-bottom: 11px solid transparent;
}

@keyframes pulse-border {
  0% {
    transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
    opacity: 1;
  }

  100% {
    transform: translateX(-50%) translateY(-50%) translateZ(0) scale(2);
    opacity: 0;
  }
}

.modal-video .modal-dialog {
  position: relative;
  max-width: 800px;
  margin: 60px auto 0 auto;
}

.modal-video .modal-body {
  position: relative;
  padding: 0px;
}

.modal-video .close {
  position: absolute;
  width: 30px;
  height: 30px;
  right: 0px;
  top: -30px;
  z-index: 999;
  font-size: 30px;
  font-weight: normal;
  color: #FFFFFF;
  background: #000000;
  opacity: 1;
}


/*** About ***/
#about .years .display-1 {
  font-size: 10rem;
  line-height: 9rem;
}

#about .years h5 {
  letter-spacing: 30px;
  margin-right: -30px;
}


/*** Skills ***/
#skill .progress {
  height: 5px;
  border-radius: 5px;
}

#skill .progress .progress-bar {
  width: 0px;
  border-radius: 5px;
  transition: 3s;
}

#skill .nav-pills .nav-link {
  color: var(--dark);
}

#skill .nav-pills .nav-link.active {
  color: #FFFFFF;
}

#skill .tab-content hr {
  width: 30px;
}


/*** Service ***/
.service-item .bg-icon {
  width: 100px;
  height: 100px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: url(../../assets/img/bg-icon.png) center center no-repeat;
  background-size: cover;
}


/*** Project Portfolio ***/
#portfolio-flters li {
  display: inline-block;
  font-weight: 500;
  color: var(--dark);
  cursor: pointer;
  transition: .5s;
  border-bottom: 2px solid transparent;
}

#portfolio-flters li:hover,
#portfolio-flters li.active {
  color: var(--primary);
  border-color: var(--primary);
}

.portfolio-img {
  position: relative;
}

.portfolio-btn {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: rgba(98, 68, 197, .9);
  display: flex;
  align-items: flex-end;
  justify-content: flex-start;
  padding: 30px;
  padding-bottom: 100px !important;
  opacity: 0;
  transition: .5s;
}

.portfolio-item:hover .portfolio-btn {
  opacity: 1;
  padding-bottom: 30px !important;
}


/*** Team ***/
.team-item img {
  transition: .5s;
}

.team-item:hover img {
  opacity: .7;
}

.team-item .team-text {
  position: absolute;
  left: 0;
  right: 60px;
  bottom: 30px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  opacity: 0;
  transition: .5s;
}

.team-item:hover .team-text {
  right: 30px;
  opacity: 1;
}

.team-item .team-text div {
  transition: .5s;
}

.team-item:hover .team-text div {
  margin-left: 30px;
}


/*** Testimonial ***/
.testimonial-left,
.testimonial-right {
  position: relative;
}

.testimonial-left img,
.testimonial-right img {
  position: absolute;
  padding: 5px;
  border: 1px solid var(--secondary);
  border-radius: 70px;
}

.testimonial-left img:nth-child(1),
.testimonial-right img:nth-child(3) {
  width: 70px;
  height: 70px;
  top: 10%;
  left: 50%;
  transform: translateX(-50%);
}

.testimonial-left img:nth-child(2),
.testimonial-right img:nth-child(2) {
  width: 60px;
  height: 60px;
  top: 50%;
  left: 10%;
  transform: translateY(-50%);
}

.testimonial-left img:nth-child(3),
.testimonial-right img:nth-child(1) {
  width: 50px;
  height: 50px;
  bottom: 10%;
  right: 10%;
}

.testimonial-carousel .owl-item img {
  width: 120px;
  height: 120px;
}

.testimonial-carousel .testimonial-icon {
  position: absolute;
  width: 40px;
  height: 40px;
  left: 50%;
  bottom: -15px;
  transform: translateX(-50%);
  display: flex;
  align-items: center;
  justify-content: center;
  background: #FFFFFF;
  border: 1px solid var(--secondary);
  border-radius: 60px;
}

.testimonial-carousel .owl-dots {
  height: 40px;
  margin-top: 25px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.testimonial-carousel .owl-dot {
  position: relative;
  display: inline-block;
  margin: 0 5px;
  width: 30px;
  height: 30px;
  background: #FFFFFF;
  border: 2px solid var(--secondary);
  border-radius: 30px;
  transition: .5s;
}

.testimonial-carousel .owl-dot::after {
  position: absolute;
  content: \"\";
  width: 16px;
  height: 16px;
  top: 5px;
  left: 5px;
  border-radius: 16px;
  background: var(--secondary);
  transition: .5s;
}

.testimonial-carousel .owl-dot.active::after {
  background: var(--primary);
}
", "styles/test.scss", "/opt/project/templates/styles/test.scss");
    }
}
