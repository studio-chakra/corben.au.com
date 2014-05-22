<?php

/* styleguide */
class __TwigTemplate_c21583ae4e49fbec61021ef4e1909fab6400d0b2066d5061a8eda31059be1371 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layout");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"row\">
\t<div class=\"large12 columns\"> \t
\t\t\t
\t\t\t<h3 class=\"sg\">Typography</h3>
\t\t\t<hr class=\"sg\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"large-2 columns\">\t\t\t\t\t
\t\t\t\t\t<h4 class=\"sg-label\">Headings</h4>
\t\t\t\t\t<h1>Heading 1</h1>
\t\t\t\t\t<h2>Heading 2</h2>
\t\t\t\t\t<h3>Heading 3</h3>
\t\t\t\t\t<h4>Heading 4</h4>
\t\t\t\t\t<h5>Heading 5</h5>
\t\t\t\t\t<h6>Heading 6</h6>
\t\t\t\t</div>
\t\t\t  <div class=\"large-6 columns\">
\t\t\t  \t<h4 class=\"sg-label\">Paragraphs</h4>
\t\t\t  \t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi commodi harum alias autem in aliquid dolor magni optio voluptatibus consectetur accusantium voluptatum nesciunt possimus odit beatae quasi reprehenderit sint.</p>
\t\t\t\t\t<p>Quae architecto id eum laboriosam repellat assumenda odit repudiandae facere doloribus aliquid mollitia fugiat magnam. Magni molestiae iusto ipsum ullam deserunt maxime vel. Dolorum nihil esse deleniti ipsa nisi praesentium!</p>
\t\t\t  </div>
\t\t\t  <div class=\"large-4 columns\">
\t\t\t  \t<h4 class=\"sg-label\">Lists</h4>
\t\t\t  \t<ul class=\"no-bullet\">
\t\t\t  \t\t<li>Lorem ipsum dolor sit amet, consectetur. Lorem ipsum dolor sit amet, consectetur.</li>
\t\t\t  \t\t<li>Lorem ipsum dolor sit amet, consectetur.</li>
\t\t\t  \t\t<li>Lorem ipsum dolor sit amet, consectetur.</li>
\t\t\t  \t</ul>
\t\t\t  \t<h4 class=\"sg-label\">Links</h4>
\t\t\t  \t<a href=\"#\" class=\"btn btn-link\">View Project</a>
\t\t\t  </div>
\t\t\t</div>
\t\t\t
\t\t\t<hr class=\"sg\">
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"large-12 columns\">
\t\t\t\t\t<h4 class=\"sg-label\">Icons</h4>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"small-2 columns\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-double-down fa-3x\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"small-2 columns\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-right fa-3x\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"small-2 columns\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-left fa-3x\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"small-2 columns\">
\t\t\t\t\t\t\t<i class=\"fa fa-th fa-3x\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"small-2 columns\">
\t\t\t\t\t\t\t<span class=\"fa-stack fa-lg\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"small-2 columns\">
\t\t\t\t\t\t\t<span class=\"fa-stack fa-lg\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t<i class=\"fa fa-pinterest fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<h3 class=\"sg\">Molecules</h3>
\t\t\t<hr class=\"sg\">
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"large-6 columns\">
\t\t\t\t\t<h4 class=\"sg-label\">Awards</h4>
\t\t\t\t\t<section class=\"awards-list\">\t\t\t
\t\t\t\t\t\t<a class=\"award-block\">
\t\t\t\t\t\t\t<h6 class=\"award-title\">Avery-Wright House</h6>
\t\t\t\t\t\t\t<p class=\"award-subtitle\">Carrington Avenue Mosman</p>
\t\t\t\t\t\t\t<ul class=\"no-bullet award-notions-list\">
\t\t\t\t\t\t\t\t<li class=\"award-notion\">Commendation Mosman Good Design Awards 2011</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</a>\t\t\t
\t\t\t\t\t\t<a class=\"award-block\">
\t\t\t\t\t\t\t<h6 class=\"award-title\">Avery-Wright House</h6>
\t\t\t\t\t\t\t<p class=\"award-subtitle\">Carrington Avenue Mosman</p>
\t\t\t\t\t\t\t<ul class=\"no-bullet award-notions-list\">
\t\t\t\t\t\t\t\t<li class=\"award-notion\">Commendation Mosman Good Design Awards 2011</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"award-block\">
\t\t\t\t\t\t\t<h6 class=\"award-title\">Avery-Wright House</h6>
\t\t\t\t\t\t\t<p class=\"award-subtitle\">Carrington Avenue Mosman</p>
\t\t\t\t\t\t\t<ul class=\"no-bullet award-notions-list\">
\t\t\t\t\t\t\t\t<li class=\"award-notion\">Commendation Mosman Good Design Awards 2011</li>
\t\t\t\t\t\t\t\t<li class=\"award-notion\">Commendation Mosman Good Design Awards 2011</li>
\t\t\t\t\t\t\t\t<li class=\"award-notion\">Commendation Mosman Good Design Awards 2011</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</a>
\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t\t<div class=\"large-6 columns\">
\t\t\t\t\t<h4 class=\"sg-label\">Contact Details</h4>
\t\t\t\t\t<section class=\"contact-details\">
\t\t\t\t\t\t<h6 class=\"contact-hd\">Address</h6>
\t\t\t\t\t\t<p>suite 14, 40 Yeo St</p>
\t\t\t\t\t\t<p>Neutral Bay, NSW 2089</p>
\t\t\t\t\t\t<p class=\"contact-phone\"><strong>Telephone</strong> +61 (02) 9904 1844</p>
\t\t\t\t\t\t<p class=\"contact-fax\"><strong>Facsimile</strong> +61 (02) 9904 1855</p>
\t\t\t\t\t\t<p class=\"contact-email\"><strong>Email</strong> <a href=\"mailxa@corben.com.au\">mailxa@corben.com.au</a></p>
\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<hr class=\"sg\">
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"large-12 columns\">
\t\t\t\t\t<h4 class=\"sg-label\">Project Details</h4>
\t\t\t\t\t<section class=\"project-panel\">
\t\t\t\t\t\t<h2 class=\"project-title\">Project Title <span class=\"divider\">|</span> <small class=\"project-client\">Client</small></h2>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"large-2 small-4 columns project-details\">
\t\t\t\t\t\t\t\t<ul class=\"no-bullet project-details-list\">
\t\t\t\t\t\t\t\t\t<li class=\"project-detail-item\"><strong class=\"project-detail-label\">Completed:</strong> YYYY</li>
\t\t\t\t\t\t\t\t\t<li class=\"project-detail-item\"><strong class=\"project-detail-label\">Builder:</strong> Builder</li>
\t\t\t\t\t\t\t\t\t<li class=\"project-detail-item\"><strong class=\"project-detail-label\">Area:</strong> #sqm</li>
\t\t\t\t\t\t\t\t\t<li class=\"project-detail-item\"><strong class=\"project-detail-label\">Photographer:</strong> First Last</li>
\t\t\t\t\t\t\t\t\t<li class=\"project-detail-item\"><a href=\"\" class=\"btn btn-link btn-project-pdf\">Download PDF</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"large10 small-8 columns project-description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus sequi voluptatem voluptatum perspiciatis sed consequatur assumenda ratione id dolor alias provident rem modi deserunt odit laboriosam pariatur exercitationem atque quo?</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"large-12 columns\">
\t\t\t\t\t<h4 class=\"sg-label\">Project Nav Bar</h4>
\t\t\t\t\t<div class=\"project-navbar\">
\t\t\t\t\t\t<a href=\"\" class=\"btn btn-proj-gallery\"><i class=\"fa fa-th\"></i></a>
\t\t\t\t\t\t<a href=\"\" class=\"btn btn-proj-overview\">Project Overview</a>
\t\t\t\t\t\t<ul class=\"pagination project-pagination\">
\t\t\t\t\t\t  <li class=\"current\"><a href=\"\">1</a></li>
\t\t\t\t\t\t  <li><a href=\"\">2</a></li>
\t\t\t\t\t\t  <li><a href=\"\">3</a></li>
\t\t\t\t\t\t  <li><a href=\"\">4</a></li>
\t\t\t\t\t\t  <li><a href=\"\">12</a></li>
\t\t\t\t\t\t  <li><a href=\"\">13</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"large-12 columns\">
\t\t\t\t\t<h4 class=\"sg-label\">Team Grid</h4>
\t\t\t\t\t<ul class=\"team-grid\">
\t\t\t\t\t  <li class=\"team-item\">
\t\t\t\t\t  \t<div class=\"employee\">
\t\t\t\t\t\t  \t<img class=\"emp-photo\" src=\"http://placehold.it/480x320\" />
\t\t\t\t\t\t\t\t<h2 class=\"emp-name\">First Last <small class=\"emp-position\">Postition</small></h2>
\t\t\t\t\t\t\t\t<p class=\"emp-job\">B.Sc. (Arch) B Arch (Hon) FRAIA  Registration 4616</p>
\t\t\t\t\t\t\t\t<p class=\"emp-bio\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus sequi voluptatem voluptatum perspiciatis sed consequatur assumenda ratione id dolor alias provident rem modi deserunt odit laboriosam pariatur exercitationem atque quo?</p>
\t\t\t\t\t  \t</div>
\t\t\t\t\t  </li>
\t\t\t\t\t  <li class=\"team-item\">
\t\t\t\t\t\t\t<div class=\"employee\">
\t\t\t\t\t\t \t\t<img class=\"emp-photo\" src=\"http://placehold.it/480x320\" />
\t\t\t\t\t\t \t\t<h2 class=\"emp-name\">First Last <small class=\"emp-position\">Postition</small></h2>
\t\t\t\t\t\t \t\t<p class=\"emp-job\">B.Sc. (Arch) B Arch (Hon) FRAIA  Registration 4616</p>
\t\t\t\t\t\t \t\t<p class=\"emp-bio\">Minus sequi voluptatem voluptatum perspiciatis sed consequatur assumenda ratione id dolor alias provident rem modi deserunt odit laboriosam pariatur exercitationem atque quo?</p>
\t\t\t\t\t\t \t</div>
\t\t\t\t\t  </li>
\t\t\t\t\t  <li class=\"team-item\">
\t\t\t\t\t\t\t<div class=\"employee\">
\t\t\t\t\t\t  \t<img class=\"emp-photo\" src=\"http://placehold.it/480x320\" />
\t\t\t\t\t\t\t\t<h2 class=\"emp-name\">First Last <small class=\"emp-position\">Postition</small></h2>
\t\t\t\t\t\t\t\t<p class=\"emp-job\">B.Sc. (Arch) B Arch (Hon) FRAIA  Registration 4616</p>
\t\t\t\t\t\t\t\t<p class=\"emp-bio\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus sequi voluptatem voluptatum perspiciatis sed consequatur assumenda ratione id dolor alias provident rem modi deserunt odit laboriosam pariatur exercitationem atque quo?</p>
\t\t\t\t\t  \t</div>
\t\t\t\t\t  </li>
\t\t\t\t\t  <li class=\"team-item\">
\t\t\t\t\t\t\t<div class=\"employee\">
\t\t\t\t\t\t  \t<img class=\"emp-photo\" src=\"http://placehold.it/480x320\" />
\t\t\t\t\t\t\t\t<h2 class=\"emp-name\">First Last <small class=\"emp-position\">Postition</small></h2>
\t\t\t\t\t\t\t\t<p class=\"emp-job\">B.Sc. (Arch) B Arch (Hon) FRAIA  Registration 4616</p>
\t\t\t\t\t\t\t\t<p class=\"emp-bio\">Minus sequi voluptatem voluptatum perspiciatis sed consequatur assumenda ratione id dolor alias provident rem modi deserunt odit laboriosam pariatur exercitationem atque quo?</p>
\t\t\t\t\t  \t</div>
\t\t\t\t\t  </li>
\t\t\t\t\t  <li class=\"team-item\">
\t\t\t\t\t\t\t<div class=\"employee\">
\t\t\t\t\t\t  \t<img class=\"emp-photo\" src=\"http://placehold.it/480x320\" />
\t\t\t\t\t\t\t\t<h2 class=\"emp-name\">First Last <small class=\"emp-position\">Postition</small></h2>
\t\t\t\t\t\t\t\t<p class=\"emp-job\">B.Sc. (Arch) B Arch (Hon) FRAIA  Registration 4616</p>
\t\t\t\t\t\t\t\t<p class=\"emp-bio\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus sequi voluptatem voluptatum perspiciatis sed consequatur assumenda ratione id dolor alias provident rem modi deserunt odit laboriosam pariatur exercitationem atque quo?</p>
\t\t\t\t\t  \t</div>
\t\t\t\t\t  </li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- ISOTOPE
\t\t\t\t\t<div id=\"team-grid\" class=\"js-isotope\" data-isotope-options='{ \"itemSelector\": \".employee\" }'>
\t\t\t\t\t  <div class=\"employee\">
\t\t\t\t\t\t  <img class=\"emp-photo\" src=\"http://placehold.it/292x195\" />
\t\t\t\t\t\t  <h2 class=\"emp-name\">First Last <small class=\"emp-position\">Postition</small></h2>
\t\t\t\t\t\t  <p class=\"emp-job\">B.Sc. (Arch) B Arch (Hon) FRAIA  Registration 4616</p>
\t\t\t\t\t\t  <p class=\"emp-bio\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus sequi voluptatem voluptatum perspiciatis sed consequatur assumenda ratione id dolor alias provident rem modi deserunt odit laboriosam pariatur exercitationem atque quo?</p>
\t\t\t\t\t  </div>
\t\t\t\t\t\t<div class=\"employee\">
\t\t\t\t\t\t  <img class=\"emp-photo\" src=\"http://placehold.it/292x195\" />
\t\t\t\t\t\t  <h2 class=\"emp-name\">First Last <small class=\"emp-position\">Postition</small></h2>
\t\t\t\t\t\t  <p class=\"emp-job\">B.Sc. (Arch) B Arch (Hon) FRAIA  Registration 4616</p>
\t\t\t\t\t\t  <p class=\"emp-bio\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus sequi voluptatem voluptatum perspiciatis sed consequatur assumenda ratione id dolor alias provident rem modi deserunt odit laboriosam pariatur exercitationem atque quo?</p>
\t\t\t\t\t  </div>
\t\t\t\t\t\t<div class=\"employee\">
\t\t\t\t\t\t  <img class=\"emp-photo\" src=\"http://placehold.it/292x195\" />
\t\t\t\t\t\t  <h2 class=\"emp-name\">First Last <small class=\"emp-position\">Postition</small></h2>
\t\t\t\t\t\t  <p class=\"emp-job\">B.Sc. (Arch) B Arch (Hon) FRAIA  Registration 4616</p>
\t\t\t\t\t\t  <p class=\"emp-bio\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus sequi voluptatem voluptatum perspiciatis sed consequatur assumenda ratione id dolor alias provident rem modi deserunt odit laboriosam pariatur exercitationem atque quo?</p>
\t\t\t\t\t  </div>
\t\t\t\t\t\t<div class=\"employee\">
\t\t\t\t\t\t  <img class=\"emp-photo\" src=\"http://placehold.it/292x195\" />
\t\t\t\t\t\t  <h2 class=\"emp-name\">First Last <small class=\"emp-position\">Postition</small></h2>
\t\t\t\t\t\t  <p class=\"emp-job\">B.Sc. (Arch) B Arch (Hon) FRAIA  Registration 4616</p>
\t\t\t\t\t\t  <p class=\"emp-bio\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus sequi voluptatem voluptatum perspiciatis sed consequatur assumenda ratione id dolor alias provident rem modi deserunt odit laboriosam pariatur exercitationem atque quo?</p>
\t\t\t\t\t  </div>
\t\t\t\t\t\t<div class=\"employee\">
\t\t\t\t\t\t  <img class=\"emp-photo\" src=\"http://placehold.it/292x195\" />
\t\t\t\t\t\t  <h2 class=\"emp-name\">First Last <small class=\"emp-position\">Postition</small></h2>
\t\t\t\t\t\t  <p class=\"emp-job\">B.Sc. (Arch) B Arch (Hon) FRAIA  Registration 4616</p>
\t\t\t\t\t\t  <p class=\"emp-bio\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus sequi voluptatem voluptatum perspiciatis sed consequatur assumenda ratione id dolor alias provident rem modi deserunt odit laboriosam pariatur exercitationem atque quo?</p>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t-->
\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<hr class=\"sg\">
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"large-8 columns\">
\t\t\t\t\t<h4 class=\"sg-label\">Contact Form</h4>
\t\t\t\t\t<section class=\"contactus-form\">
\t\t\t\t\t\t<form class=\"contact-form\">
\t\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t    <div class=\"large-7 columns\">
\t\t\t\t\t\t      <label>Name
\t\t\t\t\t\t        <input type=\"text\" placeholder=\"\" />
\t\t\t\t\t\t      </label>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t    <div class=\"large-7 columns\">
\t\t\t\t\t\t      <label>Email
\t\t\t\t\t\t        <input type=\"email\" placeholder=\"\" />
\t\t\t\t\t\t      </label>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"large-5 columns\">
\t\t\t\t\t\t      <label>Phone
\t\t\t\t\t\t        <input type=\"tel\" placeholder=\"\" />
\t\t\t\t\t\t      </label>
\t\t\t\t\t\t    </div>\t\t\t    
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t    <div class=\"large-12 columns\">
\t\t\t\t\t\t      <label>Message
\t\t\t\t\t\t        <textarea rows=\"4\" placeholder=\"\"></textarea>
\t\t\t\t\t\t      </label>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t    <div class=\"large-12 columns\">
\t\t\t\t\t\t      <button class=\"button\">Send</button>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t\t<div class=\"large-4 columns\">
\t\t\t\t\t<h4 class=\"sg-label\">Pagination</h4>
\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t  <li class=\"current\"><a href=\"\">1</a></li>
\t\t\t\t\t  <li><a href=\"\">2</a></li>
\t\t\t\t\t  <li><a href=\"\">3</a></li>
\t\t\t\t\t  <li><a href=\"\">4</a></li>
\t\t\t\t\t  <li><a href=\"\">12</a></li>
\t\t\t\t\t  <li><a href=\"\">13</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<h3 class=\"sg\">Media</h3>
\t\t\t<hr class=\"sg\">
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"large-12 columns\">
\t\t\t\t\t<h4 class=\"sg-label\">Contact Google Map</h4>
\t\t\t\t\t<section class=\"contact-map\">
\t\t\t\t\t\t<div class=\"google-map\">
\t\t\t\t\t\t\t<iframe width=\"1440\" height=\"500\" frameborder=\"0\" style=\"border:0\" src=\"https://www.google.com/maps/embed/v1/place?q=Suite%2014%2C%2040%20Yeo%20St%20Neutral%20Bay%2C%20NSW%202089&key=AIzaSyBiAD2tlzv1CXVhOPFqf-bLDk_nM4k1EC8\"></iframe>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<hr class=\"sg\">
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"large-12 columns\">
\t\t\t\t\t<h4 class=\"sg-label\">Slider</h4>
\t\t\t\t\t<section class=\"carousel\">
\t\t\t\t\t\t<div id=\"home-carousel\" class=\"owl-carousel corben-carousel\"> 
\t\t\t\t\t\t\t<div class=\"carousel-item home-carousel-item\"><img src=\"http://placehold.it/1470x830\" alt=\"Slide One\" /></div>
\t\t\t\t\t\t\t<div class=\"carousel-item home-carousel-item\"><img src=\"http://placehold.it/1470x830\" alt=\"Slide Two\" /></div>
\t\t\t\t\t\t\t<div class=\"carousel-item home-carousel-item\"><img src=\"http://placehold.it/1470x830\" alt=\"Slide Three\" /></div> 
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<hr class=\"sg\">
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"large-4 columns\">
\t\t\t\t\t<h4 class=\"sg-label\">2 Column Default Page Layout (4/8)</h4>
\t\t\t\t\t{content column}
\t\t\t\t</div>
\t\t\t\t<div class=\"large-8 columns\">
\t\t\t\t\t<h4 class=\"sg-label\">Page Image</h4>
\t\t\t\t\t<img src=\"http://placehold.it/1050x700\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<hr class=\"sg\">
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"large-12 columns\">
\t\t\t\t\t<h4 class=\"sg-label\">Project Grid</h4>
\t\t\t\t\t<ul class=\"project-grid project-grid-hover\">
\t\t\t\t\t  <li class=\"project-grid-item\">
\t\t\t\t\t  \t<a href=\"#\" class=\"project-thumb\">
\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t<img class=\"project-thumb-img\" src=\"http://placehold.it/480x320\" />
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"project-thumb-title\">Project Name <span class=\"project-thumb-client\">| Client</span></h6>
\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t  \t</a>
\t\t\t\t\t  </li>
\t\t\t\t\t  <li class=\"project-grid-item\">
\t\t\t\t\t  \t<a href=\"#\" class=\"project-thumb\">
\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t<img class=\"project-thumb-img\" src=\"http://placehold.it/480x320\" />
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"project-thumb-title\">Project Name <span class=\"project-thumb-client\">| Client</span></h6>
\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t  \t</a>
\t\t\t\t\t  </li>
\t\t\t\t\t  <li class=\"project-grid-item\">
\t\t\t\t\t  \t<a href=\"#\" class=\"project-thumb\">
\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t<img class=\"project-thumb-img\" src=\"http://placehold.it/480x320\" />
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"project-thumb-title\">Project Name <span class=\"project-thumb-client\">| Client</span></h6>
\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t  \t</a>
\t\t\t\t\t  </li>
\t\t\t\t\t  <li class=\"project-grid-item\">
\t\t\t\t\t  \t<a href=\"#\" class=\"project-thumb\">
\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t<img class=\"project-thumb-img\" src=\"http://placehold.it/480x320\" />
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"project-thumb-title\">Project Name <span class=\"project-thumb-client\">| Client</span></h6>
\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t  \t</a>
\t\t\t\t\t  </li>
\t\t\t\t\t  <li class=\"project-grid-item\">
\t\t\t\t\t  \t<a href=\"#\" class=\"project-thumb\">
\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t<img class=\"project-thumb-img\" src=\"http://placehold.it/480x320\" />
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"project-thumb-title\">Project Name <span class=\"project-thumb-client\">| Client</span></h6>
\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t  \t</a>
\t\t\t\t\t  </li>
\t\t\t\t\t  <li class=\"project-grid-item\">
\t\t\t\t\t  \t<a href=\"#\" class=\"project-thumb\">
\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t<img class=\"project-thumb-img\" src=\"http://placehold.it/480x320\" />
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"project-thumb-title\">Project Name <span class=\"project-thumb-client\">| Client</span></h6>
\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t  \t</a>
\t\t\t\t\t  </li>
\t\t\t\t\t  <li class=\"project-grid-item\">
\t\t\t\t\t  \t<a href=\"#\" class=\"project-thumb\">
\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t<img class=\"project-thumb-img\" src=\"http://placehold.it/480x320\" />
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"project-thumb-title\">Project Name <span class=\"project-thumb-client\">| Client</span></h6>
\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t  \t</a>
\t\t\t\t\t  </li>
\t\t\t\t\t  <li class=\"project-grid-item\">
\t\t\t\t\t  \t<a href=\"#\" class=\"project-thumb\">
\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t<img class=\"project-thumb-img\" src=\"http://placehold.it/480x320\" />
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"project-thumb-title\">Project Name <span class=\"project-thumb-client\">| Client</span></h6>
\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t  \t</a>
\t\t\t\t\t  </li>
\t\t\t\t\t  <li class=\"project-grid-item\">
\t\t\t\t\t  \t<a href=\"#\" class=\"project-thumb\">
\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t<img class=\"project-thumb-img\" src=\"http://placehold.it/480x320\" />
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"project-thumb-title\">Project Name <span class=\"project-thumb-client\">| Client</span></h6>
\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t  \t</a>
\t\t\t\t\t  </li>
\t\t\t\t\t  <li class=\"project-grid-item\">
\t\t\t\t\t  \t<a href=\"#\" class=\"project-thumb\">
\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t<img class=\"project-thumb-img\" src=\"http://placehold.it/480x320\" />
\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"project-thumb-title\">Project Name <span class=\"project-thumb-client\">| Client</span></h6>
\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t  \t</a>
\t\t\t\t\t  </li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t



\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "styleguide";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
