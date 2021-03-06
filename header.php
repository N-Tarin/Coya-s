<!DOCTYPE html>
<html lang="En">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title>Coya's Handmade</title>
</head>
<body>
  <div class="body">
    <header class="header__pc">
      <h1 class="header__logo">
        <a href="./index.html">
          <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="">
        </a>
      </h1><!-- /.header__logo -->

      <nav class="header__nav">
        <ul class="header__nav__items">

          <li class="header__nav__item">
            <a class="-category js__category__button" href="">
              Category 
            </a>
          </li><!-- /.header__nav__item -->

          <li class="header__nav__item">
            <a href="./information.html">
              Information
            </a>
          </li><!-- /.header__nav__item -->

          <li class="header__nav__item">
            <a href="./about.html">
              About us
            </a>
          </li><!-- /.header__nav__item -->

        </ul><!-- /.header__nav__items -->
      </nav><!-- /.header__nav -->

      <nav class="category__nav js__category__nav__items">
        <ul class="category__nav__items">

          <li class="category__nav__item">
            <a href="./category.html">
              View all
            </a>
          </li><!-- /.category__nav__item -->
          
          <li class="category__nav__item">
            <a href="">
              Earrings
            </a>
          </li><!-- /.category__nav__item -->
          
          <li class="category__nav__item">
            <a href="">
              Pendant
            </a>
          </li><!-- /.category__nav__item -->

          <li class="category__nav__item">
            <a href="">
              Bracelets
            </a>
          </li><!-- /.category__nav__item -->

          <li class="category__nav__item">
            <a href="">
              Set collection
            </a>
          </li><!-- /.category__nav__item -->

          <li class="category__nav__item">
            <a href="">
              Homewre
            </a>
          </li><!-- /.category__nav__item -->

        </ul><!-- /.category__nav__items -->

      </nav><!-- /.header__nav -->
    </header><!-- /.header -->

    <header class="header__sp">
      <div class="header__sp__logoWrapper">
        <h1 class="header__sp__logo">
          <a href="./index.html">
            <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="">
          </a>
        </h1><!-- /.header__logo -->
  
        <button class="header__sp__button js__header__sp__button">
          <i class="fas fa-bars"></i>
        </button><!-- /.header__sp__button -->
      </div><!-- /.header__sp__logoWrapper -->

      <nav class="header__sp__nav">
        <ul class="header__sp__nav__items js__header__sp__nav__items">
          <li class="header__sp__nav__item">
            <a class="js__category__sp__button" href="">
              Category
              <i id="js__category__icon" class="fas fa-angle-down"></i>
            </a>

            <ul class="category__sp__nav__items js__category__sp__nav__items">
              <li class="category__sp__nav__item">
                <a href="./category.html">
                  View all
                </a>
              </li><!-- /.category__sp__nav__item -->
              
              <li class="category__sp__nav__item">
                <a href="">
                  Earrings
                </a>
              </li><!-- /.category__sp__nav__item -->
              
              <li class="category__sp__nav__item">
                <a href="">
                  Pendant
                </a>
              </li><!-- /.category__sp__nav__item -->
    
              <li class="category__sp__nav__item">
                <a href="">
                  Hair accessories
                </a>
              </li><!-- /.category__sp__nav__item -->
    
              <li class="category__sp__nav__item">
                <a href="">
                  Set collection
                </a>
              </li><!-- /.category__sp__nav__item -->
    
              <li class="category__sp__nav__item">
                <a href="">
                  Homewre
                </a>
              </li><!-- /.category__sp__nav__item -->
            </ul><!-- /.category__sp__nav__items -->
          </li><!-- /.header__sp__nav__item -->
          
          <li class="header__sp__nav__item">
            <a href="./information.html">
              Information
            </a>
          </li><!-- /.header__sp__nav__item -->

          <li class="header__sp__nav__item">
            <a href="./about.html">
              About us
            </a>
          </li><!-- /.header__sp__nav__item -->

        </ul><!-- /.header__sp__nav__items -->
      </nav><!-- /.header__sp__nav -->
    </header><!-- /.header -->
