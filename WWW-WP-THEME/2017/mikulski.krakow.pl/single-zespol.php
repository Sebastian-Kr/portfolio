<?php
/*
 * Template Name: Zespół
 * Template Post Type: post
 */
?>

<?php get_header() ?>


<div class="page-content">
    <div class="container">
        <div class="title text-center"><h2></h2></div>
        <div class="page-container">
            <div class="col-sm-12 col-md-5">
                <div class="people-photo">
                    <img alt="<?php echo the_title() ?>" class="img-responsive" src="<?php the_post_thumbnail_url(); ?> ">
                </div>
            </div>
            <div class="col-sm-12 col-md-7 people-content">
                <div class="people-title"><h1><?php echo the_title() ?></h1><br><span><?php the_field('subtitle1') ?></span><a href="<?php echo get_page_link(13); ?>">powrót do listy Prawników</a></div>
                <div class="prgrm-clearfix"></div>
                <div class="people-text">


                  <?php
                  if ( have_posts() ) {
                    while ( have_posts() ) {
                      the_post();
                  if (get_the_content()){
                            the_content();
                  } // end is content statment
                    } // end while
                  } // end if
                  ?>

          </div>

          <!-- <?php next_post_link( '<strong>%link</strong>' ); ?> -->
          <?php next_post_link( '%link', '<div class="next"></div> ', TRUE, '' ); ?>
          <?php previous_post_link( '%link', '<div class="prev"></div> ', TRUE, '' ); ?>
             <!-- <a class="next" href=""></a> -->
          </div>

<?php if (get_field('add_wyceny')): ?>
  <div class="col-sm-12 col-md-12 glowny-kontener rel">



                  <!--<h1>Maria Bogdani</h1>
                  <p>
                      specjalizuje się w skomplikowanych sprawach związanych z tematyką nieruchomości i wyceną
                      ich wartości rynkowej oraz wyceną rozmaitych praw do nieruchomości – w szczególności
                      nieruchomości gruntowych – gruntów deweloperskich i inwestycyjnych, nieruchomości
                      komercyjnych - biurowców i hoteli oraz nieruchomości zabytkowych i innych dla celów:
                  </p>
                  <ul>
                      <li>kupna – sprzedaży,</li>
                      <li>jako podstawy do podjęcia decyzji inwestycyjnych – w tym analizy rozwiązań
                          alternatywnych,
                      </li>
                      <li>dokumentacji finansowej przy aportach nieruchomości do spółek,</li>
                      <li>wartości dla zabezpieczenia wierzytelności kredytowych,</li>
                      <li>odszkodowania za wywłaszczone nieruchomości,</li>
                      <li>odszkodowania z tytułu decyzji planistycznych (renta planistyczna)</li>
                      <li>opłat za użytkowanie wieczyste gruntu,</li>
                      <li>racjonalnego podziału majątku osób fizycznych lub prawnych,</li>
                      <li>wyznaczenia czynszu dzierżawnego,</li>
                      <li>ubezpieczenia nieruchomości,</li>
                      <li>wydzielenia z nieruchomości części o różnym stopniu amortyzacji.</li>
                  </ul>


                  <h3>Wykształcenie</h3>
                  <ul>
                      <li>mgr inż. budownictwa, Politechnika Krakowska, wydział Budownictwa</li>
                      <li>mgr historii sztuki, Uniwersytet Jagielloński, wydział Filozoficzno- Historyczny</li>
                      <li>studia podyplomowe - Uniwersytet Ekonomiczny w Krakowie, Katedra Ekonomiki Nieruchomości
                          i Procesu Inwestycyjnego</li>
                  </ul>


                  <h3>Uprawnienia</h3>
                  <ul>
                      <li>rzeczoznawca majątkowy - uprawnienia nr 139 z 1992 r. nadane przez Ministra
                          Gospodarki Przestrzennej i Budownictwa</li>
                      <li>pośrednik w obrocie nieruchomościami – licencja nr 1758 z 2001 r. nadana przez
                          Ministra Gospodarki Przestrzennej i Budownictwa</li>
                      <li>REV - Recognised European Valuer – europejski tytuł uznania zawodowego 2008</li>
                      <li>biegła Sądu Okręgowego w Krakowie w zakresie szacowania nieruchomości</li>
                  </ul>



                  <h3>Stypendia zagraniczne</h3>
                  <ul>
                      <li>British Council – University of Reading UK, College of Estate Management</li>
                      <li>Batory Foundation – Oxford University UK, Corpus Christi College</li>
                  </ul>



                  <h3>Działalność zawodowa i dydaktyczna</h3>
                  <ul>
                      <li>wykładowca Studiów Podyplomowych na Wydziale Architektury Politechniki Krakowskiej
                          w zakresie inwestowania i wyceny nieruchomości zabytkowych oraz renty planistycznej
                          – od 2001</li>
                      <li>współorganizatorka ogólnopolskich Konferencji WAZA wyceny nieruchomości
                          zabytkowych - od 1997</li>
                      <li>członek Komisji Opiniującej przy Małopolskim Stowarzyszeniu Rzeczoznawców
                          Majątkowych – od 2012</li>
                      <li>współautorka założeń do standardu zawodowego rzeczoznawców majątkowych -
                          Standard V.3 „Wycena Nieruchomości Zabytkowych”</li>
                      <li>autorka szeregu artykułów w pismach branżowych i wystąpień na konferencjach
                          poświęconych inwestowaniu i wycenie nieruchomości</li>
                      <li>współautorka z prof. Zbigniewem K. Zuziakiem publikacji „Współpraca gminy z
                          deweloperami”, wyd. LGPP, Warszawa 2000</li>
                  </ul>-->

                       <?php echo the_field('add_wyceny') ?>

              </div>
<?php endif; ?>

        </div>
    </div>
</div>
<div class="mt50"></div>

<?php echo the_field('add_wycena') ?>

<?php get_footer() ?>
